<?php
	$url = 'localhost/curl/get.php';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
	curl_setopt($ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');
	$result = curl_exec($ch);
	curl_close($ch);
	echo $result;
?>