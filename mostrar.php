<?php

  include('conexion.php');

  $empresa=$_POST['inputEmpresa'];
  $actividad=$_POST['inputActividad'];
  if (!$empresa=="" or !$actividad=="") {
    $query="select * from actividades where empresa like '$empresa%' and actividad like '$actividad%'";
    $resultado=mysqli_query($connection,$query);

    if (!$resultado) {
      echo "Falla en la consulta";
    }

    $json=array();
    while ($fila=mysqli_fetch_array($resultado) ) {
      $json[] = array(
        'empresa' => $fila['empresa'],
        'fecha' => $fila['fecha'],
        'actividad' => $fila['actividad'],
        'ruta_imagen' => $fila['ruta_imagen'],
        'texto' => $fila['texto']

      );


    }



    $jsonstring= json_encode($json);
    echo $jsonstring;
  }


?>
