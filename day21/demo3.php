<?php
	//定义文件头  防止乱码
	header("content-type:text/html;charset=utf-8");
	//使用do...while 计算1--100以内的奇数和
	/*$i = 1;
	$sum = 0;
	do{
		if( $i%2 ){
			$sum += $i;
		}
		$i++;
	}while( $i<=100 );

	echo "1--100以内所有的奇数和是:  $sum";*/
	
	// for循环   
	for( $i = 1 ; $i <= 100 ; $i++ ){
		echo $i." ";
		if( $i % 10 == 0 ){
			echo "<br>";
		}
	}
?>