<?php
  
    try
    {
        // On se connecte à MySQL en mode root 
        $bdd=new PDO('mysql:host=localhost;dbname=commerce','root','');
      }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur :'.$e->getMessage());
    }
?>