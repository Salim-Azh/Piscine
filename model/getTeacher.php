<?php
//return all the tests existing in the database
	function getTeacher() {
		require('db.php');
	
		$req = "SELECT user.nameUser , user.firstNameUser, user.mailUser, user.idUser FROM user, teacher WHERE user.idUser = teacher.FK_idUser AND teacher.isConfirm = 0 ORDER BY user.firstNameUser, user.nameUser";
		$res = mysqli_query($co, $req) or die('err_getTeacher');
		if (mysqli_num_rows($res) != 0) {
			$student = mysqli_fetch_all($res);
			return $student; 
		}
	}
?>