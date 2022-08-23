<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MODIFIER EMPLOYE</title>
</head>
<body>

    <?php

        // connection à la base de donnee
        include_once "connection.php";
        
        // recuperation de l'id dans le lien
        $recuperation_id = $_GET["id"];

        // requete pour afficher les infos de l'employe
        $querySelectorModifier  = "SELECT * FROM employe_table WHERE id = $recuperation_id";
        $requete = mysqli_query($connection_to_database,$querySelectorModifier);
        $row_in_database = mysqli_fetch_assoc($requete);


        // verifier que le button Ajouter à été cliqué
        if (isset($_POST['button']))

        // recupeartion des valeurs des variables
        extract($_POST);

        // verifier que les champs ont été remplis
        if (isset($nom) && isset($prenom) && $age){

            // requete de modification
            $requete_sql = "UPDATE employe_table SET nom ='$nom',prenom='$prenom',age='$age' WHERE id = $recuperation_id";
            $requete_de_modification = mysqli_query($connection_to_database,$requete_sql);

            if($requete_de_modification){
                // si la requete a reussie , redirection sur la page d'accueil       
                header("Location:index.php");
            }else
                echo "Employé non modifié";
        }else
            $error_message_missing_input = "Veuillez remplir tous les champs !";
    ?>

    <div class="form">
        <a href="index.php" class="back_button"><img src="images/back.png" alt="button_retour">Retour</a>
        <h2>Modifier un employé</h2>
        <p class="message_error">
            <?php 
                // si la variable error_message_missing_input existe , affichons sa value
                if (isset($error_message_missing_input))
                        echo $error_message_missing_input;
            ?>
        
        </p>
        <form action="" method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?=$row_in_database["nom"]?>">
            <label for="">Prenom</label>
            <input type="text" name="prenom" value="<?=$row_in_database["prenom"]?>">
            <label for="">Age</label>
            <input type="number" name="age" value="<?=$row_in_database["age"]?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>