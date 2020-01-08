<?php
	function getGroupNote($spe, $annee, $group) {
		require('db.php');
		require('getALlNote.php');


		$rep = "SELECT FK_idTest, FK_idPart, score, dateTest FROM student INNER JOIN user ON idUser = FK_idUser INNER JOIN fill ON fill.FK_idUser = student.FK_idUser INNER JOIN mock_toeic.date ON idDate = FK_idDate WHERE FK_idSpeciality = \"$spe\" AND FK_isGrp = \"$group\" AND yearStu = \"$annee\" ";

        $res = mysqli_query($co, $rep) or die('err_getAllNote');

		if(mysqli_num_rows($res)!=0){            
            $note = mysqli_fetch_all($res);

            //il faut faire les moyennes pour chaque partie de chaque toeic, puis regrouper ces moyennes pour faire un note moyenne pour le toeic en question
            //cela permettra de pouvoir accéder au détail de chacune des parties pour chaque toeic


            //il faut que découpe la data pour ne récupérer que le jour/mois/année

            $listeNoteToeic[][] = NULL;
            $nonInserted = True;
            $i = 0 // compteur 

            while($i < sizeof($note) ) {
            	while ($nonInserted) {
            		if ($listeNoteToeic[$i][0] == $note[0][3]) {
            			array_push($listeNoteToeic[$i][1], $note);
            			$nonInserted = False;
            		}
            	}
        	}


        	
        }






	}


?>


