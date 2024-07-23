<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sabit kullanıcı adı ve şifre kontrolü
    if ($username === 'admin' && $password === '123') {
        $_SESSION['user_id'] = 1; // Sabit bir kullanıcı ID'si atayabilirsiniz
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Geçersiz kullanıcı adı veya şifre";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <form method="post" action="login.php" class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl mb-4">Giriş Yap</h2>
            <div class="mb-4">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Şifre" required class="w-full p-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Giriş Yap</button>
            <?php if (isset($error)) echo "<p class='text-red-500 mt-4'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>
