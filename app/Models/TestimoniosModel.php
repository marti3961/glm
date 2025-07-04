<?php namespace App\Models;

use CodeIgniter\Model;

class TestimoniosModel extends Model
{
    protected $table         = 'testimonios';
    protected $primaryKey    = 'id'; // Assuming 'id' (slug) is your primary key
    protected $useAutoIncrement = false; // Because 'id' is a VARCHAR slug

    protected $returnType    = 'array'; // 'array' for associative arrays, 'object' for objects
    protected $useSoftDeletes = false; // Set to true if you want soft deletes

    // These fields are allowed to be mass-assigned via insert/update
    protected $allowedFields = [
        'id',
        'uri',
        'orden',
        'active'
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
    
}