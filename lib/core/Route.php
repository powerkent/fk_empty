<?php

namespace Core;

/**
 * Class Route
 * @package Core
 */
class Route
{

    /**
     * @var String
     */
    private $name;

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
     * Route constructor.
     * @param String $name
     * @param String $controller
     * @param String $method
     * @param array $vars
     */
    public function __construct(String $name, String $controller, String $method, array $vars)
    {
        $this->name = $name;
        $this->controller = $controller;
        $this->method = $method;
        $this->vars = $vars;
    }

    /**
     * @return array
     */
    public function getVars(): array
    {
        return $this->vars;
    }

    /**
     * @param array $vars
     */
    public function setVars(array $vars)
    {
        $this->vars = $vars;
    }

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(String $name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getController(): String
    {
        return $this->controller;
    }

    /**
     * @param String $controller
     */
    public function setController(String $controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return String
     */
    public function getMethod(): String
    {
        return $this->method;
    }

    /**
     * @param String $method
     */
    public function setMethod(String $method)
    {
        $this->method = $method;
    }

}