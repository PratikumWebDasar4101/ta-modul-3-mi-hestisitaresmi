<?php
	// $conn=mysql_connect("localhost", "root", "");
	// mysql_select_db("db_contact_us"); /*memilih database mana yang digunakan. */


	$host = "localhost";
	$username = "root";
	$password = "";
	$database   = "db_contact_us";

	try {

		$pdo = new PDO("mysql:host={$host}; dbname={$database};", $username, $password);
		$pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		
	} catch (PDOException $e) {
		print "Koneksi atau Query anda bermasalah : " . $e -> getMessage(). "<br>";
			die();

		
	}


?>