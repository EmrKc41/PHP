<?php
session_start();
include 'db.php'; // Veritabanı bağlantısını sağlayan dosya

if (isset($_POST['id'])) {
    $id = $_POST['i'];

    // Filmi veritabanından sil
    $sql = "DELETE FROM movies WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("id", $id);
        if ($stmt->execute()) {
            header('Location: index.php');
            exit;
        } else {
            echo "Hata: Film silinemedi.";
        }
    } else {
        echo "Hata: Veritabanı sorgusu hazırlanamadı.";
    }
} else {
    echo "Hata: Geçersiz film ID.";
}
?>
