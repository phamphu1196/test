<?php
	
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/danh-sach-mon-hoc/1/1';
	$postfield = "";
	$referer = 'Referer: http://dangkyhoc.daotao.vnu.edu.vn/';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: text/html, */*; q=0.01";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "X-Requested-With: XMLHttpRequest";
	// $headers[3] = "Cookie: _ga=GA1.3.284445577.1472003663; __RequestVerificationToken=OiyZZjvmkgFcn9BhxH9UJ8Q9hD1YFcU1_fVbYsendWAqGd81iBtuCVIvWyZZu6o8vLkrIAFAEDjUaNJCF2ActtII_ZY1; ASP.NET_SessionId=dvgfqsauw2vfjzvak4dlnrpi; _gat=1";
	$headers[4] = "Connection: keep-alive";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfield);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	$result = curl_exec($ch);
	echo $result;
?>
12040804
07021994