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

$sql = "INSERT INTO `activity_request`(`activity_requestid`, `created_by`, `userid`,`status`) 
VALUES (" . $_POST['activityid'] . "," . $_POST['userid'] . "," . $_SESSION['id'] . ",'Pending')";
$res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chalo App</title>
</head>
<body>
<?php //echo $sql; ?>
</body>
<script src="plugins/swal2.js"></script>
<script>
    <?php
    if ($res) {
        print '
    Swal.fire({
            icon: "success",
            title: "Your request to join ' . $_POST['username'] . '\'s activity has been sent! Once they accept, we\'ll open a chat for your new group."
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
