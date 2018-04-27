<section style="margin-left: 300px;">

<?php 
if(!isset($_SESSION))
session_start();
if (!isset($_SESSION['panier']) and !isset($_SESSION['client'])) {
      //Parse error: syntax error, unexpected '}' in C:\xampp\htdocs\Nd\content_panier.php on line 77 because I forgot ";"  
		header("Location:index.php");
  	}
  	else {?>
  	<table id="tab_panier">
	<tr>
		<th style="background-color: white;"></th>
		<th>Designation</th>
		<th>Prix</th>
		<th>Quantite</th>
		<th>Sous-total</th>
		<th style="background-color: white;"></th>
	</tr>
  	<?php
   if (isset($_SESSION['client'])) {
  try
	{
	include 'connexion.php';
	}
	catch (Exception $e) {
		die('Erreur de connexion : ' . $e->getMessage());
	} 
	$listes_id_articles=$connexion->query("select id_article,quantite from panier where id_client='".$_SESSION['client']."' ");     ?>


<?php
$total=0;
	while ($id_art=$listes_id_articles->fetch()) {
		$id_article=$id_art[0];
		$quantite=$id_art[1];
		$listesArticles = $connexion->query("select * from article where id_article='".$id_article."'");
		$article=$listesArticles->fetch();

		?>
   <tr>
   <td style="background-color: white;padding: 30px; border-bottom: 1px solid silver;"><img src="images/<?= $article['image']; ?>"  height='90px' width='90px'>  </td>
    <td><?= $article['designation']; ?></td>
    <td><?= $article['prix']; ?> $</td>
    <td><?= $quantite; ?></td>

    <?php $Sous_total=$quantite*$article['prix']; 
       
       $total+=$Sous_total;

    ?>

    <td><?= $Sous_total; ?> $</td>
    <td style="width: 70px;"><a href="tirer_article.php?id=<?= $id_article; ?>" OnClick='return confirm("Voulez-vous vraiment tirer cet article de votre panier ?");' title='supprimer'><img src='images/s_cancel.png' /></a> </td>
   </tr>

<?php
	}
	echo "</table>";
	?>
 <div class="total">
 <table>
 	<tr>
 		<td style="padding-right: 40px;">Total :</td>
 		<td><?= $total; ?> $</td>
 	</tr>
 	
 </table>
 </div>
<div class="total" style="margin-left: 870px;margin-top: 0px;">
	 <table>
 	<tr>
 		<td><a href="#" style="font-size: 25px;color: white;">Commander</a> </td>
 	</tr>
 	
 </table>
</div>
	<?php
   }
else
{
	
  $panier=$_SESSION['panier'];
$n=count($panier);
for ($i=0; $i <$n ; $i++) {
   if (empty($panier[$i])) {
   	# code...
   	$panier[$i]['des']='0';
   	$panier[$i]['prix']=0;
   
   }

 ?>
	
	<tr>
   <td style="background-color: white;padding: 30px; border-bottom: 1px solid silver;"><img src="images/<?= $panier[$i]['image']; ?>"  height='90px' width='90px'>  </td>
    <td><?= $panier[$i]['des']; ?></td>
    <td><?= $panier[$i]['prix']; ?> $</td>
    <td><select style="width: 50px;color: blue;background-color: gray;font-weight: bold;">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>

    </select> </td>

    
    <td>00000 $</td>
    <td style="width: 70px;"><a href="tirer_article.php?index=<?= $i; ?>" OnClick='return confirm("Voulez-vous vraiment tirer cet article de votre panier ?");' title='supprimer'><img src='images/s_cancel.png' /></a> </td>
   </tr>
<?php }

  	echo "</table>";
}
}
 ?>
</section>