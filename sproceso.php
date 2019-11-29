<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="kha">
 <?php 

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "alumnos";

$conexion = mysqli_connect($servername, $username, $password, $dbname)
or die ("Error en la conexion");

$n= $_POST["nombre"];
$a= $_POST["apellido"];
$e= $_POST["edad"];
$c= $_POST["codigo"];
$s= $_POST["sexo"];
$p= $_POST["partidos"] ;
$u = $_POST["escuela"];
$insertar = "INSERT into alumno(nombre,apellido,edad,codigo,sexo,tragos,eleccion)values('$n','$a','$e','$c','$s','$u','$p')";
$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar los registros");
echo "Datos insertados";


  ?>

<br><br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>edad</td>
			<td>codigo</td>
			<td>sexo</td>	
			<td>tragos</td>
			<td>eleccion</td>			
		</tr>

		<?php 
		
		$sql="SELECT * from alumno";

		$result=mysqli_query($conexion,$sql);

		while($mostrar = mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_alumno']?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['edad']?></td>
			<td><?php echo $mostrar['codigo'] ?></td>
			<td><?php echo $mostrar['sexo']?></td>
			<td><?php echo $mostrar['tragos'] ?></td>
			<td><?php echo $mostrar['eleccion'] ?></td>
			
			
		</tr>
	<?php 
	}
	mysqli_close($conexion);
	 ?>
	</table>

</body>
</html>


