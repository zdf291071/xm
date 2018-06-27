<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller{
    public function index(){
        if(!empty($_GET)){
            $map['id']=$_GET['keyword'];
            $data=D('dingdan')->where($map)->select();

            $this->assign('data',$data);
            $this->display();
        }else{
            $data=D('dingdan')->select();
            $this->assign('data',$data);
            $this->display();
        }
    }

    public function edit_order(){
        $data=D('dingdan')->where($_GET['id'])->find();
        $user=D('user')->where($_GET)->find();

        $this->assign('user',$user);
        $this->assign('data',$data);
        $this->display();

    }

    public function del_orders(){
        $r=D('dingdan')->where($_GET)->delete();

        if($r){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }

    public function update(){
        if(!empty($_POST)){

            $map['status']=$_POST['status'];
            $r=D('dingdan')->where($_POST['id'])->save($map);
            if($r){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }else{
            $map['id']=$_GET['id'];
            $r=D('user')->where($map)->save($_GET);
            if($r){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }

    }
}
?>
