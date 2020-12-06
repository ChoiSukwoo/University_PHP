-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-12-06 16:46
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

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
(55, 'woo98070', '20205216', 'fadsdavsdv', '호프'),
(56, 'woo98070', '20205216', 'vdsvsdv', '호프'),
(57, 'woo98070', '20205216', 'sdvsdvsdv', '호프'),
(58, 'woo98070', '20205216', 'sdvsdvdsv', '호프'),
(59, 'woo98070', '20205216', 'sdvsdvsdv', '호프'),
(60, 'woo98070', '', '', ''),
(61, 'woo98070', '20181983', 'ㅁㄻㄴㄻㄴㄹ', '이웃사촌'),
(62, 'woo98070', '20181983', 'ㅁㅁㅁㅁ', '이웃사촌'),
(63, 'woo98070', '20192193', 'ㅁㄴㅇㅁㄴㅇ', '도굴'),
(64, 'woo98070', '20192193', 'ㅁㄴㅇㅁㄴㅇㅁㄴ', '도굴'),
(65, 'woo98070', '20192193', 'ㅇㅁㄴㅇㄴㅁㅇ', '도굴'),
(66, 'woo98070', '20192193', 'ㅇㅁㄴㅇㅁㄴㅇ', '도굴'),
(67, 'woo98070', '20192193', 'ㅁㅇㅁㄴㅇㅁㄴ', '도굴');

-- --------------------------------------------------------

--
-- 테이블 구조 `favorite`
--

CREATE TABLE `favorite` (
  `num` int(11) NOT NULL,
  `UserId` char(15) NOT NULL,
  `movieId` char(10) NOT NULL,
  `movieName` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `favorite`
--

INSERT INTO `favorite` (`num`, `UserId`, `movieId`, `movieName`) VALUES
(17, 'woo98070', '20192193', '도굴'),
(18, 'woo98070', '20200304', '테우리'),
(19, 'woo98070', '20190268', '세트플레이'),
(20, 'woo98070', '20203124', '이별유예, 일주일'),
(21, 'woo98070', '20205216', '호프'),
(22, 'woo98070', '20199532', '고양이 집사'),
(24, 'woo98070', '20203251', '아메리칸 드레서'),
(25, 'woo98070', '20203262', '질풍노도'),
(26, 'woo98070', '20196676', '종이꽃'),
(27, 'woo98070', '20201692', '이 안에 외계인이 있다'),
(28, 'woo98070', '', ''),
(29, 'woo98070', '', '');

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
('woo98070', 'woo10040', '최석우');

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
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- 테이블의 AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
