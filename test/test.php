<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2018/8/7 13341007105@163.com
 * Time: 下午1:28
 */

require_once __DIR__ . "/../vendor/autoload.php";

use XdpSupport\Arr;
use XdpSupport\Traits\Rountine;

function testRountine()
{

    echo Rountine::debug(['name'=>'zhangsan','age'=>18]);
    echo Rountine::debug('zhangsan');
}

function testAry()
{
    $ary = [
        'name' => 'zhangsan',
        'pwd' => 'asdf234'
    ];

    var_dump(Arr::set($ary, 'port', 3306));
    var_dump(Arr::get($ary, 'port'));
    var_dump(Arr::has($ary, ['port', 'pwsd']));
}

testAry();
testRountine();
