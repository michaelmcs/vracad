-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2023 a las 21:36:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vracaduna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`area_id`, `nombre`) VALUES
(1, 'ESTUDIOS DE ESPECIALIDAD'),
(2, 'ESTUDIOS GENERALES'),
(3, 'ESTUDIOS ESPECIFICOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cys`
--

CREATE TABLE `cys` (
  `cys_id` int(11) NOT NULL,
  `cys` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cys`
--

INSERT INTO `cys` (`cys_id`, `cys`) VALUES
(1, 'I'),
(3, 'III'),
(2, 'II'),
(4, 'IV'),
(5, 'V'),
(6, 'VI'),
(7, 'VII'),
(8, 'VIII'),
(9, 'IX'),
(10, 'X'),
(11, 'XI'),
(12, 'XII'),
(13, 'XIII'),
(14, 'XIV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(11) NOT NULL,
  `dept_code` varchar(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_code`, `dept_name`) VALUES
(9, 'P37', 'INGENIERIA TOPOGRAFICA Y AGRIMINSURA'),
(12, 'P25', 'INGENIERIA AGROINDUSTRIAL'),
(11, 'P26', 'INGENIERIA AGRINOMICA'),
(13, 'P39', 'MEDICINA VETERINARIA Y ZOOTECNIA'),
(14, 'P30', 'INGENIERIA ECONOMICA'),
(15, 'P11', 'CIENCIAS CONTABLES'),
(53, 'P01', 'ADMINISTRACION'),
(17, 'P23', 'ENFERMERIA'),
(18, 'P43', 'TRABAJO SOCIAL'),
(19, 'P28', 'INGENIERIA DE MINAS'),
(20, 'P42', 'SOCIOLOGIA'),
(21, 'P12', 'CIENCIAS DE LA COMUNICACION SOCIAL'),
(22, 'P02', 'ANTROPOLOGIA'),
(23, 'P44', 'TURISMO'),
(24, 'P04', 'ARTE: ARTES PLASTICAS'),
(25, 'P05', 'ARTE: DANZA'),
(26, 'P06', 'ARTE: MUSICA'),
(27, 'P07', 'ARTE: TEATRO'),
(28, 'P08', 'BIOLOGÍA: PESQUERÍA'),
(29, 'P09', 'BIOLOGÍA: MICROBIOLOGÍA Y LABORATORIO CLÍNICO'),
(30, 'P10', 'BIOLOGÍA: ECOLOGÍA'),
(31, 'P19', 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIAS SOCIALES'),
(32, 'P20', 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIA, TECNOLOGIÁ Y AMBIENTE'),
(33, 'P21', 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE MATEMÁTICA, FISICA, COMPUTACIÓN E INFORMÁTICA'),
(34, 'P16', 'EDUCACIÓN FÍSICA'),
(35, 'P18', 'EDUCACIÓN PRIMARIA'),
(36, 'P17', 'EDUCACIÓN INICIAL'),
(37, 'P32', 'INGENIERÍA ESTADÍSTICA E INFORMÁTICA'),
(38, 'P15', 'DERECHO'),
(39, 'P36', 'INGENIERÍA QUÍMICA'),
(40, 'P40', 'NUTRICIÓN HUMANA'),
(41, 'P41', 'ODONTOLOGÍA'),
(42, 'P33', 'INGENIERÍA GEOLÓGIA'),
(43, 'P35', 'INGENIERÍA METALÚRGICA'),
(44, 'P27', 'INGENIERÍA CIVIL'),
(45, 'P03', 'ARQUITECTURA Y URBANISMO'),
(46, 'P13', 'CIENCIAS FÍSICO MATEMATICAS: FÍSICA'),
(47, 'P14', 'CIENCIAS FÍSICO MATEMATICAS: MATEMATICAS'),
(48, 'P24', 'INGENIERÍA AGRÍCOLA'),
(49, 'P38', 'MEDICINA HUMANA'),
(50, 'P34', 'INGENIERÍA MECÁCANICA ELECTRICA'),
(51, 'P31', 'INGENIERÍA ELECTRÓNICA'),
(52, 'P29', 'INGENIERÍA DE SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`) VALUES
(12, 'INGENIERIA AGROINDUSTRIAL'),
(9, 'INGENIERIA TOPOGRAFICA Y AGRIMINSURA'),
(11, 'INGENIERIA AGRINOMICA'),
(13, 'MEDICINA VETERINARIA Y ZOOTECNIA'),
(14, 'INGENIERIA ECONOMICA'),
(15, 'CIENCIAS CONTABLES'),
(16, 'ADMINISTRACION'),
(17, 'ENFERMERIA'),
(18, 'TRABAJO SOCIAL'),
(19, 'INGENIERIA DE MINAS'),
(20, 'SOCIOLOGIA'),
(21, 'CIENCIAS DE LA COMUNICACION SOCIAL'),
(22, 'ANTROPOLOGIA'),
(23, 'TURISMO'),
(24, 'ARTE: ARTES PLASTICAS'),
(25, 'ARTE: DANZA'),
(26, 'ARTE: MUSICA'),
(27, 'ARTE: TEATRO'),
(28, 'BIOLOGÍA: PESQUERÍA'),
(29, 'BIOLOGÍA: MICROBIOLOGÍA Y LABORATORIO CLÍNICO'),
(30, 'BIOLOGÍA: ECOLOGÍA'),
(31, 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIAS SOCIALES'),
(32, 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE CIENCIA, TECNOLOGIÁ Y AMBIENTE'),
(33, 'EDUCACIÓN SECUNDARIA DE LA ESPECIALIDAD DE MATEMÁTICA, FISICA, COMPUTACIÓN E INFORMÁTICA'),
(34, 'EDUCACIÓN FÍSICA'),
(35, 'EDUCACIÓN PRIMARIA'),
(36, 'EDUCACIÓN INICIAL'),
(37, 'INGENIERÍA ESTADÍSTICA E INFORMÁTICA'),
(38, 'DERECHO'),
(39, 'INGENIERÍA QUÍMICA'),
(40, 'NUTRICIÓN HUMANA'),
(41, 'ODONTOLOGÍA'),
(42, 'INGENIERÍA GEOLÓGIA'),
(43, 'INGENIERÍA METALÚRGICA'),
(44, 'INGENIERÍA CIVIL'),
(45, 'ARQUITECTURA Y URBANISMO'),
(46, 'CIENCIAS FÍSICO MATEMATICAS: FÍSICA'),
(47, 'CIENCIAS FÍSICO MATEMATICAS: MATEMATICAS'),
(48, 'INGENIERÍA AGRÍCOLA'),
(49, 'MEDICINA HUMANA'),
(50, 'INGENIERÍA MECÁCANICA ELECTRICA'),
(51, 'INGENIERÍA ELECTRÓNICA'),
(52, 'INGENIERÍA DE SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam_sched`
--

CREATE TABLE `exam_sched` (
  `sched_id` int(11) NOT NULL,
  `time_id` int(1) NOT NULL,
  `day` varchar(50) NOT NULL,
  `member_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `cys` varchar(15) NOT NULL,
  `room` varchar(15) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `settings_id` int(11) NOT NULL,
  `cys1` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `encoded_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `sec_id` int(11) NOT NULL,
  `sec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`sec_id`, `sec`) VALUES
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_last` varchar(30) NOT NULL,
  `member_first` varchar(30) NOT NULL,
  `member_rank` varchar(50) NOT NULL,
  `member_salut` varchar(30) NOT NULL,
  `dept_name` varchar(10) NOT NULL,
  `designation_id` varchar(50) NOT NULL,
  `prog_code_add` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `member`
--

INSERT INTO `member` (`member_id`, `member_last`, `member_first`, `member_rank`, `member_salut`, `dept_name`, `designation_id`, `prog_code_add`) VALUES
(195, 'FLORES VELASQUEZ', 'EDELFRE', 'NOMBRADO PRINCIPAL', 'PLANTA', 'P29', '', '28'),
(196, 'SOSA MAIDANA', 'CARLOS BORIS', 'NOMBRADO PRINCIPAL', 'PLANTA', 'P29', '', '28'),
(197, 'ARCAYA COAQUIRA', 'WILLIAM EUCEVIO', 'NOMBRADO PRINCIPAL', 'PLANTA', 'P29', '', '28'),
(198, 'CONDORI ALEJO', 'HENRY IVAN', 'NOMBRADO PRINCIPAL', 'PLANTA', 'P29', '', '28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_e`
--

CREATE TABLE `plan_e` (
  `plan_id` int(11) NOT NULL,
  `name_plan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plan_e`
--

INSERT INTO `plan_e` (`plan_id`, `name_plan`) VALUES
(1, 'Plan 6'),
(2, 'Plan 7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `program`
--

CREATE TABLE `program` (
  `prog_id` int(11) NOT NULL,
  `prog_code` varchar(10) NOT NULL,
  `prog_title` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `program`
--

INSERT INTO `program` (`prog_id`, `prog_code`, `prog_title`, `username`, `password`, `status`) VALUES
(17, 'P17', 'EDUCACION INICIAL', 'EDUCACION INICIAL', '1234', 'user'),
(16, 'P16', 'EDUCACION FISICA', 'EDUCACION FISICA', '1234', 'user'),
(15, 'P15', 'DERECHO', 'DERECHO', '1234', 'user'),
(14, 'P14', 'CIENCIAS FISICO MATEMATICAS: MATEMATICAS', 'CIENCIAS MATEMATICAS', '1234', 'user'),
(13, 'P13', 'CIENCIAS FISICO MATEMATICAS: FISICA', 'CIENCIAS FISICO', '1234', 'user'),
(12, 'P12', 'CIENCIAS DE LA COMUNICACION SOCIAL', 'CIENCIAS DE LA COMUNICACION SOCIAL', '1234', 'user'),
(11, 'P11', 'CIENCIAS CONTABLES', 'CONTABLES', '1234', 'user'),
(10, 'P10', 'BIOLOGIA: ECOLOGIA', 'ECOLOGIA', '1234', 'user'),
(9, 'P09', 'BIOLOGIA: MICROBIOLOGIA Y LABORATORIO CLINICCO', 'MICROBIOLOGIA Y LABORATORIO CLINICCO', '1234', 'user'),
(8, 'P08', 'BIOLOGIA: PESQUERIA', 'PESQUERIA', '1234', 'user'),
(7, 'P07', 'ARTE: TEATRO', 'TEATRO', '1234', 'user'),
(5, 'P05', 'ARTE: DANZA', 'DANZA', '1234', 'user'),
(6, 'P06', 'ARTE: MUSICA', 'MUSICA', '1234', 'user'),
(4, 'P04', 'ARTE: ARTES PLASTICAS', 'ARTES PLASTICAS', '1234', 'user'),
(3, 'P03', 'ARQUITECTURA Y URBANISMO', 'ARQUITECTURA Y URBANISMO', '1234', 'user'),
(2, 'P02', 'ANTROPOLOGIA', 'ANTROPOLOGIA', '1234', 'user'),
(1, 'P01', 'ADMINISTRACION', 'ADMINISTRACION', '1234', 'user'),
(18, 'P18', 'EDUCACION PRIMARIA', 'EDUCACION PRIMARIA', '1234', 'user'),
(19, 'P19', 'EDUCACION SESECUNDARIA DE LA ESPECIALIDAD DE CIENCIAS SOCIALES', 'EDUCACION CIENCIAS SOCIALES', '1234', 'user'),
(20, 'P20', 'EDUCACION SECUNDARIA DE LA ESPECIALIDAD DE CIENCIA, TECNOLOGIA Y AMBIENTE', 'TECNOLOGIA Y AMBIENTE', '1234', 'user'),
(21, 'P21', 'EDUCACION SECUNDARIA DE LA ESPECIALIDAD DE DE MATEMATICA, FISICA, COMPUTACION E INFORMATICA', 'MATEMATICA FISICA', '1234', 'user'),
(22, 'P23', 'ENFERMERIA', 'ENFERMERIA', '1234', 'user'),
(23, 'P24', 'INGENIERRIA AGRICOLA', 'INGENIERRIA AGRICOLA', '1234', 'user'),
(24, 'P25', 'INGENIERIA AGROINDUSTRIAL', 'INGENIERIA AGROINDUSTRIAL', '1234', 'user'),
(25, 'P26', 'INGENIERIA AGRINOMICA', 'INGENIERIA AGRINOMICA', '1234', 'user'),
(26, 'P27', 'INGENIERRIA CIVIL', 'INGENIERRIA CIVIL', '1234', 'user'),
(27, 'P28', 'INGENIERIA DE MINAS', 'INGENIERIA DE MINAS', '1234', 'user'),
(28, 'P29', 'INGENIERRIA DE SISTEMAS', 'INGENIERRIA DE SISTEMAS', '1234', 'user'),
(29, 'P30', 'INGENIERIA ECONOMICA', 'INGENIERIA ECONOMICA', '1234', 'user'),
(30, 'P31', 'INGENIERIA ELECTRONICA', 'INGENIERIA ELECTRONICA', '1234', 'user'),
(31, 'P32', 'INGENIERIA ESTADISTICA E INFORMATICA', 'INGENIERIA ESTADISTICA E INFORMATICA', '1234', 'user'),
(32, 'P33', 'INGENIERIA GEOLOGIA', 'INGENIERIA GEOLOGIA', '1234', 'user'),
(33, 'P34', 'INGENIERIA MECANICA ELECTRICA', 'INGENIERIA MECANICA ELECTRICA', '1234', 'user'),
(34, 'P35', 'INGENIERIA METALURGICA', 'INGENIERIA METALURGICA', '1234', 'user'),
(35, 'P36', 'INGENIERIA QUIMICA', 'INGENIERIA QUIMICA', '1234', 'user'),
(36, 'P37', 'INGENIERIA TOPOGRAFICA Y AGRIMINSURA', 'INGENIERIA TOPOGRAFICA Y AGRIMINSURA', '1234', 'user'),
(37, 'P38', 'MEDICINA HUMANA', 'MEDICINA HUMANA', '1234', 'user'),
(38, 'P39', 'MEDICINA VETERINARIA Y ZOOTECNIA', 'MEDICINA VETERINARIA Y ZOOTECNIA', '1234', 'user'),
(39, 'P40', 'NUTRICION HUMANA', 'NUTRICION HUMANA', '1234', 'user'),
(40, 'P41', 'ODONTOLOGIA', 'ODONTOLOGIA', '1234', 'user'),
(41, 'P42', 'SOCIOLOGIA', 'SOCIOLOGIA', '1234', 'user'),
(42, 'P43', 'TRABAJO SOCIAL', 'TRABAJO SOCIAL', '1234', 'user'),
(43, 'P44', 'TURISMO', 'TURISMO', '1234', 'user'),
(44, 'adm', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL,
  `rank` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rank`
--

INSERT INTO `rank` (`rank_id`, `rank`) VALUES
(1, 'NOMBRADO ASOCIADO'),
(2, 'NOMBRADO PRINCIPAL'),
(3, 'NOMBRADO AUXILIAR'),
(4, 'CONTRATADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room` varchar(15) NOT NULL,
  `prog_code` varchar(50) NOT NULL,
  `prog_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`room_id`, `room`, `prog_code`, `prog_id`) VALUES
(39, '110', '43', 43),
(38, '105', '43', 43),
(37, '108', '28', 28),
(36, '105', '28', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salut`
--

CREATE TABLE `salut` (
  `salut_id` int(11) NOT NULL,
  `salut` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salut`
--

INSERT INTO `salut` (`salut_id`, `salut`) VALUES
(1, 'PLANTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule`
--

CREATE TABLE `schedule` (
  `sched_id` int(11) NOT NULL,
  `time_id` int(1) NOT NULL,
  `day` varchar(50) NOT NULL,
  `member_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `cys` varchar(15) NOT NULL,
  `room` varchar(15) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `settings_id` int(11) NOT NULL,
  `encoded_by` varchar(10) NOT NULL,
  `alum` int(11) NOT NULL,
  `hteo` int(11) NOT NULL,
  `hprac` int(11) NOT NULL,
  `th` int(11) NOT NULL,
  `cr` int(11) NOT NULL,
  `sec` varchar(50) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `prog_code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `term` varchar(10) NOT NULL,
  `sem` varchar(15) NOT NULL,
  `sy` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`settings_id`, `term`, `sem`, `sy`, `status`) VALUES
(1, '', '1ro', '2023', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signatories`
--

CREATE TABLE `signatories` (
  `sign_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `seq` int(2) NOT NULL,
  `set_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `name_plan` varchar(10) NOT NULL,
  `tipo_cur` varchar(50) NOT NULL,
  `prog_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `nombre`, `name_plan`, `tipo_cur`, `prog_id`) VALUES
(31, 'SIS410', 'SEMINARIO DE TESIS', 'ESTUDIOS ESPECIFICOS', 'Plan 7', 'OBLIGATORIO', 28),
(30, 'SIS227', 'TOPICOS AVANZADOS INTELIGENCIA COMPUTACIONAL', 'ESTUDIOS ESPECIFICOS', 'Plan 7', 'OBLIGATORIO', 28),
(29, 'SIS305', 'FUNDAMENTOS DE BASE DE DATOS', 'ESTUDIOS DE ESPECIALIDAD', 'Plan 7', 'OBLIGATORIO', 28),
(28, 'SIS303', 'BASE DE DATOS 1', 'ESTUDIOS DE ESPECIALIDAD', 'Plan 7', 'OBLIGATORIO', 28),
(27, 'HUM111', 'DESAROLLO DE CAPACIDADES TIC', 'ESTUDIOS GENERALES', 'Plan 7', 'OBLIGATORIO', 28),
(32, 'SIS206', 'PROGRAMACION ORIENTADOS A OBJETOS 2', 'ESTUDIOS DE ESPECIALIDAD', 'Plan 7', 'OBLIGATORIO', 28),
(33, 'SIS307', 'GESTION DE BASE DE DATOS', 'ESTUDIOS ESPECIFICOS', 'Plan 7', 'OBLIGATORIO', 28),
(34, 'SIS202', 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 'ESTUDIOS ESPECIFICOS', 'Plan 7', 'OBLIGATORIO', 28),
(35, 'SIS408', 'PROYECTO DE TESIS', 'ESTUDIOS ESPECIFICOS', 'Plan 7', 'OBLIGATORIO', 28),
(36, 'TR-01', 'VIAJES', 'ESTUDIOS DE ESPECIALIDAD', 'Plan 6', 'OBLIGATORIO', 43),
(37, 'TR-12', 'COMERCIO', 'ESTUDIOS DE ESPECIALIDAD', 'Plan 7', 'OBLIGATORIO', 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(1, '2022'),
(2, '2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `days` varchar(15) NOT NULL,
  `turno` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `time`
--

INSERT INTO `time` (`time_id`, `time_start`, `time_end`, `days`, `turno`) VALUES
(1, '07:00:00', '08:00:00', 'mwfjv', 'M'),
(2, '08:00:00', '09:00:00', 'mwfjv', 'M'),
(3, '09:00:00', '10:00:00', 'mwfjv', 'M'),
(4, '10:00:00', '11:00:00', 'mwfjv', 'M'),
(5, '11:00:00', '12:00:00', 'mwfjv', 'M'),
(6, '12:00:00', '13:00:00', 'mwfjv', 'M'),
(7, '13:00:00', '14:00:00', 'mwfjv', 'T'),
(8, '14:00:00', '15:00:00', 'mwfjv', 'T'),
(9, '15:00:00', '16:00:00', 'mwfjv', 'T'),
(10, '16:00:00', '17:00:00', 'mwfjv', 'T'),
(11, '17:00:00', '18:00:00', 'mwfjv', 'T'),
(12, '18:00:00', '19:00:00', 'mwfjv', 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_curso`
--

CREATE TABLE `tipo_curso` (
  `tipo_id` int(11) NOT NULL,
  `tipo_cur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_curso`
--

INSERT INTO `tipo_curso` (`tipo_id`, `tipo_cur`) VALUES
(1, 'OBLIGATORIO'),
(2, 'ELECTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `turno_id` int(11) DEFAULT NULL,
  `turno_name` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='turnos de tarde y noche';

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`turno_id`, `turno_name`) VALUES
(1, 'M'),
(2, 'T');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `program` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `status`, `program`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'active', 'all');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indices de la tabla `cys`
--
ALTER TABLE `cys`
  ADD PRIMARY KEY (`cys_id`),
  ADD UNIQUE KEY `cys` (`cys`);

--
-- Indices de la tabla `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indices de la tabla `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indices de la tabla `exam_sched`
--
ALTER TABLE `exam_sched`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indices de la tabla `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indices de la tabla `plan_e`
--
ALTER TABLE `plan_e`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indices de la tabla `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indices de la tabla `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indices de la tabla `salut`
--
ALTER TABLE `salut`
  ADD PRIMARY KEY (`salut_id`);

--
-- Indices de la tabla `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indices de la tabla `signatories`
--
ALTER TABLE `signatories`
  ADD PRIMARY KEY (`sign_id`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indices de la tabla `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indices de la tabla `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indices de la tabla `tipo_curso`
--
ALTER TABLE `tipo_curso`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cys`
--
ALTER TABLE `cys`
  MODIFY `cys_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `exam_sched`
--
ALTER TABLE `exam_sched`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT de la tabla `plan_e`
--
ALTER TABLE `plan_e`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `program`
--
ALTER TABLE `program`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `salut`
--
ALTER TABLE `salut`
  MODIFY `salut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `signatories`
--
ALTER TABLE `signatories`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `tipo_curso`
--
ALTER TABLE `tipo_curso`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
