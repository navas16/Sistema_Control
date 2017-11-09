-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2017 a las 22:16:02
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_control`
--
CREATE DATABASE IF NOT EXISTS `sistema_control` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `sistema_control`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_1`
--

CREATE TABLE IF NOT EXISTS `nivel_1` (
  `nom_est` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ape_est` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `eda_est` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nac_est` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ced_est` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `lug_nac` varchar(26) COLLATE utf8_spanish2_ci NOT NULL,
  `est_nac` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `fec_bau` date NOT NULL,
  `dir_est` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf_fij` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `tlf_cel` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `ins_esc` varchar(22) COLLATE utf8_spanish2_ci NOT NULL,
  `gra_esc` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `sec_esc` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `nom_mam` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ape_mam` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `nom_pap` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ape_pap` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `est_civ` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nom_cat` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ape_cat` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `obs_est` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ced_est`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nivel_1`
--

INSERT INTO `nivel_1` (`nom_est`, `ape_est`, `eda_est`, `nac_est`, `ced_est`, `lug_nac`, `est_nac`, `fec_nac`, `fec_bau`, `dir_est`, `tlf_fij`, `tlf_cel`, `ins_esc`, `gra_esc`, `sec_esc`, `nom_mam`, `ape_mam`, `nom_pap`, `ape_pap`, `est_civ`, `nom_cat`, `ape_cat`, `obs_est`) VALUES
('Javier Eduardo', 'Navas Rodriguez', '19', 'venezolano', '25941659', 'tariba', 'tÃ¡chira', '2017-10-10', '2017-10-02', 'dfbgsd', '02767870331', '04247324809', 'Etir', '6', 'B', 'Jaira', 'Rodriguez', 'Larry', 'Navas', 'no Casados', 'luis', 'camacho', 'gdg'),
('oscar enrique', 'ruiz martinez', '11', 'venezolano', '27406357', 'bachaquero', 'zulia', '2006-11-18', '2008-11-18', 'campo belmonte', '02673521682', '04126888220', 'ued monseÃ±or emilio d', '7', 'A', 'LELI', 'MARTINEZ', 'ARTURO', 'RUIZ', 'Iglesia', 'Javier', 'NAVAS', 'fkjghdlkjfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ema_usu` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cla_usu` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `est_usu` char(1) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`ema_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ema_usu`, `cla_usu`, `est_usu`) VALUES
('javiereduardonavas@hotmail.com', '25951456', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
