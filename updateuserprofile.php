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
$file_path = '';
if (isset($_FILES['profile_pic']['tmp_name'])) {

    $uploadOk = 1;
    $tmpFilePath = $_FILES['profile_pic']['tmp_name'];
    $tmpFilePath1 = $_FILES['profile_pic']['name'];


//Make sure we have a filepath
    if ($tmpFilePath != "") {

        if ($_FILES["profile_pic"]["size"] < 5000000) {
            //save the filename
            $shortname = $_FILES['profile_pic']['name'];

            //save the url and the file

            $imageFileType = strtolower(pathinfo($tmpFilePath1, PATHINFO_EXTENSION));
            $filePath = "upload/" . $_SESSION["id"] . '-photo.' . $imageFileType;
//            $msg = '<script>alert("' . $filePath . '")</script>';
//            echo $msg;
            if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {

                move_uploaded_file($tmpFilePath, $filePath);
//                $msg = '<script>alert("Uploaded.")</script>';
//                echo $msg;
                $file_path = $filePath;

            } else {
                $uploadOk = 0;
                $msg = '<script>alert("Sorry, File format is not supported. Upload Only jpg,jpeg,png .")</script>';
                echo $msg;
            }
            //}
        } else {
            $uploadOk = 0;
            $msg = '<script>alert("Sorry, your file should not be more than 5MB.")</script>';
            echo $msg;
        }
    }
} else {
    $msg = '<script>alert("This is empty")</script>';
    echo $msg;
}

$sql = "update `users` set 
`fname` ='" . $_POST['first_name'] . "',
`about` ='" . $_POST['about_me'] . "',
`jobtitle` ='" . $_POST['Job_title'] . "',
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
`website` ='" . $_POST['web'] . "',
`profileimage` ='" . $file_path . "'

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
