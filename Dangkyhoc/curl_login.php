<?php
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers = array();
	$headers[0] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[1] = "Accept-Language: en-US,en;q=0.5";
	$headers[2] = "Connection: keep-alive";
	$headers[3] = "Upgrade-Insecure-Requests: 1";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	$resu = curl_exec($ch);
	curl_close($ch);
	unset($ch); 
?>
<?php 
	$pattern = '/(__RequestVerificationToken)(.+)(type="hidden")(.+)(value=\")(.+)(\" \/>)/';
	preg_match($pattern, $resu, $matches);
	$postfie =  $matches[6];
	echo $postfie;
?>
<?php
	// $masv = $_POST['masv'];
	// $pass = $_POST['pass'];
	$url = 'http://dangkyhoc.daotao.vnu.edu.vn/dang-nhap';
	$postfield = "__RequestVerificationToken=YIDdcENKKXR4nvfUL9U3ljeJjSb4HCL--Xtz2bUSHW9uj8lh55KmReDGWrl95KalZUuYFIpLs6dZWbv3SJCWAmB-PGA1&LoginName=14020350&Password=phu010196";
	// echo $postfield;
	$referer = 'http://dangkyhoc.daotao.vnu.edu.vn/dang-nhap';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';
	$headers[0] = "Accept-Language: en-US,en;q=0.5";
	$headers[1] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[2] = "Connection: keep-alive";
	$headers[3] = "Upgrade-Insecure-Requests: 1";
	$headers[4] = "Content-Type: application/x-www-form-urlencoded";
	// $headers[5] = "Cookie: _ga=GA1.3.284445577.1472003663; __RequestVerificationToken=MW1drG_eJOfPE3JmKqnzVdql_qFm3XkBIrrCaJF1a34wXQGMy2TiF5_MNcZyY3BELBQx5avm5Wemus4DlIWoXphUSaE1; _gat=1; ASP.NET_SessionId=b5shmvy4dkiupz3abunwbys5";

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfield);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	$result = curl_exec($ch);
	echo $result;

?>
