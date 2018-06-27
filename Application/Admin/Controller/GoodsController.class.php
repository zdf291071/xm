<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
    public function index(){
        if(!empty($_GET)){
            $map['goods_name']=array(array('like',"%{$_GET['goods_name']}%"));
            $data=D('goods')->where($map)->select();
            $this->assign('data',$data);
            $this->display();
        }else{
        $data=D('goods')->select();
        $data = strip_tags($data);

        $this->assign('data',$data);
        $this->display();
        }
    }


    public function add_goods(){
        if(!empty($_FILES)){
            header("Content-type:text/html;charset=utf-8");
            $config = array(
                'rootPath' => './Public/',    //根目录
                'savePath' => 'Photo/',  //保存路径
                'exts'       =>   array('jpg', 'gif', 'png', 'jpeg'),
                'saveName'   =>    $_FILES['name'],
                'autoSub'   =>   false
            );
            //附件被上传的路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            $info= $upload->upload($_FILES);
            if(!$info) {
                $this->error($upload->getError());
            }else{
                $goods=D('goods');
                $_POST['goods_img']=$_FILES['photo']['name']['0'];
                $_POST['goods_img2']=$_FILES['photo']['name']['1'];
                $z=$goods->add($_POST);
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


    public function del_goods(){
        $r=D('goods')->where($_GET)->delete();
        if($r){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }


    public function select_goods(){
        $data=D('goods')->where($_GET)->find();

        $this->assign('data',$data);
        $this->display();
    }


}

?>
