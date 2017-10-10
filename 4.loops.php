<?php 
#loops:循环 让项目制作的更高效 根据某个条件重复执行某段代码
#-for  
#-while  
#-Do...while...
#-Foreach //用的枚举

//for循环(三个条件) 
//@params -init, //自带初始化
//condition
//inc
for ($i=0; $i <10 ; $i++) { 
	echo ($i+1)."<br>"; //.的优先级比加号的高
}

//while循环
//@params -condition
$i=0;//0-9
while ($i< 10) {
	echo $i."<br>";
	$i++;
}
echo $i;//10 无作用域
//查重 外层while 内层for循环

//do...while循环
//@params  -condition
$i=0;  //1-9
do{
	echo $i."<br>";
	$i++;
    
}while($i<10);

//foreach循环 遍历下标数组
$people=array("Henry","Bucky","Emily");
foreach($people as $person){
 echo $person;
 echo "<br>";
}

//foreach循环 关联数组
$people=array(
   "Henry"=>"henry@gmail.com",
   "Bucky"=>"bucky@gmail.com",
   "Emily"=>"emily@gmail.com"
);  //;特别严谨
foreach ($people as $person => $email) {   //person email是变量 可以随便改
	echo $key.":".$value;
    echo "<br>";
}
// 打印1-100之间7的倍数
//打印1-100之间个位为7的数
//打印1-100之间十位为7的数
//打印1-100之间个&&十位不为7&&不是7的倍数的数

//打印99乘法表


