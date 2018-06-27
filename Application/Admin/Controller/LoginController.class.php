<?php
namespace Admin\Controller;
use Model\LoginModel;
use Think\Model;
use Think\Controller;
class LoginController extends Controller{

	function index(){
        if(!empty($_POST)){
//            $verify=new \Think\Verify();
//            if(!$verify->check($_POST['captcha'])){
//                $this->error('验证码错误');
//            }else{
                $user=new \Model\AdminModel();
                $rst=$user->checkNamePwd($_POST['username'],$_POST['password']);
                if($rst===false){
                    $this->error('登录失败,用户名或密码错误',U('index'));
            }else{
                    $where = array();
                    $where['username'] = $_POST['username'];
                    $data = M('Admin') -> where($where) ->find();
                    session('gid',$data['gid']);
                    //登录信息永久保存$_SESSION
                    session('name',$_POST['username']);

                    //页面跳转到后台
                    $this->success('登陆成功',U('Index/index'));
                }
          //  }
        }else{
            $this->display();
        }
    }


    function verify()
    {
        $config = array(
            'seKey' => 'ThinkPHP.CN',   //验证码加密密钥
            'expire' => 1800,            // 验证码过期时间（s）
            'useZh' => false,           // 使用中文验证码
            'useImgBg' => false,           // 使用背景图片
            'fontSize' => 15,              // 验证码字体大小(px)
            'useCurve' => true,            // 是否画混淆曲线
            'useNoise' => true,            // 是否添加杂点
            'imageH' => 29,               // 验证码图片高度
            'imageW' => 150,               // 验证码图片宽度
            'length' => 4,               // 验证码位数
            'fontttf' => '',              // 验证码字体，不设置随机获取
            'bg' => array(243, 251, 254),  // 背景颜色
        );
        $verify = new \Think\Verify($config);
        $verify->codeSet = '0123456789';
        //show_list($verify);
        $verify->entry();
    }

    public function loginout()
    {
        session(null);
        redirect(U('Home/Login/login'));
    }


}