<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:52 PM
 * To change this template use File | Settings | File Templates.
 */

class View
{
    private $model;
    private $controller;
    private $twig;

    public function __construct($controller, $model, $twig)
    {
        $this->controller = $controller;
        $this->model = $model;
        $this->twig = $twig;
    }

    public function output()
    {
        return $this->twig->render('home.html.twig', array('heading' => $this->model->heading,
                                                           'navigation' => $this->model->nav,
                                                           'script' => $this->model->script,
                                                           'css' => $this->model->css,
                                                           'content' => $this->model->content
                                                        ));
    }
}
