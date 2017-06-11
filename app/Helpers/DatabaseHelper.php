<?php

namespace App\Helpers;

class DatabaseHelper
{

    static public function getTableColumns($table)
    {
        return Schema::getColumnListing($table);

    }
}