<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>

  <body>
    <!-- Navigation -->
  <?php include "navbar.php" ?>

    <!-- Header -->
  <?php include "header.php" ?>

    <!-- Contenu -->
    <body>
      <h1>Connexion</h1>
        <form action="traitementConnexion.php" method="post">
          Adresse mail : <input type="text" name="mail"/> <br/>
          Mot de passe : <input type="password" name="mdp"/> <br/>
          <input type="submit" value="Connexion" class=""></p>
        </form>
        Nouveau sur notre site ?
        <a style="color: #0366D9;" href="inscription.php">Inscrivez-vous ici</a>
    </body>
    <!-- Pied de page -->
    <?php include "footer.php" ?>
  </body>
</html>
