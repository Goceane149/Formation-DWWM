<?php
  session_start(); 
  include('bd/connexionDB.php'); 
  // S'il n'y a pas de session alors on ne va pas sur cette page
  if(!isset($_SESSION['id'])){ 
    header('Location: index.php'); 
    exit; 
  }
  // On récupère les informations de l'utilisateur connecté
  $afficher_profil = $DB->query("SELECT * 
    FROM utilisateur 
    WHERE id = ?", 
  array($_SESSION['id']));
  
  $afficher_profil = $afficher_profil->fetch(); 
  
?>
<html lang="fr">
    <head>
    <?php
  include_once('_head/meta.php'); 
  include_once('_head/link.php'); 
?>
    <title>Mon profil</title>
    <head>
    <body>
    <?php
    include_once('_menu/nav.php'); 
    ?>
    <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>
    <div>Quelques informations sur vous : </div>
    <ul>
        <li>Votre id est : <?= $afficher_profil['id'] ?></li>
        <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>
        <li>Votre compte a été crée le : <?= $afficher_profil['date_creation_compte'] ?></li>
    </ul>
    </body>
</html>