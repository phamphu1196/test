<?php
	
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "Connection: keep-alive";
	$headers[3] = "Upgrade-Insecure-Requests: 1";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	$result = curl_exec($ch);

?>

<?php  
	$pattern = '/(__RequestVerificationToken)(.+)(type)(.+)(value=\")(.+)(\" \/>)/';
	preg_match($pattern, $result, $matches);
	echo $matches[6];


?>