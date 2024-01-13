<html>
    <head>
        <meta charset="utf-8">
        <title> Alterar Clientes</title>
    </head>
    <body>
        <h1>Alteração de Clientes</h1>
        <hr><br>

    <form action="alterar2.php" method="post">
        <p> Qual o cliente a alterar: <select name="cp_id">
    <?php
    $ligacao = mysqli_connect("localhost", "root", "", "bd_01");
    
    if (!$ligacao){
        die("Erro na ligação".mysqli_connect_error());
    }

    $sql="SELECT * FROM t_cliente ORDER BY nome";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));

    while($linha=mysqli_fetch_assoc($resultado)){
        echo"<option value='" . $linha['id'] . "'>". $linha['nome'];
        echo"</option";
    }
    mysqli_close($ligacao);
    ?>
    </select></p>
    <p>
        <input name="submit" type="submit" value="Alterar"/></p>
        <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);">
    </form>
    </body>
</html>