<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 8:21 PM
 * To change this template use File | Settings | File Templates.
 */

class Model
{
    public $tstring;

    public function __construct(){
        $this->tstring = "The string has been loaded through the template.";
        $this->template = "tpl/base.html.twig";
    }
}