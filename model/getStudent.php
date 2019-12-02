<?php
//return all the tests existing in the database
	function getStudent() {
		require('db.php');
		$req = "SELECT  FK_idUser, FK_idSpeciality, yearStu FROM student";
		$res = mysqli_query($co, $req) or die('err_getStudent');

		if (mysqli_num_rows($res) != 0) {
			$student = mysqli_fetch_all($res);
			return $student;
		}
	}
//fonction qui va renvoyer un tableau d'id en fonction d'une spécialité et d'une année
	function getId($student, $spe, $year){
		$res = [];
		foreach ($student as $row) {
			if ($row[1] == $spe and $row[2] == $year){
				$res[] =  $row[0];
			}
			
		}
		return $res;
	}

//return names corresponding with id tab
	function getName($tabId){
		require('db.php');
		$name = array();
		$student = array();
		foreach ($tabId as $row) {
				$req = "SELECT nameUser, firstNameUser FROM user WHERE idUser LIKE $row ";
				$res = mysqli_query($co, $req) or die('err_getName');
				$student[] = mysqli_fetch_all($res);

		}
		
		return $student;
		
		
	}
?>