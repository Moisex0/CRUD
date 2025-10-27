<?php

//conexion
$con = pg_connect("host=localhost port=5432 user=postgres password=msh79000 dbname=sistema_alumnos");

if (!$con) {
    echo "No se pudo conectar con la base de datos :( " . pg_last_error();
    exit();
}

//insertar
function insertar($query, $datos){
    global $con;
    $prepare = pg_prepare($con, "insert", $query);
    $result = pg_execute($con, "insert", $datos);

    pg_close($con);
    return $result;
}

//eliminar
function eliminar($query, $datos){
    global $con;
    $prepare = pg_prepare($con, "delete", $query);
    $result = pg_execute($con, "delete", $datos);

    pg_close($con);
    return $result;
}

//modificar
function modificar($query, $datos){
    global $con;
    $prepare = pg_prepare($con, "update", $query);
    $result = pg_execute($con, "update", $datos);

    pg_close($con);
    return $result;
}

//seleccionar
function seleccionar($query, $datos){
    global $con;
    $prepare = pg_prepare($con, "select", $query);
    $result = pg_execute($con, "select", $datos);

    $data = pg_fetch_all($result);

    pg_close($con);
    return $data;
}

?>
