<?php
session_start(); // Start the session to store login state
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
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
        input[type="password"] {
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
    <h1>Giriş Yap</h1>
    <form action="panel.php" method="post">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Giriş Yap">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'sadiye' && $password === '1234') {
            $_SESSION['loggedin'] = true;
            echo "Başarılı giriş yapıldı";
            echo '<meta http-equiv="refresh" content="1;url=add_product.php">';
        } else {
            echo "Hatalı kullanıcı adı veya şifre";
        }
    }
    ?>
</body>
</html>
