<?php
    include 'ketnoitk.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' )
    {   
        //Lấy dữ liệu người dùng nhập vào
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $manv = $_POST["manv"];
        if($password != $repassword){    //Kiểm tra xem nhập lại mật khẩu có trùng với mật khẩu hay không
            ?>
            <script>alert("Mật khẩu không trùng mời kiểm tra lại");
            window.location.href="http://localhost:9999/signup.html";</script>
            <?php
        }
        else if(strlen($password)<7){
            ?>
            <script>alert("Mật khẩu quá ngắn. Mật khẩu phải trên 8 kí tự");
            window.location.href="http://localhost:9999/signup.html";</script>
            <?php

        }

        else if($manv != "MNVTLU"){
            ?>
            <script>alert("Hãy nhập đúng mã mà trường cung cấp để đăng ký");
            window.location.href="http://localhost:9999/signup.html";</script>
            <?php
        }

        else{
             // Kiểm tra xem có email đã tồn tại hay chưa
            $sql = "SELECT * FROM taikhoan WHERE email= '$email' ";
            $old = mysqli_query($conn,$sql);
            $password = md5($password); //Mã hóa password tăng bảo mật 
            if( mysqli_num_rows($old) > 0){
                ?>
                <script>alert("Email này đã tồn tại");
                window.location.href="http://localhost:9999/signup.html";</script>
                <?php
            }
            else{
                $sql = "INSERT INTO taikhoan (username,password,email) VALUES ('$username','$password','$email')  ";
                mysqli_query($conn,$sql);
                ?>
                <script>alert("Đăng kí thành công");
                window.location.href="http://localhost:9999/index.html";</script>
                <?php
            }

        }   
    
    }
    else{
        ?>
        <script>alert("Hãy nhập đầy đủ thông tin để đăng kí");
        window.location.href="http://localhost:9999/signup.html";</script>
        <?php
    }
?>