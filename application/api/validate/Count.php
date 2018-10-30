<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/3
 * Time: 18:01
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule=[
        'count'=>'isPositiveInteger|between:1,15',

    ];
}