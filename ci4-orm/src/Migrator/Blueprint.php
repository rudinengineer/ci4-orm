<?php

namespace Ci4ORM\Migrator;

use Config\Database as DatabaseCi4;

class Blueprint {
    private $forge;

    public $table;
    public $field = [];

    public function __construct(?string $table)
    {
        $this->forge = DatabaseCi4::forge(config(DatabaseCi4::class)->defaultGroup);
        $this->table = $table;
    }

    public function id(string $column = 'id') {
        $column = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'INT',
            'constraint' => 15,
            'unsigned' => true,
            'auto_increment' => true,
            'primary_key' => true
        ];

        return $column;
    }

    public function string(string $column, ?int $length = 255): Column {
        $column = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'VARCHAR',
            'constraint' => $length,
        ];

        return $column;
    }

    public function execute() {
        $this->forge->addField($this->field);
        $this->forge->createTable($this->table);
    }
}