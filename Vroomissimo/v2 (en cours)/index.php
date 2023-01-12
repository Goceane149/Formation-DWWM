<?php

    // Permet de savoir s'il y a une session. 
    // C'est-à-dire si un utilisateur s'est connecté à votre site 
  session_start(); 
  $text ="\tCeci est un tableau :) ...  ";
  
  // Fichier PHP contenant la connexion à votre BDD
  include('bd/connexionDB.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<?php
  include_once('_head/meta.php'); 
  include_once('_head/link.php'); 
?>
<title> Accueil </title>
</head>
<body>
<form method="GET">
        <input type="search" name="s" placeholder="Rechercher une voiture" >
        <input type="submit" name="envoyer">
    </form>
    <section class="afficher_voiture">
        <?php
        if($allcars->rowCount() > 0){
            while($cars = $allcars->fetch()) {
                ?>
                <p><?= $cars['Marque'];?>  <?= $cars['Modele'];?></p>
                <?php
            }

        }else{
            ?>
            <p>Aucune voiture Trouvé</p>
            <?php
            
        }
        ?>

    </section>
    <?php
    include_once('_footer/script.php'); 
    ?>
</body>
</html>