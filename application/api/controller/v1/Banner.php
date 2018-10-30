<?php 
namespace app\api\controller\v1;
use think\Db;
use app\api\model\Banner as BannerModel;
/**
* 
*/
use app\api\validate\IDMustBePositiveInt;
class Banner
{
	/**
	 * [getBanner description]
	 * @url  /banner/:id
	 * @http get
	 * @id banner的id
	 */
	public function getBanner($id){
		$validate = new IDMustBePositiveInt();
		$result = $validate -> batch() -> goCheck(); //batch批量验证时使用
		//dump($validate->getError());
		return BannerModel::getBannerById($id);
	}

}





 ?>