<?php include_once("header.php"); ?>

<div class="container mt-5 mb-5">

	<?php
		if (isset($_GET['nom']) && isset($_GET['prenom'])){
			$nom = $_GET['nom'];
			$prenom = $_GET['prenom'];
		} else {
			$nom = $_SESSION['firstName'];
			$prenom = $_SESSION['name'];
		}

		//affichage par défaut
		$type = 0; 

		if(isset($_POST['all'])) { 
            $type = 0;
        }

        if(isset($_POST['listening'])) { 
            $type = 1; 
        }
         
        if(isset($_POST['writing'])) { 
            $type = 2;
        }
        
		//$part permet de savoir quelles partie du toeic on récupère
		$res = getAllNote($nom, $prenom, $type);

    ?>

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
	 		<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="all" value="listening & writing"/> 
			<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="listening" value="listening"/> 
			<input type="submit" class="btn btn-info mb-0 mr-2" style="height:100%;" name="writing" value="writing"/> 
    	</form>

	</div>

</div>

<?php include("footer.php");?>
</body>
</html>