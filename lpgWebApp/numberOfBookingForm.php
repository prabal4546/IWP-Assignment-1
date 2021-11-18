<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>booking details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Booking Details</h2>
                    </div>
                    <p>Please enter a delivery status to check number of bookings.</p>
                    <form action="totalBooking.php" method="post">
                        <div class="form-group">
                            <label>Delivery Status</label>
                            <input type="text" name="delv" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>