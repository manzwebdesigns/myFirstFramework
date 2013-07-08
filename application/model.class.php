<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 8:21 PM
 * To change this template use File | Settings | File Templates.
 */
namespace MWD;

class Model
{
    public $heading;
    public $nav;
    public $script;
    public $css;
    public $content;

    public function __construct()
    {
        // Set the index page heading
        $this->heading = "Welcome to Bud's first MVC Framework Site!";

        // Create an array of all the javascript files in the js folder
        $jsdir = glob(__DOC_ROOT . "assets/js/*.js");
        $this->script = str_replace(__DOC_ROOT, '', $jsdir);

        // Create an array of all the css stylesheet files in the css folder
        $cssdir = glob(__DOC_ROOT . "assets/css/*.css");
        $this->css = str_replace(__DOC_ROOT, '', $cssdir);

        // Create the navigation link array
        $this->nav = array(
            array('href' => '/', 'caption' => 'Home'),
            array('href' => 'about', 'caption' => 'About'),
            array('href' => 'contact', 'caption' => 'Contact',
            ));

        // Default homepage main content
        $this->content = 'My main content';
    }
}
