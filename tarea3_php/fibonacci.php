<html>
<head>
	<title></title>
</head>
<body>
<?php
$n=8;
$a=1;
$b=0;
echo $b." ";
for($i=0;$i<$n;$i++){
	$fibo=$a+$b;
	$a=$b;
	$b=$fibo;
	echo $fibo." ";
}
?>
</body>
</html>