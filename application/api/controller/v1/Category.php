<?php
/**
 * Created by PhpStorm.
 * User: 袁健
 * Date: 2018/10/4
 * Time: 16:18
 */

namespace app\api\controller\v1;
use app\api\model\Category as categoryModel;
use app\lib\exception\CategoryException;
use think\Controller;

class Category extends Controller
{
    public function getAllCategory(){
        $categories = categoryModel::all([],'img');
        if(!$categories){
            throw new CategoryException();
        }
        return $categories;
    }
}