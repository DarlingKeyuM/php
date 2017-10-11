<?php
$loggedIn=false;
$names=["Henry","Emily","Bucky"];
// if($loggedIn){
// 	echo "U r Logged In";
// }else{
// 	echo "U r NOT Logged In";
// }
// //三目运算符
// echo "<hr>";
// $loggedIn = (true) ? "U r Logged In" : "U r NOT Logged In" ;
// echo $loggedIn; //?后面不能写输出
// echo "<hr>";
// echo($loggedIn)?"U r Logged In":"U r NOT Logged In";

// //简写得到true/false
// echo "<hr>";
// $isRegistered=($loggedIn==true)?true:false;
// echo $isRegistered;

// //三目嵌套
// echo "<hr>";
// // $age=18;
// // $score=80;
// $age=180;
// $score=60;

// echo "Your score is".($score>70?($age<20?"优秀":"一般"):($age<20?"一般":"差等"));
?>
<!-- html+php嵌套语法糖 -->
<div>
	<?php if($loggedIn){?>
	<p>welcome to beijing</p>
	<?php }else{ ?>
	<p>welcome to taiyuan</p>
	<?php } ?>
</div>
<!-- 优化 -->
<div>
	<?php if($loggedIn):?>
	<p>welcome to beijing</p>
	<?php else: ?>
	<p>welcome to taiyuan</p>
	<?php endif; ?>
</div>
<!-- 遍历数组 -->
<div>
	<?php foreach($names as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>
<!-- 遍历数组(使用for循环) -->
<div>
	<?php for($i=0;$i<count($names);$i++): ?>
		<p><?php echo $names[$i]; ?></p>
	<?php endfor; ?>
</div>