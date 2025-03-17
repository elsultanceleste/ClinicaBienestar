<?php
require_once('../config/conexion.php');

if ($_POST['accion'] == 'traerRoles') {
    $sql = "SELECT * FROM rol";
    $resul = mysqli_query($conexion, $sql);
    $datos = array();
    while ($fila = mysqli_fetch_assoc($resul)) {
        $datos[] = $fila;
    }
    echo json_encode($datos);
    mysqli_close($conexion);

} elseif ($_POST['accion'] == 'nuevoEmpleado') {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellidos']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $rol = mysqli_real_escape_string($conexion, $_POST['rol']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    
    // Iniciar transacción
    mysqli_begin_transaction($conexion);

    try {
        // Insertar en la tabla empleado
        $sqlEmpleado = "INSERT INTO empleados (nombre, apellido, telefono, direccion, id_rol, email) 
                        VALUES ('$nombre', '$apellido', '$telefono', '$direccion', '$rol', '$correo')";
        if (!mysqli_query($conexion, $sqlEmpleado)) {
            throw new Exception("Error al insertar en empleado: " . mysqli_error($conexion));
        }

        // Obtener el ID del nuevo empleado
        $id_empleado = mysqli_insert_id($conexion);

        // Verificar si el rol es "Medico"
        $sqlRol = "SELECT nombre FROM rol WHERE id = '$rol'";
        $resRol = mysqli_query($conexion, $sqlRol);
        $rolEmpleado = mysqli_fetch_assoc($resRol);

        if ($rolEmpleado['nombre'] == 'Medico') {
            $especialidad = mysqli_real_escape_string($conexion, $_POST['especialidad']);
            $sqlMedico = "INSERT INTO medicos (especialidad, id_empleado) VALUES ('$especialidad', '$id_empleado')";
            if (!mysqli_query($conexion, $sqlMedico)) {
                throw new Exception("Error al insertar en medico: " . mysqli_error($conexion));
            }
        }

        // Generar y encriptar contraseña
        $contraseña_plana = bin2hex(random_bytes(4));
        $contraseña_encriptada = password_hash($contraseña_plana, PASSWORD_DEFAULT);

        // Insertar en la tabla usuario
        $sqlUsuario = "INSERT INTO usuario (correo, passwd, id_empleado) VALUES ('$correo', '$contraseña_encriptada', '$id_empleado')";
        if (!mysqli_query($conexion, $sqlUsuario)) {
            throw new Exception("Error al insertar en usuario: " . mysqli_error($conexion));
        }

        // Confirmar la transacción
        mysqli_commit($conexion);

        // Enviar correo de bienvenida
        $asunto = "Bienvenido a la Plataforma";
        $para = $correo;
        $encabezado = "MIME-Version: 1.0\r\n";
        $encabezado .= "Content-type:text/html;charset=UTF-8\r\n";
        $encabezado .= "From: Sistema de Gestión <noreply@tuservidor.com>\r\n";

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bienvenido</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f1f1f1;">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f1f1f1; padding: 20px;">
            <tr>
                <td align="center">
                    <table role="presentation" width="500" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 20px; text-align: center;">
                        <tr>
                            <td>
                                <h1>Bienvenido, ' . $nombre . '</h1>
                                <p>Gracias por registrarte en nuestra plataforma. A continuación, tus datos de acceso:</p>
                                <p>
                                    <strong>Usuario:</strong> ' . $correo . '<br>
                                    <strong>Contraseña:</strong> ' . $contraseña_plana . '
                                </p>
                                <p>Si no has solicitado la verificación, ignora este mensaje.</p>
                                <p>Para cualquier consulta, contáctanos.</p>
                                <p style="margin-top: 20px; font-weight: bold;">Clinica Bienestar</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        </body>
        </html>
        ';

        if (mail($para, $asunto, $cuerpo, $encabezado)) {
            echo json_encode(["estado" => "exitoso", "mensaje" => "Empleado registrado correctamente y correo enviado"]);
        } else {
            echo json_encode(["estado" => "alerta", "mensaje" => "Empleado registrado, pero no se pudo enviar el correo"]);
        }

    } catch (Exception $e) {
        // Si ocurre un error, revertir la transacción
        mysqli_rollback($conexion);
        echo json_encode(["estado" => "error", "message" => $e->getMessage()]);
    }

    // Cerrar conexión
    mysqli_close($conexion);
}elseif($_POST['accion'] == 'cargarEmpleados'){
    $sql = "SELECT e.id, e.nombre, e.apellido,e.email, r.nombre AS rol, e.telefono, e.direccion, m.especialidad
    FROM empleados e
    INNER JOIN rol r ON e.id_rol = r.id
    LEFT JOIN medicos m ON e.id = m.id_empleado
    ORDER BY e.id
    "
    
    ;
    $resul = mysqli_query($conexion, $sql);
    $datos = array();
    while ($fila = mysqli_fetch_assoc($resul)) {
        $datos[] = $fila;
    }
    echo json_encode($datos);
    mysqli_close($conexion);
}
?>
