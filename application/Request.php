<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/14/13
 * Time: 1:16 AM
 * To change this template use File | Settings | File Templates.
 */

/**
 *
 * properties for request parms (GET/POST/etc), hostname and uri
 * getter/setters for all properties
 */
class Request {
    protected $getparm;
    protected $postparm;
    protected $hostname;
    protected $uri;
    protected $method;

    /**
     * Load values from $_GET, $_POST, $_SERVER as needed into the protected values above
     */
    public function __construct()
    {
        $this->getparm = $_GET;
        $this->postparm = $_POST;
        $this->hostname = $_SERVER['HTTP_HOST'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Retrieves a parameter (regardless of request method). IF the parameter doesn't exist,
     * then default will be returned.
     *
     * @param string $name Name of parameter to retrieve
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getParam($name, $default = null)
    {
        if(is_null($default)) {
           $default = $this->getMethod();
        }

        $retval = $default;
        if(in_array($name, $this->getParams())) {
            $retval = $name;
        }
        return $retval;
    }

    /**
     * Retrieves the POST parameter. IF the parameter doesn't exist,
     * then default will be returned.
     *
     * @param string $name Name of parameter to retrieve
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getPostParam($name, $default = null)
    {
        if(is_null($default)) {
            $default = $this->getMethod();
        }

        $retval = $default;
        if(isset($_POST[$name])) {
            $retval = $_POST[$name];
        }

        return $retval;
    }

    /**
     * Retrieves the GET parameter. IF the parameter doesn't exist,
     * then default will be returned.
     *
     * @param string $name Name of parameter to retrieve
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getGetParam($name, $default = null)
    {
        if(is_null($default)) {
            $default = $this->getMethod();
        }

        $retval = $default;
        if(isset($_GET[$name])) {
            $retval = $_GET[$name];
        }
        return $retval;
    }

    /**
     * Retrieve the Host Name
     *
     * @return mixed
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Retrieve the URI result
     *
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Retrieves an array containing all the values from a combined
     * $this->getparm and $this->postparm.
     *
     * @return array
     */
    public function getParams()
    {
        return array($this->getparm, $this->postparm);
    }

    public function getMethod()
    {
        return $this->method;
    }
}