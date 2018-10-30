<?php 
namespace app\api\validate;
use think\validate;
use think\Request;
use app\lib\exception\ParameterException;
/**
*
*/
class BaseValidate extends Validate
{
	public function goCheck(){
		$request = Request::instance(); //获取request的实例
		$params = $request->param();
		if(!$this -> check($params)){
			$exception = new ParameterException(
				[
					'msg'=>is_array($this -> error) ? implode(';',$this->error):$this->error,
				]);
				throw $exception;
			}
			return true;
		}

		//$value验证的数据
	protected function isPositiveInteger($value,$rule='',$data='',$field=''){
		if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
			return true;
		}
		return false;
	}
   protected function isNotEmpty($value,$rule='',$data='',$field=''){
		if(empty($value)){
			return $field.'不能回空';
		}else{
			return true;
		}
   }

}








 ?>


