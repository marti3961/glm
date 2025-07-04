<?php namespace App\Controllers;

use App\Models\ProyectosViewModel;
use CodeIgniter\RESTful\ResourceController;
use App\Services\ImageService;
class Proyectos extends ResourceController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProyectosViewModel();
    }

    // GET /proyectos/{id}
    public function getById($id = null)
    {
        $project = $this->projectModel->getProjectById($id);

        if (!$project) {
            return $this->failNotFound("Project with ID '$id' not found.");
        }

        return $this->respond($project);
    }

    public function index()
    {
        $projects = $this->projectModel->findAll();

        // if (empty($projects)) {
        //     return $this->failNotFound('No projects found.');
        // }

        return $this->respond($projects);
    }

    // POST /proyectos
    public function store()
    {
        $id = $this->request->getPost('id');
        $existing = $this->projectModel->getProjectById($id);
        if ($existing) {
            return $this->failNotFound("URL de proyecto existente con ID '$id'.");
        }

        $rules = [
            'title'             => 'required|min_length[3]|max_length[255]',
            'id'                => "required|min_length[3]|max_length[255]|is_unique[proyectos_view.id,id,{$id}]",
            'description_short' => 'permit_empty|max_length[500]',
            'description_long'  => 'permit_empty',
            'location_details'  => 'permit_empty',
            'features'          => 'permit_empty',
            'investment_info'   => 'permit_empty',
            'facebook_link'     => 'permit_empty|valid_url',
            'type'              => 'permit_empty|max_length[100]',
            'address'           => 'permit_empty|max_length[255]',
            'status'            => 'permit_empty|max_length[50]',
            'land_area'         => 'permit_empty|max_length[100]',
            'construction_area' => 'permit_empty|max_length[100]',
            'price'             => 'permit_empty|max_length[100]',
            'images'            => 'permit_empty',
            'map_src'           => 'permit_empty|valid_url',
        ];

        if (! $this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }
        
        $imagePath = "";
        $uploadedFile = $this->request->getFile('image_mini');
        if ($uploadedFile && $uploadedFile->isValid() && !$uploadedFile->hasMoved()) {
            $imageService = new ImageService(); // Adjust namespace if needed
            $result = $imageService->uploadImage($uploadedFile, 'proyectos-nuevos');
            if ($result['success'] && isset($result['path'])) {
                $imagePath = $result['path'];
            } else {
                return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
            }
        }
        $imagePaths = [];
        $uploadedFiles = $this->request->getFileMultiple('images');
        if ($uploadedFiles) {
            $imageService = new ImageService(); // Adjust namespace if needed

            // If multiple files
            if (is_array($uploadedFiles)) {
                foreach ($uploadedFiles as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $result = $imageService->uploadImage($file, 'proyectos-nuevos');
                        if ($result['success'] && isset($result['path'])) {
                            $imagePaths[] = $result['path'];
                        } else {
                            return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
                        }
                    }
                }
            } elseif ($uploadedFiles->isValid() && !$uploadedFiles->hasMoved()) {
                // Single file case
                $result = $imageService->uploadImage($uploadedFiles, 'slider-main');
                if ($result['success'] && isset($result['path'])) {
                    $imagePaths[] = $result['path'];
                } else {
                    return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
                }
            }
        }

        $data = [
            'id'                => url_title($this->request->getPost('id'), '-', TRUE),
            'title'             => $this->request->getPost('title'),
            'description_short' => $this->request->getPost('description_short'),
            'description_long'  => $this->request->getPost('description_long'),
            'location_details'  => array_filter(array_map('trim', explode(',', $this->request->getPost('location_details')))),
            'features'          => array_filter(array_map('trim', explode(',', $this->request->getPost('features')))),
            'investment_info'   => array_filter(array_map('trim', explode(',', $this->request->getPost('investment_info')))),
            'facebook_link'     => $this->request->getPost('facebook_link'),
            'type'              => $this->request->getPost('type'),
            'address'           => $this->request->getPost('address'),
            'status'            => $this->request->getPost('status'),
            'land_area'         => $this->request->getPost('land_area'),
            'construction_area' => $this->request->getPost('construction_area'),
            'price'             => $this->request->getPost('price'),
            'images'            => $imagePaths,
            'map_src'           => $this->request->getPost('map_src'),
            'image_mini'        => $imagePath
        ];


        if ($this->projectModel->insert($data)) {
            return $this->respond([
                'message' => 'Proyecto guardado .',
                'data' => $data,
            ]);
        } else {
            return $this->failServerError('Could not save project.');
        }

    }

    // PUT /proyectos/{id}
    public function update($id = null)
    {
        $existing = $this->projectModel->getProjectById($id);
        if (!$existing) {
            return $this->failNotFound("Project with ID '$id' not found.");
        }

        $rules = [
            'title'             => 'required|min_length[3]|max_length[255]',
            'id'                => "required|min_length[3]|max_length[255]|is_unique[proyectos_view.id,id,{$id}]",
            'description_short' => 'permit_empty|max_length[500]',
            'description_long'  => 'permit_empty',
            'location_details'  => 'permit_empty',
            'features'          => 'permit_empty',
            'investment_info'   => 'permit_empty',
            'facebook_link'     => 'permit_empty|valid_url',
            'type'              => 'permit_empty|max_length[100]',
            'address'           => 'permit_empty|max_length[255]',
            'status'            => 'permit_empty|max_length[50]',
            'land_area'         => 'permit_empty|max_length[100]',
            'construction_area' => 'permit_empty|max_length[100]',
            'price'             => 'permit_empty|max_length[100]',
            'images'            => 'permit_empty',
            'map_src'           => 'permit_empty|valid_url',
        ];

        if (! $this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }
        
        $imagePath = "";
        $uploadedFile = $this->request->getFile('image_mini');
        if ($uploadedFile && $uploadedFile->isValid() && !$uploadedFile->hasMoved()) {
            $imageService = new ImageService(); // Adjust namespace if needed
            $result = $imageService->uploadImage($uploadedFile, 'proyectos-nuevos');
            if ($result['success'] && isset($result['path'])) {
                $imagePath = $result['path'];
            } else {
                return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
            }
        }
        $imagePaths = [];
        $uploadedFiles = $this->request->getFileMultiple('images');
        if ($uploadedFiles) {
            $imageService = new ImageService(); // Adjust namespace if needed

            // If multiple files
            if (is_array($uploadedFiles)) {
                foreach ($uploadedFiles as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $result = $imageService->uploadImage($file, 'proyectos-nuevos');
                        if ($result['success'] && isset($result['path'])) {
                            $imagePaths[] = $result['path'];
                        } else {
                            return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
                        }
                    }
                }
            } elseif ($uploadedFiles->isValid() && !$uploadedFiles->hasMoved()) {
                // Single file case
                $result = $imageService->uploadImage($uploadedFiles, 'slider-main');
                if ($result['success'] && isset($result['path'])) {
                    $imagePaths[] = $result['path'];
                } else {
                    return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
                }
            }
        }

        $data = [
            'id'                => url_title($this->request->getPost('id'), '-', TRUE),
            'title'             => $this->request->getPost('title'),
            'description_short' => $this->request->getPost('description_short'),
            'description_long'  => $this->request->getPost('description_long'),
            'location_details'  => array_filter(array_map('trim', explode(',', $this->request->getPost('location_details')))),
            'features'          => array_filter(array_map('trim', explode(',', $this->request->getPost('features')))),
            'investment_info'   => array_filter(array_map('trim', explode(',', $this->request->getPost('investment_info')))),
            'facebook_link'     => $this->request->getPost('facebook_link'),
            'type'              => $this->request->getPost('type'),
            'address'           => $this->request->getPost('address'),
            'status'            => $this->request->getPost('status'),
            'land_area'         => $this->request->getPost('land_area'),
            'construction_area' => $this->request->getPost('construction_area'),
            'price'             => $this->request->getPost('price'),
            'images'            => $imagePaths == [] ? $existing['images'] : $imagePaths,
            'map_src'           => $this->request->getPost('map_src'),
            'image_mini'        => $imagePath == "" ? $existing['image_mini'] : $imagePath
        ];


        if ($this->projectModel->update($id, $data)) {
            return $this->respond([
                'message' => 'Project updated successfully.',
                'data' => $data,
            ]);
        } else {
            return $this->failServerError('Could not update project.');
        }
    }
    // DELETE /proyectos/{id}
    public function delete($id = null)
    {
        $existing = $this->projectModel->getProjectById($id);
        if (!$existing) {
            return $this->failNotFound("proyecto no Encontrado con ID '$id'.");     
        }  
        if ($this->projectModel->delete($id)) {
            return $this->respondDeleted(['message' => 'Proyecto eliminado.']);
        } else {
            return $this->failServerError('No se pudo eliminar el proyecto.');
        }  
    }
}
