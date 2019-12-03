<?php 
	include_once("header.php");
 ?>
<div class="container">
	<div class="mt-5 text-center">
		<h1 class="font_blue">Mon Profil</h1>
		<hr style="width: 50%;">
		<?php 
			echo (

				'<h4 class="mt-5">Bonjour '.$_SESSION["firstName"].'</h4>
				');
				if(isset($_SESSION["numStu"])){
					echo('
						<ul class="list-group list-group-flush">
						  	<li class="list-group-item">Votre numéro étudiant est : '.$_SESSION["numStu"].'</li>
						  	<li class="list-group-item">Vous êtes groupe '.$_SESSION["idGrp"].'</li>
							<li class="list-group-item">Votre mail est : '.$_SESSION["mail"].'</li>
						</ul>'
					);
				}
					
				

			
		 ?>
		 <div class="container text-center mt-5">
		 	<div class="row">
		 		<div class="col">
		 			<div class="mt-4" ><input type="submit" class="btn btn-primary" name="envoi" value="Changer ces informations" id='envoi'/></div>
		 		</div>
		 		<div class="col">
		 			<div class="mt-4" ><input type="submit" class="btn btn-primary" name="envoi" value="Changer de mot de passe" id='envoi'/></div>
		 		</div>
		 	</div>
		 </div>
		
	</div>
	
</div>

 <?php 
	include_once("footer.php");
 ?>