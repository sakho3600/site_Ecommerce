
<?php if(!isset($_GET['inscription'])) {  ?>
<section id="content_compte">
<div id="auth"><h3><img src="images/Admin-icon.png" width="40" height="40"> Authentification</h3></div>
	
<form id="form1" action="verifier_admin.php" method="POST">
	<label for="nom">Login : </label><br><input type="text" name="login" id="login"><br>
	<label for="cle">Mot de passe : </label><br><input type="password" name="pass" id="pass">
	<br><div id="b_submit"><span id="connecter">vous n'avez pas de compte :<a href="compte.php?inscription=1"> Signe Up</a></span><input type="submit" name="Valider" value="Se connecter" id="submit"></div>
</form> 
</section> 	
 <?php
}
  else{ ?> 

<section id="content_compte_ins">
<div class="auth2"><h3><img src="images/user.png" width="25"> Inscription</h3></div>
	
<form id="form2" action="inscription.php" method="POST">
<table>
<div id="s_content">
	<tr>
		<td><label for="nom">Login : </label><br><input type="text" name="login" id="login"></td>
	    <td><label for="email">Email : </label><br>
        <input type="email" name="email" id="email">
	    </td>
	    <td><label for="tel">Telephone : </label><br>
        <input type="text" name="tel" id="tel">
	    </td>
	</tr>
	<tr>
		
	    
	    <td><label for="pass">Mot de passe : </label><br>
        <input type="password" name="pass" id="pass">
	    
	    </td>
	    <td><label for="pass2">Confirmation : </label><br>
        <input type="password" name="pass2" id="pass2">
	    
	    </td>
	</tr>
	</div>
	<tr>
		<td colspan="3">
		<div id="auth1">
			<input type="submit" name="S'inscrire" value="S'inscrire">
		</div>	
		</td>
	</tr>
</table>
<!--
	<label for="login">Prise: </label><br><input type="text" name="login" id="login"><br>
	<label for="pass">Nom de PC: </label><br><input type="password" name="pass" id="pass">
	<br><div id="b_submit"><input type="submit" name="Valider" value="Se connecter" id="submit"></div> -->
</form>
</section>
	<?php } ?>
		