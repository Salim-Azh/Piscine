<?php include_once("header.php"); ?>


<?php
  $test = getAllNote($_SESSION['idUser']);
?>

<div class="chart-container mt-5" style="position: relative; height:20vh; width:50vw">
  <canvas id="myChart"></canvas>
</div>

<span style = "display:none" id= "notes"> <?php echo json_encode($test); ?></span>
<script src="../js/graph.js"></script>



