

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `workstudy`
--


-- --------------------------------------------------------

--
-- Table structure for table `Working Hours`
--

CREATE TABLE `workingHours` (
  `id` int(250) NOT NULL,
  `studentId` int(250) NOT NULL,
  `timeIn` float(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `TimeOut` float(250) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `studentRollId` varchar(250) DEFAULT NULL,
  `birthday` int(250) NOT NULL DEFAULT '0',
  `gender` varchar(10) DEFAULT NULL,
  `address` text,
  `phoneNo` varchar(250) DEFAULT NULL,
  `mobileNo` varchar(250) DEFAULT NULL,
  `studentClass` int(250) DEFAULT '0',
  `restoreUniqId` varchar(250) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


