<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 9:35 PM
 * To change this template use File | Settings | File Templates.
 */

class Route
{
    protected $class;

    protected $method;
    protected $params = array();

    /**
     * Parse the given URI, if the URI is "site/article/10", then "site" will be
     * the controller class, "article" will be the method, and "10" will be
     * the parameter.
     */
    function __construct($uri)
    {
        $segments = explode('/', $uri);

        foreach ($segments as $segment)
        {
            if ($this->class === NULL)
            {
                $this->class = ucfirst($segment);
            }
            else if ($this->method === NULL)
            {
                $this->method = $segment;
            }
            else
            {
                $this->params[] = $segment;
            }
        }
    }

    /**
     * Instantiate a controller class then execute the method with the parameters from
     * the parsed REQUEST_URI.
     */
    function call(Database $database)
    {
        $controller = new $this->class($database);

        $response = call_user_func_array(array($controller, $this->method), $this->params);

        return $response;
    }
}