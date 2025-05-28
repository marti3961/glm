<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProductExtraDepensOn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products_extras', [
            'depends_on' => [
            'type' => 'INT',
            'constraint' => 11,
            'null' => true,
            'after' => 'precio', // Adjust the position as needed
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('products_extras', 'depends_on');
        //
    }
}
