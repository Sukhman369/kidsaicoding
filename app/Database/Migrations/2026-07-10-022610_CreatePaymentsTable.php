<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
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
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => false,
            ],
            'course_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => false,
            ],
            'amount' => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'default'        => '0.00',
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['pending', 'completed', 'failed'],
                'default'        => 'pending',
            ],
            'payment_method' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
                'null'           => true,
            ],
            'transaction_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null'           => true,
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
        $this->forge->addKey('user_id');
        $this->forge->addKey('course_id');
        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}

