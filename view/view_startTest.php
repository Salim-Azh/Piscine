<?php include("header.php");  ?>

<div class="mt-5 container">
	<div class="text-center">
		<h1 class="font_blue">Démarrer un TEST</h1>
	</div>
	<hr style="width: 50%;">
	<div class="row text-center mx-auto mt-2" style="width: 60%;">
		<div class="col">
			<p class="font-weight-bold mt-2 mb-2">Test</p>
		</div>
		<div class="col">
			<p class="font-weight-bold mt-2 mb-2">Note Obtenue</p>
		</div>
		<div class="col">
			<p class="font-weight-bold mt-2 mb-2">Démarrer</p>
		</div>
	</div>
	<?php
		if ($test) {
				$setBg = true;
				foreach ($test as $row) {
					$id = $row[0];
					$lib = $row[1];
					$note = getNoteTotale($id, $_SESSION['idUser']);
					if ($note != '-') {
						$disable = "disabled";
					}
					else {
						$disable = "";
					}
					$bg = "";
					if($setBg) {
						$bg = "#CCE5FF";	
					}
					else {
						$bg = "#FFFFFF";
					}
					$setBg = !$setBg;
					echo ('<form method="post" action="../controller/ctrl_respondTest.php">
							<div class="row text-center mx-auto" style="background-color: '.$bg.'; width: 60%;">
								<div class="col text-center">
									<div class="p-1">
										<p class="mt-2 mb-2">'.$lib.'</p>
									</div>
								</div>
								<div class="col text-center ">
									<div class="p-1">
										<p class="mt-2 mb-2 font_blue">'.$note.'</p>
									</div>
								</div>
								<div class="col text-center">
									<div class="p-1">
										<input type="submit" name="start" id="start" value="Démarrer" class="btn btn-primary mb-0" style="height:100%;" '.$disable.'>
									</div>
								</div>
							</div>
							<input type="hidden" id="id" name="id" value='.$id.'>
							</form>');
				}
			}
	?>
	</form>