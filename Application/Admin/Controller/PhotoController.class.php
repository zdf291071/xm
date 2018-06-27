<?php
namespace Admin\Controller;
use Think\Controller;
class PhotoController extends Controller{
    public function index(){
        $photo=D('photo');
        $data=$photo->select();

        $this->assign('data',$data);
        $this->display();
    }
    public function add_photo(){
        if(!empty($_FILES)){
            header("Content-type:text/html;charset=utf-8");
            $config = array(
                'rootPath' => './Public/',    //根目录
                'savePath' => 'Upload/',  //保存路径
                'exts'       =>   array('jpg', 'gif', 'png', 'jpeg'),
                'saveName'   =>    $_FILES['name'],
                'autoSub'   =>   false
            );
            //附件被上传的路径：根目录/保存目录路径/创建日期目录
            $upload = new \Think\Upload($config);
            $info = $upload->uploadOne($_FILES['photo']);
            if(!$info) {
            $this->error($upload->getError());
            }else{
                //var_dump($info);
                $photo=D('photo');
                $_POST['photo_src'] = $info['savepath'] . $info['savename'];
                //var_dump($photo -> create());
                if($photo -> create()){
                    $z=$photo->add();
                    if($z){
                        $this->success('上传成功！',U('Admin/Photo/index'));
                    }else{
                        $this->error('上传失败');
                    }
                }

            }


            }else{
            $this->display();
        }
    }

    function edit_photo(){
        if(!empty($_GET)){
            $map['photo_id']=$_GET['id'];
            $data=D('photo')->where($map)->find();

            $this->assign('data',$data);
            $this->display();
        }else{
            $this->display();
        }
    }

    function del_photo(){
        $map['photo_id']=$_GET['id'];
        $z=D('photo')->where($map)->delete();
        if($z){
            $this->success('成功');
        }else{
            $this->error('失败');
        }
    }


}

?>
