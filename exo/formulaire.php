<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
    </head>
    <body>
        <pre>
            <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" name="username" id="username">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password">
                <input type="submit" name="submit" value="Se connecter">
            </form>
        </pre>
    </body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' and $password = 'admin') {

        //Initialisation de notre session en tant qu'administrateur
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $username;
        // création du cookie admin
        setcookie('user', 'admin', time() + 3600, '/');
        // redirection
        header("location:pageAcceuil.php");
    }
    if ($username === 'Sadmin' and $password = 'Sadmin') {

        //Initialisation de notre session en tant super admin
        $_SESSION['role'] = 'super';
        $_SESSION['username'] = $username;

        // creation du cookie admin
        setcookie('user', 'super', time() + 3600, '/');
        //redirection
        header("location:pageAcceuil.php");
    }
}
?>

