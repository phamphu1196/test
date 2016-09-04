<?php 
	function getpage($url, $referer, $timeout, $header){
		if (!isset($timeout)) {
			$timeout = 30;
		}
		$curl = curl_init();
		if (strstr($referer, "://")) {
			curl_setopt($curl, CURLOPT_REFERER, $referer);
		}
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($curl, CURLOPT_USERAGENT, getrandomuseragent());
		curl_setopt($curl, CURLOPT_HEADER, (int)$header);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		$html = curl_exec($curl);
		curl_close($curl);
		echo $html;
	}
	function postpage($url, $pvars, $referer, $timeout){
		if (!isset($timeout)) {
			$timeout = 30;
		}
		$curl = curl_init();
		$post = http_build_query($pvars);
		if (isset($referer)) {
			curl_setopt($curl, CURLOPT_REFERER, $referer);
		}
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($curl, CURLOPT_USERAGENT, getrandomuseragent());
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
		curl_setopt($curl, CURLOPT_HTTPHEADER, 
			array("Content-type: application/x-www-form-urlencoded"));
		$html = curl_exec($curl);
		curl_close($curl);
		echo $html;
	}
	 function getrandomuseragent(){
	 	$useragent = array(
	 		"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6)    Gecko/20070725 Firefox/2.0.0.6",
 
	        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)",
	 
	        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)",
	 
	        "Opera/9.20 (Windows NT 6.0; U; en)",
	 
	        "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50",
	 
	        "Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [en]",
	 
	        "Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr; rv:1.7) Gecko/20040624 Firefox/0.9",
	 
	        "Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/48 (like Gecko) Safari/48"       
 
	 	);
	 	$random = rand(0, count($useragent)-1);
	 	return $useragent[$random];
	 }
?>