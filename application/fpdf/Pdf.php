<?php
    require 'fpdf';

    //getdata
    // $tame1 = $_POST['tame1'];
    // $name11 = $_POST['name11'];
    // $name12 = $_POST['name12'];
    // $tame2 = $_POST['tame2'];
    // $name21 = $_POST['name21'];
    // $name22 = $_POST['name22'];

    class myPDF extends FPDF {
        function header(){
            $this->Image('../../images/B.png',10,6);
            $this->SetFont('Arial','B',14);
            $this->Cell(276,5,'Badmintun Score Sheet',0,0,'C');
            $this->Ln();
            $this->SetFont('Times','',12);
            $this->Cell(276,10,'วลัยลักษณ์แบตครั้งที่ 1',0,0,'C');
            $this->Ln(20);
        }

        function footer()
        {
            $this->SetY(-15);
        }
    }

    $pdf = new myPDF();
    $pdf->AddPage('L','A4',0);
    $pdf->Output();

?>