<?php include("header.php");  ?>

<div class="mt-5 container mb-5">
	<div class="text-center">
		<h1 class="font_blue">Statistiques par classe / groupe</h1>
	</div>
	<hr style="width: 50%;">
	

	<form method="post" action="../controller/ctrl_statsbyclass.php">
		<div class="row mt-5">

			<div class="col">
				<label class="d-flex flex-row " for="spe">Spécialité</label>
				<select class="form-control" name='speChoice' id='speChoice' required>
					<option value="-">-</option>
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
			
			<div class="col">
				<label class="d-flex flex-row" for="year">Année</label>
						<select class="form-control" name='year' id='year' required>
							<option value="-">-</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
			</div>
			
			<div class="col">
				<label class="d-flex flex-row " for="grp">Groupe</label>
				<select class="form-control" id='grp' name='grp' required>
					<option value="tous">Tous</option>
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

			<div class="col">
				<label class="d-flex flex-row " for="grp">Parties</label>
				<select class="form-control" id='part' name='part' required>
					<option value="0">Total</option>
					<option value="-1">listening</option>
					<option value="-2">writing</option>
					<option value="1">part 1</option>
					<option value="2">part 2</option>
					<option value="3">part 3</option>
					<option value="4">part 4</option>
					<option value="5">part 5</option>
					<option value="6">part 6</option>
					<option value="7">part 7</option>
				</select>
			</div>

		</div>			

		<div class="text-center">
			<div class="mt-4" ><input type="submit" class="btn btn-primary" name="envoi" value="Afficher" id='envoi'/></div>
		</div>

	</form>


	<?php

		if(isset($_POST['speChoice'])) {
			//on récupère les valeurs du formalaire
			if(isset($_POST['speChoice'])) {
				$spe = $_POST['speChoice'];
			}
	        if(isset($_POST['year'])) { 
		        $year = $_POST['year']; 
	        } 

	        if(isset($_POST['grp'])) {
	            $grp = $_POST['grp'];
	            if ($grp == 'tous'); {
	            	$grp = 0;
	            }
	        }
	        
	        $part = 0;
	        if(isset($_POST['part'])) {
	        	$part = $_POST['part'];
	        } else {
	        	$part  = 0;
	        }
	        

			//$part permet de savoir quelles partie du toeic on récupère
			$res = getGroupNote($spe, $year, $grp, $part);

			if($res != NULL) {
				echo('<div class="text-center">
						<h1 class="font_blue mt-5">Moyennes des bonnes réponses des '. $speciality[0][0] . '' . $year . ' : Gpr '  . $grp . ' </h1>
							<div class="text-center">
								<div  class="chart-container mt-5 " style="position: relative; margin-left: 10%; height:40%; width:70%">
					  				<canvas id="myChart"></canvas>
								</div>
								<span style = "display:none" id= "notes">' . json_encode($res) . '</span>
								<script src="../js/graph2.js"></script>
							</div>
					</div>');
			} else {
				echo('<div class="text-center mt-5"><h1 class="font_blue"> Aucun TOEIC n\' a été passé</h1></div>');
			}
		}

    ?>
</div>

<?php include("footer.php");?>
</body>
</html>