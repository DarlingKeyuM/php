<!-- SESSION 存到服务器下
登录注册一般用cookie local
把前台的东西存到后台前台只需要一个接口就可以
//存 改 删
 -->
<?php 
  if(isset($_POST['submit'])){
     // echo 123;
  	session_start(); //开始必须写这个
  	$_SESSION['sbqname']=$_POST['name'];
  	$_SESSION['sbqemail']=$_POST['email'];
  	print_r($_SESSION);
    header("Location: page2.php" ); //header是方法
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
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>