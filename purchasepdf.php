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
$pdf->SetFillColor(77, 153, 0);
$pdf->Cell (190 ,5, 'PURCHASE ORDER','B', 0,'C',true);
$pdf->Ln(5);


while($row=$result->fetch_object()){

    $id=$row->id;
    $purchase_date=$row->purchase_date;
    $expected_date=$row->expected_date;
    $item=$row->item;
    $quantity=$row->quantity;
    $price=$row->price;
    $amount_total=$row->amount_total;
    
    $pdf->Ln(2);
    $pdf->Cell(190,10,'LOGO HERE',0,0,'C');

//rightside
        
    $pdf->Ln(25);
    $pdf->Cell(32,20,'Company Name:',0);
    $pdf->Cell(10,20,' Crave',0);

    $pdf->Ln(3);
    $pdf->Cell(20,25,'Address :',0);
    $pdf->Cell(10,25,'5th Aggkgkgkgkggkve.',0);

    $pdf->Ln(3);
    $pdf->Cell(28,30,'City/Province:',0);
    $pdf->Cell(10,30,'Quezon',0);
//leftside
    $pdf->Ln(10);
    $pdf->Cell(130,-15,'PO Number:',0,0,'R');
    $pdf->Cell(10,-15,'44066005',0);

    $pdf->Ln(3);
    $pdf->Cell(130,-10,'PO Date:',0,0,'R');
    $pdf->Cell(10,-10,'mm/dd/yyyy',0);

    $pdf->Ln(3);
    $pdf->Cell(130,-5,'Vendor ID:',0,0,'R');
    $pdf->Cell(10,-5,'11111111',0);

    $pdf->Line(10,70,200,70);

//from-to
    $pdf->Ln(10);
    $pdf->SetFillColor(102, 204, 0);
    $pdf->Cell(190,10,'Purchase From:','B',0,0,'L');
    $pdf->Cell(-20,10,'Purchase To:',0,0,'R');
    $pdf->Ln(5);
//vendor
    $pdf->Ln(5);
    $pdf->Cell(28,10,'Vendor Name:',0,0,'L');
    $pdf->Cell(65,10,$id,0);

    $pdf->Ln(3);
    $pdf->Cell(18,15,'Address:',0,0,'L');
    $pdf->Cell(10,15,'Quezon',0);

    $pdf->Ln(5);
    $pdf->Cell(28,17,'City/Province:',0,0,'L');
    $pdf->Cell(10,17,'Quezon',0);

    $pdf->Ln(15);
    $pdf->Cell(30,13,'Contact Name:',0,0,'L');
    $pdf->Cell(10,13,'09459245212',0);
    $pdf->Ln(1);

    //company
    $pdf->Ln(5);
 
    $pdf->Cell(140,-47,'Company Name:',0,0,'R');
    $pdf->Cell(65,-47,'Bulla Crave',0);

    $pdf->Ln(3);
    $pdf->Cell(140,-42,'Address:',0,0,'R');
    $pdf->Cell(10,-42,'Quezon',0);

    $pdf->Ln(5);
    $pdf->Cell(140,-40,'City/Province:',0,0,'R');
    $pdf->Cell(10,-40,'Quezon',0);

    $pdf->Ln(13);
    $pdf->Cell(140,-40,'Contact Name:',0,0,'R');
    $pdf->Cell(10,-40,'09459245212',0);
    $pdf->Ln(1);

//shipping methods
$pdf->Line(10,106,200,106);
$pdf->Ln(10);
$pdf->Cell(5,-40,'Shipping Method:',0,0,'L');  
$pdf->Cell(10,-28,'Online Shipping',0);
$pdf->Ln(3);
$pdf->Cell(180,-46,'Payment Terms:',0,0,'C'); 
$pdf->Cell(-180,-35,'Credit Card',0,0,'C');
$pdf->Ln(3);

$pdf->Cell(180,-52,'Required By Date:',0,0,'R');
$pdf->Cell(-10,-40,'10-12-2022',0,0,'R');
$pdf->Ln(5);


//item purchase
$pdf->Line(10,122,200,122);
    $pdf->Ln(1);
    $pdf->Cell(5,-30,'Item Desciption:',0,0,'L');
    $pdf->Cell(-100,-18,'Laptop',0,0,'L');

    $pdf->Ln(1);
    $pdf->Cell(145,-32,'Quantity:',0,0,'C');
    $pdf->Cell(-150 ,-20,$quantity,0);

    $pdf->Ln(1);
    $pdf->Cell(225,-33,'Unit Price:',0,0,'C');
    $pdf->Cell(-230,-22, $price,0);

    $pdf->Ln(1);
    $pdf->Cell(160,-36,'Amount:',0,0,'R');
    $pdf->Cell(-5,-23, $amount_total,0);

    $pdf->Line(10,135,200,135);

    //LINE TABLE*
    


    //FOOTER

     $pdf->Ln(5);
    $pdf->Cell(28,50,'Recieved by:',0,0,'L');
    $pdf->Cell(10,50,'Roge',0,0,'C');
    $pdf->Line(10,195,70,195);

    $pdf->Cell(100,50,'Total Amount:',0,0,'R');
    $pdf->Cell(18,50,'5212222',0,0,'C');
    $pdf->Line(120,195,190,195);

}
$pdf ->Output();
?>