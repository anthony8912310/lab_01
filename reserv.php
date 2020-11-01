<?php
//$count_time = microtime(true);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://peo.nthu.edu.tw/nthugym/reservation/reservAction.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('field' => '1','timeSlot' => '2','account' => 'R124836721','date' => '20201103'),
));
$response = curl_exec($curl);

curl_close($curl);
echo $response;
//echo microtime(true)-$count_time;
?>