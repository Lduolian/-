<?php
	/*
		商品列表
		[{},{}]

		知识点：
			* array_rand() 随机获取索引值
			* json字符串
				* json_encode()		JSON_UNESCAPED_UNICODE防止unicode转义
	 */
	
	$goodslist = array();

	// 价格
	$price = array(998,1998,2998,3998,8998,1288);
	$color = array('白色','土豪金','银色','玫瑰金','黑色','骚红色');
	$rom = array(32,64,128,256,512);

	// 遍历写入商品列表
	for($i=0;$i<100;$i++){
		// 创建单个商品
		$goods = array(
			'id'=> $i+1,
			'name' => 'iphone'.($i+1),
			'price' => $price[array_rand($price)],
			'color' => $color[array_rand($color)],
			'ROM'	=> $rom[array_rand($rom)],
			'imgurl' => 'img/iphpne'.$i.'.jpg'
		);

		$goodslist[$i] = $goods;
	}

	// var_dump($goodslist);
	echo json_encode($goodslist,JSON_UNESCAPED_UNICODE);


	// rsort($price);
	// var_dump($price)
	
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>商品列表</h1>
	<div class="list">
		<ul>
			<?php
			for($i=0;$i<count($goodslist);$i++){
				$goods = $goodslist[$i];
				echo "<li>
						<h4>".$goods['name']."</h4>
						<img src=\"img/iphone" . $i . ".jpg
						<p class=\"color\">颜色：". $goods['color'] . "</p>
				</li>";
			}

			?>
		</ul>
	</div>
</body>
</html> -->