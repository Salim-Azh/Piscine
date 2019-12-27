<?php include_once("header.php"); ?>

<div class="container mt-5 mb-5">
	<div class="text-center">
		<?php
			echo('
					<h1 class="font_blue">Statistiques de '.$_SESSION["firstName"].'</h1>
				');
			
		
			$test = getAllNote($_SESSION['idUser']);
		?>
		<div class="text-center">
			<div class="chart-container mt-5 " style="position: relative; margin-left: 10%; height:40%; width:70%">
			  <canvas id="myChart"></canvas>
			</div>

			<span style = "display:none" id= "notes"> <?php echo json_encode($test); ?></span>
			<script src="../js/graph.js"></script>
		</div>
	</div>
</div>


<?php include("footer.php");?>