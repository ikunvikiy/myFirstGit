<ul>
	<?php
		header("content-type:text/html;charset=utf-8");
		$arr = array("母婴产品","服饰箱包","儿童服装");
		//将数组中的信息添加到li中
		for( $i = 0 ; $i < count($arr) ; $i++ ){
			echo "<li>$arr[$i]</li>";
		}
	?>
</ul>