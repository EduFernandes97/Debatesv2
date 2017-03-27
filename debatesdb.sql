-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Mar-2017 às 16:29
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debatesdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(2) NOT NULL,
  `Nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `idUtilizador1` int(7) NOT NULL,
  `idUtilizador2` int(7) NOT NULL,
  `DataAmizade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(4) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Descricao` varchar(300) DEFAULT NULL,
  `Foto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `idCidade` int(4) NOT NULL,
  `Nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(15) NOT NULL,
  `Descricao` text NOT NULL,
  `Gostos` int(5) NOT NULL,
  `Data` date NOT NULL,
  `IdUtilizador` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `IdPais` int(4) NOT NULL,
  `Nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `IdSala` int(10) NOT NULL,
  `Limite` int(4) NOT NULL,
  `IdTema` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tema`
--

CREATE TABLE `tema` (
  `IdTema` int(10) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `FotoTema` tinyint(1) NOT NULL,
  `Descricao` varchar(300) DEFAULT NULL,
  `Opcao1` varchar(20) NOT NULL,
  `Opcao2` varchar(20) NOT NULL,
  `idCategoria` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `idUtilizador` int(7) NOT NULL,
  `Password` text NOT NULL,
  `DataNascimento` date NOT NULL,
  `Sexo` char(1) NOT NULL,
  `DataRegisto` date NOT NULL,
  `Email` text NOT NULL,
  `PrimeiroNome` text NOT NULL,
  `Apelido` text NOT NULL,
  `Telefone` varchar(15) DEFAULT NULL,
  `Foto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`idUtilizador`, `Password`, `DataNascimento`, `Sexo`, `DataRegisto`, `Email`, `PrimeiroNome`, `Apelido`, `Telefone`, `Foto`) VALUES
(1, 'asd', '2015-03-15', 'F', '2017-03-15', 'asd@asd.pt', 'asd', 'qwe', '321654987', 0),
(2, 'asd', '2017-03-22', 'M', '2017-03-22', 'asd', 'asd', 'asd', '195', 1),
(3, 'a', '0000-00-00', '', '2017-03-22', 'andre.trindade97@gmail.com', 'Eduardo', 'f', NULL, 0),
(4, '123', '2017-03-16', 'M', '2017-03-22', 'andre.trindade1997@gmail.com', 'Andre', 'Trindade', NULL, 0),
(5, '3', '2017-03-08', 'M', '2017-03-22', 'andre.trindade97@gmail.com', 'Eduardo', 'Cadete', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador-cidade`
--

CREATE TABLE `utilizador-cidade` (
  `IdUtilizador` int(7) NOT NULL,
  `IdCidade` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador-comentario`
--

CREATE TABLE `utilizador-comentario` (
  `IdUtilizador` int(7) NOT NULL,
  `IdComentario` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador-pais`
--

CREATE TABLE `utilizador-pais` (
  `IdUtilizador` int(7) NOT NULL,
  `idPais` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador-sala`
--

CREATE TABLE `utilizador-sala` (
  `IdUtilizador` int(7) NOT NULL,
  `IdSala` int(10) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`idUtilizador1`,`idUtilizador2`),
  ADD KEY `idUtilizador2` (`idUtilizador2`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `IdUtilizador` (`IdUtilizador`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`IdPais`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`IdSala`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`IdTema`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`idUtilizador`);

--
-- Indexes for table `utilizador-cidade`
--
ALTER TABLE `utilizador-cidade`
  ADD PRIMARY KEY (`IdUtilizador`,`IdCidade`),
  ADD KEY `IdCidade` (`IdCidade`);

--
-- Indexes for table `utilizador-comentario`
--
ALTER TABLE `utilizador-comentario`
  ADD PRIMARY KEY (`IdUtilizador`,`IdComentario`),
  ADD KEY `IdComentario` (`IdComentario`);

--
-- Indexes for table `utilizador-pais`
--
ALTER TABLE `utilizador-pais`
  ADD PRIMARY KEY (`IdUtilizador`,`idPais`),
  ADD KEY `idPais` (`idPais`);

--
-- Indexes for table `utilizador-sala`
--
ALTER TABLE `utilizador-sala`
  ADD PRIMARY KEY (`IdUtilizador`,`IdSala`),
  ADD KEY `IdSala` (`IdSala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `IdPais` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `IdSala` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `IdTema` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `idUtilizador` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `amigos_ibfk_1` FOREIGN KEY (`idUtilizador1`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amigos_ibfk_2` FOREIGN KEY (`idUtilizador2`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizador-cidade`
--
ALTER TABLE `utilizador-cidade`
  ADD CONSTRAINT `utilizador-cidade_ibfk_1` FOREIGN KEY (`IdCidade`) REFERENCES `cidade` (`idCidade`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizador-cidade_ibfk_2` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizador-comentario`
--
ALTER TABLE `utilizador-comentario`
  ADD CONSTRAINT `utilizador-comentario_ibfk_1` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizador-comentario_ibfk_2` FOREIGN KEY (`IdComentario`) REFERENCES `comentario` (`idComentario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizador-pais`
--
ALTER TABLE `utilizador-pais`
  ADD CONSTRAINT `utilizador-pais_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `pais` (`IdPais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizador-pais_ibfk_2` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `utilizador-sala`
--
ALTER TABLE `utilizador-sala`
  ADD CONSTRAINT `utilizador-sala_ibfk_1` FOREIGN KEY (`IdSala`) REFERENCES `sala` (`IdSala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizador-sala_ibfk_2` FOREIGN KEY (`IdUtilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
