<?php  
  function data($a){
    $my=new mysqli("localhost","root","","people");
    if($my->connect_errno){
      die($my->connect_error);
    }
    $my->query("set names utf8");
    $b=$my->query($a);
    if($b){
      echo "成功"; 
    }else{
      echo "失败";
    }
    if($b->num_rows){
      $c=$b->fetch_all(MYSQLI_ASSOC);
      echo json_encode($c);
    }
    $my->close();
  }
  // $a="INSERT INTO customers (name,email,address,city,state) VALUES ('MIAO','5@qq.com','定泗路','北京','昌平区')";
  // $a="DELETE FROM customers WHERE id=8";
  // $a="UPDATE customers SET name='小小' WHERE id=6";
  $a="SELECT * FROM customers";

  data($a);
?>