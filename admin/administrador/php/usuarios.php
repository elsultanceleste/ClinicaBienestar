<?php
require_once('../config/conexion.php');

if ($_POST['accion'] == 'cargar') {
    $query = "SELECT 
    u.cod_usuario,
    u.correo,
    r.nombre AS rol,
    CASE 
        WHEN u.estado = 1 THEN 'Activo'
        WHEN u.estado = 0 THEN 'Inactivo'
        ELSE 'Desconocido'
    END AS estado,
    CASE 
        WHEN u.id_paciente IS NOT NULL THEN CONCAT(p.nombre, ' ', p.apellido)
        WHEN u.id_empleado IS NOT NULL THEN CONCAT(e.nombre, ' ', e.apellido)
        ELSE 'Sin propietario'
    END AS propietario
FROM 
    usuario u
LEFT JOIN pacientes p ON u.id_paciente = p.id
LEFT JOIN empleados e ON u.id_empleado = e.id
LEFT JOIN rol r ON (p.id_rol = r.id OR e.id_rol = r.id)";
    $result = mysqli_query($conexion, $query);
    $datos = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $datos[] = $row;
    }
    echo json_encode($datos);
    mysqli_close($conexion);
}elseif($_POST['accion'] == 'cambiarEstado'){

    $id = $_POST['cod_usuario'];
    $estado = $_POST['estado']=== 'Activo' ? 1 : 0;
    $query = "UPDATE usuario SET estado = $estado WHERE cod_usuario = $id";
    $result = mysqli_query($conexion, $query);
    if($result){
        echo 'El estado se ha cambiado correctamente';
    }else{
        echo 'Error al cambiar el estado';
    }
    mysqli_close($conexion);
}
