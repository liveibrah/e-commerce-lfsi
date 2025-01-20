<?php
session_start();
?>

<!DOCTYPE Html>
  <html>
   <head>
        <title>Chago</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
   </head>

    <body>
     <header>
        <nav>
          <a href="#">acceuil</a>
          <a href="/article.php">Articles</a>
          <a href="/offfres.php"> Offres </a>
          <a href="/blog.php"> Blog </a>
        <nav>
        <div class="formulaire">
             <form method="Post" action ="gestion.php">
                    <label for="Idendifiant"> Identifiant </label>
                    <input type="text " name="Pseudo" id="Identifiant" placeholder="Identifiant" required/>
                    <p>	<br/></p>
                    <label for="password"> Mot de passe </label>
                    <input type="password" name="password" id="password " placeholder="Mot de passe" required/>
                    <p>	<br/></p>
                    <input type="submit" name="connecter" value="Connexion"/>
                    
                    <a href="inscription.php">Creer un compte</a>
            </form>
        </div>
     </header>

    <div class="pronotion">
    <?php
    /*  require_once("connecter.php");
      $Requette =$bdd->query("//SELECT * from facture ");
      
      */
      
      
     // $Requette->closeCursor(); 
    ?>
    </div>
    <div class="produits">
    <?php
       // $Requette_1=$bdd->query("//Select *  from ");
       // while ($data_1=$Requette_1->fecth())
        //{
         //printf("<img alt =\"%s\" src=\"%s\"/> \n <a herf=\"%s\"> %s </a> ",    );
     //   }
    ?>
    </div>
    
    </body>
    <footer>
      <nav>
            <a href="#">acceuil</a>
            <a href="/article.php">Articles</a>
            <a href="/offfres.php"> Offres </a>
            <a href="/blog.php"> Blog </a>
      </nav>
      <h3> &copy; Copyright  2019 , Label Corporation </h3> 
    </footer>

   </html>