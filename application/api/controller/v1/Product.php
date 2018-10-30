<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/3
 * Time: 17:33
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ProductException;
use app\lib\exception\ThemeException;
use think\Controller;
use app\api\validate\Count;
use app\api\model\Product as productModel;


class Product extends Controller
{
    //获取最近浏览的商品
    public function getRecent($count=15){
        (new count())->gocheck();
        $product = productModel::getMostRecent($count);
        if(!$product){
           throw new ProductException();
        }
        $product = $product->hidden(['summary']);
        return $product;
    }
    //获取指定分类下所有商品
    public function getAllInCategory($id){
        (new IDMustBePositiveInt())->goCheck();
        $products = productModel::getProductByCategoryID($id);
        if($products->isEmpty()){
            throw new ThemeException();
        }
        $product = $products->hidden(['summary'])->toArray();
        return $product;
    }
}