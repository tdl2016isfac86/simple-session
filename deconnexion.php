<?php
session_start();

// session_unset() est optionel, il permet de vider toutes les valeurs dans $_SESSION
session_unset();


session_destroy();


header('Location: connexion.php');