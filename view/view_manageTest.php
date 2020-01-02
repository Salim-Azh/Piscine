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
					$Code = $row[2];
					$bg = "";
					if($setBg) {
						$bg = "#CCE5FF";	
					}
					else {
						$bg = "#FFFFFF";
					}
					$setBg = !$setBg;
					echo('<div id='.$id.' class="row text-center" style="background-color: '.$bg.';">
							
							<div class="col text-center">
								<p class="mt-2 mb-2 ">'.$lib.'</p>
							</div>
							<div class="col">
			
							<form method="post" action="../controller/ctrl_manageTest.php">	
								<input type="submit" value="Ouvrir le test aux élèves" id= "launch" name="launch" class="btn btn-link" style="height:100%;">
								<input type="hidden" id="Code" name="Code" value="'.$Code.'">
								<input type="hidden" id="lib" name="lib" value="'.$lib.'">
								<input type="hidden" id="idTest" name="idTest" value="'.$id.'">

							</form>
							</div>
							<div class="col">
							<form method="post" action="../controller/ctrl_editTest.php">	
								<input type="submit" value="Modifier" id= "modify" name="modify" class="btn btn-link" style="height:100%;">
								<input type="hidden" id="idTest" name="idTest" value="'.$id.'">
							</form>
							</div>
							<div class="col">
								<p class="mt-2 mb-2"><a href="#" class="text-danger">Supprimer</a></p>
							</div>
						</div>');
					}
			}

			if (isset($_POST['Code']) and (isset($_POST['lib'])) ){
				echo "<h5 class='text-center font_blue mt-5'>Voici le code du test ".$libel." : ".$code." </h5>";
			}
		?>
</div>
<?php include("footer.php");?>