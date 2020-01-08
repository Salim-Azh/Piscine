<?php include_once("header.php"); ?>

<form method="post" action="../controller/ctrl_statsbyclass.php">
	<input type="submit" class="btn btn-primary mb-0" style="height:100%;" name="all" value="prec" />
</form>

<div class="container mt-5 mb-5">

	<?php
		//on récupère les valeurs du formalaire
		if(isset($_POST['speChoice'])) {
            $spe = $_POST['speChoice'];
        }

        if(isset($_POST['year'])) { 
	        $year = $_POST['year']; 
        } 

        if(isset($_POST['grp'])) {
            $grp = $_POST['grp'];
        }
        
        $part = 0;
        if(isset($_POST['part'])) {
        	$part = $_POST['part'];
        } else {
        	$part  = 0;
        }

		//$part permet de savoir quelles partie du toeic on récupère
		$res = getGroupNote($spe, $year, $grp, $part);

    ?>

 	<div class="text-center">
		<?php
			echo('<h1 class="font_blue">Statistiques des '. $spe . '' . $year . ' : '  . $grp . ' </h1>');
		?>
		
		<div class="text-center">
			<div  class="chart-container mt-5 " style="position: relative; margin-left: 10%; height:40%; width:70%">
			  <canvas id="myChart"></canvas>
			</div>

			<span style = "display:none" id= "notes"> <?php echo json_encode($res); ?></span>
			
			<script src="../js/graph2.js"></script>
		</div>

		<form method="post">
	 		<input type="submit" class="btn btn-primary mb-0" style="height:100%;" name="all" value="listening & writing"/> 
			<input type="submit" class="btn btn-primary mb-0" style="height:100%;" name="listening" value="listening"/> 
			<input type="submit" class="btn btn-primary mb-0" style="height:100%;" name="writing" value="writing"/> 
    	</form>

	</div>

</div>


<?php include("footer.php");?>