<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/4
 * Time: 16:46
 */

namespace app\lib\exception;




class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查商品id';
    public $errorCode = 20000;
}