<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <link rel="shortcut icon" href= "../public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container" style="margin-top:20px;">
        <a href="../student/list.php" class="active btn btn-info">Students</a>
        <a href="../subject/list.php" class=" btn btn-info">Subject</a>
        <a href="../register/list.php" class=" btn btn-info">Register</a>
        <!-- <button class="btn btn-primary active" onclick="window.location.href='../student/list.php'">Students</button>
        <button class="btn btn-primary" onclick="window.location.href='../subject/list.php'">Subject</button>
        <button class="btn btn-primary" onclick="window.location.href='../register/list.php'">Register</button> -->
        <?php 
            session_start();
            $message = "";
            if(!empty($_SESSION["Success"])){
                $message = $_SESSION["Success"];
                $messageClass = "alert-success";    // lớp của boostrap
                // xoá phần tử dựa vào key
                unset($_SESSION["Success"]);        // xoá dữ liệu khi F5
            }
            else if(!empty($_SESSION["Error"])){
                $message = $_SESSION["Error"];
                $messageClass = "alert-danger";    // lớp của boostrap
                // xoá phần tử dựa vào key
                unset($_SESSION["Error"]);          // xoá dữ liệu khi F5
            }
        ?>
        <?php if($message) {?>
        <div class="alert <?=$messageClass?> mt-4">
            <?=$message?>
        </div>
        <?php } ?>