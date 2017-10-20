<?php  
  require("config/workchangyong.php");
  require("config/db.php"); //呈现数据第一步要连接数据库
  //实现删除博客
  if(isset($_POST['delete'])){
  	echo "AAA";
  	$delete_id=mysqli_real_escape_string($conn,$_POST['delete_id']);
  	var_dump($delete_id);
  	//sql语句
  	$query="DELETE FROM posts WHERE id='$delete_id'";
  	if(mysqli_query($conn,$query)){
        header("location: index.php");
  	}else{
  		echo "error".mysqli_error($conn);
  	}
  }
  //查询单条信息
  mysqli_query($conn,"set names utf8");
  // $id=$_GET('id');  从另一个页面触发 拿的是问号后面的(浏览器) 当前页面刷新拿不到
  $id=mysqli_real_escape_string($conn,$_GET['id']); //取数据库中拿id(数据库,变量参数) 可以除掉特殊字符
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
		<h1>博客详情</h1>
			<div class="well">

				<h3><?php echo $poss['title']; ?></h3>
				<p>
					<strong>ID:</strong>
				   <?php echo $poss['id'] ?>
				</p>
				<p>
				   <strong>作者:</strong>
				   <?php echo $poss['auther'] ?>
				</p>

				<p>
				   <strong>时间:</strong>
				   <?php echo $poss['create_at'] ?>
				</p>

				<p>
				   <?php echo $poss['body'] ?>
				</p>
				<!-- 一套模板 -->
                 <a href="<?php echo ROOT_URL ?>" class="btn btn-primary">返回主页</a>
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="pull-right">
                     <input type="hidden" name="delete_id" value="<?php echo $poss['id'] ?>"> 
                     <!-- 得到id -->
                 	<input type="submit" name="delete" value="delete" class="btn btn-danger">
                 </form>
                 <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $poss['id']; ?>" class="btn btn-info">编辑</a>
			</div>
	</div>
<?php include("chouli/footer.php") ?>
