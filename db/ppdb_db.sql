-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 12:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_status`
--

CREATE TABLE `registration_status` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_status`
--

INSERT INTO `registration_status` (`id`, `student_id`, `admin_id`, `status`) VALUES
(2, 5, NULL, 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nik_id` int(11) NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `birth_certificate` int(11) NOT NULL,
  `family_card` varchar(255) NOT NULL,
  `certificate_degree` varchar(255) NOT NULL,
  `certificate_exam_results` varchar(255) NOT NULL,
  `school_origin` varchar(100) NOT NULL,
  `nis` int(50) NOT NULL,
  `nem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `user_id`, `nik_id`, `birth_place`, `birth_date`, `citizenship`, `birth_certificate`, `family_card`, `certificate_degree`, `certificate_exam_results`, `school_origin`, `nis`, `nem`) VALUES
(5, 4, 2147483647, 'Pemalang', '2001-05-31', 'Indonesia', 9072, '091fe25cda6b8228215bcac9f71c7baa.png', '7a59ddbfc9a2d2f2f49413e0813ade2e.jpeg', '7c2bf30b99d5148dd99b9824f88e7f13.jpeg', 'SMP N 01 Ulujami', 2147483647, 86);

-- --------------------------------------------------------

--
-- Table structure for table `student_guardian`
--

CREATE TABLE `student_guardian` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `relationship_as` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `job` varchar(100) NOT NULL,
  `last_education` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_guardian`
--

INSERT INTO `student_guardian` (`id`, `student_id`, `guardian_name`, `relationship_as`, `address`, `phone`, `job`, `last_education`) VALUES
(3, 5, 'Oong', 'father', 'Jakarta', '0897937429', 'Direktur', 'S4'),
(4, 5, 'Oang', 'mother', 'Jakarta', '0089778', 'Manager', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `password`, `role`) VALUES
(1, 'Admin', '', 'Laki-laki', '08123232323', 'admin@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'admin'),
(4, 'Aceng', 'Barlaman', 'Laki-laki', '', 'aceng@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'student'),
(6, 'Sun', 'Goku', 'laki-laki', '', 'sungoku@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_status`
--
ALTER TABLE `registration_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `fk_admin_id` (`admin_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `student_guardian`
--
ALTER TABLE `student_guardian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_guardian_student_id` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_status`
--
ALTER TABLE `registration_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_guardian`
--
ALTER TABLE `student_guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration_status`
--
ALTER TABLE `registration_status`
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `student_data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `student_guardian`
--
ALTER TABLE `student_guardian`
  ADD CONSTRAINT `fk_student_guardian_student_id` FOREIGN KEY (`student_id`) REFERENCES `student_data` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
