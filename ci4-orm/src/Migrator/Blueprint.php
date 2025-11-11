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

    /**
     * Create a new primaryKey column on the table.
     *
     * @param  string|null  $column (default: id)
     * @return Ci4ORM\Migrator\Column
     */
    public function id(string $column = 'id'): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'INT',
            'constraint' => 15,
            'unsigned' => true,
            'auto_increment' => true,
            'primary_key' => true
        ];

        return $columns;
    }

    /**
     * Create a new char column on the table.
     *
     * @param  string  $column
     * @param  int|null  $length (default: 1)
     * @return Ci4ORM\Migrator\Column
     */
    public function char($column, $length = 1): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'CHAR',
            'constraint' => $length
        ];
        return $columns;
    }

    /**
     * Create a new string column on the table.
     *
     * @param  string  $column
     * @param  int|null  $length
     * @return Ci4ORM\Migrator\Column
     */
    public function string(string $column, ?int $length = 255): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'VARCHAR',
            'constraint' => $length,
        ];

        return $columns;
    }

    /**
     * Create a new tiny text column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function tinyText($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TINYTEXT'
        ];

        return $columns;
    }

    /**
     * Create a new text column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function text($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TEXT'
        ];

        return $columns;
    }

    /**
     * Create a new medium text column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function mediumText($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'MEDIUMTEXT'
        ];

        return $columns;
    }

    /**
     * Create a new long text column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function longText($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'LONGTEXT'
        ];

        return $columns;
    }

    /**
     * Create a new integer (4-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool|null  $autoIncrement (default: false)
     * @param  bool|null  $unsigned (default: false)
     * @return Ci4ORM\Migrator\Column
     */
    public function integer($column, $autoIncrement = false, $unsigned = false): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'INT',
            'unsigned' => $unsigned,
            'auto_increment' => $autoIncrement
        ];

        return $columns;
    }

    /**
     * Create a new tiny integer (1-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool|null  $autoIncrement (default: false)
     * @param  bool|null  $unsigned (default: false)
     * @return Ci4ORM\Migrator\Column
     */
    public function tinyInteger($column, $autoIncrement = false, $unsigned = false): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TINYINT',
            'unsigned' => $unsigned,
            'auto_increment' => $autoIncrement
        ];

        return $columns;
    }

    /**
     * Create a new small integer (2-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool|null  $autoIncrement (default: false)
     * @param  bool|null  $unsigned (default: false)
     * @return Ci4ORM\Migrator\Column
     */
    public function smallInteger($column, $autoIncrement = false, $unsigned = false):Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'SMALLINT',
            'unsigned' => $unsigned,
            'auto_increment' => $autoIncrement
        ];

        return $columns;
    }

        /**
     * Create a new medium integer (3-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool|null  $autoIncrement (default: false)
     * @param  bool|null  $unsigned (default: false)
     * @return Ci4ORM\Migrator\Column
     */
    public function mediumInteger($column, $autoIncrement = false, $unsigned = false): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'MEDIUMINT',
            'unsigned' => $unsigned,
            'auto_increment' => $autoIncrement
        ];

        return $columns;
    }

    /**
     * Create a new big integer (8-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool|null  $autoIncrement (default: false)
     * @param  bool|null  $unsigned (default: false)
     * @return Ci4ORM\Migrator\Column
     */
    public function bigInteger($column, $autoIncrement = false, $unsigned = false): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'BIGINT',
            'unsigned' => $unsigned,
            'auto_increment' => $autoIncrement
        ];

        return $columns;
    }

    /**
     * Create a new float column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function float($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'FLOAT'
        ];

        return $columns;
    }

    /**
     * Create a new double column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function double($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'DOUBLE'
        ];

        return $columns;
    }

    /**
     * Create a new decimal column on the table.
     *
     * @param  string  $column
     * @param  int|null  $total (default: 8)
     * @param  int|null  $places (default: 2)
     * @return Ci4ORM\Migrator\Column
     */
    public function decimal($column, $total = 8, $places = 2): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'DECIMAL',
            'constraint' => $total . ',' . $places
        ];

        return $columns;
    }

    /**
     * Create a new boolean column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function boolean($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'BOOLEAN'
        ];

        return $columns;
    }

    /**
     * Create a new enum column on the table.
     *
     * @param  string  $column
     * @param  array  $allowed
     * @return Ci4ORM\Migrator\Column
     */
    public function enum($column, $allowed): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'ENUM',
            'constraint' => array_map('strval', $allowed)
        ];

        return $columns;
    }

    /**
     * Create a new set column on the table.
     *
     * @param  string  $column
     * @param  array  $allowed
     * @return Ci4ORM\Migrator\Column
     */
    public function set($column, $allowed): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'SET',
            'constraint' => array_map('strval', $allowed)
        ];

        return $columns;
    }

    /**
     * Create a new json column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function json($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'JSON'
        ];

        return $columns;
    }

    /**
     * Create a new jsonb column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function jsonb($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'JSONB'
        ];

        return $columns;
    }

    /**
     * Create a new date column on the table.
     *
     * @param  string  $column
     * @return Ci4ORM\Migrator\Column
     */
    public function date($column): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'DATE'
        ];

        return $columns;
    }

    /**
     * Create a new date-time column on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function dateTime($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'DATETIME',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Create a new date-time column (with time zone) on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function dateTimeTz($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TIMESTAMPTZ',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Create a new time column on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function time($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TIME',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Create a new time column (with time zone) on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function timeTz($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TIMETZ',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Create a new timestamp column on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function timestamp($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TIMESTAMP',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Create a new timestamp (with time zone) column on the table.
     *
     * @param  string  $column
     * @param  int|null  $precision (default: null)
     * @return Ci4ORM\Migrator\Column
     */
    public function timestampTz($column, $precision = null): Column {
        $columns = new Column($column, $this);
        $this->field[$column] = [
            'type' => 'TIMESTAMPTZ',
            'precision' => $precision
        ];

        return $columns;
    }

    /**
     * Add nullable creation and update timestamps to the table.
     *
     * @param  int|null  $precision (default: null)
     */
    public function timestamps($precision = null) {
        $this->field['created_at'] = [
            'type' => 'TIMESTAMP',
            'precision' => $precision,
            'null' => true,
            'default' => null
        ];
        
        $this->field['updated_at'] = [
            'type' => 'TIMESTAMP',
            'precision' => $precision,
            'null' => true,
            'default' => null
        ];
    }

    /**
     * Add nullable creation and update timestampTz columns to the table.
     *
     * @param  int|null  $precision (default: null)
     * @return \Illuminate\Support\Collection<int, \Illuminate\Database\Schema\ColumnDefinition>
     */
    public function timestampsTz($precision = null) {
        $this->field['created_at'] = [
            'type' => 'TIMESTAMPTZ',
            'precision' => $precision,
            'null' => true,
            'default' => null
        ];

        $this->field['updated_at'] = [
            'type' => 'TIMESTAMPTZ',
            'precision' => $precision,
            'null' => true,
            'default' => null
        ];
    }

    public function execute() {
        $this->forge->addField($this->field);
        $this->forge->createTable($this->table);
    }
}