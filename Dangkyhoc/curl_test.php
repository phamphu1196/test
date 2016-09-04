<?php
	
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/kiem-tra-tien-quyet/0006282/1';
	$postfield = "";
	$referer = 'http://dangkyhoc.daotao.vnu.edu.vn/dang-ky-mon-hoc-nganh-1';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: application/json, text/javascript, */*; q=0.01";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "X-Requested-With: XMLHttpRequest";
	$headers[3] = "Cookie: __RequestVerificationToken=jSE90BiqhskaTLz6MVwe1ceSt5U2Yt_CySf2TlFB0Zv8XymQXRNom1v7VFOkhT05HDIxoBUVjD8jPR4hBxF13Ei1vt41; _ga=GA1.3.284445577.1472003663; ASP.NET_SessionId=inuarnswx0rv5oqydvr23stf; _gat=1";
	$headers[4] = "Connection: keep-alive";
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