<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 8:21 PM
 * To change this template use File | Settings | File Templates.
 */
namespace MWD;

use MWD\Request as Request;

class Model
{
    public $heading;
    public $nav;
    public $script;
    public $css;
    public $content;
    public $request;

    public function __construct()
    {
        // create new Request object for routing purposes
        $this->request = new Request();
        $uri = $this->request->getUri();

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
            array('href' => '/', 'class' => 'nav_links', 'caption' => 'Home'),
            array('href' => 'about', 'class' => 'nav_links', 'caption' => 'About'),
            array('href' => 'contact', 'class' => 'nav_links', 'caption' => 'Contact',
            ));

        foreach($this->nav as $key => $val) {
            if($val['href'] == $uri || !$uri) {
                $val['class'] .= ' active';
                $this->nav[$key] = $val;
                break;
            }
        }

        switch ($uri) {
            case 'contact':
                $this->content = 'My contact us content goes here...';
                break;
            case 'about' :
                $this->content = 'My about us content goes here...';
                break;
            default: // Default homepage main content
                $this->content = 'My main homepage content goes here...';
        }
    }
}
