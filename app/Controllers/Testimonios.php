<?php
namespace App\Controllers;
use App\Models\TestimoniosModel;
use CodeIgniter\RESTful\ResourceController;

class Testimonios extends ResourceController
{
    protected $modelName = TestimoniosModel::class;
    protected $format    = 'json';

    // GET /testimonios
    public function index()
    {
        $model = new TestimoniosModel();
        $data = $model->findAll();
        return $this->respond($data);
    }

    // GET /testimonios/{id}
    public function show($id = null)
    {
        $model = new TestimoniosModel();
        $data = $model->find($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->failNotFound('Testimonio not found');
    }

    // POST /testimonios
    public function create()
    {
        $model = new TestimoniosModel();
        $data = $this->request->getJSON(true);

        if ($model->insert($data)) {
            return $this->respondCreated($data);
        }
        return $this->failValidationErrors($model->errors());
    }

    // PUT /testimonios/{id}
    public function update($id = null)
    {
        $model = new TestimoniosModel();
        $data = $this->request->getJSON(true);

        if ($model->update($id, $data)) {
            return $this->respond($data);
        }
        return $this->failValidationErrors($model->errors());
    }

    // DELETE /testimonios/{id}
    public function delete($id = null)
    {
        $model = new TestimoniosModel();
        if ($model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }
        return $this->failNotFound('Testimonio not found');
    }
}