<?php
include("include/connection.php");

$sql = "SELECT * FROM users WHERE mail='" . $_POST['user_mail'] . "' and password='" . $_POST["pass"] . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) >= 1) {
    $row = $res->fetch_assoc();

    $_SESSION["login"] = "True";
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['name'];

    ?>
    <script>
        window.location.href = "./homepage.php";
    </script>
    <?php
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>ChaloApp</title>
    </head>

    <body>
    </body>
    <script src="plugins/swal2.js"></script>
    <script>
        Swal.fire({
            icon: "error",
            title: "Wrong Emailid or Password"
        }).then(function () {
            window.location.href = "./login.php";
        });
    </script>

    </html>

    <?php
}
?>