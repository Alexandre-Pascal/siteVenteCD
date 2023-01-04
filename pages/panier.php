<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

// $action reçoit une action si c'est défini ou null s'il n'y en a aucune
$action = (isset($_GET['action'])? $_GET['action']:null ) ;
if($action !== null)
{
   //Si l'action n'est pas un ajout ou une supression alors on n'appellera pas les methodes ajouter et suprrimer
   if(!in_array($action,array('ajout', 'suppression'))){
   $erreur=true;
   }

   //récupération des variables en POST ou GET : Si il est set, on le met dans les variables et sinon alors on le met null 
   $l = (isset($_GET['l'])? $_GET['l']:null ) ;
   $p = (isset($_GET['p'])? $_GET['p']:null ) ;
   $q = (isset($_GET['q'])? $_GET['q']:null ) ;
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Default:
         break;
   }
}

?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="./stylePanier.css"/>
<title>Votre panier</title>
</head>
<body>

<br><br><br><br><br>

<section id="panier">
   <form method="post" action="panier.php">
   <table class="center" style="width: 800px">
      <tr>
         <td colspan="4">Votre panier</td>
      </tr>
      <tr>
         <td>Nom Album</td>
         <td>Quantité</td>
         <td>Prix Unitaire</td>
         <td> </td>
      </tr>
</section>
    <?php

    if (creationPanier())
    {
       $nbArticles=count($_SESSION['panier']['libelleProduit']);
       if ($nbArticles <= 0){
       echo "<tr><td>Votre panier est vide </td></tr>";
   
       }
       else
       {
          for ($i=0 ;$i < $nbArticles ; $i++)
          {
             echo "<tr>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
             echo "<td>" .htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."</td>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
             echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Supprimer</a></td>";
             echo "</tr>";
          }

          echo "<tr><td colspan='2'> </td>";
          echo "<td colspan='2'>";
          echo "Total : ".MontantGlobal() . " euros";
          
       }
    }

    ?>
</table>

<section id="boutons">
   <input id="acceuil"type="button" onclick="window.location.href = '../index.php';" value="Accéder a l'accueil"/>
   <button id="commande" onclick="window.location.href = 'commander.php' ;">Passer la commande</button>
</section>
</body>
</html>