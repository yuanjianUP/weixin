<?php 
namespace app\api\model;
use think\Model;
/**
* 
*/
class Banner extends BaseModel
{
	//设置下面的$hidden框架将自动过滤掉
	protected $hidden = ['update_time','delete_time'];
	//多对一 模型关联
	public function item(){
		return $this -> hasMany('BannerItem','banner_id','id');
	}
	public static function getBannerById($id){
		$banner = self::with(['item','item.img'])->find($id);
		return $banner;
	}


}












 ?>