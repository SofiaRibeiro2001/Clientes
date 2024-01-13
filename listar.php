<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo_listar.css">
        <title> Gestão de clientes</title>
    </head>
    <body>
        <h1 class="titulo">Listagem de Clientes</h1><br>
        <div class="conteudo">
        <?php // abrir o php
        
        // 4 paramentros para a ligação (servidor, utilizador, senha e base de dados)
        $ligacao = mysqli_connect("localhost", "root", "", "bd_01");
        if ($ligacao->connect_error){
            die(mysqli_connect_error($ligacao));
        }
        $sql="select * from t_cliente";

        // esta variavel resultado vai armazenar todos os registos existentes na base de dados
        $resultado = mysqli_query($ligacao,$sql) or die (mysqli_error($ligacao));
        // variavel para controlar o numero de registos que tem na bd
        $numreg = 0;
        // enquanto houver registos
        while($linha=mysqli_fetch_assoc($resultado)){
            echo "<b>ID:</b>" . $linha['id'] . "<br/>";
            echo "<b>Nome:</b>" . $linha['nome'] . "<br/>";
            echo "<b>Morada:</b>" . $linha['morada'] . "<br/>";
            echo "<b>Zona:</b>" . $linha['zona'] . "<br/>";
            echo "<b>Nif:</b>" . $linha['nif'] . "<br/>";
            echo "<b>Volume de Faturação:</b>" . $linha['vol_fatur'] . "<br/>";
            echo "<hr>";
            $numreg++;
        }
        echo "<br> Número de registos na base de dados: " . $numreg;
        mysqli_close($ligacao);

        // fechar o php
        ?>
        </div>
        <br><br>
        <a href="index.html" target="_self" class="botao">Voltar</a>
        <br><br>
    </body>
</html>