<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        header('location: administration.php');
    }
    else {
    echo ('<head>');
        echo ('<meta charset="UTF-8">');
        echo ('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        echo ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        echo ('<link rel="stylesheet" href="stylePageConnexion.css" />');
        echo ('<title>Formulaire d\'identification</title>');
    echo ('</head>');
    echo ('<body>');
        echo ('<section id="id-connexion">');
            echo ('<form action="login.php" method="post">');
                echo ('<p>Identifiant : <input type="text" name="login"><br/></p>');
                echo ('<p>Mot de passe: <input type="password" name="pwd"><br/></p>');
                echo ('<input type="submit" value="Connexion">');
            echo ('</form>');
        echo ('</section>');
    echo ('</body>');
    }
?>