<?php  
	function getAllNote($prenom, $nom, $type) {
		require('db.php');

		$rep = "SELECT FK_idPart, score, FK_idTest, nameTest FROM fill 
            INNER JOIN mock_toeic.date ON fill.FK_idDate = date.idDate 
            INNER JOIN mock_toeic.user ON FK_idUser = idUser
            INNER JOIN test ON idTest = FK_idTest 
            WHERE firstNameUser = \"$prenom\" 
                AND nameUser = \"$nom\" ";
		
        $res = mysqli_query($co, $rep) or die('err_getAllNote');

		if(mysqli_num_rows($res)!=0){            
            $note = mysqli_fetch_all($res);
            
            //Initialisation des variables
            $testPrec = $note[0][2];
            $datePrec = $note[0][3];
            $tab[][] = NULL;
            $compteur = 0;
            
            $cpt = 1;
            $tab[0][0] = $note[0][3];
 
            //Répartie les notes dans un tableau à 2 dimensions (chaque ligne a 7 colonnes : 1 par partie)
            //chaque ligne correspond a un nouveau
            for($i = 0; $i < sizeof($note); $i++){
                
                //Vérifie si c'est toujours le meme test
                if($note[$i][2] == $testPrec && $note[$i][3] == $datePrec){
                    $tab[$compteur][$cpt++] = $note[$i][1]; //auto incrémente le cpt
                } else {
                    $cpt = 1;
                    $tab[++$compteur][0] = $note[$i][3];
                    $tab[$compteur][$cpt++] = $note[$i][1]; //augmente le comtpteur avant d'ajouter dans le tableau
                    $testPrec = $note[$i][2];
                    $datePrec = $note[$i][3];
                }
            }

            //tableau pour stoker toutes les notes de l'étudiant
            $listeNote = array();

            //Calcul la note du Test (addition des 7 colonnes selon le barème)
            for ($i = 0; $i <sizeof($tab); $i++){
                $noteListening = 0;
                $noteReading = 0;

                //partie listenning
                for ($j=1; $j <= 4; $j++) { 
                    $noteListening += $tab[$i][$j];
                }

                //partie reading
                for ($j=5; $j <= 7; $j++) { 
                    $noteReading += $tab[$i][$j];
                }

                //attribution des points en fonction du score brut et du barème
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

                if($type == 0){
                    array_push($listeNote, $tab[$i][0], array($noteListening, $noteReading));
                } elseif ($type == 1) {
                    array_push($listeNote, $tab[$i][0], array($noteListening, 0));
                } elseif ($type == 2) {
                    array_push($listeNote, $tab[$i][0], array(0, $noteReading));
                }
            }
            return $listeNote;   
        } else {
            return NULL; //cas ou l'étudiant n'a aucun score
        }
    }
?>