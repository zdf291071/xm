<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{
    public function index(){
        $data=D('user')->select();

        $this->assign('data',$data);
        $this->display();
    }

    public function del_user(){
        $r=D('user')->where($_GET)->delete();
        if($r){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
}

?>
