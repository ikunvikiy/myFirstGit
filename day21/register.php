<?php
	header("content-type:text/html;charset=utf-8");
	// 接收客户端提交的数据
	$username = $_REQUEST["uname"];
	$userpwd = $_REQUEST["upwd"];
	
	echo "用户名是 ： $username , 密码是 ： $userpwd";
?>