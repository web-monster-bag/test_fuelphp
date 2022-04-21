<?php

use Fuel\Core\Response;
use Fuel\Core\Controller;

final class Controller_Test_View extends controller
{
    public function before()
    {
        //
    }

    /**
     * Viewを表示
     *
     * @return Response
     */
    public function action_index(): Response
    {
        $response = Response::forge(View::forge('test/index'));
        return $response;
    }
}
