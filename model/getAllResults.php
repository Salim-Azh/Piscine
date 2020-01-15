<?php 
	//retourne les scores de l'etudiant dont l'identifiant dans la base est $idUser
	function getAllResults($idUser) {
		require('db.php');
		$rep = "SELECT score FROM fill WHERE FK_idUser = $idUser";
		$res = mysqli_query($co, $rep) or die('err_getNoteTotale');

		if(mysqli_num_rows($res)!=0){
            return mysqli_fetch_all($res);
        }
        else {
        	return "-";
        }
	}
?>