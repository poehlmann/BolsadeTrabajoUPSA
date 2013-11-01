<?php

include 'conexionMySql.php';

    $conx = new  mysql;
    $conx->connect();
    $conx->select("dbprueba");
    $sqlQry="select * from personas";
    $sqlDt = $conx->query($sqlQry)  or die('Error. '.mysql_error());

?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Email</td>
        <td>ATrab</td>
        <td>Editar</td>
	</tr>
<?php
  while($row = mysql_fetch_array($sqlDt)){
  echo "<tr>";
  	echo "<td>".$row['nombre']."</td>";
  	echo "<td>".$row['apellido']."</td>";
  	echo "<td>".$row['mail']."</td>";
    echo "<td>".$row['idTrb']."</td>";
    echo "<td><a href='#'>Editar</a></td>";
    echo "</tr>";

  }
?>
</table>