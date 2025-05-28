<?php

namespace App\Models;
use CodeIgniter\Model;

class CotizacionModel extends Model
{
    protected $table = 'cotizaciones';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'product_extras_ids',
        'product_id',
        'tipo_de_transporte',
        'cantidad',
        'cotizacion_json',

    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}