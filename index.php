<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>GESTION DES EMPLOYES</title>
  </head>

  <body>
    <div class="container">
        <a href="add.php" class="button_add"> <img src="images/button_plus.png" alt="button_plus">Ajouter</a>

        <table>
            
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php
                // inclure la page de connection
                include_once "connection.php";

                // requete pour afficher les employes depuis la base donnee
                $querySelector = "SELECT * FROM employe_table";
                $requete = mysqli_query($connection_to_database, $querySelector);

                if (mysqli_num_rows($requete) == 0){
                    // s'il ya pas d'employe dans la base de donnée on affiche ce message
                    echo "Pas employe enregistré pour le moment <br> Merci de les Ajouter !";
                }else{
                    // si non on affiche les employes qui sont dans la base donnee
                    while($employe_in_database = mysqli_fetch_assoc($requete)){
                       ?>
                            <tr>
                                <td><?=$employe_in_database["nom"]?></td>
                                <td><?=$employe_in_database["prenom"]?></td>
                                <td><?=$employe_in_database["age"]?></td>
                                <td><a href="modify.php?id=<?=$employe_in_database["id"]?>"><img src="images/pen.png" alt="pen image"></a></td>
                                <td><a href="delete.php?id=<?=$employe_in_database["id"]?>"><img src="images/trash.png" alt="trash image"></a></td>
                            
                            </tr>
                        <?php 
                    }
                }
            ?>

        </table>
    </div>
  </body>

  </html>
