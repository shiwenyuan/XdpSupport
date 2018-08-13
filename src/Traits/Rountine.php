<?php

/**
 * cli下日常提示
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2018/8/6 13341007105@163.com
 * Time: 下午2:47
 */

namespace XdpSupport\Traits;

trait Rountine
{
    public static $errorDeBugCode = 1;
    public static $errorNoticeCode  = 2;
    public static $errorWarningCode  = 3;
    public static $errorFatalCode  = 4;

    public static $errorDeBug = 'debug';
    public static $errorNotice = 'notice';
    public static $errorWarning = 'warning';
    public static $errorFatal = 'fatal';

    public static function __callStatic($name, $arguments)
    {

        $error_level = [
            self::$errorDeBug => self::$errorDeBugCode,
            self::$errorNotice => self::$errorNoticeCode,
            self::$errorWarning => self::$errorWarningCode,
            self::$errorFatal => self::$errorFatalCode
        ];

        $msg = is_array($arguments[0]) ? implode(',', $arguments[0]) : $arguments[0];
        $type = isset($error_level[$name]) ? $error_level[$name] : '';
        switch ($type) {
            case self::$errorDeBugCode:
                $string = "\e[34m {$msg}\e[0m\n";
                break;
            case self::$errorNoticeCode:
                $string = "\e[33m {$msg} \e[0m\n";
                break;
            case self::$errorWarningCode:
                $string = "\e[32m {$msg}\e[0m\n";
                break;
            case self::$errorFatalCode:
                $string = "\e[31m {$msg}\e[0m\n";
                break;
            default:
                $string = $msg;
                break;
        }
        return $string;
    }
}
