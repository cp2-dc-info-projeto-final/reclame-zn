-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2021 às 21:53
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
(32, ' Hoje tive um acontecimento terrível, fui pegar o 629 indo para o meu pré-vestibular e fui ignorado por 3 motoristas, todos em sequência.\r\nEstou cansado de ter que lidar com profissionais sem vontade de trabalhar!!!', 0, '2021-11-29 05:44:45', 16),
(33, ' Por volta de 03h do dia 27/11 lixeiras foram furtadas na Rua Samin, em Irajá. Precisamos de um policiamento mais severo no bairro durante as madrugadas.', 0, '2021-11-29 05:45:02', 16),
(34, ' Um cano está rachado aqui na comunidade do Rio Douro, em Irajá. A água está com bastante pressão, a passagem está inviável no local.\r\n\r\nHá mais de um ano reclamamos com a Cedae sobre uma possível rachadura no local e eles sempre fizeram pouco caso, agora aconteceu o que nós, moradores, temíamos.', 0, '2021-11-29 05:45:21', 31),
(35, ' Sinal ruim perto do Guanabara de Irajá, trânsito complicado. Esse sinal fica ruim toda semana e a prefeitura não faz nada para mudar.', 0, '2021-11-29 05:45:28', 31),
(36, ' Acidente na barro vermelho,em rocha Miranda. 2 horas de trânsito intenso e nenhum sinal de polícia ou reboque para resolver a situação, lamentável.', 0, '2021-11-29 05:46:31', 32);

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
(35, 'Julia Sena', 'julia@gmail.com', '$2y$10$7QuoedReNAGUFL8Qe6ms3.cRG8dxW8IgInerANDjXbXLYA2aYGDUC', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_comentario`
--
ALTER TABLE `tb_comentario`
  ADD PRIMARY KEY (`idcomentario`);

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
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `idpostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
