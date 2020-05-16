<?php 
include '../model/database1.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'], $_POST['nim'], $_POST['jurusan'], $_POST['kelas']);
 	header("location:../view/tampil1.php");
 }
 elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../view/tampil1.php");
 }
 elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['nim'],$_POST['jurusan'],$_POST['kelas']);
 	header("location:../view/tampil1.php");
 }
?>