<?php
namespace App\Models;
use CodeIgniter\Model;

class ContactanosModel extends Model
{
    protected $table = 'contactanos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'nombre',
        'apellidos',
        'empresa',
        'telefono',
        'email',
        'asunto',
        'mensaje',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}