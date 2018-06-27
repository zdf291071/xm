<?php
//数据
$arr= array(
  array("小米6","约有1件"),
  array("红米Note 4X","约有2件"),
  array("小米MIX","约有3件"),
  array("小米MAX2","约有4件"),
  array("小米6s","约有5件"),
  array("小米5X","约有6件"),
  array("手环","约有7件"),
  array("耳机","约有8件"),
  array("充电宝","约有9件"),
  array("路由器","约有10件")
);
//数组长度
$l=count($arr);
//循环
$str= "";
for($i=0;$i<$l;$i++){
	$str .= "|".$arr[$i][0].",".$arr[$i][1];
}
echo $str;
?>