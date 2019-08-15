<?php

echo "HOLA";



	include('conexion.php');
	$empresa=$_POST['inputEmpresa'];
	$fecha_prueba="2019-08-13";
	$actividad=$_POST['inputActividad'];
	$archivo=$_FILES['archivo'];
	$gestion=$_POST['inputTexto'];
	//$fecha=$_POST['fecha'];


	//variables que preparan la Ubicacion del archivo
	$nom_archivo=$archivo['name'];
	$ruta="archivos/".$nom_archivo;

	if (move_uploaded_file($archivo['tmp_name'],$ruta)) {

		//envio de datos a la BD
		$query="insert into actividades(empresa,fecha,actividad,ruta_imagen,texto) values('$empresa','$fecha_prueba','$actividad','$ruta','$gestion')";
		$result	= mysqli_query($connection,$query);
		if ($result) {
			echo "Datos guardados correctamente";
		}



	}



?>
