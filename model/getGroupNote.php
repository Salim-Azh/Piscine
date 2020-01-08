<?php
	function getGroupNote($spe, $annee, $group, $part) {
		require('db.php');

        //cas des notes de toeic complètes
        if ($part == 0) {
    
    		$rep = "SELECT dateTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, SUM(score) as scoreSum, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN mock_toeic.date ON idDate = FK_idDate 
                    WHERE FK_idSpeciality = \"$spe\" 
                        AND FK_idGrp = \"$group\" 
                        AND yearStu = \"$annee\" 
                    GROUP BY FK_idTest, FK_idDate ) 
                as t GROUP BY t.FK_idTest ";

        //cas du listening (part 1,2,3,4)
        } elseif ($part == -1 ) {
            
            $rep = "SELECT dateTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, SUM(score) as scoreSum, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN mock_toeic.date ON idDate = FK_idDate 
                    WHERE FK_idSpeciality = \"$spe\" 
                        AND FK_idGrp = \"$group\" 
                        AND yearStu = \"$annee\"
                        AND FK_idPart IN (1,2,3,4) 
                    GROUP BY FK_idTest, FK_idDate ) 
                as t GROUP BY t.FK_idTest ";

        //cas du writing (part 5,6,7)
        } elseif ($part == -2 ) {
            
            $rep = "SELECT dateTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, SUM(score) as scoreSum, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN mock_toeic.date ON idDate = FK_idDate 
                    WHERE FK_idSpeciality = 1 
                        AND FK_idGrp = 1 
                        AND yearStu = 3
                        AND FK_idPart IN (5,6,7) 
                    GROUP BY FK_idTest, FK_idDate ) 
                as t GROUP BY t.FK_idTest"; 

        //cas ou la partie est sélectionnée
        } else {

            $rep = "SELECT dateTest, AVG(t.scoreSum) FROM student INNER JOIN user ON idUser = FK_idUser INNER JOIN fill ON fill.FK_idUser = student.FK_idUser INNER JOIN mock_toeic.date ON idDate = FK_idDate WHERE FK_idSpeciality = \"$spe\" AND FK_idGrp = \"$group\" AND yearStu = \"$annee\" AND FK_idPart = \"$part\" GROUP BY FK_idTest ";

        
        }

        $res = mysqli_query($co, $rep) or die('err_getGroupNote');

        if(mysqli_num_rows($res)!=0) {            
            $note = mysqli_fetch_all($res);
        }
    
        return $note;

	}
?>


