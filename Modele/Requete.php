<?php
include('../Controler/Connexion/Connexion.php');
$db = Connexion();
function insertion()
{
    GLOBAL $db;
    $Requete = "INSERT INTO utilisateur(Email_utilisateur, Email_recepteur, message_utilisateur, nom_fichier) VALUES(?, ?, ?, ?)";
    $Insertion = $db->prepare($Requete);
    $Insertion->bindParam('Email_utilisateur',$_POST['Email_utilisateur']);
    $Insertion->bindParam('Email_recepteur',$_POST['Email_recepteur']);
    $Insertion->bindParam('message_utilisateur',$_POST['message_utilisateur']);
    $Insertion->bindParam('nom_fichier',$_POST['nom_fichier']);
    $Insertion->execute();
}
insertion();
?>