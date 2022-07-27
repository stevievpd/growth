<?php
require('fpdf184/fpdf.php');
$conn=mysqli_connect('localhost','root','','growth');
if($conn->connect_error){
    die("Error in DB connection:".$conn->connect_errno.":".$conn->_error);
}
$select = "SELECT * FROM purchase_order ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf-> AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell (180 ,5, 'PURCHASE ORDER', 0, 0,'C');
$pdf->Ln(5);


while($row=$result->fetch_object()){

    $id=$row->id;
    $purchase_date=$row->purchase_date;
    $expected_date=$row->expected_date;
    $item=$row->item;
    $quantity=$row->quantity;
    $price=$row->price;
    $amount_total=$row->amount_total;
    
    $pdf->Line(10,60,200,60);
    $pdf->Ln(3);
    $pdf->Cell(35,20,'Company Name:',0);
    $pdf->Cell(10,20,' Crave',0);

    $pdf->Ln(3);
    $pdf->Cell(30,25,'Address :',0);
    $pdf->Cell(30,25,'5th Aggkgkgkgkggkve.',0);

    $pdf->Ln(3);
    $pdf->Cell(40,30,'City/Province:',0,0,'C');
    $pdf->Cell(95,25,'Quezon',0,0,'C');


    
    $pdf->Ln(20);
    $pdf->Cell(33,10,'Purchase ID:',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(65,0,$id,0,0,'C');

    $pdf->Ln(3);
    $pdf->Cell(45,20,'PO date:',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(88,10,$purchase_date,0,0,'C');

    $pdf->Ln(5);
    $pdf->Cell(35,13,'Expeted date:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(88,4,$expected_date,0,0,'C');
    $pdf->Ln(1);

    $pdf->Ln(25);
    $pdf->Cell(210,-60,'Supplier Name:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(255,-70,'',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(220,-65,'Address:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(265,-75,'Makati City',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(208,-70,'Phone Number:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(265,-80,'09452489128',0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(20,-72,'ITEMS',0,0,'C');
    $pdf->Ln(5);

    $pdf->Line(10,100,200,100);
    $pdf->Line(10,110,200,110);


    $pdf->Ln(1);
    $pdf->Cell(50,-63,'Purchase Desciption:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(40,-58,$item,0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(145,-76,'Quantity:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(130,-70,$quantity,0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(225,-89,'Price:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(215,-80,$price,0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(310,-102,'Total Amount:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(300,-93,$amount_total,0,0,'C');
    $pdf->Ln();

    $pdf->Line(10,100,10,150,'C');
    $pdf->Line(70,100,70,150,'C');
    $pdf->Line(150,100,150,150,'C');
    $pdf->Line(110,100,110,150,'C');
    $pdf->Line(200,100,200,150,'C');
    $pdf->Line(10,150,200,150);
   
    $pdf->Cell(50,185,'Recieved by:',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(215,-80,$price,0,0,'C');
    $pdf->Line(20,165,80,165);

}
$pdf ->Output();
$pdf->Ln(50);
?>