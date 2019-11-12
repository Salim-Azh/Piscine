<?php
//return all the tests existing in the database
	function getTest() {
		require('db.php');
		$req = "SELECT idTest, nameTest FROM test";
		$res = mysqli_query($co, $req) or die('err_getTest');

		if (mysqli_num_rows($res) != 0) {
			$test = mysqli_fetch_all($res);
			return $test;
		}
	}
?>