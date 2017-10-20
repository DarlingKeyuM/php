<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
      <a class="navbar-brand" href="#">注册 & 登录</a>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li>
        	<a href="#">
        	<?php if (isset($_SESSION['username'])): ?>
        		<?php echo $_SESSION['username']; ?>
        	<?php endif; ?>
        	<!-- Home -->
        	</a>
    	</li>
        <li>
	        <a href="<?php echo isset($_SESSION['success'])?'login':'login' ?>.php">
	        <!-- NewBlogs -->
	        <?php if (isset($_SESSION['success'])): ?>
	        	<?php echo "退出"; ?>
	            <?php else: ?>
	            <?php echo "登录"; ?>
	        <?php endif; ?>
	        </a>
        </li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</body>
</html>