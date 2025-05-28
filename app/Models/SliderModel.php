<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table            = 'sliders';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;         // Enables use of deleted_at
    protected $useTimestamps    = true;         // Enables created_at and updated_at

    protected $returnType       = 'array';      // You can change to 'object' if needed

    protected $allowedFields    = [
        'type',
        'title',
        'subtitle',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
        'image',
        'position',
        'active',         // Activation field
    ];

    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';
}
