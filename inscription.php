<?php
	
	$l = $_POST['login'];
	$e = $_POST['email'];
	$t = $_POST['tel'];
	$p=$_POST['pass'];
	echo $l."<br>";
	echo $e."<br>";
	echo $t;
	try
	{
	include 'connexion.php';
	}
	catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	} 
	//$rst = $connexion->exec("insert into article values ('".$n."', '".$pn."', '".$e."', '".$t."','".$p."')");
	$rst = $connexion->exec("insert into client (login,mail,Telephone,password) values ('$l','$e','$t','$p')");
	if($rst) echo "inscription ok ";
	else {echo "erreur inscription";}
	
?>


			