<?php
    $array=array("Henry","Bucky","Emily");
    # 计算数组个数 count
    echo count($array);
	# 将数组开头的单元移出数组 array_shift
	// echo "<hr>";
 //    $new=array_shift($array);
 //    print_r($array);
	# ****在数组开头插入一个或多个单元 array_unshift
	echo "<hr>";
	$new1=array_unshift($array, "mmmmm");
	print_r($array);
	# ***将一个或多个单元压入数组的末尾（入栈）array_push
	echo "<hr>";
	array_push($array, "var");
	print_r($array);

	# 弹出数组最后一个单元（出栈） array_pop
	echo "<hr>";
	array_pop($array);
	print_r($array);
	# 数组排序 sort
	echo "<hr>";
	$new2=array(22,23,56,99,98,"ddddd"); //按照Ascii码值排序
	sort($new2);
	print_r($new2);

	# 数组转字符串 implode
	echo "<hr>";
	$new3=array("a","b","c");
	$new4=implode(" ",$new3);
	echo $new4;
	# 字符串转数组 explode
	echo "<hr>";
	$new5=explode(" ", $new4);
	echo $new5[0];
	echo "<hr>";
	var_dump($new5);
?>