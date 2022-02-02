<?php
include("con_db.php");

if (isset($_POST['register'])) {
	if (
		strlen($_POST['nombre']) >= 1 &&
		strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['fechanacimiento']) >= 1 &&
		strlen($_POST["CURP"]) >= 1 &&
		strlen($_POST["direccion"]) >= 1 &&
		strlen($_POST["ElectorKey"]) >= 1 &&
		strlen($_POST["seccion"]) >= 1 &&
		strlen($_POST["fecharegistro"]) >= 1 &&
		strlen($_POST["fechaexpedicion"]) >= 1 &&
		strlen($_POST["fechaexpiracion"]) >= 1 &&
		strlen($_POST['serialnumber']) >= 1 &&
		strlen($_POST['cod_estado']) >= 1 &&
		strlen($_POST['estado']) >= 1 &&
		strlen($_POST['codmunicipios']) >= 1 &&
		strlen($_POST['municipios']) >= 1 &&
		strlen($_POST['codigopostal']) >= 1 &&
		strlen($_POST['sexo']) >= 1

				
	) 
	{
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$fechanacimiento = trim ($_POST['fechanacimiento']);
		$CURP = trim ($_POST['CURP']);
		$direccion = trim ($_POST['direccion']);
		$ElectorKey = trim ($_POST['ElectorKey']);
		$seccion =trim ($_POST['seccion']);
		$fecharegistro = trim ($_POST['fecharegistro']);
		$fechaexpedicion = trim ($_POST['fechaexpedicion']);
		$fechaexpiracion = trim ($_POST['fechaexpiracion']);
		$serialnumber = trim ($_POST['serialnumber']);
		$cod_estado = trim ($_POST['cod_estado']);
		$estado = trim ($_POST['estado']);
		$codmunicipios = trim ($_POST['codmunicipios']);
		$municipios = trim ($_POST['municipios']);
		$codigopostal  = trim ($_POST['codigopostal']);
		$sexo = trim($_POST['sexo']);


		$consulta = "INSERT INTO personas (nombre, apellido, fechanacimiento, CURP, direccion, sexo) VALUES ('$nombre', '$apellido','$fechanacimiento', '$CURP','$direccion', '$sexo')";
		$consulta2 = "INSERT INTO ine (ElectorKey, seccion, fecharegistro, fechaexpedicion, fechaexpiracion, serialnumber) VALUES ('$ElectorKey', '$seccion', '$fecharegistro', '$fechaexpedicion', '$fechaexpiracion', '$serialnumber')";
		$consulta3 = "INSERT INTO estados(cod_estado, estado) VALUES ('$cod_estado', '$estado')";
		$consulta4 = "INSERT INTO municipios (codmunicipios, municipios, codigopostal) VALUES ('$codmunicipios', '$municipios', '$codigopostal')";
		$resultado = mysqli_query($conexion, $consulta);
		$resultado2 = mysqli_query($conexion, $consulta2);
		$resultado3 = mysqli_query($conexion, $consulta3);
		$resultado4 = mysqli_query($conexion, $consulta4);
		if ($resultado) {
?>
			<h3 class="ok">¡Gracias hemos guardado sus datos!</h3>
		<?php
		} else {
		?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
		}
	} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
<?php
	}
}

?>