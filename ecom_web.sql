-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 09:42 AM
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
-- Database: `ecom_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecom`
--

CREATE TABLE `ecom` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_mobile` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecom`
--

INSERT INTO `ecom` (`id`, `user_name`, `user_email`, `user_mobile`, `user_password`) VALUES
(1, 'Akash', 'abc@gmail.com', '123', 'dc1024d79308b2bda7290078cbce206e'),
(2, 'gest', 'abc@gmail.com', '9365339460', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_name` text DEFAULT NULL,
  `prod_price` text DEFAULT NULL,
  `prod_desc` longtext DEFAULT NULL,
  `prod_thumb_1` text DEFAULT NULL,
  `prod_thumb_2` text DEFAULT NULL,
  `prod_thumb_3` text DEFAULT NULL,
  `prod_thumb_4` text DEFAULT NULL,
  `prod_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `prod_price`, `prod_desc`, `prod_thumb_1`, `prod_thumb_2`, `prod_thumb_3`, `prod_thumb_4`, `prod_user`) VALUES
(1, 'Noise Newly Launched Quad Cal', 'Rs.1299', 'Noise Newly Launched Quad Call 1.81&quot; Display, Bluetooth Calling Smart Watch, AI Voice Assistance, 160+Hrs Battery Life, Metallic Build, in-Built Games, 100 Sports Modes, 100+ Watch Faces (Deep Wine)', '655f345e2e9e3_noise.jpg', NULL, NULL, NULL, 2),
(4, 'boAt Wave Call 2 Smart Watch ', 'Rs.1999', 'boAt Wave Call 2 Smart Watch with 1.83&quot; HD Display, Advanced BT Calling, DIY Watch Face Studio, Coins, 700+Active Modes, Live Cricket Scores, HR&amp;SPO2 and Sleep Monitoring(Black Metal)', '655f361c0dc7f_boat.jpg', NULL, NULL, NULL, 2),
(5, 'Fastrack Limitless FS1 Pro Smart Watch', 'Rs.2799', 'Fastrack Limitless FS1 Pro Smart Watch|1.96&quot; Super AMOLED Arched Display with 410x502 Pixel Resolution|SingleSync BT Calling|NitroFast Charging|110+ Sports Modes|200+ Watchfaces|Upto 7 Days Battery', '655f36ded477e_fastrack.jpg', NULL, NULL, NULL, 2),
(6, 'Fire-Boltt Ninja Call Pro Plus 1.83&quot;', 'Rs.1299', 'Fire-Boltt Ninja Call Pro Plus 1.83&quot; Smart Watch with Bluetooth Calling, AI Voice Assistance, 100 Sports Modes IP67 Rating, 240 * 280 Pixel High Resolution', '655f372d05168_uploads655ed08c24f6a_k1.jpg', NULL, NULL, NULL, 2),
(7, 'beatXP Flare Pro 1.39” HD Display Bluetooth Calling', 'Rs.2999', 'beatXP Flare Pro 1.39” HD Display Bluetooth Calling Smart Watch, 100+ Sports Modes, Heart Rate Monitoring, SpO2, AI Voice Assistant, IP68 - Silver\r\n', '655f37b97ae9e_beatex.jpg', '655f37b97b5e1_uploads655ed08c250fd_o3.jpg', '655f37b97b934_uploads655ed08c24f6a_k1.jpg', '655f37b97bbe6_noise.jpg', 2),
(8, 'beatXP Vega X 1.43&quot; (3.6 cm) Super ', 'Rs.1699', 'beatXP Vega X 1.43&quot; (3.6 cm) Super AMOLED Display, One-Tap Bluetooth Calling Smart Watch, Metal Body, Rotary Crown, 466 * 466px, 500 Nits Brightness (Black Metal Chain)\r\n', '655f3814e8bad_beatex2.jpg', '655f3814e8e32_uploads655ed08c24f6a_k1.jpg', '655f3814e9069_uploads655ed08c250fd_o3.jpg', '655f3814e9270_fastrack.jpg', 2),
(9, 'beatXP Vega 1.43&quot; (3.6 cm) Super AMOLED Display', 'Rs.7999', 'beatXP Vega 1.43&quot; (3.6 cm) Super AMOLED Display, One-Tap Bluetooth Calling Smart Watch, 1000 Nits Brightness, Fast Charging, 24 * 7 Health Monitoring (Electric Black)', '655f3870b2bbb_beatex3.jpg', '655f3870b314d_beatex.jpg', '655f3870b3446_beatex2.jpg', '655f3870b35e4_boat.jpg', 2),
(10, 'Samsung Galaxy Watch5', 'Rs.5999', 'Samsung Galaxy Watch5 Bluetooth (40 mm, Pink Gold, Compatible with Android only)', '655f38ed37781_i222.png', '655f38ed38365_o1.jpg', '655f38ed38d11_i3.jpg', '655f38ed393a1_o4.jpg', 2),
(11, 'Pebble Game of Thrones Limited Edition Luxury Smartwatch', 'Rs.4299', 'Pebble Game of Thrones Limited Edition Luxury Smartwatch - 1.43” (3.63 cm) Amoled Always-On Display, Feather Touch, Bluetooth Calling, Responsive Watch Faces, 24/7 Health Suite, AI Voice Assistance', '655f394f83da3_pebble.jpg', '655f394f840b7_uploads655ed08c250fd_o3.jpg', '655f394f84370_beatex.jpg', '655f394f8458f_boat.jpg', 2),
(12, 'Fire-Boltt Xelor Luxury Stainless Steel Smart Watch', 'Rs.8990', 'Fire-Boltt Xelor Luxury Stainless Steel Smart Watch. 1.78&quot; AMOLED, Always-On Display, 368 * 448 px Resolution, Bluetooth Calling, 75 HZ Refresh Rate', '655f39ba39c73_firebold.jpg', '655f39ba3a239_pebble.jpg', '655f39ba3a433_pebble.jpg', '655f39ba3a5a0_boat.jpg', 2),
(13, 'Fire-Boltt Solaris: 1.78” AMOLED Always-on Display', 'Rs.1999', 'Fire-Boltt Solaris: 1.78” AMOLED Always-on Display with 368 * 448 px Resolution, 123 Sports Mode, IP68 Water-Resistant, Long-Lasting Battery Life and Comprehensive Health Tracking (Silver)', '655f3a291c366_firboltt.jpg', '655f3a291c5cd_uploads655ed08c250fd_o3.jpg', '655f3a291d14c_beatex3.jpg', '655f3a291d713_uploads655ed08c24f6a_k1.jpg', 2),
(17, 'Fitbit Versa 4 Fitness Watch', '20000', 'Fitbit Versa 4 Fitness Watch (Black/Graphite Aluminium) with 6-Month Premium Membership', '656014d12daaa_k1.jpg', '656014d12de22_o4.jpg', '656014d12e0ea_o2.jpg', '656014d12e36f_i4.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecom`
--
ALTER TABLE `ecom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecom`
--
ALTER TABLE `ecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

