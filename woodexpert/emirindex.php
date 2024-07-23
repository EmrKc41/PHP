<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoodeXpert.com.tr: Bir araya toplanma ve güven önemlidir!</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @media only screen and (max-width: 600px) {
            nav {
                height: auto;
                }
            }
        body {
            background-color: lightgrey;
            margin: 0;
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
        nav {
            background-color: #A6051A;
            width: auto;
            height: 75px;
            margin: 1px;
            padding: 0px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Hafif gölgelendirme */
            font-family: Arial, Helvetica, sans-serif;
            font-size: 125%;
        }

        .siteicon {
            
            width:150px;
            height:75px;
            padding:0px;
            margin:0px;
            background-color:#1c1c1c;
            text-align:center;
            
        }
        .siteicon2 {
            
            width:170px;
            height:75px;
            padding:0px;
            margin:0px;
            background-color:#363636;
            text-align:center;
            
        }
        .kur2 {
            
            
            padding:0px;
            margin:0px;
            background-color:#363636;
            text-align:center;
            
        }
 
        #hakkindaDiv {
            position: relative;
            display: inline-block;
        }

        #hakkindaDiv .popup {
            display: none;
            position: absolute;
            background-color: #fff; /* Pencere arka plan rengi */
            border: 1px solid #ccc; /* Pencere kenarlık rengi */
            padding: 20px;
            z-index: 1; /* Pencerenin diğer elementlerin üstünde olmasını sağlar */
            width: 300px; /* Pencere genişliği */
            border:1;
            border-radius:4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Gölge efekti */
            animation: fadeIn 0.3s ease-in-out; /* Animasyon efekti */
        }

        #hakkindaDiv:hover .popup {
            display: block;
            width:400px;
            
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .nav-input {
            margin-left: -10px;
            margin-right: 20px;
            height: 30px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            width: 1000px;
        }

        .image-container {
            position: relative;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 1500px;
            height: 750px;
            overflow: hidden;
            left: 250px;
            top: 0px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /*opacity: 0.8;*/
            /* Bottom kısmının opacity'si */
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            /* Alt kısmın solukluğu */
            /*background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);*/
        }

        .container {
            display: flex;
            margin-bottom: 10px ;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            text-align: center;
            align-items:center;
            

        }

        .box {
            width: 350px;
            height: 500px;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: white;
            margin: 10px;
            padding-left: 5px;
            line-height: 10px;
            position: relative;
            left: 235px;
            top: -720px;
            box-shadow: 0 4px 8px #A6051A;
            /* Hafif gölgelendirme */
            
        }
        .box ul
        {
            list-style: none; /* Madde işareti gizle */
            padding: 0; /* Liste içeriği ile kenarlık arasındaki boşluğu kaldır */
            margin: 0;
            
        }
        .box li
        {
            
            margin-bottom:10px;
            font-size:15px;
            
        }
        .box li a
        {
            text-decoration:none;
            color:green;
        }
        .box li a:hover
        {
            color: darkgreen;
        }
        footer {
            background-color: #A6051A;
            color: white;
            padding: 20px;
            text-align: center;
            bottom: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight:bold;
            margin-top: 0px;
        }

        .container:last-child {
            margin-bottom: -20px;
            /* İhtiyaca göre ayarlayabilirsiniz */
        }

        .news {
            background-color: #ff3030;
            width: auto;
            height: 50px;
            margin:1px;
            border-radius: 4px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight:bold;
            color:white;
            text-align:center;
            margin-bottom: 1px; /* Boşluğu ayarlayabilirsiniz */
            overflow: hidden;
            white-space: nowrap;    
        }
		
        .kur
		{
			background-color: #1c1c1c;
			width:auto;
			height:125px;
			color:white;
			font-family: Arial;
			border-radius:4px;
			font-size:24px;
            margin:1px;
            
			
		}
        #backToTopBtn 
        {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: white;
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            background-image: url('images/up.png');
            background-size: cover;
        }
        .kutular 
        {
            list-style: none;
            display: flex;
            padding: 10px;

            
        }
        
        .kutular li 
        {
            width: 450px;
            height: 750px;
            margin-right: 5px; /* Kutular arasındaki boşluk */
            margin-bottom: 10px;
            background-color: #f0f0f0; /* Kutu rengi */
            box-shadow: 0 4px 8px #A6051A; /* Gölgelendirme */
            position: relative;
            left:50px;
            border-radius:4px;
            font-family:arial;
            text-align:center;
            
        }
        .kutular li a
        {
            text-decoration: none;
            color: #008000; /* Green color for links */
            font-size: 14px;
            
        }
        .kutular li a:hover
        {
            color:darkgreen;
        }
        .navbarbuttons 
        {
            list-style: none;
            display: flex;
            padding: 0;
            margin-left:85px;
            
        }
        .navbar .buttons {
            width: 130px;
            height: 55px;
            margin: 5px 10px 5px 5px;  /* İstediğin boşluğa göre ayarla */
            border-radius:4px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            background-color: #A6051A;
            color: white;
            font-size: 18px;
            font-family: 'Arial', sans-serif;
            transition: background-color 0.3s, color 0.3s;
            white-space: nowrap;   
            position: relative;
         }
         
        .navbar .buttons:hover 
         {
            background-color: white;
            color: #A6051A;
         }
  
         .havadurumu-container
        {
            overflow: hidden; /* Bu özellik ile metin ekranın dışında kayar */
            height: 50px; /* Metin kutusunun yüksekliği */
            
        }

        .havadurumu 
        {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
            animation: slideUp 7.5s linear infinite; /* Animasyonu tanımla */
            margin-left:1px;
        }

        @keyframes slideUp {
    0% {
        transform: translateY(100%);
    }
    100% {
        transform: translateY(-100%);
    }
}

        /* Dropdown menü stil ayarları */
    .dropdown {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      z-index: 1;
      list-style-type:  none;
    }

    .navbarbuttons li:hover .dropdown {
      display: block;
    }

    .dropdown a {
      color: #A6051A;
      padding: 10px;
      display: block;
      text-decoration: none;
      font-size:20px;
    }

    .dropdown a:hover {
      background-color: #ddd;
    }
    .cizgi
    {
      width: 1px;
      height: 75px;
      background-color: #ccc;
      margin: 0px 5px 5px 0px;  /* İstediğiniz çizgi ile içerik arasındaki boşluk */
    }
    .cizgi2
    {
        width: 1px;
        height: 75px;
        background-color: #ccc;
        margin: 5px 5px 5px 0px; /* Sola yaslanacak şekilde margin değeri ayarlandı */
    }

    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="siteicon">
            <a href="http://gokhangunduz.com" target=_blank><img src="images/shema.jpg" style="margin-left:1px; padding-top:3px;"width= "50px" alt=""></a>
                <a href="http://gokhangunduz.com" target=_blank style="text-decoration:none; color:white; font-family:arial; font-size:13px; font-weight:bold; position:relative;top:-5px;text-align:center;">WoodeXpert.com</a>
            </div>
            <div class="cizgi2"></div>
            <div class="siteicon2" id="hakkindaDiv">
                <p style="color:white; font-family:Arial; font-weight:bold; font-size:17px; text-align:center; margin:1px; padding:25px; ">Hakkımızda</p>
            </div>
            <script>
    document.getElementById("hakkindaDiv").innerHTML += '<div class="popup">Bu pencere içinde daha fazla bilgi verebilirsiniz.<br>Ad: Emirhan<br>Soyad: Koç<br>Biyografi: ASDF</div>';
</script>
            <div class="cizgi2"></div>
            <div class="siteicon2" id="hakkindaDiv">
            <?php
// Döviz kurlarını çek
$kurlar = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

// Kurları işle ve formatla
$dolar = str_replace(".", ",", $kurlar->Currency[0]->BanknoteBuying);
$euro = str_replace(".", ",", $kurlar->Currency[3]->BanknoteBuying);
$sterlin = str_replace(".", ",", $kurlar->Currency[4]->BanknoteBuying);

// Tabloyu oluştur ve göster
echo '<style>
        @keyframes slideUp {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(-100%);
            }
        }

        .kur2 table {
            animation: slideUp 12s linear infinite;
        }
        
        .slideUpAnimation {
            animation: slideUp 12s linear infinite;
        }
    </style>';

echo '<div class="kur2" style="width: 250px; height: 75px; overflow: hidden; /* Bu özellik ile metin ekranın dışında kayar */">
    <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; font-size: 15px;">
        <tr>
            <th style="color: white; font-weight: bold;">PARA BİRİMİ</th>
            <th style="color: white; font-weight: bold; padding-left: 20px;">FİYATI</th>
        </tr>';

$paraBirimleri = ['DOLAR', 'EURO', 'STERLİN'];
$ikonYollar = ['dolar.png', 'euro.png', 'sterlin.png'];
$kurFiyatlari = [$dolar, $euro, $sterlin];

for ($i = 0; $i < count($paraBirimleri); $i++) {
    echo '<tr class="slideUpAnimation">
              <td style="color: white; font-weight: bold; max-width: 75px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-size: 15px;">
                <img src="images/' . $ikonYollar[$i] . '" alt="' . $paraBirimleri[$i] . ' İkon" style="max-width: 20px; max-height: 20px;">
                ' . $paraBirimleri[$i] . '
              </td>
              <td style="color: white; font-weight: bold; padding-left: 20px; font-size: 15px;">
                ' . $kurFiyatlari[$i] . '
              </td>
          </tr>';
}

echo '</table>
</div>';
?>
            </div>
            <div class="cizgi2"></div>
            <!-- Search -->
            <span class="span2"
                style="transition: background-color 0.3s ease;margin: 10px; padding: 10px; width: 120px; height: 20px; background-color: white; margin-left: 150px; border-radius: 3px; font-size: 14px; border: 1px solid #ccc; font-weight:bold;font-family: Arial, Helvetica, sans-serif; color: #A6051A; text-align: center; ">
                Tüm Kategoriler
            </span>
            <input aria-label="Ara " autocomplete="off" class="nav-input nav-progressive-attribute" dir="auto"
                id="twotabsearchtextbox"  style="width:500px;color:#A6051A;font-weight:bold;" name="field-keywords" placeholder="Ara" spellcheck="false" tabindex="0"
                type="text">
            <span class="span3" onclick="scrollToSection()"
                style="margin: 10px; padding: 10px; padding-top: 2px; width: 40px; height: 25px; background-color: white; margin-left: -95px; border-radius: 4px; font-size: 14px; border: 1px solid white; font-family: Arial, Helvetica, sans-serif; color: black; text-align: center; cursor: pointer;">
                <a href="#"><img src="images/search.png" alt="" width="40px" height="35px"></a>
            </span>
            <ul class="navbarbuttons">
                <li>
                        <a href="#" class="buttons">İthalat/İhracat</a>
                    <ul class="dropdown">
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                        <!-- İstediğin kadar submenu item ekleyebilirsin -->
                    </ul>
                </li>
                        <li>
                        <a href="#" class="buttons">Gümrük Bilgileri</a>
                    <ul class="dropdown">
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                        <!-- İstediğin kadar submenu item ekleyebilirsin -->
                    </ul>
                </li>
                 <li>
                        <a href="#" class="buttons">Button</a>
                    <ul class="dropdown">
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                        <!-- İstediğin kadar submenu item ekleyebilirsin -->
                    </ul>
                </li>
                 
            </ul>
            <div class="cizgi"></div>
            <script>
                function scrollToSection() {
                    var searchTerm = document.getElementById('twotabsearchtextbox').value.trim();
                    if (searchTerm !== '') {
                    // Arama terimine göre kaydırma yap
                    var targetElement = document.getElementById(searchTerm.toLowerCase());
                    if (targetElement) 
                    {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    } 
                    else 
                    {
                        alert('Hedef bulunamadı');
                    }
                }
            }
            </script>
<div class="havadurumu-container">
    <div class="havadurumu">
      <?php
        date_default_timezone_set('Europe/Istanbul'); // Zaman dilimini ayarla
        $api_key = '04c5bbaf1563b684ada347bd137cc55b'; // OpenWeatherMap API key
        $city = 'Bartın'; // İstenilen şehir adı

        // Hava durumu API'si için istek oluştur
        $api_url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
        $response = file_get_contents($api_url);
        $weather_data = json_decode($response);

        // Tarih ve saat bilgisi
        $tarihSaat = date('d.m.Y H:i');

        echo $tarihSaat . ' <br> ' . $city;

        if ($weather_data) {
          echo '  <br>Sıcaklık:' . ($weather_data->main->temp - 273) . '°C';
        } else {
          echo ' Hava durumu verisi alınamıyor.';
        }
      ?>
    </div>
  </div>


        </nav>
    </header>
    <div class="news"><p>HABERLER:ADFASDF</p></div>
    <?php
// Stil ve animasyonları ekle
echo '<style>
            .kur {
                white-space: nowrap; /* Satırları birleştir ve kaydırmayı sağla */
                overflow: hidden; /* Taşan içeriği gizle */
                
                
            }

            .kur table {
                
                width: 50%; /* Genişliği 100% olarak ayarla */
                border-spacing: 0; /* Hücre arasındaki boşluğu sıfırla */
                padding:10px;
                animation: slideUp 9s linear infinite; /* Animasyonu tanımla */
            }
            @keyframes slideUp {
                0% {
                  transform: translateY(100%);
                }
                100% {
                  transform: translateY(-100%);
                }
              }
            .kur th,
            .kur td {
                
                padding: 10px; /* Hücre içerisindeki boşluğu ayarla */
                border: none; /* Hücre çizgilerini kaldır */
                
            }

            .kur th:not(:last-child),
            .kur td:not(:last-child) {
                padding-right: 2px; /* Sağ boşluğu azalt */
            }

            .kur img {
                width: 20px; /* İkon genişliği */
                height: 20px; /* İkon yüksekliği */
                margin-right: 5px; /* İkon ile metin arasındaki boşluk */
            }
            
          </style>';

// Tabloyu oluştur ve göster
echo '<div class="kur">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th style="color:#A6051A;  font-weight: bold;">Ürün Adları</th>
            <td></td>'; // İlk çizgi için boş bir hücre

$tahtaTurleri = ['OSB-1 Levha','OSB-2 Levha','OSB-3 Levha','MDF', 'Yonga Levha','PlyWood','PlyWood','PlyWood','PlyWood','PlyWood'];
$ikonYollar = ['levha.png','levha.png','levha.png','levha.png','levha.png','levha.png','levha.png','levha.png','levha.png','levha.png'];
$fiyatlar = ['350₺','350₺','350₺','350₺','350₺','350₺','350₺','350₺','350₺','350₺']; // Fiyatları dilediğiniz gibi güncelleyin

for ($i = 0; $i < count($tahtaTurleri); $i++) {
    echo '<td style="color:yellow;  font-weight: bold; ">
    <img src="images/' . $ikonYollar[$i] . '" alt="' . $tahtaTurleri[$i] . ' İkon">
    ' . $tahtaTurleri[$i] . '
          </td>';
    
}

echo '</tr><tr>
        <th style="color:#40e0d0; font-weight: bold;">Fiyatı</th>
        <td></td>'; // İlk çizgi için boş bir hücre

foreach ($fiyatlar as $fiyat) {
    echo '<td style="color:#40e0d0; font-weight: bold; padding-left:80px;">' . $fiyat . '</td>';
    
    
}

echo '</tr></table>
</div>';
?>



<ul class="kutular">
        <li>
            <h2>HABERLER</h2>
            <iframe src="https://www.globalwoodmarketsinfo.com/category/market-analysis/" frameborder="0" width="450px" height="650px"></iframe>
        </li>
        <li>
            <h2>MEDYA</h2>
            <!--<iframe src="https://www.youtube.com/embed/Lx4sp5cQFtQ?si=-qxYTG5akomziRlN?autoplay=1&mute=1" frameborder="0" width="425px" height="650px"></iframe>-->
                <iframe width="420" height="345" src="https://www.youtube.com/embed/7MCtZ1hfrac?si=j1BMw7JB8MIBCei4?autoplay=1&mute=1">
</iframe>
        </li>
        <li>
            <h2>İHALELER</h2>
            <br>
            <h3>ODUNA DAYALI ORMAN ÜRÜN İHALELERİ</h3>
            <hr>
            <h4><a href="https://esatis.ogm.gov.tr/" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş(E-Satış)</a></h4>
            <h4><a href="https://basvur.ogm.gov.tr/hizmetenvanteri/#hizmetenvanteri/ihale_list" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş(Eski)</a></h4>
            <h4><a href="https://www.ogm.gov.tr/tr/ihaleler-sitesi/Documents/orbis-brosur.pdf" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş Bilgi Notu</a></h4>
            <h4><a href="https://www.ogm.gov.tr/tr/e-kutuphane/mevzuat/talimatlar" target=_blank>Açık Arttırmalı ve Tahsisli Satış Esasları</a></h4>
            <hr>
            <h3>DİĞER İHALELER</h3>
            <h4><a href="https://www.ogm.gov.tr/tr/ihaleler/diger-ihaleler" target=_blank>Diğer İhaleler</a></h4>
            <hr>
            <h3>ODUN DIŞI ORMAN ÜRÜNLERİ İHALELERİ</h3>
            <h4><a href="https://www.ogm.gov.tr/tr/ihaleler/odun-disi-orman-urunleri-ihaleleri" target=_blank>Odun Dışı Orman Ürün İhaleleri</a></h4>
            <hr>
            <h3>ORMAN PARK İHALELERİ</h3>
            <h4><a href="https://www.ogm.gov.tr/tr/ihaleler/mesire-yerleri-ihaleleri" target=_blank>Orman Park İhaleleri</a></h4>
            <hr>
            <h3>YASAKLI MÜŞTERİ LİSTESİ</h3>
            <h4><a href="https://kurum.ogm.gov.tr/Liste/Lists/YasaklilarListesi/YasaklamasiDevamEdenler.aspx" target=_blank>2886' ya göre Yasaklılar Listesi</a></h4>
        </li>
        <li>
            <h2>ANALİZLER</h2>
            <iframe src="https://www.boersentreff.de/holz-news.htm#AuswahlSpeichern" frameborder="0" width="450px" height="650px"></iframe>
        </li>
</ul>



    <!-- Arka planresim -->
    <div class="image-container">
        
        <div class="overlay"></div>
    </div>
    
    <div class="container">
        <div class="box" style="width: 1480px; height: 800px;">
            <h1 id="haber">Haberler</h1>
            <iframe src="https://www.globalwoodmarketsinfo.com/category/market-analysis/" frameborder="0" width="1400px" height="750px"></iframe>
        </div>
    </div>
    <div class="container">
        <div class="box" style="width: 1480px; height: 800px;">
            <h1 id= "medya">Medya</h1>
            <iframe width="1480" height="700" src="https://www.youtube.com/embed/Lx4sp5cQFtQ?si=-qxYTG5akomziRlN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>            
    <div class="container">   
        <div class="box" style="width: 1480px; height: 400px;">
            <h1 id="ihale">İhaleler</h1>
            <br>
            <h3>ODUNA DAYALI ORMAN ÜRÜN İHALELERİ</h3>
            <hr>
            <ul>
                <li><a href="https://esatis.ogm.gov.tr/" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş(E-Satış)</a></li>
                <li><a href="https://basvur.ogm.gov.tr/hizmetenvanteri/#hizmetenvanteri/ihale_list" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş(Eski)</a></li>
                <li><a href="https://www.ogm.gov.tr/tr/ihaleler-sitesi/Documents/orbis-brosur.pdf" target=_blank>Oduna Dayalı Ürün İhalelerine Giriş Bilgi Notu</a></li>
                <li><a href="https://www.ogm.gov.tr/tr/e-kutuphane/mevzuat/talimatlar" target=_blank>Açık Arttırmalı ve Tahsisli Satış Esasları</a></li>
            </ul>
            <h3>DİĞER İHALELER</h3>
            <hr>
            <ul>
                <li><a href="https://www.ogm.gov.tr/tr/ihaleler/diger-ihaleler" target=_blank>Diğer İhaleler</a></li>
            </ul>
            <h3>ODUN DIŞI ORMAN ÜRÜNLERİ İHALELERİ</h3>
            <hr>
            <ul>
                <li><a href="https://www.ogm.gov.tr/tr/ihaleler/odun-disi-orman-urunleri-ihaleleri" target=_blank>Odun Dışı Orman Ürün İhaleleri</a></li>
            </ul>
            <h3>ORMAN PARKLARI İHALELERİ</h3>
            <hr>
            <ul>
                <li><a href="https://www.ogm.gov.tr/tr/ihaleler/mesire-yerleri-ihaleleri" target=_blank>Orman Park İhaleleri</a></li>
            </ul>
            <h3>YASAKLI MÜŞTERİ LİSTESİ</h3>
            <hr>
            <ul>
                <li><a href="https://kurum.ogm.gov.tr/Liste/Lists/YasaklilarListesi/YasaklamasiDevamEdenler.aspx" target=_blank>2886' ya göre Yasaklılar Listesi</a></li>
            </ul>
        </div>
    </div>
   
    
    <div class="container">
        <div class="box" style="width: 1480px; height: 800px;">
            <h1 id="analiz">ANALİZLER</h1>
            <iframe src="https://www.boersentreff.de/holz-news.htm#AuswahlSpeichern" frameborder="0" width="1400px" height="750px"></iframe>
        </div>
    </div>
    
    
    <footer>
        &copy; 2023 WoodeXpert.com.tr
        <button id="backToTopBtn" onclick="scrollToTop()"></button>
    </footer>
    
    <script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var backToTopBtn = document.getElementById("backToTopBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
    }
</script>

</body>

</html>