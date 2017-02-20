<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/20
 * Time: 9:30
 */
namespace Statics;
class Facades {
    public function __call($name, $params) {
        return call_user_func_array([$this, $name], $params);
    }
    public static function __callStatic($name, $params) {
        return call_user_func_array([new static(), $name], $params);
    }
}