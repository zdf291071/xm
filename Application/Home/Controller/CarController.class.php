<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends Controller {
    public function mycar(){
        $mycarModel = M('Mycar');
        $user = $_SESSION['name'];

        $where = array();
        $where['user'] = $user;
        $result = $mycarModel -> where($where) ->select();


        $this->assign('result',$result);
        $this->display();
    }

    public function add_mycar(){
        $mycarModel = M('Mycar');
        if( $_POST ) {
            $_POST['address'] = $_POST['s1'] . $_POST['s2'] . $_POST['s3'];
            $_POST['user'] = $_SESSION['name'];
            //var_dump($_POST);

                $create = $mycarModel->create();
                $where = array();
                $where['user'] = $create['user'];
                $where['price'] = $create['price'];
                $where['name'] = $create['name'];
                $find = $mycarModel ->where($where) -> find();
                if($find){
                    $data['num'] = $find['num'] + $_POST['num'];
                    $saveData = $mycarModel -> where($where) -> save($data);
                    if($saveData){
                        $this->success('加入购物车成功！');
                    } else {
                        $this->error('加入购物车失败！');
                    }
                }else{
                    //var_dump($create);
                    if ($create) {

                        $addData = $mycarModel->add();
                        if ($addData) {
                            $this->success('加入购物车成功！');
                        } else {
                            $this->error('加入购物车失败！');
                        }
                    }
                }

        }
    }

    public function del_mycar(){
        $id = I('get.id','');
        $where = array();
        $where['id'] = $id;
        $result = M('Mycar') -> where($where) -> delete();
        if($result){
            $this->success('已移出购物车');
        }else{
            $this->error('移出购物车失败！');
        }
    }
}




















?>
