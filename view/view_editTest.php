<?php include_once("header.php"); ?>

 <div class=" mt-5 container">
 	<div class="text-center">
 		<h1 class="font_blue">Modifier un TEST TOEIC</h1>
 	</div>
 	<hr style="width: 50%;">
 	<form method="POST" action="../controller/ctrl_saveEditTest.php">
		<div >
			<label for='nameTest' class="d-flex flex-row ">Nom du test</label>
			<?php echo('<input type="text" class="form-control" value="'.$testName.'" placeholder="Nom du test" id="nameTest" name="nameTest"required />'); ?>
		</div>
		<div class="d-flex justify-content-around">
			<div class="mt-5 mb-1 text-center"><p class="font-weight-bold">Listening Section</p></div> 
			<div class="mt-5 mb-1 text-center"><p class="font-weight-bold" >Reading Section</p></div> 
		</div>
	 	<div class="row">
				<?php
					foreach ($question as $row) {
					 	$idQuestion = $row[0];
					 	$answer = $row[1];
					 	if ($idQuestion == 1 || $idQuestion == 51 || $idQuestion == 101 || $idQuestion == 151) {			 
							echo "<div class=\"col\">";
						}
						$checkedA = "";
						$checkedB = "";
						$checkedC = "";
						$checkedD = "";
						if ($answer == "a") {
							$checkedA = "checked";
						}
						else if ($answer == "b") {
							$checkedB = "checked";
						}
						else if ($answer == "c") {
							$checkedC = "checked";
						}
						else if ($answer == "d") {
							$checkedD = "checked";
						}
							echo ('<div class="row">
										<div><p class="mt-3 mr-2"> Q'.$idQuestion.' :</p></div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$idQuestion.' type="radio" id="rep1" value="a" '.$checkedA.' required>
											<label class="form-check-label" for="rep1">A</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$idQuestion.' type="radio" id="rep2" value="b" '.$checkedB.'>
											<label class="form-check-label" for="rep2">B</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$idQuestion.' type="radio" id="rep3" value="c" '.$checkedC.'>
											<label class="form-check-label" for="rep3">C</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name='.$idQuestion.' type="radio" id="rep4" value="d" '.$checkedD.'>
											<label class="form-check-label" for="rep4">D</label>
										</div>
									</div>');
						
						if ($idQuestion == 50 || $idQuestion == 100 || $idQuestion == 150 || $idQuestion == 200) {			 
							echo "</div>";
						}
					}
					echo('<input type="hidden" name="idTest" id="idTest" value="'.$idTest.'">');
				?>	
		</div>
		
		<div class="mt-5 mb-5 text-center">
			<input type="submit" name="ajouter_test" id="ajouter_test" class="btn btn-primary" value="Enregistrer les modifications" />
		</div>
 	</form>
 </div>


 <?php include_once("footer.php");?>

 <script src="../js/check_test_name.js"></script>
 </body>
 </html>