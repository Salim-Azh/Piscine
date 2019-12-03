<?php
//return all the tests existing in the database
	function getStudent( $spe, $year) {
		require('db.php');
		$req = "SELECT user.nameUser , user.firstNameUser FROM user, student, speciality WHERE user.idUser = student.FK_idUser AND student.FK_idSpeciality = speciality.idSpeciality AND speciality.idSpeciality = $spe AND student.yearStu = $year ORDER BY user.firstNameUser, user.nameUser";
		echo $req;
		$res = mysqli_query($co, $req) or die('err_getStudent');
		var_dump($res);
		if (mysqli_num_rows($res) != 0) {
			$student = mysqli_fetch_all($res);
			return $student;
		}
	}
?>