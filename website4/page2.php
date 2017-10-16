<?php
session_start();
$name=$_SESSION['sbqname'];  //这里的值是page3页面改变的值 服务器
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 2</title>
</head>
<body>
	<h2>你的名字是:<?php echo $name; ?></h2>
	<a href="page3.php">Go to Page 3</a>
</body>
</html>