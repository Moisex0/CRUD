<?php

include("conexion.php");

//obtener el id de la calificación :)
$id_alumno = $_GET['id'] ?? null;

if ($id_alumno) {
    //esto elimina la calificacion directamente :)
    $query = "DELETE FROM alumnos WHERE id_alumno = $1";
    $resultado = eliminar($query, [$id_alumno]);

    if (!$resultado) {
        echo "error al eliminar: " . pg_last_error($con);
        exit();
    }
}

//redirige al index :)
header("Location: index.php");
exit();

?>