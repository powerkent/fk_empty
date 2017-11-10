<?php

namespace Core;

/**
 * Class TwigTemplate
 * @package Core
 */
class TwigTemplate
{

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * TwigTemplate constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../src/view');
        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * @return \Twig_Environment
     */
    public function get()
    {
        return $this->twig;
    }
}