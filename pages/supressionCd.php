<?php

    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        suppressionCd($nom);
    }
    function suppressionCd($nomCd){
        $bdd= "robinalonzo_bd_cd_iut"; // Base de données
        $host= "mysql-robinalonzo.alwaysdata.net";
        $user= "294837_robin"; // Utilisateur
        $pass= "iutbayonne"; // mp

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query2 = 'DELETE FROM informations WHERE nom = "' . $nomCd . '"';
        $result2 = mysqli_query($link,$query2);

        mysqli_close($link);

        //On affiche un message de réussite
        header('Location: ./supprimerCd.php');

    }
?>