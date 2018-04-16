-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2018 às 21:23
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestao_medicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `compareceu` varchar(1) DEFAULT NULL COMMENT 'N = Não compareceu;  S = Compareceu',
  `queixas_paciente` mediumtext,
  `consideracoes_medico` mediumtext,
  `hora_consulta` time DEFAULT NULL,
  `dt_consulta` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `id_medico`, `id_paciente`, `compareceu`, `queixas_paciente`, `consideracoes_medico`, `hora_consulta`, `dt_consulta`) VALUES
(1, 1, 1, 'N', 'Sfsd few', 'dsf wearwrwerwer', '14:00:00', '2018-04-12'),
(2, 1, 1, 'S', 'Sfsd feer werw', 'ewr ewrwer', '15:00:00', '2018-04-14'),
(3, 2, 2, 'S', 'Wrew rewre', 'Sf ewroiewhriewhre', '16:30:00', '2018-04-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(11) NOT NULL,
  `me_nome` varchar(255) DEFAULT NULL,
  `me_email` varchar(255) DEFAULT NULL,
  `me_fone` varchar(15) DEFAULT NULL,
  `me_endereco` varchar(255) DEFAULT NULL,
  `me_descricao` mediumtext,
  `me_especialidades` varchar(255) DEFAULT NULL,
  `me_valor` decimal(10,2) DEFAULT NULL,
  `me_dt_cadastro` date DEFAULT NULL,
  `me_dt_ultimo_acesso` date DEFAULT NULL,
  `me_status` varchar(1) DEFAULT NULL COMMENT 'A = Ativo;   B = Bloqueado'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id_medico`, `me_nome`, `me_email`, `me_fone`, `me_endereco`, `me_descricao`, `me_especialidades`, `me_valor`, `me_dt_cadastro`, `me_dt_ultimo_acesso`, `me_status`) VALUES
(1, 'Dr João da Silva', 'joaodasilva@gmail.com', '(53) 981182020', 'Rua das Ruas', 'Al hsaihewpr', 'ASssa', '150.00', '2018-04-12', '2018-04-12', 'A'),
(2, 'Dr Julian Costa', 'juliancosta@gmail.com', '(53) 981181415', 'Rua das Sombras', 'SA dif odshfwefwer ewe', 'Nenhuma', '175.00', '2018-04-13', '2018-04-12', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `pc_nome` varchar(255) DEFAULT NULL,
  `pc_email` varchar(255) DEFAULT NULL,
  `pc_fone` varchar(15) DEFAULT NULL,
  `pc_dt_cadastro` date DEFAULT NULL,
  `pc_dt_ultimo_acesso` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `pc_nome`, `pc_email`, `pc_fone`, `pc_dt_cadastro`, `pc_dt_ultimo_acesso`) VALUES
(1, 'Joãzinho', 'joaozinho@teste.com', '(53) 981182021', '2018-04-12', '2018-04-12'),
(2, 'Zezinho', 'zezinho@teste.com', '(53) 981183130', '2018-04-14', '2018-04-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
