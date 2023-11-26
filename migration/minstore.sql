-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 12:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minstore`
--
CREATE DATABASE IF NOT EXISTS `minstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `minstore`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_name` text DEFAULT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `cart_name`, `size`, `color`, `quantity`, `created_at`) VALUES
(14, 103, 'admin', 'M', 'TRẮNG', 1, '2023-11-25 19:04:01'),
(17, 102, 'admin', 'M', 'TRẮNG', 1, '2023-11-25 20:17:45'),
(18, 20, 'admin', 'M', 'TRẮNG', 1, '2023-11-25 20:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_email` text NOT NULL,
  `order_user` text NOT NULL,
  `order_name` text NOT NULL,
  `order_detail` text DEFAULT NULL,
  `total_price` double NOT NULL,
  `order_phone` int(15) NOT NULL,
  `order_address` text NOT NULL,
  `order_status` int(5) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_email`, `order_user`, `order_name`, `order_detail`, `total_price`, `order_phone`, `order_address`, `order_status`, `created_at`) VALUES
(8, 'admin@gmail.com', 'admin', 'Trần Hồng Quân', 'Mã SP: 103, BỘ MẶC NHÀ HỌA TIẾT KẺ HW10492, M, TRẮNG, SL: 1<br>Mã SP: 102, BỘ MẶC NHÀ HỌA TIẾT HW09642, M, TRẮNG, SL: 1<br>Mã SP: 20, ĐẦM SUÔNG HỌA TIẾT D08042, M, TRẮNG, SL: 1<br>', 14933500, 378786847, 'Ha Noi, VN', 1, '2023-11-26 06:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_img` text NOT NULL,
  `product_category` text NOT NULL,
  `product_model` text NOT NULL,
  `product_collection` text NOT NULL,
  `product_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_img`, `product_category`, `product_model`, `product_collection`, `product_price`, `created_at`) VALUES
(15, 'ĐẦM SUÔNG TAY BỒNG D07752', 'damxuong.jpg', 'dam', 'damsuong', 'WINTER MEMORIES', 1099000, '2023-11-20 14:55:36'),
(16, 'ĐẦM ĐÍNH HOA NỔI D07282', '1_bad73867a57c484f91211c2518ea592a_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 1119300, '2023-11-20 14:56:12'),
(17, 'ĐẦM SUÔNG PHỐI HOA THÊU D06502', '4_69f5474652354dff86868e2e8b81c664_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 1049300, '2023-11-20 14:56:52'),
(18, 'ĐẦM SUÔNG HOA D05732', '5_3690e492d07840aca0ead893c1a93af2_master.jpg', 'dam', 'damsuong', 'WINTER MEMORIES', 1399000, '2023-11-20 14:57:28'),
(19, 'ĐẦM SƠ MI THIẾT KẾ D17632', '3_7dd5e2b6db334420aadac8ecf22e4036_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 649500, '2023-11-20 14:58:02'),
(20, 'ĐẦM SUÔNG HỌA TIẾT D08042', '6_5ea846d6401f4977aeca6d8b87154ef3_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 909300, '2023-11-20 14:58:29'),
(21, 'ĐẦM SUÔNG TAY VOAN D06692', '6_a02df62e31f9488db295ae69d81e0d8f_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 1599000, '2023-11-20 14:59:01'),
(22, 'ĐẦM SUÔNG ĐÍNH HOA NỔI D40832', '1_3c8fd116a1b3456586e57b2ad6537871_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 479200, '2023-11-20 14:59:40'),
(23, 'ĐẦM SUÔNG HỌA TIẾT D02022', '6_b787a3a7919f463bb1bc2a747a08f4c9_master.webp', 'dam', 'damsuong', 'WINTER MEMORIES', 979300, '2023-11-20 15:00:09'),
(24, 'ĐẦM THIẾT KẾ D08242', '2_659bc3c36b5d4b1f879cc4fdacb7208e_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 1399000, '2023-11-20 15:04:31'),
(25, 'ĐẦM LIỀN HỌA TIẾT D41672', '2_31481c6061bf45618f431f21378b27a7_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 699000, '2023-11-20 15:04:57'),
(26, 'ĐẦM HỌA TIẾT KÈM ĐAI D41512', '3_275bfe0493994fb3ab0395758462f2bf_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 599000, '2023-11-20 15:05:24'),
(27, 'ĐẦM HỌA TIẾT D41502', '2_53d859ea82aa431a9971fd83ef93f8c2_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 699000, '2023-11-20 15:05:46'),
(28, 'ĐẦM HOA XANH D41582', '2_6acae7eedd864431adedc497ceee91f6_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 559000, '2023-11-20 15:06:12'),
(29, 'ĐẦM HOA CỔ NƠ D41402', '2_82e9456e8c3b4a5d8023b547b2c4b474_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 699000, '2023-11-20 15:06:40'),
(30, 'ĐẦM ĐỎ THIẾT KẾ D41332', '2_2b5c362d2cbb4addb89eadef24f7af3c_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 599000, '2023-11-20 15:07:01'),
(31, 'ĐẦM LIỀN THIẾT KẾ D07142', '3_ffb6363d196e4accbd0c5c0a84012a8e_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 1119300, '2023-11-20 15:07:23'),
(32, 'ĐẦM KẺ KÈM ĐAI D41602', '4_1c45c40867cb4846bbdbfd8fe92765d2_master.webp', 'dam', 'dangA', 'PARISIAN LADY', 599000, '2023-11-20 15:07:44'),
(33, 'ĐẦM ÔM HOA D09762', '3_c4d85bf9afba4c4597a9c4db39958bc1_master.jpg', 'dam', 'dangom', 'STARRY NIGHT', 1599000, '2023-11-20 15:10:31'),
(34, 'ĐẦM LIỀN THIẾT KẾ D08592', '1_15edd57bd0144faf8884010f8746deca_master.webp', 'dam', 'dangom', 'STARRY NIGHT', 1599000, '2023-11-20 15:10:56'),
(35, 'ĐẦM ÔM TAY VOAN D08422', '2_d659e48aaa2641de81efa3d43b7cfeb0_master.jpg', 'dam', 'dangom', 'STARRY NIGHT', 1399000, '2023-11-20 15:11:18'),
(36, 'ĐẦM LIỀN THIẾT KẾ D09672', '2_9add142a846b405fa58cd99397be2222_master.webp', 'dam', 'dangom', 'STARRY NIGHT', 1599000, '2023-11-20 15:11:44'),
(37, 'ĐẦM TIỆC ĐÍNH NGỌC D09332', '2_d77cdaef0c304df38c10a1d8646f7ef9_master.webp', 'dam', 'dangom', 'STARRY NIGHT', 1399000, '2023-11-20 15:12:05'),
(38, 'ĐẦM ÔM ĐEN PHỐI HOA 3D D10932 ', '2_5827d841cb764a38be1e9046733dbd41_master.webp', 'dam', 'dangom', 'STARRY NIGHT', 1399000, '2023-11-20 15:12:31'),
(39, 'ĐẦM TIỆC ĐỎ D09392', '2_30db1b57fb8e4f769320946c9474f1f5_master.webp', 'dam', 'dangom', 'STARRY NIGHT', 1599000, '2023-11-20 15:12:54'),
(40, 'ĐẦM ÔM PHỐI CỔ TRẮNG D07712', '2_c5f206baa817484b9e28cc5e102c8dd7_master.jpg', 'dam', 'dangom', 'STARRY NIGHT', 1399000, '2023-11-20 15:13:23'),
(41, 'ĐẦM TIỆC XOẮN EO D06022', '2_0ba74a8dcdc3417193d98650d9f2d52c_master.jpg', 'dam', 'dangom', 'STARRY NIGHT', 1399000, '2023-11-20 15:13:44'),
(44, 'SƠ MI XANH IN HOA SM09232', '3_b38cc6be11ea493f85d52f160f592d8d_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 999000, '2023-11-20 15:17:48'),
(45, 'SƠ MI CỔ NƠ SM12622', '3_e1ba7b8087e74068b0306c64ed864e45_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 899000, '2023-11-20 15:18:05'),
(46, 'SƠ MI PHỐI BÈO SM09102', '2_437370f7aa84440696c6bfcf569c6cb5_master.jpg', 'somi', 'daitay', 'WINTER MEMORIES', 999000, '2023-11-20 15:18:30'),
(47, 'SƠ MI HOA CỔ NƠ SM12102', '3_af974ac5693d4b79b07c6561e626814c_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 999000, '2023-11-20 15:18:58'),
(48, 'SƠ MI KẺ XANH SM11152', '3_0936a1aed2124b6ca8e656721532ce31_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 799000, '2023-11-20 15:19:18'),
(49, 'SƠ MI ĐỎ PHỐI BÈO SM09112', '3_0d1eb76094c84982b563a2506baf86f8_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 999000, '2023-11-20 15:19:42'),
(50, 'SƠ MI HỌA TIẾT SM10062', '3_7c3b497663f449538cc442dc4189a0ff_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 899000, '2023-11-20 15:20:05'),
(51, 'SƠ MI KẺ ĐỎ SM10882', '2_71773ef4818246c98fffcb3e62ea3606_master.jpg', 'somi', 'daitay', 'WINTER MEMORIES', 799000, '2023-11-20 15:20:30'),
(52, 'SƠ MI NHÚN VAI SM10842', '2_8019137d123749cab47c5de158cea4a8_master.webp', 'somi', 'daitay', 'WINTER MEMORIES', 899000, '2023-11-20 15:20:48'),
(53, 'ÁO REN CHIẾT EO AK07522', '2_c17904cf40f545e184796f0ad2de2e62_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 1199000, '2023-11-20 15:23:20'),
(54, 'SƠ MI CHẤM BI SM11282', '2_b41d933b149f4977a850f2219ce57c61_master.jpg', 'somi', 'ngantay', 'PARISIAN LADY', 799000, '2023-11-20 15:23:37'),
(55, 'ÁO THIẾT KẾ AK07082', 'ak070821312313070205p1199dt_z070921542313070205p799dt_1__fbc6892d8786429d9a091b142082f7f4_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 839300, '2023-11-20 15:24:02'),
(56, 'ÁO HOA XANH AK09132', '3_8bad2ee954e446a098999df5b7c4a51d_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 1199000, '2023-11-20 15:24:19'),
(57, 'ÁO DẠ TWEED ĐÍNH VIỀN NGỌC AK08392', 'ak083921312313020201p1199dt_z084021542313020201p699dt_1__c0a1b21dd8b44694b5c4b4d42dc25b9d_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 839300, '2023-11-20 15:24:40'),
(58, 'ÁO THIẾT KẾ ĐÍNH KHUY NGỌC AK08372', '2_87c3b0be07124a82be6977debca13cfc_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 839300, '2023-11-20 15:24:56'),
(59, 'ÁO THIẾT KẾ SM07102', '2_6351ab410d54464d9e3316727978547a_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 839300, '2023-11-20 15:25:12'),
(60, 'ÁO THIẾT KẾ AK05442', '4_63ab1dc3acbe4a72847c6d084ac0fe28_master.jpg', 'somi', 'ngantay', 'PARISIAN LADY', 909300, '2023-11-20 15:25:28'),
(61, 'SƠ MI DẬP LI SM05202', '3_3d577bba0be54588a7655aaad05ea9ca_master.webp', 'somi', 'ngantay', 'PARISIAN LADY', 449500, '2023-11-20 15:25:43'),
(62, 'SƠ MI HOA TAY LỠ SM10642', '2_c6063fb5486441ddbb6e1b284a52acae_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 899000, '2023-11-20 15:28:04'),
(63, 'SƠ MI HỌA TIẾT SM09882', '3_e46af1aaa37e4f19bf8a443fc1e3daf8_master.jpg', 'somi', 'taylo', 'STARRY NIGHT', 899000, '2023-11-20 15:28:24'),
(64, 'SƠ MI TÍM TAY BỒNG SM07152', '4_51335606094445b7b5577fa1a946224d_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 799000, '2023-11-20 15:28:38'),
(65, 'SƠ MI TAY LỠ SM02042', '2_472db81e8a6047efb86fed290a7e4aeb_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 449500, '2023-11-20 15:28:53'),
(66, 'SƠ MI TAY LỠ PHỐI HOA 3D SM04752', '2_835c90709d2e41fcaa790fa5a013e86c_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 429500, '2023-11-20 15:29:14'),
(67, 'SƠ MI ĐÍNH HOA 3D SM04742', '1_218873215f9d4d4da144a3d305df8041_master.jpg', 'somi', 'taylo', 'STARRY NIGHT', 429500, '2023-11-20 15:29:29'),
(68, 'SƠ MI ĐUÔI TÔM SM04872', '2_195273ff609d48a3b459d4193719e350_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 349500, '2023-11-20 15:29:44'),
(69, 'SƠ MI ĐUÔI TÔM SM04862', '2_549d35e12cb541bb9eff84dcce50227a_master.webp', 'somi', 'taylo', 'STARRY NIGHT', 349500, '2023-11-20 15:30:01'),
(71, 'QUẦN SHORT HỒNG Q00772', '1_98d5d7d475544d20bbc44fda6d816d98_master.jpg', 'quan', 'short', 'PARISIAN LADY', 249500, '2023-11-20 15:32:25'),
(72, 'QUẦN SHORT ĐEN ĐÍNH KHUY Q01322', '2_6bab7d53c46940e9905b42b283b20004_master.webp', 'quan', 'short', 'PARISIAN LADY', 249500, '2023-11-20 15:32:41'),
(73, 'QUẦN SHORT TRẮNG Q01032', '2_0e2d9214941d4e16a5c09b1c0b1eec5d_master.webp', 'quan', 'short', 'PARISIAN LADY', 249500, '2023-11-20 15:32:56'),
(74, 'QUẦN SHORT CẠP CAO Q02382', '2_efb4eba5e041432ea2c0fc09ae646c4b_master.webp', 'quan', 'short', 'PARISIAN LADY', 249500, '2023-11-20 15:33:13'),
(75, 'QUẦN SHORT HỌA TIẾT Q02182', '5_fe3299d9142b4b4c9797617d525d3709_master.webp', 'quan', 'short', 'PARISIAN LADY', 249500, '2023-11-20 15:33:37'),
(76, 'QUẦN SHORT XANH LÁ Q19962', '1_0d7b17c1aa274c9fa946a5b0bf02f86e_master.webp', 'quan', 'short', 'PARISIAN LADY', 299500, '2023-11-20 15:33:56'),
(77, 'QUẦN SHORT HOA Q01702', '4_382985eadbd84224affc9ac6b26dab56_master.webp', 'quan', 'short', 'PARISIAN LADY', 299500, '2023-11-20 15:34:08'),
(78, 'QUẦN SHORT REN Q00302', '2_0777c72ae3ac46a8b713e356006104a3_master.webp', 'quan', 'short', 'PARISIAN LADY', 349500, '2023-11-20 15:34:22'),
(79, 'QUẦN SHORT ĐEN Q00782', '2_29c29f123383459caf1415dd06acb6f8_master.webp', 'quan', 'short', 'PARISIAN LADY', 349500, '2023-11-20 15:34:40'),
(80, 'QUẦN LỬNG GẬP GẤU Q01362', '3_9eb3bd652acd47c9840bc73618afa4aa_master.jpg', 'quan', 'lung', 'STARRY NIGHT', 239700, '2023-11-20 15:36:23'),
(81, 'QUẦN LỬNG XANH Q01352', '9_85d67cda6cb64c6b874514ad94678333_master.webp', 'quan', 'lung', 'STARRY NIGHT', 239700, '2023-11-20 15:36:36'),
(82, 'QUẦN LỬNG GẬP GẤU Q01372', '3_c352d724b3624bb189d3fa0c13b49a71_master.webp', 'quan', 'lung', 'STARRY NIGHT', 239700, '2023-11-20 15:36:49'),
(83, 'QUẦN SUÔNG LỬNG Q01292', '2_263a2a6cb78348f89a600410f07e5897_master.webp', 'quan', 'lung', 'STARRY NIGHT', 399500, '2023-11-20 15:37:04'),
(84, 'QUẦN LỬNG XANH Q00682', '4_373ccede3e4c43c190b346bd2405a4b8_master.webp', 'quan', 'lung', 'STARRY NIGHT', 399500, '2023-11-20 15:37:18'),
(85, '399,500₫', '10_3bc444f23e2c40f4b66da232907aaa94_master.webp', 'quan', 'lung', 'STARRY NIGHT', 399500, '2023-11-20 15:37:33'),
(86, 'QUẦN ỐNG ĐỨNG Q08892', '2_d4215515fd41457b9141868aba7ae3a7_master.webp', 'quan', 'dai', 'WINTER MEMORIES', 629300, '2023-11-20 15:39:00'),
(87, 'QUẦN ỐNG ĐỨNG Q06682', '2_9697bdae583442649890d4aa60781f48_master.jpg', 'quan', 'dai', 'WINTER MEMORIES', 899000, '2023-11-20 15:39:33'),
(88, 'QUẦN ỐNG ĐỨNG Q10032', '4_1b3b0aff06994008b84c411b5154e38f_master.webp', 'quan', 'dai', 'WINTER MEMORIES', 799000, '2023-11-20 15:39:49'),
(89, 'QUẦN ỐNG ĐỨNG Q09382', '3_599babe76beb4430922a09c5fffb7737_master.webp', 'quan', 'dai', 'WINTER MEMORIES', 799000, '2023-11-20 15:40:03'),
(90, 'QUẦN ỐNG ĐỨNG Q12262', '3_1eda0af0d2904bc7835d18454334cb9a_master.webp', 'quan', 'dai', 'WINTER MEMORIES', 799000, '2023-11-20 15:40:18'),
(91, 'CHÂN VÁY XẾP LI Z01252', '2_2178103adf784af790aab480c3493671_master.webp', 'vay', 'xepli', 'STARRY NIGHT', 629300, '2023-11-20 15:41:51'),
(92, 'CHÂN VÁY XẾP LI Z05532', '2_90d151f7cf6d42dfadd083c23976f3c5_master.jpg', 'vay', 'xepli', 'STARRY NIGHT', 999000, '2023-11-20 15:42:07'),
(93, 'CHÂN VÁY XẾP LI Z02252', '4_1cda573f56f64fe1bb66a6b36a52c50b_master.webp', 'vay', 'xepli', 'STARRY NIGHT', 999000, '2023-11-20 15:42:27'),
(94, 'CHÂN VÁY XẾP LI Z05052', '1_b6fd182b17624e22bc7619845d7b8300_master.webp', 'vay', 'xepli', 'STARRY NIGHT', 499500, '2023-11-20 15:42:43'),
(95, 'CHÂN VÁY BÚT CHÌ Z11892', '1_259c40542e3a4dcbb0719f18309e5556_master.webp', 'vay', 'butchi', 'STARRY NIGHT', 799000, '2023-11-20 15:43:53'),
(96, 'CHÂN VÁY BÚT CHÌ Z09092', '2_868bc1dae1d948c9ae483a3f76c40f70_master.webp', 'vay', 'butchi', 'STARRY NIGHT', 799000, '2023-11-20 15:44:05'),
(97, 'CHÂN VÁY BÚT CHÌ Z07092', '2_bb76cdf3024f4f9d93e426d9b458f4bb_master.webp', 'vay', 'butchi', 'STARRY NIGHT', 559300, '2023-11-20 15:44:25'),
(98, 'CHÂN VÁY BÚT CHÌ Z07762', '3_a9e56be73225405d871e4a1f51eb57f2_master.jpg', 'vay', 'butchi', 'STARRY NIGHT', 799000, '2023-11-20 15:44:39'),
(99, 'CHÂN VÁY BÚT CHÌ Z11232', '3_fb34e2069cbc4b28ae9d807486060a48_master.webp', 'vay', 'butchi', 'STARRY NIGHT', 699000, '2023-11-20 15:44:53'),
(100, 'CHÂN VÁY REN Z07532', '2_d7b0127ffcb0431680610e3c91e46900_master.webp', 'vay', 'butchi', 'STARRY NIGHT', 799000, '2023-11-20 15:45:10'),
(101, 'BỘ MẶC NHÀ CỔ BÈO HW10502', '2_da4d038602b44bc8937f5d016b99b2a3_master.webp', 'setbo', '1', 'PARISIAN LADY', 799000, '2023-11-20 15:47:07'),
(102, 'BỘ MẶC NHÀ HỌA TIẾT HW09642', '3_8732dd21a34540a782db28966da94bff_master.webp', 'setbo', '1', 'PARISIAN LADY', 799000, '2023-11-20 15:47:26'),
(103, 'BỘ MẶC NHÀ HỌA TIẾT KẺ HW10492', '3_b300b67515204e9e8d76663b859a541a_master.webp', 'setbo', '1', 'PARISIAN LADY', 799000, '2023-11-20 15:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `role` int(5) DEFAULT 2,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `user_name`, `password`, `role`, `created_at`) VALUES
(3, 'admin@gmail.com', 'admin', '123456@aA', 1, '2023-11-20 21:09:56'),
(4, 'tranhongquan.dev@gmail.com', 'test', '123456@aA', 2, '2023-11-26 07:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
