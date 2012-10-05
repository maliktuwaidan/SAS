-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2012 at 11:33 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db-sas`
--
CREATE DATABASE `db-sas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db-sas`;

-- --------------------------------------------------------

--
-- Table structure for table `sas_berita`
--

CREATE TABLE IF NOT EXISTS `sas_berita` (
  `SAS_BERITA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SAS_BERITA_TITLE` varchar(50) NOT NULL,
  `SAS_BERITA_CONTENT` text NOT NULL,
  `SAS_BERITA_TAG` text NOT NULL,
  `SAS_ADDED_BY` varchar(50) NOT NULL,
  `SAS_ADDED_BY_NAME` varchar(50) NOT NULL,
  `SAS_LAST_UPDATE` datetime NOT NULL,
  `SAS_ADDED_DATE` datetime NOT NULL,
  `SAS_PUBLISH_FLAG` tinyint(1) NOT NULL,
  `SAS_ACTIVE_FLAG` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`SAS_BERITA_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sas_berita`
--

INSERT INTO `sas_berita` (`SAS_BERITA_ID`, `SAS_BERITA_TITLE`, `SAS_BERITA_CONTENT`, `SAS_BERITA_TAG`, `SAS_ADDED_BY`, `SAS_ADDED_BY_NAME`, `SAS_LAST_UPDATE`, `SAS_ADDED_DATE`, `SAS_PUBLISH_FLAG`, `SAS_ACTIVE_FLAG`) VALUES
(3, 'Lorem ipsum 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Administrator', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:17:35', '2012-10-03 03:17:35', 0, 1),
(4, 'Sed ut 0', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Staff Administrasi', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:17:35', '2012-10-03 03:17:35', 1, 1),
(5, 'Lorem ipsum 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Pengumuman', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:17:51', '2012-10-03 03:17:51', 1, 1),
(6, 'Sed ut 1', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Kenaikan Kelas', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:17:51', '2012-10-03 03:17:51', 0, 0),
(7, ' Nemo enim 0', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Libur', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:21:13', '2012-10-03 03:21:13', 1, 1),
(8, 'Nemo enim 1', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Ujian', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:21:13', '2012-10-03 03:21:13', 0, 1),
(9, ' Nemo enim 2', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'UTS', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:21:27', '2012-10-03 03:21:27', 0, 1),
(10, 'Nemo enim 3', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'UAS', 'sas-administrator', 'Admin Min Min', '2012-10-03 03:21:27', '2012-10-03 03:21:27', 1, 1),
(13, 'Pengumuman 3', '<b>Lorem ipsum</b> dolor sit amet', 'EA', 'sas-administrator', 'Admin Min Min', '2012-10-04 21:44:38', '2012-10-04 21:44:38', 0, 1),
(15, 'sksju aks', 'asd<b>asd<br>asdasd<br>asdas<br></b>asdas<br>', '1234', 'sas-administrator', 'Admin Min Min', '2012-10-05 00:39:16', '2012-10-05 00:39:16', 0, 1),
(16, 'Judul 1', 'Content 1<br>', 'Test 1', 'sas-administrator', 'Admin Min Min', '2012-10-05 01:34:39', '2012-10-05 01:34:39', 0, 1),
(17, 'asd', '<br>', 'test ci', 'sas-administrator', 'Admin Min Min', '2012-10-05 02:03:03', '2012-10-05 02:03:03', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sas_bn_dropdown_option`
--

CREATE TABLE IF NOT EXISTS `sas_bn_dropdown_option` (
  `SAS_DROPDOWN_TYPE` varchar(50) NOT NULL,
  `SAS_DROPDOWN_CODE` varchar(50) NOT NULL,
  `SAS_DROPDOWN_VALUE` varchar(50) NOT NULL,
  `SAS_DROPDOWN_ATTRIB` varchar(50) NOT NULL,
  `SAS_DROPDOWN_DESCRIPTION` text NOT NULL,
  `SAS_ACTIVE_FLAG` tinyint(1) NOT NULL,
  `SAS_LAST_UPDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sas_bn_dropdown_option`
--

INSERT INTO `sas_bn_dropdown_option` (`SAS_DROPDOWN_TYPE`, `SAS_DROPDOWN_CODE`, `SAS_DROPDOWN_VALUE`, `SAS_DROPDOWN_ATTRIB`, `SAS_DROPDOWN_DESCRIPTION`, `SAS_ACTIVE_FLAG`, `SAS_LAST_UPDATE`) VALUES
('responsibility', 'SAS-RES-001', 'Super Administrator', 'setting', '', 1, '2012-09-28 05:30:07'),
('responsibility', 'SAS-RES-002', 'Administrator', 'administrator', '', 1, '2012-09-28 05:30:52'),
('responsibility', 'SAS-RES-003', 'Staff Administrasi', 'administrasi', '', 1, '2012-09-28 05:32:09'),
('responsibility', 'SAS-RES-004', 'Staff Kesiswaan', 'kesiswaan', '', 1, '2012-09-28 05:34:00'),
('responsibility', 'SAS-RES-005', 'Staff Organisasi', 'organisasi', '', 1, '2012-09-28 05:34:20'),
('responsibility', 'SAS-RES-006', 'Staff Ekstrakulikuler', 'ekstrakulikuler', '', 1, '2012-09-28 05:35:27'),
('ekstrakulikuler', 'SAS-EKS-002', 'Ketua Ekstrakulikuler', '', '', 1, '2012-09-28 05:36:57'),
('ekstrakulikuler', 'SAS-EKS-003', 'Wakil Ketua Ekstrakulikuler', '', '', 1, '2012-09-28 05:37:13'),
('ekstrakulikuler', 'SAS-EKS-001', 'Pembimbing Ekstrakulikuler', '', '', 1, '2012-09-28 05:37:23'),
('ekstrakulikuler', 'SAS-EKS-004', 'Anggota Ekstrakulikuler', '', '', 1, '2012-09-28 05:39:01'),
('organisasi', 'SAS-ORG-004', 'Anggota Organisasi', '', '', 1, '2012-09-28 05:39:21'),
('organisasi', 'SAS-ORG-003', 'Wakil Ketua Organisasi', '', '', 1, '2012-09-28 05:39:45'),
('organisasi', 'SAS-ORG-002', 'Ketua Organisasi', '', '', 1, '2012-09-28 05:39:55'),
('organisasi', 'SAS-ORG-001', 'Pembimbing Organisasi', '', '', 1, '2012-09-28 05:40:06'),
('pekerjaan', 'SAS-EMP-001', 'Tetap', '', '', 1, '2012-09-28 10:18:57'),
('pekerjaan', 'SAS-EMP-002', 'Kontrak', '', '', 1, '2012-09-28 10:18:57'),
('pekerjaan', 'SAS-EMP-003', 'Magang', '', '', 1, '2012-09-28 10:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `sas_user_login`
--

CREATE TABLE IF NOT EXISTS `sas_user_login` (
  `SAS_USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SAS_USER_CODE` varchar(50) NOT NULL,
  `SAS_USER_NAME` varchar(50) NOT NULL,
  `SAS_USERNAME` varchar(50) NOT NULL,
  `SAS_PASSWORD` varchar(50) NOT NULL,
  `SAS_WORKER_FLAG` tinyint(4) NOT NULL,
  `SAS_ACTIVE_FLAG` tinyint(1) NOT NULL DEFAULT '1',
  `SAS_ADDED_DATE` datetime NOT NULL,
  `SAS_COMMENT` text NOT NULL,
  PRIMARY KEY (`SAS_USER_ID`),
  UNIQUE KEY `SAS_USER_CODE` (`SAS_USER_CODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sas_user_login`
--

INSERT INTO `sas_user_login` (`SAS_USER_ID`, `SAS_USER_CODE`, `SAS_USER_NAME`, `SAS_USERNAME`, `SAS_PASSWORD`, `SAS_WORKER_FLAG`, `SAS_ACTIVE_FLAG`, `SAS_ADDED_DATE`, `SAS_COMMENT`) VALUES
(1, 'SAS-1348780781-279-2012', 'Admin Min Min', 'sas-administrator', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2012-09-27 19:43:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `sas_user_privilege`
--

CREATE TABLE IF NOT EXISTS `sas_user_privilege` (
  `SAS_USER_CODE` varchar(50) NOT NULL,
  `SAS_USER_NAME` varchar(50) NOT NULL,
  `SAS_USER_RESPONSIBILITY` varchar(50) NOT NULL,
  `SAS_USER_RESPONSIBILITY_CODE` varchar(50) NOT NULL,
  `SAS_ADDED_BY` varchar(50) NOT NULL,
  `SAS_ADDED_DATE` datetime NOT NULL,
  `SAS_DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sas_user_privilege`
--

INSERT INTO `sas_user_privilege` (`SAS_USER_CODE`, `SAS_USER_NAME`, `SAS_USER_RESPONSIBILITY`, `SAS_USER_RESPONSIBILITY_CODE`, `SAS_ADDED_BY`, `SAS_ADDED_DATE`, `SAS_DESCRIPTION`) VALUES
('SAS-1348780781-279-2012', 'sas-administrator', 'Super Administrator', 'SAS-RES-001', '', '2012-09-28 05:57:32', ''),
('SAS-1348780781-279-2012', 'sas-administrator', 'Administrator', 'SAS-RES-002', '', '2012-09-28 10:07:02', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
