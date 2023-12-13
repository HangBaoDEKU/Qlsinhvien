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
        <div class="canle" style="text-align: center;margin-top:20px; "> 
            <h1 style="margin-bottom:20px;">Hồ sơ đã nhập</h1>
            <h2 style="margin-bottom:20px;">Vui lòng nhập mã thí sinh để xem lại hồ sơ</h2>
            <div style="margin-bottom:20px;">
                <form method="post" action="tkhschitiet.php">
                    <input type="text" name="noidungtk" placeholder="Vui lòng nhập mã thí sinh"><br>
                    <button type="submit" name="timk">Tìm kiếm</button>
                </form>
            </div>
            
        </div>
    </div>

    <div>
        
    </div>
    
        
</body>
</html>


