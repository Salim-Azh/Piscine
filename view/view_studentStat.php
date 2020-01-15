<?php include_once("header.php"); ?>

<div class="container mt-5 mb-5">

 	<div class="text-center">
		<?php
			echo('<h1 class="font_blue">Statistiques de '.$nom.' '.$prenom.'</h1>');
		?>
		<div class="text-center">
			<div  class="chart-container mt-5 " style="position: relative; margin-left: 13%; height:40%; width:70%">
			  <canvas id="myChart"></canvas>
			</div>

			<span style = "display:none" id= "notes"> <?php echo json_encode($res); ?></span>

			<script src="../js/graph.js"></script>
		</div>

		<form class="mt-3" method="post">
	 		<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="all" value="listening & reading"/> 
			<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="listening" value="listening"/> 
			<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="reading" value="reading"/> 
    	</form>

	</div>

</div>


<?php include("footer.php");?>
</body>
</html>