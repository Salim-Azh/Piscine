<?php include("header.php");?>

<div class="container mt-5 mb-5">
	<div class="text-center">
		<h3 class="mb-3 font-weight-normal">Créer un compte</h3>
		<small>Veuillez d'abord choisir votre statut</small>
		<form method="POST" action="../controller/ctrl_inscription.php">
			<div>
				<select id="type" name="type" class="form-control" autofocus>
					<option value='0'>-</option>
					<option value='Eleve'>Eleve</option>
					<option value='Enseignant'>Enseignant</option>
				</select>
			</div>
			<div class="form-group mt-5">
				<div class="row mb-3">
					<div class="col">
						<label for='name' class="d-flex flex-row ">Nom</label>
						<input type="text" class="form-control" placeholder="Votre nom" id='name' name='name'required />
					</div>
					<div class="col">
						<label for='firstName' class="d-flex flex-row">Prénom</label>
						<input type="text" class="form-control" placeholder="Votre prénom" id='firstName' name='firstName' required />
					</div>
				</div>
				<div class="mt-2">
					<label class="d-flex flex-row " for='mail'>Adresse mail</label>
					<input type="email" class="form-control" placeholder="Votre mail universitaire" id='mail' name='mail' required />
				</div>
				<div class="mt-2">
					<label class="d-flex flex-row " for='pwd'>Mot de passe</label>
					<input type="password" class="form-control" placeholder="Votre mot de passe" id='pwd' name='pwd' required />
				</div>
			</div>

			<!-- student inscription  -->
			<div id="stu_inscription" style="display:none">
				<div class="mt-2">
					<label class="d-flex flex-row" for="numStu">Numéro étudiant</label>
					<input type="text" class="form-control" placeholder="Votre numéro étudiant" id='numStu' name='numStu' required />
				</div>
				<div class="mt-2">
					<label class="d-flex flex-row " for="spe">Spécialité</label>
					<select class="form-control" name='spe' id='spe' required>
						<?php
						if($spe){
							foreach ($spe as $row) {
								$id=$row[0];
								$lib=$row[1];
								echo "<option value='".Security::html($id)."'>".Security::html($lib)."</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="mt-2">
					<label class="d-flex flex-row" for="year">Année</label>
					<select class="form-control" name='year' id='year' required>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<div class="mt-2">
					<label class="d-flex flex-row " for="grp">Groupe</label>
					<select class="form-control" id='grp' name='grp' required>
						<?php
						if($grp){
							foreach ($grp as $row) {
								$id=$row[0];
								$lib=$row[1];
								echo "<option value='".Security::html($id)."'>".Security::html($lib)."</option>";
							}
						}
						?>
					</select>
				</div>			   
			</div>
			<!-- admin inscription  -->		     	
			<div id="adm_inscription" style="display:none">
				<small>Ce compte devra être validé par un enseignant</small>
			</div>			
			
			<div class="mt-4" ><input type="submit" name="envoi" value="Envoyer" id='envoi'/></div>
			
    	</form>
	</div>
</div>

<?php include("footer.php");?>

<script src="../js/inscription.js"></script>
</body>
</html>

