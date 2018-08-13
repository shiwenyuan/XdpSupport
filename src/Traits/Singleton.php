<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2018/8/13 13341007105@163.com
 * Time: 下午12:19
 */

namespace XdpSupport\Traits;

trait Singleton
{
    private static $instance;

    static function getInstance(...$args)
    {
        if (!isset(self::$instance)) {
            self::$instance = new static(...$args);
        }
        return self::$instance;
    }
}
