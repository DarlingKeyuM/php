<?php
#function :函数 具有某一功能的代码块
/*
	Camel Case - myFunction()
	Lower Case - my_function()
	Pascsl Case - MyFunction()
*/

//定义函数 php中函数名字不敏感
   function SimpleFunction(){
   	echo "hello world";
   }
//调用函数
   simpleFunction();
   echo "<hr>";
//有参数 无返回值 有参数必须传参 否则报错
//传参的优先级大于默认的参数 不传就用默认
   function buy($money="30块钱"){
   echo $money."给了,但没给我买东西,拿着钱跑了";
 }
 buy("10块钱");
 echo "<hr>";
 
 //多参数 有返回值
 function sumValue($num1,$num2){
 	$sum=$num1+$num2;
 	return $sum;
 }
 $result = sumValue(5,6);
 echo $result;

 //无参数 有返回值
 echo "<hr>";
 function buyDrink(){
 	return "饭后的饮料";
 }
 echo buyDrink();

 //函数传引用
 echo "<hr>";
 $myNum=10;
 function addFive(&$num){
     $num+=5;
 }
 addFive($myNum); //拿到mynum的引用,改变了内存中的值 所以是15
 echo $myNum;
 ?>