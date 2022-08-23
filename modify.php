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
    <div class="form">
        <a href="index.php" class="back_button"><img src="images/back.png" alt="button_retour">Retour</a>
        <h2>Modifier un employé</h2>
        <p class="message_error">Veuillez remplir tous les champs</p>
        <form action="" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom">
            <label for="">Prenom</label>
            <input type="text" name="prenom">
            <label for="">Age</label>
            <input type="number" name="age">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>