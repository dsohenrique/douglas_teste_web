-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2017 às 00:32
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Estrutura da tabela `tb_corrida`
--

CREATE TABLE `tb_corrida` (
  `id_corrida` int(11) NOT NULL,
  `vl_corrida` varchar(255) NOT NULL,
  `nm_passageiro` varchar(255) NOT NULL,
  `nm_motorista` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_corrida`
--

INSERT INTO `tb_corrida` (`id_corrida`, `vl_corrida`, `nm_passageiro`, `nm_motorista`) VALUES
(24, '20', 'douglas', 'douglas'),
(25, '30', 'douglas', 'douglas'),
(26, '20', 'douglas', 'douglas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_motorista`
--

CREATE TABLE `tb_motorista` (
  `id_motorista` int(11) NOT NULL,
  `nm_motorista` varchar(255) NOT NULL,
  `dt_nascimento` varchar(255) NOT NULL,
  `cpf_motorista` varchar(255) NOT NULL,
  `sx_motorista` varchar(255) NOT NULL,
  `md_veiculo` varchar(255) NOT NULL,
  `st_motorista` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_motorista`
--

INSERT INTO `tb_motorista` (`id_motorista`, `nm_motorista`, `dt_nascimento`, `cpf_motorista`, `sx_motorista`, `md_veiculo`, `st_motorista`) VALUES
(3, 'douglas', '1997-01-29', '447', 'Masculino', 'lambo', 'Ativo'),
(4, 'ddtdtd', '2017-07-12', '226262', 'Masculino', 'bbbu', 'Ativo'),
(5, 'Jeni', '1998-04-29', '444848484', 'Feminino', 'Gtr', 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_passageiro`
--

CREATE TABLE `tb_passageiro` (
  `nm_passageiro` varchar(50) NOT NULL,
  `cpf_passageiro` varchar(255) NOT NULL,
  `sx_passageiro` varchar(255) NOT NULL,
  `dt_nascimento` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_passageiro`
--

INSERT INTO `tb_passageiro` (`nm_passageiro`, `cpf_passageiro`, `sx_passageiro`, `dt_nascimento`, `id`) VALUES
('jacumeu', '448', 'masculino', '1997-01-29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_corrida`
--
ALTER TABLE `tb_corrida`
  ADD PRIMARY KEY (`id_corrida`);

--
-- Indexes for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Indexes for table `tb_passageiro`
--
ALTER TABLE `tb_passageiro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_corrida`
--
ALTER TABLE `tb_corrida`
  MODIFY `id_corrida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  MODIFY `id_motorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_passageiro`
--
ALTER TABLE `tb_passageiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
