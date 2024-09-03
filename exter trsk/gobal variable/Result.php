<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
	<p>Gujarati: <input type="number" name="num1" value="100" required /></p>
	<p>Hinde: <input type="number" name="num2" value="100" required /></p>
	<p>English: <input type="number" name="num3" value="100" required /></p>
	<p>Science: <input type="number" name="num4" value="100" required /></p>
	<p>Maths: <input type="number" name="num5" value="100" required /></p>
	

	<input type="submit"name="sum" value="total"/>
	<input type="submit"name="Division" value="percentage"/></p>
	<input type="submit"name="Division" value="grade"/>
</form>
</body>
</html>
<?php

$Gujarati = 85;
$hinde = 75; 
$English = 70; 
$Science = 80; 
$Maths = 90; 

if(isset($_REQUEST['total']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];
	echo "Your total : ".$total=$num1+$num2+$num3+$num4+$num5;
}

if(isset($_REQUEST['div']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];
	echo "Your percentage : ".$ans=$num1/$num2/$num3/$num4/$num5;
}
if(isset($_REQUEST['multi']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];
	echo "Your Multiplication : ".$ans=$num1*$num2*$num3*$num4*$num5;
}

if(isset($_REQUEST['div']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
	echo "Your Division : ".$ans=$num1/$num2;
}

?>
