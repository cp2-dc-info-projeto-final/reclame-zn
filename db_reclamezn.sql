-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2021 às 21:06
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_reclamezn`
--
CREATE DATABASE IF NOT EXISTS `db_reclamezn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_reclamezn`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentario`
--

DROP TABLE IF EXISTS `tb_comentario`;
CREATE TABLE `tb_comentario` (
  `idcomentario` int(11) NOT NULL,
  `comentario_texto` longtext NOT NULL,
  `curtida` int(255) NOT NULL,
  `comentario_tempo` datetime NOT NULL DEFAULT current_timestamp(),
  `idpostagem` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_comentario`
--

INSERT INTO `tb_comentario` (`idcomentario`, `comentario_texto`, `curtida`, `comentario_tempo`, `idpostagem`, `idusuario`) VALUES
(26, ' Muito complicado isso, Iverson', 1, '2021-12-09 07:09:22', 34, 32),
(28, ' exemplo exemplo', 0, '2021-12-11 10:12:23', 46, 40),
(51, ' situação horrível', 2, '2021-12-15 16:34:03', 36, 45),
(52, ' eu também!', 1, '2021-12-15 16:59:34', 64, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtidas_comentarios`
--

DROP TABLE IF EXISTS `tb_curtidas_comentarios`;
CREATE TABLE `tb_curtidas_comentarios` (
  `idcurtida` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idcomentario` int(11) NOT NULL,
  `idpostagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_curtidas_comentarios`
--

INSERT INTO `tb_curtidas_comentarios` (`idcurtida`, `idusuario`, `idcomentario`, `idpostagem`) VALUES
(18, 45, 31, 53),
(19, 45, 32, 53),
(20, 45, 33, 54),
(21, 45, 34, 55),
(28, 35, 51, 36),
(29, 44, 51, 36),
(30, 44, 26, 34),
(31, 36, 52, 64);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtidas_postagens`
--

DROP TABLE IF EXISTS `tb_curtidas_postagens`;
CREATE TABLE `tb_curtidas_postagens` (
  `idcurtida` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpostagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_curtidas_postagens`
--

INSERT INTO `tb_curtidas_postagens` (`idcurtida`, `idusuario`, `idpostagem`) VALUES
(27, 32, 36),
(28, 32, 35),
(29, 31, 35),
(32, 31, 36),
(33, 34, 36),
(34, 34, 35),
(35, 34, 33),
(52, 35, 63),
(53, 35, 62),
(54, 35, 64),
(55, 44, 64),
(56, 44, 63),
(57, 44, 36),
(58, 44, 34),
(59, 45, 64),
(60, 45, 35),
(61, 45, 34),
(62, 36, 64);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

DROP TABLE IF EXISTS `tb_postagens`;
CREATE TABLE `tb_postagens` (
  `idpostagem` int(11) NOT NULL,
  `postagem_texto` longtext NOT NULL,
  `curtida` int(255) NOT NULL,
  `postagem_tempo` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_postagens`
--

INSERT INTO `tb_postagens` (`idpostagem`, `postagem_texto`, `curtida`, `postagem_tempo`, `idusuario`) VALUES
(34, ' Um cano está rachado aqui na comunidade do Rio Douro, em Irajá. A água está com bastante pressão, a passagem está inviável no local.\r\n\r\nHá mais de um ano reclamamos com a Cedae sobre uma possível rachadura no local e eles sempre fizeram pouco caso, agora aconteceu o que nós, moradores, temíamos.', 2, '2021-11-29 05:45:21', 31),
(35, ' Sinal ruim perto do Guanabara de Irajá, trânsito complicado. Esse sinal fica ruim toda semana e a prefeitura não faz nada para mudar.', 4, '2021-11-29 05:45:28', 31),
(36, ' Acidente na barro vermelho,em rocha Miranda. 2 horas de trânsito intenso e nenhum sinal de polícia ou reboque para resolver a situação, lamentável.', 5, '2021-11-29 05:46:31', 32),
(62, ' Hoje tive um acontecimento terrível, fui pegar o 629 indo para o meu pré-vestibular e fui ignorado por 3 motoristas, todos em sequência. Estou cansado de ter que lidar com profissionais sem vontade de trabalhar!!!', 1, '2021-12-15 16:34:49', 45),
(63, ' Por volta de 03h do dia 27/11 lixeiras foram furtadas na Rua Samin, em Irajá. Precisamos de um policiamento mais severo no bairro durante as madrugadas.', 2, '2021-12-15 16:35:11', 34),
(64, ' Hoje me atrasei pro colégio por causa de um alagamento em caxias, detesto quando isso acontece!!!!!', 4, '2021-12-15 16:38:55', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `senha`, `acesso`) VALUES
(19, 'Matheus Siqueira', 'matheus@gmail.com', '$2y$10$F0PDFb/tUSbg3S8SvaLXf.X.GNp3xymjfyEqtffto98qaZcZC0nZW', 0),
(31, 'Iverson Correia', 'iverson@gmail.com', '$2y$10$5oennTCrFwMnENvtG1lP3e2ECnuQFYj3JcRcY6tT.YU7tyxq9kt3i', 0),
(32, 'Felipe Marques', 'felipe@gmail.com', '$2y$10$l2wwyqaEGbPb7d/haJLF..MzCcFJRkBaGAh3Rx0d9.yrAK.JXgqzy', 0),
(33, 'Henrique Silva', 'henrique@gmail.com', '$2y$10$HEIg9nR1qQFlFjbnskMDOOwk9H1dLRHX1OmauKOKBzeLmG/npsFNW', 0),
(34, 'Vitor Brandão', 'vitor@gmail.com', '$2y$10$Ja7rtO.uh2HujjuHgROXtOOY1tLH4SVVRdNTIvjfsHhaJhv65iRFe', 0),
(35, 'Julia Sena', 'julia@gmail.com', '$2y$10$7QuoedReNAGUFL8Qe6ms3.cRG8dxW8IgInerANDjXbXLYA2aYGDUC', 0),
(36, 'Vitória Maria', 'vitoriamaria@gmail.com', '$2y$10$m.mOPyxM.OArYz3RqXoGaOp/rJm0yn1G8r/7Co8VPsLWL3iVffEsu', 0),
(40, 'Fulano de Tal', 'fulano@gmail.com', '$2y$10$aBKWNNJswtK1Fmnv7wp9KO5OPIsvfuyXziGSt/zBi9yWVEHSiWhDy', 0),
(41, 'Alayne Duarte', 'alayne@gmail.com', '$2y$10$2dUlkGCQDPFhldsg5SXDk.gNiNpmaR9FCdEiFLh8HYR2OgfRL9Jme', 1),
(42, 'Clécio Cardoso', 'clecio@gmail.com', '$2y$10$wGUVF/4K5gIBzzzAtLFrLuySYNLsfBd/tkC8PZDno.bHypW1cJBYe', 1),
(43, 'Usuário Comum', 'usuario@gmail.com', '$2y$10$/YDd8qGZi2G4BtmDs6mafO3/KPbegmKS556qHaXqSNwSUJtHLiwJ2', 0),
(44, 'Ygor Canalli', 'ygor@gmail.com', '$2y$10$xhyEIww4ehrWIeDdh5RaUe5wuy9OfY7g/sc45WHPbHX5vSqvUZuh.', 1),
(45, 'Guilherme Paixão', 'guilherme@gmail.com', '$2y$10$59hLr9b5k5tR0qL/.NqXbu/UPWTyfb7U6/TW2Q3cy//maYQBu47oy', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_comentario`
--
ALTER TABLE `tb_comentario`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Índices para tabela `tb_curtidas_comentarios`
--
ALTER TABLE `tb_curtidas_comentarios`
  ADD PRIMARY KEY (`idcurtida`);

--
-- Índices para tabela `tb_curtidas_postagens`
--
ALTER TABLE `tb_curtidas_postagens`
  ADD PRIMARY KEY (`idcurtida`);

--
-- Índices para tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  ADD PRIMARY KEY (`idpostagem`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_comentario`
--
ALTER TABLE `tb_comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `tb_curtidas_comentarios`
--
ALTER TABLE `tb_curtidas_comentarios`
  MODIFY `idcurtida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tb_curtidas_postagens`
--
ALTER TABLE `tb_curtidas_postagens`
  MODIFY `idcurtida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `idpostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

DROP USER IF EXISTS 'admin'@'localhost';

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin123';

GRANT ALL PRIVILEGES ON db_reclamezn.* TO 'admin'@'localhost';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
