<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Sanitization and Validation coding will go here


// Define and set variables
$studentname = "";
$studentnumber = "";
$courses = " ";
$datafile = "student.txt";
$in = fopen ('courses.txt', 'r') or die ("courses.txt cannot be opened for reading.");


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
?>