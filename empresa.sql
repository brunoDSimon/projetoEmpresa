-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Fev-2020 às 19:41
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nomeFuncionario` varchar(100) COLLATE utf8_bin NOT NULL,
  `dataNascimento` date NOT NULL,
  `celular` int(11) NOT NULL,
  `endereco` varchar(120) COLLATE utf8_bin NOT NULL,
  `dataAdmissao` date NOT NULL,
  `valor_hora` int(11) NOT NULL,
  `sexo` char(1) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `nome` varchar(120) COLLATE utf8_bin NOT NULL,
  `email` varchar(120) COLLATE utf8_bin NOT NULL,
  `telefone` int(11) NOT NULL,
  `cpf` varchar(11) COLLATE utf8_bin NOT NULL,
  `nascimento` date NOT NULL,
  `usuario` varchar(120) COLLATE utf8_bin NOT NULL,
  `senha` varchar(120) COLLATE utf8_bin NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nome`, `email`, `telefone`, `cpf`, `nascimento`, `usuario`, `senha`, `tipo`) VALUES
(1, 'bruno1', 'bruno@gmail.com', 23123, '23123123123', '2018-12-31', 'cacetinho', 'Simon99#', 0),
(2, 'bruno12', 'bruno@gmail.com1', 231231, '23123123123', '2018-12-31', 'cacetinho', 'Simon99#', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `referencia` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `cliente` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `remesa` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `datat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`id`, `referencia`, `valor`, `quantidade`, `cliente`, `remesa`, `foto`, `datat`) VALUES
(1, 'bf1', 1.2, 5, 'sagga', '001', '0', '2019-02-12'),
(2, 'bf1', 1.5, 4, 'sagga', '001', '0', '2019-02-12'),
(5, 'bf1', 2.5, 4, 'sagga', '314124', 'abc619342ca168d0fb0ba4b9dce4d40a.jpg', '2019-02-17'),
(6, 'sdasd', 15312, 50, 'dasd', '123123', NULL, '2019-07-14'),
(7, '312312', 15312, 50, 'sagga', '123123', NULL, '2019-07-14'),
(8, '312312', 15312, 50, 'sagga', '123123', NULL, '2019-07-14'),
(9, '312312', 15312, 50, 'sagga', '123123', NULL, '2019-07-14'),
(10, '', 0, 0, '', '', NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
