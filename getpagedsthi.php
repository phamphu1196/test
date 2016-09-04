<?php  
	$url = 'http://203.113.130.218:50223/congdaotao/module/dsthi_new/index.php?r=lopmonhoc/napmonthi';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0';
	$referer = 'http://203.113.130.218:50223/congdaotao/module/dsthi_new/';
	$postfields = 'keysearch=14020350';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	$result = curl_exec($ch);
	curl_close($ch);
	echo $result;
?>