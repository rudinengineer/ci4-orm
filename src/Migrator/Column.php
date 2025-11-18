<?php

namespace Ci4ORM\Migrator;

/**
 * @method $this after(string $column) Place the column "after" another column (MySQL)
 * @method $this always(bool $value = true) Used as a modifier for generatedAs() (PostgreSQL)
 * @method $this change() Change the column
 * @method $this charset(string $charset) Specify a character set for the column (MySQL)
 * @method $this collation(string $collation) Specify a collation for the column
 * @method $this comment(string $comment) Add a comment to the column (MySQL/PostgreSQL)
 * @method $this first() Place the column "first" in the table (MySQL)
 * @method $this from(int $startingValue) Set the starting value of an auto-incrementing field (MySQL / PostgreSQL)
 * @method $this index(bool|string $indexName = null) Add an index
 * @method $this invisible() Specify that the column should be invisible to "SELECT *" (MySQL)
 * @method $this persisted() Mark the computed generated column as persistent (SQL Server)
 * @method $this primary(bool $value = true) Add a primary index
 * @method $this fulltext(bool|string $indexName = null) Add a fulltext index
 * @method $this spatialIndex(bool|string $indexName = null) Add a spatial index
 * @method $this startingValue(int $startingValue) Set the starting value of an auto-incrementing field (MySQL/PostgreSQL)
 * @method $this type(string $type) Specify a type for the column
 * @method $this unsigned() Set the INTEGER column as UNSIGNED (MySQL)
 * @method $this useCurrent() Set the TIMESTAMP column to use CURRENT_TIMESTAMP as default value
 * @method $this useCurrentOnUpdate() Set the TIMESTAMP column to use CURRENT_TIMESTAMP when updating (MySQL)
 */

class Column {
    private Blueprint $blueprint;
    private string $name;

    public function __construct(string $name, Blueprint $blueprint)
    {
        $this->name = $name;
        $this->blueprint = $blueprint;
    }

    /**
     * @method $this autoIncrement() Set INTEGER columns as auto-increment (primary key)
     */
    public function autoIncrement() {
        $this->blueprint->field[$this->name]['auto_increment'] = true;
    }

    /**
     * @method $this nullable(bool $value = true) Allow NULL values to be inserted into the column
     */
    public function nullable($value = true) {
        $this->blueprint->field[$this->name]['null'] = $value;
    }

    /**
     * @method $this unique(bool|string $indexName = null) Add a unique index
     */
    public function unique($indexName = null) {
        $this->blueprint->field[$this->name]['unique'] = $indexName;
        return $this;
    }

    /**
     * @method $this default(mixed $value) Specify a "default" value for the column
     */
    public function default($value) {
        $this->blueprint->field[$this->name]['default'] = $value;
    }
}