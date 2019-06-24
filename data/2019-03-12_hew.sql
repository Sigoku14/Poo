-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 年 3 月 11 日 22:21
-- サーバのバージョン： 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `HEW`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `color`
--

CREATE TABLE `color` (
  `color_id` int(255) NOT NULL,
  `color_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `contents`
--

CREATE TABLE `contents` (
  `contents_id` int(255) NOT NULL,
  `contents_title` varchar(20) DEFAULT NULL,
  `contents` varchar(999) DEFAULT NULL,
  `up_day` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `red` int(3) NOT NULL,
  `green` int(3) NOT NULL,
  `blue` int(3) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `detail`
--

INSERT INTO `detail` (`id`, `name`, `detail`, `red`, `green`, `blue`, `weight`) VALUES
(1, '胆道閉鎖症', '肝臓から腸へ胆汁を出せない難治性の病気です。\r\n病院での診察をお勧めします。', 255, 255, 224, -60),
(2, '慢性膵炎', '膵臓に繰り返し炎症が起こった事で、膵臓の細胞が壊れてしまう慢性膵炎でも白い便が出る事があります。', 210, 180, 140, -45),
(3, 'バリウム検査', 'バリウム検査の際に飲むバリウムは、消化や吸収がされずそのまま便として排泄されます。\r\nそのためバリウム検査後は、検査当日から翌日にかけて白いバリウム便が排泄されます。', 255, 255, 255, 15),
(4, '胃がん', 'がんが血管を傷つけ出血すると、胃酸と血が反応し、黒い便が出ることがあります。\r\n至急、病院での診察をお勧めします。', 120, 120, 120, -90),
(5, '大腸がん', '大腸がんは赤い血便がみられたり、便が細くなったり、便秘などがみられますが、小腸に近い盲腸や上行結腸にできると黒い便が出ることがあります。', 178, 34, 34, -100),
(6, '便秘', '腸内で便の腐敗や酸化が起こる、水分が抜けることなどによって便の色が濃褐色となることがあります。', 123, 85, 68, -20),
(7, '大腸ポリープ', '大腸からの出血によって便に鮮血が付着します。自覚症状はなく、便潜血検査などを検診で受けた際に便に血が混じっている事を指摘され、その後の大腸内視鏡検査などで見つかることがほとんどです。ポリープのできる場所によっては黒っぽい血液となって便に付着することもあります。', 139, 0, 0, -85),
(8, 'サルモネラ感染', 'サルモネラ菌による急性胃腸炎症状のため、便を緑色にします。\r\n病院での診察をお勧めします。', 85, 107, 47, -50),
(9, '健康な便', '特に異常ありません！', 205, 133, 63, 100),
(10, 'イカスミ食べ過ぎ', '黒い食事には、便を黒くする色素が多く含まれています。\r\n特に異常はないでしょう。もし、イカスミを食べた記憶がなければ、病院へ！', 0, 0, 0, 85),
(11, '判定不能', '未知の病気の可能性があります。\r\n最新設備のある病院での診察を提案します。', 0, 0, 0, -100);

-- --------------------------------------------------------

--
-- テーブルの構造 `picture`
--

CREATE TABLE `picture` (
  `pic_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `file_path` varchar(999) DEFAULT NULL,
  `save_datetime` datetime DEFAULT NULL,
  `red` int(255) NOT NULL,
  `green` int(255) NOT NULL,
  `blue` int(255) NOT NULL,
  `detail_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `picture`
--

INSERT INTO `picture` (`pic_id`, `user_id`, `file_path`, `save_datetime`, `red`, `green`, `blue`, `detail_id`) VALUES
(1, 1, './../img/user/1/190306133925.jpg', '2019-03-06 13:39:25', 90, 103, 94, 0),
(2, 1, './../img/user/1/190306140604.jpg', '2019-03-06 14:06:04', 150, 207, 200, 0),
(3, 1, './../img/user/1/190308150551.jpg', '2019-03-08 15:05:51', 102, 71, 36, 0),
(4, 1, './../img/user/1/190308150631.jpg', '2019-03-08 15:06:31', 243, 242, 238, 0),
(5, 1, './../img/user/1/190309153204.jpg', '2019-03-09 15:32:04', 174, 118, 101, 0),
(6, 1, './../img/user/1/190309155506.jpg', '2019-03-09 15:55:06', 242, 221, 242, 0),
(7, 1, './../img/user/1/190309160151.jpg', '2019-03-09 16:01:51', 32, 28, 25, 0),
(8, 1, './../img/user/1/190309160655.jpg', '2019-03-09 16:06:55', 87, 86, 84, 0),
(9, 1, './../img/user/1/190310002716.jpg', '2019-03-10 00:27:16', 197, 236, 251, 0),
(12, 1, './../img/user/1/190310002836.jpg', '2019-03-10 00:28:36', 255, 74, 47, 0),
(13, 1, './../img/user/1/190310003607.jpg', '2019-03-10 00:36:07', 253, 242, 237, 0),
(15, 1, './../img/user/1/190310003808.jpg', '2019-03-10 00:38:08', 58, 58, 63, 0),
(16, 1, './../img/user/1/190310003836.jpg', '2019-03-10 00:38:36', 178, 98, 187, 0),
(17, 1, './../img/user/1/190310004007.jpg', '2019-03-10 00:40:07', 181, 218, 210, 0),
(18, 1, './../img/user/1/190310004038.jpg', '2019-03-10 00:40:38', 239, 217, 203, 0),
(19, 1, './../img/user/1/190311103746.jpg', '2019-03-11 10:37:46', 192, 43, 36, 0),
(20, 1, './../img/user/1/190311122646.jpg', '2019-03-11 12:26:46', 198, 208, 174, 0),
(21, 1, './../img/user/1/190311131145.jpg', '2019-03-11 13:11:45', 189, 226, 214, 0),
(22, 1, './../img/user/1/190311134008.jpg', '2019-03-11 13:40:08', 178, 68, 69, 0),
(23, 1, './../img/user/1/190311134209.jpg', '2019-03-11 13:42:09', 137, 130, 50, 0),
(24, 1, './../img/user/1/190311141208.jpg', '2019-03-11 14:12:08', 76, 64, 66, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `record`
--

CREATE TABLE `record` (
  `pic_id` int(255) DEFAULT NULL,
  `color_id` int(255) DEFAULT NULL,
  `now_state` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_pass` varchar(10) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `birth_day` datetime DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_mail`, `birth_day`, `height`, `weight`, `status`) VALUES
(1, 'hikky', 'aaaaaaaa', 'a@a', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `pic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
