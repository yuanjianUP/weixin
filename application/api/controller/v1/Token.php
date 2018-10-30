<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/6
 * Time: 14:47
 */

namespace app\api\controller\v1;

use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    /**
     * 获取用户令牌(登录)
     * @param string $code
     */
    public function getToken($code=' '){
        (new TokenGet())->goCheck();
        $wx = new UserToken($code);
        $token = $wx->get();
        return [
            'token'=>$token,
        ];
    }
}