<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/6
 * Time: 14:49
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code'=>'require|isNotEmpty',
    ];
    protected $message = [
        'code'=>'没有code还想拿token',
    ];
}