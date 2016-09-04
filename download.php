<?php 
	function curl_download($url, $saveTo){
		$fp = fopen($saveTo, 'w+');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/5.0");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT , 1000);
		curl_setopt($ch, CURLOPT_FILE , $fp);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	curl_download('http://freetuts.net/upload/page/images/2014/11/16/31/tong-hop-bai-viet-hoc-jquery-can-ban-den-nang-cao.gif', 'upload/demo.png');
?>