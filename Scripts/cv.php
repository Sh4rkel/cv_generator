<?php
require_once('C:/TCPDF-main/tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $objectives = isset($_POST['objective']) ? $_POST['objective'] : [];
    $educations = isset($_POST['education']) ? $_POST['education'] : [];
    $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
    $experience = $_POST['experience'];
    $references = $_POST['references'];

    $cv_content = "<h1>$name</h1>";
    $cv_content .= "<h2>Contact Information</h2><p>$contact</p>";
    $cv_content .= "<h2>Objective</h2><ul>";
    foreach ($objectives as $objective) {
        $cv_content .= "<li>$objective</li>";
    }
    $cv_content .= "</ul><h2>Education</h2><ul>";
    foreach ($educations as $education) {
        $cv_content .= "<li>$education</li>";
    }
    $cv_content .= "</ul><h2>Skills</h2><ul>";
    foreach ($skills as $skill) {
        $cv_content .= "<li>$skill</li>";
    }
    $cv_content .= "</ul><h2>Experience</h2><p>$experience</p>";
    $cv_content .= "<h2>References</h2><p>$references</p>";

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->AddPage();

    $pdf->SetFont('helvetica', '', 12);

    $pdf->writeHTML($cv_content, true, false, true, false, '');

    $pdf->Output('cv.pdf', 'I');
}
?>