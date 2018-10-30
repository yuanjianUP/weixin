<?php

namespace app\api\model;


class Product extends BaseModel
{
    //
    protected $hidden = ['delete_time','create_time','update_time','from','summary','category_id'];
    public static function getMostRecent($count){
        $product = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $product;
    }
    public static function getProductByCategoryID($id){
        $product = self::where(['category_id'=>$id])->select();
        return $product;
    }
}
