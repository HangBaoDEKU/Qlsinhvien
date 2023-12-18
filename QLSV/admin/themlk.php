<?php
//nhận dữ liệu từ form bằng phương thức POST từ file them.html
$ht = $_POST['hoten'];
$mats = $_POST['mats'];
$email = $_POST['email'];
$manganh = $_POST['manganh'];
$makhoa = $_POST['makhoa'];
$sdt = $_POST['sdt'];
$qq = $_POST['qq'];
$diem = $_POST['diem'];
$ntm = $_POST['ntm'];

if(isset($_FILES['img'])) // Dùng hàm isset() để kiểm tra dữ liệu có tồn tại
{
    $hinhanhpath = basename($_FILES["img"]["name"]); // Dùng để lấy tên file
    //upload file
    $target_dir = "upload/";
    $target_file = $target_dir . $hinhanhpath;
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
}


//ket noi csdl
require_once 'ketnoi.php';

//viet lenh sql de them dữ liệu

$noidungmats = $_POST['mats'];
$sql = "SELECT * FROM hoso WHERE mats = '$noidungmats'"; // Truy vấn Chiếu tất cả các cột từ bảng sinh viên chọn mats = biến noidungmats
$result = mysqli_query($conn, $sql); //dùng hàm mysqli_query để thực thi câu truy vấn SQL trên cơ sở dữ liệu và trả về một đối tượng

if($mats == NULL or $ht == NULL or $email == NULL or $manganh == NULL or $makhoa ==NULL or $sdt == NULL or $qq == NULL or $diem == NULL ){
    // echo "Bạn chưa nhập đầy đủ thông tin";
    ?>
        <script>alert("Bạn chưa nhập đầy đủ thông tin");
         window.location.href="http://localhost:8888/lietke.php";</script>
    <?php
}

elseif (mysqli_num_rows($result) == 0)  //mysqli_num_rows() được sử dụng để đếm số hàng dữ liệu trả về từ kết quả của một truy vấn SELECT.
{
    $themsql = "INSERT INTO hoso
    (mats, hoten, ntm, email, manganh, makhoa, sdt, qq, diem, img) VALUES ('$mats','$ht', '$ntm','$email','$manganh','$makhoa','$sdt','$qq', '$diem', '$hinhanhpath')";
    //thực thi câu lệnh
    mysqli_query($conn, $themsql);
    // echo "<h1> Them thanh cong </h1>";
    ?>
        <script>alert("Bạn đã đăng ký thành công");
        window.location.href="http://localhost:8888/lietke.php";</script>
    <?php
} 
else {
    ?>
    <script>alert("Mã sinh viên đã được đăng kí.");
     window.location.href="http://localhost:8888/lietke.php";</script>
    <?php
}    


//echo $themsql; exit;











