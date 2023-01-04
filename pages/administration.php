
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    echo ('<head>');
        echo ('<title>Administration du site</title>');
        echo ('<link rel="stylesheet" href="./styleAdministration.css"/>');
    echo ('</head>');
        echo ('<body>');
            echo ('<header>');
            echo ('<p id="header-entete"> CD_SHOP </p>');
                echo ('<nav>');
                echo ('<ul>');
                    echo ('<li><a href="logout.php">Deconnexion</a></li>');
                echo ('</ul>');
            echo ('</nav>');
            echo ('<h1>Administration du site</h1>');
            echo ('</header>');
            echo ('<section id="ajout">');
                echo ('<h3>Ajouter un CD</h3>');
                echo ('<form enctype="multipart/form-data" action="upload.php" method="post">');
                    echo ('Nom du cd : <input type="text" name="cd"><br />');
                    echo ('Nom de l\'artiste : <input type="text" name="artiste"><br />');
                    echo ('Genre : <input type="text" name="genre"><br />');
                    echo ('Inserer l\'image : <input type="file" name="vignette" id="vignette"><br />');
                    echo ('<input type="submit" value="Créer un nouveau CD">');
                echo ('</form>');
            echo ('</section>');

            echo ('<section id="suppression">');
                echo ('<h3>Supprimer un CD</h3>');
                echo ('<form action="supprimerCd.php" method="post">');
                    echo ('<input type="submit" value="Supprimer un CD">');
                echo ('</form>');
            echo ('</section>');
        echo ('</body>');
    echo ('</html>');

}
else {
    header('location: pageConnexion.php');
}
?>

