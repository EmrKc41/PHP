<?php
$servername = "localhost";
$username = "root"; // Genellikle root olarak kalır, ama farklı bir kullanıcı adı belirlediyseniz onu kullanın.
$password = ""; // XAMPP varsayılan şifresi boştur, ama belirlediyseniz o şifreyi kullanın.
$dbname = "cafe";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
