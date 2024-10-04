<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <main>
        <h1>Lista de Paises</h1>
        <ol type="I">
        <li>Brasil:</li>
        <li>Espanha </li>
        <li>Itália</li>
        <li>Inglaterra</li>



        </ol>

        <?php

            $pais = $_POST['pais'];
            $nome =  $_POST['nome'];

            if($pais === 'inglaterra'){

                echo("Hello,". " " .$nome);


            } elseif($pais === 'espanha'){

                echo("Hola,". " " .$nome);



            } elseif($pais === 'italia'){

                echo("ciao,". " " .$nome);



            } elseif($pais === 'brasil'){

                echo("Olá,". " " .$nome);



            }else{
                echo('erro');
            };



               
        ?>


    </main>




</body>
</html>