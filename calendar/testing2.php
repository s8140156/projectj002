<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$array1=[["Y-10-31","瑪麗亞凱莉預備備"],["Y-12-25","瑪麗亞凱莉受難日"]];

foreach ($array1 as $key => $value) {

	// 使用explode函数将字符串分割成数组
	$parts = explode("-", $value[0]);
	$value = $parts[1]; // 获取中间的值（月份）

}

?>




</body>
</html>