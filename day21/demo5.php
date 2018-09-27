<?php
	//定义文件头  防止乱码
	header("content-type:text/html;charset=utf-8");
	
	//定义一个索引数组  并计算数组中素数的个数
	/*$arr = array(34,2,465,17,15,13);
	$count = 0;
	for( $i = 0; $i < count($arr) ; $i++ ){
		$flag = true;//假设值为true时  是素数    
		//每做一次判断 $flag 变量需要清空处理
		for( $j = 2 ; $j < $arr[$i] ; $j++ ){
			if( $arr[$i] % $j == 0 ){
				$flag = false;
				break;
			}
		}
		if( $flag ){
			$count++;
		}
	}
	echo "数组中素数的个数是:  $count";*/
	
	//定义一个关联数组
	$arr = array("name" => "lichune");
	echo $arr["name"];
?>