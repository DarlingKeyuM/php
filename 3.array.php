<?php 
//array:数组 ---存储一堆数据的集合
//下标数组:下标以0开始 以 -0结尾
//关联数组:以第一个添加的名字开头 以-0结尾
//下标数组
$people=array("Ann","Mike","Kevin");
//echo printf只能打印单个 不能打印多个 (数组)
echo $people[1]; //mike
// echo $people[3]; //数组越界


$ids=[23,56,42];
echo $ids[2]; //42

$cars=["Honda","Toyota","BYD"];
$cars[3]="BMW";
echo $cars[3];
echo count($cars); //4

//打印数组的方法
print_r($cars);
echo "<hr>";

//万能打印方法
var_dump($cars);
echo "<hr>";

//关联数组
$people=array("Ann"=>35,"Emily"=>20,"Henry"=>23);
echo $people["Emily"]; //20
echo "<hr>";
$ids=[22=>"Henry",25=>"join"]; //Henry
echo $ids[22];
$ids[35]="Emily";
echo $ids[35];
echo "<hr>";
print_r($ids);

//观察
echo "<hr>";
$cars[]="benchi";
print_r($cars);
echo "<hr>";

$ids[]="jhon";
// print_r($ids);
$people[]=55;
print_r($people); //没有数字就是0(字符串)

//多维数组
echo "<hr>";
$cars=array(
    array("Honda",20,10),
    array("dz",20,20),
    array("Ford",15,10)
);
echo $cars[2][1];

?>