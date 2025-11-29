<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício em Aula</title>
</head>
<body>
    <?php
    
        //Criado por João Feitoza
        echo"<h2>Atividade 1 - Saudação com nome</h2>";

        // Declarar a variável com o nome da pessoa
        $nome = "João";
        $nome1 = "Marcelo";
 
        // Exemplo usando concatenação
        $saudacao_concatenacao = "Olá, . $nome e $nome1 . ! Bem-vindo ao nosso site!";
 
        // Exemplo usando interpolação
        $saudacao_interpolacao = "Olá, $nome e $nome1! Fiquem á vontade para explorar nosso site!";
       
        // Exibir os resultados
        echo $saudacao_concatenacao . "<br>";
        echo $saudacao_interpolacao;
        echo"<br><br>";

        //Criado por Marcelo Augusto
        echo"<h2>Atividade 2 - Conversão de Temperatura (Celsius para Fahrenheit) </h2>";
        $texto1 = "Objetivo: Trabalhar com cálculos matemáticos e variáveis. <br>
        Descrição: Crie um script que converta uma temperatura em Celsius para 
        Fahrenheit. <br> A fórmula para conversão é: F=(C x 9/5) + 32 <br> 
        Dica: Declare uma constante para armazenar o valor 9/5 e faça o 
        cálculo com a variável fornecida. <br>";

         echo"$texto1";

        // F=(C+9/5)+32
        $temperatura = 35;
        $cons = (9 / 5);
        $f = ($temperatura * $cons) + 32;

        echo"<h3>Uma temperatude de $temperatura \u{00B0}C, corresponde a $f \u{00B0}F. <br> <br> </h3>";

        //Criado por João Feitoza
        echo"<h2> Atividade 3 - Empréstimo Bancário</h2>";

        // Função para calcular o valor da parcela do empréstimo
        function calcularParcela($valorEmprestimo, $taxaJuros, $numeroParcelas) {
        // Calcula o valor total do empréstimo com juros
        $valorTotal = $valorEmprestimo * (1 + $taxaJuros);
 
        // Calcula o valor da parcela
        $valorParcela = $valorTotal / $numeroParcelas;
 
        return $valorParcela;
        }
 
        // Exemplo de uso
        $valorEmprestimo = 10000; // Valor do empréstimo
        $taxaJuros = 0.10; // Taxa de juros (10%)
        $numeroParcelas = 12; // Número de parcelas
 
        // Calcula o valor da parcela
        $valorParcela = calcularParcela($valorEmprestimo, $taxaJuros, $numeroParcelas);
 
        // Exibe o resultado
        echo "O valor da parcela do empréstimo é: R$ " . number_format($valorParcela, 2, ',', '.');
    
        //Criado por Marcelo Augusto
        echo"<h2><br>Atividade 4 - Conversor de Moeda (Real para Dólar)</h2>";

        $texto4 = "Objetivo: Trabalhar com variáveis, operadores e arredondamento.<br>
        Descrição: Crie um script que converta uma quantia em reais para 
        dólares, com base em uma taxa de câmbio fornecida. Mostre o valor 
        convertido com 2 casas decimais.<br>
        Dica: Use round() para arredondar o valor para 2 casas decimais. <br>";

        echo"$texto4";
     
        //Dólar no dia 26/11/2025 ás 16:48 corresponde a USD$ 5,33
        $real = 589.89;
        $dolar = 5.33;
        $realFormatado = number_format($real, 2, ',');
        $dolarFormatado = number_format($dolar, 2, ',');
        $conversao = $real / $dolar;
        $convertido = number_format($conversao, 2, ',', ',');

        echo"<br>Valor do Dólar no dia 26/11/2025 é R$ $dolarFormatado.";
        
        echo"<h3>A quantia de R$ $realFormatado Reais Brasileiros, equivalem a US$ $convertido Dólares Americano.</h3>";
        
        
    
    ?>

</body>
</html>
