<?php 
namespace app\api\validate;
/**
* 
*/
use think\Validate;

class TestValidate extends validate
{
	protected $rule = [
		'name'=>'require|max:10',
		'email'=>'email'
	];
}




 ?>