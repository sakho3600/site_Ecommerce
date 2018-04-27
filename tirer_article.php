<?php
if(!isset($_GET['id']) and !isset($_GET['index']))
{
		header("Location:panier.php");	
}
session_start();
if (!isset($_SESSION['panier']) and !isset($_SESSION['client'])) {
      //Parse error: syntax error, unexpected '}' in C:\xampp\htdocs\Nd\content_panier.php on line 77 because I forgot ";"    
		header("Location:index.php");
  	}
  	
 if(isset($_SESSION['client']))
 {
   $id=$_GET['id'];
         include 'connexion.php';
         $reponse=$connexion->exec("delete from panier where id_article='".$id."' ");
   //!!!! id_article is an integer not a string donc c'est faux d'ecrire id_article='".$id."' !!!!
         if($reponse)
          echo "supprission OK";
      else
      	echo "erreur de supprission";
         }

if(isset($_SESSION['panier']))
{
    $index=$_GET['index'];
    $panier=$_SESSION['panier'];

    unset($panier[$index]);
    $_SESSION['panier']=$panier;
    
   

}

?>