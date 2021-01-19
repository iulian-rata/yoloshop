<?php 


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel | Yolo Shop</title>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>ID</th>
			<th>Producator</th>
			<th>Model</th>
			<th>Pret</th>
			<th>Descriere</th>
			<th>Imagine</th>
		</tr>
        
        <?php
        include ("conexiune.php");
        $produse=mysqli_query($conexiune, "SELECT * FROM produse");
         while ($row=mysqli_fetch_row($produse)) {
         	?>
         <tr>
         <td><?= $row[0] ?></td>
         <td><?= $row[1] ?></td>
         <td><?= $row[2] ?></td>
         <td><?= $row[3] ?></td>
         <td><?= $row[4] ?></td>
         <td><a href="update.php?id=<?= $row[0] ?>">Update</a></td>
         <td><a href="delete.php?id=<?= $row[0] ?>" style="color: red">Delete</a></td>
        
  
  </tr>
  <?php
  }
        
        

        ?>


		<tr>
			
		</tr>
	</table>
	<hr>
	<h3>Adaugare date</h3>
	<form action="create.php" method="POST">
		<span>Producator</span><input type="text" name="producator">
		<br>
		<span>Model</span><input type="text" name="model">
			<br>
			<span>Pret</span><input type="text" name="pret">
			<br>
		<textarea name="descriere" id="" cols="30" rows="10"></textarea>
			<br>
		<span>Poza</span><input type="text" name="poza">
			<br>
        <input type="Submit" value="Adaugare">
	</form>
	<br>
	<br>
	<br>
<table border="1px solid black">
	<tr>
		<td>ID</td>
		<td>Nume</td>
		<td>Email</td>
		<td>Subiect</td>
		<td>Mesaj</td>
		
	</tr>
	<?php
        include ("conexiune.php");
        $contact=mysqli_query($conexiune, "SELECT * FROM contact");
         while ($row=mysqli_fetch_row($contact)) {
         	?>
         <tr>
         <td><?= $row[0] ?></td>
         <td><?= $row[1] ?></td>
         <td><?= $row[2] ?></td>
         <td><?= $row[3] ?></td>
         <td><?= $row[4] ?></td>
         <td><a href="delete_contact.php?id=<?= $row[0] ?>" style="color: red">Delete</a></td>
        
  
  </tr>
  <?php
  }
        
        

        ?>
    </table>
</body>
</html>