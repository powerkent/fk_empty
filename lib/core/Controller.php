<?php

namespace Core;

/**
 * Class Controller
 * @package Core
 */
class Controller
{
    /**
     * @var \Twig_Environment
     */
    private $template;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->template = (new TwigTemplate)->get();
    }

    /**
     * @param String $name
     * @param array $context
     * @return string
     */
    public function render(String $name, array $context = [])
    {
        return $this->template->render($name, $context);
    }
}