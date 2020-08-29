-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Ağu 2020, 13:44:02
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ders`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_ad` text NOT NULL,
  `email` text NOT NULL,
  `sifre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `uye_ad`, `email`, `sifre`) VALUES
(1, 'Yasin Köse\r\n', 'yasin@gmail.com', '123456'),
(2, 'Onur Yurt', 'oyurt43@gmail.com', '123456'),
(3, 'Arda Turan', 'Turan@gmail.com', '1234567'),
(4, 'Pelin Kaya', 'pelin@gmail.com', 'pelin'),
(5, 'Murat Koç', 'Murat@gmail.com', '123456'),
(6, 'İbrahim Kale', 'ibo@gmail.com', '12345'),
(7, 'Zeynep Er', 'zeyno@gmail.com', 'zeyno'),
(8, 'Doğan Ay', 'dogan@gmail.com', '12345'),
(9, 'Erdem Zarif', 'erdem@gmail.com', '987'),
(31, 'Mehmet Yurt', 'mehmet@gmail.com', 'mehmet'),
(10, 'Zeynep Kurt', 'zeynep@gmail.com', '1234'),
(11, 'Onur Mert', 'onurmert@gmail.com', '123456'),
(12, 'Uğur Uçan', 'ugur@gmail.com', '123'),
(13, 'Mehmet Doğan', 'mehmetdogan@gmail.com', 'memo'),
(32, 'Mehmet Yurt', 'mehmet@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
