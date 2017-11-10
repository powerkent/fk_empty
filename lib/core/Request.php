<?php

namespace Core;

/**
 * Class Request
 * @package Core
 */
class Request
{

    /**
     * @return string
     */
    public function getRequest()
    {
        return $_SERVER['REQUEST_URI'];
    }
}