<?php 
	$url = 'http://freetuts.net/upload/page/images/2014/11/16/31/tong-hop-bai-viet-hoc-jquery-can-ban-den-nang-cao.gif';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
	$data = curl_exec($ch);
	curl_close($ch);
	header("content-type: ima.gif");
	echo $data;
?>