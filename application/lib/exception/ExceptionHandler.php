<?php
namespace app\lib\exception;
/**
*
*/
use think\exception\Handle;
use Exception;
use think\Request;
use think\Log;
use think\Config;
class ExceptionHandler extends Handle
{
	private $code;
	private $msg;
	private $erroCode;
	//接收异常 需要修改配置exception_handle,把namespace复制过去
	public function render(\Exception $e){
		if($e instanceof BaseException){
			$this -> code = $e -> code;
			$this -> msg = $e -> msg;
			$this -> errorCode = $e -> errorCode;
		}else{
			//如果开启了调试模式
			if(config('app_debug')){
				return parent::render($e);
			}
			$this -> code = 500;
			$this -> msg = 'sorry ,we make a mistake';
			$this -> errorCode = 999;
			$this -> recordErrorLog($e);
		}
		$request = Request::instance();
		$result = [
			'msg' => $this -> msg,
			'error_code' =>$this -> errorCode,
			'request_url' => $request = $request -> url()
		];
		return json($result,$this->code);
	}
	/**
	 * [recordErrorLog description]
	 * 将异常写入日志
	 */
	private function recordErrorLog(\Exception $e){
		//初始化log记录错误信息
		Log::init([
			'type' => 'File',
			'path' => LOG_PATH,
			'level' => ['error']
		]);
		Log::record($e -> getMessage(),'error');


	}



}
















 ?>