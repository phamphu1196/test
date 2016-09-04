<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of progress
 *
 * @author phubaymax
 */
class progress {
    //put your code here
    var $linkMp3;
    var $linkJavHd;
    function __construct() {
        
    }
    /**
     * set Link Zing Mp3
     * @param type $linkMp3
     */
    function setLinkMp3($linkMp3) {
        $this->linkMp3 = $linkMp3;
    }

    function setLinkHd($linkHd) {
        $this->linkJavHd = $linkHd;
    }
    
    /**
     * check Vaild input Link Mp3
     */
    function checkVaildMp3(){
        $pattern = '/^http:\/\/mp3.zing.vn\/bai-hat\/(.+)\/(.+)\.html/';
    }
    
    /**
     * Check Vaild Link JavHd
     */
    function checkVaildJavHd(){
        $pattern = "/^http:\/\/javhd.com\/en\/id\/([0-9]+)\//";
        return preg_match($pattern,$this->linkJavHd,$link);
       
    }
    
    function getIdMp3(){
       $pattern = "/\/\/(.+)\/(.+)\.html/";
       $test = preg_match($pattern,  $this->linkMp3,$link);
       return $test;
    }

    function getJavHd(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->linkJavHd);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $pattern = '/<div class="sample">\n(.+)src="http:\/\/cdn2.javhd.com\/thumbs\/(.+)-p/';
        preg_match($pattern,$data,$linkId);
        $realLink = "http://wpc.4def.alphacdn.net/802D70B/OriginJHVD/contents/{$linkId[2]}/videos/{$linkId[2]}_hq.mp4";
        return $realLink;
    }

}


if(isset($_POST['linkJavHd'])){
    $javhd = new progress();
    $javhd->setLinkHd($_POST['linkJavHd']);
    $check = $javhd->checkVaildJavHd();
    if($check == '0'){
        echo '0';
        exit;
    } else {
        echo $javhd->getJavHd();
    }
}
