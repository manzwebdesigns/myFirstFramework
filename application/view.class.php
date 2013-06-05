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

    public function __construct($controller, $model, $twig) {
        $this->controller = $controller;
        $this->model = $model;
        $this->twig = $twig;
    }

    public function output(){
        require_once($this->model->template);
        $this->twig->render('base.html.twig', array('data' =>  $this->model->tstring));
    }
}