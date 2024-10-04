<?php

$temp = $_POST['temp'];
$type = $_POST['tipo'];


if($type ==='c'){

    $k = $temp+273.15;
    $f = $temp*1.8+32;


    echo("temperatura em Celsius é".$temp);
    echo("<br>temperatura em Kelvin é".$k);
    echo("<br>temperatura em Fharenheit é".$f);


} elseif($type === 'f'){


echo("Temperatura em Fharenheit é".$temp);

$c = $temp -32/1.8;
$k = $temp +59.67/1/8;

echo("<br>Temperatura em Celsius é". " ".$c);
echo("<br>Temperatura em Kelvin é". " ".$k);
}elseif($type === 'k'){

    $c = $temp - 273.15;
    $f = $temp + 459.67/1.8;

echo("<br>temperatura em Kelvin é"." ".$temp);
echo("<br>Temperatura em Celsius é"." ".$c);
echo("<br>Temperatura em Fharenheit é"." ".$f);
}








?>