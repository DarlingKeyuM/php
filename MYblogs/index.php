<!-- 高内聚 低耦合-->
<?php
  require("config/workchangyong.php");
  require("config/db.php");//引入
  //设置utf8编码
  mysqli_query($conn,"set names utf8");
  //设置sql语句
  $query="SELECT * FROM posts ORDER BY create_at DESC"; //降序
  //执行语句
  $result=mysqli_query($conn,$query);
  //获取所有数据 
  $posts=mysqli_fetch_all($result,MYSQLI_ASSOC); //至少两个参数
  // var_dump($posts);
  //释放数据 (释放之后会清掉数据)
  mysqli_free_result($result);
  //断开连接
  mysqli_close($conn);
?>
<?php include("chouli/header.php") ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach ($posts as $pos): ?>
			<div class="well">
				<h3><?php echo $pos['title']; ?></h3>
				<p>
				   <strong>作者:</strong>
				   <?php echo $pos['auther'] ?>
				</p>

				<p>
				   <strong>时间:</strong>
				   <?php echo $pos['create_at'] ?>
				</p>

				<p>
				   <?php echo $pos['body'] ?>
				</p>

				<a href="post.php?id=<?php echo $pos['id'] ?>" class="btn btn-info">博客详情</a>
				<!-- 一套模板 -->
			</div>
		<?php endforeach; ?>
	</div>
<?php include("chouli/footer.php") ?>
