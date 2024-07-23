<?php
$servername = "localhost"; // Veritabanı sunucunuz
$username = "root"; // Veritabanı kullanıcı adınız
$password = ""; // Veritabanı şifreniz
$dbname = "music_site"; // Veritabanı adınız

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
