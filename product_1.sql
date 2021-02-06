-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-02-06 14:45:04
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `product_1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `article_table`
--

CREATE TABLE `article_table` (
  `article_id` int(12) NOT NULL,
  `article` varchar(200) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `article_table`
--

INSERT INTO `article_table` (`article_id`, `article`, `image`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'aaaaaaaaaaaaaaa', 'upload/20210203141044147657773b0d19da87acd2f7ab6bcdb1.jpg', '2021-02-03 22:10:44', '2021-02-03 22:10:44', 0),
(3, 'bbbbbbbbbbbbb', 'upload/20210206144313456b1399c6d9abf0ff9ae96284985226.jpg', '2021-02-06 22:43:13', '2021-02-06 22:43:13', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `like_table`
--

CREATE TABLE `like_table` (
  `like_id` int(12) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `article_id` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_deleted` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `like_table`
--

INSERT INTO `like_table` (`like_id`, `user_id`, `article_id`, `created_at`, `is_deleted`) VALUES
(1, '0', '1', '2021-02-04 20:49:17', ''),
(2, '0', '1', '2021-02-04 20:54:11', ''),
(3, '0', '1', '2021-02-04 21:02:31', ''),
(18, '1', '0', '2021-02-06 21:53:03', ''),
(23, '1', '2', '2021-02-06 22:27:29', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(12) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`user_id`, `lastname`, `firstname`, `mail`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', 'a', 0, 0, '2021-02-03 20:49:09', '2021-02-03 20:49:09');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `article_table`
--
ALTER TABLE `article_table`
  ADD PRIMARY KEY (`article_id`);

--
-- テーブルのインデックス `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`like_id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `article_table`
--
ALTER TABLE `article_table`
  MODIFY `article_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `like_table`
--
ALTER TABLE `like_table`
  MODIFY `like_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
