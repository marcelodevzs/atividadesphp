<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 02</title>
</head>
<body>
    <?php 
        echo "<h1>Exercícios com If e Else</h1>";
        $enunciado1 = "1 - Faça um programa que verifique se um número é positivo ou negativo. O programa deve receber um número do usuário e, em seguida, imprimir se o número é positivo ou negativo. Se o número for igual a zero, deve imprimir 'O número é zero'.";
        echo "$enunciado1";

        echo "<br><br>";

        $numero = -6;
        if ($numero < 0) {
            echo "O Número $numero é NEGATIVO.";
        } else if ($numero > 0) {
            echo "O Número $numero é POSITIVO.";
        } else {
            echo "O Número $numero é ZERO.";
        }

        echo "<br><br><br>";

        $enunciado2 = "2 - Faça um programa que classifique a nota de um estudante. O programa deve receber a nota de um estudante (de 0 a 10) e, com base nessa nota, classificar o desempenho do estudante:<br>De 0 a 4.9: 'Reprovado'<br>De 5 a 6.9: 'Recuperação'<br>De 7 a 8.9: 'Aprovado'<br>De 9 a 10: 'Aprovado com Distinção'<br><br>";

        echo "$enunciado2";
        
        $notaAluno = 6;
        if ($notaAluno >= 0 && $notaAluno <= 4.9) {
            echo "Com a Nota $notaAluno, o Aluno está REPROVADO.";
        } else if ($notaAluno >= 5 && $notaAluno <= 6.9) {
            echo "Com a Nota $notaAluno, o Aluno está de RECUPERAÇÃO.";
        } else if ($notaAluno >= 7 && $notaAluno <= 8.9) {
            echo "Com a Nota $notaAluno, o Aluno foi APROVADO.";
        } else if ($notaAluno >= 9 && $notaAluno <= 10) {
            echo "Com a Nota $notaAluno, o Aluno foi APROVADO com Distinção.";
        } else
            echo "Nota digitada está INVALIDA!";

        echo "<br><br><br>";

        $enunciado3 = "3 - Faça um programa que verifique se uma pessoa pode votar. O programa deve receber a idade de uma pessoa e verificar se ela pode votar ou não. A idade mínima para votar é 16 anos. Se a pessoa tiver entre 16 e 17 anos, pode votar, mas não é obrigatório. Para pessoas acima de 18 anos, o voto é obrigatório.<br><br>";

        echo "$enunciado3";

        $idade = 56;
        if ($idade >= 0 && $idade <= 12) {
            echo "Você tem $idade anos, ainda Não Vota.";
        } else if ($idade >= 13 && $idade <= 15) {
            echo "Você tem $idade anos, ainda Não Vota.";
        } else if ($idade >= 16 && $idade <= 17) {
            echo "Você tem $idade anos, pode Votar, mas não é Obrigatório.";
        } else if ($idade >= 18 && $idade <= 70) {
            echo "Você tem $idade anos, seu Voto é Obrigatório.";
        } else if ($idade >= 71 && $idade <= 120) {
            echo "Você tem $idade anos, pode Votar, mas não é Obrigatório.";
        } else
            echo "Idade Invalida.";

        echo "<br><br><br>";

        $enunciado4 = "4 - Faça um programa que verifique se um número é par ou ímpar. O programa deve receber um número inteiro e verificar se ele é par ou ímpar. Se o número for par, o programa deve imprimir 'O número é par'. Caso contrário, deve imprimir 'O número é ímpar'.<br><br>";

        echo "$enunciado4";

        $numero = 36;
        if ($numero % 2 == 0) {
            echo "O número $numero é Par.";
        } else
            echo "O número $numero é Ímpar.";

        echo "<br><br><br>";

        $enunciado5 = "5 - Faça um programa que calcule o preço de um ingresso de cinema baseado no horário. O programa deve receber o horário de uma sessão de cinema (em formato de 24 horas) e aplicar a seguinte lógica:<br>Se o horário for entre 10:00 e 12:00: 'Preço do ingresso: R$ 10,00' (matinal)<br>Se o horário for entre 12:01 e 17:00: 'Preço do ingresso: R$ 20,00' (diurno)<br>Se o horário for entre 17:01 e 22:00: 'Preço do ingresso: R$ 30,00' (noturno)<br>Se o horário for entre 22:01 e 23:59: 'Preço do ingresso: R$ 40,00' (última sessão)<br><br>";

        echo "$enunciado5";

        $horario = "22:30";
        if ($horario >= "10:00" && $horario <= "12:00") {
            echo "Agora são $horario horas, o Ingresso custa R$ 10,00 reais.";
        } else if ($horario >= "12:01" && $horario <= "17:00") {
            echo "Agora são $horario horas, o Ingresso custa R$ 20,00 reais.";
        } else if ($horario >= "17:01" && $horario <= "22:00") {
            echo "Agora são $horario horas, o Ingresso custa R$ 30,00 reais.";
        } else if ($horario >= "22:01" && $horario <= "23:59") {
            echo "Agora são $horario horas, o Ingresso custa R$ 40,00 reais.";
        } else
            echo "Agora são $horario horas, o Cinema está Fechado.";

        echo "<br><br>";

        echo "<h1>Exercícios com SWITCH</h1>";

        $enunciado1 = "1 - Faça um programa que determine o dia da semana. O programa deve receber um número de 1 a 7, representando um dia da semana, e imprimir o nome do dia correspondente (por exemplo, 1 = 'Domingo', 2 = 'Segunda-feira', etc.).<br><br>";

        echo "$enunciado1";

        $numeroSemana = 6;
        



        if ($numeroSemana = "1") {
            echo "O dia da semana que corresponde ao número $numeroSemana é Domingo.";
        } else if ($numeroSemana = 2) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Segunda-feira.";
        } else if ($numeroSemana = 3) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Terça-feira.";
        } else if ($numeroSemana = 4) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Quarta-feira.";
        } else if ($numeroSemana = 5) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Quinta-feira.";
        } else if ($numeroSemana = 6) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Sexta-feira.";
        } else if ($numeroSemana = 7) {
            echo "O dia da semana que corresponde ao número $numeroSemana é Sábado.";
        } else
            echo "Número Inválido";

        




    ?>
    
</body>
</html>