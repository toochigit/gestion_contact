<?php
    //connexion à la base de données
    // $connexion = new mysqli("127.0.0.1", "root", "root", "gestion_contact")
    include ('add_contact.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
    <h1>CONTACT</h1>
    <h2>ajout d'un contact :</h2>

    <section class="add">

        <label class="add_prenom" for="prenom">Prenom :</label>
        <input class="add_prenom" type="text" id="prenom" name="prenom" required><br><br>
        <label class="add_nom" for="nom">Nom :</label>
        <input class="add_nom" type="text" id="nom" name="nom" required><br><br>
        <label class="add_tel" for="tel">Tel :</label>
        <input class="add_tel" type="int" id="tel" name="tel" required><br><br>
        <label class="add_email" for="email">Email :</label>
        <input class="add_email" type="text" id="email" name="email" required><br><br>
        
        <input type="submit" value="send">
    </section>

</body>
</html>

<!-- fait en 3heures de cours sans comprendre -->