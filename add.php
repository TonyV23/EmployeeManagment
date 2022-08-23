<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AJOUT EMPLOYE</title>
</head>
<body>

    <?php
        // verifier que le button Ajouter à été cliqué
        if (isset($_POST['button']))

        // recupeartion des valeurs des variables
        extract($_POST);

        // verifier que les champs ont été remplis
        if (isset($nom) && isset($prenom) && $age){
            
            // connection à la base de donnee
            include_once "connection.php";

            // requete d'ajout dans la base de donnee
            $queryAdd  = "INSERT INTO employe_table VALUES (NULL,'$nom','$prenom','$age')";
            $requete_ajout = mysqli_query($connection_to_database, $queryAdd);

            if($requete_ajout){
                // si la requete a reussie , redirection sur la page d'accueil
                header("Location:index.php");
            }
        }else
            $error_message_missing_input = "Veuillez remplir tous les champs !";

    ?>

    <div class="form">
        <a href="index.php" class="back_button"><img src="images/back.png" alt="button_retour">Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="message_error">
            <?php 
                // si la variable error_message_missing_input existe , affichons sa value
                if (isset($error_message_missing_input))
                    echo $error_message_missing_input;
            ?>
        </p>
        <form action="" method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom"> 
            <label for="">Prenom</label>
            <input type="text" name="prenom">
            <label for="">Age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>