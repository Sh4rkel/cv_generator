-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 02:42 AM
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
-- Database: `cv_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'aedaed', 'eadwed234d'),
(2, 'aedaedwc423f', 'wxceacec'),
(3, 'awdawd32d32', '32d23d23d23d23d23d'),
(4, 'NatureFanatic92', 'Flora#456'),
(5, 'StarGazer91', 'Moonlight!23'),
(6, 'TechGuru88', 'Silicon#789'),
(7, 'EpicGamer47', 'Victory@321'),
(8, 'BookWorm22', 'Library*456'),
(9, 'SkyWalker65', 'Jedi!Knight'),
(10, 'CoffeeAddict09', 'Espresso#678'),
(11, 'NatureLover53', 'Forest@999'),
(12, 'FitnessFan24', 'GymLife#123'),
(13, 'MovieBuff33', 'Cinema!Magic'),
(14, 'MusicMaestro99', 'Symphony#567'),
(15, 'ArtLover17', 'Gallery*Art'),
(16, 'FoodieFiend89', 'Gourmet!333'),
(17, 'TravelBug44', 'Adventure#888'),
(18, 'SportsFanatic66', 'Champion*987'),
(19, 'CodeMaster11', 'Python!Code'),
(20, 'ScienceGeek21', 'Quantum#456'),
(21, 'HistoryBuff42', 'Ancient*123'),
(22, 'Fashionista27', 'Trendy#789'),
(23, 'PetLover39', 'Furry@Pets'),
(24, 'AdventureSeeker5', 'Thrill#456'),
(25, 'admin', 'admin'),
(26, 'GamerGirl23', 'Console*789'),
(27, 'FitnessFreak37', 'Workout!321'),
(28, 'MovieManiac12', 'Film#Magic'),
(29, 'MusicFreak19', 'Melody*678'),
(30, 'FoodLover93', 'Culinary#123'),
(31, 'ArtFanatic41', 'Canvas!Art'),
(32, 'TravelJunkie30', 'Journey!456'),
(33, 'SportsJunkie54', 'Score@789'),
(34, 'TechEnthusiast10', 'Innovate#123'),
(35, 'SciFiFanatic28', 'Galaxy@789'),
(36, 'NatureExplorer91', 'Wilderness!456'),
(37, 'dawdawd', 'wadawdawd'),
(38, 'awdawd', 'awdawdawd'),
(41, 'awdawdawd', 'awdawdawdadw'),
(42, 'awdawda', 'wdawdawd'),
(43, 'awdawdaw', 'awdawdawdawd'),
(44, 'wadawd', 'awdbb444444'),
(46, 'dawdawdawdawdawd', 'awdawda3da3dad23d3d23'),
(47, 'bvnvbnvbnvbnvbn', '43r43c43rc43c'),
(48, 'wdawdawdawdawdaw', '23d23xe32edx23'),
(49, 'dawdawdawdawd32d24234', '23d2d2342d34f34'),
(50, 'dawdawdkkkk', '7g7g767gf67f7f7df75d7uy'),
(51, 'rfsf', 'sefseff33'),
(52, '23d23d32d23d', '23d23wd43wd3w4df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
