<?php
	$str = 'hello lemon';
	$txt1="你是我的小呀小苹果";

	echo strlen($txt1) . '<br>';
	echo mb_strlen($txt1);


	/*
		数组
			* 值数组	类似js中的数组
			* 关联数组	类似js中的对象

		array()
	 */
	

	//数值数组
	$cars=array("Volvo","BMW","长城");

	// echo "$cars";//Array
	// print_r($cars);//Array ( [0] => Volvo [1] => BMW [2] => 长城 )
	var_dump($cars);


	//关联数组
	$age=array(
		"Peter"=>35,
		"Ben"=>"37",
		"Joe"=>43,
		"lemmon"=> 32.5
	);

	var_dump($age);


	// 创建商品列表
	// [{},{}]
	
?>