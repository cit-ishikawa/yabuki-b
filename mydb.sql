-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 6 朁E26 日 14:57
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `app`
--

CREATE TABLE `app` (
  `id` int(11) NOT NULL,
  `name` varchar(11) DEFAULT NULL,
  `mail` varchar(11) DEFAULT NULL,
  `pass` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `app`
--

INSERT INTO `app` (`id`, `name`, `mail`, `pass`) VALUES
(1, 'aaa', 'aaa', 'aaa'),
(3, 'ccc', 'ccc', 'ccc'),
(4, 'afaf', 'eaeafa', 'afefa'),
(5, 'jtyth', 'yeuteu', 'teut'),
(6, 'gadga', 'gaergra', 'gaegaegag'),
(7, '中島', '1542085', 'aaa'),
(8, '赤岡', '1542008', 'mituma'),
(9, '石川', '1542003', 'homo'),
(10, '池谷', '1542012', '123'),
(11, '近藤', '1542032', 'aaa'),
(13, 'hihih', 'uihihi', '1449'),
(14, 'vds', 'gSg', 'gG');

-- --------------------------------------------------------

--
-- テーブルの構造 `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `kazu` text NOT NULL,
  `masu1` int(11) NOT NULL,
  `masu2` int(11) NOT NULL,
  `masu3` int(11) NOT NULL,
  `masu4` int(11) NOT NULL,
  `masu5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `count`
--

INSERT INTO `count` (`id`, `kazu`, `masu1`, `masu2`, `masu3`, `masu4`, `masu5`) VALUES
(1, 'sum1', 10, 3, 1, 2, 3),
(2, 'sum2', 0, 0, 0, 0, 0),
(3, 'sum3', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
