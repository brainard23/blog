<?php 


namespace Database\Seeders\Traits;

use illuminate\Support\Facades\DB;


trait TruncateTable
{
    protected function truncate($table)
    {
        DB::table($table)->truncate();
    }
}