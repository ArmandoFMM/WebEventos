-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24-Abr-2016 às 23:35
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
-- Estrutura da tabela `convidados`
--

CREATE TABLE `convidados` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome_convidado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convidado_evento`
--

CREATE TABLE `convidado_evento` (
  `evento_id` int(10) UNSIGNED NOT NULL,
  `convidado_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nr_convite` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `tipo_evento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado_evento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `designacao`, `imagem`, `data`, `hora_inicio`, `hora_fim`, `tipo_evento`, `estado_evento`, `descricao`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(25, 'AGAGAAGAG', '23IMG-20160424-WA0043.jpg', '2016-04-24', '23:29:00', '00:00:00', 'musical', '', 'Uwuehsdb', '2016-04-24 19:30:23', '2016-04-24 19:30:23', NULL, 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento_local`
--

CREATE TABLE `evento_local` (
  `local_id` int(10) UNSIGNED NOT NULL,
  `evento_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `evento_local`
--

INSERT INTO `evento_local` (`local_id`, `evento_id`, `created_at`, `updated_at`) VALUES
(25, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `evento_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locals`
--

CREATE TABLE `locals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome_local` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avenida_rua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `locals`
--

INSERT INTO `locals` (`id`, `created_at`, `updated_at`, `nome_local`, `cidade`, `bairro`, `avenida_rua`, `descricao_local`, `deleted_at`) VALUES
(1, '2016-04-22 12:50:59', '2016-04-22 12:50:59', '434344', 'maputo', '23234', '2343434', '33243443', NULL),
(3, '2016-04-22 13:05:20', '2016-04-22 15:19:51', 'Coconuts', 'maputo', 'Triunfo', 'Av. Marginal', 'Descrição de Teste', NULL),
(4, '2016-04-22 14:01:59', '2016-04-22 14:01:59', 'Soul Bar', 'maputo', '', 'Rua C.Sol', 'Nanabsbsjsjsjsbsbbdx x ehhehehshshshsbsshsbsbsjsjsjsjjsjsjshsjsjshshsjjsjshshsjsjshshshshsjshsjsjshsjshssdhsjososososjsjsjsjsjjsje', NULL),
(6, '2016-04-22 15:35:00', '2016-04-22 15:35:18', '433434343', '', '43434343', '4343434343', '3434434343434', NULL),
(7, '2016-04-22 19:13:57', '2016-04-22 19:13:57', 'fdfddffd', '', '34344343', '434343', '43443434343', NULL),
(8, '2016-04-22 21:35:49', '2016-04-22 21:35:49', '32323232', 'maputo', '323323', '3333232', '323jebeiw ewheyewew', NULL),
(9, '2016-04-22 21:40:39', '2016-04-22 21:40:39', 'ewewwe', '', 'ewew', 'ewewwe', 'ewew', NULL),
(10, '2016-04-22 21:59:47', '2016-04-22 21:59:47', '3233232', 'maputo', '233232', '2323', '3232323232', NULL),
(11, '2016-04-22 22:02:30', '2016-04-22 22:02:30', '3233232', 'maputo', '233232', '2323', '3232323232', NULL),
(12, '2016-04-22 22:03:57', '2016-04-22 22:03:57', '3233232', 'maputo', '233232', '2323', '3232323232', NULL),
(13, '2016-04-22 22:15:05', '2016-04-22 22:15:05', '3233232', '', '3232', '323232', '3232323232', NULL),
(14, '2016-04-22 22:28:06', '2016-04-22 22:28:06', 'dsdds', '', 'dsdsdsds', 'dsdsdsds', 'dsddsdds', NULL),
(15, '2016-04-22 22:33:05', '2016-04-22 22:33:05', '332', 'maputo', '324', '434343', '3434434343', NULL),
(16, '2016-04-22 22:35:28', '2016-04-22 22:35:28', 'eweew', 'maputo', 'ewewe', 'wweewew', 'ewewew', NULL),
(17, '2016-04-22 22:36:39', '2016-04-22 22:36:39', '32233', 'maputo', '32', '323232', '3233', NULL),
(18, '2016-04-22 22:40:51', '2016-04-22 22:40:51', '3', '', '32323', '32332', '12332', NULL),
(19, '2016-04-22 22:42:12', '2016-04-22 22:42:12', 'dsdsds', 'maputo', 'dssdds', 'ddd', 'sdds', NULL),
(20, '2016-04-22 23:02:50', '2016-04-22 23:02:50', 'qwee', 'maputo', '333ew', 'qwwwew', 'ewewwe', NULL),
(21, '2016-04-22 23:10:58', '2016-04-22 23:10:58', '323232', '', '2332', '3233', '323323232', NULL),
(22, '2016-04-22 23:20:18', '2016-04-22 23:20:18', '32323232', 'maputo', '233334', '44343344', '34343', NULL),
(23, '2016-04-24 15:24:10', '2016-04-24 15:24:10', '33434', 'maputo', '433434', '343434', '3444343434', NULL),
(24, '2016-04-24 18:53:55', '2016-04-24 18:53:55', 'retrtrtrt', '', 'trtr', 'rtt', 'trtrtr', NULL),
(25, '2016-04-24 19:30:23', '2016-04-24 19:30:23', 'Marginal ', 'maputo', 'Triunfo ', 'Av. Marginal ', 'Hsjshnssbnsn', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_19_00000_create_roles_table', 1),
('2016_04_20_000000_create_users_table', 1),
('2016_04_20_043011_create_eventos_table', 1),
('2016_04_20_045342_create_locals_table', 1),
('2016_04_20_045657_create_participantes_table', 1),
('2016_04_20_050506_create_convidados_table', 1),
('2016_04_20_054404_create_evento_local_table', 1),
('2016_04_20_061418_create_participante_evento_table', 1),
('2016_04_20_062226_create_convidado_evento_table', 1),
('2016_04_20_062805_create_imagens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome_participante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante_evento`
--

CREATE TABLE `participante_evento` (
  `evento_id` int(10) UNSIGNED NOT NULL,
  `participante_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nr_bilhete` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `designacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `designacao`) VALUES
(1, '2016-04-05 14:44:00', '2016-04-20 14:45:00', 'admin'),
(2, '2016-04-23 10:45:11', '2016-04-05 11:27:19', 'utilizador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `estado`, `telefone`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(12, 'Mandoza', 'armandomonjane@outlook.com', '$2y$10$qxV1DLRVjLhf6EaBQshDxeYq0GEw.uvob0DT6hFPfP1zWJODcuInW', '', '+258 841640163', 'CI2sXkBRz6rrVhPM8O7RI24VCDqkBLE9p0720B4syKZmg211Qtxja4G9ahlY', '2016-04-24 09:43:58', '2016-04-24 19:29:04', NULL, 2),
(13, 'mmmm', 'abc@gmail.com', '$2y$10$oHMiw6opWW63kkJuWJWNPuahui5gCPNe70pKVxe25/svLEzD8DEnC', '', '12345678', 'f69LalkWbIIikgXLdmntH42B1zhpOx6Bz2W9AfXY1nmRyIN9ZYRcBcdKDGdS', '2016-04-24 13:39:46', '2016-04-24 18:14:38', NULL, 2),
(15, '1322332', '3', '$2y$10$TiDWmpTs0PCFjgetVFI82O2Kn3L85JLNEmgYy2T9EaSoRsJnyHj0u', '', '131546564', NULL, '2016-04-24 14:04:49', '2016-04-24 14:04:49', NULL, 2),
(18, '44435', '545454', '$2y$10$HIEdDUDT98UT.aIuWct4yu.VmlF3GPAROz.LRX1qArIBTujJnek3m', '', '123334', NULL, '2016-04-24 14:09:30', '2016-04-24 14:09:30', NULL, 2),
(19, '3224', '4545', '$2y$10$U0WyRA7ysLgW7fOZU6NZZe1P09NXsaEmro9Z7qnG8wdM6YwXvT2Hm', '', '455454', NULL, '2016-04-24 14:41:16', '2016-04-24 14:41:16', NULL, 2),
(21, '12354', '54454', '$2y$10$ToNsJGf0tXSc/nQHn2FbPeDWB6GPuM/wKoOcNpVqJF2JWFXCha5Au', '', '5454545', NULL, '2016-04-24 14:43:27', '2016-04-24 14:43:27', NULL, 2),
(22, '12311', '111111', '$2y$10$ZjLU32Gdm6vISzUnG5byTOCZK/MHugSdYC4OVGjgzq0Fhp5S9VNGe', '', '', NULL, '2016-04-24 14:58:41', '2016-04-24 14:58:41', NULL, 2),
(26, 'mandoza', '43556545', '$2y$10$Z.N9C2p9cOJbXMmLEQy6YeNf2fzdle.kZZpuIygWt8mLaLNEHlqM.', '', '1234567890', NULL, '2016-04-24 18:56:04', '2016-04-24 18:56:04', NULL, 2),
(27, 'mandoza', 'bb2@gmail.com', '$2y$10$KwNeplLbAAtKN4lIBnl4COdl7hhiQicPgu.yUuRz4qb3hWHIit/ye', '', '12345678900', 'YIhe66kOx1yAwjZZjwWLhVn3h25LrhpKuzUJPqvPwiy6zXKl5starhpOYFEx', '2016-04-24 18:56:51', '2016-04-24 19:21:15', NULL, 1),
(28, 'admin', 'admin@gmail.com', '$2y$10$KwNeplLbAAtKN4lIBnl4COdl7hhiQicPgu.yUuRz4qb3hWHIit/ye', '', '123132', NULL, '2016-04-19 22:00:00', '2016-04-14 22:00:00', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convidados`
--
ALTER TABLE `convidados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `convidados_email_unique` (`email`),
  ADD UNIQUE KEY `convidados_telefone_unique` (`telefone`);

--
-- Indexes for table `convidado_evento`
--
ALTER TABLE `convidado_evento`
  ADD PRIMARY KEY (`evento_id`,`convidado_id`),
  ADD KEY `convidado_evento_convidado_id_foreign` (`convidado_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `evento_local`
--
ALTER TABLE `evento_local`
  ADD PRIMARY KEY (`local_id`,`evento_id`),
  ADD KEY `evento_id` (`evento_id`),
  ADD KEY `local_id` (`local_id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagens_evento_id_foreign` (`evento_id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participantes_user_id_foreign` (`user_id`);

--
-- Indexes for table `participante_evento`
--
ALTER TABLE `participante_evento`
  ADD PRIMARY KEY (`evento_id`,`participante_id`),
  ADD KEY `participante_evento_participante_id_foreign` (`participante_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_telefone_unique` (`telefone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convidados`
--
ALTER TABLE `convidados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `convidado_evento`
--
ALTER TABLE `convidado_evento`
  ADD CONSTRAINT `convidado_evento_convidado_id_foreign` FOREIGN KEY (`convidado_id`) REFERENCES `convidados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `convidado_evento_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `evento_local`
--
ALTER TABLE `evento_local`
  ADD CONSTRAINT `evento_local_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evento_local_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `locals` (`id`);

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `participante_evento`
--
ALTER TABLE `participante_evento`
  ADD CONSTRAINT `participante_evento_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participante_evento_participante_id_foreign` FOREIGN KEY (`participante_id`) REFERENCES `participantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
