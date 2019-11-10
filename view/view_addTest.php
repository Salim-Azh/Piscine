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
	 	<div class="row">
		 	<div class="col">
				<?php
					
					for ($i = 1; $i <= 50; $i++) {
					 	echo ('<div class="row" required>

					 		<div><p class="mt-3 mr-2"> Q '.$i.' :</p></div>
					 		<div class="form-check form-check-inline" >
							  <input class="form-check-input" name='.$i.' type="radio" id="rep1" value="a" checked >
							  <label class="form-check-label" for="rep1">A</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep2" value="b">
							  <label class="form-check-label" for="rep2">B</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep3" value="c" >
							  <label class="form-check-label" for="rep3">C</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep4" value="d" >
							  <label class="form-check-label" for="rep4">D</label>
							</div>
						</div>');
					}

				?>
			</div>
			<div class="col">
				<?php
					
					for ($i = 51; $i <= 100; $i++) {
					 	echo ('<div class="row" required>
					 		<div><p class="mt-3 mr-2"> Q '.$i.' :</p></div>
					 		<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep1" value="a" checked>
							  <label class="form-check-label" for="rep1">A</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep2" value="b">
							  <label class="form-check-label" for="rep2">B</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep3" value="c" >
							  <label class="form-check-label" for="rep3">C</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" name='.$i.' type="radio" id="rep4" value="d" >
							  <label class="form-check-label" for="rep4">D</label>
							</div>
						</div>');
					}

				?>
			</div>
			<div class="col">
			<?php
				
				for ($i = 101; $i <= 150; $i++) {
				 	echo ('<div class="row" required>
				 		<div><p class="mt-3 mr-2"> Q '.$i.' :</p></div>
				 		<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep1" value="a" checked>
						  <label class="form-check-label" for="rep1">A</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep2" value="b">
						  <label class="form-check-label" for="rep2">B</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep3" value="c" >
						  <label class="form-check-label" for="rep3">C</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep4" value="d" >
						  <label class="form-check-label" for="rep4">D</label>
						</div>
					</div>');
				}

			?>
		</div>
		<div class="col">
			<?php
				
				for ($i = 151; $i <= 200; $i++) {
				 	echo ('<div class="row" required>
				 		<div><p class="mt-3 mr-2"> Q '.$i.' :</p></div>
				 		<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep1" value="a" checked>
						  <label class="form-check-label" for="rep1">A</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep2" value="b">
						  <label class="form-check-label" for="rep2">B</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep3" value="c" >
						  <label class="form-check-label" for="rep3">C</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name='.$i.' type="radio" id="rep4" value="d" >
						  <label class="form-check-label" for="rep4">D</label>
						</div>
					</div>');
				}

			?>
		</div>
		</div>
		

	<div class="mt-5 mb-5 text-center">
		<input type="submit" name="ajouter_test" class="btn btn-primary" value="Enregistrer le test" />
	</div>
 	</form>


 </div>

 <?php 
	include_once("footer.php");
 ?>