<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ณัฏฐณิชา ปาปะนัง</title>
</head>

<body>

<form method="post" action="">
	รหัสนิสิต<input type="text"name="sid"required autofocus>
    <input type="submit"name="Submit"value="OK">
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
//echo$_POST['sid'];
$sid=$_POST['sid'];
$y=substr($_POST['sid'],0,2);
echo"<img src='http://202.28.32.211/picture/student/{$y}/{$sid}.jpg'width='500'>";
}
?>
</body>
</html>