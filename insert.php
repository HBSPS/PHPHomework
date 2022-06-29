<?php
    include './dbconnect.php';
    // Form에서 정보 받아오기 
    $kor_name = $_POST['kor_name'];
    $eng_name = $_POST['eng_name'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $lecture_type = $_POST['lecture_type'];
    $lecture = $_POST['lecture'];
    $lecture_info = $_POST['lecture_info'];

    $query = "INSERT INTO info(kor_name, eng_name, birth, email, phone, address, lecture_type, lecture, lecture_info) VALUES ('$kor_name', '$eng_name', '$birth', '$email', '$phone', '$address', '$lecture_type', '$lecture', '$lecture_info')";

    mysqli_query($connect, $query);

    echo "<script>location.href='./form.php';</script>";
?>