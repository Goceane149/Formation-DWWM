<?php
$sName = "localhost";
$uName = "oceane@localhost";
$pass = "password";
$db_name = "vroomissimo";

$bdd= new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);

$allcars= $bdd->query('SELECT * FROM voiture ORDER BY Marque ASC');
if(isset($_GET['s']) AND !empty($_GET['s'])) {
    $recherche= htmlspecialchars($_GET['s']);
    $allcars= $bdd->query('SELECT Marque , Modele FROM voiture WHERE Marque LIKE "%'.$recherche.'%" OR Modele LIKE "%'.$recherche. '%" order by Marque ASC'
    );
}
?>