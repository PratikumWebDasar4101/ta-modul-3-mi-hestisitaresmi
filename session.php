<?php
 	session_start();

 	$user=strlen($_POST['username']) ? $_POST['username'] : "Inputan tidak boleh kosong" ;
	$pass=strlen($_POST['password']) ? $_POST['password'] : "Inputan tidak boleh kosong" ;

 	if($user == "admin" && $pass == "12345"){
 		$_SESSION["user"] = $user;
 		header("Location: awal.php");
 	}else{
 		echo "Maaf, username dan password anda salah!";
 	}



?>