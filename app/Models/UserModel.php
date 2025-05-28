<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre_usuario', 'nombre', 'apellidos', 'email', 'telefono',
        'direccion', 'ciudad', 'estado', 'zip', 'password', 'is_active',
        'created_at', 'updated_at'
    ];
}