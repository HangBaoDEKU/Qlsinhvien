<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê admin</title>
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
        <h1>Danh sách sinh viên đăng ký</h1>
        <!-- <a href="them.html" class="btn btn-success">Thêm sinh viên</a> -->
    <!-- Button để một Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Thêm mới sinh viên
    </button>
    

    

    <div>
        
        <?php
            //nhận dữ liệu từ form file them.html
            $ht = $_POST['hoten'];
            $masv = $_POST['masv'];
            $email = $_POST['email'];
            $manghanh = $_POST['manghanh'];
            $makhoa = $_POST['makhoa'];
            $sdt = $_POST['sdt'];
            $qq = $_POST['qq'];
            $diem = $_POST['diem'];
            $ntm = $_POST['ntm'];

            if(isset($_FILES['img'])){
                $hinhanhpath = basename($_FILES["img"]["name"]);

                //upload file
                $target_dir = "upload/";
                $target_file = $target_dir . $hinhanhpath;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            }


            //ket noi csdl
            require_once 'ketnoi.php';

            //viet lenh sql de them dữ liệu

            if($masv == NULL or $ht == NULL or $email == NULL or $manghanh == NULL or $makhoa ==NULL or $sdt == NULL or $qq == NULL or $diem == NULL ){
                echo "Bạn chưa nhập đầy đủ thông tin";
            }
            else{
                $themsql = "INSERT INTO sinhvien
                (masv, hoten, ntm, email, manghanh, makhoa, sdt, qq, diem, img) VALUES ('$masv','$ht', '$ntm','$email','$manghanh','$makhoa','$sdt','$qq', '$diem', '$hinhanhpath')";
                //thực thi câu lệnh
                mysqli_query($conn, $themsql);
                // echo "<h1> Them thanh cong </h1>";
                header("Location: xemtt.php");
            }

            ?>

    </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm sinh viên</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
                
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
        
</body>
</html>


