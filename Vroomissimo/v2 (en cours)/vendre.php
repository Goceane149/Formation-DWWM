<?php
session_start();
include('bd/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
 
// Si la variable "$_Post" contient des informations alors on les traitres
if(!empty($_POST)){
    extract($_POST);
    $valid = true;
 
// On se place sur le bon formulaire grâce au "name" de la balise "input"
    if (isset($_POST['vendre'])){
        $marque = htmlentities(trim($marque)); // On récupère le nom
        $modele = htmlentities(trim($modele)); // on récupère le prénom
        $annee = htmlentities(trim($annee)); // On récupère le mail
        $type_vehicule = htmlentities(trim($type_vehicule)); // On récupère le mot de passe 
        $prix = htmlentities(trim($prix)); //  On récupère la confirmation du mot de passe
        $tcarburant = htmlentities(trim($tcarburant)); // On récupère le nom
        $description = htmlentities(trim($description)); // on récupère le prénom
        $vehicule_f = htmlentities(trim($vehicule_f)); //
        $kilometre = htmlentities(trim($kilometre)); // On récupère le mail
        $prec_proprietaire = htmlentities(trim($prec_proprietaire)); // On récupère le mot de passe 
        $couleur = htmlentities(trim($couleur)); //  On récupère la confirmation du mot de passe
        $S_peinture = htmlentities(trim($S_peinture)); // On récupère le nom
        $C_interieur = htmlentities(trim($C_interieur)); // on récupère le prénom
        $S_interieur = htmlentities(trim($S_interieur)); // On récupère le mail
        $etat = htmlentities(trim($etat)); // On récupère le mot de passe 
        $puissance = htmlentities(trim($puissance)); //  On récupère la confirmation du mot de passe
        $transmission = htmlentities(trim($transmission)); // On récupère le mail
        $cylindres = htmlentities(trim($cylindres)); // On récupère le mot de passe 
        $cylindrees = htmlentities(trim($cylindrees)); //  On récupère la confirmation du mot de passe
        $vitesse = htmlentities(trim($vitesse)); // On récupère le nom
        $typemoteur = htmlentities(trim($typemoteur)); // on récupère le prénom
        $conscarburant = htmlentities(trim($conscarburant)); // On récupère le mail
        $nbporte = htmlentities(trim($nbporte)); // On récupère le mot de passe 
        $nbsiege = htmlentities(trim($nbsiege)); //  On récupère la confirmation du mot de passe
        $confort = htmlentities(trim($confort));
        $divertissement = htmlentities(trim($divertissement));
        $securite = htmlentities(trim($securite));
        $autre = htmlentities(trim($autre));



    //  Vérification du nom
        if(empty($marque)){
            $valid = false;
            $er_marque = ("La marque ne peut pas être vide");
        }
        if(empty($modele)){
            $valid = false;
            $er_modele = ("Le modèle ne peut pas être vide");
        }
        if(empty($prix)){
            $valid = false;
            $er_prix = ("Le prix ne peut pas être vide");
        }
        if(empty($tcarburant)){
            $valid = false;
            $er_tcarburant = ("Le type de carburant ne peut pas être vide");
        }
        if(empty($kilometre)){
            $valid = false;
            $er_kilometre = ("Merci de renseigner le kilometrage du vehicule");
        }
        if(empty($couleur)){
            $valid = false;
            $er_couleur = ("Merci de rensseigner la couleur du vehicule");
        }
// Si toutes les conditions sont remplies alors on fait le traitement
        if($valid){

// On insert nos données dans la table utilisateur
            $DB->insert("INSERT INTO annonce (marque, modele, annee, typeVehicule, prix, carburant, id, description, kilometrage, fumeur, nbproprietaire, couleurs, speinture, couleurinterieur, sinterieur, etat, puissance, transmission, cylindres, cylindree, vitesse, tmoteur, conscarburant, confort, divertissement_media, securite, nbsiege, nbporte, autre) VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
array($marque, $modele, $annee, $type_vehicule, $prix, $tcarburant, $_SESSION['id'], $description, $kilometre, $vehicule_f, $prec_proprietaire, $couleur, $S_peinture, $C_interieur, $S_interieur, $etat, $puissance, $transmission, $cylindres, $cylindrees, $vitesse, $typemoteur, $conscarburant, $confort, $divertissement, $securite, $nbsiege, $nbporte, $autre));

header('Location: index.php');
exit;
}
}
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <?php
  include_once('_head/meta.php'); 
  include_once('_head/link.php'); 
?>
        <title>Vendre un vehicule</title>
    </head>
    <body>
    <?php
    include_once('_menu/nav.php'); 
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Info Vehicule</h1>
                <div class="mb-3">
        <label class="form-label" >Marque du vehicule:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_marque)){
            ?>
                <div><?= $er_marque ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Marque du vehicule" name="marque" value="<?php if(isset($marque)){ echo $marque; }?>" required>
        </div>
        <div class="mb-3">
        <label class="form-label" >Modèle du vehicule:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_modele)){
            ?>
                <div><?= $er_modele ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Modèle du vehicule" name="modele" value="<?php if(isset($modele)){ echo $modele; }?>" required>

            </div>
        <div class="mb-3">
        <label class="form-label" >Année du vehicule:</label>
            <input class="form-control" type="text" placeholder="Année du vehicule" name="annee" value="<?php if(isset($annee)){ echo $annee; }?>">

            </div>
        <div class="mb-3">
        <label class="form-label" >Type de vehicule:</label>
        <select class="form-control"  name="type_vehicule"  required>
                <option class="form-control" value="<?php if(isset($type_vehicule)){ echo $type_vehicule; }?>">Voiture</option>
                <option class="form-control" value="<?php if(isset($type_vehicule)){ echo $type_vehicule; }?>">Moto</option>
        </select>
        </div>
        <div class="mb-3">
        <label class="form-label" >Prix du vehicule:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_prix)){
            ?>
                <div><?= $er_prix ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Prix du vehicule" name="prix" value="<?php if(isset($prix)){ echo $prix; }?>" required>
            </div>
        <div class="mb-3">
        <label class="form-label" >Type de Carburant:</label>
                    <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_tcarburant)){
            ?>
                <div><?= $er_tcarburant ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Type de carburant" name="tcarburant" value="<?php if(isset($tcarburant)){ echo $tcarburant; }?>" required>
        </div>
        </div>
    <div class="col-5">
        <h1>Description</h1>
        <form method="post" enctype="multipart/form-data" >
      <div class="mb-3">
        <label class="form-label" >Description:</label>
            <input class="form-control" type="text" placeholder="Une petite Description" name="description" value="<?php if(isset($description)){ echo $description; }?>" maxlength="255" size="30" required>
        </div>
                </div>
                <div class="col">
                <h1>Historique</h1>
        <div class="mb-3">
        <label class="form-label" >Kilometrage:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_kilometre)){
            ?>
                <div><?= $er_kilometre ?></div>
            <?php
            }
            ?>
            <input class="form-control " type="text" placeholder="kilometrage du vehicule" name="kilometre" value="<?php if(isset($kilometre)){ echo $kilometre; }?>" required>
        <div class="mb-3">
        <label class="form-label" >Véhicule fumeur ?</label>
        <select class="form-control "  name="vehicule_f"  required>
                <option class="form-control" value="<?php if(isset($vehicule_f)){ echo $vehicule_f; }?>">Vehicule fumeur</option>
                <option class="form-control" value="<?php if(isset($vehicule_f)){ echo $vehicule_f; }?>">Vehicule non fumeur</option>
            </select>
            </div>
        <div class="mb-3">
        <label class="form-label" >Nombre de propriétaire:</label>
            <input class="form-control " type="text" placeholder="Nombre de propriétaire" name="prec_proprietaire" value="<?php if(isset($prec_proprietaire)){ echo $prec_proprietaire; }?>" >
        </div>
        </div>
            </div>





            <div class="row">
            <div class="col">
                <h1>Style</h1>
        <div class="mb-3">
        <label class="form-label" >Couleur du vehicule:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_couleur)){
            ?>
                <div><?= $er_couleur ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="couleur du vehicule" name="couleur" value="<?php if(isset($couleur)){ echo $couleur; }?>" required>
            </div>
        <div class="mb-3">
        <label class="form-label" >Style de peinture:</label>
            <input class="form-control" type="text" placeholder="Style de peinture du vehicule" name="S_peinture" value="<?php if(isset($S_peinture)){ echo $S_peinture; }?>">
            </div>
        <div class="mb-3">
        <label class="form-label" >Couleur Interieur:</label>
            <input class="form-control" type="text" placeholder="Couleur intérieur du vehicule" name="C_interieur" value="<?php if(isset($C_interieur)){ echo $C_interieur; }?>">
            </div>
        <div class="mb-3">
        <label class="form-label" >Style  interieur:</label>
            <input class="form-control" type="text" placeholder="Style intérieur du vehicule" name="S_interieur" value="<?php if(isset($S_interieur)){ echo $S_interieur; }?>">
        </div>
        </div>
    <div class="col-5">
        <h1>Caractéristiques</h1>
      <div class="mb-3">
        <label class="form-label" >États:</label>
            <input class="form-control" type="text" placeholder="État de la voiture" name="etat" value="<?php if(isset($etat)){ echo $etat; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Puissance:</label>
            <input class="form-control" type="text" placeholder="Puissance du vehicule" name="puissance" value="<?php if(isset($puissance)){ echo $puissance; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Transmission:</label>
            <input class="form-control" type="text" placeholder="Transmission" name="transmission" value="<?php if(isset($transmission)){ echo $transmission; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Cylindres:</label>
            <input class="form-control" type="text" placeholder="Cylindres" name="cylindres" value="<?php if(isset($cylindres)){ echo $cylindres; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >cylindrée:</label>
            <input class="form-control" type="text" placeholder="cylindrées du vehicule" name="cylindrees" value="<?php if(isset($cylindrees)){ echo $cylindrees; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Vitesse:</label>
            <input class="form-control" type="text" placeholder="Nombre de vitesse" name="vitesse" value="<?php if(isset($vitesse)){ echo $vitesse; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Type de moteur:</label>
            <input class="form-control" type="text" placeholder="type de moteur" name="typemoteur" value="<?php if(isset($typemoteur)){ echo $typemoteur; }?>">
        </div>
        <div class="mb-3">
        <label class="form-label" >Consommation carburant:</label>
            <input class="form-control" type="text" placeholder="Consommation du carburant" name="conscarburant" value="<?php if(isset($conscarburant)){ echo $conscarburant; }?>">
        </div>
        
                </div>
                <div class="col">
                <h1>Équipements</h1>
        <div class="mb-3">
                <label class="form-label" >Nombres Portes:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_nbporte)){
            ?>
                <div><?= $er_nbporte ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Nombres de portes" name="nbporte" value="<?php if(isset($nbporte)){ echo $nbporte; }?>" required>
        </div>
        <div class="mb-3">
                <label class="form-label" >Nombre de sièges:</label>
            <input class="form-control" type="text" placeholder="Nombre de sièges" name="nbsiege" value="<?php if(isset($nbsiege)){ echo $nbsiege; }?>" >
        </div>
        <div class="mb-3">
                <label class="form-label" >Confort:</label>
            <input class="form-control" type="text" placeholder="Confort" name="confort" value="<?php if(isset($confort)){ echo $confort; }?>" >
        </div>
        <div class="mb-3">
                <label class="form-label" >Divertissement / Media:</label>
            <input class="form-control" type="text" placeholder="Divertissement / Media" name="divertissement" value="<?php if(isset($divertissement)){ echo $divertissement; }?>" >
        </div>
        <div class="mb-3">
                <label class="form-label" >Sécurité:</label>
            <input class="form-control" type="text" placeholder="Sécurité" name="securite" value="<?php if(isset($securite)){ echo $securite; }?>" >
        </div>
        <div class="mb-3">
                <label class="form-label" >Autre:</label>
            <input class="form-control" type="text" placeholder="Autre" name="autre" value="<?php if(isset($autre)){ echo $autre; }?>" >
        </div>
        <h1>Photo</h1>
        <div class="mb-3">
                <label class="form-label" >Ajoutez une Photo:</label>
            <input class="form-control" type="file" accept=".jpg, .jpeg, .png" placeholder="Ajoutez une Photo" name="image" value="<?php if(isset($photo)){ echo $photo; }?>" >
        </div>
            </div>
        </div>
        <div class="row mb-6">
        <div class="col-4"></div>
        <div class="col-6 ">
        <button class="btn btn-success" type="submit" name="vendre">Vendre le vehicule</button>
        </div>
        </div>
        </div>
        </form>
        <?php
        include_once('_footer/script.php');
        ?>
    </body>
</html>