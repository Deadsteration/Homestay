<!DOCTYPE html>
<html>
<head>
    <title>BBC Homestay</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <div class="alpha">
        <div class="form-box">
            <div class="logo-icon">
                <img src="bbc_blue.png">
            </div>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log Masuk</button>
                <button type="button" class="toggle-btn" onclick="register()">Daftar Baru</button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="ID Pengguna"required>
                <input type="text" class="input-field" placeholder="Kata Laluan"required>
                <button type="summit" class="summit-btn">Log Masuk</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="ID Pengguna"required>
                <input type="name" class="input-field" placeholder="Nama Pekerja"required>
                <input type="text" class="input-field" placeholder="Kata Laluan"required>
                <button type="summit" class="summit-btn">Daftar Baru</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>