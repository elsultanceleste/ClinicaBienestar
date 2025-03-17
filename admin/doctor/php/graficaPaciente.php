<?php
require_once('../config/conexion.php');

if (isset($_POST['id_medico']) && $_POST['accion'] == 'antendidos') {
    $id_medico = $_POST['id_medico'];
    $sql = "
    SELECT 
     DATE_FORMAT(fecha_cita, '%M') AS mes,
    DATE_FORMAT(fecha_cita, '%m') AS num_mes,
    COUNT(*) AS total
FROM 
    citas
WHERE 
    medico_id = '$id_medico'
    AND estado = 'Realizada'
GROUP BY 
    DATE_FORMAT(fecha_cita, '%Y-%m'),
    DATE_FORMAT(fecha_cita, '%m')
ORDER BY 
    num_mes ASC;
   ";
    $result = mysqli_query($conexion, $sql);
    $citas = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $citas[] = $row;
    }
    echo json_encode($citas);
} elseif (isset($_POST['id_medico']) && $_POST['accion'] == 'citas') {

    $id_medico = $_POST['id_medico'];

    $sql = "SELECT tipo, COUNT(*) AS cantidad FROM citas WHERE medico_id = '$id_medico' GROUP BY tipo;";
    $result = mysqli_query($conexion, $sql);
    $citas = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $citas[] = $row;
    }
    echo json_encode($citas);
}
