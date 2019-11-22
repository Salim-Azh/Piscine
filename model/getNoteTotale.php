<?php  
	function getNoteTotale($idTest, $idUser) {
		require('db.php');
		$rep = "SELECT FK_idPart,score FROM fill WHERE FK_idUser = $idUser and FK_idTest = $idTest";
		$res = mysqli_query($co, $rep) or die('err_getNoteTotale');

		if(mysqli_num_rows($res)!=0){
            $score = mysqli_fetch_all($res);
            $noteListening = 0;
            $noteReading = 0;

            for ($i=0; $i < 4; $i++) { 
                $noteListening += $score[$i][1];
            }
            for ($i=4; $i < 7; $i++) { 
                $noteReading += $score[$i][1];
            }

            if ($noteListening >= 90) {
                $noteListening = 495;
            }
            elseif ($noteListening <= 6) {
                $noteListening = 5;
            }
            else {
                $noteListening = 495 - (90 - $noteListening) * 5;
            }

            if ($noteReading >= 97) {
                $noteReading = 495;
            }
            elseif ($noteReading <= 16) {
                $noteReading = 5;
            }
            else {
                $noteReading = 495 - (97 - $noteReading) * 5;
            }

            return $noteListening + $noteReading;
        }
        else {
        	return "-";
        }
	}
?>