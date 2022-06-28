-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2021, 20:29:36
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `studentsystem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` enum('0','1') NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_mail`, `admin_password`, `admin_role`, `lecturer_id`) VALUES
(1, 'admin@ceng.deu.edu.tr', '4297f44b13955235245b2497399d7a93', '0', 0),
(2, 'semih@cs.deu.edu.tr', '4297f44b13955235245b2497399d7a93', '1', 2),
(3, 'fatih.dilmac@ceng.deu.edu.tr', '4297f44b13955235245b2497399d7a93', '1', 4),
(8, 'ali.cuvitoglu@ceng.deu.edu.tr', '4297f44b13955235245b2497399d7a93', '1', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `course`
--

CREATE TABLE `course` (
  `course_number` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `course`
--

INSERT INTO `course` (`course_number`, `course_name`, `credit`, `department_id`) VALUES
('CME1001', 'CALCULUS', 4, 2),
('CME1101', 'PHYSICS', 4, 5),
('CME3201', 'DATABASE MANAGEMENT SYSTEMS', 3, 1),
('CME3205', 'OPERATING SYSTEMS', 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_address`) VALUES
(1, 'Computer Engineering', 'Kuruçeşme, Tınaztepe Kampüsü, 35390 Buca/İzmir'),
(2, 'EEE', 'Kuruçeşme, Tınaztepe Kampüsü, 35390 Buca/İzmir'),
(3, 'Faculty of Medicine', 'Dokuz Eylül Üniversitesi Sağlık Yerleşkesi, 35340 İnciraltı/İzmir'),
(4, 'Faculty of Law', 'Kuruçeşme, Tınaztepe Kampüsü, 35390 Buca/İzmir'),
(5, 'Architecture', 'Kuruçeşme, Tınaztepe Kampüsü, 35390 Buca/İzmir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `lecturer_firstname` varchar(255) NOT NULL,
  `lecturer_lastname` varchar(255) NOT NULL,
  `lecturer_email` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_firstname`, `lecturer_lastname`, `lecturer_email`, `department_id`) VALUES
(1, 'Doç. Dr. Adil', 'ALPKOÇAK', 'alpkocak@cs.deu.edu.tr', 1),
(2, 'Doç. Dr. Semih', 'UTKU', 'semih@cs.deu.edu.tr', 1),
(3, 'Feriştah', 'ÖRÜCÜ DALKILIÇ', 'feristah@cs.deu.edu.tr', 1),
(4, 'Fatih', 'DİLMAÇ', 'fatih.dilmac@ceng.deu.edu.tr', 1),
(5, 'Ali', 'CÜVİTOĞLU', 'ali.cuvitoglu@ceng.deu.edu.tr', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `section`
--

CREATE TABLE `section` (
  `section_id` varchar(255) NOT NULL,
  `course_number` varchar(255) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `section`
--

INSERT INTO `section` (`section_id`, `course_number`, `lecturer_id`, `semester`) VALUES
('CME1001-I', 'CME1001', 3, 1),
('CME1001-II', 'CME1001', 3, 2),
('CME1101-I', 'CME1101', 4, 1),
('CME1101-II', 'CME1101', 5, 2),
('CME3201-I', 'CME3201', 2, 5),
('CME3205-I', 'CME3205', 1, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(80) NOT NULL,
  `student_lastname` varchar(80) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_birthdate` date NOT NULL,
  `student_gender` enum('0','1') NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `student_major` int(11) NOT NULL,
  `student_class` int(11) NOT NULL,
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `students`
--

INSERT INTO `students` (`student_id`, `student_firstname`, `student_lastname`, `student_username`, `student_birthdate`, `student_gender`, `student_email`, `student_phone`, `student_major`, `student_class`, `student_password`) VALUES
(2017510083, 'Vedat', 'ÖZCAN', 'vozcan', '1998-10-25', '0', 'vozcan@gmail.com', '05354660303', 1, 3, 'dc20e68ecbb1d6f6dd8a685fb7012872'),
(2017510085, 'Seçil', 'ÖZTÜRK', 'sturk', '1999-01-01', '1', 'sturk@gmail.com', '555 555 55 55', 1, 3, '998791dfba5808ef2e8b9b89971c53e4'),
(2017510086, 'Şefika', 'ÖZLEM PUL', 'spul', '1999-02-01', '1', 'spul@gmail.com', '555 555 55 55', 2, 3, '4fad0dac0d4cf81e797b6d2d8f577b77'),
(2017510087, 'Zeynep ', 'HİLAL DESTEBAŞI', 'zhdeste', '1998-01-10', '1', 'zhdeste@gmail.com', '555 555 55 55', 3, 3, 'e79f459625e17a090095a1307b4ccb4d'),
(2017510088, 'Alper', 'TEMEL', 'atemel', '1998-06-10', '0', 'atemel@gmail.com', '555 555 55 55', 5, 3, '693ece1b8b0489a5b7c394482f7a6db8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `take_section`
--

CREATE TABLE `take_section` (
  `student_id` int(11) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `absenteeism` int(11) NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `take_section`
--

INSERT INTO `take_section` (`student_id`, `section_id`, `absenteeism`, `grade`) VALUES
(2017510083, 'CME1101-I', 20, 'BB'),
(2017510083, 'CME3205-I', 5, 'CB'),
(2017510085, 'CME3201-I', 8, 'BA'),
(2017510087, 'CME1101-II', 12, 'AB'),
(2017510088, 'CME1001-II', 10, 'AA');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Tablo için indeksler `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_number`),
  ADD KEY `department_id` (`department_id`);

--
-- Tablo için indeksler `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Tablo için indeksler `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Tablo için indeksler `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `lecturer_id` (`lecturer_id`),
  ADD KEY `course_number` (`course_number`);

--
-- Tablo için indeksler `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_major` (`student_major`);

--
-- Tablo için indeksler `take_section`
--
ALTER TABLE `take_section`
  ADD PRIMARY KEY (`student_id`,`section_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017510089;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Tablo kısıtlamaları `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lecturer_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Tablo kısıtlamaları `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`course_number`) REFERENCES `course` (`course_number`);

--
-- Tablo kısıtlamaları `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`student_major`) REFERENCES `department` (`department_id`);

--
-- Tablo kısıtlamaları `take_section`
--
ALTER TABLE `take_section`
  ADD CONSTRAINT `take_section_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `take_section_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
