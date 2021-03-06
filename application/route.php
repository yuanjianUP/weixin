<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//Route::rule('路由表达式','路由地址','请求类型','路由参数(数组)','变量规则(数量)');
//get,post,delete,put
//banner
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');
//theme
Route::get('api/:version/theme','api/:version.Theme/getSimpleList');
Route::get('api/:version/theme/:id','api/:version.Theme/getComplexOne');
//category
Route::get('api/:version/category','api/:version.Category/getCategories');
Route::get('api/:version/category/all','api/:version.category/getAllCategory');

//product
Route::get('api/:version/product/recent','api/:version.Product/getRecent');
Route::get('api/:version/product/by_category','api/:version.product/getAllInCategory');
Route::get('api/:version/product/all','api/:version.category/getAllCategory');
//token
Route::post('api/:version/token/user','api/:version.token/getToken');
