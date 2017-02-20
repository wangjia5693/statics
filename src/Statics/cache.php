<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/20
 * Time: 9:33
 */
namespace Statics;


class Cache extends Facades {
    protected $ai = 'asas';
    protected function fn($a, $b) {
        echo "function parameters: ${a} and ${b} and ".$this->ai."<br>";
    }
    protected function static_fn($a, $b) {
        echo "static function parameters: ${a} and ${b}<br>";
    }
}