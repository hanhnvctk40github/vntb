-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 06:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vntb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'phuongcat@gmail.com', 'phuong123456');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `background_image` text NOT NULL,
  `content` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `seo_title` text NOT NULL,
  `updated_at` date NOT NULL,
  `status_button_register` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL,
  `is_display` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `background_image`, `content`, `id_category`, `seo_title`, `updated_at`, `status_button_register`, `created_at`, `is_display`) VALUES
(5, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625385434magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>VNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giới</p>', 2, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-06', 1, '2021-07-06', 1),
(6, 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625385697forest-and-mountain-graphic-design-template-logo-vector-21811483.jpg', '<p>VNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng</p>', 3, 'vntb-nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-05', 1, '2021-07-05', 1),
(7, 'VNTB – \'Ngăn chặn\' ma túy vào trường học', 'VNTB – \'Ngăn chặn\' ma túy vào trường học', '16253857591.PNG', '<p>VNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường học</p>', 6, 'vntb-ngan-chan-ma-tuy-vao-truong-hoc', '2021-07-02', 1, '2021-07-02', 1),
(8, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625389062magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>&aacute;dfghjk</p>', 7, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-01', 1, '2021-07-01', 1),
(9, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390447LAMDONG.jpg', '<p>https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7</p>', 4, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-04', 1, '2021-07-04', 1),
(10, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390581LAMDONG.jpg', '<p>&lt;a href=&#39;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&#39;&gt;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&lt;/a&gt;</p>', 5, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-03', 1, '2021-07-03', 1),
(11, 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625727398television.png', '<p>N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng<img alt=\"\" src=\"http://localhost/public/assets/upload/article/1625727276_content_1616535416_small_pkocs005.2.jpg\" /></p>', 1, 'nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2023-02-18', 1, '2021-07-08', 1),
(12, 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625727398television.png', '<p>N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng<img alt=\"\" src=\"http://localhost/public/assets/upload/article/1625727276_content_1616535416_small_pkocs005.2.jpg\" /></p>', 1, 'nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2023-02-18', 1, '2021-07-08', 1),
(13, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625385434magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>VNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giới</p>', 2, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-06', 1, '2021-07-06', 1),
(14, 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625385697forest-and-mountain-graphic-design-template-logo-vector-21811483.jpg', '<p>VNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng</p>', 3, 'vntb-nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-05', 1, '2021-07-05', 1),
(15, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390447LAMDONG.jpg', '<p>https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7</p>', 4, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-04', 1, '2021-07-04', 1),
(16, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390581LAMDONG.jpg', '<p>&lt;a href=&#39;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&#39;&gt;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&lt;/a&gt;</p>', 5, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-03', 1, '2021-07-03', 1),
(17, 'VNTB – \'Ngăn chặn\' ma túy vào trường học', 'VNTB – \'Ngăn chặn\' ma túy vào trường học', '16253857591.PNG', '<p>VNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường học</p>', 6, 'vntb-ngan-chan-ma-tuy-vao-truong-hoc', '2021-07-02', 1, '2021-07-02', 1),
(18, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625389062magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>&aacute;dfghjk</p>', 7, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-01', 1, '2021-07-01', 1),
(19, 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625727398television.png', '<p>N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng<img alt=\"\" src=\"http://localhost/public/assets/upload/article/1625727276_content_1616535416_small_pkocs005.2.jpg\" /></p>', 1, 'nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-08', 1, '2021-07-08', 1),
(20, 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625727398television.png', '<p>N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngN&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng<img alt=\"\" src=\"http://localhost/public/assets/upload/article/1625727276_content_1616535416_small_pkocs005.2.jpg\" /></p>', 1, 'nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-08', 1, '2021-07-08', 1),
(21, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625385434magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>VNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giới</p>', 2, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-06', 1, '2021-07-06', 1),
(22, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625385434magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>VNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giớiVNTB &ndash; Ph&aacute;t hiện, bắt giữ nhiều vụ bu&ocirc;n lậu thuốc l&aacute; qua bi&ecirc;n giới</p>', 2, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-06', 1, '2021-07-06', 1),
(23, 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625385697forest-and-mountain-graphic-design-template-logo-vector-21811483.jpg', '<p>VNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng</p>', 3, 'vntb-nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-05', 1, '2021-07-05', 1),
(24, 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625385697forest-and-mountain-graphic-design-template-logo-vector-21811483.jpg', '<p>VNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượngVNTB &ndash; N&ocirc;ng sản Việt chinh phục thị trường kh&oacute; t&iacute;nh bằng chất lượng</p>', 3, 'vntb-nong-san-viet-chinh-phuc-thi-truong-kho-tinh-bang-chat-luong', '2021-07-05', 1, '2021-07-05', 1),
(25, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390447LAMDONG.jpg', '<p>https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7</p>', 4, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-04', 1, '2021-07-04', 1),
(26, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390447LAMDONG.jpg', '<p>https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7</p>', 4, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-04', 1, '2021-07-04', 1),
(27, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390581LAMDONG.jpg', '<p>&lt;a href=&#39;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&#39;&gt;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&lt;/a&gt;</p>', 5, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-03', 1, '2021-07-03', 1),
(28, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', '1625390581LAMDONG.jpg', '<p>&lt;a href=&#39;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&#39;&gt;https://www.youtube.com/watch?v=zj_vwCxDfv0&amp;list=RDNUT1dsmC2Xg&amp;index=7&lt;/a&gt;</p>', 5, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-03', 1, '2021-07-03', 1),
(29, 'VNTB – \'Ngăn chặn\' ma túy vào trường học', 'VNTB – \'Ngăn chặn\' ma túy vào trường học', '16253857591.PNG', '<p>VNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường học</p>', 6, 'vntb-ngan-chan-ma-tuy-vao-truong-hoc', '2021-07-02', 1, '2021-07-02', 1),
(30, 'VNTB – \'Ngăn chặn\' ma túy vào trường học', 'VNTB – \'Ngăn chặn\' ma túy vào trường học', '16253857591.PNG', '<p>VNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường họcVNTB &ndash; &#39;Ngăn chặn&#39; ma t&uacute;y v&agrave;o trường học</p>', 6, 'vntb-ngan-chan-ma-tuy-vao-truong-hoc', '2021-07-02', 1, '2021-07-02', 1),
(31, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625389062magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>&aacute;dfghjk</p>', 7, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-01', 0, '2021-07-01', 1),
(32, 'VNTB – Phát hiện, bắt giữ nhiều vụ buôn lậu thuốc lá qua biên giới', 'VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng VNTB – Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '1625389062magic-forest-logo-leaf-trees-logo-beautiful-logo-vector-10780995.jpg', '<p>&aacute;dfghjk</p>', 7, 'vntb-phat-hien-bat-giu-nhieu-vu-buon-lau-thuoc-la-qua-bien-gioi', '2021-07-01', 0, '2021-07-01', 1),
(33, 'Laptop Dell Inspiron 5593 i5 1035G1', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '16257398781616299105_sub_1035G1.Background (1).png', '<p>ddddddddddddddddddddddddddd</p>', 7, 'laptop-dell-inspiron-5593-i5-1035g1', '2021-07-08', 1, '2021-07-08', 1),
(34, 'Hello world!!!!', 'Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng Nông sản Việt chinh phục thị trường khó tính bằng chất lượng', '162598394216248000832dfac3c3c5812cdf7590.jpg', '<p>sdsdsadsd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 'hello-world', '2021-07-11', 0, '2021-07-08', 1),
(35, 'Thiên hạ luận: 25,2 ngàn tỷ đồng là nhiều đến cỡ nào?', 'Tính theo tỷ giá hối đoái đang ‘tuột thê thảm’ ở hiện tại, thì 1 tỷ đô la Mỹ quy đổi nhỉnh hơn 23 ngàn tỷ đồng Việt Nam.', '162598398516248000832dfac3c3c5812cdf7590.jpg', '<p>Test&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://facebook.com\" target=\"_blank\">Test</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/vntb/public/assets/upload/article/1625983982_content_16248000832dfac3c3c5812cdf7590.jpg\" style=\"height:602px; width:700px\" /></p>', 2, 'thien-ha-luan-252-ngan-ty-dong-la-nhieu-den-co-nao', '2021-07-11', 0, '2021-07-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Đối diện'),
(2, 'Dân chủ'),
(3, 'Diễn đàn'),
(4, 'Chính trị'),
(5, 'Kinh tế'),
(6, 'Thế giới'),
(7, 'VNTB');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `os` text NOT NULL,
  `location` text NOT NULL,
  `time_access` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `os`, `location`, `time_access`, `ip`) VALUES
(21, 'Windows 10 || CT: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '{\n  \"ip\": \"::1\",\n  \"bogon\": true\n}', '08/07/2021 - 11:38:36 || 08/07/2021 - 11:38:39 || 08/07/2021 - 11:38:41 || 08/07/2021 - 11:53:15 || 08/07/2021 - 11:54:32 || 08/07/2021 - 13:37:50 || 08/07/2021 - 13:44:09 || 08/07/2021 - 13:45:44 || 08/07/2021 - 14:03:06 || 08/07/2021 - 14:03:21 || 08/07/2021 - 14:08:22 || 08/07/2021 - 14:08:43 || 08/07/2021 - 14:17:17 || 08/07/2021 - 14:17:28 || 08/07/2021 - 14:23:32 || 08/07/2021 - 14:25:08 || 08/07/2021 - 14:25:37 || 08/07/2021 - 14:25:42 || 08/07/2021 - 14:27:21 || 08/07/2021 - 14:27:27 || 08/07/2021 - 14:27:46 || 08/07/2021 - 14:28:04 || 08/07/2021 - 14:28:36 || 08/07/2021 - 14:28:55 || 08/07/2021 - 14:29:39 || 08/07/2021 - 14:29:52 || 08/07/2021 - 14:32:08 || 08/07/2021 - 14:33:45 || 08/07/2021 - 14:33:58 || 08/07/2021 - 14:35:20 || 08/07/2021 - 14:35:21 || 08/07/2021 - 14:35:37 || 08/07/2021 - 14:35:46 || 08/07/2021 - 14:36:06 || 08/07/2021 - 14:36:28 || 08/07/2021 - 14:36:49 || 08/07/2021 - 14:50:43 || 08/07/2021 - 14:51:32 || 08/07/2021 - 14:51:54 || 08/07/2021 - 14:51:57 || 08/07/2021 - 14:52:26 || 08/07/2021 - 14:52:52 || 08/07/2021 - 14:53:25 || 08/07/2021 - 14:55:16 || 08/07/2021 - 14:56:54 || 08/07/2021 - 14:57:23 || 08/07/2021 - 14:58:34 || 08/07/2021 - 14:58:51 || 08/07/2021 - 14:59:37 || 08/07/2021 - 15:00:13 || 08/07/2021 - 15:01:45 || 08/07/2021 - 15:02:21 || 08/07/2021 - 15:02:36 || 08/07/2021 - 15:02:42 || 08/07/2021 - 15:03:09 || 08/07/2021 - 15:12:26 || 08/07/2021 - 15:12:40 || 08/07/2021 - 15:47:20 || 08/07/2021 - 15:52:06 || 08/07/2021 - 16:00:55 || 08/07/2021 - 16:01:22 || 08/07/2021 - 16:01:38 || 08/07/2021 - 16:02:05 || 08/07/2021 - 16:03:06 || 08/07/2021 - 16:03:30 || 08/07/2021 - 16:08:51 || 08/07/2021 - 16:09:39 || 08/07/2021 - 16:10:30 || 08/07/2021 - 16:10:40 || 08/07/2021 - 16:11:15 || 08/07/2021 - 16:15:12 || 08/07/2021 - 16:15:47 || 08/07/2021 - 16:16:05 || 08/07/2021 - 16:16:52 || 08/07/2021 - 16:17:54 || 08/07/2021 - 16:17:59 || 08/07/2021 - 16:18:13 || 08/07/2021 - 16:19:41 || 08/07/2021 - 16:20:12 || 08/07/2021 - 16:20:18 || 08/07/2021 - 16:30:43 || 08/07/2021 - 16:32:31 || 08/07/2021 - 16:34:30 || 08/07/2021 - 16:34:32 || 08/07/2021 - 16:34:33 || 08/07/2021 - 16:34:46 || 08/07/2021 - 16:35:38 || 08/07/2021 - 16:35:54 || 08/07/2021 - 16:37:03 || 08/07/2021 - 16:37:20 || 08/07/2021 - 16:42:00 || 08/07/2021 - 16:42:35 || 08/07/2021 - 16:43:13 || 08/07/2021 - 16:51:38 || 08/07/2021 - 16:51:39 || 08/07/2021 - 16:52:12 || 08/07/2021 - 16:52:12 || 08/07/2021 - 16:59:26 || 08/07/2021 - 16:59:26 || 08/07/2021 - 17:00:18 || 08/07/2021 - 17:00:18 || 08/07/2021 - 17:00:31 || 08/07/2021 - 17:00:32 || 08/07/2021 - 17:13:36 || 08/07/2021 - 17:26:59 || 08/07/2021 - 17:39:01 || 08/07/2021 - 17:39:05 || 08/07/2021 - 17:39:08 || 08/07/2021 - 17:39:21 || 08/07/2021 - 17:39:30 || 08/07/2021 - 17:39:56 || 08/07/2021 - 17:39:58 || 08/07/2021 - 17:40:32 || 08/07/2021 - 17:40:39 || 08/07/2021 - 17:41:19 || 08/07/2021 - 17:41:46 || 08/07/2021 - 17:41:49 || 08/07/2021 - 17:45:26 || 08/07/2021 - 17:45:29 || 11/07/2021 - 12:35:08 || 11/07/2021 - 12:35:21 || 11/07/2021 - 12:35:30 || 11/07/2021 - 12:35:33 || 11/07/2021 - 12:36:26 || 11/07/2021 - 12:48:37 || 11/07/2021 - 12:48:40 || 11/07/2021 - 12:48:43 || 11/07/2021 - 12:48:47 || 11/07/2021 - 13:01:44 || 11/07/2021 - 13:10:51 || 11/07/2021 - 13:11:34 || 11/07/2021 - 13:12:25', '::1'),
(22, 'Windows 10 || Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '{\n  \"ip\": \"127.0.0.1\",\n  \"bogon\": true\n}', 'Home: 12/02/2023 - 20:29:40 || Home: 12/02/2023 - 20:30:30 || Home: 12/02/2023 - 20:30:37 || Home: 12/02/2023 - 20:30:54 || Home: 12/02/2023 - 20:31:58 || Home: 12/02/2023 - 20:31:59 || ID=35: 12/02/2023 - 20:32:14 || ID=25: 12/02/2023 - 20:32:31 || ID=25: 12/02/2023 - 20:33:37 || ID=25: 12/02/2023 - 20:34:42 || ID=25: 12/02/2023 - 20:35:38 || ID=25: 12/02/2023 - 20:36:44 || Home: 12/02/2023 - 20:37:03 || Home: 12/02/2023 - 20:37:46 || Home: 12/02/2023 - 20:38:56 || Home: 12/02/2023 - 20:41:19 || Home: 12/02/2023 - 20:42:37 || Home: 12/02/2023 - 20:43:30 || Home: 12/02/2023 - 20:44:30 || ID=35: 12/02/2023 - 20:44:57 || ID=35: 12/02/2023 - 20:50:00 || ID=35: 12/02/2023 - 20:50:38 || ID=35: 12/02/2023 - 20:51:15 || ID=35: 12/02/2023 - 20:51:52 || ID=35: 12/02/2023 - 20:52:11 || Home: 12/02/2023 - 20:52:13 || Home: 12/02/2023 - 21:14:30 || Home: 12/02/2023 - 21:21:13 || Home: 12/02/2023 - 21:21:50 || Home: 12/02/2023 - 21:23:06 || ID=35: 12/02/2023 - 21:23:10 || ID=35: 12/02/2023 - 21:23:53 || ID=35: 12/02/2023 - 21:25:04 || ID=33: 12/02/2023 - 21:25:10 || ID=33: 12/02/2023 - 21:25:25 || ID=33: 12/02/2023 - 21:25:56 || Home: 12/02/2023 - 21:26:02 || ID=21: 12/02/2023 - 21:26:19 || Home: 12/02/2023 - 21:39:16 || Home: 18/02/2023 - 10:32:16 || Home: 18/02/2023 - 10:32:21 || Home: 18/02/2023 - 10:39:09 || Home: 18/02/2023 - 10:56:42 || Home: 18/02/2023 - 11:01:55 || Home: 18/02/2023 - 11:06:10 || Home: 18/02/2023 - 11:06:44 || Home: 18/02/2023 - 11:07:59 || Home: 18/02/2023 - 11:10:19 || Home: 18/02/2023 - 11:10:20 || Home: 18/02/2023 - 11:15:02 || Home: 18/02/2023 - 11:15:19 || Home: 18/02/2023 - 11:18:05 || Home: 18/02/2023 - 11:24:01 || Home: 18/02/2023 - 11:25:07 || Home: 18/02/2023 - 11:30:48 || Home: 18/02/2023 - 11:31:32', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `ip` text DEFAULT NULL,
  `time_access` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ip`, `time_access`) VALUES
(3, 'hanhnvctk40@gmail.com', '123123123 || 1111111111', '::1', ''),
(4, 'phuongcat@gmail.com', 'phuong123456', '127.0.0.1', '12/02/2023 - 20:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
