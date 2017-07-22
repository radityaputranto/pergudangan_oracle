<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('borneo.png',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','BU',20);
	// Move to the right
	$this->Cell(80);
	// Title
	$this->Cell(30,10,'BORENEO',0,0,'C');

	$this->Ln(10);
	$this->Cell(80);
	$this->Cell(30,10,'PERGUDANGAN POHON ',0,0,'C');

	/*$this->Ln(10);
	$this->Cell(80);
    $this->Cell(20,10,'JAWA TIMUR',0,0,'C');*/

    $this->Ln(5);

	// Line break
	$this->Ln(5);
  	/*$this->SetFont('Arial','',13);
  	$this->Cell(80);
  	$this->Cell(30,10,'Jl. Raya ITS Politeknik Elektronika, Kampus ITS Sukolilo, Keputih, Sukolilo, Kota SBY, Jawa Timur 60111',0,0,'C');
  	$this->Ln(10);*/


	// Line break
	$this->setlinewidth(1);
	$this->Line(10,36,200,36);
	$this->setlinewidth(0);
	$this->Line(10,37,200,37);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('times','U'.'B',14);
$pdf->Ln(10);
$pdf->Cell(80);
$pdf->Cell(30,10,'SURAT BARANG KERLUAR',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('times','',14);
$pdf->Cell(80);
$pdf->Cell(30,10,'Nomor : 13-4658-46213',0,0,'C');

$pdf->Ln(20);
$pdf->SetFont('times','',13);
$pdf->Cell(50,10,'Detail barang keluar :',0,0,'L');

$pdf->Ln(10);

$pdf->Cell(7);
$pdf->Cell(5,10,'1. ID Pohon ',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'1032',0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'2. Nama Pohon',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'Jati Papua',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['jenis'],0,0,'L');*/

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'3. Ukuran Pohon',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'20'.' meter',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['tempatlahir'].', '.$_POST['tgllahir'],0,0,'L');*/

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'4. Harga Pohon',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'Rp. '.'15000000',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['warga'],0,0,'L');*/

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'5. Lokasi',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'Banyuwangi',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['agama'],0,0,'L');*/

$pdf->Ln(25);
$pdf->SetFont('times','',13);
$pdf->Cell(50,10,'Detail Admin :',0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'1. ID Pengguna',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'69',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['kerja'],0,0,'L');*/

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'2. Nama Pengguna',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'Raditya',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['alamat'],0,0,'L');*/

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'3. Email Pengguna',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.'raditya@borneo.com',0,0,'L');
/*$pdf->Cell(30,10,': '.$_POST['bin'],0,0,'L');*/


$pdf->Ln(10);
$pdf->Cell(6);
$pdf->Cell(50,10,'Demikianlah, surat keterangan barang keluar ini dibuat dari PT BORNEO.',0,0,'L');
$pdf->Ln(6);
$pdf->Cell(6);
$pdf->Cell(50,10,'Terima kasih. ',0,0,'L');

$pdf->Ln(60);
$pdf->Cell(10);
$pdf->Cell(174,10,'Surabaya, '.date('d-M-Y'),0,0,'R');

$pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(176,10,'Admin BORNEO',0,0,'R');

$pdf->Ln(30);
$pdf->Cell(10);
$pdf->Cell(180,10,'Raditya Putranto ',0,0,'R');
$pdf->Output();



header("../index.php");
?>
<!-- <script type="text/javascript">
	window.location.href="../index.php";
</script> -->