-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2023 lúc 05:59 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `tomtat` mediumtext DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL,
  `id_danhmucbv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmucbv`) VALUES
(1, 'Ẩm thực cố đô', '1683187649_amthucHue.jpg', '<p>Ẩm thực Huế</p>\r\n', '<p>Đất Huế thơ mộng kh&ocirc;ng chỉ với s&ocirc;ng Hương, n&uacute;i Ngự, với lăng tẩm đền đ&agrave;i m&agrave; c&ograve;n độc đ&aacute;o bởi những con người t&agrave;i hoa, kh&eacute;o l&eacute;o đ&atilde; tạo ra một n&eacute;t ẩm thực đặc trưng mang đậm m&agrave;u sắc của v&ugrave;ng đất xinh đẹp n&agrave;y. M&agrave; khi nhắc đến hẳn ai trong mỗi du kh&aacute;ch cũng mong được thưởng thức c&aacute;c m&oacute;n ăn xứ Huế kh&ocirc;ng chỉ một lần.</p>\r\n\r\n<p>M&oacute;n ăn Huế c&oacute; hương vị r&otilde; r&agrave;ng v&agrave; đậm đ&agrave;. Bởi người Huế coi m&oacute;n ăn như triết l&yacute; nh&acirc;n sinh của cuộc đời c&oacute; đủ c&aacute;c vị từ mặn, ngọt, b&eacute;o, b&ugrave;i đến chua, ch&aacute;t, đắng, cay nhưng vị n&agrave;o lu&ocirc;n r&otilde; vị ấy.&nbsp;</p>\r\n\r\n<p>C&oacute; thể n&oacute;i, người Huế đến với ẩm thực kh&ocirc;ng theo c&aacute;i nghĩa sinh học giản đơn, m&agrave; thưởng thức bằng cả khứu gi&aacute;c, thị gi&aacute;c v&agrave; cả&hellip; th&iacute;nh gi&aacute;c.</p>\r\n\r\n<p>N&oacute;i như nh&agrave; văn Nguyễn Tu&acirc;n l&uacute;c sinh thời, người Huế th&iacute;ch ăn bằng mắt. Nhưng d&ugrave; huy động to&agrave;n bộ gi&aacute;c quan cho việc hấp thụ dinh dưỡng, người Huế cũng chỉ cốt &ldquo;ăn lấy hương lấy hoa,&rdquo; như họ thường tự n&oacute;i về m&igrave;nh.</p>\r\n\r\n<p>Người Huế tỏ ra s&agrave;nh điệu trong ăn uống, kh&ocirc;ng chỉ trong kh&acirc;u chọn nguy&ecirc;n vật liệu m&agrave; c&ograve;n cầu kỳ từ việc n&ecirc;m nấu chế biến cho đến c&aacute;ch b&agrave;y biện trang tr&iacute;, cứ như mỗi m&oacute;n ăn được n&acirc;ng l&ecirc;n h&agrave;ng một t&aacute;c phẩm nghệ thuật.</p>\r\n\r\n<p>Những m&oacute;n ăn Huế d&ugrave; l&agrave; cao lương mỹ vị hay d&acirc;n d&atilde; đơn sơ, đều l&agrave;m cho ai đ&oacute; một lần nếm qua phải xu&yacute;t xoa khen ngon đến mức &ldquo;ngậm m&agrave; nghe&rdquo;, để rồi lưu luyến m&atilde;i c&aacute;i hương vị kh&oacute; qu&ecirc;n ấy. Dường như qua b&agrave;n tay kh&eacute;o l&eacute;o của người phụ nữ, m&oacute;n ăn đ&atilde; được thổi v&agrave;o c&aacute;i hồn v&agrave; ch&uacute;t g&igrave; đ&oacute; t&acirc;m linh của Huế.</p>\r\n\r\n<p>Ẩm thực Huế l&agrave; kết tinh của qu&aacute; tr&igrave;nh s&aacute;ng tạo bởi nhiều thế hệ, với hơn 1.700 m&oacute;n ăn từ cung đ&igrave;nh đến d&acirc;n gian.&nbsp;<a href=\"https://www.vietnamplus.vn/tags/%e1%ba%a8m-th%e1%bb%b1c-Hu%e1%ba%bf.vnp\"><strong>Ẩm thực Huế</strong></a>&nbsp;l&agrave; sự giao thoa của nhiều v&ugrave;ng miền, kết tinh v&agrave; lan tỏa của c&aacute;c miền văn h&oacute;a.</p>\r\n\r\n<p>Đến Huế, du kh&aacute;ch sẽ được thưởng thức ba loại đ&oacute; l&agrave;&nbsp;<a href=\"https://www.vietnamplus.vn/tags/%e1%ba%a8m-th%e1%bb%b1c-cung-%c4%91%c3%acnh.vnp\"><strong>ẩm thực cung đ&igrave;nh</strong></a>,&nbsp;<a href=\"https://www.vietnamplus.vn/tags/%e1%ba%a8m-th%e1%bb%b1c-d%c3%a2n-gian.vnp\"><strong>ẩm thực d&acirc;n gian</strong></a>&nbsp;v&agrave; m&oacute;n ăn chay.</p>\r\n\r\n<p>Huế đ&atilde; từng c&oacute; mấy thế kỷ l&agrave; trung t&acirc;m của Đ&agrave;ng Trong thời ch&uacute;a Nguyễn, đến thế kỷ XIX l&agrave; đất kinh kỳ phồn hoa đ&ocirc; hội, với non một thế kỷ rưỡi l&agrave;m Kinh đ&ocirc; nước Việt, nơi quy tụ của một triều đ&igrave;nh với biết bao quan lại, nho sỹ.</p>\r\n\r\n<p>V&igrave; thế, ngo&agrave;i chốn vương triều c&ograve;n c&oacute; c&aacute;c tầng lớp qu&yacute; tộc v&agrave; thượng lưu, tr&iacute; thức, đa số c&aacute;c tao nh&acirc;n mặc kh&aacute;ch đều tụ họp về đ&acirc;y. Điều đ&oacute; đ&ograve;i hỏi người Huế kh&ocirc;ng chỉ giỏi chế biến c&aacute;c m&oacute;n ăn cực kỳ tinh tế chỉ d&ugrave;ng trong chốn vương phủ.</p>\r\n\r\n<p>Ng&agrave;y nay tuy kh&ocirc;ng c&ograve;n giữ vai tr&ograve; của một trung t&acirc;m kinh tế-ch&iacute;nh trị lớn h&agrave;ng đầu đất nước, nhưng Huế vẫn l&agrave; nơi duy tr&igrave; những b&oacute;ng d&aacute;ng xưa cũ của một triều đại với tất cả lối sống của một thời v&agrave;ng son. V&agrave; dĩ nhi&ecirc;n, trong những đặc trưng văn h&oacute;a l&acirc;u đời của Huế, vốn văn h&oacute;a về ăn uống g&oacute;p một phần kh&ocirc;ng nhỏ trong việc h&igrave;nh th&agrave;nh n&eacute;t văn h&oacute;a v&agrave; phong c&aacute;ch con người xứ Huế.</p>\r\n\r\n<p>Huế l&agrave; một v&ugrave;ng đất được khai ph&aacute; muộn, phần đ&ocirc;ng l&agrave; d&acirc;n tứ xứ theo ch&uacute;a Nguyễn v&agrave;o nam lập nghiệp. V&igrave; thế m&oacute;n ăn cũng phong ph&uacute;, hội tụ được tinh hoa của c&aacute;c nơi kh&aacute;c, biến th&agrave;nh m&oacute;n ăn ri&ecirc;ng mang bản sắc độc đ&aacute;o địa phương.</p>\r\n\r\n<p>M&oacute;n ăn Huế vừa c&oacute; sang trọng, cao lương mỹ vị, vừa c&oacute; m&oacute;n mộc mạc nhưng do kh&eacute;o tay, biết chế biến, biết c&aacute;ch thức n&ecirc;m nấu n&ecirc;n vẫn trở th&agrave;nh m&oacute;n ăn thi vị.</p>\r\n\r\n<p>C&aacute;c m&oacute;n ăn qu&yacute; tộc được triều Nguyễn cho ph&eacute;p hẳn hoi trong s&aacute;ch Kh&acirc;m định Đại Nam hội điển sự lệ quy định cho từng loại tiệc: tiệc tiếp sứ bộ với ba loại cổ: loại một m&acirc;m gồm 50 m&oacute;n, loại hai c&oacute; 7 m&acirc;m gồm 40 m&oacute;n, lọai ba c&oacute; 25 m&acirc;m gồm 30 m&oacute;n&hellip; Những m&oacute;n đ&oacute; được b&agrave;y trong 1080 b&aacute;t, dĩa qu&yacute; chỉ d&ugrave;ng trong chốn vương phủ.</p>\r\n\r\n<p>Ng&agrave;y nay d&ugrave; kh&ocirc;ng c&ograve;n phải lặn lội đi t&igrave;m những đặc sản qu&yacute; để nấu những m&oacute;n ăn &ldquo;Ngự thiện&rdquo; phục vụ cho vua ch&uacute;a nữa, những nem c&ocirc;ng, chả phượng, da t&acirc;y ngu, b&agrave;n tay gấu, gan nai, m&ocirc;i đười ươi, thịt ch&acirc;n voi&hellip; nhưng những loại đặc sản c&oacute; bốn m&ugrave;a của địa phương, người nội trợ c&oacute; thể nấu tới 300 m&oacute;n ăn vừa d&acirc;n d&atilde; lại vừa sang trọng.</p>\r\n\r\n<p><strong><a href=\"https://www.vietnamplus.vn/am-thuc-cung-dinh-va-dan-gian-hue-ket-hop-du-lich-vuon-ra-the-gioi/499893.vnp\">[Ẩm thực cung đ&igrave;nh v&agrave; d&acirc;n gian Huế kết hợp du lịch vươn ra thế giới]</a></strong></p>\r\n\r\n<p>M&oacute;n ăn d&acirc;n d&atilde; v&agrave; kh&oacute; qu&ecirc;n nhất l&agrave; cơm hến. Đ&oacute; l&agrave; một m&oacute;n ăn giản dị, đượm đầy hương vị đồng qu&ecirc; được l&agrave;m từ một sản vật nằm trong l&ograve;ng con s&ocirc;ng thị vị của xứ Huế.</p>\r\n\r\n<p><a href=\"https://cdnimg.vietnamplus.vn/uploaded/ngtnnn/2020_06_06/0606comhen.jpg\"><img alt=\"Am thuc Hue: Net van hoa dac trung cua vung dat Co do hinh anh 2\" src=\"https://cdnimg.vietnamplus.vn/t620/uploaded/ngtnnn/2020_06_06/0606comhen.jpg\" style=\"height:170px; width:255px\" /></a></p>\r\n\r\n<p>Cơm hến. (Nguồn: bnews.vn)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cơm hến ngon nhờ t&agrave;i pha chế một tổ hợp nhiều th&agrave;nh phần c&aacute;c loại gia vị: rau thơm, bắp chuối, cọng bạc h&agrave; th&aacute;i nhỏ, tương ớt, mắm, muối, me, đậu phụng gi&atilde; mịn, nước mắm tỏi, t&oacute;p mỡ v&agrave; cơm trắng để nguội. Đặc biệt l&agrave; sự g&oacute;p mặt của ruốc sống, cơm hến ngon ngọt cũng ch&iacute;nh nhờ vị ruốt n&agrave;y.</p>\r\n', 1, 2),
(3, 'Du lịch Việt Nam', '1683250034_dulich.jpg', '<p>Du lịch Việt Nam những ng&agrave;y lễ</p>\r\n', '<h2>Mua sắm chưa được ch&uacute; trọng</h2>\r\n\r\n<p>Sau nhiều năm chỉ tập trung ph&aacute;t triển c&aacute;c&nbsp;<a href=\"https://thanhnien.vn/them-san-pham-du-lich-the-thao-bien-da-nang-185230301091219917.htm\">sản phẩm du lịch</a>&nbsp;trong khoảng thời gian từ 7 - 17 giờ, ng&agrave;nh du lịch VN được v&iacute; như &quot;ống m&aacute;ng trượt&quot;: kh&aacute;ch đến nhiều nhưng kh&ocirc;ng quay lại, kh&ocirc;ng chi ti&ecirc;u nhiều, kh&ocirc;ng thẩm thấu được v&agrave;o nền kinh tế của địa phương.</p>\r\n\r\n<p><a href=\"https://images2.thanhnien.vn/528068263637045248/2023/5/4/du-khach-o-cho-dem-am-thuc-ha-noi-anh-dao-ngoc-thach-16832245477541459770200.jpg\" target=\"_blank\"><img alt=\"Du khách không có chỗ tiêu tiền? - Ảnh 1.\" src=\"https://images2.thanhnien.vn/thumb_w/640/528068263637045248/2023/5/4/du-khach-o-cho-dem-am-thuc-ha-noi-anh-dao-ngoc-thach-16832245477541459770200.jpg\" /></a></p>\r\n\r\n<p>VN đang rất thiếu những tổ hợp vui chơi đ&aacute;p ứng nhu cầu giết thời gian v&agrave; ti&ecirc;u tiền của du kh&aacute;ch</p>\r\n\r\n<p>Đ&Agrave;O NGỌC THẠCH</p>\r\n\r\n<p>&Ocirc;ng Johnathan Hạnh Nguyễn, Chủ tịch Tập đo&agrave;n Li&ecirc;n Th&aacute;i B&igrave;nh Dương (IPPG), người được mệnh danh l&agrave; &quot;vua h&agrave;ng hiệu&quot; v&agrave; c&oacute; tham vọng mở c&aacute;c trung t&acirc;m mua sắm lớn, c&aacute;c cửa h&agrave;ng miễn thuế dưới phố cho du kh&aacute;ch, nhận x&eacute;t: d&ugrave; c&oacute; quyết t&acirc;m nhưng đến nay, kh&aacute;i niệm &quot;<a href=\"https://thanhnien.vn/kinh-te-dem-vi-sao-thap-mai-chua-sang-185230503002958688.htm\">kinh tế đ&ecirc;m</a>&quot; trong chiến lược ph&aacute;t triển du lịch tại VN vẫn chưa được định nghĩa một c&aacute;ch thấu đ&aacute;o. Hiện nay, kinh tế đ&ecirc;m mới chỉ được hiểu đơn giản l&agrave; ăn v&agrave; chơi. C&aacute;c hoạt động giải tr&iacute; buổi tối bị b&oacute; hẹp trong kh&ocirc;ng gian phố đi bộ, chợ đ&ecirc;m hoặc vũ trường. Trong khi đ&oacute;, &quot;ch&igrave;a kh&oacute;a&quot; h&uacute;t kh&aacute;ch quốc tế đến ti&ecirc;u tiền nằm ở phần mua sắm lại chưa được ch&uacute; trọng. Tại c&aacute;c khu chợ đ&ecirc;m, khu phố đi bộ chỉ b&agrave;y b&aacute;n lẻ tẻ những m&oacute;n đồ tạp nham, chủ yếu xuất xứ từ Trung Quốc, kh&ocirc;ng c&oacute; những địa điểm mua sắm ph&ugrave; hợp để du kh&aacute;ch ti&ecirc;u tiền.</p>\r\n\r\n<p>Dẫn chứng c&aacute;c quốc gia c&oacute; nền du lịch ph&aacute;t triển, &ocirc;ng Johnathan Hạnh Nguyễn ph&acirc;n t&iacute;ch: Singapore được mệnh danh l&agrave; thi&ecirc;n đường mua sắm với c&aacute;c trung t&acirc;m quy m&ocirc; lớn. C&aacute;c cửa h&agrave;ng miễn thuế dưới phố tập trung tr&ecirc;n nhiều cung đường ch&iacute;nh như đường Orchard. Với số lượng lớn trung t&acirc;m mua sắm, sự thuận lợi trong việc ho&agrave;n thuế gi&aacute; trị gia tăng (VAT), họ đ&atilde; h&uacute;t được lượng lớn du kh&aacute;ch tới với mục đ&iacute;ch du lịch mua sắm l&agrave; ch&iacute;nh. Ngo&agrave;i ra, với vị thế l&agrave; một trung t&acirc;m t&agrave;i ch&iacute;nh quốc tế, họ c&ograve;n tổ chức c&aacute;c hoạt động về du lịch kết hợp c&ocirc;ng việc th&ocirc;ng qua x&acirc;y dựng c&aacute;c khu phức hợp gồm cả trung t&acirc;m hội nghị, kh&aacute;ch sạn cao cấp giải tr&iacute;, casino... Kết quả, mặc d&ugrave; Singapore c&oacute; diện t&iacute;ch chỉ bằng đảo Ph&uacute; Quốc của VN, nhưng số lượng kh&aacute;ch quốc tế đến v&agrave; tổng chi ti&ecirc;u trung b&igrave;nh của 1 du kh&aacute;ch tại nước n&agrave;y vượt rất nhiều so với VN.</p>\r\n', 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) DEFAULT NULL,
  `code_cart` varchar(45) DEFAULT NULL,
  `cart_status` int(11) DEFAULT NULL,
  `ngay_dat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `id_khachhang`, `code_cart`, `cart_status`, `ngay_dat`) VALUES
(6, 5, '9091', 1, NULL),
(7, 5, '5328', 1, NULL),
(8, 4, '5133', 1, NULL),
(9, 6, '2931', 1, NULL),
(10, 6, '2513', 1, NULL),
(11, 7, '9746', 1, NULL),
(12, 7, '6478', 1, NULL),
(13, 7, '6046', 1, NULL),
(14, 7, '2287', 1, NULL),
(15, 6, '7260', 1, '2023-05-08 09:26:17'),
(16, 6, '700', 1, '2023-05-08 00:00:00'),
(17, 6, '3982', 1, '2023-05-08 00:00:00'),
(18, 8, '8561', 1, '2023-06-05 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id` int(11) NOT NULL,
  `code_cart` varchar(45) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `soluongmua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(11, '9091', 16, 3),
(12, '9091', 20, 1),
(13, '5328', 16, 3),
(14, '5328', 20, 1),
(15, '5133', 23, 1),
(16, '5133', 22, 1),
(17, '2931', 25, 2),
(18, '2931', 20, 1),
(19, '2513', 21, 1),
(20, '9746', 13, 2),
(21, '9746', 14, 1),
(22, '9746', 16, 2),
(23, '6478', 14, 2),
(24, '6478', 16, 1),
(25, '6478', 18, 2),
(26, '6046', 16, 1),
(27, '6046', 14, 1),
(28, '2287', 21, 1),
(29, '2287', 14, 1),
(30, '7260', 22, 1),
(31, '700', 20, 1),
(32, '700', 21, 1),
(33, '3982', 14, 1),
(34, '3982', 24, 1),
(35, '8561', 21, 2),
(36, '8561', 26, 1),
(37, '8561', 20, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `matkhau` varchar(255) DEFAULT NULL,
  `dienthoai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(3, 'Odit veritatis facil', 'qifysuboha@mailinator.com', 'Pariatur Necessitat', '25f9e794323b453885f5181f1b624d0b', '+1 (718) 516-6269'),
(4, 'Trúc NH', 'masu@mailinator.com', 'Rerum possimus ex n', '25f9e794323b453885f5181f1b624d0b', '+1 (115) 165-5818'),
(5, 'Alistar', 'rotagy@mailinator.com', 'Et voluptatum volupt', '25f9e794323b453885f5181f1b624d0b', '+1 (731) 424-4409'),
(6, 'Nguyễn Huy Trúc', 'NHT@mailinator.com', 'Laboriosam et liber', '25f9e794323b453885f5181f1b624d0b', '+1 (133) 556-1601'),
(7, 'Odio Nam aliquip pra', 'hanice@mailinator.com', 'Et elit quae aut la', 'e10adc3949ba59abbe56e057f20f883e', '+1 (824) 399-7576'),
(8, 'Nguyễn Huy Trúc', 'rygaromewy@mailinator.com', 'Necessitatibus bland', '86d39a8ea98f994031901b3d59f8a637', '+1 (253) 843-4785');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendanhmuc`, `thutu`) VALUES
(1, 'Bàn phím', 1),
(4, 'Laptop', 2),
(5, 'Sạc dự phòng', 3),
(6, 'Điện thoại', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbv`
--

CREATE TABLE `tbl_danhmucbv` (
  `id` int(11) NOT NULL,
  `tendanhmucbv` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbv`
--

INSERT INTO `tbl_danhmucbv` (`id`, `tendanhmucbv`) VALUES
(2, 'Ẩm thực'),
(4, 'Văn hóa'),
(6, 'Thời sự'),
(7, 'Du lịch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) DEFAULT NULL,
  `masp` varchar(255) DEFAULT NULL,
  `giasp` varchar(45) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `tomtat` tinytext DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(13, 'Dell Latitude 7320', 'DL7320', '24500000', 10, '1682644456_dell.jpg', 'Dell latitude new', 'New Dell 2020', 1, 4),
(14, 'MacBook Air', 'MBA2020', '28000000', 10, '1682593241_macbook.jpg', 'Mẫu 2020', 'hàng đẹp 2020', 1, 4),
(16, 'Sạc dự phòng', 'SDP', '1000000', 10, '1682408195_sacdup.jpg', 'SDP', 'SDP', 1, 5),
(18, 'Oppo reno8', 'OP', '11000000', 5, '1682593148_oppo.jpg', 'đẹp', 'đẹp', 1, 6),
(19, 'iPhone XS', 'IPXSMAX', '10000000', 10, '1682420476_ipxsmax.jpg', '', '', 1, 6),
(20, 'iPhone 14', 'IP14', '22000000', 5, '1682420622_ip14pm.jpg', '', '', 1, 6),
(21, 'Bàn phím cơ', 'BPC', '4600000', 20, '1682645024_banphim1.jpg', 'Bàn phím giá rẻ', 'Bàn phím giá rẻ', 1, 1),
(22, 'Asus ROG', 'ASR', '26000000', 5, '1682650347_asus.jpg', 'Asus ROG', 'Asus ROG', 1, 4),
(23, 'iPhone 12 Pro Max', 'IP12PM', '11000000', 5, '1682650462_IP12.jpg', 'IP12PM', 'IP12PM', 1, 6),
(24, 'Sạc dự phòng 1280', '1280', '300000', 20, '1682650618_sdp.jpg', '1280', '1280', 1, 5),
(25, 'Bàn phím K2', 'K2', '2000000', 8, '1682651306_bpc.jpg', 'K2', 'K2', 1, 1),
(26, 'Samsung Galaxy A73', 'LTSTO', '9500000', 5, '1682679008_ssung.jpg', 'Thiết kế đẹp, gọn gàng, sang trọng', 'Thiết kế đẹp, gọn gàng, sang trọng', 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(45) DEFAULT NULL,
  `donhang` int(11) DEFAULT NULL,
  `doanhthu` varchar(45) DEFAULT NULL,
  `soluongban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2023-04-30', 15, '500000', 14),
(2, '2023-04-29', 10, '750000', 13),
(3, '2023-04-28', 5, '400000', 6),
(4, '2023-04-27', 14, '480000', 12),
(5, '2023-04-26', 9, '350000', 9),
(6, '2023-04-25', 20, '980000', 25),
(7, '2023-04-24', 20, '950000', 20),
(8, '2023-04-23', 100, '1000000', 101);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhmucbv`
--
ALTER TABLE `tbl_danhmucbv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbv`
--
ALTER TABLE `tbl_danhmucbv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
