<?php
namespace app\api\validate;
/**
*
*/
class IDConllection extends BaseValidate
{
	protected $rule = [
		'ids' => 'require|IDCheck',
	];
	protected $message = [
		'ids'=>'id必须是以,隔开的正整数'
	];
	protected function IDCheck($value){
		$value = explode(',',$value);
		if(empty($value)){
			return false;
		}
		foreach ($value as $id) {
			if(!$this->isPositiveInteger($id)){
				return false;
			}
			return true;
		}
	}
}
























 ?>