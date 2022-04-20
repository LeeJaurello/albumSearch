<?php
    $nome = $_POST['nome'];
    $artista = $_POST['artista'];
    $ano = $_POST['ano'];

    require_once "../controllers/album.php";
    require_once "../models/connection.php";

    $albumController = new AlbumController();
    $connection = getConnection();

    $albumController->cadastrar($connection, $nome, $artista, $ano);

    header("Location: ./album.php");
?>