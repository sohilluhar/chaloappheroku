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
if (isset($_POST['accept']))
    $status = "Accept";
elseif (isset($_POST['reject'])) {
    $status = "Reject";
}


$sql = "update `activity_request` set `status` ='" . $status . "' ,`remark` ='" . $_POST['remark'] . "' where id=" . $_POST['activityid'] . " ";
$res = mysqli_query($con, $sql);
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
            title: "Response Updated"
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
        window.location.href = "./index.php";
    });';
    }



    ?>

</script>
</html>
