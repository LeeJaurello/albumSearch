<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="views/cadastrarAlbum.php" method="POST">
            Título do Álbum:  <input type="text" name="nome"> 
            <br>
            Artista: <input type="text" name="artista">
            <br>
            Ano: <input type="number" name="ano">
            <br><br>

            <button>Cadastrar</button>

            <br></br>

            <a href="../views/buscarAlbum.html">Buscar Álbum</a>
        </form>
    </body>

</html>