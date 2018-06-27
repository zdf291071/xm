<?php
namespace Admin\Controller;
use Think\Controller;
class ListController extends Controller{
    public function index(){
        $list=D('list');
        $data=$list->select();

        $this->assign('data',$data);
        $this->display();
    }
    public function add_list(){
        if(!empty($_POST)){
            $list=D('list');
            $array=explode(",",$_POST['list_pname']);

            $_POST['list_pname']=$array['1'];
            $_POST['list_pid']=$array['0'];
            $_POST['list_id']=$_POST['list_pid']+1;
            $z=$list->add($_POST);
            if($z){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }else {
            $list = D('list');
            $data = $list->select();

            $this->assign('data', $data);
            $this->display();
        }
    }


    function edit_list()
    {
        header("Content-type:text/html;charset=utf-8");
        $list=D('list');
        $r=$list->field('list_id')->find($_GET['name']);
        $data=$list->select();


        $this->assign('list_name',$_GET['name']);
        $this->assign('list_id',$r['list_id']);
        $this->assign('data',$data);
        $this->display();

    }
    function update_list(){
        $array=explode(",",$_POST['list_pname']);
        $_POST['list_pname']=$array['1'];
        $_POST['list_pid']=$array['0'];
        $_POST['list_id']=$_POST['list_pid']+1;
        $r=D('list')->save($_POST);
        if($r){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }

    }

    function del_list(){
        var_dump($_GET);
        $list=D('list');
        $map['list_name']=$_GET['list_name'];
        $r=$list->where($map)->delete();
        if($r){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }



}
?>
