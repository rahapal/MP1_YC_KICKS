-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 04:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yc_kicks`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `M_ID` int(11) NOT NULL,
  `Id` int(55) NOT NULL,
  `Email` text NOT NULL,
  `Username` text NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Size` int(4) NOT NULL,
  `Unit_Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Order_Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`M_ID`, `Id`, `Email`, `Username`, `Name`, `Address`, `Contact`, `Image`, `Product_Name`, `Size`, `Unit_Price`, `Quantity`, `Total_Price`, `Order_Note`) VALUES
(7, 67, 'sukram@gmail.com', 'sukram', 'sangita', 'asa', 'sda', 'upload/aj1.webp', 'Air Jordan 1 Electro Orange', 36, 6500, 1, 1000, 'fas'),
(8, 68, 'sukram@gmail.com', 'sukram', 'renuka', 'in', 'fad', 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', 42, 6500, 1, 1000, 'fa'),
(9, 69, 'sukram@gmail.com', 'sukram', 'bigyan', 'Laxmi tol, vyas-2', '9817194337', 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', 42, 6500, 2, 1000, 'feqsdf'),
(8, 70, 'sukram@gmail.com', 'sukram', 'bigyan', 'Laxmi tol, vyas-2', '9817194337', 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', 40, 6500, 1, 1000, 'wfws'),
(8, 71, 'sukram@gmail.com', 'sukram', 'bigyan', 'Laxmi tol, vyas-2', 'in', 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', 40, 6500, 1, 1000, 'dcs'),
(10, 72, 'sukram@gmail.com', 'sukram', 'fd', 'Laxmi tol, vyas-2', '9817194337', 'upload/img01.webp', 'Air Jordan 1 University Blue', 37, 6500, 1, 1000, 'd'),
(8, 73, 'hello@sth.com', 'hello', 'fs', 'sdgf', 'dsg', 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', 40, 6500, 2, 13000, 'dsgsdg'),
(12, 74, 'hello@sth.com', 'hello', 'ds', 'sdgf', 'dsg', 'upload/img01 (5).webp', 'Air Jordan 4 Oreo', 36, 6000, 1, 6000, 'sdgsgs'),
(12, 75, 'hello@sth.com', 'hello', 'ds', 'dzx', 'dg', 'upload/img01 (5).webp', 'Air Jordan 4 Oreo', 36, 6000, 1, 6000, 'dga'),
(13, 76, 'hello@sth.com', 'hello', 'sdf', 'dsfg', 'sdg', 'upload/img01 (7).webp', 'Air Jordan 4 University Blue', 36, 7000, 1, 7000, 'sdg'),
(7, 77, 'hello@sth.com', 'hello', 'sdf', 'dsfg', 'sdg', 'upload/aj1.webp', 'Air Jordan 1 Electro Orange', 37, 6500, 1, 6500, 'sdg'),
(13, 78, 'hello@sth.com', 'hello', 'dsf', 'sdgf', 'sdg', 'upload/img01 (7).webp', 'Air Jordan 4 University Blue', 36, 7000, 1, 7000, 'gsd'),
(7, 79, 'hello@sth.com', 'hello', 'dsf', 'sdgf', 'sdg', 'upload/aj1.webp', 'Air Jordan 1 Electro Orange', 37, 6500, 1, 6500, 'gsd'),
(11, 80, 'hello@sth.com', 'hello', 'kghkgh', 'bagar', 'jkeahjadf', 'upload/img01 (4).webp', 'Air Jordan 4 Black Cat', 40, 6500, 2, 13000, 'dshjlfkjad'),
(13, 81, 'bibash@gmail.com', 'bibash', 'adfsads', 'sdffsd', 'miya', 'upload/img01 (7).webp', 'Air Jordan 4 University Blue', 37, 7000, 2, 14000, 'sdf'),
(14, 82, 'hello@sth.com', 'hello', 'Gces', 'lamachaur', '0612313', 'upload/img01 (9).webp', 'Air Jordan 4 Fire Red', 38, 6500, 1, 6500, 'present for my brother'),
(9, 83, 'hello@sth.com', 'hello', 'susant', 'lc', '8758778', 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', 37, 6500, 4, 26000, 'vgnmhmh'),
(16, 84, 'hello@sth.com', 'hello', 'anushka', 'parajulimarga', '9845235235', 'upload/img01 (6).webp', 'Air jordan 1 Low Fragment', 41, 7500, 2, 15000, 'Gift for my brother.Please decorate nicely.'),
(17, 85, 'hello@sth.com', 'hello', 'ds', 'ascf', 'fda', 'upload/img01 (8).webp', 'Air jordan 1 Low Atmospheric Grey', 36, 6500, 1, 6500, 'afs'),
(18, 86, 'hello@sth.com', 'hello', 'aiyana', 'bagar', '13141', 'upload/img01 (10).webp', 'Air Jordan 1 Low Black Toe', 36, 6500, 1, 6500, 'Please deliver it asap'),
(8, 87, 'sumit@gmail.com', 'sumit', 'dca', 'ad', 'av', 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', 40, 6500, 1, 6500, '413'),
(7, 88, 'hello@sth.com', 'hello', 'Arjun', 'hemja', '341414', 'upload/aj1.webp', 'Air Jordan 1 Electro Orange', 36, 6500, 1, 6500, 'efdsf'),
(14, 89, 'hello@sth.com', 'hello', 'dhtdggfd', 'gffggfd', 'grfgs', 'upload/img01 (9).webp', 'Air Jordan 4 Fire Red', 36, 6500, 1, 6500, '1'),
(9, 90, 'hello@sth.com', 'hello', 'gffdgf', 'dfsfsvf', 'sfsfd', 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', 36, 6500, 1, 6500, '2'),
(9, 91, 'hello@sth.com', 'hello', 'gfsfsgfs', 'gfsfg', 'bffg', 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', 36, 6500, 1, 6500, '3'),
(9, 92, 'hello@sth.com', 'hello', 'bff', 'fgs', 'ffs', 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', 36, 6500, 1, 6500, '3');

-- --------------------------------------------------------

--
-- Table structure for table `cartadmin`
--

CREATE TABLE `cartadmin` (
  `id` int(4) NOT NULL,
  `Pic` varchar(255) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Size` text NOT NULL,
  `Unit_Price` int(55) NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartadmin`
--

INSERT INTO `cartadmin` (`id`, `Pic`, `Product_Name`, `Size`, `Unit_Price`, `quantity`) VALUES
(7, 'upload/aj1.webp', 'Air Jordan 1 Electro Orange', '36/37/38/39/40/41/42/43', 6500, '0/0/6/6/4/6/6/6'),
(8, 'upload/img01 (1).webp', 'Air Jordan 1 Shadow', '40/41/42/43', 6500, '0/3/1/3'),
(9, 'upload/img01 (2).webp', 'Air Jordan 1 Mocha', '36/37/38/39/40/41/42/43', 6500, '2/2/2/6/6/4/0/6'),
(10, 'upload/img01.webp', 'Air Jordan 1 University Blue', '36/37/38/39/40/41/42/43', 6500, '3/0/4/5/4/4/4/3'),
(11, 'upload/img01 (4).webp', 'Air Jordan 4 Black Cat', '40/41/42/43', 6500, '0/4/3/4'),
(12, 'upload/img01 (5).webp', 'Air Jordan 4 Oreo', '36/37/38/39/40/41/42/43', 6000, '0/6/6/6/6/6/6/6'),
(13, 'upload/img01 (7).webp', 'Air Jordan 4 University Blue', '36/37/38/39/40/41/42/43', 7000, '0/0/4/3/4/5/3/3'),
(14, 'upload/img01 (9).webp', 'Air Jordan 4 Fire Red', '36/37/38/39/40/41/42/43', 6500, '3/5/0/5/4/4/4/3'),
(15, 'upload/img01 (3).webp', 'Air jordan 1 Low Metallic Gold', '36/37/38/39/40/41/42/43', 6500, '4/5/4/5/4/4/4/3'),
(16, 'upload/img01 (6).webp', 'Air jordan 1 Low Fragment', '40/41/42/43', 7500, '3/0/3/4'),
(17, 'upload/img01 (8).webp', 'Air jordan 1 Low Atmospheric Grey', '36/37/38/39/40/41/42/43', 6500, '0/5/4/5/4/4/4/3'),
(18, 'upload/img01 (10).webp', 'Air Jordan 1 Low Black Toe', '36/37/38/39/40/41/42/43', 6500, '2/6/6/6/6/6/6/6');

-- --------------------------------------------------------

--
-- Table structure for table `selectcartproduct`
--

CREATE TABLE `selectcartproduct` (
  `M_ID` int(11) NOT NULL,
  `ID` int(4) NOT NULL,
  `Username` text NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Pic` varchar(255) NOT NULL,
  `Price` int(8) NOT NULL,
  `Size` int(4) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selectcartproduct`
--

INSERT INTO `selectcartproduct` (`M_ID`, `ID`, `Username`, `Product_Name`, `Pic`, `Price`, `Size`, `quantity`) VALUES
(14, 140, 'sumit', 'Air Jordan 4 Fire Red', 'upload/img01 (9).webp', 6500, 36, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `admin` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `admin`) VALUES
(17, 'Admin', 'sushantrahapal@gmail.com', '$2y$10$4f/1wB83l/TFuFvQxkwFI.XcH7wqkXiZjzjPF3t7rN8Zqfxluv/Iy', 1),
(18, 'hello', 'hello@sth.com', '$2y$10$7wB6afPsQM6uHCnKJzwZRe8x98PsyRsoPsPNvmnXioTdg/EEhXd3C', 0),
(19, 'bibash', 'bibash@gmail.com', '$2y$10$nYZ0aFyuWih1cpOz0uF.GeUl7IjXr1QStZCH90jAK.vXbbIKf5f8e', 0),
(20, 'sus', 'saasd@gmail.com', '$2y$10$pSl4WuunDI5NuQuV6Ifqwu5LesQxeynkhQKTq7ZTMSx1/MiTyIOLy', 0),
(21, 'sumit', 'sumit@gmail.com', '$2y$10$L7Dk3kxpRL0iaKNijZ2pGOJEDQVD4DwU.1j/B7rydBsqDLxV2atj.', 0),
(22, 'human', 'human@gmail.com', '$2y$10$mCVrNbmJC6w/4K3ttw8ghO/DCpbr2WB4dY8bySUyXTPrMqsLyLJIO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cartadmin`
--
ALTER TABLE `cartadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selectcartproduct`
--
ALTER TABLE `selectcartproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cartadmin`
--
ALTER TABLE `cartadmin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `selectcartproduct`
--
ALTER TABLE `selectcartproduct`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
