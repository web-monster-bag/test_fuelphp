<?php

namespace Model;

use Fuel\Core\Model;
use Fuel\Core\DB;
use Fuel\Core\Database_Connection;

final class Fuel extends Model
{
    public function __construct()
    {
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public static function get_instance()
    {
        $connection = DB::instance();
        $query = DB::select()->from('test')->execute();
        return $connection;
    }
}
