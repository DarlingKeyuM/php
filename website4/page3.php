<?php 
session_start();
// 改变session存储的值
// $_SESSION['sbqname']="Monica";
// 获取session存储的值
$name=isset($_SESSION['sbqname'])?$_SESSION['sbqname']:'sbqname属性不存在';
$email=isset($_SESSION['sbqemail'])?$_SESSION['sbqemail']:'sbqemail属性不存在';
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 3</title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
	<h2><?php echo $email; ?></h2>

</body>
</html>