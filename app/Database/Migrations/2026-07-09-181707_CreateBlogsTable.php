<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'slug' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'content' => [
                'type'           => 'LONGTEXT',
            ],
            'excerpt' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'image_path' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'author' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'default'        => 'Admin',
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['published', 'draft'],
                'default'        => 'draft',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blogs');
    }

    public function down()
    {
        $this->forge->dropTable('blogs');
    }
}
