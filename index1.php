<?php
// Initialisation de la session
session_start();
// Stocker une valeur dans la session
$_SESSION['username'] = 'JohnDoe';

// Afficher quelques informations sur le serveur
echo 'Nom du serveur : ' . $_SERVER['SERVER_NAME'] . '<br>';
echo 'Adresse IP du client : ' . $_SERVER['REMOTE_ADDR'] . '<br>';
echo 'Méthode de la requête HTTP : ' . $_SERVER['REQUEST_METHOD'] . '<br>';
// Afficher une variable d'environnement (peut ne pas être définie sur tous les serveurs)
if (isset($_ENV['PATH'])) {
    echo 'Chemin d\'accès aux exécutables : ' . $_ENV['PATH'] . '<br>';
}


$server_soft = $_SERVER['SERVER_SOFTWARE'];
echo "Le nom du serveur est : " . $server_soft;
echo "<br>";

$server_php = $_SERVER['PHP_SELF'];
echo "Le nom du serveur est : " . $server_php;
echo "<br><br>";
echo "<br>";

$info = phpinfo();
echo $info;

?>


<form method="POST" action= "<?php echo $_SERVER['PHP_SELF']?>">
    <label for="nom_utilisateur">Nom d'utilisateur :</label>
    <input type="text" id="nom_utilisateur" name="nom_utilisateur"><br><br>
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe"><br><br>
    <button type="submit" name="submit">Se connecter</button>
</form>

