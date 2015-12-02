-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2015 at 10:30 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SOCIAL`
--

-- --------------------------------------------------------

--
-- Table structure for table `Beneficiario`
--

CREATE TABLE IF NOT EXISTS `Beneficiario` (
  `idBenef` int(11) NOT NULL AUTO_INCREMENT,
  `Users_id_Users` int(10) unsigned NOT NULL,
  `cartaoBenef` varchar(20) NOT NULL,
  `nomeBenef` varchar(80) NOT NULL,
  `dnascBenef` date NOT NULL,
  `cpfBenef` varchar(15) DEFAULT NULL,
  `eCivilBenef` varchar(20) DEFAULT NULL,
  `sexoBenef` varchar(15) DEFAULT NULL,
  `tituloBenef` int(20) DEFAULT NULL,
  `zonaTBenef` int(10) DEFAULT NULL,
  `secaoTBenef` int(10) DEFAULT NULL,
  `cidadeTBenef` varchar(50) DEFAULT NULL,
  `estadoTBenef` char(2) DEFAULT NULL,
  `escolaBenef` varchar(50) DEFAULT NULL,
  `trabBenef` varchar(20) DEFAULT NULL,
  `cargoBenef` varchar(50) DEFAULT NULL,
  `empresaBenef` varchar(50) DEFAULT NULL,
  `tempoBenef` varchar(30) DEFAULT NULL,
  `endBenef` varchar(60) NOT NULL,
  `bairroBenef` varchar(60) NOT NULL,
  `cidadeBenef` varchar(60) NOT NULL,
  `estadoBenef` char(2) NOT NULL,
  `telBenef` varchar(15) DEFAULT NULL,
  `rendaBenef` varchar(20) DEFAULT NULL,
  `fotoBenef` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`idBenef`),
  KEY `Users_id_Users` (`Users_id_Users`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `Beneficiario`
--

INSERT INTO `Beneficiario` (`idBenef`, `Users_id_Users`, `cartaoBenef`, `nomeBenef`, `dnascBenef`, `cpfBenef`, `eCivilBenef`, `sexoBenef`, `tituloBenef`, `zonaTBenef`, `secaoTBenef`, `cidadeTBenef`, `estadoTBenef`, `escolaBenef`, `trabBenef`, `cargoBenef`, `empresaBenef`, `tempoBenef`, `endBenef`, `bairroBenef`, `cidadeBenef`, `estadoBenef`, `telBenef`, `rendaBenef`, `fotoBenef`) VALUES
(26, 4, '2015.0522.2290-71', 'FREDERICO GUIMARAES', '2014-07-10', '777.777.777-77', 'solteiro', 'masculino', 123123, 123123, 12, 'QUIRINOPOLIS', 'GO', 'Analfabeto', 'Desempregado', '', '', '2 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 0000 9999', '120', '777.777.777-77'),
(27, 4, '2015.0522.3985-99', 'JOSENEIDE SILVA GUIMARAES', '1981-10-22', '111.111.111-11', 'solteiro', 'feminino', 123123, 12, 12, 'MORRINHOS', 'GO', 'Ensino MÃ©dio', 'Empregado', 'MONITORA', 'PREFEITURA MORRINHOS', '1 ANO', 'RUAL TAL', 'TAL', 'QUIRINOPOLIS', '', '(74) 9999 9999', '120', '111.111.111-11'),
(28, 4, '2015.0522.9916-75', 'LENITA DA SILVA GUIMARAES', '1983-08-09', '333.333.333-33', 'solteiro', 'feminino', 12312321, 12, 12, 'MORRINHOS', 'GO', 'Ensino Fundamental Incompleto', 'Empregado', 'APOSENTADA', 'PREFEITURA MORRINHOS', '2 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(75) 9999 9999', '120', '333.333.333-33'),
(29, 4, '2015.0522.8646-98', 'JOAO ROSA GUIMARAES', '1964-12-10', '222.222.222-22', 'Casado', 'masculino', 23424234, 12, 12, 'PIRACANJUBA', 'GO', 'Ensino Fundamental', 'Empregado', 'MOTORISTA', 'DERGO', '2 ANOS', 'RUA TAL', 'TAL', 'PIRACANJUBA', '', '(64) 0000 1111', '120', '222.222.222-22'),
(30, 4, '2015.0522.2839-25', 'MARCO AURELIO GUIMARAES', '1983-10-22', '888.888.888-88', 'solteiro', 'masculino', 2131231, 12, 12, 'QUIRINOPOLIS', 'GO', 'Curso Superior', 'Desempregado', 'MUSICO', 'TECMAR', '2 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 9999 1111', '120', '888.888.888-88'),
(39, 4, '2015.0523.9894-56', 'GISELE ALVES', '1982-01-22', '027.537.351-74', 'solteiro', 'feminino', 123123, 12, 12, 'QUIRINOPOLIS', 'GO', 'Curso Superior', 'Empregado', 'ADMINISTRADOR', 'LAN HOUSE', '1 ANO', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 8888 7777', '120', ''),
(40, 4, '2015.0524.2800-50', 'JOAO BARBOSA', '1992-07-19', '051.358.941-44', 'solteiro', 'masculino', 2342342, 12, 12, 'QUIRINOPOLIS', 'GO', 'Ensino Fundamental', 'Mercado Informal', 'MANUTENCAO DE COMPUTADOR', 'TAL', '1 ANO', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 9999 9999', '1200', ''),
(43, 4, '2015.0525.3212-11', 'MARCO AURELIO GUIMARAES', '1981-01-22', '710.834.561-72', 'solteiro', 'masculino', 123123, 12, 12, 'QUIRINPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Mercado Informal', 'GUITARRISTA', 'BANDA LONGITUDE', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 9999 9999', '120', '710.834.561-72'),
(44, 4, '2015.0525.2370-15', 'BANDA LONGITUDE', '2000-10-10', '710.834.561-72', 'solteiro', 'masculino', 123123, 123, 12, 'QUIRINOPOLIS', 'GO', 'Curso Profissionalizante', 'Mercado Informal', 'GUITARRISTA', 'BANDA LONGITUDE', '8 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(64) 8888 8888', '230', '710.834.561-72'),
(45, 4, '2015.0525.1965-14', 'JOSENEIDE SILVA GUIMARAES', '1981-01-22', '710.834.561-72', 'solteiro', 'feminino', 213123, 123, 12, 'MORRINHOS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'MONITORA', 'COLEGIO', '1 ANO', 'RUA TAL', 'TAL', 'MORRINHOS', '', '(87) 0000 0000', '1210', '710.834.561-72'),
(47, 4, '2015.0525.6092-27', 'CAZUZA', '1977-11-10', '710.834.561-72', 'solteiro', 'masculino', 123123, 12, 12, 'QUIRINOPOLIS', 'GO', 'Ensino Fundamental', 'Empregado', 'MUSICO', 'BARAO VERMELHO', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(75) 0000 0000', '120', '710.834.561-72'),
(48, 4, '2015.0525.9795-56', 'LOS HERMANOS', '1987-09-22', '710.834.561-72', 'solteiro', 'masculino', 123123, 12, 12, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'MUSICO', 'BANDA LOS HERMANOS', '8 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', '', '(77) 7777-7777', '123.12', '710.834.561-72'),
(49, 4, '2015.0526.5397-15', 'JEANDES WESLEY MARTINS', '1982-01-21', '950.422.611-68', 'Casado', 'masculino', 0, 0, 0, 'quirinopolis', 'GO', 'Ensino MÃ©dio', 'Empregado', 'aa', 'aa', 'aa', 'AA', 'AA', 'AA', 'GO', '(64) 3615-1669', '1,000.00', '950.422.611-68'),
(50, 4, '2015.0527.3490-42', 'JOSE DA SILVA', '1978-09-10', '710.834.561-72', 'Casado', 'masculino', 1231231, 123, 12, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Mercado Informal', 'MOTORISTA', 'DERGO', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(88) 8888-8888', '234.44', '710.834.561-72'),
(51, 4, '2015.0529.6184-30', 'SEBASTIAO DA SILVA', '1987-10-11', '710.834.561-72', 'Casado', 'masculino', 1231233, 12, 12, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'MOTORISTA', 'DERGO', '2 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(99) 9999-9999', '1,200.00', '710.834.561-72'),
(52, 4, '2015.0529.4435-46', 'JOSE DA SILVA', '1981-10-11', '710.834.561-72', 'solteiro', 'masculino', 12312313, 12, 11, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio', 'Empregado', 'REPRESENTANTE', 'COCA COLA', '2 ANOS', 'RUA TAL', 'TAL', 'MORRINHOS', 'GO', '(88) 8888-8888', '2,000.00', '710.834.561-72'),
(53, 4, '2015.0529.7581-99', 'LUIZ SANTOS', '1976-11-10', '710.834.561-72', 'Casado', 'masculino', 12312333, 3, 12, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'ARQUITETO', 'SANEAGO', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(99) 9999-9999', '2,000.00', '710.834.561-72'),
(54, 4, '2015.0529.3497-83', 'BON JOVI', '1972-07-10', '710.834.561-72', 'solteiro', 'masculino', 1231233, 12, 11, 'MORRINHOS', 'GO', 'Curso Profissionalizante', 'Empregado', 'MUSICO', 'JON BON JOVI', '4 ANOS', 'RUA TAL', 'TAL', 'MORRINHOS', 'GO', '(33) 3333-3333', '1,222.22', '710.834.561-72'),
(55, 4, '2015.0529.1352-36', 'BRUCE DICKSON', '1977-02-11', '710.834.561-72', 'solteiro', 'masculino', 1231233, 12, 11, 'MORRINHOS', 'GO', 'Ensino Fundamental', 'Empregado', 'MUSICO', 'IRON MAIDEN', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(44) 4444-4444', '1,220.00', '710.834.561-72'),
(56, 4, '2015.0529.7453-96', 'HELOENE SILVA', '1967-10-10', '710.834.561-72', 'solteiro', 'feminino', 123123, 12, 11, 'MORRINHOS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'COSTUREIRA', 'LENA', '3 ANOS', 'RUA TAL', 'TAL', 'MORRINHOS', 'GO', '(55) 5555-5555', '1,000.00', '710.834.561-72'),
(57, 4, '2015.0529.7340-94', 'CRISTIANO ROCHA', '1967-11-10', '710.834.561-72', 'solteiro', 'masculino', 1231233, 12, 12, 'GOIANIA', 'GO', 'Ensino MÃ©dio', 'Mercado Informal', 'MOTORISTA', 'TAL', '4 ANOS', 'RUA TAL', 'TAL', 'GOIANIA', 'GO', '(99) 9999-9999', '1,220.00', '710.834.561-72'),
(58, 4, '2015.0529.7480-44', 'HUMBERTO ROCHA', '1977-02-11', '710.834.561-72', 'Casado', 'masculino', 23123221, 12, 12, 'GOIANIA', 'GO', 'Ensino MÃ©dio Incompleto', 'Mercado Informal', 'MOTORISTA', 'BIKE', '4 ANOS', 'RUA TAL', 'TAL', 'GOIANIA', 'GO', '(11) 1111-1111', '1,000.00', '710.834.561-72'),
(59, 4, '2015.0529.6989-41', 'MARCELO ROSA', '1976-10-11', '710.834.561-72', 'Casado', 'masculino', 123123, 12, 1, 'MORRINHOS', 'GO', 'Curso Superior', 'Empregado', 'PROFESSOR', 'ESCOLA MUNICIPAL', '1 ANO', 'RUA TAL', 'TAL', 'MORRINHOS', 'GO', '(11) 1111-1111', '1,200.00', '710.834.561-72'),
(60, 4, '2015.0529.3810-64', 'LUIZ SOARES', '1988-10-11', '710.834.561-72', 'solteiro', 'masculino', 12312333, 100, 129, 'QUIRINOPOLIS', 'GO', 'Ensino MÃ©dio Incompleto', 'Empregado', 'JOGADOR DE FUTEBOL', 'BARCELONA', '12 ANOS', 'RUA TAL', 'TAL', 'BARCELONA', 'GO', '(22) 2222-2222', '1,000.00', '710.834.561-72'),
(64, 4, '2015.0529.3326-39', 'ADRIANA APARECIDA BICALHO DA CRUZ', '1988-09-23', '742.819.501-25', 'solteiro', 'masculino', 2147483647, 83, 24, 'SÃƒO SIMÃƒO', 'GO', 'Ensino Fundamental Incompleto', '', '', '', '26 ANOS', 'RUA NILDO TELESDA SILVA QD 03 LT 12', 'JARDIM LIBERDADE I', 'SÃƒO SIMÃƒO', 'GO', '(64) 8441-1380', '182.00', '742.819.501-25'),
(66, 4, '2015.0602.1254-93', 'MARIA ISABEL SOARES', '1967-10-10', '710.834.561-72', 'Casado', 'feminino', 1231233, 12, 11, 'SAO SIMAO', 'GO', 'Ensino MÃ©dio', 'Empregado', 'MONITORA', 'PREFEITURA SAO SIMAO', '3 ANOS', 'RUA TAL', 'TAL', 'SAO SIMAO', 'GO', '(88) 8888-8888', '1,200.00', '710.834.561-72'),
(67, 4, '2015.0605.1935-91', 'JOELMA CANCEIRO', '1976-10-22', '710.834.561-72', 'solteiro', 'feminino', 2147483647, 12, 11, 'QUIRINOPOLIS', 'GO', 'Curso Superior', 'Empregado', 'ENFERMEIRA', 'HOSPITAL GERAL', '3 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(88) 8888-8888', '3,000.00', '710.834.561-72'),
(68, 4, '2015.0605.7826-11', 'JUREMA SILVA', '1967-10-10', '710.834.561-72', 'Casado', 'feminino', 3424232, 23, 43, 'QUIRINOPOLIS', 'GO', 'Curso Profissionalizante', 'Empregado', 'MONITORA', 'PREFEITURA', '4 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(23) 3333-3333', '1,000.00', '710.834.561-72'),
(69, 4, '2015.0607.4424-12', 'TICO SANTA CRUZ', '1976-11-10', '710.834.561-72', 'Casado', 'masculino', 24345366, 23, 22, 'QUIRINOPOLIS', 'GO', 'Curso Superior', 'Empregado', 'MÃšSICO', 'DETONAUTAS', '5 ANOS', 'RUA TAL', 'TAL', 'QUIRINOPOLIS', 'GO', '(22) 2222-2222', '2,000.00', '710.834.561-72');

-- --------------------------------------------------------

--
-- Table structure for table `Beneficio`
--

CREATE TABLE IF NOT EXISTS `Beneficio` (
  `idBeneficio` int(11) NOT NULL AUTO_INCREMENT,
  `Users_id_Users` int(11) NOT NULL,
  `Beneficiario_idBenef` int(10) unsigned NOT NULL,
  `CadBeneficio_idBenef` int(11) NOT NULL,
  `dataInicial` date NOT NULL,
  PRIMARY KEY (`idBeneficio`),
  KEY `Users_id_Users` (`Users_id_Users`) USING BTREE,
  KEY `Beneficiario_idBenef` (`Beneficiario_idBenef`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `Beneficio`
--

INSERT INTO `Beneficio` (`idBeneficio`, `Users_id_Users`, `Beneficiario_idBenef`, `CadBeneficio_idBenef`, `dataInicial`) VALUES
(51, 4, 68, 10, '2015-06-05'),
(52, 4, 68, 13, '2015-06-05'),
(54, 4, 69, 14, '2015-06-07'),
(55, 4, 69, 19, '2015-06-07'),
(56, 4, 0, 16, '2015-06-11'),
(57, 4, 0, 15, '2015-06-11'),
(69, 4, 69, 13, '2015-06-11'),
(70, 4, 67, 10, '2015-06-11'),
(71, 4, 67, 14, '2015-06-11'),
(72, 4, 67, 17, '2015-06-11'),
(74, 4, 59, 11, '2015-06-11'),
(75, 4, 59, 13, '2015-06-11'),
(76, 4, 59, 14, '2015-06-11'),
(77, 4, 59, 16, '2015-06-11'),
(78, 4, 66, 8, '2015-06-11'),
(79, 4, 66, 13, '2015-06-11'),
(80, 4, 66, 15, '2015-06-11'),
(81, 4, 64, 10, '2015-06-13'),
(82, 4, 64, 14, '2015-06-13'),
(83, 4, 64, 17, '2015-06-13'),
(84, 4, 58, 8, '2015-06-14'),
(85, 4, 58, 13, '2015-06-14'),
(87, 4, 58, 15, '2015-06-16'),
(88, 4, 58, 18, '2015-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `Bolsa`
--

CREATE TABLE IF NOT EXISTS `Bolsa` (
  `idBolsa` int(11) NOT NULL AUTO_INCREMENT,
  `Users_idUsers` int(11) NOT NULL,
  `Beneficiario_idBenef` int(11) NOT NULL,
  `tipoBolsa` tinyint(1) DEFAULT NULL,
  `Supermercado_idSup` int(11) DEFAULT NULL,
  `validadeSup` date DEFAULT NULL,
  `Farmacia_idFarm` int(11) DEFAULT NULL,
  `validadeFarm` date DEFAULT NULL,
  PRIMARY KEY (`idBolsa`),
  KEY `Users_idUsers` (`Users_idUsers`,`Supermercado_idSup`,`Farmacia_idFarm`,`Beneficiario_idBenef`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `Bolsa`
--

INSERT INTO `Bolsa` (`idBolsa`, `Users_idUsers`, `Beneficiario_idBenef`, `tipoBolsa`, `Supermercado_idSup`, `validadeSup`, `Farmacia_idFarm`, `validadeFarm`) VALUES
(15, 4, 60, 1, 0, '0000-00-00', 4, '2015-12-10'),
(19, 4, 66, 1, 0, '0000-00-00', 11, '2015-12-10'),
(20, 4, 69, 0, 1, '2015-12-10', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `CadBeneficio`
--

CREATE TABLE IF NOT EXISTS `CadBeneficio` (
  `idBenef` int(11) NOT NULL AUTO_INCREMENT,
  `Users_idUsers` int(11) NOT NULL,
  `nomeBenef` varchar(100) NOT NULL,
  `descBenef` longtext,
  `recursivoBenef` tinyint(1) DEFAULT NULL,
  `tempoRecursivo` int(2) DEFAULT NULL,
  PRIMARY KEY (`idBenef`),
  KEY `Users_idUsers` (`Users_idUsers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `CadBeneficio`
--

INSERT INTO `CadBeneficio` (`idBenef`, `Users_idUsers`, `nomeBenef`, `descBenef`, `recursivoBenef`, `tempoRecursivo`) VALUES
(8, 4, 'SEGUNDA VIA - CERTIDÃƒO DE CASAMENTO', 'Segunda via do documento CertidÃ£o de Casamento nos CartÃ³rios da Cidade de SÃ£o SimÃ£o', 0, 0),
(10, 4, 'SEGUNDA VIA - CERTIDÃƒO DE Ã“BITO', 'Segunda via do documento CertidÃ£o de Ã“bito nos CartÃ³rios da Cidade de SÃ£o SimÃ£o', 0, 0),
(11, 4, 'IMPRESSÃƒO DE CARTEIRA DE VIAGEM AO IDOSO', 'ConfecÃ§Ã£o da Carteirinha de Viagem do Idoso para ajuda na locomoÃ§Ã£o entre cidades', 0, 0),
(12, 4, 'PASSE LIVRE PARA DEFICIENTES', 'Passe Livre para Deficientes em locais na cidade de SÃ£o SimÃ£o', 0, 0),
(13, 4, 'PASSAGENS PARA OUTROS MUNICÃPIOS', 'Passagens para outros MunicÃ­pios', 1, 10),
(14, 4, 'AUXÃLIO FUNERAL', 'AuxÃ­lio para famÃ­lias que perderam entes queridos e nÃ£o tem condiÃ§Ãµes de realizar o funeral', 0, 0),
(15, 4, 'AUXÃLIO NATALIDADE', 'AuxÃ­lio Natalidade para ajudar famÃ­lias a criar da crianÃ§a com benefÃ­cios de produtos de bebÃª', 1, 6),
(16, 4, 'CESTA BÃSICA EMERGENCIAL', 'Cesta bÃ¡sica urgente entregue de imediato', 0, 0),
(17, 4, 'DOAÃ‡ÃƒO DE COBERTORES', 'DoaÃ§Ã£o de Cobertores na Ã©poca do frio para auxiliar famÃ­lias', 0, 0),
(18, 4, 'ASSISTÃŠNCIA JURÃDICA - DIVÃ“RCIO', 'AssitÃªncia JurÃ­dica para entrar com pedido de DIVÃ“RCIO', 0, 0),
(19, 4, 'ASSISTÃŠNCIA JURÃDICA - GUARDA', 'AssistÃªncia JurÃ­dica para entrar com pedido de Guarda', 0, 0),
(20, 4, 'ASSISTÃŠNCIA JURÃDICA - INVESTIGA PATERNIDADE', 'AssistÃªncia JurÃ­dica para entrar com pedido de INVESTIGAÃ‡ÃƒO DE PATERNIDADE', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Dependente`
--

CREATE TABLE IF NOT EXISTS `Dependente` (
  `idDepend` int(11) NOT NULL AUTO_INCREMENT,
  `Users_id_User` int(10) unsigned NOT NULL,
  `Beneficiario_idBenef` int(11) NOT NULL,
  `nomeDepend` varchar(80) NOT NULL,
  `dnascDepend` date NOT NULL,
  `cartaoVacina` varchar(20) DEFAULT NULL,
  `certNascDepend` varchar(50) DEFAULT NULL,
  `eCivilDepend` varchar(20) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `tituloDepend` varchar(20) DEFAULT NULL,
  `zonaTDepend` varchar(10) DEFAULT NULL,
  `secaoTDepend` varchar(10) DEFAULT NULL,
  `cidadeTDepend` varchar(60) DEFAULT NULL,
  `estadoTDepend` char(2) DEFAULT NULL,
  `parentescoDepend` varchar(30) DEFAULT NULL,
  `profissaoDepend` varchar(50) DEFAULT NULL,
  `rendaDepend` varchar(20) DEFAULT NULL,
  `cidadeDepend` varchar(70) DEFAULT NULL,
  `estadoDepend` char(2) DEFAULT NULL,
  PRIMARY KEY (`idDepend`),
  KEY `Users_id_User` (`Users_id_User`),
  KEY `Beneficiario_idBenef` (`Beneficiario_idBenef`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `Dependente`
--

INSERT INTO `Dependente` (`idDepend`, `Users_id_User`, `Beneficiario_idBenef`, `nomeDepend`, `dnascDepend`, `cartaoVacina`, `certNascDepend`, `eCivilDepend`, `sexo`, `tituloDepend`, `zonaTDepend`, `secaoTDepend`, `cidadeTDepend`, `estadoTDepend`, `parentescoDepend`, `profissaoDepend`, `rendaDepend`, `cidadeDepend`, `estadoDepend`) VALUES
(41, 4, 26, 'NINA GUIMARAES', '1987-10-11', '12312', '123123', 'Solteiro', 'Feminino', '123123123', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHA', '', '', 'QUIRINOPOLIS', 'GO'),
(42, 4, 27, 'PAULO REGIS GUIMARAES', '2000-10-11', '123123', '123123', 'Solteiro', 'Masculino', '23423423', '231', '12', 'MORRINHOS', 'GO', 'FILHO', 'ESTUDATE', '', 'JATAI', 'GO'),
(43, 4, 28, 'MARCO AURELIO GUIMARES', '1982-01-22', '1231231', '123123', 'Solteiro', 'Masculino', '2342342', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHO', 'DESENVOLVEDOR DE SISTEMAS', '120', 'QUIRINOPOLIS', 'GO'),
(44, 4, 29, 'MARCELO ROSA GUIMARAES', '1984-10-22', '1231231', '1231231', 'Casado', 'Masculino', '4234234', '12', '23', 'MORRINHOS', 'GO', 'FILHO', 'PROFESSOR', '120', 'RIO QUENTE', 'GO'),
(45, 4, 30, 'REBEKA GUIMARAES', '2014-07-10', '123123', '12', 'Solteiro', 'Feminino', '123123', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHA', 'CANTORA', '120', 'QUIRINOPOLIS', 'GO'),
(48, 4, 39, 'ROBERTO GISELE', '1967-10-22', '2131232', '12', 'Casado', 'Masculino', '23423432243', '1232', '12', 'QUIRINOPOLIS', 'GO', 'ENTEADO', 'QUIMICO', '1230', 'QUIRINOPOLIS', 'GO'),
(49, 4, 39, 'JONY GISELE', '1967-10-22', '2131232', '12', 'Casado', 'Masculino', '23423432243', '1232', '12', 'QUIRINOPOLIS', 'GO', 'ENTEADO', 'QUIMICO', '1230', 'QUIRINOPOLIS', 'GO'),
(50, 4, 40, 'BRAMA CERVEJA', '1982-10-11', '12312312', '12', 'Solteiro', 'Masculino', '21312312', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHO', '', '120', 'QUIRINOPOLIS', 'GO'),
(53, 4, 43, 'REBEKA GUIMARAES', '2014-01-22', '123123', '12123123', 'Solteiro', 'Feminino', '1231231', '12', '12', '12', 'GO', 'FILHA', 'CANTORA', '120', 'QUIRINOPOLIS', 'GO'),
(54, 4, 44, 'MARCO AURELIO GUIMARAES', '1981-01-22', '123123', '123123', 'Solteiro', 'Masculino', '123123', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHO', 'GUITARRISTA', '120', 'QUIRINOPOLIS', 'GO'),
(55, 4, 45, 'NINA PAULA GUIMARAES', '2000-10-25', '1231233', '1233', 'Casado', 'Feminino', '23123213', '888', '33', 'MORRINHOS', 'GO', 'FILHA', 'ESTUDANTE', '120', 'QUIRINPOLIS', 'GO'),
(57, 4, 47, 'FREJAT', '1961-11-11', '123123', '123123', 'Solteiro', 'Masculino', '23123', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHO', 'GUIRARRISTA', '120', 'QUIRINOPOLIS', 'GO'),
(58, 4, 48, 'ANA JULIA', '1999-08-10', '1231231', '12312313', 'Solteiro', 'Feminino', '23123123', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHA', 'MUSICO', '122', 'QUIRINOPOLIS', 'GO'),
(59, 4, 49, 'GABRIEL ALVES MARTINS', '2011-06-17', '23442344', '12334355', 'Solteiro', 'Masculino', '13342344', '22', '10', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '1200', 'QUIRINOPOLIS', 'GO'),
(65, 4, 50, 'JOSEFINA DA SILVA', '1999-07-11', '12313123', '123312331', 'Solteiro', 'Feminino', '1233212', '12', '12', 'QUIRINOPOLIS', 'GO', 'FILHA', 'MUSICO', '1233', 'QUIRINOPOLIS', 'GO'),
(66, 4, 49, 'JOSE DA SILVA PIRES', '1977-09-22', '123123', '123333', 'Casado', 'Masculino', '1233333', '12', '11', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'PROFESSOR', '1200', 'QUIRINOPOLIS', 'GO'),
(67, 4, 51, 'JOAO DA SILVA', '1988-09-10', '213123133', '1231232', 'Solteiro', 'Masculino', '1231322', '1', '12', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '100', 'QUIRINOPOLIS', 'GO'),
(68, 4, 52, 'FRANCISCO DA SILVA', '1999-11-10', '12312313', '12231233', 'Solteiro', 'Masculino', '123312333', '12', '11', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '1000', 'MORRINHOS', 'GO'),
(69, 4, 53, 'SERGIO SANTOS', '1999-08-10', '12312333', '1231231233', 'Solteiro', 'Masculino', '1231323', '12', '11', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '', 'QUIRINOPOLIS', 'GO'),
(70, 4, 54, 'RITCHIE SAMBORA', '1999-08-10', '12312333', '1231231233', 'Solteiro', 'Masculino', '1231323', '12', '11', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '', 'QUIRINOPOLIS', 'GO'),
(71, 4, 55, 'BRIAN MAY', '1956-10-10', '123123', '1233', 'Solteiro', 'Masculino', '1233312', '12', '12', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'MUSICO', '1200', 'MORRINHOS', 'GO'),
(72, 4, 56, 'JOLIVE SILVA', '1955-01-10', '12312333', '12312313', 'Solteiro', 'Masculino', '123123', '10', '10', 'MORRINHOS', 'GO', 'IRMAO', 'MOTORISTA', '1000', 'MORRINHOS', 'GO'),
(73, 4, 57, 'PRISCILLA ROCHA', '1988-11-10', '1231233', '1233312', 'Solteiro', 'Feminino', '1231233', '12', '1', 'GOIANIA', 'GO', 'FILHA', 'ESTUDANTE', '', 'GOIANIA', 'GO'),
(74, 4, 58, 'GABRIELA ROCHA', '1999-09-11', '1231231', '1233123', 'Solteiro', 'Feminino', '12312331', '12', '12', 'GOIANIA', 'GO', 'FILHA', 'ESTUDANTE', '', 'GOIANIA', 'GO'),
(75, 4, 59, 'YASMIN ROSA', '1999-01-11', '123123', '123122', 'Solteiro', 'Feminino', '1231233', '12', '12', 'MORRINHOS', 'GO', 'FILHA', 'ESTUDANTE', '', 'MORRINHOS', 'GO'),
(76, 4, 60, 'MESSI JUNIOR', '1978-10-11', '1231233', '12312222', 'Solteiro', 'Masculino', '12323111', '123', '12', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'JOGADOR DE FUTEBOL', '12311', 'QUIRINOPOLIS', 'GO'),
(80, 4, 64, 'MARIA LUIZA APARECIDA SANTOS', '2011-12-04', '16830', '02942101552011100017042001907390', 'Solteiro', 'Feminino', '', '', '', '', '', 'FILHA', '', '', 'SÃƒO SIMÃƒO', 'GO'),
(81, 4, 64, 'EMANUELLY CRISTINA BICALHO', '2007-02-12', '', '02524701552007100016066001796835', 'Solteiro', 'Feminino', '', '', '', '', '', 'FILHA', 'ESTUDANTE 3 ANO ENSINO FUNDAMENTAL MATUTINO', '', 'SÃƒO SIMÃƒO', 'GO'),
(82, 4, 64, 'CARLOS HENRIQUE BICALHO CORREA', '2014-04-28', '613', '02524701552014100019160001970438', 'Solteiro', 'Masculino', '', '', '', '', '', 'FILHO', '', '', 'SÃƒO SIMÃƒO', 'GO'),
(83, 4, 64, 'ADEJAR ALVES CORREA', '1975-08-12', '', '', 'Casado', 'Masculino', '29429841066', '097', '0010', 'CACHOEIRA ALTA', 'GO', 'MARIDO', 'JARDINAGEM', '', 'SÃƒO SIMÃƒO', 'GO'),
(84, 4, 66, 'MARCO AURELIO SOARES', '1999-09-11', '123123333', '123312222', 'Solteiro', 'Masculino', '123123333', '122', '12', 'SAO SIMAO', 'GO', 'FILHO', 'ESTUDANTE', '', 'SAO SIMAO', 'GO'),
(85, 4, 67, 'CHIMBINHA CANCEIRO', '1998-10-10', '1235435', '2312345', 'Solteiro', 'Masculino', '1235345', '10', '10', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '', 'QUIRINOPOLIS', 'GO'),
(86, 4, 68, 'MARCO AURELIO GUIMARAES', '1999-09-11', '1231231', '21312331', 'Solteiro', 'Masculino', '123123', '11', '10', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'ESTUDANTE', '', 'QUIRINOPOLIS', 'GO'),
(87, 4, 69, 'MARCO AURELIO GUIMARAES', '1982-01-22', '1243534534', '12234534', 'Solteiro', 'Masculino', '123213123', '11', '10', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'ESTUDANTE', '', 'QUIRINOPOLIS', 'GO'),
(88, 4, 67, 'JUNIOR FLAMENGO', '1980-01-22', '23131233', '1231231233323', 'Solteiro', 'Masculino', '12312332', '11', '12', 'QUIRINOPOLIS', 'GO', 'IRMAO', 'ESTUDANTE', '300', 'QUIRINOPOLIS', 'GO'),
(89, 4, 58, 'ILTON MORAES', '1978-10-22', '234234234', '234234234234234', 'Solteiro', 'Masculino', '2423434432', '23', '11', 'QUIRINOPOLIS', 'GO', 'FILHO', 'ESTUDANTE', '222,00', 'QUIRINOPOLIS', 'GO');

-- --------------------------------------------------------

--
-- Table structure for table `Familia`
--

CREATE TABLE IF NOT EXISTS `Familia` (
  `idFamilia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Users_id_Users` int(11) NOT NULL,
  `Beneficiario_idBenef` int(11) NOT NULL,
  `Dependente_idDepend` int(11) NOT NULL,
  PRIMARY KEY (`idFamilia`),
  KEY `Users_id_Users` (`Users_id_Users`),
  KEY `Beneficiario_idBenef` (`Beneficiario_idBenef`),
  KEY `Dependente_idDepend` (`Dependente_idDepend`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `Familia`
--

INSERT INTO `Familia` (`idFamilia`, `Users_id_Users`, `Beneficiario_idBenef`, `Dependente_idDepend`) VALUES
(78, 4, 26, 41),
(79, 4, 27, 42),
(80, 4, 28, 43),
(81, 4, 29, 44),
(82, 4, 30, 45),
(85, 4, 39, 48),
(86, 4, 39, 49),
(87, 4, 40, 50),
(90, 4, 43, 53),
(91, 4, 44, 54),
(92, 4, 45, 55),
(94, 4, 47, 57),
(95, 4, 48, 58),
(96, 4, 49, 59),
(97, 4, 47, 61),
(98, 4, 47, 62),
(99, 4, 47, 63),
(100, 4, 47, 64),
(101, 4, 50, 65),
(102, 4, 49, 66),
(103, 4, 51, 67),
(104, 4, 52, 68),
(105, 4, 53, 69),
(106, 4, 54, 70),
(107, 4, 55, 71),
(108, 4, 56, 72),
(109, 4, 57, 73),
(110, 4, 58, 74),
(111, 4, 59, 75),
(112, 4, 60, 76),
(116, 4, 64, 79),
(117, 4, 64, 79),
(118, 4, 64, 80),
(119, 4, 64, 81),
(120, 4, 64, 82),
(121, 4, 64, 83),
(122, 4, 66, 84),
(123, 4, 67, 85),
(124, 4, 68, 86),
(125, 4, 69, 87),
(126, 4, 67, 88),
(127, 4, 58, 89);

-- --------------------------------------------------------

--
-- Table structure for table `Farmacia`
--

CREATE TABLE IF NOT EXISTS `Farmacia` (
  `idFarm` int(11) NOT NULL AUTO_INCREMENT,
  `Users_idUsers` int(11) NOT NULL,
  `nomeFarm` varchar(80) NOT NULL,
  `telFarm` varchar(20) DEFAULT NULL,
  `endFarm` varchar(70) DEFAULT NULL,
  `bairroFarm` varchar(70) DEFAULT NULL,
  `cnpjFarm` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idFarm`),
  KEY `Users_idUsers` (`Users_idUsers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Farmacia`
--

INSERT INTO `Farmacia` (`idFarm`, `Users_idUsers`, `nomeFarm`, `telFarm`, `endFarm`, `bairroFarm`, `cnpjFarm`) VALUES
(1, 4, 'DROGARIA SANTA CLARA', '(33) 3333-3333', 'RUA TAL', 'TAL', ''),
(2, 4, 'DROGARIA SANTA BARBARA', '(33) 3333-3333', 'RUA TAL', 'TAL', ''),
(3, 4, 'DROGARIA SANTA EFIGÃŠNIA', '(99) 9999-9999', 'RUA TAL', 'TAL', ''),
(4, 4, 'DROGARIA SANTA MONICA', '(99) 9999-9999', 'RUA TAL', 'TAL', ''),
(5, 4, 'DROGARIA SANTA RITA', '(99) 9999-9999', 'RUA TAL', 'TAL', ''),
(6, 4, 'DROGARIA MARCO AURELIO', '(98) 8888-8888', 'RUA TAL', 'TAL', ''),
(7, 4, 'DROGARIA QUADRANGULAR', '(98) 8888-8888', 'RUA TAL', 'TAL', '234248888'),
(8, 4, 'DROGARIA FLAMBOYANT', '(33) 3333-3333', 'RUA TAL', 'TAL', '23423423'),
(9, 4, 'DROGARIA JOAO ARROZ', '(44) 4444-4444', 'RUA TAL', 'TAL', '423423424'),
(10, 4, 'DROGARIA SAO SEBASTIAO', '(44) 4444-4444', 'RUA TAL', 'TAL', '423423424'),
(11, 4, 'DROGARIA SAO FRANCISCO', '(33) 3333-3333', 'RUA TAL', 'TAL', '234234234'),
(12, 4, 'DROGARIA SAO JOAO', '(33) 3333-3333', 'RUA TAL', 'TAL', '234234234'),
(13, 4, 'DROGARIA MUNICIPAL', '(22) 2222-2222', 'RUA TAL', 'TAL', '234234234');

-- --------------------------------------------------------

--
-- Table structure for table `InfoGeralBenef`
--

CREATE TABLE IF NOT EXISTS `InfoGeralBenef` (
  `idInfoGeral` int(11) NOT NULL AUTO_INCREMENT,
  `Users_id_Users` int(11) NOT NULL,
  `Beneficiario_idBenef` int(11) NOT NULL,
  `MoradiaInfo` varchar(30) DEFAULT NULL,
  `RemControlado` varchar(10) DEFAULT NULL,
  `DescRemControlado` varchar(100) DEFAULT NULL,
  `AjudaCompraRem` varchar(10) DEFAULT NULL,
  `FarmaciaMunicipal` varchar(10) DEFAULT NULL,
  `RecebeBenef` varchar(10) DEFAULT NULL,
  `DescRecebeBenef` varchar(80) DEFAULT NULL,
  `FazCurso` varchar(10) DEFAULT NULL,
  `DescFazCurso` varchar(100) DEFAULT NULL,
  `AluguelCusto` varchar(20) DEFAULT NULL,
  `CombustivelCusto` varchar(20) DEFAULT NULL,
  `EnergiaCusto` varchar(20) DEFAULT NULL,
  `GasCusto` varchar(20) DEFAULT NULL,
  `PrestacaoCusto` varchar(20) DEFAULT NULL,
  `AlimentacaoCusto` varchar(20) DEFAULT NULL,
  `AguaCusto` varchar(20) DEFAULT NULL,
  `FinanciamentoCusto` varchar(20) DEFAULT NULL,
  `RemedioCusto` varchar(20) DEFAULT NULL,
  `TelefoneCusto` varchar(20) DEFAULT NULL,
  `OutrosCustos` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idInfoGeral`),
  KEY `Users_id_Users` (`Users_id_Users`),
  KEY `Beneficiario_idBenef` (`Beneficiario_idBenef`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `InfoGeralBenef`
--

INSERT INTO `InfoGeralBenef` (`idInfoGeral`, `Users_id_Users`, `Beneficiario_idBenef`, `MoradiaInfo`, `RemControlado`, `DescRemControlado`, `AjudaCompraRem`, `FarmaciaMunicipal`, `RecebeBenef`, `DescRecebeBenef`, `FazCurso`, `DescFazCurso`, `AluguelCusto`, `CombustivelCusto`, `EnergiaCusto`, `GasCusto`, `PrestacaoCusto`, `AlimentacaoCusto`, `AguaCusto`, `FinanciamentoCusto`, `RemedioCusto`, `TelefoneCusto`, `OutrosCustos`, `total`) VALUES
(3, 4, 16, 'PrÃ³pria', '10', 'RIVOTRIL', 'NÃ£o', 'Sim', 'NÃ£o', '', 'Sim', 'PINTURA', '10', '10', '10', '10', '10', '10', '10', '10', '10', '', '10', ''),
(4, 4, 17, 'PrÃ³pria', '10', 'RIVOLTRIL', 'NÃ£o', 'Sim', 'NÃ£o', '', 'Sim', 'PINTURA', '10', '10', '10', '10', '10', '10', '10', '10', '10', '', '10', ''),
(5, 4, 18, 'PrÃ³pria', '200', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '', '', '100', '50', '', '300', '80', '', '200', '', '', ''),
(6, 4, 19, 'PrÃ³pria', '', '', 'NÃ£o', 'Sim', 'NÃ£o', '', 'NÃ£o', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 4, 20, 'PrÃ³pria', 'Sim', 'RIVOTRIL', 'NÃ£o', 'Sim', 'NÃ£o', '', 'NÃ£o', '', '', '', '90', '100', '', '300', '80', '', '100', '', '300', ''),
(8, 4, 21, 'Alugada', 'NÃ£o', '', 'Sim', 'Sim', 'Sim', 'nada', 'NÃ£o', '', '600', '100', '100', '60', '600', '300', '50', '', '', '', '', ''),
(9, 4, 22, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'Sim', 'NÃ£o', '', 'NÃ£o', '', '600', '130', '100', '100', '', '400', '100', '', '', '', '500', ''),
(10, 4, 23, 'Alugada', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700', '400', '120', '100', '', '400', '100', '', '300', '', '', ''),
(11, 4, 24, 'PrÃ³pria', 'NÃ£o', '', 'Sim', 'Sim', 'NÃ£o', '', 'NÃ£o', '', '', '', '100', '50', '', '400', '100', '', '100', '', '', ''),
(12, 4, 25, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '', '', '100', '100', '', '300', '100', '', '', '', '', ''),
(13, 4, 26, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '120', '', '100', '100', '', '', '100', '', '120', '', '', ''),
(14, 4, 28, 'Cedida', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700', '', '100', '100', '', '300', '100', '', '120', '', '', ''),
(15, 4, 29, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '', '200', '100', '100', '', '400', '100', '', '100', '', '', ''),
(16, 4, 30, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100', '100', '230', '120', '', '500', '100', '', '', '', '', ''),
(17, 4, 31, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 4, 39, 'Alugada', 'NÃ£o', '', 'Sim', 'Sim', 'NÃ£o', '', 'NÃ£o', '', '700', '300', '100', '100', '', '400', '100', '', '300', '', '', ''),
(19, 4, 40, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100', '100', '100', '100', '', '', '100', '', '200', '', '', ''),
(20, 4, 41, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '', '10,00', ''),
(21, 4, 42, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '', '10,00', ''),
(22, 4, 43, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '10,00', '', '10,00', ''),
(23, 4, 44, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '10,10', '10,10', '10,10', '10,10', '10,10', '10,10', '10,10', '10,10', '10,10', '', '10,10', ''),
(24, 4, 45, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '20,20', '100,00', '120,90', '100,00', '', '400,00', '100,00', '', '200,00', '', '120,10', ''),
(25, 4, 46, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100,00', '200,00', '101,00', '202,00', '10,98', '', '100,00', '', '200,00', '', '12,00', ''),
(26, 4, 47, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '200,00', '101,00', '111,00', '200,20', '100,10', '300,00', '100,00', '', '303,30', '', '', ''),
(27, 4, 48, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '600,00', '100,00', '100,00', '57,10', '', '300,00', '100,00', '', '100,00', '', '', ''),
(28, 4, 49, 'Alugada', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '666,66', '1,00', '1,00', '1,00', '4,00', '4,00', '4,00', '5,00', '', '', '1.000,00', ''),
(29, 4, 50, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '670,90', '400,00', '100,00', '100,00', '', '400,00', '100,00', '', '100,00', '', '100,00', ''),
(30, 4, 51, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '600,00', '', '100,00', '100,00', '', '300,00', '100,00', '', '100,00', '', '', ''),
(31, 4, 52, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '400,00', '', '100,00', '100,00', '', '400,00', '100,00', '', '', '', '', ''),
(32, 4, 53, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700,00', '100,00', '100,00', '57,00', '', '400,00', '100,00', '', '', '', '', ''),
(33, 4, 54, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700,00', '100,00', '100,00', '57,00', '0', '400,00', '100,00', '0', '0', '', '0', ''),
(34, 4, 55, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '800,00', '300,00', '100,00', '100,00', '', '600,00', '100,00', '', '', '', '', ''),
(35, 4, 56, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '', '200,00', '100,00', '100,00', '', '400,00', '100,00', '', '100,00', '', '', ''),
(36, 4, 57, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '500,00', '100,00', '100,00', '100,00', '', '400,00', '100,00', '', '100,00', '', '', ''),
(37, 4, 58, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700,00', '100,00', '100,00', '100,00', '', '400,00', '100,00', '', '100,00', '', '', ''),
(38, 4, 59, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100,00', '100,00', '100,00', '100,00', '100,00', '100,00', '100,00', '', '', '', '', ''),
(39, 4, 60, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '700,00', '100,00', '100,00', '100,00', '', '500,00', '100,00', '', '100,00', '', '', ''),
(40, 4, 61, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100,00', '10,00', '10,00', '10,00', '10,00', '10,00', '', '', '', '', '', ''),
(41, 4, 62, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '200,00', '100,00', '100,00', '100,00', '', '400,00', '100,00', '', '50,00', '', '', ''),
(42, 4, 63, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '400,00', '100,00', '100,00', '100,00', '', '100,00', '100,00', '', '', '', '', ''),
(43, 4, 64, 'Alugada', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'Sim', 'BOLSA FAMILIA', 'Sim', 'MANICURE', '400,00', '', '60,00', '50,00', '', '200,00', '', '', '', '', '', ''),
(44, 4, 66, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '600,00', '', '100,00', '100,00', '', '500,00', '100,00', '', '200,00', '', '', ''),
(45, 4, 67, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '100,00', '100,00', '100,00', '50,00', '', '300,00', '100,00', '', '100,00', '', '', ''),
(46, 4, 68, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '550,00', '', '100,00', '50,00', '', '100,00', '100,00', '', '100,00', '', '', ''),
(47, 4, 69, 'PrÃ³pria', 'NÃ£o', '', 'NÃ£o', 'NÃ£o', 'NÃ£o', '', 'NÃ£o', '', '560,00', '100,00', '100,00', '100,00', '', '140,00', '100,00', '', '100,00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regraUso`
--

CREATE TABLE IF NOT EXISTS `regraUso` (
  `idRegraUso` int(11) NOT NULL AUTO_INCREMENT,
  `RegraUso` longtext NOT NULL,
  PRIMARY KEY (`idRegraUso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regraUso`
--

INSERT INTO `regraUso` (`idRegraUso`, `RegraUso`) VALUES
(1, '<ol>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">A compra de cada<i> Benefici&aacute;rio</i> devidamente cadastrado dever&aacute; ser feita entre os dias 01 - 10 de cada m&ecirc;s</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">A validade do cart&atilde;o dever&aacute; ser de no m&aacute;ximo 6 meses</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">Para o recadastramento do sistema de Bolsa, o benefici&aacute;rio dever&aacute; apresentar todas as documenta&ccedil;&otilde;es para atualiza&ccedil;&atilde;o do cadastro</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">Sempre que for feita a compra, o benefici&aacute;rio dever&aacute; guardar sua nota da compra registrada pelo supermercado</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">Cada morador ser&aacute; cadastrado para um supermercado espec&iacute;fico</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">O valor do limite do cart&atilde;o ser&aacute; de 150,00 Reais para cada m&ecirc;s</font></font></li>\r\n	<li style="text-align: justify;"><font color="#0000CD"><font face="Comic Sans MS, cursive">A compra dever&aacute; ser feita com produtos pr&eacute;-cadastrados no sistema</font></font></li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Supermercado`
--

CREATE TABLE IF NOT EXISTS `Supermercado` (
  `idSup` int(11) NOT NULL AUTO_INCREMENT,
  `Users_idUsers` int(10) NOT NULL,
  `nomeSup` varchar(70) NOT NULL,
  `telSup` varchar(18) NOT NULL,
  `endSup` varchar(60) DEFAULT NULL,
  `bairroSup` varchar(50) DEFAULT NULL,
  `cnpjSup` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idSup`),
  KEY `Users_idUsers` (`Users_idUsers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Supermercado`
--

INSERT INTO `Supermercado` (`idSup`, `Users_idUsers`, `nomeSup`, `telSup`, `endSup`, `bairroSup`, `cnpjSup`) VALUES
(1, 4, 'SUPERMERCADO LUCAS', 'RUA TAL', 'TAL', '', '4'),
(2, 4, 'SUPERMERCADO VAREJÃƒO', 'RUA TAL', 'TAL', '', '4'),
(3, 4, 'SUPERMERCADO LUCAS', '(33) 3332-2222', 'RUA TAL', 'TAL', '');

-- --------------------------------------------------------

--
-- Table structure for table `termoUso`
--

CREATE TABLE IF NOT EXISTS `termoUso` (
  `idTermo` int(11) NOT NULL AUTO_INCREMENT,
  `textoTermo` longtext NOT NULL,
  PRIMARY KEY (`idTermo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `termoUso`
--

INSERT INTO `termoUso` (`idTermo`, `textoTermo`) VALUES
(1, '<p><font face="Arial, sans-serif"><b>Resumo das regras e normas de cita&ccedil;&atilde;o</b></font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Cita&ccedil;&atilde;o Direta</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">1. Deve conter o ano de publica&ccedil;&atilde;o e a p&aacute;gina que o texto foi extra&iacute;do.</font></p>\r\n\r\n<p><font face="Arial, sans-serif">2. Se voc&ecirc; primeiro citar a frase entre aspas, a refer&ecirc;ncia do autor deve apresentar-se na ordem: (SOBRENOME DO AUTOR, ano, p&aacute;gina). Lembre-se, neste caso: sobrenome do autor em CAIXA ALTA/MAI&Uacute;SCULAS.</font></p>\r\n\r\n<p><font face="Arial, sans-serif">3. Se voc&ecirc; primeiro referenciar o autor, para depois fazer a cita&ccedil;&atilde;o, use: Sobrenome (ano, n&uacute;mero da p&aacute;gina). Agora, apenas a primeira letra do sobrenome do autor deve estar em mai&uacute;scula.</font></p>\r\n\r\n<p><font face="Arial, sans-serif">4. Se a cita&ccedil;&atilde;o tiver algum termo entre aspas &quot; &quot;, coloque-o entre aspas simples, j&aacute; que a cita&ccedil;&atilde;o em si (a frase toda) apresenta-se entre aspas duplas. Fica assim: &ldquo;Os cientistas antigos procuraram o &lsquo;elixir da vida eterna&rsquo;, a pedra filosofal e outras tolices [...]&rdquo; (CASTRO, 2008, p. 55)</font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Cita&ccedil;&atilde;o Indireta</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">Segue a mesma formata&ccedil;&atilde;o quanto &agrave; refer&ecirc;ncia do sobrenome do autor (no in&iacute;cio ou no final da frase), ficando o seu crit&eacute;rio inserir ou n&atilde;o n&uacute;mero da p&aacute;gina em que o texto foi retirado.</font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Cita&ccedil;&atilde;o de Cita&ccedil;&atilde;o</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">Segue a mesma formata&ccedil;&atilde;o quanto &agrave; refer&ecirc;ncia do sobrenome do autor (no in&iacute;cio ou no final da frase). Por&eacute;m esse tipo de cita&ccedil;&atilde;o deve ser empregado com muito cuidado. Para que n&atilde;o fique com aspecto de superficialidade. Voc&ecirc; deve produzir seu pr&oacute;prio texto. N&atilde;o apenas copiar, ou melhor, deve evitar ao m&aacute;ximo copiar o que j&aacute; foi copiado. Se a obra lhe interessou, agregou valor a seu trabalho, procure a ler, e tirar dela suas pr&oacute;prias conclus&otilde;es. N&atilde;o fa&ccedil;a de seu trabalho uma colcha de retalhos. Pl&aacute;gio &eacute; CRIME. Suas penas est&atilde;o previstas na </font><i><font face="Arial, sans-serif">Lei</font></i><font face="Arial, sans-serif"><i> </i></font><font face="Arial, sans-serif">n. 9.610/98.</font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Grifo</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">Grifo: </font><font face="Arial, sans-serif"><b>negrito</b></font><font face="Arial, sans-serif">, </font><font face="Arial, sans-serif"><i>it&aacute;lico</i></font><font face="Arial, sans-serif"> ou</font><font face="Arial, sans-serif"><u> sublinhado</u></font><font face="Arial, sans-serif">, caso utilize algum dos recursos citados anteriormente em seu texto, especifique: se o recurso foi empregado pelo autor de alguma obra citada escreva: (grifo do autor); caso voc&ecirc; mesmo tenha optado pelo grifo, escreva (grifo nosso), ou seja, seu e de seu orientador.</font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Tradu&ccedil;&otilde;es</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">No caso das tradu&ccedil;&otilde;es, se ela foi realizada pelo autor da obra consultada registre (grifo do autor). Quando a tradu&ccedil;&atilde;o foi feita por voc&ecirc; registre (tradu&ccedil;&atilde;o nossa). </font></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Cita&ccedil;&atilde;o com mais de tr&ecirc;s linhas</b></font></p>\r\n\r\n<ul>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">Reduza o tamanho da fonte para 10 ou 11, preferencialmente, 11, Times New Roman;</font></p>\r\n	</li>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">Recue de 4 cm em rela&ccedil;&atilde;o &agrave; margem esquerda;</font></p>\r\n	</li>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">N&atilde;o aplique aspas</font></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><font face="Arial, sans-serif"><b>Notas de rodap&eacute;</b></font></p>\r\n\r\n<p><font face="Arial, sans-serif">Notas de rodap&eacute; s&atilde;o, normalmente, caracterizadas por n&uacute;meros sobrescritos, eventualmente, letras, apresentado no final da cita&ccedil;&atilde;o, que aparecem em sequ&ecirc;ncia, no corpo do trabalho.</font></p>\r\n\r\n<p><font face="Arial, sans-serif">No rodap&eacute; pode-se referenciar:</font></p>\r\n\r\n<ul>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">Um trabalho ainda em fase de elabora&ccedil;&atilde;o, sendo que em seu texto, deve constar a express&atilde;o entre par&ecirc;nteses (em fase de elabora&ccedil;&atilde;o).</font></p>\r\n	</li>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">Informa&ccedil;&otilde;es verbais obtidas durante uma conversa, uma palestra etc. Em seu texto, dever&aacute; constar a express&atilde;o entre par&ecirc;nteses (informa&ccedil;&atilde;o verbal).</font></p>\r\n	</li>\r\n	<li>\r\n		<p><font face="Arial, sans-serif">Qualquer tipo de men&ccedil;&atilde;o que julgue necess&aacute;rio, seguindo as normas de refer&ecirc;ncias ou vocabul&aacute;rio livre.</font></p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id_Users` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_Users` varchar(60) NOT NULL,
  `login_Users` varchar(50) NOT NULL,
  `senha_Users` varchar(40) NOT NULL,
  `end_Users` varchar(60) NOT NULL,
  `data_nasc_Users` date NOT NULL,
  `data_cad_Users` date NOT NULL,
  `tel_Users` varchar(15) NOT NULL,
  `tipo_Users` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id_Users`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id_Users`, `nome_Users`, `login_Users`, `senha_Users`, `end_Users`, `data_nasc_Users`, `data_cad_Users`, `tel_Users`, `tipo_Users`) VALUES
(4, 'MARCO AURELIO GUIMARAES', 'root', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '1982-01-22', '2015-05-11', '(64) 0000 0000', 0),
(5, 'RITA COSTA GUIMARAES', 'rita', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '1975-02-21', '2015-05-11', '(74) 9999 9999', 0),
(9, 'REBEKA GUIMARES', 'rebeka', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2014-03-01', '2015-05-11', '(74) 4444 4444', 0),
(10, 'REBEKA GUIMARES', 'rebeka', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2014-03-01', '2015-05-11', '(74) 4444 4444', 0),
(11, 'REBEKA GUIMARES', 'rebeka', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2013-01-22', '2015-05-11', '(43) 2222 2222', 0),
(12, 'REBEKA GUIMARES', 'rebeka', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2013-01-22', '2015-05-11', '(43) 2222 2222', 1),
(13, 'ISABELA GUIMARAES', 'belinha', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2014-08-06', '2015-05-11', '(64) 7777 7777', 1),
(14, 'FRED GUIMARAES', 'fred', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA LAZARO ABADIO', '2014-05-13', '2015-05-11', '(64) 0000 0000', 0),
(15, 'LENITA SILVA GUIMARAES', 'lenita', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA 24 N 12 VILA BELA MORRINHOS GO', '2014-03-11', '2015-05-11', '(64) 1111 1111', 0),
(16, 'JOAO ROSA GUIMARAES', 'joao', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA 24 N 12 VILA BELA MORRINHOS GO', '1985-01-22', '2015-05-11', '(64) 3333 3333', 0),
(17, 'JEANDES WESLEY MARTINS', 'jeandes', '8e684d8f3e60adbddcde80d73b2bdf445ab42669', 'RUA DOMINGOS JACINTO DA LUZ, 33', '1982-01-21', '2015-05-11', '(64) 8431-1904', 0),
(18, 'MARCELO ROSA GUIMARAES', 'marcelo', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA 24 N 12 VILA BELA MORRINHOS GO', '1975-09-17', '2015-05-11', '(64) 2222-2222', 0),
(19, 'FREDERICO GUIMARAES', 'fred', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'RUA TAL', '1995-03-15', '2015-05-16', '(64) 8408-3271', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Beneficiario`
--
ALTER TABLE `Beneficiario`
  ADD CONSTRAINT `FK_Users` FOREIGN KEY (`Users_id_Users`) REFERENCES `Users` (`id_Users`) ON UPDATE NO ACTION;

--
-- Constraints for table `Dependente`
--
ALTER TABLE `Dependente`
  ADD CONSTRAINT `FK_Beneficiario` FOREIGN KEY (`Beneficiario_idBenef`) REFERENCES `Beneficiario` (`idBenef`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
