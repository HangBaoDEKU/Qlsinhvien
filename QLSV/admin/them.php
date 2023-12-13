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

$noidungmasv = $_POST['masv'];
$sql = "SELECT * FROM sinhvien WHERE masv = '$noidungmasv'";
$result = mysqli_query($conn, $sql);

if($masv == NULL or $ht == NULL or $email == NULL or $manghanh == NULL or $makhoa ==NULL or $sdt == NULL or $qq == NULL or $diem == NULL ){
    // echo "Bạn chưa nhập đầy đủ thông tin";
    ?>
        <script>alert("Bạn chưa nhập đầy đủ thông tin");
         window.location.href="http://localhost:8888/them.html";</script>
    <?php
}

elseif (mysqli_num_rows($result) == 0) {
    $themsql = "INSERT INTO sinhvien
    (masv, hoten, ntm, email, manghanh, makhoa, sdt, qq, diem, img) VALUES ('$masv','$ht', '$ntm','$email','$manghanh','$makhoa','$sdt','$qq', '$diem', '$hinhanhpath')";
    //thực thi câu lệnh
    mysqli_query($conn, $themsql);
    // echo "<h1> Them thanh cong </h1>";
    ?>
        <script>alert("Bạn đã đăng ký thành công");
        window.location.href="http://localhost:8888/hschitiet.php";</script>
    <?php
} 
else {
    ?>
    <script>alert("Mã sinh viên đã được đăng kí."+"Mời bạn xem lại hoặc liên hệ với trường");
     window.location.href="http://localhost:8888/them.html";</script>
    <?php
}    


//echo $themsql; exit;











