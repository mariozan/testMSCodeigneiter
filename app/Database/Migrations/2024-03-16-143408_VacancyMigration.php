<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VacancyMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type'       => 'TEXT',                
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vacancies');
    }

    public function down()
    {
        $this->forge->dropTable('vacancies');
        
    }
}
