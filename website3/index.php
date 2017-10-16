<!-- 用户体验:只把不规格的东西清空 规格的还在
 单标签(input)有value 双标签没有Value 所有在内容中直接写
 		``模板 es6中-->
<!-- <?php phpinfo(); ?> -->
<?php
$msg="";
$msgClass="";// 弹窗效果
#验证用户有没有触发submit按钮事件
if(filter_has_var(INPUT_POST, "submit")){
 echo "123";
 #拿到需要的内容
 $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 #验证用户输入的内容是否为空
 if (!empty($name)&&!empty($email)&&!empty($message)) {
 	# code... 不为空
 	// 验证邮箱是否合法
 	if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
       $msg="请输入合法的邮箱!";
       $msgClass="alert-danger";
 	}else{
      //合法
 		$toEmail="466918306@qq.com";
 		$subject="课外拓展";
	    $body=	"<h2>
	            BJH1707050外出拓展
	             </h2>".
	             "<h4>姓名:".$name."</h4>	
	             <h4>邮箱:".$email."</h4>	
	             <h4>内容:".$message."</h4>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .="发自:".$name. "<".$email.">"."\r\n";
        #判断邮件发送是否成功
        if(mail($toEmail, $subject, $body,$headers)){
               $msg="邮件发送成功!";
               $msgClass="alert-success";
        }else{
        	  $msg="邮件发送失败!";
              $msgClass="alert-danger";
        }
 	}
 }else{
    $msg="请输入对应的内容!";
    $msgClass="alert-danger";
 }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP mail sender</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
<!-- 导航 -->
	<nav class="navbar navbar-default">
	<!-- navbar-default navbar-inverse 取反色 navbar-light 白 -->
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">邮件发送</a>
			</div>
		</div>
	</nav>
	<!-- form -->
	<div class="container">
	<?php if($msg!=""): ?>
	<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<lable>姓名</lable>
				<input type="text"
				name="name"
				class="form-control"
				value="<?php echo isset($_POST['name'])?$name:'' ?>"
				>
			</div>
			<div class="form-group">
				<lable>邮箱</lable>
				<!-- type变成email就不需要验证 -->
				<input type="text"  
                value="<?php echo isset($_POST['email'])?$email:'' ?>"
				name="email"
				class="form-control" >
			</div>
			<div class="form-group">
				<lable>信息</lable>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message'])?$message:''; ?></textarea>
			</div>
			<button class="btn btn-info btn-block" type="submit" name="submit">发送</button>
			<!-- btn-block是整行 -->
		</form>
	</div>
</body>
</html>