<?php
	
	$id = $_POST['id_article'];
	$d = $_POST['designation'];
	$p = $_POST['prix'];
	$c = $_POST['categorie'];
	$i=$_POST['image'];
	try
	{
	$connexion =new PDO("mysql:host=localhost;dbname=magasin", "root", "");
	}
	catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	} 
	//$rst = $connexion->exec("insert into article values ('".$id."', '".$d."', '".$p."', '".$c."')");
	$rst = $connexion->exec("insert into article (id_article,designation,prix,categorie,image) values ('".$id."','".$d."', '".$p."', '".$c."','".$i."')");
	if($rst) echo "inserstion ok ";
	else {echo "erreur insert";}
	//Etape 4 : Déconnexion 
	
?>


			