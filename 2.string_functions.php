<?php 
# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr(子字符串)
    $output="hello world";
    // $output=substr($output,1);//第一个参数是完整字符串 从1开始到最后
    // $output=substr($output,1,5);//第一个参数是完整字符串 从1开始到5

    // echo $output;
	
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos 返回位置下标
	$output1=strpos($output, "o");
    echo $output1;
	echo "<hr>";
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	$output2=strrpos($output, "l");
	echo $output2;
	# 去除首尾空格trim 空格也是字符
	echo "<hr>";
    $output3="  helloworld   ";
	// echo strlen($output3)
	$newString=trim($output3); //用一个变量接收一下 
	echo strlen($newString);
	# 将字符串转为大写 strtoupper
	echo "<hr>";
	$output4=strtoupper($output);
	echo $output4;
	
	# 将字符串转为小写 strtolower
	echo "<hr>";
	$output5=strtolower($output4);
	echo $output5;
	
	# 将每个单词首字母大写 ucwords
	echo "<hr>";
	$output6=ucwords($output);
	echo $output6;
	
	# 替换所有匹配的内容  str_replace
	echo "<hr>";
	$output7=str_replace("world","everyone", $output);
	echo $output7;  //用everyone替换world在$output中
	
	# 判断是否是字符串  is_string
	echo "<hr>";
	$val="22";
	$output8=is_string($val);
	echo $output8;
	# 过滤掉数组中非字符串的值
	echo "<hr>";
	$values=array(true,false,"hello","32",23,23.4,"23.4",''," ",0,"0");
	foreach ($values as $values1) {
		//判断Values1是否是字符串,如果是,那么输出
          if(is_string($values1))
          	echo $values1."is a string!<br>";
	}
	# 压缩字符串  gzcompress
	echo "<hr>";
	$string="一大堆文字";
	$output9=gzcompress($string);
	echo $output9;
	# 解压字符串
	echo "<hr>";
    $output10=gzuncompress($output9);
	echo $output10;


 ?>