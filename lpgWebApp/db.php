<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "cylinder_db";
    $conn=mysqli_connect($servername,$username,$password,$dbname,"3306");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>