<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
	$postData=array('field'=>1,'timeslot'=>3,
					'account'=>"SC00316789",'date'=>20201023,);
	$api="localhost:8888/reservAtion.php";
    $postData=http_build_query($postData);
	
	
	$api=str_replace(' ',' ',$api);
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$api);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,curlopt_postfield,$postData);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,ture);
	
	$output=curl_exec($ch);
	var_dump($output);
?>
<body>
</body>
</html>