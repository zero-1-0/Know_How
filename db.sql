-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 11:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `username`, `password`) VALUES
(1, 'minhaj', 'minhajuddin3@gmail.com', 'minhaj', 'uddin'),
(2, 'medha', 'medhagautam.gautam@gmail.com', 'medha', 'gautam');

-- --------------------------------------------------------

--
-- Table structure for table `examinfo`
--

CREATE TABLE IF NOT EXISTS `examinfo` (
  `exam_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` varchar(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  `e_link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `examinfo`
--

INSERT INTO `examinfo` (`exam_id`, `sub_id`, `test_name`, `total_que`, `e_link`) VALUES
(1, 'cs1', 'Randomized C ', '20', 'exm_1.php?set=cs01'),
(2, 'cs2', 'Competition 2', '20', 'exm_1.php?set=cs02'),
(3, 'cs3', 'Competition 3', '30', 'exm_1.php?set=cs03'),
(4, 'cs4', 'Competition 4', '25', 'exm_1.php?set=cs04'),
(5, 'ce01', 'Intro', '10', 'exm_1.php?set=ce01'),
(6, 'ec01', 'into', '10', 'exm_1.php?set=ec01'),
(7, 'me01', 'Intro', '10', 'exm_1.php?set=me01'),
(8, 'ee01', 'Intro', '10', 'exm_1.php?set=ee01');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `ques_id` int(5) NOT NULL AUTO_INCREMENT,
  `exam_id` varchar(5) DEFAULT NULL,
  `ques` varchar(1000) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `exam_id`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 'cs1', 'What is the output ? \r\n\r\n#include<stdio.h>\r\nint main()\r\n{\r\n    char str1[] = "Hello";\r\n    char str2[] = "Hello";\r\n    if(str1 == str2)\r\n        printf("Equal\\n");\r\n    else\r\n        printf("Unequal\\n");\r\n    return 0;\r\n}\r\n', 'equal ', 'un-equal', 'error', 'none of the above', 2),
(2, 'cs1', 'Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1);', 'rem = fmod(3.14, 2.1);', 'Remainder cannot be obtain in floating point division.', 3),
(3, 'cs1', 'What will be the output of the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    char *str;\r\n    str = "%s";\r\n    printf(str, "K\\n");\r\n    return 0;\r\n}\r\n', 'error', 'no output', 'k', '%s', 3),
(4, 'cs1', 'kdjs', 'jbkj', 'bjkb', 'jkbj', 'bjbkjkjb', 1),
(5, 'cs2', 'sd', NULL, NULL, NULL, NULL, NULL),
(6, 'cs2', 'sabascxsx', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `r_pid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `s_id` int(5) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `u_marks` int(3) NOT NULL,
  `total` int(3) NOT NULL,
  PRIMARY KEY (`r_pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_pid`, `s_id`, `sub_id`, `u_marks`, `total`) VALUES
(1, 0, 'cs1', 1, 1),
(2, 2, 'cs1', 1, 1),
(3, 2, 'cs1', 0, 7),
(4, 2, 'cs1', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) NOT NULL COMMENT 'student name as username',
  `s_admno` varchar(11) NOT NULL COMMENT 'admission number',
  `s_mail` varchar(30) NOT NULL COMMENT 'email of student',
  `s_psw` varchar(15) NOT NULL COMMENT 'password of student',
  `branch` varchar(3) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_admno`, `s_mail`, `s_psw`, `branch`) VALUES
(1, 'sdk', 'sc', 'med@d.d', 'asAS12', 'sxc'),
(2, 'minhaj', '2013bcs1074', 'minhajuddin3@gmail.com', 'nopass', 'cse'),
(3, 'medha', 'mh', 'med@d.d', 'asAS12', 'cs'),
(4, 'sx', 'jsx', 'x@s.dx', 'asAS12', 'cs'),
(5, 'jhalak', 'mn', 'm@s.c', 'asAS12', 'cs'),
(6, 'hi', 'hi', 'h@s.s', 'asQW12', 'cs'),
(7, 'min', 'nj', 'n@s.a', 'asAS12', 'me'),
(8, 'helo', 'helo', 'h@d.d', 'asAS12', 'sd'),
(9, 's', 's', 's@x.x', 'asAS12', 's'),
(10, 'snx', 'jb', 'm@s.c', 'asAS12', 'jji');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'auto_increement',
  `sub_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teachr_id` int(5) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(20) NOT NULL COMMENT 'teacher name as username',
  `tmail` varchar(30) NOT NULL,
  `t_psw` varchar(15) NOT NULL COMMENT 'teacher password',
  `t_clg_id` int(10) NOT NULL,
  `t_dept` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`teachr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teachr_id`, `t_name`, `tmail`, `t_psw`, `t_clg_id`, `t_dept`) VALUES
(1, 'scjk', 'med@gautam.com', 'asAS12', 0, NULL),
(2, 'medha', 'cse', 'nopass', 12345, NULL),
(3, 'hi', 'hi@s.s', 'asAS12', 0, 'h'),
(4, 'nm', 'n@x.x', 'asAS12', 0, 'a'),
(5, 'qqw', 'qw@ww.w', 'asAS12', 0, 'aq'),
(6, 'hiMj', 'hi@s.s', 'asAS12', 0, 'hj'),
(7, 'mg', 'm@s.s', 'asAS12', 0, 'de'),
(8, 'me', 'med@gautam.com', 'asAS12', 0, NULL),
(9, 'ki', 'kjdshjfk@f.d', 'asAS12', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testsession`
--

CREATE TABLE IF NOT EXISTS `testsession` (
  `ID` int(4) NOT NULL COMMENT 'Primary Key, AutoIncrement',
  `testID` int(5) NOT NULL COMMENT 'Foreign:Test.ID',
  `studentID` int(7) NOT NULL COMMENT 'Foreign:Student.ID	',
  `testOn` date NOT NULL COMMENT 'to store date on which test was taken',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_ans`
--

CREATE TABLE IF NOT EXISTS `user_ans` (
  `s_id` int(7) DEFAULT NULL,
  `exam_id` int(5) DEFAULT NULL,
  `ques_id` varchar(150) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
