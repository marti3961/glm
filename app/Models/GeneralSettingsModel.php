<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralSettingsModel extends Model
{
    protected $table      = 'general_settings';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'site_name',
        'site_email',
        'site_phone',
        'site_logo',
        'main_description',
        'main_keywords',
        'whatsapp',
        'address',
        'facebook',
        'instagram',
        'x',
        'pinterest',
        'linkedin',
        'created_at',
        'updated_at',
        'bombeo_1mc',
        'bombeo_1_10',
        'address'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
