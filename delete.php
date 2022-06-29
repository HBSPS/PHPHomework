<?php
    include './dbconnect.php';

    $idx = $_GET['idx'];

    $query="DELETE from info where idx = '$idx'";

    mysqli_query($connect, $query);

    echo"
    <script>location.href='./form.php';</script>
    ";
?>
