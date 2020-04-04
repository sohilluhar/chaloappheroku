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
    if (!isset($_POST['hideage']))
        $hideage = "0";
    else
        $hideage = "1";

    $sql = "SELECT * FROM users WHERE mail='" . strtolower($_POST['user_mail']) . "'";
    $res = mysqli_query($con, $sql);


    if (mysqli_num_rows($res) == 0) {

    $sql = "INSERT INTO `users`(`mail`, `password`,`fname`,`lname`, `name`, `gender`, `dob`, `age_hide`, `contact`) VALUES 
('" . strtolower($_POST['user_mail']) . "','" . trim($_POST['pass1']) . "','" . $_POST['firstname'] . "','" . $_POST['lastname'] . "' , ' " . $_POST['firstname'] . " " . $_POST['lastname'] . "',
' " . $_POST['radio-value'] . "','" . $_POST['dob'] . "' ,'" . $hideage . "','" . $_POST['contact'] . "' )";

    //print $SQL;
    $res = mysqli_query($con, $sql);
    ?>

    <?php
    if ($res) {
        print '
    Swal.fire({
            icon: "success",
            title: "Registration Done!"
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
        window.location.href = "./signup.php";
    });';
    }

    } else {
        print '
    Swal.fire({
            icon: "error",
            title: "User Mail Already Exists"
        }
    ).then(function () {
        window.location.href = "./signup.php";
    });';
    }
    ?>

</script>
</html>
