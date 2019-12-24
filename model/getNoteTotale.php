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
                if ($noteListening <= 25) {
                    $noteListening = 100 - (25 -$noteListening)*5;
                }
                elseif ($noteListening <= 34) {
                    $noteListening = 150 - (34 -$noteListening)*5;
                }
                elseif ($noteListening <= 43) {
                    $noteListening = 200 - (43 -$noteListening)*5;
                }
                elseif ($noteListening <= 46) {
                    $noteListening = 220 - (46 -$noteListening)*5;
                }
                elseif ($noteListening == 47) {
                    $noteListening = 230;
                }
                elseif ($noteListening <= 52) {
                    $noteListening = 260 - (52 -$noteListening)*5;
                }
                elseif ($noteListening <= 55) {
                    $noteListening = 280 - (55 -$noteListening)*5;
                }
                elseif ($noteListening <= 58) {
                    $noteListening = 300 - (58 -$noteListening)*5;
                }
                elseif ($noteListening <= 63) {
                    $noteListening = 330 - (63 -$noteListening)*5;
                }
                elseif ($noteListening <= 66) {
                    $noteListening = 350 - (66 -$noteListening)*5;
                }
                elseif ($noteListening <= 69) {
                    $noteListening = 370 - (69 -$noteListening)*5;
                }
                elseif ($noteListening <= 76) {
                    $noteListening = 410 - (76 -$noteListening)*5;
                }
                elseif ($noteListening <= 79) {
                    $noteListening = 430 - (79 -$noteListening)*5;
                }
                elseif ($noteListening <= 82) {
                    $noteListening = 450 - (82 -$noteListening)*5;
                }
                else {
                    $noteListening = 490 - (89 - $noteListening)*5;
                }


            }

            if ($noteReading >= 97) {
                $noteReading = 495;
            }
            elseif ($noteReading <= 15) {
                $noteReading = 5;
            }
            else {
                if ($noteReading <= 24) {
                    $noteReading = 50 - (24 -$noteReading)*5;
                }
                elseif ($noteReading <= 27) {
                    $noteReading = 70 - (27 -$noteReading)*5;
                }
                elseif ($noteReading <= 32) {
                    $noteReading = 100 - (32 -$noteReading)*5;
                }
                elseif ($noteReading <= 37) {
                    $noteReading = 130 - (37 -$noteReading)*5;
                }
                elseif ($noteReading <= 40) {
                    $noteReading = 150 - (40 -$noteReading)*5;
                }
                elseif ($noteReading <= 45) {
                    $noteReading = 180 - (45 -$noteReading)*5;
                }
                elseif ($noteReading <= 48) {
                    $noteReading = 200 - (48 -$noteReading)*5;
                }
                elseif ($noteReading <= 55) {
                    $noteReading = 240 - (55 -$noteReading)*5;
                }
                elseif ($noteReading <= 60) {
                    $noteReading = 270 - (60 -$noteReading)*5;
                }
                elseif ($noteReading <= 63) {
                    $noteReading = 290 - (63 -$noteReading)*5;
                }
                elseif ($noteReading <= 66) {
                    $noteReading = 310 - (66 -$noteReading)*5;
                }
                elseif ($noteReading <= 71) {
                    $noteReading = 340 - (71 -$noteReading)*5;
                }
                elseif ($noteReading <= 76) {
                    $noteReading = 370 - (76 -$noteReading)*5;
                }
                elseif ($noteReading <= 91) {
                    $noteReading = 455 - (91 -$noteReading)*5;
                }
                else {
                    $noteReading = 490 - (96 -$noteReading)*5;
                }
            }

            return $noteListening + $noteReading;
        }
        else {
        	return "-";
        }
	}
?>