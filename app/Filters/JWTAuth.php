<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class JWTAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $authHeader = $request->getHeaderLine('Authorization');

        if (!$authHeader || !preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['message' => 'Token no proporcionado o malformado.']);
        }

        $token = $matches[1];

        try {
            $decoded = JWT::decode($token, new Key($_ENV['JWT_SECRET'], 'HS256'));

            // Opcional: Puedes guardar el usuario en el request para usarlo después
            $request->user = $decoded;

        } catch (Exception $e) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON(['message' => 'Token inválido', 'error' => $e->getMessage()]);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No hace nada en after
    }
}
