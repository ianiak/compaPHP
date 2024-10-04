<?php
$aluno = $_POST['aluno'];
$notapt = $_POST['notapt'];
$notamt = $_POST['notamt'];
$notageo = $_POST['notageo'];
$notaes = $_POST['notaes'];
$media = 7;
$mdaluno = $notapt+$notamt+$notageo+$notaes;


    if($mdaluno/4 >= $media){

        echo('aprovado');

    } else{
        echo('reprovado');
    };


?>