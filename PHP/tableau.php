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

<?php
echo<<<html
<table class="table table-striped mb-3">
  <thead class="">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Profession</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><i>Gontier</i></th>
      <td><i>Océane</i></td>
      <td><i>21 ans</i></td>
      <td><i>Femme</i></td>
      <td><i>En Formation</i></td>
    </tr>
    <tr>
      <th><b>Dumont</b></th>
      <td><b>Gustave</b></td>
      <td><b>84 ans</b></td>
      <td><b>Homme</b></td>
      <td><b>Informaticien</b></td>
    </tr>
    <tr>
      <th>Dupont</th>
      <td>Kevin</td>
      <td>29 ans</td>
      <td>Homme</td>
      <td>Vendeur de véhicules</td>
    </tr>
  </tbody>
</table>
<i><b> &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;Ceci est un tableau </i></b>
html;




?>
    <?php
    include_once('_footer/script.php'); 
    ?>
</body>
</html>