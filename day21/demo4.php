<?php
	//定义文件头  防止乱码
	header("content-type:text/html;charset=utf-8");
	
	//定义一个函数 功能是 计算任意三个数中的最大值
	function fnMax( $num1 , $num2 , $num3 ){
		//获取其中两个数的最大值  存到一个变量中 temp
		//用temp和第三个数进行比较  得到最大值
		$temp = $num1 > $num2 ? $num1 : $num2;
		return $temp > $num3 ? $temp : $num3;
	}
	$res = fnMax(34,2,67);
	echo "这三个数的最大值是 ：  $res";
?>