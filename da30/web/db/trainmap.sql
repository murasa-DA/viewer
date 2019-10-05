-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 10 朁E06 日 06:55
-- サーバのバージョン： 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainmap`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `aisle`
--

CREATE TABLE `aisle` (
  `aisleid` int(4) NOT NULL,
  `StationId` int(4) NOT NULL,
  `aislename` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `northid` int(4) NOT NULL,
  `eastid` int(4) NOT NULL,
  `southid` int(4) NOT NULL,
  `westid` int(4) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `aisle`
--

INSERT INTO `aisle` (`aisleid`, `StationId`, `aislename`, `northid`, `eastid`, `southid`, `westid`, `comment`) VALUES
(1, 1, '山手線上り通路1', 1, 2, 3, 4, 'テストコメント');

-- --------------------------------------------------------

--
-- テーブルの構造 `erea`
--

CREATE TABLE `erea` (
  `ereaid` int(11) NOT NULL,
  `ereaname` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `erea`
--

INSERT INTO `erea` (`ereaid`, `ereaname`) VALUES
(1, '東京');

-- --------------------------------------------------------

--
-- テーブルの構造 `station`
--

CREATE TABLE `station` (
  `stationid` int(4) NOT NULL,
  `ereaid` int(4) NOT NULL,
  `stationname` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Station';

--
-- テーブルのデータのダンプ `station`
--

INSERT INTO `station` (`stationid`, `ereaid`, `stationname`) VALUES
(1, 1, '新宿');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aisle`
--
ALTER TABLE `aisle`
  ADD PRIMARY KEY (`aisleid`);

--
-- Indexes for table `erea`
--
ALTER TABLE `erea`
  ADD PRIMARY KEY (`ereaid`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`stationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
