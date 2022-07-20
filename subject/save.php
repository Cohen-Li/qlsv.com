<?php
    require "../config.php";
    require "../connectDB.php";
    var_dump($_POST);
    $name = $_POST["name"];
    //$birthday = $_POST["birthday"];
    $number_of_credit = $_POST["number_of_credit"];
    $sql = "INSERT INTO tb_subject (name, number_of_credit)
    VALUES ('$name', '$number_of_credit')";

    session_start();

    if ($conn->query($sql) === TRUE) {
        $_SESSION["Success"] = "Đã tạo môn học thành công";
        
    } else {
        $_SESSION["Error"] = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("location: list.php");   // điều hướng trang web về trang list.php
?>