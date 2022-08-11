-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2020 at 11:45 AM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u256377392_oie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `secret` varchar(500) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `secret`, `role`) VALUES
(1, 'admin', 'admin@localhost.com', '23d42f5f3f66498b2c8ff4c20b8c5ac826e47146', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Import'),
(2, 'Export');

-- --------------------------------------------------------

--
-- Table structure for table `cms_contents`
--

CREATE TABLE `cms_contents` (
  `id` int(11) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `website_logo` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `footer_menu1` varchar(175) NOT NULL,
  `footer_menu2` varchar(175) NOT NULL,
  `footer_menu3` varchar(175) NOT NULL,
  `footer_menu4` varchar(175) NOT NULL,
  `footer_about` varchar(255) NOT NULL,
  `footer_contact` varchar(11) NOT NULL,
  `footer_email` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_contents`
--

INSERT INTO `cms_contents` (`id`, `website_url`, `website_logo`, `facebook_link`, `twitter_link`, `linkedin_link`, `footer_menu1`, `footer_menu2`, `footer_menu3`, `footer_menu4`, `footer_about`, `footer_contact`, `footer_email`, `address`) VALUES
(1, 'http://localhost.com/', 'website_logo_yISbiXX.png', 'https://www.facebook.com/orafsimportexport/', 'https://twitter.com/localhost', 'https://linkedin.com/localhost', '', '', '', '', '', '+91-22-4978', 'info@techemporia.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` int(11) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `page_name` varchar(75) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `content1` varchar(500) NOT NULL,
  `content2` varchar(500) NOT NULL,
  `content3` varchar(500) NOT NULL,
  `contact1` varchar(11) NOT NULL,
  `contact3` varchar(11) NOT NULL,
  `contact2` varchar(11) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `email3` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `website_url`, `page_name`, `title`, `description`, `keywords`, `url`, `image`, `image1`, `content1`, `content2`, `content3`, `contact1`, `contact3`, `contact2`, `email1`, `email2`, `email3`, `address`, `status`) VALUES
(1, 'http://localhost.com/', 'about', 'About Orafs Import/Export', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_cLtVw5G.jpg', '', 'We have well established market in many Asian countries, European countries and also doing business in USA.', '', '0', '0', '0', '', '', '', '', 1),
(2, 'http://localhost.com/', 'contact', 'New Page Title', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_uIvERb8.', '', '', '', '7506495094', '8286271220', '9769779884', 'info@localhost.com', 'farid@localhost.com', 'sohail@localhost.com', 'F 130 A, The Dreams Mall, Bhandup (W) Mumbai 400078', 1),
(3, 'http://localhost.lab/', 'imports', 'New Page Title', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_uIvERb8.', '', '', '', '0', '0', '0', '', '', '', '', 1),
(4, 'http://localhost.lab/', 'exports', 'New Page Title', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_uIvERb8.', '', '', '', '0', '0', '0', '', '', '', '', 1),
(6, 'http://localhost.com/', 'index', 'New Page Title', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_uIvERb8.', '', '', '', '0', '0', '0', '', '', '', '', 1),
(7, 'http://localhost.lab/', 'join-us', 'New Page Title', 'This is dummy text for about page', 'The Keywords', 'about.php', '', 'aboutimage_uIvERb8.', '', '', '', '0', '0', '0', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `home` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `import` varchar(50) NOT NULL,
  `export` varchar(50) NOT NULL,
  `port` varchar(50) NOT NULL,
  `convert_rate` varchar(50) NOT NULL,
  `joinus` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `website_url`, `home`, `about`, `services`, `import`, `export`, `port`, `convert_rate`, `joinus`, `contact`) VALUES
(1, 'http://localhost.com/', 'Home', 'About', 'Services', 'Imports', 'Exports', 'Ports', 'Convert Rate', 'Join Us', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `ports`
--

CREATE TABLE `ports` (
  `id` int(11) NOT NULL,
  `port_name` varchar(175) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ports`
--

INSERT INTO `ports` (`id`, `port_name`) VALUES
(1, 'Mumbai'),
(2, 'Goa'),
(3, 'Khambhat'),
(4, 'Nhava'),
(6, 'Marmagao Port'),
(7, 'Panambur Port'),
(8, 'Cochin Port'),
(9, 'Port Blair'),
(10, 'Tuticorin Port'),
(12, 'Vizag Port'),
(13, 'Haldia Port'),
(14, 'Kandla');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(10) NOT NULL,
  `created_at` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `type`, `created_at`) VALUES
(10, 'Import Sample Product', 'Import Sample Product', 'import', '2019-03-22 10:13:00'),
(12, 'Export Sample', 'Export Sample', 'export', '2019-03-22 11:56:08'),
(13, 'Export Product New Sample ', 'This is export product new sample ', 'export', '2019-03-26 06:45:31'),
(16, 'Chair', 'Keaton Lounge Chair', 'import', '2019-05-21 08:22:41'),
(17, 'Mattress', 'Essential Memory Foam Mattress With Temperature Control ', 'import', '2019-05-21 08:22:25'),
(18, 'Mat', 'Table Mats', 'import', '2019-05-21 08:21:23'),
(19, 'New Bed Set', 'Storage wooden bed set', 'export', '2019-05-20 10:15:17'),
(20, 'Bed', 'Metal Bed', 'export', '2019-05-20 09:51:28'),
(21, 'Cloth', 'Printed Party Wear Designer Cotton Long Kurti', 'export', '2019-05-20 09:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_name`, `product_id`) VALUES
(23, '15_5fUbCNN.png', 16),
(24, '17_AngPxMi.png', 17),
(25, '18_HWghkou.png', 18),
(26, '19_JdDMUIE.png', 19),
(27, '20_QgxOiNF.png', 20),
(28, '21_fN9HbML.png', 21);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `slider1` varchar(255) NOT NULL,
  `slider_text1` varchar(255) NOT NULL,
  `slider2` varchar(255) NOT NULL,
  `slider_text2` varchar(255) NOT NULL,
  `slider3` varchar(255) NOT NULL,
  `slider_text3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `website_url`, `slider1`, `slider_text1`, `slider2`, `slider_text2`, `slider3`, `slider_text3`) VALUES
(1, 'http://localhost.com/', 'homeslider_VBDyent.png', 'Join us now to....', 'homeslider_OIymLz7.png', 'Start Earning', 'homeslider_KiPqKKI.png', 'In Import and Export');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `client_name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `client_message`) VALUES
(4, 'Shoaib', 'Impressive service'),
(5, 'rizwan', 'very good service'),
(6, 'Sana', 'Good servies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_contents`
--
ALTER TABLE `cms_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_contents`
--
ALTER TABLE `cms_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ports`
--
ALTER TABLE `ports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
