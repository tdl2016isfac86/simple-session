<?php

session_start();


// Si l'index username de $_SESSION est vide...
if(empty($_SESSION['username'])) {
    // ...on redirige vers connexion.php
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <a href="deconnexion.php">Déconnexion</a>
    </body>
</html>