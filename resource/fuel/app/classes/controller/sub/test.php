<?php

use Fuel\Core\Response;
use Model\Fuel;


final class Controller_Sub_Test extends controller
{
    private $fuel;

    public function before()
    {
        // $this->fuel = new Fuel;
    }

    /**
     * Undocumented function
     *
     * @return Response
     */
    public function action_index(): Response
    {
        // DB情報取得
        $fuel = Fuel::get_instance();

        $response = Response::forge(View::forge('test/index'));
        return $response;
    }
}
