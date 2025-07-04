<?php namespace App\Models;

use CodeIgniter\Model;

class ProyectosViewModel extends Model
{
    protected $table         = 'proyectos_view';
    protected $primaryKey    = 'id'; // Assuming 'id' (slug) is your primary key
    protected $useAutoIncrement = false; // Because 'id' is a VARCHAR slug

    protected $returnType    = 'array'; // 'array' for associative arrays, 'object' for objects
    protected $useSoftDeletes = false; // Set to true if you want soft deletes

    // These fields are allowed to be mass-assigned via insert/update
    protected $allowedFields = [
        'id', // The slug for the project
        'title',
        'description_short',
        'description_long',
        'location_details', // Will store JSON
        'features',         // Will store JSON
        'investment_info',  // Will store JSON
        'facebook_link',
        'type',
        'address',
        'status',
        'land_area',
        'construction_area',
        'price',
        'images',           // Will store JSON
        'image_mini',
        'map_src'
    ];

    // Dates
    protected $useTimestamps = true; // Use created_at and updated_at fields
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at'; // Only if useSoftDeletes is true

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['formatJsonFields'];
    protected $beforeUpdate   = ['formatJsonFields'];
    protected $afterFind      = ['decodeJsonFields'];

    protected function formatJsonFields(array $data)
    {
        $fields = ['location_details', 'features', 'investment_info', 'images'];
        foreach ($fields as $field) {
            if (isset($data['data'][$field]) && is_array($data['data'][$field])) {
                $data['data'][$field] = json_encode($data['data'][$field]);
            }
        }
        return $data;
    }

    protected function decodeJsonFields(array $data)
    {
        $fields = ['location_details', 'features', 'investment_info', 'images'];
        foreach ($fields as $field) {
            if (isset($data['data'][$field]) && is_string($data['data'][$field])) {
                $decoded = json_decode($data['data'][$field], true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $data['data'][$field] = $decoded;
                }
            }
        }
        return $data;
    }


    /**
     * Get a single project by its ID (slug)
     */
    public function getProjectById($id)
    {
        return $this->find($id);
    }
}