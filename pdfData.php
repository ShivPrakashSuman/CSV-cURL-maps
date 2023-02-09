<?php

    require('fpdf185/fpdf.php');
    
    include('db.php');
    $id = $_GET['id'];
    if($id){
        $sql = "SELECT * FROM users where id = '$id'";
        $result = mysqli_query($conn, $sql);
        $data = $result->fetch_assoc();

        // Instantiate and use the FPDF class
        $pdf = new FPDF();

        // Add a new page 
        $pdf->AddPage();

        $pdf->SetDrawColor(1,80,180); // Border Color set ----

        $pdf->SetFont('Times','B', 25); 
        $pdf->Cell(40,20,'Company Name');
        $pdf->Cell(260,20,'INVOICE','0','1','C');

        $pdf->SetFont('Arial','I', 13); 
        $pdf->Cell(40,0,'Company Siogan....','0','1');
        $pdf->ln(14); // line chenj 
        
        $pdf->SetFont('Arial','B', 15); 
        $pdf->Cell(40,6,'STREET ADDRESS','0','0');
        $pdf->Cell(103,6,'DATA','0','0','R');
        $pdf->SetFont('Arial','I', 13); 
        $pdf->Cell(47,6,': '.$data['created_at'],'0','1','R');

        $pdf->SetFont('Arial','I', 12); 
        $pdf->Cell(40,6,'City, Street, ZIP, Code','0','0');
        $pdf->SetFont('Arial','B', 15);
        $pdf->Cell(115,6,'INVOICE #','0','0','R');
        $pdf->SetFont('Arial','I', 13); 
        $pdf->Cell(35,6,'100','0','1','R');

        $pdf->SetFont('Arial','I', 13); 
        $pdf->Cell(40,6,'Phone = '.$data['phone'],'0','0');
        $pdf->SetFont('Arial','B', 15);
        $pdf->Cell(100,6,'FOR','0','0','R');
        $pdf->SetFont('Arial','I', 13); 
        $pdf->Cell(50,6,': Project or Service','0','1','R');       

        $pdf->ln(10); // line chenj 
        $pdf->SetFont('Arial','B', 15); 
        $pdf->Cell(40,10,'Bill To :','0','1');
       
        $pdf->Image('home.JPG',150,80,50);
        $pdf->SetFont('Arial', 'I', 13);
        $pdf->Cell(30, 6,'Name     = '.$data['name'], 0,'C');
        $pdf->Cell(30, 6,'Email      = '.$data['email'], 0, 'C');
        $pdf->Cell(30, 6,'Company ', 0, 'C');
        $pdf->Cell(30,6,'Street Address','0','1');
        $pdf->Cell(30,6,'City, Street, ZIP, Code','0','0');
      // table  ---------------
        $pdf->ln(15); // line chenj 
        $pdf->SetFont('Arial','B', 15);
        $pdf->SetTextColor(10,80,120);   // Text Color ---
        $pdf->cell(150,9, 'DESCRIPTION',1 ,0 ,'C');
        $pdf->cell(40,9, 'AMOUNT',1 ,1 ,'C');
        $pdf->cell(150,10, '','LR' ,0 ,'C');
        $pdf->cell(40,10, '500','LR','1','C');
        $pdf->cell(150,10, '','LR' ,0 ,'C'); 
        $pdf->Cell(40,10,'400','LR','1','C'); 
        $pdf->cell(150,50, '','LRB' ,0 ,'C'); 
        $pdf->Cell(40,50,'','LR','1','C');
        $pdf->SetTextColor(220,50,50);   // Text Color ---
        $pdf->cell(150, 9, 'TOTAL',0 ,0 ,'R');
        $pdf->cell(1, 9, '$ - ','TLB' ,0 ,'L');
        $pdf->cell(39, 9, '900','RBT' ,1 ,'C');

        $pdf->SetTextColor(0,0,0);
        $pdf->ln(12); // line chenj 
        $pdf->SetFont('Arial','I', 13);
        $pdf->cell(55, 9, 'Make All check payable to',0 ,0 ,'L');
        $pdf->SetFont('Arial','B', 14);
        $pdf->cell(0, 9, 'Your Company Name',0 ,1 ,'L');

        $pdf->line(10, 240, 200, 240 );
        $pdf->ln(15); // line chenj 
        $pdf->SetFont('Arial','B', 15);
        $pdf->cell(0, 9, 'THANK YOU FOR YOUR BUSINESS!',0 ,0 ,'C');

//$pdf->SetFillColor(230,230,0);  // back color
//$pdf->AddLink();
//$pdf->SetLink( 'http://www.fpdf.org/');

        $pdf->Output();
    }
?>