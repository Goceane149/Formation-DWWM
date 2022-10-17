<html>
<body>
<?php
$euro=6.55957;
printf("%.2f Francs<br />", $euro);
$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;

 echo " 1 affichage sans printf :" . $money . "<br />";
$monformat = sprintf("%01.2f",$money);

echo "2 affichage avec sprintf : " . $monformat . "<br />";

$year="2002";
$month="4";
$day="5";
$varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);
echo "3 affichage avec sprintf :". $varDate . "<br />";


sprintf("%01.2f",$money);
printf("%01.2f",$money);

?>

