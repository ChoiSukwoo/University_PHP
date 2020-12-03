-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-12-03 11:09
-- 서버 버전: 10.4.14-MariaDB
-- PHP 버전: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `movie`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comment`
--

CREATE TABLE `comment` (
  `num` int(11) NOT NULL,
  `UserId` char(15) NOT NULL,
  `movieId` char(10) NOT NULL,
  `content` text NOT NULL,
  `movieName` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `comment`
--

INSERT INTO `comment` (`num`, `UserId`, `movieId`, `content`, `movieName`) VALUES
(2, 'woo98070', '20200294', 'sadcecdzc', ''),
(5, 'woo98070', '20200294', 'zv ev c zzcavav', ''),
(6, 'woo98070', '20197121', 'dvsdv s wr s', ''),
(7, 'woo98070', '20197121', 'zcx  zfdzv sv', ''),
(8, 'woo98070', '20197121', 'bwrvdsvsd sdvewvev', ''),
(9, 'woo98070', '20197121', 'z evev z ', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `favorite`
--

CREATE TABLE `favorite` (
  `num` int(11) NOT NULL,
  `UserId` char(15) NOT NULL,
  `movieId` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `favorite`
--

INSERT INTO `favorite` (`num`, `UserId`, `movieId`) VALUES
(1, 'woo98070', '20201123'),
(2, 'woo98070', '20200554');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `UserId` char(20) NOT NULL,
  `Password` char(20) NOT NULL,
  `NickName` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`UserId`, `Password`, `NickName`) VALUES
('woo98070', 'woo98070', '최석우');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
