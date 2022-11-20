<?php
include ('../config/connect.php');

$id=$_GET['id'];

$deleteperson=mysqli_query($connect,"DELETE FROM tbperson WHERE id=$id");

if ($deleteperson)
	echo "<script type='text/javascript'> alert('Data siswa berhasil dihapus'); 
	window.location='viewperson.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Data siswa gagal dihapus'); 
		 window.location='viewperson.php'; </script>";
?>
