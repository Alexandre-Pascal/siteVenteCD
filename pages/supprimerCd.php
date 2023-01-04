<?php
    //On démarre la session
    session_start ();

    //Variable pour la base de donnée
    $bdd= "cd"; // Base de données
    $host= "localhost"; //Hote
    $user= "root"; // Utilisateur
    $pass= "root"; // Mot de passe

    //On se connecte à la base de données
    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

    //Requete sql
    $query1 = "SELECT * FROM informations";

    //Resultat de la requete
    $result= mysqli_query($link,$query1);

    //Parcours des résultats
    while ($data = mysqli_fetch_assoc($result)) {
        //on affiche les informations de lenregistrement en cours;
        echo("<div id='cd'>");
            $nom = $data['nom'];
            $auteur = $data['auteur'];
            $genre = $data['genre'];

            echo("<h2>" . $nom . "</h2>");
            echo($auteur . "<br/><br/>");
            echo($genre . "<br/>");

            //Supression du cd en base de données
            echo('<form action="supressionCd.php" method="post">');
                echo("<input type='hidden' name='nom' value='$nom'>");
                echo("<input type='submit' value='Supprimer'>");
            echo("</form>");

        echo('</div>');
    };

?>