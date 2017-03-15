-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2017 at 09:29 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id933007_nm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `ID_TEMA` int(11) NOT NULL,
  `TEMA` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `FECHA` date DEFAULT NULL,
  `USUARIOLOG` bigint(11) NOT NULL,
  `FECHALOG` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`ID_TEMA`, `TEMA`, `DESCRIPCION`, `FECHA`, `USUARIOLOG`, `FECHALOG`) VALUES
(1, '', 'Andres', '2017-02-14', 1, '2017-02-28 19:47:29'),
(2, 'Casa Nicol', 'Sex', '2017-01-26', 1, '2017-02-28 19:48:15'),
(3, 'Casa Milton', 'El', '2017-02-22', 1, '2017-02-28 19:48:34'),
(4, 'Casa Milton', 'El', '2017-02-17', 1, '2017-02-28 19:49:06'),
(5, 'Casa Nicol', 'Sex', '2017-02-08', 1, '2017-02-28 19:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` bigint(255) NOT NULL,
  `DOC` int(20) NOT NULL,
  `USER` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ROL` int(1) NOT NULL DEFAULT '0',
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `S_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GENERO` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL,
  `IMAGEN` text COLLATE utf8_unicode_ci,
  `KEYPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NEWPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ULTIMA_CONEXION` int(32) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `DOC`, `USER`, `PASS`, `EMAIL`, `ROL`, `NOMBRES`, `P_APELLIDO`, `S_APELLIDO`, `GENERO`, `FECHA_REGISTRO`, `IMAGEN`, `KEYPASS`, `NEWPASS`, `ULTIMA_CONEXION`) VALUES
(1, 1110540682, 'admin', '5d54204106c1ca8c4a6b5d9edb9b8773', 'milton.otavo@gmail.com', 1, 'MILTON', 'OTAVO', 'VARON', 'M', '2016-07-03', '20401-3254avatar.jpg', '573e5feb61b20121114c322b050f0dfd', '9699F73A', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`ID_TEMA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `ID_TEMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
