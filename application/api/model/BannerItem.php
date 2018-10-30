<?php 
namespace app\api\model;
use think\Model;
/**
* 
*/
class BannerItem extends BaseModel
{
	protected $hidden = ['id','img_id','banner_id','update_time','delete_time'];

	//一对一 关联模型
	public function img(){
		return $this -> belongsTo('image','img_id','id');
	}
}



















 ?>
