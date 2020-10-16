<?php 

	$conexion=mysqli_connect('localhost','root','12345','sistema_biblioteca');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body bgcolor="#ABEBC6">
<center><h1>Sistema biblioteca realizado por Jose Rodriguez.</h1></center>
<br>
<center><h3>Tabla libros</h3></center>
	<center><table border="1" >
		<tr>
			<td>IdLIbro</td>
			<td>Titulo</td>
			<td>ISBN</td>
			<td>Editorial</td>
			<td>NumPags</td>	
		</tr>

		<?php 
		$sql="SELECT * from libro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdLibro'] ?></td>
			<td><?php echo $mostrar['Titulo'] ?></td>
			<td><?php echo $mostrar['ISBN'] ?></td>
			<td><?php echo $mostrar['Editorial'] ?></td>
			<td><?php echo $mostrar['NumPags'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</center>
<br>
<center><h3>Tabla Autor</h3></center>
	<center><table border="1" >
		<tr>
			<td>IdAutor</td>
			<td>Nombre</td>
			<td>Nacionalidad</td>	
		</tr>

		<?php 
		$sql="SELECT * from autor";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdAutor'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Nacionalidad'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</center>

<br>
<center><h3>Tabla Usuarios</h3></center>
	<center><table border="1" >
		<tr>
			<td>IdUsuario</td>
			<td>NIF</td>
			<td>Nombre</td>	
			<td>Direccion</td>	
			<td>Telefono</td>	
		</tr>

		<?php 
		$sql="SELECT * from Usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdUsuario'] ?></td>
			<td><?php echo $mostrar['NIF'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['Direccion'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</center>

<br>
<center><h3>Tabla Prestamos</h3></center>
	<center><table border="1" >
		<tr>
			<td>IdPrestamo</td>
			<td>IdLibro</td>
			<td>IdUsuario</td>	
			<td>FecPrestamos</td>	
			<td>FecDevolucion</td>	
		</tr>

		<?php 
		$sql="SELECT * from Prestamos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdPrestamos'] ?></td>
			<td><?php echo $mostrar['IdLibro'] ?></td>
			<td><?php echo $mostrar['IdUsuario'] ?></td>
            <td><?php echo $mostrar['FecPrestamos'] ?></td>
			<td><?php echo $mostrar['FecDevolucion'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</center>
</body>
</html>

