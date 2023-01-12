<?php
session_start();
include('bd/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
 
// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])){
header('Location: index.php');
exit;
}
 
// Si la variable "$_Post" contient des informations alors on les traites
if(!empty($_POST)){
    extract($_POST);
    $valid = true;
 
// On se place sur le bon formulaire grâce au "name" de la balise "input"
    if (isset($_POST['inscription'])){
        $nom = htmlentities(trim($nom)); // On récupère le nom
        $prenom = htmlentities(trim($prenom));// on récupère le prénom
        $adresse = htmlentities(trim($adresse)); // on récupère l'adresse
        $cp = htmlentities(trim($cp)); // on récupère le code postal
        $ville = htmlentities(trim($ville)); // on récupère la ville
        $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
        $mdp = trim($mdp); // On récupère le mot de passe 
        $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe

    //  Vérification du nom
        if(empty($nom)){
            $valid = false;
            $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
        }
//  Vérification du prénom
        if(empty($prenom)){
            $valid = false;
            $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
        }
        if(empty($adresse)){
            $valid = false;
            $er_adresse = ("L'adresse ne peut pas être vide");
        }
        if(empty($cp)){
            $valid = false;
            $er_cp = ("Le code postal ne peut pas être vide");
        }
        if(empty($ville)){
            $valid = false;
            $er_ville = ("La ville ne peut pas être vide");
        }
 
// Vérification du mail
        if(empty($mail)){
            $valid = false;
            $er_mail = "Le mail ne peut pas être vide";
    // On vérifit que le mail est dans le bon format
        }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
            $valid = false;
            $er_mail = "Le mail n'est pas valide";
        }else{
// On vérifit que le mail est disponible
        $req_mail = $DB->query("SELECT mail FROM utilisateur WHERE mail = ?",
        array($mail));
 
        $req_mail = $req_mail->fetch();
 
        if ($req_mail['mail'] <> ""){
            $valid = false;
            $er_mail = "Ce mail existe déjà";
        }
    }
 
// Vérification du mot de passe
        if(empty($mdp)) {
            $valid = false;
            $er_mdp = "Le mot de passe ne peut pas être vide";
        }elseif($mdp != $confmdp){
            $valid = false;
            $er_mdp = "La confirmation du mot de passe ne correspond pas";
        }
 
// Si toutes les conditions sont remplies alors on fait le traitement
        if($valid){
 
            $mdp = crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
            $date_creation_compte = date('Y-m-d H:i:s');

// bin2hex(random_bytes($length))
            $token = bin2hex(random_bytes(12));
 
// Exemples:
// 39e9289a5b8328ecc4286da11076748716c41ec7fb94839a689f7dac5cdf5ba8bdc9a9acdc95b95245f80a00
 
// On insert nos données dans la table utilisateur
            $DB->insert("INSERT INTO utilisateur (nom, prenom, adresse, cp, ville, mail, mdp, date_creation_compte, token) VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?)",
array($nom, $prenom, $adresse, $cp, $ville, $mail, $mdp, $date_creation_compte, $token));

$req = $DB->query("SELECT *
  FROM utilisateur
  WHERE mail = ?",
  array($mail));
  
$req = $req->fetch();
 
$mail_to = $req['mail']; 
 
//=====Création du header de l'e-mail.
$header = "From: oceane1259149@gmail.com\n";
$header .= "MIME-version: 1.0\n";
$header .= "Content-type: text/html; charset=utf-8\n";
$header .= "Content-Transfer-ncoding: 8bit";
//=======
 
//=====Ajout du message au format HTML
$contenu = '<p>Bonjour ' . $req['nom'] . ',</p><br>
    <p>Veuillez confirmer votre compte <a href="http://localhost:8080/sitedudev/conf.php?id=' . $req['id'] . '&token=' . $token . '">Valider</a><p>';

mail($mail_to, 'Confirmation de votre compte', $contenu, $header);

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
        <title>Inscription</title>
    </head>
    <body>
    <?php
    include_once('_menu/nav.php'); 
    ?>
      <div class="container">
    <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1>Inscription</h1>
        <form method="post" >
      <div class="mb-3">
        <label class="form-label" >Nom:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_nom)){
            ?>
                <div><?= $er_nom ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
        </div>
        <div class="mb-3">
        <label class="form-label" >Prénom:</label>    
            <?php
            
            if (isset($er_prenom)){
                ?>
                <div><?= $er_prenom ?></div>
                <?php
                }
                ?><input class="form-control" type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>
                </div>
                <div class="mb-3">
        <label class="form-label" >Adresse:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_adresse)){
            ?>
                <div><?= $er_adresse ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Votre adresse" name="adresse" value="<?php if(isset($adresse)){ echo $adresse; }?>" required>
        </div>
        <div class="mb-3">
        <label class="form-label" >Code Postal:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_cp)){
            ?>
                <div><?= $er_cp ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Votre code postal" name="cp" value="<?php if(isset($cp)){ echo $cp; }?>" required>
        </div>

        <div class="mb-3">
        <label class="form-label" >Ville:</label>
            <?php
// S'il y a une erreur sur le nom alors on affiche
            if (isset($er_ville)){
            ?>
                <div><?= $er_ville ?></div>
            <?php
            }
            ?>
            <input class="form-control" type="text" placeholder="Votre ville" name="ville" value="<?php if(isset($ville)){ echo $ville; }?>" required>
        </div>

                <div class="mb-3">
        <label class="form-label" >Email:</label>
                <?php
                if (isset($er_mail)){
                    ?>
                    <div><?= $er_mail ?></div>
                    <?php
                    }
                    ?>
                    <input class="form-control" type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                    </div>
                    <div class="mb-3">
        <label class="form-label" >Mot de passe:</label>
                    <?php
                    if (isset($er_mdp)){
                        ?>
                        <div><?= $er_mdp ?></div>
                        <?php
                        }
                        ?>
                        <input class="form-control" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        </div>
                        <div class="mb-3">
        <label class="form-label" >Confirmer le mot de passe:</label>             
        <input class="form-control" type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
        </div>
        <button class="btn btn-success" type="submit" name="inscription">S'inscrire</button>
        </form>
                </div>
            </div>
        </div>
    </body>
</html>