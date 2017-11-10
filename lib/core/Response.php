<?php

namespace Core;

/**
 * Class Response
 * @package Core
 */
class Response
{

    /**
     * @var String
     */
    private $controller;

    /**
     * @var String
     */
    private $method;

    /**
     * @var array
     */
    private $vars;

    /**
     * Response constructor.
     * @param String $controller
     * @param String $method
     * @param array $vars
     */
    public function __construct(String $controller, String $method, array $vars = [])
    {
        $this->controller = $controller;
        $this->method = $method;
        $this->vars = $vars;
    }

    /**
     * send response
     */
    public function send()
    {
        $method = $this->method;
        $controller = new $this->controller;
        exit($controller->$method($this->vars));
    }
}