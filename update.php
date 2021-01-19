
<?php 
include "conexiune.php";
$produs_id=$_GET['id'];
$produse=mysqli_query($conexiune, "SELECT * FROM produse WHERE id= '$produs_id'");
$produse=mysqli_fetch_assoc($produse);
 ?>
<h3>Editare date</h3>
	<form action="update_exec.php" method="POST">
		<input type="hidden" name="id" value="<?= $produse['id']?>">
		<span>Producator</span><input type="text" name="producator" value="<?= $produse['producator']?>">
		<br>
		<span>Model</span><input type="text" name="model" value="<?= $produse['model']?>">
			<br>
			<span>Pret</span><input type="text" name="pret" value="<?= $produse['pret']?>">
			<br>
		<textarea name="descriere" id="" cols="30" rows="10"><?= $produse['descriere']?></textarea>
			<br>
		<span>Poza</span><input type="text" name="poza">
			<br>
        <input type="Submit" value="Adaugare">
	</form>