<?php 
# 服务器端数组信息
$server=[
"主机名"=>$_SERVER['SERVER_NAME'],
"软件信息"=>$_SERVER['SERVER_SOFTWARE'],
"文档根路径"=>$_SERVER['DOCUMENT_ROOT'],
"绝对路径"=>$_SERVER['SCRIPT_FILENAME'],
"当前路径"=>$_SERVER['PHP_SELF']

];
// echo $server["主机名"];
// echo "<hr>";
// echo $server["软件信息"];
// echo "<hr>";
// echo $server["文档根路径"];
// echo "<hr>";
// echo $server["绝对路径"];
// echo "<hr>";
// echo $server["当前路径"];
// echo "<hr>";
// echo $_SERVER['SERVER_NAME'];
// echo "<hr>";
// print_r($server);
	/*
		SERVER_NAME => 主机名
		SERVER_SOFTWARE => 服务器软件信息
		DOCUMENT_ROOT => 文档根路径
		SCRIPT_FILENAME => 绝对路径
		PHP_SELF => 当前路径
	*/
	
	# 客户端数组信息
		$client=[
		"用户代理"=>$_SERVER["HTTP_USER_AGENT"],
		"客户端IP"=>$_SERVER["REMOTE_ADDR"],
		"客户端端口号"=>$_SERVER["REMOTE_PORT"]
		];
  //       echo "<hr>";
		// echo $client['用户代理'];
  //       echo "<hr>";
  //       echo $client['客户端IP'];
  //       echo "<hr>";
  //       echo $client['客户端端口号'];
  //       echo "<hr>";
  //       print_r($client);

	/*
		HTTP_USER_AGENT => 客户端系统信息
		REMOTE_ADDR => 客户端IP
		REMOTE_PORT => 客户端端口号
	*/
	//$_SERVER[]:用于记录客户端&服务端的配置信息
?>