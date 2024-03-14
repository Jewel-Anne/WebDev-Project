-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 03:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4corners`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(100) NOT NULL,
  `ad_name` varchar(20) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(3, 'admin', 'admin@mail.com', '$2y$10$39Q09wf9S.Bt8x8lAVi58OaJsXDULTNKzoTELx1yhIUeosl1uhDm.');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `name`, `phone_number`, `email`, `date`, `time`, `message`) VALUES
(27, 'Meredith Grey', '09123456789', 'grey@mail.com', '2023-08-02', '12:12:00', 'I hope this message finds you well. My name is Meredith Grey, and I am interested in scheduling a physical therapy appointment at your clinic.\r\n\r\nI have been experiencing [briefly describe your condition or symptoms], and I believe physical therapy would be beneficial for my recovery and overall well-being.\r\n\r\nIdeally, I would like to schedule the appointment for August 2, 2023 at 12:12 PM, but I am also open to alternative options if those times are not available. Please let me know what the next steps are to secure an appointment and any additional information I might need to provide.\r\n\r\nThank you for your assistance, and I look forward to hearing back from you soon.'),
(28, 'Christina Yang', '09123456789', 'yang@mail.com', '2023-08-31', '12:12:00', 'I hope this message finds you well. My name is Christina Yang, and I am interested in scheduling a physical therapy appointment at your clinic.\r\n\r\nI have been experiencing [briefly describe your condition or symptoms], and I believe physical therapy would be beneficial for my recovery and overall well-being. Please let me know what the next steps are to secure an appointment and any additional information I might need to provide.\r\n\r\nThank you for your assistance, and I look forward to hearing back from you soon.');

-- --------------------------------------------------------

--
-- Table structure for table `clientlogin`
--

CREATE TABLE `clientlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_page_post`
--

CREATE TABLE `facebook_page_post` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `full_picture` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facebook_page_post`
--

INSERT INTO `facebook_page_post` (`id`, `message`, `full_picture`, `created_time`, `page_name`, `page_picture`) VALUES
(1, 'You never know who needs you. Good energy is contagious.', 'https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/364797908_108583212327883_2708998806859737651_n.jpg?_nc_cat=109&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGvxrl5emvmFtG-VIMzD-X4goyV4TgopZiCjJXhOCilmOn6gxfu3N4GpzA-vxXf5XbFIZ-g6nyufZ2Y_ThWr', '2023-08-01T09:08:24+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr'),
(2, 'Quote of the day!', 'https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/364722120_108582935661244_5380323869742841853_n.jpg?_nc_cat=108&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEohuFcMhTYo36W0IS4hTUIaOh8EKASedNo6HwQoBJ507aJXyIkfpiLBojXnLBGgsgHTmtRxmihuPGVOFJUY', '2023-08-01T09:07:47+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr'),
(3, 'Therapy is <3 <3 <3', 'https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/365051436_108582185661319_8758255028388668766_n.jpg?_nc_cat=101&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEUM_S3EBrnysjbGJqIWY4iIhR__YO0TpAiFH_9g7ROkBj1AjFWfyTVkoaDUQVzLNnaoUogMzBA_Q65PSnpm', '2023-08-01T09:06:14+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr'),
(4, 'Another sample post', 'https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/364616830_108581798994691_1711065010527297350_n.jpg?_nc_cat=108&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHP-WPvAg32nHBEJFp9AbsMb_r5gqszIPVv-vmCqzMg9Q1LJtweo54K7iDMd9lhmTlQdi-akXPM_q2LvdH7I', '2023-08-01T09:05:37+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr'),
(5, 'Example post only', 'https://scontent.fmnl3-3.fna.fbcdn.net/v/t39.30808-6/365044046_108581408994730_6618574294981724712_n.jpg?_nc_cat=103&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGzKcsX-XghvoYqvk2y-EokdrNbC9jWyA12s1sL2NbIDWLJU9y0_mgaPLHS5Lk0d4fWIwxFnhd_QSQO_UNjv', '2023-08-01T09:04:53+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr'),
(6, 'Sample post for Web development', 'https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/364707837_108580572328147_5473983053068417893_n.jpg?_nc_cat=108&cb=99be929b-3346023f&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEwbn9hHwwRqukZCd9dMJhHrqaKFRWmQt2upooVFaZC3fGZdcDIrEcoW8nkEIxXhypipQtcGOyu6-9asrvF0', '2023-08-01T09:04:06+0000', '4Corners Therapy Center Test', 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/364798023_108579995661538_7429450695080075231_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=102&cb=99be929b-3346023f&ccb=1-7&_nc_sid=dbb9e7&_nc_eui2=AeG9du8UGW9M94LxoZHJbNIu4hbe3pElSnziFt7ekSVKfB0LEmmscIkmqvY1hr');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(17, '7544.jpg', '2020-11-26 12:20:22', '1'),
(18, '8396.jpg', '2020-11-26 12:20:22', '1'),
(19, '3942239.jpg', '2020-11-26 12:20:22', '1'),
(20, '19834.jpg', '2020-11-26 16:21:04', '1'),
(21, 'closeup-calculator-stethoscope-healthcare-expenses-concept.jpg', '2020-11-26 16:31:14', '1'),
(24, 'Untitled.png', '2020-11-27 20:58:31', '1'),
(25, 'Charge Posting.png', '2020-11-28 13:29:43', '1'),
(26, 'Payment Posting.png', '2020-11-28 13:29:43', '1'),
(27, 'AR follow up.png', '2020-11-28 14:02:30', '1'),
(28, 'portrait-woman-customer-service-worker.jpg', '2020-12-03 16:12:51', '1'),
(29, '19197572.jpg', '2020-12-03 16:13:19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `RegID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Age` int(50) NOT NULL,
  `Diagnosis` varchar(50) NOT NULL,
  `ParentGuardianName` varchar(50) NOT NULL,
  `RelationshipToPatient` varchar(50) NOT NULL,
  `PhoneNum` varchar(13) NOT NULL,
  `MessengerName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ViberNum` varchar(13) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ServiceType` varchar(100) NOT NULL,
  `PreferredSchedule` varchar(50) NOT NULL,
  `AgreePrivacy` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`RegID`, `FullName`, `BirthDate`, `Age`, `Diagnosis`, `ParentGuardianName`, `RelationshipToPatient`, `PhoneNum`, `MessengerName`, `Email`, `ViberNum`, `Address`, `ServiceType`, `PreferredSchedule`, `AgreePrivacy`) VALUES
(3, 'Meredith Grey', '2013-08-16', 9, 'Foot Limp', 'Ellis Grey', 'Mother', '09123456789', 'Ellis Grey', 'greye@mail.com', '09123456789', 'QC, Philippines', 'Physical Therapy', 'Afternoon Session', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `short` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short`) VALUES
(37, 'Speech Therapy', 'Our speech therapy services are dedicated to enhancing communication skills for both children and adults. Our skilled speech therapists assess and treat speech and language disorders, fluency issues, and communication challenges, fostering improved social interactions and boosting confidence in effective communication.'),
(38, 'Physical Therapy', 'Our physical therapy program is tailored to address musculoskeletal injuries, illnesses, or conditions affecting your physical function and mobility. Our dedicated physical therapists create customized treatment plans to reduce pain, improve mobility, and restore your ability to engage in daily activities with greater ease.'),
(39, 'Developmental Pediatrics', 'Our developmental pediatrics services focus on the early identification and comprehensive management of developmental and behavioral disorders in infants, children, and adolescents. Our team of experienced specialists collaborates with you and other professionals to provide the support and interventions needed for your child\'s healthy development and overall well-being.');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `header_logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `footer_logo` varchar(255) NOT NULL,
  `footer_desc` varchar(5000) NOT NULL,
  `facebook` varchar(2000) NOT NULL,
  `twitter` varchar(2000) NOT NULL,
  `linkedin` varchar(2000) NOT NULL,
  `instagram` varchar(2000) NOT NULL,
  `gmail` varchar(2000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `map` varchar(3000) NOT NULL,
  `site_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `email`, `phone`, `phone2`, `footer_logo`, `footer_desc`, `facebook`, `twitter`, `linkedin`, `instagram`, `gmail`, `address`, `city`, `state`, `country`, `pin`, `map`, `site_name`) VALUES
(1, '1077930642754453333Logo 1-min.png', '4cornerstherapycenter@gmail.com', '+63 917 805 5332', '+91 9899 007 899', '1328530813Logo 1.PNG', '', 'https://www.facebook.com/4ctcvillamor', '#', '#', 'https://instagram.com/4cornerstherapycenter?igshid=NTc4MTIwNjQ2YQ==', 'https://accounts.google.com/v3/signin/identifier?dsh=S1594805612%3A1690396408027391&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%26ogbl%2F&emr=1&ifkv=AeDOFXhzaHG46dNutapQdKvZhVmIRwXsuGljS8wmTBVTN6_xfXVFGxPaRoWHV3pffk-pAq86LPjm&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin', 'P2-05 10th-1st street, Brgy. 183, Villamor Pasay City, Pasay, 1300, Pasay City, Philippines', '', '', '', '', '                                                                                                                                            https://www.google.com/maps/dir//4Corners+Therapy+Center/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c9cbc1bef739:0xe6b2ceac3de4e23b!2m2!1d121.01644599999999!2d14.5255706                                                                                                                                ', '4Corners Therapy Center');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `descrip` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `designation`, `descrip`) VALUES
(34, 'Steven Santos', 'Quezon City, Philippines', 'I could not be happier with the occupational therapy I received at 4Corners. The therapists are knowledgeable and caring, and they tailored the treatment plan to suit my specific needs. They helped me develop skills and regain independence. I highly recommend their services!'),
(35, 'Alex Smith', 'Marikina, Philippines', 'The developmental pediatrics services at 4Corners have been instrumental in understanding and addressing the needs of my child. The expertise of the team and thorough evaluations have guided us in creating a personalized plan that supports the growth and development of our child.'),
(36, 'Steven Chris', 'Quezon City, Philippines', '\r\nI had the privilege of working with the physical therapy team at 4Corners, and they truly made a difference in my life. Their dedication and encouragement helped me overcome physical challenges, and I am now able to enjoy a more active and fulfilling lifestyle.'),
(37, 'Izzie Stevens', 'Quezon City, Philippines', '4Corners Therapy Center has been a blessing for our adult child with special needs. Their compassionate care and occupational therapy services have helped our child gain new skills and improved their daily living. We could not have asked for a more supportive team!'),
(38, 'Kristina Bellis', 'Caloocan, Philippines', 'I am incredibly thankful for the excellent speech therapy provided by 4Corners. The therapists were patient, kind, and skilled, helping me improve my communication abilities. They created a positive learning environment, making the therapy sessions enjoyable.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `clientlogin`
--
ALTER TABLE `clientlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_page_post`
--
ALTER TABLE `facebook_page_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `RegID` (`RegID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `clientlogin`
--
ALTER TABLE `clientlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `facebook_page_post`
--
ALTER TABLE `facebook_page_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `RegID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
