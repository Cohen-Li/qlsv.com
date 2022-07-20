<?php
    require "../config.php";
    require "../connectDB.php";

    $id = $_POST["id"];
    
    $name = $_POST["name"];
    $number_of_credit = $_POST["number_of_credit"];
    

    $sql = "UPDATE tb_subject SET name='$name', number_of_credit='$number_of_credit' WHERE id=$id";

    session_start();

    if ($conn->query($sql) === TRUE) {
        $_SESSION["Success"] = "Đã cập nhật môn học thành công";
        
    } else {
        $_SESSION["Error"] = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("location: list.php");   // điều hướng trang web về trang list.php
?>