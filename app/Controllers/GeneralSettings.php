<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;


class GeneralSettings extends ResourceController
{
    protected $modelName = 'App\Models\GeneralSettingsModel';
    protected $format    = 'json';
 

    /**
     * Get the first (default) settings record.
     */
    public function index()
    {
        $settings = $this->model->first();

        if (!$settings) {
            return $this->failNotFound('No general settings found.');
        }

        return $this->respond($settings);
    }

    /**
     * Update the first (default) settings record.
     * Assumes there is only one row or you always update the first one.
     */
    public function update($id = null)
    {
        // Always target first row or by passed ID if desired
        $settings = $this->model->first();

        if (!$settings) {
            return $this->failNotFound('Settings not found.');
        }

        $data = $this->request->getJSON(true);

        // Optionally validate required fields here

        if (!$this->model->update($settings['id'], $data)) {
            return $this->failServerError('Failed to update settings.');
        }

        $updated = $this->model->find($settings['id']);

        return $this->respondUpdated($updated);
    }
}
