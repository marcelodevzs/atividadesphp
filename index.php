<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 04</title>
</head>
<body>
    <?php 
        
         //inicio josé operadores logicos
        echo "<h1>Atividades PHP</h1>";
 
        echo "<h2>Operadores Lógicos</h2>";
 
        echo "<h2>1 - Sistema de Autenticação de funcionários</h2>";
 
        $cadastro = "José";
 
        $administrador = "João";
        $cadastro1 = "José";
 
        if($cadastro == $cadastro1) {
            echo "Acesso permitido";
        } elseif($cadastro == $administrador) {
            echo "Acesso permitido";
        } else {
            echo "Acesso negado";
        }   
 
        echo "<br><br><br>";
        //fim josé operadores logicos
        
        

        //Início por Marcelo Augusto
        echo "<h1>Cálculo Matemático com Ordem de Grandeza</h1>";
        echo "1 - Cálculo de Imposto com Desconto<br>";
        echo "Crie um programa que calcule o valor final de uma compra considerando um desconto e imposto. Se o valor da compra for maior que R$500,00, um desconto de 10% será aplicado. O imposto de 8% será calculado sobre o valor original da compra, antes de aplicar o desconto.<br><br>";
        
        $valorCompra = 400.00;
        $imposto = 8;
        $desconto = 10;
        $valorComImposto = $valorCompra * (1 + $imposto / 100);
        $valorFinal = $valorComImposto * (1 - $desconto / 100);

        echo "Valor da Compra: R$ " . number_format($valorCompra, 2, ',', '.'); echo "<br>";
        echo "Valor com 8% de Imposto: R$ " . number_format($valorComImposto, 2, ',', '.'); echo "<br>";

        if ($valorCompra <= 499) {
            echo "Valor Final da Compra: R$ " . number_format($valorComImposto, 2, ',', '.');
        } else {
            echo "Valor Final da Compra: R$ " . number_format($valorFinal, 2, ',', '.');
        }
        //Fim po Marcelo Augusto

        
        //inicio josé calculo matematico com ordem de grandeza
        echo "<h2>2.Cálculo de preço com taxa de entrega</h2>";
 
        $valorcompra = 900;
        $taxadeentrega = 15;
 
        $valorfinal = $valorcompra + ($valorcompra * $taxadeentrega / 100);
 
        if ($valorfinal > 1000) {
        $desconto = $valorfinal * 0.20;
        $valorcomdesconto = $valorfinal - $desconto;
            echo "$valorcomdesconto";
        } else {
            echo "$valorfinal";
        }
        //fim José calculo matematico com ordem de grandeza
        
        echo "<br>";

        //Criado por Marcelo Augusto
        echo "<h1>While</h1>";

        echo "1 - Contagem de Estoque<br>";
        echo "Implemente um programa que simule a venda de um produto. O estoque começa com 100 unidades. Cada vez que um produto for vendido, o estoque deve ser decrementado e o programa deve imprimir quantas unidades restam. O programa deve continuar até que o estoque seja zerado.<br><br>";

        $estoque = 99;

        while ($estoque >= 0) {
            echo "1 Produto foi vendido. Restam $estoque unidades.<br>";
            $estoque--;
        }

        echo "Estoque zerado.";
        //Fim por Marcelo Auguto


         //inicio josé while
        echo "<br>";
 
        echo "<h2>2.Verificação de cliente</h2>";
 
        $senhacorreta = "123";
        $tentativas = 0;
 
        $senhadigitada = "123";
 
        while ($tentativas < 3) {
 
        if ($senhadigitada == $senhacorreta) {
            echo "Senha correta ";
        }
        $tentativas++;
        }
       
 
        if ($tentativas == 1) {
            $senhadigitada = "222";
        } elseif ($tentativas == 2) {
            $senhadigitada = "123";
        } else {
            echo "acesso negado";
        }
 
 
        if ($senhadigitada == $senhacorreta) {
            echo " bem vindo";
        }
        //fim josé while


        //Criado por Marcelo Augusto
        echo "<h1>Do While</h1>";
        
        echo "1 - Sistema de Tentativas de Login<br>";
        echo "Implemente um sistema de login que permita ao usuário tentar inserir a senha até acertar ou até alcançar o número máximo de tentativas. O sistema deve pedir uma senha até que o usuário insira a senha    correta ou ultrapasse o limite de 3 tentativas.<br><br>";

        $senhaCorreta = 3132;
        $tentativas = 3;
        $senha = "";

        do {
            $senha = 3132;
            $tentativas++;

            if ($senha !== $senhaCorreta) {
                echo "Senha Incorreta!\n";
        }

        } while ($senha !== $senhaCorreta && $tentativas < 3);

        if ($senha === $senhaCorreta) {
            echo "Login Realizado com Sucesso!\n";
        } else {
            echo "Número Máximo de Tentativas Atingido!";
        }

        echo "<br><br>";

        //Início por Marcelo Augusto
        echo "2. Processamento de Pedidos de Compra<br>";
        echo "Crie um sistema que simule o processamento de pedidos de compra em uma loja online. O programa deve processar um número determinado de pedidos e, para cada um, imprimir 'Processando pedido X'. O sistema deve continuar até que todos os pedidos sejam processados, sendo o número de pedidos fornecido pelo usuário.<br><br>";

        $totalPedidos = 15;
        $pedidoAtual = 1;

        if ($totalPedidos > 0) {
            do {
                echo "Processando Pedido $pedidoAtual. <br>";
                $pedidoAtual++;
            } while ($pedidoAtual <= $totalPedidos);
        } else {
            echo "Número de Pedidos Inválido \n";
        }
        //Fim por Marcelo Auguto

    ?>
    
</body>
</html>