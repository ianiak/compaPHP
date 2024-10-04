<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <nav id="navbar">
        <ul>
            <li><a href="#imc">IMC</a></li>
            <li><a href="#media">Média</a></li>
            <li><a href="#pais">País</a></li>
            <li><a href="#temperatura">Temperatura</a></li>
        </ul>
    </nav>
</header>

    <h3>Calcule seu IMC</h3>
<div class="container">
<form action="script1.php" method="post" id="imc">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="" placeholder="Insira seu Nome"> 
<label for="peso">Seu Peso:</label>
<input type="number" name="peso" id="" placeholder="Insira seu Peso"> 
<label for="altura">Sua Altura:</label>
<input type="number" name="altura" id="" placeholder="Sua Altura" step="0.01">
<button type="submit">Enviar</button>
</form>
</div>
<h3>Calcule sua Média</h3>
<div class="container">
<form action="script2.php" method="post" id="media">
            <label for="aluno">Nome de Aluno
                <input type="text" name="aluno" id="aluno">
            </label>
            <label for="notapt"> Nota Português
                <input type="number" name="notapt" id="" value="pt">
            </label>
            <label for="notamt"> Nota Matemática
                <input type="number" name="notamt" id="" value="mt">
            </label>
            <label for="notapt"> Nota Geografia
                <input type="number" name="notageo" id="" value="geo">
            </label> 
            <label for="notapt"> Nota Espanhol
                <input type="number" name="notaes" id="" value="es">
            </label>
                

                <button type="submit">Enviar</button>
            
        </form>
        </div>
       <h3>Paises</h3>
       <div class="container">
 <form action="script3.php" method="post" id="pais" id="pais">
<label for="nome"> Name
<input type="text" name="nome" id="nome"> 
<label for="pais">
</label>
</label>

    <select name="" id="" >
        <option value="inglaterra">Inglaterra</option>
        <option value="esp">Espanha</option>
        <option value="it">Italia</option>
        <option value="br">Brasil</option>
    </select>
    <button type="submit">Enviar</button>


</form>
</div>
<h3>Temperatura</h3>
<div class="container">
<form action="script4.php" method="post" id="temperatura">
        <label for="temp">
            Temperatura
            <input type="number" name="temp" id="">
        </label>


        <select name="" id="">
            <option value="c">Celsius</option>
            <option value="f">Fharenheit</option>
            <option value="k">Kelvin</option>
        </select>


        <button type="submit">Enviar</button>

        </form>
        </div>
</body>
</html>