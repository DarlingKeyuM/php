<?php  
  function deleteData($sql){
        $mysqli =new mysqli("localhost","root","","people");
        if($mysqli->connect_errno){
           die($mysqli->connect_error);
        }
        $mysqli->query("set names utf8");
        $result=$mysqli->query($sql);
        if($result){
          echo "删除成功";
        }else{
        	echo "删除失败";
        }
        $mysqli->close();
        } 
        $sql="DELETE FROM customers WHERE id=5";
        deleteData($sql);
?>