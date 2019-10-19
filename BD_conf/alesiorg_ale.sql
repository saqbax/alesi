-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2019 at 12:30 PM
-- Server version: 5.7.27-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alesiorg_ale`
--
CREATE DATABASE IF NOT EXISTS `alesiorg_ale` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alesiorg_ale`;

-- --------------------------------------------------------

--
-- Table structure for table `archivos`
--

DROP TABLE IF EXISTS `archivos`;
CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcaso` int(11) NOT NULL,
  `ruta` varchar(250) NOT NULL,
  `sts` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archivos`
--

INSERT INTO `archivos` (`id`, `idcaso`, `ruta`, `sts`) VALUES
(1, 1, 'archivos/1/cne_andre.pdf', 1),
(2, 1, 'archivos/1/cont_andre.pdf', 1),
(3, 2, 'archivos/2/cne_pico2.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `aseguradora`
--

DROP TABLE IF EXISTS `aseguradora`;
CREATE TABLE IF NOT EXISTS `aseguradora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `sts` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aseguradora`
--

INSERT INTO `aseguradora` (`id`, `nombre`, `sts`) VALUES
(1, 'SURA', 'APR'),
(2, 'CARDIF', 'APR'),
(3, 'Alesi Org.', 'APR');

-- --------------------------------------------------------

--
-- Table structure for table `caso`
--

DROP TABLE IF EXISTS `caso`;
CREATE TABLE IF NOT EXISTS `caso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aseg` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `siniestro` varchar(200) NOT NULL,
  `fecha_sini` date NOT NULL,
  `fecha_report` date NOT NULL,
  `poliza` varchar(200) NOT NULL,
  `ini_vigencia` date NOT NULL,
  `fin_vigencia` date NOT NULL,
  `cobertura` varchar(200) NOT NULL,
  `asegurado` varchar(300) NOT NULL,
  `conductor` varchar(300) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `nro_serie` varchar(200) NOT NULL,
  `nro_motor` varchar(200) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `resul` varchar(50) NOT NULL,
  `decla_aseg` text NOT NULL,
  `entrevista` text NOT NULL,
  `visitado` varchar(2) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `observacion` text NOT NULL,
  `otro_sini` varchar(200) NOT NULL,
  `inciso` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `fec_doc` date NOT NULL,
  `razon_social` varchar(300) NOT NULL,
  `legal` varchar(200) NOT NULL,
  `cotejado` varchar(200) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `tlf` varchar(20) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `fec_contact` date NOT NULL,
  `obs_contact` text NOT NULL,
  `domicilio` varchar(2) NOT NULL,
  `direccion` text NOT NULL,
  `testigo` varchar(2) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `referencia` text NOT NULL,
  `obsert` text NOT NULL,
  `poliza_ante` varchar(200) NOT NULL,
  `cobertura2` varchar(200) NOT NULL,
  `vdesde` date NOT NULL,
  `vhasta` date NOT NULL,
  `obserp` text NOT NULL,
  `ministerio` varchar(200) NOT NULL,
  `alcaldia` varchar(200) NOT NULL,
  `carpeta` varchar(200) NOT NULL,
  `fec_carpeta` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  `registrada` varchar(2) NOT NULL,
  `carpeta2` varchar(200) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `obsr5` text NOT NULL,
  `sts` varchar(3) NOT NULL,
  `fec_crea` date NOT NULL,
  `fec_mod` date NOT NULL,
  `usu_mod` int(11) NOT NULL,
  `usu_apr` int(11) NOT NULL,
  `fec_apr` date NOT NULL,
  `fecha_usu` datetime NOT NULL,
  `pizarra` int(1) NOT NULL,
  `dirigidoa` varchar(200) NOT NULL,
  `cargodiri` varchar(100) NOT NULL,
  `asuntodiri` varchar(200) NOT NULL,
  `refint` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caso`
--

INSERT INTO `caso` (`id`, `id_aseg`, `id_usuario`, `siniestro`, `fecha_sini`, `fecha_report`, `poliza`, `ini_vigencia`, `fin_vigencia`, `cobertura`, `asegurado`, `conductor`, `id_marca`, `tipo`, `modelo`, `color`, `nro_serie`, `nro_motor`, `placa`, `resul`, `decla_aseg`, `entrevista`, `visitado`, `ubicacion`, `observacion`, `otro_sini`, `inciso`, `documento`, `fec_doc`, `razon_social`, `legal`, `cotejado`, `cargo`, `tlf`, `contacto`, `lugar`, `fec_contact`, `obs_contact`, `domicilio`, `direccion`, `testigo`, `nombre`, `referencia`, `obsert`, `poliza_ante`, `cobertura2`, `vdesde`, `vhasta`, `obserp`, `ministerio`, `alcaldia`, `carpeta`, `fec_carpeta`, `hora`, `registrada`, `carpeta2`, `motivo`, `obsr5`, `sts`, `fec_crea`, `fec_mod`, `usu_mod`, `usu_apr`, `fec_apr`, `fecha_usu`, `pizarra`, `dirigidoa`, `cargodiri`, `asuntodiri`, `refint`) VALUES
(1, 2, 2, '123456789', '2019-07-11', '2019-07-15', '4455455667889', '2019-08-01', '2020-05-05', '9000', 'Julio David Raas', 'pedro perez', 4, 'auto', 'aveo', 'gris', '4587', '555', '222', 'Procedente', 'gfdgdfgdfgdf', 'fgdfgdfgdf', 'SI', 'puerto cabello', '    gdfgdfgdfgdg', '', 'a123', 'cedula', '1990-02-08', 'mi bella paz', '5522145', 'cne', 'analista', '044412254', 'Personal', 'valencia', '2019-07-18', 'lkjkjhhgjh', 'SI', '    kudgfyugffref', 'SI', ' luis ', 'su casa', '    fgfgfhfgh', 'SI', 'Amplia', '2017-01-01', '2018-01-01', 'gfhjhghjgjh', 'si', 'hgy', '4444', '0000-00-00', '15:00', 'SI', 'hjgjghj', 'fdgdfgd', '    ghfghjgfg', 'APR', '2019-08-01', '2019-08-19', 10, 1, '2019-08-18', '2019-08-18 01:01:52', 1, 'Julio Raas', 'Analista de Casos', 'Asunto de prueba', 'Ref1235'),
(2, 2, 2, '123', '2019-07-11', '2019-07-15', '4455', '2018-05-05', '2020-05-05', '9000', 'Julio David Raas', 'pedro perez', 7, 'auto', 'aveo', 'gris', '4587', '555', '222', 'Procedente', 'gfdgdfgdfgdf', 'fgdfgdfgdf', 'SI', 'puerto cabello', '  gdfgdfgdfgdg', '', 'a123', 'cedula', '1990-02-08', 'mi bella paz', '5522145', 'cne', 'analista', '044412254', 'Personal', 'valencia', '2019-07-18', 'lkjkjhhgjh', 'SI', '  kudgfyugffref', 'SI', ' luis ', 'su casa', '  fgfgfhfgh', 'SI', 'Amplia', '2017-01-01', '2018-01-01', 'gfhjhghjgjh', 'si', 'hgy', '4444', '2019-05-11', '15:00', 'SI', 'hjgjghj', 'fdgdfgd', '  ghfghjgfg', 'ELA', '2019-08-01', '2019-08-06', 0, 0, '0000-00-00', '2019-08-16 13:00:00', 0, '', '', '', ''),
(3, 1, 2, '123', '2019-07-11', '2019-07-15', '4455', '2018-05-05', '2020-05-05', '9000', 'Julio David Raas', 'pedro perez', 7, 'auto', 'aveo', 'gris', '4587', '555', '222', 'Procedente', 'gfdgdfgdfgdf', 'fgdfgdfgdf', 'SI', 'puerto cabello', 'gdfgdfgdfgdg', '', 'a123', 'cedula', '1990-02-08', 'mi bella paz', '5522145', 'cne', 'analista', '044412254', 'Personal', 'valencia', '2019-07-18', 'lkjkjhhgjh', 'SI', 'kudgfyugffref', 'SI', '\r\n luis ', 'su casa', 'fgfgfhfgh', 'SI', 'Amplia', '2017-01-01', '2018-01-01', 'gfhjhghjgjh', 'si', 'hgy', '4444', '2019-05-11', '15:00', 'SI', 'hjgjghj', 'fdgdfgd', 'ghfghjgfg', 'APR', '2019-08-01', '0000-00-00', 0, 1, '2019-09-06', '2019-09-26 17:11:55', 0, 'Gustavo Pineda González.', 'Analista de Valuación y Dictamen.', 'Informe de Investigación de Siniestro', 'Ref1112'),
(4, 1, 1, '222334', '2019-07-02', '2019-07-03', '112d3', '2019-07-01', '2020-07-01', '521000', 'ernesto', 'alirio', 16, 'carro', 'fiesta', 'verde', '4452', '778454', 'abc12332', 'Procedente', 'hfhgffgbfkljhgfyhjsdklfghjkheahjcbsdhgwsy geuyfgfuy gfywer fyergf erfv rfbrf reyfwq fhig rf\r\nfriu fywriufh rfug f\r\nfvirehf nerufheruyfgewrkj fgriyf wqrufhqwr yfgw rf\r\nwv\r\nqfvhe rfvuyer fewqruhf qiyergf qwuf\r\n\r\nwrfi rferufg qeryfg rwifbhqweruifgqewrgfui', 'hfhgffgbfkljhgfyhjsdklfghjkheahjcbsdhgwsy geuyfgfuy gfywer fyergf erfv rfbrf reyfwq fhig rf\r\nfriu fywriufh rfug f\r\nfvirehf nerufheruyfgewrkj fgriyf wqrufhqwr yfgw rf\r\nwv\r\nqfvhe rfvuyer fewqruhf qiyergf qwuf\r\n\r\nwrfi rferufg qeryfg rwifbhqweruifgqewrgfui', 'SI', 'casa', '   fgbgfgbfgb', 'prueba de conteo de horas', 'abc123', 'cedula', '2019-07-02', 'sucasa', '5522145', 'cne', 'analista', '5521452', 'Personal', 'puerto cabello', '2019-07-11', 'fggdfghyhtyhtyh', 'SI', '   valencia\r\ncarabobo', 'SI', '  yoko', 'ghfghnfgnfgnfgnfgngn', '   hdghgsdvsvfsv', 'SI', 'Amplia', '2018-01-01', '0000-00-00', 'gbfnngnhngh', 'qwerty', 'nagua', '123cd', '2019-07-03', '15:00', 'SI', 'asd123', 'fdgdfgd', '   mhgnhgnghnghn', 'ELA', '2019-08-01', '2019-08-20', 0, 0, '0000-00-00', '2019-08-14 00:00:00', 0, '', '', '', ''),
(5, 1, 1, '6544464', '2019-08-22', '2019-08-22', '6465467864554', '2019-08-22', '2019-08-24', 'asdfasdf', 'Everardo Gomez', 'Everardo Gomez', 9, 'asdfasd', 'asdf', 'asdf', 'asdf', 'a', 'asdf', '', '', '', '', '', '', '', '22/08/2019', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '\r\n ', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 'ELA', '0000-00-00', '0000-00-00', 0, 0, '0000-00-00', '2019-08-22 00:29:49', 0, '', '', '', ''),
(6, 2, 12, '234234234', '2019-08-21', '2019-08-21', '', '2018-08-21', '2019-08-31', 'sdfg', 'Juanito', 'Juanote', 33, 'sdfg', 'sdfg', 'sdfg', 'sdfg', 'sdfg', 'sdfg', 'Rechazado', 'sdfg', 'sdfg', 'NO', '', ' ', '', '', '', '0000-00-00', '', '', '', '', '', 'Fax', '', '0000-00-00', '', 'NO', ' ', 'NO', ' ', '', ' ', 'NO', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', 'NO', '', '', ' ', 'ELA', '0000-00-00', '2019-08-22', 0, 0, '0000-00-00', '2019-08-22 00:28:50', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `caso_motivo`
--

DROP TABLE IF EXISTS `caso_motivo`;
CREATE TABLE IF NOT EXISTS `caso_motivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_caso` int(11) NOT NULL,
  `id_motivo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caso_motivo`
--

INSERT INTO `caso_motivo` (`id`, `id_caso`, `id_motivo`) VALUES
(2, 3, 1),
(4, 5, 1),
(17, 2, 1),
(22, 1, 1),
(23, 1, 5),
(24, 4, 1),
(25, 4, 6),
(26, 4, 2),
(29, 6, 2),
(30, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `caso_tiposini`
--

DROP TABLE IF EXISTS `caso_tiposini`;
CREATE TABLE IF NOT EXISTS `caso_tiposini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_caso` int(11) NOT NULL,
  `id_tiposini` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caso_tiposini`
--

INSERT INTO `caso_tiposini` (`id`, `id_caso`, `id_tiposini`) VALUES
(3, 3, 1),
(4, 3, 3),
(7, 5, 1),
(8, 5, 3),
(18, 2, 1),
(19, 2, 3),
(22, 1, 1),
(23, 4, 1),
(24, 5, 1),
(27, 6, 2),
(28, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`id`, `documento`) VALUES
(1, 'Póliza(s). Copia No.'),
(2, 'Factura(s). Copia Simple Certificada.'),
(3, 'Acta(s) del M.P. Copia Simple Carpeta de Investigación.'),
(4, 'Tenencias.'),
(5, 'Fotografías. Lugar Robo.'),
(6, 'Otros. Cuestionario Robo');

-- --------------------------------------------------------

--
-- Table structure for table `docu_caso`
--

DROP TABLE IF EXISTS `docu_caso`;
CREATE TABLE IF NOT EXISTS `docu_caso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_caso` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docu_caso`
--

INSERT INTO `docu_caso` (`id`, `id_caso`, `id_doc`) VALUES
(2, 3, 1),
(3, 3, 3),
(6, 5, 1),
(7, 5, 2),
(25, 2, 1),
(26, 4, 1),
(27, 4, 2),
(28, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` smallint(6) NOT NULL,
  `marca` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(1, ' MARCA'),
(2, 'AGRALE'),
(3, 'ALFA ROMEO'),
(4, 'AUDI'),
(5, 'BMW'),
(6, 'CHERY'),
(7, 'CHEVROLET'),
(8, 'CHRYSLER'),
(9, 'CITROEN'),
(10, 'DACIA'),
(11, 'DAEWO'),
(12, 'DAIHATSU'),
(13, 'DODGE'),
(14, 'FERRARI'),
(15, 'FIAT'),
(16, 'FORD'),
(17, 'GALLOPER'),
(18, 'HEIBAO'),
(19, 'HONDA'),
(20, 'HYUNDAI'),
(21, 'ISUZU'),
(22, 'JAGUAR'),
(23, 'JEEP'),
(24, 'KIA'),
(25, 'LADA'),
(26, 'LAND ROVER'),
(27, 'LEXUS'),
(28, 'MASERATI'),
(29, 'MAZDA'),
(30, 'MERCEDES BENZ'),
(31, 'MG'),
(32, 'MINI'),
(33, 'MITSUBISHI'),
(34, 'NISSAN'),
(35, 'PEUGEOT'),
(36, 'PORSCHE'),
(37, 'RAM'),
(38, 'RENAULT'),
(39, 'ROVER'),
(40, 'SAAB'),
(41, 'SEAT'),
(42, 'SMART'),
(43, 'SSANGYONG'),
(44, 'SUBARU'),
(45, 'SUZUKI'),
(46, 'TATA'),
(47, 'TOYOTA'),
(48, 'VOLKSWAGEN'),
(49, 'VOLVO');

-- --------------------------------------------------------

--
-- Table structure for table `motivo`
--

DROP TABLE IF EXISTS `motivo`;
CREATE TABLE IF NOT EXISTS `motivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motivo`
--

INSERT INTO `motivo` (`id`, `motivo`) VALUES
(1, 'Siniestro ocurrido dentro de los 30 días de inicio de vigencia.'),
(2, 'Falsedad de declaraciones.'),
(3, 'Suma asegurada.'),
(4, 'Cambio de Conductor.'),
(5, ' Dudosa preexistencia del vehículo.'),
(6, 'Posibles documentos apócrifos.'),
(7, 'Reconstrucción de hechos.'),
(8, 'Otros.');

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`id`, `iso`, `nombre`) VALUES
(1, 'AF', 'Afganistán'),
(2, 'AX', 'Islas Gland'),
(3, 'AL', 'Albania'),
(4, 'DE', 'Alemania'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antártida'),
(9, 'AG', 'Antigua y Barbuda'),
(10, 'AN', 'Antillas Holandesas'),
(11, 'SA', 'Arabia Saudí'),
(12, 'DZ', 'Argelia'),
(13, 'AR', 'Argentina'),
(14, 'AM', 'Armenia'),
(15, 'AW', 'Aruba'),
(16, 'AU', 'Australia'),
(17, 'AT', 'Austria'),
(18, 'AZ', 'Azerbaiyán'),
(19, 'BS', 'Bahamas'),
(20, 'BH', 'Bahréin'),
(21, 'BD', 'Bangladesh'),
(22, 'BB', 'Barbados'),
(23, 'BY', 'Bielorrusia'),
(24, 'BE', 'Bélgica'),
(25, 'BZ', 'Belice'),
(26, 'BJ', 'Benin'),
(27, 'BM', 'Bermudas'),
(28, 'BT', 'Bhután'),
(29, 'BO', 'Bolivia'),
(30, 'BA', 'Bosnia y Herzegovina'),
(31, 'BW', 'Botsuana'),
(32, 'BV', 'Isla Bouvet'),
(33, 'BR', 'Brasil'),
(34, 'BN', 'Brunéi'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'CV', 'Cabo Verde'),
(39, 'KY', 'Islas Caimán'),
(40, 'KH', 'Camboya'),
(41, 'CM', 'Camerún'),
(42, 'CA', 'Canadá'),
(43, 'CF', 'República Centroafricana'),
(44, 'TD', 'Chad'),
(45, 'CZ', 'República Checa'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CY', 'Chipre'),
(49, 'CX', 'Isla de Navidad'),
(50, 'VA', 'Ciudad del Vaticano'),
(51, 'CC', 'Islas Cocos'),
(52, 'CO', 'Colombia'),
(53, 'KM', 'Comoras'),
(54, 'CD', 'República Democrática del Congo'),
(55, 'CG', 'Congo'),
(56, 'CK', 'Islas Cook'),
(57, 'KP', 'Corea del Norte'),
(58, 'KR', 'Corea del Sur'),
(59, 'CI', 'Costa de Marfil'),
(60, 'CR', 'Costa Rica'),
(61, 'HR', 'Croacia'),
(62, 'CU', 'Cuba'),
(63, 'DK', 'Dinamarca'),
(64, 'DM', 'Dominica'),
(65, 'DO', 'República Dominicana'),
(66, 'EC', 'Ecuador'),
(67, 'EG', 'Egipto'),
(68, 'SV', 'El Salvador'),
(69, 'AE', 'Emiratos Árabes Unidos'),
(70, 'ER', 'Eritrea'),
(71, 'SK', 'Eslovaquia'),
(72, 'SI', 'Eslovenia'),
(73, 'ES', 'España'),
(74, 'UM', 'Islas ultramarinas de Estados Unidos'),
(75, 'US', 'Estados Unidos'),
(76, 'EE', 'Estonia'),
(77, 'ET', 'Etiopía'),
(78, 'FO', 'Islas Feroe'),
(79, 'PH', 'Filipinas'),
(80, 'FI', 'Finlandia'),
(81, 'FJ', 'Fiyi'),
(82, 'FR', 'Francia'),
(83, 'GA', 'Gabón'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GD', 'Granada'),
(90, 'GR', 'Grecia'),
(91, 'GL', 'Groenlandia'),
(92, 'GP', 'Guadalupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GF', 'Guayana Francesa'),
(96, 'GN', 'Guinea'),
(97, 'GQ', 'Guinea Ecuatorial'),
(98, 'GW', 'Guinea-Bissau'),
(99, 'GY', 'Guyana'),
(100, 'HT', 'Haití'),
(101, 'HM', 'Islas Heard y McDonald'),
(102, 'HN', 'Honduras'),
(103, 'HK', 'Hong Kong'),
(104, 'HU', 'Hungría'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Irán'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Irlanda'),
(110, 'IS', 'Islandia'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italia'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japón'),
(115, 'JO', 'Jordania'),
(116, 'KZ', 'Kazajstán'),
(117, 'KE', 'Kenia'),
(118, 'KG', 'Kirguistán'),
(119, 'KI', 'Kiribati'),
(120, 'KW', 'Kuwait'),
(121, 'LA', 'Laos'),
(122, 'LS', 'Lesotho'),
(123, 'LV', 'Letonia'),
(124, 'LB', 'Líbano'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libia'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lituania'),
(129, 'LU', 'Luxemburgo'),
(130, 'MO', 'Macao'),
(131, 'MK', 'ARY Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MY', 'Malasia'),
(134, 'MW', 'Malawi'),
(135, 'MV', 'Maldivas'),
(136, 'ML', 'Malí'),
(137, 'MT', 'Malta'),
(138, 'FK', 'Islas Malvinas'),
(139, 'MP', 'Islas Marianas del Norte'),
(140, 'MA', 'Marruecos'),
(141, 'MH', 'Islas Marshall'),
(142, 'MQ', 'Martinica'),
(143, 'MU', 'Mauricio'),
(144, 'MR', 'Mauritania'),
(145, 'YT', 'Mayotte'),
(146, 'MX', 'México'),
(147, 'FM', 'Micronesia'),
(148, 'MD', 'Moldavia'),
(149, 'MC', 'Mónaco'),
(150, 'MN', 'Mongolia'),
(151, 'MS', 'Montserrat'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Níger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Isla Norfolk'),
(162, 'NO', 'Noruega'),
(163, 'NC', 'Nueva Caledonia'),
(164, 'NZ', 'Nueva Zelanda'),
(165, 'OM', 'Omán'),
(166, 'NL', 'Países Bajos'),
(167, 'PK', 'Pakistán'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestina'),
(170, 'PA', 'Panamá'),
(171, 'PG', 'Papúa Nueva Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Perú'),
(174, 'PN', 'Islas Pitcairn'),
(175, 'PF', 'Polinesia Francesa'),
(176, 'PL', 'Polonia'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'GB', 'Reino Unido'),
(181, 'RE', 'Reunión'),
(182, 'RW', 'Ruanda'),
(183, 'RO', 'Rumania'),
(184, 'RU', 'Rusia'),
(185, 'EH', 'Sahara Occidental'),
(186, 'SB', 'Islas Salomón'),
(187, 'WS', 'Samoa'),
(188, 'AS', 'Samoa Americana'),
(189, 'KN', 'San Cristóbal y Nevis'),
(190, 'SM', 'San Marino'),
(191, 'PM', 'San Pedro y Miquelón'),
(192, 'VC', 'San Vicente y las Granadinas'),
(193, 'SH', 'Santa Helena'),
(194, 'LC', 'Santa Lucía'),
(195, 'ST', 'Santo Tomé y Príncipe'),
(196, 'SN', 'Senegal'),
(197, 'CS', 'Serbia y Montenegro'),
(198, 'SC', 'Seychelles'),
(199, 'SL', 'Sierra Leona'),
(200, 'SG', 'Singapur'),
(201, 'SY', 'Siria'),
(202, 'SO', 'Somalia'),
(203, 'LK', 'Sri Lanka'),
(204, 'SZ', 'Suazilandia'),
(205, 'ZA', 'Sudáfrica'),
(206, 'SD', 'Sudán'),
(207, 'SE', 'Suecia'),
(208, 'CH', 'Suiza'),
(209, 'SR', 'Surinam'),
(210, 'SJ', 'Svalbard y Jan Mayen'),
(211, 'TH', 'Tailandia'),
(212, 'TW', 'Taiwán'),
(213, 'TZ', 'Tanzania'),
(214, 'TJ', 'Tayikistán'),
(215, 'IO', 'Territorio Británico del Océano Índico'),
(216, 'TF', 'Territorios Australes Franceses'),
(217, 'TL', 'Timor Oriental'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad y Tobago'),
(222, 'TN', 'Túnez'),
(223, 'TC', 'Islas Turcas y Caicos'),
(224, 'TM', 'Turkmenistán'),
(225, 'TR', 'Turquía'),
(226, 'TV', 'Tuvalu'),
(227, 'UA', 'Ucrania'),
(228, 'UG', 'Uganda'),
(229, 'UY', 'Uruguay'),
(230, 'UZ', 'Uzbekistán'),
(231, 'VU', 'Vanuatu'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Islas Vírgenes Británicas'),
(235, 'VI', 'Islas Vírgenes de los Estados Unidos'),
(236, 'WF', 'Wallis y Futuna'),
(237, 'YE', 'Yemen'),
(238, 'DJ', 'Yibuti'),
(239, 'ZM', 'Zambia'),
(240, 'ZW', 'Zimbabue');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_siniestro`
--

DROP TABLE IF EXISTS `tipo_siniestro`;
CREATE TABLE IF NOT EXISTS `tipo_siniestro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_siniestro`
--

INSERT INTO `tipo_siniestro` (`id`, `tipo`) VALUES
(1, 'Con Violencia'),
(2, 'Sin Violencia'),
(3, 'Domicilio'),
(4, 'Colisión y/o vuelco');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `acuerdo` varchar(2) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `pais` int(11) NOT NULL,
  `calle` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `alcaldia` varchar(200) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `sts` varchar(3) NOT NULL,
  `fec_reg` date NOT NULL,
  `fec_apr` date NOT NULL,
  `usu_apr` int(11) NOT NULL,
  `usu_neg` varchar(200) NOT NULL,
  `perfil` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `acuerdo`, `nombre`, `empresa`, `pais`, `calle`, `ciudad`, `alcaldia`, `postal`, `descripcion`, `sts`, `fec_reg`, `fec_apr`, `usu_apr`, `usu_neg`, `perfil`) VALUES
(1, 'admin', 'admin123', 'SI', 'Alesi Org.', 'Alesi Org.', 146, '1', 'mexico', 'chiapas', '2050', 'empresa dedicada al seguro', 'APR', '2019-07-30', '2019-07-30', 1, '', 1),
(2, 'yoko4', 'abc123456', 'SI', 'Julio David Raas', '3', 232, 'valencia', 'puerto cabello', 'alcal', '2050', 'gfhyhtyjjtjyujyu', 'APR', '2019-07-30', '0000-00-00', 0, '', 2),
(7, 'juliodra', '44455221', 'SI', 'Julio Raas', '1', 232, 'valencia', 'puerto cabello', 'alcal', '2050', 'gfhgfdfdgdg', 'ENV', '2019-07-30', '0000-00-00', 0, '', 0),
(8, 'adq', 'abc123', 'SI', 'Julio David Raas', '1', 232, 'valencia', 'puerto cabello', 'alcal', '2050', 'hchchchg', 'ENV', '2019-07-31', '0000-00-00', 0, '', 3),
(10, 'usuario1', 'usuario123', 'SI', 'Andres Perez', '3', 232, 'calle bolivar', 'puerto cabello', 'alcal', '3065', 'empresa segura', 'APR', '2019-08-06', '0000-00-00', 0, '', 2),
(11, 'Quino', '456789', 'SI', 'Prueba Alesi ', '3', 1, 'F', 'MÃ©xico ', 'alcal', '00', 'InformaciÃ³n ', 'APR', '2019-08-15', '0000-00-00', 0, '', 2),
(12, 'Ever', 'ever123', 'SI', 'Everardo GÃ³mez Resendiz', '3', 146, 'asdf', 'asdf', 'alcal', '14230', 'Desarrollador Independiente', 'APR', '2019-08-22', '0000-00-00', 0, '', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
