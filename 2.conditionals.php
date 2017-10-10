<?php 
header('content-type:text/html;charset=utf-8'); 
//if switch(分支只有这两个)

//关系运算符
// > < == != >= <= === !==

//
$num=2; 
//单个if
// if($num<=4){
//  echo "num的值一定是小于或者等于4";
// }

//if else 
if($num>=4){
	echo "true";
}else{
	echo "false";
}

//if嵌套 nesting if
$num=4; 
if($num>=4){
	if($num<=10){
	echo "num一定是在4和10之间";
    }else{
	echo "num一定是大于10";
    }
}else{
	echo "num一定是小于4";
}

//逻辑运算符
// 逻辑与 && AND :一假即假(短路现象)
// 逻辑或 || OR :一真即真 两真即真(短路现象)
//逻辑非 !
//逻辑异或 XOR :只有一边为真才为真 两边都为真则为假

$num1=3;
if($num1<3 XOR $num1>10){
	echo "num1一定是大于3并且小于10";
}

//switch
$favColor="green";
switch($favColor){
	case 'red':
		echo "angry";
		break; //若没有会到下一个 穿透  有break就不会穿透
	case 'yellow':
		echo "happy";
		break;
	case 'blue':
		echo "silence";
		break;
	case 'green':
		echo "forgive";
		break;
	default:
		echo "gun";
		break;
}
 ?>




