<?php

include "service/database.php";

if (isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, password) VALUES
    ('$username', '$password')";

    if ($db->query($sql)) {
        echo "<script>
    setTimeout(function() {
        alert('Anda berhasil di daftarkan, silahkan login!');
    }, 100);
</script>";
    } else {

    }

}
if (isset($_POST['login'])){
    $username = $_POST["usernamed"];
    $password = $_POST["passwordd"];

    $sql = "SELECT * FROM users WHERE username='$username' AND 
    password='$password'";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        echo "<script>
    setTimeout(function() {
        alert('Berhasil login, klik OK untuk melanjutkan');
        window.location.href = 'awal.php';
    }, 3000);
</script>";
    }else{
        echo "<script>
    setTimeout(function() {
        alert('Username atau password salah!');
    }, 3000);
</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="toogle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="form-container  sign-up">
            <form action="index.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-github"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>atau gunakan email Anda untuk pendaftaran</span>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button name="register" type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="index.php" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-github"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>atau gunakan kata sandi email Anda</span>
                <input type="username" id="usernameInput" placeholder="Username" name="usernamed">
                <input type="password" id="passwordInput" placeholder="Password" name="passwordd">
                <a href="#">Lupa password</a>
                <button name="login" type="submit" name="login">
                    Masuk</button>
            </form>
        </div>
        <div class="toogle-container">
            <div class="toogle">
                <div class="toogle-panel toogle-left">
                    <h1>Selamat datang</h1>
                    <p>Masukkan data pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toogle-panel toogle-right">
                    <h1>Digital shop!</h1>
                    <p>Daftarlah dengan data pribadi untuk menggunakan semua fitur situs.</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>