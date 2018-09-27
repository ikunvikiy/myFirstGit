<?php
	//定义文件头  防止乱码
	header("content-type:text/html;charset=utf-8");
	//定义一个学生成绩  成绩如果大于90分 就 通知  及格
	/*$score = 90;
	if( $score >= 90 ){
		echo "恭喜你及格了";
	}else{
		echo "很遗憾没有及格，继续努力吧";
	}*/
	
	//定义一个表示星期的变量  如果值为1 输出星期一  0 表示星期日
	$day = 1;
	switch( $day ){
		case 0  : echo "星期日";break;
		case 1  : echo "星期一";break;
		case 2  : echo "星期二";break;
		case 3  : echo "星期三";break;
		case 4  : echo "星期四";break;
		case 5  : echo "星期五";break;
		case 6  : echo "星期六";break;
	}
	
?>