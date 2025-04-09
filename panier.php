<?php require_once 'config.php'; ?>


<!DOCTYPE html>
<html>

 <head> 
    <meta cherset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0"> 
    <link rel="icon" type="image/jpg" href="images/Favicon.JPG"> 
    <title> Vos Achats </title>
    <link rel="icon" type="image/jpg" href="images/Favicon.JPG">
    <link rel="stylesheet" href="style.css"> <!-- lien au stylesheet CSS -->
    

 </head>


 <body> 

  <header>
    <div class="hautsDepage">
         <h1> Votre panier: </h1>
    </div>
  <hr> 
  </header>

  <p> - PLACEHOLDER </p>

  <form action="index.php" method="POST">


  <label>Méthode de paiement:</label>
  <select id="Méthode de paiement">
     <option value="Viso">Viso</option>
     <option value="Paypoule">Paypoule</option>
     <option value="BanSancontact">BanSancontact</option>
     <option value="Slavecard">Slavecard</option>
     <option value="Lingots">Lingots d'or</option>
     <option value="Bitcorn">Bitcorn</option>
     <option value="Ames">Âme de vos employés </option>
  </select> 

  <button id="BoutonAchat"style="font: size 25px; background-color: black; color:gold; border-radius:8px">Aquérir!</button>
    </a>


  <br>
  <br>
 
</form>

  <hr> 


  <footer>
  <ul>
    <li><a href="panier.html" title="Va dans le panier">Votre panier</a> <br> </li>
    <li><a href="index.html" title="Retout a la page principale">Home</a> </li>
    <li><a href="profil.html" title="Mon profil">Mon profil</a>
    <li><a href="produits.html" title="Page produits">Page Produits</a>
   </ul>
</footer>





 </body>


</html>