<?php include_once('header.php') ?>

<div class="mt-5 container ">
	<div class="text-center">
		<?php echo('<h1 class="font_blue">TEST : '.$libTest.' </h1>'); ?>
	</div>
	<hr style="width: 50%;">
	<form method="POST" action="../controller/ctrl_correctionTest.php" style="margin-left: 15%;" onsubmit="this.valider_rep.disabled = true;">
		<div class="row">
			
			<?php
				$cpt = 0;
				for ($i=0; $i < 50; $i++) { 
					echo "<div class=\"row \">";
					for ($j = 0; $j < 4; $j++) {
						$cpt += 1;
						echo ('
								<div class="col ">
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


<script type="text/javascript">
	
	setTimeout(function(){ document.location.href="../controller/ctrl_homePage.php"; }, 3600000);

	var cpt = 7200 ;
var x ;
 
function decompte()
{
	
    if(cpt>=0)
    {
        /*if(cpt>1)
        {
            var sec = " secondes.";
        } else {
            var sec = " seconde.";
        }*/
        heures = Math.floor(cpt/3600);
        minutes = Math.floor((cpt-heures*3600)/60);
		secondes = cpt%minutes;
        document.getElementById("Chrono").innerHTML = heures + " h " + minutes + " min " + secondes + "sec" ;
        cpt-- ;
        x = setTimeout("decompte()",1000) ;
    }
    else
    {
        clearTimeout(x) ;
    }
}


</script>

<?php include("footer.php");?>