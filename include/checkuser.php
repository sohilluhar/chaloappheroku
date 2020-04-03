<?php


if (!isset($_SESSION["login"])) {

    echo '
    <script>
    window.location.href="./login.php";
    </script>
    ';
}
?>
