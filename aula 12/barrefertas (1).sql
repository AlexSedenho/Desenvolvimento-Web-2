-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2026 at 07:44 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barrefertas`
--

-- --------------------------------------------------------

--
-- Table structure for table `entregas`
--

CREATE TABLE `entregas` (
  `id` int(11) NOT NULL,
  `id_consumidor` int(11) NOT NULL,
  `id_entregador` int(11) DEFAULT NULL,
  `largura` float NOT NULL,
  `altura` float NOT NULL,
  `profundidade` float NOT NULL,
  `peso` float NOT NULL,
  `sensivel` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entregas`
--

INSERT INTO `entregas` (`id`, `id_consumidor`, `id_entregador`, `largura`, `altura`, `profundidade`, `peso`, `sensivel`, `status`) VALUES
(5, 8, NULL, 5, 7, 9, 0.3, 'sim', 'cancelado'),
(6, 8, 10, 8, 8, 8, 4, 'nao', 'entregue'),
(8, 11, 9, 8, 6, 1, 0.6, 'sim', 'entregue'),
(9, 8, 9, 50, 50, 50, 10, 'sim', 'entregue'),
(10, 8, NULL, 20, 20, 20, 12, 'sim', 'disponivel'),
(11, 11, 9, 10, 10, 10, 10, 'nao', 'em_rota');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(8, 'Alexandre', 'xande@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'consumidor'),
(9, 'Claudio', 'claudio@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'entregador'),
(10, 'Paulo', 'paulo@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'entregador'),
(11, 'Pedro', 'pedro@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'consumidor'),
(14, 'Gerente', 'gerente@gmail.com', '98ec4ee87e461aa980d5ef58d68042c4a5b9b1d957bd04eac40f8b2fc582816a', 'gerente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
