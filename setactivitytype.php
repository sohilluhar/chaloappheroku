<?php
include('include/head.php');

if (isset($_GET['radio-value'])) {
    $_SESSION['activity_type'] = $_GET['radio-value'];
    ?>
    <!DOCTYPE html>
    <html>
    <head></head>
    <body>
    <script>
        //alert("<?php //echo $_SESSION['activity_type']?>//");
        window.location.href = "./add_activity.php";
    </script>
    </body>
    </html>
    <?php
}
?>