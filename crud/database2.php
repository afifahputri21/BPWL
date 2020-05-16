<?php 
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "test";
 	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}
 
	function tampil_data(){
		$data = mysqli_query($this->con,"SELECT * from sim");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
 
	}
 
	function input($nama,$agama,$nik){
		mysqli_query($this->con,"INSERT into user values('','$id','$nama','$agama', '$nik')");
	}
 
	function hapus($id){
		mysqli_query($this->con,"DELETE from user where id='$id'");
	}
 
	function edit($id){
		$data = mysqli_query($this->con,"select * from sim where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
	function update($id,$nama,$agama,$nik){
		mysqli_query($this->con,"update user set id='$nama', agama='$agama', nik='$nik','where id='$id'");
	}
 
} 
 
?>