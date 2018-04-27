<?php 
     $id_article=$_GET['id'];
     $i=$_GET['image'];
     $d=$_GET['des'];
     $p=$_GET['prix'];
  session_start();
   if (isset($_SESSION['client'])) {
     $id_client=$_SESSION['client'];

   try
	{
	include 'connexion.php';
	}
	catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	} 
    $rst = $connexion->exec("insert into panier (id_article,id_client) values ('$id_article','$id_client')");
	if($rst)
	{	
	?>
	l'article a bien été ajouter au panier<a href="javascript:history.back()"> Retourner sur le catalogue</a>
	<?php
}
	else {   ?>

erreur d'ajout <a href="javascript:history.back()"> Retourner sur le catalogue</a>
<?php

}
    }

 else
    {

        if (isset($_SESSION['panier'])) {
          $panier=$_SESSION['panier'];

        }
        else
        {
        	$panier=array();
        }
        $index=count($panier);
// !!!!!!!!!!!!!!!!!! ne jamais oublier $ avant les variables jamais !!!!!!!!!!!;;;
       $panier[$index]['image']=$i;
       $panier[$index]['des']=$d;
       $panier[$index]['prix']=$p;
       $panier[$index]['id_article']=$id_article;
       $_SESSION['panier']=$panier;
      header("Location:pp.php");
?>
l'article a bien été ajouter au panier<a href="javascript:history.back()"> Retourner sur le catalogue</a>
<?php

}
 ?>
