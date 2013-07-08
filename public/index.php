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

$doc_root = __DIR__ . '/';
$app_path = realpath(__DIR__ . '/..') . '/';
define ('__APP_PATH', $app_path);
define ('__DOC_ROOT', $doc_root);
// die(__APP_PATH);
/* include the app.php file */
include __APP_PATH . 'includes/app.php';
