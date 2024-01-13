<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo_inserir.css">
        <title> Alterar clientes</title>
    </head>
    <body>
        <h1 class="titulo">Alterar Clientes</h1>
        <br><br>
        <form action="inserir.php" method="post">

            <p class="texto">Nome: <input type="text" name="nome" size="100"></p>
            <p class="texto">Morada: <input type="text" name="morada" size="100"></p>
            <p class="texto">Zona: <input type="text" name="zona" size="30"></p>
            <p class="texto">Nif: <input type="text" name="nif" size="9"></p>
            <p class="texto">Volume de Faturação: <input type="text" name="vol_fatur" size="10"></p>

            <br>
            
            <input class="botao" type="submit" value="Inserir">
            <input class="botao" type="reset" value="Limpar">
            <input class="botao" type="button" value="Cancelar" onclick="window.history.go(-1);">
        </form>
    </body>
</html>