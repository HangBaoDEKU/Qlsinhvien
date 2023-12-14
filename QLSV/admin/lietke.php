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
        <form method="post" action="timkiem.php">
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
            <th>Thao tác</th>

        </tr>
        </thead>
        <tbody>

        <?php
        //ketnoi
        require_once 'ketnoi.php';
        //cau lenh
        $lietke_sql = "SELECT * FROM sinhvien order by hoten, masv"; 
        //thuc thi cau lenh
        $result = mysqli_query($conn, $lietke_sql);
        // duyet qua result va in ra
        while($r = mysqli_fetch_assoc($result)){

        ?>
           
            <tr>
                <td><?php echo $r['masv'];?></td>
                <td><?php echo $r['hoten'];?></td>
                <td><?php echo $r['ntm'];?></td>
                <td><?php echo $r['email'];?></td>
                <td><?php echo $r['diem'];?></td>
                <td><?php echo $r['manghanh'];?></td>
                <td><?php echo $r['makhoa'];?></td>
                <td><?php echo $r['sdt'];?></td>
                <td><?php echo $r['qq'];?></td>
                <td><a href="upload/<?php echo $r['img'];?>" target="_blank"><?php echo $r['img'];?><br></a></td>
                <td>
                    <a href="edit.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a> 
                    <a onclick="return confirm('Bạn có muốn xóa sinh viên này không ');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        
        <?php
        }
        ?>  
        </tbody>
    </table>
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
            <div class="modal-body">
            <form action="them.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="hoten">Họ tên</label>
                    <input type="text" id="hoten" class="form-control" name="hoten">
                </div>

                <div class="form-group">
                    <label for="ntm">Ngày sinh</label>
                    <input type="date" id="ntm" class="form-control" name="ntm">
                </div>

                <div class="form-group">
                    <label for="masv">Mã Thí Sinh</label>
                    <input type="text" id="masv" name="masv" class="form-control">
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="diem">Điểm</label>
                    <input type="text" id="diem" name="diem" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="manghanh">Mã nghành</label>
                    <input type="text" id="manghanh" name="manghanh" class="form-control">
                </div>


                <div class="form-group">
                    <label for="makhoa">Mã Khoa</label>
                    <input type="text" id="makhoa" name="makhoa" class="form-control">
                </div> 

                <div class="form-group">
                    <label for="sdt">Số điện thoại</label>
                    <input type="text" id="sdt" name="sdt" class="form-control">
                </div>

                <div class="form-group">
                    <label for="qq">Quê quán</label>
                    <input type="text" id="qq" name="qq" class="form-control">
                </div>

                <div class="form-group" name="thongtinanh">
                    <label for="img">Nhập FILE Minh Chứng</label>
                    <input type="file" id="img" name="img" class="form-control">
                </div>

                

                <button class="btn btn-success">Thêm sinh viên</button>

            </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
        
</body>
</html>


