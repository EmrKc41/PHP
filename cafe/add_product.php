<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekle</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #ff8c00;
            margin-top: 2rem;
        }

        form {
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 0.75rem;
            color: white;
            background-color: #ff8c00;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <h2>Yeni Ürün Ekle</h2>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <label for="isim">Ürün İsmi:</label>
        <input type="text" name="isim" id="isim" required><br>
        <label for="aciklama">Açıklama:</label>
        <textarea name="aciklama" id="aciklama" required></textarea><br>
        <label for="fiyat">Fiyat:</label>
        <input type="text" name="fiyat" id="fiyat" required><br>
        <label for="resim">Resim:</label>
        <input type="file" name="resim" id="resim" required><br>
        <input type="submit" value="Ekle">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isim = $_POST['isim'];
        $aciklama = $_POST['aciklama'];
        $fiyat = $_POST['fiyat'];
        $resim = 'uploads/' . basename($_FILES['resim']['name']);
        move_uploaded_file($_FILES['resim']['name'], $resim);

        $sql = "INSERT INTO urunler (isim, aciklama, fiyat, resim) VALUES ('$isim', '$aciklama', '$fiyat', '$resim')";

        if ($conn->query($sql) === TRUE) {
            echo "Yeni ürün başarıyla eklendi";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
