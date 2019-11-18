<?php  
	function getNoteTotale($idTest, $idUser) {
		require('db.php');
		$rep = "SELECT score FROM fill WHERE FK_idUser = $idUser and FK_idTest = $idTest";
		$res = mysqli_query($co, $rep) or die('err_getNoteTotale');

		if(mysqli_num_rows($res)!=0){
            $grp = mysqli_fetch_all($res);
            $note = 0;
            for ($i=0; $i < 7; $i++) { 
            	$note += $grp[$i][0];
            }
            return $note;
        }
        else {
        	return "-";
        }
	}
?>