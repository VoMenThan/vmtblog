-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2018 at 06:11 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vmtblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Excerpts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Highlights` int(11) NOT NULL DEFAULT '0',
  `View` int(11) NOT NULL DEFAULT '0',
  `idCategoryBlog` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `Title`, `NoTitle`, `Excerpts`, `Content`, `Image`, `Highlights`, `View`, `idCategoryBlog`, `created_at`, `updated_at`) VALUES
(1, 'Hơn 1 năm qua Nintendo Switch đã tự tạo ra một thị trường mới toanh như thế nào?', 'hon-1-nam-qua-nintendo-switch-da-tu-tao-ra-mot-thi-truong-moi-toanh-nhu-the-nao', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 0, 0, 1, '2018-07-26 02:41:10', '2018-07-26 03:48:50'),
(2, 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ', 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-08-09 17:00:00', '2018-08-09 17:00:00'),
(3, 'Bên trong ổ cắm điện cắm 4000W', 'ben-trong-o-cam-dien-cam-4000w', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-08-01 17:00:00', '2018-08-08 17:00:00'),
(4, 'Phải chăng PS4 là món đồ chơi chỉ dành cho người nhiều tiền?', 'phai-chang-ps4-la-mon-do-choi-chi-danh-cho-nguoi-nhieu-tien', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-07-31 17:00:00', '2018-08-01 17:00:00'),
(5, 'Tự làm UPS cho modem wifi, đèn led', 'tu-lam-ups-cho-modem-wifi-den-led', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-07-26 02:41:10', '2018-07-26 03:48:50'),
(6, 'Hơn 1 năm qua Nintendo Switch đã tự tạo ra một thị trường mới toanh như thế nào?', 'hon-1-nam-qua-nintendo-switch-da-tu-tao-ra-mot-thi-truong-moi-toanh-nhu-the-nao', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-07-26 02:41:10', '2018-08-08 17:00:00'),
(7, 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ', 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\r\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\r\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\r\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\r\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, '2018-07-26 02:41:10', '2018-08-08 17:00:00'),
(8, 'Bên trong ổ cắm điện cắm 4000W', 'ben-trong-o-cam-dien-cam-4000w', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(9, 'Phải chăng PS4 là món đồ chơi chỉ dành cho người nhiều tiền?', 'phai-chang-ps4-la-mon-do-choi-chi-danh-cho-nguoi-nhieu-tien', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(10, 'Tự làm UPS cho modem wifi, đèn led', 'tu-lam-ups-cho-modem-wifi-den-led', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(11, 'Hơn 1 năm qua Nintendo Switch đã tự tạo ra một thị trường mới toanh như thế nào?', 'hon-1-nam-qua-nintendo-switch-da-tu-tao-ra-mot-thi-truong-moi-toanh-nhu-the-nao', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(12, 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ', 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(13, 'Bên trong ổ cắm điện cắm 4000W', 'ben-trong-o-cam-dien-cam-4000w', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(14, 'Phải chăng PS4 là món đồ chơi chỉ dành cho người nhiều tiền?', 'phai-chang-ps4-la-mon-do-choi-chi-danh-cho-nguoi-nhieu-tien', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(15, 'Tự làm UPS cho modem wifi, đèn led', 'tu-lam-ups-cho-modem-wifi-den-led', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(16, 'Hơn 1 năm qua Nintendo Switch đã tự tạo ra một thị trường mới toanh như thế nào?', 'hon-1-nam-qua-nintendo-switch-da-tu-tao-ra-mot-thi-truong-moi-toanh-nhu-the-nao', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(17, 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ', 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(18, 'Bên trong ổ cắm điện cắm 4000W', 'ben-trong-o-cam-dien-cam-4000w', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(19, 'Phải chăng PS4 là món đồ chơi chỉ dành cho người nhiều tiền?', 'phai-chang-ps4-la-mon-do-choi-chi-danh-cho-nguoi-nhieu-tien', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL),
(20, 'Tự làm UPS cho modem wifi, đèn led', 'tu-lam-ups-cho-modem-wifi-den-led', 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.', '\n		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>\n		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>\n		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>\n		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>\n		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>', 'hero-1.jpg', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categoryblog`
--

DROP TABLE IF EXISTS `categoryblog`;
CREATE TABLE `categoryblog` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoryblog`
--

INSERT INTO `categoryblog` (`id`, `Name`, `NoName`, `created_at`, `updated_at`) VALUES
(1, 'Công Nghệ', 'Cong-Nghe', NULL, NULL),
(2, 'Cuộc Sống', 'Cuoc-Song', NULL, NULL),
(3, 'Xã Hội', 'Xa-Hoi', NULL, NULL),
(4, 'Thế Giới', 'The-Gioi', NULL, NULL),
(5, 'Kinh Doanh', 'Kinh-Doanh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idBlog` int(10) UNSIGNED NOT NULL,
  `Comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idBlog`, `Comment`, `created_at`, `updated_at`) VALUES
(1, 2, 9, 'Không thích bài viết này', '2018-08-09 23:38:09', NULL),
(2, 1, 2, 'Bài viết rất hay', '2018-08-09 23:38:09', NULL),
(3, 1, 9, 'Hay quá trời', '2018-08-09 23:38:09', NULL),
(4, 1, 7, 'Bài viết này được', '2018-08-09 23:38:09', NULL),
(5, 2, 8, 'Tôi rất thích bài viết này', '2018-08-09 23:38:09', NULL),
(6, 1, 4, 'Hay quá trời', '2018-08-09 23:38:09', NULL),
(7, 2, 5, 'Bài viết này chưa được hay lắm', '2018-08-09 23:38:09', NULL),
(8, 1, 5, 'Không thích bài viết này', '2018-08-09 23:38:09', NULL),
(9, 2, 1, 'Ý kiến của tôi khác so với bài này', '2018-08-09 23:38:09', NULL),
(10, 1, 8, 'Bài viết này tạm ổn', '2018-08-09 23:38:09', NULL),
(11, 1, 10, 'Bài viết này chưa được hay lắm', '2018-08-09 23:38:09', NULL),
(12, 2, 1, 'Bài viết này tạm ổn', '2018-08-09 23:38:09', NULL),
(13, 2, 7, 'Không thích bài viết này', '2018-08-09 23:38:10', NULL),
(14, 1, 5, 'Bài viết này tạm ổn', '2018-08-09 23:38:10', NULL),
(15, 1, 6, 'Tôi sẽ học thèo bài viết này', '2018-08-09 23:38:10', NULL),
(16, 2, 7, 'Bài viết này chưa được hay lắm', '2018-08-09 23:38:10', NULL),
(17, 1, 8, 'Bài viết rất hay', '2018-08-09 23:38:10', NULL),
(18, 2, 8, 'Hay quá trời', '2018-08-09 23:38:10', NULL),
(19, 1, 6, 'Không thích bài viết này', '2018-08-09 23:38:10', NULL),
(20, 2, 9, 'Tôi sẽ học thèo bài viết này', '2018-08-09 23:38:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_08_08_065811_create_category_blog', 1),
(9, '2018_08_08_065824_create_blog', 1),
(10, '2018_08_08_065837_create_comment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'than vo', 'mrthancn12@gmail.com', '$2y$10$TKE6CqmBERbHuq0zLtzNLeHgkg08aqPqJltBUcbZ52pXljTvxMrxO', NULL, '2018-08-08 08:01:07', '2018-08-08 08:01:07'),
(2, 'Than Vo', 'than@gmail.com', '$2y$10$gidpmNRdkDaNzkDF163ZNu6/yCQO277Rkbi470mIz33gSEJyNfZE6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_idcategoryblog_foreign` (`idCategoryBlog`);

--
-- Indexes for table `categoryblog`
--
ALTER TABLE `categoryblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idblog_foreign` (`idBlog`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `categoryblog`
--
ALTER TABLE `categoryblog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_idcategoryblog_foreign` FOREIGN KEY (`idCategoryBlog`) REFERENCES `categoryblog` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_idblog_foreign` FOREIGN KEY (`idBlog`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
