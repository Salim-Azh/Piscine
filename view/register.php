

<?php 
      include("header.php");
?>
<script src="../js/inscription.js"></script>
<div class="container mt-5 mb-5">
	<div class="text-center">
		<h3 class="mb-3 font-weight-normal">Créer un compte</h3>
		<small>Veuillez d'abord choisir votre statut</small>
		<form>
		<div>
			<select onChange="register(this.value);" id="inscription" class="form-control">
			  <option >-</option>
			  <option >Eleve</option>
			  <option>Enseignant</option>
			</select>
		</div>
			
			<!-- inscription éleve  -->
			<div id="inscription_eleve" style="display:none;">
			    <div class="form-group mt-5">
			    	<div class="row mb-3">
			    		<div class="col">
				     		<label class="d-flex flex-row " >Nom</label>
				     		<input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Votre nom">
				    	</div>
				    	<div class="col">
				     		<label class="d-flex flex-row" >Prénom</label>
			     			<input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Votre prénom">
			     		</div>
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " >Adresse mail</label>
			     		<input type="email" class="form-control" required aria-describedby="emailHelp" placeholder="Votre mail universitaire">
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " >Mot de passe</label>
			     		<input type="password" class="form-control" required aria-describedby="emailHelp" placeholder="Votre mot de passe">
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " for="exampleInputEmail1">Numéro étudiant</label>
			     		<input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Votre numéro étudiant">

			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " for="exampleInputEmail1">Année</label>
			     		<select  required class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " for="exampleInputEmail1">Spécialité</label>
			     		<select  required class="form-control">
						  <option>IG</option>
						  <option>MEA</option>
						  <option>MAT</option>
						  <option>STE</option>
						  <option>GBA</option>
						</select>
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " for="exampleInputEmail1">Groupe</label>
			     		<select  required class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
			     	</div>
			     	<div class="mt-4" ><input type="submit" name="envoi" value="Envoyer" /></div>			    
			    </div>
			</div>


			    <!-- inscription enseignant -->
			    <div id="inscription_enseignant"  style="display:none;">
			    <div class="form-group mt-5">
			    	<div class="row mb-3">
			    		<div class="col">
				     		<label class="d-flex flex-row " >Nom</label>
				     		<input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Votre nom">
				    	</div>
				    	<div class="col">
				     		<label class="d-flex flex-row" >Prénom</label>
			     			<input type="text" class="form-control" required aria-describedby="emailHelp" placeholder="Votre prénom">
			     		</div>
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " >Adresse mail</label>
			     		<input type="email" class="form-control" required aria-describedby="emailHelp" placeholder="Votre mail universitaire">
			     	</div>
			     	<div class="mt-2">
			     		<label class="d-flex flex-row " >Mot de passe</label>
			     		<input type="password" class="form-control" required aria-describedby="emailHelp" placeholder="Votre mot de passe">
			     	</div>

			     	<small>Ce compte devra être validé par un enseignant</small>
			     	
			     	<div class="mt-4" ><input type="submit" name="envoi" value="Envoyer" /></div>			    
			    </div>
			</div>
			
    	</form>
  </div>
	</div>
</div>
<?php 
      include("footer.php");
?>


