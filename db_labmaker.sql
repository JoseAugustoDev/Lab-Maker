-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2026 às 01:14
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `labmaker`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(10) UNSIGNED NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `data_entrega` datetime DEFAULT NULL,
  `pontuacao_maxima` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atividade`
--

INSERT INTO `atividade` (`id`, `turma_id`, `professor_id`, `titulo`, `descricao`, `data_criacao`, `data_entrega`, `pontuacao_maxima`) VALUES
(1, 1, 8, 'Trabalho teste', 'Escreva', '2026-06-17 20:17:45', '2026-06-26 17:20:00', 30.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`id`, `titulo`, `descricao`, `area`, `carga_horaria`, `nivel`, `data_criacao`) VALUES
(2, 'Curso de Impressão 3D', '', 'Impressão 3D', 1, 'Básico', '2026-06-17 18:44:21'),
(3, 'Projetos com Arduino', 'Diversos projetos do inicio ao fim', 'Arduino', 30, 'Intermediário', '2026-06-17 19:24:28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `material`
--

CREATE TABLE `material` (
  `id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(10) UNSIGNED NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `arquivo_url` varchar(255) DEFAULT NULL,
  `data_publicacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `material`
--

INSERT INTO `material` (`id`, `turma_id`, `professor_id`, `titulo`, `descricao`, `tipo`, `arquivo_url`, `data_publicacao`) VALUES
(1, 1, 8, 'Intro ', 'Materail de teste', 'LINK', 'http://localhost:8080/professor/turmas', '2026-06-17 20:09:34'),
(3, 1, 8, 'Apostila', '', 'PDF', 'http://localhost:8080/professor/turmas', '2026-06-17 20:10:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `matricula`
--

CREATE TABLE `matricula` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno_id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(10) UNSIGNED NOT NULL,
  `data_matricula` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `progresso` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `matricula`
--

INSERT INTO `matricula` (`id`, `aluno_id`, `turma_id`, `data_matricula`, `status`, `progresso`) VALUES
(1, 1, 1, '2026-06-17 19:13:55', 'ativa', 33.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(10) UNSIGNED NOT NULL,
  `remetente_id` int(10) UNSIGNED NOT NULL,
  `destinatario_id` int(10) UNSIGNED NOT NULL,
  `assunto` varchar(150) DEFAULT NULL,
  `conteudo` text NOT NULL,
  `data_envio` datetime DEFAULT NULL,
  `lida` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(11, '2026-06-17-142305', 'App\\Database\\Migrations\\CreateUsuario', 'default', 'App', 1781711446, 1),
(12, '2026-06-17-142945', 'App\\Database\\Migrations\\CreateCurso', 'default', 'App', 1781711446, 1),
(13, '2026-06-17-142946', 'App\\Database\\Migrations\\CreateTurma', 'default', 'App', 1781711446, 1),
(14, '2026-06-17-142947', 'App\\Database\\Migrations\\CreateProfessorTurma', 'default', 'App', 1781711446, 1),
(15, '2026-06-17-142948', 'App\\Database\\Migrations\\CreateMatricula', 'default', 'App', 1781711446, 1),
(16, '2026-06-17-142949', 'App\\Database\\Migrations\\CreateMaterial', 'default', 'App', 1781711446, 1),
(17, '2026-06-17-142950', 'App\\Database\\Migrations\\CreateAtividade', 'default', 'App', 1781711446, 1),
(18, '2026-06-17-142951', 'App\\Database\\Migrations\\CreateNota', 'default', 'App', 1781711446, 1),
(19, '2026-06-17-143047', 'App\\Database\\Migrations\\CreateMensagem', 'default', 'App', 1781711446, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nota`
--

CREATE TABLE `nota` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno_id` int(10) UNSIGNED NOT NULL,
  `atividade_id` int(10) UNSIGNED NOT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `observacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `nota`
--

INSERT INTO `nota` (`id`, `aluno_id`, `atividade_id`, `valor`, `observacao`) VALUES
(1, 1, 1, 25.00, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor_turma`
--

CREATE TABLE `professor_turma` (
  `professor_id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professor_turma`
--

INSERT INTO `professor_turma` (`professor_id`, `turma_id`) VALUES
(8, 1),
(9, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `semestre` varchar(20) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turma`
--

INSERT INTO `turma` (`id`, `curso_id`, `codigo`, `semestre`, `data_inicio`, `data_fim`, `horario`, `status`) VALUES
(1, 3, '32.000.910844-8', '2026/2', '2026-08-01', '2026-12-17', 'Terça e Quinta - 19:00', 'EM_ANDAMENTO'),
(2, 2, '8FC708B91745DFDD07D1AEC33AE77939', '2026/2', '2026-06-25', '2026-07-09', 'Terça e Quinta - 19:00', 'ABERTA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  `tipo_usuario` enum('ALUNO','PROFESSOR','ADMIN') NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `data_cadastro`, `tipo_usuario`, `ativo`) VALUES
(1, 'Jose', 'admin@labmaker.com', '$2y$10$ZG4XvGnQkWVJ6PfKn3l2u.MtGvp7o0ybZDGESZXXRPzKcDS6QUk7O', NULL, '2026-06-17 12:58:30', 'ALUNO', 1),
(4, 'Jose Augusto', 'contato@gmail.com', '$2y$10$LPZ8v1Gc/ccM94twny9imOZTUmmRaKI2NCtGbWyRIB123i7AiOZaG', '162633528', '2026-06-17 17:52:06', 'ADMIN', 1),
(6, 'Leticia', 'teste@gmail.com', '$2y$10$HNJ.pZK832Q8mKjGD6Q1YeKH6Bm65S1HIsMJNSFx8.KmuNH57VhcG', '33236333', '2026-06-17 18:00:36', 'ALUNO', 1),
(8, 'Professor Arduino', 'professor@hotmail.com', '$2y$10$xOeu94yDmkSuMR3MVoNOfepebPsZP0WO54uboeGFJqmSpDku3Ej4i', '89224002', '2026-06-17 18:34:55', 'PROFESSOR', 1),
(9, 'Raissa', 'robotica@estudante.ifes.edu.br', '$2y$10$mGoUaE6FxvNlFDi8lJb9e.dAr6hZGjLc6rAnC.z2nLBn6iMwJnBOm', '40028922', '2026-06-17 21:41:20', 'PROFESSOR', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices de tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aluno_id_turma_id` (`aluno_id`,`turma_id`),
  ADD KEY `matricula_turma_id_foreign` (`turma_id`);

--
-- Índices de tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `remetente_id` (`remetente_id`),
  ADD KEY `destinatario_id` (`destinatario_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id` (`aluno_id`),
  ADD KEY `atividade_id` (`atividade_id`);

--
-- Índices de tabela `professor_turma`
--
ALTER TABLE `professor_turma`
  ADD PRIMARY KEY (`professor_id`,`turma_id`),
  ADD KEY `professor_turma_turma_id_foreign` (`turma_id`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atividade_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_destinatario_id_foreign` FOREIGN KEY (`destinatario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensagem_remetente_id_foreign` FOREIGN KEY (`remetente_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_aluno_id_foreign` FOREIGN KEY (`aluno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `professor_turma`
--
ALTER TABLE `professor_turma`
  ADD CONSTRAINT `professor_turma_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professor_turma_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
