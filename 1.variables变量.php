	<!-- echo外面可以包标签 -->
	<!-- <h1> -->
	<?php 
	echo "Hello World";
	?>
	<!-- </h1> -->

<?php 
echo "Hello";
    //单行注释 快捷键:command + /
	#单行注释 快捷键:shift + 3
	/*
	多行注释 
	快捷键:alt + command + /   
	*/

	#variable 变量
	$output="nihao"; 
	$Intege=22; 
	$Floa=22.22; 
	$Boolea1=true;
	$Boolea2=false;  //非0即为真   1

	echo $output; //相当于打印 console.log
	echo $Intege;
	echo $Floa;
	echo $Boolea1;  //若为true 打印1
	echo $Boolea2; //若为false 什么都不打印

	#运算符
	$num1=10;
	$num2=20;
	$sum=$num1+$num2;
	echo $sum;  

#字符串拼接
$string1="hello";
$string2="W";
$greet=$string1+$string2;
$greeting=$string1." ".$string2."!";
echo $greet;    //+在PHP中没有拼接的功能 只是单纯的加号
echo $greeting;//.是拼接作用

#'' "" 区别 
#单引号中的内容是单纯的字符串
#双引号中的变量可以正常被解析
$greeting1='$string1 $string2';
$greeting2="$string1 $string2";

echo $greeting1;
echo $greeting2;

#转义字符
$string31='they\'re here';
$string32="they're here";

echo $string31;
echo $string32.'<br>'; //主要内容 无返回值
printf($string32); //方法 有返回值 成功返回1 但是常用echo 因为速度快
echo '<hr>';

#常量
define("GREETING","WH A         T ",true); //常量的第三个参数为bool true为不区分大小写
echo greeting;
var_dump(greeting); //万能打印
/*
-前缀 $
-以字母/数字/下划线组成
-数字不能开头
-大小写敏感
-驼峰命名法
*/

#数据类型
/*
 String Integer(整形) Float Boolean
 Array Object Resource(函数)
*/
 ?>