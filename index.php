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

            <tr>
                <td>Tony</td>
                <td>Almeda</td>
                <td>35 ans</td>
                <td><a href="modify.php"><img src="images/pen.png" alt=""></a></td>
                <td><a href=""><img src="images/trash.png" alt=""></a></td>
            </tr>

        </table>
    </div>
  </body>

  </html>