-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 07:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `faculty_id`, `course_id`) VALUES
(1, 'DH8C1', 1, 1),
(2, 'DH8C2', 1, 1),
(3, 'DH8QM1', 3, 1),
(4, 'DH9C1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `time`, `note`) VALUES
(1, 'DH8', '2018-2022', ''),
(2, 'DH9', '2019-2023', 'Ä‘oÃ¡n xem');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `code`, `name`, `phone`, `birthday`, `note`) VALUES
(1, 'IT', 'Công nghệ thông tin', '12312', '1111-11-11', 'Khoa IT nhiều trai'),
(3, 'HEVT', 'Môi trường', '03662804402', '2012-11-02', 'LÃ  khoa chá»§ chá»‘t'),
(5, '12', 'Kinh tế', '12', '2111-12-12', '12'),
(6, 'EV', 'Đất đai', '0988910811', '0002-12-31', '12'),
(8, 'EV', 'ngodinhloc', '12', '1111-11-11', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `fullname`, `avatar`) VALUES
(1, 'test', '21232f297a57a5a743894a0e4a801fc3', 'trưởng khoa', ''),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', ''),
(3, 'locdybala11', '3a2847382a7b363139b5eb0f863a62ff', 'Ngô Đình Lộc', '262132193_383898550039048_309104012239693736_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `code_project` varchar(50) NOT NULL,
  `point` int(11) NOT NULL,
  `linkdownload` varchar(100) DEFAULT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `student_id`, `teacher_id`, `code_project`, `point`, `linkdownload`, `file`) VALUES
(1, 'Quản lý thời trang nữ', '<p><strong>Cuộc đời n&agrave;y l&agrave; m&agrave;u hồng</strong></p>\r\n', 4, 2, 'ĐA01', 10, 'https://github.com/locdybala/bandienmay.git', '123.PDF'),
(2, 'Quản lý đồ án', '<p>test th&ecirc;m</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 2, '1212', 9, 'https://www.google.com.vn/drive/about.html', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `code`, `name`, `birthday`, `email`, `phone`, `address`, `class_id`) VALUES
(2, '21312412', 'Pháº¡m Thá» TÃº TÃ i', '1111-11-20', '0111@gmail.com', 366280440, '11112312', 1),
(3, '123123122', 'Nguyá»…n VÄƒn KhÃ¡nh', '1111-11-02', 'locnd@softdreams.vnsadsadasassa', 12312312, '123124', 2),
(4, '1811060337', 'NgÃ´ ÄÃ¬nh Lá»™c', '2000-11-10', '', 366280440, 'PhÃ¹ng XÃ¡ Tháº¡ch Tháº¥t HÃ  Ná»™i', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `birthday`, `phone`, `address`, `email`, `avatar`, `faculty_id`) VALUES
(1, 'Sá»­a Ä‘Æ°á»£c rá»“i nÃ y', '1111-11-11', '12312312', '111222', '11112312', 'FD51544F-30F6-429A-9AFD-7323AAB01317.png', 5),
(2, 'ManageUseronPhalcon', '1111-11-11', '11111', '123124', 'locdz2000@gmail.com', 'image_2022_08_01T04_32_09_527Z.png', 3),
(3, 'LÃª PhÃº HÆ°ng', '1111-11-11', '0366280440', 'HÃ  Ná»™i', 'locdybala11@gmail.com', 'image_2022_08_01T04_32_09_527Z.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
