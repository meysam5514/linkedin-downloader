<?php
error_reporting(false);
header('Content-type: application/json;'); 

$urlside=$_GET['url'];

$data['url'] = $urlside;



$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_URL,"https://www.expertstool.com/linkedin-video-downloader/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
curl_setopt($ch, CURLOPT_HEADER, false);
$meysam1= curl_exec($ch);
curl_close($ch);    

preg_match_all('#<td><a href="(.*?)"(.*?)>Download Link</a></td>#is',$meysam1,$sidepath1);

echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71',  'Results' =>$sidepath1[1]], 448);



