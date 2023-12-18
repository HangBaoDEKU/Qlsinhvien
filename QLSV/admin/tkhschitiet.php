
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
            <h1>Thông tin hồ sơ của thí sinh với mã:  <?php
        require_once 'ketnoi.php';
        echo $_POST['noidungtk']  ?></h1>
            <div>
                <form method="post" action="tkhschitiet.php">
                    <input type="text" name="noidungtk">
                    <button type="submit" name="timk">Tìm kiếm</button>
                </form>
            </div>
            <table class="table table-dark table-hover">
                <thead>
                <tr>
                <th>Mã thí sinh</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Email</th>
                <th>Tổng Điểm</th>
                <th>Nghành</th>
                <th>Khoa</th>
                <th>Số điện thoại</th>
                <th>Quê quán</th>
                <th>Ảnh</th>
                </tr>
                </thead>
                <tbody>

                <?php
    require_once 'ketnoi.php';
        if($_POST['noidungtk'] == NULL){
            header("Location: hschitiet.php");
        }
        elseif(isset($_POST['timk'])){
            $noidungtk = $_POST['noidungtk'];
        }
        
    
        $sql = "SELECT * FROM hoso WHERE mats LIKE '%$noidungtk%' ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            ?>
                <td><?php echo $row['mats'];?></td>
                <td><?php echo $row['hoten'];?></td>
                <td><?php echo $row['ntm'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['diem'];?></td>
                <td><?php echo $row['manganh'];?></td>
                <td><?php echo $row['makhoa'];?></td>
                <td><?php echo $row['sdt'];?></td>
                <td><?php echo $row['qq'];?></td>
                <td><a href="upload/<?php echo $row['img'];?>" target="_blank"><?php echo $row['img'];?><br></a></td>
                            
                        
            <?php
        }
?>
                </tbody>
        </table>
        </div>
    </div>
    
        
</body>
</html>


