<?php
    include './dbconnect.php';

    $idx=$_GET['idx'];
    $kor_name = $_POST['kor_name'];
    $eng_name = $_POST['eng_name'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $lecture_type = $_POST['lecture_type'];
    $lecture = $_POST['lecture'];
    $lecture_info = $_POST['lecture_info'];

    $query = "UPDATE info SET kor_name = '$kor_name', eng_name = '$eng_name', birth = '$birth', email = '$email', phone = '$phone', address = '$address', lecture_type = '$lecture_type', lecture = '$lecture', lecture_info = '$lecture_info' WHERE idx = $idx";

    mysqli_query($connect, $query);

    echo "<script>location.href='./form.php';</script>";
 ?>