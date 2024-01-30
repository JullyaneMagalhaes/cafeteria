-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 26-Jan-2024 às 18:21
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `datacadastro` date DEFAULT curdate(),
  `cpfcnpj` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idclientes`, `nome`, `email`, `telefone`, `datacadastro`, `cpfcnpj`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `imagem`) VALUES
(1, 'sdsd', 'david@test.com', '(85) 98809-8423', '2024-01-24', '111.111.111-11', '60347165', 'Rua Professor Raimundo Gomes', '476', 'dsd', 'Vila Velha', 'Fortaleza', 'CE', 'ff961e26a3e373e91c4fde26e396b773.png'),
(2, 'zxzxzx', 'david@test.com', '(85) 98809-8426', '2024-01-25', '00.575.137/320', '60347165', 'Rua Professor Raimundo Gomes', '476', '', 'Vila Velha', 'Fortaleza', 'CE', '8d039e2fcb5ea9aed4a23dca9b18e3ed.jpg'),
(3, 'sasasa', 'test@email.com', '(85) 98809-8426', '2024-01-25', '00.000.000/0000-00', '60347165', 'Rua Professor Raimundo Gomes', '486', 'sasa', 'Vila Velha', 'Fortaleza', 'CE', 'f0613638faf6b041d0831cea5e7f45ee.png'),
(4, 'sasasa', 'test@email.com', '(85) 98809-8426', '2024-01-25', '00.000.000/0000-00', '60347165', 'Rua Professor Raimundo Gomes', '486', 'sasa', 'Vila Velha', 'Fortaleza', 'CE', '4e9a59b08f63baf608c1e85489527ebe.png'),
(5, 'ssdsdsd', 'teste@test.com', '(85) 98809-8426', '2024-01-25', '00.000.000/0000-00', '60347165', 'Rua Professor Raimundo Gomes', '476', 'altos', 'Vila Velha', 'Fortaleza', 'CE', 'fb4388eb762d57f56e40b04bd313b554.png'),
(6, 'dsdsdsdsdsd', 'dsd@test.com', '(85) 98808-9842', '2024-01-25', '00.000.000/0000-00', '60347165', 'Rua Professor Raimundo Gomes', '476', 'aasas', 'Vila Velha', 'Fortaleza', 'CE', '1263a3db928d5a819fc6f21131a9a218.png'),
(7, 'dsdsd', 'dsd@teste.com', '(85) 98809-8426', '2024-01-26', '00.000.000/0000-00', '60347165', 'Rua Professor Raimundo Gomes', '476', 'Altos', 'Vila Velha', 'Fortaleza', 'CE', 'eca3a26fbafbdbb2ab18e5f212c33269.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `idestoque` int(11) NOT NULL,
  `idprodutos` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `dataatualizacao` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `estoque` int(11) DEFAULT 0,
  `idclientes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclientes`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`idestoque`),
  ADD KEY `idprodutos` (`idprodutos`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`),
  ADD KEY `idclientes` (`idclientes`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `idestoque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `idprodutos` FOREIGN KEY (`idprodutos`) REFERENCES `produtos` (`idprodutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `idclientes` FOREIGN KEY (`idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
