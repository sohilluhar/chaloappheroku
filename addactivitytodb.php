<?php

//print (
//    $_POST['activity_type'] .
//    $_POST['location'] .
//    $_POST['adt_date'] .
//    $_POST['sname'] .
//    $_POST['ename'] .
//    $_POST['time_change'] .
//    $_POST['sel1'] .
//    $_POST['act_note']
//);
include 'include/connection.php';
if (!isset($_POST['time_change']))
    $time_change = "0";
else
    $time_change = "1";

$marker = trim($_POST['activity_type']) . '.png';


$sql = "INSERT INTO `activity`( `userid`, `type`, `location`, `date`, `stime`, `etime`, `time_change`, `nopeople`, `note`,`glat`,`glong`,`marker`)
 VALUES (" . $_SESSION["id"] . ",'" . $_POST['activity_type'] . "','" . $_POST['location'] . "','" . $_POST['adt_date'] . "','" . $_POST['sname'] . "','" . $_POST['ename'] . " ',   '" .
    $time_change . "',
    '" . $_POST['sel1'] . "' ,
    '" . $_POST['act_note'] . "' ,
    '" . $_SESSION["lat"] . "' ,
    '" . $_SESSION["long"] . "' ,
    '" . $marker . "' 
    
    )";
//print $SQL;
$res = mysqli_query($con, $sql);
unset($_SESSION['activity_type']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chalo App</title>
</head>
<body>
</body>
<script src="plugins/swal2.js"></script>
<script>
    <?php
    if ($res) {
        print '
    Swal.fire({
            icon: "success",
            title: "Activity Added"
        }
    ).then(function () {
        window.location.href = "./index.php";
    });';
    } else {
        print '
    Swal.fire({
            icon: "error",
            title: "Try Again"
        }
    ).then(function () {
        window.location.href = "./add_activity.php";
    });';
    }



    ?>

</script>
</html>
