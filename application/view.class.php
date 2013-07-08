<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:52 PM
 * To change this template use File | Settings | File Templates.
 */
namespace MWD;

class View
{
    private $model;
    private $controller;
    private $twig;
    private $contentPage;

    public function __construct($controller, $model, $twig)
    {
        $this->controller = $controller;
        $this->model = $model;
        $this->twig = $twig;
    }

    public function output($page = 'home')
    {
        $this->contentPage = $this->twig->render($page . '.html.twig',
                                                     array('heading' => $this->model->heading,
                                                           'navigation' => $this->model->nav,
                                                           'script' => $this->model->script,
                                                           'css' => $this->model->css,
                                                           'content' => $this->model->content
                                                        ));
        return $this->contentPage;
    }
}
