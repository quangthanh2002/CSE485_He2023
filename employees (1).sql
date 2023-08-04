-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Name` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Name`, `Address`, `Salary`) VALUES
('Jdavie Gabriely', '69489 Eastwood Terrace', 89),
('Aurie Went', '2 Blue Bill Park Plaza', 54),
('Carlotta Traves', '254 Ludington Road', 60),
('Jedediah Demkowicz', '43 Bayside Terrace', 1),
('Idell Winters', '5 Bartelt Parkway', 53),
('Rhona Tidy', '80402 Glendale Alley', 17),
('Vladimir Dunseith', '31 Kennedy Hill', 20),
('Idell Rubie', '615 Moland Pass', 33),
('Kayle Mannakee', '63324 Clove Lane', 25),
('Bradford Bracknell', '2516 Holy Cross Crossing', 35),
('Danya Henric', '1288 Waywood Court', 52),
('Temple Henriksson', '44 Ludington Pass', 32),
('Blancha Karpinski', '407 Novick Terrace', 32),
('Mariska Skate', '9428 Anhalt Terrace', 89),
('Sayer Lethbridge', '012 Bultman Circle', 31),
('Joell Klampk', '97 Elmside Circle', 75),
('Ilario Edmondson', '042 Hayes Road', 18),
('Star Lawson', '433 Maple Wood Junction', 1),
('Darn Rafe', '81 Wayridge Street', 50),
('Garrard Teenan', '1623 Emmet Way', 71),
('Daron Mullany', '6 Lindbergh Terrace', 46),
('Tuck Portman', '1417 Village Green Drive', 59),
('Marja Roast', '92 Sutherland Center', 92),
('Minetta Colbeck', '99789 Fieldstone Alley', 54),
('Janis Bonefant', '82 Michigan Junction', 48),
('Donovan Pinock', '809 Lunder Parkway', 32),
('Chevy Tradewell', '50723 Red Cloud Center', 6),
('Yelena Ahlf', '33 Hanover Street', 16),
('Carleen Dottridge', '72 Atwood Hill', 15),
('Dahlia Stear', '90858 Kropf Street', 29),
('Ted Worden', '2 Briar Crest Court', 36),
('Josy Espinoy', '4515 Green Road', 33),
('Whittaker Robb', '87861 Dorton Trail', 94),
('Morena Brewers', '3 Ridgeway Circle', 18),
('Sibyl Clem', '44 Thierer Center', 76),
('Talbot Lydiard', '7555 Hazelcrest Park', 1),
('Dorri Braikenridge', '13707 Garrison Pass', 32),
('Isidora Domerq', '607 Cascade Alley', 51),
('Morse Offener', '4 Di Loreto Point', 29),
('Allina Blamphin', '33390 Memorial Pass', 40),
('Devinne Doale', '325 Forest Dale Crossing', 35),
('Anthea Muehle', '68180 4th Court', 52),
('Flss Mellenby', '487 Fulton Court', 22),
('Prentiss Cathee', '9 Welch Way', 76),
('Nathalie Stoneley', '61 Marcy Trail', 67),
('Mary Tungate', '52 Myrtle Avenue', 77),
('Abigale Talman', '23861 Grasskamp Crossing', 70),
('Janela Swepstone', '6681 Buell Street', 12),
('Meg de Copeman', '17388 Raven Point', 92),
('Issy Matuszak', '232 Holy Cross Trail', 35);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
