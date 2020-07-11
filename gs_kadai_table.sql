-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 11, 2020 at 06:39 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_kadai`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_kadai_table`
--

CREATE TABLE `gs_kadai_table` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `store` varchar(100) NOT NULL,
  `volume` varchar(100) NOT NULL,
  `series` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `uri` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_kadai_table`
--

INSERT INTO `gs_kadai_table` (`id`, `title`, `store`, `volume`, `series`, `name`, `date`, `uri`, `text`, `indate`) VALUES
(1, '女帝 小池百合子', '文藝春秋', '', '', '石井妙子／著', '20200529', 'https://cover.openbd.jp/9784163912301.jpg', '稀代の女性政治家か、我々が生んだ虚像か。「芦屋令嬢」育ち、謎多きカイロ時代。キャスターから権力の道へ。数奇な半生がここに。', '2020-06-07 17:33:27'),
(2, '女帝 小池百合子', '文藝春秋', '', '', '石井妙子／著', '20200529', 'https://cover.openbd.jp/9784163912301.jpg', '稀代の女性政治家か、我々が生んだ虚像か。「芦屋令嬢」育ち、謎多きカイロ時代。キャスターから権力の道へ。数奇な半生がここに。', '2020-06-07 18:06:32'),
(3, '女帝 小池百合子', '文藝春秋', '', '', '石井妙子／著', '20200529', 'https://cover.openbd.jp/9784163912301.jpg', '稀代の女性政治家か、我々が生んだ虚像か。「芦屋令嬢」育ち、謎多きカイロ時代。キャスターから権力の道へ。数奇な半生がここに。', '2020-06-07 18:06:50'),
(4, '女帝 小池百合子', '文藝春秋', '', '', '石井妙子／著', '20200529', 'https://cover.openbd.jp/9784163912301.jpg', '稀代の女性政治家か、我々が生んだ虚像か。「芦屋令嬢」育ち、謎多きカイロ時代。キャスターから権力の道へ。数奇な半生がここに。', '2020-06-07 18:16:28'),
(5, '会計クイズを解くだけで財務３表がわかる 世界一楽しい決算書の読み方', 'ＫＡＤＯＫＡＷＡ', '', '', '大手町のランダムウォーカー／著 わかる／イラスト', '20200328', 'https://cover.openbd.jp/9784046043672.jpg', '決算書は最高にシビれる“謎解き”だ！', '2020-06-11 21:46:17'),
(6, '世界一わかりやすいPhotoshop　操作とデザインの教科書　［改訂3版］', '技術評論社', '', '', '柘植ヒロポン、上原ゼンジ／著 ', '20200523', 'https://cover.openbd.jp/9784297113179.jpg', 'デザインの仕事をしたい人にとって、必ず使いこなせるようになっておきたいツールがPhotoshopです。はじめて触る人でも、', '2020-06-13 14:59:19'),
(7, '世界一わかりやすいPhotoshop　操作とデザインの教科書　［改訂3版］', '技術評論社', '', '', '柘植ヒロポン、上原ゼンジ／著 吉田浩章、角田綾佳／著', '20200523', 'https://cover.openbd.jp/9784297113179.jpg', 'デザインの仕事をしたい人にとって、必ず使いこなせるようになっておきたいツールがPhotoshopです。はじめて触る人でも、画面の名前やよく使うツールの操作方法といった基本の「き」から始めて、選択範囲、カラー、レイヤー、色調補正、切り抜きなどを順序だてて学習していきます。サンプルファイルをダウンロードして、紙面どおりに操作を実践できます。仕事の基礎となる技術をしっかり身に付けたいという人に、いちばん最初に選ぶ学習書としてぴったりの1冊です。初版より専門学校の教科書として愛用されているテキストの最新2020対応版です。', '2020-06-13 15:09:37'),
(8, 'できるテレワーク入門 在宅勤務の基本が身に付く本', 'インプレス', '', 'できる', '', '20200529', '', '', '2020-06-13 15:12:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_kadai_table`
--
ALTER TABLE `gs_kadai_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_kadai_table`
--
ALTER TABLE `gs_kadai_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
