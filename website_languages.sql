-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 09:29 PM
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
  `footer_p_1` varchar(100) NOT NULL,
  `footer_p_2` varchar(100) NOT NULL,
  `footer_p_3` varchar(100) NOT NULL,
  `footer_p_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_languages`
--

INSERT INTO `website_languages` (`id`, `languages`, `website_title`, `header_1_text`, `nav_item_1`, `home_form_head_text`, `home_form_input_lable_1`, `home_form_input_lable_2`, `home_form_input_lable_3`, `home_form_input_lable_4`, `home_form_submit_btn_search`, `Out_put_field_1`, `Out_put_field_2`, `Out_put_field_3`, `Out_put_field_4`, `Out_put_field_5`, `Out_put_field_6`, `footer_p_1`, `footer_p_2`, `footer_p_3`, `footer_p_4`) VALUES
(1, 'spanish ', 'Validación Electrónica de Visa', '<span style=\"color: red;\">Electrónica</span> Visa <span>Validación</span>', 'Verificación en línea', 'Consultar Visa Electrónica', 'Número de pasaporte', 'número de solicitud', 'Nacionalidad país', 'Introduce el código de 5 caracteres que aparece en la casilla', 'Buscar', 'Nombre de usuario', 'Número de pasaporte', 'número de solicitud', 'Nacionalidad país', 'Número de teléfono', 'Correo electrónico', 'Ministerio de Relaciones Exteriores / Gobierno de Chile', 'Oficina de Servicio Público', 'Dirección: Agustinas 1320, Santiago, Chile.', 'Horario: Lunes a viernes de 9:00 a 13:00 horas.'),
(2, 'english', 'Electronic Visa Validation', '<span style=\"color: red;\">Electronic</span> Visa <span>Validation</span>', 'Online verification', 'Consult Electronic Visa', 'Passport number', 'Request Number', 'Country Nationality', 'Enter the 5-character code that appears blow the box', 'Search', 'User Name', 'Passport Number', 'Request Number', 'Country Nationality', 'Phone Number', 'Email', 'Ministry of Foreign Affairs / Government of Chile', 'Public Service Office', 'Address: Agustinas 1320, Santiago, Chile.', 'Hours: Monday to Friday from 9:00 a.m. to 1:00 p.m.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website_languages`
--
ALTER TABLE `website_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website_languages`
--
ALTER TABLE `website_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
