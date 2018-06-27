<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/13
 * Time: 19:49
 */

namespace Home\Common;
use Think\Controller;


class HomeController extends Controller{
    public function _initialize(){
        $user= session('name');
        if (empty($user)){
            $this->error('请登录',U('Home/Login/login'));
        }
    }
}