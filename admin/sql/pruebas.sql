SELECT
    e.id,
    e.nombre,
    r.nombre as rol
from
    empleados e
    INNER JOIN rol r ON e.id_rol = r.id
WHERE
    e.id = 3;

SELECT
    DATE_FORMAT(c.fecha_cita, '%M') AS mes,
    DATE_FORMAT(c.fecha_cita, '%m') AS num_mes,  -- Número del mes para ordenar correctamente
    COUNT(*) AS total
FROM
    citas c
    INNER JOIN medicos m ON c.medico_id = m.id
    INNER JOIN empleados e ON e.id = m.id_empleado
WHERE
    e.id = 3
    AND c.estado = 'Realizada'
GROUP BY
    DATE_FORMAT(c.fecha_cita, '%M'),
    DATE_FORMAT(c.fecha_cita, '%m')
ORDER BY
    num_mes ASC;

    SELECT * FROM medicos;

    SELECT * FROM usuario


SELECT * FROM usuario WHERE correo = 'zabusimaoluy@gmail.com';
SELECT id FROM medicos WHERE id_empleado = 3

SELECT 
     DATE_FORMAT(fecha_cita, '%M') AS mes,
    DATE_FORMAT(fecha_cita, '%m') AS num_mes,
    COUNT(*) AS total_citas_atendidas
FROM 
    citas
WHERE 
    medico_id = 1
    AND estado = 'Realizada'
GROUP BY 
    DATE_FORMAT(fecha_cita, '%Y-%m'),
    DATE_FORMAT(fecha_cita, '%m')
ORDER BY 
    num_mes ASC;

    DELETE FROM citas;


    -- Citas para el médico id 1 con diferentes pacientes y estados

INSERT INTO citas (paciente_id, medico_id, fecha_cita, motivo, tipo, estado) VALUES
(1, 1, '2025-01-05 09:00:00', 'Dolor ocular', 'Consulta', 'Programada'),
(2, 1, '2025-01-08 14:30:00', 'Examen de vista', 'Analisis', 'Realizada'),
(3, 1, '2025-01-10 10:15:00', 'Revisión postoperatoria', 'Revision', 'Programada'),
(4, 1, '2025-01-15 16:00:00', 'Consulta por migraña', 'Consulta', 'Cancelada'),
(5, 1, '2025-01-20 08:45:00', 'Control de presión ocular', 'Revision', 'Programada'),
(6, 1, '2025-01-25 11:00:00', 'Evaluación de lentes de contacto', 'Analisis', 'Programada'),
(7, 1, '2025-02-01 13:30:00', 'Chequeo anual', 'Consulta', 'Realizada'),
(8, 1, '2025-02-05 09:45:00', 'Dolor en los ojos al leer', 'Consulta', 'Programada'),
(9, 1, '2025-02-10 15:00:00', 'Seguimiento de tratamiento', 'Revision', 'Cancelada'),
(10, 1, '2025-02-12 17:00:00', 'Molestia en la visión nocturna', 'Analisis', 'Programada'),
(1, 1, '2025-02-18 10:30:00', 'Evaluación de glaucoma', 'Revision', 'Realizada'),
(2, 1, '2025-02-22 14:00:00', 'Revisión de graduación', 'Analisis', 'Programada'),
(3, 1, '2025-02-28 12:45:00', 'Consulta general', 'Consulta', 'Programada'),
(4, 1, '2025-03-02 08:00:00', 'Seguimiento de cirugía láser', 'Revision', 'Programada'),
(5, 1, '2025-03-05 09:15:00', 'Examen de retina', 'Analisis', 'Realizada'),
(6, 1, '2025-03-10 11:30:00', 'Chequeo de cataratas', 'Consulta', 'Programada'),
(7, 1, '2025-03-12 14:15:00', 'Control de miopía', 'Revision', 'Cancelada'),
(8, 1, '2025-03-18 16:45:00', 'Evaluación de estrabismo', 'Analisis', 'Programada'),
(9, 1, '2025-03-20 10:00:00', 'Revisión después de cirugía', 'Revision', 'Programada'),
(10, 1, '2025-03-25 12:00:00', 'Diagnóstico de conjuntivitis', 'Consulta', 'Realizada');


-- Cita sin motivo específico (usará valor por defecto en 'tipo')
INSERT INTO citas (paciente_id, medico_id, fecha_cita, estado) VALUES
(1, 1, '2023-12-01 08:30:00', 'Programada');

-- Cita cancelada con motivo
INSERT INTO citas (paciente_id, medico_id, fecha_cita, motivo, tipo, estado) VALUES
(2, 1, '2023-11-20 17:00:00', 'Fiebre alta', 'Consulta', 'Cancelada');

SELECT tipo, COUNT(*) AS cantidad
FROM citas
WHERE medico_id = 1
GROUP BY tipo;

SELECT 
    c.id, 
    DATE(c.fecha_cita) AS fecha, 
    TIME(c.fecha_cita) AS hora, 
    c.tipo, 
    c.motivo, 
    p.nombre
FROM 
    citas c
    INNER JOIN pacientes p ON c.paciente_id = p.id
    INNER JOIN medicos m ON c.medico_id = m.id
WHERE 
    DATE(c.fecha_cita) = CURDATE() 
    AND m.id = 1;

    INSERT INTO citas (paciente_id, medico_id, fecha_cita, motivo, tipo, estado) 
VALUES (5, 1, CURDATE() + INTERVAL 5 HOUR, 'Chequeo de visión', 'Consulta', 'Programada');


SELECT * FROM citas;