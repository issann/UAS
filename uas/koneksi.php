<?php
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db		= "uas";
	
	$conn 	= mysqli_connect($host,$user,$pass,$db);
	if ($conn==false) {
		echo "koneksi server gagal";
		die();
		}
		else 
		{
		//echo "koneksi Berhasil";
		}
?>