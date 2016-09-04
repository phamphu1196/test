<?php 
	$url = 'http://ketqua.net/';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER , 1);
	curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
	$html = curl_exec($curl);
	curl_close($curl);
	$str1 = '<table class="table table-condensed kqcenter kqvertimarginw table-kq-border table-kq-hover table-kq-north-west table-bordered kqbackground table-kq-bold-border" id="result_tab_mb" style="text-align:center;">';
	$tmp1 = explode($str1, $html);
	$str2 = '</table>';
	$tmp = explode($str2, $tmp1[1]);
	$data = $tmp[0];
	$table = $str1.$data.'</table>';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style></style>
</head>
<body>
	<?php
	echo $table; 
	 ?>
</body>
</html>