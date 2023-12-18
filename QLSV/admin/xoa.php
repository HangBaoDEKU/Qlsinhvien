<?php
//lay du lieu id can xoa
$svid = $_GET['sid'];
// echo $id;
//ket noi
require_once 'ketnoi.php';
//cau lenh sql
$xoa_sql = "DELETE FROM hoso WHERE id=$svid";

mysqli_query($conn, $xoa_sql);
echo"<h1>Xóa thành công</h1>";
//tro ve trang lien ket
header("Location: lietke.php");
