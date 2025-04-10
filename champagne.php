<?php require_once 'config.php'; ?>

<!DOCTYPE html> 
<html>


 <head>

    <meta cherset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0"> 
    <link rel="icon" type="image/jpg" href="images/Favicon.JPG"> 
    <title> Champagne </title>
    <link rel="stylesheet" href="style.css"> <!-- lien au stylesheet CSS -->

 </head>

 <body>

  <header>
    <div class="hautsDepage"><h1> fAmazon - Ebay </h1>
    <h2> Page Produit: </h2>
    </div>
  </header>
     <hr>



     
    <h2> Champagne de moet </h2>  

    <img src="Images/champagne2.JPG" alt="champagne" height="400">




     <div id="descriptionProduit"> 
          <p> Nous vous proposons ici, le champagne de la région de moet.
             Ce n'est pas le meilleur, mais 
            vous n'etes pas un vrai 1% si c'est ce que vous choisissez. 
     </div>
     </p>
     <br>

      <div id="ZoneAchatProduit">
    <p><b><u><big>Prix conseillé:</big></u></b></p>
    <p><big>45,000€ </big><i><small>(Prix HTVA)</small></i></p> 

    <label>Quantité:</label>
    <input type ="number" id="Quantité" placeholder="1" min="1" max="99">
    <a href="panier.html">
    <button id= "BoutonAchat" style="font: size 25px; background-color: black; color:gold; border-radius:8px">Aquérir!</button>
    </a>
     </div>

  
    <br> 
   <hr>


   <footer>
   <ul>
    <li><a href="panier.php" title="Va dans le panier">Votre panier</a> <br> </li>
    <li><a href="index.php" title="Retout a la page principale">Home</a> </li>
    <li><a href="profil.php" title="Mon profil">Mon profil</a>
    <li><a href="produits.php" title="Page produits">Page Produits</a>
   </ul>
   </footer>
    
    





 </body>


</html>