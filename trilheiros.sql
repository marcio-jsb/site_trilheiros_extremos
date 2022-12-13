-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 17:23
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
-- Banco de dados: `trilheiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `data_nasc`, `rg`, `cpf`, `endereco`, `estado`, `email`, `telefone`, `usuario`, `senha`) VALUES
(5, 'Marcio Jose da Silva Bizerra', '0000-00-00', '126642115', '05416246790', 'Rua Pinto de Campos', 'RJ', 'matmarciojsb@gmail.com', '21985747278', 'marciokabis', 'mat'),
(6, 'Marcelo da Silva Bizerra', '1985-05-16', '250215496', '74012625869', 'rua Atila', 'RS', 'marcelo@gmail', '2130164143', 'marcelo', 'muerj'),
(7, 'Marta Rocha Faria', '1963-12-08', '252596378', '02635896153', 'Estrada do Campinho', 'AM', 'marta@gmail.com', '21986572596', 'marta', '123'),
(8, 'jussara pereira da silva', '1983-05-16', '028963242581', '0285693217', 'rua Cabralia', 'AC', 'jussara@gmail', '21963258742', 'jussara', '123'),
(9, 'Pedro Malta', '1975-05-16', '25896357', '0258963687', 'rua Cananeia', 'TO', 'pedro@gmail', '2125869536', 'pedro', '2549');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`nome`, `email`) VALUES
('Tania Pimentel da Silva ', 'tania@gmail'),
('Camila Soares dos Santos', 'camila@gmail'),
('Davi Lopes de Souza', 'davi@gmail'),
('Joao Ribeiro Malta', 'joaomalta@gmail');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
