-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jul-2019 às 04:57
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAlteracao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `dataNascimento`, `dataCadastro`, `dataAlteracao`) VALUES
(23, 'Diego Elias', 'elias.diego@live.com', '1994-05-31', '2019-07-05 22:30:07', '2019-07-05 22:30:07'),
(24, 'Sandro Roberto', 'sandroroberto@hotmail.com', '2006-02-14', '2019-07-05 22:30:45', '2019-07-05 22:30:45'),
(25, 'Katia Silvia', 'ksilvia@gmail.com', '1994-09-01', '2019-07-05 22:31:31', '2019-07-05 22:31:31'),
(26, 'Caio Souza', 'caio.souza@outlook.com', '1990-02-01', '2019-07-05 22:32:16', '2019-07-05 22:32:16'),
(27, 'Sandra Aparecida', 'sandraap@bol.com.br', '1996-02-01', '2019-07-05 22:33:04', '2019-07-05 22:33:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientetelefone`
--

CREATE TABLE `clientetelefone` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `descricao` enum('CASA','TRABALHO','CELULAR') NOT NULL,
  `numero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientetelefone`
--

INSERT INTO `clientetelefone` (`id`, `id_cliente`, `descricao`, `numero`) VALUES
(29, 23, 'CASA', '(14) 99722-4399'),
(30, 24, 'TRABALHO', '(14) 99871-6697'),
(31, 24, 'CASA', '(14) 98786-6644'),
(32, 25, 'TRABALHO', '(14) 98778-7545'),
(33, 25, 'CASA', '(14) 98177-5548'),
(34, 25, 'CELULAR', '(14) 98785-5633');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientetelefone`
--
ALTER TABLE `clientetelefone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_clienteTelefone_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `clientetelefone`
--
ALTER TABLE `clientetelefone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientetelefone`
--
ALTER TABLE `clientetelefone`
  ADD CONSTRAINT `FK_clienteTelefone_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
