<?php 
function table($nbr, $nbr2)
{
$table = '<table border="1">';
for ($a=1; $a <= $nbr; $a++) {
$table .= '<tr>';
for ($b=1; $b <= $nbr2 ; $b++) {
$table .= '<td>'.$a*$b.'</td>';
}
$table .= '</tr>';
}
$table .= '</table>';
return $table;
}
echo table(10,10);
?>