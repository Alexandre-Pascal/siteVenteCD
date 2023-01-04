<?php

    if(isset($_POST['nom'])){
        echo "Le nom est : " . $_POST['nom'];
        $nom = $_POST['nom'];
        suppressionCd($nom);
    }
    function suppressionCd($nomCd){
        $bdd= "cd"; // Base de données
        $host= "localhost";
        $user= "root"; // Utilisateur
        $pass= "root"; // mp

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query2 = 'DELETE FROM informations WHERE nom = "' . $nomCd . '"';
        $result2 = mysqli_query($link,$query2);

        mysqli_close($link);

        //On affiche un message de réussite
        echo '<a href="insererCd.php">Renseignez un autre cd</a><br />';
        // On affiche un lien pour fermer notre session
        echo '<a href="logout.php">Déconnection</a>';
    }
?>