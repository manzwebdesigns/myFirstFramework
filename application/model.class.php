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
    public $heading;
    public $nav;
    public $script;
    public $content;

    public function __construct()
    {
        $this->heading = "Welcome to Bud's first MVC Framework Site!";
        $dir = glob(__APP_PATH. "/assets/js/*.js");
        $this->script = str_replace(__APP_PATH, '', $dir);
        $this->nav = array(
            array('href' => 'index.php', 'caption' => 'Home'),
            array('href' => 'about.php', 'caption' => 'About'),
            array('href' => 'contact.php', 'caption' => 'Contact',
            ));
        $this->content = 'My new message';
    }
}