-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2019 at 06:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdetails`
--

CREATE TABLE `bdetails` (
  `Names` varchar(255) NOT NULL,
  `personal_address` varchar(255) NOT NULL,
  `Account_no` varchar(20) NOT NULL,
  `swift_code` varchar(20) NOT NULL,
  `Bank_name` varchar(255) NOT NULL,
  `Bank_Address` varchar(255) NOT NULL,
  `AccountType` enum('Dollar($)','Euro($)') NOT NULL,
  `Submitted_at` year(4) NOT NULL,
  `passsport_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdetails`
--

INSERT INTO `bdetails` (`Names`, `personal_address`, `Account_no`, `swift_code`, `Bank_name`, `Bank_Address`, `AccountType`, `Submitted_at`, `passsport_no`) VALUES
('jason hunk', 'Bourmedes', '83737287328372327832', 'BDLXXX', 'BDL', 'N24; Bourmedes; Algeria', 'Dollar($)', 2021, 'B533380');

-- --------------------------------------------------------

--
-- Table structure for table `coursechange`
--

CREATE TABLE `coursechange` (
  `id` int(11) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `names` varchar(255) NOT NULL,
  `previouscourse` varchar(255) NOT NULL,
  `course1` varchar(255) NOT NULL,
  `course2` varchar(255) NOT NULL,
  `wilaya1` varchar(255) NOT NULL,
  `wilaya2` varchar(255) NOT NULL,
  `reaason` varchar(255) NOT NULL,
  `submitted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursechange`
--

INSERT INTO `coursechange` (`id`, `passport_no`, `names`, `previouscourse`, `course1`, `course2`, `wilaya1`, `wilaya2`, `reaason`, `submitted_at`) VALUES
(1, 'B533380', 'jason hunk', 'arch', 'economics', 'null', '', 'null', 'null', '2019-06-28 18:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `universities` varchar(255) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `universities`, `location`) VALUES
(1, 'all', 'all'),
(2, 'Université 20 Août 1955 de Skikda', 'Skikda'),
(3, 'Université 8 Mai 1945 de Guelma', 'Guelma'),
(4, 'Université Abbès Laghrour Khenchela', 'Khenchela'),
(5, 'Université Abdelhamid Ibn Badis Mostaganem', 'Mostaganem'),
(6, 'Université Abderrahmane Mira de Béjaia', 'Béjaïa'),
(7, 'Université Abou Bekr Belkaid Tlemcen', 'Tlemcen'),
(8, 'Université Ahmed Ben Bella d`Oran 1', 'Oran'),
(9, 'Université Ahmed Draia d`Adrar', 'Adrar'),
(10, 'Université Amar Telidji de Laghouat', 'Laghouat'),
(11, 'Université Badji Mokhtar de Annaba', 'Annaba'),
(12, 'Université Batna 1', 'Batna'),
(13, 'Université Chadli Bendjedid d`El Tarf', 'El Taref'),
(14, 'Université Constantine 2 Abdelhamid Mehri', 'Constantine'),
(15, 'Université d`Alger 1', 'Algiers'),
(16, 'Université d`Alger 2', 'Algiers'),
(17, 'Université d`Alger 3', 'Algiers'),
(18, 'Université de Batna 2', 'Batna ...'),
(19, 'Université de Constantine 3', 'Constantine'),
(20, 'Université de Ghardaia', 'Ghardaia'),
(21, 'Université des Frères Mentouri de Constantine 1', 'Constantine'),
(22, 'Université des Sciences et de la Technologie d`Oran', 'Oran'),
(23, 'Université des Sciences et de la Technologie Houari Boumediène', 'Algiers'),
(24, 'Université des Sciences Islamiques Emir Abdelkader', 'Constantine'),
(25, 'Université Djilali Bounaama Khemis Miliana', 'Khemis Miliana'),
(26, 'Université Djillali Liabès de Sidi-Bel-Abbès', 'Sidi Bel Abbès'),
(27, 'Université Docteur Moulay Tahar de Saida', 'Saïda'),
(28, 'Université Ferhat Abbas de Sétif 1', 'Sétif'),
(29, 'Université Hassiba Ben Bouali de Chlef', 'Chlef'),
(30, 'Université IBN Khaldoun Tiaret', 'Tiaret'),
(31, 'Université Kasdi Merbah de Ouargla', 'Ouargla'),
(32, 'Université Larbi Ben Mhidi de Oum El Bouaghi', 'Oum El Bouaghi'),
(33, 'Université Larbi Tebessi de Tébessa', 'Tébessa'),
(34, 'Université Lounici Ali de Blida 2', 'El Affroun'),
(35, 'Université M`hamed Bouguerra de Boumerdes', 'Boumerdès'),
(36, 'Université Mohamed Ben Ahmed d`Oran 2', 'Oran'),
(37, 'Université Mohamed Boudiaf de M`sila', 'M`Sila'),
(38, 'Université Mohamed El Bachir El Ibrahimi de Bordj Bou Arréridj', 'Bordj Bou Arreridj'),
(39, 'Université Mohamed Khider de Biskra', 'Biskra'),
(40, 'Université Mohamed Lakhdar Ben Amara dit Hamma Lakhdar d`El Oued', 'El Oued'),
(41, 'Université Mohamed Lamine Debaghine de Sétif 2', 'Sétif'),
(42, 'Université Mohamed Seddik Ben Yahia de Jijel', 'Jijel'),
(43, 'Université Mohamed-Chérif Messaadia Souk Ahras', 'Souk Ahras'),
(44, 'Université Mohand Oulhadj de Bouira', 'Bouïra'),
(45, 'Université Mouloud Maameri de Tizi Ouzou', 'Tizi-Ouzou'),
(46, 'Université Mustapha Stambouli de Mascara', 'Mascara'),
(47, 'Université Saad Dahlab de Blida', 'Blida'),
(48, 'Université Tahri Mohammed Béchar', 'Béchar'),
(49, 'Université Yahia Fares de Médéa', 'Médéa'),
(50, 'Université Ziane Achour de Djelfa', 'Djelfa');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `passport_no` varchar(15) NOT NULL,
  `type` enum('E','A') NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Notifications`
--

CREATE TABLE `Notifications` (
  `id` int(11) NOT NULL,
  `receiver` varchar(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `sender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Notifications`
--

INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`, `created_at`, `sender`) VALUES
(1, 'Admin', 'i love you admin', 'unread', '2019-07-05 08:21:51', 'B533380'),
(2, 'B533380', 'Option 1', 'unread', '0000-00-00 00:00:00', ''),
(3, 'B533380', 'Option 1', 'unread', '0000-00-00 00:00:00', ''),
(4, 'B533380', 'Option 2', 'unread', '0000-00-00 00:00:00', ''),
(5, 'B533380', 'Option 2', 'unread', '0000-00-00 00:00:00', ''),
(6, 'B533380', 'Option 2', 'unread', '0000-00-00 00:00:00', ''),
(7, 'Admin', 'jason we are in love', 'unread', '2019-07-12 23:45:35', 'B533380');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `post` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `year` varchar(11) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `passport_no`, `post`, `approved`, `created_by`, `year`, `wilaya`, `created_at`) VALUES
(2, 'B533380', 'love is ever where', 1, 'jason', '', 'skikida', '2019-06-28 13:45:13'),
(4, 'B533380', 'we love you so much ', 1, 'jason', '', 'skikida', '2019-07-06 12:32:46'),
(5, 'B533380', 'xap today how do u feel ', 1, 'jason', '', 'skikida', '2019-07-05 07:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `girls` int(11) NOT NULL,
  `boys` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `year`, `girls`, `boys`) VALUES
(1, 2010, 0, 0),
(2, 2011, 0, 0),
(3, 2012, 0, 0),
(4, 2013, 0, 0),
(5, 2014, 0, 0),
(6, 2015, 0, 0),
(7, 2016, 1, 0),
(8, 2017, 0, 2),
(9, 2018, 3, 0),
(10, 2019, 0, 0),
(11, 2020, 0, 0),
(12, 2021, 0, 0),
(13, 2022, 0, 0),
(14, 2023, 0, 0),
(15, 2024, 0, 0),
(16, 2025, 0, 0),
(17, 2026, 0, 0),
(18, 2027, 0, 0),
(19, 2028, 0, 0),
(20, 2029, 0, 0),
(21, 2030, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `card_no` varchar(20) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `passhash` varchar(255) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `versity` varchar(255) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` enum('F','M') NOT NULL,
  `AC_type` enum('A','S','N') NOT NULL,
  `status` enum('active','inactive','Locked','Pending') NOT NULL,
  `msg_state` varchar(255) NOT NULL,
  `bankaccount` enum('Yes','no') NOT NULL,
  `created_at` datetime NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_contact` varchar(15) NOT NULL,
  `home` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `doi` varchar(10) NOT NULL,
  `dob2` varchar(10) NOT NULL,
  `code1` varchar(10) NOT NULL,
  `code2` varchar(10) NOT NULL,
  `year_of_entry` year(4) NOT NULL,
  `work` enum('None','Representative') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`card_no`, `passport_no`, `first`, `second`, `email`, `phone`, `passhash`, `wilaya`, `year`, `course`, `versity`, `dob`, `gender`, `AC_type`, `status`, `msg_state`, `bankaccount`, `created_at`, `parent_name`, `parent_contact`, `home`, `nationality`, `doi`, `dob2`, `code1`, `code2`, `year_of_entry`, `work`) VALUES
('UG5151', 'B514252', 'Semugoma', 'Solomon1', 'solomon1@gmail.com', '0864445656', 'hdhds67s6d7dsdsdgsd9', 'telemcen', 'Yr 1', 'ST', 'Telcmcen', '03/05/1996', 'F', '', 'active', '', 'Yes', '0000-00-00 00:00:00', 'Oscar1', '08464744', 'Kampala', 'Uganda', '01/11/2019', '01/12/1998', '', '', 2018, 'None'),
('UG5251', 'B524252', 'Semugoma', 'Solomon12', 'solomon21@gmail.com', '0864445656', 'hdhds67s6d7dsdsdgsd9', 'telemcen', 'Yr 1', 'ST', 'Telcmcen', '03/05/1996', 'F', 'N', 'active', '', 'Yes', '0000-00-00 00:00:00', 'Oscar1', '08464744', 'Kampala', 'Uganda', '01/11/2019', '01/12/1998', '', '', 2018, 'None'),
('UGA5500', 'B533380', 'jason', 'hunk', 'jason@gmail.com', '0772565832', '21cfff611024e5eac23029bc1c2be819', 'skikida', 'Yr 2', 'ST', 'skikida university', '01/02/2019', 'F', 'A', 'active', 'Option 2', '', '2019-06-26 12:51:38', 'henry', '07727464738', 'kampala', 'uganda', '02/08/2019', '03/12/2018', ' ', '', 2016, 'Representative'),
('UG551', 'B54252', 'Semugoma', 'Solomon', 'solomon@gmail.com', '0864445656', 'hdhds67s6d7dsdsdgsd9', 'telemcen', 'Yr 1', 'ST', 'Telcmcen', '03/05/1996', 'F', 'N', 'active', '', 'Yes', '0000-00-00 00:00:00', 'Oscar', '08464744', 'Kampala', 'Uganda', '01/11/2019', '01/12/1998', '', '', 2018, 'None'),
('UG72446', 'B6246474', 'kavuuma', 'Oscar21', 'oscar21@gmail.com', '0636338688', 'hdhd7dshdus78ds', 'Blida', 'M1', 'French', 'Blida', '02/05/1997', 'M', 'A', 'active', '', 'Yes', '0000-00-00 00:00:00', 'Sulaite', '9739393938837', 'Ntinda', 'Uganda', '05/10/2018', '01/05/1998', '', '', 2017, 'None'),
('UG7446', 'B646474', 'kavuuma', 'Oscar', 'oscar@gmail.com', '0636338688', 'hdhd7dshdus78ds', 'Blida', 'M1', 'French', 'Blida', '02/05/1997', 'M', 'A', 'active', '', 'Yes', '0000-00-00 00:00:00', 'Sulaite', '9739393938837', 'Ntinda', 'Uganda', '05/10/2018', '01/05/1998', '', '', 2017, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `wilayastats`
--

CREATE TABLE `wilayastats` (
  `id` int(11) NOT NULL,
  `wilaya` varchar(20) NOT NULL,
  `studentscount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayastats`
--

INSERT INTO `wilayastats` (`id`, `wilaya`, `studentscount`) VALUES
(1, 'telemcen', 3),
(3, 'skikida', 1),
(5, 'Blida', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdetails`
--
ALTER TABLE `bdetails`
  ADD PRIMARY KEY (`Account_no`);

--
-- Indexes for table `coursechange`
--
ALTER TABLE `coursechange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Notifications`
--
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`passport_no`),
  ADD UNIQUE KEY `card_no` (`card_no`,`email`,`phone`);

--
-- Indexes for table `wilayastats`
--
ALTER TABLE `wilayastats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursechange`
--
ALTER TABLE `coursechange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Notifications`
--
ALTER TABLE `Notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wilayastats`
--
ALTER TABLE `wilayastats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;