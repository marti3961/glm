<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Contactanos extends ResourceController
{
    protected $modelName = 'App\Models\ContactanosModel';
    protected $format    = 'json';

    // Display all mensajes
    public function index()
    {
        $mensajes = $this->model->findAll();
        return $this->respond(['mensajes' => $mensajes]);
    }

    // Show a single mensaje
    public function show($id = null)
    {
        $mensaje = $this->model->find($id);
        if (!$mensaje) {
            return $this->failNotFound('Mensaje not found');
        }
        return $this->respond(['mensaje' => $mensaje]);
    }

    // Delete a mensaje
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Product not found');
        }
        return $this->respondDeleted(['message' => 'Product deleted successfully']);
    }
}
