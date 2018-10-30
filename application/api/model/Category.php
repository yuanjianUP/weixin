<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/4
 * Time: 16:37
 */

namespace app\api\model;



class Category extends BaseModel
{
    protected $hidden=['update_time'];
    public function img(){
        return $this -> belongsTo('image','topic_img_id','id');
    }
}