<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../img/uni_aus/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../img/uni_aus/" . $filename);
                $UniName = $_POST['uniName'];
                $url = $_POST['url'];
                $worldRanking = $_POST['worldRanking'];
                $city = $_POST['city'];
                $description = $_POST['description'];
                $img = "img/uni_aus/$filename";
                $db = mysqli_connect('localhost', 'ictatjcu_cons1', '123zxc', 'ictatjcu_cons1');
                $query = "INSERT INTO universities (name, country, url, city, world_ranking, img, description) 
  			  VALUES('$UniName', 'Australia', '$url','$city','$worldRanking', '$img','$description' )";
                mysqli_query($db, $query);
                header('location: ../Admin/index.php');
                //echo "Your file was uploaded successfully.";
            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

}

?>