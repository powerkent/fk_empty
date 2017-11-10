<?php

namespace Core;

/**
 * Class Application
 * @package Core
 */
class Application
{
    /**
     * @var Routes
     */
    private $routes;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Response
     */
    private $response;

    public function __construct()
    {
        $this->routes = new Routes;
        $this->request = new Request;
    }

    /**
     * Method main
     */
    public function run()
    {
        foreach ($this->routes->getRoutes() as $route) {
            /* @var $route \Core\Route */

            if (preg_match('%^' . $route->getName() . '$%', $this->request->getRequest(), $matches)) {
                $varsNames = $route->getVars();
                $vars = array_flip($varsNames);
                for ($i = 0; $i < count($varsNames); $i++) {
                    $vars[$varsNames[$i]] = $matches[$i + 1];
                }

                $this->response = new Response('\Controller\\' . $route->getController(), $route->getMethod(), $vars);
                $this->response->send();
            }
        }
    }
}