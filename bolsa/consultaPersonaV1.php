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
		<td>CI</td>
        <td>Nombre</td>
		<td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Telef Casa</td>
        <td>Telef Celular</td>
        <td>Direccion</td>
		<td>Email</td>
        <td>ATrab</td>
        <td>Editar</td>
        <td>Borrar</td>
	</tr>
<?php

$campos = array(
	'ci',
	'nombre',
	'apellidopaterno',
	'apellidomaterno',
	'telfcasa',
	'celular',
	'direccion',
	'email',
	'idTrb'
);

$contador = 0;

while($row = mysql_fetch_array($sqlDt)) {
	echo '<tr id="persona-', $contador, '">';
	
	foreach ($campos as $campo) {
		echo '<td data-campo="', $campo, '">', $row[$campo], '</td>';
	}
	
	echo '<td><a href="javascript:editarPersona(', $contador, ')">Editar</a></td>';
	echo "<td><a href='#'>Borrar</a></td>";
	echo "</tr>";
	
	++$contador;
}
?>

<script>
function editarPersona(idcont) {
	var tr = $('#persona-' + idcont);
	
	tr.children('td[data-campo]').each(function () {
		var $this = $(this);
		var campo = $this.data('campo');
		
		$('input[name=' + campo + ']').val($this.text());
	});
}
</script>

</table>