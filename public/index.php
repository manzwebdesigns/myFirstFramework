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

/* define the site path and doc root constants */
$app_path = '';
$doc_root = '';

$path_array = explode('/', substr(realpath(dirname(__FILE__)), 1));
$seg_count = count($path_array);
$counter = 0;
foreach ($path_array as $seg) {
    $counter++;
    if ($counter < $seg_count) {
        $app_path .= '/' . $seg;
    } else {
        $doc_root = $app_path . '/' . $seg . '/';
    }
}
$app_path .= '/';
define ('__APP_PATH', $app_path);
define ('__DOC_ROOT', $doc_root);

/* include the app.php file */
include __APP_PATH . 'includes/app.php';
