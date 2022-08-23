<?php
    // connection à la base de donnee
    include_once "connection.php";

    // recuperation de l'id dans le lien
    $recuperation_id = $_GET["id"];

    // requete de suppression StackFinder Search (CTRL + ENTER)
    $queryDelete = "DELETE FROM employe_table WHERE id=$recuperation_id";
    $requete_de_suppression = mysqli_query($connection_to_database,$queryDelete);

    // apres la suppression redirection sur la page index
    header("Location:index.php");
    
?>