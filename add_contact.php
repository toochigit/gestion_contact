<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);

    //verifie si les champs ne sont pas vides
    if (!empty($prenom) && !empty($nom) && !empty($tel) && !empty($email)) {
        
        //connexion a la base de donnee
        $connexion = new mysqli("localhost", "root", "root", "gestion_contact");

        //verifie si la connexion a échoué
        if ($connexion->connect_error) {
            $message = "<span style='color:red'>Echec de la connexion : " . $connexion->connect_error . "</span>";
        } else {
            //requete pour inserer un nouveau contact dans la base de donnees
            $requete = "INSERT INTO contact (prenom, nom, tel, email) VALUES ('$prenom', '$nom', '$telephone', '$email')";

            //verifie que la requete s'est bien executee
            if ($connexion->query($requete)===TRUE) {
                $message = "Nouveau contact ajoute avec succès";
            } else {
                $message = "<span style ='color:red'>Erreur : ". $requete . "<br>" . $connexion->error . "</span>";
            }
            
            //fermer la connexion a la base de donnees
            $connexion->close();
        }
    } else {
        $message = "<span style='color:red'>Veuillez remplir tous les champs</span>";
    }
} else {
    $message = "<span style='color:red'>Methode non autorisee</span>";
}

include 'index.php';

echo $message;
?>