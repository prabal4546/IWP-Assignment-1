<?php

$target_dir = "D:/fileuploads/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["filetoupload"]["size"] > 10000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "NOT FILE TYPE.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "NOT UPLOADED";

} else {
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["filetoupload"]["name"]). " has been uploaded.";
    } else {
        echo "ERROR IN UPLOADING THE FILE";
    }
}
//MARK
$studentname = "";
$studentnumber = "";
$courses = " ";
$datafile = "student.txt";
// Check to see if input of $studentname matches a name in student.txt
if (isset ($_POST['student.txt'])) {
    $studentname = htmlentities ($_POST['student.txt']);
    $DB = fopen ($datafile, 'r') or die ("$datafile cannot be opened for reading.");

    $found = FALSE;
    while ($record = fgets ($DB) and ! $found) {
       $field = explode (":", htmlentities (trim ($record)));
       $found = $studentname === $field[0];
    }

    fclose ($DB);

    if ($found) {
       echo "<p>$field[0] $field[1].</p>\n";
    }
 }

$DB = fopen ($datafile, 'r') or die ("$datafile cannot be opened for reading.");
 while ($record = fgets ($DB) ) {
    $field = explode (":", htmlentities (trim ($record)));
    //echo "   <option value=\"$field[1]\">$field[0] $field[1]</option>\n";
 }
 fclose ($DB);
// Empty field
// define variables and set to empty values
$nameErr = $emailErr = $regErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["studentname"])) {
      $nameErr = "Name is required";
    } else {
      $studentname = test_input($_POST["studentname"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
  

  }
  echo "<h2>Your Input:</h2>";
  echo $studentname;
  echo "<br>";
  echo $studentnumber;

?>