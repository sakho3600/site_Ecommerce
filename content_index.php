<?php
                  $connexion =new PDO("mysql:host=localhost;dbname=magasin", "root", "");

				$listesArticles = $connexion->query("select * from article ");
				$i=0;
				?>

<section>
<?php	while($article = $listesArticles->fetch() ) { 
			 $i++; ?>
<div class="product" >
		<ul> 
			<li>
				 <?php echo $article['designation']; ?> 
			</li>
			<div class="groupe">
			<li> <img src="images/<?= $article['image']; ?>" width="60%" height="60%" > </li>
			</div>
			<div class="prix_global">
			<li><div class="prix_ancien"> 122$ </div> <?= $article['prix']; ?>$</li>
			</div>
			<li class="details"> <table>
				<tr>
					<td class="card"><a href="addpanier.php?id=<?= $article['id_article']; ?>&image=<?= $article['image']; ?>&des=<?= $article['designation']; ?>&prix=<?= $article['prix']; ?>">Add to <img src="images/shoppingcart.png" width="20px" height="20px"></a></td>
					<td class="divider"></td>
					<td><a href="product_details.php?id=<?= $article['id_article']; ?>"><img src="images/square-blue-add.gif"> More info... </a></td>
				</tr>
			</table></li>
		</ul>
	</div>
	<?php } ?>
	<br style="clear: both;" />

</section>