-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Ago-2022 às 14:54
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `links_encurtados`
--

DROP TABLE IF EXISTS `links_encurtados`;
CREATE TABLE IF NOT EXISTS `links_encurtados` (
  `link_actual` text NOT NULL,
  `link_curto` text NOT NULL,
  `data_actual` date NOT NULL,
  `data_expira` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links_encurtados`
--

INSERT INTO `links_encurtados` (`link_actual`, `link_curto`, `data_actual`, `data_expira`) VALUES
('www.google.com', 'http:localhost:8081/1OndC', '2022-08-02', '2022-08-02'),
('www.google.com', 'http:localhost:8081/B0MTj', '2022-08-02', '2022-08-02'),
('t', 'http:localhost:8081/YaiOP', '2022-08-02', '2022-08-02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
