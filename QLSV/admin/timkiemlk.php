
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sanh viên đăng kí</title>
    <link rel="stylesheet" href="xemtt.css">
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
        <div class="canle"> 
            <h1>Danh sách sinh viên đăng ký</h1>
            <div>
                <form method="post" action="timkiemlk.php">
                    <input type="text" name="noidungtk">
                    <button type="submit" name="timk">Tìm kiếm</button>
                </form>
            </div>
            <table class="table table-dark table-hover">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã thí sinh</th>
                    <th>Họ tên</th>
                    <th>Nghành</th>
                    <th>Khoa</th>
                    <th>Số điện thoại</th>
                    <th>Quê quán</th>
                    <th>Ảnh</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>

        <?php
            require_once 'ketnoi.php';
            if($_POST['noidungtk'] == NULL ) 
            {
                header("Location: lietke.php");
            }
            elseif(isset($_POST['timk'])){
                $noidungtk = $_POST['noidungtk'];
            }
            
        
            $sql = "SELECT * FROM hoso WHERE mats LIKE '%$noidungtk%' or hoten LIKE '%$noidungtk%'"; //Chiếu tất cả các cột từ bảng sinh viên chọn mats giống biến noidungtk
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) 
            // Hàm mysqli_fetch_array() được sử dụng để lấy một hàng dữ liệu từ kết quả trả về của truy vấn MySQL và trả về dưới dạng một mảng.
            {
                ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['mats'];?></td>
                    <td><?php echo $row['hoten'];?></td>
                    <td><?php echo $row['manganh'];?></td>
                    <td><?php echo $row['makhoa'];?></td>
                    <td><?php echo $row['sdt'];?></td>
                    <td><?php echo $row['qq'];?></td>
                    <td><a href="upload/<?php echo $row['img'];?>" target="_blank"><?php echo $row['img'];?><br></a></td>
                    <td>
                        <a href="edit.php?sid=<?php echo $row['id'];?>" class="btn btn-info">Sửa</a> 
                        <a onclick="return confirm('Bạn có muốn xóa sinh viên này không ');" href="xoa.php?sid=<?php echo $row['id'];?>" class="btn btn-danger">Xóa</a>
                    </td>      
                            
                <?php
            }
        ?>
                </tbody>
        </table>
        </div>
    </div>
    
        
</body>
</html>


