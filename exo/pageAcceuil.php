<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
</head>
<body>
<h2> ACCUEIL INTRANET </h2>
<?php if (isset($_SESSION['role']) AND $_SESSION['role'] == 'admin') {  ?>
  <nav>
    <ul>
      <a href="#"><li>Accueil</li></a>
      <a href="#"><li>Gestion des utilisateurs</li></a>
      <a href="#"><li>Déconnexion</li></a>
      <p> Vous êtes connecté en tant qu'<?php echo $_SESSION['role']?> </p>
    </ul>
  </nav>
<?php }?> <?php if (isset($_SESSION['role']) AND $_SESSION['role'] == 'super') {  ?>
<nav>
<ul>
  <a href="#"><li>Accueil</li></a>
  <a href="#"><li>Gestion des utilisateurs</li></a>
  <a href="index.php"><li>Données serveur</li></a>
  <a href="#"><li>Déconnexion</li></a>
  <p> Vous êtes connecté en tant que <?php echo $_SESSION['role']?></p>
</ul>
</nav>
<?php }
?>
</body>
</html>
