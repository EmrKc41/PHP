-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Haz 2024, 11:22:14
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `film_sitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `trailer`, `director`, `year`) VALUES
(11, 'Recep İvedik', 'asdf', 'https://www.youtube.com/embed/V3m_agUPEbo?si=BZg4_OGKVuYJqt1F', 'Şahan Gökbakar', 2010),
(12, 'Çakallarla Dans', 'asdf', 'https://www.youtube.com/embed/32nW3yTv6Eg?si=udQ1h6KeCQSrUxsc', 'Murat Şeker', 2010),
(13, 'Kolpaçino 1', 'asdf', 'https://www.youtube.com/embed/QpnK_1bYiDE?si=oNLLTzzMKhvywafE', 'Şafak Sezer', 2012),
(14, 'Kutsal Damacana', 'asdf', 'https://www.youtube.com/embed/-zCMHkfMgZQ?si=0G41bJY7TV8qa9kt', 'Şafak Sezer', 2013),
(15, 'Celal ile Ceren', 'asdf', 'https://www.youtube.com/embed/CiUIJVTlp5Q?si=95wp83My6E04CPRy', 'Şahan Gökbakar', 2014),
(16, 'CMYLMZ101MMXI', 'aadsf', 'https://www.youtube.com/embed/9CoSYzjSMgY?si=77y8aK5Cro81nZSs', 'Cem Yılmaz', 2015);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
