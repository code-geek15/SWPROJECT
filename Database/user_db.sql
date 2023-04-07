-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 05:17 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(13) NOT NULL,
  `admin_fullName` varchar(50) NOT NULL,
  `admin_surname` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `admin_fullName`, `admin_surname`, `admin_email`, `admin_password`) VALUES
(1, '', 'uggjklk', 'jkkhkl', 'jaulia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, '', 'Flame', 'Rays', 'flameRays@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, '', 'Tank', 'thanks', 'tank@gmail.com', '123'),
(4, '', 'Remedy', 'rain', 'remedy@gmail.com', '123'),
(5, '', 'Senzo', 'Fakude', 'senzo@gmail.com', 'senzo'),
(6, '', 'sphe', 'rays', 'ray@gmil.com', '123'),
(7, '0209156331081', 'Sphelele', 'Fakude', 'flameRays@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
CREATE TABLE IF NOT EXISTS `assessment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userAnswer` text NOT NULL,
  `question` text NOT NULL,
  `correctAnswer` text NOT NULL,
  `outcome` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `userAnswer`, `question`, `correctAnswer`, `outcome`) VALUES
(1, '', 'What is java', 'Java is programming language', ''),
(2, '', 'What mobile computing ?', 'Is a development of android apps.', ''),
(3, '', 'What is the full name for TUT', 'Tshwane University of Technology?', ''),
(4, '', 'What is the course code of software project ?', 'SWP316D', ''),
(5, '', 'What is mysql?', 'MySQL is database', ''),
(6, '', 'What is computer Science ?', 'Headache!', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `staffNum` int NOT NULL,
  `idNum` varchar(13) NOT NULL,
  `lecturerName` varchar(30) NOT NULL,
  `lecturerSurname` varchar(30) NOT NULL,
  `lecturerPassword` varchar(30) NOT NULL,
  `lecturerEmail` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `staffNum`, `idNum`, `lecturerName`, `lecturerSurname`, `lecturerPassword`, `lecturerEmail`) VALUES
(2, 4321, '0214186331081', 'Mabala', 'Nkambule', '123', 'mabala@gmail.com'),
(3, 54312, '9120045432313', 'Mzamo', 'Riot', '123', 'hopesin@gmail.com'),
(4, 986, '0902306331081', 'Junior', 'JB', '123', 'readyAssigned@gmail.com'),
(5, 6464, '0002217545213', 'Themba', 'Nkonyane', '123', 'themba@gmail.com'),
(6, 123456, '0209156331081', 'Flame', 'Rays', '5413', 'flameRays@gmail.com'),
(7, 976976, '7406193456108', 'Eniesta', 'Elles', '1234', 'elles@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `studentNum` int NOT NULL,
  `studID` varchar(13) NOT NULL,
  `studEmail` varchar(30) NOT NULL,
  `studPassword` varchar(30) NOT NULL,
  `studName` varchar(30) NOT NULL,
  `studSurname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentNum`, `studID`, `studEmail`, `studPassword`, `studName`, `studSurname`) VALUES
(10, 221139755, '0209156331081', '221139755@tut4life.ac.za', 'raw\"123', 'Sphelele', 'Fakude'),
(9, 1253, '0107159173551', 'flameRays@gmail.com', '123', 'Wellen', 'VanVyk'),
(12, 1253, '0308096441081', 'lelo@gmail.com', '123', 'Sipho', 'Fakude'),
(13, 221361554, '0100099819726', 'thato@gmail.com', '123', 'Lerato', 'Sieta'),
(14, 221139111, '0203045678412', 'favio@gmail.com', '123', 'Alex', 'Favio'),
(16, 222345132, '9102127443250', 'messi@gmail.com', '1234', 'Leo', 'Messi'),
(17, 221139755, '2209296331081', 'hopesin@gmail.com', 'hope', 'Hope', 'Fakude'),
(18, 221139755, '0209156331081', 'readyAssigned@gmail.com', '123', 'Owen', 'Fakude'),
(20, 123456, '9415156331081', '123@gmail.com', '123', 'Laruna', 'Nkosi'),
(21, 221111, '1218185775180', 'luyanda@gmail.com', '123', 'Luyanda', 'Mabone');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `idNum` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `surname`, `idNum`, `email`, `password`, `user_type`) VALUES
(11, 'Favio', 'Russel', '0308097442312', 'Favio', '617e6d9ad74cbecd9d04', 'student'),
(12, 'Sipho', 'Mashaba', '0908061345234', 'siphoMashaba@tut4life.ac.za', 'b2fdab230a2c39f3595a', 'student'),
(13, 'Unirvesal', 'rainy', '9702146331081', 'Unirvesal', 'b2fdab230a2c39f3595a', 'admin'),
(14, 'Hello', 'rainy', '0403127543208', 'helloWorld@tut4life.ac.za', '827ccb0eea8a706c4c34', 'lecturer'),
(15, 'Neliswa', 'Dlamini', '0002035441323', 'nellyZwane@gmail.com', '00d450d907549b34983b', 'student'),
(16, 'Sphelele', 'Fakude', '0209156331081', '221139755@tut4life.ac.za', '648d653a568788574065', 'admin'),
(17, 'Ennocent', 'Die Far', '9901046551382', 'ennocent32@gmail.com', 'd91f93791be1df2d505e', 'student'),
(18, 'Lapote', 'Msibi', '8602036771285', 'lapoteMsibi@gmail.com', '202cb962ac59075b964b', 'student'),
(19, 'Felicia', 'Dlamini', '9103045432313', 'feliciaDlamin@gmail.com', '02b1be0d48924c327124', 'lecturer'),
(20, 'Dennis', 'Dlamini', '0102034567432', 'dennisD@gmail.com', '5d41402abc4b2a76b971', 'lecturer'),
(21, 'Trio', 'Mabuza', '9704146421081', 'trioMabuza15@gmail.com', 'b2fdab230a2c39f3595a', 'student'),
(22, 'Life', 'Mosegedi', '0009061742378', 'lesediMosegedi43@gmail.com', 'eb25ac9d0c58cf969b61', 'lecturer'),
(23, 'Flame', 'Rays', '0403127432417', 'flameRays@gmail.com', '202cb962ac59075b964b', 'admin'),
(24, 'Hope', 'Fakude', '2209296331081', 'hoopeMySon@gmail.com', '202cb962ac59075b964b', 'student'),
(25, 'west', 'boogie', '9702146331081', 'westSide@gmail.com', '149815eb972b3c370dee', 'student'),
(26, 'Riri', 'Alzeihmer', '0403127543208', 'Riri', '0e04d6cc5c8ea82a161e', 'admin'),
(27, 'North', 'face', '0809106554160', 'northFace@gmail.com', '8d8d1437907bca79900a', 'admin'),
(28, 'Halala', 'Kanye', '0908076543123', 'haha@gmail.com', '6057f13c496ecf7fd777', 'student'),
(29, 'reo', 'rally', '8602036771285', 'rorally@gmail.com', '202cb962ac59075b964b', 'student'),
(30, 'Swidish', 'Mavericks', '9901046551382', 'rorally@gmail.com', '81dc9bdb52d04dc20036', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
