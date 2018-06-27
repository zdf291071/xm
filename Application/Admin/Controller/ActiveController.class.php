<?php
namespace Admin\Controller;
use Think\Controller;
class ActiveController extends Controller
{

    public function index()
    {
        $data = D('news')->select();
        $this->assign('data', $data);
        $this->display();
    }

    public function add_active()
    {
        header("Content-type:text/html;charset=utf-8");
        if (!empty($_POST)) {
            $news = D('news');
            $_POST = $news->create();
            $rst = $news->add($_POST);
            if ($rst) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }

    function edit_active()
    {
        header("Content-type:text/html;charset=utf-8");
        if (!empty($_GET)) {
            $id = $_GET['id'];
            $news = D('news');
            $data = $news->where("news_id=$id")->find();
            $this->assign('data', $data);
            $this->display();
        } else {
            $this->display();
        }

    }

    function update()
    {
        if (!empty($_POST)) {
            header("Content-type:text/html;charset=utf-8");
            $news = D('news');
            $data['news_title'] = $_POST['news_title'];
            $data['news_date'] = $_POST['news_date'];
            $data['news_con'] = $_POST['news_con'];
            $r = $news->where('news_id' == $_POST['news_id'])->save($data);
            var_dump($r);
            if ($r) {
                $this->success('修改成功', 'index');
            } else {
                $this->error('修改失败');
            }
        }
    }


    function delete_active(){
        if (!empty($_GET)) {
            $id = $_GET['id'];
            $news = D('news');
            $r=$news->delete($id);
            if($r){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }

    function del_news(){
        if (!empty($_POST)) {
            $news = D('news');
            $r=$news->delete($_POST);
            if($r){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }
}
?>
