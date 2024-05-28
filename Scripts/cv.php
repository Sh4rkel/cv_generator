<?php
require_once('path/to/tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $objective = $_POST['objective'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $references = $_POST['references'];

    $cv_content = "Name: $name\n";
    $cv_content .= "Contact Information: $contact\n";
    $cv_content .= "Objective: $objective\n";
    $cv_content .= "Education: $education\n";
    $cv_content .= "Skills: $skills\n";
    $cv_content .= "Experience: $experience\n";
    $cv_content .= "References: $references\n";

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // add a page
    $pdf->AddPage();

    // set font
    $pdf->SetFont('helvetica', '', 12);

    // write the CV content to the PDF
    $pdf->Write(0, $cv_content, '', 0, 'L', true, 0, false, false, 0);

    // output the PDF document to the browser
    $pdf->Output('cv.pdf', 'I');
}
?>