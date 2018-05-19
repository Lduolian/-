<?php 
	/*
		知识点
			* 注释：与js一致
			* 输出
				* echo
			* 并置（.）：字符串拼接
			* 作用域
				* 全局
				* 局部
					* $GLOBALS
					* global
				* 函数：与js一致
	 */
	//全局变量
	$myname = "lemone";

	$x = 10;

	function show(){
		global $x;

		// 局部变量
		$y = 20;
		$z = 100;

		// echo $y + $z + $GLOBALS['x'];
		echo $y + $z + $x;
	}

	show();

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?php 
 	//开始 

    //...php代码
 	// echo 'laoxie and ' . $myname
 	echo "laoxie and $myname"
?></title>
 </head>
 <body>
 	<h1><?php 
 	//读取硬盘文件内容

    //...php代码
 	echo 'laoxie'
?></h1>
 </body>
 </html> 