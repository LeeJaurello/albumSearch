<?php
    class AlbumController {
        function listar($connection) {
            require_once "../models/album.php";
            $albumModel = new AlbumModel();
            $resultado = $albumModel->listar($connection);

            $html = "";
            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $html .= "<tr>";
                $html .= '    <td>- ' . $linha['nome']    . '</td>';
                $html .= '    <td> |'      . $linha['artista'] . '</td>';
                $html .= '    <td> |'      . $linha['ano'] . '</td>';
                $html .= "</tr>";
            }
        return $html;
    }

    function cadastrar($connection, $nome, $artista, $ano) {
        require_once "../models/album.php";
        $albumModel = new AlbumModel();
        $albumModel->cadastrar($connection, $nome, $artista, $ano);
    }

    $acao == "buscarPeloAlbum")
    $artista = $_POST['artista']
    $albumModel = new AlbumModel();
    $resultado = $albumModel->buscarPeloAlbum($artista);
}