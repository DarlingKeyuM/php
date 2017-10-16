<?php  
// 取消对应的session 去掉一个
session_start();
unset($_SESSION['sbqname']);

// 去掉所有属性
session_destroy();
?>