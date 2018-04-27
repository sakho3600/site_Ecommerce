<?php
   if(isset($_POST['login']) and isset($_POST['pass'])){
	$login_form = $_POST['login'];
	$passwd_form = $_POST['pass'];

	include 'connexion.php';

	$resulat_login = $connexion->query("select * from users where login= '".$login_form."' and passwd='".$passwd_form."' ");
	
   // !!!! on n'applique pas if sur select directement
  $user=$resulat_login->fetchAll();
	$nbr_lignes = count($user);
   // !!!! on n'applique pas if sur select directement

	if($nbr_lignes) {
		session_start();
		 $id_user=$user[0]['id'];
		$_SESSION['authentifie'] =$id_user;
   		header("Location: administration.php");

	}
	else
	{
			$res_login = $connexion->query("select * from client where login= '".$login_form."' and password='".$passwd_form."' ");
			$client=$res_login->fetchAll();
	        $nbr_lignes1 = count($client);
	        if($nbr_lignes1)
	        {
	        	session_start();
	        	$id_cl=$client['0']['id_client'];
	        	$_SESSION['client'] =$id_cl;
	           header("Location: index.php");

	        }
	        else

	       header("Location: compte.php");

	}
}
	else {
		header("Location: compte.php");
	}


			