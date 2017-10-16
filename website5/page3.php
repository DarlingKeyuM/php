<?php  
    //存储多个值(数组)
    $users=["name"=>"monica","email"=>"a@gmail.com","age"=>30];
    $users=serialize($users);//数组->字节流
    setcookie('users',$users,time()+86400);

    $users1=unserialize($_COOKIE['users']);
    print_r($users1);
?>