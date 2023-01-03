<?php
        $bdd= "cd"; // Base de données
        $host= "localhost";
        $user= "root"; // Utilisateur
        $pass= "root"; // mp
        $nomtable= "informations"; /* Connection bdd */

        $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de données");

        $query1 = "SELECT * FROM informations";

        $result= mysqli_query($link,$query1); 

        echo("<head>");

        echo("<ul>");
            echo("<li><a href='#home'>Accueil</a></li>");
            echo("<li><a href='#news'>Truc</a></li>");
            echo("<li><a href='#contact'>Informations</a></li>");
            echo("<li><a href='pages/pageConnexion.php'>Connexion</a></li>");
            echo("<li style='float:right'><a class='active' href='#about'>Panier</a></li>");
        echo("</ul>");

        echo("</head>");

        echo("<br/><br/><br/>");

        echo("<body>");

        echo('<section id="tableau">');

        while ($data = mysqli_fetch_assoc($result)) {
            //on affiche les informations de lenregistrement en cours;
            echo("<div id='cd'>");
                echo ("<h2>" . $data['nom'] . "</h2>");
                echo ($data['auteur'] . "<br/><br/>");
                echo ($data['genre'] . "<br/>");
                echo ("<a href='pages/zoom.php' ><img src= 'vignettes/" . $data['vignette'] . " ' /></a>"  );
            echo("</div>");
            
        }
        echo("</section>");


        echo("</body>");

                    
echo("<style>");

echo("ul{");
    echo("list-style-type:none;");
    echo("margin:0;");
    echo("padding:0;");
    echo("overflow:hidden;");
    echo("background-color:#333;");
echo("}");
    
echo("li{");
    echo("float:left;");
echo("}");
    
echo("li a{");
    echo("display:block;");
    echo("color:white;");
    echo("text-align:center;");
    echo("padding:14px;");
    echo("text-decoration:none;");
echo("}");
    
echo("a:hover:not(.active){");
    echo("background-color:#111;");
echo("}");
    
echo(".active{");
    echo("background-color:#04AA6D;");
echo("}");


echo("#tableau{");
    echo("display: grid;");
    echo("  grid-template-columns: auto auto auto;  ");
    echo("padding: 10px 10px 20px 20px;");
    echo("padding: 20px;");
    echo("text-align:center;");  
echo("}");

echo("#cd{");
    echo("padding: 10px 10px 20px 20px;");
    echo("  border: 1px solid rgb(0, 0, 0);");
echo("}");

echo("img {");
    echo("width : 100px;");
    echo("height : 100px;");
echo("}");

echo("</style>");
     
        

        ?>

