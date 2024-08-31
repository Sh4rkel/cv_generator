<?php
ob_start();
session_start();
require_once('D:\TCPDF-main\tcpdf.php');
include 'cv_db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $objective = $_POST['objective'];
    $education = $_POST['education'];
    $skills = $_POST['skills']; 
    $experience = $_POST['experience'];
    $references = $_POST['references'];

    $stmt = $conn->prepare("INSERT INTO cvs (username, name, contact, objective, education, skills, experience, `references`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");    // Bind the CV data to the SQL statement
    $stmt->bind_param('ssssssss', $username, $name, $contact, $objective, $education, $skills, $experience, $references);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "CV created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Write(0, "Name: $name\n", '', 0, 'L', true, 0, false, false, 0);
    $pdf->Write(0, "Contact Information: $contact\n", '', 0, 'L', true, 0, false, false, 0);
    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth()-10, $pdf->GetY());
    $pdf->Write(0, "Objectives\n $objective\n", '', 0, 'L', true, 0, false, false, 0);
    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth()-10, $pdf->GetY());
    $pdf->Write(0, "Education\n $education\n", '', 0, 'L', true, 0, false, false, 0);
    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth()-10, $pdf->GetY());
    $pdf->Write(0, "Skills:\n", '', 0, 'L', true, 0, false, false, 0);
    foreach ($skills as $skill) {
        $pdf->Write(0, "• $skill\n", '', 0, 'L', true, 0, false, false, 0);
    }
    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth()-10, $pdf->GetY());
    $pdf->Write(0, "Experience\n $experience\n", '', 0, 'L', true, 0, false, false, 0);
    $pdf->Ln();
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth()-10, $pdf->GetY());
    $pdf->Write(0, "References\n $references\n", '', 0, 'L', true, 0, false, false, 0);
    ob_end_clean();
    $pdf->Output('cv.pdf', 'I');
}
?>
