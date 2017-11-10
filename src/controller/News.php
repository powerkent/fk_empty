<?php

namespace Controller;

use \Core\Controller;

/**
 * Class News
 * @package Controller
 */
class News extends Controller
{
    public function index($page)
    {
        return $this->render('home.html.twig', []);
    }
}