-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2022 lúc 01:32 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `HoTen` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDT` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChuDe` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinNhan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`HoTen`, `Email`, `SoDT`, `ChuDe`, `TinNhan`) VALUES
('Nguyễn Thành Long', 'nhatminh7721@gmail.com', '087447453', 'hack nasa bằng gì', 'Ngôn nhguwx html css có hack được nasa không'),
('Long', 'long123@gmail.com', '0111111', 'OKE', 'Test oke');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

CREATE TABLE `diadiem` (
  `idDiaDiem` int(11) NOT NULL,
  `tenDiaDiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocGia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTaDiaDiem` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhDiaDiem` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhDiaDiem2` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhDiaDiem3` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`idDiaDiem`, `tenDiaDiem`, `quocGia`, `moTaDiaDiem`, `anhDiaDiem`, `anhDiaDiem2`, `anhDiaDiem3`) VALUES
(1, 'Mumbai', 'Ấn Độ', 'Mumbai còn được gọi là Bombay thủ phủ của bang Maharashtra và có đông dân cư nhất ở Ấn Độ với hơn 13 triệu người (năm 2006). Thủ đô Mumbai là trung tâm kinh tế, chính trị, văn hóa và giải trí hàng đầu ở Ấn Độ.', 'public/images/diadiem/mumbai.jpg', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/40/ce/df/marine-drive-seen-as.jpg?w=1200&h=-1&s=1', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/16/f3/a1/fb-img-1474806779807.jpg?w=1000&h=-1&s=1'),
(2, 'Hawaii', 'USA', 'Tìm hiểu về Hawaii có 4 đảo lớn thường được chọn làm điểm đến của khách du lịch là: Oahu, Maui, Kauai và Big Island. Waikiki là bãi biển nổi tiếng nhất ở thành phố Honolulu, thuộc đảo Oahu. Có mặt trong hầu hết các bảng xếp hạng về những bãi biển đẹp nhất.', 'public/images/diadiem/hawaii.jpg', 'https://tour.dulichvietnam.com.vn/uploads/image/du-lich-my/Hawaii/bai-bien-waikiki-hawaii.jpg', 'https://tour.dulichvietnam.com.vn/uploads/image/du-lich-my/Hawaii/vinh-hanauma.jpg'),
(3, 'Sydney', 'Australian', 'Sydney là một thành phố chưa bao giờ thôi mời gọi khách du lịch. Đây là nơi mà đâu đâu cũng có những công trình kiến trúc nguy nga, đồ sộ, thế giới bảo tàng, công viên xanh, những khu vui chơi giải trí hiện đại và cả biển nữa', 'public/images/diadiem/sydney.jpg', 'public/images/diadiem/hawaii.jpg', 'public/images/anhLinhTinh/minhhn1.jpg'),
(4, 'Paris', 'Pháp', 'Paris được chia làm 4 mùa vô cùng rõ rệt. Mùa du lịch đẹp nhất là từ cuối xuân (tháng 4) đến đầu mùa hè (tháng 6) và khoảng mùa thu vì đây là khoảng thời gian Paris “tỏa ra” những gì đẹp nhất của thành phố này.', 'public/images/diadiem/paris.jpg', 'https://www.pexels.com/vi-vn/tim-kiem/paris/', 'public/images/anhLinhTinh/minhhn2.jpg'),
(5, 'Tokyo', 'Nhật Bản', 'Tokyo là một siêu đô thị rộng lớn kết hợp hoàn hảo giữa truyền thống và tương lai. Tại Tokyo, bạn sẽ được hòa mình vào vô số trải nghiệm thú vị', 'public/images/diadiem/tokyo.jpg', 'https://tour.dulichvietnam.com.vn/uploads/image/Du-lich-Nhat-Ban/chua-asakusa.jpg', 'https://tour.dulichvietnam.com.vn/uploads/image/Du-lich-Nhat-Ban/thap-tokyo.jpg'),
(6, 'Kim tự tháp Ai Cập', 'Ai Cập', 'Ai Cập vốn nổi tiếng bởi danh xưng \"vùng đất của các kim tự tháp\". Cho đến bây giờ, Ai Cập luôn là dấu hỏi lớn, bởi nơi đầy còn ẩn chứa rất nhiều điều huyền bí bên trong mà chưa ai cs thể thể khám phá hết được khi du lịch kim tự tháp Ai Cập.', 'public/images/diadiem/aicap.jpg', 'public/images/anhLinhTinh/suTuChongTay.jpg', 'public/images/anhLinhTinh/oggyLamTho.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idHoaDon` int(11) NOT NULL,
  `ngayDatTour` date NOT NULL,
  `soLuongNguoi` int(11) NOT NULL,
  `tongTien` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKhachHang` int(11) NOT NULL,
  `idTour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `tenKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailKH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDTKH` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `avatar` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDuTK` int(11) NOT NULL DEFAULT 0,
  `diaChiKH` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `tenKH`, `emailKH`, `soDTKH`, `ngaySinh`, `avatar`, `soDuTK`, `diaChiKH`, `idU`) VALUES
(9, 'admin', 'admin@admin.com', '123456789', '2022-05-29', '', 0, '', 10),
(15, 'Hoàng Nhật Minh', 'nhatminh7721@gmail.com', '03483042', '0000-00-00', 'public/images/avatarKH/avatar.jpg', 0, 'Hà Nội he', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `idKS` int(11) NOT NULL,
  `tenKS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saoKS` int(11) NOT NULL,
  `loaiPhong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaPhong` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChiKS` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhKS` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`idKS`, `tenKS`, `saoKS`, `loaiPhong`, `giaPhong`, `diaChiKS`, `anhKS`) VALUES
(1, 'Mường Thanh', 4, 'VIP', '1200000', 'Mumbai', ''),
(2, 'Monte De Jalero', 5, 'Normal', '25000000', 'Paris, Pháp', ''),
(3, 'Kangaroo Ibitan', 4, 'VIP', '9000000', 'Sydney, Australia', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtien`
--

CREATE TABLE `phuongtien` (
  `idPT` int(11) NOT NULL,
  `loaiPhuongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenPhuongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTaPT` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhPT` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongtien`
--

INSERT INTO `phuongtien` (`idPT`, `loaiPhuongTien`, `tenPhuongTien`, `moTaPT`, `anhPT`) VALUES
(1, 'Máy bay', 'Máy bay Airbus a380', 'Airbus A380 là chiếc máy bay phản lực thân rộng hai tầng, bốn động cơ, hai lối đi[2][3][4] đầu tiên và là máy bay vận tải hành khách lớn nhất trên thế giới đến thời điểm hiện tại do Airbus phát triển.Do kích thước đồ sộ nên phải nâng cấp những sân bay mà nó đến để có thể tiếp nhận nó mà không gặp phải bất kỳ sự cố nào.Dự án ban đầu được đặt tên là Airbus A3XX và được thiết kế để cạnh tranh trực ti', 'public/images/phuongtien/airbus_a380.jpg'),
(2, 'Xe khách', 'Nhà xe Xuân Đỗ', 'Địa điểm đón khách:\r\n\r\nNhà Văn hóa Thanh Niên – số 04 Phạm Ngọc Thạch, Quận 1\r\nCây xăng Comeco số 3 gần ngã tư Hàng Xanh\r\nNgã tư Thủ Đức, Xa Lộ Hà Nội\r\nAmata Biên Hòa, Đồng Nai\r\nQuý Khách thư giãn nghỉ ngơi trên xe.', 'public/images/anhLinhTinh/ongDauTroc.jpg'),
(3, 'Máy bay', 'Vietnam Airlines', 'Đắt vải', 'public/images/anhLinhTinh/haiConCho.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `idKhachHang` int(11) NOT NULL,
  `idTour` int(11) NOT NULL,
  `noidung` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhGia` int(11) NOT NULL,
  `anh1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh2` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh3` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `idTour` int(11) NOT NULL,
  `tenTour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBatDau` date NOT NULL,
  `ngayKetThuc` date NOT NULL,
  `giaBanDau` int(11) NOT NULL,
  `giaSauGiam` int(11) NOT NULL,
  `daSuDungHet` int(11) NOT NULL,
  `idDiaDiem` int(11) NOT NULL,
  `idKhachSan` int(11) NOT NULL,
  `idPhuongTien` int(11) NOT NULL,
  `lichTrinh` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`idTour`, `tenTour`, `ngayBatDau`, `ngayKetThuc`, `giaBanDau`, `giaSauGiam`, `daSuDungHet`, `idDiaDiem`, `idKhachSan`, `idPhuongTien`, `lichTrinh`) VALUES
(2, 'Du Lịch Ấn Độ', '2022-05-29', '2022-06-03', 40000000, 32000000, 1, 1, 1, 1, 'Ngày 1 : TP HỒ CHÍ MINH – MUMBAI\n\nTrưởng đoàn đón Quý khách tại cổng hẹn ở sân bay Tân Sân Nhất làm thủ tục đáp chuyến bay đến Mumbai. Đến nơi, xe đón và đưa Quý khách về nhận phòng khách sạn nghỉ ngơi.\nNgày 2 : MUMBAI (Ăn sáng, trưa, tối)\n\nĂn sáng tại khách sạn. Quý khách bắt đầu hành trình khám phá Mumbai – thành phố còn được biết đến với biệt danh “Hollywood của Châu Á”. Quý khách ghé thăm Hang động Elephanta – một di sản văn hóa thế giới được UNESCO công nhận vào năm 1987. Hang động được xây dựng từ thế kỷ 9 đến thế kỷ 13 dưới triều đại vua Silhara để thờ ba vị thần tối cao trong Hindu giáo: Brahma, Vishnu và Shiva. Sau đó, đoàn tiếp tục tham quan Gateway of India – được xây dựng nhằm kỷ niệm chuyến viếng thăm Ấn Độ năm 1911 của Vua George V và Nữ Hoàng Mary, chiêm ngưỡng Tòa nhà Ban thư ký của Quốc hội Maharashtra và con đường ven biển Marine Drive. Đoàn tham quan Mani Bhavan – nơi lưu trú dủa Mahatma Gandhi khi Ngài đến thăm Mumbai. Tiếp tục chiêm ngưỡng Ga tàu lửa Victoria Terminus với kiến trúc Edwardian đặc trưng. Tham quan Khu giặt tập trung ngoài trời Dhobi Ghat – một bức tranh đầy màu sắc sống động, và là một nét văn hóa địa phương độc đáo của Ấn Độ. Sau đó, Quý khách tiếp tục tham quan Đền ISKON – nơi thờ thần Krishna, Khu chợ Crawford và Đài phun nước Flora tọa lạc tại trung tâm thành phố. Đoàn dùng bữa tối và nghỉ ngơi tại khách sạn.\nNgày 3 : MUMBAI – DELHI    (Ăn sáng, trưa, tối)\n\n \n\nĂn sáng tại khách sạn. Quý khách tự do tham quan, mua sắm trong thành phố Mumbai hoặc tham gia tour tham quan Phim trường Bollywood – nơi sản xuất ra hàng trăm bộ phim mỗi năm. Ngành công nghiệp điện ảnh của Ấn Độ được xem là một trong những ngành công nghiệp sản xuất phim lớn nhất thế giới tính theo số lượng phim sản xuất hàng năm cũng như số vé bán ra tại các rạp chiếu phim, Bollywood đã trở thành một phần quan trọng của văn hoá không chỉ ở Ấn Độ, tiểu lục địa Ấn mà còn lan rộng trên toàn thế giới. Sau bữa tối, Quý khách ra sân bay đón chuyến bay đến Delhi. Đến nơi, đoàn nhận phòng khách sạn nghỉ ngơi.\nNgày 4 : DELHI – AGRA – DELHI (Ăn sáng, trưa, tối)\n\nĂn sáng tại khách sạn. Đoàn khởi hành đi Agra. Đến nơi, Quý khách tham quan Quần thể lăng mộ Taj Mahal – một trong 7 kỳ quan của thế giới – một đại công trình kiến trúc bằng đá cẩm thạch trắng, là hình mẫu tuyệt vời của kiến trúc Mogon với sự kết hợp các kiến trúc Ba Tư, Thổ Nhĩ Kỳ, Ấn Độ và Hồi giáo. Ngôi đền này do vua Shah Jahan xây dựng thế kỷ 17 để tưởng nhớ hoàng hậu Mumtaz Mahal, được xem là biểu tượng của tình yêu vĩnh cửu và thơ mộng. Sau đó, đoàn đi tham quan Agra Fort – pháo đài bằng sỏi, do hoàng đế Mughal xây năm 1569 nằm trải dài trên sông Yamuna. Sau đó, Quý khách trở lại Delhi dùng bữa tối và nghỉ ngơi tại khách sạn.\nNgày 5 : AGRA – DELHI (Ăn sáng, trưa, tối)\n\nĂn sáng tại khách sạn. tham quan Delhi với Tượng đài Chiến thắng Qutub Minar được xây dựng từ thế kỷ XII. Khải Hoàn Môn Ấn Độ (India Gate) một vòm trụ uy nghi, cao 42 m, được xây dựng để tưởng nhớ các chiến sĩ Ấn Độ hi sinh trong thế chiến thứ I. Quý khách tiếp tục tham quan Quần thể Đền thờ Akshardham – được xem là mô hình thu nhỏ của 10.000 năm văn hóa Ấn Độ. Ngôi đền giới thiệu nét tinh túy trong kiến trúc cổ của Ấn Độ, thể hiện các truyền thống và những thông điệp tâm linh vô hạn. Sau đó, Quý khách đến thăm Thành cổ Delhi, chiêm ngưỡng Pháo đài Đỏ và đền thờ lớn nhất tại Ấn Độ Jama Masjid, tham quan chợ địa phương Chandni Chowk và Raj Ghat – Đài tưởng niệm Mahatma Gandhi. Sau đó, Quý khách dùng bữa tối tại nhà hàng địa phương và trở về khách sạn nghỉ ngơi.\nNgày 6 : DELHI – TP HỒ CHÍ MINH (Ăn sáng)\n\n \n\nĂn sáng tại khách sạn, Quý khách khởi hành ra sân bay đón chuyến bay về Việt Nam (chuyến bay quá cảnh tại Bangkok). Về đến sân bay Tân Sơn Nhất, trưởng đoàn chia tay và hẹn gặp lại Quý khách trong những chương'),
(3, 'Du lịch Ai Cập', '2022-06-15', '2022-06-22', 80000000, 69000000, 1, 6, 1, 1, 'Ngày\r\n1\r\nThành phố Hồ Chí Minh - Cairo (Ăn Sáng/Trưa )\r\nĐoàn tập trung tại sân bay Tân Sơn Nhất đón chuyến bay đi Cairo, quá cảnh Bangkok.\r\nĐoàn khởi hành làm thủ tục bay đến Cairo,đáp 0:15AM ở sân bay Cairo, làm thủ tục nhập cảnh và về khách sạn nghỉ ngơi.\r\nNgày\r\n2\r\nKim Tự Tháp Giza (Ăn Sáng/Trưa/Tối )\r\nBuổi sáng: Kim Tự tháp Giza được xây dựng toàn bộ bằng lao động thủ công. Đây cũng chính là Kim tự tháp lớn nhất trong ba Kim tự tháp chính và là Kim tự tháp duy nhất còn tồn tại trong bảy kỳ quan vĩ đại của thế giới cổ đại.\r\nkim-tu-thap-giza\r\nKim Tự tháp Giza\r\n\r\nKim tự tháp Chephren kim tự tháp còn được bảo tồn tốt nhất, Kim tự tháp Mycerinus.\r\nBuổi chiều: Tượng nhân sư Sphinx bức tượng kỳ diệu được chạm khắc trên một lộ đá tự nhiên, cơ thể của tượng kéo dài đến 45m, với bàn chân dài 15m.\r\nTượng nhân sư Sphinx\r\nTượng nhân sư Sphinx\r\n\r\nViện Papyrus nổi tiếng thế giới, nơi Quý khách có thể tận mắt chứng kiến cách làm giấy của người Ai Cập cổ xưa, cửa hàng nước hoa.\r\nBuổi tối: Về lại khách sạn và nghỉ ngơi.\r\nNgày\r\n3\r\nBảo Tàng Ai Cập (Ăn Sáng/Trưa/Tối )\r\nBuổi sáng: Bảo tàng Ai Cập ,nổi tiếng trên thế giới, đây là nơi lưu giữ hơn 100.000 cổ vật trong suốt 4000 năm của nền văn hóa Ai Cập cổ đại.\r\nBảo tàng Ai Cập\r\nBảo tàng Ai Cập\r\n\r\nNhà thờ hồi giáo Mosque of Muhammad Ali thánh đường Muhammad Ali được xây dựng trong khu Citadel của Cairo trong khoảng thời gian từ 1830-1848, dù mãi đến năm 1857 nó mới được hoàn thành. Đây là Thánh đường Hồi giáo lớn nhất được xây dựng trong nửa đầu của thế kỷ thứ 19 dưới sự chỉ đạo của Muhammad Ali, để tưởng nhớ người con trai trưởng của ông là Tusun Pasha mất năm 1816.\r\nthanh-duong-mosque-of-muhammad-ali\r\nNhà thờ hồi giáo Mosque of Muhammad Ali\r\n\r\nBuổi chiều: Thành cổ Cairo với các nhà thờ: nhà thờ Coptic là nhà thờ chính tòa của Giáo hội Chính thống giáo Copt Thành Alexandria và là nơi đặt ngai tòa của đương kim Giáo chủ giáo hội này. Tọa lạc tại Quận Abbassia, thủ đô Cairo, Ai Cập, tòa nhà được khánh thành và cung hiến năm 1968 dưới thời Đức Giáo chủ Kyrillos VI. Và các Nhà thờ St Sergius, Nhà thờ treo.\r\nNhiều nhà thờ cổ ở Cairo\r\nNhiều nhà thờ cổ ở Cairo\r\n\r\nKhu chợ cổ Khan el-Khalili,khu chợ này có tuổi thọ hơn 600 tuổi. Bạn cũng có thể tìm mua vàng, đồ trang sức quý giá tại ngay khu chợ này.\r\nKhu chợ cổ Khan el-Khalili\r\nKhu chợ cổ Khan el-Khalili\r\n\r\nBuổi tối: Ăn tối và về khách sạn nghỉ ngơi .\r\nNgày\r\n4\r\nCairo - Luxor (Ăn Sáng/Trưa/Tối )\r\nBuổi sáng: Đoàn khởi hành đi Luxor. Luxor được xem là “bảo tàng ngoài trời lớn nhất thế giới”. Tới đây, du khách sẽ cảm thấy mình như đang quay ngược lại thời gian tại thành phố này. Những ngôi đền tại đây có tuổi đời lên đến hàng nghìn năm nhưng vẫn giữ được những nét cổ kính hoang sơ như thuở ban đầu.\r\nluxor-ai-cap\r\nThành phố Luxor với nhiều công trình cổ\r\n\r\nBuổi chiều&tối: Đến Luxor nhận phòng và nghỉ ngơi .\r\nNgày\r\n5\r\nKing\'s Valley (Ăn Sáng/Trưa/Tối )\r\nBuổi sáng: Kings’ Valley vùng đất thiêng liêng vốn là nơi chôn cất trong suốt 500 năm của các vị vua Ai Cập và giới Quý tộc nhiều quyền lực từ Thế kỉ 16 đến Thế kỉ 11 TCN. Năm 1979, Kings’ Valley được UNESCO công nhận là Di sản thế giới.\r\nKings’ Valley\r\nKings’ Valley\r\n\r\nĐền Karnak ngôi đền phương Bắc, ngôi đền lớn nhất Ai Cập được xây dựng toàn bộ bằng đá granite, trong đền thờ thần Amon (chúa tể của các vị thần Ai Cập). Ngôi đền Nữ hoàng Hatshepsut chiêm ngưỡng hai tượng thần Memnon khổng lồ canh giữ cổng vào khu vực lăng mộ các vị vua, mỗi tượng cao 21m và hình dáng của tượng biểu hiện cho tư thế của vua Amenhotep III đang ngồi trên ngai vàng, cai quản đất nước của mình. Bức tượng hơn 3.000 năm tuổi tuy bị hao mòn bởi thời gian và chiến tranh nhưng vẫn vững chãi cho đến ngày nay.\r\nĐền Karnak\r\nĐền Karnak\r\n\r\nBuổi tối: Đoàn ăn tối về khách sạn nghỉ ngơi.\r\nNgày\r\n6\r\nLuxor - Cairo (Ăn Sáng/Trưa/Tối )\r\nBuổi sáng: Hot Air Balloon, trải nghiệm ngắm thành phố Luxor trên cao bằng khinh khí cầu (chi phí tự túc). Nếu ở châu Âu, một chuyến du ngoạn bằng khinh khí cầu có giá đến vài trăm euro thì ở Luxor – cố đô của Ai Cập, du khách chỉ bỏ ra $100 là sẽ được lên độ cao 700m để ngắm toàn bộ sông Nile.\r\nHot Air Balloon\r\nHot Air Balloon\r\n\r\nBuổi chiều: Luxor – Cairo, đón tàu về Cairo.\r\nNgày\r\n7,8\r\nCairo - Ho Chi Minh (Ăn Sáng )\r\nBuổi sáng: Đoàn tự do tham quan thành phố.\r\nBuổi trưa đoàn đón chuyến bay về Hồ Chí Minh, Kết thúc chuyến đi\r\nQuý khách đáp chuyến bay về đến sân bay Tân Sơn Nhất. Hẹn gặp lại quý khách trong những hành trình tiếp theo của Bazan Travel'),
(4, 'Du lịch Hawaii', '2022-06-25', '2022-07-02', 90000000, 75000000, 1, 2, 1, 1, 'NGÀY 01. HÀ NỘI/SÀI GÒN - TAIPEI / NARITA - HAWAII (ĂN TRƯA, TỐI TRÊN MÁY BAY)\r\n\r\nHướng dẫn viên đón và hướng dẫn Quý khách làm thủ tục check-in tại sân bay Nội Bài / Tân Sơn Nhất. Quý khách đáp chuyến máy bay đi Taipei/ Narita.\r\n\r\nĐến sân bay Taipei, quý khách tiếp tục nối chuyến đi Hawaii. Quý khách đáp chuyến bay đi Honolulu, nghỉ đêm trên máy bay.  Do vượt tuyến đổi ngày, đoàn đến Honolulu cùng ngày khởi hành từ Việt Nam, hoàn thành thủ tục nhập cảnh và nhận phòng khách sạn nghỉ ngơi.\r\n \r\nNGÀY 02. PEARL HABOUR - VỊNH TRÂN CHÂU CẢNG (ĂN SÁNG)\r\n\r\n07h00: Đoàn dùng điểm tâm.\r\n\r\n08h00: Du khách bắt đầu chương trình tham quan:\r\nBảo tàng chứng tích Arizona - xem lại trận đánh Trân Châu Cảng - Trận đánh nổi tiếng trong rất nhiều trận đánh lịch sử của Đệ Nhị Thế Chiến.\r\nLên tàu du ngoạn và đến tàu đô đốc hạm Arizona bị đánh chìm.\r\n12h00: Đoàn dùng cơm trưa. Sau khi ăn trưa xe đón và đưa Quý khách đi thăm quan:\r\nLâu đài Lolani - Nơi ở của Vua Kamehameha - vị vua trị vì cuối cùng của Hawaii\r\nToà nhà lập pháp State Capitol\r\nTượng đài vua Kamehameha\r\n18h00: Xe đưa đoàn dùng cơm chiều và trở về khách sạn nghỉ ngơi.\r\n\r\nBuổi tối du khách tự do dạo phố biển, dạo chợ đêm. Quý khách có thể xem show ảo thuật, xem các điệu múa của những vũ nữ thổ dân trong vũ điệu Hula Hula lôi cuốn (chi phí tự túc).\r\n \r\nNGÀY 03. HONOLULU - LÀNG VĂN HOÁ DÂN TỘC POLYNESIAN (ĂN SÁNG)\r\n\r\n07h00: Quý khách ăn sáng tại khách sạn. Sau bữa sáng, đoàn tự do nghỉ ngơi hoặc mua sắm hàng hiệu tại khu vực phố đi bộ trung tâm Kalakawa…\r\n\r\n12h00: Đoàn ăn trưa tại nhà hàng.\r\n\r\nChiều: Đoàn khởi hành đi tham quan Làng văn hoá dân tộc thiểu số - một trong những trung tâm bảo tồn văn hoá độc đáo nhất thế giới mà du khách không thể bỏ qua. Du khách sẽ đi từ ngạc nhiên này đến ngạc nhiên khác khi khám phá cuộc sống hằng ngày của thổ dân Hawaii.\r\n\r\n18h00: Quý khách sẽ được thưởng thức buffet tối với những đặc sản địa phương và thưởng thức chương trình biểu diễn Polynesian Dancing Showing - Quý khách sẽ được chiêm ngưỡng những điệu nhảy quyến rũ lung linh và đầy màu sắc, những điệu múa huyền bí tạo nên nét rất riêng của vùng đảo Hawaii.\r\n\r\nQuý khách trở về khách sạn nghỉ ngơi.\r\n\r\nNGÀY 04. HONOLULU - MINI CIRCLE ISLAND (ĂN SÁNG)\r\n\r\n07h00: Đoàn ăn sáng tại khách sạn\r\n\r\n08h00: Xe đưa đoàn tiếp tục chương trình trình tham quan Hawaii với:\r\nBãi biển nổi tiếng Waikiki - quý khách sẽ có thời gian ngắm nhìn toàn cảnh vùng đảo Hawaii nổi tiếng từ trên Đỉnh Kim Cương.\r\nSuốt hành trình dài 75 dặm chạy quanh đảo, du khách sẽ tham quan một loạt các bãi biển, địa danh du lịch nổi tiếng: Khu resort nghỉ dưỡng của các ngôi sao Hollywood Kahala, đường hầm Haaona, bãi biển Makapuu và lên đỉnh gió hú Pali Lookout nhìn mây giăng núi thẫm.\r\n12h00: Đoàn dùng cơm trưa. Quý khách tự do mua sắm tại các trung tâm mua sắm lớn nhất khu du lịch Hawaii hoặc tắm biển. Xe đưa đoàn dùng cơm chiều và ra sân bay làm thủ tục check-in chuyến bay về Taipei cất cánh lúc 1h15 sáng.\r\n\r\nNGÀY 05. HONOLULU - TAIPEI/NARITA (ĂN SÁNG)\r\n\r\nQuý khách ăn nghỉ trên máy bay. Do chênh lệch múi giờ, đoàn bay về đến Taipei / Narita\r\n\r\nNGÀY 6: TAIPEI/ NARITA - HÀ NỘI/SÀI GÒN\r\n\r\nĐến Taipei quý khách tiếp tục nối chuyến về Hà Nội/Sài Gòn.\r\n\r\n\r\nMáy bay cất cánh. \r\n\r\nĐến Sân bay Nội Bài/Tân Sơn Nhất. Quý khách làm thủ tục nhập cảnh. Kết thúc chương trình.'),
(5, 'Du lịch Sydney', '2022-07-01', '2022-07-07', 55000000, 40000000, 1, 3, 3, 3, 'NGÀY 1:	TP HCM – SINGAPORE – SYDNEY  (Ăn tối trên máy bay)\r\nTrưởng đoàn Tugo Travel đón Quý khách tại cổng D2, cột số 12 – Ga đi Sân bay quốc tế Tân Sơn Nhất làm thủ tục đáp chuyến bay đến SINGAPORE. Tiếp tục đáp chuyến bay đến SYDNEY – Thành phố lớn nhất, nổi tiếng nhất và lâu đời nhất của nước Úc. Nổi danh với tên gọi “Thành phố cảng”, Đây là trung tâm tài chính lớn nhất và cũng là địa điểm du lịch nổi tiếng nhất của nước Úc. Quý khách ăn nhẹ và nghỉ đêm trên máy bay.\r\n\r\nNGÀY 2:	SYDNEY CITY TOUR (Ăn trưa, tối)\r\nĐến Sydney, đoàn làm thủ tục nhập cảnh Úc. Sau đó, đoàn khởi hành đi tham quan:\r\n\r\nLady Macquarie’s Chair: Tọa lạc tại mũi macquarie, đây là khối đá sa thạch được các tù nhân đục đẽo vào năm 1810 để vợ Thống đốc Macquarie đến ngắm cảnh.\r\nSydney Opera House: (hay còn gọi là nhà hát “Con sò”) là biểu tượng nổi tiếng nhất của Sydney được hoàn thành vào 31/08/1962 với diện tích 1,8ha, chiều dài 183m và chiều rộng 120m.\r\nCầu Harbour (Harbour Bridge): cây cầu được khánh thành năm 1932 với chiều dài hơn 1km đã từng được xem là kiến trúc cao nhất Sydney.\r\nDạo thuyền trên tàu Captain Cook Highlight: để ngắm nhìn vẻ đẹp của Vịnh Jackson và dùng đồ uống nhẹ. Tại đây, Quý khách sẽ được nhìn thấy nét đẹp cuốn hút của Nhà hát Con Sò và Cầu cảng Darling Harbour từ góc nhìn của biển. (Chi phí lên thuyền tự túc).\r\nĂn trưa tại nhà hàng địa phương. Buổi chiều đoàn tham quan:\r\n\r\nDarling Harbour: một cảng biển nhộn nhịp với nhiều quán cà phê ngoài trời lãng mạn nổi tiếng.\r\nTự do mua sắm tại Queen Victoria Building: được khánh thành vào năm 1898, nơi đây nổi tiếng với kiến trúc độc đáo, cổ kính và là trung tâm mua sắm sầm uất vào loại bậc nhất trên thế giới.\r\nĂn tối và về khách sạn nghỉ ngơi.\r\nNGÀY 3:	SYDNEY – CANBERRA (Ăn 3 bữa)\r\nĂn sáng tại khách sạn, đoàn khởi hành đi tham quan: thủ đô Canberra.  Thủ đô của Úc từ năm 1908. Cách Sydney 280km và Melbourne 660km, kiến trúc của thành phố chịu ảnh hưởng của thiết kế kết hợp khu vực thực vật tự nhiên. Nên Canberra còn được gọi là “Thủ đô Bụi rậm\r\n\r\nParliament of Australia (Tòa nhà quốc hội Úc): Là công trình kiến trúc hiện đại nổi tiếng thế giới tọa lạc trên ngọn đồi rộng được mở cửa vào năm 1988.\r\nAustralian War Memorial (Đài tưởng niệm chiến tranh): Được lên kế hoạch năm 1916 và hoàn thành năm 1941 để tưởng nhớ các chiến sỹ và nhân dân đã hi sinh bởi chiến tranh.\r\nCaptain James Cook Memorial: Là một đài phun nước nằm giữa hồ Burley Griffin, nhằm tưởng niệm thuyền trưởng James Cook là nhà thủy thủ người Anh đã khám phá ra Châu Úc\r\nĂn trưa tại nhà hàng địa phương. Khởi hành về Sydney, Trên đường về đoàn dùng cơm tối tại Banktown và tìm hiểu cuộc sống của cộng đồng người Việt tại đây , sau đó trở về khách sạn nghỉ ngơi.\r\n\r\nNGÀY 4:	SYDNEY – FREEDAY (Ăn sáng)\r\nQuý khách dùng bữa sáng tại khách sạn. Du khách tự do thăm thân hoặc tham quan mua sắm tại các khu thương mại sầm uất và sang trọng tại trung tâm thành phố như West Field, King Street và Queen Victoria Building – một cung điện hoàng gia theo kiểu Anh cổ, được sử dụng như một biểu tượng mua sắm tại Sydney. (Chi phí tự túc)\r\n\r\n– Hoặc Quý khách có thể đăng ký Option tour “Tham quan các vườn thú ngoài trời như\r\nKangaroo, Tasmania, Red Panda, …. và các điểm tham quan ngắm biển thú vị của\r\nWollongong”. (Chi phí tự túc)\r\n\r\n– Hoặc tìm đến Chợ cá Sydney: là chợ cá lớn thứ hai trên thế giới được mệnh danh là “Ngôi nhà hải sản của nước Úc” với tất cả các loại hải sản đặc trưng của Úc đều có thể tìm thấy tại đây, thư giãn tại bãi biển Bondi nhộn nhịp, ghé thăm công viên Hyde và nhà thờ cổ kính St. Mary. (Chi phí tự túc)\r\n\r\n– Hoặc đoàn có thể đăng ký Option tour đến với Ngọn núi Blue Moutain nổi tiếng, cũng như\r\ntham quan khu công viên Featherdale: được xây dựng từ năm 1975 với một bộ sưu tập tuyệt vời các loài vật kỳ lạ từ khắp nơi trên thế giới. Tại đây, Quý khách có thể hòa mình vào cuộc sống thiên nhiên hoang dã khi được ôm ấp chú gấu koala dễ thương vào lòng và chụp một tấm ảnh lưu niệm tuyệt đẹp với những chú chuột túi Kangaroo hiền lành. (Chi phí tự túc).\r\n\r\nTối tự do khám phá Sydney với những quán bia nổi tiếng dọc bên cảng Darling hoặc Opera House để hiểu thêm về đời sống về đêm ở Sydney.”\r\n\r\nNGÀY 5:	SYDNEY – SINGAPORE – TP HCM (Ăn sáng, trưa trên máy bay)\r\nĐoàn ăn sáng tại khách sạn và làm thủ tục trả phòng. Xe đưa đoàn ra sân bay Sydney làm thủ tục đáp chuyến bay về Việt Nam.\r\n\r\nVề đến sân bay Tân Sơn Nhất. Kết thúc chuyến tham quan và hẹn gặp lại quý khách.\r\n\r\n ** Chú ý : Thứ tự chương trình có thể thay đổi theo sự sắp xếp của Hướng Dẫn Viên để phù hợp với tình hình thực tế nhưng vẫn đảm bảo đầy đủ các điểm tham quan đã nêu trong chương trình.'),
(6, 'Du lịch Tokyo', '2022-07-05', '2022-07-11', 60000000, 45000000, 1, 5, 1, 1, 'NGÀY 01. HÀ NỘI/ TP.HỒ CHÍ MINH - TOKYO (ĂN NHẸ TRÊN MÁY BAY)\r\n\r\nQuý khách có mặt tại Tầng 2, Cửa đi quốc tế sân bay Nội Bài/Tân Sơn Nhất ít nhất trước 02 giờ bay, đáp chuyến bay tới Tokyo\r\nNghỉ đêm trên máy bay\r\n\r\nNGÀY 02. DU LỊCH KHÁM PHÁ TOKYO TỰ DO\r\n\r\nBuổi sáng: Máy bay đáp xuống sân bay Narita. Quý khách tự do khám phá Tokyo.\r\nChiều 14h nhận phòng khách sạn và nghỉ ngơi. Nghỉ đêm tại Khách sạn.\r\nDu khách có thể tham khảo một số lịch trình tham quan du lịch Tokyo dưới đây - Chi phí tự túc:\r\nOption 1: Quý khách tham quan HDV đón đoàn đi thăm quảng trường Hoàng Cung Nhật Bản. Quý khách tiếp tục thăm ngôi đền cổ Asakusa Kannon - ngôi đền thờ cổ nhất Tokyo và dạo bước mua sắm khu Nakamise quanh khu phố cổ Asakusa, tham quan tháp truyền hình mới Tokyo Sky Tree. Chiều nhận phòng khách sạn nghỉ ngơi.\r\nOption 2: Buổi sáng tham quan thăm khu vui chơi giải trí và mua sắm lớn nhất Tokyo Ginza, khu phố điện tử Akihabara, Thăm quan tòa thị chính thành phố Tokyo và ngắm toàn cảnh Tokyo trên tầng 45 của tòa nhà. Chiều nhận phòng khách sạn nghỉ ngơi\r\nNGÀY 03. DU LỊCH KHÁM PHÁ TOKYO TỰ DO\r\n\r\nQuý khách tự do khám phá Tokyo. Nghỉ đêm tại Khách sạn.\r\nDu khách có thể tham khảo một số lịch trình tham quan du lịch Tokyo dưới đây - Chi phí tự túc:\r\nOption 1: Cả ngày vui chơi trong công viên Tokyo Disneyland và Disney sea\r\nOption 2: Buổi sáng khởi hành đi khu du lịch Hakone - dưới chân núi Phú Sĩ. Quý khách có thể đi thuyền trên hồ Ashi thuộc quần thể Ngũ hồ chân núi Phú Sĩ. Quý khách tự do mua sắm tại trung tâm hàng hiệu giảm giá Gotemba Outlet Shopping Mall. Luộc trứng trong thung lũng Owakudani.\r\nBuổi chiều lên tham quan núi Phú Sĩ (nếu thời tiết đẹp Quý khách được lên trạm số 5). Chiều muộn quay lại Tokyo ngủ đêm khách sạn\r\nNếu Quý khách ngủ đêm lại khu vực Hakone có thể lựa chọn thư giãn tắm nước suối khoáng thiên nhiên và thoả sức Sauna tại bồn nước suối khoáng nóng thiên nhiên trong quần thể khu du lịch Kawaguchiko (liên hệ nhân viên tư vấn tour để có báo giá khách sạn tại Kawaguchiko cụ thể)\r\n\r\nNGÀY 04. TOKYO - HÀ NỘI/TP.HỒ CHÍ MINH\r\n\r\nQuý khách tự do khám phá Tokyo cho đến khi ra sân bay đáp chuyến bay về lại Hà Nội/ TP.HCM.\r\nDu khách có thể tham khảo một số lịch trình tham quan du lịch dưới đây - Chi phí tự túc:\r\nOption 1: Buổi sáng Quý khách tham quan nhà thi đấu Sumo, công viên Yoyogi\r\nOption 2: Buổi sáng Quý khách tham quan đền Minh Trị, Vườn quốc gia Shinjuku Gyoen\r\nBuổi chiều, quý khách ra sân bay đáp chuyến bay về Hà Nội/TP.HCM. Kết thúc chương trình du lịch Tokyo - Nhật Bản free and easy 4 ngày 3 đêm\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idU` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `kichHoat` int(11) NOT NULL,
  `codeReset` varchar(11111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idU`, `email`, `password`, `status`, `kichHoat`, `codeReset`) VALUES
(10, 'admin@admin.com', '$2y$10$XG4S.8mcMbhfSuWsKEXKjuYCfLQy5CI9QpC6mQoSDDn.Ycc.n2kSm', 0, 0, ''),
(17, 'nhatminh7721@gmail.com', '$2y$10$wFjl7NwlfIpZh0YqpmwameRmpeJTq8THpr6omlP21Zi4bERCpCQFC', 1, 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`idDiaDiem`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHoaDon`),
  ADD KEY `idKhachHang` (`idKhachHang`),
  ADD KEY `idTour` (`idTour`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`),
  ADD KEY `idU` (`idU`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`idKS`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`idPT`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKhachHang` (`idKhachHang`),
  ADD KEY `idTour` (`idTour`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`idTour`),
  ADD KEY `tour_ibfk_1` (`idKhachSan`),
  ADD KEY `idPhuongTien` (`idPhuongTien`),
  ADD KEY `idDiaDiem` (`idDiaDiem`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `idDiaDiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHoaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `idKS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  MODIFY `idPT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `idTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idKhachHang`) REFERENCES `khachhang` (`idKH`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`idTour`) REFERENCES `tour` (`idTour`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `user` (`idU`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idKhachHang`) REFERENCES `khachhang` (`idKH`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`idTour`) REFERENCES `tour` (`idTour`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`idKhachSan`) REFERENCES `khachsan` (`idKS`),
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`idPhuongTien`) REFERENCES `phuongtien` (`idPT`),
  ADD CONSTRAINT `tour_ibfk_3` FOREIGN KEY (`idDiaDiem`) REFERENCES `diadiem` (`idDiaDiem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
