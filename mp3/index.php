<?php
session_start();
include 'db.php';

$musics = $conn->query("SELECT * FROM music");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Müzik Sitesi</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .scrolling-text {
            display: inline-block;
            white-space: nowrap;
            animation: scroll 10s linear infinite;
        }

        @keyframes scroll {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.php" class="text-2xl hover:bg-blue-700 p-2 rounded">Müzik Sitesi</a>
            <div>
                <a href="index.php" class="mr-4 hover:bg-blue-700 p-2 rounded">Ana Sayfa</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php" class="mr-4 hover:bg-blue-700 p-2 rounded">Yönetim Paneli</a>
                    <a href="logout.php" class="mr-4 hover:bg-blue-700 p-2 rounded">Çıkış Yap</a>
                <?php else: ?>
                    <a href="login.php" class="mr-4 hover:bg-blue-700 p-2 rounded">Giriş Yap</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Scrolling text -->
    <div class="bg-gray-200 p-2 overflow-hidden">
        <div class="scrolling-text">
            <?php while ($music = $musics->fetch_assoc()): ?>
                <span class="mx-4"><?= $music['title'] ?> by <?= $music['artist'] ?></span>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Main content -->
    <main class="container mx-auto flex-grow p-6">
        <h1 class="text-3xl my-6">Müzik Listesi</h1>
        <ul>
            <?php $musics->data_seek(0); // Reset result pointer ?>
            <?php while ($music = $musics->fetch_assoc()): ?>
                <li class="bg-white p-4 rounded shadow-md mb-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <p><?= $music['title'] ?> by <?= $music['artist'] ?></p>
                        </div>
                        <audio controls class="ml-4">
                            <source src="<?= $music['file_path'] ?>" type="audio/mpeg">
                        </audio>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white p-4 text-center">
        &copy; Esma Saydın. Tüm hakları saklıdır.
    </footer>
</body>
</html>
