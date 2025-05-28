<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table            = 'general_settings';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';

    protected $allowedFields    = [
        'site_name',
        'site_email',
        'site_phone',
        'site_logo',
        'main_description',
        'main_keywords',
        'whatsapp',
        'facebook',
        'instagram',
        'x',
        'pinterest',
        'linkedin',
        'bombeo_1_10',
        'bombeo_1mc'
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}
