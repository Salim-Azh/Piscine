
<?php include("header.php");?>
 	<div class="container">
		<!-- on créé un conteneur pour espacer le contenu des bords de la fenetre -->
		<div class="container mt-5 mb-5>
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
					<!-- connection form -->
					<form method="POST" action="../controller/ctrl_connection.php">
						
						<h3 class="mb-3 font-weight-normal">Se connecter</h3>

						<label for="mail" class="sr-only">Adresse email</label>
						<input type="email" id="mail" name="mail" class="form-control mb-2" placeholder="Adresse email" required autofocus>

						<label for="pwd" class="sr-only">Mot de passe</label>
						<input type="password" id="pwd" name="pwd" class="form-control mb-2" placeholder="Mot de passe" required>
						
					
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion">
					</form> 
					<!-- use to display message with JS -->
						<div id="errorMessage-js"></div>  <!-- code mort ? -->
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
						
						<p>Le toeic est une certification permettant de tester le niveau d’anglais de toutes les personnes se présentant à l’examen. Une note finale est attribuée /995, constituée de 495 points sur une compréhension orale (listening) et 495 points sur une compréhension écrite (reading). A Polytech, il est obligatoire de valider le TOEIC pour pouvoir être diplômé en tant qu'ingénieur. Pour que votre TOEIC soit validé, vous devez obtenir la note de 775/995, et votre TOEIC sera valide pendant toute votre durée de scolarité à Polytech, et 2 ans après. Ce site vous permettra de passer différents TOEIC mis en ligne par vos professeurs, et de pouvoir consulter vos résultats sous forme de statistiques.
						</p>
						
					</div>
				</div>
			</div>	
			
		</div>
	</div>

 <?php include("footer.php");?>

</body>
</html>
 	
