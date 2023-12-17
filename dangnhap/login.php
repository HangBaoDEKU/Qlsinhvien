<?php
    include 'ketnoitk.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' ){

        //Lấy dữ liệu người dùng nhập vào
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password); //Mã hóa password 


        //Kiểm tra xem nếu đúng thông tin thì row truy vấn > 0 thì sẽ chạy
        $sql = "SELECT * FROM taikhoan WHERE username='$username' AND email= '$email' AND password= '$password' ";
        $user = mysqli_query($conn,$sql);
        if(mysqli_num_rows($user) > 0){
            ?>
            <script>alert("Bạn đã đăng nhập thành công");
            window.location.href="http://localhost:8888/lietke.php";</script>
            <?php
        }
        else{
            ?>
            <script>alert("Mời kiểm tra lại tài khoản hoặc mật khẩu hoặc email");
            window.location.href="http://localhost:9999/index.html";</script>
            <?php
        }


    }
    else{
        ?>
        <script>alert("Hãy nhập đầy đủ thông tin để đăng nhập");
        window.location.href="http://localhost:9999/index.html";</script>
        <?php
    }
?>