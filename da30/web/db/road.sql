-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2019 年 10 月 11 日 11:20
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `trainmap`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `road`
--

CREATE TABLE `road` (
  `roadid` int(4) NOT NULL,
  `stationid` int(4) NOT NULL,
  `roadname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `northid` int(4) DEFAULT NULL,
  `eastid` int(4) DEFAULT NULL,
  `southid` int(4) DEFAULT NULL,
  `westid` int(4) DEFAULT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `road`
--

INSERT INTO `road` (`roadid`, `stationid`, `roadname`, `northid`, `eastid`, `southid`, `westid`, `picture`, `comment`) VALUES
(1, 1, '1', 3, 6, 8, 5, 'img/yamanote1.png', ''),
(2, 1, '2', NULL, 3, 5, NULL, 'img/yamanote2.png', ''),
(4, 1, '4', NULL, NULL, 6, 3, 'img/yamanote4.png', ''),
(5, 1, '5', 2, 1, 7, NULL, 'img/yamanote5.png', ''),
(3, 1, '3', NULL, 4, 1, 2, 'img/yamanote3.png', ''),
(6, 1, '6', 4, NULL, 9, 1, 'img/yamanote6.png', ''),
(7, 1, '7', 5, 8, NULL, NULL, 'img/yamanote.pngg', ''),
(8, 1, '8', 1, 9, NULL, 7, 'img/yamanote8.png', ''),
(9, 1, '9', 6, NULL, NULL, 8, 'img/yamanote9.png', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
