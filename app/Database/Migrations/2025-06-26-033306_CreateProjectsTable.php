<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'description_short' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'description_long' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'location_details' => [
                'type'           => 'TEXT', // Store as JSON string or comma-separated
                'null'           => true,
            ],
            'features' => [
                'type'           => 'TEXT', // Store as JSON string or comma-separated
                'null'           => true,
            ],
            'investment_info' => [
                'type'           => 'TEXT', // Store as JSON string or comma-separated
                'null'           => true,
            ],
            'facebook_link' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'address' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => true,
            ],
            'land_area' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'construction_area' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'price' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
            ],
            'image_mini' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'images' => [
                'type'           => 'TEXT', // Store as JSON string of image paths
                'null'           => true,
            ],
            'map_src' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('id'); // 'id' as primary key
        $this->forge->createTable('proyectos_view');
    }

    public function down()
    {
        $this->forge->dropTable('proyectos_view');
    }
}