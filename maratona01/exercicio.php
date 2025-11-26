<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício em Aula</title>
</head>
<body>
    <?php

    echo"<h2>Atividade 2 - Conversão de Temperatura (Celsius para Fahrenheit) </h2>";
    $texto1 = "Objetivo: Trabalhar com cálculos matemáticos e variáveis. <br>
    Descrição: Crie um script que converta uma temperatura em Celsius para 
    Fahrenheit. <br> A fórmula para conversão é: F=(C x 9/5) + 32 <br> 
    Dica: Declare uma constante para armazenar o valor 9/5 e faça o 
    cálculo com a variável fornecida. <br> <br>";

    echo"$texto1";

     // F=(C+9/5)+32
     $temperatura = 35;
     $cons = (9 / 5);
     $f = ($temperatura * $cons) + 32;

     echo"<h2>A temperatude de $temperatura \u{00B0}C, corresponde a $f \u{00B0}F. <br> <br> </h2>";

     echo"<h2>Atividade 4 - Conversor de Moeda</h2>";

     $texto4 = "Objetivo: Trabalhar com variáveis, operadores e arredondamento.<br>
     Descrição: Crie um script que converta uma quantia em reais para 
     dólares, com base em uma taxa de câmbio fornecida. Mostre o valor 
     convertido com 2 casas decimais.<br>
     Dica: Use round() para arredondar o valor para 2 casas decimais. <br> <br>";

     echo"$texto4";
     
     //Dólar no dia 26/11/2025 ás 16:48 corresponde a USD$ 5,33
     $valor = 533;
     $dolar = 5.33;
     $conversao = $valor / $dolar;
     $convertido = number_format($conversao, 2, ',', ',');

     echo"<h2>O valor de R$ $valor Reais Brasileiros, equivalem a US$ $convertido Dólares Americano.</h2>";
     

     
    
    ?>

</body>
</html>