-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Jun 2023 pada 19.26
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_buku` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tahun_rilis` date NOT NULL,
  `isi_buku` varchar(5000) NOT NULL,
  `sampul` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `genre` varchar(5000) NOT NULL,
  `createdate` datetime NOT NULL,
  `modifydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_buku`, `penulis`, `tahun_rilis`, `isi_buku`, `sampul`, `judul`, `genre`, `createdate`, `modifydate`) VALUES
(14, '9/11', '2001-09-11', '<div class=\"row mb-5\">\r\n<div class=\"col\">\r\n<div class=\"form-check\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Komedi</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"penelitian\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Penelitian</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"romantis\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Romantis</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"fanfiction\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Fanfiction</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"Sci-Fi\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Science Fiction (Fiksi Ilmiah)</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"fantasi\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Fantasi</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"histori\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Histori</label></div>\r\n</div>\r\n<div class=\"col\">\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"horor\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Horor</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"drama\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Drama</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"musik\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Musik</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"mecha\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Mecha</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"militer\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Militer</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"megic\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Megic</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"food\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Food</label></div>\r\n</div>\r\n<div class=\"col\">\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"spiritual\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Spiritual</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"humor\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Humor</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"misteri\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Misteri</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"puisi\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Puisi</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"klasik\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Klasik</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"adventure\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Adventure</label></div>\r\n<div class=\"form-check\"><input id=\"flexCheckDefault\" class=\"form-check-input\" checked=\"checked\" name=\"genre[]\" type=\"checkbox\" value=\"motivasi\"><label class=\"form-check-label\" for=\"flexCheckDefault\">Motivasi</label></div>\r\n</div>\r\n</div>\r\n<div class=\"tox tox-tinymce\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-promotion\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '911.jpg', 'Ambasssss', 'komedi,penelitian,romantis,fanfiction,Sci-Fi,fantasi,histori,horor,drama,musik,mecha,militer,megic,food,spiritual,humor,misteri,puisi,klasik,adventure,motivasi', '2023-04-28 14:28:55', '2023-04-28 14:58:22'),
(15, 'Sosa', '2023-04-22', '<p>vbnm</p>', 'Background_Zoom8.jpg', 'qwer', 'Science Fiction (Fiksi Ilmiah)', '2023-04-28 15:59:15', NULL),
(16, 'Sosa', '2023-04-19', '<p>asdfghjk</p>', 'Capture2.PNG', '911', 'penelitian, <br>fanfiction, <br>Science Fiction (Fiksi Ilmiah)', '2023-04-28 16:07:20', NULL),
(17, 'Sosa', '2023-04-18', '<p>123</p>', 'Combo.png', 'poipoi', 'komedi, <br>penelitian, <br>romantis', '2023-04-28 16:08:33', NULL),
(18, 'Sosa', '2023-04-19', '<p>2131232131</p>', 'CheckBox.png', '12344444', 'komedi, <br>horor, <br>mecha, <br>food, <br>misteri', '2023-04-28 16:08:56', NULL),
(19, 'Sosa', '2023-04-03', '<p>as</p>', 'Get.png', 'Ini Judul', 'thriler / suspense / mystery', '2023-04-28 16:09:19', NULL),
(20, 'Sosa', '2023-05-02', '<p>poipoipoipoipoipoipoipoipoipoipoipoipoip</p>', 'Screenshot_(2).png', '2 Mei 2023 (1)', 'komedi', '2023-05-02 10:50:42', '2023-05-03 08:34:56'),
(21, 'Sosa', '2022-09-09', '<p>sdasdasdasdasdsad</p>', 'Screenshot_(14).png', 'Tsess', 'komedi, <br>spiritual, <br>humor', '2023-05-03 08:35:59', NULL),
(22, 'Fazly', '2023-05-08', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque ligula egestas enim malesuada, sed tincidunt libero ornare. Sed purus arcu, vehicula in arcu eget, ultricies maximus neque. Proin id vehicula justo, vitae laoreet urna. Integer malesuada magna quis faucibus laoreet. Phasellus vel sagittis dui. Quisque sit amet varius eros. Phasellus blandit nunc vitae rutrum aliquet.</p>\r\n<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sed volutpat massa. Curabitur volutpat feugiat magna at molestie. Donec tellus sem, laoreet vitae magna posuere, luctus rutrum erat. Nam urna magna, lobortis aliquam quam id, lobortis lobortis justo. Integer tincidunt tristique odio. Sed vitae augue eu metus pretium accumsan. Fusce tellus odio, suscipit id ex sit amet, ultrices tincidunt augue. Phasellus laoreet quam at elit pretium efficitur. Ut dignissim ex sed arcu lacinia, at dictum nisl dictum. Etiam id enim ut massa rutrum porttitor sit amet ac erat. Suspendisse sit amet magna quis leo porta consequat a a tortor. Sed interdum, elit vitae malesuada eleifend, urna massa euismod sapien, nec dictum enim ex vel lectus.</p>\r\n<p>Etiam ut malesuada lorem, at rutrum turpis. Suspendisse ac molestie risus. Morbi diam turpis, bibendum at suscipit lobortis, convallis quis lorem. Sed gravida blandit pharetra. Integer vehicula arcu magna, et consequat augue venenatis in. Sed sit amet diam metus. Aliquam nisl sem, commodo ac erat ut, dictum porta mauris. Maecenas gravida libero aliquam leo cursus, et semper tortor sollicitudin.</p>\r\n<p>Aliquam tristique nisi id ante ullamcorper, a venenatis dolor tristique. Sed tempus nec orci eu fringilla. In nec rutrum nulla. Nam vehicula, ante at dignissim commodo, dui nibh porttitor ante, sed egestas velit urna ac massa. Etiam volutpat velit quis urna consequat pellentesque. Vestibulum hendrerit imperdiet sagittis. Cras sem diam, facilisis non fringilla nec, iaculis at neque. Aliquam erat volutpat. Etiam id felis ac ex ornare auctor.</p>\r\n<p>Aliquam ligula diam, aliquam et felis sit amet, suscipit suscipit justo. Aliquam sollicitudin ante non urna ullamcorper, eu porta dolor interdum. Aenean rhoncus aliquam tempus. Nam pellentesque ante euismod turpis aliquet, nec eleifend mi euismod. Aenean fermentum scelerisque ante, in pellentesque risus ullamcorper eget. Nullam metus augue, accumsan viverra nunc in, elementum consequat nunc. Integer quis eleifend sem, et consectetur neque. Nam interdum nisi metus, congue pellentesque turpis tempus ac. Nulla lobortis purus eu est fringilla, sed interdum velit venenatis.</p>', 'Winter.jpg', 'Lorem', 'komedi', '2023-05-15 08:53:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin1`
--

CREATE TABLE `tblogin1` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `status_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic_user` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `modifydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblogin1`
--

INSERT INTO `tblogin1` (`id_user`, `username`, `id_level`, `status_user`, `nama_user`, `email_user`, `password`, `pic_user`, `createdate`, `modifydate`) VALUES
(2, 'qqq', 2, 1, 'ww', 'qq@qq.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '2023-03-25 10:45:28', NULL),
(3, 'gghggh', 2, 1, 'qqq', 'vq@vq.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '2023-03-25 10:54:44', NULL),
(4, 'baba', 2, 1, 'qq', 'bayu@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '2023-03-25 11:01:55', NULL),
(5, 'bbb', 2, 1, 'ggg', 'bbb@gmail.com', '5cb138284d431abd6a053a56625ec088bfb88912', 'ggg.png', '2023-03-25 11:07:47', '2023-04-27 10:08:00'),
(6, 'bayu', 1, 1, 'bayu', 'bayu11@gmail.com', '533d9c7fd1f7011235903f35e42e28332b851401', 'bayu3.jpg', '2023-04-13 09:20:56', '2023-04-26 09:43:28'),
(7, 'nobar cuy', 2, 1, 'nobar', 'nobar@team.com', '91b8140a54351f4ea4a091c103aa8404f45e1650', '', '2023-04-13 10:48:18', NULL),
(8, 'abadeblouw', 2, 1, 'ambatukam', 'ambatukam@ambasing.com', '411ee79ab1234dccb81ec71f5af54dae159b366b', '', '2023-04-14 08:02:58', NULL),
(10, 'Sosa', 1, 1, 'Athar Fazli  ', 'atharfs9@gmail.com', 'b300026710073b4811398a426e1c21016f8c4237', 'Athar_Fazli.PNG', '2023-04-28 10:20:04', '2023-05-02 09:59:22'),
(11, 'Fazly', 2, 1, 'Atrrrrr', 'asd@mail.edu', '5fdcc5ca71faabbd0e3c9057658d1c89412b7476', 'Atrrrrr.jpg', '2023-05-15 08:26:19', '2023-05-15 08:29:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tblogin1`
--
ALTER TABLE `tblogin1`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tblogin1`
--
ALTER TABLE `tblogin1`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
