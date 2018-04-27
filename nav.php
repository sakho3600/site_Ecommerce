<nav>
<div class="panier">
	<div><a href="panier.php" id="panier"> Panier</a></div><br>
	3 item in your cart
	Votre panier est vide
</div>
	<ul id="menu"> 

    <!-- On peut recuperer les categories dans la base de données !!!!????  -->

			<li class="subMenu" id="11"><a> ELECTRONICS </a> 
<script type="text/javascript">
	/*
	var subMenu=document.getElementsByClassName('subMenu');
  for (var i = 0; i < subMenu.lenght; i++) {
       subMenu[i].addEventListner('click',fct);
       function fct(e) {
	  alert('hhhh');
}  
       */
       var s=document.getElementById('11');
       s.addEventListner('click',fct(e)
       	{
       		e.target().innerText()='hhhhh';
       	});

  }


</script>
			</li>
				<div class="s_subMenu">
				<li class="even"><a  href="products.php?page=cameras" > Cameras </a>

				</li>
				<li class="odd"><a href="products.php?page=ordinateur,tablette"> Computers, Tablets</a></li>
				<li class="even"><a href="products.php?page=mobile phone " > Mobile Phone </a></li>
				<li class="odd"><a href="products.php?page=ordinateur,tablette">  Computers, Tablets</a></li>
				</div>
				<li class="subMenu"><a> ELECTRONICS </a> </li>
				<div class="s_subMenu">
				<li class="even"><a  href="products.php?page=cameras" > Cameras </a>

				</li>
				<li class="odd"><a href="products.php?page=ordinateur,tablette"> Computers, Tablets</a></li>
				<li class="even"><a href="products.php?page=mobile phone " > Mobile Phone </a></li>
				<li class="odd"><a href="products.php?page=ordinateur,tablette">  Computers, Tablets</a></li>
				</div>
		
		</ul>


		<div id="special">
			<ul>
				<li id="span1" onclick="alert('hhhhh');">
					Special Products
				</li>
				<li id="prod">
				<span style="font-size: 12px;"> un peu de  texte</span><br>
					<img src="images/laptop.png"><br>
					<span style="font-size: 12px;text-align: center;"> un peu de texte</span>
				</li>
				<li id="prix"> <span style="text-decoration: line-through; font-size: 15px;color: #999999;text-decoration-color: black;font-family: Arial; font-weight: bold;">400$</span> 300$</li>
			</ul>
		</div>


		<div id="payement">
			<img src="images/payment_methods.png">
		</div>

</nav>