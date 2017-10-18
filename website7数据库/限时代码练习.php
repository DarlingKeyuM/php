<?php
 //添加 删除 更新 查询
 function data($a){
    $my=new mysqli("localhost","root","","people");
    if($my->connect_errno){
    	die($my->connect_error);
    }
    $my->query("set names utf8");
    $b=$my->query($a);
    if($b){
    	echo "插入成功";
    }else{
    	echo "插入失败";
    }
    if($b->num_rows){
    	$c=$b->fetch_all(MYSQLI_ASSOC);
    	echo json_encode($c);
    }
    $my->close();
 }  
 $a="INSERT INTO customers(name,email,address,address,city,states) VALUES('a','a@qq.com','开发阶段','北京','昌平区')";
 $a="DELETE FROM customers WHERE id=5";
 $a="UPDATE customers SET name='孙' WHERE id=5";
 $a="SELECT * FROM customers";
 data($a);
?>