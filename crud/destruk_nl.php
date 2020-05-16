<?php
class orang{
public $nama_saya;	
 
	function berinama($saya){
		$this->nama_saya=$saya;
	}
	
}

class teman extends orang{

	public $nama_teman;

	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}
 
$malasngoding = new teman;
 
$malasngoding->berinama(" Nur Latifah ");
$malasngoding->berinamateman(" Afifa ");
 

echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;
 
?>
