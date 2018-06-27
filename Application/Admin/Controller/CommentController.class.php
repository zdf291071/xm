<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller{
    public function index(){
        $data=D('comment')->select();
        $this->assign('data',$data);
        $this->display();
    }
}

?>
