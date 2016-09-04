<?php  
	$url = 'https://sso3.zing.vn/login';
	$referer = 'http://login.me.zing.vn/';
	$postfields = 'pid=25&u1=http://login.me.zing.vn/login/success&fp=http://login.me.zing.vn&apikey=6c78e66f436d279ea62255a6dd96f1a1&u=pupukute1196&p=Phu010196';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0';
	$headers = array();
	$headers[0] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
	$headers[1] = 'Accept-Language: en-US,en;q=0.5';
	$headers[2] = 'Connection: keep-alive';
	$headers[3] = 'Content-Type: application/x-www-form-urlencoded';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	$result = curl_exec($ch);
	curl_close($ch);

	$ch = curl_init("http://me.zing.vn/h/");
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
	curl_exec($ch);
?>
