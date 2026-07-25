<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMonetizationTables extends Migration
{
    public function up()
    {
        // 1. Consultation Requests Table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'organization' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'       => true,
            ],
            'service_type' => [
                'type'       => 'ENUM',
                'constraint' => ['white_label', 'custom_deployment', 'enterprise_setup', 'custom_curriculum', 'other'],
                'default'    => 'custom_deployment',
            ],
            'budget' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['new', 'in_progress', 'completed', 'closed'],
                'default'    => 'new',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('status');
        $this->forge->createTable('consultation_requests', true);

        // 2. Training Registrations Table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['teacher', 'academy_owner', 'school_educator', 'tutor', 'other'],
                'default'    => 'teacher',
            ],
            'experience_years' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'program_type' => [
                'type'       => 'ENUM',
                'constraint' => ['bootcamp', 'certification', 'institutional'],
                'default'    => 'certification',
            ],
            'notes' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'approved', 'contacted', 'completed'],
                'default'    => 'pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('status');
        $this->forge->createTable('training_registrations', true);
    }

    public function down()
    {
        $this->forge->dropTable('consultation_requests', true);
        $this->forge->dropTable('training_registrations', true);
    }
}
