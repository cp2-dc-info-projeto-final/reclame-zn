-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2021 às 04:58
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentario`
--

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
(2, ' teste', 0, '2021-12-08 03:38:16', 0, 16),
(4, ' maluco', 0, '2021-12-08 03:38:39', 0, 16),
(5, ' teste', 0, '2021-12-08 03:39:06', 0, 16),
(6, ' 12345', 0, '2021-12-08 03:47:37', 0, 16),
(7, ' teste', 0, '2021-12-08 04:20:38', 0, 16),
(8, ' asdasdasda', 0, '2021-12-08 04:30:11', 0, 16),
(9, ' kjkjkhjkjhkhj', 0, '2021-12-08 04:33:01', 0, 16),
(10, ' kjkjkhjkjhkhj', 0, '2021-12-08 04:33:34', 0, 16),
(24, ' indignado com isso!', 1, '2021-12-09 07:07:55', 36, 16),
(25, ' sempre acontece', 2, '2021-12-09 07:08:18', 35, 16),
(26, ' Muito complicado isso, Iverson', 0, '2021-12-09 07:09:22', 34, 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtidas_comentarios`
--

CREATE TABLE `tb_curtidas_comentarios` (
  `idcurtida` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idcomentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_curtidas_comentarios`
--

INSERT INTO `tb_curtidas_comentarios` (`idcurtida`, `idusuario`, `idcomentario`) VALUES
(4, 32, 21),
(5, 32, 21),
(6, 32, 21),
(7, 32, 21),
(8, 32, 21),
(9, 32, 21),
(10, 32, 21),
(11, 32, 21),
(12, 32, 21),
(13, 32, 21),
(15, 32, 24),
(16, 32, 25),
(17, 31, 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtidas_postagens`
--

CREATE TABLE `tb_curtidas_postagens` (
  `idcurtida` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpostagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_curtidas_postagens`
--

INSERT INTO `tb_curtidas_postagens` (`idcurtida`, `idusuario`, `idpostagem`) VALUES
(16, 16, 42),
(18, 34, 42),
(24, 32, 42),
(27, 32, 36),
(28, 32, 35),
(29, 31, 35),
(30, 31, 32),
(31, 31, 33),
(32, 31, 36),
(33, 34, 36),
(34, 34, 35),
(35, 34, 33),
(36, 34, 32),
(37, 37, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_postagens`
--

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
(32, ' Hoje tive um acontecimento terrível, fui pegar o 629 indo para o meu pré-vestibular e fui ignorado por 3 motoristas, todos em sequência.\r\nEstou cansado de ter que lidar com profissionais sem vontade de trabalhar!!!', 2, '2021-11-29 05:44:45', 16),
(33, ' Por volta de 03h do dia 27/11 lixeiras foram furtadas na Rua Samin, em Irajá. Precisamos de um policiamento mais severo no bairro durante as madrugadas.', 2, '2021-11-29 05:45:02', 16),
(34, ' Um cano está rachado aqui na comunidade do Rio Douro, em Irajá. A água está com bastante pressão, a passagem está inviável no local.\r\n\r\nHá mais de um ano reclamamos com a Cedae sobre uma possível rachadura no local e eles sempre fizeram pouco caso, agora aconteceu o que nós, moradores, temíamos.', 0, '2021-11-29 05:45:21', 31),
(35, ' Sinal ruim perto do Guanabara de Irajá, trânsito complicado. Esse sinal fica ruim toda semana e a prefeitura não faz nada para mudar.', 3, '2021-11-29 05:45:28', 31),
(36, ' Acidente na barro vermelho,em rocha Miranda. 2 horas de trânsito intenso e nenhum sinal de polícia ou reboque para resolver a situação, lamentável.', 4, '2021-11-29 05:46:31', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

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
(16, 'Guilherme Paixão', 'gui031203@gmail.com', '$2y$10$yF8NICtN8iYkN0EKbd9O8eeQDccYxykVGY8Nmhcj2rjakwo6R2OBK', 1),
(19, 'Matheus Siqueira', 'adada67@gmail.com', '$2y$10$F0PDFb/tUSbg3S8SvaLXf.X.GNp3xymjfyEqtffto98qaZcZC0nZW', 0),
(31, 'Iverson Correia', 'iverson@gmail.com', '$2y$10$5oennTCrFwMnENvtG1lP3e2ECnuQFYj3JcRcY6tT.YU7tyxq9kt3i', 0),
(32, 'Felipe Marques', 'felipe@gmail.com', '$2y$10$l2wwyqaEGbPb7d/haJLF..MzCcFJRkBaGAh3Rx0d9.yrAK.JXgqzy', 0),
(33, 'Henrique Silva', 'henrique@gmail.com', '$2y$10$.4O8q/D5zUUlgAKOnVKO.OcW8/KEqfc9yWtvH04X/x32eOArxG30O', 0),
(34, 'Vitor Brandão', 'vitor@gmail.com', '$2y$10$Ja7rtO.uh2HujjuHgROXtOOY1tLH4SVVRdNTIvjfsHhaJhv65iRFe', 0),
(35, 'Julia Sena', 'julia@gmail.com', '$2y$10$7QuoedReNAGUFL8Qe6ms3.cRG8dxW8IgInerANDjXbXLYA2aYGDUC', 0),
(36, 'Vitória Maria', 'vitoriamaria@gmail.com', '$2y$10$m.mOPyxM.OArYz3RqXoGaOp/rJm0yn1G8r/7Co8VPsLWL3iVffEsu', 0),
(37, 'Ygor Canalli', 'ygor@gmail.com', '$2y$10$KIVTg57bMH5mVOctCZqj1.Z.hjavxkKCEgb3pa0m1.27vM.MfpXu6', 1),
(38, 'Alayne Duarte', 'alayne@gmail.com', '$2y$10$pKhUcic31NYdnOl6Ffmjj.dm75r0HJoDbMz6qF1ZzcMPsVvTyfQ8S', 1);

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
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_curtidas_comentarios`
--
ALTER TABLE `tb_curtidas_comentarios`
  MODIFY `idcurtida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_curtidas_postagens`
--
ALTER TABLE `tb_curtidas_postagens`
  MODIFY `idcurtida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `idpostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
