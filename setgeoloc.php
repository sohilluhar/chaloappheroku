<?php
include("include/connection.php");

$_SESSION["lat"] = $_POST['latitude'];
$_SESSION["long"] = $_POST['longitude'];
//$_SESSION["name"] = $row['name'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chalo App</title>
</head>
<body>
</body>
<script>
    window.location.href = "./add_activity.php";
</script>
</html>