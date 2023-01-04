<?php
    //On se connecte à la base de données
    $bdd= "cd"; // Base de données
    $host= "localhost";
    $user= "root"; // Utilisateur
    $pass= "root"; // mp
    $nomtable= "informations"; /* Connection bdd */

    $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

    $query1 = "SELECT * FROM informations";

    $result= mysqli_query($link,$query1);

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