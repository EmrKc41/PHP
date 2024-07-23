<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $isim = $_POST['isim'];
    $aciklama = $_POST['aciklama'];
    $fiyat = $_POST['fiyat'];
    $resim = 'uploads/' . basename($_FILES['resim']['name']);
    move_uploaded_file($_FILES['resim']['name'], $resim);

    $sql = "UPDATE urunler SET isim='$isim', aciklama='$aciklama', fiyat='$fiyat', resim='$resim' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Ürün başarıyla güncellendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM urunler WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Düzenle</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Ürün Düzenle</h2>
    <form action="edit_product.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="isim">Ürün İsmi:</label>
        <input type="text" name="isim" id="isim" value="<?php echo $row['isim']; ?>" required><br>
        <label for="aciklama">Açıklama:</label>
        <textarea name="aciklama" id="aciklama" required><?php echo $row['aciklama']; ?></textarea><br>
        <label for="fiyat">Fiyat:</label>
        <input type="text" name="fiyat" id="fiyat" value="<?php echo $row['fiyat']; ?>" required><br>
        <label for="resim">Resim:</label>
        <input type="file" name="resim" id="resim" value="<?php echo $row['resim']; ?>" required>><br>
        <input type="submit" value="Güncelle">
    </form>
</body>
</html>
