<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="3;url=index.html"/>
        <title>Eliminação de Cliente</title>
    </head>
    <body>
        <h1>Eliminação de Clientes</h1>
        <hr>
        <?php
            $cp_id=$_POST['cp_id'];
            $ligacao = mysqli_connect("localhost", "root", "", "bd_01");
            
            if ($ligacao->connect_error){
                die(mysqli_connect_error($ligacao));
            }

            $sql ="DELETE FROM t_cliente WHERE id=".$cp_id;
            if (mysqli_query($ligacao, $sql)){
                echo "<h2>Cliente apagado com sucesso!</h2>";
            }
            else{
                echo "Erro! " . mysli_error($ligacao);
            }

        mysqli_close($ligacao);
        ?>
    <p>
        <h2>Aguarde, vai ser redirecionado</h2>
    </body>
</html>
