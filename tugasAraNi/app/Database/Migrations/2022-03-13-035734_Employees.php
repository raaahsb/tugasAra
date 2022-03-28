<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel karyawan
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_mahasiswa'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'matakuliah'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['sudah', 'belum'],
                'default'        => 'belum',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel karyawan
        $this->forge->createTable('employees', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel karyawan
        $this->forge->dropTable('employees');
    }
}
