 <?php
include "db.php";

  
include "fpdf17/fpdf.php";
  

class PDF extends FPDF
{

function Header()
{
    
    $this->SetFont('Arial','B',13);
    
    $this->Cell(80);
    
    $this->Cell(80,10,'Users List',1,0,'C');
   
    $this->Ln(20);
}
 

function Footer()
{
    
    $this->SetY(-15);
    
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 

$display_heading = array('id'=>'ID', 'name'=> 'Name', 'email'=> 'Email','password'=> 'Password', 'status'=>'Status');
$sql ="SELECT * FROM tblusers";
$result =mysqli_query($conn,$sql);

$header = mysqli_query($conn, "SHOW columns FROM tblusers");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}

$pdf->Output();
  
  
?>
 


