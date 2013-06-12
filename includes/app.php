<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */

/* include the model class */
include __APP_PATH . '/application/model.class.php';

/* include the view class */
include __APP_PATH . '/application/view.class.php';

/* include the controller class */
include __APP_PATH . '/application/controller.class.php';

/* include the route class */
include __APP_PATH . '/application/route.class.php';

/* include the twig templating engine */
include __APP_PATH . '/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

/* auto load model classes */
function __autoload($class_name)
{
    $filename = strtolower($class_name) . '.class.php';
    $file = __APP_PATH . '/model/' . $filename;

    if (file_exists($file)) {
        include($file);
    }
    return false;
}

$model = new Model();
$controller = new Controller($model);
$loader = new Twig_Loader_Filesystem(__APP_PATH . '/tpl');
$twig = new Twig_Environment($loader, array(
  //  'cache' => __APP_PATH . '/tpl/cache',
));
$view = new View($controller, $model, $twig);
echo $view->output();
