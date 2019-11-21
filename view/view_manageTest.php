<?php include_once("header.php"); ?>

<div class="mt-5 container">
	<div class="text-center">
		<h1 class="font_blue">Gérer les TEST TOEIC</h1>
	</div>
	<hr style="width: 50%;">
	<div class="row">
		<div class="col text-center">
			<p class="font-weight-bold">Test</p>
		</div>
		<div class="col text-center">
			<p class="font-weight-bold">Démarrer</p>
		</div>
		<div class="col text-center">
			<p class="font-weight-bold">Modifier</p>
		</div>
		<div class="col text-center">
			<p class="font-weight-bold">Supprimer</p>
		</div>
	</div>
	<?php
		if ($test) {
			$setBg = true;
			foreach ($test as $row) {
				$id = $row[0];
				$lib = $row[1];
				$bg = "";
				if($setBg) {
					$bg = "#CCE5FF";	
				}
				else {
					$bg = "#FFFFFF";
				}
				$setBg = !$setBg;
				echo('<form method="post" action="../controller/ctrl_deleteTest.php">
						<div class="row text-center" style="background-color: '.$bg.';">
							<div class="col text-center">
								<p class="mt-2 mb-2">'.$lib.'</p>
							</div>
							<div class="col">
								<p class="mt-2 mb-2"><a href="#">Démarrer</a></p>
							</div>
							<div class="col">
								<p class="mt-2 mb-2"><a href="#">Modifier</a></p>
							</div>
							<div class="col">
								<button class="btn btn-link" style="height:100%; color:#dc3545;">Supprimer</button>
							</div>
						</div>
						<input type="hidden" id="id" name="id" value="'.$id.'">
					</form>');
			}
		}
		if ($x==1) {
			echo('<div class="text-center mt-4">
					<p class="text-primary font-italic">Test supprimé</p>	
				</div>');
		}
	?>
</div>