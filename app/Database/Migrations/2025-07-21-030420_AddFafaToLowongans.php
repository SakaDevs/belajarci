<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFafaToLowongans extends Migration
{
    public function up()
    {
        $this->forge->addColumn('lowongans', [
            'fafa' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'updated_at'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('lowongans', 'fafa');
    }
}
