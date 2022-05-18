<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>BRIDGETON HILL HOTEL</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon-.ico" rel="icon">
        <link href="img/apple-favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/hover-style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>
<style>
    @media print {
        @page {
        margin-left: 0.5in;
        margin-right: 0.5in;
        margin-top: 0;
        margin-bottom: 0;
      }
    .noprint {
    visibility: hidden;
  }
}

body {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    background: #EEEEEE;
    text-align: center;
    margin-top: 20px;
    font-size: 20px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 25px;
    padding: 0;
    color: #666;
    font-weight: 700;
    margin-bottom: 20px;
}

</style>
<?php
   
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$room = $_POST['room'];
$duration = $_POST['duration'];
$email = $_POST['email'];
$number = $_POST['number'];
$start = strtotime($_POST['start']);
$end = strtotime($_POST['end']);

if ($room == "Standard Deluxe")
{
    $price = 7000;
}
elseif ($room == "Superior Room")
{
    $price = 8000;
}
elseif ($room == "Family Room")
{
    $price = 10500;
}
elseif ($room == "Executive Room")
{
    $price = 11000;
}
elseif ($room == "Premium Suite")
{
    $price = 16000;
}

echo "<br>" ;
echo '<image src="img/logo.png" />';
echo "<br>" ;
echo "<br>" ;
echo "<h1> Booking Confirmed </h1>";
echo "<b>Bridgeton Hill Hotel </b> are pleased to inform you that your reservation request has been received and confirmed.";
echo "<br>" ;
echo "<h3>Booking Details </h3>";
echo "This is a receipt for a room under ", "<b> Mr./Ms. </b>","<b>", $fname, " ", $lname, "</b>", ".";
echo "<br>" ;
echo "<b>Reserving Room: </b>",$room, " for ", $duration, " day/s and costing ₱", $price *$duration, ".";
echo "<br>" ;
echo "<b>Email: </b>", $email, "<br>", "<b>Mobile Number: </b>", $number;
echo "<br>", "<b>Check In: </b>";
echo date("Y-m-d", $start);
echo "<br>", "<b>Check Out: </b>";
echo date("Y-m-d", $end);//Y-m-d h:i:sa
echo "<br>";
    
?>
<br>
<button class = "noprint" onclick="window.print()">Print</button>
</body>
</html>