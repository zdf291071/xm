<?php
namespace Admin\Controller;


use Think\Controller;


class AdminController extends Controller{

    public function index(){
        $data=D('admin')->where('id!=0')->select();

        $this->assign('data',$data);
        $this->display();
    }

    public function add_admin()
    {
        if(!empty($_POST)){
            $user= new \Model\AdminModel();
            if(!$user->create()){
                show_bug($user->getError());
                $this->error('添加失败');
            }else{
                $_POST['id']=$user->count();
                $z=$user->add($_POST);
                if($z){
                    $this->success('添加成功');
                }else{
                    $this->error('添加失败');
                }
            }
        }else{
            $this->display();
        }
    }

    public function edit_admin(){
        $admin=D('admin');
        if(!empty($_POST)){
            $_POST=$admin->create($_POST);
            $r=$admin->save($_POST);
            if($r){
                $this->success('修改成功',U('index'));
            }else{
                $this->success('修改失败');
            }
        }else{
            $data=$admin->where($_GET)->find();

            $this->assign('data',$data);
            $this->display();
        }
    }

    public function del_admin(){
        $r=D('admin')->where($_GET)->delete();
        if($r){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }

}










?>
