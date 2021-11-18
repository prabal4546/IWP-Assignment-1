<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $bid = $_POST['bid'];
     $devStatus = $_POST['delStatus'];
     $sql = "UPDATE bookingtable SET DeliveryStatus='$devStatus' WHERE BookingId=$bid";
     if (mysqli_query($conn, $sql)) {
        echo "updated record successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>