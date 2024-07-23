<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyma Cafe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Uyma Cafe</h1>
        </div>
        <ul>
            <li><a href="#menu">İçecek Menüsü</a></li>
            <li><a href="#about">Bize Ulaş</a></li>
            <li><a href="#special">Özel İçecekler</a></li>
            <li><a href="#contact">İletişim</a></li>
            <li><a href="panel.php" target="_blank">Panele erişmek için tıklayınız.</a></li>

        </ul>
    </nav>
    <section id="menu">
        <div class="container">
            <h2>İçecek Menüsü</h2>
            <div class="product-list" id="product-list">
                <?php
                $sql = "SELECT * FROM urunler";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product-item'>";
                        echo "<img src='" . $row["resim"] . "' alt='" . $row["isim"] . "'>";
                        echo "<h3>" . $row["isim"] . "</h3>";
                        echo "<p>" . $row["aciklama"] . "</p>";
                        echo "<p>$" . $row["fiyat"] . "</p>";
                        echo "<a href='edit_product.php?id=" . $row["id"] . "'>Düzenle</a> ";
                        echo "<a href='delete_product.php?id=" . $row["id"] . "'>Sil</a>";
                        echo "</div>";
                    }
                } else {
                    echo "0 sonuç";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 Şadiye Uyma. All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>

</body>
</html>
