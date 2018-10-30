<?php 
namespace app\api\model;
use think\Model;
/**
* 
*/
class BaseModel extends Model
{
	protected function getImageUrl($value,$data){
		$finalUrl = $value;
		if($data['from']==1){
			$finalUrl = config('img_prefix').$value;
		}
		return $finalUrl;
	}
}










 ?>