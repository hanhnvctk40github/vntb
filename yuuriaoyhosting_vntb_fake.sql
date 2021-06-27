-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2021 at 11:15 AM
-- Server version: 10.3.29-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuuriaoyhosting_vntb_fake`
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
(1, 'Bắt bà Nguyễn Thúy Hạnh: Nhà nước muốn xóa bỏ quyền tự do ngôn luận', 'Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng trăm ngàn người dân không còn sợ hãi.', '16246940708fa45f0c940a783be8e1c9d8877e4e21.jpg', '<p>Ng&agrave;y 7/4, b&agrave; Nguyễn Th&uacute;y Hạnh bị bắt v&igrave; tội &ldquo;l&agrave;m, t&agrave;ng trữ, ph&aacute;t t&aacute;n hoặc tuy&ecirc;n truyền th&ocirc;ng tin, t&agrave;i liệu, vật phẩm nhằm chống Nh&agrave; nước CHXHCN Việt Nam quy định tại Điều 117 Bộ luật H&igrave;nh sự năm 2015,&rdquo; theo B&aacute;o Nh&acirc;n D&acirc;n (1). Tuy vậy, l&yacute; do thực sự của việc bắt giữ: b&agrave; Hạnh l&agrave; biểu tượng cũng như người điều h&agrave;nh Quỹ 50K, một quỹ từ thiện gi&uacute;p đỡ c&aacute;c t&ugrave; nh&acirc;n lương t&acirc;m v&agrave; gia đ&igrave;nh họ, theo t&ocirc;i. D&ugrave; ch&iacute;nh quyền c&oacute; tuy&ecirc;n bố b&agrave; Hạnh bị bắt v&igrave; tội tuy&ecirc;n truyền chống nh&agrave; nước, người ta kh&oacute; c&oacute; thể tin v&agrave;o điều n&agrave;y. Bản th&acirc;n t&ocirc;i chưa bao giờ đọc được b&agrave;i viết n&agrave;o của b&agrave; c&oacute; nội dung n&agrave;y, d&ugrave; theo ti&ecirc;u chuẩn đ&aacute;nh gi&aacute; của C&ocirc;ng An Việt Nam. Xem trang Facebook của b&agrave;, t&ocirc;i cũng kh&ocirc;ng thấy b&agrave;i n&agrave;o c&oacute; nội dung như thế (2). &Ocirc;ng Huỳnh Ngọc Ch&ecirc;nh, chồng b&agrave;, cũng n&oacute;i &ocirc;ng kh&ocirc;ng thấy b&agrave; phạm tội n&agrave;y. Rằng &ocirc;ng viết nhiều b&agrave;i c&oacute; nội dung phản biện mạnh mẽ về c&aacute;c vấn đề x&atilde; hội ở Việt Nam. Nhiều hơn b&agrave; Hạnh rất nhiều, nhưng &ocirc;ng chưa bị bắt (3). D&ugrave; g&igrave; đi nữa, người ta kh&oacute; c&oacute; thể &ldquo;tuy&ecirc;n truyền&rdquo; m&agrave; x&atilde; hội kh&ocirc;ng biết được. Tuy&ecirc;n truyền, tự th&acirc;n n&oacute;, l&agrave; ph&aacute;t t&aacute;n rộng r&atilde;i c&aacute;c th&ocirc;ng điệp. Sẽ rất lạ nếu cơ quan An Ninh Việt Nam trưng ra được những bằng chứng thuyết phục, d&ugrave; theo ti&ecirc;u chuẩn của một chế độ độc t&agrave;i. Ngược lại, c&oacute; nhiều l&yacute; do để tin rằng Chế độ bắt giữ v&igrave; b&agrave; l&agrave; biểu tượng v&agrave; l&agrave; người điều h&agrave;nh Quỹ 50K, một nỗ lực ti&ecirc;n phong, &iacute;t nhất l&agrave; ở kh&iacute;a cạnh k&ecirc;u gọi sự tham gia của những khoản đ&oacute;ng g&oacute;p rất nhỏ, trong việc hỗ trợ t&ugrave; nh&acirc;n lương t&acirc;m, những người đ&atilde; can đảm n&oacute;i l&ecirc;n sự thật, theo quyền m&agrave; họ được hưởng, theo c&aacute;c c&ocirc;ng ước m&agrave; Chế độ đ&atilde; cam kết với quốc tế. Bản th&acirc;n t&ecirc;n quỹ, 50K (50 ng&agrave;n Đồng) thể hiện ước muốn nhận được sự đ&oacute;ng g&oacute;p của những người d&acirc;n b&igrave;nh thường. Chỉ cần 50 ng&agrave;n Đồng, người ta c&oacute; thể gi&uacute;p cho những t&ugrave; nh&acirc;n lương t&acirc;m, những người thay họ cất l&ecirc;n tiếng n&oacute;i của sự thật. Hơn nữa, việc gi&uacute;p qua Quỹ 50K cũng rất an to&agrave;n v&agrave; tiện lợi. Kh&oacute; c&oacute; thể h&igrave;nh dung một người n&agrave;o đ&oacute; bị bắt giam, bị truy tố v&igrave; tặng cho một quỹ từ thiện 50 ng&agrave;n đồng. Người ta cũng kh&ocirc;ng phải gi&uacute;p trực tiếp, kh&ocirc;ng li&ecirc;n quan trực tiếp, họ chỉ cần chuyển tiền cho Quỹ, họ sẽ lo x&aacute;c định người cần được gi&uacute;p, li&ecirc;n hệ, v&agrave; chuyển tiền cho gia đ&igrave;nh. Quan trọng hơn hết, quỹ n&agrave;y gi&uacute;p cho người d&acirc;n vượt qua nỗi sợ h&atilde;i bạo quyền. Với một h&agrave;nh động nhỏ, tặng 50 ng&agrave;n Đồng cho một quỹ từ thiện, người ta đ&atilde; thực hiện một h&agrave;nh động phản kh&aacute;ng. Khi một người c&oacute; một h&agrave;nh động phản kh&aacute;ng nhỏ, họ bớt sợ h&atilde;i, v&agrave; sẵn s&agrave;ng hơn cho những h&agrave;nh động phản kh&aacute;ng lớn hơn, c&oacute; &yacute; nghĩa hơn. Do đ&oacute;, Quỹ 50K l&agrave; một c&aacute;i gai quan trọng m&agrave; Chế độ cần phải nhổ để duy tr&igrave; nền cai trị độc t&agrave;i. Họ phải chặn đứng một phong tr&agrave;o x&atilde; hội, một phong tr&agrave;o ủng hộ những c&aacute; nh&acirc;n d&aacute;m thực thi quyền tự do ng&ocirc;n luận. Hậu quả sẽ như thế n&agrave;o nếu h&agrave;ng ng&agrave;n, h&agrave;ng chục ng&agrave;n, hay h&agrave;ng trăm ng&agrave;n người tham gia phong tr&agrave;o n&agrave;y? C&oacute; lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với h&agrave;ng trăm ng&agrave;n người d&acirc;n kh&ocirc;ng c&ograve;n sợ h&atilde;i. Cuộc đấu tranh n&agrave;o cũng sẽ g&acirc;y ra những mất m&aacute;t. Những kẻ độc t&agrave;i đ&atilde; ra đ&ograve;n, h&atilde;y chờ xem x&atilde; hội d&acirc;n sự phản ứng thế n&agrave;o. Ri&ecirc;ng t&ocirc;i, t&ocirc;i tin v&agrave;o một kết cục c&oacute; hậu cho Việt Nam, cho x&atilde; hội d&acirc;n sự. Chắc chắn người d&acirc;n sẽ c&oacute; những giải ph&aacute;p mới. H&atilde;y đợi đấy.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/vntb/public/assets/upload/article/1624693928_content_8fa45f0c940a783be8e1c9d8877e4e21.jpg\" style=\"height:360px; width:540px\" /></p>', '2021-06-26', '2021-06-05'),
(2, 'Bắt bà Nguyễn Thúy Hạnh: Nhà nước muốn xóa bỏ quyền tự do ngôn luận', 'Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng trăm ngàn người dân không còn sợ hãi.', '16246985128fa45f0c940a783be8e1c9d8877e4e21.jpg', '<p>Ng&agrave;y 7/4, b&agrave; Nguyễn Th&uacute;y Hạnh bị bắt v&igrave; tội &ldquo;l&agrave;m, t&agrave;ng trữ, ph&aacute;t t&aacute;n hoặc tuy&ecirc;n truyền th&ocirc;ng tin, t&agrave;i liệu, vật phẩm nhằm chống Nh&agrave; nước CHXHCN Việt Nam quy định tại Điều 117 Bộ luật H&igrave;nh sự năm 2015,&rdquo; theo B&aacute;o Nh&acirc;n D&acirc;n (1). Tuy vậy, l&yacute; do thực sự của việc bắt giữ: b&agrave; Hạnh l&agrave; biểu tượng cũng như người điều h&agrave;nh Quỹ 50K, một quỹ từ thiện gi&uacute;p đỡ c&aacute;c t&ugrave; nh&acirc;n lương t&acirc;m v&agrave; gia đ&igrave;nh họ, theo t&ocirc;i. D&ugrave; ch&iacute;nh quyền c&oacute; tuy&ecirc;n bố b&agrave; Hạnh bị bắt v&igrave; tội tuy&ecirc;n truyền chống nh&agrave; nước, người ta kh&oacute; c&oacute; thể tin v&agrave;o điều n&agrave;y. Bản th&acirc;n t&ocirc;i chưa bao giờ đọc được b&agrave;i viết n&agrave;o của b&agrave; c&oacute; nội dung n&agrave;y, d&ugrave; theo ti&ecirc;u chuẩn đ&aacute;nh gi&aacute; của C&ocirc;ng An Việt Nam. Xem trang Facebook của b&agrave;, t&ocirc;i cũng kh&ocirc;ng thấy b&agrave;i n&agrave;o c&oacute; nội dung như thế (2). &Ocirc;ng Huỳnh Ngọc Ch&ecirc;nh, chồng b&agrave;, cũng n&oacute;i &ocirc;ng kh&ocirc;ng thấy b&agrave; phạm tội n&agrave;y. Rằng &ocirc;ng viết nhiều b&agrave;i c&oacute; nội dung phản biện mạnh mẽ về c&aacute;c vấn đề x&atilde; hội ở Việt Nam. Nhiều hơn b&agrave; Hạnh rất nhiều, nhưng &ocirc;ng chưa bị bắt (3). D&ugrave; g&igrave; đi nữa, người ta kh&oacute; c&oacute; thể &ldquo;tuy&ecirc;n truyền&rdquo; m&agrave; x&atilde; hội kh&ocirc;ng biết được. Tuy&ecirc;n truyền, tự th&acirc;n n&oacute;, l&agrave; ph&aacute;t t&aacute;n rộng r&atilde;i c&aacute;c th&ocirc;ng điệp. Sẽ rất lạ nếu cơ quan An Ninh Việt Nam trưng ra được những bằng chứng thuyết phục, d&ugrave; theo ti&ecirc;u chuẩn của một chế độ độc t&agrave;i. Ngược lại, c&oacute; nhiều l&yacute; do để tin rằng Chế độ bắt giữ v&igrave; b&agrave; l&agrave; biểu tượng v&agrave; l&agrave; người điều h&agrave;nh Quỹ 50K, một nỗ lực ti&ecirc;n phong, &iacute;t nhất l&agrave; ở kh&iacute;a cạnh k&ecirc;u gọi sự tham gia của những khoản đ&oacute;ng g&oacute;p rất nhỏ, trong việc hỗ trợ t&ugrave; nh&acirc;n lương t&acirc;m, những người đ&atilde; can đảm n&oacute;i l&ecirc;n sự thật, theo quyền m&agrave; họ được hưởng, theo c&aacute;c c&ocirc;ng ước m&agrave; Chế độ đ&atilde; cam kết với quốc tế. Bản th&acirc;n t&ecirc;n quỹ, 50K (50 ng&agrave;n Đồng) thể hiện ước muốn nhận được sự đ&oacute;ng g&oacute;p của những người d&acirc;n b&igrave;nh thường. Chỉ cần 50 ng&agrave;n Đồng, người ta c&oacute; thể gi&uacute;p cho những t&ugrave; nh&acirc;n lương t&acirc;m, những người thay họ cất l&ecirc;n tiếng n&oacute;i của sự thật. Hơn nữa, việc gi&uacute;p qua Quỹ 50K cũng rất an to&agrave;n v&agrave; tiện lợi. Kh&oacute; c&oacute; thể h&igrave;nh dung một người n&agrave;o đ&oacute; bị bắt giam, bị truy tố v&igrave; tặng cho một quỹ từ thiện 50 ng&agrave;n đồng. Người ta cũng kh&ocirc;ng phải gi&uacute;p trực tiếp, kh&ocirc;ng li&ecirc;n quan trực tiếp, họ chỉ cần chuyển tiền cho Quỹ, họ sẽ lo x&aacute;c định người cần được gi&uacute;p, li&ecirc;n hệ, v&agrave; chuyển tiền cho gia đ&igrave;nh. Quan trọng hơn hết, quỹ n&agrave;y gi&uacute;p cho người d&acirc;n vượt qua nỗi sợ h&atilde;i bạo quyền. Với một h&agrave;nh động nhỏ, tặng 50 ng&agrave;n Đồng cho một quỹ từ thiện, người ta đ&atilde; thực hiện một h&agrave;nh động phản kh&aacute;ng. Khi một người c&oacute; một h&agrave;nh động phản kh&aacute;ng nhỏ, họ bớt sợ h&atilde;i, v&agrave; sẵn s&agrave;ng hơn cho những h&agrave;nh động phản kh&aacute;ng lớn hơn, c&oacute; &yacute; nghĩa hơn. Do đ&oacute;, Quỹ 50K l&agrave; một c&aacute;i gai quan trọng m&agrave; Chế độ cần phải nhổ để duy tr&igrave; nền cai trị độc t&agrave;i. Họ phải chặn đứng một phong tr&agrave;o x&atilde; hội, một phong tr&agrave;o ủng hộ những c&aacute; nh&acirc;n d&aacute;m thực thi quyền tự do ng&ocirc;n luận. Hậu quả sẽ như thế n&agrave;o nếu h&agrave;ng ng&agrave;n, h&agrave;ng chục ng&agrave;n, hay h&agrave;ng trăm ng&agrave;n người tham gia phong tr&agrave;o n&agrave;y? C&oacute; lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với h&agrave;ng trăm ng&agrave;n người d&acirc;n kh&ocirc;ng c&ograve;n sợ h&atilde;i. Cuộc đấu tranh n&agrave;o cũng sẽ g&acirc;y ra những mất m&aacute;t. Những kẻ độc t&agrave;i đ&atilde; ra đ&ograve;n, h&atilde;y chờ xem x&atilde; hội d&acirc;n sự phản ứng thế n&agrave;o. Ri&ecirc;ng t&ocirc;i, t&ocirc;i tin v&agrave;o một kết cục c&oacute; hậu cho Việt Nam, cho x&atilde; hội d&acirc;n sự. Chắc chắn người d&acirc;n sẽ c&oacute; những giải ph&aacute;p mới. H&atilde;y đợi đấy.</p>', '2021-06-26', '2021-06-05'),
(3, 'Bắt bà Nguyễn Thúy Hạnh: Nhà nước muốn xóa bỏ quyền tự do ngôn luận', 'Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng trăm ngàn người dân không còn sợ hãi.', '1624698520reno5marvel1-1_800x450_800x450.jpg', '<p>Ng&agrave;y 7/4, b&agrave; Nguyễn Th&uacute;y Hạnh bị bắt v&igrave; tội &ldquo;l&agrave;m, t&agrave;ng trữ, ph&aacute;t t&aacute;n hoặc tuy&ecirc;n truyền th&ocirc;ng tin, t&agrave;i liệu, vật phẩm nhằm chống Nh&agrave; nước CHXHCN Việt Nam quy định tại Điều 117 Bộ luật H&igrave;nh sự năm 2015,&rdquo; theo B&aacute;o Nh&acirc;n D&acirc;n (1). Tuy vậy, l&yacute; do thực sự của việc bắt giữ: b&agrave; Hạnh l&agrave; biểu tượng cũng như người điều h&agrave;nh Quỹ 50K, một quỹ từ thiện gi&uacute;p đỡ c&aacute;c t&ugrave; nh&acirc;n lương t&acirc;m v&agrave; gia đ&igrave;nh họ, theo t&ocirc;i. D&ugrave; ch&iacute;nh quyền c&oacute; tuy&ecirc;n bố b&agrave; Hạnh bị bắt v&igrave; tội tuy&ecirc;n truyền chống nh&agrave; nước, người ta kh&oacute; c&oacute; thể tin v&agrave;o điều n&agrave;y. Bản th&acirc;n t&ocirc;i chưa bao giờ đọc được b&agrave;i viết n&agrave;o của b&agrave; c&oacute; nội dung n&agrave;y, d&ugrave; theo ti&ecirc;u chuẩn đ&aacute;nh gi&aacute; của C&ocirc;ng An Việt Nam. Xem trang Facebook của b&agrave;, t&ocirc;i cũng kh&ocirc;ng thấy b&agrave;i n&agrave;o c&oacute; nội dung như thế (2). &Ocirc;ng Huỳnh Ngọc Ch&ecirc;nh, chồng b&agrave;, cũng n&oacute;i &ocirc;ng kh&ocirc;ng thấy b&agrave; phạm tội n&agrave;y. Rằng &ocirc;ng viết nhiều b&agrave;i c&oacute; nội dung phản biện mạnh mẽ về c&aacute;c vấn đề x&atilde; hội ở Việt Nam. Nhiều hơn b&agrave; Hạnh rất nhiều, nhưng &ocirc;ng chưa bị bắt (3). D&ugrave; g&igrave; đi nữa, người ta kh&oacute; c&oacute; thể &ldquo;tuy&ecirc;n truyền&rdquo; m&agrave; x&atilde; hội kh&ocirc;ng biết được. Tuy&ecirc;n truyền, tự th&acirc;n n&oacute;, l&agrave; ph&aacute;t t&aacute;n rộng r&atilde;i c&aacute;c th&ocirc;ng điệp. Sẽ rất lạ nếu cơ quan An Ninh Việt Nam trưng ra được những bằng chứng thuyết phục, d&ugrave; theo ti&ecirc;u chuẩn của một chế độ độc t&agrave;i. Ngược lại, c&oacute; nhiều l&yacute; do để tin rằng Chế độ bắt giữ v&igrave; b&agrave; l&agrave; biểu tượng v&agrave; l&agrave; người điều h&agrave;nh Quỹ 50K, một nỗ lực ti&ecirc;n phong, &iacute;t nhất l&agrave; ở kh&iacute;a cạnh k&ecirc;u gọi sự tham gia của những khoản đ&oacute;ng g&oacute;p rất nhỏ, trong việc hỗ trợ t&ugrave; nh&acirc;n lương t&acirc;m, những người đ&atilde; can đảm n&oacute;i l&ecirc;n sự thật, theo quyền m&agrave; họ được hưởng, theo c&aacute;c c&ocirc;ng ước m&agrave; Chế độ đ&atilde; cam kết với quốc tế. Bản th&acirc;n t&ecirc;n quỹ, 50K (50 ng&agrave;n Đồng) thể hiện ước muốn nhận được sự đ&oacute;ng g&oacute;p của những người d&acirc;n b&igrave;nh thường. Chỉ cần 50 ng&agrave;n Đồng, người ta c&oacute; thể gi&uacute;p cho những t&ugrave; nh&acirc;n lương t&acirc;m, những người thay họ cất l&ecirc;n tiếng n&oacute;i của sự thật. Hơn nữa, việc gi&uacute;p qua Quỹ 50K cũng rất an to&agrave;n v&agrave; tiện lợi. Kh&oacute; c&oacute; thể h&igrave;nh dung một người n&agrave;o đ&oacute; bị bắt giam, bị truy tố v&igrave; tặng cho một quỹ từ thiện 50 ng&agrave;n đồng. Người ta cũng kh&ocirc;ng phải gi&uacute;p trực tiếp, kh&ocirc;ng li&ecirc;n quan trực tiếp, họ chỉ cần chuyển tiền cho Quỹ, họ sẽ lo x&aacute;c định người cần được gi&uacute;p, li&ecirc;n hệ, v&agrave; chuyển tiền cho gia đ&igrave;nh. Quan trọng hơn hết, quỹ n&agrave;y gi&uacute;p cho người d&acirc;n vượt qua nỗi sợ h&atilde;i bạo quyền. Với một h&agrave;nh động nhỏ, tặng 50 ng&agrave;n Đồng cho một quỹ từ thiện, người ta đ&atilde; thực hiện một h&agrave;nh động phản kh&aacute;ng. Khi một người c&oacute; một h&agrave;nh động phản kh&aacute;ng nhỏ, họ bớt sợ h&atilde;i, v&agrave; sẵn s&agrave;ng hơn cho những h&agrave;nh động phản kh&aacute;ng lớn hơn, c&oacute; &yacute; nghĩa hơn. Do đ&oacute;, Quỹ 50K l&agrave; một c&aacute;i gai quan trọng m&agrave; Chế độ cần phải nhổ để duy tr&igrave; nền cai trị độc t&agrave;i. Họ phải chặn đứng một phong tr&agrave;o x&atilde; hội, một phong tr&agrave;o ủng hộ những c&aacute; nh&acirc;n d&aacute;m thực thi quyền tự do ng&ocirc;n luận. Hậu quả sẽ như thế n&agrave;o nếu h&agrave;ng ng&agrave;n, h&agrave;ng chục ng&agrave;n, hay h&agrave;ng trăm ng&agrave;n người tham gia phong tr&agrave;o n&agrave;y? C&oacute; lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với h&agrave;ng trăm ng&agrave;n người d&acirc;n kh&ocirc;ng c&ograve;n sợ h&atilde;i. Cuộc đấu tranh n&agrave;o cũng sẽ g&acirc;y ra những mất m&aacute;t. Những kẻ độc t&agrave;i đ&atilde; ra đ&ograve;n, h&atilde;y chờ xem x&atilde; hội d&acirc;n sự phản ứng thế n&agrave;o. Ri&ecirc;ng t&ocirc;i, t&ocirc;i tin v&agrave;o một kết cục c&oacute; hậu cho Việt Nam, cho x&atilde; hội d&acirc;n sự. Chắc chắn người d&acirc;n sẽ c&oacute; những giải ph&aacute;p mới. H&atilde;y đợi đấy.</p>', '2021-06-26', '2021-06-05');

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
(19, 'Windows 10', '{\n  \"ip\": \"116.105.94.64\",\n  \"city\": \"Ðà Lạt\",\n  \"region\": \"Lâm Đồng\",\n  \"country\": \"VN\",\n  \"loc\": \"11.9465,108.4419\",\n  \"org\": \"AS24086 Viettel Corporation\",\n  \"postal\": \"66150\",\n  \"timezone\": \"Asia/Ho_Chi_Minh\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:17:34, 26/06/2021 - 17:17:44, 26/06/2021 - 17:17:52, 26/06/2021 - 17:22:54, 26/06/2021 - 17:23:23, 26/06/2021 - 17:23:34, 26/06/2021 - 17:37:51, 26/06/2021 - 17:40:58, 26/06/2021 - 17:41:13', '116.105.94.64'),
(20, 'Unknown OS Platform', '{\n  \"ip\": \"69.63.184.117\",\n  \"hostname\": \"fwdproxy-ncg-117.fbsv.net\",\n  \"city\": \"Union City\",\n  \"region\": \"Georgia\",\n  \"country\": \"US\",\n  \"loc\": \"33.5871,-84.5424\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"30291\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:18:11, 26/06/2021 - 17:18:12, 26/06/2021 - 17:18:21, 27/06/2021 - 09:35:28', '69.63.184.117'),
(21, 'Unknown OS Platform', '{\n  \"ip\": \"69.63.184.116\",\n  \"hostname\": \"fwdproxy-ncg-116.fbsv.net\",\n  \"city\": \"Union City\",\n  \"region\": \"Georgia\",\n  \"country\": \"US\",\n  \"loc\": \"33.5871,-84.5424\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"30291\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:18:20', '69.63.184.116'),
(22, 'Unknown OS Platform', '{\n  \"ip\": \"69.63.184.119\",\n  \"hostname\": \"fwdproxy-ncg-119.fbsv.net\",\n  \"city\": \"Union City\",\n  \"region\": \"Georgia\",\n  \"country\": \"US\",\n  \"loc\": \"33.5871,-84.5424\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"30291\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:18:20', '69.63.184.119'),
(23, 'Unknown OS Platform', '{\n  \"ip\": \"69.63.184.119\",\n  \"hostname\": \"fwdproxy-ncg-119.fbsv.net\",\n  \"city\": \"Union City\",\n  \"region\": \"Georgia\",\n  \"country\": \"US\",\n  \"loc\": \"33.5871,-84.5424\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"30291\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:18:20', '69.63.184.119'),
(24, 'Unknown OS Platform', '{\n  \"ip\": \"69.63.184.118\",\n  \"hostname\": \"fwdproxy-ncg-118.fbsv.net\",\n  \"city\": \"Union City\",\n  \"region\": \"Georgia\",\n  \"country\": \"US\",\n  \"loc\": \"33.5871,-84.5424\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"30291\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 17:18:25', '69.63.184.118'),
(25, 'Unknown OS Platform', '{\n  \"ip\": \"173.252.95.17\",\n  \"hostname\": \"fwdproxy-atn-017.fbsv.net\",\n  \"city\": \"Altoona\",\n  \"region\": \"Iowa\",\n  \"country\": \"US\",\n  \"loc\": \"41.6442,-93.4647\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"50009\",\n  \"timezone\": \"America/Chicago\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 19:20:40', '173.252.95.17'),
(26, 'Unknown OS Platform', '{\n  \"ip\": \"66.220.149.35\",\n  \"hostname\": \"fwdproxy-prn-035.fbsv.net\",\n  \"city\": \"Prineville\",\n  \"region\": \"Oregon\",\n  \"country\": \"US\",\n  \"loc\": \"44.2998,-120.8345\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"97754\",\n  \"timezone\": \"America/Los_Angeles\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 21:22:46', '66.220.149.35'),
(27, 'Unknown OS Platform', '{\n  \"ip\": \"66.220.149.117\",\n  \"hostname\": \"fwdproxy-prn-117.fbsv.net\",\n  \"city\": \"Prineville\",\n  \"region\": \"Oregon\",\n  \"country\": \"US\",\n  \"loc\": \"44.2998,-120.8345\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"97754\",\n  \"timezone\": \"America/Los_Angeles\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 21:22:52', '66.220.149.117'),
(28, 'Unknown OS Platform', '{\n  \"ip\": \"66.220.149.21\",\n  \"hostname\": \"fwdproxy-prn-021.fbsv.net\",\n  \"city\": \"Prineville\",\n  \"region\": \"Oregon\",\n  \"country\": \"US\",\n  \"loc\": \"44.2998,-120.8345\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"97754\",\n  \"timezone\": \"America/Los_Angeles\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 21:22:57', '66.220.149.21'),
(29, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.117\",\n  \"hostname\": \"fwdproxy-eag-117.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:22:59, 26/06/2021 - 23:23:00, 26/06/2021 - 23:23:00, 26/06/2021 - 23:23:01, 26/06/2021 - 23:23:04, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:18', '69.171.231.117'),
(30, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.1\",\n  \"hostname\": \"fwdproxy-eag-001.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:22:59, 26/06/2021 - 23:23:01, 26/06/2021 - 23:23:01, 26/06/2021 - 23:23:05, 26/06/2021 - 23:23:05, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:13, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:16', '69.171.231.1'),
(31, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.118\",\n  \"hostname\": \"fwdproxy-eag-118.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:22:59, 26/06/2021 - 23:23:01, 26/06/2021 - 23:23:03, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:09, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:13, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:18', '69.171.231.118'),
(32, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.119\",\n  \"hostname\": \"fwdproxy-eag-119.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:22:59, 26/06/2021 - 23:23:01, 26/06/2021 - 23:23:02, 26/06/2021 - 23:23:02, 26/06/2021 - 23:23:04, 26/06/2021 - 23:23:05, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:09, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:12, 26/06/2021 - 23:23:12, 26/06/2021 - 23:23:13, 26/06/2021 - 23:23:13, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:16, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:18', '69.171.231.119'),
(33, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.116\",\n  \"hostname\": \"fwdproxy-eag-116.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:00, 26/06/2021 - 23:23:00, 26/06/2021 - 23:23:07, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:16, 26/06/2021 - 23:23:18', '69.171.231.116'),
(34, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.113\",\n  \"hostname\": \"fwdproxy-eag-113.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:00, 26/06/2021 - 23:23:00, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:10', '69.171.231.113'),
(35, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.120\",\n  \"hostname\": \"fwdproxy-eag-120.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:00, 26/06/2021 - 23:23:03, 26/06/2021 - 23:23:04, 26/06/2021 - 23:23:06, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:08, 26/06/2021 - 23:23:11, 26/06/2021 - 23:23:13, 26/06/2021 - 23:23:16, 26/06/2021 - 23:23:18, 26/06/2021 - 23:23:18', '69.171.231.120'),
(36, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.2\",\n  \"hostname\": \"fwdproxy-eag-002.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:01, 26/06/2021 - 23:23:02, 26/06/2021 - 23:23:04, 26/06/2021 - 23:23:05, 26/06/2021 - 23:23:07, 26/06/2021 - 23:23:09, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:10, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:17, 26/06/2021 - 23:23:18', '69.171.231.2'),
(37, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.111\",\n  \"hostname\": \"fwdproxy-eag-111.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:05, 26/06/2021 - 23:23:14, 26/06/2021 - 23:23:15, 26/06/2021 - 23:23:17', '69.171.231.111'),
(38, 'Unknown OS Platform', '{\n  \"ip\": \"69.171.231.112\",\n  \"hostname\": \"fwdproxy-eag-112.fbsv.net\",\n  \"city\": \"Salt Lake City\",\n  \"region\": \"Utah\",\n  \"country\": \"US\",\n  \"loc\": \"40.7608,-111.8911\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"84138\",\n  \"timezone\": \"America/Denver\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '26/06/2021 - 23:23:09, 26/06/2021 - 23:23:16, 26/06/2021 - 23:23:18', '69.171.231.112'),
(39, 'Unknown OS Platform', '{\n  \"ip\": \"173.252.111.13\",\n  \"hostname\": \"fwdproxy-nao-013.fbsv.net\",\n  \"city\": \"New Albany\",\n  \"region\": \"Ohio\",\n  \"country\": \"US\",\n  \"loc\": \"40.0812,-82.8088\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"43054\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '27/06/2021 - 01:25:04', '173.252.111.13'),
(40, 'Unknown OS Platform', '{\n  \"ip\": \"173.252.127.28\",\n  \"hostname\": \"fwdproxy-frc-028.fbsv.net\",\n  \"city\": \"Forest City\",\n  \"region\": \"North Carolina\",\n  \"country\": \"US\",\n  \"loc\": \"35.3340,-81.8651\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"28043\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '27/06/2021 - 03:25:24', '173.252.127.28'),
(41, 'Unknown OS Platform', '{\n  \"ip\": \"173.252.87.18\",\n  \"hostname\": \"fwdproxy-ftw-018.fbsv.net\",\n  \"city\": \"Dallas\",\n  \"region\": \"Texas\",\n  \"country\": \"US\",\n  \"loc\": \"32.7831,-96.8067\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"75270\",\n  \"timezone\": \"America/Chicago\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '27/06/2021 - 05:33:25', '173.252.87.18'),
(42, 'Unknown OS Platform', '{\n  \"ip\": \"66.220.149.15\",\n  \"hostname\": \"fwdproxy-prn-015.fbsv.net\",\n  \"city\": \"Prineville\",\n  \"region\": \"Oregon\",\n  \"country\": \"US\",\n  \"loc\": \"44.2998,-120.8345\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"97754\",\n  \"timezone\": \"America/Los_Angeles\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '27/06/2021 - 07:35:06', '66.220.149.15'),
(43, 'Unknown OS Platform', '{\n  \"ip\": \"173.252.111.24\",\n  \"hostname\": \"fwdproxy-nao-024.fbsv.net\",\n  \"city\": \"New Albany\",\n  \"region\": \"Ohio\",\n  \"country\": \"US\",\n  \"loc\": \"40.0812,-82.8088\",\n  \"org\": \"AS32934 Facebook, Inc.\",\n  \"postal\": \"43054\",\n  \"timezone\": \"America/New_York\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', '27/06/2021 - 09:35:25', '173.252.111.24');

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
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
