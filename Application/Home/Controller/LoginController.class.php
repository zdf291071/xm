<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index()
    {
        if(empty($_SESSION['user']))
        {
            $this -> redirect("Login/login");
        }else if($_SESSION['gid']==1){
            $this -> display();
        }else{
            $this -> redirect("Login/login");
        }
    }

    public function register()
    {
        //echo $_GET['register'];
        if ($_GET['register'] = "注册") {
            if (!empty($_POST)) {
                header('Content-type:text/html;charset=utf-8');
                $user=D('User');
                //show_list($user);
                if (!$user->create()) {
                    show_list($user->getError());
                    return false;
                }
                $user->passwd = sha1($_POST['passwd']);
                $user->password = sha1($_POST['password']);
                $data = $user -> add();
                if ($data) {
                    $this->success("注册成功！");
                } else {
                    $this->error("注册失败！");
                }
            }
            $this->display();
        }else{
            $this->error("非法注册...");
        }
    }

    function repass(){
         if($_POST){
             $_user = $_POST['user'];
             $_email = $_POST['email'];
             $_phone = $_POST['phone'];
             $where = array();
             $where['username'] = $_user;
             $where['email'] = $_email;
             $where['phone'] = $_phone;
             $data = M('User') ->where($where) ->find();
             if($data){
                 $_password = sha1($_POST['password']);
                 $map=array();
                 $map['id'] = $data['id'];
                 $result = M('User') -> where($map) -> save($_password);
                 if($result){
                     $this->success('修改成功！',U("Home/Login/login"));
                 }else{
                     $this->error('修改失败！');
                 }
             }

         }
        $this->display();
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
            'imageH' => 33,               // 验证码图片高度
            'imageW' => 110,               // 验证码图片宽度
            'length' => 4,               // 验证码位数
            'fontttf' => '',              // 验证码字体，不设置随机获取
            'bg' => array(243, 251, 254),  // 背景颜色
        );
        $verify = new \Think\Verify($config);
        //show_list($verify);
        $verify->entry();
    }
    public function login()
    {
        $this -> display();
    }

    public function log()
    {
        if( $_POST ){

            $user = M('User');
            $admin = M('Admin');

            $verify = new \Think\Verify();
            if (!$verify -> check($_POST['verify'])) {
                $this -> error('验证码有误！');
            }
            $_user = $_POST['user'];
            $_passwd = sha1($_POST['passwd']);
            $res=$user ->where("'{$_user}' = name AND '{$_passwd}' = pass") -> find();
            $res1 = $admin ->where("'{$_user}' = username AND '{$_passwd}' = password") -> find();
            if($res || $res1)
            {
                session('name',$_user);
                $this->success('登录成功！',U('Home/Index/index'));

            }else{
                $this->error("登录失败,账户或密码不正确...");
            }
        }

    }
    public function loginout()
    {
        session(null);
        redirect(U('Home/Login/login'));
    }

}










?>
