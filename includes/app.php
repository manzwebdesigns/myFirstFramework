<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */
namespace MWD;

use Twig_Autoloader;
use Twig_Environment;
use Twig_Loader_Filesystem;

/* include the model class */
include __APP_PATH . 'application/model.class.php';

/* include the view class */
include __APP_PATH . 'application/view.class.php';

/* include the controller class */
include __APP_PATH . 'application/controller.class.php';

/* include the route class */
include __APP_PATH . 'application/route.class.php';

/* include the Request class */
include __APP_PATH . 'application/Request.php';
$request  = new Request();
// var_dump($request);

/* include the twig templating engine */
include __APP_PATH . '/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

/* auto load model classes */
function __autoload($class_name)
{
    $filename = ($class_name) . '.php';
    $file = __APP_PATH . '/src/' . $filename;

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
echo $view->output($request->getUri());
