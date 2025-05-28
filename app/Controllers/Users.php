<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Controllers\Auth;

// Ensure the UserModel class exists in the App\Models namespace

class Users extends ResourceController
{
    protected $modelName = UserModel::class;
    protected $format    = 'json';

    // Obtener todos los usuarios
    public function index()
    {
        $usuarios = $this->model->findAll();
        return $this->respond($usuarios);
    }

    // Obtener un usuario por ID
    public function show($id = null)
    {
        $usuario = $this->model->find($id);
        if (!$usuario) {
            return $this->failNotFound('Usuario no encontrado');
        }
        return $this->respond($usuario);
    }

    // Crear un nuevo usuario
    public function create()
    {
        $datos = $this->request->getPost();
        if (!$this->model->insert($datos)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respondCreated(['mensaje' => 'Usuario creado exitosamente']);
    }

    // Actualizar un usuario existente
    public function update($id = null)
    {
        $datos = $this->request->getRawInput();
        if (!$this->model->update($id, $datos)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respond(['mensaje' => 'Usuario actualizado exitosamente']);
    }

    // Eliminar un usuario
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Usuario no encontrado o ya eliminado');
        }
        return $this->respondDeleted(['mensaje' => 'Usuario eliminado exitosamente']);
    }
}