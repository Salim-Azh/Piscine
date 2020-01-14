<?php include("header.php");?>

<div class="container mb-5">
	<?php
		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1))){
			echo '<div style="text-align: center; height: 30px; width: auto;" class="mt-5"><img style="height: 80px; width: auto;" src="../img/valid.jpg	"  alt="..."></div>';
			echo '<p class="text-center mt-5">'.$message_envoye.'</p>';
		}
		else{
			echo '<div style="text-align: center; height: 30px; width: auto;" class="mt-5" ><img style="height: 80px; width: auto;" src="../img/croixr.jpg	"  alt="..."></div>';
			echo '<p class="text-center mt-5">'.$message_non_envoye.'</p>';
		}
	?>

	<div class=" mt-3">
		<p class="text-center mt-3"> 
			<strong> Vous allez être automatiquement redirigé</strong>
		</p>
	</div>
	<div class="text-center mt-3 mb-5">
	  <div class="spinner-border mb-5" role="status">
	    <span class="sr-only mb-5">Loading...</span>
	  </div>
	</div>
</div>

<meta http-equiv="refresh" content="7;url=../controller/ctrl_homePage.php"> 

<?php include("footer.php"); ?>
