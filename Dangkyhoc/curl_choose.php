<?php
	
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/dang-ky-mon-hoc-nganh-1';
	$referer = 'http://dangkyhoc.daotao.vnu.edu.vn/';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "Cookie: _ga=GA1.3.284445577.1472003663; __RequestVerificationToken=78V1S4AFSLtJZbHgw02_mhSwIE_VpBR-LUP-Vp_IBAblHklbI7D7bSvUdhjT9XdxQUYAAOwqqqu2tDrPD5h8yEW9b1Y1; ASP.NET_SessionId=5moef2dy0kalyq5ub0nxq4qu; _gat=1";
	$headers[3] = "Connection: keep-alive";
	$headers[4] = "Upgrade-Insecure-Requests: 1";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	$result = curl_exec($ch);
	echo $result;
?>