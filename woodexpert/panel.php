<?php
// Kullanıcı bilgileri
$users = array(
    'gökhan' => '1234',
    'emir' => '1234'
);

// Formdan gelen veriler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı bilgilerini kontrol et
    if (isset($users[$username]) && $users[$username] == $password) {
        // Kullanıcı doğrulandı, hoşgeldin mesajını oluştur
        $welcome_message = "Hoşgeldiniz, " . ucfirst($username) . " Bey";
        
        // Diğer değişiklikleri yapmak için kullanıcıya ait dosyayı güncelle
        $updateResult = updateEmirIndex($username);

        // İşlem sonucuna göre alert mesajını oluştur
        $alert_message = $updateResult ? "İşlem başarıyla gerçekleştirildi." : "İşlem sırasında bir hata oluştu.";
    } else {
        // Kullanıcı doğrulanamadı, hata mesajı göster
        $error_message = "Kullanıcı adı veya şifre hatalı.";
    }
}

function updateEmirIndex($username) {
    // Burada emirindex.php dosyasını okuyarak güncellemeleri yapabilirsiniz.
    // Örneğin, dosyayı okuyarak içeriği bir değişkene alabilir, değişiklikleri yapabilir ve tekrar dosyaya yazabilirsiniz.
    // Aşağıda sadece bir örnek var, gerçek uygulamada daha karmaşık işlemler yapabilirsiniz.

    $emirIndexPath = "emirindex.php";
    $content = file_get_contents($emirIndexPath);

    // Formdan gelen değeri al
    $newContent = isset($_POST['degisecek_kısım_p']) ? htmlspecialchars($_POST['degisecek_kısım_p']) : '';

    // Yeni içeriği dosyaya ekle
    $content = preg_replace('/<div class="news">\s*<p>HABERLER:(.*?)<\/p>\s*<\/div>/s', '<div class="news"><p>HABERLER:' . $newContent . '</p></div>', $content);

    // Formdan gelen diğer değerleri al
    $ad = isset($_POST['ad']) ? htmlspecialchars($_POST['ad']) : '';
    $soyad = isset($_POST['soyad']) ? htmlspecialchars($_POST['soyad']) : '';
    $biyografi = isset($_POST['biyografi']) ? htmlspecialchars($_POST['biyografi']) : '';

    // Yeni içeriği dosyaya ekle
    $content = preg_replace('/<div class="popup">.*?<\/div>/s', '<div class="popup">Bu pencere içinde daha fazla bilgi verebilirsiniz.<br>Ad: ' . $ad . '<br>Soyad: ' . $soyad . '<br>Biyografi: ' . $biyografi . '</div>', $content);

    // Dosyaya güncellenmiş içerikle yaz
    return file_put_contents($emirIndexPath, $content) !== false;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yönetici Paneli</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: lightgrey;
      font-family:Arial;
      opacity: 0; /* Sayfa yüklenirken gizli */
      animation: fadeIn 1s ease-in-out forwards;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .panel {
      background-color: white;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      font-size:25px;

    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
    }

    input, textarea {
      padding: 8px;
      margin-bottom: 16px;
    }

    button {
      padding: 10px;
      background-color: orange;
      color: black;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width:180px;
    }

    button:hover {
      background-color: darkorange;
    }
  </style>
  <script>
    function showPopupInfo() {
      // Formdan gelen verileri al
      var ad = document.getElementById("ad").value;
      var soyad = document.getElementById("soyad").value;
      var biyografi = document.getElementById("biyografi").value;

      // Popup içindeki bilgileri güncelle
      document.querySelector(".popup").innerHTML = "Bu pencere içinde daha fazla bilgi verebilirsiniz.<br>Ad: " + ad + "<br>Soyad: " + soyad + "<br>Biyografi: " + biyografi;
    }
  </script>
</head>
<body>
  <div class="panel">
    <h1>Yönetici Paneli</h1>
    <?php
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        } elseif (isset($welcome_message)) {
            echo '<p style="color: green;">' . $welcome_message . '</p>';
        }
    ?>
    <form method="POST" action="panel.php" onsubmit="showAlert('<?php echo $alert_message; ?>'); showPopupInfo();">
      <table>
        <tr>
          <td>
            <label for="username">Kullanıcı Adı:</label>
          </td>
          <td>
            <input type="text" id="username" name="username" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Şifre:</label>
          </td>
          <td>
            <input type="password" id="password" name="password" required>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit">Giriş Yap</button>
          </td>
        </tr>
        <tr>
                <td>
                    <label for="degisecek_kısım_p">Haberler Kısmı:</label>
                </td>
                <td>
                    <textarea id="degisecek_kısım_p" name="degisecek_kısım_p" maxlength="100"></textarea>
                </td>
            </tr>  
        
        <tr>
          <td>
            <label for="ad">Ad:</label>
          </td>
          <td>
            <input type="text" id="ad" name="ad" maxlength="100">
          </td>
        </tr>
        <tr>
          <td>
            <label for="soyad">Soyad:</label>
          </td>
          <td>
            <input type="text" id="soyad" name="soyad" maxlength="100">
          </td>
        </tr>
        <tr>
          <td>
            <label for="biyografi">Biyografi:</label>
          </td>
          <td>
            <textarea id="biyografi" name="biyografi" maxlength="100"></textarea>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="degistir_button">Değiştir</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
