<?php
namespace app\api\model;
//use app\api\model\BaseModel;
/**
* 
*/
class Image extends BaseModel
{
	protected $hidden = ['id','from','delete_time','update_time'];

	//读取器 get固定写法  Url为查询的最段 Attr固定写法
	public function getUrlAttr($value,$data){
		return $this -> getImageUrl($value,$data);
	}

}
















 ?>