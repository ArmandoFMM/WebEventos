-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12-Abr-2016 às 16:32
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gestao_eventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bilhetes`
--

CREATE TABLE `bilhetes` (
  `id` int(11) NOT NULL,
  `evento_id` int(11) DEFAULT NULL,
  `participante_id` int(11) DEFAULT NULL,
  `nr_bilhete` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convidados`
--

CREATE TABLE `convidados` (
  `id` int(11) NOT NULL,
  `nome_convidado` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convites`
--

CREATE TABLE `convites` (
  `convidado_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `nr_pessoas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `designacao` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `tipo_evento` int(11) NOT NULL,
  `estado_evento` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `designacao`, `data`, `hora_inicio`, `hora_fim`, `tipo_evento`, `estado_evento`, `descricao`, `user_id`) VALUES
(8, 'Gshssgsg', '2016-04-14', '15:55:00', '00:00:00', 0, NULL, 'Gagahahshabbssb', 1),
(10, '2234443', '2016-03-31', '00:59:00', '00:00:00', 3332, NULL, '3233', 1),
(11, '2234443', '2016-03-31', '00:59:00', '00:00:00', 3332, NULL, '3233', 1),
(12, '3232', '2016-04-10', '00:59:00', '00:00:00', 2332, NULL, '3323232', 1),
(13, '3232', '2016-04-10', '00:59:00', '00:00:00', 2332, NULL, '3323232', 1),
(14, '3232', '2016-04-10', '00:59:00', '00:00:00', 2332, NULL, '3323232', 1),
(15, '33334', '2016-04-10', '22:59:00', '00:00:00', 34434334, NULL, '23344343', 1),
(16, '33334', '2016-04-10', '22:59:00', '00:00:00', 34434334, NULL, '23344343', 1),
(17, 'Hahhh', '2016-04-05', '17:51:00', '00:00:00', 0, NULL, 'Bsbsb ssh hhs', 1),
(18, '4446334343', '2016-04-10', '00:00:00', '00:00:00', 54545, NULL, '34334', 1),
(19, 'Hahhh', '2016-04-05', '17:51:00', '00:00:00', 0, NULL, 'Bsbsb ssh hhs', 1),
(20, 'Hahhh', '2016-04-05', '17:51:00', '00:00:00', 0, NULL, 'Bsbsb ssh hhs', 1),
(21, 'Hahhh', '2016-04-05', '17:51:00', '00:00:00', 0, NULL, 'Bsbsb ssh hhs', 1),
(22, 'oi', '2016-04-11', '09:25:00', '00:00:00', 0, NULL, 'Cdd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `caption` varchar(45) DEFAULT NULL,
  `evento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locals`
--

CREATE TABLE `locals` (
  `id` int(11) NOT NULL,
  `nome_local` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `avenida_rua` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `locals`
--

INSERT INTO `locals` (`id`, `nome_local`, `bairro`, `avenida_rua`, `descricao`) VALUES
(1, 'Matchedje', 'Alto-Maé', 'Av. 24 de Julho', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_evento`
--

CREATE TABLE `local_evento` (
  `local_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nome_participante` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `estado` varchar(16) DEFAULT NULL,
  `funcao` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `estado`, `funcao`, `email`, `telefone`) VALUES
(1, 'devz7', '1234', NULL, 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilhetes`
--
ALTER TABLE `bilhetes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_eventos_has_participantes_participantes1_idx` (`participante_id`),
  ADD KEY `fk_eventos_has_participantes_eventos1_idx` (`evento_id`);

--
-- Indexes for table `convidados`
--
ALTER TABLE `convidados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convites`
--
ALTER TABLE `convites`
  ADD PRIMARY KEY (`convidado_id`,`evento_id`),
  ADD KEY `fk_convidados_has_eventos_eventos1_idx` (`evento_id`),
  ADD KEY `fk_convidados_has_eventos_convidados1_idx` (`convidado_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_eventos_users1_idx` (`user_id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fotos_eventos1_idx` (`evento_id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_evento`
--
ALTER TABLE `local_evento`
  ADD PRIMARY KEY (`local_id`,`evento_id`),
  ADD KEY `fk_locals_has_eventos_eventos1_idx` (`evento_id`),
  ADD KEY `fk_locals_has_eventos_locals1_idx` (`local_id`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_participantes_users1_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilhetes`
--
ALTER TABLE `bilhetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `convidados`
--
ALTER TABLE `convidados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bilhetes`
--
ALTER TABLE `bilhetes`
  ADD CONSTRAINT `fk_eventos_has_participantes_eventos1` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_eventos_has_participantes_participantes1` FOREIGN KEY (`participante_id`) REFERENCES `participantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `convites`
--
ALTER TABLE `convites`
  ADD CONSTRAINT `fk_convidados_has_eventos_convidados1` FOREIGN KEY (`convidado_id`) REFERENCES `convidados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_convidados_has_eventos_eventos1` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_eventos_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_eventos1` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `local_evento`
--
ALTER TABLE `local_evento`
  ADD CONSTRAINT `fk_locals_has_eventos_eventos1` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_locals_has_eventos_locals1` FOREIGN KEY (`local_id`) REFERENCES `locals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `fk_participantes_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
