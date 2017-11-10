<?php

namespace Core;

/**
 * Class Routes
 * @package Core
 */
class Routes
{

    /**
     * @var array
     */
    private $routes = [];

    /**
     * @return array
     */
    public function getRoutes()
    {
        $routes = new \SimpleXMLElement(file_get_contents(__DIR__ . '/../../config/routes.xml'));

        foreach ($routes as $route) {

            $vars = [];
            if (isset($route['vars'])) {
                $vars = explode(',', $route['vars']);
            }

            $this->routes[] = new Route($route['url'], $route['controller'], $route['method'], $vars);
        }

        return $this->routes;
    }
}