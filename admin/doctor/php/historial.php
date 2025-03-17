<?php
require('../../fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // Agregar el logo de la clínica
        $this->Image('../img/logoClinica2.png', 5, 2, 30);
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Clinica Bienestar - Historial del Paciente', 0, 1, 'C');
        $this->Ln(5);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }

    function DatosPaciente($datos)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Datos del Paciente', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(200, 255, 200); // Verde claro para encabezado
        
        foreach ($datos as $clave => $valor) {
            $this->Cell(50, 10, $clave, 1, 0, 'L', true);
            $this->Cell(140, 10, $valor, 1, 1, 'L');
        }
        $this->Ln(5);
    }

    function AntecedentesMedicos($antecedentes)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Antecedentes Medicos', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $antecedentes, 1, 'L');
        $this->Ln(5);
    }

    function ConsultasPrevias($consultas)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Consultas Previas', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(200, 255, 200); // Verde claro para encabezado
        
        $this->Cell(50, 10, 'Fecha', 1, 0, 'C', true);
        $this->Cell(70, 10, 'Motivo', 1, 0, 'C', true);
        $this->Cell(70, 10, 'Diagnostico', 1, 1, 'C', true);

        foreach ($consultas as $consulta) {
            $this->Cell(50, 10, $consulta['fecha'], 1, 0, 'C');
            $this->Cell(70, 10, $consulta['motivo'], 1, 0, 'C');
            $this->Cell(70, 10, $consulta['diagnostico'], 1, 1, 'C');
        }
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->DatosPaciente([
    'Nombre' => 'Juan Perez',
    'Edad' => '30',
    'Sexo' => 'Masculino',
    'Direccion' => 'Av. Siempre Viva 123',
    'Telefono' => '555-1234'
]);
$pdf->AntecedentesMedicos('Paciente con historial de hipertension y alergia a la penicilina.');
$pdf->ConsultasPrevias([
    ['fecha' => '2025-03-01', 'motivo' => 'Dolor de cabeza', 'diagnostico' => 'Migraña'],
    ['fecha' => '2025-02-15', 'motivo' => 'Chequeo general', 'diagnostico' => 'Salud estable'],
    ['fecha' => '2025-01-25', 'motivo' => 'Revision', 'diagnostico' => 'Migrana estable']

]);
$pdf->Output();
?>
