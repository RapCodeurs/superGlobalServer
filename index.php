<?php
/*
var_dump($_SERVER) ;
*/
// Récupérer le nom du script en cours d'exécution :
$server_name_script = $_SERVER['SCRIPT_NAME'];
echo "Votre nom de script : " . $server_name_script;
echo "<br>";

// Récupérer l'URI de la requête :
$server_uri = $_SERVER['REQUEST_URI'];
echo "L'URI du serveur est : " . $server_uri;
echo "<br>";

// Récupérer la méthode HTTP utilisée pour la requête :
$server_method = $_SERVER['REQUEST_METHOD'];
echo "La méthode utilisée est : " . $server_method;
echo "<br>";

// Récupérer le nom de l'hôte :
$server_name = $_SERVER['SERVER_NAME'];
echo "Le nom de l'hôte est  : " . $server_name; // Corrigé ici
echo "<br>";

// Récupérer le numéro de port du serveur :
$server_port = $_SERVER['SERVER_PORT'];
echo "Le numéro de port est : " . $server_port;
echo "<br>";

// Récupérer le nom du serveur :
$server_soft = $_SERVER['SERVER_SOFTWARE'];
echo "Le nom du serveur est : " . $server_soft;
echo "<br>";

// Récuparation du protocole :
$server_protocol = $_SERVER['SERVER_PROTOCOL'];
echo "Le nom du protocol est : " . $server_protocol;
echo "<br>";


$server_sys_exploitation = $_SERVER['SystemRoot'];
$server_name_sys = str_replace('C:\\', "" , $server_sys_exploitation);
echo "Le nom du systeme exploitation est " . $server_name_sys;
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

/*
'SERVER_NAME' => string // Nom de l'hôte sur lequel le script est exécuté
'SERVER_ADDR' => string '::1' (length=3) // Adresse du serveur hôte
'SERVER_PORT' => string '80' (length=2) // port du serveur
'REMOTE_ADDR' => string '::1' (length=3) // Adresse IP du serveur
'DOCUMENT_ROOT' => string 'C:/wamp64/www' (length=13) // chemin du répertoire racine
'REQUEST_SCHEME' => string 'http' (length=4) // Le schéma fait référence à la méthode utilisée pour accéder à une ressource web, généralement "http" ou "https"
'SERVER_ADMIN' => string 'wampserver@wampserver.invalid' (length=29) // administrateur du serveur
'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8) // protocole du serveur
'REQUEST_METHOD' => string 'GET' (length=3) // méthode du script exécute
'REQUEST_URI' => string '/superglobales/server/intro.php' (length=31) // URI utilisé pour accéder au script
'SCRIPT_NAME' => string '/superglobales/server/intro.php' (length=31) // nom du script php
'PHP_SELF' => string '/superglobales/server/intro.php' (length=31) // nom du script en cours d'execution
'REQUEST_TIME_FLOAT' => float 1678464091.2589  // temps de réponse de la requête en nombre a virgule 
'REQUEST_TIME' => int 1678464091 // temps de réponse de la requête en nombre entier
*/
?>
