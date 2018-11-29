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
namespace app\add\controller;
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
	public function weixin()
    {	
    	return $this->fetch(':weixin');
    }
	
	public function upweixin(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('weixin')->insert($data);
			if($ok){
				$this->success('添加成功',url('add/index/index'));
			}else{
				$this->error('添加失败');
			}
		}
	}
	public function setweixin(){
		if ($this->request->isGet()) {
            $data = $this->request->param();
			$ok=Db::name('weixin')->where('id',$data['id'])->find();
			$this->assign("data", $ok);
    		return $this->fetch(':setweixin');
		}
	}
	public function editweixin(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('weixin')->update($data);
			if($ok){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
			
		}
	}
	
	
	
	public function xiaochengxu()
    {	
    	return $this->fetch(':xiaochengxu');
    }
	public function upxiaochengxu(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('xiaochengxu')->insert($data);
			if($ok){
				$this->success('添加成功',url('add/index/index'));
			}else{
				$this->error('添加失败');
			}
		}
	}
	public function setxiaochengxu(){
		if ($this->request->isGet()) {
            $data = $this->request->param();
			$ok=Db::name('xiaochengxu')->where('id',$data['id'])->find();
			$this->assign("data", $ok);
    		return $this->fetch(':setxiaochengxu');
		}
	}
	public function editxiaochengxu(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('xiaochengxu')->update($data);
			if($ok){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
			
		}
	}
	
	
	
	public function wangzhan()
    {	
    	return $this->fetch(':wangzhan');
    }
	public function upwangzhan(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('wangzhan')->insert($data);
			if($ok){
				$this->success('添加成功',url('add/index/index'));
			}else{
				$this->error('添加失败');
			}
		}
	}
	public function setwangzhan(){
		if ($this->request->isGet()) {
            $data = $this->request->param();
			$ok=Db::name('wangzhan')->where('id',$data['id'])->find();
			$this->assign("data", $ok);
    		return $this->fetch(':setwangzhan');
		}
	}
	public function editwangzhan(){
		if ($this->request->isPost()) {
            $data = $this->request->param();
			$ok=Db::name('wangzhan')->update($data);
			if($ok){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
			
		}
	}
	
	
}
