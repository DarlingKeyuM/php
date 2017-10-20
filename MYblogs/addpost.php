<?php
//连接数据库
 require("config/workchangyong.php");
  require("config/db.php");//引入
  if(isset($_POST['submit'])){ //是否触发
  	//获取input中的数据
	  $title=mysqli_real_escape_string($conn,$_POST['title']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符 用$_post 不能在当前页面刷新
	  $auther=mysqli_real_escape_string($conn,$_POST['auther']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符
	  $body=mysqli_real_escape_string($conn,$_POST['body']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符
	  if(!empty($title)&&!empty($auther)&&!empty($body)){
          //有内容
	  	//执行sql语句
	  	$query="INSERT INTO posts(title,auther,body) VALUES('$title','$auther','$body')";
        mysqli_query($conn,"set names utf8");
        if(mysqli_query($conn,$query)){
           header("location: index.php");
        }else{
        	echo "数据插入失败".mysqli_error($conn);
        }
	  }
  }  
?>
<?php include("chouli/header.php") ?>
<div class="container">
	<h1 class="text-muted">添加博客</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="form-group">
			<label for="">标题</label>
			<input type="text" class="form-control" name="title">
		</div>

		<div class="form-group">
			<label for="">作者</label>
			<input type="text" class="form-control" name="auther">
		</div>

		<div class="form-group">
			<label for="">内容</label>
			<input type="text" class="form-control" name="body">
		</div>

		<input type="submit" value="add" name="submit" class="btn btn-primary">
	</form>
</div>
<?php include("chouli/footer.php") ?>
