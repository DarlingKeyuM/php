<!-- COOKIE -->
<?php 
#监听用户是否触发了submit方法
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	setcookie('username',$username,time()+3600);//cookie属性名 存啥 时间函数(当前的时间) 3600是一个小时  86400s
	header("Location:page2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="username" placeholder="enter ur name!">
		<input type="submit" value="Submit" name="submit">

	</form>
</body>
</html>