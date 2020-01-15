<?php
	//return students' id name and firstname order by firstname in the speciality $spe and the year $year
	//$spe : int equal to one of the id in DB
	//$year : int value = 3 or 4 or 5
	function getStudents($spe, $year) {
		require('db.php');

		//Si les deux sont renseignes
		if($spe != "-" and $year != "-"){
			$req = "SELECT user.idUser, user.nameUser , user.firstNameUser 
					FROM user, student, speciality 
					WHERE user.idUser = student.FK_idUser 
					AND student.FK_idSpeciality = speciality.idSpeciality 
					AND speciality.idSpeciality = $spe 
					AND student.yearStu = $year 
					ORDER BY user.firstNameUser, user.nameUser";

			$res = mysqli_query($co, $req) or die('err_getStudents1');
			if (mysqli_num_rows($res) != 0) {
				$student = mysqli_fetch_all($res);
				return $student;
			}
		}else if($spe != "-" and $year == "-"){ //Si on renseigne seulement la specialite
			$req = "SELECT user.idUser, user.nameUser , user.firstNameUser 
					FROM user, student, speciality 
					WHERE user.idUser = student.FK_idUser 
					AND student.FK_idSpeciality = speciality.idSpeciality 
					AND speciality.idSpeciality = $spe 
					ORDER BY user.firstNameUser, user.nameUser";

			$res = mysqli_query($co, $req) or die('err_getStudents2');
			if (mysqli_num_rows($res) != 0) {
				$student = mysqli_fetch_all($res);
				return $student;
			}
	
		}
		else if($spe == "-" and $year != "-"){ //Si on renseigne seulement l'annee
			$req = "SELECT user.idUser, user.nameUser , user.firstNameUser 
					FROM user, student, speciality 
					WHERE user.idUser = student.FK_idUser 
					AND student.FK_idSpeciality = speciality.idSpeciality 
					AND student.yearStu = $year 
					ORDER BY user.firstNameUser, user.nameUser";

			$res = mysqli_query($co, $req) or die('err_getStudents3');
			if (mysqli_num_rows($res) != 0) {
				$student = mysqli_fetch_all($res);
				return $student;
			}
		}else{ // Si rien n'est renseigne
			return null;
		}
	}

	//return student data 
	//$id = int from 1 to 99999999999
	function getStudent($id){
		require('db.php');
		$res = mysqli_query($co, "SELECT nameUser, firstNameUser, mailUser, pwdUser
									FROM user
									Where idUser = $id") or die('err_getStudent');

		if (mysqli_num_rows($res) != 0) {
			$stu =  mysqli_fetch_all($res);
			return $stu;
		}
	}