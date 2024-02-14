-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 08:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `imgs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `imgs`) VALUES
(1, 'MD Abidur Rahman test', 'abid1@gmail.com', '123', '368255587_1713428495775562_83979 343.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `passposrt_users_info`
--

CREATE TABLE `passposrt_users_info` (
  `id` int(11) NOT NULL,
  `submit_date` varchar(50) NOT NULL,
  `aplication_date` varchar(40) NOT NULL,
  `passport_number` varchar(200) NOT NULL,
  `request_number` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `name_of_owner` varchar(200) NOT NULL,
  `consulate` varchar(200) NOT NULL,
  `days_stay` varchar(100) NOT NULL,
  `type_of_procedure` varchar(500) NOT NULL,
  `validity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passposrt_users_info`
--

INSERT INTO `passposrt_users_info` (`id`, `submit_date`, `aplication_date`, `passport_number`, `request_number`, `country`, `name_of_owner`, `consulate`, `days_stay`, `type_of_procedure`, `validity`) VALUES
(42, '2024-02-07', '2024-02-09', '1', '2', 'Austria', 'Abid', '4consulate', 'days_stay', 'type_of_procedure', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `website_languages`
--

CREATE TABLE `website_languages` (
  `id` int(11) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `website_title` varchar(100) NOT NULL,
  `header_1_text` varchar(100) NOT NULL,
  `nav_item_1` varchar(100) NOT NULL,
  `home_form_head_text` varchar(100) NOT NULL,
  `home_form_input_lable_1` varchar(100) NOT NULL,
  `home_form_input_lable_2` varchar(100) NOT NULL,
  `home_form_input_lable_3` varchar(100) NOT NULL,
  `home_form_input_lable_4` text NOT NULL,
  `home_form_submit_btn_search` varchar(100) NOT NULL,
  `Out_put_field_1` varchar(50) NOT NULL,
  `Out_put_field_2` varchar(50) NOT NULL,
  `Out_put_field_3` varchar(50) NOT NULL,
  `Out_put_field_4` varchar(50) NOT NULL,
  `Out_put_field_5` varchar(50) NOT NULL,
  `Out_put_field_6` varchar(50) NOT NULL,
  `Out_put_field_7` varchar(200) NOT NULL,
  `Out_put_field_8` varchar(100) NOT NULL,
  `Out_put_field_9` varchar(100) NOT NULL,
  `footer_p_1` varchar(100) NOT NULL,
  `footer_p_2` varchar(100) NOT NULL,
  `footer_p_3` varchar(100) NOT NULL,
  `footer_p_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_languages`
--

INSERT INTO `website_languages` (`id`, `languages`, `website_title`, `header_1_text`, `nav_item_1`, `home_form_head_text`, `home_form_input_lable_1`, `home_form_input_lable_2`, `home_form_input_lable_3`, `home_form_input_lable_4`, `home_form_submit_btn_search`, `Out_put_field_1`, `Out_put_field_2`, `Out_put_field_3`, `Out_put_field_4`, `Out_put_field_5`, `Out_put_field_6`, `Out_put_field_7`, `Out_put_field_8`, `Out_put_field_9`, `footer_p_1`, `footer_p_2`, `footer_p_3`, `footer_p_4`) VALUES
(1, 'spanish ', 'Validación Electrónica de Visa', '<span style=\"color: red;\">Electrónica</span> Visa <span>Validación</span>', 'Verificación en línea', 'Consultar Visa Electrónica', 'Número de pasaporte', 'número de solicitud', 'Nacionalidad país', 'Introduce el código de 5 caracteres que aparece en la casilla', 'Buscar', 'Documento', 'Número de pasaporte', 'número de solicitud', 'País', 'Fecha de aplicacion', 'Consulado', 'Nombre', 'Días Estancia', 'Tipo de Procedimiento', 'Ministerio de Relaciones Exteriores / Gobierno de Chile', 'Oficina de Servicio Público', 'Dirección: Agustinas 1320, Santiago, Chile.', 'Horario: Lunes a viernes de 9:00 a 13:00 horas.'),
(2, 'english', 'Electronic Visa Validation', '<span style=\"color: red;\">Electronic</span> Visa <span>Validation</span>', 'Online verification', 'Consult Electronic Visa', 'Passport number', 'Request Number', 'Country Nationality', 'Enter the 5-character code that appears blow the box', 'Search', 'Document', 'Passport Number', 'Request Number', 'Country ', 'Application Date', 'Consulate', 'Name', 'Days Stay', 'Type of Procedure', 'Ministry of Foreign Affairs / Government of Chile', 'Public Service Office', 'Address: Agustinas 1320, Santiago, Chile.', 'Hours: Monday to Friday from 9:00 a.m. to 1:00 p.m.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passposrt_users_info`
--
ALTER TABLE `passposrt_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_languages`
--
ALTER TABLE `website_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passposrt_users_info`
--
ALTER TABLE `passposrt_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `website_languages`
--
ALTER TABLE `website_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
