<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<form name='myform' action='reservAtion.php' method=POST onsubmit='return confirm("您所要借用的場地為:場地1\n費用為:100");'>
	<input type='hidden' name='field' value=1></input>
	<input type='hidden' name='timeslot' value=3></input>
    <input type='hidden' name='account' value="SC00316789"></input>
    <input type='hidden' name='date' value=20201023></input>
    <td align='center' width='80'>
	<input type='submit' value='我要預約'></input>
    </td>
	</form>
</body>
</html>