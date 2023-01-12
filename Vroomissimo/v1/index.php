<?php 
include_once('bdd/bdd.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Rechercher une voiture</title>
    <meta charset="UTF-8">
    
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
    
</body>
</html>