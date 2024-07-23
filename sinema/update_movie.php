<?php
session_start();
include 'db.php'; // Veritabanı bağlantısını sağlayan dosya

if (isset($_POST['id'])) {
    $id = $_POST['i'];

    // Use $pdo for database operations
    $sql = "SELECT * FROM movies WHERE id = ?";
    if ($stmt = $pdo->prepare($sql)) { // Use $pdo for PDO connection
        $stmt->bind_param("id", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $movie = $result->fetch_assoc();
    }
}

// Güncelleme formu gönderildiğinde
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $description = $_POST['description'];
    $trailer = $_POST['trailer'];
    $id = $_POST['id'];

    // Film bilgilerini güncelle
    $sql = "UPDATE movies SET title = ?, director = ?, year = ?, description = ?, trailer = ? WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssi", $title, $director, $year, $description, $trailer, $id);
        if ($stmt->execute()) {
            header('Location: index.php');
            exit;
        } else {
            echo "Hata: Film güncellenemedi.";
        }
    } else {
        echo "Hata: Veritabanı sorgusu hazırlanamadı.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Güncelle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Film Güncelle</h1>
    <form action="update_movie.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($movie['id']); ?>">
        <div class="form-group">
            <label for="title">Film Başlığı</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($movie['title']); ?>" required>
        </div>
        <div class="form-group">
            <label for="director">Yönetmen</label>
            <input type="text" class="form-control" id="director" name="director" value="<?php echo htmlspecialchars($movie['director']); ?>" required>
        </div>
        <div class="form-group">
            <label for="year">Yıl</label>
            <input type="number" class="form-control" id="year" name="year" value="<?php echo htmlspecialchars($movie['year']); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($movie['description']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="trailer">Tanıtım Linki</label>
            <input type="text" class="form-control" id="trailer" name="trailer" value="<?php echo htmlspecialchars($movie['trailer']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
