<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use app\api\validate\IDConllection;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

class Theme extends Controller
{
   public function getSimpleList($ids = ''){
    $IDConllection = new IDConllection();
    $IDConllection -> goCheck();
    $ids = explode(',',$ids);
    return ThemeModel::with('topicImg,headImg')->select($ids);
   }

   public function getComplexOne($id){
   		$theme = ThemeModel::getThemeWithProducts($id);
   		if(!$theme){
   			throw new ThemeException();
   		}
   		return $theme;
   }

}
