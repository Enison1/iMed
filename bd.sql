-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 16:24
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id`, `descricao`) VALUES
(1, 'Acupuntura'),
(2, 'Anestesiologia'),
(3, 'Cardiologia'),
(4, 'Dermatologia'),
(5, 'Endoscopia'),
(6, 'Gastroenterologia'),
(7, 'Infectologia'),
(8, 'Neurologia'),
(9, 'Pediatra'),
(10, 'Clinica Geral');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `data_aniversario` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `nome`, `email`, `especialidade_id`, `data_aniversario`, `foto`) VALUES
(1, 'Alice ', 'Alice@gmail.com', 1, '1986-01-01', '0611037e11b98fc51dedd00e78a2209ed247e820.jpg'),
(2, 'Arthur ', 'Arthur@gmail.com', 2, '1982-01-01', '951d4b87eb37d85218e9ddf57154c4f8c9aeda53.jpg'),
(3, 'Davi  ', 'Davi@gmail.com', 3, '1989-01-01', '8fabf640202846c544f10240e4672ed9aa5e3d5f.jpg'),
(4, 'Gabriel   ', 'Gabriel@gmail.com', 4, '1990-01-01', 'cd4f018f6b0fbbe2dac4d3f661485c1d10a061a5.jpg'),
(5, 'Gael ', 'Gael@gmail.com', 5, '1983-01-01', 'be4c6251c873820c7289b87eb0ab0895fe5f1b65.jpg'),
(6, 'Helen', 'Helen@gmail.com', 6, '1984-01-01', '9f75535aadd78d74e9161b8719b0a9bd6435db8e.jpg'),
(7, 'Helena ', 'Helena@gmail.com', 7, '1985-01-28', '5a2fd37f56c9e3c7dc00fb4d21ea2b0b1aaf704f.jpg'),
(8, 'Laura  ', 'Laura@gmail.com', 8, '1988-01-01', 'd213902ea008679128e78f9d031db41612a524ce.jpg'),
(9, 'Marlene', 'Marlene@gmail.com', 9, '1981-01-01', 'c2894cc85beb0371a0cbf8eae7c9a8f00888af82.jpeg'),
(10, 'Thabata', 'Thabata@gmail.com', 10, '1987-01-01', 'ed9a40ac5682f5ad00f4c3369dd258ed67a0e7d1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_especialidade_id` (`especialidade_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_especialidade_id` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidade` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
