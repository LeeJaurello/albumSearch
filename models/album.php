<?php
    class AlbumModel {
        function cadastrar($connection, $nome, $artista, $ano) {
            $stmt = $connection->prepare("INSERT INTO album(nome, artista, ano) VALUES (:nome, :artista, :ano)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":artista", $artista);
            $stmt->bindParam(":ano", $ano);
            $stmt->execute();
        }
    function listar($connection) {
        $stmt = $connection->prepare("SELECT * FROM album");
        $stmt->execute();
        return $stmt;
    }

    function buscarPeloAlbum() {
        $conexaoPDO= new ConexaoPDO();
        $connection = $conexaoPDO->getConnection();

        $sql = "SELECT nome FROM album WHERE artista = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(1, $artista);
        $stmt->execute();
        return $stmt;
    }
}