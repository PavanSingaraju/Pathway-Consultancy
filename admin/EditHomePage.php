<?php
$db = mysqli_connect('localhost', 'root', '', 'pathwayconsultancy');
$section = $_POST['Section'];
$content = $_POST['Content'];
if ($section == "welcome"){
    mysqli_query($db,"UPDATE HomePageContent SET welcomeParagraph = '$content' WHERE id = 1");
}elseif ($section == "services"){
    mysqli_query($db,"UPDATE HomePageContent SET ServicesHeader = '$content' WHERE id = 1");
}elseif ($section == "student"){
    mysqli_query($db,"UPDATE HomePageContent SET StudentServicesParagraph = '$content' WHERE id = 1");
}elseif ($section == "migration"){
    mysqli_query($db,"UPDATE HomePageContent SET MigrationServicesParagraph = '$content' WHERE id = 1");
}elseif ($section == "studyAus"){
    mysqli_query($db,"UPDATE HomePageContent SET StudyInAustraliaParagraph = '$content' WHERE id = 1");
}elseif ($section == "studyCan"){
    mysqli_query($db,"UPDATE HomePageContent SET StudyInCanadaParagraph = '$content' WHERE id = 1");
}
