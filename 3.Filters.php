<div class="container">
		<?php 
		//filter_has_var 有没有把值拿过来
		//filter_input 针对input输入过来的
		//filter_var 针对变量(常用)
		//filter_input_array 用来匹配
		//filter_var_array 用来匹配
		//检查是否存在data的name属性
		// if(filter_has_var(INPUT_POST, "data1")){  //inputpost必须大写
		// 	echo "data存在!";
		// 	$email=$_POST["data1"];
		// 	// echo $email;
		//     //过滤掉不合法的字符
		// 	$email=filter_var($email,FILTER_SANITIZE_EMAIL);  //$email变量
		// 	echo $email;
		// 	//验证是否是一个有效的邮箱
		// 	// if(filter_input(INPUT_POST, "data1",FILTER_VALIDATE_EMAIL)){
		// 	if(filter_var($email,FILTER_VALIDATE_EMAIL)){

		// 	echo "邮箱合法";
		// 	}else{
		// 	echo "邮箱不合法";
		//     }
		// }else{
		// 	echo "data不存在!";
		// }
		/* 
		审核规则 过滤
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS   //会把带有功能性的东西去掉
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证规则 判断真假(校验)
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL  //必须写@
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
		//练习 验证一个变量中的值,是否是合法的数值
		// $var=23;//"23"也对
		// //验证是否是一个有效的邮箱
		// if(filter_var($var,FILTER_VALIDATE_INT)){
		// echo "数值合法";
		// }else{
		// echo "数值不合法";
	 //    }
		//练习 去掉字符 留下数字
		// $str="dkfjgklj5584641dfsdsf4564s5s5we6e6t";
		// $str1=filter_var($str,FILTER_SANITIZE_NUMBER_INT);  //$email变量
  //       echo $str1;

        //特殊字符
        // $var ="<script>alert(1)</script>";
        // // echo $var;
        // echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

        //验证数组中每个元素
        // $a=array(
        // 	"data1"=>FILTER_VALIDATE_EMAIL,
        // 	"data2"=>array(
        // 		'filter'=>FILTER_VALIDATE_INT,
        // 		'options'=>array(
        // 			'min_range'=>1,
        // 			'max_range'=>150
        // 		)
        // 	  )//里面的东西数规定好的
        // 	);
        // print_r(filter_input_array(INPUT_POST, $a));

        //验证form表单中input的内容,第一个input一定是email 第二个input一定是数值,并且不能小于1,大于150
  //       if(filter_has_var(INPUT_POST, "data1")){
  //           $data3=$_POST["data1"];
  //       	if(filter_var($data3,FILTER_VALIDATE_EMAIL)){
		// 	echo $data3;
		// 	}else{
		// 	echo " ";
		//     }
		// }else{
		// echo " ";
	 //    }
  //       if(filter_has_var(INPUT_POST, "data2")){
		//     $data4=$_POST["data2"];
  //       	if(filter_var($data4>1&&$data4<150,FILTER_VALIDATE_INT)){
		// 	    	// if($data4>1&&$data4<150){
		// 			echo $data4;
		// 			// }else{
		// 			// echo " ";
		// 		 //    }
		// 	}else{
		// 	echo "hello";
		//     }
		// }else{
		// 	echo " ";
		// }
        
        $arr=array(
        	"name"=>"mike",
        	"age"=>"30",
        	"email"=>"mike@gmail.com"
        );
        $a=array(
        	"name"=>array(
        		"filter"=>FILTER_CALLBACK,
        		"options"=>"ucwords",
        		),
        	"age"=>array(
        		"filter"=>FILTER_VALIDATE_INT,
        		"options"=>array(
        			'min_range'=>1,
        			'max_range'=>100
        			)
        		)
        	);
        print_r(filter_var_array($arr,$a));
		?>
		
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

</head>
<body>
<br>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" class="form-control" type="text" name="data1"><br>
			<input type="text" class="form-control" type="text" name="data2"><br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>