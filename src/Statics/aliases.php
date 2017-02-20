<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/20
 * Time: 9:39
 */
namespace Statics;

class Autoload {
    public $aliases;
    public function __construct($aliases = []) {
        $this->aliases = $aliases;
    }
    public function register() {
        spl_autoload_register([$this, 'load'], true, true);
        return $this;
    }
    public function load($alias) {
        if (isset($this->aliases[$alias])) {
            return class_alias($this->aliases[$alias], $alias);
        }
    }
}