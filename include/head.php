<?php
ob_start();        // output buffer start
session_start();  //session start

date_default_timezone_set('Asia/Kolkata');

//$con = mysqli_connect("localhost", "cas", "try", "complainbox");
$con = mysqli_connect("localhost", "root", "", "chaloapp");

if (mysqli_connect_errno()) {
    echo "failed to connect" . mysqli_connect_errno;
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Chalo App</title>


<link rel="icon" href="favicon.png">


<link rel="stylesheet" href="css/styles.css">

<!-- Custom Stylesheet -->
<link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<!-- Page plugins css -->
<link href="plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<!-- Color picker plugins css -->
<link href="plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- Daterange picker plugins css -->
<link href="plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


<style>
    .container {
        width: auto !important;

    }

    body {
        background: #e5e5e5 !important;
    }

    .responsive-map {
        position: relative;
        width: 100%;
        height: 100%;
        padding-bottom: 200%;
    }

    .responsive-map iframe {
        position: absolute;
        pointer-events: none;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>