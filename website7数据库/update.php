<?php 
        function updateData($sql){
        $mysqli =new mysqli("localhost","root","","people");
        if($mysqli->connect_errno){
           die($mysqli->connect_error);
        }
        $mysqli->query("set names utf8");
        $result=$mysqli->query($sql);
        if($result){
          echo "更新成功";
        }else{
        	echo "更新失败";
        }
        $mysqli->close();
        } 
        $sql="UPDATE customers SET name='孙',email='sun@gmail.com',address='天津',city='天津城市',state='天津城区' WHERE id=10";
        updateData($sql);
?>