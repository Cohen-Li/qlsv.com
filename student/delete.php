<?php
    require "../config.php";
    require "../connectDB.php";

    $id = $_GET["id"];

    $sql = "DELETE FROM student WHERE id=$id";

    session_start();

    if ($conn->query($sql) === TRUE) {
        $_SESSION["Success"] = "Đã xoá sinh viên thành công";
        
    } else {
        $_SESSION["Error"] = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("location: list.php");   // điều hướng trang web về trang list.php
?>