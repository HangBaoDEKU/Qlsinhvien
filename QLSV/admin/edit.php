<?php
//lay id cua edit   
$id = $_GET['sid'];

//ket noi
require_once 'ketnoi.php';

//cau lenh de lay thong tin ve sinh vien có id = $id
$edit_sql ="SELECT * FROM hoso WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them Sinh Vien</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Edit sinh viên</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="" >
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
            </div>

            <div class="form-group">
                    <label for="ntm">Ngày sinh</label>
                    <input type="date" id="ntm" class="form-control" name="ntm" value="<?php echo $row['ntm']?>">
            </div>


            <div class="form-group">
                <label for="mats">Mã Thí Sinh</label>
                <input type="text" id="mats" name="mats" class="form-control" value="<?php echo $row['mats']?>" >
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $row['email']?>">
            </div>

            <div class="form-group">
                <label for="diem">Tổng Điểm</label>
                <input type="diem" id="diem" name="diem" class="form-control" value="<?php echo $row['diem']?>">
            </div>
            
            
            <div class="form-group">
                <label for="manganh">Mã nghành</label>
                <input type="text" id="manganh" name="manganh" class="form-control" value="<?php echo $row['manganh']?>">
            </div>


            <div class="form-group">
                <label for="makhoa">Mã Khoa</label>
                <input type="text" id="makhoa" name="makhoa" class="form-control" value="<?php echo $row['makhoa']?>">
            </div>

            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" value="<?php echo $row['sdt']?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="qq">Quê quán</label>
                <input type="text" id="qq" name="qq" <?php echo $row['qq']?> class="form-control">
            </div>

            <div class="form-group" >
                    <label for="img">Nhập FILE Minh Chứng(Nếu cần sửa)</label>
                    <input type="file" id="img" name="img"  class="form-control">
            </div>
            <div class="form-group">
                <label>File minh chứng đã nhập:</label>
                <a href="upload/<?php echo $row['img'];?>" target="_blank"><?php echo $row['img'];?><br></a>
            </div>
            <button class="btn btn-success">Cập nhật thông tin</button>

        </form>
    </div>
</body>
</html>
