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
        $atividade2 = "<h2>Atividade 2 - Conversão de Temperatura (Celsius para Fahrenheit)</h2>";
        $enunciado2 = "Objetivo: Trabalhar com cálculos matemáticos e variáveis. <br>
        Descrição: Crie um script que converta uma temperatura em Celsius para 
        Fahrenheit. <br> A fórmula para conversão é: F=(C x 9/5) + 32 <br> 
        Dica: Declare uma constante para armazenar o valor 9/5 e faça o 
        cálculo com a variável fornecida.<br>";
        $celsius = 44;
        $cons = 9/5;
        $f = ($celsius * $cons + 32);

        echo "$atividade2";
        echo "$enunciado2";
        echo "<h3>A temperatura de $celsius \u{00B0}C (Celsius), corresponde a $f \u{00B0}F (Fahrenheit). <br><br></h3>";

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
        $atividade4 = "<h2><br>Atividade 4 - Conversor de Moeda (Real para Dólar)</h2>";
        $enunciado4 = "Objetivo: Trabalhar com variáveis, operadores e arredondamento.<br>
        Descrição: Crie um script que converta uma quantia em reais para 
        dólares, com base em uma taxa de câmbio fornecida. Mostre o valor 
        convertido com 2 casas decimais.<br>
        Dica: Use round() para arredondar o valor para 2 casas decimais.<br>";
        $real = 1518.00;
        $dolar = 5.33;
        $realf = number_format($real, 2, ',', '.');
        $dolarf = number_format($dolar, 2, ',', '.');
        $c = $real / $dolar;
        $cf = number_format($c, 2, ',', '.');

        echo "$atividade4";
        echo "$enunciado4";
        echo "<h3>Com o dólar valendo US$ $dolarf (26/11/2025), a quantia de R$ $realf reais, equivalem a US$ $cf dólares americanos.</h3>";        
    
    ?>

</body>
</html>
