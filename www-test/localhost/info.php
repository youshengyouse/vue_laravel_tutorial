<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");

$url = "http://localhost/videothumb/video/a.mp4?second=2";
$url2="http://adlightbox.com/videothumb/company/a001/data/upload/201907/f_8af72db42a9098c6634b514e5c36e64f.mp4?second=2&height=264&width=360";

echo file_get_contents($url);
echo "<hr/>";
function getImage($url = ""){
 //$url = preg_replace( '/(?:^['"]+|['"/]+$)/', '', $url );
 $hander = curl_init();
 curl_setopt($hander,CURLOPT_HEADER,1);
 curl_setopt($hander,CURLOPT_NOBODY,1);
 curl_setopt($hander,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($hander,CURLOPT_URL,$url);
 curl_setopt($hander,CURLOPT_TIMEOUT,60);
 $result = curl_exec($hander);
 curl_close($hander);
 //fclose($fp);
 return $result;
}
var_dump(getImage($url2));



                    
                    
                  