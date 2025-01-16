<?php

namespace App\Models\Traits;

trait Named
{
    public static function getTableName(){
        return (new self())->getTable();
    }
}
