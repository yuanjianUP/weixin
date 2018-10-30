<?php 
namespace app\lib\exception;
use think\Exception;
/**
* 
*/
class BaseException extends Exception
{
	
	public $code = 400;
	public $msg = 'invalid parame';
	public $errorCode = 999;
	/**
	 * [__construct description]
	 * @param array 关联数组只包含code,msg和errorCode,且不应该是空值
	 */
	function __construct($parames='')
	{
		if(!is_array($parames)){
			return;
		}
		if(array_key_exists('code',$parames)){
			$this -> code = $parames['code'];
		}
		if(array_key_exists('msg',$parames)){
			$this -> msg = $parames['msg'];
		}
		if(array_key_exists('erroCode',$parames)){
			$this -> errorCode = $parames['errorCode'];
		}
	}
}








 ?>