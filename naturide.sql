SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*  `login` table  */

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234');


/* `activity` Table  */

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(10) unsigned NOT NULL,
  `tactivity` varchar(15) DEFAULT NULL,
  `npeople` int(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cost` int(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `tactivity`, `npeople`, `place`,`cost`, `cusid`) VALUES
(1, 'Paragliding', '1', 'Manali',1800, NULL),
(2, 'Paragliding', '1', 'Kerala',1800, NULL),
(3, 'Paragliding', '2', 'Manali',1800, NULL),
(4, 'Paragliding', '2', 'Kerala',1800, NULL),
(5, 'Paragliding', '4', 'Manali',1800, NULL),
(6, 'Paragliding', '4', 'Kerala',1800, NULL),
(7, 'Paragliding', '8', 'Manali',1800, NULL),
(8, 'Paragliding', '8', 'Kerala',1800, NULL),
(9, 'Kayaking', '1', 'Manali',700, NULL),
(10, 'Kayaking', '1', 'Kerala',700, NULL),
(11, 'Kayaking', '2', 'Manali',700, NULL),
(12, 'Kayaking', '2', 'Kerala',700, NULL),
(13, 'Kayaking', '4', 'Manali',700, NULL),
(14, 'Kayaking', '4', 'Kerala',700, NULL),
(15, 'Kayaking', '8', 'Manali',700, NULL),
(16, 'Kayaking', '8', 'Kerala',700, NULL),
(17, 'Trekking', '1', 'Manali',1200, NULL),
(18, 'Trekking', '1', 'Kerala',1200, NULL),
(19, 'Trekking', '2', 'Manali',1200, NULL),
(20, 'Trekking', '2', 'Kerala',1200, NULL),
(21, 'Trekking', '4', 'Manali',1200, NULL),
(22, 'Trekking', '4', 'Kerala',1200, NULL),
(23, 'Trekking', '8', 'Manali',1200, NULL),
(24, 'Trekking', '8', 'Kerala',1200, NULL),
(25, 'Ziplining', '1', 'Manali',1500, NULL),
(26, 'Ziplining', '1', 'Kerala',1500, NULL),
(27, 'Ziplining', '2', 'Manali',1500, NULL),
(28, 'Ziplining', '2', 'Kerala',1500, NULL),
(29, 'Ziplining', '4', 'Manali',1500, NULL),
(30, 'Ziplining', '4', 'Kerala',1500, NULL),
(31, 'Ziplining', '8', 'Manali',1500, NULL),
(32, 'Ziplining', '8', 'Kerala',1500, NULL);


/* `activitybook` Table  */

CREATE TABLE IF NOT EXISTS `activitybook` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `email` varchar(50) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `phone` text,
  `tactivity` varchar(20) DEFAULT NULL,
  `npeople` varchar(2) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `activity`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `activitybook`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `login`
 MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `activity`
 MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `activitybook`
 MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
