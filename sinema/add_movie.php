<?php
include 'db.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $description = $_POST['description'];
    $trailer = $_POST['trailer'];

    $stmt = $pdo->prepare("INSERT INTO movies (title, director, year, description, trailer) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $director, $year, $description, $trailer]);

    $movie_id = $pdo->lastInsertId();

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_path = 'images/' . $movie_id . '.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    header('Location: index.php');
    exit;
}
?>

<div class="container mt-5">
    <h2>Film Ekle</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Film Adı</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="director">Yönetmen</label>
            <input type="text" class="form-control" id="director" name="director" required>
        </div>
        <div class="form-group">
            <label for="year">Yıl</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="trailer">Fragman Linki (YouTube)</label>
            <input type="url" class="form-control" id="trailer" name="trailer" required>
        </div>
        <div class="form-group">
            <label for="image">Film Afişi</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Film Ekle</button>
    </form>
</div>

<?php include 'footer.php'; ?>
<?php
include 'db.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $description = $_POST['description'];
    $trailer = $_POST['trailer'];

    $stmt = $pdo->prepare("INSERT INTO movies (title, director, year, description, trailer) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $director, $year, $description, $trailer]);

    $movie_id = $pdo->lastInsertId();

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_path = 'images/' . $movie_id . '.jpg';
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    header('Location: index.php');
    exit;
}
?>

<div class="container mt-5">
    <h2>Film Ekle</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Film Adı</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="director">Yönetmen</label>
            <input type="text" class="form-control" id="director" name="director" required>
        </div>
        <div class="form-group">
            <label for="year">Yıl</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="trailer">Fragman Linki (YouTube)</label>
            <input type="url" class="form-control" id="trailer" name="trailer" required>
        </div>
        <div class="form-group">
            <label for="image">Film Afişi</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Film Ekle</button>
    </form>
</div>

<?php include 'footer.php'; ?>
