<?php

//conexion
$con = pg_connect("host=dpg-d4kt6j8gjchc73adbf0g-a.oregon-postgres.render.com port=5432 user=sistemaalumnos_user password=G64P48FzjRsysZNnjIyVWLBLXaSurw8h dbname=sistemaalumnos");

if (!$con) {
    echo "No se pudo conectar con la base de datos :( " . pg_last_error();
    exit();
}

//insertar
function insertar($query, $datos = []) {
    global $con;
    return pg_query_params($con, $query, $datos);
}

//eliminar
function eliminar($query, $datos = []) {
    global $con;
    return pg_query_params($con, $query, $datos);
}

//modificar
function modificar($query, $datos = []) {
    global $con;
    return pg_query_params($con, $query, $datos);
}

//seleccionar
function seleccionar($query, $datos = []) {
    global $con;
    $result = pg_query_params($con, $query, $datos);
    if (!$result) {
        echo "Error en la consulta: " . pg_last_error($con);
        return [];
    }
    $data = pg_fetch_all($result);
    return $data ?: []; 
}

?>
