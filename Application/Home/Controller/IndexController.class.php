<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Home\Common\HomeController;
class IndexController extends HomeController {
    public function index(){

            $this -> display();
    }
    public function show(){
        $photo = I('get.photo','');
        $name = I('get.name','');
        $name = strip_tags($name);
        $price = I('get.price','');
        $this->assign('name',$name);
        $this->assign('price',$price);
        $this -> assign('photo',$photo);
        $this -> display();
    }

}