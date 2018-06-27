<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function _initialize(){
        $user= session('name');
        if (empty($user)){
            $this->error('请登录',U('Admin/Login/index'));
        }
    }

    function index()
    {
        $mycar = M('mycar') -> select();
        $mycar = count($mycar);
        $this->assign('mycar',$mycar);

        $user_num = M('user') -> select();
        $user_num = count($user_num);
        $this->assign('user_num',$user_num);

        $comment = M('comment') -> select();
        $comment = count($comment);
        $this->assign('comment',$comment);

        $goods = M('Goods') -> select();
        $goods = count($goods);
        $this->assign('goods',$goods);

        $user=new \Model\IndexModel();
        $data=$user->getMainFrameData();
        //$data = D('Index')->getMainFrameData();
        $this->assign('data', $data);
        $this->display();
    }

    function logout(){
        session(null);
        redirect('Admin/Login/index');
    }




}