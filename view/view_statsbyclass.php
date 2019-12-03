<?php include("header.php");  ?>

<div class="mt-5 container">
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
			</div>			

			<div class="text-center">
				<div class="mt-4" ><input type="submit" class="btn btn-primary" name="envoi" value="Afficher" id='envoi'/></div>
			</div>

		</form>


</div>
<?php include("footer.php");?>
</body>
</html>