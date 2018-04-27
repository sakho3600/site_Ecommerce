<section >
        <div style="font-size: 20px;margin-bottom: 30px ">
        
        <?php 
             include 'connexion.php';
$resultat=$connexion->query("select login from users where id='".$_SESSION['authentifie']."'");
 $ligne=$resultat->fetch();
         ?>
        	bienvenu <span style="color: green;"><?php echo $ligne['login']; ?> </span>à espace admin
			Ici vous avez tous les droits de modifications (ajouter ,supprimer ...)<br> 
			voila la liste  de tout les articles :
        </div> <hr>
			 <h4><img src='images/b_edit.png'  /> 

			 <a href="#modifier"> modifier ou supprimer un article</a></h4>
			<h4> <a href="#ajouter">ajouter un article</a></h4>
			<br>
			<hr>
			<h2 class="auth2" id="modifier" style="text-align: center;padding-top: 15px; padding-bottom: 0;"><img src='images/b_edit.png' width="15px" height="30px"/> modifier ou supprimer un article </h2>
        <table border="3" style=" border:3px groove gray ;margin-left: 80px ; padding: 10px" id="admin">
                 <tr><th> Article </th><th> prix($) </th><th> photo</th><th>modifier</th><th>supprimer</th></tr>
			<?php
                  $connexion =new PDO("mysql:host=localhost;dbname=magasin", "root", "");

				$listesArticles = $connexion->query("select * from article ");
                 
				while($article = $listesArticles->fetch()) {

					echo "<tr><td><a href='product_details.php?id=1'>".$article['designation']."</a></td><td>".$article['prix']."</td><td><img src='images/".$article['image']."' width='100px' height='100px' /></td><td><a href='modifier_article.php?id=".$article['id_article']."'> <img src='images/b_edit.png' /> modifier</a></td>"; ?>

					<td><a href='supprimer_article.php?id="<?php echo $article['id_article']; ?>"' OnClick='return confirm("Voulez-vous vraiment supprimer cet article ?");'><img src='images/s_cancel.png' />  supprimer</a></td></tr>
				<?php	// !! avec image echo "<tr><td><a href='product_details.php?id=1'>".$article['designation']."</a></td><td>".$article['prix']."</td><td></td><td>".$article['image']."</td></tr>";
					
				} 
                    echo "</table> <br><hr><br>";
			  ?>
			  <h2 class="auth2" id="ajouter" style="text-align: center;padding-top: 15px; padding-bottom: 0;"> Ajouter un article</h2>
			 
			<form action="ajoutarticle.php" method="post" id="form_ajout">
				ID : <br /><input type="text" name="id_article" /> <br />
				Designation : <br /> <input type="text" name="designation" /> <br />
				Prix : <br /> <input type="text" name="prix" /> <br />
				catégorie : <br /> <input type="text" name="categorie" /> <br />
				image :  <br /><input type="text" name="image" /> <br />
				<input type="submit" value="Ajouter" style="font-weight: bold; width: 100px; height: 40px;margin-left: 300px;" /> <br />

			</form>

		</section>