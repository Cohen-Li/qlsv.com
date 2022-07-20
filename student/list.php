<?php 
    require "../layout/header.php"?>
<h1>Danh sách sinh viên</h1>
<a href="add.php" class="btn btn-info">Add</a>
<form action="list.php" method="GET">
    <label class="form-inline justify-content-end" >Tìm kiếm: <input type="search" name="search" class="form-control input_search"
            value="<?=!empty($_GET["search"]) ? $_GET["search"] : ""?>">
        <button class="btn btn-danger">Tìm</button>
    </label>
</form>
<?php 
                require "../config.php";
                require "../connectDB.php";
                require "../functions.php";
            ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
                        $sql = "SELECT * FROM student";
                        if (!empty($_GET["search"])) {
                            $pattern  =  $_GET["search"];
                            $sql .= " WHERE name LIKE '%$pattern%'";
                        }        
                        $result = $conn->query($sql);
                        $stt = 0;
                        if ($result->num_rows > 0) {
                            
                            while($row = $result->fetch_assoc()) {                                  
                                $stt++;
                                ?>
        <tr>
            <td><?=$stt; ?></td>
            <td><?=$row["id"] ?></td>
            <td><?=$row["name"] ?></td>
            <td><?=convertDateToVNFormat($row["birthday"]) ?></td>
            <td><?php echo getGenderName($row["gender"]) ?></td>
            <td><a href="edit.php?id=<?=$row["id"] ?>">Sửa</a></td>
            <td><button class="btn btn-danger btn-sm delete" data-url="delete.php?id=<?=$row["id"] ?>">Xoá</button></td>
        </tr>
        <?php
                            }
                        }
                    ?>


    </tbody>
</table>
<div>
    <span>Số lượng: <?=$stt; ?></span>
</div>
<?php require "../layout/footer.php" ?>