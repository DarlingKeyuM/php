<?php
//连接数据库
  require("config/workchangyong.php");
  require("config/db.php");//引入
  //编辑博客
  if(isset($_POST['submit'])){ //是否触发
  	//获取input中的数据
	  $title=mysqli_real_escape_string($conn,$_POST['title']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符 用$_post 不能在当前页面刷新
	  $auther=mysqli_real_escape_string($conn,$_POST['auther']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符
	  $body=mysqli_real_escape_string($conn,$_POST['body']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符
	  //获取到update_id
  	  $update_id=mysqli_real_escape_string($conn,$_POST['update_id']);

	  if(!empty($title)&&!empty($auther)&&!empty($body)){
          //有内容
	  	//执行sql语句
	  	$query="UPDATE posts SET title='$title',auther='$auther',body='$body' WHERE id={$update_id}";//*************
        mysqli_query($conn,"set names utf8");
        if(mysqli_query($conn,$query)){
           header("location: index.php");
        }else{
        	echo "数据更新失败".mysqli_error($conn);
        }
	  }
  } 


  mysqli_query($conn,"set names utf8");
  // $id=$_GET('id');  从另一个页面触发 拿的是问号后面的(浏览器) 当前页面刷新拿不到 先执行
  $id=mysqli_real_escape_string($conn,$_GET['id']); //取数据库中拿id(数据库,变量参数) 
  $query="SELECT *FROM posts WHERE id={$id}"; //其他类型 通过花括号让变量正常被解读
  $result=mysqli_query($conn,$query);
  //获取数据 获取单条数据
  $poss=mysqli_fetch_assoc($result);
  // var_dump($post);
  //释放数据 (释放之后会清掉数据)
  mysqli_free_result($result);
  //断开连接
  mysqli_close($conn);

   
?>
<?php include("chouli/header.php") ?>
<div class="container">
	<h1 class="text-muted">编辑博客</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="form-group">
			<label for="">标题</label>
			<input type="text" class="form-control" name="title" value="<?php echo $poss['title'] ?>">
		</div>

		<div class="form-group">
			<label for="">作者</label>
			<input type="text" class="form-control" name="auther" value="<?php echo $poss['auther'] ?>">
		</div>

		<div class="form-group">
			<label for="">内容</label>
			<input type="text" class="form-control" name="body" value="<?php echo $poss['body'] ?>">
		</div>
        <input type="hidden" name="update_id" value="<?php echo $poss['id']; ?>">
		<input type="submit" value="ok" name="submit" class="btn btn-primary">
	</form>
</div>
<?php include("chouli/footer.php") ?>
