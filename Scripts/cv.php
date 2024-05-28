<?php
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

    echo nl2br($cv_content);
}
?>