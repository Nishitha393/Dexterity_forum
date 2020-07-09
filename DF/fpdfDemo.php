<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf ->AddPage();
$pdf ->SetFont('Arial','B',18);
$pdf ->Cell(40,10,'This is pdf demo');
$pdf -> Output();

?>