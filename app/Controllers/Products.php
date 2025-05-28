<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Products extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';
    protected $format    = 'json';

    // Display all products
    public function index()
    {
        $products = $this->model->findAll();
        return $this->respond(['products' => $products]);
    }

    // Show a single product
    public function show($id = null)
    {
        $product = $this->model->find($id);
        if (!$product) {
            return $this->failNotFound('Product not found');
        }
        return $this->respond(['product' => $product]);
    }

    // Store a new product
    public function create()
    {
        $data = $this->request->getJSON(true);
        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respondCreated(['message' => 'Product created successfully']);
    }

    // Update a product
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        if (!$this->model->update($id, $data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respond(['message' => 'Product updated successfully']);
    }

    // Delete a product
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Product not found');
        }
        return $this->respondDeleted(['message' => 'Product deleted successfully']);
    }
}
