<?php

use Fuel\Core\Response;
use Fuel\Core\Controller_Rest as Controller;
// use Fuel\Core\Controller;
use Fuel\Core\Input;

final class Controller_Api_Test extends Controller
{
    /**
     * サービスインスタンス
     *
     * @var Service_Models_Test
     */
    private $services;

    /**
     * デフォルトフォーマット
     *
     * @var string
     */
    protected $format = 'json';

    public function before()
    {
        parent::before();
        $this->services = Service_Di_Container::instance(Service_Models_Test::class);
    }

    /**
     * DBから取得したデータをjson形式でレスポンス
     * 
     * @return Response
     */
    public function get_read(): Response
    {
        $id = Input::get('id');
        $list = $this->services->get($id);

        $result = [];
        foreach ($list as $key => $record) {
            $result[$key] = $record;
        }

        return $this->response($result);
    }

    /**
     * DBにデータを登録
     *
     * @return Response
     */
    public function post_write(): Response
    {
        // 全データ
        $data = Input::param();
        // リクエストヘッダ
        $headers = Input::headers();
        // リクエストメソッド
        $method = Input::method();

        // パラメータ
        $username = Input::post('username');
        $password = Input::post('password');

        $result = $this->services->insert(
            $username,
            $password,
        );

        $response = $this->response([
            'message' => $result,
        ]);

        return $response;
    }
}
