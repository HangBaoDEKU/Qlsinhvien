<?php
//nhận dữ liệu từ form file them.html
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$email = $_POST['email'];
$manghanh = $_POST['manghanh'];
$makhoa = $_POST['makhoa'];
$id = $_POST['sid'];
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

if($masv == NULL or $ht == NULL or $email == NULL or $manghanh == NULL or $makhoa ==NULL or $sdt == NULL or $qq == NULL  ){
    echo "Bạn chưa nhập đầy đủ thông tin";
}
else{
    $updatesql = "UPDATE sinhvien SET
    masv = '$masv', hoten='$ht', ntm='$ntm', email= '$email', diem = '$diem', manghanh='$manghanh', makhoa='$makhoa', sdt = '$sdt', qq='$qq',img = '$hinhanhpath'
    WHERE id='$id' ";
    //echo $updatesql; exit;

    //thực thi câu lệnh
    mysqli_query($conn, $updatesql);
    header("Location: lietke.php");
}













