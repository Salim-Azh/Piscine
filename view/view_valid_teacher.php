<?php 
	include_once("header.php");
 ?>

<div class="container mb-5">
	<div class="text-center mt-5 mb-5">
		<h1 class="font_blue">Valider un professeur</h1>
	</div>


	<div class="row text-center mx-auto mt-4" style="width: 60%;">
				<div class="col text-center">
					<p class="font-weight-bold mt-2 mb-2">Nom</p>
				</div>
				<div class="col text-center">
					<p  class="font-weight-bold mt-2 mb-2">Prénom</p>
				</div>
				<div class="col text-center">
					<p  class="font-weight-bold mt-2 ml-4 mb-2">mail</p>
				</div>
				<div class="col text-center">
					<p  class="font-weight-bold mt-2 ml-5 mb-2">action</p>
				</div>
			</div>
	<?php 
			
			$setBg = true;
			if (isset($name)) {
				foreach ($name as $row) {
					$bg = "";
					if($setBg) {
						$bg = "#CCE5FF";	
					}
					else {
						$bg = "#F4F4F4";
					}
					$setBg = !$setBg;
					echo(

						'<div class=" mt-2 shadow-sm row text-center mx-auto " style=" background-color: '.$bg.'; width: 60%;">
								<div class="col text-center">
									
										<p class="mt-2 mb-2 ">'.$row[0].'</p>
									
								</div>
								<div class="col text-center ">
									
										<p class="mt-2 mb-2">'.$row[1].'</p>
									
								</div>
								<div class="col text-center ">
									
										<p class="mt-2 mb-2">'.$row[2].'</p>
									
								</div>
	
								
										<form method="post" action="../controller/ctrl_valid_teacher.php">
											<input style="display:none;" type="text" class="form-control" placeholder="Votre numéro étudiant" id="'.$row[3].'" name="id" value="'.$row[3].'" />
											<div class="col text-center ">
												<div class="p-1">	
													<input class="btn btn-link" type= "submit"  value="Valider">

					 							</div>
											</div>
		 								</form>
									
						</div>'
					);
					

					

					
					
				}
			}

	?>

</div>

<?php include_once("footer.php");?>
</body>
</html>