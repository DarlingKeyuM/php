<?php  
  function selectData($sql){
        $mysqli =new mysqli("localhost","root","","people");
        if($mysqli->connect_errno){
           die($mysqli->connect_error);
        }
        $mysqli->query("set names utf8");
        $result=$mysqli->query($sql);
        // var_dump($result); //object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(6) ["lengths"]=> NULL ["num_rows"]=> int(5) ["type"]=> int(0) }
        if($result->num_rows){
           $data=$result->fetch_all(MYSQLI_ASSOC);
           // print_r($data);  //默认是下标数组
           echo json_encode($data); //得到的是json数据
        }
        $mysqli->close();
        } 
        $sql="SELECT *FROM customers";
        selectData($sql);
?>