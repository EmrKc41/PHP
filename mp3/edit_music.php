<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $artist = $_POST['artist'];

    $stmt = $conn->prepare("UPDATE music SET title = ?, artist = ? WHERE id = ? AND uploaded_by = ?");
    $stmt->bind_param("ssii", $title, $artist, $id, $_SESSION['user_id']);
    $stmt->execute();

    header("Location: dashboard.php");
}

$id = $_GET['id'];
$music = $conn->query("SELECT * FROM music WHERE id = $id AND uploaded_by = " . $_SESSION['user_id'])->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Müziği Düzenle</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <form method="post" action="edit_music.php" class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl mb-4">Müziği Düzenle</h2>
            <input type="hidden" name="id" value="<?= $music['id'] ?>">
            <div class="mb-4">
                <input type="text" name="title" value="<?= $music['title'] ?>" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <input type="text" name="artist" value="<?= $music['artist'] ?>" required class="w-full p-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Değişiklikleri Kaydet</button>
        </form>
    </div>
</body>
</html>
