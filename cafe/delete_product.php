<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM urunler WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Ürün başarıyla silindi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

header("Location: index.php");
?>
