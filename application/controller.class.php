<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bud
 * Date: 6/4/13
 * Time: 7:50 PM
 * To change this template use File | Settings | File Templates.
 */

class Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
