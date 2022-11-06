<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 PHP</title>
</head>
<body>

    <p>1 - Faça um programa que peça um número e então mostre a mensagem:
        O número informado foi [número].
    </p>

    <form action="numero" method="get">
        Número: <input type="text" name="numero"><br>
        <input type="button">
    </form>
  

    
     O número informado foi <?php 
     
     $numero = "";
     echo $_GET["numero"]; ?> 
    
     
</body>
</html>