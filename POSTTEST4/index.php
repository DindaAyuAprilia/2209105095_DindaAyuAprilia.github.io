<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Di sini Anda dapat melakukan validasi login atau menyimpan data ke database
    // Contoh sederhana untuk menampilkan data yang dimasukkan:
    echo "Nama: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Email: " . $email;
}

// Periksa apakah user sudah login, jika iya, tampilkan popup
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo "openPopup();";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xuensun - World Of Your Fanfic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="light-mode">
    <header>
        <div style="font-family: bobaland;" class="navbar">
            <a style="padding-top: 30px;float: left;" href="#">
                <img src="xuensun.jpg" alt="Logo" class="logo">
            </a>
            <a style="padding-top: 40px;float: right;" href="index.html">About Me</a>
            <a style="padding-top: 40px;float: right;" href="index.php">Home</a>
            <a style="padding-top: 40px;float: right;" class="mode-button" onclick="toggleMode()">Mode Gelap/Terang</a>

        </div>
    </header>

    <main>
        <div style="text-align: center;" class="main-content">
            <h1>Welcome To XuenSun!</h1>
            <p>Di XuenSun, kami memahami bahwa membaca fanfic adalah bagian penting dari rutinitas harian Anda.
                Itu sebabnya kami menciptakan platform yang memungkinkan Anda mengakses fanfic favorit Anda kapan saja dan di mana saja!
                Dengan layanan berlangganan kami, Anda tidak akan pernah ketinggalan cerita yang Anda sukai.
                Anda akan menerima pemberitahuan tepat waktu untuk unggahan baru, akses eksklusif ke cerita khusus kami,
                dan kesempatan untuk membaca karya yang belum dipublikasikan sebelum orang lain. <br><br>
                Jadi mengapa menunggu?
                Berlangganan XuenSun hari ini dan dapatkan konten yang Anda idamkan, sesuai permintaan!
                Daftar sekarang dan buka dunia dengan kemungkinan membaca tanpa batas.</p>
                <a href="login.php"><button style="font-family: bobaland;" class="login-button">Daftar Sekarang!</button></a>
        </div>
    </main>

    <article class="main-content">
        <div>
            <center>
            <h1 style="padding: 1px;box-shadow:300px"> 
            <img width="200" style="border-radius: 30px;" src="ebook1.jpeg" alt="">
            <img width="200" style="border-radius: 30px;" src="ebook3.jpeg" alt="">
            <img width="200" style="border-radius: 30px;" src="ebook1.jpeg" alt=""> <br> 
            
            <button style="background-color: white;border-radius:30px;font-size:20px;padding-left:20px;padding-right:20px;">
            <b><a style="font-family: bobaland; color:rgb(0, 0, 0); text-decoration: none;"  href="index.html" title="Buy Now!"> Buy Now! </a></b> </button> </center></li> <br>
            <br>
            </center>
        </h1>
            </div>
    </article>

        <!-- Popup untuk mode gelap/terang -->
    <div id="popup" class="popup">
        <p>Mode Gelap/Terang telah diubah!</p>
    </div>

    <div id="login-popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Login Berhasil</h2>
            <p>Selamat datang! Anda telah berhasil login.</p>
        </div>
    </div>
    


    <script>
        function toggleMode() {
            const body = document.body;
            const popup = document.getElementById("popup");
            
            // Toggle mode
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");
        
            // Tampilkan popup
            popup.style.display = "block";
        
            // Sembunyikan popup setelah 2 detik
            setTimeout(function() {
                popup.style.display = "none";
            }, 5000);
        }
    </script>

    <footer>
        <div class="footer">
            Dinda Ayu Aprilia (2209106095)
        </div>
    </footer>
</body>
</html>
