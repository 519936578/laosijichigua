<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\select\controller;
use think\Db;
use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{
	public function _initialize()
    {
		if(cmf_is_user_login()==false){
        	$this->redirect('user/login/index');
    	}
    }
    public function index()
    {	
    	return $this->fetch(':index');
    }
	public function select(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$name=$data['name'];
			switch($data['text']){
				case '微信公众号':
					$ok = Db::name('weixin')->where('name','like',"%$name%")->order("id desc")->select()->toArray();;
					$url=url('add/index/setweixin');
					break;
				case '微信小程序':
					$ok = Db::name('xiaochengxu')->where('name','like',"%$name%")->order("id desc")->select()->toArray();;
					$url=url('add/index/setxiaochengxu');
					break;
				case '网站':
					$ok = Db::name('wangzhan')->where('name','like',"%$name%")->order("id desc")->select()->toArray();;
					$url=url('add/index/setwangzhan');
					break;
			}
			foreach($ok as $key=>$val){
//				$ok[$key]['erweima']="/public/upload/".$val['erweima'];
				$ok[$key]['bianji']=$url."?id=".$val['id'];
			}
			if(count($ok)==0){
				$this->error("404");
			}else{
				$this->success($ok);
			}

		}
	}
	
}
