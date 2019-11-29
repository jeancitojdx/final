
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Formulario de votacion</title>
</head>
<body class="cul">
	<form method="post" action="sproceso.php" id="alt" >
		<h2 id="contac">Registro</h2>
	<table>
		<tr>
			<td>Nombre:</td>
			<td><input  type="text" name="nombre" placeholder="Nombre" ><br></td>
		</tr>
		
		<tr>
			<td>Apellido:</td>
			<td><input type="text" name="apellido" placeholder="Apellido"><br></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><input type="number" name="edad" placeholder="Edad"><br></td>
		</tr>
<tr>
			<td>Codigo:</td>
			<td><input type="number" name="codigo" placeholder="Codigo"><br></td>
		</tr>

		<tr>
			<td>Genero:</td>
			<td>Hombre <input type="radio" name="sexo" value="hombre"> 
				Mujer <input type="radio" name="sexo" value="mujer" ><br>
			</td>
		</tr>
		<tr>
			<td>Tragos favoritos:</td>
			<td>Ron <input type="checkbox" name="escuela" value="ron"> 
				Cerveza<input type="checkbox" name="escuela" value="cerveza" ><br>
			</td>
		</tr>
		<tr>
			<td>Eleccion: </td>
			<td><select name="partidos">
					<option>Fiestas unac</option>
					<option>Wifi unac libre toda app</option>
					<option>Full actividades deportivas</option>
				</select><br>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="" value="Guardar" ></td>
		</tr>
	</table>


</body>
</html>

