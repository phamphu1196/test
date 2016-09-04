<?php 
	$param = array(
		'name' => 'pham van phu',
		"dia chi" => 'dong quang'
	);
	$url = 'http://localhost/curl/post.php';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, count($param));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
?>