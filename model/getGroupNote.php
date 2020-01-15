<?php
	function getGroupNote($spe, $annee, $group, $part) {
		require('db.php');

        if ($group = 0) {
            $group = 'IN (1,2)';
        } else if ($group = 1) {
            $group = '= 1';
        } else if ($group = 2) {
            $group = '= 2';
        }

        //cas des notes de toeic complètes
        if ($part == 0) {
    
    		$rep = "SELECT nameTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, SUM(score) as scoreSum, nameTest, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN id12234610_mock_toeic.date ON idDate = FK_idDate 
                    INNER JOIN test ON test.idTest = FK_idTest
                    WHERE FK_idSpeciality = \"$spe\" 
                        AND FK_idGrp " .$group . " 
                        AND yearStu = \"$annee\" 
                    GROUP BY FK_idTest, student.FK_idUser) 
                as t GROUP BY t.FK_idTest ";

            $res = mysqli_query($co, $rep) or die('err_getGroupNote0');


        //cas du listening (part 1,2,3,4)
        } elseif ($part == -1 ) {
            
            $rep = "SELECT nameTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, AVG(score) as scoreSum, nameTest, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN id12234610_mock_toeic.date ON idDate = FK_idDate
                    INNER JOIN test ON idTest = FK_idTest
                    WHERE FK_idSpeciality = \"$spe\" 
                        AND FK_idGrp" . $group . "
                        AND yearStu = \"$annee\"
                        AND FK_idPart IN (1,2,3,4) 
                    GROUP BY FK_idTest, student.FK_idUser) 
                as t GROUP BY t.FK_idTest ";

            $res = mysqli_query($co, $rep) or die('err_getGroupNote-1');


        //cas du writing (part 5,6,7)
        } elseif ($part == -2 ) {
            
            $rep = "SELECT nameTest, AVG(t.scoreSum) FROM (
                SELECT FK_idTest, FK_idPart, SUM(score) as scoreSum, nameTest, dateTest FROM student
                    INNER JOIN user ON idUser = FK_idUser 
                    INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                    INNER JOIN id12234610_mock_toeic.date ON idDate = FK_idDate 
                    INNER JOIN test ON idTest = FK_idTest
                    WHERE FK_idSpeciality = \"$spe\"
                        AND FK_idGrp" . $group . " 
                        AND yearStu = \"$annee\"
                        AND FK_idPart IN (5,6,7) 
                    GROUP BY FK_idTest, student.FK_idUser) 
                as t GROUP BY t.FK_idTest"; 

            $res = mysqli_query($co, $rep) or die('err_getGroupNoteElse-2');

        //cas ou la partie est sélectionnée
        } else {
            $rep = "SELECT nameTest, AVG(score) FROM student 
                INNER JOIN user ON idUser = FK_idUser 
                INNER JOIN fill ON fill.FK_idUser = student.FK_idUser 
                INNER JOIN id12234610_mock_toeic.date ON idDate = FK_idDate
                INNER JOIN test ON idTest = FK_idTest 
                WHERE FK_idSpeciality = \"$spe\" 
                    AND FK_idGrp ". $group ." 
                    AND yearStu = \"$annee\" 
                    AND FK_idPart = \"$part\" 
                GROUP BY FK_idTest";   

            $res = mysqli_query($co, $rep) or die('err_getGroupNoteElse');
     
        }
        
        if(mysqli_num_rows($res)!=0) {            
            $note = mysqli_fetch_all($res);
            return $note;
        } else {
            return NULL;
        }
	}
?>


