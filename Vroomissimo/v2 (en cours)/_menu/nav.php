<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
    <?php
    if(!isset($_SESSION['id'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
    ?>
    <li class="nav-item">
        <a class="nav-link" href="inscription.php">Inscription</a> <!-- Liens de nos futures pages -->
    </li>
    <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="motdepasse.php">Mot de passe oublié</a>
    </li>
    <?php
    }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
        ?>
     <li class="nav-item">
        <a class="nav-link" href="vendre.php">Vendre</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="profil.php">Mon profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="modifier-profil.php">Modifier mon profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="deconnexion.php">Déconnexion</a>
    <li>
    <?php
    }
    ?>
    </ul>
    </div>
  </div>
</nav>