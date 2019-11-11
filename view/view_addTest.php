<?php include_once("header.php"); ?>

 <div class=" mt-5 container">
 	<div class="text-center">
 		<h1 class="font_blue">Créer un TEST TOEIC</h1>
 	</div>
 	<form method="POST" action="../controller/ctrl_creationTest.php">
		<div >
			<label for='nameTest' class="d-flex flex-row ">Nom du test</label>
			<input type="text" class="form-control" placeholder="Nom du test" id='nameTest' name='nameTest'required />
		</div>
		<div class="d-flex justify-content-around">
			<div class="mt-5 mb-1 text-center"><p class="font-weight-bold">Listening Section</p></div> 
			<div class="mt-5 mb-1 text-center"><p class="font-weight-bold" >Reading Section</p></div> 
		</div>
	 	<div class="row">
				<?php
					$cpt = 0;
					for ($i=0; $i < 4; $i++) { 
						echo "<div class=\"col\">";
						for ($j = 0; $j < 50; $j++) {
							$cpt += 1;
							echo ('<div class="row">
										<div><p class="mt-3 mr-2"> Q'.$cpt.' :</p></div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$cpt.' type="radio" id="rep1" value="a" checked required>
											<label class="form-check-label" for="rep1">A</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$cpt.' type="radio" id="rep2" value="b">
											<label class="form-check-label" for="rep2">B</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$cpt.' type="radio" id="rep3" value="c" >
											<label class="form-check-label" for="rep3">C</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$cpt.' type="radio" id="rep4" value="d" >
											<label class="form-check-label" for="rep4">D</label>
										</div>
									</div>');
						}
					   	echo "</div>";
					}
				?>	
		</div>
		
		<div class="mt-5 mb-5 text-center">
			<input type="submit" name="ajouter_test" id="ajouter_test" class="btn btn-primary" value="Enregistrer le test" />
		</div>
 	</form>
 </div>


 <?php include_once("footer.php");?>

 <script src="../js/check_test_name.js"></script>
 </body>
 </html>