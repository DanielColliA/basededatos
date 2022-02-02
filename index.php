<!DOCTYPE html>
<html>
<head>
	<title>Registro de INE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: white">
    <form method="post">
	<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">Registro de INE</div>
				<div class="panel panel-body">
					<form id="frmRegistro">
					<label>Nombre</label>
					<input type="text" class="form-control input-sm" name="nombre">

					<label>Apellido</label>
					<input type="text" class="form-control input-sm" name="apellido">

					<label>fechanacimiento</label>
					<input type = "date" class="form-control input-sm" name="fechanacimiento">

					<label>CURP</label>
					<input type = "varchar" class="form-control input-sm" name= "CURP">
					
					<label>Direccion</label>
					<input type="varchar" class="form-control input-sm" name="direccion">
					
					sexo
						<select name = "sexo"> 
						<option> Femenino </option>
						<option> Masculino </opiton>
					</select>

					<label>cod_estado</label>
					<input type = "text" class="form-control input-sm" name= "cod_estado">

					estado
						<select name = "estado"> 
						<option> Selecciona un estado </option>	
						<option> Aguascaliente </option>
						<option> Baja California </opiton>
						<option> Baja California Sur </option>
						<option> Campeche </opiton>
						<option> Chihuahua </option>
						<option> Chiapas </opiton>
						<option> Ciudad de Mexico </option>
						<option> Coahuila </opiton>
						<option> Colima </option>
						<option> Durango </opiton>
						<option> Guanajuato </option>
						<option> Guerrero </opiton>
						<option> Hidalgo </option>
						<option> Jalisco </opiton>
						<option> Mexico </option>
						<option> Michoacan </opiton>
						<option> Morelos </option>
						<option> Nayarit </opiton>
						<option> Nuevo Leon </option>
						<option> Oaxaca </opiton>
						<option> Puebla </option>
						<option> Queretaro </opiton>
						<option> Quintana Roo </option>
						<option> San Luis Potosi </opiton>
						<option> Sinaloa </option>
						<option> Sonora </opiton>
						<option> Tabasco </option>
						<option> Tamaulipas </opiton>
						<option> Tlaxcala </option>
						<option> Veracruz </opiton>
						<option> Yucatan </option>
						<option> Zacatecas </opiton>
					</select>

					<label>codmunicipios</label>
					<input type = "text" class="form-control input-sm" name= "codmunicipios">

					<label>municipios</label>
					<input type = "text" class="form-control input-sm" name= "municipios">

					<label>codigopostal</label>
					<input type = "text" class="form-control input-sm" name= "codigopostal">

					<label>ElectorKey</label>
					<input type = "text" class="form-control input-sm" name= "ElectorKey">

					<label>seccion</label>
					<input type = "text" class="form-control input-sm" name= "seccion">

					<label>fecharegistro</label>
					<input type = "year" class="form-control input-sm" name= "fecharegistro">

					<label>fechaexpedicion</label>
					<input type = "year" class="form-control input-sm" name= "fechaexpedicion">

					<label>fechaexpiracion</label>
					<input type = "year" class="form-control input-sm" name= "fechaexpiracion">

					<label>serialnumber</label>
					<input type = "varchar" class="form-control input-sm" name= "serialnumber">

					<p></p>	
					<input type="submit" name="register">

					</form>
					<div style="text-align: right;">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>