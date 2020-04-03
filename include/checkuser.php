<?php


if (!isset($_SESSION["login"])) {

    echo '
    <script>
    alert("not set");
    window.location.href="./login.php";
    </script>
    ';
}
?>
