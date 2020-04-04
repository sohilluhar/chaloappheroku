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
if (isset($_POST['age_hide']))
    $age_h = "1";
else {
    $age_h = "0";
}


$sql = "update `users` set 
`fname` ='" . $_POST['first_name'] . "',
`lname` ='" . $_POST['last_name'] . "',
`lang` ='" . $_POST['lang'] . "',
`contact` ='" . $_POST['contact'] . "',
`mail` ='" . $_POST['user_mail'] . "',
`gender` ='" . $_POST['gender'] . "',
`city` ='" . $_POST['city'] . "',
`state` ='" . $_POST['state'] . "',
`country` ='" . $_POST['country'] . "',
`dob` ='" . $_POST['dob'] . "',
`age_hide` ='" . $age_h . "',
`facebook` ='" . $_POST['facebook'] . "',
`linkedin` ='" . $_POST['linkedid'] . "',
`instagram` ='" . $_POST['insta'] . "',
`website` ='" . $_POST['web'] . "'
 
 
 where id=" . $_SESSION['id'] . " ";
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
            title: "Updated"
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
