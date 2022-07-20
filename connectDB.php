<?php 
// Create connection
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) { // nếu như connect bị lỗi
    die("Kết nối thất bại: " . $conn->connect_error);   // hiển thị ra và kết thúc
}
mysqli_set_charset($conn,"utf8");   // hỗ trợ tiếng việt
?>