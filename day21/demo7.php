<?php
	header("content-type:text/html;charset=utf-8");
	// $arr = array( "uname" => "lichune" , "age" => "18forever" );
	$arr = array( 
					array( "username" => "jack" , "userpwd" => "admin1" ),
					array( "username" => "jack3" , "userpwd" => "admin2" ),
					array( "username" => "jack4" , "userpwd" => "admin3" ),
					array( "username" => "jack5" , "userpwd" => "admin4" ),
					array( "username" => "jack6" , "userpwd" => "admin5" )
			  );
	//将数组转成json   返回值为json对象
	echo json_encode( $arr );
?>
