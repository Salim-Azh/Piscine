<?php 
	include_once("header.php");
?>

<div class="container">
	<div class="text-center">
		<h1 class="font_blue mt-5">Changer de mot de passe</h1>
	
		<form method="POST" action="../controller/ctrl_changePassword.php">
			<p class=" text-center mt-5 mb-3">Ancien mot de passe :</p>
			<div class="d-flex justify-content-center">
				<input class="form-control" type="password" style="width: 40%;" id="mdp0" name="mdp0" value="" required />
			</div>
			<p class=" text-center mt-5 mb-3">Nouveau mot de passe :</p>
			<div class="d-flex justify-content-center">
				<input class="form-control" type="password" style="width: 40%;" id="mdp1" name="mdp1" value="" required />
			</div>
			<p class=" text-center mt-5 mb-3">Entrez une seconde fois le nouveau mot de passe :</p>
			<div class="d-flex justify-content-center">
				<input class="form-control" type="password" style="width: 40%;" id="mdp2" name="mdp2" value="" required />
			</div>
			<div class="text-center mt-5">
				<input type="submit" value="Valider " id= "launch" name="launch" class="btn btn-primary mt-2 mb-5  " style="width: 30%;" >
			</div>
		</form>	
	</div>
</div>

<?php include_once("footer.php");?>
</body>
</html>