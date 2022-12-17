<?php 

require 'vendor/autoload.php';
require 'includes/config/conexion.php';


use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};


$sql = "SELECT id, Nombre, Ape_Paterno, Ape_Materno, Edad, Genero, T_Doc, Nr_Doc, Fecha_Nacimiento, Telefono, Fecha_Creacion, Estado, id_login FROM paciente";
$resultado = $mysqli->query($sql);

$excel = new SpreadSheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Paciente");

$hojaActiva->setCellValue('A1' , 'ID');
$hojaActiva->setCellValue('B1' , 'Nombre');
$hojaActiva->setCellValue('C1' , 'Ape_Paterno');
$hojaActiva->setCellValue('D1' , 'Ape_Materno');
$hojaActiva->setCellValue('E1' , 'Edad');
$hojaActiva->setCellValue('F1' , 'Genero');
$hojaActiva->setCellValue('G1' , 'T_Doc');
$hojaActiva->setCellValue('H1' , 'Nr_Doc');
$hojaActiva->setCellValue('I1' , 'Fecha_Nacimiento');
$hojaActiva->setCellValue('J1' , 'Telefono');
$hojaActiva->setCellValue('K1' , 'Fecha_Creacion');
$hojaActiva->setCellValue('L1' , 'Estado');
$hojaActiva->setCellValue('M1' , 'id_login');

$fila = 2;

while($rows = $resutado->fetch_assoc()){
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['Nombre']);
    $hojaActiva->setCellValue('C'.$fila, $rows['Ape_Paterno']);
    $hojaActiva->setCellValue('I'.$fila, $rows['Ape_Materno']);
    $hojaActiva->setCellValue('D'.$fila, $rows['Edad']);
    $hojaActiva->setCellValue('E'.$fila, $rows['Genero']);
    $hojaActiva->setCellValue('F'.$fila, $rows['T_Doc']);
    $hojaActiva->setCellValue('G'.$fila, $rows['Nr_Doc']);
    $hojaActiva->setCellValue('H'.$fila, $rows['Fecha_Nacimiento']);
    $hojaActiva->setCellValue('J'.$fila, $rows['Telefono']);
    $hojaActiva->setCellValue('K'.$fila, $rows['Fecha_Creacion']);
    $hojaActiva->setCellValue('L'.$fila, $rows['Estado']);
    $hojaActiva->setCellValue('M'.$fila, $rows['id_login']);

$fila++;
    
}

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="paciente.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;


