<?php

use Fuel\Core\Model;
use Fuel\Core\DB;
use Fuel\Core\Database_Connection;
use Fuel\Core\Database_Query_Builder_Select;
use Fuel\Core\Database_Query_Builder_Join;
use Fuel\Core\Database_Query_Builder_Create;
use Fuel\Core\Database_Query_Builder_Insert;
use Fuel\Core\Database_Query_Builder_Update;
use Fuel\Core\Database_Query_Builder_Delete;

/**
 * 全モデルの規定クラス
 * 
 * @document https://btt.hatenablog.com/entry/2012/08/20/190737
 */
abstract class Model_Base extends Model
{
    /**
     * プライマリキー
     * 
     * @var string
     */
    public const ID = 'id';

    /**
     * 登録日
     * 
     * @var string
     */
    public const REG_DATE = 'reg_date';

    /**
     * 更新日
     * 
     * @var string
     */
    public const UPD_DATE = 'upd_date';

    /**
     * 削除日
     * 
     * @var string
     */
    public const DEL_DATE = 'del_date';

    /**
     * コネクション
     *
     * @var Database_Connection
     */
    protected $connection;

    /**
     * コネクション名
     *
     * @var string
     */
    protected $connection_name = '';

    /**
     * テーブル名
     *
     * @var string
     */
    protected $table_name = '';

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->connection = $this->connection_name ?
            DB::instance($this->connection_name) :
            DB::instance();
    }

    /**
     * select
     * select_model(['column1, column2, ...])
     *
     * @param array|null $Columns
     * @return Database_Query_Builder_Select
     */
    public function select_model(array $columns = null): Database_Query_Builder_Select
    {
        return $this->connection
            ->select($columns)
            ->from($this->table_name);
    }

    /**
     * join
     *
     * @return Database_Query_Builder_Join
     */
    public function join_model(): Database_Query_Builder_Join
    {
        return $this->connection->join($this->table_name);
    }

    /**
     * create
     *
     * @return Database_Query_Builder_Create
     */
    public function create_model(): Database_Query_Builder_Create
    {
        return $this->connection->create($this->table_name);
    }

    /**
     * insert
     *
     * @return Database_Query_Builder_Insert
     */
    public function insert_model(): Database_Query_Builder_Insert
    {
        return $this->connection->insert($this->table_name);
    }


    /**
     * update
     *
     * @return Database_Query_Builder_Update
     */
    public function update_model(): Database_Query_Builder_Update
    {
        return $this->connection->update($this->table_name);
    }

    /**
     * delete
     *
     * @return Database_Query_Builder_Delete
     */
    public function delete_model(): Database_Query_Builder_Delete
    {
        return $this->connection->delete($this->table_name);
    }
}
