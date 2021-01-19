
<?php 
  include ("conexiune.php");
  $sql=mysqli_query($conexiune, "SELECT * FROM categorii");
  echo "<table>";
 
  while ($row=mysqli_fetch_row($sql)) {
  echo  "<tr><td>$row[1]</td></tr>";
  }
  echo "</table>";
  mysqli_close($conexiune);
?>
