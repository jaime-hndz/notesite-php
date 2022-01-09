
<?php

session_start();
date_default_timezone_set("America/Santo_Domingo");
require_once 'conn.php';

if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'student') {

  $query = "SELECT * FROM users_student WHERE email = '". $_SESSION['email'] ."'";
  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);

  $id = $row['id'];
  $seccion = $row['seccion'];

}else {
  header('location:index.php');
}

require 'includes/phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists($dir))
  mkdir($dir);

$filename = $dir.'qr'.$id.'.png';

$tamanio = 5;
$level = 'H';
$frameSize = 1;
$contenido = '/TRABAJO_FINAL/verifica_boletin.php?id='.$id;

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

require('includes/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetDrawColor(0,0,0);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(0,0,0);
    // Logo
    $this->Image('img/logo2.png',125,25,77);
    // Arial bold 15
    $this->SetFont('Arial','B',22);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,20,utf8_decode('Boletín de Calificaciones'),1,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

  $query_artistica = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM artistica WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_artistica = mysqli_query($conn, $query_artistica);
  $row_artistica = mysqli_fetch_array($result_artistica);

  $query_fihr = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM fihr WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_fihr = mysqli_query($conn, $query_fihr);
  $row_fihr = mysqli_fetch_array($result_fihr);

  $query_fisica = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM fisica WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_fisica = mysqli_query($conn, $query_fisica);
  $row_fisica = mysqli_fetch_array($result_fisica);

  $query_ingles = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM ingles WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_ingles = mysqli_query($conn, $query_ingles);
  $row_ingles = mysqli_fetch_array($result_ingles);

  $query_lenguaje = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM lenguaje WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_lenguaje = mysqli_query($conn, $query_lenguaje);
  $row_lenguaje = mysqli_fetch_array($result_lenguaje);

  $query_matematicas = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta,  (1ra+2da+3ra+4ta)/4  as final FROM matematicas WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_matematicas = mysqli_query($conn, $query_matematicas);
  $row_matematicas = mysqli_fetch_array($result_matematicas);

  $query_naturales = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM naturales WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_naturales = mysqli_query($conn, $query_naturales);
  $row_naturales = mysqli_fetch_array($result_naturales);

  $query_sociales = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM sociales WHERE id='". $id . "' and seccion ='". $seccion ."' ";
  $result_sociales = mysqli_query($conn, $query_sociales);
  $row_sociales = mysqli_fetch_array($result_sociales);

$hoy = date('j-m-Y');
$ahora = date('h:i A');
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(65,10,utf8_decode('Nombre del estudiante:'),0,0,'L');
$pdf->SetFont('Arial','',16);
$pdf->Cell(80,10,utf8_decode(' '.$row['nombre'].' '.$row['apellido'].'.'),0,1,'L');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,utf8_decode('Curso:'),0,0,'L');
$pdf->SetFont('Arial','',16);
$pdf->Cell(80,10,utf8_decode(' '.$row['seccion'].'.'),0,1,'L');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(50,10,utf8_decode('ID de Estudiante:'),0,0,'L');
$pdf->SetFont('Arial','',16);
$pdf->Cell(80,10,utf8_decode(' '.$row['id'].'.'),0,1,'L');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,utf8_decode('Recuperado el '.$hoy.' a las '.$ahora.'.'),0,1,'L');
$pdf->Ln(20);

$pdf->SetFont('Arial','B',14);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(253, 170, 2);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,10,utf8_decode('Materia'),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode('1ra'),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode('2da'),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode('3ra'),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode('4ta'),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode('Final '),1,1,'C', true);

$pdf->SetFont('Arial','',14);

$pdf->SetFillColor(247, 247, 247);
$pdf->Cell(50,10,utf8_decode('Artística'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_artistica['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_artistica['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_artistica['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_artistica['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_artistica['final'])),1,1,'C', true);

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50,10,utf8_decode('F. I. H. R.'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_fihr['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fihr['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fihr['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fihr['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_fihr['final'])),1,1,'C', true);

$pdf->SetFillColor(247, 247, 247);
$pdf->Cell(50,10,utf8_decode('Educación Física'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_fisica['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fisica['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fisica['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_fisica['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_fisica['final'])),1,1,'C', true);

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50,10,utf8_decode('Inglés'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_ingles['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_ingles['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_ingles['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_ingles['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_ingles['final'])),1,1,'C', true);

$pdf->SetFillColor(247, 247, 247);
$pdf->Cell(50,10,utf8_decode('Lenguaje y literatura'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_lenguaje['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_lenguaje['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_lenguaje['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_lenguaje['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_lenguaje['final'])),1,1,'C', true);

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50,10,utf8_decode('Matemáticas'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_matematicas['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_matematicas['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_matematicas['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_matematicas['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_matematicas['final'])),1,1,'C', true);

$pdf->SetFillColor(247, 247, 247);
$pdf->Cell(50,10,utf8_decode('Ciencias Naturales'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_naturales['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_naturales['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_naturales['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_naturales['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_naturales['final'])),1,1,'C', true);

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50,10,utf8_decode('Ciencias Sociales'),1,0,'L', true);
  $pdf->Cell(25,10,utf8_decode($row_sociales['1ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_sociales['2da']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_sociales['3ra']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode($row_sociales['4ta']),1,0,'C', true);
  $pdf->Cell(25,10,utf8_decode(ceil($row_sociales['final'])),1,1,'C', true);

$pdf->Ln(50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30);
$pdf->Cell(65,10,utf8_decode('Para verificar la autenticidad de este documento escanea el código QR o dirígete a'),0,1,'L');
$pdf->Cell(30);
$pdf->Cell(65,10,utf8_decode('/TRABAJO_FINAL/verifica_boletin.php?id='.$id),0,0,'L');
$pdf->Image('temp/test.png',8,235,30);

$pdf->Output();
?>
