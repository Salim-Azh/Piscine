<?php include("header.php");  ?>

<div class="mt-5 container mb-5">
	<div class="text-center">
		<h1 class="font_blue">Démarrer un TEST</h1>
	</div>
	
		<form method="post" action="../controller/ctrl_startTest.php">	
			<div class="col text-center">
			<p class=" text-center">Entrez le code pour ouvrir un test :</p>
			<input class="" type="input" style="width: 40%;" id="code" name="code" value="" required>
			<div class="text-center">
				<input type="submit" value="Valider " id= "launch" name="launch" class="btn btn-primary mt-2 mb-5  " style="width: 30%;" >	
			</div>
			
		</form>
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
					$Code = $row[2];
					$note = getNoteTotale($id, $_SESSION['idUser']);
					$disable = "disabled";
					if (isset($_POST['code'])){
						if ($Code == $code){
							$disable = "";
						}
					}
					if ($note!="-" or (isset($_POST['code']) and ($Code == $code))){
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
										');
										if ($note=="-"){
											echo ('<input type="submit" name="start"  value="Démarrer" class="btn btn-primary mb-0" style="height:50%;" > ');
										}else{
											echo('<span class="badge badge-pill badge-info mt-2">Terminé</span>');
										}
										echo ('</div>
									</div>
								</div>
								<input type="hidden"  name="id" value='.$id.'>
								</form>');
					}
				}
			}
	?>
	</form>
</div>
<?php include("footer.php");?>