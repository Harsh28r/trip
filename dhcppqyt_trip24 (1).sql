-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2025 at 06:11 PM
-- Server version: 10.6.20-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhcppqyt_trip24`
--

-- --------------------------------------------------------

--
-- Table structure for table `24Trip_imp`
--

CREATE TABLE `24Trip_imp` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `remark` varchar(256) NOT NULL,
  `value` varchar(256) NOT NULL,
  `updated_at` varchar(256) NOT NULL,
  `updated_by` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `24Trip_imp`
--

INSERT INTO `24Trip_imp` (`id`, `name`, `remark`, `value`, `updated_at`, `updated_by`, `created_at`) VALUES
(1, 'uid', 'TR2411SEP24001 details - TR24(Day)(Month)(Year)(seq) ', '15', '2024-11-09 03:12', '2024-11-09 03:12', '2024-12-28 18:16:24'),
(2, 'trip_id', 'TR01', '3', '2024-09-23 8:40AM', '2024-09-23 8:40AM', '2024-09-23 03:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `activity_booking`
--

CREATE TABLE `activity_booking` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `no_of_person` int(11) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `tour_date` date NOT NULL,
  `paid_amount` decimal(10,2) DEFAULT 0.00,
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activity_booking`
--

INSERT INTO `activity_booking` (`request_id`, `user_id`, `vendor_id`, `activity_id`, `no_of_person`, `duration`, `tour_date`, `paid_amount`, `total_amount`, `status`, `booking_time`) VALUES
(1, 5, 8, 2, 1, '30 min', '2024-12-20', 0.00, 10400.00, 'pending', '2024-12-17 08:38:29'),
(2, 5, 8, 2, 2, '15 min', '2024-12-20', 0.00, 10400.00, 'pending', '2024-12-17 10:28:03'),
(6, 5, 31, 8, 3, '45 min', '2024-12-31', 0.00, 13500.00, 'pending', '2024-12-17 11:45:15'),
(7, 5, 23, 2, 1, '15 min', '2024-12-20', 0.00, 5200.00, 'pending', '2024-12-17 11:45:54'),
(8, 5, 31, 4, 1, '15 min', '2024-12-19', 0.00, 1500.00, 'pending', '2024-12-17 11:47:41'),
(9, 5, 23, 2, 1, '15 min', '2024-12-20', 0.00, 5200.00, 'pending', '2024-12-17 12:13:14'),
(10, 5, 8, 3, 1, '15 min', '2024-12-21', 0.00, 1200.00, 'pending', '2024-12-18 09:49:44'),
(11, 5, 23, 11, 1, '30 min', '2024-12-27', 0.00, 3600.00, 'pending', '2024-12-20 11:31:49'),
(12, 5, 8, 5, 1, '30 min', '2025-01-24', 0.00, 2400.00, 'pending', '2025-01-24 09:14:24'),
(13, 5, 23, 2, 1, '15 min', '0000-00-00', 0.00, 5200.00, 'pending', '2025-01-27 13:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `admintrip24`
--

CREATE TABLE `admintrip24` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `profile` varchar(256) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `updated_by` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintrip24`
--

INSERT INTO `admintrip24` (`id`, `type`, `uid`, `email`, `name`, `password`, `mobile_no`, `profile`, `status`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'TR24SUPADMIN', 'info@trip24.co.in', 'Trip24', '$2y$10$yaFy7DhP7Bd/yTxqWMLFX.OrMFjlMH1lkn0.9fwzcWZIDbBQBFYs6', '9797009797', 'trip24.png', 'active', '2024-10-05 11:43AM', '2024-10-05 11:43AM', 'DB');

-- --------------------------------------------------------

--
-- Table structure for table `bike_booking`
--

CREATE TABLE `bike_booking` (
  `request_id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `vendor_id` int(25) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `no_of_bikes` int(10) NOT NULL,
  `start_date` varchar(25) NOT NULL,
  `end_date` varchar(25) NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `dropoff_location` varchar(255) DEFAULT NULL,
  `status` enum('pending','confirmed','canceled','completed') DEFAULT 'pending',
  `total_cost` decimal(10,2) NOT NULL,
  `booking_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bike_booking`
--

INSERT INTO `bike_booking` (`request_id`, `user_id`, `vendor_id`, `bike_id`, `no_of_bikes`, `start_date`, `end_date`, `pickup_location`, `dropoff_location`, `status`, `total_cost`, `booking_time`) VALUES
(1, '5', 0, 2, 1, '2024-12-07 00:00:00', '2024-12-10 00:00:00', '', '', 'pending', 360.00, '2024-12-07 22:40:38'),
(2, '5', 0, 2, 1, '2024-12-08 00:00:00', '2024-12-10 00:00:00', '', '', 'pending', 240.00, '2024-12-08 00:00:00'),
(3, '5', 0, 2, 1, '2024-12-08', '2024-12-15', '', '', 'pending', 840.00, '2024-12-08 00:00:00'),
(4, '5', 0, 2, 1, '2024-12-08', '2024-12-15', '', '', 'pending', 840.00, '2024-12-08 00:00:00'),
(5, '5', 0, 2, 1, '2024-12-08', '2024-12-08', '', '', 'pending', 120.00, '2024-12-08 00:00:00'),
(6, '5', 0, 2, 2, '2024-12-09', '2024-12-10', '', '', 'pending', 240.00, '2024-12-08 00:00:00'),
(7, '5', 0, 2, 2, '2024-12-09', '2024-12-10', '', '', 'pending', 240.00, '2024-12-08 00:00:00'),
(8, '5', 0, 2, 2, '2024-12-08', '2024-12-10', '', '', 'pending', 480.00, '2024-12-08 00:00:00'),
(9, '5', 0, 2, 1, '2024-12-09', '2024-12-10', '', '', 'pending', 120.00, '2024-12-08 00:00:00'),
(10, '5', 0, 2, 1, '2024-12-08', '2024-12-09', '', '', 'pending', 120.00, '2024-12-08 00:00:00'),
(11, '5', 0, 2, 4, '2024-12-09', '2024-12-10', '', '', 'pending', 480.00, '2024-12-08 00:00:00'),
(12, '5', 0, 5, 1, '2024-12-09', '2024-12-16', '', '', 'pending', 10150.00, '2024-12-08 00:00:00'),
(13, '5', 0, 2, 2, '2024-12-08', '2024-12-10', '', '', 'pending', 480.00, '0000-00-00 00:00:00'),
(14, '5', 0, 1, 1, '2024-12-10', '2024-12-11', '', '', 'pending', 3200.00, '0000-00-00 00:00:00'),
(15, '5', 0, 2, 2, '2024-12-10', '2024-12-11', '', '', 'pending', 240.00, '0000-00-00 00:00:00'),
(16, '5', 0, 2, 1, '2024-12-10', '2024-12-12', '', '', 'pending', 240.00, '08-12-2024 14:26:25'),
(17, '5', 0, 2, 2, '2024-12-10', '2024-12-12', '', '', 'pending', 480.00, '08-12-2024 16:39:18'),
(18, '6', 0, 6, 1, '2024-12-10', '2024-12-15', '', '', 'pending', 2250.00, '08-12-2024 18:56:52'),
(19, '6', 0, 4, 1, '2024-12-10', '2024-12-10', '', '', 'pending', 150.00, '08-12-2024 19:00:22'),
(20, '5', 0, 1, 5, '2024-12-10', '2024-12-20', '', '', 'pending', 16000.00, '09-12-2024 00:11:40'),
(21, '5', 0, 5, 1, '2024-12-10', '2024-12-10', '', '', 'pending', 1450.00, '09-12-2024 00:17:26'),
(22, '5', 0, 1, 2, '2024-12-10', '2024-12-20', '', '', 'pending', 6400.00, '09-12-2024 11:44:34'),
(23, '5', 0, 1, 1, '2024-12-20', '2024-12-30', '', '', 'pending', 3200.00, '16-12-2024 20:14:11'),
(24, '5', 0, 5, 3, '2025-01-31', '2025-02-02', '', '', 'pending', 8700.00, '31-01-2025 20:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `service_activities`
--

CREATE TABLE `service_activities` (
  `activity_id` int(11) NOT NULL,
  `vendor_id` int(50) NOT NULL,
  `vendor_uid` varchar(100) NOT NULL,
  `activity_type` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `pickup_location` varchar(256) NOT NULL,
  `amenities` text NOT NULL,
  `banner` varchar(256) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_activities`
--

INSERT INTO `service_activities` (`activity_id`, `vendor_id`, `vendor_uid`, `activity_type`, `name`, `duration`, `unit`, `price`, `pickup_location`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(2, 23, 'TR2421SEP24011', 'Paragliding', 'Sunrise Paragliding Tour', '5', 'Hour', '5200', 'Bir Billing, Himachal Pradesh, India', '<h4><strong>About Sunrise Paragliding Tour</strong></h4><p>Experience the thrill of paragliding with our Sunrise Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br><strong>Tour Details</strong></p><ul><li>Location Bir-Billing, Himachal Pradesh</li><li>Duration 4 - 5 hours</li><li>Agency NameSunrise Paragliding Adventures</li><li>Booking Time 8am - 6pm</li><li>Price ₹7,500</li><li>Contact +91-9876543210</li><li>Email info@sunriseparagliding.com</li></ul>', '66effb8a0b05a.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:08:00', '2024-09-22 04:08:00'),
(3, 8, 'TR2412SEP24002', 'Rafting', 'River Rafting in Manali', '2', 'Hour', '1200', 'Manali, Himachal Pradesh ', '<h4><strong>Activity Timings</strong></h4><ul><li>Summer Timing:08:00 AM - 07:00 PM</li><li>Winter Timing:09:00 AM - 05:00 PM<br><strong>By</strong>&nbsp;Raj Kumar</li></ul><h4>River Rafting in Manali:</h4><p>Manali, the Valley of Gods located between the majestic Himalayas and enchanting river Beas offers you an extensive range of escapades, two of the most famous are river rafting and paragliding. River raft under the glory of the sun where the water cools you down and later on fulfills your dream of flying at a height of around 8000 ft by grabbing this package. The fresh wind, vistas of the gorgeous Himalayas, the pure sensation of soaring, and obtaining a bird\'s eye perspective - it\'s an all-around amazing experience. Be a free-flying bird or a mermaid who lives to love the ocean.</p>', '66effc9a5ef00.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:46:42', '2024-09-22 04:46:42'),
(4, 31, 'TR2412SEP24003', 'Paragliding', 'High-Altitude Paragliding', '4', 'Hour', '1500', ' Parvati Valley, Himachal Pradesh, India', '<h2>High-Altitude Paragliding</h2><p>Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br>&nbsp;</p>', '66f8b8f48d1b6.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:48:28', '2024-09-29 07:48:28'),
(5, 8, 'TR2412SEP24002', 'Paragliding', 'PRIME Paragliding', '1', 'Hour', '1200', 'Manali Paragliding Point', '<h4><strong>PRIME Paragliding</strong><br><strong>In Bir-Billing</strong></h4><p>Let’s up the game and double-up the airtime! If you want to do a little more and take a long ride, try our Prime flight. Our experienced pilot will take you soaring above the take off site, glide to a ridge nearby and land after an exciting 40 minutes.</p>', '66fbcaa85743b.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:51:46', '2024-09-29 07:51:46'),
(6, 23, 'TR2421SEP24011', 'Paragliding', 'Sunrise Paragliding Tour 2', '5', 'Hour', '5200', 'Bir Billing, Himachal Pradesh, India', '<h4><strong>About Sunrise Paragliding 2 Tour</strong></h4><p>Experience the thrill of paragliding with our Sunrise Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br><strong>Tour Details</strong></p><ul><li>Location Bir-Billing, Himachal Pradesh</li><li>Duration 4 - 5 hours</li><li>Agency NameSunrise Paragliding Adventures</li><li>Booking Time 8am - 6pm</li><li>Price ₹7,500</li><li>Contact +91-9876543210</li><li>Email info@sunriseparagliding.com</li></ul>', '66effb8a0b05a.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:08:00', '2024-09-22 04:08:00'),
(7, 8, 'TR2412SEP24002', 'Rafting', 'River Rafting in Manali 2', '2', 'Hour', '1200', 'Manali, Himachal Pradesh ', '<h4><strong>Activity Timings</strong></h4><ul><li>Summer Timing:08:00 AM - 07:00 PM</li><li>Winter Timing:09:00 AM - 05:00 PM<br><strong>By</strong>&nbsp;Raj Kumar</li></ul><h4>River Rafting in Manali:</h4><p>Manali, the Valley of Gods located between the majestic Himalayas and enchanting river Beas offers you an extensive range of escapades, two of the most famous are river rafting and paragliding. River raft under the glory of the sun where the water cools you down and later on fulfills your dream of flying at a height of around 8000 ft by grabbing this package. The fresh wind, vistas of the gorgeous Himalayas, the pure sensation of soaring, and obtaining a bird\'s eye perspective - it\'s an all-around amazing experience. Be a free-flying bird or a mermaid who lives to love the ocean.</p>', '66effc9a5ef00.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:46:42', '2024-09-22 04:46:42'),
(8, 31, 'TR2412SEP24003', 'Paragliding', 'High-Altitude Paragliding 2', '4', 'Hour', '1500', ' Parvati Valley, Himachal Pradesh, India', '<h2>High-Altitude Paragliding</h2><p>Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br>&nbsp;</p>', '66f8b8f48d1b6.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:48:28', '2024-09-29 07:48:28'),
(9, 8, 'TR2412SEP24002', 'Paragliding', 'PRIME Paragliding 3', '10', 'Hour', '399', 'Manali Paragliding Point', '<h4><strong>PRIME Paragliding</strong><br><strong>In Bir-Billing</strong></h4><p>Let’s up the game and double-up the airtime! If you want to do a little more and take a long ride, try our Prime flight. Our experienced pilot will take you soaring above the take off site, glide to a ridge nearby and land after an exciting 40 minutes.</p>', '66fbcaec2a072.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:51:46', '2024-09-29 07:51:46'),
(10, 28, 'TR2421SEP24012', 'Snow-Suit-On-Rent', 'Snow Riding', '2', 'Hour', '1500', 'Riding Point Shimla', '<h4><a href=\"https://work.perceptionvita.in/trip24ui/snow-suit-details#\"><strong>Snow Dress in Shimla</strong></a></h4><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis accusantium culpa totam aspernatur quasi repudiandae distinctio aliquam nam dolor tempore dignissimos ex sit, vitae quis, nemo pariatur ipsa voluptatum quo necessitatibus optio mollitia natus commodi non. Accusamus, molestiae at!</p>', '66f8bd0cc3398.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 08:05:56', '2024-09-29 08:05:56'),
(11, 23, 'TR2421SEP24011', 'Paragliding', 'Sunrise Paragliding Tour 3', '50', 'Min', '1800', 'Bir Billing, Himachal Pradesh, India', '<h4><strong>About Sunrise Paragliding Tour 3</strong></h4><p>Experience the thrill of paragliding with our Sunrise Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br><strong>Tour Details</strong></p><ul><li>Location Bir-Billing, Himachal Pradesh</li><li>Duration 4 - 5 hours</li><li>Agency NameSunrise Paragliding Adventures</li><li>Booking Time 8am - 6pm</li><li>Price ₹7,500</li><li>Contact +91-9876543210</li><li>Email info@sunriseparagliding.com</li></ul>', '66effb8a0b05a.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:08:00', '2024-09-22 04:08:00'),
(12, 8, 'TR2412SEP24002', 'Rafting', 'River Rafting in Manali 3', '20', 'Min', '1000', 'Manali, Himachal Pradesh ', '<h4><strong>Activity Timings</strong></h4><ul><li>Summer Timing:08:00 AM - 07:00 PM</li><li>Winter Timing:09:00 AM - 05:00 PM<br><strong>By</strong>&nbsp;Raj Kumar</li></ul><h4>River Rafting in Manali:</h4><p>Manali, the Valley of Gods located between the majestic Himalayas and enchanting river Beas offers you an extensive range of escapades, two of the most famous are river rafting and paragliding. River raft under the glory of the sun where the water cools you down and later on fulfills your dream of flying at a height of around 8000 ft by grabbing this package. The fresh wind, vistas of the gorgeous Himalayas, the pure sensation of soaring, and obtaining a bird\'s eye perspective - it\'s an all-around amazing experience. Be a free-flying bird or a mermaid who lives to love the ocean.</p>', '66effc9a5ef00.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:46:42', '2024-09-22 04:46:42'),
(13, 31, 'TR2412SEP24003', 'Paragliding', 'High-Altitude Paragliding 2.0', '40', 'Min', '999', ' Parvati Valley, Himachal Pradesh, India', '<h2>High-Altitude Paragliding</h2><p>Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br>&nbsp;</p>', '66f8b8f48d1b6.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:48:28', '2024-09-29 07:48:28'),
(14, 8, 'TR2412SEP24002', 'Paragliding', 'PRIME Paragliding 2.0', '35', 'Hour', '999', 'Manali Paragliding Point', '<h4><strong>PRIME Paragliding</strong><br><strong>In Bir-Billing</strong></h4><p>Let’s up the game and double-up the airtime! If you want to do a little more and take a long ride, try our Prime flight. Our experienced pilot will take you soaring above the take off site, glide to a ridge nearby and land after an exciting 40 minutes.</p>', '66fbca8250057.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:51:46', '2024-09-29 07:51:46'),
(15, 23, 'TR2421SEP24011', 'Paragliding', 'Sunrise Paragliding Tour 3.0', '45', 'Min', '999', 'Bir Billing, Himachal Pradesh, India', '<h4><strong>About Sunrise Paragliding 2 Tour</strong></h4><p>Experience the thrill of paragliding with our Sunrise Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br><strong>Tour Details</strong></p><ul><li>Location Bir-Billing, Himachal Pradesh</li><li>Duration 4 - 5 hours</li><li>Agency NameSunrise Paragliding Adventures</li><li>Booking Time 8am - 6pm</li><li>Price ₹7,500</li><li>Contact +91-9876543210</li><li>Email info@sunriseparagliding.com</li></ul>', '66effb8a0b05a.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:08:00', '2024-09-22 04:08:00'),
(16, 8, 'TR2412SEP24002', 'Rafting', 'River Rafting in Manali 3.2', '25', 'Min', '1149', 'Manali, Himachal Pradesh ', '<h4><strong>Activity Timings</strong></h4><ul><li>Summer Timing:08:00 AM - 07:00 PM</li><li>Winter Timing:09:00 AM - 05:00 PM<br><strong>By</strong>&nbsp;Raj Kumar</li></ul><h4>River Rafting in Manali:</h4><p>Manali, the Valley of Gods located between the majestic Himalayas and enchanting river Beas offers you an extensive range of escapades, two of the most famous are river rafting and paragliding. River raft under the glory of the sun where the water cools you down and later on fulfills your dream of flying at a height of around 8000 ft by grabbing this package. The fresh wind, vistas of the gorgeous Himalayas, the pure sensation of soaring, and obtaining a bird\'s eye perspective - it\'s an all-around amazing experience. Be a free-flying bird or a mermaid who lives to love the ocean.</p>', '66effc9a5ef00.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 04:46:42', '2024-09-22 04:46:42'),
(17, 31, 'TR2412SEP24003', 'Paragliding', 'High-Altitude Paragliding 2.5', '30', 'Min', '1099', ' Parvati Valley, Himachal Pradesh, India', '<h2>High-Altitude Paragliding</h2><p>Paragliding Tour, set against the stunning backdrop of Himachal Pradesh. This adventure is crafted for both beginners and seasoned paragliders, offering breathtaking views as you soar above the majestic landscapes of Bir-Billing. Our expert instructors ensure a safe and memorable experience, making it a perfect choice for adrenaline seekers and nature lovers alike.<br>&nbsp;</p>', '66f8b8f48d1b6.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:48:28', '2024-09-29 07:48:28'),
(18, 8, 'TR2412SEP24002', 'Paragliding', 'PRIME Paragliding 3.6', '15', 'Hour', '499', 'Manali Paragliding Point', '<h4><strong>PRIME Paragliding</strong><br><strong>In Bir-Billing</strong></h4><p>Let’s up the game and double-up the airtime! If you want to do a little more and take a long ride, try our Prime flight. Our experienced pilot will take you soaring above the take off site, glide to a ridge nearby and land after an exciting 40 minutes.</p>', '66fbc89fb4956.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 07:51:46', '2024-09-29 07:51:46'),
(19, 28, 'TR2421SEP24012', 'Snow-Suit-On-Rent', 'Snow Riding Suit 2.0', '4', 'Hour', '2500', 'Riding Point Shimla', '<h4><a href=\"https://work.perceptionvita.in/trip24ui/snow-suit-details#\"><strong>Snow Dress in Shimla</strong></a></h4><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis accusantium culpa totam aspernatur quasi repudiandae distinctio aliquam nam dolor tempore dignissimos ex sit, vitae quis, nemo pariatur ipsa voluptatum quo necessitatibus optio mollitia natus commodi non. Accusamus, molestiae at!</p>', '66f8bd0cc3398.png', 'Pending', 'TR24SUPADMIN', '2024-09-29 08:05:56', '2024-09-29 08:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `service_bikes`
--

CREATE TABLE `service_bikes` (
  `bike_id` int(11) NOT NULL,
  `vendor_uid` varchar(100) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `year` varchar(10) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `bike_no` varchar(20) NOT NULL,
  `pickup_location` varchar(256) NOT NULL,
  `price` varchar(10) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `amenities` text NOT NULL,
  `banner` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_bikes`
--

INSERT INTO `service_bikes` (`bike_id`, `vendor_uid`, `brand`, `model`, `year`, `capacity`, `bike_no`, `pickup_location`, `price`, `unit`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(1, 'TR2412SEP24002', 'Bajaj', 'Pulsar 125', '2024', '125 CC', 'UP57AB4762', 'Jogindarpur', '320', 'Day', '<p>Dealer Timings: <strong>09:00 AM</strong> - <strong>07:00 PM</strong></p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 1,000</strong></p><ol><li>One Helmet will be given with the bike. Another will be available on request.</li><li>Security Deposit is refundable once we receive the bike in proper condition.</li><li>You need to submit an original ID proof and a photocopy of your driving license.</li><li>There is Km limit 150km/daily, 800 Km/weekly and 2000 Km/monthly - Exceeding the Km Limit chargeable Rs 3/km.</li></ol>', '675fd012e8e73.png', '', 'TR24SUPADMIN', '2024-09-21 06:27:55', '2024-09-21 06:27:55'),
(2, 'TR2412SEP24005', 'Honda', 'SP 125 DC', '2024', '125 CC', 'UP51BA4876', 'Noida Sector 1', '120', 'Day', '<p>Dealer Timings: <strong>09:00 AM</strong> - <strong>09:00 PM</strong></p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 3,000</strong></p><ol><li>The Security Deposit is refundable after 24 hours once we receive the bike in proper condition.</li><li>You must submit proof of your original ID and a photocopy of your driving license.</li><li>There is a Km limit of 150 km/daily, 1000 Km/weekly, and 3000 Km/monthly - Exceeding the Km Limit chargeable 3rs/km.</li></ol>', '66f2b5ce4be9e.png', 'Pending', 'TR24SUPADMIN', '2024-09-21 06:33:01', '2024-09-21 06:33:01'),
(3, 'TR2412SEP24005', 'A', 'B', 'C', 'D', 'E', 'F', '100', 'Day', '<p>A</p>', '66ef77a8294a6.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 07:19:28', '2024-09-22 07:19:28'),
(4, 'TR2421SEP24012', 'Honda', 'Activa 6G STD', '2024', '220 CC', 'UP62CS4587', 'Sector 6', '150', 'Day', '<p>Dealer Timings: <strong>09:00 AM</strong> - <strong>07:00 PM</strong></p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 1,000</strong></p><ol><li>One Helmet will be given with the bike. Another will be available on request.</li><li>Security Deposit is refundable once we receive the bike in proper condition.</li><li>You need to submit an original ID proof and a photocopy of your driving license.</li><li>There is Km limit 150km/daily, 800 Km/weekly and 2000 Km/monthly - Exceeding the Km Limit chargeable Rs 3/km.</li></ol>', '66ef78b43a8de.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 07:23:56', '2024-09-22 07:23:56'),
(5, 'TR2421SEP24012', 'Hero Moto Corp', 'Splendor Plus', '2023', '100 CC', 'AP45BR7415', 'Jagannathpur', '1450', 'Day', '<p>Dealer Timings: <strong>10:00 AM</strong> - <strong>06:00 PM</strong></p><p>&nbsp;</p><p><a href=\"https://www.rentrip.in/blog/13/hero-splendor-plus-specifications-colours-maintenance-and-price\">Hero Splendor Plus</a> Bike is propelled by the tried and tested 97.2cc air-cooled four-stroke single-cylinder motor equipped, which is used to power other Hero products. The engine is capable of producing 8.2bhp of max power and 8Nm of peak torque.&nbsp;</p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 1,000</strong></p><ol><li>One Helmet will be given with the bike. Another will be available on request.</li><li>Security Deposit is refundable once we receive the bike in proper condition.</li><li>You need to submit an original ID proof and a photocopy of your driving license.</li><li>Km limit of 150 km <strong>per day,&nbsp;</strong> 700 km per week Post that, Rs 3 per km will be added.</li><li>The security deposit is refundable after 24 Hours once we receive the bike in the proper condition</li></ol>', '66ef7a323ee31.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 07:30:18', '2024-09-22 07:30:18'),
(6, 'TR2419SEP24008', 'Bajaj', 'Pulsar', '2024', '180 CC', 'UP56AB1212', 'Mohanpur', '450', 'Day', '<p>Dealer Timings: <strong>09:00 AM</strong> - <strong>09:00 PM</strong></p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 3,000</strong></p><ol><li>The Security Deposit is refundable after 24 hours once we receive the bike in proper condition.</li><li>You must submit proof of your original ID and a photocopy of your driving license.</li><li>There is a Km limit of 150 km/daily, 1000 Km/weekly, and 3000 Km/monthly - Exceeding the Km Limit chargeable 5rs/km.</li></ol>', '66efbb2a3c7a2.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 11:42:50', '2024-09-22 11:42:50'),
(7, 'TR2412SEP24006', 'Bajaj', 'Bajaj Avenger', '2024', '260 CC', 'UP62SB9999', 'Sikendarabad Chowk', '1500', 'Day', '<p>Dealer Timings: <strong>09:00 AM</strong> - <strong>09:00 PM</strong></p><p>&nbsp;</p><h4>Deposit Terms</h4><p>Deposit Amount: <strong>Rs. 3,000</strong></p><ol><li>The Security Deposit is refundable after 24 hours once we receive the bike in proper condition.</li><li>You must submit proof of your original ID and a photocopy of your driving license.</li><li>There is a Km limit of 150 km/daily, 1000 Km/weekly, and 3000 Km/monthly - Exceeding the Km Limit chargeable 3rs/km.</li></ol>', '66f2c0b233171.png', 'Pending', 'TR24SUPADMIN', '2024-09-22 12:11:37', '2024-09-22 12:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `service_galleries`
--

CREATE TABLE `service_galleries` (
  `id` int(11) NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `service_id` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_galleries`
--

INSERT INTO `service_galleries` (`id`, `service_type`, `service_id`, `image`, `path`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(10, 'Bike', '5', '66efb3e463d74.png', '../uploaded_images/gallery/66efb3e463d74.png', 'active', 'TR24SUPADMIN', '2024-09-22 11:36:28', '2024-09-22 11:36:28'),
(11, 'Bike', '6', '66efb5a49248a.png', '../uploaded_images/gallery/66efb5a49248a.png', 'active', 'TR24SUPADMIN', '2024-09-22 11:43:56', '2024-09-22 11:43:56'),
(12, 'Bike', '6', '66efb5ae4a661.png', '../uploaded_images/gallery/66efb5ae4a661.png', 'active', 'TR24SUPADMIN', '2024-09-22 11:44:06', '2024-09-22 11:44:06'),
(13, 'Bike', '7', '66efbca136d16.png', '../uploaded_images/gallery/66efbca136d16.png', 'active', 'TR24SUPADMIN', '2024-09-22 12:13:45', '2024-09-22 12:13:45'),
(14, 'activity', '2', '66effba275d9c.png', '../uploaded_images/gallery/66effba275d9c.png', 'active', 'TR24SUPADMIN', '2024-09-22 04:42:34', '2024-09-22 04:42:34'),
(15, 'activity', '3', '66effce09a6ee.png', '../uploaded_images/gallery/66effce09a6ee.png', 'active', 'TR24SUPADMIN', '2024-09-22 04:47:52', '2024-09-22 04:47:52'),
(16, 'activity', '3', '66f1004faf6c0.png', '../uploaded_images/gallery/66f1004faf6c0.png', 'active', 'TR24SUPADMIN', '2024-09-23 11:14:47', '2024-09-23 11:14:47'),
(17, 'Trip', 'TR3', '66fbc2a39cd85.png', '../uploaded_images/gallery/66fbc2a39cd85.png', 'active', 'TR24SUPADMIN', '2024-10-01 03:06:35', '2024-10-01 03:06:35'),
(18, 'Trip', 'TR2', '66fbc6468a0d7.png', '../uploaded_images/gallery/66fbc6468a0d7.png', 'active', 'TR24SUPADMIN', '2024-10-01 03:22:06', '2024-10-01 03:22:06'),
(19, 'Bike', '7', '66fbc79d0062e.png', '../uploaded_images/gallery/66fbc79d0062e.png', 'active', 'TR24SUPADMIN', '2024-10-01 03:27:49', '2024-10-01 03:27:49'),
(20, 'activity', '18', '66fbc7ff390b2.png', '../uploaded_images/gallery/66fbc7ff390b2.png', 'active', 'TR24SUPADMIN', '2024-10-01 03:29:27', '2024-10-01 03:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_hotels`
--

CREATE TABLE `service_hotels` (
  `room_id` int(11) NOT NULL,
  `service_id` varchar(25) NOT NULL,
  `vendor_uid` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_unit` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_hotels`
--

INSERT INTO `service_hotels` (`room_id`, `service_id`, `vendor_uid`, `hotel_name`, `room_type`, `person`, `price`, `price_unit`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(2, '', 'TR2426NOV24013', 'sumit-luxury-hotel', 'Non AC - Mid Range', '15', '15', '', '<p>amenities</p>', 'Screenshot 2024-11-26 113751.png', 'active', 'admin', '2024-11-26 18:10:31', '2024-11-26 18:10:31'),
(3, '', 'TR2426NOV24013', 'sumit-luxury-hotel', 'Non AC - Mid Range', '15', '1500', 'per night', '<p>test3</p>', 'banner_6745c39220e700.19145654.png', 'active', 'admin', '2024-11-26 19:59:02', '2024-11-26 18:18:18'),
(4, '', 'TR2412SEP24004', 'ocean-luxuries-hotels-4-in-one', 'AC - Premium', '3', '1200', '', '<p>test</p>', 'hotelroom_678f704da7b1c4.28895746_png', 'active', 'admin', '2025-01-21 15:30:45', '2025-01-21 15:30:45'),
(5, '', 'TR2419SEP24007', 'beenod-enterprises      ', 'Non AC - Mid Range', '3', '800', 'per night', '<h4><strong>Room Amenities:</strong></h4><ul><li>&nbsp;Free High-Speed Wi-Fi</li><li>&nbsp;Smart TV with Streaming Services (Netflix, Prime Video, etc.)</li><li>&nbsp;Air Conditioning &amp; Heating System</li><li>&nbsp;Mini-Bar with Premium Drinks &amp; Snacks</li><li>&nbsp;Tea/Coffee Maker with Complimentary Supplies</li><li>&nbsp;Luxurious Bedding with Premium Linens</li><li>&nbsp;In-Room Safe for Valuables</li><li>&nbsp;Work Desk with Ergonomic Chair</li><li>&nbsp;Spacious Wardrobe &amp; Luggage Rack</li><li>&nbsp;Private Balcony (Selected Rooms)</li><li>&nbsp;Daily Housekeeping &amp; Turn-Down Service</li><li>&nbsp;24/7 Room Service</li></ul><h4><strong>Hotel Facilities:</strong></h4><p>âœ”ï¸ Multi-Cuisine Restaurant &amp; CafÃ©<br>âœ”ï¸ Rooftop Infinity Pool with Lounge Area<br>âœ”ï¸ Fully-Equipped Fitness Center<br>âœ”ï¸ Luxury Spa &amp; Wellness Center (Sauna, Jacuzzi, Massages)<br>âœ”ï¸ Conference &amp; Banquet Halls for Events<br>âœ”ï¸ Business Center with High-Speed Internet<br>âœ”ï¸ 24/7 Concierge &amp; Travel Desk<br>âœ”ï¸ Free Valet Parking &amp; Car Rental Service<br>âœ”ï¸ Kidsâ€™ Play Area &amp; Family-Friendly Zones<br>âœ”ï¸ Pet-Friendly Accommodations (on request)<br>âœ”ï¸ Private Beach Access (For Beach Resorts)<br>âœ”ï¸ Airport Shuttle &amp; Private Transfers</p>', 'hotelroom_678fee1d2f7496.35996601_png', 'active', 'admin', '2025-01-23 19:47:55', '2025-01-22 00:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `service_hotel_gallery`
--

CREATE TABLE `service_hotel_gallery` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_trip`
--

CREATE TABLE `service_trip` (
  `id` int(11) NOT NULL,
  `trip_id` varchar(100) NOT NULL,
  `vendor_uid` varchar(100) NOT NULL,
  `package_name` varchar(256) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `pickup_location` varchar(256) NOT NULL,
  `bookings_no` varchar(100) NOT NULL,
  `amenities` text NOT NULL,
  `banner` varchar(256) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_trip`
--

INSERT INTO `service_trip` (`id`, `trip_id`, `vendor_uid`, `package_name`, `duration`, `pickup_location`, `bookings_no`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(1, 'TR1', 'TR2412SEP24005', 'Manali Sight Seeing Tours', ' 4 Hrs', 'Manali', '2', '<p>Hadimba Devi Temple, Club House, Hot Water Spring Vashisht, Tibetan Monestary, Van Vihar, Mall Road.</p>', '66f0df2c83b26.png', 'active', 'TR24SUPADMIN', '2024-09-23 08:53:24', '2024-09-23 08:53:24'),
(2, 'TR2', 'TR2412SEP24005', 'Solang Valley with Atal Tunnel', '1 Day', 'Shimla', '5', '<ul><li>T &amp; C applyï¿½<br>&nbsp; &nbsp; &nbsp; &nbsp;its only fare charge</li><li>you have to spent your own money for..</li></ul>', '66f161d21004a.png', 'active', 'TR24SUPADMIN', '2024-09-23 06:10:50', '2024-09-23 06:10:50'),
(5, 'TR3', 'TR2411SEP24001', 'A Thrilling Snow Adventure in Manali', '5 Days and 4 Nights', 'Manali', '3', '<h2>A Thrilling Snow Adventure in Manali</h2><p>Embark on an exhilarating snow adventure in Manali, exploring the beautiful Solang Valley and experiencing activities like skiing, snowboarding, and cable car rides. Enjoy panoramic views of snow-capped peaks and indulge in the adrenaline rush as you navigate through the snowy terrains.</p><h3>Terms &amp; Conditions</h3><ul><li><strong>Booking Confirmation</strong>: All bookings are subject to availability and confirmed only upon receipt of a non-refundable deposit.</li><li><strong>Rental Vehicle Usage</strong>: The rented vehicles are to be used exclusively for the designated trip itinerary. Any additional use will incur extra charges.</li><li><strong>Driver Responsibilities</strong>: Vehicles rented with drivers are to be operated solely by the assigned driver. Self-driving is not permitted unless specified.</li><li><strong>Cancellation Policy</strong>: Cancellations made within 24 hours of the trip start date will be subject to a 50% cancellation fee.</li><li><strong>Vehicle Condition</strong>: The vehicle should be returned in the same condition as at the time of rental. Any damages will be charged to the renter.</li><li><strong>Safety Compliance</strong>: Customers must adhere to all local traffic rules and regulations. Any violation will be the responsibility of the renter.</li><li><strong>Fuel Policy</strong>: The rental includes a full tank of fuel. It is expected that the vehicle will be returned with the same amount of fuel. Any difference will be charged accordingly.</li><li><strong>Trip Amendments</strong>: Any changes to the trip itinerary must be communicated at least 48 hours prior to departure. Last-minute changes may not be accommodated.</li></ul>', '66fbc278d2e16.png', 'active', 'TR24SUPADMIN', '2024-10-01 03:05:52', '2024-10-01 03:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_trip_vehicles`
--

CREATE TABLE `service_trip_vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `banner` varchar(256) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_trip_vehicles`
--

INSERT INTO `service_trip_vehicles` (`id`, `name`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(1, ' Alto (4+1)', 'alto.png', 'active', 'db', '2024-09-22 8:10 PM', '2024-09-22 8:10 PM'),
(2, ' Swift Dzire, Hundai Aura (4+1)', 'swift.png', 'active', 'db', '2024-09-22 8:10 PM', '2024-09-22 8:10 PM'),
(3, 'Sumo (8+1) ', 'sumo.png', 'active', 'db', '2024-09-22 8:10 PM', '2024-09-22 8:10 PM'),
(4, 'Innova , Ertiga (6+1) & (7+1) ', 'innova.png', 'active', 'db', '2024-09-22 8:10 PM', '2024-09-22 8:10 PM'),
(5, ' Tempoo Traveller (12+1)', 'tampoo.png', 'active', 'db', '2024-09-22 8:10 PM', '2024-09-22 8:10 PM');

-- --------------------------------------------------------

--
-- Table structure for table `service_trip_vehicles_price`
--

CREATE TABLE `service_trip_vehicles_price` (
  `id` int(11) NOT NULL,
  `trip_id` varchar(100) NOT NULL,
  `vendor_uid` varchar(100) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_trip_vehicles_price`
--

INSERT INTO `service_trip_vehicles_price` (`id`, `trip_id`, `vendor_uid`, `vehicle_id`, `price`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(2, 'TR1', 'TR2412SEP24005', 1, '1600', 'Active', 'TR24SUPADMIN', '2024-09-23 08:53:24', '2024-09-23 08:53:24'),
(3, 'TR1', 'TR2412SEP24005', 2, '2000', 'Active', 'TR24SUPADMIN', '2024-09-23 08:53:24', '2024-09-23 08:53:24'),
(4, 'TR1', 'TR2412SEP24005', 3, '2500', 'Active', 'TR24SUPADMIN', '2024-09-23 08:53:24', '2024-09-23 08:53:24'),
(5, 'TR2', 'TR2412SEP24005', 4, '1500', 'Active', 'TR24SUPADMIN', '2024-09-23 06:10:50', '2024-09-23 06:10:50'),
(6, 'TR2', 'TR2412SEP24005', 2, '1800', 'Active', 'TR24SUPADMIN', '2024-09-23 06:10:50', '2024-09-23 06:10:50'),
(7, 'TR2', 'TR2412SEP24005', 5, '2000', 'Active', 'TR24SUPADMIN', '2024-09-23 06:10:50', '2024-09-23 06:10:50'),
(8, 'TR2', 'TR2412SEP24005', 3, '3000', 'Active', 'TR24SUPADMIN', '2024-09-23 06:10:50', '2024-09-23 06:10:50'),
(12, 'TR1', 'TR2412SEP24005', 5, '3199', 'Active', 'TR24SUPADMIN', '2024-09-24 08:30:09', '2024-09-24 08:30:09'),
(14, 'TR3', 'TR2411SEP24001', 2, '2000', 'Active', 'TR24SUPADMIN', '2024-10-01 03:05:52', '2024-10-01 03:05:52'),
(15, 'TR3', 'TR2411SEP24001', 5, '1800', 'Active', 'TR24SUPADMIN', '2024-10-01 03:05:52', '2024-10-01 03:05:52'),
(16, 'TR3', 'TR2411SEP24001', 4, '3000', 'Active', 'TR24SUPADMIN', '2024-10-01 03:05:52', '2024-10-01 03:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `service_image` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `service_name`, `service_image`, `status`, `updated_at`, `updated_by`, `created_at`) VALUES
(1, 'Hotel', 'https://work.perceptionvita.in/trip24ui/icons/building.png', 'active', '2024-09-11 08:41:37', 'db', '2024-09-11 08:41:37'),
(2, 'Bike', 'https://work.perceptionvita.in/trip24ui/icons/motorcycle.png', 'active', '2024-09-11 08:41:37', 'db', '2024-09-11 08:41:37'),
(3, 'Trip', 'https://work.perceptionvita.in/trip24ui/icons/transport.png', 'active', '2024-09-11 08:44:03', 'db', '2024-09-11 08:44:03'),
(4, 'Bus', 'https://work.perceptionvita.in/trip24ui/icons/bus-stop.png', 'active', '2024-09-11 08:44:03', 'db', '2024-09-11 08:44:03'),
(5, 'Activity', 'https://work.perceptionvita.in/trip24ui/icons/paragliding.png', 'active', '2024-09-11 08:44:03', 'db', '2024-09-11 08:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `trip_booking`
--

CREATE TABLE `trip_booking` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `trip_id` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `booking_time` varchar(255) NOT NULL,
  `tour_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trip_booking`
--

INSERT INTO `trip_booking` (`id`, `user_id`, `trip_id`, `vehicle`, `status`, `total_cost`, `booking_time`, `tour_date`) VALUES
(1, '5', 'TR1', '3', 'Pending', '2000', '01-02-2025 01:44:41', ''),
(2, '5', '4', '16', 'Pending', '3000', '01-02-2025 01:48:26', ''),
(3, '5', '4', '16', 'Pending', '3000', '01-02-2025 01:52:41', ''),
(4, '5', '4', '16', 'Pending', '3000', '01-02-2025 01:53:15', ''),
(5, '5', '4', '16', 'Pending', '3000', '01-02-2025 01:53:37', ''),
(6, '5', '5', '15', 'Pending', '1800', '01-02-2025 02:07:25', ''),
(7, '5', '1', '2', 'Pending', '1600', '01-02-2025 02:13:31', '2025-02-07'),
(8, '5', '1', '2', 'Pending', '1600', '01-02-2025 09:51:18', '2025-02-05'),
(9, '5', '1', '3', 'Pending', '2000', '03-02-2025 01:47:12', '2025-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'd', 'd@d.c', '8', '$2y$10$0PY8Av4GZ2OhxCk5EHlaHObI4JYaxrfMcSp.fiwHMak', 'active', '2024-11-27 20:19:02', '2024-11-27 20:19:02'),
(4, 'Varun', 'thepvtechs@gmail.com', '1425142', '$2y$10$aSxH6r0otD3/oNGuyVYMZuwk/s19B/htCRQ.2GVWMl7', 'active', '2024-11-27 21:07:15', '2024-11-27 21:07:15'),
(5, 'Varun Kumar', 'test@gmail.com', '9879879870', '$2y$10$yaFy7DhP7Bd/yTxqWMLFX.OrMFjlMH1lkn0.9fwzcWZIDbBQBFYs6', 'active', '2024-11-27 22:46:40', '2024-11-27 22:46:40'),
(6, 'Sumit Kumar', 'sumit@gmail.com', '9876549870', '$2y$10$Qb1HsE4GT1GVzxHfvcj0lOVGAR.LzLO6mqGlvgrU6mfn7Ot08ksTq', 'active', '2024-12-08 18:56:20', '2024-12-08 18:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `vendor_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `aadhar_no` varchar(16) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `front_aadhar` varchar(256) NOT NULL,
  `back_aadhar` varchar(256) NOT NULL,
  `business_name` varchar(256) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `gst_certificate` varchar(256) NOT NULL,
  `other_certificate` varchar(256) NOT NULL,
  `updated_by` varchar(256) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `uid`, `vendor_name`, `father_name`, `gender`, `aadhar_no`, `mobile_no`, `email_id`, `password`, `front_aadhar`, `back_aadhar`, `business_name`, `gst_no`, `registration_date`, `address`, `city`, `district`, `state`, `pincode`, `gst_certificate`, `other_certificate`, `updated_by`, `updated_at`, `created_at`) VALUES
(2, 'TR2411SEP24001', 'Beenod Kumar', 'Sohan Das', 'Male', '9874560016500', '', '', '$2y$10$C1WY6PHjx34OQHDg/koSCOXupLloN4j0l3ailEeVPgVPAMIfCAdBS', '66e18bab458cb.png', '66e18bab458cd.png', 'Beenod Toor & Travels', '', '2024-09-04', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', '', '66e18bab458ce.png', '', 'TR24SUPADMIN', '2024-09-11 05:53:07', '0000-00-00 00:00:00'),
(3, 'TR2412SEP24002', 'Ram Kumar', 'Sohan Das', 'Male', '9874560016500', '', '', '$2y$10$qNTuBHjIOm6vJcVSqRG3m.bVyzZ8NoErG/I.CUg8julAyBS13yNBq', '66e24a9893eaa.png', '66e24a9893eac.png', 'Ramesh Enterprises', '', '2018-05-19', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', '', '66e24a9893ead.png', '66e24a9893eae.png', 'TR24SUPADMIN', '2024-09-12 07:27:44', '2024-09-12 07:27:44'),
(4, 'TR2412SEP24003', 'Beenod Kumar2', 'Sohan Das2', 'Male', '9874560016500', '8787008787', 'beenod123@gmail.com', '$2y$10$cen57zWGjuHTMI4DMTR3A.wthqIz.ye7GJtN9q6tsjlEHeRjIhMzm', '66e24d22272ff.png', '66e24d2227302.png', 'Beenod Toor & Travels2', 'BXYZE548YUO1', '2024-09-04', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', '', '66e24d2227303.png', '66e24d222730b.png', 'TR24SUPADMIN', '2024-09-12 07:38:34', '2024-09-12 07:38:34'),
(5, 'TR2412SEP24004', 'Beenod Kumar', 'Sohan Das', 'Male', '9874560016500', '8787008787', 'beenod123@gmail.com', '$2y$10$rgPqhc4ksyodIjrcaG8ZKOV6fjb0uJwj7bfbzoLX4FF5rxOTNLA7e', '66e2540d50b7e.png', '66e2540d50b82.png', 'Beenod Toor & Travels', 'BXYZE548YUO1', '2024-09-03', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', '27302201', '66e2540d50b83.png', '66e2540d50b85.png', 'TR24SUPADMIN', '2024-09-12 08:08:05', '2024-09-12 08:08:05'),
(6, 'TR2412SEP24005', 'Rohit', 'Ramesh ', 'Male', '456123789', '8880001234', 'rohit@gmail.com', '$2y$10$bQv6UWvwt1bJlKhzt7uEV.C2IDUtFh.slRnasgcFDOw2oiCD88dxq', '66e264bb9c019.png', '66e264bb9c01c.png', 'Rohit Travels', 'KR4598700GT120', '2020-01-28', 'in front of PNB Bank , Sector 6', 'Noida', 'Noida', 'UP', '201301', '66e264bb9c01d.png', '66e264bb9c01e.png', 'TR24SUPADMIN', '2024-11-27 06:39:19', '2024-09-12 09:19:15'),
(7, 'TR2412SEP24006', 'Beenod Kumarr', 'Feenod Kumar', 'Other', '69696969696', '696969696969', 'thepvtechs@gmail.com', '$2y$10$a3BH9xDEAvtbZ92pM9L/o.iELI0Y2M71jLND3u7Ok2CROiN6zFR5K', '66e27d154471c.png', '66e27d1544720.png', 'Beenod Burger King', '4588GDFD55555', '2009-01-01', 'Near India Gate, Meena Road', 'New Delhi', 'New Delhi', 'Delhi', '889950', '66e27d1544721.png', '66e27d1544722.png', 'TR24SUPADMIN', '2024-11-25 10:45:12', '2024-09-12 11:03:09'),
(8, 'TR2419SEP24007', 'Beenood ', 'Rohan ', 'Male', '789456123', '8900890000', 'the.beenod0011@gmail.com', '$2y$10$HnntM6lVZIaIftl9yHYJc.TYD5MlYoGhcz.zzY4xOeK3dBjLVvmuC', '66ebc70fac40d.png', '66ebc735e7ec1.png', 'Beenod Enterprises', '11149AXGY45GY0', '2016-01-13', 'Gandhi Gali Gorakhpur', 'Golghar', 'Gorakhpur', 'UP', '2730012', '66ebc69449dcd.png', '', 'TR24SUPADMIN', '2024-09-19 12:09:49', '2024-09-19 11:13:32'),
(9, 'TR2419SEP24008', 'Ravindra', 'Surendra', 'Male', '7894561230', '7894561230', 'the.beenod0011@gmail.com', '$2y$10$zkb36oT7RljxELRzqWQlAOxX2Jpo4qGUn1ylDC4LnlsAFnWeUv7ES', '66ebc8430cd39.png', '66ebc8430ecf4.png', 'Ravindra Enterprises', '45521145GSTGGJ1', '2018-01-01', 'gkp', 'gkp', 'gkp', 'gkp', '2733301', '66ebc84311334.png', '', 'TR24SUPADMIN', '2024-09-19 12:14:19', '2024-09-19 12:14:19'),
(10, 'TR2419SEP24009', 'Manish Sharma', 'Sonu Sharma', 'Male', '987456123', '123', 'mansih@gmail.com', '$2y$10$LuESRZHxfjyQCa3qx751k.iwmYt4R964qCyFxROSH6tz7svrxpK36', '66ebca1516011.png', '66ebc9e45adde.png', 'Manish Enterprises', 'abc', '2019-01-01', 'abc', 'ac', 'acf', 'ac', '123456', '66ebc9e45cc1d.png', '', 'TR24SUPADMIN', '2024-09-19 12:22:05', '2024-09-19 12:21:16'),
(11, 'TR2421SEP24010', 'Saurav Kumar', 'Rohan', 'Male', '7894561232', '08981761000', 'kundankumar07111994@gmail.com', '$2y$10$WGum7TctvmbWi0WXVBUdTOTqkAnFA89UjNfqPBp8n7XbW3SplEpYW', '66ee30fb14008.png', '66ee30fb1643a.png', 'Kerala State Enterprises', '', '', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', '', 'Bihar', '800002', '66ee30fb18832.png', '', 'TR24SUPADMIN', '2024-09-21 08:05:39', '2024-09-21 08:05:39'),
(12, 'TR2421SEP24011', 'Saurav Kumar', 'Rohan', 'Male', '7894561232', '08981761000', 'kundankumar07111994@gmail.com', '$2y$10$09gF1ugtvUHo/wNmv/TSVOcYbQJC9NwVM/goQukjU0SgmV5hnXt5G', '66ee31d8863ef.png', '66ee31d887d5a.png', 'Kerala State Enterprises', '', '', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', '', 'Bihar', '800002', '66ee31d889bf4.png', '', 'TR24SUPADMIN', '2024-09-21 08:09:20', '2024-09-21 08:09:20'),
(13, 'TR2421SEP24012', 'Sonu Rajput2', 'Mohan Singh', 'Male', '878700414178', '9797009797', 'user@gmail.com', '$2y$10$kjIFR6Pty99TeEDPCg4AkePGcIq4ysHWHuVDn5WPCJaM2d6m8VSBq', '66ee33ac76ea2.png', '66ee33ac79053.png', 'Sonu Enterprises', '1254124GSTAXLP45', '2015-12-11', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttarï¿½Pradesh', '201301', '66ee33ac7b72c.png', '', 'TR24SUPADMIN', '2024-12-09 06:36:59', '2024-09-21 08:17:08'),
(14, 'TR2426NOV24013', 'Mohit Kumar', 'Sohit Kumar', 'Male', '84758475', '84758475', 'mohitkk@gmail.com', '$2y$10$xMbtiwyKUfBeTzBnMMhFwOM6L33LAwO5C.PMp2QxpZ/ha9n3Js4xa', '67456288c46e0.png', '67456288c8572.png', 'Sumit Shop', '847455', '2002-01-01', 'somewhere', '4', '4', '5', '4', '67456288cbce9.png', '', 'TR24SUPADMIN', '2024-11-26 21:04:58', '2024-11-26 05:54:16'),
(15, 'TR2419DEC24014', 'Varun Kumar', 'Sohan Kumar', 'Male', '780078007800', '8500085000', 'varunkumar@gmail.com', '$2y$10$jUpiJVFWN1UoCC0SkGFLve4Cn2LtmYKlFtP/cBXRou4wnnjd91IXG', '67642a9693e59.png', '67642a969434a.png', 'Blumer Trips', 'GST84008400', '2024-12-19', 'Sector 45, Green Tower', '', 'Noida', 'UP', '275000', '67642a9694683.png', '', 'TR24SUPADMIN', '2024-12-19 02:15:50', '2024-12-19 02:15:50'),
(16, 'TR2428DEC24015', 'Happy sharma', 'Rajesh Sharma', 'Female', '789456123', '789456123', 'Happy@gmail.com', '$2y$10$Cubuke/Ep4iqVzbXBqwDveQQZ7rJAwY9qJuF5vD3UkX1MGfIy0ZqS', '67704078daca8.png', '67704078dc7cc.png', 'Rajesh textlie', '46597911326', '2024-12-27', 'gol ghar road', 'deoria', 'deoria', 'uttar pardesh', '2789411', '67704078dde1a.png', '', 'TR24SUPADMIN', '2024-12-28 06:16:24', '2024-12-28 06:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_service`
--

CREATE TABLE `vendor_service` (
  `id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `vendor_uid` varchar(100) NOT NULL,
  `service_name` varchar(256) NOT NULL,
  `service_no` varchar(16) NOT NULL,
  `service_email` varchar(256) NOT NULL,
  `service_address` text NOT NULL,
  `service_city` varchar(100) NOT NULL,
  `service_district` varchar(100) NOT NULL,
  `service_state` varchar(100) NOT NULL,
  `service_pincode` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_by` varchar(256) NOT NULL,
  `updated_at` varchar(256) NOT NULL,
  `created_at` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_service`
--

INSERT INTO `vendor_service` (`id`, `service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`, `created_at`) VALUES
(2, 'Hotel', 'TR2411SEP24001', 'Ocean Luxuries Hotels 4 in one', '1200001800', 'book@hotel.com', 'hotelAddress', 'hotelcity', 'hoteldis', 'hotelstate', 111111, 'active', 'TR24SUPADMIN', '2024-09-11 05:53:07', ''),
(3, 'Trip', 'TR2411SEP24001', 'Beenod Toor & Travels', '2222', 'trip@gmail.com', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', 27302201, 'active', 'TR24SUPADMIN', '2024-09-11 05:53:07', ''),
(4, 'Hotel', 'TR2412SEP24002', 'Ocean Luxuries Hotels 4 in one2', '12000018002', 'book@hotel.com2', '2Hotel Address', 'hotel city2', 'hotel district2', 'hotel state2', 1111112, 'active', 'TR24SUPADMIN', '2024-09-21 08:37:36', '2024-09-12 07:27:44'),
(5, 'Bus', 'TR2412SEP24002', 'Ramesh Enterprises bus', '222222', 'ramesh@bus.com', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', 222222, 'active', 'TR24SUPADMIN', '2024-09-12 07:27:44', '2024-09-12 07:27:44'),
(6, 'Bike', 'TR2412SEP24002', 'Ramesh Enterprises bike', '3333333', 'bike@gmail.com', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', 33333, 'active', 'TR24SUPADMIN', '2024-09-12 07:27:44', '2024-09-12 07:27:44'),
(7, 'Trip', 'TR2412SEP24002', 'Ramesh Enterprises trip', '4444444', 'trip@gmail.com', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', 44444, 'active', 'TR24SUPADMIN', '2024-09-12 07:27:44', '2024-09-12 07:27:44'),
(8, 'Activity', 'TR2412SEP24002', 'Ramesh Enterprises', '55555', 'activity@gmail.com', 'Noida Sector 5', 'Sector 5', 'Noida', 'Uttar Pradesh', 6666, 'active', 'TR24SUPADMIN', '2024-09-12 07:27:44', '2024-09-12 07:27:44'),
(9, 'Hotel', 'TR2412SEP24004', 'Ocean Luxuries Hotels 4 in one', '1200001800', 'book@hotel.com', 'hoteladdress', 'city', 'dist', 'state', 123, 'active', 'TR24SUPADMIN', '2024-09-12 08:08:05', '2024-09-12 08:08:05'),
(10, 'Hotel', 'TR2412SEP24005', 'Rohit Travels1', '12000018001', 'rohithotel@hotel.com1', '1in front of PNB Bank , Sector 6', 'Noida1', 'Noida1', 'UP1', 2013011, 'active', 'TR24SUPADMIN', '2024-09-21 07:59:33', '2024-09-12 09:19:15'),
(11, 'Bike', 'TR2412SEP24005', 'Rohit Travels 1', '12000018001', 'rohitbike1@gmail.com', 'in front of PNB Bank , Sector 61', 'Noida1', 'Noida1', 'UP1', 2013011, 'active', 'TR24SUPADMIN', '2024-09-21 07:56:47', '2024-09-12 09:19:15'),
(12, 'Trip', 'TR2412SEP24005', 'Rohit Travels', '9870000981', 'rohittrip2@gmail.com', 'in front of PNB Bank , Sector 7', 'Noida 5', 'Noida 5', 'UP2', 2013010, 'active', 'TR24SUPADMIN', '2024-09-21 07:36:51', '2024-09-12 09:19:15'),
(13, 'Bike', 'TR2412SEP24006', 'Beenod Burger King', '8848488488', 'beenodburger@gmail.com', 'Near India Gate, Meena Road', 'New Delhi', 'New Delhi', 'Delhi', 889950, 'active', 'TR24SUPADMIN', '2024-09-12 11:03:09', '2024-09-12 11:03:09'),
(14, 'Hotel', 'TR2419SEP24007', 'Beenod Enterprises', '1200001800', 'book@hotel.com', 'Gandhi Gali Gorakhpur', 'Golghar', 'Gorakhpur', 'UP', 273001, 'active', 'TR24SUPADMIN', '2024-09-19 11:13:32', '2024-09-19 11:13:32'),
(16, 'Bike', 'TR2419SEP24008', 'Ravindra Enterprises', '123', 'ok@gmail.com', 'gkp', 'gkp', 'gkp', 'gkp', 2733301, 'active', 'TR24SUPADMIN', '2024-09-19 12:14:19', '2024-09-19 12:14:19'),
(17, 'Trip', 'TR2419SEP24009', 'Manish Enterprises', '123', 'manish@gmail.com', 'abc', 'ac', 'acf', 'ac', 123456, 'active', 'TR24SUPADMIN', '2024-09-19 12:21:16', '2024-09-19 12:21:16'),
(20, 'Bus', 'TR2421SEP24010', 'Kerala State Enterprises Bus', '1800180000', 'bus@gmail.com', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', 'patna', 'Bihar', 800002, 'active', 'TR24SUPADMIN', '2024-09-21 08:05:39', '2024-09-21 08:05:39'),
(21, 'Activity', 'TR2421SEP24010', 'Kerala State Enterprises Activity', '18001800140', 'activity@gmail.comf', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', 'actdist', 'Bihar', 800002, 'active', 'TR24SUPADMIN', '2024-09-21 08:05:39', '2024-09-21 08:05:39'),
(22, 'Bus', 'TR2421SEP24011', 'Kerala State Enterprises Bus', '1800180000', 'bus@gmail.com', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', 'patna', 'Bihar', 800002, 'active', 'TR24SUPADMIN', '2024-09-21 08:09:20', '2024-09-21 08:09:20'),
(23, 'Activity', 'TR2421SEP24011', 'Kerala State Enterprises Activity', '18001800140', 'activity@gmail.comf', 'Mahadev Bihar Colony Near Beur Akhada', 'Patna', 'actdist', 'Bihar', 800002, 'active', 'TR24SUPADMIN', '2024-09-21 08:09:20', '2024-09-21 08:09:20'),
(24, 'Hotel', 'TR2421SEP24012', 'Sonu Hotels', '1200001800', 'book@hotel.com', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttar Pradesh', 201301, 'active', 'TR24SUPADMIN', '2024-09-21 08:18:34', '2024-09-21 08:17:08'),
(25, 'Bus', 'TR2421SEP24012', 'Sonu Bus Service', '123', 'bus@gmail.com', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttarï¿½Pradesh', 201301, 'active', 'TR24SUPADMIN', '2024-11-27 02:38:12', '2024-09-21 08:17:08'),
(26, 'Bike', 'TR2421SEP24012', 'Sonu Enterprises bike', '123', 'bike@gmail.com', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttar Pradesh', 201301, 'active', 'TR24SUPADMIN', '2024-09-21 08:18:20', '2024-09-21 08:17:08'),
(27, 'Trip', 'TR2421SEP24012', 'Sonu Trips', '123', 'trip@gmail.com', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttar Pradesh', 201301, 'active', 'TR24SUPADMIN', '2024-09-21 08:17:08', '2024-09-21 08:17:08'),
(28, 'Activity', 'TR2421SEP24012', 'Sonu Enterprises', '456', 'activity@gmail.comf', 'Noida Sector 5\r\nNoida', 'Noida', 'Noida', 'Uttar Pradesh', 201301, 'inactive', 'TR24SUPADMIN', '2024-09-21 08:17:08', '2024-09-21 08:17:08'),
(31, 'Activity', 'TR2412SEP24003', 'Beenod Paragliding', '1800', 'as@g.in', 'gkp', 'gkp2', 'gkp3', 'up', 123, 'active', 'TR24SUPADMIN', '2024-09-21 10:22:52', '2024-09-21 10:09:08'),
(32, 'Bus', 'TR2412SEP24003', 'Beenod Bus', '1800', 'bus@gmailc.o', 'gkp', 'gkp', '123', '123', 123, 'active', 'TR24SUPADMIN', '2024-09-21 10:12:43', '2024-09-21 10:12:43'),
(33, 'Hotel', 'TR2412SEP24003', 'Beenod Hotel 23', '123', 'hoe@g.in', 'gkp', 'ci', 'di', 'up', 23, 'active', 'TR24SUPADMIN', '2024-09-21 10:22:38', '2024-09-21 10:22:38'),
(34, 'Bike', 'TR2412SEP24003', 'Beenod Bike', '123', 'bik@gmail.comf', 'gkp', 'gkp', 'gkp', 'up', 123, 'active', 'TR24SUPADMIN', '2024-09-23 11:06:22', '2024-09-23 11:06:22'),
(35, 'Hotel', 'TR2426NOV24013', 'Sumit Luxury Hotel', '8444475888', 'book@hotel.com', 'somewhere', 'here', 'hered', 'here st', 84444, 'active', 'TR24SUPADMIN', '2024-11-26 01:00:01', '2024-11-26 11:24:16'),
(36, 'Bus', 'TR2426NOV24013', 'Sumit Shop', '845', 'ddd@mai.co', 'somewhere', '8', '8', '5', 5, 'active', 'TR24SUPADMIN', '2024-11-26 11:24:16', '2024-11-26 11:24:16'),
(37, 'Trip', 'TR2419DEC24014', 'Blumer Trips', '7800078000', 'contact@blumertrips.com', 'Sector 45, Green Tower', '', 'Noida', 'UP', 275000, 'active', 'TR24SUPADMIN', '2024-12-19 07:45:50', '2024-12-19 07:45:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `24Trip_imp`
--
ALTER TABLE `24Trip_imp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_booking`
--
ALTER TABLE `activity_booking`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `admintrip24`
--
ALTER TABLE `admintrip24`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_booking`
--
ALTER TABLE `bike_booking`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `bike_id` (`bike_id`),
  ADD KEY `start_date` (`start_date`,`end_date`);

--
-- Indexes for table `service_activities`
--
ALTER TABLE `service_activities`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `vendor_uid` (`vendor_uid`);

--
-- Indexes for table `service_bikes`
--
ALTER TABLE `service_bikes`
  ADD PRIMARY KEY (`bike_id`),
  ADD KEY `vendor_uid` (`vendor_uid`);

--
-- Indexes for table `service_galleries`
--
ALTER TABLE `service_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_hotels`
--
ALTER TABLE `service_hotels`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `service_hotel_gallery`
--
ALTER TABLE `service_hotel_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `service_trip`
--
ALTER TABLE `service_trip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `service_trip_vehicles`
--
ALTER TABLE `service_trip_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_trip_vehicles_price`
--
ALTER TABLE `service_trip_vehicles_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_booking`
--
ALTER TABLE `trip_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `vendor_service`
--
ALTER TABLE `vendor_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_type_id` (`service_type`),
  ADD KEY `vendor_uid` (`vendor_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `24Trip_imp`
--
ALTER TABLE `24Trip_imp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `activity_booking`
--
ALTER TABLE `activity_booking`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admintrip24`
--
ALTER TABLE `admintrip24`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bike_booking`
--
ALTER TABLE `bike_booking`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service_activities`
--
ALTER TABLE `service_activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_bikes`
--
ALTER TABLE `service_bikes`
  MODIFY `bike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_galleries`
--
ALTER TABLE `service_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_hotels`
--
ALTER TABLE `service_hotels`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_hotel_gallery`
--
ALTER TABLE `service_hotel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_trip`
--
ALTER TABLE `service_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_trip_vehicles`
--
ALTER TABLE `service_trip_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_trip_vehicles_price`
--
ALTER TABLE `service_trip_vehicles_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip_booking`
--
ALTER TABLE `trip_booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendor_service`
--
ALTER TABLE `vendor_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_booking`
--
ALTER TABLE `activity_booking`
  ADD CONSTRAINT `activity_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `bike_booking`
--
ALTER TABLE `bike_booking`
  ADD CONSTRAINT `bike_booking_ibfk_2` FOREIGN KEY (`bike_id`) REFERENCES `service_bikes` (`bike_id`) ON DELETE CASCADE;

--
-- Constraints for table `service_activities`
--
ALTER TABLE `service_activities`
  ADD CONSTRAINT `service_activities_ibfk_1` FOREIGN KEY (`vendor_uid`) REFERENCES `vendor` (`uid`);

--
-- Constraints for table `service_bikes`
--
ALTER TABLE `service_bikes`
  ADD CONSTRAINT `service_bikes_ibfk_1` FOREIGN KEY (`vendor_uid`) REFERENCES `vendor` (`uid`);

--
-- Constraints for table `service_hotel_gallery`
--
ALTER TABLE `service_hotel_gallery`
  ADD CONSTRAINT `hotel_id` FOREIGN KEY (`hotel_id`) REFERENCES `service_hotels` (`room_id`);

--
-- Constraints for table `vendor_service`
--
ALTER TABLE `vendor_service`
  ADD CONSTRAINT `vendor_uid` FOREIGN KEY (`vendor_uid`) REFERENCES `vendor` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
