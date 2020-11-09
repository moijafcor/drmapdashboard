-- @Version 01.00.00. 29 de Julio del 2007 17:15:00 Santo Domingo, Dominican Republic.
-- @Designed and developed by Moises Jafet Cornelio-Vargas (http://pro.moisesjafet.com)
-- @Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
--
-- Host: localhost
-- Generation Time: Jul 29, 2007 at 03:18 AM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
--
-- Infoware: `[:DRmap(WebGUI):]`
--

-- --------------------------------------------------------

--
-- Table structure for table `catics_alcance_tipo`
--

CREATE TABLE `catics_alcance_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_areas_desarrollo`
--

CREATE TABLE `catics_areas_desarrollo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_clasificacion_edom`
--

CREATE TABLE `catics_clasificacion_edom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clasificacion` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_clasificacion_tipos_edom`
--

CREATE TABLE `catics_clasificacion_tipos_edom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Clasificacion_EDom` int(11) NOT NULL,
  `id_Tipos_Distribucion_Areas_EDom` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_estatus_implementacion`
--

CREATE TABLE `catics_estatus_implementacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_institu_patrocinadora`
--

CREATE TABLE `catics_institu_patrocinadora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Institu_Tipo` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `institucion` varchar(150) collate latin1_general_ci NOT NULL,
  `direccion` varchar(255) collate latin1_general_ci NOT NULL,
  `ciudad` varchar(150) collate latin1_general_ci NOT NULL,
  `website` varchar(150) collate latin1_general_ci NOT NULL,
  `email` varchar(150) collate latin1_general_ci NOT NULL,
  `telefono` varchar(150) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_institu_tipo`
--

CREATE TABLE `catics_institu_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instipo` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `catics_provincia_intervenida`
--

CREATE TABLE `catics_provincia_intervenida` (
  `id` int(11) NOT NULL auto_increment,
  `provincia` varchar(255) collate latin1_general_ci NOT NULL,
  `Descripcion` text collate latin1_general_ci,
  `TotalPoblacion` int(11) default NULL,
  `id_RegionGeografica` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `catics_provincia_intervenida`
--

INSERT INTO `catics_provincia_intervenida` VALUES (1, 'Altagracia', '', 0, 3);
INSERT INTO `catics_provincia_intervenida` VALUES (2, 'Azua', '', 0, 8);
INSERT INTO `catics_provincia_intervenida` VALUES (3, 'Bahoruco', '', 0, 9);
INSERT INTO `catics_provincia_intervenida` VALUES (4, 'Barahona', '', 0, 9);
INSERT INTO `catics_provincia_intervenida` VALUES (5, 'Dajabon', '', 0, 7);
INSERT INTO `catics_provincia_intervenida` VALUES (6, 'Distrito Nacional', '', 0, 1);
INSERT INTO `catics_provincia_intervenida` VALUES (7, 'Duarte', '', 0, 4);
INSERT INTO `catics_provincia_intervenida` VALUES (8, 'Elias Pina', '', 0, 8);
INSERT INTO `catics_provincia_intervenida` VALUES (9, 'El Seybo', '', 0, 3);
INSERT INTO `catics_provincia_intervenida` VALUES (10, 'Espaillat', '', 0, 6);
INSERT INTO `catics_provincia_intervenida` VALUES (11, 'Hato Mayor', '', 0, 3);
INSERT INTO `catics_provincia_intervenida` VALUES (12, 'Independencia', '', 0, 9);
INSERT INTO `catics_provincia_intervenida` VALUES (13, 'La Romana', '', 0, 3);
INSERT INTO `catics_provincia_intervenida` VALUES (14, 'La Vega', '', 0, 5);
INSERT INTO `catics_provincia_intervenida` VALUES (15, 'Maria Trinidad Sanchez', '', 0, 4);
INSERT INTO `catics_provincia_intervenida` VALUES (16, 'Monsenor Nouel', '', 0, 5);
INSERT INTO `catics_provincia_intervenida` VALUES (17, 'Montecristi', '', 0, 7);
INSERT INTO `catics_provincia_intervenida` VALUES (18, 'Monteplata', '', 0, 2);
INSERT INTO `catics_provincia_intervenida` VALUES (19, 'Pedernales', '', 0, 9);
INSERT INTO `catics_provincia_intervenida` VALUES (20, 'Peravia', '', 0, 2);
INSERT INTO `catics_provincia_intervenida` VALUES (21, 'Puerto Plata', '', 0, 6);
INSERT INTO `catics_provincia_intervenida` VALUES (22, 'Hnas. Mirabal (Salcedo)', '', 0, 4);
INSERT INTO `catics_provincia_intervenida` VALUES (23, 'Samana', '', 0, 4);
INSERT INTO `catics_provincia_intervenida` VALUES (24, 'Sanchez Ramirez', '', 0, 5);
INSERT INTO `catics_provincia_intervenida` VALUES (25, 'San Cristobal', '', 0, 2);
INSERT INTO `catics_provincia_intervenida` VALUES (26, 'San Jose de Ocoa', '', 0, 2);
INSERT INTO `catics_provincia_intervenida` VALUES (27, 'San Juan de la Maguana', '', 0, 8);
INSERT INTO `catics_provincia_intervenida` VALUES (28, 'San Pedro de Macoriz', '', 0, 3);
INSERT INTO `catics_provincia_intervenida` VALUES (29, 'Santiago', '', 0, 6);
INSERT INTO `catics_provincia_intervenida` VALUES (30, 'Santiago Rodriguez', '', 0, 7);
INSERT INTO `catics_provincia_intervenida` VALUES (31, 'Santo Domingo', '', 0, 1);
INSERT INTO `catics_provincia_intervenida` VALUES (32, 'Valverde', '', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `catics_catalogo`
--

CREATE TABLE `catics_catalogo` (
  `id` int(11) NOT NULL auto_increment,
  `Proyecto` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  `id_Provincia_Intervenida` int(11) NOT NULL,
  `id_Institucion_Patrocina` int(11) NOT NULL,
  `id_Estatus_Implementacion` int(11) NOT NULL,
  `id_Area_Desarrollo` int(11) default NULL,
  `id_Clasificacion_Tipos_EDom` int(11) default NULL,
  `id_Alcance_Sectorial` int(11) default NULL,
  `id_Alcance_Tipo` int(11) default NULL,
  `id_Publico_Blanco` int(11) default NULL,
  `id_ClasificacionEDom` int(11) default NULL,
  `ObjetivosProyecto` text collate latin1_general_ci,
  `FechaInicio` date default NULL,
  `FechaFin` date default NULL,
  `website` varchar(150) collate latin1_general_ci default NULL,
  `eMail` varchar(150) collate latin1_general_ci default NULL,
  `DireccionPostal` text collate latin1_general_ci,
  `ciudad` varchar(150) collate latin1_general_ci default NULL,
  `telefonoprotic` varchar(20) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id`),
  KEY `Proyecto` (`Proyecto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `catics_publico_blanco`
--

CREATE TABLE `catics_publico_blanco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `catics_region_geografica`
--

CREATE TABLE `catics_region_geografica` (
  `id` int(11) NOT NULL auto_increment,
  `region` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `catics_region_geografica`
--

INSERT INTO `catics_region_geografica` VALUES (1, 'Distrito Nacional', 'Santo Domingo ');
INSERT INTO `catics_region_geografica` VALUES (2, 'Valdesia', 'Peravia, San Crist&#243;bal, Monte Plata y San Jos&#233; de Ocoa');
INSERT INTO `catics_region_geografica` VALUES (3, 'Este', 'El Seibo, Altagracia, La Romana, San Pedro de Macor&#237;s y Hato Mayor');
INSERT INTO `catics_region_geografica` VALUES (4, 'Nordeste', 'Duarte, Mar&#237;a Trinidad S&#225;nchez, Hnas. Mirabal (Salcedo) y Saman&#225;');
INSERT INTO `catics_region_geografica` VALUES (5, 'Cibao Central', 'La Vega, S&#225;nchez Ram&#237;rez y Monse&#241;or Nouel');
INSERT INTO `catics_region_geografica` VALUES (6, 'Norcentral', 'Espaillat, Puerto Plata y Santiago');
INSERT INTO `catics_region_geografica` VALUES (7, 'Noroeste', 'Dajab&#243;n, Montecristi, Santiago Rodr&#237;guez y Valverde');
INSERT INTO `catics_region_geografica` VALUES (8, 'del Valle', 'Azua, El&#237;as Pi&#241;a y San Juan');
INSERT INTO `catics_region_geografica` VALUES (9, 'Enriquillo', 'Barahona, Independencia y Pedernales');



-- --------------------------------------------------------

--
-- Table structure for table `catics_tipos_distribucion_areas_edom`
--

CREATE TABLE `catics_tipos_distribucion_areas_edom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) collate latin1_general_ci NOT NULL,
  `descripcion` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `catics_usuarios`
--


CREATE TABLE `catics_usuarios` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`usuario` VARCHAR( 150 ) NOT NULL ,
`password` VARCHAR( 150 ) NOT NULL ,
`nivelacceso` VARCHAR( 150 ) NOT NULL
) ENGINE = MYISAM ;
