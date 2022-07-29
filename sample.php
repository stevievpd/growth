<?php
$ouit


?>


for currency1const select= document.querySelectorAll('#select');
const btn = document.querySelectorAll('#btn');
const input = document.querySelectorAll('#input');
const result = document.querySelectorAll('#result');


function display (data){
    const entries =Object.entries(data);
    for(var i=0; i <entries.length; i++){
        select [0].innerHTML += ;'<option value="${entries [i][0]}">${entries[i][0]}</option>';
        select [1].innerHTML += ;'<option value="${entries [i][0]}">${entries[i][0]}</option>';
    }
    }
btn.addEventListener("click", () =>{}
    let currency1= select[0].value;
    let currency2= select[2].value;
    let value= input.value;

    if(currency1 != currency2){
        convert(currency1, currency2, value);
     } else{
            alert("Choose Different Curries !!!");
        }
);

function convert (currency1, currency2, value){
    const host = "api.frankfurter.app";
    fetch{
        'https://${host}/lates?amount=${value}$from=${currency1}&to=${currency2}'
    }
    .then((val) => val.json())
    .then((val) => {
console.log(Object.values(val.rates)[0]);
result.value=Object.values(val.rates)
    });
}

<?php 
$pdf-> AddPage();

$pdf->SetFont('Arial','B',14;);

$pdf->Cell (130  ,5, 'Purchase Order', 1, 0);
$pdf-> Cell(59  ,5, 'Purchase_order', 1,1);

$pdf->setFont('Arial', '', 12);

$pdf->Cell(130  ,5, '[Street Address]',1,0);
$pdf->Cell(25  ,5, '', 1,1);

$pdf->Cell(130  ,5, '[City, Country]',1,0);
$pdf->Cell(25  ,5, 'Date', 1,1);
$pdf->Cell(25  ,5, '[dd/mm/yyyy]', 1,1);

$pdf->Cell(130  ,5, '[City, Country]',1,0);
$pdf->Cell(25  ,5, 'Date', 1,1);
$pdf->Cell(25  ,5, '[dd/mm/yyyy]', 1,1);









$pdf->Cell(55,5,'Amount',0,0);
$pdf->Cell(58,5,'2674',0,0);
$pdf->Cell(25,5,'Channel',0,0);
$pdf->Cell(52,5,'WEB',0,0);

$pdf->Cell(55,5,'Status',0,0);
$pdf->Cell(58,5,':Complete',0,0);

$pdf-> Line(10,30,200,30);

$pdf->Ln(10);
$pdf->Cell(55,5,'Product ID',0,0);
$pdf->Cell(58,5,':6222222',0,0);

$pdf->Cell(55,5,'Tax Amount',0,0);
$pdf->Cell(58,5,':0',0,0);

$pdf->Cell(55,5,'Product Service Charge',0,0);
$pdf->Cell(58,5,'',0,0);

$pdf->Cell(55,5,'Product Delivery Charge',0,0);
$pdf->Cell(58,5,':0',0,0);

$pdf->Line(10,60,200,60);

$pdf->Ln(10);
$pdf->Cell(55,5,'Paid by',0,0);
$pdf->Cell(58,5,'Roge',0,0);

$pdf->Line(155,75,195,75);
$pdf->Ln(5);
$pdf->Cell(140,5,'',0,0);
$pdf->Cell(50,5,':Signature',0,0,'C');


$pdf->Cell(30,50,'Address: ',0,0);
$pdf->Cell(30,50,'City/Province: ',0,0);
$pdf->Cell(30,50,'Phone Number: ',0,0);

$pdf->Cell(30,50,'PO Number: ',0,0);
$pdf->Cell(25,5,'PO Date:',0,0);
$pdf->Cell(25,5,'Expected Date:',0,0);


$pdf->Cell(55,5,'Ordered by:',0,0);
$pdf->Cell(55,5,'Supplier:',0,0);


$pdf->Cell(25,5,'ITEMS',0,0);


$pdf->Cell(25,5,'Item order:',0,0);

$pdf->Cell(25,5,'Quantity:',0,0);

$pdf->Cell(25,5,'Purchase cost:',0,0);

$pdf->Cell(25,5,'Amount:',0,0);
$pdf->Cell(25,5,'Additional Cost:',0,0);

$pdf->Cell(25,5,'Approved by:',0,0);
$pdf->Cell(25,5,'Total Amount:',0,0);



////
$pdf->Ln(5);
$pdf->Cell(250,10,'PO Number: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(255,15,'PO Date:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(244,20,'Expected Date:',0,0,'C',);

$pdf->Line(10,70,200,70);

$pdf->Ln(5);
$pdf->Cell(45,55,'Supplier:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(250,46,'Ordered by:',0,0,'C',);

$pdf->Line(10,90,200,90);


$pdf->Ln(5);
$pdf->Cell(45,90,'ITEMS',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(40,100,'Item Order',1,0,'C',);
$pdf->Ln(5);
$pdf->Cell(130,90,'Quantity',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(230,80,'Purchase Cost',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(320,70,'Amount ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(310,150,'Additional Cost',0,0,'C',);



///// Move to 8 cm to the right
$pdf->Cell(80);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,10,'PURCHASE ORDER',0,0,'C',);


$pdf->Ln(5);
$pdf->Cell(30,50,'Company Name: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(45,55,'Address: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(35,60,'City/Province: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(32,65,'Phone Number: ',0,0,'C');

$pdf->Ln(5);
$pdf->Cell(250,10,'PO Number: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(255,15,'PO Date:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(255,15,$purchase_date['purchase_date'],0,0,'C',true);
$pdf->Ln(5);
$pdf->Cell(244,20,'Expected Date:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(244,20,$expected_date['expected_date'],0,0,'C',);

$pdf->Line(10,70,200,70);

$pdf->Ln(5);
$pdf->Cell(45,55,'Supplier:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(45,55,'',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(250,46,'Ordered by:',0,0,'C',);
$pdf->Line(10,85,200,85);


$pdf->Ln(5);
$pdf->Cell(45,65,'ITEMS',0,0,'C',);
$pdf->Line(10,100,200,100);

$pdf->Ln(10);
$pdf->Cell(30,70,'Item Order:',0,0,'C',);
$pdf->Ln(10);
$pdf->Cell(30,70,$item['item'],0,0,'C',);
$pdf->Line(50,180,50,100);

$pdf->Ln(5);
$pdf->Cell(100,60,'Quantity:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(100,60,$quantity['quantity'],0,0,'C',);
$pdf->Line(100,180,100,100);

$pdf->Ln(5);
$pdf->Cell(215,50,'Purchase Cost:',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(215,50,$price['price'],0,0,'C',);
$pdf->Line(150,180,150,100);

$pdf->Ln(5);
$pdf->Cell(300,40,'Amount: ',0,0,'C',);
$pdf->Ln(5);
$pdf->Cell(300,40,$amount_total['amount_total'],0,0,'C',);
$pdf->Ln(5);
$pdf->Line(200,70,200,180);

$pdf->Cell(315,120,'Additional Cost:',0,0,'C',);
$pdf->Line(10,180,200,180);

$pdf->Line(10,70,10,180);


$pdf->Line(10,200,50,200);

$pdf->Line(150,200,200,200);

$pdf->Line(10,100,200,100);
$pdf->Line(10,110,200,110);
$pdf->Line(10,100,10,150,'C');
    $pdf->Line(70,100,70,150,'C');
    $pdf->Line(150,100,150,150,'C');
    $pdf->Line(110,100,110,150,'C');
    $pdf->Line(200,100,200,150,'C');
    $pdf->Line(10,150,200,150);
   
    $pdf->Ln(10);
    $pdf->Line(10,122,10,165,'L');
    $pdf->Line(70,122,70,165,'C');
    $pdf->Line(112,122,112,165,'C');
    $pdf->Line(150,122,150,165,'C');
    $pdf->Line(200,122,200,165,'C');

    ///
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
    $pdf->Cell(-150 ,-20,'555',0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(225,-33,'Unit Price:',0,0,'C');
    $pdf->Cell(-230,-22,'45',0,0,'C');

    $pdf->Ln(1);
    $pdf->Cell(160,-36,'Amount:',0,0,'R');
    $pdf->Cell(-5,-23,'582',0,0,'R');

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