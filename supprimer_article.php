<?php
if(!isset($_GET['id']))
{
		header("Location:administration.php");	
}
   $id=$_GET['id'];
         include 'connexion.php';
         $reponse=$connexion->exec("delete from article where id_article=$id ");
   //!!!! id_article is an integer not a string donc c'est faux d'ecrire id_article='".$id."' !!!!
         if($reponse)
          echo "supprission OK";
      else
      	echo "erreur de supprission";
         
?>