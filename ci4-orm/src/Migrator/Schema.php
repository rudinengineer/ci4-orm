<?php

namespace Ci4ORM\Migrator;

class Schema {
    private static Blueprint $blueprint;

    public static function create(?string $table, ?callable $callback) {
        self::$blueprint = new Blueprint($table);
        call_user_func($callback, self::$blueprint);
        self::$blueprint->execute();
        
        return self::$blueprint;
    }
}