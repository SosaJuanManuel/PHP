<?php

// condiciones

$a = 1;
$b = 10;

if($a > $b)
{
	echo "<br>A es mayor a B<br>";

}

else if ($a == $b) 
{
	echo "<br>A es igual a B<br>";

}

else 
{
echo "<br>A es menor a B<br>";

}

//switch

$dia = "sabado";

switch($dia)
{
	case 'sabado':
	echo "<br>voy a estudiar";
	break;

	case 'viernes':
	echo "<br>voy a la fiesta";
	break;

	case 'domingo':
	echo "<br>voy a la descansar";
	break;

	default:
	echo "<br>voy a estudiar";
}

echo "<br><br>";
$n = 0;

while($n <= 5)
{
	
	echo $n;
	$n++;

}
echo "<br><br>";
// do while
$p = 1;

do{
	echo $p;
	$p++;
}while($p <= 5);

echo "<br><br>";
// for

for($i=0;$i<=5;$i++)
{
	echo $i;
}

?>