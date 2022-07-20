<?php
    require "../config.php";
    require "../connectDB.php";
    var_dump($_POST);
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $sql = "INSERT INTO student (name, birthday, gender)
    VALUES ('$name', '$birthday', '$gender')";

    session_start();

    if ($conn->query($sql) === TRUE) {
        $_SESSION["Success"] = "Đã tạo sinh vien thành công";
        
    } else {
        $_SESSION["Error"] = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("location: list.php");   // điều hướng trang web về trang list.php
?>