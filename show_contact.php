<?php

//connexion à la base de données
$connexion = new mysqli("127.0.0.1", "root", "root", "gestion_contact")

//verifie s'il y a eu un problème les contacts
if ($connexion->connect_error) {
    echo ("Echec de la connexion : ". $connexion->connect_error);
} else {
    //requete pour récupérer tous les contacts
    $requete = "SELECT * FROM contact";
    //executer la requete
    $resultat = $connexion->query($requete)
    //verifie le nombre de resultat (nombre de lignes) retournes par la requete
    if ($resultat->num_rows > 0) {
        //commence une liste sur la page HTML
        echo "<ul>";
        //boucle sur toutes les lignes retournees par la requete
        while ($ligne = resultat->fetch_assoc()) {
            //ajouter une ligne dans la page HTML 
            echo "<li><a class='suppressLink' href='supprimer_contact.php?id=".$ligne["ID"]."'>supprimer</a><span class='nomContact'>"
        }
        //fermer la liste HTML
        echo"</ul>";
    } else {
        //si aucun contact n'a été trouvé, affiche un message
        echo "<span>Aucun contact trouvé</span>";
    }
    
}

//fermer la connexion
$connexion->close();

?>