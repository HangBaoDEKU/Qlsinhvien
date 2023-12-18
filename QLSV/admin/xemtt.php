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
                <!-- <input class="btn" type="submit" name="" id="" value="Trang chủ" > -->
                <button class="btn" type="submit" name=""> <a href="https://www.tlu.edu.vn/">Trang chủ</a></button>
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
                    <th>Họ tên</th>

                    <th>Nghành</th>
                    <th>Khoa</th>
                </tr>
                </thead>
                <tbody>

                <?php
                //ketnoi
                require_once 'ketnoi.php';
                /* Truy vấn để reset lại id

                    SET @num := 0;

                    UPDATE hoso SET id = @num := (@num+1);

                    ALTER TABLE hoso AUTO_INCREMENT = 1;

                */
                //cau lenh
                $lietke_sql = "SELECT * FROM hoso ORDER BY id ASC"; //sẽ lấy tất cả các hàng từ bảng "hoso" và sắp xếp chúng theo cột "id" theo thứ tự tăng dần 
                //thuc thi cau lenh
                $result = mysqli_query($conn, $lietke_sql);
                // duyet qua result va in ra
                while($r = mysqli_fetch_assoc($result))
                {

                ?>
                
                    <tr>
                        <td><?php echo $r['id'];?></td>
                        <td><?php echo $r['hoten'];?></td>
                        <td><?php echo $r['manganh'];?></td>
                        <td><?php echo $r['makhoa'];?></td>
                    </tr>
                
                <?php
                }
                ?>  
                       

                </tbody>
        </table>
        </div>
    </div>

    <div>
        
    </div>
    
        
</body>
</html>


