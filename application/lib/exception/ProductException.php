<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/3
 * Time: 18:58
 */

namespace app\lib\exception;
use app\lib\exception\BaseException;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查参数';
    public $errorCode = 20000;
}