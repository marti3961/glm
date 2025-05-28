<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\SliderModel;
use App\Services\ImageService;

class Slider extends ResourceController
{
    protected $modelName = SliderModel::class;
    protected $format    = 'json';

    // POST /sliders
    public function create()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'type'           => 'required|max_length[100]',
            'title'          => 'required|max_length[255]',
            'image'          => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($validation->getErrors());
        }

        $image = $this->request->getFile('image');
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads/sliders', $newName);

        $data = [
            'type'           => $this->request->getPost('type'),
            'title'          => $this->request->getPost('title'),
            'button1_text'   => $this->request->getPost('button1_text'),
            'button1_link'   => $this->request->getPost('button1_link'),
            'button2_text'   => $this->request->getPost('button2_text'),
            'button2_link'   => $this->request->getPost('button2_link'),
            'position'       => $this->request->getPost('position') ?? 0,
            'active'         => $this->request->getPost('active') ?? 1,
            'image'          => 'uploads/sliders/' . $newName,
        ];

        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    public function update($id = null)
    {
        // Find the slider by ID
        $slider = $this->model->find($id);
        if (!$slider) {
            return $this->failNotFound('Slider not found');
        }

        // Get form data (text fields)
        $title = $this->request->getVar('title');
        $subtitle = $this->request->getVar('subtitle');
        $button1_text = $this->request->getVar('button1_text');
        $button1_link = $this->request->getVar('button1_link');
        $button2_text = $this->request->getVar('button2_text');
        $button2_link = $this->request->getVar('button2_link');
        $position = $this->request->getVar('position');
        $active = $this->request->getVar('active');
        $imagePath = null;  // Default to null if no image is uploaded

        // Check if an image file is uploaded
         $image = $this->request->getFile('imageFile');
        
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Generate a random name for the image and upload it
            $newName = $image->getRandomName();
            $imageService = new ImageService();
            $result = $imageService->uploadImage($image, 'slider-main');
            // var_dump($result);
            // die(); 
            // Ensure the image upload was successful
            if ($result['success'] && isset($result['path'])) {
                $imagePath = $result['path'];  // Correctly get the path from the array
            } else {
                return $this->failServerError('Image upload failed: ' . ($result['error'] ?? 'Unknown error'));
            }
        }

        // Prepare the data to be updated in the database
        $sliderData = [
            'title' => $title,
            'subtitle' => $subtitle,
            'button1_text' => $button1_text,
            'button1_link' => $button1_link,
            'button2_text' => $button2_text,
            'button2_link' => $button2_link,
            'position' => $position,
            'active' => $active,
        ];

        // Add the image path if a new image was uploaded
        if ($imagePath) {
            $sliderData['image'] = $imagePath;
        }

        // Update the slider data in the database
        if ($this->model->update($id, $sliderData)) {
            // Return a response indicating the update was successful
            return $this->respondUpdated($sliderData);
        } else {
            // Handle case if the update fails
            return $this->fail('Slider update failed.');
        }
    }


    // GET /sliders
    public function index()
    {
        $sliders = $this->model->findAll();
        return $this->respond($sliders);
    }

    // GET /sliders/{id}
    public function show($id = null)
    {
        $slider = $this->model->find($id);
        if (!$slider) {
            return $this->failNotFound('Slider not found');
        }
        return $this->respond($slider);
    }

    // DELETE /sliders/{id}
    public function delete($id = null)
    {
        $slider = $this->model->find($id);
        if (!$slider) {
            return $this->failNotFound('Slider not found');
        }
        // Delete the image file if it exists
        if (!empty($slider['image']) && file_exists(ROOTPATH . 'public/' . $slider['image'])) {
            unlink(ROOTPATH . 'public/' . $slider['image']);
        }
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Slider deleted successfully']);
    }
}
