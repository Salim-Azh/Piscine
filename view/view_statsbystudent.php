<?php include("header.php");  ?>

<div class="mt-5 container">
	<div class="text-center">
		<h1 class="font_blue">Statistiques par élève</h1>
	</div>
	<hr style="width: 50%;">
	<form method="post" action="../controller/ctrl_searchStudent.php">
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
			</div>

			<div class="text-center">
				<div class="mt-4" ><input type="submit" class="btn btn-primary" name="envoi" value="Rechercher" id='envoi'/></div>
			</div>

		</form>

	<div class="container">
		<div class="row">
			<div class="col mt-5 mb-5">
			<hr style="width: 50%;">
			<div class="text-center">
				<small >Cliquez sur l'élève pour observer ses statistiques</small>
			</div>
			
			<div class="row text-center mx-auto mt-4" style="width: 60%;">
				<div class="col">
					<p class="font-weight-bold mt-2 mb-2">Nom</p>
				</div>
				<div class="col">
					<p  class="font-weight-bold mt-2 mb-2">Prénom</p>
				</div>
			</div>

			<?php 			
				$setBg = true;
				if (isset($name)) {
					foreach ($name as $row) {
						$bg = "";
						if($setBg) {
							$bg = "#CCE5FF";	
						} else {
							$bg = "#F4F4F4";
						}
						$setBg = !$setBg;
						
						echo('<div onclick="document.location=\'../controller/ctrl_studentStat.php?prenom='.$row[0].'&nom='.$row[1].'\'" class=" mt-2 shadow-sm row text-center mx-auto grossir" style="cursor: pointer; background-color: '.$bg.'; width: 60%;">
								<div class="col text-center">
									<div class="p-1">
										<p class="mt-2 mb-2 ">'.$row[0].'</p>
									</div>
								</div>
								<div class="col text-center ">
									<div class="p-1">
										<p class="mt-2 mb-2">'.$row[1].'</p>
									</div>
								</div>
							</div>'
						);
					}
				}
			 ?>

			</div>
		</div>
	</div>
</div>
<?php include("footer.php");?>
</body>
</html>