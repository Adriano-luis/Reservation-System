-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Ago-2022 às 08:54
-- Versão do servidor: 8.0.28
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `booking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `model` varchar(50) NOT NULL DEFAULT '0',
  `price` float DEFAULT '0',
  `plate` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cars`
--

INSERT INTO `cars` (`id`, `model`, `price`, `plate`) VALUES
(1, 'Palio', 65, '0'),
(2, 'Fox', 60, '0'),
(3, 'Voyage', 70, '0'),
(4, 'Corolla', 60, '0'),
(5, 'Hilux', 110, '0'),
(6, 'Camaro', 160, '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservations`
--

CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `id_car` int NOT NULL DEFAULT '0',
  `date_init` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `user_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `reservations`
--

INSERT INTO `reservations` (`id`, `id_car`, `date_init`, `date_end`, `user_id`) VALUES
(1, 3, '2022-08-01 16:49:30', '2022-10-01 16:49:36', 2),
(2, 4, '2022-08-01 16:49:30', '2022-10-01 16:49:36', 1),
(3, 1, '2022-08-02 00:00:00', '2022-08-04 00:00:00', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
