<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="20;url=index.html" />
        <link rel="stylesheet" type="text/css" href="estilo_inserir.css">
        <title> Gestão de clientes</title>
    </head>
    <body>
        <h1 class="titulo">Inserir Clientes</h1><br>
        <?php

        $ligacao = mysqli_connect("localhost", "root", "", "bd_01");
        if ($ligacao->connect_error){
            die(mysqli_connect_error($ligacao));
        }
        // instrução para adicionar 
        $sql="INSERT INTO t_cliente (nome, morada, zona, nif, vol_fatur) VALUES
        ('$_POST[nome]','$_POST[morada]','$_POST[zona]', '$_POST[nif]','$_POST[vol_fatur]')";
        
        echo $sql;
        if (mysqli_query($ligacao, $sql)){
            echo "<h1> Cliente inserido com sucesso!</h1>";
        }
        mysqli_close($ligacao);
        ?>
        <h2> Aguarde que vai ser redirecionado</h2>
    </body>
</html>