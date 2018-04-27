<?php 
session_start();
$p=$_SESSION['panier'];

$n=count($p)-1;
for ($i=0; $i <$n ; $i++) { 
 	# code...
 	if (!isset($p[$i]) or empty($p[$i])) 
 	{
   	# code...
   	$i++;
   }
 	echo $p[$i]['prix'];
 } ?>