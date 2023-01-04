
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    echo ('<!DOCTYPE html>');
    echo ('<html lang="fr">');
    echo ('<head>');
        echo ('<meta charset="UTF-8">');
        echo ('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        echo ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        echo ('<title>Administration du site</title>');
    echo ('</head>');
        echo ('<body>');
            echo ('<section id="ajout">');
                echo ('<h1>Ajouter un CD</h1>');
                echo ('<form enctype="multipart/form-data" action="upload.php" method="post">');
                    echo ('Nom du cd : <input type="text" name="cd"><br />');
                    echo ('Nom de l\'artiste : <input type="text" name="artiste"><br />');
                    echo ('Genre : <input type="text" name="genre"><br />');
                    echo ('Inserer l\'image : <input type="file" name="vignette" id="vignette"><br />');
                    echo ('<input type="submit" value="Créer un nouveau CD">');
                echo ('</form>');
            echo ('</section>');

            echo ('<section id="suppression">');
                echo ('<h1>Supprimer un CD</h1>');
                echo ('<form action="supprimerCd.php" method="post">');
                    echo ('<input type="submit" value="Supprimer un CD">');
                echo ('</form>');
            echo ('</section>');
        echo ('</body>');
    echo ('</html>');

}
?>

