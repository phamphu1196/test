<?php
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/Content/light?v=39aryTt3NcT7rUH1rMdyb5V57H5WgIEGbBA8fX7tPaQ1';
	$referer = 'http://dangkyhoc.daotao.vnu.edu.vn/dang-ky-mon-hoc-nganh-1';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: text/css,*/*;q=0.1";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "Cookie: _ga=GA1.3.284445577.1472003663; __RequestVerificationToken=78V1S4AFSLtJZbHgw02_mhSwIE_VpBR-LUP-Vp_IBAblHklbI7D7bSvUdhjT9XdxQUYAAOwqqqu2tDrPD5h8yEW9b1Y1; ASP.NET_SessionId=5moef2dy0kalyq5ub0nxq4qu; _gat=1";
	$headers[3] = "Connection: keep-alive";
	$headers[4] = "If-Modified-Since: Wed, 24 Aug 2016 01:54:24 GMT";
	$headers[5] = "Cache-Control: max-age=0";
	$headers[6] = "GET /Content/light?v=39aryTt3NcT7rUH1rMdyb5V57H5WgIEGbBA8fX7tPaQ1 HTTP/1.1";
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