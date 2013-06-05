<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:40 PM
 * To change this template use File | Settings | File Templates.
 */

 /* error reporting on */
 error_reporting(E_ALL);

 /* define the site path constant */
 $app_path = realpath(dirname(__FILE__));
 define ('__APP_PATH', $app_path);

 /* include the app.php file */
 include 'includes/app.php';
