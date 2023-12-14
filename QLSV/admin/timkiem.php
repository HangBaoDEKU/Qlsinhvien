
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
    <section id="header">
            <section class="sub-head" id="logo"><img src="anh2.png" alt="ab"></section>
            <section class="sub-head" id="menu">
                <ul id="danhmuc">
                <li class="tag" id="tag1"><a class="a-tag" href="http://localhost:8888/SV/tstlu.edu.vn.html">GIỚI THIỆU</a></li>
                <li class="tag" id="tag2"><a class="a-tag" href="http://localhost:8888/them.html">ĐĂNG KÝ</a></li>
                <li class="tag"><a class="a-tag" href="http://localhost:8888/xemtt.php">DANH SÁCH</a></li>
                <li class="tag"><a class="a-tag" href="http://localhost:8888/hschitiet.php">HỒ SƠ</a></li>
                <li class="tag"><a class="a-tag" href="../SV/huongdan.html">HƯỚNG DẪN</a></li>
                <li class="tag"><a class="a-tag" href="http://localhost:8888/SV/lienhe.html">LIÊN HỆ</a></li>
                </ul>
            </section>
            <section class="sub-head" id="button1">
                <input class="btn" type="submit" name="" id="" value="Tư vấn ngay">
            </section>
    </section>



    <div class="container">
        <div class="canle"> 
            <h1>Danh sách sinh viên đăng ký</h1>
            <div>
                <form method="post" action="timkiem.php">
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
                </tr>
                </thead>
                <tbody>

        <?php
            require_once 'ketnoi.php';
            if($_POST['noidungtk'] == NULL ) 
            {
                header("Location: xemtt.php");
            }
            elseif(isset($_POST['timk'])){
                $noidungtk = $_POST['noidungtk'];
            }
            
        
            $sql = "SELECT * FROM sinhvien WHERE masv LIKE '%$noidungtk%' or hoten LIKE '%$noidungtk%'"; //Chiếu tất cả các cột từ bảng sinh viên chọn masv giống biến noidungtk
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) 
            // Hàm mysqli_fetch_array() được sử dụng để lấy một hàng dữ liệu từ kết quả trả về của truy vấn MySQL và trả về dưới dạng một mảng.
            {
                ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['masv'];?></td>
                    <td><?php echo $row['hoten'];?></td>
                    <td><?php echo $row['manghanh'];?></td>
                    <td><?php echo $row['makhoa'];?></td>
                                
                            
                <?php
            }
        ?>
                </tbody>
        </table>
        </div>
    </div>
    
        
</body>
</html>


