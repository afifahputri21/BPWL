<?php 
include 'database2.php';
$db = new database();
?>
 
<h1>CRUD OOP PHP</h1>
<h2>EDIT REGIS SIM</h2>

<form action="proses2.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td><input type="text" name="agama" value="<?php echo $d['agama'] ?>"></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td><input type="number" name="nik" value="<?php echo $d['nik'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>