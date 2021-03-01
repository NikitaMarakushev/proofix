
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Table structure `couriers`
CREATE TABLE `couriers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Database table dump `couriers`
INSERT INTO `couriers` (`id`, `name`) VALUES
(0, 'Фамилия1 Имя1 Отчество1'),
(1, 'Фамилия2 Имя2 Отчество2'),
(2, 'Фамилия3 Имя3 Отчество3'),
(3, 'Фамилия4 Имя4 Отчество4'),
(4, 'Фамилия5 Имя5 Отчество5'),
(5, 'Фамилия6 Имя6 Отчество6'),
(6, 'Фамилия7 Имя7 Отчество7'),
(7, 'Фамилия8 Имя8 Отчество8'),
(8, 'Фамилия9 Имя9 Отчество9'),
(9, 'Фамилия10 Имя10 Отчество10');


-- Table structure `region_table`
CREATE TABLE `regions` (
  `id` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `date_to` int(255) NOT NULL,
  `date_from` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Database table dump `region_table`
INSERT INTO `regions` (`id`, `region`, `date_to`, `date_from`) VALUES
(0, 'Санкт-Петербург', 8, 8),
(1, 'Уфа', 18, 18),
(2, 'Нижний Новгород', 6, 6),
(3, 'Владимир', 4, 4),
(4, 'Кострома', 5, 5),
(5, 'Екатеринбург', 23, 23),
(6, 'Ковров', 4, 4),
(7, 'Воронеж', 6, 6),
(8, 'Самара', 14, 14),
(9, 'Астрахань', 17, 17);

-- --------------------------------------------------------

--
-- Structure table `schedule`
CREATE TABLE `schedule` (
  `id` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `courier` varchar(255) NOT NULL,
  `date_leaving` datetime NOT NULL,
  `date_arriving` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Table's `schedule` dump
INSERT INTO `schedule` (`id`, `region`, `courier`, `date_leaving`, `date_arriving`) VALUES
(1, 'Ковров', 'Фамилия1 Имя1 Отчество1', '2016-04-30 20:24:00', '2016-04-30 16:24:00'),
(2, 'Санкт-Петербург', 'Фамилия2 Имя2 Отчество2', '2019-01-01 00:00:00', '2019-01-01 05:00:00'),
(3, 'Нижний Новгород', 'Фамилия3 Имя3 Отчество3', '2017-12-24 00:38:00', '2017-12-23 18:38:00'),
(4, 'Екатеринбург', 'Фамилия4 Имя4 Отчество4', '2015-08-20 17:14:00', '2015-08-19 18:14:00'),
(5, 'Астрахань', 'Фамилия5 Имя5 Отчество5', '2017-07-18 11:57:00', '2017-07-17 18:57:00'),
(6, 'Самара', 'Фамилия6 Имя6 Отчество6', '2016-05-08 16:17:00', '2016-05-08 02:17:00'),
(7, 'Ковров', 'Фамилия7 Имя7 Отчество7', '2017-07-03 00:35:00', '2017-07-02 20:35:00'),
(8, 'Нижний Новгород', 'Фамилия8 Имя8 Отчество8', '2015-08-29 21:07:00', '2015-08-29 15:07:00'),
(9, 'Воронеж', 'Фамилия9 Имя9 Отчество9', '2016-08-18 09:01:00', '2016-08-18 03:01:00'),
(10, 'Екатеринбург', 'Фамилия10 Имя10 Отчество10', '2018-02-22 03:23:00', '2018-02-21 04:23:00');


-- Table's indexes `couriers`
ALTER TABLE `couriers`
  ADD KEY `id` (`id`);


-- Table's indexes `region_table`
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

-- Table's indexes `schedule`
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);


-- AUTO_INCREMENT for saved tables


-- AUTO_INCREMENT for table  `couriers`
ALTER TABLE `couriers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


-- AUTO_INCREMENT for table `schedule`
ALTER TABLE `schedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

