<?php

        $bdd= "cd"; // Base de données
        $host= "http://localhost/phpmyadmin/index.php";
        $user= "root"; // Utilisateur
        $pass= ""; // mp
        $nomtable= "informations"; /* Connection bdd */

        $link=mysqli_connect("localhost",$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query1 = "SELECT * FROM informations";

        $result= mysqli_query($link,$query1); 

        echo('<head>');
            echo ('<link rel="stylesheet" href="style.css" />');
        echo('</head>');
            echo('<body>');
                echo ('<header>');
                    echo ('<p id="header-entete"> CD_SHOP </p>');
                    echo ('<nav>');
                        echo ('<ul>');
                            echo ('<li><a href="pages/panier.php">Panier</a></li>');
                        echo ('</ul>');
                    echo ('</nav>');
                echo ('</header>');

                echo ('<main>');

                    echo('<section id="tableau">');

                    while ($data = mysqli_fetch_assoc($result)) {
                        //on affiche les informations de lenregistrement en cours;
                        echo("<div id='cd'>");
                        $nom = $data['nom'];
                        $auteur = $data['auteur'];
                        $genre = $data['genre'];
                        $vignette = "./vignettes/" . $data['vignette'];
                        $prix = $data['prix'];

                        echo("<a href='pages/zoom.php?nom=$nom&auteur=$auteur&genre=$genre&img=$vignette&prix=$prix'> <img src= $vignette /> </a>");
                        echo("<h2>" . $nom . "</h2>");
                        echo($auteur . "<br/><br/>");
                        echo($genre . "<br/>");

                        echo("</div>");
                    };

                    echo("</section>");
                echo ('</main>');

                echo ('<footer>');
                    echo ('<section id="footer-head">');
                        echo ('<p>Copyright : Robin Alonzo - Alexandre Pascal - 2023</p>');
                        echo ('<hr class="trait">');
                        echo ('<p>Contact : ralonzo@univ-pau.fr - apascal03@univ-pau.fr</p>');
                    echo ('</section>');
                echo ('</footer>');
            echo('</body>');

?>
