<?php
require_once("connceter.php");

        if(isset($_POST['search'])) 
        {
          $search=$_POST['search'];
          $rew = $bdd->query("SELECT * from produit where desgnation = $search");
          $donn = $req->fetch();

        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>gestion commerciale</title>
        <meta charset="uf-8" />
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <header>
            <section class="header_section">
                <form id="recherche">
                    <input type="search" for="recherche" class="zone_recherche"/>
                    <input type="submit"  name="search" value="Rechercher" for="recherche" />
                </form>
          <?php
                if(isset($_GET['Connexion']))
    {
           
      $id=1;
      $pass="axal";
      var_dump($id , $pass);

        $req =$bdd-> query("SELECT * from client where id_compte = 1");
          
        $donnees = $req->fetch();
                   
        if ($id==$donnees['id_compte'] && $pass==$donnees['Mot_de_passe'])
        { 
           $req->closeCursor();
          echo"<script language=\"JavaScript\">  alert(\"Connexion reussie \")  </script>  ";
   
        }
    }
    

    else 
    {
      echo "<script language=\"JavaScript\">   alert(\"Echec de connexion\");  </script>";
    }

               ?> <form id="connexion" action="index.php" method="get">
                    <input type="text" for="connexion"   name="identifiant"  placeholder="Identifiant" required />
                    <input type="password" for="connexion" name="mot_passe" placeholder="Mot de passe" required />
                    <input type="submit" for="connexion" name ="connexion" value="Se connecter" />
                </form>
            </section>
            <nav class="header_nav">
                <a href="#">Promotion</a>
                <a href="#">Meilleurs Ventes</a>
                <a href="#">Ventes flash</a>
                <a href="#">Informatique</a>
                <a href="#">High Tech</a>
                <a href="#">Meuble</a>
                <a href="#">Bricolage</a>
                <a href="#">Electromenage</a>
                <a href="#">Mode & beaute</a>
                <a href="#">Fournitures scolaire</a>
            </nav>
        </header>

<!-- Corps du site, zone qui contient les produit et les balises iframe de pub -->
        <div> 
            <iframe width="15%" height="360" src="https://youtu.be/nnhtoTpace0" scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen></iframe>
            <div class="div_article">
                <section class="section_article">
                    <article>
                    </article>
                    <article>
                    </article>
               <?php
               var_dump($donnees);?>
                    <article>
                    </article>
                </section>
                <section class="section_article">
                    <article>
                    </article>
                    <article>
                    </article>
                    <article>

                    </article>
                </section>
            </div>
            <iframe width="15%" height="360" src="https://youtu.be/nnhtoTpace0" scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen></iframe>
        </div>

        <footer>
        </footer>
    </body>
</html>