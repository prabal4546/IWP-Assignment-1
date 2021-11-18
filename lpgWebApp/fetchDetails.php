<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Consumer List Fetch</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<div><h2 class="pull-left">Consumer Table for given consumer id </h2></div>

</div>
<?php
include_once 'db.php';
if(isset($_POST['submit'])){
$cid = $_POST['cid'];

$result = mysqli_query($conn,"SELECT consumertable.ConsumerId,consumertable.ConsumerName, consumertable.ConnectionType, bookingtable.BookingId, bookingtable.DeliveryStatus
FROM consumertable inner join bookingtable on consumertable.ConsumerId=bookingtable.ConsumerId WHERE consumertable.ConsumerId=$cid");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>Consumer Name</td>
<td>Connection Type</td>
<td>Booking Id</td>
<td>Delivery Status</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["ConsumerName"]; ?></td>
<td><?php echo $row["ConnectionType"]; ?></td>
<td><?php echo $row["BookingId"]; ?></td>
<td><?php echo $row["DeliveryStatus"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>