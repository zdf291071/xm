<?php
namespace Model;
use Think\Model;

class AdminModel extends Model{
    //一次性输出所有的错误信息
    protected $patchValidate    =   true;
    //实现表单项目验证
    //通过重写父类属性——validate实现变淡验证
    protected $_validate        =   array(
        //验证用户名,require必须填写项目
        //(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('username','require','用户名必须填写'),
        array('username','','帐号名称已经存在！',0,'unique',1),
        array('password','require','密码必须填写'),
        array('password','6,20','电话长度不符！',3,'length'),
        array('gid',array(1,2,3),'值的范围不正确！',2,'in'),
        array('status','require','身份必须填写'),

    );


    function checkNamePwd($name, $pwd){
        $info = $this->getByUsername($name);
        if ($info != null){
            if ($info['password'] != $pwd) {
                return false;
            } else {
                return $info;
            }
        } else {
            return false;
        }
    }
}
?>
