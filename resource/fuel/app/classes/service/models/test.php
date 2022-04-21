<?php

use Fuel\Core\Date;

final class Service_Models_Test
{
    private $test;

    public function __construct()
    {
        $this->test = Service_Di_Container::instance(Model_Test::class);
    }

    /**
     * 取得
     *
     * @param string|null $id
     * @return Database_Query_Builder_Select|string
     */
    public function get(string $id = null)
    {
        // DB情報取得
        try {
            $query = $this->test->select_model();
            $query = $id ? $query->where('id', $id) : $query;
            $result = $query->execute();

            return $result;
        } catch (\Exception $e) {
            return 'エラー: ' . $e->getMessage();
        }
    }

    public function create()
    {
    }

    /**
     * 登録
     *
     * @param string $username
     * @param string $password
     * @return string
     */
    public function insert(
        string $username,
        string $password
    ): string {
        try {
            $result = $this->test
                ->insert_model()
                ->columns([
                    $this->test::USERNAME,
                    $this->test::PASSWORD,
                    $this->test::REG_DATE,
                ])
                ->values(
                    [
                        $username,
                        $password,
                        // Date::time()->format('mysql'),  // '%Y-%m-%d %H:%M:%S'
                        '2022-04-22 00:00:00',
                    ],
                )
                ->execute();
            return '登録ID: ' . (string) $result[0];
        } catch (\Exception $e) {
            return '登録エラー: ' . $e->getMessage();
        }
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
