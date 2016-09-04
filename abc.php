<?php
	$url = 'https://accounts.google.com/ServiceLoginAuth';
	$postfield = 'GALX=p2y6OvEkxAc&ProfileInformation=APMTqunheO7MFwqw86fEVIT7radu8JsXV-zJPvtjPkj1TJKyJme53dYVhSGAtgLLYs3_lhZaFP3h97FfX4LfvptTCkQhv72t4A&_utf8=%E2%98%83&bgresponse=%21FBelFzZC2y18yiKU1ppEkPsUMkDJzB8CAAAAOlIAAAAVCgAyV8oZiJae7qG28YNpGVr9lZqRzsVcVesohMY6p8P1BsUgEZtOnoH7BQXT1c2Miju3tyOZAO4tYI9vNo-Z67jr3-Fd2wXGTzJIaePx2Y6YYhn2d7wmeJLAfs3xSWD9P6YEeknB_G3Hhi3yGloVkuFWsfrlkRZf20KdpDi47Z8olDW4dwgTX3qLbeGwBNQn--8dPnsIHjFSwLIp2A2Gygu8XwQZNOga8Cer2WaIfDQEBNIbFewjB2JtlEMnDgcJbBdoDYJZLYI4f8HyCM5m8JtxZ6GcEWyxXfrUlqmyu5SWz6E3eymyetV61xAh-6NZv6amBAfRhw5R2aKgth_ozxyZluy9cm3k-EW5tU_CeV2_m7c-7rMN55buY4-9jIbp4faISVIU&pstMsg=1&checkConnection=youtube%3A12%3A1&checkedDomains=youtube&Email=phamphu1196&Passwd=phu010196&PersistentCookie=yes&rmShown=1';
	$referer = 'https://accounts.google.com/ServiceLoginAuth';
	$useragent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0';
	$headers = array();
	$headers[0] = "Accept-Language: en-US,en;q=0.5";
	$headers[1] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[2] = "Cookie: NID=79=aVqcq7XhwWNwuP4sInh2Jl2GyVD-GQzZ2bTFNqk2lyZJbpcuNS5-1RIqHy2Pif4HZPHvEptC9wJuB6NuV7PBK4rxAbLzIffccIIuk3tW1wf1ZJ3AnJt5QwDNhaSVYCdulLAMX0E1WJg8hn4JU60eJ4ashLwvOw8aDL_6o9oH_N9hExcncBo; OGPC=5061821-16:; GAPS=1:OPAxcvD909qnBI-GQOO_1pyRGQKA7g:VimowdG-CZItLYx4; GALX=p2y6OvEkxAc; GMAIL_RTT=176";
	$headers[3] = "Connection: keep-alive";
	$headers[4] = "Content-Type: application/x-www-form-urlencoded";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfield);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_REFERER, $referer); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	$result = curl_exec($ch);
	echo $result;
	
?>