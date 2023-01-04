<?php

        $bdd= "cd"; // Base de données
        $host= "http://localhost/phpmyadmin/index.php";
        $user= "root"; // Utilisateur
        $pass= ""; // mp
        $nomtable= "informations"; /* Connection bdd */

        $link=mysqli_connect("localhost",$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query1 = "SELECT * FROM informations";

        $result= mysqli_query($link,$query1); 

        echo("<head>");
        echo ('<link rel="stylesheet" href="style.css" />');

        echo("<ul>");
            echo("<li><a href='#home'>Accueil</a></li>");
            echo("<li><a href='#news'>Truc</a></li>");
            echo("<li><a href='#contact'>Informations</a></li>");
            echo("<li><a href='pages/pageConnexion.php'>Connexion</a></li>");
            echo("<li style='float:right'><a class='active' href='/pages/panier.php'>Panier</a></li>");
        echo("</ul>");

        echo("</head>");

        echo("<br/><br/><br/>");

        echo("<body>");

        echo('<section id="tableau">');

        while ($data = mysqli_fetch_assoc($result)) {
            //on affiche les informations de lenregistrement en cours;
            echo("<div id='cd'>");
                $nom = $data['nom'];
                $auteur = $data['auteur'];
                $genre = $data['genre'];
                $vignette = "./vignettes/" . $data['vignette'];
                $prix = $data['prix'];

                echo ("<h2>" . $nom . "</h2>");
                echo ($auteur . "<br/><br/>");
                echo ($genre . "<br/>");

                //On rend le lien cliquable et on transmet les valeurs concernées dans le lien
                echo("<a href='/pages/zoom.php?nom=$nom&auteur=$auteur&genre=$genre&img=$vignette&prix=$prix'> <img src= $vignette /> </a>");

            echo("</div>");

        }

        echo("</section>");

?>
