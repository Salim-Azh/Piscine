<?php 
	include_once("header.php");
 ?>

 <div class=" mt-5 container">
 	<div class="text-center">
 		<h1 class="font_blue">Créer un TEST TOEIC</h1>
 	</div>
 	<form method="POST" action="../controller/ctrl_ajouterTest.php">
	 	<div >
			<label for='nameTest' class="d-flex flex-row ">Nom du test</label>
			<input type="text" class="form-control" placeholder="Nom du test" id='nameTest' name='nameTest'required />
		</div>
	 	<div class="row" required>
	 		<div><p class="mt-3 mr-2"> Q1 :</p></div>
	 		<div class="form-check form-check-inline">
			  <input class="form-check-input" name="choix" type="radio" id="rep1" value="option1">
			  <label class="form-check-label" for="rep1">A</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" name="choix" type="radio" id="rep2" value="option2">
			  <label class="form-check-label" for="rep2">B</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" name="choix" type="radio" id="rep3" value="option3" >
			  <label class="form-check-label" for="rep3">C</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" name="choix" type="radio" id="rep4" value="option4" >
			  <label class="form-check-label" for="rep4">D</label>
			</div>
		</div>

	<div class="mt-5 text-center">
		<input type="submit" name="ajouter_test" class="btn btn-primary" value="Enregistrer le test" />
	</div>
 	</form>


 </div>

 <?php 
	include_once("footer.php");
 ?>