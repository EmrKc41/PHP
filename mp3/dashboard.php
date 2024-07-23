<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['music'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $file = $_FILES['music'];

    $filePath = 'music/' . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $stmt = $conn->prepare("INSERT INTO music (title, artist, file_path, uploaded_by) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $title, $artist, $filePath, $_SESSION['user_id']);
        $stmt->execute();
    }
}

$musics = $conn->query("SELECT * FROM music WHERE uploaded_by = " . $_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center">
        <h1 class="text-3xl my-6">Dashboard</h1>
        <a href="index.php" class="mb-6 bg-blue-500 text-white p-2 rounded">Ana Sayfaya Git</a>
        <form method="post" action="dashboard.php" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md w-1/2">
            <div class="mb-4">
                <input type="text" name="title" placeholder="Başlık" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <input type="text" name="artist" placeholder="Sanatçı" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <input type="file" name="music" required class="w-full p-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Müzik Ekle</button>
        </form>
        <ul class="w-1/2 mt-6">
            <?php while ($music = $musics->fetch_assoc()): ?>
                <li class="bg-white p-4 rounded shadow-md mb-4 flex justify-between items-center">
                    <div>
                        <p><?= $music['title'] ?> by <?= $music['artist'] ?></p>
                    </div>
                    <div>
                        <a href="edit_music.php?id=<?= $music['id'] ?>" class="text-blue-500 mr-2">Düzenle</a>
                        <a href="delete_music.php?id=<?= $music['id'] ?>" class="text-red-500">Sil</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
