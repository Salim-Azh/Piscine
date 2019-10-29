
<?php include("header.php");?>
<div class="container">
<!-- on créé un conteneur pour espacer le contenu des bords de la fenetre -->
	 <div class="container mt-5">
	 	<!-- on créé un nouveau conteneur row qui est une ligne dont les composants sont alignés au centre -->
	 	<div class="row align-items-center">
	 		<!-- dans cette ligne on place une colonne -->
	 		<div class="col ">
	 			<!-- dans cette colonne on replace une ligne qui va contenir du texte -->
	 			<div class="row justify-content-center">
	 				<div class="text-center">
	 					<h2 class="font">Bienvenue sur </h2><h2 class="font_blue"> &nbsp;TOEIC</h2>
	 				</div>
	 			</div>
	 			<!-- une autre ligne qui sera donc en dessous de la premiere pour y placer l'image -->
	 			<div class="row mt-5 align-content-center">
	 				<div class="text-center">
	 					<img  src="../img/team2.png" width="70%">
	 				
	 				</div>
	 			</div>
	 		</div>
	 		<!-- On créé une seconde colonne pour le formulaire de connexion -->
	 		<div class="col pt-sm-5">

			    <div class="text-center">

				  <form method="POST" action="../controller/ctrl_connection.php">
					
				    <h3 class="mb-3 font-weight-normal">Se connecter</h3>

				    <label for="mail" class="sr-only">Adresse email</label>
				    <input type="email" id="mail" name="mail" class="form-control mb-2" placeholder="Adresse email" required autofocus>

				    <label for="pwd" class="sr-only">Mot de passe</label>
				    <input type="password" id="pwd" name="pwd" class="form-control mb-2" placeholder="Mot de passe" required>
				    
				   
				    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion">
				 </form> 
				    <div id="errorMessage-js"></div>  
				    <p class=" mb-3 text-muted">&copy; 2019</p>
				</div>
			</div>
			
			
			</div>
			</div>
			<hr class="mt-5 mb-5" width="70%">
		<div class="container mt-5 mb-5">
			<div class="d-flex flex-row">
				<div class="img-accueil col mr-3">
					<img class=" img-fluid" src="../img/social.png" >
				</div>
				<div id="t1" class="d-flew col align-items-center ml-3 text-center">
					
					<p>John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months. Discovery commanded fat mrs remaining son she principle middleton neglected. Be miss he in post sons held. No tried is defer do money scale rooms. 
					</p>
					
				</div>
			</div>
		</div>	
		
	</div>

<?php include("footer.php");?>

</body>
</html>
 	
