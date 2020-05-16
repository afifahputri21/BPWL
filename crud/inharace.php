<?php 

class manusia{
 
	public $nama_saya;	
 
	function berinama($saya){
		$this->nama_saya=$saya;
	}
	
}
 
class teman extends manusia{
 
	public $nama_teman;

	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}
 
$malasngoding = new teman;
 

$malasngoding->berinama(" Afifah ");
$malasngoding->berinamateman(" Latifah ");
 
// menampilkan isi property
echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;
 
?>