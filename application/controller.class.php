<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:50 PM
 * To change this template use File | Settings | File Templates.
 */

namespace MWD;

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function forward($controller, $action)
    {
        //Set the classname and the file
        $class = __NAMESPACE__ . "\\" . ucfirst($controller) . "Controller";
        $file = __APP_PATH . "/controller/" . ucfirst($controller) . "Controller.php";
        try
        {
            if (is_readable($file)) {
                require_once $file;
                if(class_exists($class, false)) {
                    $instantiatedController = new $class();
                } else {
                    throw new \Exception("Class $class does not exist in $file");
                }
            } else {
                throw new \Exception("Class file is not readable: $file");
            }
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
            exit();
        }
        $instantiatedController->dispatchAction($controller, $action);
    }
}
