<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class Auth extends BaseController
{
    public function login() {
        try {
            $email    = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $usuarioModel = new UserModel();
            $usuario = $usuarioModel->where('email', $email)->first();
            
            if (!$usuario) {
                return $this->response->setStatusCode(401)->setJSON(['message' => 'Usuario o contraseña incorrectos']);
            }
            
            if (!password_verify($password, $usuario['password'])) {
                return $this->response->setStatusCode(401)->setJSON(['message' => 'Usuario o contraseña incorrectos']);
            }
        
            // Generar JWT
            $key = $_ENV['JWT_SECRET'];
            $payload = [
                'iat' => time(),
                'exp' => time() + (60 * 60 * 24), // 24 horas
                'uid' => $usuario['id'],
                'email' => $usuario['email'],
                'nombre' => $usuario['nombre']
            ];
            $jwt = JWT::encode($payload, $key, 'HS256');

            return $this->response->setJSON([
                'token' => $jwt,
                'usuario' => [
                    'id' => $usuario['id'],
                    'nombre' => $usuario['nombre'],
                    'email' => $usuario['email']
                ]
            ]);
        } catch (Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'message' => 'Error en el servidor.',
                'error'   => $e->getMessage()
            ]);
        }
    }
    public function logout(){
        $authHeader = $this->request->getHeaderLine('Authorization');

        if (!$authHeader || !preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            return $this->response->setStatusCode(401)->setJSON(['message' => 'Token no proporcionado.']);
        }

        $token = $matches[1];
        $key   = $_ENV['JWT_SECRET'];

        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            // Save to blacklist
            $db = \Config\Database::connect();
            $db->table('blacklisted_tokens')->insert([
                'token' => $token,
                'expired_at' => date('Y-m-d H:i:s', $decoded->exp)
            ]);

            return $this->response->setJSON(['message' => 'Sesión cerrada exitosamente.']);

        } catch (\Exception $e) {
            return $this->response->setStatusCode(400)->setJSON(['message' => 'Token inválido.', 'error' => $e->getMessage()]);
        }
    }
    public function resetPassword(){
        $token    = $this->request->getVar('token');
        $newPass  = $this->request->getVar('password');

        if (!$token || !$newPass) {
            return $this->response->setStatusCode(400)->setJSON(['message' => 'Token y contraseña son requeridos.']);
        }

        $usuarioModel = new UserModel();
        $usuario = $usuarioModel->where('reset_token', $token)->first();

        if (!$usuario) {
            return $this->response->setStatusCode(404)->setJSON(['message' => 'Token inválido.']);
        }

        if (strtotime($usuario['reset_token_expiration']) < time()) {
            return $this->response->setStatusCode(410)->setJSON(['message' => 'El enlace ha expirado.']);
        }

        // Update password and clear token
        $usuarioModel->update($usuario['id'], [
            'password' => password_hash($newPass, PASSWORD_DEFAULT),
            'reset_token' => null,
            'reset_token_expiration' => null
        ]);

        return $this->response->setJSON(['message' => 'Contraseña actualizada exitosamente.']);
    }
    public function requestPasswordReset(){
        $email = $this->request->getVar('email');

        if (!$email) {
            return $this->response->setStatusCode(400)->setJSON(['message' => 'Email requerido.']);
        }

        $usuarioModel = new UserModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        if (!$usuario) {
            return $this->response->setStatusCode(404)->setJSON(['message' => 'Usuario no encontrado.']);
        }

        $token = bin2hex(random_bytes(32));
        $expires = date('Y-m-d H:i:s', time() + 3600); // 1 hour

        // Save the token and expiration
        $usuarioModel->update($usuario['id'], [
            'reset_token' => $token,
            'reset_token_expiration' => $expires
        ]);

        $resetLink = base_url("reset-password?token=$token");

        // Send email
        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setSubject('Recupera tu contraseña');
        $emailService->setMessage("Haz clic en el siguiente enlace para restablecer tu contraseña:\n\n$resetLink\n\nEste enlace expirará en 1 hora.");
        
        if ($emailService->send()) {
            return $this->response->setJSON(['message' => 'Correo enviado con instrucciones para restablecer la contraseña.']);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['message' => 'No se pudo enviar el correo.']);
        }
    }
}
