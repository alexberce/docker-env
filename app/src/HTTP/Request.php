<?php

namespace Invobox\Template\HTTP;


class Request
{
    /**
     * @param string $key
     * @return bool
     */
    public static function has(string $key)
    {
        return isset($_REQUEST[$key]);
    }

    /***
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        return self::has($key)
            ? $_REQUEST[$key]
            : null;
    }
}