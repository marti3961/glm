<?php
namespace App\Controllers;
use App\Models\ProjectModel;
use CodeIgniter\RESTful\ResourceController;

class Projects extends ResourceController
{
    protected $modelName = ProjectModel::class;
    protected $format    = 'json';

    // List all projects
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Show a single project
    public function show($id = null)
    {
        $project = $this->model->find($id);
        if (!$project) {
            return $this->failNotFound('Project not found');
        }
        return $this->respond($project);
    }

    // Create a new project
    public function create()
    {
        $data = $this->request->getPost();
        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respondCreated($this->model->find($this->model->insertID()));
    }

    // Update an existing project
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if (!$this->model->update($id, $data)) {
            return $this->failValidationErrors($this->model->errors());
        }
        return $this->respond($this->model->find($id));
    }

    // Delete a project
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Project not found');
        }
        return $this->respondDeleted(['id' => $id, 'message' => 'Project deleted']);
    }
}