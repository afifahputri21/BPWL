<?php
 
class manusia{
    
    var $nama, $umur;
    
    function showName()
    {
        return "Nama Saya Afifah Putri </br>";
    }
    function showOld()
    {
        return "Umur saya 18 tahun </br>";
    }
    
}
$human = new human();

echo $human-> showName();
echo $human-> showOld();
