function signup(e){
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = {
        username : username,
        email : email,
        password : password,
    }
    var json = JSON.stringify(user);
    localStorage.setItem(username,json);
    alert("dang ky thanh cong");
    window.location.href="index.html"
}
function login(e){
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username);
    var data = JSON.parse(user);
    if(user ==null){
        alert("Vui lòng nhập tài khoản và mật khẩu")
    }
    else if(username==data.username && email == data.email && password==data.password){
        alert("dang nhap thanh cong")
        window.location.href="http://localhost:8888/lietke.php";
    }
    else{
        alert("Dang nhap that bại")
    }
}