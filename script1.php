<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso/$altura**2;

if($imc <= 0){

echo("Seu IMC é".$imc);
echo("<br>Magreza Grave");



}elseif($imc <= 16)
{
    echo("Seu IMC é".$imc);
    echo("<br>Magreza Leve");

}elseif($imc <= 18.5){
    echo("Seu IMC é".$imc);
    echo("<br>Saudavel");
}elseif($imc <= 25){
    echo("Seu IMC é".$imc);
    echo("<br>Sobrepeso");
}elseif($imc <= 30){
echo("Seu IMC é".$imc);
    echo("<br>Obesidade Grau I");
        
    
}elseif($imc >= 35){
    echo("Seu IMC é".$imc);
    echo("<br>Obesidade Grau II");

}elseif($imc >= 40){
    echo("Seu IMC é".$imc);
    echo("<br>Obesidade Grau III");

} else{
    echo("erro");
}



?>