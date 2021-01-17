-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2020 at 11:44 AM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `remark`, `type`, `cat_icon`, `created_date`, `modified_date`) VALUES
(2, 'Desktop', 'Hp, Dell, Asus', 'Item Type', 'desktop-solid.svg', '2020-11-09 13:05:48', '2020-11-13 01:02:08'),
(3, 'Accessories', 'Monitor, gaming, network ', 'Item Type', 'keyboard-regular.svg', '2020-11-09 13:06:47', '2020-11-13 14:47:45'),
(5, 'Hp', 'Brand', 'Brand', 'hp_50px.svg', '2020-11-09 21:04:45', '2020-11-13 14:48:11'),
(6, 'Dell', 'Brand', 'Brand', 'dell_50px.svg', '2020-11-09 21:05:12', '2020-11-13 14:48:20'),
(7, 'Asus', 'Brand', 'Brand', 'ASUS_Logo.svg', '2020-11-09 21:05:40', '2020-11-13 14:48:37'),
(20, 'Laptop', 'Hp, Dell, Asus', 'Item Type', 'laptop-solid.svg', '2020-11-11 11:42:10', '2020-11-13 14:49:53'),
(21, '13 inch', 'Hp, Dell, Asus', 'Screen Size', 'laptop-solid.svg', '2020-11-11 11:43:50', '2020-11-13 14:55:30'),
(22, '14 inch', 'Hp, Dell, Asus', 'Screen Size', 'laptop-solid.svg', '2020-11-11 11:44:13', '2020-11-13 14:55:23'),
(23, '15 inch', 'Hp, Dell, Asus', 'Screen Size', 'laptop-solid.svg', '2020-11-11 11:44:34', '2020-11-13 14:55:15'),
(24, '17 inch', 'Hp, Dell, Asus', 'Screen Size', 'laptop-solid.svg', '2020-11-11 11:45:03', '2020-11-13 14:55:56'),
(26, 'Intel Pentium', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:55:21', '2020-11-13 14:57:10'),
(27, 'Intel Core i3', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:56:04', '2020-11-13 14:57:27'),
(28, 'Intel Core i5', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:56:26', '2020-11-13 14:57:44'),
(29, 'Intel Core i7', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:57:21', '2020-11-13 14:58:06'),
(30, 'Intel Core i7 K Series', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:57:51', '2020-11-13 14:58:31'),
(31, 'Intel Core i9', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:58:17', '2020-11-13 14:58:45'),
(32, ' Intel Core i9 K Series', 'Intel', 'Processor', 'processor.svg', '2020-11-11 11:58:39', '2020-11-13 14:58:58'),
(33, 'AMD Ryzen 3', 'AMD', 'Processor', 'processor_blue.svg', '2020-11-11 11:59:32', '2020-11-13 14:59:14'),
(34, 'AMD Ryzen 5', 'AMD ', 'Processor', 'processor_blue.svg', '2020-11-11 12:00:01', '2020-11-13 14:59:28'),
(35, 'AMD Ryzen 7', 'AMD', 'Processor', 'processor_blue.svg', '2020-11-11 12:00:18', '2020-11-13 14:59:36'),
(36, 'AMD Ryzen TM', 'AMD', 'Processor', 'processor_blue.svg', '2020-11-11 12:01:21', '2020-11-13 14:59:48'),
(37, 'AMD ', 'AMD ', 'Processor', 'processor_blue.svg', '2020-11-11 12:01:47', '2020-11-13 15:00:04'),
(38, 'Price Under $500', 'Price', 'Price Range', 'cash.svg', '2020-11-11 12:06:39', '2020-11-13 15:06:09'),
(39, 'Price $500 to $800', 'Price', 'Price Range', 'cash.svg', '2020-11-11 12:07:36', '2020-11-13 15:06:21'),
(40, 'Price Above $800 ', 'Price', 'Price Range', 'cash.svg', '2020-11-11 12:08:53', '2020-11-13 15:06:33'),
(41, '4GB RAM', 'RAM', 'RAM Size', 'memory_slot.svg', '2020-11-11 12:11:12', '2020-11-13 15:10:10'),
(42, '8GB RAM', 'RAM', 'RAM Size', 'memory_slot.svg', '2020-11-11 12:11:31', '2020-11-13 15:10:23'),
(43, '12GB RAM', 'RAM', 'RAM Size', 'memory_slot.svg', '2020-11-11 12:11:50', '2020-11-13 15:10:33'),
(44, '16GB RAM', 'RAM', 'RAM Size', 'memory_slot.svg', '2020-11-11 12:12:16', '2020-11-13 15:10:43'),
(45, '32GB or More', 'RAM', 'RAM Size', 'memory_slot.svg', '2020-11-11 12:12:47', '2020-11-13 15:14:54'),
(46, 'SSD', 'Storage Type', 'Storage Type', 'hdd.svg', '2020-11-11 12:15:17', '2020-11-13 15:12:00'),
(47, 'HDD', 'Storage Type', 'Storage Type', 'hdd.svg', '2020-11-11 12:15:47', '2020-11-13 15:12:08'),
(48, 'Duel Both SSD & HDD', 'Storage Type', 'Storage Type', 'hdd.svg', '2020-11-11 12:16:33', '2020-11-13 15:12:18'),
(49, 'Up to 256GB', 'Storage Size', 'Storage Range', 'hdd_size.svg', '2020-11-11 12:18:57', '2020-11-13 15:13:41'),
(50, '256GB to 512GB', 'Storage Size', 'Storage Range', 'hdd_size.svg', '2020-11-11 12:19:37', '2020-11-13 15:13:53'),
(51, '1 TB or More', 'Storage Size', 'Storage Range', 'hdd_size.svg', '2020-11-11 12:20:12', '2020-11-13 15:14:02'),
(52, 'Non-touch Screen', 'Touch Screen', 'Touch Screen', 'touchscreen.svg', '2020-11-11 12:22:32', '2020-11-13 15:14:12'),
(53, 'Touch Screen', 'Touch Screen', 'Touch Screen', 'touchscreen.svg', '2020-11-11 12:22:45', '2020-11-13 15:14:21'),
(54, 'HD', 'Resolution', 'Resolution', 'resolution.svg', '2020-11-13 15:23:06', '2020-11-13 15:23:06'),
(55, 'FHD', 'Resolution', 'Resolution', 'resolution.svg', '2020-11-13 15:23:37', '2020-11-13 15:23:37'),
(56, '4K', 'Resolution', 'Resolution', 'resolution.svg', '2020-11-13 15:24:01', '2020-11-13 15:24:01'),
(57, 'Integrated', 'Graphic Card', 'Graphics Card', 'Network Card.svg', '2020-11-14 14:03:37', '2020-11-14 14:03:37'),
(58, 'NVIDIA', 'Graphic Card', 'Graphics Card', 'Network Card.svg', '2020-11-14 14:04:24', '2020-11-14 14:04:24'),
(59, 'AMD', 'Graphic Card', 'Graphics Card', 'Network Card.svg', '2020-11-14 14:05:15', '2020-11-14 14:05:15'),
(60, 'Yes', 'Backlit Keyboard', 'Backlit Keyboard', 'keyboard-regular.svg', '2020-11-14 14:40:26', '2020-11-14 14:40:26'),
(61, 'No', 'Backlit keyboard', 'Backlit Keyboard', 'keyboard-regular.svg', '2020-11-14 14:41:00', '2020-11-14 14:41:00'),
(62, 'Intel Celeron', 'Processor', 'Processor', 'processor.svg', '2020-11-18 23:02:59', '2020-11-18 23:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `price_range` varchar(255) NOT NULL,
  `window` varchar(255) NOT NULL,
  `ram_size` varchar(255) NOT NULL,
  `ram_tech` varchar(255) NOT NULL,
  `ram_speed` varchar(255) NOT NULL,
  `storage_type` varchar(255) NOT NULL,
  `storage_range` varchar(255) NOT NULL,
  `storage_full_info` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `processor_generation` varchar(255) NOT NULL,
  `graphic_card` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `wireless` varchar(255) NOT NULL,
  `touch_screen` varchar(255) NOT NULL,
  `backlit_keyboard` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_type`, `brand`, `series`, `price`, `price_range`, `window`, `ram_size`, `ram_tech`, `ram_speed`, `storage_type`, `storage_range`, `storage_full_info`, `processor`, `processor_generation`, `graphic_card`, `resolution`, `screen_size`, `wireless`, `touch_screen`, `backlit_keyboard`, `battery`, `weight`, `color`, `details`, `images`, `status`, `created_date`, `modified_date`) VALUES
(1, 'Laptop', 'Asus', 'ASUS VivoBook L203', 269, 'Price Under $500', '	Windows 10 in S mode', '4GB RAM', 'LPDDR4 RAM', '', 'HDD', 'Up to 256GB', '64GB emmC Flash Storage ', 'Intel Celeron', 'N4000', 'Integrated', 'Integrated', '13 inch', 'WiFi 5 (802.11ac) + BT 4.1', 'Non-touch Screen', 'No', '', '2.2lbs', '#000000', 'Efficient Intel Celeron N4000 Processor (4M Cache, up to 2.6 GHz)\r\n11.6â€ HD (1366 x 768) Display with HD webcam\r\nCompatible with Google Classroom; run Google Classroom on Microsoft Edge or Internet Explorer 11\r\n64GB emmC Flash Storage and 4GB LPDDR4 RAM\r\nWindows 10 in S mode (upgradeable to Windows 10 Home)\r\nOne Year of Microsoft Office 365 Included\r\nSlim and Portable: 0.7â€ thin and weighs only 2.2 pounds(battery included)\r\nUSB Type-C (Gen 1), USB Type-A, HDMI, MicroSD connectivity (USB Transfer speed may vary. Learn more at ASUS website)\r\nWi-Fi 5 (802.11ac) for speeds up to three times faster than 802.11n\r\nWindows 10 in S mode is the new standard in app and cloud based operating systems. Windows 10 in S mode is a 100% app based version of Windows where applications are verified and tested for quality on the Microsoft store.\r\n', 'Home_Value_Storefront.jpg', 1, '2020-11-28 15:43:30', '2020-11-28 15:46:05'),
(2, 'Laptop', 'Asus', 'UX534FTC-AS77 ZenBook 15 Laptop', 1399, 'Price Above $800', 'Windows 10 Home', '16GB RAM', 'DDR3 SDRAM', '4.9 GHz', 'SSD', '256GB to 512GB', 'Fast storage and memory featuring 512GB PCIe NVMe SSD', 'Intel Core i7', '10th generation', 'NVIDIA', '4K', '15 inch', 'Wi-Fi 6 (802.11ax), Bluetooth 5.0 ', 'Touch Screen', 'Yes', '', '3.6lbs', '#f4f1f1', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Premium_Storefront.jpg', 1, '2020-11-28 16:07:22', '2020-11-28 16:07:22'),
(3, 'Desktop', 'Hp', 'Pavilion', 800, 'Price Under $500', 'ds', '4GB RAM', 'DDR4', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Pentium', '6th Gen', 'NVIDIA', 'HD', '13 inch', '6.0', 'Non-touch Screen', 'Yes', '1000wt', 'sdf', '#adc2ff', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Essential_Storefront.jpg', 1, '2020-11-28 16:16:29', '2020-11-28 16:16:29'),
(4, 'Accessories', 'Asus', 'ASUS VivoBook L203', 500, 'Price $500 to $800', '10 Home', '4GB RAM', 'DDR4', '12GHz', 'HDD', '256GB to 512GB', 'HDD 129GB', 'Intel Core i7', '6th Gen', 'AMD', '4K', '15 inch', '6.0', 'Touch Screen', 'No', '1000wt', '5lb', '#ffffff', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_Everyday_Storefront.jpg', 1, '2020-11-28 16:17:40', '2020-11-28 16:17:40'),
(5, 'Desktop', 'Hp', 'Pavilion', 700, 'Price Under $500', '10 Home', '4GB RAM', 'DDR4', 'sdf', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Core i3', '6th Gen', 'Integrated', 'HD', '13 inch', '6.0', 'Non-touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_TravelEssential_Storefront.jpg', 1, '2020-11-28 16:18:26', '2020-11-28 16:18:26'),
(6, 'Desktop', 'Hp', 'Pavilion', 899, 'Price Under $500', '10 Home', '32GB or More', '', '12GHz', 'Duel Both SSD & HDD', '1 TB or More', 'Fast storage and memory featuring 512GB PCIe NVMe SSD', 'Intel Core i7 K Series', '6th Gen', 'AMD', 'AMD', '14 inch', '6.0', 'Non-touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_TravelEssential_Storefront.jpg', 1, '2020-11-28 16:19:10', '2020-11-28 16:25:13'),
(7, 'Desktop', 'Dell', 'UX534FTC-AS77 ZenBook 15 Laptop', 800, 'Price $500 to $800', '10 Home', '32GB or More', 'DDR4', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Pentium', '6th Gen', 'NVIDIA', 'HD', '17 inch', '6.0', 'Non-touch Screen', 'No', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Essential_Storefront.jpg', 1, '2020-11-28 16:19:53', '2020-11-28 16:19:53'),
(8, 'Laptop', 'Asus', 'ASUS VivoBook L203', 9000, 'Price Under $500', '	Windows 10 in S mode', '16GB RAM', 'DDR4', '12GHz', 'Duel Both SSD & HDD', '1 TB or More', 'HDD 129GB', 'Intel Core i9 K Series', '', 'NVIDIA', '4K', '17 inch', '6.0', 'Touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Premium_Storefront.jpg', 1, '2020-11-28 16:20:46', '2020-11-28 16:20:46'),
(9, 'Laptop', 'Hp', 'Pavilion', 666, 'Price Above $800', '10 Home', '32GB or More', 'DDR4', '12GHz', 'Duel Both SSD & HDD', '1 TB or More', 'sdf', 'Intel Core i7', '6th Gen', 'AMD', 'FHD', '15 inch', '6.0', 'Non-touch Screen', 'No', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_Everyday_Storefront.jpg', 1, '2020-11-28 16:21:30', '2020-11-28 16:21:30'),
(10, 'Desktop', 'Asus', 'ASUS VivoBook L203', 888, 'Price $500 to $800', '10 Home', '4GB RAM', 'LPDDR4 RAM', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Pentium', '6th Gen', 'Integrated', 'HD', '13 inch', '6.0', 'Non-touch Screen', 'Yes', '1000wt', 'sdf', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_TravelEssential_Storefront.jpg', 1, '2020-11-28 16:22:28', '2020-11-28 16:22:28'),
(11, 'Accessories', 'Asus', 'ASUS VivoBook L203', 799, 'Price Above $800', '10 Home', '8GB RAM', 'DDR3 SDRAM', '12GHz', 'SSD', 'Up to 256GB', '64GB emmC Flash Storage ', 'Intel Pentium', 'N4000', 'Integrated', 'FHD', '13 inch', 'sdf', 'Non-touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_TravelEssential_Storefront.jpg', 1, '2020-11-28 16:23:04', '2020-11-28 16:23:04'),
(12, 'Desktop', 'Dell', 'ASUS VivoBook L203', 899, 'Price Under $500', '10 Home', '4GB RAM', 'dsf', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Core i3', '6th Gen', 'Integrated', 'HD', '13 inch', '6.0', 'Touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', '2in1_TravelEssential_Storefront.jpg', 1, '2020-11-28 16:23:35', '2020-11-28 16:23:35'),
(13, 'Desktop', 'Dell', 'ASUS VivoBook L203', 888, 'Price Under $500', '10 Home', '8GB RAM', 'DDR4', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Pentium', '6th Gen', 'Integrated', 'HD', '13 inch', '6.0', 'Non-touch Screen', 'Yes', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Premium_Storefront.jpg', 1, '2020-11-28 16:24:01', '2020-11-28 16:24:01'),
(14, 'Accessories', 'Dell', 'Pavilion', 799, 'Price $500 to $800', '10 Home', '4GB RAM', 'DDR4', '12GHz', 'SSD', 'Up to 256GB', 'HDD 129GB', 'Intel Core i3', '10 Home', 'Integrated', 'HD', '13 inch', '6.0', 'Non-touch Screen', 'No', '1000wt', '5lb', '#000000', '15.6 inch wide-view 4K UHD 4-way NanoEdge bezel display with 92% screen to body ratio\r\nInnovative ScreenPad: 5.65-inch interactive touchscreen trackpad that adapts to your needs for smarter control and multitasking\r\nLatest 10th generation Intel Core i7-10510U Quad Core Processor (8M Cache, up to 4.9 GHz) with NVIDIA GeForce GTX 1650 Max-Q discrete graphics\r\nFast storage and memory featuring 512GB PCIe NVMe SSD and 16GB RAM\r\nWorks with Amazon Alexa Voice Service that helps you with tasks, entertainment, general information, and more.\r\nBuilt-in IR camera for facial recognition sign in with Windows Hello\r\nExtensive connectivity with HDMI, USB Type C, Wi-Fi 6 (802.11ax), Bluetooth 5.0 and SD card reader (USB Transfer speed may vary. Learn more at ASUS website)\r\nSleek and lightweight 3.6 poundsfor comfortable portability\r\nMIL-STD 810G military standard for reliability and durability\r\nWindows 10 Home\r\n', 'Home_Essential_Storefront.jpg', 1, '2020-11-28 16:24:43', '2020-11-28 16:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_categories`
--

CREATE TABLE `type_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `typeName` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_categories`
--

INSERT INTO `type_categories` (`id`, `name`, `typeName`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'Brand', 'brand', 'Hp, Dell, Asus', '2020-11-11 14:16:25', '2020-11-11 14:16:25'),
(2, 'Price Range', 'price_range', 'Under $500 $800 Aboue', '2020-11-11 15:01:00', '2020-11-11 15:01:00'),
(3, 'RAM Size', 'ramSize', '4, 8, 12, 16, 32 GB', '2020-11-11 15:05:06', '2020-11-11 15:05:06'),
(5, 'Storage Type', 'storageType', 'HDD, SSD, Both', '2020-11-12 18:52:35', '2020-11-12 18:52:35'),
(6, 'Storage Range', 'storageRange', 'GB or TB', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(7, 'Processor', 'processor', 'Intel, AMD', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(9, 'Graphics Card', 'graphicsCard', 'Nevedia, Intel, AMD', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(10, 'Screen Size', 'screenSize', 'inches', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(11, 'Resolution', 'resolution', 'HD, FHD, 4K', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(12, 'Touch Screen', 'touchScreen', 'yse, no', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(13, 'Backlit Keyboard', 'backlitKeyboard', 'avaiable', '2020-11-12 19:07:35', '2020-11-12 19:07:35'),
(14, 'Item Type', 'itemType', 'Laptop, Desktop, Accessory', '2020-11-12 21:15:26', '2020-11-12 21:15:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_categories`
--
ALTER TABLE `type_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_categories`
--
ALTER TABLE `type_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
