<?php
    require_once "../controllers/album.php";
    require_once "../models/connection.php";

    $connection = getConnection();
    $albumController = new AlbumController();

    echo "<table>";
    echo $albumController->listar($connection);
    echo "</table>";
?>