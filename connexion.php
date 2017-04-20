<?php 

session_start();

// L'utilisateur est root
// Le mot de passe Car077eJamb0n
$username = 'root';

// Vérifier si l'utilisateur est déjà connecté
// Si l'index username de $_SESSION est vide...
if(!empty($_SESSION['username'])) {
    // ...on redirige vers connexion.php
    header('Location: index.php');
}

// Vérifier si on a bien reçu des données dans $_POST
if(isset($_POST['login']) && trim($_POST['login']) != '') {
    // Pour que la connexion se fasse, le login doit être le même que $username et le mot de passe doit être le même que ce qui est lu dans le fichier pwd.txt
    $open = fopen('pwd.txt', 'r');
    $read = fread($open, 32);
    
    if($read == md5($_POST['pass']) && $username == $_POST['login']) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }
    else{ 
        $error = 'le mot de passe ou le nom d\'utlisateur n\'est pas bon';
    }
}

?><html>
    <head>
        
    </head>
    <body>
        <form action="connexion.php" method="post">
            <input type="text" name="login" required />
            <input type="password" name="pass" required />
            <input type="submit" value="Connexion"/>
        </form>
        <div>
            <?php
                if (isset($error)){
                    echo $error; 
                }
            ?>
        </div>
    </body>
</html>