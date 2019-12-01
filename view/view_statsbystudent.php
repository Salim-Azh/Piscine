<?php include("header.php");  ?>

<div class="mt-5 container">
	<div class="text-center">
		<h1 class="font_blue">Statistiques par élève</h1>
	</div>
	<hr style="width: 50%;">
	<div class="row mt-5">

		<div class="col">
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
		<div class="col">
			<label class="d-flex flex-row" for="year">Année</label>
					<select class="form-control" name='year' id='year' required>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
		</div>
	</div>
	
</div>