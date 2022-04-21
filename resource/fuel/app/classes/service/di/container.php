<?php

final class Service_Di_Container
{
    /**
     * DIコンテナ
     *
     * @param string $class_name
     * @return object
     */
    public static function instance(string $class_name)
    {
        try {
            return new $class_name;
        } catch (\Exception $e) {
            // 例外
        }
    }
}
