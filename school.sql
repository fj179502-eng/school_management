-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridge`
--

CREATE TABLE `bridge` (
  `b_id` int(11) NOT NULL,
  `class_id` varchar(30) NOT NULL,
  `teacher_id` varchar(30) NOT NULL,
  `subject_id` varchar(30) NOT NULL,
  `is_class_teacher` varchar(50) NOT NULL,
  `is_active` int(11) DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bridge`
--

INSERT INTO `bridge` (`b_id`, `class_id`, `teacher_id`, `subject_id`, `is_class_teacher`, `is_active`, `create_date`) VALUES
(1, '1', '2', '1', 'Yes', 1, '2024-05-30'),
(2, '2', '2', '3', 'No', 1, '2024-05-30'),
(3, '2', '3', '1', 'Yes', 1, '2024-05-30'),
(4, '1', '3', '2', 'No', 1, '2024-05-30'),
(5, '3', '4', '1', 'Yes', 1, '2024-05-30'),
(6, '4', '3', '3', 'No', 1, '2024-05-30'),
(7, '1', '4', '5', 'No', 1, '2024-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `is_active`, `create_date`) VALUES
(1, 'Class I', 1, '2024-05-16'),
(2, 'Class II', 1, '2024-05-16'),
(3, 'Class III', 1, '2024-05-27'),
(4, 'Class IV', 1, '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `is_active`, `create_date`) VALUES
(1, 'Principle', 1, '2024-05-07'),
(2, 'Teacher', 1, '2024-05-07'),
(3, 'Student', 1, '2024-05-07'),
(4, 'Manger', 1, '2024-05-07'),
(5, 'Director', 1, '2024-05-07'),
(6, 'Clerk', 1, '2024-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(70) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `is_active`, `create_date`) VALUES
(1, 'Badin', 1, '2024-05-07'),
(2, 'Dadu', 1, '2024-05-07'),
(3, 'Ghotki', 1, '2024-05-07'),
(4, 'Hyderabad', 1, '2024-05-07'),
(5, 'Jamshoro', 1, '2024-05-07'),
(6, 'Karachi', 1, '2024-05-07'),
(7, 'Khairpur', 1, '2024-05-07'),
(8, 'Larkana', 1, '2024-05-07'),
(9, 'Mirpur Khas', 1, '2024-05-07'),
(10, 'Matiari', 1, '2024-05-07'),
(11, 'Noshoroferoze', 1, '2024-05-07'),
(12, 'Qamber', 1, '2024-05-07'),
(13, 'Sanghar', 1, '2024-05-07'),
(14, 'SBA', 1, '2024-05-07'),
(15, 'Sujawal', 1, '2024-05-07'),
(16, 'Sukkur', 1, '2024-05-07'),
(17, 'Tando Allah Yar', 1, '2024-05-07'),
(18, 'Thatta', 1, '2024-05-07'),
(19, 'Tharparker', 1, '2024-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_fname` varchar(50) NOT NULL,
  `emp_cast` varchar(50) NOT NULL,
  `emp_gender` varchar(50) NOT NULL,
  `emp_cnic` varchar(15) NOT NULL,
  `emp_district_id` varchar(10) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_designation_id` varchar(10) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_doj` date NOT NULL,
  `emp_qualification` varchar(30) NOT NULL,
  `is_class_teacher` varchar(10) NOT NULL,
  `emp_address` varchar(70) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_fname`, `emp_cast`, `emp_gender`, `emp_cnic`, `emp_district_id`, `emp_phone`, `emp_designation_id`, `emp_dob`, `emp_doj`, `emp_qualification`, `is_class_teacher`, `emp_address`, `is_active`, `create_date`) VALUES
(1, 'Aijaz Ahmed', 'Ayuob', 'Arain', 'Male', '45403339100135', '12', '03154313580', '1', '1985-02-02', '2010-05-04', 'Master', 'Yes', 'Quest Nawabshah', 1, '2024-05-08'),
(2, 'Nadeem', 'Ali Khan', 'Channa', 'Male', '45403483013510', '4', '03252566179', '2', '1990-03-01', '2015-02-05', 'PHD', 'Yes', 'Sakrand Road Nawabshah', 1, '2024-05-08'),
(3, 'Zeehsan', ' Ahmed', 'Keerio', 'Male', '4540301318310', '16', '03101508343', '2', '1992-05-12', '2026-06-08', 'BBA', 'Yes', 'Hassan Jamali v/a Nawabshah', 1, '2024-05-30'),
(4, 'Mir Mohad', 'Ali Mohad', 'Lund', 'Male', '4540383001315', '6', '03153431508', '2', '1995-04-11', '2025-05-06', 'Master', 'Yes', 'Hassan Jamali v/a Nawabshah', 1, '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `final_result`
--

CREATE TABLE `final_result` (
  `final_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `class_id` varchar(50) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `obtain_marks` varchar(50) NOT NULL,
  `total_marks` varchar(50) NOT NULL,
  `exam_year` year(4) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_result`
--

INSERT INTO `final_result` (`final_id`, `student_id`, `class_id`, `teacher_id`, `subject_id`, `obtain_marks`, `total_marks`, `exam_year`, `is_active`, `create_date`) VALUES
(1, '1', '1', '2', '1', '55', '70', '2024', 1, '2024-08-27'),
(2, '5', '1', '2', '1', '56', '70', '2024', 1, '2024-08-27'),
(3, '2', '2', '2', '3', '54', '70', '2024', 1, '2024-08-27'),
(4, '4', '2', '2', '3', '51', '70', '2024', 1, '2024-08-27'),
(5, '3', '3', '4', '1', '57', '70', '2024', 1, '2024-08-27'),
(6, '1', '1', '4', '5', '50', '70', '2024', 1, '2024-08-27'),
(7, '5', '1', '4', '5', '49', '70', '2024', 1, '2024-08-27'),
(8, '2', '2', '3', '1', '53', '70', '2024', 1, '2024-08-27'),
(9, '4', '2', '3', '1', '61', '70', '2024', 1, '2024-08-27'),
(10, '1', '1', '3', '2', '63', '70', '2024', 1, '2024-08-27'),
(11, '5', '1', '3', '2', '63', '70', '2024', 1, '2024-08-27'),
(12, '6', '4', '3', '3', '64', '70', '2024', 1, '2024-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `mid_result`
--

CREATE TABLE `mid_result` (
  `mid_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `class_id` varchar(50) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `obtain_marks` varchar(50) NOT NULL,
  `total_marks` varchar(50) NOT NULL,
  `exam_year` year(4) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mid_result`
--

INSERT INTO `mid_result` (`mid_id`, `student_id`, `class_id`, `teacher_id`, `subject_id`, `obtain_marks`, `total_marks`, `exam_year`, `is_active`, `create_date`) VALUES
(1, '1', '1', '2', '1', '25', '30', '2024', 1, '2024-08-27'),
(2, '5', '1', '2', '1', '26', '30', '2024', 1, '2024-08-27'),
(3, '2', '2', '2', '3', '27', '30', '2024', 1, '2024-08-27'),
(4, '4', '2', '2', '3', '28', '30', '2024', 1, '2024-08-27'),
(5, '3', '3', '4', '1', '29', '30', '2024', 1, '2024-08-27'),
(6, '1', '1', '4', '5', '24', '30', '2024', 1, '2024-08-27'),
(7, '5', '1', '4', '5', '23', '30', '2024', 1, '2024-08-27'),
(8, '2', '2', '3', '1', '22', '30', '2024', 1, '2024-08-27'),
(9, '4', '2', '3', '1', '21', '30', '2024', 1, '2024-08-27'),
(10, '1', '1', '3', '2', '20', '30', '2024', 1, '2024-08-27'),
(11, '5', '1', '3', '2', '18', '30', '2024', 1, '2024-08-27'),
(12, '6', '4', '3', '3', '29', '30', '2024', 1, '2024-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `is_active`, `create_date`) VALUES
(1, 'Government Boys High School Hassan Jamali', 1, '2024-05-08'),
(2, 'Goverment Boys High School Meharli Jamali', 1, '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(70) NOT NULL,
  `std_fname` varchar(70) NOT NULL,
  `std_cast` varchar(70) NOT NULL,
  `std_cnic` varchar(15) NOT NULL,
  `std_phone` varchar(15) NOT NULL,
  `std_gender` varchar(15) NOT NULL,
  `std_dob` date NOT NULL,
  `class` varchar(20) NOT NULL,
  `std_district_id` varchar(10) NOT NULL,
  `std_designation_id` varchar(10) NOT NULL,
  `parent_cnic` varchar(15) NOT NULL,
  `parent_phone` varchar(15) NOT NULL,
  `std_qualification` varchar(50) NOT NULL,
  `std_nation` varchar(50) NOT NULL,
  `std_religion` varchar(50) NOT NULL,
  `std_address` varchar(70) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_fname`, `std_cast`, `std_cnic`, `std_phone`, `std_gender`, `std_dob`, `class`, `std_district_id`, `std_designation_id`, `parent_cnic`, `parent_phone`, `std_qualification`, `std_nation`, `std_religion`, `std_address`, `is_active`, `create_date`, `password`) VALUES
(1, 'Faisal', 'Wazeer', 'Jamali', '4540339100135', '03154313580', 'Male', '2004-02-25', '1', '14', '3', '4540393594637', '03423938381', 'Matric', 'Pakistan', 'Islam', 'Villge Hassan jamali Via nawabshah', 1, '2024-06-27', '12345'),
(2, 'Tanver', 'Jan Mohad', 'Jamali', '4540313539010', '03492489883', 'Male', '2006-03-04', '2', '4', '3', '4540335994838', '03423381938', 'Eight', 'Pakistan', 'Islam', 'Sakrnd road Via nawabshah', 1, '2024-06-27', 'abcd'),
(3, 'Zahid', ' Ahmed', 'Jamali', '4540313503901', '03259059252', 'Male', '2008-05-06', '3', '2', '3', '4540303913501', '03256652197', 'Enter', 'Pakistan', 'Islam', 'Quest Nawabshah', 1, '2024-06-27', 'bscs'),
(4, 'Fawad', 'Hashim', 'Jamali', '4540339031510', '03259252607', 'Male', '2001-03-05', '2', '14', '3', '4540339598597', '03661252795', 'Matric', 'Pakistan', 'Islam', 'Villge Hassan jamali Via nawabshah', 1, '2024-06-27', 'xyz03'),
(5, 'Ali', ' Ahmed', 'Jamali', '4540339011350', '03252607592', 'Male', '2010-07-08', '1', '19', '3', '4540359463793', '03265219756', 'Nineth', 'Pakistan', 'Islam', 'Nawabshah', 1, '2024-07-01', 'student'),
(6, 'Jibran', 'Mustaf', 'Shar', '4540313509031', '03107592562', 'Male', '2001-01-01', '4', '7', '3', '4540394838359', '03465742522', '1st year', 'Pakistan', 'Islam', 'City Khaipur ', 1, '2024-07-02', 'ali12');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `class_id` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subject_name`, `class_id`, `is_active`, `create_date`) VALUES
(1, 'English', '1', 1, '2024-05-27'),
(2, 'Math', '2', 1, '2024-05-27'),
(3, 'Chemistry', '2', 1, '2024-05-27'),
(4, 'Sindhi', '4', 1, '2024-05-27'),
(5, 'Physic', '1', 1, '2024-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `emp_id`, `email`, `password`, `is_active`, `create_date`) VALUES
(1, '1', 'abc@gmail.com', '123456', 1, '2024-06-04'),
(2, '2', 'ja@gmail.com', 'jamali12', 1, '2024-06-04'),
(3, '3', 'bs@gmail.com', '21bscs03', 1, '2024-06-04'),
(4, '4', 'sj@gmail.com', 'jamali1234', 1, '2024-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`, `is_active`, `create_date`) VALUES
(1, 'Admin', 1, '2024-05-07'),
(2, 'Teacher', 1, '2024-05-07'),
(3, 'Clerk', 1, '2024-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridge`
--
ALTER TABLE `bridge`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `final_result`
--
ALTER TABLE `final_result`
  ADD PRIMARY KEY (`final_id`);

--
-- Indexes for table `mid_result`
--
ALTER TABLE `mid_result`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bridge`
--
ALTER TABLE `bridge`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `final_result`
--
ALTER TABLE `final_result`
  MODIFY `final_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mid_result`
--
ALTER TABLE `mid_result`
  MODIFY `mid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
