-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 May 2022, 15:42:38
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `car_rent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `totalCarNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`car_id`, `name`, `price`, `stock`, `totalCarNumber`) VALUES
(1, 'BMW', 100, 50, 50),
(2, 'MERCEDES', 140, 50, 50),
(3, 'MUSTANG', 200, 2, 2),
(4, 'HONDA', 20, 50, 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Message` longtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `isMember` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `Email`, `ContactNumber`, `Message`, `PostingDate`, `isMember`) VALUES
(22, 'Süleyman Türker Güner', 'gunersuleymanturker@gmail.com', '5542071777', 'Can you hear me?', '2022-05-26 07:38:07', 'No'),
(23, 'zehra', 'guner_zehra@hotmail.com', '5339459410', 'merhaba sayın yetkili \r\nmustang kiraladığım aracın saat kaçta teslim edileceğine dair sitede bir bilgilendirme yok \r\ntarafıma telefonla geri dönüş yapılmasını rica ederim \r\nsyg.', '2022-05-26 10:23:51', 'Yes'),
(24, 'zehra', 'guner_zehra@hotmail.com', '5339459410', 'merhaba sayın yetkili \r\nbu iletimin size ulaşıp ulaşmadığını merak ediyorum ulaştıysa beni arayın', '2022-05-30 11:40:48', 'Yes');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `yetki` int(2) NOT NULL,
  `registeration_time` date DEFAULT current_timestamp(),
  `situation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`firstname`, `surname`, `email`, `phoneNumber`, `password`, `id`, `yetki`, `registeration_time`, `situation`) VALUES
('Süleyman Türker', 'Güner', 'gunersuleymanturker@gmail.com', '5542071777', '123456', 32, 1, '2022-05-14', 'online'),
('Tarık', 'Akan', 'admin@gmail.com', '5542071777', 'asdasd', 36, 1, '2022-05-24', 'offline'),
('Cüneyt', 'Arkın', 'yeni@gmail.com', '5542071777', '123123', 38, 0, '2022-05-25', 'offline'),
('zehra', 'güner', 'guner_zehra@hotmail.com', '5339459410', 'zehra1989', 40, 0, '2022-05-26', 'online');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `income`
--

CREATE TABLE `income` (
  `total_income` int(11) NOT NULL,
  `indicator` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `income`
--

INSERT INTO `income` (`total_income`, `indicator`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservations`
--

CREATE TABLE `reservations` (
  `reservationid` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `carName` varchar(100) NOT NULL,
  `situation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Tablo için indeksler `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tablo için AUTO_INCREMENT değeri `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
