-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 09:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `user_adminmessages`
--

CREATE TABLE `user_adminmessages` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reply_to` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(512) NOT NULL,
  `replymessageid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_adminmessages`
--

INSERT INTO `user_adminmessages` (`id`, `name`, `reply_to`, `email`, `subject`, `message`, `replymessageid`) VALUES
(5, 'kartik', 13, ' kartik@gmail.com', 'yoo', '.....', 3),
(6, 'ankush', 15, ' ankush@gmail.com', 'hii', 'got it', 4),
(7, 'tarun', 20, ' tarun@gmail.com', 'get well ', 'good luck', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_appointment`
--

CREATE TABLE `user_appointment` (
  `Name` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Consultancy fees` int(50) NOT NULL,
  `Time` time(6) NOT NULL,
  `Date` date DEFAULT NULL,
  `Message` varchar(2500) NOT NULL,
  `appointment_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_appointment`
--

INSERT INTO `user_appointment` (`Name`, `Specialization`, `Consultancy fees`, `Time`, `Date`, `Message`, `appointment_id`) VALUES
('Dr. Sameer Sahni', 'Mental Counselor', 500, '00:20:23.000000', '2023-04-14', 'fever', 4),
('Dr. Sanyam Sharma', 'Therapist', 350, '00:20:23.000000', '0000-00-00', 'help', 10),
('Dr. Shikha Saini', 'Psychiartist', 350, '00:20:23.000000', '0000-00-00', 'illness', 11),
('Dr. Shikha Saini', 'Psychiartist', 350, '00:20:23.000000', '0000-00-00', 'depression', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_doctor`
--

CREATE TABLE `user_doctor` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Consultancy_fees` float NOT NULL,
  `description` varchar(512) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_doctor`
--

INSERT INTO `user_doctor` (`id`, `Name`, `Specialization`, `Consultancy_fees`, `description`, `qualification`, `experience`) VALUES
(1, 'Dr. Sameer Sahni', 'Mental Counselor\r\n', 500, 'Renowned and Reputed Clinical Psychologist, looking forward to help people suffering from\r\n            Anxiety, Depression, OCD and PTSD.', 'BA in psychology,PHD Psychiatry', '6 years'),
(2, 'Dr. Shikha Saini', 'Psychiartist', 350, 'I am a board-certified psychiartist with a certificate of additional qualification in addiction psychiatry, a dedicated community psychiartist with extensive experience in public inpatient and outpatient settings.', 'M.D,Psychiatry', '12 years'),
(3, 'Dr. Deepali Batra', 'Mental Counselor', 750, 'I am a Psychologist administrator who continues active clinical practice with seriously mentally ill and dually diagnosed patients.', 'PHD in Clinical Psychology', '4 years'),
(4, 'Dr. Shikha Singh', 'Behavioural Psychologist', 700, 'Currently researching on help and methods to cope with depression and mental health related behaviours. Looking forward to helping people having trouble managing behaviour.', 'PHD, Clinical Psychology', '10 years'),
(5, 'Dr. Sonia kapur', 'Clinical Psychologist', 500, 'I am an empanelled consultant of Mental Health and Behavioural Sciences, dedicated to provide help regarding mental healthcare. Feel free to contact.', 'PHD in Clinical Psychology', '5 years'),
(6, 'Dr. Mukul aggarwal', 'Psychiartist', 750, 'Looking forward to help people suffering from mental health related problems, and those who find difficulty in reaching for help physically.', 'BA in psychology,PHD Psychiatry', '13 years'),
(7, 'Dr. Sanyam Khanna', 'Therapist', 680, 'More than willing to help you and provide therapy available and offered in our clinic.\r\n\r\n', 'PHD in Clinical Psychology', '4 years'),
(8, 'Dr. Sanyam Sharma', 'Therapist', 350, 'Hello I want to let you know that here at my office my staff and I will do our best to make you comfortable. I strongly believe in ethics, as a health provider being ethical is not just a remembered value, but a strongly observed one.', 'PHD, Clinical Psychology', '6 years'),
(9, 'Dr. Mukul Sinha', 'Mental Counsellor', 800, 'I will try my best to provide help and full counselling with your troubles like a friend, so feel free to consult.', 'M.D,Psychiatry', '7 years');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL DEFAULT '2001-01-01',
  `contact` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `gender`, `dob`, `contact`, `state`, `city`, `zipcode`, `message`, `password`, `user_type`) VALUES
(0, '[value-2]', '[value-3]', '[value-4]', '0000-00-00', 0, '[value-7]', '[value-8]', '[value-9]', '[value-10]', '[value-11]', '[value-12]'),
(1, 'user', 'user@gmail.com', NULL, '2001-01-01', 0, '', '', '', '', '845a5881b425c46c2a7cfde191061610', 'user'),
(13, 'kartik', 'kartik@gmail.com', 'male', '2001-09-01', 1234567890, '..', ';;', '143001', '...', 'c8d39cdb56a46ad807969ee04c4e660b', 'user'),
(15, 'ankush', 'ankush@gmail.com', 'male', '2001-01-01', 123456789, 'Punjab', 'Amritsar', '143001', 'hii', '$2y$10$X9LxO3RiLbVWSwY2hSWDVuW1oH1XulDxOQIpO1Va8wOWtFOGEp4Ci', 'user'),
(19, 'admin', 'admin@gmail.com', NULL, '2001-01-01', 0, '', '', '', '', '$2y$10$DmN.k/j8fhDeGbtwJbT22em396d76Hr/pa1HGURESekDHycXwJe3O', 'admin'),
(20, 'tarun', 'tarun@gmail.com', 'male', '2001-07-01', 123456789, 'Punjab', 'Amritsar', '143001', 'hii', '$2y$10$5NWWYZFTTlrk5pL3d5x9suBOjH2iDbdrgp7jRvQ5pZK2uWrP01VTK', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(255) NOT NULL,
  `user_from` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `user_from`, `name`, `email`, `subject`, `message`) VALUES
(4, 15, 'ankush', 'ankush@gmail.com', 'test message', ' messages'),
(5, 20, 'tarun', 'tarun@gmail.com', 'fever', ' nu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_adminmessages`
--
ALTER TABLE `user_adminmessages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_to` (`reply_to`),
  ADD KEY `replymessageid` (`replymessageid`);

--
-- Indexes for table `user_appointment`
--
ALTER TABLE `user_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `user_doctor`
--
ALTER TABLE `user_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_from` (`user_from`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_adminmessages`
--
ALTER TABLE `user_adminmessages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_appointment`
--
ALTER TABLE `user_appointment`
  MODIFY `appointment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_adminmessages`
--
ALTER TABLE `user_adminmessages`
  ADD CONSTRAINT `user_adminmessages_ibfk_1` FOREIGN KEY (`reply_to`) REFERENCES `user_form` (`id`),
  ADD CONSTRAINT `user_adminmessages_ibfk_2` FOREIGN KEY (`replymessageid`) REFERENCES `user_messages` (`id`);

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `user_messages_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `user_form` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
