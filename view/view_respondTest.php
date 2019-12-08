<?php include_once('header.php') ?>

<div class="mt-5 container">
	<div class="text-center">
		<?php echo('<h1 class="font_blue">TEST : '.$libTest.' </h1>'); ?>
	</div>
	<hr style="width: 50%;">
	<form method="POST" action="../controller/ctrl_correctionTest.php">
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
										<label class="form-check-label">A</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name='.$cpt.' type="radio" id="rep2" value="b">
										<label class="form-check-label">B</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name='.$cpt.' type="radio" id="rep3" value="c" >
										<label class="form-check-label">C</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name='.$cpt.' type="radio" id="rep4" value="d" >
										<label class="form-check-label">D</label>
									</div>
								</div>');
					}
				   	echo "</div>";
				}
			?>
		</div>
		<div class="mt-5 mb-5 text-center">
			<input type="submit" name="valider_rep" id="valider_rep" class="btn btn-primary" value="Valider les réponses" />
		</div>
		<?php echo('<input type="hidden" name="idTest" id="idTest" value='.$idTest.'>'); ?>
	</form>
</div>