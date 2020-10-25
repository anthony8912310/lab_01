<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$field=$_POST["field"];
	$timeslot=$_POST["timeslot"];
	$account=$_POST["account"];
	$date=$_POST["date"];
	
	$hostName="localhost";
	$post=8889;
	$usrName="root";
	$passWord="root";
	$dbname="ball";
	
	$content = mysqli_connect($hostName,$usrName,$passWord,$dbname,$post);
	mysqli_set_charset($content,'utf-8');
	if($content)
	{
		echo "connect success";
	}else
	{
		die("connect fail".mysqli_connect_errno());
	}
	
	$sql="INSERT INTO reservAtion(field,timeslot,account,date)
	         VALUES('$field','$timeslot','$account','$date')";
	
	if (mysqli_query($content,$sql))
	{
		echo "insert success ";
	}else
	{
		echo "insert error ";
		echo ("Code:".mysqli_errno($content));
	}
	mysqli_close($content);
?>
</body>
</html>