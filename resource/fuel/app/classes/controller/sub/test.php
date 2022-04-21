<?php

use Fuel\Core\Response;
use Model\Test;

final class Controller_Sub_Test extends controller
{
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
        $fuel = (new Test)->select_model()->execute();

        $response = Response::forge(View::forge('test/index'));
        return $response;
    }
}
