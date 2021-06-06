-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 05:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'test', '123');

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
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `background_image`, `content`, `updated_at`, `created_at`) VALUES
(1, 'Thiên hạ luận: 25,2 ngàn tỷ đồng là nhiều đến cỡ nào?', 'Tính theo tỷ giá hối đoái đang ‘tuột thê thảm’ ở hiện tại, thì 1 tỷ đô la Mỹ quy đổi nhỉnh hơn 23 ngàn tỷ đồng Việt Nam.', '1622993151toyota-camry--800x500_c.jpg', '<p>Dự &aacute;n đường sắt C&aacute;t Linh &ndash; H&agrave; Đ&ocirc;ng d&agrave;i 13.5 c&acirc;y số, khởi c&ocirc;ng th&aacute;ng 10-2011 với vốn ban đầu 552 triệu USD do Trung Quốc cho vay, đến nay th&igrave; số vốn đội tới gần 1 tỷ đ&ocirc; la Mỹ v&agrave; vẫn chưa biết bao giờ sẽ vận h&agrave;nh.</p>\r\n\r\n<p>Th&aacute;ng 6 năm ngo&aacute;i, trong thảo luận tại tổ ở kỳ họp Quốc hội, một đại biểu đ&atilde; so s&aacute;nh thiệt hại chậm đưa v&agrave;o khai th&aacute;c c&aacute;c dự &aacute;n đầu tư vẫn t&igrave;nh trạng &lsquo;đắp chiếu&rsquo; như đường sắt C&aacute;t Linh &ndash; H&agrave; Đ&ocirc;ng, như Nhiệt điện Th&aacute;i B&igrave;nh&hellip; l&agrave; &ldquo;mỗi ng&agrave;y mở mắt ra l&agrave; mất 1 con Toyota Camry&rdquo;.</p>\r\n\r\n<p>Một chiếc Toyota Camry gi&aacute; chưa lăn b&aacute;nh ở Việt Nam, t&ugrave;y v&agrave;o đời xe m&agrave; dao động từ 1 tỷ 029 triệu đến 1 tỷ 235 triệu đồng. Nghĩa l&agrave; t&iacute;nh từ th&aacute;ng 6-2020 đến th&aacute;ng 6-2021, dự &aacute;n đường sắt C&aacute;t Linh &ndash; H&agrave; Đ&ocirc;ng đội th&ecirc;m &iacute;t nhất cũng phải từ 365 tỷ bạc.</p>\r\n\r\n<p>So s&aacute;nh l&ograve;ng v&ograve;ng để thấy rằng con số 25,5 ng&agrave;n tỷ đồng l&agrave; lớn hay nhỏ c&ograve;n t&ugrave;y v&agrave;o l&yacute; do giải ng&acirc;n.</p>\r\n\r\n<p>V&agrave; 25,5 ng&agrave;n tỷ đồng ch&iacute;nh l&agrave; con số m&agrave; tr&ecirc;n ti vi v&agrave;o tối thứ bảy 5-6, người ta thấy tại H&agrave; Nội đ&atilde; c&ocirc;ng bố khi n&oacute;i về Quỹ vaccine ph&ograve;ng COVID-19, khi Quỹ n&agrave;y ra mắt. Theo Bộ T&agrave;i ch&iacute;nh, Quỹ được th&agrave;nh lập với mục ti&ecirc;u tiếp nhận, quản l&yacute;, sử dụng c&aacute;c ngu&ocirc;̀n t&agrave;i trợ, h&ocirc;̃ trợ, đ&oacute;ng g&oacute;p trong nước v&agrave; ngo&agrave;i nước để c&ugrave;ng với nguồn lực ng&acirc;n s&aacute;ch nh&agrave; nước mua, nhập khẩu vaccine, nghi&ecirc;n cứu, sản xuất vaccine trong nước để ti&ecirc;m chủng cho người d&acirc;n.</p>\r\n\r\n<p>Dự kiến, Việt Nam cần mua 150 triệu liều vaccine ph&ograve;ng COVID-19 để ti&ecirc;m ph&ograve;ng cho khoảng 75 triệu người d&acirc;n, với tổng nhu cầu kinh ph&iacute; ước khoảng 25,2 ng&agrave;n tỷ đồng.</p>\r\n\r\n<p>25,5 ng&agrave;n tỷ đồng, l&agrave; tương đương với gần 0,4% GDP năm 2020 của cả nước, 0,5% thu nhập của to&agrave;n d&acirc;n v&agrave; 1,5% số chi ng&acirc;n s&aacute;ch nh&agrave; nước. N&oacute; thấp hơn rất nhiều so với số tổn thất của to&agrave;n x&atilde; hội do sự chậm trễ của hai tuyến đường sắt đ&ocirc; thị C&aacute;t Linh &ndash; H&agrave; Đ&ocirc;ng ở H&agrave; Nội, v&agrave; Bến Th&agrave;nh &ndash; Suối Ti&ecirc;n ở TP.HCM.</p>\r\n\r\n<p>N&oacute;i một c&aacute;ch đơn giản, số tiền cần thiết để mua vắc xin (vaccine) l&agrave; con số rất nhỏ so với tiềm lực quốc gia, ng&acirc;n s&aacute;ch của nh&agrave; nước, thu nhập của người d&acirc;n v&agrave; những l&atilde;ng ph&iacute; đang xảy ra h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Y tế c&ocirc;ng cộng, trong đ&oacute; ti&ecirc;m vắc xin cho to&agrave;n d&acirc;n l&agrave; một vai tr&ograve; v&agrave; chức năng cơ bản của nh&agrave; nước. Đ&acirc;y l&agrave; việc nh&agrave; nước cần phải d&ugrave;ng ng&acirc;n s&aacute;ch để thực hiện việc n&agrave;y, nhất l&agrave; trong bối cảnh chống Covid như hiện nay.</p>\r\n\r\n<p>Do vậy, ngay lập tức Nh&agrave; nước n&ecirc;n d&agrave;nh đủ ng&acirc;n s&aacute;ch cho việc vừa quan trọng vừa cấp b&aacute;ch n&agrave;y. Đối với, việc vận động người d&acirc;n đ&oacute;ng g&oacute;p v&agrave;o quỹ vắc xin c&oacute; hai mặt. Điểm lợi l&agrave; c&oacute; thể biết được sự chung tay của người d&acirc;n trong bối cảnh kh&oacute; khăn v&agrave; giảm g&aacute;nh nặng ng&acirc;n s&aacute;ch. Tuy nhi&ecirc;n, điểm kh&ocirc;ng t&iacute;ch cực l&agrave; c&oacute; thể ảnh hưởng đến c&aacute;c hoạt động kinh tế v&agrave; đời sống người d&acirc;n.</p>\r\n\r\n<p>Tr&ecirc;n thực tế, ch&iacute;nh s&aacute;ch của nhiều quốc gia trong bối cảnh dịch bệnh, l&agrave; cho tiền người d&acirc;n như một lưới an sinh v&agrave; k&iacute;ch th&iacute;ch c&aacute;c hoạt động kinh tế (bản chất n&oacute; l&agrave; một g&oacute;i k&iacute;ch cầu). Khi l&agrave;m ngược lại th&igrave; sẽ c&oacute; t&aacute;c dụng ngược với g&oacute;i k&iacute;ch cầu.</p>\r\n\r\n<p>B&ecirc;n cạnh để to&agrave;n d&acirc;n được ti&ecirc;m vắc xin, việc gi&uacute;p người d&acirc;n v&agrave; nền kinh tế &iacute;t chịu t&aacute;c động ti&ecirc;u cực của dịch bệnh cũng kh&ocirc;ng k&eacute;m phần quan trọng. Do vậy, cần hết sức hạn chế những ch&iacute;nh s&aacute;ch g&acirc;y t&aacute;c động kh&ocirc;ng tốt cho nền kinh tế v&agrave; người d&acirc;n.</p>\r\n\r\n<p>D&ugrave; bằng c&aacute;ch n&agrave;o th&igrave; chi ph&iacute; để ti&ecirc;m vắc xin cho to&agrave;n d&acirc;n cũng do gần 100 triệu người Việt Nam g&aacute;nh chịu. Do vậy, ch&igrave;a kho&aacute; l&agrave; lựa chọn c&aacute;ch thức triển khai, chứ kh&ocirc;ng phải chỉ l&agrave; c&aacute;ch l&agrave;m sao huy động đủ nguồn lực để mua ch&uacute;ng như kiểu của Quỹ vaccine ph&ograve;ng COVID-19 ra mắt h&ocirc;m tối 5-6 v&agrave; được tường thuật trực tiếp tr&ecirc;n k&ecirc;nh VTV1 của Đ&agrave;i Truyền h&igrave;nh Việt Nam.</p>', '2021-06-06', '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `ip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
