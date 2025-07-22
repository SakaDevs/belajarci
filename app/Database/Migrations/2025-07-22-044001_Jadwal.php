<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'=> 'INT',
                'constraint'=> 11,
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'nama_program'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'angkatan'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'tutup_pendaftaran'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'mulai_seleksi'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'akhir_seleksi'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'mulai_pelatihan'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'akhir_pelatihan'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'awal_kompetensi'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'akhir_kompetensi'=> [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
            
        ]);
        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
    {
        $this->forge->dropTable('jadwal'); 
    }
    }
}
