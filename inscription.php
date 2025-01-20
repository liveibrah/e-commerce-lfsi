<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title></title>
</head>
      <body>
              <?php
              function passwrd()
              {
                if(isset($_POST['Valider']))
                {
                                   
                 if($_POST['password'] === $_POST['mot_passe'])
                  {
                    require_once("connceter.php");
                
                   $pass_hache = sha1($_POST['password']);     
                   $req = $bdd->prepare('INSERT INTO membres(ID, id_compte, nom, prenom,Date_de_naissance, Mot_de_passe,Email, date_inscription)
                    VALUES(:ID, :id_conpte ,:nom, :prenom,:Date_de_naissance, :Mot_de_passe,:Email, CURDATE())');
                   $req->execute(array(
                   'id_compte'=>$_POST['telephone'],
                   'nom' => $_POST['nom'],
                   'prenom'=> $_POST['prenom'],
                   'Date_de_naissance' => $_POST['date'],
                   'Mot_de_passe'=>$pass_hache,
                   'Email'=>$_POST['mail'],

                   ));
                    
                      if($req)
                      {
                                  
                        $req->closeCursor();
                        echo"<script language=\"JavaScript\">  alert(\"Inscription reussie !!!!  \")  </script>  ";
                        
                        Header('Location: http://localhost/E-commerce/connexion');
                          exit;
                          session_destroy();
                      }
                      else
                      {
                        echo"<script language=\"JavaScript\">  alert(\"Echec  !!!!! \")  </script>  ";
                      }
                  }
                  else 
                  {   $req->closeCursor();
                    $tex="<p class=\"recommemdation \" style=\"font-size: 80%; color:red;\" > Mot de passe n'est pas identique à celui que vous avez tapez !! </p>";
                    echo"$tex";
                  }
                }
                
              }
              
      
              ?>
              <form class="formulaire_inscription" method="POST" action="inscription.php">
              <label for="nom"> Nom </label> <br/>
              <input name="nom" id="nom" placeholder="Nom" required=" " type="text"><br/> 
              <label for="prenom">Prenom </label> <br/>
              <input name="prenom" id="prenom" placeholder="Prenom" required="" type="text"><br/>
              <label for="date"> Date de naissance </label> <br/>
              <input name="date" id="date" placeholder="Date de naissance" required="" type="date"><br/> 
              <label for="mot">Mot de passe </label> <br/>
              <input name="mot_passe" id="mot" placeholder="mot de passe" required="" type="password"><br/>
              <label for="mt">Confirmation du mot de passe </label> <br/>
              <input name="password" id="mt" placeholder="mot de passe"   required="" type="password"><br/> 
              <?php
                 passwrd();
              ?>
              <label for="sd">Numero de telephone</label> <br/>
              <input name="telephone" id="sd" placeholder="Numero de telephone" required="" type="tel"><br/> 
              <label for="df">Adresse mail</label><br/>
              <input name="mail" id="df" placeholder="Adresse mail" type="mail"><br>
              <label for="sx">Sexe </label><br/>
              <input name="sexe" id="male" value="male"  type="radio">
              <label for="male">Masculin</label> <br/>
              <input name="sexe" id="female" value="female" type="radio"><label for="female">Feminin</label><br>
              <input id="cf" required="" type="checkbox">
              <label for="cf">
                Acceptez vous les conditions d'utilisation et les regles de
                confidentialites relatives à vos donnees personnels</label><br/>
              <button type="submit" name="Valider" value="connexion" >Valider</button>
         </form>
      </body>
</html>
 