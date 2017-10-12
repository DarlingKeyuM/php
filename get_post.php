<div class="container">
	<?php 
	//$_get
	 // echo $_GET["sbqname"];  //之前没有点提交
	// if(isset($_GET["sbqname"])&&isset($_GET["sbqemail"])){  //判断是否点了提交按钮
	// 	// echo $_GET["sbqname"];
	// 	$name=$_GET["sbqname"];
	// 	$email=$_GET["sbqemail"];
	// 	echo $name.":".$email;
	// }
	//$_post
	// if(isset($_POST["sbqname"])&&isset($_POST["sbqemail"])){  //判断是否点了提交按钮 得到的值是真/假
	// 	// echo $_GET["sbqname"];
	// 	$name=$_POST["sbqname"];
	// 	$email=$_POST["sbqemail"];
	// 	if(!empty($name)&& !empty($email)){ //空真 非空假
	// 	echo $name.":".$email;
	//     }
	//     print_r($_POST);
	// }
	//$_REQUEST 使用GET和post均可以
	if(isset($_REQUEST["sbqname"])&&isset($_REQUEST["sbqemail"])){  //判断是否点了提交按钮 得到的值是真/假
		// echo $_GET["sbqname"];
		$name=$_REQUEST["sbqname"];
		$email=$_REQUEST["sbqemail"];
		if(!empty($name)&& !empty($email)){ //空真 非空假
		echo $name.":".$email;
	    }
	    print_r($_REQUEST);
	}
	//查询URL地址后面的参数 必须是GET
	// echo $_SERVER['QUERY_STRING'];
	 ?>
	
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

</head>
<body>
		<div class="container">
		<!-- form的另一个属性是method 不写默认为get get就可以在地址中改变 大小写均可 url?后面的所有值 所有参数值以?形式拼接传到后台 传递大小有限制
		post 传递大小有限制但是足够大 xg 安全系数够高
        request
		-->
			<form action="get_post.php" method="GET">  
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="sbqname">
				</div>
				<br>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="sbqemail">
				</div>
				<br>
				<input type="submit" value="提交" class="btn btn-primary btn-block">
			</form>
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php  echo $_SERVER['PHP_SELF']."?name=111";?>" 
				  class="btn btn btn-success btn-block">111</a></li>
			</ul>
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php  echo $_SERVER['PHP_SELF']."?name=222";?>" 
				  class="btn btn btn-info btn-block">222</a></li>
			</ul>
			<h1>
				<?php if(isset($_GET["name"])){
					echo $_GET['name'];
					} ?>
			</h1>
		</div>
</body>
</html>