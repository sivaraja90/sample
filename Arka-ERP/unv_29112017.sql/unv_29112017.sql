-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2017 at 11:27 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universal_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `arka_category_master`
--

CREATE TABLE IF NOT EXISTS `arka_category_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `category_type` varchar(25) NOT NULL,
  `category_code` varchar(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `arka_category_master`
--

INSERT INTO `arka_category_master` (`sl_no`, `category_type`, `category_code`, `category_name`, `created_date`, `created_time`, `time_stamp_value`, `status`) VALUES
(1, 'Product', 'CAT101', 'Desking', '2016-02-18', '11:15:10', '2016-02-18 11:16:26', 1),
(2, 'Product', 'CAT102', 'Chairs', '2016-02-18', '11:16:22', '2016-02-18 11:16:26', 1),
(3, 'Product', 'CAT103', 'Storage', '2016-02-18', '11:17:25', '2016-02-18 11:19:07', 1),
(4, 'Product', 'CAT104', 'Workstation', '2016-02-18', '11:19:56', '2016-02-18 11:19:07', 1),
(5, 'Product', 'CAT105', 'Turnkey', '2016-02-18', '11:27:00', '2016-02-18 11:28:27', 1),
(6, 'Product', 'CAT106', 'Class Rooms', '2016-02-18', '11:28:00', '2016-02-18 16:07:42', 1),
(7, 'Product', 'CAT107', 'Laboratories', '2016-02-18', '11:30:00', '2016-02-18 11:30:47', 1),
(8, 'Product', 'CAT108', 'Libraries', '2016-02-18', '11:31:00', '2016-02-18 11:30:47', 1),
(9, 'Product', 'CAT109', 'Hostel', '2016-02-18', '11:31:00', '2016-02-18 11:32:44', 1),
(10, 'Product', 'CAT110', 'Racks Safety', '2016-02-18', '11:32:00', '2016-02-18 11:32:44', 1),
(11, 'Product', 'CAT111', 'Listing Solutions', '2016-02-18', '11:34:00', '2016-02-18 11:34:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_company_master`
--

CREATE TABLE IF NOT EXISTS `arka_company_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(150) NOT NULL,
  `company_code` varchar(25) NOT NULL,
  `bank_ac_name` varchar(50) NOT NULL,
  `bank_ac_no` varchar(25) NOT NULL,
  `bank_ifsc_code` varchar(25) NOT NULL,
  `bank_branch` varchar(25) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arka_company_master`
--

INSERT INTO `arka_company_master` (`sl_no`, `company_name`, `company_code`, `bank_ac_name`, `bank_ac_no`, `bank_ifsc_code`, `bank_branch`, `bank_name`, `status`) VALUES
(1, 'Asian Engineering', 'ASN', 'Asian Engineering', '144702000001324', 'IOBA0001447', 'Guindy', 'Indian Overseas Bank', 1),
(2, 'Universal Infrastructure Systems', 'UNI', 'Universal Infrastructure Systems', '144702000001333', 'IOBA0001447', 'Guindy', 'Indian Overseas Bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_customer_address_details`
--

CREATE TABLE IF NOT EXISTS `arka_customer_address_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `area` varchar(75) NOT NULL,
  `landmark` varchar(150) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(150) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `arka_customer_address_details`
--

INSERT INTO `arka_customer_address_details` (`sl_no`, `customer_id`, `address`, `address1`, `area`, `landmark`, `pincode`, `city`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `remarks`, `status`) VALUES
(2, 'CUS1002', '2/20,SHOP NO-5,1ST FLOOR', 'RAMAJAYAM COMPLEX,SRI KALAHASTHI ROAD ', 'TADA KANDIKA', '', 524401, 'NELLORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(1, 'CUS1001', 'PLOT NO,3/4B & 5A,', 'CDMA INDUSTRIAL COMPLEX AREA,', 'MARAIMALAINAGAR', '', 603209, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(3, 'CUS1003', 'NO.88,SIDCO INDL ESTATE,', '', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(4, 'CUS1004', 'PLOT A-20/2,', 'SIPCOT INDUSTRIAL GROWTH CENTRE,', 'ORAGADAM ', '', 602105, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(5, 'CUS1005', 'UNIT - 18,PADI ', '', 'PADI', '', 600050, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(6, 'CUS1006', 'UNIT-12,STORES,', 'BRAKE DIVISION,', 'SHOLINGHUR', '', 631102, 'VELLORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(7, 'CUS1007', '192A,SECTOR 4,', 'PHASE II,', 'IMT BAWAL', '', 123501, 'HARYANA', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(8, 'CUS1008', 'PLOT NO, 533,MATHODI,', 'GADRA,ASANBONI ROAD,', 'GOVINDPUR', '', 831015, 'JAMSHEDPUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(9, 'CUS1009', 'MUNGILERI VILLAGE,', 'VINNAMPALLI POST,', 'KATPADI ', '', 632516, 'KATPADI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(10, 'CUS1010', 'DARE HOUSE;2', 'N.S.C.BOSE ROAD,', 'PARRYS', '', 600001, 'CHENNAI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(11, 'CUS1011', '7000,CENTRAL ESPRESS WAY,SRICITY,', 'SATHYAVEDU MANDAL,', 'CHITTOOR DISTRICT', '', 517588, 'ANDHRA PRADESH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(12, 'CUS1012', '60,2ND MAIN ROAD,', '', 'RA PURAM', '', 600028, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(13, 'CUS1013', '1ST FLOOR,BLOCK B,02, GODREJ IT PARK,', 'GODREJ BUSINESS DISTRICT,', 'PIROJAHAAGAR,L.B.S.MARG', '', 400079, 'VIKHROLL MUMBAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(14, 'CUS1014', 'SURVEY NO;109/2A 1B,', 'OLD GNT ROAD ,KARANODA', 'SHOLAVARAM', '', 600067, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(15, 'CUS1015', 'PLOT F82,SIPCOT INDL PARK,', 'IRUNGATTUKOTTAI PENNALUR POST,', 'SHRIPERUMBUDUR TALUK', '', 602105, 'KANCHIPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(16, 'CUS1016', 'PLOT NO;140,151 GST ROAD,', 'VALLANCHERY VILLAGE,GUDUVANCHERRY,', 'CHENGALPATTU TALUK', '', 603202, 'KANCHIPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(17, 'CUS1017', 'NO.70,ETHIRAJ SALAI', '', 'EGMORE', '', 600008, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(18, 'CUS1018', 'NO.88(OLD NO;46)', 'SEMBUDOSS STREET', 'CHENNAI', '', 600001, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(19, 'CUS1019', 'REGD.OFFICE & FACTORY', 'EXPRESS HIGHWAY', 'MANALI', '', 600068, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(20, 'CUS1020', 'LUBE BLENDING PLANT', '', 'TONDIARPET', '', 600081, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(21, 'CUS1021', 'LUNE MARKETING TERMINAL', 'NEW#56(25),THATTANKULAM ROAD,', 'MADAHAVARM', '', 600060, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(22, 'CUS1022', 'MARKETING DIVISION ,SOUTHERN REGION', 'INDIAN OIL BHAVAN,139,MAHATMA GANDHI ROAD', 'NUNGAMBAKKAM HIGH ROAD', '', 600034, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(23, 'CUS1023', 'PLOT NO;B-1,SIPCOT INDUSTRIAL GROWTH CENTRE,', 'KARANITHANGAL VILLAGE,VANDALUR-WALAJABAD ROAD,', 'ORAGADAM SRIPERUMBUDUR TALUK', '', 602105, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(24, 'CUS1024', 'AC-23,SIDCO INDUSTRIAL ESTATE', '', 'THIRUMUDIVAKKAM', '', 600044, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(25, 'CUS1025', 'E-16A,SIPCOT INDUSTRIAL PARK,', '', 'SRIPERUMBUDUR ', '', 602106, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(26, 'CUS1026', 'E13,1ST CROSS STREE,SIPCOT INDUSTRIAL PARK,', '', 'SRIPERUMBUDHUR', '', 602105, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(27, 'CUS1027', 'NO.106,PONNAN KINARU STREET,', '', 'VILLIVAKKAM', '', 600049, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(28, 'CUS1028', 'BANAVARAM ROAD,', 'NO.42,MELVENKATAPURAM VILLAGE,', 'PERUNKANCHI POST', '', 631102, 'SHOLINGHUR VELLORE ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(29, 'CUS1029', 'SRI CITY INDUSTRIAL ESTATE,', '', 'SATYAVEDU CHITTOOR DISTRICT', '', 517588, 'SRI CITY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(30, 'CUS1030', 'A-4,SIPCOT INDL,GROUTH CENTER', 'CHENGALPATTU SRIPERUMPUDUR', 'ORAGADAM', '', 600017, 'KANCHIPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(31, 'CUS1031', 'NO.7,PERIANNA MAISTRY STREET,', '', 'CHENNAI', '', 600001, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(32, 'CUS1032', '3/6,RAMA RAO STREET,', '', 'T.NAGAR', '', 600017, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(33, 'CUS1033', 'NIOT CAMPUS,VALACHERRY', 'TAMBARAM MAIN ROAD', 'NARAYANAPURAM', '', 600100, 'PALLIKARANAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(34, 'CUS1034', 'NO.495,BENJAMIN ROAD,SECTOR 24 SRICITY,', 'TADA,VARADAIAHPALEM MANDAL,', 'CHITTOOR DISTRICT', '', 517588, 'ANDHRA PRADESH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(35, 'CUS1035', 'PLOT NO;A2,SIPCOT ORAGADAM GROWTH CENTRE,', 'MATHUR VILLAGE', 'SRIPERUMBUDUR', '', 602105, 'KANCHIPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(36, 'CUS1036', 'NO.7,KARANAIPUDUCHERRY VILLAGE', '', 'GUDUVANCHERRY', '', 0, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(37, 'CUS1037', 'NOKIA TELECOM SEZ,', 'SIPCOT INDUSTRIAL PARK PHASE -III', 'SRIPERUMPUDUR', '', 602105, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(38, 'CUS1038', 'NO.116,DEVANERI VILLAGE ROAD,', 'SHOLAVARAM POST', 'CHENNAI', '', 600067, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(39, 'CUS1039', 'NO.116,DEVANERI VILLAGE ROAD,', '', 'SHOLAVARAM POST', '', 600067, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(40, 'CUS1040', 'HUZUR GARDENS ,SEMBIAM PLANT,', '', 'CHENNAI', '', 600011, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(41, 'CUS1041', 'NO.102 & 103,4TH STREET', 'MAC NAGAR,', 'KATTUPAKKAM', '', 600056, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(42, 'CUS1042', 'DIE CASTING DIVISION', '', 'PADI', '', 600050, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(43, 'CUS1043', 'NO.140,OLD MAHABALIPURAM ROAD', '', 'SEMMANCHERI', '', 600119, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(44, 'CUS1044', '74/51,SIDCO INDSUTRIAL ESTATE', '', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(45, 'CUS1045', 'HQ..,COAST GUARD REGION ( EAST)', '', 'CHENNAI', '', 600009, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(46, 'CUS1046', 'HUZUR GARDENS', '', 'SEMBIAM', '', 600011, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(47, 'CUS1047', 'OLD MAHABALIPURAM ROAD,', 'PAIYANUR (VIA) ', 'TIRUPORUR', '', 603104, 'KANCHEEPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(48, 'CUS1048', '51/74,SIDCO INDUSTRIAL ESTATE,', '', 'AMBATTUR', '', 600058, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(49, 'CUS1049', 'L 1270,30TH CROSS STREET', '', 'THIRUVALLUVAR NAGAR', '', 600041, 'THIRUVANMIYUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(50, 'CUS1050', '#33,HALLS TOWERS,HALLS ROAD,', '', 'EGMORE', '', 600008, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(51, 'CUS1051', 'NO.1,A.P.ARASU 3RD STREET,NEHRU NAGAR,', '', 'ERUKKENCHERRY', '', 600118, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(52, 'CUS1052', '142,SALAMANGALAM VILLAGE,', '', 'PADAPPAI ', '', 601301, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(53, 'CUS1053', '19/1,GST ROAD', 'PALLAVARAM,', 'CHENNAI', '', 600043, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(54, 'CUS1054', 'A-7,SIPCOT INDUSTRIAL COMPLEX,', 'PALLAPATTI VILLAGE,NILAKOTTAI TALUK,', 'DINDUGAL', '', 624201, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(55, 'CUS1055', '', '', 'CHENNAI', '', 0, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(56, 'CUS1056', 'NO;7,65TH STREET,12TH AVENUE,', '', 'ASHOK NAGAR', '', 600083, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(57, 'CUS1057', 'PLOT NO;B-25,SIPCOT INDUSTRIAL ESTATE,', 'MATTUR VILLAGE,ORAGADAM,', 'SRIPERUMBUDUR', '', 602105, 'KANCHIPURAM ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(58, 'CUS1058', 'MARSHALLS ROAD', 'DUGAR TOWERS,6TH FLOOR,', 'CHENNAI', '', 600, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(59, 'CUS1059', 'MF-15,SIDCO INDUSTRIAL ESTATE,', '', 'EKKATTUTHANGAL', '', 600032, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(60, 'CUS1060', 'NO;8,SIPCOT INDUSTRIAL PARK,', 'CHELLAPERUNBULIMADU VILLAGE,SOZHAVARAM POST,AKKUR VIA', 'CHEYYAR', '', 631701, 'CHEYYAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(61, 'CUS1061', '', '', 'VELLIVOYALCHAVADI', '', 600013, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(62, 'CUS1062', '', '', 'VELLIVOYALCHAVADI', '', 600013, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(63, 'CUS1063', 'ENNORE MFG PLANT,', '', 'ENNORE', '', 600057, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(64, 'CUS1064', 'L-33,AMBATTUR INDUSTRIAL ESTATE,', '', 'AMBATTUR', '', 600058, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(65, 'CUS1065', 'N0.2/20,SHOP NO:5,1ST FLOOR,', 'RAMAJAYAM COMPLEX,SRI KALAHASTHI ROAD,TADA KANDRIGA,TADA ANDHRA PRADESH', 'NELLORE', '', 524401, 'NELLORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(66, 'CUS1066', 'NO:88,SIDCO INDUSTRIAL ESTATE,', '', 'CHENNAI', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(67, 'CUS1067', 'M 49 & 50,CLASIC ROYAL,LB ROAD,', 'INDIRA NAGAR', 'ADYAR', '', 600020, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(68, 'CUS1068', 'III FLOOR,CREATIVE ENCLAVE,', '148,150,LUZ CHURCH ROAD,', 'MYLAPORE ', '', 600004, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(69, 'CUS1069', 'E-17&18,INDUSTRIAL ESTATE,', 'MARAIMALAI NAGAR', 'KANCHIPURAM', '', 603209, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(70, 'CUS1070', '', '', 'MELLANATHUR', '', 602004, 'THIRUVALLUR ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(71, 'CUS1071', 'SHOP NO:1,SURVEY NO:108/12,', 'DOMMARAPALAYAM', 'VENKATAGIRI', '', 524132, 'NELLORE DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(72, 'CUS1072', '10,P.K.M,ROAD', '', 'ATHIPET', '', 600058, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(73, 'CUS1073', 'TYPE-2/4,DOCTOR VSI ESTATE,', '', 'THIRUVANMIYUR', '', 600001, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(74, 'CUS1074', 'DEVELOPED PLOT NO;16,NORTH PHASE,', 'SIDCO INDUSTRIAL ESTATE,', 'AMBATTUR ', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(75, 'CUS1075', 'SIPCOT INDUSTRIAL GROWTH CENTRE,', '', 'ORAGADAM', '', 602015, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(76, 'CUS1076', 'NO.379,SIDCO INDUSTRIAL ESTATE,', '', 'AMBATTUR ', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(77, 'CUS1077', '59,1STCROSS STREET,SERIDEVI NAGAR,', '', 'MADAMBAKKAM', '', 600073, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(78, 'CUS1078', 'PLOT NO:13,INDUSTRIAL ESTATE,', '', 'AMBATTUR ', '', 60008, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(79, 'CUS1079', 'NO.1ST & 2ND FLOOR,19TH CROSS,', 'AVVAI NAGAR,LAWSPET,', 'PONDICHERRY', '', 605008, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(80, 'CUS1080', 'NO.G10/49,MCP INDUSTRIAL COMPLEX,', 'SENGADU VILLAGE', 'SRIPERUMBADUR', '', 602105, 'CHENNAI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(81, 'CUS1081', 'PLOT NO:140,151 GST ROAD,', 'VALLANCHERY VILLAGE,GUDUVANCHERY,', 'CHENGALPATTU TALUK,', '', 603202, 'KANCHIPURAM DIST ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(82, 'CUS1082', 'NO.905 TO 908,NINTH FLOOR,', 'TICEL BIO PARK,PHASE II,NO.5,CSIR ROAD', 'TARAMANI', '', 600113, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(83, 'CUS1083', 'SURVEY NO;344/2A2A,WARD NO;1/8,', 'NALLIKUPPAM ROAD,KARANAL PUDUCHERRY VILLAGE,', 'GUDUVANCHERY CHENGALPATTU TALUK,', '', 603202, 'KANCHIPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(84, 'CUS1084', 'SEZ-V 5 FLOOR,SDB 5,138,SY.602/3,', 'SOZHANGANALLUR VILLAGE', 'KANCHEEPURAM', '', 600119, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(85, 'CUS1085', 'PLOT No:B11,PHASE I,MEPZ - SEZ', '', 'TAMBARAM', '', 600045, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(86, 'CUS1086', 'PLOT NO:H-1,SIPCOT INDUSTRIAL PARK,', 'IRRUNGATTUKOTTAI', 'SRIPERUMBUDUR TALUK', '', 602117, 'KANCHEEPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(87, 'CUS1087', '', '', 'MANALI ', '', 0, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(88, 'CUS1088', 'PLOT NO;10-13,APIIC INDUSTRIAL PARK ,PHASE - II,', 'MAMBATTU VILLAGE,TADA MANDAL,DISTRICT NELLORE', 'ANDHRA PRADESH', '', 524401, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(89, 'CUS1089', 'NO.24,KOTHARI ROAD,', '', 'NUNGAMBAKKAM', '', 600034, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(90, 'CUS1090', 'E,16A,SIPCOT INDUSTRIAL AREA,NEAR SAINT CONAIN', 'FACTORY', ',SRIPERUMBUDUR', '', 602106, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(91, 'CUS1091', 'A/C CHENNAI PETROLEUM CORPORATION MIMITED', 'MANALI REFINERY,', 'MANALI ', '', 600068, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(92, 'CUS1092', 'NO.6,VANAGARAM ROAD,', '', 'AYANAMBAKKAM', '', 600095, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(93, 'CUS1093', 'PLOT #3,SIPCOT INDUSTRIAL COMPLEX', '11TH CROSS STREET', 'GUMMIDIPUNDI', '', 601201, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(94, 'CUS1094', '#350,DR 13 SOUTH,SIDDAMA AGRAHARAM,', 'SRICITY DTZ,TADA', 'CHITTOOR DISTRICT', '', 517588, 'ANDHRA PRADESH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(95, 'CUS1095', 'ARIHANT VTN SQUARE,2ND FLOOR,NEW NO:58,OLD NO:104,', 'GN CHETTY ROAD', 'T.NAGAR', '', 600017, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(96, 'CUS1096', 'TKALATHUR VILLAGE,ALATHUR TALUK,', '', 'PERAMBALUR DISTRICT', '', 0, 'PERAMBALUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(97, 'CUS1097', 'NO.69B,SIDCO INDUSTRIAL ESTATE,', '', 'CHENNAI', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(98, 'CUS1098', '18,SOUTH MADA STREET,', '', 'MYLAPORE', '', 600004, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(99, 'CUS1099', '( A SEZ DEVELOPER AT KATTUPALLI SITE)', 'KATTUPALLI VILLAGE', 'PONNERI TALUK', '', 600120, 'THIRUVALLUR DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(100, 'CUS1100', 'NO.2', '', 'MANALI', '', 600, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(101, 'CUS1101', 'NIOT CAMPUS ,VELACHERRY,', 'TAMPARAM MAIN ROAD', 'NARAYANAPURAM,', '', 600100, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(102, 'CUS1102', 'ASV RAMANA TOWERS,', '37 & 38,VENKATANARAYANA ROAD,', 'T.NAGAR', '', 600017, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(103, 'CUS1103', 'PLOT NO:S-43, & S-43A,SIPCOT INDU PILLAYPAKKAM,', '', 'SRIPERUMBUDUR TALUK,', '', 602105, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(104, 'CUS1104', 'SF NO:204,KOLLUKADU MEDU,KARUR MAIN ROAD,', '', 'LAKKAPURAM VILLAGE', '', 638002, 'ERODE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(105, 'CUS1105', 'DP - 102,AMBATTUR INDUSTRIAL ESTATE,', '', 'AMBATTUR', '', 600058, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(106, 'CUS1106', 'INTERNATIONAL TECH PARK,CREST - 12,', '12TH FLOOR', 'TARAMANI', '', 600113, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(107, 'CUS1107', 'PLOT NO:5,MALROSAPURAM MAIN ROAD,', 'SENGUNDRAM INDUSTRIAL AREA,', 'KANCHIPURAM', '', 603204, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(108, 'CUS1108', 'PLOT NO:A-1,SIPCOT INDUSTRIAL PARK,', '', 'SRIPERUMBUDUR', '', 602105, 'KANCHIPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(109, 'CUS1109', '109,SHOPPER''S PLAZA,WAGHAWADI ROAD,', 'PRIMAL CHOWK', 'BHAVNAGAR', '', 364002, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(110, 'CUS1110', '198/2,BYE PASS ROAD', '', ' POONAMALLE', '', 600056, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(111, 'CUS1111', 'NO.11/22,MANGADUSAMY STREET,', '', 'NUNGAMBAKKAM', '', 600034, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(112, 'CUS1112', 'MANALI EXPRESS HIGH WAY,', '', 'MANALI', '', 600068, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(113, 'CUS1113', '74/51,SIDCO INDSUTRIAL ESTATE', '', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(114, 'CUS1114', '317/2 C1,VAYALUR ROAD,', 'KILOY VILLAGE', 'SRIPERUMBATHUR', '', 602105, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(115, 'CUS1115', 'OZ-22,HI-TECH SEZ', 'ORAGADAM,', 'SRIPERUMBUDUR TALUK,', '', 602105, 'KANCHEEPURAM DIST ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(116, 'CUS1116', '73E,KEERALKARANTHATTU,', 'MAHADEVANKULAM POST', 'TISALYANVLLAL', '', 627657, 'THIRUNELVELI DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(117, 'CUS1117', 'SHOLINGANALLUR,', '298 OLD MAHABALIPURAM ROAD', ' OLD MAHABALIPURAM ROAD', '', 600119, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(118, 'CUS1118', 'PLOT NO:140,151,GST ROAD,VALLANCHERY VILLAGE,', 'GUDUVANCHERY,', 'CHENGALPATTU TALUK', '', 603202, 'KANCHIPURAM DIST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'NA', 1),
(119, 'CUS1119', 'dsfs', 'sfd', 'sdf', 'sdf', 453534, 'dgfsdg', 'Suresh Ramakrishnan', '2017-06-28', '03:06:54', '2017-06-28 15:07:34', 'fgdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_customer_contact_details`
--

CREATE TABLE IF NOT EXISTS `arka_customer_contact_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(15) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no1` varchar(15) NOT NULL,
  `mobile_no2` varchar(15) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `phone_no1` int(11) NOT NULL,
  `area_code` varchar(5) NOT NULL,
  `area_code1` varchar(5) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `extension1` varchar(5) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `mail_id1` varchar(50) NOT NULL,
  `area` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `designation` varchar(25) NOT NULL,
  `d_o_b` date NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `arka_customer_contact_details`
--

INSERT INTO `arka_customer_contact_details` (`sl_no`, `customer_id`, `salutation`, `first_name`, `last_name`, `mobile_no`, `mobile_no1`, `mobile_no2`, `phone_no`, `phone_no1`, `area_code`, `area_code1`, `extension`, `extension1`, `mail_id`, `mail_id1`, `area`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `designation`, `d_o_b`, `remarks`, `status`) VALUES
(99, 'CUS1099', 'MR', 'X199', 'Y199', '9000000099', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM99', '', 'PONNERI TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(98, 'CUS1098', 'MR', 'X198', 'Y198', '9000000098', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM98', '', 'MYLAPORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(97, 'CUS1097', 'MR', 'X197', 'Y197', '9000000097', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM97', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(96, 'CUS1096', 'MR', 'X196', 'Y196', '9000000096', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM96', '', 'PERAMBALUR DISTRICT', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(95, 'CUS1095', 'MR', 'X195', 'Y195', '9000000095', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM95', '', 'T.NAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(94, 'CUS1094', 'MR', 'X194', 'Y194', '9000000094', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM94', '', 'CHITTOOR DISTRICT', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(93, 'CUS1093', 'MR', 'X193', 'Y193', '9000000093', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM93', '', 'GUMMIDIPUNDI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(92, 'CUS1092', 'MR', 'X192', 'Y192', '9000000092', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM92', '', 'AYANAMBAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(91, 'CUS1091', 'MR', 'X191', 'Y191', '9000000091', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM91', '', 'MANALI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(90, 'CUS1090', 'MR', 'X190', 'Y190', '9000000090', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM90', '', ',SRIPERUMBUDUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(89, 'CUS1089', 'MR', 'X189', 'Y189', '9000000089', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM89', '', 'NUNGAMBAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(88, 'CUS1088', 'MR', 'X188', 'Y188', '9000000088', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM88', '', 'ANDHRA PRADESH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(87, 'CUS1087', 'MR', 'X187', 'Y187', '9000000087', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM87', '', 'MANALI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(86, 'CUS1086', 'MR', 'X186', 'Y186', '9000000086', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM86', '', 'SRIPERUMBUDUR TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(85, 'CUS1085', 'MR', 'X185', 'Y185', '9000000085', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM85', '', 'TAMBARAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(84, 'CUS1084', 'MR', 'X184', 'Y184', '9000000084', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM84', '', 'KANCHEEPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(83, 'CUS1083', 'MR', 'X183', 'Y183', '9000000083', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM83', '', 'GUDUVANCHERY CHENGALPATTU TALUK,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(82, 'CUS1082', 'MR', 'X182', 'Y182', '9000000082', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM82', '', 'TARAMANI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(81, 'CUS1081', 'MR', 'X181', 'Y181', '9000000081', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM81', '', 'CHENGALPATTU TALUK,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(80, 'CUS1080', 'MR', 'X180', 'Y180', '9000000080', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM80', '', 'SRIPERUMBADUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(79, 'CUS1079', 'MR', 'X179', 'Y179', '9000000079', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM79', '', 'PONDICHERRY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(69, 'CUS1069', 'MR', 'X169', 'Y169', '9000000069', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM69', '', 'KANCHIPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(68, 'CUS1068', 'MR', 'X168', 'Y168', '9000000068', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM68', '', 'MYLAPORE ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(67, 'CUS1067', 'MR', 'X167', 'Y167', '9000000067', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM67', '', 'ADYAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(66, 'CUS1066', 'MR', 'X166', 'Y166', '9000000066', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM66', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(65, 'CUS1065', 'MR', 'X165', 'Y165', '9000000065', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM65', '', 'NELLORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(64, 'CUS1064', 'MR', 'X164', 'Y164', '9000000064', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM64', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(63, 'CUS1063', 'MR', 'X163', 'Y163', '9000000063', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM63', '', 'ENNORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(62, 'CUS1062', 'MR', 'X162', 'Y162', '9000000062', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM62', '', 'VELLIVOYALCHAVADI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(61, 'CUS1061', 'MR', 'X161', 'Y161', '9000000061', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM61', '', 'VELLIVOYALCHAVADI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(60, 'CUS1060', 'MR', 'X160', 'Y160', '9000000060', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM60', '', 'CHEYYAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(59, 'CUS1059', 'MR', 'X159', 'Y159', '9000000059', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM59', '', 'EKKATTUTHANGAL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(58, 'CUS1058', 'MR', 'X158', 'Y158', '9000000058', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM58', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(57, 'CUS1057', 'MR', 'X157', 'Y157', '9000000057', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM57', '', 'SRIPERUMBUDUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(56, 'CUS1056', 'MR', 'X156', 'Y156', '9000000056', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM56', '', 'ASHOK NAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(55, 'CUS1055', 'MR', 'X155', 'Y155', '9000000055', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM55', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(54, 'CUS1054', 'MR', 'X154', 'Y154', '9000000054', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM54', '', 'DINDUGAL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(53, 'CUS1053', 'MR', 'X153', 'Y153', '9000000053', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM53', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(52, 'CUS1052', 'MR', 'X152', 'Y152', '9000000052', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM52', '', 'PADAPPAI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(51, 'CUS1051', 'MR', 'X151', 'Y151', '9000000051', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM51', '', 'ERUKKENCHERRY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(50, 'CUS1050', 'MR', 'X150', 'Y150', '9000000050', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM50', '', 'EGMORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(49, 'CUS1049', 'MR', 'X149', 'Y149', '9000000049', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM49', '', 'THIRUVALLUVAR NAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(48, 'CUS1048', 'MR', 'X148', 'Y148', '9000000048', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM48', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(47, 'CUS1047', 'MR', 'X147', 'Y147', '9000000047', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM47', '', 'TIRUPORUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(46, 'CUS1046', 'MR', 'X146', 'Y146', '9000000046', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM46', '', 'SEMBIAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(45, 'CUS1045', 'MR', 'X145', 'Y145', '9000000045', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM45', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(44, 'CUS1044', 'MR', 'X144', 'Y144', '9000000044', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM44', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(43, 'CUS1043', 'MR', 'X143', 'Y143', '9000000043', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM43', '', 'SEMMANCHERI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(42, 'CUS1042', 'MR', 'X142', 'Y142', '9000000042', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM42', '', 'PADI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(41, 'CUS1041', 'MR', 'X141', 'Y141', '9000000041', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM41', '', 'KATTUPAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(40, 'CUS1040', 'MR', 'X140', 'Y140', '9000000040', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM40', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(39, 'CUS1039', 'MR', 'X139', 'Y139', '9000000039', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM39', '', 'SHOLAVARAM POST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(38, 'CUS1038', 'MR', 'X138', 'Y138', '9000000038', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM38', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(37, 'CUS1037', 'MR', 'X137', 'Y137', '9000000037', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM37', '', 'SRIPERUMPUDUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(36, 'CUS1036', 'MR', 'X136', 'Y136', '9000000036', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM36', '', 'GUDUVANCHERRY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(35, 'CUS1035', 'MR', 'X135', 'Y135', '9000000035', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM35', '', 'SRIPERUMBUDUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(34, 'CUS1034', 'MR', 'X134', 'Y134', '9000000034', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM34', '', 'CHITTOOR DISTRICT', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(33, 'CUS1033', 'MR', 'X133', 'Y133', '9000000033', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM33', '', 'NARAYANAPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(32, 'CUS1032', 'MR', 'X132', 'Y132', '9000000032', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM32', '', 'T.NAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(31, 'CUS1031', 'MR', 'X131', 'Y131', '9000000031', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM31', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(30, 'CUS1030', 'MR', 'X130', 'Y130', '9000000030', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM30', '', 'ORAGADAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(29, 'CUS1029', 'MR', 'X129', 'Y129', '9000000029', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM29', '', 'SATYAVEDU CHITTOOR DISTRICT', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(28, 'CUS1028', 'MR', 'X128', 'Y128', '9000000028', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM28', '', 'PERUNKANCHI POST', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(27, 'CUS1027', 'MR', 'X127', 'Y127', '9000000027', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM27', '', 'VILLIVAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(26, 'CUS1026', 'MR', 'X126', 'Y126', '9000000026', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM26', '', 'SRIPERUMBUDHUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(25, 'CUS1025', 'MR', 'X125', 'Y125', '9000000025', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM25', '', 'SRIPERUMBUDUR ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(24, 'CUS1024', 'MR', 'X124', 'Y124', '9000000024', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM24', '', 'THIRUMUDIVAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(23, 'CUS1023', 'MR', 'X123', 'Y123', '9000000023', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM23', '', 'ORAGADAM SRIPERUMBUDUR TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(22, 'CUS1022', 'MR', 'X122', 'Y122', '9000000022', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM22', '', 'NUNGAMBAKKAM HIGH ROAD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(21, 'CUS1021', 'MR', 'X121', 'Y121', '9000000021', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM21', '', 'MADAHAVARM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(20, 'CUS1020', 'MR', 'X120', 'Y120', '9000000020', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM20', '', 'TONDIARPET', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(19, 'CUS1019', 'MR', 'X119', 'Y119', '9000000019', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM19', '', 'MANALI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(18, 'CUS1018', 'MR', 'X118', 'Y118', '9000000018', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM18', '', 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(17, 'CUS1017', 'MR', 'X117', 'Y117', '9000000017', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM17', '', 'EGMORE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(16, 'CUS1016', 'MR', 'X116', 'Y116', '9000000016', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM16', '', 'CHENGALPATTU TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(15, 'CUS1015', 'MR', 'X115', 'Y115', '9000000015', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM15', '', 'SHRIPERUMBUDUR TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(14, 'CUS1014', 'MR', 'X114', 'Y114', '9000000014', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM14', '', 'SHOLAVARAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(13, 'CUS1013', 'MR', 'X113', 'Y113', '9000000013', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM13', '', 'PIROJAHAAGAR,L.B.S.MARG', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(12, 'CUS1012', 'MR', 'X112', 'Y112', '9000000012', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM12', '', 'RA PURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(11, 'CUS1011', 'MR', 'X111', 'Y111', '9000000011', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM11', '', 'CHITTOOR DISTRICT', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(10, 'CUS1010', 'MR', 'X110', 'Y110', '9000000010', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM10', '', 'PARRYS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(9, 'CUS1009', 'MR', 'X109', 'Y109', '9000000009', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM9', '', 'KATPADI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(1, 'CUS1001', 'MR', 'X101', 'Y101', '9000000001', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM1', '', 'MARAIMALAINAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(2, 'CUS1002', 'MR', 'X102', 'Y102', '9000000002', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM2', '', 'TADA KANDIKA', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(3, 'CUS1003', 'MR', 'X103', 'Y103', '9000000003', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM3', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(4, 'CUS1004', 'MR', 'X104', 'Y104', '9000000004', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM4', '', 'ORAGADAM ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(5, 'CUS1005', 'MR', 'X105', 'Y105', '9000000005', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM5', '', 'PADI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(6, 'CUS1006', 'MR', 'X106', 'Y106', '9000000006', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM6', '', 'SHOLINGHUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(7, 'CUS1007', 'MR', 'X107', 'Y107', '9000000007', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM7', '', 'IMT BAWAL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(8, 'CUS1008', 'MR', 'X108', 'Y108', '9000000008', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM8', '', 'GOVINDPUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(78, 'CUS1078', 'MR', 'X178', 'Y178', '9000000078', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM78', '', 'AMBATTUR ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(77, 'CUS1077', 'MR', 'X177', 'Y177', '9000000077', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM77', '', 'MADAMBAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(76, 'CUS1076', 'MR', 'X176', 'Y176', '9000000076', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM76', '', 'AMBATTUR ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(75, 'CUS1075', 'MR', 'X175', 'Y175', '9000000075', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM75', '', 'ORAGADAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(74, 'CUS1074', 'MR', 'X174', 'Y174', '9000000074', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM74', '', 'AMBATTUR ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(73, 'CUS1073', 'MR', 'X173', 'Y173', '9000000073', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM73', '', 'THIRUVANMIYUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(72, 'CUS1072', 'MR', 'X172', 'Y172', '9000000072', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM72', '', 'ATHIPET', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(71, 'CUS1071', 'MR', 'X171', 'Y171', '9000000071', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM71', '', 'VENKATAGIRI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(70, 'CUS1070', 'MR', 'X170', 'Y170', '9000000070', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM70', '', 'MELLANATHUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(100, 'CUS1100', 'MR', 'X200', 'Y200', '9000000100', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM100', '', 'MANALI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(101, 'CUS1101', 'MR', 'X201', 'Y201', '9000000101', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM101', '', 'NARAYANAPURAM,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(102, 'CUS1102', 'MR', 'X202', 'Y202', '9000000102', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM102', '', 'T.NAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(103, 'CUS1103', 'MR', 'X203', 'Y203', '9000000103', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM103', '', 'SRIPERUMBUDUR TALUK,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(104, 'CUS1104', 'MR', 'X204', 'Y204', '9000000104', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM104', '', 'LAKKAPURAM VILLAGE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(105, 'CUS1105', 'MR', 'X205', 'Y205', '9000000105', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM105', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(106, 'CUS1106', 'MR', 'X206', 'Y206', '9000000106', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM106', '', 'TARAMANI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(107, 'CUS1107', 'MR', 'X207', 'Y207', '9000000107', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM107', '', 'KANCHIPURAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(108, 'CUS1108', 'MR', 'X208', 'Y208', '9000000108', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM108', '', 'SRIPERUMBUDUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(109, 'CUS1109', 'MR', 'X209', 'Y209', '9000000109', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM109', '', 'BHAVNAGAR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(110, 'CUS1110', 'MR', 'X210', 'Y210', '9000000110', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM110', '', ' POONAMALLE', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(111, 'CUS1111', 'MR', 'X211', 'Y211', '9000000111', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM111', '', 'NUNGAMBAKKAM', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(112, 'CUS1112', 'MR', 'X212', 'Y212', '9000000112', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM112', '', 'MANALI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(113, 'CUS1113', 'MR', 'X213', 'Y213', '9000000113', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM113', '', 'AMBATTUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(114, 'CUS1114', 'MR', 'X214', 'Y214', '9000000114', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM114', '', 'SRIPERUMBATHUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(115, 'CUS1115', 'MR', 'X215', 'Y215', '9000000115', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM115', '', 'SRIPERUMBUDUR TALUK,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(116, 'CUS1116', 'MR', 'X216', 'Y216', '9000000116', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM116', '', 'TISALYANVLLAL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(117, 'CUS1117', 'MR', 'X217', 'Y217', '9000000117', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM117', '', ' OLD MAHABALIPURAM ROAD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(118, 'CUS1118', 'MR', 'X218', 'Y218', '9000000118', '', '', '', 0, '', '', '', '', 'XYZ@XYZ.COM118', '', 'CHENGALPATTU TALUK', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', 'Authorised Person', '0000-00-00', '', 1),
(119, 'CUS1119', 'Mr', 'sdf', 'sdf', '', '', '', '', 0, '', '', '', '', 'dshgh', '', 'sdf', 'Suresh Ramakrishnan', '2017-06-28', '03:06:54', '2017-06-28 15:07:34', 'dsf', '2017-06-28', 'fgdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_customer_master`
--

CREATE TABLE IF NOT EXISTS `arka_customer_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(15) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enquiry_through` varchar(50) NOT NULL,
  `tin_no` varchar(15) NOT NULL,
  `cst_no` varchar(15) NOT NULL,
  `service_tax_no` varchar(15) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `place_type` varchar(50) NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `arka_customer_master`
--

INSERT INTO `arka_customer_master` (`sl_no`, `customer_id`, `company_name`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `enquiry_through`, `tin_no`, `cst_no`, `service_tax_no`, `reference`, `place_type`, `remarks`, `status`) VALUES
(2, 'CUS1002', 'ASIAN ENGINEERING  - TADA', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37588690071', 'Office', 'NA', 1),
(1, 'CUS1001', 'AMPHENOL OMNICONNECT INDIA (P) LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '2017-01-07 16:16:55', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(3, 'CUS1003', 'AZTECH AUTO LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33380922886', 'Office', 'NA', 1),
(4, 'CUS1004', 'BOSCH ELECTRICAL DRIVES INDIA PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33841604834', 'Office', 'NA', 1),
(5, 'CUS1005', 'BRAKES INDIA LIMITED (PADI)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33780620026', 'Office', 'NA', 1),
(6, 'CUS1006', 'BRAKES INDIA PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33780620026', 'Office', 'NA', 1),
(7, 'CUS1007', 'BRAKES INDIA PRIVATE LIMITED (BAWAL)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '6461813505', 'Office', 'NA', 1),
(8, 'CUS1008', 'BRAKES INDIA PRIVATE LIMITED - JAMSHEDPUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '20191105520', 'Office', 'NA', 1),
(9, 'CUS1009', 'CARBORANDOM UNIVERSAL LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33420000006', 'Office', 'NA', 1),
(10, 'CUS1010', 'CHOLAMANDALAM INVESTMENT AND FINANCE COMPANY LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(11, 'CUS1011', 'DANIELI INDIA LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37959169702', 'Office', 'NA', 1),
(12, 'CUS1012', 'DEV & ASSOCIATES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33330863501', 'Office', 'NA', 1),
(13, 'CUS1013', 'DOW CHEMICAL INTERNATIONAL PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(14, 'CUS1014', 'EAGLE BURGMANN KE PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33661082491', 'Office', 'NA', 1),
(15, 'CUS1015', 'ENDURANCE TECHNOLOGIES PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33751663423', 'Office', 'NA', 1),
(16, 'CUS1016', 'ESTANCIA IT PARK PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33680846382', 'Office', 'NA', 1),
(17, 'CUS1017', 'ETHIRAJ COLLEGE FOR WOMEN', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(18, 'CUS1018', 'HALLMARK ENTERPRISES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33500040993', 'Office', 'NA', 1),
(19, 'CUS1019', 'INDIAN ADDITIVES LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33621580220', 'Office', 'NA', 1),
(20, 'CUS1020', 'INDIAN OIL CORPORATION LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33270460111', 'Office', 'NA', 1),
(21, 'CUS1021', 'INDIAN OIL CORPORATION LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33270460111', 'Office', 'NA', 1),
(22, 'CUS1022', 'INDIAN OIL CORPORATION LIMITED (NUNGAMBAKKAM)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33270460111', 'Office', 'NA', 1),
(23, 'CUS1023', 'INTERNATIONAL BAKERY PRODUCTS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33924721206', 'Office', 'NA', 1),
(24, 'CUS1024', 'INTERNATIONAL FLAVOURS & FRAGRANCES INDIA PRIVATE ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33100840008', 'Office', 'NA', 1),
(25, 'CUS1025', 'INTERPLEX ELECTRONICS INDIA PVT LTD - CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33761665406', 'Office', 'NA', 1),
(26, 'CUS1026', 'MAINETTI (INDIA) PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33041441926', 'Office', 'NA', 1),
(27, 'CUS1027', 'MARK MATERIAL MOVEMENT P LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33951368627', 'Office', 'NA', 1),
(28, 'CUS1028', 'MIDRANGE COMPONENTS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33780620026', 'Office', 'NA', 1),
(29, 'CUS1029', 'MONDELEZ INDIA FOODS LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37890210202', 'Office', 'NA', 1),
(30, 'CUS1030', 'MOTHERSON SUMI ELECTRIC WIRES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33261602922', 'Office', 'NA', 1),
(31, 'CUS1031', 'MUSTALI FASTENERS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33840041388', 'Office', 'NA', 1),
(32, 'CUS1032', 'NANDI  MARKETING', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33871522610', 'Office', 'NA', 1),
(33, 'CUS1033', 'NATIONAL INSTITUE OF OCEAN TECHNOLOGY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(34, 'CUS1034', 'NITTAN INDIA TECH PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37616239983', 'Office', 'NA', 1),
(35, 'CUS1035', 'NSK - ABC  BEARINGS PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33540963344', 'Office', 'NA', 1),
(36, 'CUS1036', 'PERFETTI VAN MALE INDIA LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33451602769', 'Office', 'NA', 1),
(37, 'CUS1037', 'SALCOMP MANUFACTURING INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33396222621', 'Office', 'NA', 1),
(38, 'CUS1038', 'SIESTA HOSPITALITY SERVICES LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(39, 'CUS1039', 'SIESTA LOGISTICS CORPORATION (P) LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(40, 'CUS1040', 'SIMPSON & COMPANY LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33590580021', 'Office', 'NA', 1),
(41, 'CUS1041', 'SOUTHERN PACKAGING', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(42, 'CUS1042', 'SUNDARAM CLAYTON LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33670460279', 'Office', 'NA', 1),
(43, 'CUS1043', 'SYMRISE PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33430922519', 'Office', 'NA', 1),
(44, 'CUS1044', 'TAMILNADU TOOLS PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33571440034', 'Office', 'NA', 1),
(45, 'CUS1045', 'THE COMMANDER (FOR RITO)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(46, 'CUS1046', 'TRACTORS AND FARM EQUIPMENTS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33111500330', 'Office', 'NA', 1),
(47, 'CUS1047', 'TURBO ENERGY PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33060860206', 'Office', 'NA', 1),
(48, 'CUS1048', 'UNIVERSAL INFRASTRUCTURE SYSTEMS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33631442814', 'Office', 'NA', 1),
(49, 'CUS1049', 'AABAK ENGINEERS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33700924456', 'Office', 'NA', 1),
(50, 'CUS1050', 'ADANI KATTUPALLI PORT PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33926336256', 'Office', 'NA', 1),
(51, 'CUS1051', 'AIRTECH SYSTEMS AND SERVICES ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33281082603', 'Office', 'NA', 1),
(52, 'CUS1052', 'ALSTOM T & D INDIA LTD (HVM)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33110880015', 'Office', 'NA', 1),
(53, 'CUS1053', 'ALSTOM T & D INDIA LTD - PCP', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33110880015', 'Office', 'NA', 1),
(54, 'CUS1054', 'AMWAY INDIA ENTERPRISES PRIVATE LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33050641137', 'Office', 'NA', 1),
(55, 'CUS1055', 'ANNAMALAI THIRU ARUNACHASWARAR TIRUKOIL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(56, 'CUS1056', 'ANU ARCHITECTS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(57, 'CUS1057', 'APOLLO TYRES LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33230620086', 'Office', 'NA', 1),
(58, 'CUS1058', 'ARASU CABLE TV CORPORATION LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(59, 'CUS1059', 'ARKA AUTOMAATIONS LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33396341834', 'Office', 'NA', 1),
(60, 'CUS1060', 'ASHLEY ALTEAMS INDIA LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33331582368', 'Office', 'NA', 1),
(61, 'CUS1061', 'ASHOK LEYLAND LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33511080003', 'Office', 'NA', 1),
(62, 'CUS1062', 'ASHOK LEYLAND LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33511080003', 'Office', 'NA', 1),
(63, 'CUS1063', 'ASHOK LEYLAND LTD,ANNA SALAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33511080003', 'Office', 'NA', 1),
(64, 'CUS1064', 'ASIAN ENGINEERING', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33821324515', 'Office', 'NA', 1),
(65, 'CUS1065', 'ASIAN ENGINEERING - TADA', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37588690071', 'Office', 'NA', 1),
(66, 'CUS1066', 'AZTEC AUTO LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33791441174', 'Office', 'NA', 1),
(67, 'CUS1067', 'BABAJI FOUNDATION', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(68, 'CUS1068', 'BANZAI ESTATES PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33050701374', 'Office', 'NA', 1),
(69, 'CUS1069', 'BASF CATALYSTS INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33781602151', 'Office', 'NA', 1),
(70, 'CUS1070', 'CATERPILLAR INDIA PRIVATE LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33390842516', 'Office', 'NA', 1),
(71, 'CUS1071', 'CAUVERY BUILDTECH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '28197018623', 'Office', 'NA', 1),
(72, 'CUS1072', 'CCD TECHNICAL SOLUTIONS PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33860924368', 'Office', 'NA', 1),
(73, 'CUS1073', 'CONGRUENT INFO TECH PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33860924368', 'Office', 'NA', 1),
(74, 'CUS1074', 'COOKSON INDIA PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33151360046', 'Office', 'NA', 1),
(75, 'CUS1075', 'DAIMLER INDIA COMMERCIAL VEHICLES PVT LTD (ORAGADA', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33080702861', 'Office', 'NA', 1),
(76, 'CUS1076', 'EMKAAY ENGINEERING WORKS,', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33871364888', 'Office', 'NA', 1),
(77, 'CUS1077', 'EPL TECHNOLOGIES PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33190943991', 'Office', 'NA', 1),
(78, 'CUS1078', 'ESAB INDIA LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33221322323', 'Office', 'NA', 1),
(79, 'CUS1079', 'ESALES TECHNOLOGIES INDIA PVT LTD - POND', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(80, 'CUS1080', 'ESK INDIA COMMERCE AND TRADE PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33981724940', 'Office', 'NA', 1),
(81, 'CUS1081', 'ESTANCIA IT PARK PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(82, 'CUS1082', 'EYWA PHARMA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33866353555', 'Office', 'NA', 1),
(83, 'CUS1083', 'GRUPO COSMOS INDIA PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33311609733', 'Office', 'NA', 1),
(84, 'CUS1084', 'HCL TECHNOLOGIES LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(85, 'CUS1085', 'HEXAGON NUTRITION (EXPORTS)PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33820890731', 'Office', 'NA', 1),
(86, 'CUS1086', 'HYUNDAI MOTOR INDIA LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33781661709', 'Office', 'NA', 1),
(87, 'CUS1087', 'INDIAN OIL CORPORATION', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(88, 'CUS1088', 'INDUS COFFEE PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37999379328', 'Office', 'NA', 1),
(89, 'CUS1089', 'INSTITUTE FOR FINANCIAL MANAGEMENT AND RESEARCH', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(90, 'CUS1090', 'INTERPLEX ELECTRONICS INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '29160020488', 'Office', 'NA', 1),
(91, 'CUS1091', 'IOT ANWESHA ENGINEERING & CONSTRUCTION LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33724403641', 'Office', 'NA', 1),
(92, 'CUS1092', 'JOHNSON ELECTRIC PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33740762444', 'Office', 'NA', 1),
(93, 'CUS1093', 'KEMIN INDUSTRIES SOUTH ASIA PVT.LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33651701502', 'Office', 'NA', 1),
(94, 'CUS1094', 'KOBELCO CRANES INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '37121533534', 'Office', 'NA', 1),
(95, 'CUS1095', 'LANCOR HOLDINGS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33401560844', 'Office', 'NA', 1),
(96, 'CUS1096', 'LARSEN & TOUBRO LIMITED,CONSTRUCTION', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33800620015', 'Office', 'NA', 1),
(97, 'CUS1097', 'LENOX INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33350120664', 'Office', 'NA', 1),
(98, 'CUS1098', 'LEO COFFEE GRINDING WORKS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33210803427', 'Office', 'NA', 1),
(99, 'CUS1099', 'L & T SHIPBUILDING LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33360620451', 'Office', 'NA', 1),
(100, 'CUS1100', 'MADRAS FERTILIZERS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33951080052', 'Office', 'NA', 1),
(101, 'CUS1101', 'NATIONAL INSTITUTE OF OCEAN TECHNOLOGY', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(102, 'CUS1102', 'NISSAN MOTOR INDIA PRIVATE LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33201664744', 'Office', 'NA', 1),
(103, 'CUS1103', 'PYROTEK INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33421667048', 'Office', 'NA', 1),
(104, 'CUS1104', 'R-CUBE AMALGAMATIONS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33432906072', 'Office', 'NA', 1),
(105, 'CUS1105', 'REDEMA ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33941360145', 'Office', 'NA', 1),
(106, 'CUS1106', 'REED ELSEVIER INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33666252785', 'Office', 'NA', 1),
(107, 'CUS1107', 'R.STAHL (P) LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33261382926', 'Office', 'NA', 1),
(108, 'CUS1108', 'SAINT - GOBAIN INDIA PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33511662391', 'Office', 'NA', 1),
(109, 'CUS1109', 'SIMPAC MARINE (INDIA) PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '24140301898', 'Office', 'NA', 1),
(110, 'CUS1110', 'TAKASAGO INTERNATIONAL INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33071668162', 'Office', 'NA', 1),
(111, 'CUS1111', 'TAMILNADU ARASU CABLE TV CORPORATION LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '', 'Office', 'NA', 1),
(112, 'CUS1112', 'TAMILNADU PETROPRODUCTS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33601082912', 'Office', 'NA', 1),
(113, 'CUS1113', 'TAMILNADU TOOLS PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33571440034', 'Office', 'NA', 1),
(114, 'CUS1114', 'TATA CHEMICALS LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33331082236', 'Office', 'NA', 1),
(115, 'CUS1115', 'VISHAY PRECISION TRANSDUCERS INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33980927309', 'Office', 'NA', 1),
(116, 'CUS1116', 'V.V.MINERAL', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33085600488', 'Office', 'NA', 1),
(117, 'CUS1117', 'VESTAS WIND TECHNOLOGY INDIA PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33810921728', 'Office', 'NA', 1),
(118, 'CUS1118', 'ZOHO CORPORATION PRIVATE LIMITED ( ZOHO EST)', 'Suresh Ramakrishnan', '0000-00-00', '00:00:06', '0000-00-00 00:00:00', 'Direct', '', '', '', '33750845713', 'Office', 'NA', 1),
(119, 'CUS1119', 'adrdfsf', 'Suresh Ramakrishnan', '2017-06-28', '03:06:54', '2017-06-28 15:07:34', 'IndiaMart', '', '', '', 'gsdfg', 'Pharma', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_customer_po_master`
--

CREATE TABLE IF NOT EXISTS `arka_customer_po_master` (
  `sl_no` int(11) NOT NULL,
  `vendor_code` varchar(50) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `quote_ref` varchar(50) NOT NULL,
  `ref_po_no` varchar(50) NOT NULL,
  `po_no_count` varchar(25) NOT NULL,
  `po_no` varchar(50) NOT NULL,
  `po_date` date NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `po_from` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_address1` varchar(255) NOT NULL,
  `cus_area` varchar(50) NOT NULL,
  `cus_city` varchar(50) NOT NULL,
  `pincode` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arka_customer_po_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_cus_reg_master`
--

CREATE TABLE IF NOT EXISTS `arka_cus_reg_master` (
  `s_no` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `category` varchar(25) NOT NULL,
  `contact_person` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `logo_image` varchar(250) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `customer_type` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `delivery_manager` varchar(25) NOT NULL,
  `account_manager` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `record_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `arka_cus_reg_master`
--

INSERT INTO `arka_cus_reg_master` (`s_no`, `customer_id`, `customer_name`, `address1`, `address2`, `city`, `state`, `pincode`, `category`, `contact_person`, `designation`, `logo_image`, `mobile`, `phone`, `email`, `customer_type`, `created_date`, `created_time`, `created_by`, `delivery_manager`, `account_manager`, `status`, `record_status`) VALUES
(19, 'CUS1003', 'Global wind ltd', 'sriperambature', 'thiruvanmyur', 'chennai', 'TamilNadu', 600111, '', 'Suresh', 'Customer', '', '9119191991', '34222222', 'Globalwind@outlook.com', 'Demo', '2015-08-13', '02:43:36 pm', 'Admin', '', '', 1, 0),
(30, 'CUS1004', 'V Ram Systems', '17 JK Complex,', 'Ramanathan Street, T Nagar', 'Chennai', 'TamilNadu', 600017, '', 'Mr. TR. Ramu', 'CEO', '', '9551098177', '0444262965', 'ramu@datadoctorz.com', 'Own Family', '2015-08-18', '03:28:19 pm', 'Admin', '', '', 0, 1),
(18, 'CUS1002', 'Gamesa ', 'Aralvoimozhi', 'Nagercoil', 'Chennai', 'TamilNadu', 651470, '', 'Thambidurai', 'Site Manager', '', '9887845144', '0442228288', 'thambidurai@gamesa.com', 'Demo', '2015-08-13', '02:38:41 pm', 'Admin', '', '', 0, 1),
(17, 'CUS1001', 'ARKA', 'Ambatur', 'Guindy', 'Chennai', 'TamilNadu', 600, '', 'Mr. Valliappan', 'Company', '', '9884475646', '9551098388', 'arkaautomaations@gmail.com', 'Sales + AMC', '2015-08-13', '01:49:42 pm', 'Admin', '', '', 1, 1),
(3, 'CUS1004', 'Leap Green Energy', 'Gudimangalam', 'Coimbatore', 'Coimbatore', 'TamilNadu', 625016, '', 'Mr.Sakthivel.T', 'Manager(O&G)', '', '9659643334', '', 'sakthivel@leapgreenenergy.com', 'select', '2016-05-04', '03:28:19 pm', 'Admin', '', '', 1, 1),
(31, 'CUS1005', 'RRPL', 'No.114,5th floor Kothari Building', 'Mahatma Gandhi Road,Nungambakkam', 'Chennai', 'Tamilnadu', 600, '', 'Test', 'Test', '123eeer.jpeg', '9087654331', '044 42052389/86', 'info@rajalakshmipower.com', 'OutSourcing', '2016-12-19', '', 'Admin', '', '', 1, 1),
(32, 'CUS1006', 'RRPL', 'Pazhvoor', 'Pazhvoor', 'Test', 'Tamil Nadu', 627121, '', 'Test', 'test', 'sdfsdf', '', '99999999999', 'test@gmail.com', 'Demo', '2016-12-21', '15:09:31', 'admin', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `arka_employee_master`
--

CREATE TABLE IF NOT EXISTS `arka_employee_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `company_code` varchar(50) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `emp_first_name` varchar(50) NOT NULL,
  `emp_last_name` varchar(50) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `emp_type` varchar(25) NOT NULL,
  `d_o_b` date NOT NULL,
  `sex` varchar(7) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `salary` double(11,2) NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `mobile_1` varchar(13) NOT NULL,
  `mobile_2` varchar(13) NOT NULL,
  `personal_mail` varchar(50) NOT NULL,
  `company_mail` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `area_code` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `extension` int(11) NOT NULL,
  `area_code1` int(11) NOT NULL,
  `phone1` int(11) NOT NULL,
  `extension1` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `residence_mobile` int(15) NOT NULL,
  `no_of_year_exp` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_employee_master`
--

INSERT INTO `arka_employee_master` (`sl_no`, `company_name`, `company_code`, `salutation`, `emp_first_name`, `emp_last_name`, `emp_id`, `emp_type`, `d_o_b`, `sex`, `designation`, `salary`, `department`, `mobile`, `mobile_1`, `mobile_2`, `personal_mail`, `company_mail`, `address1`, `address2`, `area`, `pincode`, `area_code`, `phone_no`, `extension`, `area_code1`, `phone1`, `extension1`, `joining_date`, `father_name`, `mother_name`, `residence_mobile`, `no_of_year_exp`, `qualification`, `image`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(1, 'Arka Automaations LTD', 'AAL', 'Mr', 'siva', 'raja', 'EMP1001', '', '2016-04-05', 'Male', 'test', 0.00, 'test', '9676544434', '', '', 'test@gmail.com', 'test@gmail.com', 'test', 'test', 'test', 678433, 54565, 0, 2323, 0, 432, 0, '2017-01-09', 'test', 'test', 2147483647, '2', 'test', 'warning.gif', 'Suresh Ramakrishnan', '2017-01-09', '11:49:14', '2017-03-02 12:33:53', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_enquiry_mail`
--

CREATE TABLE IF NOT EXISTS `arka_enquiry_mail` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(20) NOT NULL,
  `quote_id` varchar(20) NOT NULL,
  `enquiry_type` varchar(50) NOT NULL,
  `mail_from` varchar(50) NOT NULL,
  `mail_to` varchar(50) NOT NULL,
  `mail_cc` varchar(50) NOT NULL,
  `mail_subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `mail_attachments1` varchar(50) NOT NULL,
  `mail_attachments2` varchar(50) NOT NULL,
  `mail_attachments3` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_enquiry_mail`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_enquiry_through`
--

CREATE TABLE IF NOT EXISTS `arka_enquiry_through` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `arka_enquiry_through`
--

INSERT INTO `arka_enquiry_through` (`sl_no`, `description`, `status`) VALUES
(1, 'IndiaMart', 1),
(3, 'Rep Visit', 1),
(4, 'Introduction', 1),
(5, 'Follow-up', 1),
(6, 'Just Dial', 1),
(7, 'Sulekha', 1),
(8, 'Tele - New Calls', 1),
(9, 'Old Promotion', 1),
(10, 'Customer Reference', 1),
(11, 'Other Reference', 1),
(12, 'Online', 1),
(13, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_enquriy_followup`
--

CREATE TABLE IF NOT EXISTS `arka_enquriy_followup` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `arka_group` varchar(100) NOT NULL,
  `snooze_date` date NOT NULL,
  `po_date` date NOT NULL,
  `po_no` varchar(10) NOT NULL,
  `snooze_time` time NOT NULL,
  `closed_date` date NOT NULL,
  `closed_time` time NOT NULL,
  `enquiry_status` varchar(25) NOT NULL,
  `requirement` longtext NOT NULL,
  `assign_to` varchar(50) NOT NULL,
  `reassign` varchar(50) NOT NULL,
  `enquiry_type` varchar(50) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `arka_enquriy_followup`
--

INSERT INTO `arka_enquriy_followup` (`sl_no`, `enquiry_id`, `customer_id`, `arka_group`, `snooze_date`, `po_date`, `po_no`, `snooze_time`, `closed_date`, `closed_time`, `enquiry_status`, `requirement`, `assign_to`, `reassign`, `enquiry_type`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(21, 'ENQ1007', 'CUS1001', 'Asian Engineering', '2016-10-26', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'Windows Hosting,CRM Development,', 'Sivaraja,Rajiv,', '', 'Sales', 'Sivaraja', '2016-10-26', '11:03:44', '2016-10-26 11:07:24', '', 1),
(20, 'ENQ1006', 'CUS1001', 'Asian Engineering', '2016-10-27', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'Domain Registration,', 'Rajiv,Vishal,', '', 'Sales', 'Sivaraja', '2016-10-26', '10:57:48', '2016-10-26 11:03:43', '', 1),
(19, 'ENQ1005', 'CUS1001', 'Asian Engineering', '2016-10-27', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'Windows Hosting,CRM Development,', 'Vishal,Nagaraj,', '', 'Sales', 'Sivaraja', '2016-10-26', '10:55:25', '2016-10-26 10:57:47', '', 1),
(18, 'ENQ1004', 'CUS1001', 'Asian Engineering', '2016-10-27', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'Windows Hosting,CRM Development,', 'Rajiv,Vishal,', '', 'Sales', 'Sivaraja', '2016-10-26', '10:46:48', '2016-10-26 10:48:15', '', 1),
(17, 'ENQ1003', 'CUS1001', 'Asian Engineering', '2016-10-26', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'ERP Development,CRM Development,', 'Ganesh Kumar,', '', 'Sales', 'Sivaraja', '2016-10-26', '10:41:38', '2016-10-26 10:42:57', '', 1),
(16, 'ENQ1002', 'CUS1001', 'Asian Engineering', '2016-10-24', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'SW1005,', 'Rajiv,', '', 'Sales', 'Rajiv', '2016-10-22', '04:14:46', '2016-10-22 16:15:36', '', 1),
(22, 'ENQ1008', 'CUS1049', 'Universal Infrastructure Systems', '2017-01-07', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', ',', 'suresh ramakrishnan', '', 'Sales', 'Suresh Ramakrishnan', '2017-01-07', '12:08:08', '2017-01-07 12:09:20', '', 1),
(23, 'ENQ1009', 'CUS1037', 'Universal Infrastructure Systems', '2017-01-21', '0000-00-00', '', '00:00:00', '0000-00-00', '00:00:00', 'Pending', 'FUARRIVESETXXXXX,', 'sivaraja', '', 'Sales', 'Suresh Ramakrishnan', '2017-01-21', '01:05:03', '2017-01-21 13:05:54', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_enquriy_master`
--

CREATE TABLE IF NOT EXISTS `arka_enquriy_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax_no` varchar(100) NOT NULL,
  `cst_no` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `area_code` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `extension` int(11) NOT NULL,
  `enquiry_id` varchar(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `arka_group` varchar(100) NOT NULL,
  `company_code` varchar(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `salutation` varchar(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no1` varchar(15) NOT NULL,
  `mobile_no2` varchar(15) NOT NULL,
  `area` varchar(35) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `landmark` varchar(25) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `assign_to` varchar(50) NOT NULL,
  `reassign` varchar(25) NOT NULL,
  `enquiry_status` varchar(255) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `enquiry_type` varchar(50) NOT NULL,
  `reference_id` varchar(20) NOT NULL,
  `enquiry_through` varchar(50) NOT NULL,
  `snooze_date` date NOT NULL,
  `snooze_time` time NOT NULL,
  `closed_date` date NOT NULL,
  `po_date` date NOT NULL,
  `po_no` varchar(100) NOT NULL,
  `closed_time` time NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `PG` varchar(50) NOT NULL,
  `SSG` varchar(50) NOT NULL,
  `Storage` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `designation` varchar(25) NOT NULL,
  `remarks` longtext NOT NULL,
  `accept_status` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `arka_enquriy_master`
--

INSERT INTO `arka_enquriy_master` (`sl_no`, `service_tax_no`, `cst_no`, `tin_no`, `area_code`, `phone_no`, `extension`, `enquiry_id`, `company_name`, `arka_group`, `company_code`, `customer_id`, `salutation`, `customer_name`, `mobile_no`, `mobile_no1`, `mobile_no2`, `area`, `address`, `address1`, `landmark`, `city`, `pincode`, `assign_to`, `reassign`, `enquiry_status`, `email_id`, `email_id1`, `enquiry_type`, `reference_id`, `enquiry_through`, `snooze_date`, `snooze_time`, `closed_date`, `po_date`, `po_no`, `closed_time`, `requirement`, `branch`, `PG`, `SSG`, `Storage`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `designation`, `remarks`, `accept_status`, `status`) VALUES
(1, '23123', '2312312', '213123123', 0, 0, 0, 'ENQ1001', 'ADROIT SOLUTIONZ', 'Universal Infrastructure Systems', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Rajiv,Nagaraj,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-20', '00:00:00', '0000-00-00', '2016-10-19', '2312312', '00:00:00', 'SW1001,SW1002,', '', '', '', '', 'Suresh Ramakrishnan', '2016-10-19', '12:04:09', '2017-07-22 11:11:01', 'MD', '', 0, 1),
(16, '', '', '', 0, 0, 0, 'ENQ1002', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Rajiv,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-24', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'SW1005,', '', '', '', '', 'Rajiv', '2016-10-22', '04:14:46', '2016-10-22 16:15:36', 'MD', 'Test', 0, 1),
(17, '', '', '', 0, 0, 0, 'ENQ1003', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Ganesh Kumar,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-26', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'ERP Development,CRM Development,', '', '', '', '', 'Sivaraja', '2016-10-26', '10:41:38', '2016-10-26 10:42:57', 'MD', 'Test', 0, 1),
(18, '', '', '', 0, 0, 0, 'ENQ1004', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Rajiv,Vishal,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-27', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'Windows Hosting,CRM Development,', '', '', '', '', 'Sivaraja', '2016-10-26', '10:46:48', '2016-10-26 10:48:15', 'MD', 'Test', 0, 1),
(19, '', '', '', 0, 0, 0, 'ENQ1005', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Vishal,Nagaraj,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-27', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'Windows Hosting,CRM Development,', '', '', '', '', 'Sivaraja', '2016-10-26', '10:55:25', '2016-10-26 10:57:47', 'MD', 'test', 0, 1),
(20, '', '', '', 0, 0, 0, 'ENQ1006', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Rajiv,Vishal,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-27', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'Domain Registration,', '', '', '', '', 'Sivaraja', '2016-10-26', '10:57:48', '2016-10-26 11:03:43', 'MD', 'test', 0, 1),
(21, '', '', '', 0, 0, 0, 'ENQ1007', 'ADROIT SOLUTIONZ', 'Asian Engineering', '', 'CUS1001', 'Mr', 'Suresh Ramakrishnan', '9500051119', '', '', 'Test', 'Test', 'Test', '', 'Chennai', 600028, 'Sivaraja,Rajiv,', '', 'Pending', 'suresh@adroitsolutionz.com', '', 'Sales', '', 'IndiaMart', '2016-10-26', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'Windows Hosting,CRM Development,', '', '', '', '', 'Sivaraja', '2016-10-26', '11:03:44', '2016-10-26 11:07:24', 'MD', 'tets', 0, 1),
(22, '', '', '', 0, 0, 0, 'ENQ1008', 'AABAK ENGINEERS', 'Universal Infrastructure Systems', '', 'CUS1049', 'MR', 'X149 Y149', '9000000049', '', '', 'THIRUVALLUVAR NAGAR', 'L 1270,30TH CROSS STREET', '', '', 'THIRUVANMI', 600041, 'suresh ramakrishnan', '', 'Pending', 'XYZ@XYZ.COM49', '', 'Sales', 'test', 'Follow-up', '2017-01-07', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', ',', 'test', 'Storage', '0', 'Deoshis', 'Suresh Ramakrishnan', '2017-01-07', '12:08:08', '2017-01-07 12:13:00', 'Authorised Person', 'test', 0, 1),
(23, '', '', '', 0, 0, 0, 'ENQ1009', 'SALCOMP MANUFACTURING INDIA PVT LTD', 'Universal Infrastructure Systems', '', 'CUS1037', 'MR', 'X137 Y137', '9000000037', '', '', 'SRIPERUMPUDUR', 'NOKIA TELECOM SEZ,', 'SIPCOT INDUSTRIAL PARK PHASE -III', '', '', 602105, 'Sivaraja', '', 'Pending', 'XYZ@XYZ.COM37', '', 'Sales', '', 'Follow-up', '2017-01-21', '00:00:00', '0000-00-00', '0000-00-00', '', '00:00:00', 'FUARRIVESETXXXXX,', 'test', '0', '0', '0', 'Suresh Ramakrishnan', '2017-01-21', '01:05:03', '2017-03-22 12:06:13', 'Authorised Person', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_group_address`
--

CREATE TABLE IF NOT EXISTS `arka_group_address` (
  `sl_no` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `del_address` varchar(50) NOT NULL,
  `del_address1` varchar(50) NOT NULL,
  `del_area` varchar(50) NOT NULL,
  `del_city` varchar(50) NOT NULL,
  `del_pincode` int(6) NOT NULL,
  `area_code` int(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `extension` int(10) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `arka_group_address`
--

INSERT INTO `arka_group_address` (`sl_no`, `company_name`, `del_address`, `del_address1`, `del_area`, `del_city`, `del_pincode`, `area_code`, `phone_no`, `extension`, `created_by`, `created_date`, `created_time`, `timestamp`, `status`) VALUES
(1, 'Universal Infrastructure Systems', '# 74/51, Sidco Industial Estate', 'Ambattur ', 'Ambattur', 'Chennai', 600098, 44, 26524381, 0, 'suresh', '2016-04-20', '00:00:00', '2016-05-11 18:21:52', 1),
(2, 'Asian Engineering ', 'L-33, Ambattur Industrial Estate', 'Ambattur ', 'Ambattur ', 'Chennai', 600058, 44, 26524381, 0, 'suresh', '2016-04-20', '00:00:00', '2016-05-13 13:25:16', 1),
(3, 'Arka', 'MF 15, SIDCO Industrial Estate', 'Ekattuthangal', 'Guindy', 'Chennai', 600032, 44, 65550070, 235, 'suresh', '2016-05-13', '04:25:56', '2016-05-13 16:25:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_group_mapping`
--

CREATE TABLE IF NOT EXISTS `arka_group_mapping` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(10) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1920 ;

--
-- Dumping data for table `arka_group_mapping`
--

INSERT INTO `arka_group_mapping` (`sl_no`, `group_id`, `group_name`, `role_name`, `status`) VALUES
(1301, 'UG10001', 'Account-Dept', 'List Insurance', 1),
(1300, 'UG10001', 'Account-Dept', 'Add New Insurance', 1),
(1299, 'UG10001', 'Account-Dept', 'List Vendors', 1),
(1298, 'UG10001', 'Account-Dept', 'Add New Vendor', 1),
(217, 'UG10010', 'CUS-Owner-Group', 'Add Work log', 1),
(216, 'UG10010', 'CUS-Owner-Group', 'List Problem tickes', 1),
(215, 'UG10010', 'CUS-Owner-Group', 'Add Problem Tickets', 1),
(214, 'UG10010', 'CUS-Owner-Group', 'Edit Problem Tickets', 1),
(213, 'UG10010', 'CUS-Owner-Group', 'List Devices', 1),
(212, 'UG10010', 'CUS-Owner-Group', 'Add Solution', 1),
(211, 'UG10010', 'CUS-Owner-Group', 'Edit Solution', 1),
(210, 'UG10010', 'CUS-Owner-Group', 'Device Payment Details', 1),
(218, 'UG10010', 'CUS-Owner-Group', 'Device Details', 1),
(1297, 'UG10001', 'Account-Dept', 'Modify Service', 1),
(1296, 'UG10001', 'Account-Dept', 'Add New Customer Remarks', 1),
(1511, 'UG10002', 'Marketing Dept', 'List Customer Remarks', 1),
(1295, 'UG10001', 'Account-Dept', 'List Customer Remarks', 1),
(1294, 'UG10001', 'Account-Dept', 'List Service', 1),
(1916, 'UG10000', 'Service-Desk', 'Service Management', 1),
(1915, 'UG10000', 'Service-Desk', 'List Notes', 1),
(1293, 'UG10001', 'Account-Dept', 'Add New Service', 1),
(1292, 'UG10001', 'Account-Dept', 'Demo Details', 1),
(1291, 'UG10001', 'Account-Dept', 'Add New Demo', 1),
(1290, 'UG10001', 'Account-Dept', 'List Demo', 1),
(299, 'UG10006', 'Network-Support', 'List Customer', 1),
(300, 'UG10006', 'Network-Support', 'List Devices', 1),
(301, 'UG10006', 'Network-Support', 'List Problem Tickets', 1),
(302, 'UG10006', 'Network-Support', 'Solution', 1),
(303, 'UG10006', 'Network-Support', 'Work log', 1),
(304, 'UG10006', 'Network-Support', 'List User', 1),
(305, 'UG10006', 'Network-Support', 'List Employees', 1),
(1289, 'UG10001', 'Account-Dept', 'Service Management', 1),
(1288, 'UG10001', 'Account-Dept', 'Note Management', 1),
(1287, 'UG10001', 'Account-Dept', 'General Management', 1),
(1914, 'UG10000', 'Service-Desk', 'Add New Note', 1),
(1286, 'UG10001', 'Account-Dept', 'Demo Management', 1),
(1285, 'UG10001', 'Account-Dept', 'Customer Management', 1),
(1841, 'UG10015', 'Development', 'Edit Payment Pending', 1),
(1842, 'UG10015', 'Development', 'List Payment Pending', 1),
(1840, 'UG10015', 'Development', 'Customer Management', 1),
(1839, 'UG10015', 'Development', 'Add New Payment Pending', 1),
(1838, 'UG10015', 'Development', 'Demo Management', 1),
(1837, 'UG10015', 'Development', 'Device Management', 1),
(1836, 'UG10015', 'Development', 'General Management', 1),
(1835, 'UG10015', 'Development', 'HR Management', 1),
(511, 'UG10007', 'Printer-Support', 'Resolved', 1),
(510, 'UG10007', 'Printer-Support', 'SLA Hold', 1),
(509, 'UG10007', 'Printer-Support', 'In Progress', 1),
(508, 'UG10007', 'Printer-Support', 'Ticket Open', 1),
(507, 'UG10007', 'Printer-Support', 'Device Details', 1),
(506, 'UG10007', 'Printer-Support', 'List User', 1),
(505, 'UG10007', 'Printer-Support', 'Work log', 1),
(504, 'UG10007', 'Printer-Support', 'Solution', 1),
(503, 'UG10007', 'Printer-Support', 'Edit Problem Tickets', 1),
(502, 'UG10007', 'Printer-Support', 'List Problem Tickets', 1),
(501, 'UG10007', 'Printer-Support', 'List Devices', 1),
(500, 'UG10007', 'Printer-Support', 'Add New Customer', 1),
(499, 'UG10007', 'Printer-Support', 'List Customer', 1),
(498, 'UG10007', 'Printer-Support', 'Device Management', 1),
(1834, 'UG10015', 'Development', 'Problem Management', 1),
(1832, 'UG10015', 'Development', 'User Management', 1),
(1833, 'UG10015', 'Development', 'Service Management', 1),
(1497, 'UG10003', 'Helpdesk', 'Modify Customer', 1),
(1830, 'UG10015', 'Development', 'Add New Customer', 1),
(1831, 'UG10015', 'Development', 'List Customer', 1),
(1483, 'UG10009', 'MD-Group', 'Add New Note', 1),
(1481, 'UG10009', 'MD-Group', 'Add New Payment Pending', 1),
(1482, 'UG10009', 'MD-Group', 'List Notes', 1),
(512, 'UG10007', 'Printer-Support', 'Rejected', 1),
(513, 'UG10007', 'Printer-Support', 'Ticket Close', 1),
(514, 'UG10007', 'Printer-Support', 'Problem Management', 1),
(515, 'UG10007', 'Printer-Support', 'Customer Management', 1),
(516, 'UG10007', 'Printer-Support', 'List Demo', 1),
(1498, 'UG10003', 'Helpdesk', 'General Management', 1),
(1429, 'UG10013', 'Demo Dept', 'Note Management', 1),
(1428, 'UG10013', 'Demo Dept', 'List Notes', 1),
(1427, 'UG10013', 'Demo Dept', 'Add New Note', 1),
(1425, 'UG10013', 'Demo Dept', 'List Demo', 1),
(1426, 'UG10013', 'Demo Dept', 'Add New Demo', 1),
(1424, 'UG10013', 'Demo Dept', 'Demo Management', 1),
(1423, 'UG10012', 'Help-Desk', 'List Notes', 1),
(1422, 'UG10012', 'Help-Desk', 'Add New Note', 1),
(1421, 'UG10012', 'Help-Desk', 'Add New Customer Remarks', 1),
(1420, 'UG10012', 'Help-Desk', 'List Customer Remarks', 1),
(1419, 'UG10012', 'Help-Desk', 'List Service', 1),
(1418, 'UG10012', 'Help-Desk', 'Add New Service', 1),
(1417, 'UG10012', 'Help-Desk', 'Demo Details', 1),
(1416, 'UG10012', 'Help-Desk', 'Add New User', 1),
(1415, 'UG10012', 'Help-Desk', 'List User', 1),
(1414, 'UG10012', 'Help-Desk', 'Add New Demo', 1),
(1413, 'UG10012', 'Help-Desk', 'List Demo', 1),
(1412, 'UG10012', 'Help-Desk', 'Add New Customer', 1),
(1480, 'UG10009', 'MD-Group', 'List Payment Pending', 1),
(1479, 'UG10009', 'MD-Group', 'List Advance', 1),
(1478, 'UG10009', 'MD-Group', 'Add New Advance', 1),
(1477, 'UG10009', 'MD-Group', 'List Rent', 1),
(1476, 'UG10009', 'MD-Group', 'List Phone', 1),
(1475, 'UG10009', 'MD-Group', 'Add New Rent', 1),
(1474, 'UG10009', 'MD-Group', 'Add New Phone', 1),
(1473, 'UG10009', 'MD-Group', 'List Insurance', 1),
(1472, 'UG10009', 'MD-Group', 'Add New Insurance', 1),
(1470, 'UG10009', 'MD-Group', 'List Vendors', 1),
(1471, 'UG10009', 'MD-Group', 'Add New Vendor', 1),
(1469, 'UG10009', 'MD-Group', 'List Customer Remarks', 1),
(1468, 'UG10009', 'MD-Group', 'Add New Customer Remarks', 1),
(1467, 'UG10009', 'MD-Group', 'List Service', 1),
(1466, 'UG10009', 'MD-Group', 'Add New Service', 1),
(1465, 'UG10009', 'MD-Group', 'Add New Demo', 1),
(1463, 'UG10009', 'MD-Group', 'List Demo', 1),
(1464, 'UG10009', 'MD-Group', 'Demo Details', 1),
(1462, 'UG10009', 'MD-Group', 'Add New Customer', 1),
(1461, 'UG10009', 'MD-Group', 'List Customer', 1),
(1456, 'UG10009', 'MD-Group', 'Customer Management', 1),
(1457, 'UG10009', 'MD-Group', 'Note Management', 1),
(1458, 'UG10009', 'MD-Group', 'Demo Management', 1),
(1459, 'UG10009', 'MD-Group', 'General Management', 1),
(1460, 'UG10009', 'MD-Group', 'Service Management', 1),
(1518, 'UG10002', 'Marketing Dept', 'Modify Customer', 1),
(1517, 'UG10002', 'Marketing Dept', 'List Employees', 1),
(1516, 'UG10002', 'Marketing Dept', 'Demo Details', 1),
(1515, 'UG10002', 'Marketing Dept', 'Edit Demo', 1),
(1514, 'UG10002', 'Marketing Dept', 'List Notes', 1),
(1513, 'UG10002', 'Marketing Dept', 'Add New Note', 1),
(1512, 'UG10002', 'Marketing Dept', 'Add New Customer Remarks', 1),
(1908, 'UG10004', 'Admin', 'User Management', 1),
(1909, 'UG10004', 'Admin', 'Modify Stock', 1),
(1910, 'UG10004', 'Admin', 'Modify Price', 1),
(1907, 'UG10004', 'Admin', 'Edit Payment Pending', 1),
(1496, 'UG10003', 'Helpdesk', 'Customer Management', 1),
(1495, 'UG10003', 'Helpdesk', 'Demo Management', 1),
(1494, 'UG10003', 'Helpdesk', 'Note Management', 1),
(1493, 'UG10003', 'Helpdesk', 'Service Management', 1),
(1492, 'UG10003', 'Helpdesk', 'List Customer', 1),
(1491, 'UG10003', 'Helpdesk', 'Add New Customer', 1),
(1490, 'UG10003', 'Helpdesk', 'Demo Details', 1),
(1489, 'UG10003', 'Helpdesk', 'Add New Service', 1),
(1488, 'UG10003', 'Helpdesk', 'List Service', 1),
(1487, 'UG10003', 'Helpdesk', 'List Customer Remarks', 1),
(1486, 'UG10003', 'Helpdesk', 'Add New Customer Remarks', 1),
(1485, 'UG10003', 'Helpdesk', 'Add New Note', 1),
(1484, 'UG10003', 'Helpdesk', 'List Notes', 1),
(1411, 'UG10012', 'Help-Desk', 'List Customer', 1),
(1410, 'UG10012', 'Help-Desk', 'Service Management', 1),
(1409, 'UG10012', 'Help-Desk', 'Note Management', 1),
(1408, 'UG10012', 'Help-Desk', 'Demo Management', 1),
(1407, 'UG10012', 'Help-Desk', 'Customer Management', 1),
(1906, 'UG10004', 'Admin', 'Add New Rent', 1),
(1905, 'UG10004', 'Admin', 'Edit Phone', 1),
(1904, 'UG10004', 'Admin', 'List Advance', 1),
(1903, 'UG10004', 'Admin', 'Add New Advance', 1),
(1902, 'UG10004', 'Admin', 'Edit Rent', 1),
(1901, 'UG10004', 'Admin', 'Add New Phone', 1),
(1900, 'UG10004', 'Admin', 'List Customer Remarks', 1),
(1899, 'UG10004', 'Admin', 'Modify Service', 1),
(1898, 'UG10004', 'Admin', 'List Service', 1),
(1897, 'UG10004', 'Admin', 'Add New Customer Remarks', 1),
(1896, 'UG10004', 'Admin', 'Confirmed', 1),
(1894, 'UG10004', 'Admin', 'Add New Service', 1),
(1895, 'UG10004', 'Admin', 'Resolved', 1),
(1893, 'UG10004', 'Admin', 'Ticket Close', 1),
(1892, 'UG10004', 'Admin', 'List My Tickets', 1),
(1890, 'UG10004', 'Admin', 'Ticket Open', 1),
(1891, 'UG10004', 'Admin', 'SLA Hold', 1),
(1889, 'UG10004', 'Admin', 'In Progress', 1),
(1888, 'UG10004', 'Admin', 'Rejected', 1),
(1887, 'UG10004', 'Admin', 'List Employees', 1),
(1886, 'UG10004', 'Admin', 'Demo Details', 1),
(1885, 'UG10004', 'Admin', 'Edit User', 1),
(1884, 'UG10004', 'Admin', 'Add New User', 1),
(1883, 'UG10004', 'Admin', 'Device Payment Details', 1),
(1882, 'UG10004', 'Admin', 'List User', 1),
(1881, 'UG10004', 'Admin', 'Entitlement', 1),
(1880, 'UG10004', 'Admin', 'Manage Problem Payment', 1),
(1879, 'UG10004', 'Admin', 'Edit Demo', 1),
(1878, 'UG10004', 'Admin', 'Manage Device Payment', 1),
(1877, 'UG10004', 'Admin', 'Add New Demo', 1),
(1876, 'UG10004', 'Admin', 'Work log', 1),
(1875, 'UG10004', 'Admin', 'Solution', 1),
(1874, 'UG10004', 'Admin', 'Edit Problem Tickets', 1),
(1873, 'UG10004', 'Admin', 'Add Problem Tickets', 1),
(1872, 'UG10004', 'Admin', 'List Problem Tickets', 1),
(1871, 'UG10004', 'Admin', 'List Demo', 1),
(1870, 'UG10004', 'Admin', 'Modify Customer', 1),
(1869, 'UG10004', 'Admin', 'Add New Customer', 1),
(1868, 'UG10004', 'Admin', 'List Customer', 1),
(1867, 'UG10004', 'Admin', 'Service Management', 1),
(1866, 'UG10004', 'Admin', 'HR Management', 1),
(1865, 'UG10004', 'Admin', 'Problem Management', 1),
(1864, 'UG10004', 'Admin', 'General Management', 1),
(1863, 'UG10004', 'Admin', 'Demo Management', 1),
(1862, 'UG10004', 'Admin', 'Device Management', 1),
(1861, 'UG10004', 'Admin', 'Customer Management', 1),
(1860, 'UG10004', 'Admin', 'Add New Vendor', 1),
(1859, 'UG10004', 'Admin', 'Edit Vendor', 1),
(1858, 'UG10004', 'Admin', 'List Insurance', 1),
(1857, 'UG10004', 'Admin', 'Add New Insurance', 1),
(1856, 'UG10004', 'Admin', 'Edit Insurance', 1),
(1855, 'UG10004', 'Admin', 'List Vendors', 1),
(1854, 'UG10004', 'Admin', 'Edit Advance', 1),
(1853, 'UG10004', 'Admin', 'List Rent', 1),
(1852, 'UG10004', 'Admin', 'List Phone', 1),
(1851, 'UG10004', 'Admin', 'Add New Payment Pending', 1),
(1850, 'UG10004', 'Admin', 'List Notes', 1),
(1826, 'UG10015', 'Development', 'Add Problem Tickets', 1),
(1827, 'UG10015', 'Development', 'List Demo', 1),
(1828, 'UG10015', 'Development', 'List Problem Tickets', 1),
(1829, 'UG10015', 'Development', 'Modify Customer', 1),
(1825, 'UG10015', 'Development', 'Add New Demo', 1),
(1824, 'UG10015', 'Development', 'Edit Problem Tickets', 1),
(1823, 'UG10015', 'Development', 'Solution', 1),
(1822, 'UG10015', 'Development', 'Work log', 1),
(1821, 'UG10015', 'Development', 'Edit Demo', 1),
(1820, 'UG10015', 'Development', 'Manage Device Payment', 1),
(1819, 'UG10015', 'Development', 'Manage Problem Payment', 1),
(1817, 'UG10015', 'Development', 'Device Payment Details', 1),
(1818, 'UG10015', 'Development', 'Entitlement', 1),
(1816, 'UG10015', 'Development', 'List User', 1),
(1815, 'UG10015', 'Development', 'Demo Details', 1),
(1814, 'UG10015', 'Development', 'Add New User', 1),
(1813, 'UG10015', 'Development', 'Edit User', 1),
(1811, 'UG10015', 'Development', 'SLA Hold', 1),
(1812, 'UG10015', 'Development', 'List Employees', 1),
(1810, 'UG10015', 'Development', 'Ticket Open', 1),
(1809, 'UG10015', 'Development', 'In Progress', 1),
(1807, 'UG10015', 'Development', 'Ticket Close', 1),
(1808, 'UG10015', 'Development', 'Resolved', 1),
(1806, 'UG10015', 'Development', 'Rejected', 1),
(1804, 'UG10015', 'Development', 'List My Tickets', 1),
(1805, 'UG10015', 'Development', 'Confirmed', 1),
(1803, 'UG10015', 'Development', 'Add New Service', 1),
(1802, 'UG10015', 'Development', 'Modify Service', 1),
(1801, 'UG10015', 'Development', 'List Customer Remarks', 1),
(1798, 'UG10015', 'Development', 'Edit Vendor', 1),
(1800, 'UG10015', 'Development', 'List Service', 1),
(1799, 'UG10015', 'Development', 'Add New Customer Remarks', 1),
(1797, 'UG10015', 'Development', 'Add New Vendor', 1),
(1796, 'UG10015', 'Development', 'List Vendors', 1),
(1795, 'UG10015', 'Development', 'Edit Insurance', 1),
(1794, 'UG10015', 'Development', 'List Insurance', 1),
(1793, 'UG10015', 'Development', 'Add New Insurance', 1),
(1792, 'UG10015', 'Development', 'Add New Phone', 1),
(1791, 'UG10015', 'Development', 'List Phone', 1),
(1790, 'UG10015', 'Development', 'Add New Rent', 1),
(1789, 'UG10015', 'Development', 'Edit Phone', 1),
(1788, 'UG10015', 'Development', 'Edit Rent', 1),
(1787, 'UG10015', 'Development', 'List Rent', 1),
(1786, 'UG10015', 'Development', 'Add New Advance', 1),
(1785, 'UG10015', 'Development', 'Edit Advance', 1),
(1913, 'UG10000', 'Service-Desk', 'Note Management', 1),
(1302, 'UG10001', 'Account-Dept', 'Add New Phone', 1),
(1303, 'UG10001', 'Account-Dept', 'List Phone', 1),
(1304, 'UG10001', 'Account-Dept', 'Add New Rent', 1),
(1305, 'UG10001', 'Account-Dept', 'List Rent', 1),
(1306, 'UG10001', 'Account-Dept', 'Add New Advance', 1),
(1307, 'UG10001', 'Account-Dept', 'List Advance', 1),
(1308, 'UG10001', 'Account-Dept', 'Add New Payment Pending', 1),
(1309, 'UG10001', 'Account-Dept', 'List Payment Pending', 1),
(1310, 'UG10001', 'Account-Dept', 'Add New Note', 1),
(1311, 'UG10001', 'Account-Dept', 'List Notes', 1),
(1312, 'UG10001', 'Account-Dept', 'Add New Customer', 1),
(1313, 'UG10001', 'Account-Dept', 'List Customer', 1),
(1510, 'UG10002', 'Marketing Dept', 'List Service', 1),
(1509, 'UG10002', 'Marketing Dept', 'Add New Service', 1),
(1508, 'UG10002', 'Marketing Dept', 'Add New User', 1),
(1507, 'UG10002', 'Marketing Dept', 'List User', 1),
(1506, 'UG10002', 'Marketing Dept', 'Add New Demo', 1),
(1505, 'UG10002', 'Marketing Dept', 'List Demo', 1),
(1504, 'UG10002', 'Marketing Dept', 'Add New Customer', 1),
(1503, 'UG10002', 'Marketing Dept', 'Service Management', 1),
(1502, 'UG10002', 'Marketing Dept', 'Note Management', 1),
(1501, 'UG10002', 'Marketing Dept', 'Demo Management', 1),
(1500, 'UG10002', 'Marketing Dept', 'Customer Management', 1),
(1499, 'UG10002', 'Marketing Dept', 'List Customer', 1),
(1783, 'UG10015', 'Development', 'Note Management', 1),
(1784, 'UG10015', 'Development', 'List Advance', 1),
(1782, 'UG10015', 'Development', 'Add New Note', 1),
(1780, 'UG10015', 'Development', 'List Notes', 1),
(1781, 'UG10015', 'Development', 'Stock Management', 1),
(1849, 'UG10004', 'Admin', 'Add New Note', 1),
(1848, 'UG10004', 'Admin', 'Note Management', 1),
(1847, 'UG10004', 'Admin', 'Stock Management', 1),
(1846, 'UG10004', 'Admin', 'List Payment Pending', 1),
(1779, 'UG10015', 'Development', 'Modify Stock', 1),
(1843, 'UG10015', 'Development', 'Modify Price', 1),
(1844, 'UG10015', 'Development', 'Remarks Management', 1),
(1845, 'UG10015', 'Development', 'Modify Remarks', 1),
(1911, 'UG10004', 'Admin', 'Remarks Management', 1),
(1912, 'UG10004', 'Admin', 'Modify Remarks', 1),
(1917, 'UG10000', 'Service-Desk', 'Add New Service', 1),
(1918, 'UG10000', 'Service-Desk', 'List Service', 1),
(1919, 'UG10000', 'Service-Desk', 'Device Management', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_group_master`
--

CREATE TABLE IF NOT EXISTS `arka_group_master` (
  `group_id` varchar(10) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `group_description` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` varchar(15) NOT NULL,
  `ident` tinyint(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ident`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `arka_group_master`
--

INSERT INTO `arka_group_master` (`group_id`, `group_name`, `group_description`, `status`, `created_date`, `created_time`, `ident`) VALUES
('UG10000', 'Service-Desk', 'Service Team', 1, '2015-08-05', '11:27:15 AM', 1),
('UG10001', 'Account-Dept', 'Account Department', 1, '2015-01-11', '11:15:42 PM', 2),
('UG10002', 'Marketing Dept', 'Marketing Team', 1, '2015-03-03', '09:50:33 PM', 3),
('UG10003', 'Helpdesk', 'Helpdesk Team', 1, '2015-02-16', '05:24:58 AM', 6),
('UG10004', 'Admin', 'Admin Team', 1, '2015-03-23', '02:29:30 AM', 7),
('UG10015', 'Development', 'Development Team', 1, '2015-03-23', '02:29:20 AM', 5),
('UG10013', 'Demo Dept', 'Demo Team', 1, '2015-01-11', '11:40:44 PM', 14),
('UG10009', 'MD-Group', 'MD Group team', 1, '2015-01-12', '05:30:13 AM', 10),
('UG10010', 'CUS-Owner-Group', 'CUS Owner Group team', 1, '2013-08-12', '07:25:53 AM', 11),
('UG10011', 'CUS-USR-Group', 'CUS USR Group team', 1, '2013-06-16', '06:32:51 PM', 12),
('UG10012', 'Help-Desk', 'Help Desk Team', 1, '2015-01-11', '11:38:44 PM', 13);

-- --------------------------------------------------------

--
-- Table structure for table `arka_inward_details`
--

CREATE TABLE IF NOT EXISTS `arka_inward_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(25) NOT NULL,
  `inward_entry_id` varchar(15) NOT NULL,
  `material_category` varchar(20) NOT NULL,
  `material_name` varchar(25) NOT NULL,
  `material_code` varchar(15) NOT NULL,
  `item_category_code` varchar(50) NOT NULL,
  `material_specification` varchar(15) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `supplier_name` varchar(25) NOT NULL,
  `supplier_code` varchar(25) NOT NULL,
  `price` double(9,2) NOT NULL,
  `quantity` double(11,2) NOT NULL,
  `frieght_charges` double(11,2) NOT NULL,
  `location` varchar(50) NOT NULL,
  `total` double(11,2) NOT NULL,
  `tot` double(11,2) NOT NULL,
  `grant_total` double(11,2) NOT NULL,
  `gst` double(11,2) NOT NULL,
  `gst_cal` double(11,2) NOT NULL,
  `total_amount_fc` double(11,2) NOT NULL,
  `warranty_period` varchar(15) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `record_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `arka_inward_details`
--

INSERT INTO `arka_inward_details` (`sl_no`, `region`, `inward_entry_id`, `material_category`, `material_name`, `material_code`, `item_category_code`, `material_specification`, `item_description`, `supplier_name`, `supplier_code`, `price`, `quantity`, `frieght_charges`, `location`, `total`, `tot`, `grant_total`, `gst`, `gst_cal`, `total_amount_fc`, `warranty_period`, `created_by`, `record_status`) VALUES
(1, '', 'IWD1001', 'Project', 'SPYDER PROJECT', 'SPY1001', 'PRO1001', '', 'SPYDER PROJECT', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 215.00, 215.00, 0.00, 'PAT', 48536.25, 46225.00, 0.00, 5.00, 2311.25, 48536.25, '', 'sivaraja', 0),
(2, '', 'IWD1002', 'OXBO MID BACK', 'OXBO MID BACK', 'IC1002', 'ICC1002', '', 'OXBO MID BACK', 'ARWA ENTERPRISES', 'VR1002', 4798.00, 1.00, 0.00, 'PAT', 5037.90, 4798.00, 0.00, 5.00, 239.90, 5037.90, 'NA', 'sivaraja', 0),
(3, '', 'IWD1003', 'BRAVO MUSH ROOM', 'BRAVO MUSH ROOM', 'IC1003', 'ICC1003', '', 'BRAVO MUSH ROOM', 'BOKARIA REINFORCING COMPA', 'VR1003', 6314.00, 1.00, 0.00, 'WAV', 6629.70, 6314.00, 0.00, 5.00, 315.70, 6629.70, 'NA', 'sivaraja', 0),
(4, '', 'IWD1004', 'HALO VISITOR CHAIR', 'HALO VISITOR CHAIR', 'IC1004', 'ICC1004', '', 'HALO VISITOR CHAIR', 'FE ON CRAFT ENGINEERING', 'VR1004', 27276.00, 1.00, 0.00, 'TAD', 28639.80, 27276.00, 0.00, 5.00, 1363.80, 28639.80, 'NA', 'sivaraja', 0),
(5, '', 'IWD1005', 'PREMIUM CHAIR BLUE', 'PREMIUM CHAIR BLUE', 'IC1005', 'ICC1005', '', 'PREMIUM CHAIR BLUE', 'GODREJ & BOYCE MFG CO LTD', 'VR1005', 17128.00, 1.00, 0.00, 'TAD', 17128.00, 17128.00, 0.00, 5.00, 0.00, 17128.00, 'NA', 'sivaraja', 0),
(7, '', 'IWD1006', 'Glass Door from GCPL', 'GLASS DOOR FROM GCPL', 'IC1034', 'ICC1034', '', 'Glass Door from GCPL', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 5.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(8, '', 'IWD1007', 'PSB from Brakes 455x', 'PSB FROM BRAKES 455X100', 'IC1035', 'ICC1035', '', 'PSB from Brakes 455x100', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 36.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(9, '', 'IWD1008', 'Project', 'SPYDER PROJECT', 'SPY1001', 'PRO1001', '', 'SPYDER PROJECT', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 3737.00, 95.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(10, '', 'IWD1009', 'OXBO MID BACK', 'OXBO MID BACK', 'IC1002', 'ICC1002', '', 'OXBO MID BACK', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 4798.00, 25.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(11, '', 'IWD1010', 'Pallet Stopper 6000m', 'PALLET STOPPER 6000MM', 'IC1038', 'ICC1038', '', 'Pallet Stopper 6000mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 17.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(12, '', 'IWD1011', 'False Flooring', 'FALSE FLOORING', 'IC1039', 'ICC1039', '', 'False Flooring', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 434.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(13, '', 'IWD1012', 'Visitor Chair from G', 'VISITOR CHAIR FROM GCPL', 'IC1040', 'ICC1040', '', 'Visitor Chair from GCPL', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 5.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(14, '', 'IWD1013', 'Angle 40x40x7L', 'ANGLE 40X40X7L', 'IC1041', 'ICC1041', '', 'Angle 40x40x7L', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 24.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(15, '', 'IWD1014', 'MF Panel 905x371', 'MF PANEL 905X371', 'IC1042', 'ICC1042', '', 'MF Panel 905x371', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 30.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(16, '', 'IWD1015', 'Base Plate 180x110', 'BASE PLATE 180X110', 'IC1043', 'ICC1043', '', 'Base Plate 180x110', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 12.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(17, '', 'IWD1016', 'Beam 1500x100', 'BEAM 1500X100', 'IC1044', 'ICC1044', '', 'Beam 1500x100', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 5.00, 0.00, 'WAV', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(18, '', 'IWD1017', 'Botless Panel 1300 x', 'BOTLESS PANEL 1300 X 400', 'IC1045', 'ICC1045', '', 'Botless Panel 1300 x 400', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 5.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(19, '', 'IWD1018', 'End Plain Cladding', 'END PLAIN CLADDING', 'IC1046', 'ICC1046', '', 'End Plain Cladding', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 6.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(20, '', 'IWD1019', 'Row Guard 800 x 400', 'ROW GUARD 800 X 400', 'IC1047', 'ICC1047', '', 'Row Guard 800 x 400', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(21, '', 'IWD1020', 'Column Guard', 'COLUMN GUARD', 'IC1048', 'ICC1048', '', 'Column Guard', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(22, '', 'IWD1021', 'Fami Storage', 'FAMI STORAGE', 'IC1049', 'ICC1049', '', 'Fami Storage', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(23, '', 'IWD1022', 'Granite', 'GRANITE', 'IC1050', 'ICC1050', '', 'Granite', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(24, '', 'IWD1023', '6 Door PLU Main', '6 DOOR PLU MAIN', 'IC1051', 'ICC1051', '', '6 Door PLU Main', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(25, '', 'IWD1024', '6 Door Addon', '6 DOOR ADDON', 'IC1052', 'ICC1052', '', '6 Door Addon', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(26, '', 'IWD1025', 'Spyder Project Chair', 'SPYDER PROJECT CHAIR', 'IC1053', 'ICC1053', '', 'Spyder Project Chair', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 5.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(27, '', 'IWD1026', 'STOREWELL', 'STOREWELL', 'IC1019', 'ICC1019', '', 'STOREWELL', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 17488.00, 2.00, 0.00, 'TAD', 34976.00, 34976.00, 0.00, 0.00, 0.00, 34976.00, '', 'sivaraja', 0),
(28, '', 'IWD1027', 'Long Span Upright 25', 'LONG SPAN UPRIGHT 2500', 'IC1056', 'ICC1056', '', 'Long Span Upright 2500', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 22.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(29, '', 'IWD1028', 'Long Span Beam 1600', 'LONG SPAN BEAM 1600', 'IC1057', 'ICC1057', '', 'Long Span Beam 1600', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 30.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(30, '', 'IWD1029', 'Top Panel 938x43x4', 'TOP PANEL 938X43X4', 'IC1058', 'ICC1058', '', 'Top Panel 938x43x4', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(31, '', 'IWD1030', 'Tie bracket 562mm', 'TIE BRACKET 562MM', 'IC1059', 'ICC1059', '', 'Tie bracket 562mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 15.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(32, '', 'IWD1031', 'Bracing 760mm', 'BRACING 760MM', 'IC1060', 'ICC1060', '', 'Bracing 760mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 12.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(33, '', 'IWD1032', 'Bracing 524mm', 'BRACING 524MM', 'IC1061', 'ICC1061', '', 'Bracing 524mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 12.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(34, '', 'IWD1033', 'Long Span Panel 600 ', 'LONG SPAN PANEL 600 X 200', 'IC1062', 'ICC1062', '', 'Long Span Panel 600 x 200', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 55.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(35, '', 'IWD1034', 'Long Span Panel 900 ', 'LONG SPAN PANEL 900 X 200', 'IC1063', 'ICC1063', '', 'Long Span Panel 900 x 200', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 6.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(36, '', 'IWD1035', 'Bracing 1100mm', 'BRACING 1100MM', 'IC1064', 'ICC1064', '', 'Bracing 1100mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 13.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(37, '', 'IWD1036', 'Base Plate 90mm', 'BASE PLATE 90MM', 'IC1065', 'ICC1065', '', 'Base Plate 90mm', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 20.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(38, '', 'IWD1037', 'Long Span Base Plate', 'LONG SPAN BASE PLATE', 'IC1066', 'ICC1066', '', 'Long Span Base Plate', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(39, '', 'IWD1038', 'Tester', 'TESTER', 'IC1045', 'ICC1067', '', 'Tester', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(40, '', 'IWD1039', 'Drilling Machine', 'DRILLING MACHINE', 'IC1046', 'ICC1068', '', 'Drilling Machine', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(41, '', 'IWD1040', 'Granite Cutting Mach', 'GRANITE CUTTING MACHINE', 'IC1047', 'ICC1069', '', 'Granite Cutting Machine', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(42, '', 'IWD1041', 'Spray Gun', 'SPRAY GUN', 'IC1048', 'ICC1070', '', 'Spray Gun', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(43, '', 'IWD1042', 'Saw', 'SAW', 'IC1049', 'ICC1071', '', 'Saw', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(44, '', 'IWD1043', 'Screw Driver', 'SCREW DRIVER', 'IC1050', 'ICC1072', '', 'Screw Driver', '', '', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(45, '', 'IWD1044', 'Cutting Player', 'CUTTING PLAYER', 'IC1051', 'ICC1073', '', 'Cutting Player', '', '', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(46, '', 'IWD1045', 'Adjustable Spanner', 'ADJUSTABLE SPANNER', 'IC1052', 'ICC1074', '', 'Adjustable Spanner', '', '', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(47, '', 'IWD1046', 'Hammer', 'HAMMER', 'IC1053', 'ICC1075', '', 'Hammer', '', '', 0.00, 2.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(48, '', 'IWD1047', 'Reveet Machine', 'REVEET MACHINE', 'IC1054', 'ICC1076', '', 'Reveet Machine', '', '', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(49, '', 'IWD1048', 'Drill Bit', 'DRILL BIT', 'IC1055', 'ICC1077', '', 'Drill Bit', '', '', 0.00, 4.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(50, '', 'IWD1049', 'Ring Type Spanner', 'RING TYPE SPANNER', 'IC1056', 'ICC1078', '', 'Ring Type Spanner', '', '', 0.00, 5.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(51, '', 'IWD1050', 'Spanner', 'SPANNER', 'IC1057', 'ICC1079', '', 'Spanner', '', '', 0.00, 4.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(52, '', 'IWD1051', 'Skill Drilling Machi', 'SKILL DRILLING MACHINE', 'IC1058', 'ICC1080', '', 'Skill Drilling Machine', '', '', 0.00, 1.00, 0.00, 'TAD', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'sivaraja', 0),
(53, '', 'IWD1052', 'TDU', 'TDU', 'IC1013', 'ICC1013', '', 'TDU', '', '', 15671.00, 1.00, 0.00, 'TAD', 15671.00, 15671.00, 0.00, 0.00, 0.00, 15671.00, '', 'sivaraja', 0),
(54, '', 'IWD1053', 'Chairs', 'TASK CHAIR -  BQ  W/O ARM', 'FU4103XXV01SXXX', 'CAT102', '', 'TASK CHAIR -  BQ  W/o Arms', '', '', 3734.00, 7.00, 0.00, 'PAT', 26138.00, 26138.00, 0.00, 0.00, 0.00, 26138.00, '', 'rajeswari', 1),
(57, '', 'IWD1055', 'STORAGE', 'VSDU', '56101530SD00089', '56101530SD00089', '', 'STORAGE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 17949.00, 5.00, 0.00, 'PAT', 89745.00, 89745.00, 0.00, 0.00, 0.00, 89745.00, '', 'rajeswari', 1),
(58, '', 'IWD1056', 'STORE WELL', 'GLASS DOOR STOREWELL', '30161806SD00015', '30161806SD00015', '', 'STORAGE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 21486.00, 2.00, 0.00, 'PAT', 42972.00, 42972.00, 0.00, 0.00, 0.00, 42972.00, '', 'rajeswari', 1),
(63, '', 'IWD1058', 'STOREWELL', 'STOREWELL', 'IC1019', 'ICC1019', '', 'STOREWELL', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 17488.00, 2.00, 0.00, 'PAT', 34976.00, 34976.00, 0.00, 0.00, 0.00, 34976.00, '', 'rajeswari', 1),
(62, '', 'IWD1057', 'RACKING', 'SPR RACK', '01', '01', '', 'RACKING', '', '', 754207.84, 270.00, 0.00, 'PAT', 203636116.80, 203636116.80, 0.00, 0.00, 0.00, 203636116.80, '', 'rajeswari', 1),
(64, '', 'IWD1059', 'TABLE', 'GLOW MODI COFFEE TABLE SI', '56121403SD00028', '56121403', '', 'COFFEE TABLE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 4815.66, 1.00, 0.00, 'PAT', 4815.66, 4815.66, 0.00, 28.00, 0.00, 4815.66, '', 'rajeswari', 1),
(65, '', 'IWD1060', 'TABLE', 'ACURA COFFEE TABLE WENGUE', '56121403SD00005', '56121403', '', 'COFFEE TABLE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 6402.17, 1.00, 0.00, 'PAT', 6402.17, 6402.17, 0.00, 28.00, 0.00, 6402.17, '', 'rajeswari', 1),
(66, '', 'IWD1060', 'OPTZ RAIL', 'OPTIMIZER RAIL', '24102098SD00544', '24102098', '', 'RAIL', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 10372.08, 1.00, 0.00, 'PAT', 10372.08, 10372.08, 0.00, 28.00, 0.00, 10372.08, '', 'rajeswari', 1),
(67, '', 'IWD1061', 'Project', 'SPYDER PROJECT', 'SPY1001', 'PRO1001', '', 'SPYDER PROJECT', '', '', 3737.00, 7.00, 0.00, 'PAT', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'rajeswari', 1),
(68, '', 'IWD1062', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', '', 'TABLE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 10595.00, 12.00, 0.00, 'PAT', 127140.00, 127140.00, 0.00, 0.00, 0.00, 127140.00, '', 'rajeswari', 1),
(71, '', 'IWD1062', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', '', 'TABLE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 10595.00, 5.00, 0.00, 'PAT', 52975.00, 52975.00, 0.00, 0.00, 0.00, 52975.00, '', 'rajeswari', 1),
(73, '', 'IWD1062', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', '', 'TABLE', 'GODREJ & BOYCE MFG CO LTD', 'VR1017', 10595.00, 5.00, 0.00, 'PAT', 52975.00, 52975.00, 0.00, 0.00, 0.00, 52975.00, '', 'rajeswari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_inward_master`
--

CREATE TABLE IF NOT EXISTS `arka_inward_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `inward_entry_id` varchar(15) NOT NULL,
  `date_of_entry` date NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_code` varchar(25) NOT NULL,
  `material_name` varchar(250) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `tax_percentage` varchar(50) NOT NULL,
  `tax` double(9,2) NOT NULL,
  `frieght_charges` double(11,2) NOT NULL,
  `location` varchar(50) NOT NULL,
  `total` double(11,2) NOT NULL,
  `grant_total` double(11,2) NOT NULL,
  `region` varchar(50) NOT NULL,
  `created_by` varchar(250) NOT NULL,
  `record_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `arka_inward_master`
--

INSERT INTO `arka_inward_master` (`sl_no`, `inward_entry_id`, `date_of_entry`, `invoice_no`, `supplier_name`, `supplier_code`, `material_name`, `invoice_date`, `invoice_amount`, `tax_percentage`, `tax`, `frieght_charges`, `location`, `total`, `grant_total`, `region`, `created_by`, `record_status`) VALUES
(1, 'IWD1001', '2017-10-03', 'INV1001', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'SPYDER PROJECT', '2017-10-03', 46225.00, '5', 2311.25, 0.00, 'PAT', 48536.25, 0.00, '', 'sivaraja', 0),
(2, 'IWD1002', '2017-10-03', 'INV1002', 'ARWA ENTERPRISES', 'VR1002', 'OXBO MID BACK', '2017-10-03', 4798.00, '5', 239.90, 0.00, 'PAT', 5037.90, 0.00, '', 'sivaraja', 0),
(3, 'IWD1003', '2017-10-03', 'IN1003', 'BOKARIA REINFORCING COMPANY PVT LTD', 'VR1003', 'BRAVO MUSH ROOM', '2017-10-03', 6314.00, '5', 315.70, 0.00, 'WAV', 6629.70, 0.00, '', 'sivaraja', 0),
(4, 'IWD1004', '2017-10-03', 'INV1004', 'FE ON CRAFT ENGINEERING', 'VR1004', 'HALO VISITOR CHAIR', '2017-10-03', 27276.00, '5', 1363.80, 0.00, 'TAD', 28639.80, 0.00, '', 'sivaraja', 0),
(5, 'IWD1005', '2017-10-03', 'INV1005', 'GODREJ & BOYCE MFG CO LTD SSG - P', 'VR1005', 'PREMIUM CHAIR BLUE', '2017-10-03', 17128.00, '5', 0.00, 0.00, 'TAD', 17128.00, 0.00, '', 'sivaraja', 0),
(7, 'IWD1006', '2017-10-24', 'INV1032', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'GLASS DOOR FROM GCPL', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(8, 'IWD1007', '2017-10-24', 'INV1033', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'PSB FROM BRAKES 455X100', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(9, 'IWD1008', '2017-10-24', 'INV1034', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'SPYDER PROJECT', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(10, 'IWD1009', '2017-10-24', 'INV1035', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'OXBO MID BACK', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(11, 'IWD1010', '2017-10-24', 'INV1036', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'PALLET STOPPER 6000MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(12, 'IWD1011', '2017-10-24', 'INV1037', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'FALSE FLOORING', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(13, 'IWD1012', '2017-10-24', 'INV1038', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'VISITOR CHAIR FROM GCPL', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(14, 'IWD1013', '2017-10-24', 'INV1039', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'ANGLE 40X40X7', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(15, 'IWD1014', '2017-10-24', 'INV1040', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'MF PANEL 905X371', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(16, 'IWD1015', '2017-10-24', 'INV1041', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BASE PLATE 180X110', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(17, 'IWD1016', '2017-10-24', 'INV1042', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BEAM 1500X100', '2017-10-24', 0.00, '', 0.00, 0.00, 'WAV', 0.00, 0.00, '', 'sivaraja', 0),
(18, 'IWD1017', '2017-10-24', 'INV1043', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BOTLESS PANEL 1300 X 400', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(19, 'IWD1018', '2017-10-24', 'INV1044', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'END PLAIN CLADDING', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(20, 'IWD1019', '2017-10-24', 'INV1045', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'ROW GUARD 800 X 400', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(21, 'IWD1020', '2017-10-24', 'INV1046', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'COLUMN GUARD', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(22, 'IWD1021', '2017-10-24', 'INV1047', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'FAMI STORAGE', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(23, 'IWD1022', '2017-10-24', 'INV1048', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'GRANITE', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(24, 'IWD1023', '2017-10-24', 'INV1049', 'A.B.TRADERS & SUPPLIERS', 'VR1001', '6 DOOR PLU MAIN', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(25, 'IWD1024', '2017-10-24', 'INV1050', 'A.B.TRADERS & SUPPLIERS', 'VR1001', '6 DOOR ADDON', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(26, 'IWD1025', '2017-10-24', 'INV1051', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'SPYDER PROJECT CHAIR', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(27, 'IWD1026', '2017-10-24', 'INV1052', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'STOREWELL', '2017-10-24', 34976.00, '', 0.00, 0.00, 'TAD', 34976.00, 0.00, '', 'sivaraja', 0),
(28, 'IWD1027', '2017-10-24', 'INV1053', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'LONG SPAN UPRIGHT 2500', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(29, 'IWD1028', '2017-10-24', 'INV1054', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'LONG SPAN BEAM 1600', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(30, 'IWD1029', '2017-10-24', 'INV1055', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'TOP PANEL 938X43X4', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(31, 'IWD1030', '2017-10-24', 'INV1056', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'TIE BRACKET 562MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(32, 'IWD1031', '2017-10-24', 'INV1057', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BRACING 760MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(33, 'IWD1032', '2017-10-24', 'INV1058', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BRACING 524MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(34, 'IWD1033', '2017-10-24', 'INV1059', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'LONG SPAN PANEL 600 X 200', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(35, 'IWD1034', '2017-10-24', 'INV1060', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'LONG SPAN PANEL 900 X 200', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(36, 'IWD1035', '2017-10-24', 'INV1061', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BRACING 1100MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(37, 'IWD1036', '2017-10-24', 'INV1062', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'BASE PLATE 90MM', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(38, 'IWD1037', '2017-10-24', 'INV1063', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'LONG SPAN BASE PLATE', '2017-10-24', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(39, 'IWD1038', '2017-10-25', 'INV1064', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'TESTER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(40, 'IWD1039', '2017-10-25', 'INV1065', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'DRILLING MACHINE', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(41, 'IWD1040', '2017-10-25', 'INV1066', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'GRANITE CUTTING MACHINE', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(42, 'IWD1041', '2017-10-25', 'INV1067', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'SPRAY GUN', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(43, 'IWD1042', '2017-10-25', 'INV1068', 'A.B.TRADERS & SUPPLIERS', 'VR1001', 'SAW', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(44, 'IWD1043', '2017-10-25', 'INV1069', '', '', 'SCREW DRIVER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(45, 'IWD1044', '2017-10-25', 'INV1070', '', '', 'CUTTING PLAYER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(46, 'IWD1045', '2017-10-25', 'INV1071', '', '', 'ADJUSTABLE SPANNER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(47, 'IWD1046', '2017-10-25', 'INV1072', '', '', 'HAMMER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(48, 'IWD1047', '2017-10-25', 'INV1073', '', '', 'REVEET MACHINE', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(49, 'IWD1048', '2017-10-25', 'INV1074', '', '', 'DRILL BIT', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(50, 'IWD1049', '2017-10-25', 'INV1075', '', '', 'RING TYPE SPANNER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(51, 'IWD1050', '2017-10-25', 'INV1076', '', '', 'SPANNER', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(52, 'IWD1051', '2017-10-25', 'INV1077', '', '', 'SKILL DRILLING MACHINE', '2017-10-25', 0.00, '', 0.00, 0.00, 'TAD', 0.00, 0.00, '', 'sivaraja', 0),
(53, 'IWD1052', '2017-10-27', 'INV1078', '', '', 'TDU', '2017-10-27', 15671.00, '', 0.00, 0.00, 'TAD', 15671.00, 0.00, '', 'sivaraja', 0),
(54, 'IWD1053', '2017-11-03', 'WOA003351/10/0', '', '', 'TASK CHAIR -  BQ  W/O ARM', '2017-10-26', 26138.00, '', 0.00, 0.00, 'PAT', 26138.00, 0.00, '', 'rajeswari', 1),
(55, 'IWD1054', '2017-11-03', 'W7I/11000779', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'FOLDABLE TABLE', '2017-10-31', 105950.00, '', 0.00, 0.00, 'PAT', 105950.00, 105950.00, '', 'rajeswari', 0),
(56, 'IWD1055', '2017-11-03', 'WOA003733/10/0', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'VSDU', '2017-10-26', 89745.00, '', 0.00, 0.00, 'PAT', 89745.00, 0.00, '', 'rajeswari', 1),
(57, 'IWD1056', '2017-11-03', 'WOA003038/30/0', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'GLASS DOOR STOREWELL', '2017-10-21', 42972.00, '', 0.00, 0.00, 'PAT', 42972.00, 0.00, '', 'rajeswari', 1),
(61, 'IWD1058', '2017-11-09', '7AI/12010553', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'STOREWELL', '2017-11-08', 34976.00, '', 0.00, 0.00, 'PAT', 34976.00, 0.00, '', 'rajeswari', 1),
(60, 'IWD1057', '2017-11-07', 'G1I/11001621', '', '', 'SPR RACK', '2017-10-20', 203636116.80, '', 0.00, 0.00, 'PAT', 203636116.80, 0.00, '', 'rajeswari', 1),
(62, 'IWD1059', '2017-11-11', '7AI/12010552', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'GLOW MODI COFFEE TABLE SILVER', '2017-11-08', 4815.66, '28%', 0.00, 0.00, 'PAT', 4815.66, 0.00, '', 'rajeswari', 1),
(63, 'IWD1060', '2017-11-11', '7AI/12010552', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'VR1017', 'OPTIMIZER RAIL', '2017-11-08', 16774.25, '28%', 0.00, 0.00, 'PAT', 16774.25, 0.00, '', 'rajeswari', 1),
(64, 'IWD1061', '2017-11-11', '11IN0333', '', '', 'SPYDER PROJECT', '2017-11-10', 0.00, '', 0.00, 0.00, 'PAT', 0.00, 0.00, '', 'rajeswari', 1),
(65, 'IWD1062', '2017-10-31', 'WOA002095/10/3', '', '', 'FOLDABLE TABLE', '2017-10-31', 370825.00, '', 0.00, 0.00, 'PAT', 370825.00, 0.00, '', 'rajeswari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_inward_tax_details`
--

CREATE TABLE IF NOT EXISTS `arka_inward_tax_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `inward_entry_id` varchar(20) NOT NULL,
  `tax_name` varchar(25) NOT NULL,
  `tax_percentage` decimal(9,2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_inward_tax_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_item_name`
--

CREATE TABLE IF NOT EXISTS `arka_item_name` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(150) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_item_name`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_item_type`
--

CREATE TABLE IF NOT EXISTS `arka_item_type` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_type` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_item_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_material_master`
--

CREATE TABLE IF NOT EXISTS `arka_material_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `material_code` varchar(25) NOT NULL,
  `material_name` varchar(50) NOT NULL,
  `material_make` varchar(50) NOT NULL,
  `material_category` varchar(50) NOT NULL,
  `material_price` double(11,2) NOT NULL,
  `material_type` varchar(50) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arka_material_master`
--

INSERT INTO `arka_material_master` (`sl_no`, `material_code`, `material_name`, `material_make`, `material_category`, `material_price`, `material_type`, `specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(1, '12345', 'test', 'Test', '23ek', 123.00, 'Chair', 'gug', 'suresh', '2016-07-08', '05:26:37', '2016-07-08 17:27:10', 'test', 1),
(2, '123', 'bench', 'sertfd', '435322', 13000.00, 'fddsf', 'sdfer', 'Suresh Ramakrisnhan', '2016-07-30', '12:32:44', '2016-07-30 12:33:05', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arka_material_reg_master`
--

CREATE TABLE IF NOT EXISTS `arka_material_reg_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `m_code` varchar(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `m_cat` varchar(50) NOT NULL,
  `materialImage` longtext NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `price` double(9,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `doe` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `arka_material_reg_master`
--

INSERT INTO `arka_material_reg_master` (`sl_no`, `m_code`, `m_name`, `m_type`, `m_cat`, `materialImage`, `Unit`, `price`, `description`, `doe`, `status`) VALUES
(1, 'RE101', 'Resistor 1206 - 4.7K', 'Electronics', 'Spares', '', '62', 1.00, '', '0000-00-00', 1),
(2, 'RE102', 'Resistor 1206 - 2K', 'Electronics', 'Spares', '', '104', 0.00, '', '0000-00-00', 1),
(3, 'RE103', 'Resistor 1206 - 10K 1%', 'Electronics', 'Spares', '', '172', 0.00, '', '0000-00-00', 1),
(4, 'RE104', 'Resistor 1206 - 1.2K 5%', 'Electronics', 'Spares', '', '200', 0.00, '', '0000-00-00', 1),
(5, 'RE105', 'Resistor 1206 - 2.2K 5%', 'Electronics', 'Spares', '', '528', 0.00, '', '0000-00-00', 1),
(6, 'RE106', 'Resistor 1206 - 470E 5%', 'Electronics', 'Spares', '', '420', 0.00, '', '0000-00-00', 1),
(7, 'RE107', 'Resistor 1206 - 22E', 'Electronics', 'Spares', '', '634', 0.00, '', '0000-00-00', 1),
(8, 'RE108', 'Resistor 1206 - 10K 5%', 'Electronics', 'Spares', '', '150', 0.00, '', '0000-00-00', 1),
(9, 'RE109', 'Resistor 1206 IE=200', 'Electronics', 'Spares', '', '48', 0.00, '1', '0000-00-00', 1),
(10, 'RE110', 'Resistor 1206 560E', 'Electronics', 'Spares', '', '200', 0.00, '', '0000-00-00', 1),
(11, 'RE111', 'Resistor 1206 - 2.7 K', 'Electronics', 'Spares', '', '987', 0.00, '', '0000-00-00', 1),
(12, 'RE112', 'Resistor 1K', 'Electronics', 'Spares', '', '412', 0.00, '', '0000-00-00', 1),
(13, 'RE113', 'Resistor 1206 5% 10Kohm', 'Electronics', 'Spares', '', '150', 0.00, '', '0000-00-00', 1),
(14, 'RE114', 'Resistor 1206 1E=200', 'Electronics', 'Spares', '', '48', 0.00, '', '0000-00-00', 1),
(15, 'RE115', 'Resistor560E 1206', 'Electronics', 'Spares', '', '200', 0.00, '', '0000-00-00', 1),
(16, 'RE116', 'Resistor 1206 - 2.7K', 'Electronics', 'Spares', '', '987', 0.00, '', '0000-00-00', 1),
(17, 'RE117', 'Resistor 4.7K', 'Electronics', 'Spares', '', '268', 0.00, '', '0000-00-00', 1),
(18, 'RE118', 'Resistor 47kohm', 'Electronics', 'Spares', '', '93', 0.00, '', '0000-00-00', 1),
(19, 'RE119', 'Resistor 4.7kohm', 'Electronics', 'Spares', '', '90', 0.00, '', '0000-00-00', 1),
(20, 'RE120', 'Resistor 10kohm', 'Electronics', 'Spares', '', '72', 0.00, '', '0000-00-00', 1),
(21, 'RE121', 'Resistor 360E Kohm', 'Electronics', 'Spares', '', '93', 0.00, '', '0000-00-00', 1),
(22, 'RE122', 'Resistor 1206 - 220K', 'Electronics', 'Spares', '', '642', 0.00, '', '0000-00-00', 1),
(23, 'RE123', 'Resistor 1206 - 330K', 'Electronics', 'Spares', '', '100', 0.00, '', '0000-00-00', 1),
(24, 'RE124', 'Resistor 3K 3Kohm', 'Electronics', 'Spares', '', '24', 0.00, '', '0000-00-00', 1),
(25, 'RE125', 'Resistor 472 SMD', 'Electronics', 'Spares', '', '92', 0.00, '', '0000-00-00', 1),
(26, 'RE126', 'Resistor 10K', 'Electronics', 'Spares', '', '22', 0.00, '', '0000-00-00', 1),
(27, 'RE127', 'Resistor 120kohm', 'Electronics', 'Spares', '', '26', 0.00, '', '0000-00-00', 1),
(28, 'RE128', 'Resistor 2.2K', 'Electronics', 'Spares', '', '11', 0.00, '', '0000-00-00', 1),
(29, 'RE129', 'Resistor 360Kohm', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(30, 'RE130', 'Resistor 22E - 1-4 W', 'Electronics', 'Spares', '', '110', 0.00, '', '0000-00-00', 1),
(31, 'RE131', 'Resistor 330E', 'Electronics', 'Spares', '', '217', 0.00, '', '0000-00-00', 1),
(32, 'RE132', 'Resistor 2K2 -1-8 W', 'Electronics', 'Spares', '', '500', 0.00, '', '0000-00-00', 1),
(33, 'RE133', 'Resistor 1K5 -1-8 W', 'Electronics', 'Spares', '', '1628', 0.00, '', '0000-00-00', 1),
(34, 'RE134', 'Resistor 10K-1-8 W', 'Electronics', 'Spares', '', '500', 0.00, '', '0000-00-00', 1),
(35, 'RE135', 'Resistor TKR 1-4 W MFR 1% 12K', 'Electronics', 'Spares', '', '100', 0.00, '', '0000-00-00', 1),
(36, 'RE136', 'Resistor 18K -1-4 W', 'Electronics', 'Spares', '', '100', 0.00, '', '0000-00-00', 1),
(37, 'RE137', 'Resistor TKR 1-4 W MFR 1% 7K5', 'Electronics', 'Spares', '', '75', 0.00, '', '0000-00-00', 1),
(38, 'RE138', 'Resistor 8K2 ohm', 'Electronics', 'Spares', '', '98', 0.00, '', '0000-00-00', 1),
(39, 'RE139', 'Resistor TKR 1-4W MFR 1% 9K1', 'Electronics', 'Spares', '', '70', 0.00, '', '0000-00-00', 1),
(40, 'RE140', 'Resistor 22 K', 'Electronics', 'Spares', '', '263', 0.00, '', '0000-00-00', 1),
(41, 'RE141', 'Resistor TKR 1-4W MFR 22E', 'Electronics', 'Spares', '', '70', 0.00, '', '0000-00-00', 1),
(42, 'RE142', 'Resistor 270 E', 'Electronics', 'Spares', '', '70', 0.00, '', '0000-00-00', 1),
(43, 'RE143', 'Resistor 10K-1-4W', 'Electronics', 'Spares', '', '167', 0.00, '', '0000-00-00', 1),
(44, 'RE144', 'Resistor 33K', 'Electronics', 'Spares', '', '224', 0.00, '', '0000-00-00', 1),
(45, 'RE145', 'Resistor 82K 1-4K', 'Electronics', 'Spares', '', '268', 0.00, '', '0000-00-00', 1),
(46, 'RE146', 'Resistor 3.6K -1-4 W', 'Electronics', 'Spares', '', '40', 0.00, '', '0000-00-00', 1),
(47, 'RE147', 'Resistor 2.2K -1-4 W', 'Electronics', 'Spares', '', '731', 0.00, '', '0000-00-00', 1),
(48, 'RE148', 'Resistor 3.3 K', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(49, 'CA101', 'Capacitor 0.1 MF - 50V', 'Electronics', 'Spares', '', '214', 0.00, '', '0000-00-00', 1),
(50, 'CA102', 'Capacitor 470MF - 25V', 'Electronics', 'Spares', '', '70', 0.00, '', '0000-00-00', 1),
(51, 'CA103', 'Capacitor 10MF - 25V', 'Electronics', 'Spares', '', '76', 0.00, '', '0000-00-00', 1),
(52, 'CA104', 'Capacitor 10MF - 50V', 'Electronics', 'Spares', '', '8', 0.00, '', '0000-00-00', 1),
(53, 'CA105', 'Capacitor 1206 0.1MFD - 50V', 'Electronics', 'Spares', '', '500', 0.00, '', '0000-00-00', 1),
(54, 'CA106', 'Capacitor 1206 22PF', 'Electronics', 'Spares', '', '30', 0.00, '', '0000-00-00', 1),
(55, 'CA107', 'Capacitor 33PF', 'Electronics', 'Spares', '', '834', 0.00, '', '0000-00-00', 1),
(56, 'CA108', 'Capacitor 104K - 400V', 'Electronics', 'Spares', '', '42', 0.00, '', '0000-00-00', 1),
(57, 'CA109', 'Capacitor 105', 'Electronics', 'Spares', '', '53', 0.00, '', '0000-00-00', 1),
(58, 'CA110', 'Capacitor EM104K 630G', 'Electronics', 'Spares', '', '13', 0.00, '', '0000-00-00', 1),
(59, 'CA111', 'Capacitor 1000 MF - 50V', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(60, 'CA112', 'Capacitor 104', 'Electronics', 'Spares', '', '19', 0.00, '', '0000-00-00', 1),
(61, 'CA113', 'Capacitor 1000MF - 63V', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(62, 'CA114', 'Capacitor 470MF - 35V', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(63, 'CA115', 'Capacitor 222M 2KV', 'Electronics', 'Spares', '', '10', 0.00, '', '0000-00-00', 1),
(64, 'CA116', 'Capacitor 47MF - 63V', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(65, 'CA117', 'Capacitor 47MF - 50V', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(66, 'CA118', 'Capacitor 100UF-25V', 'Electronics', 'Spares', '', '153', 0.00, '', '0000-00-00', 1),
(67, 'CA119', 'Capacitor 1000UF-35V', 'Electronics', 'Spares', '', '56', 0.00, '', '0000-00-00', 1),
(68, 'CA120', 'Capacitor 0.1UF-275V', 'Electronics', 'Spares', '', '21', 0.00, '', '0000-00-00', 1),
(69, 'CA121', 'Capacitor 0.1 UF', 'Electronics', 'Spares', '', '80', 0.00, '', '0000-00-00', 1),
(70, 'CA122', 'Capacitor 470 UF-16V', 'Electronics', 'Spares', '', '55', 0.00, '', '0000-00-00', 1),
(71, 'CA123', 'Capacitor 10 UF-50V', 'Electronics', 'Spares', '', '88', 0.00, '', '0000-00-00', 1),
(72, 'CA124', 'Capacitor 1000 UF-25V', 'Electronics', 'Spares', '', '76', 0.00, '', '0000-00-00', 1),
(73, 'CA125', 'Capacitor 470 UF -25V', 'Electronics', 'Spares', '', '115', 0.00, '', '0000-00-00', 1),
(74, 'QU101', 'Quectel (M95) (GSM)', 'Electronics', 'Spares', '', '22', 0.00, '', '0000-00-00', 1),
(75, 'QU102', 'Quectel (M66)', 'Electronics', 'Spares', '', '20', 0.00, '', '0000-00-00', 1),
(76, 'TR101', 'Transistor MPS 22A', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(77, 'TR102', 'Transistor 431AZ', 'Electronics', 'Spares', '', '56', 0.00, '', '0000-00-00', 1),
(78, 'TR103', 'Transistor 2N2222', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(79, 'TR104', 'Transistor 2N5401', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(80, 'TR105', 'Transistor MPS2222A', 'Electronics', 'Spares', '', '11', 0.00, '', '0000-00-00', 1),
(81, 'TR106', 'Transistor BC557', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(82, 'TR107', 'Transistor BC547', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(83, 'TR108', '2N 5401 Transistor', 'Electronics', 'Spares', '', '8', 0.00, '', '0000-00-00', 1),
(84, 'TR109', 'Transistor BC 547-SOT-23', 'Electronics', 'Spares', '', '176', 0.00, '', '0000-00-00', 1),
(85, 'LE101', 'Red LED', 'Electronics', 'Spares', '', '88', 0.00, '', '0000-00-00', 1),
(86, 'LE102', 'Yellow LED', 'Electronics', 'Spares', '', '86', 0.00, '', '0000-00-00', 1),
(87, 'LE103', 'Green LED', 'Electronics', 'Spares', '', '98', 0.00, '', '0000-00-00', 1),
(88, 'LE104', 'LED', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(89, 'LD101', 'LDR', 'Electronics', 'Spares', '', '50', 0.00, '', '0000-00-00', 1),
(90, 'IC101', 'IC LM2576', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(91, 'IC102', 'IC LM8039', 'Electronics', 'Spares', '', '24', 0.00, '', '0000-00-00', 1),
(92, 'IC103', 'IC LM2596', 'Electronics', 'Spares', '', '24', 0.00, '', '0000-00-00', 1),
(93, 'IC104', 'IC LM318', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(94, 'IC105', 'IC IRF P460', 'Electronics', 'Spares', '', '8', 0.00, '', '0000-00-00', 1),
(95, 'IC106', 'IC SG3524N', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(96, 'IC107', 'IC L80-M39', 'Electronics', 'Spares', '', '24', 0.00, '', '0000-00-00', 1),
(97, 'IC108', '7812 Regulator IC', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(98, 'IC109', '6N137 IC', 'Electronics', 'Spares', '', '24', 0.00, 'tes', '0000-00-00', 1),
(99, 'IC110', 'MAX 232 IC', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(100, 'IC111', 'BYQ28E IC', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(101, 'IC112', '2SK727 IC', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(102, 'IC113', 'LD108BV33 Regulator IC', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(103, 'IC114', 'Regulator IC7812', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(104, 'IC115', 'IC KA3525A', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(105, 'IC116', 'IC LM2596S', 'Electronics', 'Spares', '', '9', 0.00, '', '0000-00-00', 1),
(106, 'IC117', 'LM35 Regulator IC', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(107, 'IC118', 'Regulator IC7805', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(108, 'IC119', 'Regulator IRF530', 'Electronics', 'Spares', '', '11', 0.00, '', '0000-00-00', 1),
(109, 'IC120', 'IC ULN 2003 SOIC', 'Electronics', 'Spares', '', '100', 0.00, '', '0000-00-00', 1),
(110, 'IC121', 'REGULATOR IC 7824', 'Electronics', 'Spares', '', '31', 0.00, '', '0000-00-00', 1),
(111, 'GS101', 'GSM', 'Electronics', 'Tools', '', '36', 0.00, '', '0000-00-00', 1),
(112, 'GS102', 'GSM Holder', 'Electronics', 'Tools', '', '1', 0.00, '', '0000-00-00', 1),
(113, 'GS103', 'GSM - GPRS Board', 'Electronics', 'Tools', '', '1', 0.00, '', '0000-00-00', 1),
(114, 'GS104', 'GSM - GPRS with components ', 'Electronics', 'Tools', '', '2', 0.00, '', '0000-00-00', 1),
(115, 'IN101', 'Inductors', 'Electronics', 'Tools', '', '27', 0.00, '', '0000-00-00', 1),
(116, 'IN102', '8Pin Inductor', 'Electronics', 'Tools', '', '1', 0.00, '', '0000-00-00', 1),
(117, 'PI101', 'PIC 16F690', 'Electronics', 'Tools', '', '6', 0.00, '', '0000-00-00', 1),
(118, 'FU101', 'Glass Fuse (T2AL-250V)', 'Electronics', 'Tools', '', '10', 0.00, '', '0000-00-00', 1),
(119, 'FU102', 'TAKUMI FUSES', 'Electronics', 'Spares', '', '800', 0.00, '', '0000-00-00', 1),
(120, 'FU103', 'Fuse Holder', 'Electronics', 'Spares', '', '16', 0.00, '', '0000-00-00', 1),
(121, 'RH101', 'RHR 15120', 'Electronics', 'Tools', '', '16', 0.00, '', '0000-00-00', 1),
(122, 'DI101', 'Diode IN4007', 'Electronics', 'Spares', '', '50', 0.00, '', '0000-00-00', 1),
(123, 'DI102', 'SB 140A Diode', 'Electronics', 'Spares', '', '15', 0.00, '', '0000-00-00', 1),
(124, 'DI103', 'Zenerdiode 18V - 1W 1N4746', 'Electronics', 'Spares', '', '79', 0.00, '', '0000-00-00', 1),
(125, 'DI104', 'UF 5408 Diode', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(126, 'DI105', 'Diode DSI30-08A', 'Electronics', 'Spares', '', '9', 0.00, '', '0000-00-00', 1),
(127, 'DI106', 'Diode 1N4007', 'Electronics', 'Spares', '', '145', 0.00, '', '0000-00-00', 1),
(128, 'DI107', 'Diode 1N4007 SMD', 'Electronics', 'Spares', '', '153', 0.00, '', '0000-00-00', 1),
(129, 'US101', 'USB to USB Cables', 'Electronics', 'Spares', '', '100', 0.00, '', '0000-00-00', 1),
(130, 'US102', 'USB to USB Convertor Cables', 'Electronics', 'Spares', '', '7', 0.00, '', '0000-00-00', 1),
(131, 'OP101', 'ST Optical Fibre Cables (Multi Mode)', 'Electronics', 'Spares', '', '3(sets)', 0.00, '', '0000-00-00', 1),
(132, 'OP102', 'SC Optical Fibre Cables (Single Mode)', 'Electronics', 'Spares', '', '3(sets)', 0.00, '', '0000-00-00', 1),
(133, 'OP103', 'ST Optical Fibre Cables (Single Mode)', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(134, 'OP104', 'Optical to R232 Convertor Board ', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(135, 'OP105', 'Optical to RS232 Components add to Board', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(136, 'CO101', 'ST to SC Connector', 'Electronics', 'Spares', '', '5', 0.00, '', '0000-00-00', 1),
(137, 'CO102', 'SC to SC Connector', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(138, 'CO103', 'ST to ST Connector', 'Electronics', 'Spares', '', '11', 0.00, '', '0000-00-00', 1),
(139, 'CO104', 'RS232 Pin Connector 25pin Female', 'Electronics', 'Spares', '', '15', 0.00, '', '0000-00-00', 1),
(140, 'CO105', 'RS232 Pin Connector 25pin Male', 'Electronics', 'Spares', '', '19', 0.00, '', '0000-00-00', 1),
(141, 'CO106', 'RS232 Connector 9pin Female', 'Electronics', 'Spares', '', '8', 0.00, '', '0000-00-00', 1),
(142, 'CO107', 'RS232 Connector 9pin Male', 'Electronics', 'Spares', '', '11', 0.00, '', '0000-00-00', 1),
(143, 'CO108', 'RS232 Connector 25pin Male to Female', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(144, 'CO109', 'RS232 Connector 9pin Male to Female', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(145, 'CO110', 'Connector Pin', 'Electronics', 'Spares', '', '23', 0.00, '', '0000-00-00', 1),
(146, 'AD101', 'RS232 25pin adapter', 'Electronics', 'Spares', '', '17', 0.00, '', '0000-00-00', 1),
(147, 'AD102', 'RS232 9pin adapter', 'Electronics', 'Spares', '', '10', 0.00, '', '0000-00-00', 1),
(148, 'SW101', 'One way switch 16(4)A,250V', 'Electronics', 'Spares', '', '4', 0.00, '', '0000-00-00', 1),
(149, 'SW102', 'One way switch 4A,250V', 'Electronics', 'Spares', '', '7', 0.00, '', '0000-00-00', 1),
(150, 'SW103', 'One way Gilard switch ', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(151, 'GL101', 'PG 11Cable Gland', 'Electronics', 'Spares', '', '18', 0.00, '', '0000-00-00', 1),
(152, 'RA101', 'Raspberry pi B PlusPlus Extension board', 'Electronics', 'Insurance', '', '12', 0.00, '', '0000-00-00', 1),
(153, 'RA102', 'Raspberry pi old', 'Electronics', 'Insurance', '', '1', 0.00, '', '0000-00-00', 1),
(154, 'RA103', 'Raspberry pi B Plus Plus', 'Electronics', 'Insurance', '', '3', 0.00, '', '0000-00-00', 1),
(155, 'RA104', 'Raspberry pi B PlusPlus Extension board with Compo', 'Electronics', 'Insurance', '', '3', 0.00, '', '0000-00-00', 1),
(156, 'LC101', 'LCD 16x2 version 1.0 Top Board', 'Electronics', 'Spares', '', '10', 0.00, '', '0000-00-00', 1),
(157, 'LC102', '2x16 LCD Display', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(158, 'LC103', 'LCD 16x2 version 1.0 Top Board with Components', 'Electronics', 'Tools', '', '3', 0.00, '', '0000-00-00', 1),
(159, 'VT101', 'VTS Version 1.0 Board', 'Electronics', 'Tools', '', '14', 0.00, '', '0000-00-00', 1),
(160, 'VT102', 'VTS Power Supply Board', 'Electronics', 'Spares', '', '9', 0.00, '', '0000-00-00', 1),
(161, 'VT103', 'VTS Power Supply Board with Components', 'Electronics', 'Spares', '', '20', 0.00, '', '0000-00-00', 1),
(162, 'VT104', 'VTS Version 1.0 Board with Components', 'Electronics', 'Spares', '', '16', 0.00, '', '0000-00-00', 1),
(163, 'HD101', 'HDMI to HDMI Cables', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(164, 'RS101', 'RS232 Cables Female to Female', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(165, 'RS102', 'RS232 Connector B-type', 'Electronics', 'Spares', '', '7', 0.00, '', '0000-00-00', 1),
(166, 'SE101', 'Sensor Switch model no.2040', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(167, 'SE102', 'Sensor', 'Electronics', 'Spares', '', '12', 0.00, '', '0000-00-00', 1),
(168, 'CH101', 'Channel Relay Board', 'Electronics', 'Spares', '', '10', 0.00, '', '0000-00-00', 1),
(169, 'WA101', 'Wavecom Modem', 'Electronics', 'Spares', '', '1', 0.00, '', '0000-00-00', 1),
(170, 'TT101', 'TTL to RS232 Convertor board', 'Electronics', 'Spares', '', '3', 0.00, '', '0000-00-00', 1),
(171, 'DC101', 'DC to DC Convertor Board', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(172, 'SC101', 'SCS Moisture Barrier Bag', 'Electronics', 'Spares', '', '9', 0.00, '', '0000-00-00', 1),
(173, 'IR101', 'IR2121 (IGBT-MOSFET) ', 'Electronics', 'Spares', '', '6', 0.00, '', '0000-00-00', 1),
(174, 'PC101', 'PC817(Opto coupler)', 'Electronics', 'Spares', '', '22', 0.00, '', '0000-00-00', 1),
(175, 'UC101', 'UC 3845B(Current Mode Controllers)', 'Electronics', 'Spares', '', '62', 0.00, '', '0000-00-00', 1),
(176, 'TRI101', 'Trimpot 3296', 'Electronics', 'Spares', '', '10', 0.00, '', '0000-00-00', 1),
(177, 'LB101', 'LB-402(Numeric Display)', 'Electronics', 'Spares', '', '2', 0.00, '', '0000-00-00', 1),
(178, 'MO101', 'MOSFET IRFP9140N', 'Electronics', 'Spares', '', '20', 0.00, '', '0000-00-00', 1),
(179, 'BU101', 'BURGSTIK 2.54mm Header Pin', 'Electronics', 'Spares', '', '23', 0.00, '', '0000-00-00', 1),
(180, 'CR101', '11.0592  MHZ CRYSTAL OSCILLATOR', 'Electronics', 'Spares', '', '9', 0.00, '', '0000-00-00', 1),
(181, 'CR102', 'CRYSTAL 10 MHZ SMALL CRYSTAL OSCILLATOR', 'Electronics', 'Spares', '', '31', 0.00, '', '0000-00-00', 1),
(182, 'CR103', '10 MHZ CRYSTAL OSCILLATOR', 'Electronics', 'Spares', '', '51', 15.00, '', '0000-00-00', 1),
(183, 'RM101', 'RMC 2.54 mm 4PIN', 'Electronics', 'Spares', '', '105', 0.00, '', '0000-00-00', 1),
(184, 'RM102', 'RMC 2.54mm', 'Electronics', 'Spares', '', '29', 0.00, '', '0000-00-00', 1),
(185, 'RM103', 'RMC -12 PIN 2.54mm', 'Electronics', 'Spares', '', '107', 0.00, '', '0000-00-00', 1),
(186, 'BC101', 'BCR 12 PM TRIAC', 'Electronics', 'Spares', '', '31', 0.00, '', '0000-00-00', 1),
(187, '123', 'test', 'Used', 'Used', '', '', 123.00, 'test', '2017-01-21', 1),
(188, '1000', 'test', 'Mechanical', 'Tools', '', '', 500.00, 'test', '2017-09-05', 1),
(189, '5556', 'test123', 'Mechanical', 'Insurance', '', '', 100.00, 'test', '2017-09-04', 1),
(190, '222', 'test', 'Electrical', 'Insurance', '', '', 10.00, 'test', '2017-09-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arka_outward_details`
--

CREATE TABLE IF NOT EXISTS `arka_outward_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `outward_entry_no` varchar(25) NOT NULL,
  `item_category_code` varchar(50) NOT NULL,
  `material_code` varchar(25) NOT NULL,
  `material_name` varchar(25) NOT NULL,
  `material_category` varchar(15) NOT NULL,
  `material_specification` varchar(20) NOT NULL,
  `quantity` varchar(9) NOT NULL,
  `material_price` float NOT NULL,
  `region` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `remarks` varchar(9) NOT NULL,
  `record_status` tinyint(2) NOT NULL,
  UNIQUE KEY `sl_no` (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `arka_outward_details`
--

INSERT INTO `arka_outward_details` (`sl_no`, `outward_entry_no`, `item_category_code`, `material_code`, `material_name`, `material_category`, `material_specification`, `quantity`, `material_price`, `region`, `location`, `remarks`, `record_status`) VALUES
(1, 'OWD1001', 'WOA002095', 'WOA002095', 'FOLDABLE TABLE', 'TABLE', '', '5', 10595, '', 'PAT', '', 1),
(4, 'OWD1002', 'ICC1019', 'IC1019', 'STOREWELL', 'STOREWELL', '', '2', 0, '', 'PAT', '', 1),
(5, 'OWD1003', 'WOA002095', 'WOA002095', 'FOLDABLE TABLE', 'TABLE', '', '12', 10595, '', 'PAT', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_outward_master`
--

CREATE TABLE IF NOT EXISTS `arka_outward_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `outward_entry_no` varchar(10) NOT NULL,
  `material_name` varchar(250) NOT NULL,
  `dc_no` varchar(8) NOT NULL,
  `to_name` varchar(15) NOT NULL,
  `to_address` varchar(20) NOT NULL,
  `date_of_entry` date NOT NULL,
  `dc_date` date NOT NULL,
  `purpose` varchar(15) NOT NULL,
  `vehicle_no` varchar(12) NOT NULL,
  `select_region` varchar(18) NOT NULL,
  `sites` varchar(15) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `cst_no` varchar(8) NOT NULL,
  `st_no` varchar(8) NOT NULL,
  `record_status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `arka_outward_master`
--

INSERT INTO `arka_outward_master` (`sl_no`, `outward_entry_no`, `material_name`, `dc_no`, `to_name`, `to_address`, `date_of_entry`, `dc_date`, `purpose`, `vehicle_no`, `select_region`, `sites`, `gst_no`, `cst_no`, `st_no`, `record_status`) VALUES
(1, 'OWD1001', 'FOLDABLE TABLE', '', 'SPASTICS SOCIET', 'ADYAR', '2017-10-31', '0000-00-00', 'Sales', 'TN18X3730', '', '', 'NIL', '', '', 1),
(4, 'OWD1002', 'STOREWELL', '', 'L&T SHIP BUILDI', 'ENNORE', '2017-11-09', '0000-00-00', 'Sales', 'TN18X3730', '', '', '33AAMCA4312N1ZN', '', '', 1),
(5, 'OWD1003', 'FOLDABLE TABLE', '', 'CII', 'THARAMANI', '2017-11-16', '0000-00-00', 'Sales', 'TN18X3730', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_place_type`
--

CREATE TABLE IF NOT EXISTS `arka_place_type` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `place_type` varchar(150) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `arka_place_type`
--

INSERT INTO `arka_place_type` (`sl_no`, `place_type`, `status`) VALUES
(1, 'Retail Counter', 1),
(2, 'Office', 1),
(3, 'Pharma', 1),
(4, 'Auto Mobile', 1),
(5, 'Auto Ancillary', 1),
(6, 'Education', 1),
(7, 'Central Government Agency', 1),
(8, 'IT', 1),
(9, 'General Industry', 1),
(10, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_po_details`
--

CREATE TABLE IF NOT EXISTS `arka_po_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `po_no` varchar(15) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` double(11,2) NOT NULL,
  `item_quantity` varchar(25) NOT NULL,
  `item_tax_per` double(11,2) NOT NULL,
  `item_tax_value` double(11,2) NOT NULL,
  `item_total_price` double(11,2) NOT NULL,
  `item_specification` varchar(255) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_po_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_po_followup`
--

CREATE TABLE IF NOT EXISTS `arka_po_followup` (
  `sl_no` int(10) NOT NULL AUTO_INCREMENT,
  `po_status` varchar(50) NOT NULL,
  `po_no` varchar(50) NOT NULL,
  `po_date` date NOT NULL,
  `remarks` longtext NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_po_followup`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_po_master`
--

CREATE TABLE IF NOT EXISTS `arka_po_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `po_no` varchar(15) NOT NULL,
  `po_date` date NOT NULL,
  `quote_ref_id` varchar(15) NOT NULL,
  `quote_date` date NOT NULL,
  `salutation` varchar(5) NOT NULL,
  `supplier_company_name` varchar(50) NOT NULL,
  `supplier_code` varchar(15) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_address1` varchar(255) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `deliver_to` varchar(50) NOT NULL,
  `supplier_email` varchar(30) NOT NULL,
  `supplier_email1` varchar(30) NOT NULL,
  `supplier_mobile_no` varchar(15) NOT NULL,
  `supplier_mobile_no1` varchar(15) NOT NULL,
  `po_status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `area_code` varchar(10) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `extension` varchar(10) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_po_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_product_master`
--

CREATE TABLE IF NOT EXISTS `arka_product_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(100) NOT NULL,
  `baan_company` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dimensions` varchar(50) NOT NULL,
  `ware_house` varchar(100) NOT NULL,
  `consumer_basic` double(11,2) NOT NULL,
  `ed` double(11,2) NOT NULL,
  `pkg` varchar(10) NOT NULL,
  `total` double(11,2) NOT NULL,
  `item_color` longtext NOT NULL,
  `item_category` varchar(50) NOT NULL,
  `item_category_code` varchar(100) NOT NULL,
  `price_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=787 ;

--
-- Dumping data for table `arka_product_master`
--

INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(1, 'FUARRIVESETXXXXX', '235', 'Arrive Main Desk', 'Arrive Main Desk', 'Comprises of Main Desk , ERU and Pedestal', '', '', 'HOB', 265181.00, 0.00, '1', 265181.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '12:21:58', '2016-05-20 13:13:08', '', 1),
(2, 'FUARRIVEBKUNITXX', '235', 'Arrive Back Unit', 'Arrive Back Unit', '', 'Arrive_big.jpg', '1000*480*2035', 'HOB', 41958.00, 0.00, '1', 41958.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '12:41:36', '2016-02-17 12:41:36', '', 1),
(3, 'FUIMPRESSSETXXXX', '235', 'Impress Main Desk', 'Impress Main Desk', 'Comprises of Main Desk,ERU and Pedestal', 'impress_big1.jpg', '1800*900*750', 'HOB', 56293.00, 0.00, '1', 56293.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '12:42:02', '2016-02-17 12:42:02', '', 1),
(4, 'FUIMPRESSBKUNITX', '235', 'Impress Back Unit', 'Impress Back Unit', '', 'impress_big2.jpg', '2215*410*2000', 'HOB', 61411.00, 0.00, '1', 61411.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '12:48:08', '2016-02-17 12:48:08', '', 1),
(5, 'FUCSDSNXNCYSOCXX', '235', 'Maestro Main Desk OXFORD CHERRY', 'Maestro Main Desk OXFORD CHERRY', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big.jpg', '1800*900*750', 'HOC', 31633.00, 0.00, '1', 31633.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '12:50:43', '2016-02-17 12:50:43', '', 1),
(6, 'FUCSJTRN019SXXXX', '235', 'Maestro Joining Table RHS', 'Maestro Joining Table RHS', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big1.jpg', '1200*1050*750', 'HOC', 13733.00, 0.00, '1', 13733.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:01:15', '2016-02-17 01:01:15', '', 1),
(7, 'FUCSJTLN019SXXXX', '235', 'Maestro Joining Table LHS', 'Maestro Joining Table LHS', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big2.jpg', '1200*1050*750', 'HOC', 13733.00, 0.00, '1', 13733.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:04:43', '2016-02-17 01:04:43', '', 1),
(9, 'FUCSMPDNNCYSOCXX', '235', 'Maestro Mobile Pedestal Oxford Cherry', 'Maestro Mobile Pedestal Oxford Cherry', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big3.jpg', '400*560*560', 'HOC', 17439.00, 0.00, '1', 17439.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:17:43', '2016-02-17 01:17:43', '', 1),
(10, 'FUCSERNXNCYSOCXX', '235', 'Maestro Return Desk', 'Maestro Return Desk', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big4.jpg', '1200*600*730', 'HOC', 30246.00, 0.00, '1', 30246.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:20:28', '2016-02-17 01:20:28', '', 1),
(11, 'FUCSGDUNNCYSOCXX', '235', 'Maestro Bookcase', 'Maestro Bookcase', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', '', '', 'HOC', 29857.00, 0.00, '1', 29857.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:24:20', '2016-06-22 16:31:44', '', 1),
(12, 'FUCSBUNXNCYSOCXX', '235', 'Maestro Back Unit Oxford Cherry', 'Maestro Back Unit Oxford Cherry', 'An All Wood Suite with the Laminate Clad Post formed Tops (for Desk ,ERU and Back Unit) with the Pigmented Polyurethane Coated Joining Table', 'MAESTRO_big6.jpg', '1400*470*760', 'HOC', 56987.00, 0.00, '1', 56987.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:28:04', '2016-02-17 01:28:04', '', 1),
(13, 'FUESPETR059S0SET', '235', 'Numero Uno Main Desk RHS + ERU with Ped + Mobile Ped', 'Numero Uno Main Desk RHS + ERU with Ped + Mobile Ped', 'An All Wood Suite in a Unique shape with Lamiated top and understructure', 'NUMERO-UNO_big.jpg', '2200*1190*750,1380*480*700,406*550*640', 'HOB', 68953.00, 0.00, '1', 68953.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:39:14', '2016-02-17 01:39:14', '', 1),
(14, 'FUESPETL059S0SET', '235', 'Numero Uno Main Desk LHS + ERU with Ped + Mobile Ped', 'Numero Uno Main Desk LHS + ERU with Ped + Mobile Ped', 'An All Wood Suite in a Unique shape with Lamiated top and understructure', 'NUMERO-UNO_big1.jpg', '2200*1190*750,1380*480*700,406*550*640', 'HOB', 68953.00, 0.00, '1', 68953.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:45:10', '2016-02-17 01:45:10', '', 1),
(15, 'FUESPMCAB059SXXX', '235', 'Numero Uno Cabinet', 'Numero Uno Cabinet', 'An All Wood Suite in a Unique shape with Lamiated top and understructure', 'NUMERO-UNO_big2.jpg', '2410*425*1215', 'HOB', 71312.00, 0.00, '1', 71312.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:48:25', '2016-02-17 01:48:25', '', 1),
(16, 'FUJPSDSNVADSXTRD', '235', 'Jefferson Main Desk RHS', 'Jefferson Main Desk RHS', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm.jpg', '2400*1104*735', 'HOC', 118567.00, 0.00, '1', 118567.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '01:50:57', '2016-02-17 01:50:57', '', 1),
(17, 'FUJPSDLNVADSXTRD', '235', 'Jefferson Main Desk LHS', 'Jefferson Main Desk LHS', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm1.jpg', '2400*1104*735', 'HOC', 118567.00, 0.00, '1', 118567.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:00:51', '2016-02-17 02:00:51', '', 1),
(18, 'FUJPSELNVADSXTRD', '235', 'Jefferson ERU LHS', 'Jefferson ERU LHS', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm2.jpg', '1400*580*690', 'HOC', 60682.00, 0.00, '1', 60682.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:03:36', '2016-02-17 02:03:36', '', 1),
(19, 'FUJPSERNVADSXTRD', '235', 'Jefferson ERU RHS', 'Jefferson ERU RHS', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm3.jpg', '1400*580*690', 'HOC', 60682.00, 0.00, '1', 60682.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:07:05', '2016-02-17 02:07:05', '', 1),
(20, 'FUJPSBUNVADSXTRD', '235', 'Jefferson Back Unit', 'Jefferson Back Unit', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm4.jpg', '1860*580*670', 'HOC', 93248.00, 0.00, '1', 93248.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:09:43', '2016-02-17 02:09:43', '', 1),
(21, 'FUJPSTWNVADSXTRD', '235', 'Jefferson Tower Unit', 'Jefferson Tower Unit', 'A Premium All Wood Suite made of Scratch and Stain Resistant Polyester Coated Veneer top with the Main Desk top having a combination of Pamello Veneer and Black', 'Jefferson_prod_sm5.jpg', '1700*400*1200', 'HOC', 42747.00, 0.00, '1', 42747.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:12:12', '2016-02-17 02:12:12', '', 1),
(22, 'FUBRCDESKMPLXXXX', '235', 'Marquis Main Desk', 'Marquis Main Desk', 'An Executive Suite combination of Melamine Finished MDF Board and Metal (for the Modesty Panel) with a three layered construction with a curvilinear profile for the visitor end', 'MARQUIS_big1.jpg', '2000*900*750', 'HOB', 77879.00, 0.00, '1', 77879.00, '235', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:23:29', '2016-02-17 02:23:29', '', 1),
(23, 'FUBRCUERUMPLXXXX', '235', 'Marquis Universal ERU', 'Marquis Universal ERU', 'An Executive Suite combination of Melamine Finished MDF Board and Metal (for the Modesty Panel) with a three layered construction with a curvilinear profile for the visitor end', 'MARQUIS_big2.jpg', '1050*500*750', 'HOB', 21425.00, 0.00, '1', 21425.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-17', '02:25:33', '2016-02-17 02:25:33', '', 1),
(27, 'FUBRCBUXXMPLXXXX', '235', 'Marquis Back Unit', 'Marquis Back Unit', 'An Executive Suite in a combination of Melamine Finished MDF Board and Metal (for the Modesty Panel) with a three layered construction with a curvilinear profile for the visitor end.', 'MARQUIS_big2.jpg', '2000 * 400 * 1190', 'HOB', 56476.00, 0.00, '1', 56476.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '04:58:02', '2016-02-18 04:58:02', '', 1),
(28, 'FUASCENTDESKLHXX', '235', 'ASCENT DESK WITH ERU LHS', 'ASCENT DESK WITH ERU LHS', '', 'Ascent_L.jpg', '2100W * 1600D * 765H', 'HOB', 35092.00, 0.00, '', 35092.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:03:10', '2016-02-18 05:03:10', '', 1),
(29, 'FUASCENTDESKRHXX', '235', 'ASCENT DESK WITH ERU RHS', 'ASCENT DESK WITH ERU RHS', '', 'Ascent_L1.jpg', '2100W * 1600D * 765H', 'HOB', 35092.00, 0.00, '1', 35092.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:11:27', '2016-02-18 05:11:27', '', 1),
(30, 'FUS1070CGGGSXTRD', '235', 'CENTRE DRAWER Table S-1070', 'CENTRE DRAWER Table S-1070', '', 'table-with-centre-drawer.jpg', '1665 * 900 * 725', 'HOC', 27901.00, 0.00, '1', 27901.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:16:10', '2016-02-18 05:16:10', '', 1),
(31, 'FUS1071CGGGSXTRD', '235', 'CENTRE DRAWER Table S-1071', 'CENTRE DRAWER Table S-1071', '', 'table-with-centre-drawer1.jpg', '1800 * 900 * 725', 'HOC', 28067.00, 0.00, '1', 28067.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:27:43', '2016-02-18 05:27:43', '', 1),
(32, 'FUFTB5026L005SET', '235', 'Finnesse Table - 5026 + ERU 3616 LHS', 'Finnesse Table - 5026 + ERU 3616 LHS', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big.jpg', '1500 * 750 * 740 * 1050 * 450 * 705', 'HOC', 26502.00, 0.00, '1', 26502.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:31:27', '2016-02-18 05:31:27', '', 1),
(33, 'FUFTB5026R005SET', '235', 'Finnesse Table-5026 + ERU 3616 RHS', 'Finnesse Table-5026 + ERU 3616 RHS', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big1.jpg', '1500 * 750 * 740 * 1050 * 450 * 705', 'HOC', 26502.00, 0.00, '1', 26502.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:40:23', '2016-02-18 05:40:23', '', 1),
(34, 'FUFTB4020X005NXX', '235', 'Finnesse Table - 4020', 'Finnesse Table - 4020', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big2.jpg', '1200 * 600 * 740', 'HOC', 9905.00, 0.00, '1', 9905.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:46:59', '2016-02-18 05:46:59', '', 1),
(35, 'FUFTB5630X005NXX', '235', 'Finnesse Table - 5630', 'Finnesse Table - 5630', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big3.jpg', '1650 * 900 * 740', 'HOC', 18144.00, 0.00, '1', 18144.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '05:57:57', '2016-02-18 05:57:57', '', 1),
(36, 'FUFTB6030X005NXX', '235', 'Finnesse Table-6030', 'Finnesse Table-6030', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big4.jpg', '1800 * 900 * 740', 'HOC', 19323.00, 0.00, '1', 19323.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:02:25', '2016-02-18 06:02:25', '', 1),
(37, 'FUFER5216L005NXX', '235', 'Finnesse ERU - 5216 LHS', 'Finnesse ERU - 5216 LHS', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big5.jpg', '1550 * 450 * 705', 'HOC', 10438.00, 0.00, '1', 10438.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:06:42', '2016-02-18 06:06:42', '', 1),
(38, 'FUFER5216R005NXX', '235', 'Finnesse ERU - 5216 RHS', 'Finnesse ERU - 5216 RHS', 'All Wood Tables, ERU''s and HDU''s made of Plain Particle Board with two post formed and two PVC Lipped edges', 'FINESSE_big6.jpg', '1550 * 450 * 705', 'HOC', 10438.00, 0.00, '1', 10438.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:26:17', '2016-02-18 06:26:17', '', 1),
(39, 'FUFHD4315X005NXX', '235', 'Finnesse HDU - 4315', 'Finnesse HDU - 4315', '', 'FINESSE_big7.jpg', '1280 * 425 * 705', 'HOC', 17997.00, 0.00, '1', 17997.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:44:53', '2016-02-18 06:44:53', '', 1),
(40, 'FUMFTBLXWBXP9060', '235', 'Mayfair Main Desk', 'Mayfair Main Desk', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm.jpg', '900 * 600 * 750', 'HOC', 6814.00, 0.00, '1', 6814.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:49:19', '2016-02-18 06:49:19', '', 1),
(41, 'FUMFTBLXWBXP0SET', '235', 'Mayfair Main Desk + ERU + Pedestal', 'Mayfair Main Desk + ERU + Pedestal', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm1.jpg', '1200 * 600 * 750 * 900 * 450 * 750 * 390 * 435 * 5', 'HOC', 22217.00, 0.00, '1', 22217.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '06:56:07', '2016-02-18 06:56:07', '', 1),
(42, 'FUMFTBLXWBXP3575', '235', 'Mayfair Main Desk', 'Mayfair Main Desk', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm2.jpg', '1350 * 750 * 750', 'HOC', 12125.00, 0.00, '1', 12125.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '07:00:41', '2016-02-18 07:00:41', '', 1),
(43, 'FUMFERUXWBXP1245   ', '235', 'Myfair ERU', 'Myfair ERU', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm3.jpg', '1200 * 450 * 750', 'HOC', 6609.00, 0.00, '1', 6609.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '07:03:31', '2016-02-18 07:03:31', '', 1),
(44, 'FUMFST1XWBXPXXXX', '235', 'Mayfair Back Unit', 'Mayfair Back Unit', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm4.jpg', '750 * 425 * 750', 'HOC', 11920.00, 0.00, '1', 11920.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '07:07:10', '2016-02-18 07:07:10', '', 1),
(45, 'FUMFPEDXWBXPXXXX', '235', 'Mayfair Pedestal', 'Mayfair Pedestal', 'An All Wood Executive Suite in Prelaminated Particle Board with PVC Lipping', 'MAYFAIR_sm5.jpg', '390 * 435 * 529', 'HOC', 8919.00, 0.00, '1', 8919.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-18', '07:11:35', '2016-02-18 07:11:35', '', 1),
(46, 'STELMD1XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Main Desk1', 'ELAN VENEER RANGE Elan Main Desk1', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm1.jpg', '1500*750*750', 'F53', 31097.00, 3187.00, '1', 34285.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:15:45', '2016-02-19 11:15:45', '', 1),
(47, 'STELMD2XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Main Desk2', 'ELAN VENEER RANGE Elan Main Desk2', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm2.jpg', '1650*880*750', 'F53', 39204.00, 4018.00, '1', 43223.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:28:04', '2016-02-19 11:28:04', '', 1),
(48, 'STELMD3XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Main Desk3', 'ELAN VENEER RANGE Elan Main Desk3', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm3.jpg', '2062*880*750', 'F53', 40520.00, 4153.00, '1', 44673.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:33:37', '2016-02-19 11:33:37', '', 1),
(49, 'STELER1XVAASNEWX', '240', 'ELAN VENEER RANGE Elan ERU-1', 'ELAN VENEER RANGE Elan ERU-1', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm4.jpg', '1200*450*750', 'F53', 15626.00, 1602.00, '1', 17228.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:35:40', '2016-02-19 11:35:40', '', 1),
(50, 'STELER2XVAASNEWX', '240', 'ELAN VENEER RANGE Elan ERU-2', 'ELAN VENEER RANGE Elan ERU-2', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm5.jpg', '1675*450*750', 'F53', 18109.00, 1856.00, '1', 19966.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:38:58', '2016-02-19 11:38:58', '', 1),
(51, 'STELER3XVAASNEWX', '240', 'ELAN VENEER RANGE Elan ERU-3', 'ELAN VENEER RANGE Elan ERU-3', 'Elegant combination of Melamine Coated Veneer Tops with Metal Understructure and a Perorated Modesty Panel', 'elan_prod_sm6.jpg', '900*450*750', 'F53', 14976.00, 1535.00, '1', 16511.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:41:10', '2016-02-19 11:41:10', '', 1),
(52, 'STELCR1XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Credenza-1', 'ELAN VENEER RANGE Elan Credenza-1', 'Back Unit with various combination of Glass Sliding Door Units and Pedestals with Veneer tops', 'elan_prod_sm7.jpg', '1188*440*750', 'F53', 27242.00, 2792.00, '1', 30034.00, '', 'Desking`', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:44:06', '2016-02-19 11:44:06', '', 1),
(53, 'STELCR2XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Credenza-2', 'ELAN VENEER RANGE Elan Credenza-2', 'Back Unit with various combination of Glass Sliding Door Units and Pedestals with Veneer tops', 'elan_prod_sm8.jpg', '1188*440*750', 'F53', 43265.00, 4435.00, '1', 47699.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '11:50:24', '2016-02-19 11:50:24', '', 1),
(54, 'STELCR3XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Credenza-3', 'ELAN VENEER RANGE Elan Credenza-3', 'Back Unit with various combination of Glass Sliding Door Units and Pedestals with Veneer tops', 'elan_prod_sm9.jpg', '1580*440*750', 'F53', 45875.00, 4702.00, '1', 50577.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:16:00', '2016-02-19 12:16:00', '', 1),
(55, 'STELCR4XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Credenza-4', 'ELAN VENEER RANGE Elan Credenza-4', 'Back Unit with various combination of Glass Sliding Door Units and Pedestals with Veneer tops', 'elan_prod_sm10.jpg', '1580*440*750', 'F53', 54555.00, 5592.00, '1', 60147.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:18:07', '2016-02-19 12:18:07', '', 1),
(56, 'STELCR5XVAASNEWX', '240', 'ELAN VENEER RANGE Elan Credenza-5', 'ELAN VENEER RANGE Elan Credenza-5', 'Back Unit with various combination of Glass Sliding Door Units and Pedestals with Veneer tops', 'elan_prod_sm11.jpg', '1580*440*750', 'F53', 37209.00, 3814.00, '1', 41023.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:19:58', '2016-02-19 12:19:58', '', 1),
(57, 'FUWORKA4020SOSIM', '235', 'Work 4020', 'Work 4020', 'An contemporary all wood desk with a 3 drawer pedestal and cutouts on side panel to allow flow of wires', 'Work_sm.jpg', '1200*600*740', 'HOC', 13354.00, 0.00, '1', 13354.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:21:32', '2016-02-19 12:21:32', '', 1),
(58, 'FUWORKB5026SOSIM', '235', 'Work 5026', 'Work 5026', 'An contemporary all wood desk with a 3 drawer pedestal and cutouts on side panel to allow flow of wires', 'Work_sm1.jpg', '1500*750*740', 'HOC', 17764.00, 0.00, '1', 17764.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:45:13', '2016-02-19 12:45:13', '', 1),
(59, 'FUTRIJ1XWGMSXXXX', '241', 'Trident Junior 1 Main Desk', 'Trident Junior 1 Main Desk', 'An Executive all wood suite in PLB with ample Storage Space both for the Junior as well as  the Middle Level Tables', 'trident_senior_prod_sm.jpg', '1200*600*743', '730', 11000.00, 1128.00, '1', 12128.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '12:47:05', '2016-02-19 12:47:05', '', 1),
(60, 'FUTRIJ2XWGMSXXXX', '241', 'Trident Junior 2 Main Desk', 'Trident Junior 2 Main Desk', 'An Executive all wood suite in PLB with ample Storage Space both for the Junior as well as  the Middle Level Tables', 'trident_senior_prod_sm1.jpg', '1500*750*743', '730', 14820.00, 1519.00, '1', 16339.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:04:35', '2016-02-19 01:04:35', '', 1),
(61, 'FUTRIMDRWGMSXXXX', '241', 'Trident Middle Main desk with ERU (RHS)', 'Trident Middle Main desk with ERU (RHS)', 'An Executive all wood suite in PLB with ample Storage Space both for the Junior as well as  the Middle Level Tables', 'trident_senior_prod_sm2.jpg', '1650*700*743 (Main Desk) 1000*450*743(ERU)', '730', 29082.00, 2981.00, '1', 32062.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:07:24', '2016-02-19 01:07:24', '', 1),
(62, 'FUTRIMDLWGMSXXXX', '241', 'Trident Middle Main desk with ERU (LHS)', 'Trident Middle Main desk with ERU (LHS)', 'An Executive all wood suite in PLB with ample Storage Space both for the Junior as well as  the Middle Level Tables', 'trident_senior_prod_sm3.jpg', '1650*700*743 (Main Desk) 1000*450*743(ERU)', '730', 29082.00, 2981.00, '1', 32062.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:11:14', '2016-02-19 01:11:14', '', 1),
(63, 'FUTRISDKWGMSXXXX', '241', 'Trident Senior  Main Desk', 'Trident Senior  Main Desk', 'All Wood suite with Scratch and Stain resistent Membrane Foil and rounded edges', 'trident_senior_prod_sm4.jpg', '1804*450*750', '730', 27963.00, 2866.00, '1', 30830.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:16:53', '2016-02-19 01:16:53', '', 1),
(64, 'FUTRISBUWGMSXXXX', '241', 'Trident Senior  Back Unit', 'Trident Senior  Back Unit', 'All Wood suite with Scratch and Stain resistent Membrane Foil and rounded edges', 'trident_senior_prod_sm5.jpg', '1804*450*750', '730', 17448.00, 1788.00, '1', 19236.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:20:53', '2016-02-19 01:20:53', '', 1),
(65, 'STT31XXX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-31', 'UNITIZED TABLES - MFG TABLE T-31', 'Wooden Top,Square tube understructure with a single/ three drawer option', 'godrej-interio-unitized-tables.jpg', '900*590*750', '730', 5976.00, 613.00, '2', 6588.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:23:42', '2016-02-19 01:23:42', '', 1),
(66, 'STT32XXX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-32', 'UNITIZED TABLES - MFG TABLE T-32', 'Wooden Top,Square tube understructure with a single/ three drawer option', 'godrej-interio-unitized-tables1.jpg', '900*590*750', '730', 7988.00, 819.00, '2', 8806.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:39:02', '2016-02-19 01:39:02', '', 1),
(67, 'STT111XX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-111', 'UNITIZED TABLES - MFG TABLE T-111', 'Wooden Top,Square tube understructure with a single/ three drawer option', 'godrej-interio-unitized-tables2.jpg', '1199*590*750', '730', 7547.00, 774.00, '2', 8320.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:40:41', '2016-02-19 01:40:41', '', 1),
(68, 'STT8XXXX047SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-8', 'UNITIZED TABLES - MFG TABLE T-8', 'Wooden top,Round tube understructure with option of three drawer unit on one (T-8) or both three and two drawer units (T-9)', 'office desk 1.jpg', '1199*590*735', '730', 9343.00, 958.00, '2', 10301.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:42:55', '2016-02-19 01:42:55', '', 1),
(69, 'STT9XXXX047SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-9', 'UNITIZED TABLES - MFG TABLE T-9', 'Wooden top,Round tube understructure with option of three drawer unit on one (T-8) or both three and two drawer units (T-9)', '', '', '730', 14753.00, 1512.00, '2', 16265.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:47:59', '2016-02-19 01:47:59', '', 1),
(70, 'STT101XX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-101', 'UNITIZED TABLES - MFG TABLE T-101', 'Wooden top,Round tube understructure with option of three drawer unit on one (T-101) or both three and two drawer units (T-102)', 'office desk 3.jpg', '1199*590*750', '730', 10048.00, 1030.00, '2', 11078.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:50:05', '2016-02-19 01:50:05', '', 1),
(71, 'STT102XX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-102', 'UNITIZED TABLES - MFG TABLE T-102', 'Wooden top,Round tube understructure with option of three drawer unit on one (T-101) or both three and two drawer units (T-102)', 'office desk 4.jpg', '1365*680*750', '730', 15074.00, 1545.00, '2', 16619.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:54:15', '2016-02-19 01:54:15', '', 1),
(72, 'STT104XX080SXXXX', '241', 'UNITIZED TABLES - MFG TABLE T-104', 'UNITIZED TABLES - MFG TABLE T-104', 'Wooden top,square tube understructure with three drawer unit on one the RHS and a 2 drawer unit on the LHS', 'office desk 5.jpg', '1665*900*750', '730', 18762.00, 1923.00, '1', 20685.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '01:56:46', '2016-02-19 01:56:46', '', 1),
(73, 'FUSTLWTXXBCHXXXX', '235', 'UNITIZED TABLES - MFG  STYLO', 'UNITIZED TABLES - MFG  STYLO', 'All Wood Table with an open shelf and CPU Storage on the RHS and a three drawer unit on the LHS', 'officedesk_stylo_large1.jpg', '1200*600*750', 'HOB', 9358.00, 0.00, '1', 9358.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-19', '02:02:09', '2016-02-19 02:02:09', '', 1),
(74, 'STENT1200XXDPSXX', '241', 'ENTERPRISE TABLES Entpr 1200 without CPU hanger', 'ENTERPRISE TABLES Entpr 1200 without CPU hanger', '', 'godrej-enterprise-table1.jpg', '1200*600*728', '730', 10012.00, 1026.00, '2', 11039.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:13:14', '2016-02-22 11:13:14', '', 1),
(75, 'STENT1350XXDPSXX', '241', 'ENTERPRISE TABLES Entpr 1350 without CPU hanger', 'ENTERPRISE TABLES Entpr 1350 without CPU hanger', '', 'godrej-enterprise-table2.jpg', '1350*750*728', '730', 11807.00, 1210.00, '2', 13017.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:16:54', '2016-02-22 11:16:54', '', 1),
(76, 'STENT1500CHDPSXX', '241', 'ENTERPRISE TABLES Entpr 1500 with CPU hanger', 'ENTERPRISE TABLES Entpr 1500 with CPU hanger', '', 'godrej-enterprise-table3.jpg', '1500*750*728', '730', 14304.00, 1466.00, '2', 15770.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:19:42', '2016-02-22 11:19:42', '', 1),
(77, 'STENT1500XXDPSXX', '241', 'ENTERPRISE TABLES Entpr 1500 without CPU hanger', 'ENTERPRISE TABLES Entpr 1500 without CPU hanger', '', 'godrej-enterprise-table4.jpg', '1500*750*728', '730', 13393.00, 1373.00, '2', 14766.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:22:24', '2016-02-22 11:22:24', '', 1),
(78, 'STENT1650CHDPSXX', '241', 'ENTERPRISE TABLES Entpr 1650 with CPU hanger', 'ENTERPRISE TABLES Entpr 1650 with CPU hanger', '', 'godrej-enterprise-table5.jpg', '1650*900*728', '730', 16904.00, 1733.00, '2', 18637.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:25:04', '2016-02-22 11:25:04', '', 1),
(79, 'STENT1650XXDPSXX', '241', 'ENTERPRISE TABLES Entpr 1650 without CPU hanger', 'ENTERPRISE TABLES Entpr 1650 without CPU hanger', '', 'godrej-enterprise-table6.jpg', '1650*900*728', '730', 15994.00, 1639.00, '2', 17633.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:32:39', '2016-02-22 11:32:39', '', 1),
(80, 'FUENZOMFBCHS4020', '235', 'Enzo Table 4020', 'Enzo Table 4020', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm1.jpg', '1200*600*750', 'HOB', 5772.00, 0.00, '1', 5772.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:34:15', '2016-02-22 11:34:15', '', 1),
(81, 'FUENZOMFBCHS4626', '235', 'Enzo Table 4525', 'Enzo Table 4525', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm2.jpg', '1350*750*750', 'HOB', 8667.00, 0.00, '1', 8667.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:40:08', '2016-02-22 11:40:08', '', 1),
(82, 'FUENZOMFBCHS5026', '235', 'Enzo Table 5026', 'Enzo Table 5026', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm3.jpg', '1500*750*750', 'HOB', 11584.00, 0.00, '1', 11584.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:43:43', '2016-02-22 11:43:43', '', 1),
(83, 'FUENZOMFMOCS4020', '235', 'Enzo Table 4020', 'Enzo Table 4020', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm4.jpg', '1200*600*750', 'HOB', 5772.00, 0.00, '1', 5772.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:45:28', '2016-02-22 11:45:28', '', 1),
(84, 'FUENZOMFMOCS4626', '235', 'Enzo Table 4525', 'Enzo Table 4525', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm5.jpg', '1350*750*750', 'HOB', 8667.00, 0.00, '1', 8667.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:47:46', '2016-02-22 11:47:46', '', 1),
(85, 'FUENZOMFMOCS5026', '235', 'Enzo Table 5026', 'Enzo Table 5026', 'All wood tables made of Pre laminated Particle boards with various combination of drawer units', 'enzo_prod_sm6.jpg', '1500*750*750', 'HOB', 11584.00, 0.00, '1', 11584.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:49:19', '2016-02-22 11:49:19', '', 1),
(86, 'FU711XXX080SXXXX', '241', 'WT SERIES Table WT-711', 'WT SERIES Table WT-711', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on LHS', 'wt_series_table.gif', '1345*760*735', '730', 22175.00, 2273.00, '1', 24448.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:50:43', '2016-02-22 11:50:43', '', 1),
(87, 'FU712XXX080SXXXX', '241', 'WT SERIES Table WT-712', 'WT SERIES Table WT-712', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on LHS', 'wt_series_table1.gif', '1505*760*735', '730', 22214.00, 2277.00, '1', 24491.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '11:57:16', '2016-02-22 11:57:16', '', 1),
(88, 'FU716XXX080SXXXX', '241', 'WT SERIES Table WT-716', 'WT SERIES Table WT-716', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on RHS', 'wt_series_table2.gif', '1665*900*735', '730', 31138.00, 3192.00, '1', 34330.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:01:40', '2016-02-22 12:01:40', '', 1),
(89, 'FU718XXX080SXXXX', '241', 'WT SERIES Table WT-718', 'WT SERIES Table WT-718', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on RHS', 'wt_series_table3.gif', '1800*900*735', '730', 32244.00, 3305.00, '1', 35549.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:03:28', '2016-02-22 12:03:28', '', 1),
(90, 'FU716AEX080SXXXX', '241', 'WT SERIES Table WT-716+LHS ERU', 'WT SERIES Table WT-716+LHS ERU', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on RHS and ERU on LHS', 'WOODEN-TABLES_01_big1.jpg', '1665*900*735 &  ERU 900*483*670', '730', 33607.00, 3445.00, '1', 37052.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:06:10', '2016-02-22 12:06:10', '', 1),
(91, 'FU716BEX080SXXXX', '241', 'WT SERIES Table WT-716+RHS ERU', 'WT SERIES Table WT-716+RHS ERU', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on LHS and ERU on RHS', 'WOODEN-TABLES_01_big2.jpg', '1665*900*735 &  ERU 900*483*670', '730', 33607.00, 3445.00, '1', 37052.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:11:32', '2016-02-22 12:11:32', '', 1),
(92, 'FU718AEX080SXXXX', '241', 'WT SERIES Table WT-718+LHS ERU', 'WT SERIES Table WT-718+LHS ERU', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on RHS and ERU on LHS', 'WOODEN-TABLES_01_big3.jpg', '1800*900*735 & ERU 900*483*670', '730', 35198.00, 3608.00, '1', 38805.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:15:02', '2016-02-22 12:15:02', '', 1),
(93, 'FU718BEX080SXXXX', '241', 'WT SERIES Table WT-718+RHS ERU', 'WT SERIES Table WT-718+RHS ERU', 'Wooden top,Drawer Facla,Side & Modesty Panels and drawer shell and Square tube frames with 3 drawer unit on LHS and ERU on RHS', 'WOODEN-TABLES_01_big4.jpg', '1800*900*735 & ERU 900*483*670', '730', 35198.00, 3608.00, '1', 38805.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:18:30', '2016-02-22 12:18:30', '', 1),
(94, 'FUIDEATE06OC00XX', '235', 'CONFERENCE Ideate 6 Seater w/o wire manager', 'CONFERENCE Ideate 6 Seater w/o wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big1.jpg', '2100W*1200D*750H', 'HOC', 18490.00, 0.00, '1', 18490.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:21:20', '2016-02-22 12:21:20', '', 1),
(95, 'FUIDEATE06OC01XX', '235', 'CONFERENCE Ideate 6 Seater with wire manager', 'CONFERENCE Ideate 6 Seater with wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big2.jpg', '2100W*1200D*750H', 'HOC', 20223.00, 0.00, '1', 20223.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:29:03', '2016-02-22 12:29:03', '', 1),
(96, 'FUIDEATE08OC00XX', '235', 'CONFERENCE Ideate 8 Seater w/o wire manager', 'CONFERENCE Ideate 8 Seater w/o wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big3.jpg', '2400W*1200D*750H', 'HOC', 22534.00, 0.00, '1', 22534.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:31:31', '2016-02-22 12:31:31', '', 1),
(97, 'FUIDEATE08OC01XX', '235', 'CONFERENCE Ideate 8 Seater with wire manager', 'CONFERENCE Ideate 8 Seater with wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big4.jpg', '2400W*1200D*750H', 'HOC', 24268.00, 0.00, '1', 24268.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:33:46', '2016-02-22 12:33:46', '', 1),
(98, 'FUIDEATE10OC00XX', '235', 'CONFERENCE Ideate 10 Seater w/o wire manager', 'CONFERENCE Ideate 10 Seater w/o wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big5.jpg', '2700W*1500D*750H', 'HOC', 31143.00, 0.00, '1', 31143.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:36:07', '2016-02-22 12:36:07', '', 1),
(99, 'FUIDEATE10OC02XX', '235', 'CONFERENCE Ideate 10 Seater with wire manager', 'CONFERENCE Ideate 10 Seater with wire manager', '6/8/10 seater All Wood Conference table available in WITH & WITHOUT wite management option', 'Ideate_big6.jpg', '2700W*1500D*750H', 'HOC', 34957.00, 0.00, '1', 34957.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:39:00', '2016-02-22 12:39:00', '', 1),
(100, 'FUENCARTWCBSXTRD', '235', 'Encarta Conference Table', 'Encarta Conference Table', 'PLB Modular Conference Table with dual colored Modesty Panel to improve aesthetics can be offered in various configurations with wire manager', 'ct1.jpg', '', 'HOC', 4928.00, 0.00, '1', 4928.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '12:56:57', '2016-02-22 12:56:57', '', 1),
(101, 'FUINSIG1VMKS06BC', '235', 'Talk Veneer 6 Seater Boat convex', 'Talk Veneer 6 Seater Boat convex', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'Talk_Pro_small 1.jpg', '2100*1200*750', 'HOC', 72863.00, 0.00, '1', 72863.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:02:58', '2016-02-22 01:02:58', '', 1),
(102, 'FUINSIG1VMKS08BC', '235', 'Talk Veneer 8 Seater Boat convex', 'Talk Veneer 8 Seater Boat convex', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'Talk_Pro_small 2.jpg', '2400*1200*750', 'HOC', 77855.00, 0.00, '1', 77855.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:10:27', '2016-02-22 01:10:27', '', 1),
(103, 'FUINSIG1VMKS08EL', '235', 'Talk Veneer 8 seater elliptical', 'Talk Veneer 8 seater elliptical', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'Talk_Pro_small 3.jpg', '2400*1200*750', 'HOC', 77855.00, 0.00, '1', 77855.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:12:52', '2016-02-22 01:12:52', '', 1),
(104, 'FUINSIG2VMKS10BC', '235', 'Talk Veneer 10 Seater Boat convex', 'Talk Veneer 10 Seater Boat convex', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision or ixing switches inside the access flap on the top', 'Talk_Pro_small 4.jpg', '3000*1200*750', 'HOC', 124258.00, 0.00, '1', 124258.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:15:24', '2016-02-22 01:15:24', '', 1),
(105, 'FUINSIG3VMKS12BC', '235', 'Talk Veneer 12 Seater Boat convex', 'Talk Veneer 12 Seater Boat convex', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'Talk_Pro_small 5.jpg', '3600*1200*750', 'HOC', 130853.00, 0.00, '1', 130853.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:17:49', '2016-02-22 01:17:49', '', 1),
(106, 'FUINSIG3VMKS14BC', '235', 'Talk Veneer 14 Seater Boat convex', 'Talk Veneer 14 Seater Boat convex', 'A Unitized Conference table with elegant Veneered Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'Talk_Pro_small 6.jpg', '4200*1200*750', 'HOC', 149254.00, 0.00, '1', 149254.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:19:33', '2016-02-22 01:19:33', '', 1),
(107, 'FUINSIG1MLOSC4RD', '235', 'Membrane 4 Seater Round POD 1200 Dia', 'Membrane 4 Seater Round POD 1200 Dia', '', 'talk-4-seater-round-1.jpg', '1200 dia*750', 'HOC', 35575.00, 0.00, '1', 35575.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:21:43', '2016-02-22 01:21:43', '', 1),
(108, 'FUINSIG1MLOSB4RD', '235', 'Membrane 4 Seater Round POD 1050 Dia', 'Membrane 4 Seater Round POD 1050 Dia', '', 'talk-4-seater-round-2.jpg', '1050 dia*750', 'HOC', 32588.00, 0.00, '1', 32588.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:27:13', '2016-02-22 01:27:13', '', 1),
(109, 'FUINSIG1MLOSC4SQ', '235', 'Membrane 4 Seater Square POD 1200W', 'Membrane 4 Seater Square POD 1200W', '', 'talk-4-seater-round-3.jpg', '1200*1200*750', 'HOC', 35575.00, 0.00, '1', 35575.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:29:10', '2016-02-22 01:29:10', '', 1),
(110, 'FUINSIG1MLOSB4SQ', '235', 'Membrane 4 Seater Square POD 1050W', 'Membrane 4 Seater Square POD 1050W', '', 'talk-4-seater-round-4.jpg', '1050*1050*750', 'HOC', 32588.00, 0.00, '1', 32588.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:31:26', '2016-02-22 01:31:26', '', 1),
(111, 'FUINSIG1MLOS06BC', '235', 'Talk Membrane 6 Seater Boat Convex', 'Talk Membrane 6 Seater Boat Convex', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big1.jpg', '2100*1200*750', 'HOC', 47391.00, 0.00, '1', 47391.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:33:04', '2016-02-22 01:33:04', '', 1),
(112, 'FUINSIG1MLOS08BC', '235', 'Talk Membrane 8 Seater Boat Convex', 'Talk Membrane 8 Seater Boat Convex', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big2.jpg', '2400*1200*750', 'HOC', 53880.00, 0.00, '1', 53880.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:39:25', '2016-02-22 01:39:25', '', 1),
(113, 'FUINSIG1MLOS08EL', '235', 'Talk Membrane 8 Seater Elliptical', 'Talk Membrane 8 Seater Elliptical', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big3.jpg', '2400*1200*750', 'HOC', 53880.00, 0.00, '1', 53880.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:41:13', '2016-02-22 01:41:13', '', 1),
(114, 'FUINSIG2MLOS10BC', '235', 'Talk Membrane 10 Seater Boat Convex', 'Talk Membrane 10 Seater Boat Convex', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big4.jpg', '3000*1200*750', 'HOC', 70757.00, 0.00, '1', 70757.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:42:56', '2016-02-22 01:42:56', '', 1),
(115, 'FUINSIG3MLOS12BC', '235', 'Talk Membrane 12 Seater Boat Convex', 'Talk Membrane 12 Seater Boat Convex', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big5.jpg', '3600*1200*750', 'HOC', 92182.00, 0.00, '1', 92182.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:44:39', '2016-02-22 01:44:39', '', 1),
(116, 'FUINSIG3MLOS14BC', '235', 'Talk Membrane 14 Seater Boat Convex', 'Talk Membrane 14 Seater Boat Convex', 'A Unitized Conference table with Elegant Membrane Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'TALK_big6.jpg', '4200*1200*750', 'HOC', 98677.00, 0.00, '1', 98677.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:46:19', '2016-02-22 01:46:19', '', 1),
(117, 'FUINSIG1LAESC4RD', '235', 'Talk Laminate 4 Seater Round POD 1200 Dia', 'Talk Laminate 4 Seater Round POD 1200 Dia', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate1.jpg', '1200 dia*750', 'HOC', 31885.00, 0.00, '1', 31885.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:47:42', '2016-02-22 01:47:42', '', 1),
(118, 'FUINSIG1LAESB4RD', '235', 'Talk Laminate 4 Seater Round POD 1050 Dia', 'Talk Laminate 4 Seater Round POD 1050 Dia', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate2.jpg', '1050 dia*750', 'HOC', 30333.00, 0.00, '1', 30333.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:52:26', '2016-02-22 01:52:26', '', 1),
(119, 'FUINSIG1LAESC4SQ', '235', 'Talk Laminate 4 Seater Square POD 1200W', 'Talk Laminate 4 Seater Square POD 1200W', '', 'laminate3.jpg', '1200*1200*750', 'HOC', 31885.00, 0.00, '1', 31885.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:54:00', '2016-02-22 01:54:00', '', 1),
(120, 'FUINSIG1LAESB4SQ', '235', 'Talk Laminate 4 Seater Square POD 1050 W', 'Talk Laminate 4 Seater Square POD 1050W', '', 'laminate4.jpg', '1050*1050*750', 'HOC', 30333.00, 0.00, '1', 30333.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:55:50', '2016-02-22 01:55:50', '', 1),
(121, 'FUTALKT1LAES06BC', '235', 'Talk Laminate  6 Seater Boat Convex', 'Talk Laminate  6 Seater Boat Convex', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate5.jpg', '2100*1200*750', 'HOC', 32453.00, 0.00, '1', 32453.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:57:24', '2016-02-22 01:57:24', '', 1),
(122, 'FUTALKT1LAES08BC', '235', 'Talk Laminate  8 Seater Boat Convex', 'Talk Laminate  8 Seater Boat Convex', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate6.jpg', '2400*1200*750 ', 'HOC', 36823.00, 0.00, '1', 36823.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '01:59:41', '2016-02-22 01:59:41', '', 1),
(123, 'FUTALKT1LAES08EL', '235', 'Talk Laminate  8 Seater Elliptical', 'Talk Laminate  8 Seater Elliptical', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate7.jpg', '2400*1200*750', 'HOC', 36823.00, 0.00, '1', 36823.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '02:01:29', '2016-02-22 02:01:29', '', 1),
(124, 'FUTALKT2LAES10BC', '235', 'Talk Laminate  10 Seater Boat Convex', 'Talk Laminate  10 Seater Boat Convex', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate8.jpg', '3000*1200*750', 'HOC', 49801.00, 0.00, '1', 49801.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '02:03:07', '2016-02-22 02:03:07', '', 1),
(125, 'FUTALKT3LAES12BC', '235', 'Talk Laminate  12 Seater Boat Convex', 'Talk Laminate  12 Seater Boat Convex', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate9.jpg', '3600*1200*750', 'HOC', 62786.00, 0.00, '1', 62786.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '02:04:41', '2016-02-22 02:04:41', '', 1),
(126, 'FUTALKT3LAES14BC', '235', 'Talk Laminate  14 Seater Boat Convex', 'Talk Laminate  14 Seater Boat Convex', 'A Unitized Conference table with Elegant Laminate Top and Aluminium Anodized Legs and PLT Modesty panel with wiremanagement and provision for fixing switches inside the access flap on the top', 'laminate10.jpg', '4200*1200*750', 'HOC', 69556.00, 0.00, '1', 69556.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-22', '02:06:06', '2016-02-22 02:06:06', '', 1),
(127, 'FUTALKMDMBMCN069', '235', 'Talk Modular Conference Tables Membrane Finish (Per seat price)', 'Talk Modular Conference Tables Membrane Finish (Per seat price)', 'Modular Conference Table with Membrane Top and Nickel Chrome Plated Squeeze Leg U/s and option of wooden / perfo Metal Modesty Panals', 'talk_modular_big1.jpg', '', 'HOC', 9869.00, 0.00, '1', 9869.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:14:19', '2016-02-25 11:14:19', '', 1),
(128, 'FUTALKMDMBLOSA69', '235', 'Top Modular 3 Seater POD Membrane Finish (900W)', 'Top Modular 3 Seater POD Membrane Finish (900W)', '3 Seater Table with options of Membrane / Laminate Tops with Nickel Chrome Plated Squeeze Leg U/s', 'talk_modular_big2.jpg', '', 'HOC', 13440.00, 0.00, '1', 13440.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:14:48', '2016-02-25 11:14:48', '', 1),
(129, 'FUTALKMDMBLOSB69', '235', 'Top Modular 3 Seater POD Membrane Finish (1500W)', 'Top Modular 3 Seater POD Membrane Finish (1500W)', '3 Seater Table with options of Membrane / Laminate Tops with Nickel Chrome Plated Squeeze Leg U/s', 'talk_modular_big3.jpg', '', 'HOC', 15011.00, 0.00, '1', 15011.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:19:29', '2016-02-25 11:19:29', '', 1),
(130, 'FUTALKMDDLAES069', '235', 'Talk Modular Conference Tables Laminate Finish (Per seat price)', 'Talk Modular Conference Tables Laminate Finish (Per seat price)', 'Modular Conference Table with Laminate Top and Nickel Chrome Plated Squeeze Leg U/s and option of wooden / perfo Metal Modesty Panals', 'TMCT_1.jpg', '', 'HOC', 9124.00, 0.00, '1', 9124.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:21:25', '2016-02-25 11:21:25', '', 1);
INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(131, 'FUTALKMDDLAESA69', '235', 'Talk Modular 3 Seater POD Laminate Finish', 'Talk Modular 3 Seater POD Laminate Finish', '3 Seater Table with options of Membrane / Laminate Tops with Nickel Chrome Plated Squeeze Leg U/s', 'TMCT_2.jpg', '', 'HOC', 12031.00, 0.00, '1', 12031.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:26:51', '2016-02-25 11:26:51', '', 1),
(132, 'FUTALKMDDLAESB69', '235', 'Talk Modular 3 Seater POD Laminate Finish', 'Talk Modular 3 Seater POD Laminate Finish', '3 Seater Table with options of Membrane / Laminate Tops with Nickel Chrome Plated Squeeze Leg U/s', 'TMCT_3.jpg', '', 'HOC', 12857.00, 0.00, '1', 12857.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:29:01', '2016-02-25 11:29:01', '', 1),
(133, 'FUUNLR1SHPXX0900', '235', 'Unlearn 1 Seater CPU / Laptop', 'Unlearn 1 Seater CPU / Laptop', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'Unlearn_Pastel_Blue1.jpg', '900*600*680', 'HOC', 16092.00, 0.00, '1', 16092.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:30:50', '2016-02-25 11:30:50', '', 1),
(134, 'FUUNLR2SHPXX1500', '235', 'Unlearn 2 Seater CPU', 'Unlearn 2 Seater CPU', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'Unlearn_Pastel_Blue2.jpg', '1500*600*680', 'HOC', 19437.00, 0.00, '1', 19437.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:38:51', '2016-02-25 11:38:51', '', 1),
(135, 'FUUNLR2SHPXX1350', '235', 'Unlearn 2 Seater Laptop', 'Unlearn 2 Seater Laptop', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'Unlearn_Pastel_Blue3.jpg', '1350*600*680', 'HOC', 18164.00, 0.00, '1', 18164.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:40:54', '2016-02-25 11:40:54', '', 1),
(136, 'FUUNLR3SHPXX2700', '235', 'Unlearn 3 Seater CPU / Laptop', 'Unlearn 3 Seater CPU / Laptop', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'UNLEARN 6 SEATER 1.jpg', '2700*600*680', 'HOC', 29694.00, 0.00, '1', 29694.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:42:35', '2016-02-25 11:42:35', '', 1),
(137, 'FUUNLR4SHPXX2700', '235', 'Unlearn 4 Seater Laptop', 'Unlearn 4 Seater Laptop', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'UNLEARN 6 SEATER 2.jpg', '2700*600*680', 'HOC', 35269.00, 0.00, '1', 35269.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:49:19', '2016-02-25 11:49:19', '', 1),
(138, 'FUUNLR4SHPXX3000', '235', 'Unlearn 4 Seater CPU', 'Unlearn 4 Seater CPU', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'UNLEARN 6 SEATER 3.jpg', '3000*600*680', 'HOC', 38874.00, 0.00, '1', 38874.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:51:21', '2016-02-25 11:51:21', '', 1),
(139, 'FUUNLR6HPXX4500', '235', 'Unlearn 6 Seater CPU', 'Unlearn 6 Seater CPU', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'UNLEARN 6 SEATER 4.jpg', '4500*600*680', 'HOC', 45323.00, 0.00, '1', 45323.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:53:54', '2016-02-25 11:53:54', '', 1),
(140, 'FUUNLR6HPXX4050', '235', 'Unlearn 6 Seater  Laptop', 'Unlearn 6 Seater  Laptop', 'Modular Training Tables with Wire Management and the Option of offering the Table for use with Laptops or Desktops', 'UNLEARN 6 SEATER 5.jpg', '4050*600*680', 'HOC', 40318.00, 0.00, '1', 40318.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:56:14', '2016-02-25 11:56:14', '', 1),
(141, 'FUCPODPUREDSCCNE', '235', 'Cafe Pod with MDF top PU Coated', 'Cafe Pod with MDF top PU Coated', 'Foldable,Stackable,Cafeteria Tables with PU Coated MDF / Rubberwood/ SS TOP', 'cafe-pod1.jpg', '800*800*745', 'HOC', 12823.00, 0.00, '1', 12823.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '11:58:08', '2016-02-25 11:58:08', '', 1),
(142, 'FUCPODRWNATSCCNE', '235', 'Cafe Pod with Rubberwood Top PU Coated', 'Cafe Pod with Rubberwood Top PU Coated', 'Foldable,Stackable,Cafeteria Tables with PU Coated MDF / Rubberwood/ SS TOP', 'cafe-pod2.jpg', '800*800*738', 'HOC', 12171.00, 0.00, '1', 12171.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:02:39', '2016-02-25 12:02:39', '', 1),
(143, 'FUCPODSSBSXSXXNE', '241', 'Cafe Pod with SS Top', 'Cafe Pod with SS Top', 'Foldable,Stackable,Cafeteria Tables with PU Coated MDF / Rubberwood/ SS TOP', 'cafe-pod3.jpg', '800*800*742.5', '730', 15725.00, 1612.00, '1', 17336.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:05:18', '2016-02-25 12:05:18', '', 1),
(144, 'FUTOUTPU4GRN1022', '235', 'Time Out 4 Seater PU Coated', 'Time Out 4 Seater PU Coated', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 1.jpg', '1135*1175*750', 'HOC', 12479.00, 0.00, '1', 12479.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:07:12', '2016-02-25 12:07:12', '', 1),
(145, 'FUTOUTPU6GRN1622', '235', 'Time Out 6 Seater PU Coated', 'Time Out 6 Seater PU Coated', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 2.jpg', '1734*1175*750', 'HOC', 18238.00, 0.00, '1', 18238.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:14:01', '2016-02-25 12:14:01', '', 1),
(146, 'FUTOUTPU8GRN2222', '235', 'Time Out 8 Seater PU Coated', 'Time Out 8 Seater PU Coated', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 3.jpg', '2329*1175*750', 'HOC', 23997.00, 0.00, '1', 23997.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:16:04', '2016-02-25 12:16:04', '', 1),
(147, 'FUTOUTMB4WNN1022', '235', 'Time Out 4 Seater Membrane', 'Time Out 4 Seater Membrane', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 4.jpg', '1135*1175*750', 'HOC', 17277.00, 0.00, '1', 17277.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:17:30', '2016-02-25 12:17:30', '', 1),
(148, 'FUTOUTMB6WNN1622', '235', 'Time Out 6 Seater Membrane', 'Time Out 6 Seater Membrane', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 5.jpg', '1734*1175*750', 'HOC', 22395.00, 0.00, '1', 22395.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:19:18', '2016-02-25 12:19:18', '', 1),
(149, 'FUTOUTMB8WNN2222', '235', 'Time Out 8 Seater Membrane', 'Time Out 8 Seater Membrane', 'Uniquely designed stackable Cafeteria Tables with PU Coated Top and Powder Coated MS Understructure', 'TIME OUT 6.jpg', '2329*1175*750', 'HOC', 27514.00, 0.00, '1', 27514.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:20:46', '2016-02-25 12:20:46', '', 1),
(150, 'FUCANCHXSBBSMECH', '235', 'Cantina Table with SS top and Blue Merit chair', 'Cantina Table with SS top and Blue Merit chair', 'Top is in stainless steel. Seats are offered in Plastic Shell Seats or SS Round Stool types and powder coated MS understructure', 'CANTINA_big1.jpg', '1180*1492*750', 'HOC', 24960.00, 0.00, '1', 24960.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:22:14', '2016-02-25 12:22:14', '', 1),
(151, 'FUCANCHXSBRSMECH', '235', 'Cantina Table with SS top and Red Merit  chair', 'Cantina Table with SS top and Red Merit  chair', 'Top is in stainless steel. Seats are offered in Plastic Shell Seats or SS Round Stool types and powder coated MS understructure', 'CANTINA_big2.jpg', '1180*1492*750', 'HOC', 24960.00, 0.00, '1', 24960.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:29:36', '2016-02-25 12:29:36', '', 1),
(152, 'FUCANCHXSBGSMECH', '235', 'Cantina Table with SS top and Green Merit  chair', 'Cantina Table with SS top and Green Merit  chair', 'Top is in stainless steel.Seats are offered in Plastic Shell Seats or SS Round Stool types and powder coated MS understructure', 'CANTINA_big3.jpg', '1180*1492*750', 'HOC', 24960.00, 0.00, '1', 24960.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:32:40', '2016-02-25 12:32:40', '', 1),
(153, 'FUCANCHXSBYSMECH', '235', 'Cantina Table with SS top and Yellow Merit  chair', 'Cantina Table with SS top and Yellow Merit  chair', 'Top is in stainless steel.Seats are offered in Plastic Shell Seats or SS Round Stool types and powder coated MS understructure', 'CANTINA_big4.jpg', '1180*1492*750', 'HOC', 24960.00, 0.00, '1', 24960.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:34:45', '2016-02-25 12:34:45', '', 1),
(154, 'FUCANSTXSBSS4026', '235', 'Catina Table with SS Top and SS Stools', 'Catina Table with SS Top and SS Stools', 'Top is in stainless steel.Seats are offered in Plastic Shell Seats or SS Round Stool types and powder coated MS understructure', 'CANTINA_big5.jpg', '1180*1580*750', 'HOC', 26744.00, 0.00, '1', 26744.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:37:21', '2016-02-25 12:37:21', '', 1),
(156, 'FURELISH4026SSXX', '235', 'Relish Table with SS top 1200W', 'Relish Table with SS top 1200W', 'Sleek and functional canteen table with SS top and MS Powder coated Understructure', 'Relish_big2.jpg', '1180*750*750', 'HOC', 16882.00, 0.00, '1', 16882.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:43:53', '2016-02-25 12:43:53', '', 1),
(157, 'FUV1BOATWXXSXTRD', '235', 'Versatila V1', 'Versatila V1', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big1.jpg', '2567*894*750', 'HOC', 17591.00, 0.00, '1', 17591.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:46:33', '2016-02-25 12:46:33', '', 1),
(158, 'FUV2XXXXWXXSXTRD', '235', 'Versatila V2', 'Versatila V2', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big2.jpg', '1500*894*750', 'HOC', 15884.00, 0.00, '1', 15884.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:53:20', '2016-02-25 12:53:20', '', 1),
(159, 'FUV3XXXXWXXSXTRD', '235', 'Versatile V3', 'Versatile V3', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big3.jpg', '894*894*750', 'HOC', 7948.00, 0.00, '1', 7948.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:55:07', '2016-02-25 12:55:07', '', 1),
(160, 'FUV4XXXXWXXSXTRD', '235', 'Versatila V4', 'Versatila V4', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big4.jpg', '894dia*750h', 'HOC', 9076.00, 0.00, '1', 9076.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:57:15', '2016-02-25 12:57:15', '', 1),
(161, 'FUV5XXXXWXXSXTRD', '235', 'Versatile V5', 'Versatile V5', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big5.jpg', '1018*1000*750', 'HOC', 11362.00, 0.00, '1', 11362.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '12:59:03', '2016-02-25 12:59:03', '', 1),
(162, 'FUV6XXXXWXXSXTRD', '235', 'Versatila v6', 'Versatila v6', 'Multipurpose tables suitable or canteen,Meeting Rooms etc with options of boat,Round,Square,Rectangular and triangular Shaped with PLB Tops and MS Understructure with Modesty Panel(only or V1 and V2)', 'V1_big6.jpg', '750dia*750h', 'HOC', 8661.00, 0.00, '1', 8661.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:00:51', '2016-02-25 01:00:51', '', 1),
(163, 'STRECRWX069S2ARC', '240', 'Reception Table 2 Arc Rubberwood Top', 'Reception Table 2 Arc Rubberwood Top', 'Reception Tables combining the elegance o Wood,Metal and Glass with tops in rubberwood or decorative Laminate', 'First_Impression 1.jpg', '', 'F53', 65142.00, 6677.00, '1', 71819.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:04:34', '2016-02-25 01:04:34', '', 1),
(164, 'STRECDLX069S2ARC', '240', 'Reception Table 2 Arc Decorative Laminate Top', 'Reception Table 2 Arc Decorative Laminate Top', 'Reception Tables combining the elegance o Wood,Metal and Glass with tops in rubberwood or decorative Laminate', 'First_Impression 2.jpg', '', 'F53', 48255.00, 4946.00, '1', 53202.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:18:43', '2016-02-25 01:18:43', '', 1),
(165, 'STRECRWX069S3ARC', '240', 'Reception Table 3 Arc Rubberwood Top', 'Reception Table 3 Arc Rubberwood Top', 'Reception Tables combining the elegance o Wood,Metal and Glass with tops in rubberwood or decorative Laminate', 'First_Impression 3.jpg', '', 'F53', 95928.00, 9833.00, '1', 105761.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:21:39', '2016-02-25 01:21:39', '', 1),
(166, 'STRECDLX069S3ARC', '240', 'Reception Table 3 Arc Decorative Laminate Top', 'Reception Table 3 Arc Decorative Laminate Top', 'Reception Tables combining the elegance o Wood,Metal and Glass with tops in rubberwood or decorative Laminate', 'First_Impression 4.jpg', '', 'F53', 71064.00, 7284.00, '1', 78348.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:31:36', '2016-02-25 01:31:36', '', 1),
(167, 'FUSCH2XGRBNXTRD', '235', 'Scholar 1048W Desk Cum Bench', 'Scholar 1048W Desk Cum Bench', 'Economical Desk cum Bench with PLB top and Metal U/s', 'SCHOLAR_big1.jpg', '1048*895*750', 'HOC', 6903.00, 0.00, '2', 6903.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:33:16', '2016-02-25 01:33:16', '', 1),
(168, 'FUSCH15GRBNXTRD', '235', 'Scholar 1500W Desk Cum Bench', 'Scholar 1500W Desk Cum Bench', 'Economical Desk cum Bench with PLB top and Metal U/s', 'SCHOLAR_big2.jpg', '1500*895*750', 'HOC', 10030.00, 0.00, '2', 10030.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:44:48', '2016-02-25 01:44:48', '', 1),
(169, 'FUSCHS3XGRBSXTRD', '235', 'Scholar 1800W Desk Cum Bench', 'Scholar 1800W Desk Cum Bench', 'Economical Desk cum Bench with PLB top and Metal U/s', 'Scholar_021.jpg', '1800*895*750', 'HOC', 11007.00, 0.00, '2', 11007.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:46:56', '2016-02-25 01:46:56', '', 1),
(170, 'FUWINSDXBBGSGXTRD', '235', 'Winner', 'Winner', 'Single Seater Independent Desk with PLB Top and MS U/s', 'WINNER.jpg', '600*400*740', 'HOC', 2891.00, 0.00, '1', 2891.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-25', '01:49:36', '2016-02-25 01:49:36', '', 1),
(171, 'STCHTB4XWMLSXXXX', '240', 'Champ Independent table 4 feet wide', 'Champ Independent table 4 feet wide', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big1.jpg', '1200*600*745', 'F53', 5758.00, 590.00, '1', 6348.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '10:44:12', '2016-02-29 10:44:12', '', 1),
(172, 'STCHTB3XWMLSXXXX', '240', 'Champ Independent table 3 feet wide', 'Champ Independent table 3 feet wide', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big2.jpg', '900*600*745', 'F53', 5195.00, 532.00, '1', 5727.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '10:52:48', '2016-02-29 10:52:48', '', 1),
(173, 'STCHWS4XWMLSXXXX', '240', 'Champ Wall Mounted Table 4 feet wide', 'Champ Wall Mounted Table 4 feet wide', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big3.jpg', '1200*600*745', 'F53', 2335.00, 239.00, '1', 2575.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '10:55:15', '2016-02-29 10:55:15', '', 1),
(174, 'STCHWS3XWMLSXXXX', '240', 'Champ Wall  Mounted Table 3 feet wide', 'Champ Wall  Mounted Table 3 feet wide', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big4.jpg', '900*600*745', 'F53', 2271.00, 233.00, '1', 2504.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '10:57:51', '2016-02-29 10:57:51', '', 1),
(175, 'STCHDUCXMLGSXXXX', '240', 'Champ Pedestal DUCN104 on glides', 'Champ Pedestal DUCN104 on glides', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big5.jpg', '355.5W*559D', 'F53', 4434.00, 454.00, '1', 4888.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:00:37', '2016-02-29 11:00:37', '', 1),
(176, 'STCHHDUXMLGSXXXX', '240', 'Champ Pedestal HDU on glides', 'Champ Pedestal HDU on glides', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big6.jpg', '355.5W*559D', 'F53', 3992.00, 409.00, '1', 4401.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:03:38', '2016-02-29 11:03:38', '', 1),
(177, 'STCHFAB3069SXXXX', '240', 'Champ Fabric Pin-up Board 3 feet', 'Champ Fabric Pin-up Board 3 feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big7.jpg', '895.2W*452.4H', 'F53', 1932.00, 198.00, '1', 2130.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:07:38', '2016-02-29 11:07:38', '', 1),
(178, 'STCHFAB4069SXXXX', '240', 'Champ Fabric Pin-up Board 4 feet', 'Champ Fabric Pin-up Board 4 feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big8.jpg', '1195.2W*452.4H', 'F53', 2118.00, 217.00, '1', 2335.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:11:03', '2016-02-29 11:11:03', '', 1),
(179, 'STCHMAG3069SXXXX', '240', 'Champ Magnetic white Board 3 feet', 'Champ Magnetic white Board 3 feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big9.jpg', '895.2W*452.4H', 'F53', 1683.00, 172.00, '1', 1855.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:15:28', '2016-02-29 11:15:28', '', 1),
(180, 'STCHMAG4069SXXXX', '240', 'Champ Magnetic White Board 4 feet', 'Champ Magnetic White Board 4 feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big10.jpg', '1195.2*452.4H', 'F53', 1907.00, 195.00, '1', 2102.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:18:36', '2016-02-29 11:18:36', '', 1),
(181, 'STCHOHU3MLGSXXXX', '240', 'Champ Overhead storage unit -3feet', 'Champ Overhead storage unit -3feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big11.jpg', '898*315*410', 'F53', 5905.00, 605.00, '1', 6510.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:23:26', '2016-02-29 11:23:26', '', 1),
(182, 'STCHOHU4MLGSXXXX', '240', 'Champ Overhead storage unit -4feet', 'Champ Overhead storage unit -4feet', 'A combination of free standing or wall mounted table with Pedestal,Overhead Storage Units and white Board or fabric tiles Ideal for a Hostel', 'CHAMP_big12.jpg', '1198*315*410', 'F53', 7428.00, 761.00, '1', 8189.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:26:40', '2016-02-29 11:26:40', '', 1),
(183, 'FULEADDSKLHXXOAK', '235', 'Lead Desk with ERU LHS Oak / White', 'Lead Desk with ERU LHS Oak / White', '', 'lead_big1.jpg', '2055*1800mm Ht 750mm', 'HOB', 61808.00, 0.00, '1', 61808.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:28:37', '2016-02-29 11:28:37', '', 1),
(184, 'FULEADDSKRHXXOAK', '235', 'Lead Desk with ERU RHS Oak / White', 'Lead Desk with ERU RHS Oak / White', '', 'lead_big2.jpg', '2055*1800mm Ht 750mm', 'HOB', 61808.00, 0.00, '1', 61808.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:32:48', '2016-02-29 11:32:48', '', 1),
(185, 'FUGIRAFOLDXX1200', '235', 'Fold W/O SHELF 1200', 'Fold W/O SHELF 1200', 'Foladable Table with Modesty Panel,2Nos Lockable Castors and with Shelf', 'training-room-tables-fold1.jpg', '1200mm*600mm*738mm', 'HOB', 22600.00, 0.00, '1', 22600.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:34:42', '2016-02-29 11:34:42', '', 1),
(186, 'FUGIRAFOLDXX1500', '235', 'Fold W/O SHELF 1500', 'Fold W/O SHELF 1500', 'Foladable Table with Modesty Panel,2Nos Lockable Castors and with Shelf', 'training-room-tables-fold2.jpg', '1500mm*600mm*738mm', 'HOB', 23600.00, 0.00, '1', 23600.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:40:46', '2016-02-29 11:40:46', '', 1),
(187, 'FUGIRAFOLDXX1800', '235', 'FOLD W/O SHELF 1800', 'FOLD W/O SHELF 1800', 'Foladable Table with Modesty Panel,2Nos Lockable Castors and with Shelf', 'training-room-tables-fold3.jpg', '1800mm*600mm*738mm', 'HOB', 24600.00, 0.00, '1', 24600.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:45:20', '2016-02-29 11:45:20', '', 1),
(188, 'FUCNCL0608ST1224', '241', 'CONCLVE 8 RECTA 1200D', 'CONCLVE 8 RECTA 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L1.jpg', '2400*1200*750', '730', 81990.00, 8404.00, '', 90394.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '11:49:22', '2016-02-29 11:49:22', '', 1),
(189, 'FUCNCL0608BC1224', '241', 'CONCLVE 8 B.CONV 1200D', 'CONCLVE 8 B.CONV 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L2.jpg', '2400*1200*750', '730', 81990.00, 8404.00, '', 90394.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:01:29', '2016-02-29 12:01:29', '', 1),
(190, 'FUCNCL0608ST1524', '241', 'CONCLVE 8 RECTA 1500D', 'CONCLVE 8 RECTA 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L3.jpg', '2400*1500*750', '730', 93046.00, 9537.00, '', 102583.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:05:35', '2016-02-29 12:05:35', '', 1),
(191, 'FUCNCL0608BC1524', '241', 'CONCLVE  8 B.CONV 1500D', 'CONCLVE  8 B.CONV 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L4.jpg', '2400*1500*750', '730', 93046.00, 9537.00, '', 102583.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:10:06', '2016-02-29 12:10:06', '', 1),
(192, 'FUCNCL0810ST1532', '241', 'CONCLVE 10 RECTA 1500D', 'CONCLVE 10 RECTA 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L5.jpg', '3200*1500*750', '730', 127954.00, 13115.00, '', 141069.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:14:11', '2016-02-29 12:14:11', '', 1),
(193, 'FUCNCL0810BC1532', '241', 'CONCLVE 10 B.CONV 1500D', 'CONCLVE 10 B.CONV 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L6.jpg', '3200*1500*750', '730', 127954.00, 13115.00, '', 141069.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:17:29', '2016-02-29 12:17:29', '', 1),
(194, 'FUCNCL0810ST1232', '241', 'CONCLVE 10 RECTA 1200D', 'CONCLVE 10 RECTA 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L7.jpg', '3200*1200*750', '730', 116152.00, 11906.00, '', 128058.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:20:26', '2016-02-29 12:20:26', '', 1),
(195, 'FUCNCL0810BC1232', '241', 'CONCLVE 10 B.CONV 1200D', 'CONCLVE 10 B.CONV 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L8.jpg', '3200*1200*750', '730', 116152.00, 11906.00, '', 128058.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:23:48', '2016-02-29 12:23:48', '', 1),
(196, 'FUCNCL1012ST1240', '241', 'CONCLVE 12 RECTA 1200D', 'CONCLVE 12 RECTA 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L9.jpg', '4000*1200*750', '730', 139134.00, 14261.00, '', 153395.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:28:49', '2016-02-29 12:28:49', '', 1),
(197, 'FUCNCL1012BC1240', '241', 'CONCLVE 12 B.CONV 1200D', 'CONCLVE 12 B.CONV 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L10.jpg', '4000*1200*750', '730', 139134.00, 14261.00, '', 153395.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:32:41', '2016-02-29 12:32:41', '', 1),
(198, 'FUCNCL1012ST1540', '241', 'CONCLVE 12 RECTA 1500D', 'CONCLVE 12 RECTA 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L11.jpg', '4000*1500*750', '730', 154041.00, 15789.00, '', 169831.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:34:58', '2016-02-29 12:34:58', '', 1),
(199, 'FUCNCL1012BC1540', '241', 'CONCLVE 12 B.CONV 1500D', 'CONCLVE 12 B.CONV 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L12.jpg', '4000*1500*750', '730', 154041.00, 15789.00, '', 169831.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:41:18', '2016-02-29 12:41:18', '', 1),
(200, 'FUCNCL1214ST1248', '241', 'CONCLVE 14 RECTA 1200D', 'CONCLVE 14 RECTA 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L13.jpg', '4800*1200*750', '730', 152799.00, 15662.00, '', 168461.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:44:03', '2016-02-29 12:44:03', '', 1),
(201, 'FUCNCL1214BC1248', '241', 'CONCLVE 14B.CONV 1200D', 'CONCLVE 14B.CONV 1200D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L14.jpg', '4800*1200*750', '730', 152799.00, 15662.00, '', 168461.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:49:38', '2016-02-29 12:49:38', '', 1),
(202, 'FUCNCL1214ST1548', '241', 'CONCLVE 14 RECTA 1500D', 'CONCLVE 14 RECTA 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L15.jpg', '4800*1500*750', '730', 170315.00, 17457.00, '', 187773.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:52:27', '2016-02-29 12:52:27', '', 1),
(203, 'FUCNCL1214BC1548', '241', 'CONCLVE 14B.CONV 1500D', 'CONCLVE 14B.CONV 1500D', 'Glass Top conference table with In-Built Wire Management', 'Conclave_L16.jpg', '4800*1500*750', '730', 170315.00, 17457.00, '', 187773.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '12:55:11', '2016-02-29 12:55:11', '', 1),
(204, 'FUIQ2FRTSCHOCXXX', '241', 'NAMASTE 2S Fronttype Choco', 'NAMASTE 2S Fronttype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste1.jpg', '1374*698.5*890', '730', 31944.00, 3274.00, '', 35218.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:00:53', '2016-02-29 01:00:53', '', 1),
(205, 'FUIQ2MRTSCHOCXXX', '241', 'NAMASTE 2S Midtype Choco', 'NAMASTE 2S Midtype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste2.jpg', '1374*1080*890', '730', 34348.00, 3521.00, '', 37869.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:07:53', '2016-02-29 01:07:53', '', 1),
(206, 'FUIQ2RRTSCHOCXXX', '241', 'NAMASTE 2S Reartype Choco', 'NAMASTE 2S Reartype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste3.jpg', '1374*751*890', '730', 31944.00, 3274.00, '', 35218.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:10:50', '2016-02-29 01:10:50', '', 1),
(207, 'FUIQ3FRTSCHOCXXX', '241', 'NAMASTE 3S Fronttype Choco', 'NAMASTE 3S Fronttype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste4.jpg', '2044*698.5*890', '730', 45737.00, 4688.00, '', 50425.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:13:47', '2016-02-29 01:13:47', '', 1),
(208, 'FUIQ3MRTSCHOCXXX', '241', 'NAMASTE 3S Midtype Choco', 'NAMASTE 3S Midtype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste5.jpg', '2044*1080*890', '730', 51431.00, 5272.00, '', 56702.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:16:32', '2016-02-29 01:16:32', '', 1),
(209, 'FUIQ3RRTSCHOCXXX', '241', 'NAMASTE 3S Reartype Choco', 'NAMASTE 3S Reartype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste6.jpg', '2044*751*890', '730', 45737.00, 4688.00, '', 50425.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:19:54', '2016-02-29 01:19:54', '', 1),
(210, 'FUIQ4FRTSCHOCXXX', '241', 'NAMASTE 4S Fronttype Choco', 'NAMASTE 4S Fronttype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste7.jpg', '2713*698.5*890', '730', 62369.00, 6393.00, '', 68762.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:22:19', '2016-02-29 01:22:19', '', 1),
(211, 'FUIQ4MRTSCHOCXXX', '241', 'NAMASTE 4S Midtype Choco', 'NAMASTE 4S Midtype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste8.jpg', '2713*1080*890', '730', 67304.00, 6899.00, '', 74203.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:25:41', '2016-02-29 01:25:41', '', 1),
(212, 'FUIQ4RRTSCHOCXXX', '241', 'NAMASTE 4S Reartype Choco', 'NAMASTE 4S Reartype Choco', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste9.jpg', '2713*751*890', '730', 62369.00, 6393.00, '', 68762.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:28:11', '2016-02-29 01:28:11', '', 1),
(213, 'FUIQSTBOLTXXXXXX', '241', 'NAMASTE STD BOLT PACKET(50pcs)', 'NAMASTE STD BOLT PACKET(50pcs)', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste10.jpg', 'NA', '730', 8787.00, 901.00, '', 9688.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:30:14', '2016-02-29 01:30:14', '', 1),
(214, 'FUIQCHBOLTXXXXXX', '241', 'NAMASTE CHEMICAL BOLT PACKET(20Pcs)', 'NAMASTE CHEMICAL BOLT PACKET(20Pcs)', 'Lecture Theatre Furniture with options of 2/3/4 seater and in-built Wire Management', 'Namaste11.jpg', 'NA', '730', 3515.00, 360.00, '', 3875.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:36:22', '2016-02-29 01:36:22', '', 1),
(215, 'FUORIONDTSOC0750', '241', 'DISCUSSION 750 SQUARE', 'DISCUSSION 750 SQUARE', 'Square Discussion Table', 'square1.jpg', '750*750*733', '730', 11830.00, 1213.00, '', 13043.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:53:51', '2016-02-29 01:53:51', '', 1),
(216, 'FUORIONDTSOC1050', '241', 'DISCUSSION 1050 SQUARE', 'Square Discussion Table', 'Square Discussion Table', 'square1.jpg', '1050*1050*733', '730', 13499.00, 1384.00, '', 14882.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-02-29', '01:56:20', '2016-02-29 01:56:20', '', 1),
(217, 'FUORIONASOCX0900', '241', 'Secondary Archival Storage', 'Secondary Archival Storage', '', 'secondary-archival-storage1.jpg', '900*1200*450', '730', 18392.00, 1885.00, '', 20277.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-01', '11:33:52', '2016-03-01 11:33:52', '', 1),
(218, 'FUORIONMDOC1500A', '241', 'Main Desk[L] 1500W*600D', 'Main Desk[L] 1500W*600D', '', 'Orion_L1.jpg', '1500*600*733', '730', 31827.00, 3262.00, '', 35089.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:35:11', '2016-03-02 10:35:11', '', 1),
(219, 'FUORIONMDOC1500Z', '241', 'Main Desk[R] 1500W*600D', 'Main Desk[R] 1500W*600D', '', 'Orion_L2.jpg', '1500*600*733', '730', 31827.00, 3262.00, '', 35089.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:43:11', '2016-03-02 10:43:11', '', 1),
(220, 'FUORIONMDOC1500B', '241', 'Main Desk[L] 1500W*750D', 'Main Desk[L] 1500W*750D', '', 'Orion_L3.jpg', '1500*750*733', '730', 33262.00, 3409.00, '', 36671.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:45:58', '2016-03-02 10:45:58', '', 1),
(221, 'FUORIONMDOC1500Y', '241', 'Main Desk[R] 1500W*750D', 'Main Desk[R] 1500W*750D', '', 'Orion_L4.jpg', '1500*750*733', '730', 33262.00, 3409.00, '', 36671.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:48:53', '2016-03-02 10:48:53', '', 1),
(222, 'FUORIONMDOC1650A', '241', 'Main Desk[L] 1650W*600D', 'Main Desk[L] 1650W*600D', '', 'Orion_L5.jpg', '1650*600*733', '730', 32740.00, 3356.00, '', 36096.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:52:51', '2016-03-02 10:52:51', '', 1),
(223, 'FUORIONMDOC1650Z', '241', 'Main Desk[R] 1650W*600D', 'Main Desk[R] 1650W*600D', '', 'Orion_L6.jpg', '1650*600*733', '730', 32740.00, 3356.00, '', 36096.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '10:59:35', '2016-03-02 10:59:35', '', 1),
(224, 'FUORIONMDOC1650B', '241', 'Main Desk[L] 1650W*750D', 'Main Desk[L] 1650W*750D', '', 'Orion_L7.jpg', '1650*750*733', '730', 33523.00, 3436.00, '', 36959.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:02:44', '2016-03-02 11:02:44', '', 1),
(225, 'FUORIONMDOC1650Y', '241', 'Main Desk[R] 1650W*750D', 'Main Desk[R] 1650W*750D', '', 'Orion_L8.jpg', '1650*750*733', '730', 33523.00, 3436.00, '', 36959.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:09:31', '2016-03-02 11:09:31', '', 1),
(226, 'FUORIONMDOC1800A', '241', 'Main desk[L]1800W*600D', 'Main desk[L]1800W*600D', '', 'Orion_L9.jpg', '1800*600*733', '730', 33653.00, 3449.00, '', 37103.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:12:34', '2016-03-02 11:12:34', '', 1),
(227, 'FUORIONMDOC1800Z', '241', 'Main desk[R]1800W*600D', 'Main desk[R]1800W*600D', '', 'Orion_L10.jpg', '1800*600*733', '730', 33653.00, 3449.00, '', 37103.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:22:31', '2016-03-02 11:22:31', '', 1),
(228, 'FUORIONMDOC1800B', '241', 'Main desk[L]1800W*750D', 'Main desk[L]1800W*750D', '', 'Orion_L11.jpg', '1800*750*733', '730', 35218.00, 3610.00, '', 38828.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:24:36', '2016-03-02 11:24:36', '', 1),
(229, 'FUORIONMDOC1800Y', '241', 'Main desk[R]1800W*750D', 'Main desk[R]1800W*750D', '', 'Orion_L12.jpg', '1800*750*733', '730', 35218.00, 3610.00, '', 38828.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:27:12', '2016-03-02 11:27:12', '', 1),
(230, 'FUORIONMDOC1950B', '241', 'Main desk[L]1950W*750D', 'Main desk[L]1950W*750D', '', 'Orion_L13.jpg', '1950*750*733', '730', 35218.00, 3610.00, '', 38828.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:29:26', '2016-03-02 11:29:26', '', 1),
(231, 'FUORIONMDOC1950Y', '241', 'Main desk[R]1950W*750D', 'Main desk[R]1950W*750D', '', 'Orion_L14.jpg', '1950*750*733', '730', 35218.00, 3610.00, '', 38828.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:31:23', '2016-03-02 11:31:23', '', 1),
(232, 'FUORIONMDOC2100B', '241', 'Main desk[L]2100W*750D', 'Main desk[L]2100W*750D', '', 'Orion_L15.jpg', '2100*750*733', '730', 36131.00, 3703.00, '', 39835.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:33:42', '2016-03-02 11:33:42', '', 1),
(233, 'FUORIONMDOC2100Y', '241', 'Main desk[R]2100W*750D', 'Main desk[R]2100W*750D', '', 'Orion_L16.jpg', '2100*750*733', '730', 36131.00, 3703.00, '', 39835.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:35:56', '2016-03-02 11:35:56', '', 1),
(234, 'FUGNI1RPC3XXXXX', '242', 'Genii 1strFR+RR PLT Choco SM3', 'Genii 1strFR+RR PLT Choco SM3', 'Single seater Sizemark-3,(Fornt +Rear) Modules - PLT', 'genii1.jpg', '620*1025*587', 'H27', 4122.00, 422.00, '2', 4544.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:37:33', '2016-03-02 11:37:33', '', 1),
(235, 'FUGNI1MDPC3XXXXX', '242', 'Genii 1strMid PLT Choco SM3', 'Genii 1strMid PLT Choco SM3', 'Single seater Sizemark-3,(Middle) Modules - PLT', 'genii2.jpg', '620*795*587', 'H27', 3248.00, 333.00, '2', 3581.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:51:55', '2016-03-02 11:51:55', '', 1),
(236, 'FUGNI1FRPC4XXXXX', '242', 'Genii 1strFR+RR PLT Choco SM4', 'Genii 1strFR+RR PLT Choco SM4', 'Single seater Sizemark-4,(Fornt +Rear) Modules - PLT', 'genii3.jpg', '620*1060*647', 'H27', 4189.00, 429.00, '2', 4618.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:55:27', '2016-03-02 11:55:27', '', 1),
(237, 'FUGNI1MDPC4XXXXX', '242', 'Genii 1strMid PLT Choco SM4', 'Genii 1strMid PLT Choco SM4', 'Single seater Sizemark-4,(Middle) Modules - PLT', 'genii4.jpg', '620*795*647', 'H27', 3315.00, 340.00, '2', 3655.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '11:59:35', '2016-03-02 11:59:35', '', 1),
(238, 'FUGNI1FRPC5XXXXX', '242', 'Genii 1strFR+RR PLT Choco SM5', 'Genii 1strFR+RR PLT Choco SM5', 'Single seater Sizemark-5,(Fornt +Rear) Modules - PLT', 'genii5.jpg', '620*1095*707', 'H27', 4290.00, 440.00, '2', 4729.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:02:10', '2016-03-02 12:02:10', '', 1),
(239, 'FUGNI1MDPC5XXXXX', '242', 'Genii 1strMid PLT Choco SM5', 'Genii 1strMid PLT Choco SM5', 'Single seater Sizemark-5,(Middle) Modules - PLT', 'genii6.jpg', '620*795*707', 'H27', 3394.00, 348.00, '2', 3741.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:04:28', '2016-03-02 12:04:28', '', 1),
(240, 'FUGNI2FRPC3XXXXX', '242', 'Genii 2strFR+RR PLT Choco SM3', 'Genii 2strFR+RR PLT Choco SM3', 'Two seater Sizemark-3,(Fornt +Rear) Modules - PLT', 'genii7.jpg', '940*1025*587', 'H27', 5544.00, 568.00, '2', 6112.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:08:30', '2016-03-02 12:08:30', '', 1),
(241, 'FUGNI2MDPC3XXXXX', '242', 'Genii 2strMid PLT Choco SM3', 'Genii 2strMid PLT Choco SM3', 'Two seater Sizemark-3,(Middle) Modules - PLT', 'genii8.jpg', '940*795*587', 'H27', 4222.00, 433.00, '2', 4655.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:12:27', '2016-03-02 12:12:27', '', 1),
(242, 'FUGNI2FRPC4XXXXX', '242', 'Genii 2strFR+RR PLT Choco SM4', 'Genii 2strFR+RR PLT Choco SM4', 'Two seater Sizemark-4,(Fornt +Rear) Modules - PLT', 'genii9.jpg', '1040*1060*647', 'H27', 5902.00, 605.00, '2', 6507.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:15:37', '2016-03-02 12:15:37', '', 1),
(243, 'FUGNI2MDPC4XXXXX', '242', 'Genii 2strMid PLT Choco SM4', 'Genii 2strMid PLT Choco SM4', 'Two seater Sizemark-4,(Middle) Modules - PLT', 'genii10.jpg', '1040*795*647', 'H27', 4536.00, 465.00, '2', 5001.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:18:47', '2016-03-02 12:18:47', '', 1),
(244, 'FUGNI2FRPC5XXXXX', '242', 'Genii 2strFR+RR PLT Choco SM5', 'Genii 2strFR+RR PLT Choco SM5', 'Two seater Sizemark-5,(Fornt +Rear) Modules - PLT', 'genii11.jpg', '1140*1095*707', 'H27', 6250.00, 641.00, '2', 6890.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:22:20', '2016-03-02 12:22:20', '', 1),
(245, 'FUGNI2MDPC5XXXXX', '242', 'Genii 2strMid PLT Choco SM5', 'Genii 2strMid PLT Choco SM5', 'Two seater Sizemark-5,(Middle) Modules - PLT', 'genii12.jpg', '1140*795*707', 'H27', 4816.00, 494.00, '2', 5310.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:25:59', '2016-03-02 12:25:59', '', 1),
(246, 'FUGNI3FRPC3XXXXX', '242', 'Genii 3strFR+RR PLT Choco SM3', 'Genii 3strFR+RR PLT Choco SM3', 'Three seater Sizemark-3,(Fornt +Rear) Modules - PLT', 'genii13.jpg', '1390*1025*587', 'H27', 7291.00, 747.00, '2', 8039.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:28:17', '2016-03-02 12:28:17', '', 1),
(247, 'FUGNI3MDPC3XXXXX', '242', 'Genii 3strMid PLT Choco SM3', 'Genii 3strMid PLT Choco SM3', 'Three seater Sizemark-3,(Middle) Modules - PLT', 'genii14.jpg', '1390*795*587', 'H27', 5768.00, 591.00, '2', 6359.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:32:06', '2016-03-02 12:32:06', '', 1),
(248, 'FUGNI3FRPC4XXXXX', '242', 'Genii 3strFR+RR PLT Choco SM4', 'Genii 3strFR+RR PLT Choco SM4', 'Three seater Sizemark-4,(Fornt +Rear) Modules - PLT', 'genii15.jpg', '1540*1060*647', 'H27', 7773.00, 797.00, '2', 8570.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:34:39', '2016-03-02 12:34:39', '', 1),
(249, 'FUGNI3MDPC4XXXXX', '242', 'Genii 3strMid PLT Choco SM4', 'Genii 3strMid PLT Choco SM4', 'Three seater Sizemark-4,(Middle) Modules - PLT', 'genii16.jpg', '1540*795*647', 'H27', 6182.00, 634.00, '2', 6816.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:38:34', '2016-03-02 12:38:34', '', 1),
(250, 'FUGNI3FRPC5XXXXX', '242', 'Genii 3strFR+RR PLT Choco SM5', 'Genii 3strFR+RR PLT Choco SM5', 'Three seater Sizemark-5,(Fornt +Rear) Modules - PLT', 'genii17.jpg', '1690*1095*707', 'H27', 8288.00, 850.00, '2', 9138.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:40:52', '2016-03-02 12:40:52', '', 1),
(251, 'FUGNI3MDPC5XXXXX', '242', 'Genii 3strMid PLT Choco SM5', 'Genii 3strMid PLT Choco SM5', 'Three seater Sizemark-5,(Middle) Modules - PLT', 'genii18.jpg', '1690*795*707', 'H27', 6608.00, 677.00, '2', 7285.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:44:26', '2016-03-02 12:44:26', '', 1),
(252, 'FUGNI1FRCC3XXXXX', '242', 'Genii 1str FR+RRCLAM Choco SM3', 'Genii 1str FR+RRCLAM Choco SM3', 'Single seater Sizemark-3,(Fornt +Rear) Modules - Compact Laminate', 'genii19.jpg', '620*1025*580', 'H27', 7538.00, 773.00, '2', 8310.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:47:12', '2016-03-02 12:47:12', '', 1),
(253, 'FUGNI1MDCC3XXXXX', '242', 'Genii 1str Mid CLAM Choco SM3', 'Genii 1str Mid CLAM Choco SM3', 'Single seater Sizemark-3,(Middle) Modules - Compact Laminate', 'genii20.jpg', '620*795*580', 'H27', 6149.00, 630.00, '2', 6779.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:52:43', '2016-03-02 12:52:43', '', 1),
(254, 'FUGNI1FRCC4XXXXX', '242', 'Genii 1str FR+RRCLAM Choco SM4', 'Genii 1str FR+RRCLAM Choco SM4', 'Single seater Sizemark-4,(Fornt +Rear) Modules - Compact Laminate', 'genii21.jpg', '620*1060*640', 'H27', 7616.00, 781.00, '2', 8397.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:55:09', '2016-03-02 12:55:09', '', 1),
(255, 'FUGNI1MDCC4XXXXX', '242', 'Genii 1str Mid CLAM Choco SM4', 'Genii 1str Mid CLAM Choco SM4', 'Single seater Sizemark-4,(Middle) Modules - Compact Laminate', 'genii22.jpg', '620*795*640', 'H27', 6227.00, 638.00, '2', 6865.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '12:58:32', '2016-03-02 12:58:32', '', 1),
(256, 'FUGNI1FRCC5XXXXX', '242', 'Genii 1str FR+RRCLAM Choco SM5', 'Genii 1str FR+RRCLAM Choco SM5', 'Single seater Sizemark-5,(Fornt +Rear) Modules - Compact Laminate', 'genii23.jpg', '620*1095*700', 'H27', 7706.00, 790.00, '2', 8495.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:02:06', '2016-03-02 01:02:06', '', 1),
(257, 'FUGNI1MDCC5XXXXX', '242', 'Genii 1str Mid CLAM Choco SM5', 'Genii 1str Mid CLAM Choco SM5', 'Single seater Sizemark-5,(Middle) Modules - Compact Laminate', 'genii24.jpg', '620*795*700', 'H27', 6283.00, 644.00, '2', 6927.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:04:46', '2016-03-02 01:04:46', '', 1),
(258, 'FUGNI2FRCC3XXXXX', '242', 'Genii 2str FR+RRCLAM Choco SM3', 'Genii 2str FR+RRCLAM Choco SM3', 'Two seater Sizemark-3,(Fornt +Rear) Modules - Compact Laminate', 'genii25.jpg', '940*1025*580', 'H27', 11301.00, 1158.00, '2', 12459.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:07:20', '2016-03-02 01:07:20', '', 1),
(259, 'FUGNI2MDCC3XXXXX', '242', 'Genii 2str Mid CLAM Choco SM3', 'Genii 2str Mid CLAM Choco SM3', 'Two seater Sizemark-3,(Middle) Modules - Compact Laminate', 'genii26.jpg', '940*795*580', 'H27', 9240.00, 947.00, '2', 10187.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:11:13', '2016-03-02 01:11:13', '', 1),
(260, 'FUGNI2FRCC4XXXXX', '242', 'Genii 2str FR+RRCLAM Choco SM4', 'Genii 2str FR+RRCLAM Choco SM4', 'Two seater Sizemark-4,(Fornt +Rear) Modules - Compact Laminate', 'genii27.jpg', '1040*1060*640', 'H27', 12320.00, 1263.00, '2', 13583.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:13:26', '2016-03-02 01:13:26', '', 1),
(261, 'FUGNI2MDCC4XXXXX', '242', 'Genii 2str Mid CLAM Choco SM4', 'Genii 2str Mid CLAM Choco SM4', 'Two seater Sizemark-4,(Middle) Modules - Compact Laminate', 'genii28.jpg', '1040*795*640', 'H27', 9822.00, 1007.00, '2', 10829.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:16:05', '2016-03-02 01:16:05', '', 1),
(262, 'FUGNI2FRCC5XXXXX', '242', 'Genii 2str FR+RRCLAM Choco SM5', 'Genii 2str FR+RRCLAM Choco SM5', 'Two seater Sizemark-5,(Fornt +Rear) Modules - Compact Laminate', 'genii29.jpg', '1140*1095*700', 'H27', 13776.00, 1412.00, '2', 15188.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:17:49', '2016-03-02 01:17:49', '', 1),
(263, 'FUGNI2MDCC5XXXXX', '242', 'Genii 2str Mid CLAM Choco SM5', 'Genii 2str Mid CLAM Choco SM5', 'Two seater Sizemark-5,(Middle) Modules - Compact Laminate', 'genii30.jpg', '1140*795*700', 'H27', 10808.00, 1108.00, '2', 11916.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:19:54', '2016-03-02 01:19:54', '', 1),
(264, 'FUVE2FRTSNVERXXX', '241', 'NAMASTE-II 2S  Fronttype N VER', 'NAMASTE-II 2S  Fronttype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg1.jpg', '1378*528*800', '730', 25074.00, 2570.00, '', 27644.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:21:31', '2016-03-02 01:21:31', '', 1),
(265, 'FUVE2MRTSNVERXXX', '241', 'NAMASTE-II 2S  Midtype N VER', 'NAMASTE-II 2S  Midtype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg2.jpg', '1378*520*890', '730', 26964.00, 2764.00, '', 29728.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:26:40', '2016-03-02 01:26:40', '', 1),
(266, 'FUVE2RRTSNVERXXX', '241', 'NAMASTE- II 2S Reartype N VER', 'NAMASTE- II 2S Reartype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg3.jpg', '1378*750*890', '730', 25074.00, 2570.00, '', 27644.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:30:24', '2016-03-02 01:30:24', '', 1),
(267, 'FUVE3FRTSNVERXXX', '241', 'NAMASTE-II 3S Fronttype N VER', 'NAMASTE-IIn 3S Fronttype N VER', 'Leature Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg4.jpg', '2048*528*890', '730', 35905.00, 3680.00, '', 39585.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:32:41', '2016-03-02 01:32:41', '', 1),
(268, 'FUVE3MRTSNVERXXX', '241', 'NAMASTE-II 3S Midtype N VER', 'NAMASTE-II 3S Midtype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg5.jpg', '2048*520*890', '730', 40373.00, 4138.00, '', 44511.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:35:58', '2016-03-02 01:35:58', '', 1),
(269, 'FUVE3RRTSNVERXXX', '241', 'NAMASTE- II 3S Reartype N VER', 'NAMASTE- II 3S Reartype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg6.jpg', '2048*750*890*', '730', 35905.00, 3680.00, '', 39585.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:37:32', '2016-03-02 01:37:32', '', 1),
(270, 'FUVE4FRTSNVERXXX', '241', 'NAMASTE-II 4S  Fronttype N VER', 'NAMASTE-II 4S  Fronttype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg7.jpg', '2720*528*890', '730', 48962.00, 5019.00, '', 53980.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:39:25', '2016-03-02 01:39:25', '', 1),
(271, 'FUVE4MRTSNVERXXX', '241', 'NAMASTE-II 4S  Midtype N VER', 'NAMASTE-II 4S  Midtype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg8.jpg', '2720*520*890', '730', 52836.00, 5416.00, '', 58252.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:42:49', '2016-03-02 01:42:49', '', 1),
(272, 'FUVE4RRTSNVERXXX', '241', 'NAMASTE- II 4S Reartype N VER', 'NAMASTE- II 4S Reartype N VER', 'Lecture Theatre Furniture with options of 2/3/4 seater', '2_STR_2_Lrg9.jpg', '2720*750*890', '730', 48962.00, 5019.00, '', 53980.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-02', '01:45:04', '2016-03-02 01:45:04', '', 1),
(273, 'FULYDSXX059SXXXX', '235', 'Viva Executive Desk', 'Viva Executive Desk', 'Unique Kidey Bean shaped top with ample storage underneath the table as well as the ERU', 'Viva_big.jpg', '2000*1000*755', 'HOB', 26561.00, 0.00, '1', 26561.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-05', '05:19:01', '2016-03-05 05:19:01', '', 1);
INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(274, 'FULYMPED059SXXXX', '235', 'Viva Mobile Pedestal', 'Viva Mobile Pedestal', 'Unique Kidey Bean shaped top with ample storage underneath the table as well as the ERU', 'Viva_big1.jpg', '406*550*585', 'HOB', 11082.00, 0.00, '1', 11082.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-05', '05:25:34', '2016-03-05 05:25:34', '', 1),
(275, 'FULYERUL059SXXXX', '235', 'Viva Side Return unit with Pedestal (LHS)', 'Viva Side Return unit with Pedestal (LHS)', 'Unique Kidey Bean shaped top with ample storage underneath the table as well as the ERU', 'Viva_big2.jpg', '1380*600*750', 'HOB', 19124.00, 0.00, '1', 19124.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-05', '05:29:58', '2016-03-05 05:29:58', '', 1),
(276, 'FULYERUR059SXXXX', '235', 'Viva Side Return unit with Pedestal (RHS)', 'Viva Side Return unit with Pedestal (RHS)', 'Unique Kidey Bean shaped top with ample storage underneath the table as well as the ERU', 'Viva_big3.jpg', '1380*600*750', 'HOB', 19124.00, 0.00, '1', 19124.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-05', '05:34:31', '2016-03-05 05:34:31', '', 1),
(277, 'FULYBUXX059SXXXX', '235', 'Viva Credenza', 'Viva Credenza', 'Credenza with an open shelf and two Hinge door', 'Viva_big4.jpg', '1380*515*610', 'HOB', 19734.00, 0.00, '1', 19734.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-05', '05:37:47', '2016-03-05 05:37:47', '', 1),
(278, 'FUPRMDESKWNG12XX', '235', 'Duke Main Desk', 'Duke Main Desk', 'An Executive Suite combining the elegance of Glass,Metal and Hardwood in a Unique Trapezoidal shape with a triple Layered Structure', 'Duke_big.jpg', '2000*900*750', 'HOB', 134702.00, 0.00, '1', 134702.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '11:27:22', '2016-03-07 11:27:22', '', 1),
(279, 'FUPRMERUXWNG12XX', '235', 'Duke ERU', 'Duke ERU', 'An Executive Suite combining the elegance of Glass,Metal and Hardwood in a Unique Trapezoidal shape with a triple Layered Structure', 'Duke_big2.jpg', '1050*470*750', 'HOB', 30967.00, 0.00, '1', 30967.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '11:33:29', '2016-03-07 11:33:29', '', 1),
(280, 'FUPRMBUXXWNG12XX', '235', 'Duke Back Unit', 'Duke Back Unit', 'An Executive Suite combining the elegance of Glass,Metal and Hardwood in a Unique Trapezoidal shape with a triple Layered Structure', 'Duke_big3.jpg', '2000*470*850', 'HOB', 57281.00, 0.00, '1', 57281.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '11:37:26', '2016-03-07 11:37:26', '', 1),
(281, 'FUPRMCTXXWNG12XX', '235', 'Duke Coffee Table', 'Duke Coffee Table', 'An Executive Suite combining the elegance of Glass,Metal and Hardwood in a Unique Trapezoidal shape with a triple Layered Structure', 'Duke_big4.jpg', '800*500*450', 'HOB', 20390.00, 0.00, '1', 20390.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '11:40:25', '2016-03-07 11:40:25', '', 1),
(282, 'FUSENMNXBCHSNWXX', '235', 'Senate Conference Table without Wire manager', 'Senate Conference Table without Wire manager', 'Membrane foiled Modular Conference Table. Can be offered in various configurations with or without wire manager', 'Senate.jpg', '', 'HOC', 7881.00, 0.00, '1', 7881.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '03:38:42', '2016-03-07 03:38:42', '', 1),
(283, 'FUSENMNXBCHSNWWM', '235', 'Senate Conference Table with Wire manager', 'Senate Conference Table with Wire manager', 'Membrane foiled Modular Conference Table. Can be offered in various configurations with or without wire manager', 'Senate1.jpg', '', 'HOC', 8168.00, 0.00, '1', 8168.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '03:45:36', '2016-03-07 03:45:36', '', 1),
(284, 'FULECTURHDGSXXXX', '235', 'Lectura table with Castors', 'Lectura table with Castors', 'Trapezoidal Table with castors', 'Lectura_L.jpg', '1350*445*750', 'HOC', 7147.00, 0.00, '1', 7147.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '03:49:08', '2016-03-07 03:49:08', '', 1),
(285, 'FUV3XXXXWCMSXTRD', '235', 'Versatila V3', 'Versatila V3', 'Multipurpose tables suitable for Canteen, Meeting Rooms etc with options of Round, square, Rectangular and Triangular  Shaped with Membrane Tops and MS Understructure', 'Versatila_L.jpg', '894*894*750', 'HOC', 10514.00, 0.00, '1', 10514.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '06:17:04', '2016-03-07 06:17:04', '', 1),
(286, 'FUV4XXXXWCMSXTRD', '235', 'Versatila V4', 'Versatila V4', 'Multipurpose tables suitable for Canteen, Meeting Rooms etc with options of Round, square, Rectangular and Triangular  Shaped with Membrane Tops and MS Understructure', 'Versatila_L1.jpg', '894 dia * 750h', 'HOC', 10880.00, 0.00, '1', 10880.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '06:38:51', '2016-03-07 06:38:51', '', 1),
(287, 'FUV5XXXXWCMSXTRD', '235', 'Versatila V5', 'Versatila V5', 'Multipurpose tables suitable for Canteen, Meeting Rooms etc with options of Round, square, Rectangular and Triangular  Shaped with Membrane Tops and MS Understructure', 'Versatila_L2.jpg', '1018*1000*750', 'HOC', 14464.00, 0.00, '1', 14464.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '06:41:47', '2016-03-07 06:41:47', '', 1),
(288, 'FUV6XXXXWCMSXTRD', '235', 'Versatila V6', 'Versatila V6', 'Multipurpose tables suitable for Canteen, Meeting Rooms etc with options of Round, square, Rectangular and Triangular  Shaped with Membrane Tops and MS Understructure', 'Versatila_L3.jpg', '750 dia * 750h', 'HOC', 9905.00, 0.00, '1', 9905.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '06:44:14', '2016-03-07 06:44:14', '', 1),
(289, 'FUINSIGHT0900BBX', '235', 'Insight 900W', 'Insight 900W', 'Multipurpose Tables with PLB loops with rounded edges and Powder coated MS Understructure', 'INSIGHT.jpg', '900*900*740', 'HOC', 6194.00, 0.00, '1', 6194.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '06:47:19', '2016-03-07 06:47:19', '', 1),
(290, 'FUINSIGHT1665BBX', '235', 'Insight 1665W', 'Insight 1665W', 'Multipurpose Tables with PLB loops with rounded edges and Powder coated MS Understructure', 'INSIGHT1.jpg', '1665*900*740', 'HOC', 8621.00, 0.00, '1', 8621.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '07:05:21', '2016-03-07 07:05:21', '', 1),
(291, 'FUINSIGHT1800BBX', '235', 'Insight 1800W', 'Insight 1800W', 'Multipurpose Tables with PLB loops with rounded edges and Powder coated MS Understructure', 'INSIGHT2.jpg', '1800*900*740', 'HOC', 9416.00, 0.00, '1', 9416.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '07:08:17', '2016-03-07 07:08:17', '', 1),
(292, 'STELMD1DLRPSXXXX', '240', 'Elan Main Desk-1', 'Elan Main Desk-1', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range.png', '1500*800*750', 'F53', 19363.00, 1985.00, '1', 21348.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '07:10:44', '2016-03-07 07:10:44', '', 1),
(293, 'STELMD2DLRPSXXXX', '240', 'Elan Main Desk-2', 'Elan Main Desk-2', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range1.png', '1800*800*750', 'F53', 20273.00, 2078.00, '1', 22351.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-07', '07:44:10', '2016-03-07 07:44:10', '', 1),
(294, 'FUORIONDTCOC0750', '241', 'DISCUSSION 750 CIRCULAR', 'DISCUSSION 750 CIRCULAR', 'Round  Discussion table', 'round1.jpg', '750Dia*733 H', '730', 10826.00, 1110.00, '', 11936.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-08', '04:17:18', '2016-03-08 04:17:18', '', 1),
(295, 'FUORIONDTCOC0900', '241', 'DISCUSSION 900 CIRCULAR', 'DISCUSSION 900 CIRCULAR', 'Round Discussion Table', 'round2.jpg', '900 Dia*733 H', '730', 11609.00, 1190.00, '', 12799.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-08', '04:26:32', '2016-03-08 04:26:32', '', 1),
(296, 'FUORIONDTCOC1050', '241', 'DISCUSSION 1050 CIRCULAR', 'DISCUSSION 1050 CIRCULAR', 'Round Discussion Table', 'round3.jpg', '1050 Dia*733 H', '730', 11830.00, 1213.00, '', 13043.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-08', '04:32:00', '2016-03-08 04:32:00', '', 1),
(298, 'STELMD3DLRPSXXXX', '240', 'Elan Main Desk-1', 'Elan Main Desk-1', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range2.png', '2400*800*750', 'F53', 21702.00, 2224.00, '1', 23927.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:00:30', '2016-03-09 03:00:30', '', 1),
(299, 'STELER1DLRPSXXXX', '240', 'Elan ERU-1', 'Elan ERU-1', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range3.png', '1200*600*750', 'F53', 6704.00, 687.00, '1', 7391.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:11:11', '2016-03-09 03:11:11', '', 1),
(300, 'STELER2DLRPSXXXX', '240', 'Elan ERU-2', 'Elan ERU-2', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range4.png', '1675*600*750', 'F53', 7147.00, 733.00, '1', 7880.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:22:37', '2016-03-09 03:22:37', '', 1),
(301, 'STELER3DLRPSXXXX', '240', 'Elan ERU-3', 'Elan ERU-3', 'Elegant Combination of Laminate Tops with Metal Understructure and a Perforated Modesty Panel', 'Elan laminate Range5.png', '900*600*750', 'F53', 5198.00, 533.00, '1', 5731.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:26:22', '2016-03-09 03:26:22', '', 1),
(302, 'STELCR1DLRPSXXXX', '240', 'Elan Credenza-1', 'Elan Credenza-1', 'Back Unit with various combinations of Glass Sliding Door Units and Pedestals with Laminate tops', 'Elan laminate Range6.png', '1188*441*750', 'F53', 9422.00, 966.00, '1', 10388.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:31:13', '2016-03-09 03:31:13', '', 1),
(303, 'STELCR2DLRPSXXXX', '240', 'Elan Credenza-2', 'Elan Credenza-2', 'Back Unit with various combinations of Glass Sliding Door Units and Pedestals with Laminate tops', 'Elan laminate Range7.png', '1188*441*750', 'F53', 23652.00, 2424.00, '1', 26076.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:38:27', '2016-03-09 03:38:27', '', 1),
(304, 'STELCR3DLRPSXXXX', '240', 'Elan Credenza-3', 'Elan Credenza-3', 'Back Unit with various combinations of Glass Sliding Door Units and Pedestals with Laminate tops', 'Elan laminate Range8.png', '1581*441*750', 'F53', 21962.00, 2251.00, '1', 24213.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:43:45', '2016-03-09 03:43:45', '', 1),
(305, 'STELCR4DLRPSXXXX', '240', 'Elan Credenza-4', 'Elan Credenza-4', 'Back Unit with various combinations of Glass Sliding Door Units and Pedestals with Laminate tops', 'Elan laminate Range9.png', '1581*441*750', 'F53', 30799.00, 3157.00, '1', 33956.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:47:00', '2016-03-09 03:47:00', '', 1),
(306, 'STELCR5DLRPSXXXX', '240', 'Elan Credenza-5', 'Elan Credenza-5', 'Back Unit with various combinations of Glass Sliding Door Units and Pedestals with Laminate tops', 'Elan laminate Range10.png', '1581*441*750', 'F53', 14574.00, 1494.00, '1', 16068.00, '', 'Desking', 'CAT101', '2015-07-18', 'suresh', '2016-03-09', '03:50:23', '2016-03-09 03:50:23', '', 1),
(307, 'STVLU1LBXXX', '240', 'PERSONAL LOCKER UNIT 1 - Door PLU + Lkr (Base)', 'PERSONAL LOCKER UNIT 1 - Door PLU + Lkr (Base)', '', 'personal-locker-unit1.jpg', '1830Hx380Wx450D', 'F53', 9615.00, 986.00, '', 10601.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:22:24', '2016-03-21 12:22:24', '', 1),
(308, 'STVLU10BXXX', '240', 'PERSONAL LOCKER UNIT 1 - Door PLU - Lkr (Base)', 'PERSONAL LOCKER UNIT 1 - Door PLU - Lkr (Base)', '', 'personal-locker-unit2.jpg', '1830Hx380Wx450D', 'F53', 9457.00, 969.00, '', 10426.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:36:39', '2016-03-21 12:36:39', '', 1),
(309, 'STVLU2LBXXX', '240', 'PERSONAL LOCKER UNIT 2 - Door PLU - Lkr (Base)', 'PERSONAL LOCKER UNIT 2 - Door PLU - Lkr (Base)', '', 'personal-locker-unit3.jpg', '1830Hx380Wx450D', 'F53', 9964.00, 1021.00, '', 10985.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:40:32', '2016-03-21 12:40:32', '', 1),
(310, 'STVLU20BXXX', '240', 'PERSONAL LOCKER UNIT 2 - Door PLU - Lkr (Base)', 'PERSONAL LOCKER UNIT 2 - Door PLU - Lkr (Base)', '', 'personal-locker-unit4.jpg', '1830Hx380Wx450D', 'F53', 9660.00, 990.00, '', 10650.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:43:00', '2016-05-26 19:02:51', '', 1),
(311, 'STVLU4LBXXX', '240', 'PERSONAL LOCKER UNIT	 4 - Door PLU + Lkr (Base)', 'PERSONAL LOCKER UNIT	 4 - Door PLU + Lkr (Base)', '', 'personal-locker-unit5.jpg', '1830Hx380Wx450D', 'F53', 11282.00, 1156.00, '', 12438.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:45:24', '2016-03-21 12:45:24', '', 1),
(312, 'STVLU40BXXX', '240', 'PERSONAL LOCKER UNIT	 4 - Door PLU + Lkr (Base)', 'PERSONAL LOCKER UNIT	 4 - Door PLU + Lkr (Base)', '', 'personal-locker-unit6.jpg', '1830Hx380Wx450D', 'F53', 10661.00, 1093.00, '', 11754.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:49:07', '2016-03-21 12:49:07', '', 1),
(313, 'STVLU6LBXXX', '240', 'PERSONAL LOCKER UNIT	 6 - Door PLU + Lkr (Base)', 'PERSONAL LOCKER UNIT	 6 - Door PLU + Lkr (Base)', '', 'personal-locker-unit7.jpg', '1830Hx380Wx450D', 'F53', 12690.00, 1301.00, '', 13991.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:50:59', '2016-03-21 12:50:59', '', 1),
(314, 'STVLU60BXXX', '240', 'PERSONAL LOCKER UNIT	 16 - Door PLU + Lkr (Base)', 'PERSONAL LOCKER UNIT	 16 - Door PLU + Lkr (Base)', '', 'personal-locker-unit8.jpg', '1830Hx380Wx450D', 'F53', 11815.00, 1211.00, '', 13026.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:52:49', '2016-05-26 18:58:35', '', 1),
(315, 'STVLU1LAXXX', '240', 'PERSONAL LOCKER UNIT	 1 - Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 1 - Door PLU + Lkr (Add On)', '', 'Personal-Lockers1.jpg', '1830Hx380Wx450D', 'F53', 8481.00, 869.00, '', 9350.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:54:29', '2016-03-21 12:54:29', '', 1),
(316, 'STVLU10AXXX', '240', 'PERSONAL LOCKER UNIT	 1 - Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 1 - Door PLU + Lkr (Add On)', '', 'Personal-Lockers2.jpg', '1830Hx380Wx450D', 'F53', 8265.00, 847.00, '', 9112.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:57:16', '2016-03-21 12:57:16', '', 1),
(317, 'STVLU2LAXXX', '240', 'PERSONAL LOCKER UNIT	 2- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 2 - Door PLU + Lkr (Add On)', '', 'Personal-Lockers3.jpg', '1830Hx380Wx450D', 'F53', 8791.00, 901.00, '', 9692.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '12:58:58', '2016-03-21 12:58:58', '', 1),
(318, 'STVLU20AXXX', '240', 'PERSONAL LOCKER UNIT	 2- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 2- Door PLU + Lkr (Add On)', '', 'Personal-Lockers4.jpg', '1830Hx380Wx450D', 'F53', 8525.00, 874.00, '', 9399.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:01:21', '2016-03-21 01:01:21', '', 1),
(319, 'STVLU4LAXXX', '240', 'PERSONAL LOCKER UNIT	 4- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 4- Door PLU + Lkr (Add On)', '', 'Personal-Lockers5.jpg', '1830Hx380Wx450D', 'F53', 10116.00, 1037.00, '', 11153.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:03:03', '2016-03-21 01:03:03', '', 1),
(320, 'STVLU40AXXX', '240', 'PERSONAL LOCKER UNIT	 4- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 4- Door PLU + Lkr (Add On)', '', 'Personal-Lockers6.jpg', '1830Hx380Wx450D', 'F53', 9343.00, 958.00, '', 10301.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:04:37', '2016-03-21 01:04:37', '', 1),
(321, 'STVLU6LAXXX', '240', 'PERSONAL LOCKER UNIT	 6- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 6- Door PLU + Lkr (Add On)', '', 'Personal-Lockers7.jpg', '1830Hx380Wx450D', 'F53', 11550.00, 1184.00, '', 12734.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:06:42', '2016-03-21 01:06:42', '', 1),
(322, 'STVLU60AXXX', '240', 'PERSONAL LOCKER UNIT	 6- Door PLU + Lkr (Add On)', 'PERSONAL LOCKER UNIT	 6- Door PLU + Lkr (Add On)', '', 'Personal-Lockers8.jpg', '1830Hx380Wx450D', 'F53', 10661.00, 1093.00, '', 11754.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:08:14', '2016-03-21 01:08:14', '', 1),
(323, 'STVLUS10079', '240', 'PERSONAL LOCKER UNIT	 Stand for one locker ( Black)', 'PERSONAL LOCKER UNIT	 Stand for one locker ( Black)', '', 'Personal-Lockers9.jpg', '125Hx 380w x 450D', 'F53', 894.00, 92.00, '', 986.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:09:39', '2016-03-21 01:09:39', '', 1),
(324, 'STVLUS20079', '240', 'PERSONAL LOCKER UNIT	 Stand for two lockers ( Black)', 'PERSONAL LOCKER UNIT	 Stand for two lockers ( Black)', '', 'Personal-Lockers10.jpg', '125Hx 760w x 450D', 'F53', 1192.00, 122.00, '', 1314.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:12:30', '2016-03-21 01:12:30', '', 1),
(325, 'STVLUS30079', '240', 'PERSONAL LOCKER UNIT	 Stand for three lockers ( Black)', 'PERSONAL LOCKER UNIT	 Stand for three lockers ( Black)', '', 'Personal-Lockers11.jpg', '125Hx1140Wx 450D', 'F53', 1534.00, 157.00, '', 1691.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:14:27', '2016-03-21 01:14:27', '', 1),
(326, 'STVLUHR0000', '240', 'PERSONAL LOCKER UNIT	 Hanging Rod for locker', 'PERSONAL LOCKER UNIT	 Hanging Rod for locker', '', 'Personal-Lockers12.jpg', '375 L X 19 Dia Tube', 'F53', 139.00, 14.00, '', 153.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:17:20', '2016-03-21 01:17:20', '', 1),
(327, 'STVLUSH0XXX', '240', 'PERSONAL LOCKER UNIT	 Shelf for Locker', 'PERSONAL LOCKER UNIT	 Shelf for Locker', '', 'Personal-Lockers13.jpg', '20 H X 376.8WX419D', 'F53', 450.00, 46.00, '', 496.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:18:53', '2016-03-21 01:18:53', '', 1),
(328, 'STVLT21PXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 2.5 Ft(With PF top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 2.5 Ft(With PF top)', '', 'Lateral-filing-Cabinets-new1.jpg', '737.5Hx750Wx450D', 'F53', 16987.00, 1741.00, '', 18728.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:20:19', '2016-03-21 01:20:19', '', 1),
(329, 'STVLT22PXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 3.0 Ft(With PF top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 3.0 Ft(With PF top)', '', 'Lateral-filing-Cabinets-new2.jpg', '737.5Hx900Wx450D', 'F53', 19320.00, 1980.00, '', 21300.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:31:12', '2016-03-21 01:31:12', '', 1),
(330, 'STVLT23PXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 3.5 Ft(With PF top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC 3.5 Ft(With PF top)', '', 'Lateral-filing-Cabinets-new3.jpg', '737.5Hx1050Wx450D', 'F53', 25329.00, 2596.00, '', 27925.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:32:45', '2016-03-21 01:32:45', '', 1),
(331, 'STVLT32PXXX', '240', 'PERSONAL LOCKER UNIT	 3 Drawer LFC 3 Ft(With PF top)', 'PERSONAL LOCKER UNIT	 3 Drawer LFC 3 Ft(With PF top)', '', '', '1042.5Hx900Wx450D', 'F53', 24295.00, 2490.00, '', 26785.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:34:23', '2016-03-21 01:34:23', '', 1),
(332, 'STVLT42PXXX', '240', 'PERSONAL LOCKER UNIT	 4Drawer LFC 3 Ft(With PF top)', 'PERSONAL LOCKER UNIT	 4Drawer LFC 3 Ft(With PF top)', '', 'Lateral-filing-Cabinets-new5.jpg', '1347.5Hx900Wx450D', 'F53', 29129.00, 2986.00, '', 32115.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:35:52', '2016-03-21 01:35:52', '', 1),
(333, 'STVLT21MXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  2.5 Ft(With Metal top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  2.5 Ft(With Metal top)', '', 'Lateral-filing-Cabinets-new6.jpg', '713.5Hx750Wx450D', 'F53', 15036.00, 1541.00, '', 16577.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:38:10', '2016-03-21 01:38:10', '', 1),
(334, 'STVLT22MXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  3.0 Ft(With Metal top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  3.0 Ft(With Metal top)', '', 'Lateral-filing-Cabinets-new7.jpg', '713.5Hx900Wx450D', 'F53', 17569.00, 1801.00, '', 19370.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:41:42', '2016-03-21 01:41:42', '', 1),
(335, 'STVLT23MXXX', '240', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  3.5 Ft(With Metal top)', 'PERSONAL LOCKER UNIT	 2 Drawer LFC  3.5 Ft(With Metal top)', '', 'Lateral-filing-Cabinets-new8.jpg', '713.5Hx1050Wx450D', 'F53', 22409.00, 2297.00, '', 24706.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:43:37', '2016-03-21 01:43:37', '', 1),
(336, 'STVLT32MXXX', '240', 'PERSONAL LOCKER UNIT	 3 Drawer LFC  3.0 Ft(With Metal top)', 'PERSONAL LOCKER UNIT	 3 Drawer LFC  3.0 Ft(With Metal top)', '', 'Lateral-filing-Cabinets-new9.jpg', '1018.5Hx900Wx450D', 'F53', 22538.00, 2310.00, '', 24848.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:45:18', '2016-03-21 01:45:18', '', 1),
(337, 'STVLT42MXXX', '240', 'PERSONAL LOCKER UNIT	 4 Drawer LFC  3.0 Ft(With Metal top)', 'PERSONAL LOCKER UNIT	 4 Drawer LFC  3.0 Ft(With Metal top)', '', 'Lateral-filing-Cabinets-new10.jpg', '1323.5Hx900Wx450D', 'F53', 28326.00, 2903.00, '', 31229.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:47:04', '2016-03-21 01:47:04', '', 1),
(338, 'STPDRSU0074', '240', 'KD PERIODICAL DISPLAY RACKS STEEL BODY WITH RETRACTABLE TRAY + FITTINGS', 'KD PERIODICAL DISPLAY RACKS STEEL BODY WITH RETRACTABLE TRAY + FITTINGS', '', 'periodical-display-rack1.jpg', '1890H X 290W X 400D', 'H0C', 9308.00, 0.00, '', 9308.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '01:48:36', '2016-03-21 01:48:36', '', 1),
(339, 'STPDRWB0000', '240', 'KD PERIODICAL DISPLAY RACKS WOODEN BASE SIDE PANELS (LH +RH)', 'KD PERIODICAL DISPLAY RACKS WOODEN BASE SIDE PANELS (LH +RH)', '', 'periodical-display-rack2.jpg', '', 'H0C', 5586.00, 0.00, '', 5586.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:00:10', '2016-03-21 02:00:10', '', 1),
(340, 'STPDRWA0000', '240', 'KD PERIODICAL DISPLAY RACKS WOODEN ADDON SIDE PANELS', 'KD PERIODICAL DISPLAY RACKS WOODEN ADDON SIDE PANELS', '', 'periodical-display-rack3.jpg', '', 'H0C', 2919.00, 0.00, '', 2919.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:01:44', '2016-03-21 02:01:44', '', 1),
(341, 'STPDRSS1074', '240', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR ONE  UNIT', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR ONE  UNIT', '', 'periodical-display-rack4.jpg', '', 'H0C', 756.00, 0.00, '', 756.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:03:32', '2016-03-21 02:03:32', '', 1),
(342, 'STPDRSS2074', '240', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR TWO UNITS', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR TWO UNITS', '', 'periodical-display-rack5.jpg', '', 'H0C', 1473.00, 0.00, '', 1473.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:05:08', '2016-03-21 02:05:08', '', 1),
(343, 'STPDRSS3074', '240', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR THREE UNITS', 'KD PERIODICAL DISPLAY RACKS SKIRTING FOR THREE UNITS', '', 'periodical-display-rack6.jpg', '', 'H0C', 2189.00, 0.00, '', 2189.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:06:32', '2016-03-21 02:06:32', '', 1),
(344, 'STPDRASUXXX', '240', 'KD PERIODICAL DISPLAY RACKS ALL STEEL PERIODICAL DISPLAY RACK', 'KD PERIODICAL DISPLAY RACKS ALL STEEL PERIODICAL DISPLAY RACK', '', 'periodical-display-rack7.jpg', '1830H X 900W X 450D', 'F53', 14596.00, 1496.00, '', 16092.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:08:01', '2016-03-21 02:08:01', '', 1),
(345, 'STP3MFC1XXX', '240', 'NOVA PEDESTALS Free Standing Ped with Castors for Elan Table', 'NOVA PEDESTALS Free Standing Ped with Castors for Elan Table', '', 'PEDESTALS1.jpg', '646H x 390W x 590D', 'F53', 9655.00, 990.00, '', 10645.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:09:35', '2016-03-21 02:09:35', '', 1),
(346, 'STP3MFC3XXX', '240', 'NOVA PEDESTALS Top  Supporting Ped  for Elan Credenza', 'NOVA PEDESTALS Top  Supporting Ped  for Elan Credenza', '', 'PEDESTALS2.jpg', '674H x 390W x 435D', 'F53', 8695.00, 891.00, '', 9586.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:19:44', '2016-03-21 02:19:44', '', 1),
(347, 'STP3MFC2XXX', '240', 'NOVA PEDESTALS Free Standing Ped with Castors for Finnesse Table', 'NOVA PEDESTALS Free Standing Ped with Castors for Finnesse Table', '', 'PEDESTALS3.jpg', '646H x 390W x 440D', 'F53', 8874.00, 910.00, '', 9783.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:21:10', '2016-03-21 02:21:10', '', 1),
(348, 'STGNFLB400XXX', '240', 'GAIN FLOOR UNIT 400W MAIN', 'GAIN FLOOR UNIT 400W MAIN', '', 'Gain02_L1.jpg', '2100*400*500', 'F53', 7543.00, 773.00, '', 8316.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:22:58', '2016-03-21 02:22:58', '', 1),
(349, 'STGNFLA400XXX', '240', 'GAIN FLOOR FLOOR UNIT 400W ADDON', 'GAIN FLOOR FLOOR UNIT 400W ADDON', '', 'Gain02_L2.jpg', '2100*400*500', 'F53', 6846.00, 702.00, '', 7548.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:26:48', '2016-03-21 02:26:48', '', 1),
(350, 'STGNFLB450XXX', '240', 'GAIN FLOOR UNIT 450W MAIN', 'GAIN FLOOR UNIT 450W MAIN', '', 'Gain02_L3.jpg', '2100*450*500', 'F53', 7733.00, 793.00, '', 8526.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:28:04', '2016-03-21 02:28:04', '', 1),
(351, 'STGNFLA450XXX', '240', 'GAIN FLOOR UNIT 450W ADDON', 'GAIN FLOOR UNIT 450W ADDON', '', 'Gain02_L4.jpg', '2100*450*500', 'F53', 7099.00, 728.00, '', 7827.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:30:23', '2016-03-21 02:30:23', '', 1),
(352, 'STGNFLA900XXX', '240', 'GAIN FLOOR UNIT 900W ADDON', 'GAIN FLOOR UNIT 900W ADDON', '', 'Gain02_L8.jpg', '2100*900*500', 'F53', 10775.00, 1104.00, '', 11879.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:31:46', '2016-03-21 02:31:46', '', 1),
(353, 'STGNFLB500XXX', '240', 'GAIN FLOOR UNIT 500W MAIN', 'GAIN FLOOR UNIT 500W MAIN', '', 'Gain02_L5.jpg', '2100*500*500', 'F53', 7986.00, 819.00, '', 8805.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:33:07', '2016-03-21 02:33:07', '', 1),
(354, 'STGNFLA500XXX', '240', 'GAIN FLOOR UNIT 500W ADDON', 'GAIN FLOOR UNIT 500W ADDON', '', 'Gain02_L6.jpg', '2100*500*500', 'F53', 7226.00, 741.00, '', 7966.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:34:20', '2016-03-21 02:34:20', '', 1),
(355, 'STGNFLA800XXX', '240', 'GAIN FLOOR UNIT 800W ADDON', 'GAIN FLOOR UNIT 800W ADDON', '', 'Gain02_L7.jpg', '2100*800*500', 'F53', 10395.00, 1065.00, '', 11461.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:35:34', '2016-03-21 02:35:34', '', 1),
(356, 'STGNFLA100XXX', '240', 'GAIN FLOOR UNIT 1000W ADDON', 'GAIN FLOOR UNIT 1000W ADDON', '', 'Gain02_L9.jpg', '2100*1000*500', 'F53', 11282.00, 1156.00, '', 12438.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '02:36:54', '2016-03-21 02:36:54', '', 1),
(357, 'STGNOHB400XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 400W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 400W MAIN', '', 'GainOverheadStorageUnit1.jpg', '650*400*500', 'F53', 3131.00, 321.00, '', 3452.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:14:01', '2016-03-21 03:14:01', '', 1),
(358, 'STGNOHA400XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 400W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 400W ADDON', '', 'GainOverheadStorageUnit2.jpg', '650*400*500', 'F53', 3017.00, 309.00, '', 3327.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:31:26', '2016-03-21 03:31:26', '', 1),
(359, 'STGNOHB450XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 450W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 450W MAIN', '', 'GainOverheadStorageUnit3.jpg', '650*450*500', 'F53', 3233.00, 331.00, '', 3564.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:32:56', '2016-03-21 03:32:56', '', 1),
(360, 'STGNOHA450XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 450W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 450W ADDON', '', 'GainOverheadStorageUnit4.jpg', '650*450*500', 'F53', 3068.00, 314.00, '', 3382.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:34:11', '2016-03-21 03:34:11', '', 1),
(361, 'STGNOHB500XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 500W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 500W MAIN', '', 'GainOverheadStorageUnit5.jpg', '650*500*500', 'F53', 3359.00, 344.00, '240', 3703.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:35:36', '2016-03-21 03:35:36', '', 1),
(362, 'STGNOHA500XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 500W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 500W ADDON', '', 'GainOverheadStorageUnit6.jpg', '650*500*500', 'F53', 3169.00, 325.00, '', 3494.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:37:09', '2016-03-21 03:37:09', '', 1),
(363, 'STGNOHB800XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 800W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 800W MAIN', '', 'GainOverheadStorageUnit7.jpg', '650*800*500', 'F53', 4754.00, 487.00, '', 5241.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:38:28', '2016-03-21 03:38:28', '', 1),
(364, 'STGNOHA800XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 800W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 800W ADDON', '', 'GainOverheadStorageUnit8.jpg', '650*800*500', 'F53', 4310.00, 442.00, '', 4752.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:39:38', '2016-03-21 03:39:38', '', 1),
(365, 'STGNOHB900XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 900W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 900W MAIN', '', 'GainOverheadStorageUnit9.jpg', '650*900*500', 'F53', 5007.00, 513.00, '', 5520.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:40:51', '2016-03-21 03:40:51', '', 1),
(366, 'STGNOHA900XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 900W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 900W ADDON', '', 'GainOverheadStorageUnit10.jpg', '650*900*500', 'F53', 4690.00, 481.00, '', 5171.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:42:06', '2016-03-21 03:42:06', '', 1),
(367, 'STGNOHB100XXX', '240', 'GAIN OVERHEAD STORAGE UNIT OH UNIT 1000W MAIN', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 1000W MAIN', '', 'GainOverheadStorageUnit11.jpg', '650*1000*500', 'F53', 5261.00, 539.00, '', 5800.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:43:18', '2016-03-21 03:43:18', '', 1),
(368, 'STGNOHA100XXX', '240', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 1000W ADDON', 'GAIN OVERHEAD  STORAGE UNIT OH UNIT 1000W ADDON', '', 'GainOverheadStorageUnit12.jpg', '650*1000*500', 'F53', 5134.00, 526.00, '', 5660.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:44:42', '2016-03-21 03:44:42', '', 1),
(369, 'STGNFLWDDR40XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 400W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 400W WDN DOOR', '', 'gainfullHeightFloor1.jpg', '2058*398*26', 'F53', 4236.00, 434.00, '', 4670.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:45:59', '2016-03-21 03:45:59', '', 1),
(370, 'STGNFLWDDR45XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 450W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 450W WDN DOOR', '', 'gainfullHeightFloor2.jpg', '2058*448*26', 'F53', 4544.00, 466.00, '', 5009.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:50:12', '2016-03-21 03:50:12', '', 1),
(371, 'STGNFLWDDR50XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 500W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 500W WDN DOOR', '', 'gainfullHeightFloor3.jpg', '2058*498*26', 'F53', 4775.00, 489.00, '', 5264.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:51:28', '2016-03-21 03:51:28', '', 1),
(372, 'STGNFLWDDR80XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 800W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 800W WDN DOOR', '', 'gainfullHeightFloor4.jpg', '2058*398*26', 'F53', 9549.00, 979.00, '', 10527.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:52:57', '2016-03-21 03:52:57', '', 1),
(373, 'STGNFLWDDR90XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 900W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 900W WDN DOOR', '', 'gainfullHeightFloor5.jpg', '2058*448*26', 'F53', 9774.00, 1002.00, '', 10776.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:54:14', '2016-03-21 03:54:14', '', 1),
(374, 'STGNFLWDDR100XXX', '240', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 1000W WDN DOOR', 'GAIN FULL HEIGHT FLOOR UNIT WOODEN DOORS FLOOR UNIT 1000W WDN DOOR', '', 'gainfullHeightFloor6.jpg', '2058*498*26', 'F53', 9952.00, 1020.00, '', 10972.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:55:27', '2016-03-21 03:55:27', '', 1),
(375, 'FUPGNHOLE1200BMO', '241', 'PIGEON HOLES Pigeon Hole Base 1200H Main Modish Oak', 'PIGEON HOLES Pigeon Hole Base 1200H Main Modish Oak', '', 'Pigeon_Hole_big1.jpg', '1200*582*400', '730', 11611.00, 1190.00, '', 12801.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '03:56:43', '2016-03-21 03:56:43', '', 1),
(376, 'FUPGNHOLE1200AMO', '241', 'PIGEON HOLES Pigeon Hole Base 1200H Addon Modish Oak', 'PIGEON HOLES Pigeon Hole Base 1200H Addon Modish Oak', '', 'Pigeon_Hole_big2.jpg', '1200*264*400', '730', 5706.00, 585.00, '', 6291.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:09:26', '2016-03-21 04:09:26', '', 1),
(377, 'FUPGNHOLE1800BMO', '241', 'PIGEON HOLES Pigeon Hole Base 1800H Main Modish Oak', 'PIGEON HOLES Pigeon Hole Base 1800H Main Modish Oak', '', 'Pigeon_Hole_big3.jpg', '1800*582*400', '730', 15526.00, 1591.00, '', 17117.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:10:53', '2016-03-21 04:10:53', '', 1),
(378, 'FUPGNHOLE1800AMO', '241', 'PIGEON HOLES Pigeon Hole Base 1800H Addon Modish Oak', 'PIGEON HOLES Pigeon Hole Base 1800H Addon Modish Oak', '', 'Pigeon_Hole_big4.jpg', '1800*264*400', '730', 7431.00, 762.00, '', 8193.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:12:10', '2016-03-21 04:12:10', '', 1),
(379, 'STVST02NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU) VSDU-2', 'KD SLIDING DOOR UNIT (VSDU) VSDU-2', '', 'kdSlidingdoor1.png', '735 * 900 * 450', 'F53', 12323.00, 1263.00, '', 13586.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:13:19', '2016-03-21 04:13:19', '', 1),
(380, 'STVST05NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU) VSDU-5', 'KD SLIDING DOOR UNIT (VSDU) VSDU-5', '', 'kdSlidingdoor2.png', '1192.5 * 900 * 450', 'F53', 14350.00, 1471.00, '', 15821.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:29:16', '2016-03-21 04:29:16', '', 1),
(381, 'STVST06NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU) VSDU-6', 'KD SLIDING DOOR UNIT (VSDU) VSDU-6', '', 'kdSlidingdoor3.png', '1345 * 900 * 450', 'F53', 14978.00, 1535.00, '', 16513.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:30:40', '2016-03-21 04:30:40', '', 1),
(382, 'STVST09NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU) VSDU-9', 'KD SLIDING DOOR UNIT (VSDU) VSDU-9', '', 'kdSlidingdoor4.png', '735 * 1200 * 450', 'F53', 14350.00, 1471.00, '', 15821.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:31:55', '2016-03-21 04:31:55', '', 1),
(383, 'STVST10NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU)VSDU-10', 'KD SLIDING DOOR UNIT (VSDU)VSDU-10', '', 'kdSlidingdoor5.png', '887.5 * 1200 * 450', 'F53', 15656.00, 1605.00, '', 17261.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:33:10', '2016-03-21 04:33:10', '', 1),
(384, 'STVST12NXXX', '240', 'KD SLIDING DOOR UNIT (VSDU)VSDU-12', 'KD SLIDING DOOR UNIT (VSDU)VSDU-12', '', '', '', 'F53', 17596.00, 1804.00, '1', 19400.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:35:14', '2016-03-21 04:35:14', '', 1),
(385, 'STGNOLMTDR40XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 400W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 400W METAL DOOR', '', 'GainfullOverHead1.jpg', '646*398*20', 'F53', 1027.00, 105.00, '', 1132.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:36:34', '2016-03-21 04:36:34', '', 1),
(386, 'STGNOLMTDR45XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 450W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 450W METAL DOOR', '', 'GainfullOverHead2.jpg', '646*448*20', 'F53', 1065.00, 109.00, '', 1174.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:42:02', '2016-03-21 04:42:02', '', 1),
(387, 'STGNOLMTDR50XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 500W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 500W METAL DOOR', '', 'GainfullOverHead3.jpg', '646*498*20', 'F53', 1103.00, 113.00, '', 1216.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:44:15', '2016-03-21 04:44:15', '', 1),
(388, 'STGNOLMTDR80XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 800W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 800W METAL DOOR', '', 'GainfullOverHead4.jpg', '646*398*20', 'F53', 2003.00, 205.00, '', 2208.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:46:00', '2016-03-21 04:46:00', '', 1),
(389, 'STGNOLMTDR90XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 900W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 900W METAL DOOR', '', 'GainfullOverHead5.jpg', '646*448*20', 'F53', 2066.00, 212.00, '', 2278.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:48:05', '2016-03-21 04:48:05', '', 1),
(390, 'STGNOLMTDR100XXX', '240', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 1000W METAL DOOR', 'GAIN FULL OVER-HEAD  STORAGE UNIT METAL DOORS  OH UNIT 1000W METAL DOOR', '', 'GainfullOverHead6.jpg', '646*498*20', 'F53', 2142.00, 220.00, '', 2362.00, '', 'Storage', 'CAT103', '2015-07-18', 'suresh', '2016-03-21', '04:49:33', '2016-03-21 04:49:33', '', 1),
(392, 'STSUPWDRH30203', '240', 'SHUTTERS', 'STORE UP 300W RH WDN DOOR HL PINE', '', 'wooden-board2.jpg', '298W x 18D x 783H', 'F53', 605.00, 62.00, '', 667.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(393, 'STSUPWDLH30202', '240', 'SHUTTERS', 'STORE UP 300W LH WDN DOOR MOD OAK', '', 'wooden-board3.jpg', '298W x 18D x 783H', 'F53', 605.00, 62.00, '', 667.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(394, 'STSUPWDRH30202', '240', 'SHUTTERS', 'STORE UP 300W RH WDN DOOR MOD OAK', '', 'wooden-board4.jpg', '298W x 18D x 783H', 'F53', 605.00, 62.00, '', 667.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(395, 'STSUPWDLH45203', '240', 'SHUTTERS', 'STORE UP 450W LH WDN DOOR HL PINE', '', 'wooden-board5.jpg', '448W x 18D x 783H', 'F53', 797.00, 82.00, '', 879.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(396, 'STSUPWDRH45203', '240', 'SHUTTERS', 'STORE UP 450W RH WDN DOOR HL PINE', '', 'wooden-board6.jpg', '448W x 18D x 783H', 'F53', 797.00, 82.00, '', 879.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(397, 'STSUPWDLH45202', '240', 'SHUTTERS', 'STORE UP 450W LH WDN DOOR MOD OAK', '', 'wooden-board7.jpg', '448W x 18D x 783H', 'F53', 797.00, 82.00, '', 879.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(398, 'STSUPWDRH45202', '240', 'SHUTTERS', 'STORE UP 450W RH WDN DOOR MOD OAK', '', 'wooden-board8.jpg', '448W x 18D x 783H', 'F53', 797.00, 82.00, '', 879.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(399, 'STSUPWDDR60203', '240', 'SHUTTERS', 'STORE UP 600W WDN DOOR HL PINE', '', 'set_wood1.jpg', '298 x 783 x 18 RH side Door with lock (or)298 x 78', 'F53', 1090.00, 112.00, '', 1202.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(400, 'STSUPWDDR60202', '240', 'SHUTTERS', 'STORE UP 600W WDN DOOR MOD OAK', '', 'set_wood2.jpg', '298 x 783 x 18 RH side Door with lock (or)298 x 78', 'F53', 1090.00, 112.00, '', 1202.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(401, 'STSUPWDDR80203', '240', 'SHUTTERS', 'STORE UP 800W WDN DOOR HL PINE', '', 'set_wood3.jpg', '398 x 783 x 18 RH side Door with lock(or)398 x 783', 'F53', 1357.00, 139.00, '', 1496.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(402, 'STSUPWDDR80202', '240', 'SHUTTERS', 'STORE UP 800W WDN DOOR MOD OAK', '', 'set_wood4.jpg', '398 x 783 x 18 RH side Door with lock(or)398 x 783', 'F53', 1357.00, 139.00, '', 1496.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(403, 'STSUPWDDR90203', '240', 'SHUTTERS', 'STORE UP 900W WDN DOOR HL PINE', '', 'set_wood5.jpg', '448 x 783 x 18 RH side Door with lock(or)448 x 783', 'F53', 1401.00, 144.00, '', 1545.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(404, 'STSUPWDDR90202', '240', 'SHUTTERS', 'STORE UP 900W WDN DOOR MOD OAK', '', 'set_wood6.jpg', '448 x 783 x 18 RH side Door with lock(or)448 x 783', 'F53', 1401.00, 144.00, '', 1545.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(405, 'STSUPWDDRC60203', '240', 'SHUTTERS', 'STORE UP CRNR 600Wx300W WDN DOOR HL PINE', '', 'setwood1.jpg', '298 x 783 x 18 LH Door(or) 275 x 783 x 18 RH Door', 'F53', 813.00, 83.00, '', 897.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(406, 'STSUPWDDRC60202', '240', 'SHUTTERS', 'STORE UP CRNR 600Wx300W WDN DOOR MOD OAK', '', 'setwood2.jpg', '298 x 783 x 18 LH Door(or) 275 x 783 x 18 RH Door', 'F53', 813.00, 83.00, '', 897.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(407, 'STCLFC01MM1203', '240', 'CUSHION LFC', '1 Drawer LFC Bond White Body & Facia', '', 'drawer1.jpg', '502 H * 900 W * 455 D', 'F53', 13415.00, 1375.00, '', 14790.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(408, 'STCLFC01MW0203', '240', 'CUSHION LFC', '1 Drawer LFC Bond White Body & Highlandpine Facia', '', 'drawer2.jpg', '502 H * 900 W * 455 D', 'F53', 14277.00, 1463.00, '', 15740.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(409, 'STCLFC01MM2203', '240', 'CUSHION LFC', '1 Drawer LFC Bond White with Camin Red Facia', '', 'drawer3.jpg', '502 H * 900 W * 455 D', 'F53', 13415.00, 1375.00, '', 14790.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(410, 'STSUPB300203', '240', 'BODY', 'STORE UP 300W MAIN BOND WHT', '', 'store body1.jpg', '300W x 326D x 785H', 'F53', 4256.00, 436.00, '', 4692.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(411, 'STSUPB300202', '240', 'BODY', 'STORE UP 300W MAIN MT SES BGE', '', 'store body2.jpg', '300W x 326D x 785H', 'F53', 4256.00, 436.00, '', 4692.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(412, 'STSUPA300203', '240', 'BODY', 'STORE UP 300W ADDON BOND WHT', '', 'store body3.jpg', '300W x 326D x 785H', 'F53', 4032.00, 413.00, '', 4445.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(413, 'STSUPA300202', '240', 'BODY', 'STORE UP 300W ADDON MT SES BGE', '', 'store body4.jpg', '300W x 326D x 785H', 'F53', 4032.00, 413.00, '', 4445.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(414, 'STSUPB450203', '240', 'BODY', 'STORE UP 450W MAIN BOND WHT', '', 'store body5.jpg', '450W x 326D x 785H', 'F53', 4647.00, 476.00, '', 5123.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(415, 'STSUPB450202', '240', 'BODY', 'STORE UP 450W MAIN MT SES BGE', '', 'store body6.jpg', '450W x 326D x 785H', 'F53', 4647.00, 476.00, '', 5123.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(416, 'STSUPA450203', '240', 'BODY', 'STORE UP 450W ADDON BOND WHT', '', 'store body7.jpg', '450W x 326D x 785H', 'F53', 4095.00, 420.00, '', 4515.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(417, 'STSUPA450202', '240', 'BODY', 'STORE UP 450W ADDON MT SES BGE', '', 'store body8.jpg', '450W x 326D x 785H', 'F53', 4095.00, 420.00, '', 4515.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(418, 'STSUPB600203', '240', 'BODY', 'STORE UP 600W MAIN BOND WHT', '', 'store_body1.jpg', '600W x 326D x 785H', 'F53', 5389.00, 552.00, '', 5941.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(419, 'STSUPB600202', '240', 'BODY', 'STORE UP 600W MAIN MT SES BGE', '', 'store_body2.jpg', '600W x 326D x 785H', 'F53', 5389.00, 552.00, '', 5941.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(420, 'STSUPA600203', '240', 'BODY', 'STORE UP 600W ADDON BOND WHT', '', 'store_body3.jpg', '600W x 326D x 785H', 'F53', 4958.00, 508.00, '', 5466.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(421, 'STSUPA600202', '240', 'BODY', 'STORE UP 600W ADDON MT SES BGE', '', 'store_body4.jpg', '600W x 326D x 785H', 'F53', 4958.00, 508.00, '', 5466.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(422, 'STSUPB800203', '240', 'BODY', 'STORE UP 800W MAIN BOND WHT', '', 'store_body5.jpg', '800W x 326D x 785H', 'F53', 5838.00, 598.00, '', 6436.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(423, 'STSUPB800202', '240', 'BODY', 'STORE UP 800W MAIN MT SES BGE', '', 'store_body6.jpg', '800W x 326D x 785H', 'F53', 5838.00, 598.00, '', 6436.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(424, 'STSUPA800203', '240', 'BODY', 'STORE UP 800W ADDON BOND WHT', '', 'store_body7.jpg', '800W x 326D x 785H', 'F53', 5400.00, 554.00, '', 5954.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(425, 'STSUPA800202', '240', 'BODY', 'STORE UP 800W ADDON MT SES BGE', '', 'store_body8.jpg', '800W x 326D x 785H', 'F53', 5400.00, 554.00, '', 5954.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1);
INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(426, 'STSUPB900203', '240', 'BODY', 'STORE UP 900W MAIN BOND WHT', '', 'store_body9.jpg', '900W x 326D x 785H', 'F53', 5872.00, 602.00, '', 6474.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(427, 'STSUPB900202', '240', 'BODY', 'STORE UP 900W MAIN MT SES BGE', '', 'store_body10.jpg', '900W x 326D x 785H', 'F53', 5872.00, 602.00, '', 6474.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(428, 'STSUPA900203', '240', 'BODY', 'STORE UP 900W ADDON BOND WHT', '', 'store_body11.jpg', '900W x 326D x 785H', 'F53', 5705.00, 585.00, '', 6290.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(429, 'STSUPA900202', '240', 'BODY', 'STORE UP 900W ADDON MT SES BGE', '', 'store_body12.jpg', '900W x 326D x 785H', 'F53', 5705.00, 585.00, '', 6290.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(430, 'STSUPCBXXX203', '240', 'BODY', 'STORE UP 600Wx300W CORNER BOND WHT', '', 'store_corner1.jpg', '600W x 300D x 785H', 'F53', 8063.00, 826.00, '', 8890.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(431, 'STSUPCBXXX202', '240', 'BODY', 'STORE UP 600Wx300W CORNER MT SES BGE', '', 'store_corner2.jpg', '600W x 300D x 785H', 'F53', 8063.00, 826.00, '', 8890.00, 'Metal Body: 203 - Bond White, 202 - Sesame Beige / Wooden Shutter: 203 - Highland Pine, 202 - Modish Oak', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(432, 'STOW2SS1XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static 1 Bay Push Pull Type', '', '', 'SS1', 'F53', 26092.00, 2674.00, '', 28766.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(433, 'STOW2SL1XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last   1 Bay Push Pull Type', '', '', 'SL1', 'F53', 28340.00, 2905.00, '', 31245.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(434, 'STOW2TM1XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile   1Bay Push Pull Type', '', '', 'TM1', 'F53', 51182.00, 5246.00, '', 56428.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(435, 'STOW2SS2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static 2 Bay Push Pull Type', '', '', 'SS2', 'F53', 49192.00, 5042.00, '', 54234.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(436, 'STOW2SL2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last   2 Bay Push Pull Type', '', '', 'SL2', 'F53', 51213.00, 5249.00, '', 56462.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(437, 'STOW2TM2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile  2 Bay Push Pull Type', '', '', 'TM2', 'F53', 95728.00, 9812.00, '', 105540.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(438, 'STOW2SD2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static Drive Cover Unit  2 Bay', '', '', 'SD2', 'F53', 54012.00, 5536.00, '', 59548.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(439, 'STOW2LD2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last Drive Unit 2 Bay', '', '', 'LD2', 'F53', 65992.00, 6764.00, '', 72756.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(440, 'STOW2TD2XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile Drive Unit 2 Bay', '', '', 'TD2', 'F53', 114996.00, 11787.00, '', 126783.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(441, 'STOW2SD3XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static Drive Cover Unit  3 Bay', '', '', 'SD3', 'F53', 78256.00, 8021.00, '', 86277.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(442, 'STOW2LD3XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last Drive Unit 3 Bay', '', '', 'LD3', 'F53', 90036.00, 9229.00, '', 99265.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(443, 'STOW2TD3XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile Drive Unit 3 Bay', '', '', 'TD3', 'F53', 161519.00, 16556.00, '', 178074.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(444, 'STOW2SD4XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static Drive Cover Unit  4 Bay', '', '', 'SD4', 'F53', 103191.00, 10577.00, '', 113768.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(445, 'STOW2LD4XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last Drive Unit 4 Bay', '', '', 'LD4', 'F53', 127228.00, 13041.00, '', 140269.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(446, 'STOW2TD4XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile Drive Unit 4 Bay', '', '', 'TD4', 'F53', 224370.00, 22998.00, '', 247368.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(447, 'STOW2SD5XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Static Drive Cover Unit  5 Bay', '', '', 'SD5', 'F53', 129470.00, 13271.00, '', 142741.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(448, 'STOW2LD5XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Single Last Drive Unit 5 Bay', '', '', 'LD5', 'F53', 158333.00, 16229.00, '', 174562.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(449, 'STOW2TD5XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Twin Mobile Drive Unit 5 Bay', '', '', 'TD5', 'F53', 278111.00, 28506.00, '', 306618.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(450, 'STOW2362XXX', '241', 'Welded Model W2 (2362H x 915W x 457D)', 'Hinge Door Pair (2362H x 915W)', '', '', 'HD', 'F53', 7908.00, 811.00, '', 8719.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(451, 'STOW3SS1XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static 1 Bay Push Pull Type', '', '', 'SS1', 'F53', 20929.00, 2145.00, '', 23074.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(452, 'STOW3SL1XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last   1 Bay Push Pull Type', '', '', 'SL1', 'F53', 22964.00, 2354.00, '', 25318.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(453, 'STOW3TM1XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile   1Bay Push Pull Type', '', '', 'TM1', 'F53', 40559.00, 4157.00, '', 44717.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(454, 'STOW3SS2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static 2 Bay Push Pull Type', '', '', 'SS2', 'F53', 38950.00, 3992.00, '', 42943.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(455, 'STOW3SL2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last   2 Bay Push Pull Type', '', '', 'SL2', 'F53', 40895.00, 4192.00, '', 45087.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(456, 'STOW3TM2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile  2 Bay Push Pull Type', '', '', 'TM2', 'F53', 73300.00, 7513.00, '', 80813.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(457, 'STOW3SD2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static Drive Cover Unit  2 Bay', '', '', 'SD2', 'F53', 41141.00, 4217.00, '', 45358.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(458, 'STOW3LD2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last Drive Unit 2 Bay', '', '', 'LD2', 'F53', 52661.00, 5398.00, '', 58059.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(459, 'STOW3TD2XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile Drive Unit 2 Bay', '', '', 'TD2', 'F53', 88432.00, 9064.00, '', 97497.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(460, 'STOW3SD3XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static Drive Cover Unit  3 Bay', '', '', 'SD3', 'F53', 59220.00, 6070.00, '', 65290.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(461, 'STOW3LD3XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last Drive Unit 3 Bay', '', '', 'LD3', 'F53', 71432.00, 7322.00, '', 78754.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(462, 'STOW3TD3XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile Drive Unit 3 Bay', '', '', 'TD3', 'F53', 123150.00, 12623.00, '', 135773.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(463, 'STOW3SD4XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static Drive Cover Unit  4 Bay', '', '', 'SD4', 'F53', 77616.00, 7956.00, '', 85571.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(464, 'STOW3LD4XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last Drive Unit 4 Bay', '', '', 'LD4', 'F53', 98881.00, 10135.00, '', 109016.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(465, 'STOW3TD4XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile Drive Unit 4 Bay', '', '', 'TD4', 'F53', 168084.00, 17229.00, '', 185313.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(466, 'STOW3SD5XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Static Drive Cover Unit  5 Bay', '', '', 'SD5', 'F53', 97944.00, 10039.00, '', 107983.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(467, 'STOW3LD5XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Single Last Drive Unit 5 Bay', '', '', 'LD5', 'F53', 125638.00, 12878.00, '', 138516.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(468, 'STOW3TD5XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Twin Mobile Drive Unit 5 Bay', '', '', 'TD5', 'F53', 214355.00, 21971.00, '', 236326.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(469, 'STOW1980XXX', '241', 'Welded Model W3 ( 1980H x 915W x 381D)', 'Hinge Door Pair (1980H x 915W)', '', '', 'HD', 'F53', 4698.00, 482.00, '', 5180.00, '', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '00:00:00', '2016-03-28 12:55:59', '', 1),
(471, 'FU9201RXL01SXXXX', '244', ' HALO - BQ High Back * GAC', ' HALO - BQ High Back * GAC', 'Pure Leather, Die-Cast Aluminium with buffed Pedestal, KTS Mech 5\nPosition locking, Soft Top Fixed Arms', 'halo2.jpg', '', 'HOA/930', 46995.00, 0.00, '1', 46995.00, 'Blac k(L01) & Camel Colour(L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(472, 'FU9202RVL01SXXXX ', '244', 'HALO - BQ Revolving Vist *  GAC', 'HALO - BQ Revolving Vist *  GAC', 'Pure Leather, Die-Cast Aluminium with buffed Pedestal, KTS Mech 5\nPosition locking, Soft Top Fixed Arms', 'halo3.jpg', '', 'HOA/930', 35057.00, 0.00, '1', 35057.00, 'Blac k(L01) & Camel Colour(L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(473, 'FU9212IVL01SXXXX', '244', ' HALO - BQ Visitor * GAC', ' HALO - BQ Visitor * GAC', 'Pure Leather, Die-Cast Aluminium with buffed Pedestal, KTS Mech 5\nPosition locking, Soft Top Fixed Arms', 'halo4.jpg', '', 'HOA/930', 24086.00, 0.00, '1', 24086.00, 'Blac k(L01) & Camel Colour(L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(474, 'FUSE00TXL01SXXXX', '244', 'SEDNA - BQ SEDNA - BQ Very High Back * GAC', 'SEDNA - BQ SEDNA - BQ Very High Back * GAC', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 39596.00, 0.00, '1', 39596.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(475, 'FUSE01TXL01SXXXX', '244', 'SEDNA - BQ High Back * GAC', 'SEDNA - BQ High Back * GAC', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 38130.00, 0.00, '1', 38130.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(476, 'FUSE02TXL01SXXXX', '244', 'SEDNA - BQ Mid Back', 'SEDNA - BQ Mid Back', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 35196.00, 0.00, '1', 35196.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(477, 'FUSE12XXL01SXXXX', '244', 'SEDNA - BQ Visitor', 'SEDNA - BQ Visitor', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 24931.00, 0.00, '1', 24931.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(478, 'FUSE01TCL01SXXXX ', '244', 'SEDNA - BQ High Back Conference Room', 'SEDNA - BQ High Back Conference Room', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 35930.00, 0.00, '1', 35930.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(479, 'FUSE02TCL01SXXXX ', '244', 'SEDNA - BQ Mid Back Conference Room *  GAC', 'SEDNA - BQ Mid Back Conference Room *  GAC', 'Pure Leather, Chrome Finished Fixed Arms, 4 Position Locking, Anti Shock- Synchro Tilt Mechn, Die-Cast Alumium Pedestal, Bk Ht Adj, Auto- Return Mechanism for Conf Chairs', '', '', '930/HOA', 35050.00, 0.00, '1', 35050.00, 'Black (L01), Camel Colour (L02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(480, 'FU9N01AX069SLNBD', '238', 'Monarch - BOM High Back', 'Monarch - BOM High Back', 'Pure Leather, Die-Cast Aluminium Pedestal, KTS Mech 5 position locking, Soft Top Adj arms', 'Monarch1.jpg ', '', 'HOB', 26798.00, 0.00, '1', 26798.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(481, 'FU9N02AX069SLNBD', '238', 'Monarch - BOM Mid Back', 'Monarch - BOM Mid Back', 'Pure Leather, Die-Cast Aluminium Pedestal, KTS Mech 5 position locking, Soft Top Adj arms', 'Monarch2.jpg ', '', 'HOB', 25013.00, 0.00, '1', 25013.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(482, 'FU9N12AX069SLNBD ', '238', 'Monarch - BOM Visitor', 'Monarch - BOM Visitor', 'Pure Leather, Die-Cast Aluminium Pedestal, KTS Mech 5 position locking, Soft Top Adj arms', 'Monarch3.jpg ', '', 'HOB', 21440.00, 0.00, '1', 21440.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(483, 'FUNP01AX13RSXXXX  ', '238', 'NRG PLUS - BOM High Back', 'NRG PLUS - BOM High Back', 'automatic back-tilt tension adjustment,5 Position tilt limiter,Die Cast polished aluminium Pedestal, Chrome-platting element in PU-up- down adj arms', 'Nrgplus1.jpg', '', 'HOC', 21000.00, 0.00, '1', 21000.00, '13R (Black Leatherite)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(484, 'FUNP02AX13RSXXXX ', '238', ' NRG PLUS - BOM Mid Back', ' NRG PLUS - BOM Mid Back', 'automatic back-tilt tension adjustment,5 Position tilt limiter,Die Cast polished aluminium Pedestal, Chrome-platting element in PU-up- down adj arms', 'Nrgplus2.jpg', '', 'HOC', 20000.00, 0.00, '1', 20000.00, '13R (Black Leatherite)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(485, 'FUNP12XX13RSXXXX  ', '238', 'NRG PLUS - BOM Visitor', 'NRG PLUS - BOM Visitor', 'automatic back-tilt tension adjustment,5 Position tilt limiter,Die Cast polished aluminium Pedestal, Chrome-platting element in PU-up- down adj arms', 'Nrgplus3.jpg', '', '930', 15000.00, 1538.00, '1', 16538.00, '13R (Black Leatherite)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(486, 'FUNP01AXF05SXXXX ', '238', 'NRG PLUS - BOM High Back', 'NRG PLUS - BOM High Back', 'Active Bio Synchro Mechanism with automatic back-tilt tension adjustment,5 Position tilt limiter, 3 way PU-Ht adj arms, Nylon Pedestal', '', '', 'HOC', 16000.00, 0.00, '1', 16000.00, 'F05 (Black Foam Laminated Fabric)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(487, 'FUNP02AXF05SXXXX ', '238', ' NRG PLUS - BOM Mid Back', ' NRG PLUS - BOM Mid Back', 'Active Bio Synchro Mechanism with automatic back-tilt tension adjustment,5 Position tilt limiter, 3 way PU-Ht adj arms, Nylon Pedestal', '', '', 'HOC', 15000.00, 0.00, '1', 15000.00, 'F05 (Black Foam Laminated Fabric)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(488, 'FUNP12XXF05SXXXX ', '238', 'NRG PLUS - BOM Visitor', 'NRG PLUS - BOM Visitor', 'Active Bio Synchro Mechanism with automatic back-tilt tension adjustment,5 Position tilt limiter, 3 way PU-Ht adj arms, Nylon Pedestal', '', '', '930', 10000.00, 1025.00, '1', 11025.00, 'F05 (Black Foam Laminated Fabric)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(489, 'FU9M02AXWO1SXXEN ', '238', 'Leoma - BOM Mid Back', 'Leoma - BOM Mid Back', 'Adj Lumbar Pad Support, Die-cast Aluminium Pedestal, KTS Mech 4 position locking , Mesh Back, Adj PU Arms', 'LEOMA1.jpg', '', 'HOB', 20436.00, 0.00, '1', 20436.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(490, 'FU9M12AXWO1SXXEN ', '238', 'Leoma - BOM Visitor', 'Leoma - BOM Visitor', 'Adj Lumbar Pad Support, Die-cast Aluminium Pedestal, KTS Mech 4 position locking , Mesh Back, Adj PU Arms', 'LEOMA2.jpg', '', 'HOB', 14815.00, 0.00, '1', 14815.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(491, 'FULEO9M01HDRTWD1 ', '238', 'Leoma - BOM Head Rest', 'Leoma - BOM Head Rest', 'Adj Lumbar Pad Support, Die-cast Aluminium Pedestal, KTS Mech 4 position locking , Mesh Back, Adj PU Arms', 'LEOMA3.jpg', '', 'HOB', 1366.00, 0.00, '', 1366.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(492, 'FU3002AS151SXXXX ', '238', 'ACE - Bom Full Back GAC', 'ACE - Bom Full Back GAC', 'Active Bio-Synchro Mech,Bio-Flex Lumber Support, Seat Slide Mech,Die cast polished Aluminum Pedestal, Adj Arms, 5 Position Tilt Limiter', 'ace1.jpg', '', '930', 16173.00, 1658.00, '1', 17831.00, '151-194 (For Colour Code Description details plz refer Intranet)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-05-26 19:24:15', '', 1),
(493, 'FU3002AC151SXXXX ', '238', 'ACE  - BOM Conference', 'ACE  - BOM Conference', 'Active Bio-Synchro Mech,Bio-Flex Lumber Support, Seat Slide Mech,Die cast polished Aluminum Pedestal, Adj Arms, 5 Position Tilt Limiter', 'ace2.jpg', '', '930', 16173.00, 1658.00, '1', 17831.00, '151-194 (For Colour Code Description details plz refer Intranet)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-05-26 19:15:32', '', 1),
(494, 'FU3012AX151SXXXX ', '238', 'ACE  - BOM Visitor', 'ACE  - BOM Visitor', 'Active Bio-Synchro Mech,Bio-Flex Lumber Support, Seat Slide Mech,Die cast polished Aluminum Pedestal, Adj Arms, 5 Position Tilt Limiter', 'ace3.jpg', '', '930', 12653.00, 1297.00, '2', 13950.00, '151-194 (For Colour Code Description details plz refer Intranet)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-05-26 19:06:58', '', 1),
(495, 'FUACEHRXV05SXXXX ', '238', 'ACE  - BOM Headrest', 'ACE  - BOM Headrest', 'Active Bio-Synchro Mech,Bio-Flex Lumber Support, Seat Slide Mech,Die cast polished Aluminum Pedestal, Adj Arms, 5 Position Tilt Limiter', 'ace4.jpg', '', '930', 1094.00, 112.00, '', 1206.00, '151-194 (For Colour Code Description details plz refer Intranet)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-05-26 19:06:58', '', 1),
(496, 'FUPULSAX551SXXXX', '238', 'PULSE (GGC) - BOM Mb Seat blue, Adj. Arms', 'PULSE (GGC) - BOM Mb Seat blue, Adj. Arms', 'Adj Neckrest & Lumber Pad, Adj Seat Height, Back tilt Tension,Recline Lock, Nylon Pedestal, KTS Mechanism 4\nPositon Locking', 'pulse1.jpg', '', 'HOC', 10300.00, 0.00, '1', 10300.00, 'Available in Foam laminated fabric only, Back-Black Mesh only, Seat-\n551 (Blue), 552(Red), 553 (Heena),\n554 (Camel), 555 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(497, 'FUPULSAL551SXXXX ', '238', 'PULSE (GGC) - BOM Mb Seat blue, Adj. Arms Larger Seats', 'PULSE (GGC) - BOM Mb Seat blue, Adj. Arms Larger Seats', 'Adj Neckrest & Lumber Pad, Adj Seat Height, Back tilt Tension,Recline Lock, Nylon Pedestal, KTS Mechanism 4\nPositon Locking', 'pulse2.jpg', '', 'HOC', 10300.00, 0.00, '1', 10300.00, 'Available in Foam laminated fabric only, Back-Black Mesh only, Seat-\n551 (Blue), 552(Red), 553 (Heena),\n554 (Camel), 555 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(498, 'FUPULSTX551SXXXX', '238', 'PULSE (GGC) - BOM Mb Seat blue, Fixed Arms', 'PULSE (GGC) - BOM Mb Seat blue, Fixed Arms', 'Adj Neckrest & Lumber Pad, Adj Seat Height, Back tilt Tension,Recline Lock, Nylon Pedestal, KTS Mechanism 4\nPositon Locking', 'pulse3.jpg', '', 'HOC', 9800.00, 0.00, '1', 9800.00, 'Available in Foam laminated fabric only, Back-Black Mesh only, Seat-\n551 (Blue), 552(Red), 553 (Heena),\n554 (Camel), 555 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(499, 'FUPULSTL551SXXXX', '238', 'PULSE (GGC) - BOM Mb Seat blue, Fixed Arms Larger Seats', 'PULSE (GGC) - BOM Mb Seat blue, Fixed Arms Larger Seats', 'Adj Neckrest & Lumber Pad, Adj Seat Height, Back tilt Tension,Recline Lock, Nylon Pedestal, KTS Mechanism 4\nPositon Locking', 'pulse4.jpg', '', 'HOC', 9800.00, 0.00, '1', 9800.00, 'Available in Foam laminated fabric only, Back-Black Mesh only, Seat-\n551 (Blue), 552(Red), 553 (Heena),\n554 (Camel), 555 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(500, 'FUPULSNRBLKSXXXX ', '238', 'PULSE (GGC) - BOM Neck Rest - Black only', 'PULSE (GGC) - BOM Neck Rest - Black only', '', 'pulse5.jpg', '', 'HOC', 700.00, 0.00, '', 700.00, '', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(501, 'FU3102AXF01SXXXX ', '238', 'VERSA (GGC) - BOM Cushioned Back', 'VERSA (GGC) - BOM Cushioned Back', 'Adj Seat & back Ht, Adj Pu Arms, Bi- Synchro Mechanism, Wishbone’ inspired,\nT- Spine structure, Nylon Pedestal, 5\nPosition Tilt Limiter', '', '', '930', 12078.00, 1238.00, '1', 13316.00, 'Available in Foam laminated fabric\nonly,Carbon Black (F05), Azure Blue (F01), Ruby Red (F02), Smokey Grey (F03), Earth Song (F08), Copper Moon (F11), Mesh only in Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(502, 'FU3102AM501SXXXX ', '238', 'VERSA (GGC) - BOM Net Back', 'VERSA (GGC) - BOM Net Back', 'Adj Seat & back Ht, Adj Pu Arms, Bi- Synchro Mechanism, Wishbone’ inspired,\nT- Spine structure, Nylon Pedestal, 5\nPosition Tilt Limiter', '', '', '930', 11503.00, 1179.00, '1', 12682.00, 'Available in Foam laminated fabric\nonly,Carbon Black (F05), Azure Blue (F01), Ruby Red (F02), Smokey Grey (F03), Earth Song (F08), Copper Moon (F11), Mesh only in Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(503, 'FUASPIREW01XXADJ', '238', 'ASPIRE - BOM Mid back', 'ASPIRE - BOM Mid back', 'CTS Mech, Single Position Locking, PP Arms, Nylon Pedestal, Adj Lumber Pad, Mesh Back', 'aspire1.jpg', '', 'HOB', 13691.00, 0.00, '1', 13691.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(504, 'FUASPIREW01HDRST ', '238', 'ASPIRE - BOM Head Rest', 'ASPIRE - BOM Head Rest', 'CTS Mech, Single Position Locking, PP Arms, Nylon Pedestal, Adj Lumber Pad, Mesh Back', 'aspire2.jpg', '', 'HOB', 1152.00, 0.00, '', 1152.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(505, 'FU7000XXV01SXXXX ', '244', 'PREMIUM EXECUTIVE CHAIRS -  BQ Very High Back * GAC', 'PREMIUM EXECUTIVE CHAIRS -  BQ Very High Back * GAC', 'Centre Tilt mechanism, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', 'premiumex1.jpg', '', 'HOA/930', 16432.00, 0.00, '1', 16432.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(506, 'FU7001XXV01SXXXX', '244', 'PREMIUM EXECUTIVE CHAIRS -  BQ High Back * GAC', 'PREMIUM EXECUTIVE CHAIRS -  BQ High Back * GAC', 'Centre Tilt mechanism, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', 'premiumex2.jpg', '', 'HOA/930', 13296.00, 0.00, '1', 13296.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(507, 'FU7002XXV01SXXXX', '244', 'PREMIUM EXECUTIVE CHAIRS -  BQ Mid Back * GAC', 'PREMIUM EXECUTIVE CHAIRS -  BQ Mid Back * GAC', 'Centre Tilt mechanism, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', 'premiumex3.jpg', '', 'HOA/930', 12447.00, 0.00, '1', 12447.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(508, 'FU7003XXV01SXXXX ', '244', 'PREMIUM EXECUTIVE CHAIRS -  BQ Visitor With Arms', 'PREMIUM EXECUTIVE CHAIRS -  BQ Visitor With Arms', 'Centre Tilt mechanism, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', 'premiumex4.jpg', '', 'HOA/930', 7200.00, 0.00, '2', 7200.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(509, 'FU7004XXV01SXXXX ', '244', 'PREMIUM EXECUTIVE CHAIRS -  BQ Visitor W/o Arms * GAC', 'PREMIUM EXECUTIVE CHAIRS -  BQ Visitor W/o Arms * GAC', 'Centre Tilt mechanism, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', 'premiumex5.jpg', '', 'HOA/930', 6010.00, 0.00, '2', 6010.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(510, 'FU9P01AX069SXXXX ', '238', 'KAREENA -  BOM High Back * GAC', 'KAREENA -  BOM High Back * GAC', 'HB & MB-KTS Mech 4 Position Locking, Soft touch PU Arms, Chrome- Plated arms & Pedestal, Adj Backrest, Conf HB & MB-Fixed arms,Fixed Backrest', 'kareena1.jpg', '', '930', 12418.00, 1273.00, '1', 13691.00, '10R (Sand Dune) 13R (Black) 15R (Brown) V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(511, 'FU9P02AX069SXXXX ', '238', 'KAREENA -  BOM Mid Back', 'KAREENA -  BOM Mid Back', 'HB & MB-KTS Mech 4 Position Locking, Soft touch PU Arms, Chrome- Plated arms & Pedestal, Adj Backrest, Conf HB & MB-Fixed arms,Fixed Backrest', 'kareena2.jpg', '', '930', 11403.00, 1169.00, '1', 12572.00, '10R (Sand Dune) 13R (Black) 15R (Brown) V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(512, 'FU9P12TX069SXXXX ', '238', 'KAREENA -  BOM Visitor * GAC', 'KAREENA -  BOM Visitor * GAC', 'HB & MB-KTS Mech 4 Position Locking, Soft touch PU Arms, Chrome- Plated arms & Pedestal, Adj Backrest, Conf HB & MB-Fixed arms,Fixed Backrest', 'kareena3.jpg', '', '930', 7342.00, 753.00, '1', 8094.00, '10R (Sand Dune) 13R (Black) 15R (Brown) V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(513, 'FU9P01TC069SXXXX ', '238', 'KAREENA -  BOM High Back Conference', 'KAREENA -  BOM High Back Conference', 'HB & MB-KTS Mech 4 Position Locking, Soft touch PU Arms, Chrome- Plated arms & Pedestal, Adj Backrest, Conf HB & MB-Fixed arms,Fixed Backrest', 'kareena4.jpg', '', '930', 10935.00, 1121.00, '1', 12056.00, '10R (Sand Dune) 13R (Black) 15R (Brown) V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(514, 'FU9P02TC069SXXXX ', '238', 'KAREENA -  BOM Mid Back Conference', 'KAREENA -  BOM Mid Back Conference', 'HB & MB-KTS Mech 4 Position Locking, Soft touch PU Arms, Chrome- Plated arms & Pedestal, Adj Backrest, Conf HB & MB-Fixed arms,Fixed Backrest', 'kareena5.jpg', '', '930', 9919.00, 1017.00, '1', 10936.00, '10R (Sand Dune) 13R (Black) 15R (Brown) V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(515, 'FU9101RXV01SXXXX ', '244', 'ULTIMA EXCEED (GAC) -  BQ High Back', 'ULTIMA EXCEED (GAC) -  BQ High Back', 'Advance synchro Mechanism 4\nPosition Locking, Nylon Pedestal, PU Fixed Arms', 'ultimaexceed1.jpg', '', 'HOA/930', 18087.00, 0.00, '1', 18087.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(516, 'FU9102RXV01SXXXX ', '244', 'ULTIMA EXCEED (GAC) -  BQ Mid Back', 'ULTIMA EXCEED (GAC) -  BQ Mid Back', 'Advance synchro Mechanism 4\nPosition Locking, Nylon Pedestal, PU Fixed Arms', 'ultimaexceed2.jpg', '', 'HOA/930', 17261.00, 0.00, '1', 17261.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(517, 'FU9103RXV01SXXXX ', '244', 'ULTIMA EXCEED (GAC) -  BQ Visitor', 'ULTIMA EXCEED (GAC) -  BQ Visitor', 'Advance synchro Mechanism 4\nPosition Locking, Nylon Pedestal, PU Fixed Arms', 'ultimaexceed3.jpg', '', 'HOA/930', 16282.00, 0.00, '1', 16282.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(518, 'FU9T02ASV01SXXXX ', '238', 'GALLOP (GGC) -  BOM Cushion * GAC', 'GALLOP (GGC) -  BOM Cushion * GAC', 'Bio-Synchro Mechanism, 4 way Adj\nArm, Seat-Depth Adj, Ht Adj back, 5\nPostion Tilt Limiter, Nylon Pedestal', 'gallop1.jpg', '', '930', 9929.00, 1018.00, '1', 10947.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(519, 'FU9X02AG151SXBLK ', '238', 'GALLOP (GGC) -  BOM Mesh', 'GALLOP (GGC) -  BOM Mesh', 'KTS Mech 4 Position Locking, Adj Inbuilt Lumber, Adj PU Arms, Mesh Back, Nylon Pedestal', 'gallop2.jpg', '', '930', 8085.00, 829.00, '1', 8914.00, '151-172  (For Colour Code Description details plz refer Intranet) Only in Voila', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(520, 'FU9Y02AE151SXXXX ', '244', 'AGILE - BQ Mid Back with Elastomer Back', 'AGILE - BQ Mid Back with Elastomer Back', 'Elastomer back, CTS Mechacnism, T Type Adj arms, Nylon Pedestal, Waterfall Cushion Seat Edge', '', '', 'HOA/930', 9800.00, 0.00, '1', 9800.00, '151-167 (For Colour Code Description details plz refer Intranet) Seat only in Voila , Back in Black Elastomer only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(521, 'FU9Y01TX151SXXXX ', '244', 'VENTILLO -  BQ High Back', 'VENTILLO -  BQ High Back', 'CTS Mechanim, Upright position locking, Mesh Back, Fixed arms, Nylon Pedestal', 'ventillo1.jpg', '', 'HOA/930', 6650.00, 0.00, '1', 6650.00, 'Mesh only in Black, 151-172  (For Colour Code Description details plz refer Intranet) Only in Voila', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(522, 'FU9Y02TX151SXXXX ', '244', 'VENTILLO -  BQ Mid Back', 'VENTILLO -  BQ Mid Back', 'CTS Mechanim, Upright position locking, Mesh Back, Fixed arms, Nylon Pedestal', 'ventillo2.jpg', '', 'HOA/930', 6450.00, 0.00, '1', 6450.00, 'Mesh only in Black, 151-172  (For Colour Code Description details plz refer Intranet) Only in Voila', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(523, 'FU9Y12TX151SXXXX', '244', 'VENTILLO -  BQ Visitor', 'VENTILLO -  BQ Visitor', 'CTS Mechanim, Upright position locking, Mesh Back, Fixed arms, Nylon Pedestal', 'ventillo3.jpg', '', 'HOA/930', 5300.00, 0.00, '2', 5300.00, 'Mesh only in Black, 151-172  (For Colour Code Description details plz refer Intranet) Only in Voila', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(524, 'FU9V02AM551SXXXX ', '238', 'FLORA -  BOM Mesh Mid Back', 'FLORA -  BOM Mesh Mid Back', 'CTS Mechanim, Upright posiion locking, Option of Cushion & Mesh Back, Adj arms, Nylon Pedestal, Available in Foam laminated fabric only', 'flora1.jpg', '', '930', 7400.00, 759.00, '1', 8159.00, 'Mesh Bk- 551(Blue St &Bk),\n552(Red St & Bk), 553(Heena St & Bk), 554(Camel St & Bk) Cushion-\n35(Blue St & Bk), 36(Red St & Bk),\n58(Heena St & Bk), 79(Camel St & Bk)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(525, 'FU9V02AXB35SXXXX ', '238', 'FLORA -  BOM Cushion Mid Back', 'FLORA -  BOM Cushion Mid Back', 'CTS Mechanim, Upright posiion locking, Option of Cushion & Mesh Back, Adj arms, Nylon Pedestal, Available in Foam laminated fabric only', 'flora2.jpg', '', '930', 7400.00, 759.00, '1', 8159.00, 'Mesh Bk- 551(Blue St &Bk),\n552(Red St & Bk), 553(Heena St & Bk), 554(Camel St & Bk) Cushion-\n35(Blue St & Bk), 36(Red St & Bk),\n58(Heena St & Bk), 79(Camel St & Bk)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(526, 'FU9V12IM551SXXXX ', '238', 'FLORA -  BOM Mesh Visitor', 'FLORA -  BOM Mesh Visitor', 'CTS Mechanim, Upright posiion locking, Option of Cushion & Mesh Back, Adj arms, Nylon Pedestal, Available in Foam laminated fabric only', 'flora3.jpg', '', '930', 4900.00, 502.00, '2', 5402.00, 'Mesh Bk- 551(Blue St &Bk),\n552(Red St & Bk), 553(Heena St & Bk), 554(Camel St & Bk) Cushion-\n35(Blue St & Bk), 36(Red St & Bk),\n58(Heena St & Bk), 79(Camel St & Bk)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(527, 'FU9VHRXX13RSXXXX ', '238', 'FLORA -  BOM Headrest for Cushion Version only', 'FLORA -  BOM Headrest for Cushion Version only', 'CTS Mechanim, Upright posiion locking, Option of Cushion & Mesh Back, Adj arms, Nylon Pedestal, Available in Foam laminated fabric only', 'flora3.jpg', '', '930', 1032.00, 106.00, '1', 1138.00, 'Mesh Bk- 551(Blue St &Bk),\n552(Red St & Bk), 553(Heena St & Bk), 554(Camel St & Bk) Cushion-\n35(Blue St & Bk), 36(Red St & Bk),\n58(Heena St & Bk), 79(Camel St & Bk)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(528, 'FU7001DXV01SXXXX ', '244', 'REGENCY -  BQ High Back * GAC', 'REGENCY -  BQ High Back * GAC', 'Thick Cushion, Centre-Tilt Mech, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', '', '', 'HOA/930', 14780.00, 0.00, '1', 14780.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(529, 'FU7002DXV01SXXXX ', '244', 'REGENCY -  BQ Mid Back * GAC', 'REGENCY -  BQ Mid Back * GAC', 'Thick Cushion, Centre-Tilt Mech, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', '', '', 'HOA/930', 13865.00, 0.00, '1', 13865.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(530, 'FU7003DXV01SXXXX ', '244', 'REGENCY -  BQ Visitor With Arms', 'REGENCY -  BQ Visitor With Arms', 'Thick Cushion, Centre-Tilt Mech, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', '', '', 'HOA/930', 8100.00, 0.00, '2', 8100.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(531, 'FU7004DXV01SXXXX ', '244', 'REGENCY -  BQ Visitor W/o Arms * GAC', 'REGENCY -  BQ Visitor W/o Arms * GAC', 'Thick Cushion, Centre-Tilt Mech, Upright Position Locking, Soft Top Fixed Arms, Tilt Tension Adj, Nylon Pedestal', '', '', 'HOA/930', 7262.00, 0.00, '2', 7262.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(532, 'FU7101RXV01SXXXX ', '244', 'PREMIER -  BQ High Back', 'PREMIER -  BQ High Back', 'Centre Tilt Mechanism, Powder\nCoated Metal Pedestal, PP Fixed Arms', '', '', 'HOA/930', 7723.00, 0.00, '1', 7723.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(533, 'FU7102RXV01SXXXX ', '244', 'PREMIER -  BQ Mid Back', 'PREMIER -  BQ Mid Back', 'Centre Tilt Mechanism, Powder\nCoated Metal Pedestal, PP Fixed Arms', '', '', 'HOA/930', 6840.00, 0.00, '1', 6840.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(534, 'FU7112RXV01SXXXX ', '244', 'PREMIER -  BQ Visitor With Arms', 'PREMIER -  BQ Visitor With Arms', 'Centre Tilt Mechanism, Powder\nCoated Metal Pedestal, PP Fixed Arms', '', '', 'HOA/930', 4341.00, 0.00, '2', 4341.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(535, 'FU7112XXV01SXXXX ', '244', 'PREMIER -  BQ Visitor W/o Arms', 'PREMIER -  BQ Visitor W/o Arms', 'Centre Tilt Mechanism, Powder\nCoated Metal Pedestal, PP Fixed Arms', '', '', 'HOA/930', 3988.00, 0.00, '2', 3988.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(536, 'FU9U01RGV01SXXXX ', '244', 'BRAVO (GGC & GAC) -  BQ High Back', 'BRAVO (GGC & GAC) -  BQ High Back', 'Centre tilt synchro, Nylon Pedestal, PP Fixed Arms, Nylon Pedesta', '', '', 'HOA/930', 7510.00, 0.00, '1', 7510.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(537, 'FU9U02RGV01SXXXX ', '244', 'BRAVO (GGC & GAC) -  BQ Mid Back', 'BRAVO (GGC & GAC) -  BQ Mid Back', 'Centre tilt synchro, Nylon Pedestal, PP Fixed Arms, Nylon Pedesta', '', '', 'HOA/930', 6725.00, 0.00, '1', 6725.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(538, 'FU9U12RGV01SXXXX ', '244', 'BRAVO (GGC & GAC) -  BQ Visitor', 'BRAVO (GGC & GAC) -  BQ Visitor', 'Centre tilt synchro, Nylon Pedestal, PP Fixed Arms, Nylon Pedesta', '', '', 'HOA/930', 5086.00, 0.00, '2', 5086.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(539, 'FU9Q01AXV01SXXXX ', '238', 'KUBIX (GGC) -  BOM High Back * GAC', 'KUBIX (GGC) -  BOM High Back * GAC', 'CTS Mech, Tilt tension adj, Soft top swivel front & back adj arms, Nylon Pedestal', '', '', '930', 9134.00, 936.00, '1', 10070.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(540, 'FU9Q02AXV01SXXXX ', '238', 'KUBIX (GGC) -  BOM Mid Back * GAC', 'KUBIX (GGC) -  BOM Mid Back * GAC', 'CTS Mech, Tilt tension adj, Soft top swivel front & back adj arms, Nylon Pedestal', '', '', '930', 8508.00, 872.00, '1', 9380.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(541, 'FU9Q12XXV01SXXXX ', '238', 'KUBIX (GGC) -  BOM Visitor', 'KUBIX (GGC) -  BOM Visitor', 'CTS Mech, Tilt tension adj, Soft top swivel front & back adj arms, Nylon Pedestal', '', '', '930', 6881.00, 705.00, '1', 7587.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(542, 'FU5H01AXV01SXH94 ', '244', 'SWING -  BQ High Back', 'SWING -  BQ High Back', 'Permanent contact Mechanism 3\nPosition locking, Pneumatic height adjustment & Unique back upholstery, PU Adj Arms', '', '', 'HOA/930', 6728.00, 0.00, '1', 6728.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(543, 'FU5H02AXV01SXH94 ', '244', 'SWING -  BQ Mid Back', 'SWING -  BQ Mid Back', 'Permanent contact Mechanism 3\nPosition locking, Pneumatic height adjustment & Unique back upholstery, PU Adj Arms', '', '', 'HOA/930', 6140.00, 0.00, '1', 6140.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(544, 'FU5H12XXV01SXXXX ', '244', 'SWING -  BQ Visitor W/o arms', 'SWING -  BQ Visitor W/o arms', 'Permanent contact Mechanism 3\nPosition locking, Pneumatic height adjustment & Unique back upholstery, PU Adj Arms', '', '', 'HOA/930', 4818.00, 0.00, '2', 4818.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12, V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(545, 'FU5001TXV01SXXXX ', '244', 'ECONOMY EXECUTIVE (E-II) -  BQ High Back', 'ECONOMY EXECUTIVE (E-II) -  BQ High Back', 'Perm Cont Mech upright position locking, Fixed PU Arms, Metal Powder Coated Pedestal', '', '', 'HOA/930', 7805.00, 0.00, '1', 7805.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(546, 'FU5002TXV01SXXEN ', '244', 'ECONOMY EXECUTIVE (E-II) -  BQ Mid Back', 'ECONOMY EXECUTIVE (E-II) -  BQ Mid Back', 'Perm Cont Mech upright position locking, Fixed PU Arms, Metal Powder Coated Pedestal', '', '', 'HOA/930', 7274.00, 0.00, '1', 7274.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(547, 'FU5012TXV01SXXEN', '244', 'ECONOMY EXECUTIVE (E-II) -  BQ Visitor ', 'ECONOMY EXECUTIVE (E-II) -  BQ Visitor ', 'Perm Cont Mech upright position locking, Fixed PU Arms, Metal Powder Coated Pedestal', '', '', 'HOA/930', 5774.00, 0.00, '2', 5774.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(548, 'FU7201RXV01SNXXXX ', '244', 'EARL -  BQ High Back', 'EARL -  BQ High Back', 'Fixed Arms, Centre tilt Mechanism, Nylon Pedestal', '', '', 'HOA/930', 8032.00, 0.00, '1', 8032.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(549, 'FU7202RXV01SNXXXX ', '244', 'EARL -  BQ Mid Back', 'EARL -  BQ Mid Back', 'Fixed Arms, Centre tilt Mechanism, Nylon Pedestal', '', '', 'HOA/930', 7118.00, 0.00, '1', 7118.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(550, 'FU7212RXV01SXXXX ', '244', 'EARL -  BQ Visitor ', 'EARL -  BQ Visitor ', 'Fixed Arms, Centre tilt Mechanism, Nylon Pedestal', '', '', 'HOA/930', 4512.00, 0.00, '2', 4512.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V1\n7', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '0000-00-00', '05:36:00', '2016-03-28 12:55:59', '', 1),
(551, 'STTDUA1S0203', '240', 'TDU 750X690 TR WH/BO.WHT SHF', 'TDU 750X690 TR WH/BO.WHT SHF', '', 'TDU_img2_1.jpg', '690H X 750W X 470D', 'F53', 13354.00, 1369.00, '', 14723.00, '203 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(552, 'STTDUA2S0203', '240', 'TDU 750X1169 TR WH/BO.WHT SHF', 'TDU 750X1169 TR WH/BO.WHT SHF', '', 'TDU_img2_2.jpg', '1169H X 750W X 470D', 'F53', 15200.00, 1558.00, '', 16758.00, '204 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(553, 'STTDUB1S0203', '240', 'TDU 900X690 TR WH/BO.WHT SHF', 'TDU 900X690 TR WH/BO.WHT SHF', '', 'TDU_img2_3.jpg', '690H X 900W X 470D', 'F53', 14831.00, 1520.00, '', 16351.00, '205 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(554, 'STTDUB1N0203', '240', 'TDU 900X690 TR WH/BO.WHT', 'TDU 900X690 TR WH/BO.WHT', '', 'TDU_img2_4.jpg', '690H X 900W X 470D', 'F53', 14338.00, 1470.00, '', 15808.00, '206 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(555, 'STTDUB2S0203', '240', 'TDU 900X1169 TR WH/BO.WHT SHF', 'TDU 900X1169 TR WH/BO.WHT SHF', '', 'TDU_img2_5.jpg', '1169H X 900W X 470D', 'F53', 17009.00, 1743.00, '', 18752.00, '207 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1);
INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(556, 'STTDUB2N0203', '240', 'TDU 900X1169 TR WH/BO.WHT', 'TDU 900X1169 TR WH/BO.WHT', '', 'TDU_img2_6.jpg', '1169H X 900W X 470D', 'F53', 16074.00, 1648.00, '', 17722.00, '208 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(557, 'STTDUB3S0203', '240', 'TDU 900X2000 TR WH/BO.WHT SHF', 'TDU 900X2000 TR WH/BO.WHT SHF', '', 'TDU_img2_7.jpg', '2000H X 900W X 470D', 'F53', 24062.00, 2466.00, '', 26528.00, '209 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(558, 'STTDUB3N0203', '240', 'TDU 900X2000 TR WH/BO.WHT', 'TDU 900X2000 TR WH/BO.WHT', '', 'TDU_img2_8.jpg', '2000H X 900W X 470D', 'F53', 21809.00, 2235.00, '', 24044.00, '210 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(559, 'STTDUC1S0203', '240', 'TDU 1200X690 TR WH/BO.WHT SHF', 'TDU 1200X690 TR WH/BO.WHT SHF', '', 'TDU_img1_1.jpg', '690H X 1200W X 470D', 'F53', 17662.00, 1810.00, '', 19472.00, '211 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(560, 'STTDUC1N0203', '240', 'TDU 1200X690 TR WH/BO.WHT', 'TDU 1200X690 TR WH/BO.WHT', '', 'TDU_img1_2.jpg', '690H X 1200W X 470D', 'F53', 16738.00, 1716.00, '', 18454.00, '212 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(561, 'STTDUC2S0203', '240', 'TDU 1200X1169 TR WH/BO.WHT SHF', 'TDU 1200X1169 TR WH/BO.WHT SHF', '', 'TDU_img1_3.jpg', '1169H X 1200W X 470D', 'F53', 20000.00, 2050.00, '', 22050.00, '213 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(562, 'STTDUC2N0203', '240', 'TDU 1200X1169 TR WH/BO.WHT', 'TDU 1200X1169 TR WH/BO.WHT', '', 'TDU_img1_4.jpg', '1169H X 1200W X 470D', 'F53', 18954.00, 1943.00, '', 20897.00, '214 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(563, 'STTDUC3S0203', '240', 'TDU 1200X2000 TR WH/BO.WHT SHF', 'TDU 1200X2000 TR WH/BO.WHT SHF', '', 'TDU_img1_5.jpg', '2000H X 1200W X 470D', 'F53', 25982.00, 2663.00, '', 28645.00, '215 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(564, 'STTDUC3N0203', '240', 'TDU 1200X2000 TR WH/BO.WHT', 'TDU 1200X2000 TR WH/BO.WHT', '', 'TDU_img1_6.jpg', '2000H X 1200W X 470D', 'F53', 22277.00, 2283.00, '', 24560.00, '216 : Bond White Body with White Translucent  Shutters (With and Without Shelves)', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(565, 'STBKNWSB074', '240', 'KD BOOK RACKS SINGLE SIDED WOOD & STEEL BOOK RACK BASE UNIT', 'KD BOOK RACKS SINGLE SIDED WOOD & STEEL BOOK RACK BASE UNIT', '', 'KD_Bookrack_img1.jpg', '1890Hx900Wx300D', 'F53', 16129.00, 1653.00, '', 17782.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(566, 'STBKNWSA074', '240', 'KD BOOK RACKS SINGLE SIDED WOOD & STEEL BOOK RACK ADD ON UNIT', 'KD BOOK RACKS SINGLE SIDED WOOD & STEEL BOOK RACK ADD ON UNIT', '', 'KD_Bookrack_img2.jpg', '1890Hx900Wx300D', 'F53', 13037.00, 1336.00, '', 14373.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(567, 'STBKNWDB074', '240', 'KD BOOK RACKS DOUBLE SIDED WOOD & STEEL BOOK RACK BASE UNIT', 'KD BOOK RACKS DOUBLE SIDED WOOD & STEEL BOOK RACK BASE UNIT', '', 'KD_Bookrack_img3.jpg', '1890Hx900Wx590D', 'F53', 27852.00, 2855.00, '', 30707.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(568, 'STBKNWDA074', '240', 'KD BOOK RACKS DOUBLE SIDED WOOD & STEEL BOOK RACK ADD ON UNIT', 'KD BOOK RACKS DOUBLE SIDED WOOD & STEEL BOOK RACK ADD ON UNIT', '', 'KD_Bookrack_img4.jpg', '1890Hx900Wx590D', 'F53', 22916.00, 2349.00, '', 25265.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(569, 'STBKRSSBXXX', '240', 'KD BOOK RACKS SINGLE SIDED STEEL BOOK RACK BASE UNIT', 'KD BOOK RACKS SINGLE SIDED STEEL BOOK RACK BASE UNIT', '', 'KD_Bookrack_img5.jpg', '1850Hx900Wx316D', 'F53', 10576.00, 1084.00, '', 11660.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(570, 'STBKRSSAXXX', '240', 'KD BOOK RACKS SINGLE SIDED STEEL BOOK RACK ADD ON UNIT', 'KD BOOK RACKSSINGLE SIDED STEEL BOOK RACK ADD ON UNIT', '', 'KD_Bookrack_img6.jpg', '1850Hx900Wx316D', 'F53', 10032.00, 1028.00, '', 11060.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(571, 'STBKRSDBXXX', '240', 'KD BOOK RACKS DOUBLE SIDED STEEL BOOK RACK BASE UNIT', 'KD BOOK RACKS DOUBLE SIDED STEEL BOOK RACK BASE UNIT', '', 'KD_Bookrack_img7.jpg', '1850Hx900Wx600D', 'F53', 17184.00, 1761.00, '', 18946.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(572, 'STBKRSDAXXX', '240', 'KD BOOK RACKS DOUBLE SIDED  STEEL BOOK RACK ADD ON UNIT', 'KD BOOK RACKS DOUBLE SIDED  STEEL BOOK RACK ADD ON UNIT', '', 'KD_Bookrack_img8.jpg', '1850Hx900Wx600D', 'F53', 16029.00, 1643.00, '', 17672.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(573, 'STBKRSS0074', '240', 'KD BOOK RACKS STAND FOR SINGLE SIDED FOR STEEL UNIT ONLY', 'KD BOOK RACKS STAND FOR SINGLE SIDED FOR STEEL UNIT ONLY', '', 'KD_Bookrack_img9.jpg', '125HX900WX316D', 'F53', 1280.00, 131.00, '', 1411.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(574, 'STBKRSD0074', '240', 'KD BOOK RACKS STAND FOR DOUBLE SIDED FOR STEEL UNIT ONLY', 'KD BOOK RACKS STAND FOR DOUBLE SIDED FOR STEEL UNIT ONLY', '', 'KD_Bookrack_img10.jpg', '125HX900WX600D', 'F53', 1606.00, 165.00, '', 1771.00, ' 074-Kitchen  Metallic Silver / White Cedar Laminate for Wooden Side Panels. For XXX - 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(575, 'STOW1SS1XXX', '241', 'Welded Model W1 Single Static 1 Bay Push Pull Type', 'Welded Model W1 Single Static 1 Bay Push Pull Type', '', '', 'SS1( 1980H x 915W x 457D)', 'F53', 23119.00, 2370.00, '', 25489.00, '205 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(576, 'STOW1SL1XXX', '241', 'Welded Model W1 Single Last   1 Bay Push Pull Type', 'Welded Model W1 Single Last   1 Bay Push Pull Type', '', '', 'SL1( 1980H x 915W x 457D)', 'F53', 25374.00, 2601.00, '', 27975.00, '206 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(577, 'STOW1TM1XXX', '241', 'Welded Model W1 Twin Mobile   1Bay Push Pull Type', 'Welded Model W1 Twin Mobile   1Bay Push Pull Type', '', '', 'TM1( 1980H x 915W x 457D)', 'F53', 45017.00, 4614.00, '', 49631.00, '207 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(578, 'STOW1SS2XXX', '241', 'Welded Model W1 Single Static 2 Bay Push Pull Type', 'Welded Model W1Single Static 2 Bay Push Pull Type', '', '', 'SS2( 1980H x 915W x 457D)', 'F53', 43247.00, 4433.00, '', 47680.00, '208 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(579, 'STOW1SL2XXX', '241', 'Welded Model W1 Single Last   2 Bay Push Pull Type', 'Welded Model W1 Single Last   2 Bay Push Pull Type', '', '', 'SL2( 1980H x 915W x 457D)', 'F53', 45263.00, 4639.00, '', 49903.00, '209 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(580, 'STOW1TM2XXX', '241', 'Welded Model W1 Twin Mobile  2 Bay Push Pull Type', 'Welded Model W1 Twin Mobile  2 Bay Push Pull Type', '', '', 'TM2( 1980H x 915W x 457D)', 'F53', 83871.00, 8597.00, '', 92468.00, '210 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(581, 'STOW1SD2XXX', '241', 'Welded Model W1 Single Static Drive Cover Unit  2 Bay', 'Welded Model W1 Single Static Drive Cover Unit  2 Bay', '', '', 'SD2( 1980H x 915W x 457D)', 'F53', 45509.00, 4665.00, '', 50174.00, '211 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(582, 'STOW1LD2XXX', '241', 'Welded Model W1 Single Last Drive Unit 2 Bay', 'Welded Model W1 Single Last Drive Unit 2 Bay', '', '', 'LD2( 1980H x 915W x 457D)', 'F53', 56907.00, 5833.00, '', 62740.00, '212 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(583, 'STOW1TD2XXX', '241', 'Welded Model W1 Twin Mobile Drive Unit 2 Bay', 'Welded Model W1 Twin Mobile Drive Unit 2 Bay', '', '', 'TD2( 1980H x 915W x 457D)', 'F53', 97640.00, 10008.00, '', 107648.00, '213 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(584, 'STOW1SD3XXX', '241', 'Welded Model W1 Single Static Drive Cover Unit  3 Bay', 'Welded Model W1 Single Static Drive Cover Unit  3 Bay', '', '', 'SD3( 1980H x 915W x 457D)', 'F53', 65630.00, 6727.00, '', 72357.00, '214 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(585, 'STOW1LD3XXX', '241', 'Welded Model W1 Single Last Drive Unit 3 Bay', 'Welded Model W1 Single Last Drive Unit 3 Bay', '', '', 'LD3( 1980H x 915W x 457D)', 'F53', 77286.00, 7922.00, '', 85208.00, '215 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(586, 'STOW1TD3XXX', '241', 'Welded Model W1 Twin Mobile Drive Unit 3 Bay', 'Welded Model W1 Twin Mobile Drive Unit 3 Bay', '', '', 'TD3( 1980H x 915W x 457D)', 'F53', 136002.00, 13940.00, '', 149943.00, '216 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(587, 'STOW1SD4XXX', '241', 'Welded Model W1 Single Static Drive Cover Unit  4 Bay', 'Welded Model W1 Single Static Drive Cover Unit  4 Bay', '', '', 'SD4( 1980H x 915W x 457D)', 'F53', 86358.00, 8852.00, '', 95210.00, '217 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(588, 'STOW1LD4XXX', '241', 'Welded Model W1 Single Last Drive Unit 4 Bay', 'Welded Model W1 Single Last Drive Unit 4 Bay', '', '', 'LD4( 1980H x 915W x 457D)', 'F53', 109271.00, 11200.00, '', 120471.00, '218 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(589, 'STOW1TD4XXX', '241', 'Welded Model W1 Twin Mobile Drive Unit 4 Bay', 'Welded Model W1 Twin Mobile Drive Unit 4 Bay', '', '', 'TD4( 1980H x 915W x 457D)', 'F53', 189924.00, 19467.00, '', 209391.00, '219 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(590, 'STOW1SD5XXX', '241', 'Welded Model W1 Single Static Drive Cover Unit  5 Bay', 'Welded Model W1 Single Static Drive Cover Unit  5 Bay', '', '', 'SD5( 1980H x 915W x 457D)', 'F53', 108399.00, 11111.00, '', 119510.00, '220 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(591, 'STOW1LD5XXX', '241', 'Welded Model W1 Single Last Drive Unit 5 Bay', 'Welded Model W1 Single Last Drive Unit 5 Bay', '', '', 'LD5( 1980H x 915W x 457D)', 'F53', 135944.00, 13934.00, '', 149878.00, '221 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(592, 'STOW1TD5XXX', '241', 'Welded Model W1 Twin Mobile Drive Unit 5 Bay', 'Welded Model W1 Twin Mobile Drive Unit 5 Bay', '', '', 'TD5( 1980H x 915W x 457D)', 'F53', 235180.00, 24106.00, '', 259286.00, '222 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(593, 'STOW1980XXX', '241', 'Welded Model W1 Hinge Door Pair (1980H x 915W)', 'Welded Model W1 Hinge Door Pair (1980H x 915W)', '', '', 'HD( 1980H x 915W x 457D)', 'F53', 4698.00, 482.00, '', 5180.00, '223 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(594, 'STO15SS1XXX', '241', 'KD Optimizer 15 SS1-Single Static 1 Bay Push Pull Type', 'KD Optimizer 15 SS1-Single Static 1 Bay Push Pull Type', '', 'KD_Optimizer_img1.jpg', 'SS1(915 mm W x 381mm D x 1980mm H)', 'F53', 17514.00, 1795.00, '', 19309.00, ' 205 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(595, 'STO15SL1XXX', '241', 'KD Optimizer 15 SL1-Single Last   1 Bay Push Pull Type', 'KD Optimizer 15 SL1-Single Last   1 Bay Push Pull Type', '', 'KD_Optimizer_img2.jpg', 'SL1(915 mm W x 381mm D x 1980mm H)', 'F53', 19555.00, 2004.00, '', 21559.00, ' 206 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(596, 'STO15TM1XXX', '241', 'KD Optimizer 15 TM1-Twin Mobile   1Bay Push Pull Type', 'KD Optimizer 15 TM1-Twin Mobile   1Bay Push Pull Type', '', 'KD_Optimizer_img3.jpg', 'TM1(915 mm W x 381mm D x 1980mm H)', 'F53', 29583.00, 3032.00, '', 32616.00, ' 207 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(597, 'STO15SS2XXX', '241', 'KD Optimizer 15 SS2-Single Static 2 Bay Push Pull Type', 'KD Optimizer 15 SS2-Single Static 2 Bay Push Pull Type', '', 'KD_Optimizer_img4.jpg', 'SS2(915 mm W x 381mm D x 1980mm H)', 'F53', 31195.00, 3197.00, '', 34392.00, ' 208 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(598, 'STO15SL2XXX', '241', 'KD Optimizer 15 SL2-Single Last   2 Bay Push Pull Type', 'KD Optimizer 15 SL2-Single Last   2 Bay Push Pull Type', '', 'KD_Optimizer_img5.jpg', 'SL2(915 mm W x 381mm D x 1980mm H)', 'F53', 33189.00, 3402.00, '', 36591.00, ' 209 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(599, 'STO15TM2XXX', '241', 'KD Optimizer 15 TM2-Twin Mobile  2 Bay Push Pull Type', 'KD Optimizer 15 TM2-Twin Mobile  2 Bay Push Pull Type', '', 'KD_Optimizer_img6.jpg', 'TM2(915 mm W x 381mm D x 1980mm H)', 'F53', 49646.00, 5089.00, '', 54735.00, ' 210 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(600, 'STO15SD2XXX', '241', 'KD Optimizer 15 SD2-Single Static Drive Cover Unit  2 Bay', 'KD Optimizer 15 SD2-Single Static Drive Cover Unit  2 Bay', '', 'KD_Optimizer_img7.jpg', 'SD2(915 mm W x 381mm D x 1980mm H)', 'F53', 33430.00, 3427.00, '', 36857.00, ' 211 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(601, 'STO15LD2XXX', '241', 'KD Optimizer 15 LD2-Single Last Drive Unit 2 Bay', 'KD Optimizer 15 LD2-Single Last Drive Unit 2 Bay', '', 'KD_Optimizer_img8.jpg', 'LD2(915 mm W x 381mm D x 1980mm H)', 'F53', 45130.00, 4626.00, '', 49756.00, ' 212 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(602, 'STO15TD2XXX', '241', 'KD Optimizer 15 TD2-Twin Mobile Drive Unit 2 Bay', 'KD Optimizer 15 TD2-Twin Mobile Drive Unit 2 Bay', '', 'KD_Optimizer_img9.jpg', 'TD2(915 mm W x 381mm D x 1980mm H)', 'F53', 65026.00, 6665.00, '', 71691.00, ' 213 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(603, 'STO15SD3XXX', '241', 'KD Optimizer 15 SD3-Single Static Drive Cover Unit  3 Bay', 'KD Optimizer 15 SD3-Single Static Drive Cover Unit  3 Bay', '', 'KD_Optimizer_img10.jpg', 'SD3(915 mm W x 381mm D x 1980mm H)', 'F53', 47191.00, 4837.00, '', 52028.00, ' 214 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(604, 'STO15LD3XXX', '241', 'KD Optimizer 15 LD3-Single Last Drive Unit 3 Bay', 'KD Optimizer 15 LD3-Single Last Drive Unit 3 Bay', '', 'KD_Optimizer_img11.jpg', 'LD3(915 mm W x 381mm D x 1980mm H)', 'F53', 59601.00, 6109.00, '', 65710.00, ' 215 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(605, 'STO15TD3XXX', '241', 'KD Optimizer 15 TD3-Twin Mobile Drive Unit 3 Bay', 'KD Optimizer 15 TD3-Twin Mobile Drive Unit 3 Bay', '', 'KD_Optimizer_img12.jpg', 'TD3(915 mm W x 381mm D x 1980mm H)', 'F53', 87110.00, 8929.00, '', 96039.00, ' 216 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(606, 'STO15SD4XXX', '241', 'KD Optimizer 15 SD4-Single Static Drive Cover Unit  4 Bay', 'KD Optimizer 15 SD4-Single Static Drive Cover Unit  4 Bay', '', 'KD_Optimizer_img13.jpg', 'SD4(915 mm W x 381mm D x 1980mm H)', 'F53', 62161.00, 6371.00, '', 68532.00, ' 217 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(607, 'STO15LD4XXX', '241', 'KD Optimizer 15 LD4-Single Last Drive Unit 4 Bay', 'KD Optimizer 15 LD4-Single Last Drive Unit 4 Bay', '', 'KD_Optimizer_img14.jpg', 'LD4(915 mm W x 381mm D x 1980mm H)', 'F53', 85024.00, 8715.00, '', 93739.00, ' 218 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(608, 'STO15TD4XXX', '241', 'KD Optimizer 15 TD4-Twin Mobile Drive Unit 4 Bay', 'KD Optimizer 15 TD4-Twin Mobile Drive Unit 4 Bay', '', 'KD_Optimizer_img15.jpg', 'TD4(915 mm W x 381mm D x 1980mm H)', 'F53', 121241.00, 12427.00, '', 133668.00, ' 219 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(609, 'STO15SD5XXX', '241', 'KD Optimizer 15 SD5-Single Static Drive Cover Unit  5 Bay', 'KD Optimizer 15 SD5-Single Static Drive Cover Unit  5 Bay', '', 'KD_Optimizer_img16.jpg', 'SD5(915 mm W x 381mm D x 1980mm H)', 'F53', 78437.00, 8040.00, '', 86477.00, ' 220 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(610, 'STO15LD5XXX', '241', 'KD Optimizer 15 LD5-Single Last Drive Unit 5 Bay', 'KD Optimizer 15 LD5-Single Last Drive Unit 5 Bay', '', 'KD_Optimizer_img17.jpg', 'LD5(915 mm W x 381mm D x 1980mm H)', 'F53', 106939.00, 10961.00, '', 117900.00, ' 221 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(611, 'STO15TD5XXX', '241', 'KD Optimizer 15 TD5-Twin Mobile Drive Unit 5 Bay', 'KD Optimizer 15 TD5-Twin Mobile Drive Unit 5 Bay', '', 'KD_Optimizer_img18.jpg', 'TD5(915 mm W x 381mm D x 1980mm H)', 'F53', 155747.00, 15964.00, '', 171711.00, ' 222 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(612, 'STO15SD6XXX', '241', 'KD Optimizer 15 SD6-Single Static Drive Cover Unit  6 Bay', 'KD Optimizer 15 SD6-Single Static Drive Cover Unit  6 Bay', '', 'KD_Optimizer_img19.jpg', 'SD6(915 mm W x 381mm D x 1980mm H)', 'F53', 92678.00, 9500.00, '', 102178.00, ' 223 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(613, 'STO15TD6XXX', '241', 'KD Optimizer 15 TD6-Twin Mobile Drive Unit 6 Bay', 'KD Optimizer 15 TD6-Twin Mobile Drive Unit 6 Bay', '', 'KD_Optimizer_img20.jpg', 'TD6(915 mm W x 381mm D x 1980mm H)', 'F53', 260665.00, 26718.00, '', 287383.00, ' 224 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(614, 'STOPHD00XXX', '241', 'KD Optimizer 15 HD-Hinge Door Pair', 'KD Optimizer 15 HD-Hinge Door Pair', '', 'KD_Optimizer_img21.jpg', 'HD(915 mm W x 381mm D x 1980mm H)', 'F53', 5021.00, 515.00, '', 5536.00, ' 225 : Bond White Body, Understruture and Locking Stiffner & Snowbell GREY Drive Cover Unit,  206 : Sesame Beige Body, Understruture and Locking Stiffner & Umbertone Brown Drive Cover Unit', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(615, 'STO18SS1XXX', '241', 'KD Optimizer 18 SS1-Single Static 1 Bay Push Pull Type', 'KD Optimizer 18 SS1-Single Static 1 Bay Push Pull Type', '', 'KD_Optimizer18_img1.jpg', 'SS1(915 mm W x 457mm D x 1980mm H)', 'F53', 18471.00, 1893.00, '', 20365.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(616, 'STO18SL1XXX', '241', 'KD Optimizer 18 SL1-Single Last   1 Bay Push Pull Type', 'KD Optimizer 18 SL1-Single Last   1 Bay Push Pull Type', '', 'KD_Optimizer18_img2.jpg', 'SL1(915 mm W x 457mm D x 1980mm H)', 'F53', 20759.00, 2128.00, '', 22887.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(617, 'STO18TM1XXX', '241', 'KD Optimizer 18 TM1-Twin Mobile   1Bay Push Pull Type', 'KD Optimizer 18 TM1-Twin Mobile   1Bay Push Pull Type', '', 'KD_Optimizer18_img3.jpg', 'TM1(915 mm W x 457mm D x 1980mm H)', 'F53', 31750.00, 3254.00, '', 35004.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(618, 'STO18SS2XXX', '241', 'KD Optimizer 18 SS2-Single Static 2 Bay Push Pull Type', 'KD Optimizer 18 SS2-Single Static 2 Bay Push Pull Type', '', 'KD_Optimizer18_img4.jpg', 'SS2(915 mm W x 457mm D x 1980mm H)', 'F53', 32941.00, 3376.00, '', 36317.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(619, 'STO18SL2XXX', '241', 'KD Optimizer 18 SL2-Single Last   2 Bay Push Pull Type', 'KD Optimizer 18 SL2-Single Last   2 Bay Push Pull Type', '', 'KD_Optimizer18_img5.jpg', 'SL2(915 mm W x 457mm D x 1980mm H)', 'F53', 35008.00, 3588.00, '', 38597.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(620, 'STO18TM2XXX', '241', 'KD Optimizer 18 TM2-Twin Mobile  2 Bay Push Pull Type', 'KD Optimizer 18 TM2-Twin Mobile  2 Bay Push Pull Type', '', 'KD_Optimizer18_img6.jpg', 'TM2(915 mm W x 457mm D x 1980mm H)', 'F53', 55132.00, 5651.00, '', 60783.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(621, 'STO18SD2XXX', '241', 'KD Optimizer 18 SD2-Single Static Drive Cover Unit  2 Bay', 'KD Optimizer 18 SD2-Single Static Drive Cover Unit  2 Bay', '', 'KD_Optimizer18_img7.jpg', 'SD2(915 mm W x 457mm D x 1980mm H)', 'F53', 37236.00, 3817.00, '', 41053.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(622, 'STO18LD2XXX', '241', 'KD Optimizer 18 LD2-Single Last Drive Unit 2 Bay', 'KD Optimizer 18 LD2-Single Last Drive Unit 2 Bay', '', 'KD_Optimizer18_img8.jpg', 'LD2(915 mm W x 457mm D x 1980mm H)', 'F53', 48522.00, 4974.00, '', 53496.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(623, 'STO18TD2XXX', '241', 'KD Optimizer 18 TD2-Twin Mobile Drive Unit 2 Bay', 'KD Optimizer 18 TD2-Twin Mobile Drive Unit 2 Bay', '', 'KD_Optimizer18_img9.jpg', 'TD2(915 mm W x 457mm D x 1980mm H)', 'F53', 69140.00, 7087.00, '', 76227.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(624, 'STO18SD3XXX', '241', 'KD Optimizer 18 SD3-Single Static Drive Cover Unit  3 Bay', 'KD Optimizer 18 SD3-Single Static Drive Cover Unit  3 Bay', '', 'KD_Optimizer18_img10.jpg', 'SD3(915 mm W x 457mm D x 1980mm H)', 'F53', 52242.00, 5355.00, '', 57596.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(625, 'STO18LD3XXX', '241', 'KD Optimizer 18 LD3-Single Last Drive Unit 3 Bay', 'KD Optimizer 18 LD3-Single Last Drive Unit 3 Bay', '', 'KD_Optimizer18_img11.jpg', 'LD3(915 mm W x 457mm D x 1980mm H)', 'F53', 62932.00, 6451.00, '', 69383.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(626, 'STO18TD3XXX', '241', 'KD Optimizer 18 TD3-Twin Mobile Drive Unit 3 Bay', 'KD Optimizer 18 TD3-Twin Mobile Drive Unit 3 Bay', '', 'KD_Optimizer18_img12.jpg', 'TD3(915 mm W x 457mm D x 1980mm H)', 'F53', 94087.00, 9644.00, '', 103731.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(627, 'STO18SD4XXX', '241', 'KD Optimizer 18 SD4-Single Static Drive Cover Unit  4 Bay', 'KD Optimizer 18 SD4-Single Static Drive Cover Unit  4 Bay', '', 'KD_Optimizer18_img13.jpg', 'SD4(915 mm W x 457mm D x 1980mm H)', 'F53', 68368.00, 7008.00, '', 75376.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(628, 'STO18LD4XXX', '241', 'KD Optimizer 18 LD4-Single Last Drive Unit 4 Bay', 'KD Optimizer 18 LD4-Single Last Drive Unit 4 Bay', '', 'KD_Optimizer18_img14.jpg', 'LD4(915 mm W x 457mm D x 1980mm H)', 'F53', 87230.00, 8941.00, '', 96171.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(629, 'STO18TD4XXX', '241', 'KD Optimizer 18 TD4-Twin Mobile Drive Unit 4 Bay', 'KD Optimizer 18 TD4-Twin Mobile Drive Unit 4 Bay', '', 'KD_Optimizer18_img15.jpg', 'TD4(915 mm W x 457mm D x 1980mm H)', 'F53', 125563.00, 12870.00, '', 138433.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(630, 'STO18SD5XXX', '241', 'KD Optimizer 18 SD5-Single Static Drive Cover Unit  5 Bay', 'KD Optimizer 18 SD5-Single Static Drive Cover Unit  5 Bay', '', 'KD_Optimizer18_img16.jpg', 'SD5(915 mm W x 457mm D x 1980mm H)', 'F53', 85486.00, 8762.00, '', 94248.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(631, 'STO18LD5XXX', '241', 'KD Optimizer 18 LD5-Single Last Drive Unit 5 Bay', 'KD Optimizer 18 LD5-Single Last Drive Unit 5 Bay', '', 'KD_Optimizer18_img17.jpg', 'LD5(915 mm W x 457mm D x 1980mm H)', 'F53', 108330.00, 11104.00, '', 119434.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(632, 'STO18TD5XXX', '241', 'KD Optimizer 18 TD5-Twin Mobile Drive Unit 5 Bay', 'KD Optimizer 18 TD5-Twin Mobile Drive Unit 5 Bay', '', 'KD_Optimizer18_img18.jpg', 'TD5(915 mm W x 457mm D x 1980mm H)', 'F53', 160300.00, 16431.00, '', 176731.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(633, 'STO18SD6XXX', '241', 'KD Optimizer 18 SD6-Single Static Drive Cover Unit  6 Bay', 'KD Optimizer 18 SD6-Single Static Drive Cover Unit  6 Bay', '', 'KD_Optimizer18_img19.jpg', 'SD6(915 mm W x 457mm D x 1980mm H)', 'F53', 96884.00, 9931.00, '', 106815.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(634, 'STO18TD6XXX', '241', 'KD Optimizer 18 TD6-Twin Mobile Drive Unit 6 Bay', 'KD Optimizer 18 TD6-Twin Mobile Drive Unit 6 Bay', '', 'KD_Optimizer18_img20.jpg', 'TD6(915 mm W x 457mm D x 1980mm H)', 'F53', 270706.00, 27747.00, '', 298453.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(635, 'STOPHD00XXX', '241', 'KD Optimizer 18 HD-Hinge Door Pair', 'KD Optimizer 18 HD-Hinge Door Pair', '', 'KD_Optimizer18_img21.jpg', 'HD(915 mm W x 457mm D x 1980mm H)', 'F53', 5021.00, 515.00, '', 5536.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(636, 'STOCH003000', '241', ' CHANNELS 3''0"', 'CHANNELS 3''0"', '', '', 'P1/ P2/ D2/D3', 'F53', 3864.00, 396.00, '', 4260.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(637, 'STOCH006000', '241', 'CHANNELS 6''0"', 'CHANNELS 6''0"', '', '', 'P1/P2 /D2/ D3', 'F53', 7728.00, 792.00, '', 8520.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(638, 'STOCH009000', '241', 'CHANNELS 9''0"', 'CHANNELS 9''0"', '', '', 'P1/P2 /D2/ D3', 'F53', 11586.00, 1188.00, '', 12774.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(639, 'STOCH012000', '241', 'CHANNELS 12''0"', 'CHANNELS 12''0"', '', '', 'P1/P2 /D2/ D3', 'F53', 15405.00, 1579.00, '', 16984.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(640, 'STOCH403000', '241', 'CHANNELS 3''''0"', 'CHANNELS 3''''0"', '', '', 'D4', 'F53', 5803.00, 595.00, '', 6398.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(641, 'STOCH406000', '241', 'CHANNELS 6''0"', 'CHANNELS 6''0"', '', '', 'D4', 'F53', 11586.00, 1188.00, '', 12774.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(642, 'STOCH409000', '241', 'CHANNELS 9''0"', 'CHANNELS 9''0"', '', '', 'D4', 'F53', 17362.00, 1780.00, '', 19141.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(643, 'STOCH412000', '241', 'CHANNELS 12''0"', 'CHANNELS 12''0"', '', '', 'D4', 'F53', 23152.00, 2373.00, '', 25525.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(644, 'STOCH503000', '241', 'CHANNELS 3''0"', 'CHANNELS 3''0"', '', '', 'D5', 'F53', 7728.00, 792.00, '', 8520.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(645, 'STOCH506000', '241', 'CHANNELS 6''0"', 'CHANNELS 6''0"', '', '', 'D5', 'F53', 15456.00, 1584.00, '', 17040.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(646, 'STOCH509000', '241', 'CHANNELS 9''0"', 'CHANNELS 9''0"', '', '', 'D5', 'F53', 23152.00, 2373.00, '', 25525.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(647, 'STOCH512000', '241', 'CHANNELS 12''0"', 'CHANNELS 12''0"', '', '', 'D5', 'F53', 30841.00, 3161.00, '', 34002.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(648, 'STOCH603000', '241', 'Heavy Duty CHANNEL FOR 6 BAY OPT 3FT', 'Heavy Duty CHANNEL FOR 6 BAY OPT 3FT', '', '', 'D6', 'F53', 15639.00, 1603.00, '', 17242.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(649, 'STOCH606000', '241', 'Heavy Duty CHANNEL FOR 6 BAY OPT 6FT', 'Heavy Duty CHANNEL FOR 6 BAY OPT 6FT', '', '', 'D6', 'F53', 22723.00, 2329.00, '', 25052.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(650, 'STOCH609000', '241', 'Heavy Duty CHANNEL FOR 6 BAY OPT 9FT', 'Heavy Duty CHANNEL FOR 6 BAY OPT 9FT', '', '', 'D6', 'F53', 42021.00, 4307.00, '', 46328.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(651, 'STOCH612000', '241', 'Heavy Duty CHANNEL FOR 6 BAY OPT 12FT', 'Heavy Duty CHANNEL FOR 6 BAY OPT 12FT', '', '', 'D6', 'F53', 50677.00, 5194.00, '', 55872.00, '', 'Storage', 'CAT103', '0000-00-00', 'Suresh', '0000-00-00', '03:13:00', '2016-03-28 12:55:59', '', 1),
(652, 'STVSC300XXX', '240', 'KD STORWELS PLAIN WITH 4 SHELVES', 'KD STOREWELS PLAIN WITH 4 SHELVES', '', 'kd_storwel_1.jpg', '1830Hx900Wx450D', 'F53', 12529.00, 1284.00, '', 13813.00, '(005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown)\n* Only for KD Minor : (005 - Prince Grey with Silver Grey Top, 039 - Graphite Grey with Silver Grey Top, 201 - Snowbell Grey with Silver Grey Top,  203 - Bond White with Highland Pine Top, 204 - Umbertone Brown with Silver Oak Top)', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(654, 'STVCT10MXXX', '240', 'KD STORWELS  MINOR WITH METAL TOP', 'KD STOREWELS MINOR WITH METAL TOP', '', 'kd_storwel_3.jpg', '1168.5H x 900W x 450D', 'F53', 9588.00, 983.00, '', 10571.00, '(005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown)\n* Only for KD Minor : (005 - Prince Grey with Silver Grey Top, 039 - Graphite Grey with Silver Grey Top, 201 - Snowbell Grey with Silver Grey Top,  203 - Bond White with Highland Pine Top, 204 - Umbertone Brown with Silver Oak Top)', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(655, 'STVCT10NXXX', '240', 'KD STORWELS  MINOR WITH PL PVC TOP', 'KD STOREWELS MINOR WITH PL PVC TOP', '', 'kd_storwel_4.jpg', '1192.5H x 900W x 450D', 'F53', 10480.00, 1074.00, '', 11554.00, '(005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown)\n* Only for KD Minor : (005 - Prince Grey with Silver Grey Top, 039 - Graphite Grey with Silver Grey Top, 201 - Snowbell Grey with Silver Grey Top,  203 - Bond White with Highland Pine Top, 204 - Umbertone Brown with Silver Oak Top)', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-29 12:09:26', '', 1),
(656, 'STVFXDM2XXX', '240', 'BookCase 2 Drawer Filing Cabinets (New)', 'BookCase 2 Drawer Filing Cabinets (New)', '', 'bookcase1.jpg', '710Hx470Wx620D', 'F53', 10127.00, 1247.00, '', 13414.00, '2 DOOR BOOKCASE:  005 - Prince Grey with Silver Grey Top, 201 - Snowbell Grey with Silver Grey Top, 203 - Bond White with Highland Pine Top   /   FOR 4 DOOR BOOKCASE  :  005 : Prince Grey, 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(657, 'STVFXDM4XXX', '240', 'BookCase 4 Drawer Filing Cabinets (New)', 'BookCase 4 Drawer Filing Cabinets (New)', '', 'bookcase2.jpg', '1320Hx470Wx620D', 'F53', 15611.00, 2057.00, '', 22121.00, '2 DOOR BOOKCASE:  005 - Prince Grey with Silver Grey Top, 201 - Snowbell Grey with Silver Grey Top, 203 - Bond White with Highland Pine Top   /   FOR 4 DOOR BOOKCASE  :  005 : Prince Grey, 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(658, 'STVFXDM2XXX', '240', 'Vertical Filing Cabinets 2 Drawer Filing Cabinets (New)', 'Vertical Filing Cabinets 2 Drawer Filing Cabinets (New)', '', 'vfc1.jpg', '710Hx470Wx620D', 'F53', 10127.00, 1038.00, '', 11165.00, '005 : Prince Grey, 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(659, 'STVFXDM4XXX', '240', 'Vertical Filing Cabinets 4 Drawer Filing Cabinets (New)', 'Vertical Filing Cabinets 4 Drawer Filing Cabinets (New)', '', 'vfc2.jpg', '1320Hx470Wx620D', 'F53', 15611.00, 1600.00, '', 17211.00, '005 : Prince Grey, 201 : Snowbell Grey, 203 : Bond White', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(660, 'STSTW000XXX', '240', 'Welded Storwels Storwel Plain', 'Welded Storwels Storwel Plain', '', 'KD-Storwel_big.jpg', '1981Hx916Wx486D', 'F53', 16464.00, 1688.00, '', 18152.00, '005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(661, 'STSTW300XXX', '240', 'Welded Storwels Glass Door Storwel', 'Welded Storwels Glass Door Storwel', '', '568.jpg', '1981Hx916Wx486D', 'F53', 21202.00, 2173.00, '', 23375.00, '005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(662, 'STSTW00GXXX', '240', 'Storwel Plain (Guwahati Manufacturing)*', 'Storwel Plain (Guwahati Manufacturing)*', '', '5681.jpg', '1981Hx916Wx486D', 'HOC', 18152.00, 0.00, '', 18152.00, '005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(663, 'STMNR010XXX', '240', 'Welded Storwels Minor Plain', 'Welded Storwels Minor Plain', '', 'conventional-storage-minor.jpg', '1270Hx765Wx440D', 'HOC', 14253.00, 0.00, '', 14253.00, '005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(664, 'STSTW040XXX', '240', 'Welded Storwels Storwel Plain with Gordian Lock', 'Welded Storwels Storwel Plain with Gordian Lock', '', 'conventional-storage-minor-plain1.jpg', '1981Hx916Wx486D', 'F53', 18769.00, 1924.00, '', 20693.00, '005 : Prince Grey, 039 : Graphite Grey, 201 : Snowbell Grey, 203 : Bond White, 204 : Umbertone Brown', 'Storage', 'CAT103', '2015-07-18', 'Suresh', '0000-00-00', '03:11:00', '2016-03-28 12:55:59', '', 1),
(665, 'FUMTX2XX402SXTRD', '238', 'Matrix BOM 2 Str, No Arm, T.White', 'Matrix BOM 2 Str, No Arm, T.White', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_1jpg', '', 'HOC', 8719.00, 0.00, '1', 8719.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(666, 'FUMTX2IX402SXTRD', '238', 'Matrix BOM 2 Str ,Comm Arm, T.White *  GAC', 'Matrix BOM 2 Str ,Comm Arm, T.White *  GAC', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_2jpg', '', 'HOC', 10633.00, 0.00, '1', 10633.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(667, 'FUMTX3XX402SXTRD ', '238', 'Matrix BOM 3 Str No Arm, T.White', 'Matrix BOM 3 Str No Arm, T.White', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_3.jpg', '', 'HOC', 11794.00, 0.00, '1', 11794.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(668, 'FUMTX3IX402SXTRD ', '238', 'Matrix BOM 3 Str Comm Arm, T.White', 'Matrix BOM 3 Str Comm Arm, T.White', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_4.jpg', '', 'HOC', 14394.00, 0.00, '1', 14394.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(669, 'FUMTX2XS402SXTRD ', '238', 'Matrix BOM 2 Str, No Arm, T.White & Side Table', 'Matrix BOM 2 Str, No Arm, T.White & Side Table', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_5.jpg', '', 'HOC', 10399.00, 0.00, '1', 10399.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(670, 'FUMTX2IS402SXTRD ', '238', 'Matrix BOM 2 Str ,Comm Arm, T.White & Side Table', 'Matrix BOM 2 Str ,Comm Arm, T.White & Side Table', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_6.jpg', '', 'HOC', 12364.00, 0.00, '1', 12364.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(671, 'FUMTX3XS402SXTRD ', '238', 'Matrix BOM 3Str No Arm, T.White & Side Table', 'Matrix BOM 3Str No Arm, T.White & Side Table', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_7.jpg', '', 'HOC', 13442.00, 0.00, '1', 13442.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1);
INSERT INTO `arka_product_master` (`sl_no`, `item_code`, `baan_company`, `item_name`, `item_description`, `features`, `image`, `dimensions`, `ware_house`, `consumer_basic`, `ed`, `pkg`, `total`, `item_color`, `item_category`, `item_category_code`, `price_date`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `status`) VALUES
(672, 'FUMTX3IS402SXTRD ', '238', 'Matrix BOM 3 Str Comm Arm, T.White & Side Table', 'Matrix BOM 3 Str Comm Arm, T.White & Side Table', 'Ergonomic designed Back & Wide Seat,Round Edged Seat Shell,Easy to Adjust for Floor Levelling, 32 Possible Configurations, Side Tabels can take same load as Seat, All Components are powder Coated For ease in cleaning, Flexible Components-Arms, Seat Cushio', 'matrix_8.jpg', '', 'HOC', 16043.00, 0.00, '1', 16043.00, 'TA.White', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(673, 'FUMTX2CU02RSXTRD ', '238', 'CUSHION ACCESSORIES - MATRIX -  BOM 2 seat cush set Camel', 'CUSHION ACCESSORIES - MATRIX -  BOM 2 seat cush set Camel', '', 'cus1.jpg', '', 'HOC', 2356.00, 0.00, '1', 2356.00, '02 (Camel), 41 (Navy Blue)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(674, 'FUMTX3CU02RSXTRD ', '238', 'CUSHION ACCESSORIES - MATRIX -  BOM 3 seat cush set Camel', 'CUSHION ACCESSORIES - MATRIX -  BOM 3 seat cush set Camel', '', 'cus2.jpg', '', 'HOC', 3503.00, 0.00, '1', 3503.00, '02 (Camel), 41 (Navy Blue)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(675, 'FUMTX3CU41RSXTRD ', '238', 'CUSHION ACCESSORIES - MATRIX -  BOM 3 seat cush set Navy Blue', 'CUSHION ACCESSORIES - MATRIX -  BOM 3 seat cush set Navy Blue', '', 'cus3.jpg', '', 'HOC', 3503.00, 0.00, '1', 3503.00, '02 (Camel), 41 (Navy Blue)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(676, 'FUMTX2CU41RSXTRD ', '238', 'CUSHION ACCESSORIES - MATRIX -  BOM 2 seat cush set Navy Blue', 'CUSHION ACCESSORIES - MATRIX -  BOM 2 seat cush set Navy Blue', '', 'cus4.jpg', '', 'HOC', 2356.00, 0.00, '1', 2356.00, '02 (Camel), 41 (Navy Blue)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(677, 'FUCORNERCONNECTOR ', '238', 'CUSHION ACCESSORIES - MATRIX -  BOM Corner connector for Matrix', 'CUSHION ACCESSORIES - MATRIX -  BOM Corner connector for Matrix', '', 'cus5.jpg', '', 'HOC', 1486.00, 0.00, '1', 1486.00, '02 (Camel), 41 (Navy Blue)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(678, 'FUPISACT030SXXXX ', '238', 'Center Table BOM Center Table', 'Center Table BOM Center Table', 'SS Understructure', 'center.jpg', '', 'HOC', 8961.00, 0.00, '1', 8961.00, '030 (Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(679, 'FUPISAST030SXXXX ', '238', 'Center Table BOM Side Table', 'Center Table BOM Side Table', 'SS Understructure', 'center1.jpg', '', 'HOC', 5974.00, 0.00, '1', 5974.00, '030 (Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(680, 'FU2751IX069SXTRD', '238', 'GLAMOUR (GAC)  -  BOM Std Mechanical Bolts\nCan be offered as Apo Retracktable Black Membrane Desklet\nAvailable both w/o cupholder & with Cupholder', 'GLAMOUR (GAC)  -  BOM Std Mechanical Bolts\nCan be offered as Apo Retracktable Black Membrane Desklet\nAvailable both w/o cupholder & with Cupholder', 'Auto-tip up seat, Individual/Common\nArms', 'Glamour_prodsm.jpg', '', 'HOC', 12412.00, 0.00, '2', 12412.00, 'Foam laminated fabrics- F01-Azure Blue, F02-Ruby Red, F03-Smokey Grey, F08-Earth Song, F11-Copper Moon', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(681, 'FU2751IX069SXCHM', '238', 'GLAMOUR (GAC) Chemical Bolts', 'GLAMOUR (GAC) Chemical Bolts', '', 'Glamour_prodsm1.jpg', '', 'HOC', 12947.00, 0.00, '2', 12947.00, '', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(682, 'FU2651IX069SXXXX ', '238', 'MERCURY (GAC) Std Mechanical Bolts', 'MERCURY (GAC) Std Mechanical Bolts', 'Sliding seat, Individual/Common Arms', 'Multiplex_large.jpg', '', '930', 10677.00, 0.00, '2', 11771.00, 'Foam laminated fabrics- F01-Azure Blue, F02-Ruby Red, F03-Smokey Grey, F08-Earth Song, F11-Copper Moon', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(683, 'FU2651IX069SXCHM ', '238', 'MERCURY (GAC) Chemical Bolts', 'MERCURY (GAC) Chemical Bolts', '', 'Multiplex_large1.jpg', '', '930', 11192.00, 1147.00, '1', 12339.00, '', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(684, 'FU2122IX069SXTRD ', '238', 'AUDI - 2 BOM Std Mechanical Bolts Can be offered as Apo Retracktable Black Membrane Desklet', 'AUDI - 2 BOM Std Mechanical Bolts Can be offered as Apo Retracktable Black Membrane Desklet', 'Push back mechanism, Individual/Common Arms', 'Audi-2.jpg', '', 'HOC', 6261.00, 0.00, '1', 6261.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(685, 'FU2122IX069SXCHM ', '238', 'AUDI - 2 BOM Chemical Bolts', 'AUDI - 2 BOM Chemical Bolts', '', 'Audi-1.jpg', '', 'HOC', 6776.00, 0.00, '1', 6776.00, '', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(686, 'FU2232IX069SXTRD ', '238', 'AUDI 3 BOM Std Mechanical Bolts Can be offered as Apo Retracktable Black Membrane Desklet', 'AUDI 3 BOM Std Mechanical Bolts Can be offered as Apo Retracktable Black Membrane Desklet', 'Manual Tip up Seat, Individual/Common Arm', 'Audi III_large.jpg', '', 'HOC', 5091.00, 0.00, '1', 5091.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(687, 'FU2232IX069SXCHM ', '238', 'AUDI 3 BOM Chemical Bolts', 'AUDI 3 BOM Chemical Bolts', '', 'Audi II_large.jpg', '', 'HOC', 5606.00, 0.00, '1', 5606.00, '', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(688, 'FU2341IX069SXXXX ', '238', 'JUPITER SERIES BOM High Back - Std Mechanical Bolts', 'JUPITER SERIES BOM High Back - Std Mechanical Bolts', 'Push back feature & Auto tip up seat, Individual/Common Arms', 'godrej-auditorium.jpg', '', '930', 8449.00, 866.00, '1', 9315.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(689, 'FU2341IX069SXCHM ', '238', 'JUPITER SERIES BOM High Back - Chemical Bolts', 'JUPITER SERIES BOM High Back - Chemical Bolts', 'Push back feature & Auto tip up seat, Individual/Common Arms', 'godrej-auditorium1.jpg', '', '930', 8964.00, 918.00, '1', 9882.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(690, 'FU2342IX069SPUXX  ', '238', 'JUPITER SERIES BOM Mb-PU Top Arms Std Mechanical Bolts', 'JUPITER SERIES BOM Mb-PU Top Arms Std Mechanical Bolts', 'Push back feature & Auto tip up seat, Individual/Common Arms', 'godrej-auditorium2.jpg', '', '930', 7744.00, 794.00, '1', 8538.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(691, 'FU2342IX069SPUCM  ', '238', 'JUPITER SERIES BOM Mb-PU Top Arms - Chemical Bolts', 'JUPITER SERIES BOM Mb-PU Top Arms - Chemical Bolts', '', 'godrej-auditorium3.jpg', '', '930', 8258.00, 846.00, '1', 9104.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(692, 'FU2342IP069SXXXX ', '238', 'JUPITER SERIES BOM Mid Back Plastic Arms - Std Mechanical Bolts', 'JUPITER SERIES BOM Mid Back Plastic Arms - Std Mechanical Bolts', 'Push back feature, Hidden desklet, Individual/Common Arms', 'godrej-auditorium4.jpg', '', '930', 7744.00, 794.00, '1', 8538.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(693, 'FU2342IP069SXCHM ', '238', 'JUPITER SERIES BOM Mid Back Plastic Arms - Chemical Bolts', 'JUPITER SERIES BOM Mid Back Plastic Arms - Chemical Bolts', 'Push back feature, Hidden desklet, Individual/Common Arms', 'godrej-auditorium5.jpg', '', '930', 8258.00, 846.00, '1', 9104.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(694, 'FU2342IH069SXXXX ', '238', 'JUPITER SERIES BOM Mid Back Plastic Arms & Dsklt - Std Mechanical', 'JUPITER SERIES BOM Mid Back Plastic Arms & Dsklt - Std Mechanical', 'Push back feature, Hidden desklet, Individual/Common Arms', 'godrej-auditorium6.jpg', '', '930', 8765.00, 898.00, '1', 9663.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(695, 'FU2342IH069SXCHM', '238', 'JUPITER SERIES BOM Mid Back Plastic Arms & Dsklt - Chemical Bolts', 'JUPITER SERIES BOM Mid Back Plastic Arms & Dsklt - Chemical Bolts', '', 'godrej-auditorium7.jpg', '', '930', 9280.00, 951.00, '', 10231.00, '', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(696, 'FUBMPIX2019SXTRD ', '238', 'BLISS BOM 2 Str Metal Perfo without Arms', 'BLISS BOM 2 Str Metal Perfo without Arms', '', 'blis.jpg', '', 'HOC', 5960.00, 0.00, '1', 5960.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(697, 'FUBMPIX3019SXTRD ', '238', 'BLISS BOM 3 Str Metal Perfo without Arms', 'BLISS BOM 3 Str Metal Perfo without Arms', '', 'blis1.jpg', '', 'HOC', 7907.00, 0.00, '1', 7907.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(698, 'FUBPMXX2019SXTRD ', '238', 'VIA PERFORATED METAL BOM 2 Str on Beam w/o Arms,with Perfo Metal St/Bk', 'VIA PERFORATED METAL BOM 2 Str on Beam w/o Arms,with Perfo Metal St/Bk ', '', 'via_perforated_metals.jpg', '', 'HOC', 6528.00, 0.00, '2', 6528.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(699, 'FUBPMIX2019SXTRD ', '238', 'VIA PERFORATED METAL BOM 2 Str on Beam with Arms,with Perfo Metal St/Bk', 'VIA PERFORATED METAL BOM 2 Str on Beam with Arms,with Perfo Metal St/Bk', '', 'via_perforated_metals1.jpg', '', 'HOC', 7758.00, 0.00, '2', 7758.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(700, 'FUBPMXX3019SXTRD ', '238', 'VIA PERFORATED METAL BOM 3 Str on Beam w/o Arms,with Perfo Metal St/Bk', 'VIA PERFORATED METAL BOM 3 Str on Beam w/o Arms,with Perfo Metal St/Bk ', '', 'via_perforated_metals2.jpg', '', 'HOC', 8425.00, 0.00, '2', 8425.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(701, 'FUBPMIX3019SXTRD ', '238', 'VIA PERFORATED METAL BOM 3 Str on Beam with Arms, with Perfo Metal St/Bk', 'VIA PERFORATED METAL BOM 3 Str on Beam with Arms, with Perfo Metal St/Bk', '', 'via_perforated_metals3.jpg', '', 'HOC', 10211.00, 0.00, '2', 10211.00, '19 (Black), 29 (Metalic Silver)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(702, 'FU17515481AAA ', '238', 'METAL PERFORATED CHAIRS BOM On Beam 2 Str with PU Ind Arms', 'METAL PERFORATED CHAIRS BOM On Beam 2 Str with PU Ind Arms', '', 'Metal-Perforated-Chair.jpg', '', 'HOC', 8425.00, 0.00, '3', 8425.00, '19(Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(703, 'FU17515494AAA ', '238', 'METAL PERFORATED CHAIRS BOM On Beam 3 Str with PU Ind Arms', 'METAL PERFORATED CHAIRS BOM On Beam 3 Str with PU Ind Arms', '', 'Metal-Perforated-Chair1.jpg', '', 'HOC', 11582.00, 0.00, '2', 11582.00, '19(Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(704, 'FU17514945AAA ', '238', 'METAL PERFORATED CHAIRS BOM 1 Str with PU Ind Arms', 'METAL PERFORATED CHAIRS BOM 1 Str with PU Ind Arms', '', 'Metal-Perforated-Chair2.jpg', '', 'HOC', 3206.00, 0.00, '5', 3206.00, '19(Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(705, 'FU17514946AAA ', '238', 'METAL PERFORATED CHAIRS BOM 1 Str W/o PU Ind Arms', 'METAL PERFORATED CHAIRS BOM 1 Str W/o PU Ind Arms', '', 'Metal-Perforated-Chair3.jpg', '', 'HOC', 2695.00, 0.00, '5', 2695.00, '19(Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(706, 'FU17529000AAA ', '238', 'METAL PERFORATED CHAIRS BOM 1 Str with Desklet & Shelf', 'METAL PERFORATED CHAIRS BOM 1 Str with Desklet & Shelf', '', 'Metal-Perforated-Chair4.jpg', '', 'HOC', 3370.00, 0.00, '2', 3370.00, '19(Black)', 'CAT102', 'Chairs', '0000-00-00', 'Suresh', '0000-00-00', '03:49:00', '2016-03-28 12:55:59', '', 1),
(707, 'FU7501RG151SXXEN', '244', 'OXBO (GGC) - BQ  High Back * GAC', 'OXBO (GGC) - BQ  High Back * GAC', 'CT Mech Upright Position Locking, Fixed PP Arms, Nylon Ped', 'oxbo1.jpg', '', 'HOA/930', 6848.00, 0.00, '1', 6848.00, '(151-172 Black Net only-For colour code description refer intranet below pricelists)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(708, 'FU7502RG151SXXEN', '244', 'OXBO (GGC) - BQ Mid Back', 'OXBO (GGC) - BQ Mid Back', 'CT Mech Upright Position Locking, Fixed PP Arms, Nylon Ped', 'oxbo2.jpg', '', 'HOA/930', 6278.00, 0.00, '1', 6278.00, '(151-172 Black Net only-For colour code description refer intranet below pricelists)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(709, 'FU7512RG151SXXEN', '244', 'OXBO (GGC) - BQ Visitor', 'OXBO (GGC) - BQ Visitor', 'CT Mech Upright Position Locking, Fixed PP Arms, Nylon Ped', 'oxbo3.jpg', '', 'HOA/930', 5326.00, 0.00, '2', 5326.00, '(151-172 Black Net only-For colour code description refer intranet below pricelists)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(710, 'FUSMILEXXW01MESH', '238', 'YOUTH SERIES - BOM Smile', 'YOUTH SERIES - BOM  Smile', 'CTS Mech & Nylon Ped, Fixed arms', 'youth1.jpg', '', 'HOB', 9199.00, 0.00, '1', 9199.00, 'Only Black', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(711, 'FUAMIGOXW04SXXXX', '238', 'YOUTH SERIES - BOM Amigo', 'YOUTH SERIES - BOM  Amigo', 'CT Mech Upright Position Locking, Fixed PP Arms, Nylon Pedestal', 'youth2.jpg', '', 'HOB', 7202.00, 0.00, '1', 7202.00, 'Blue (04) Grey (02)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(712, 'FU9W01TM251SXXXX', '238', 'FIONA (GAC) -  BOM Mesh Back', 'FIONA (GAC) -  BOM  Mesh Back', 'CTS Mech, T Type Fixed Arms , Nylon Pedestal', 'fiona1.jpg', '', '930', 5800.00, 595.00, '1', 6395.00, '251,254,255,256,257,257,258, 259, 261, 263', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(713, 'FU9W01TX215SXXXX ', '238', ' FIONA (GAC) -  BOM Cushion Back', ' FIONA (GAC) -  BOM Cushion Back', 'CTS Mech, T Type Fixed Arms , Nylon Pedestal', 'fiona2.jpg', '', '930', 5800.00, 595.00, '1', 6395.00, '215,261,217,218,219,220, 221,222,223', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(714, 'FU5102RXV01SXXXX  ', '244', 'ULTIMA SUPER (GAC) -  BQ Mid Back', 'ULTIMA SUPER (GAC) -  BQ Mid Back', 'Perm Cont Mech Upright position locking, Fixed Arms, Push back mechanism, Metal Powder coated Pedestal', 'ultima1.jpg', '', 'HOA/930', 7852.00, 0.00, '1', 7852.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(715, 'FU5103RXV01SXXXX ', '244', 'ULTIMA SUPER (GAC) -  BQ Low Back', 'ULTIMA SUPER (GAC) -  BQ Low Back', 'Perm Cont Mech Upright position locking, Fixed Arms, Push back mechanism, Metal Powder coated Pedestal', 'ultima2.jpg', '', 'HOA/930', 7852.00, 0.00, '1', 7852.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(716, 'FU7031XXV01SXXEN ', '244', 'Series 7030 -  BQ  W/o Arms', 'Series 7030 -  BQ  W/o Arms', 'Perm Cont mechanism Upright position locking, Fixed PP Arms, Nylon Pedestal', 'series7030-1.jpg', '', 'HOA/930', 5452.00, 0.00, '1', 5452.00, 'V05, V11, V12, V13', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(717, 'FU7032RXV01SXXEN ', '244', 'Series 7030 -  BQ  With Arms', 'Series 7030 -  BQ  With Arms', 'Perm Cont mechanism Upright position locking, Fixed PP Arms, Nylon Pedestal', 'series7030.jpg', '', 'HOA/930', 5880.00, 0.00, '1', 5880.00, 'V05, V11, V12, V13', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(718, 'FUBRZ1XX213SXXXX -', '238', 'BREEZE -  BOM  Sil Cloud Cantilevered U/s', 'BREEZE -  BOM  Sil Cloud Cantilevered U/s', 'Polyester Mesh, PP Arms, High Strength micro Alloy MS Tubes.', 'breeze1.jpg', '', 'HOA/930', 3863.00, 396.00, '4', 4259.00, '213 (Waffle)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(719, 'FUBRZ1AX213SXXXX ', '238', 'BREEZE -  BOM  Sil Cloud Cantilevered U/S with Arms', 'BREEZE -  BOM  Sil Cloud Cantilevered U/S with Arms', 'Polyester Mesh, PP Arms, High Strength micro Alloy MS Tubes.', 'breeze2.jpg', '', 'HOA/930', 3914.00, 402.00, '4', 4316.00, '214 (Waffle)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(720, 'FUBRZ2XX213SXXXX', '238', 'BREEZE -  BOM   Sil Cloud 4 Legged U/s', 'BREEZE -  BOM   Sil Cloud 4 Legged U/s', 'Polyester Mesh, PP Arms, High Strength micro Alloy MS Tubes.', 'breeze3.jpg', '', 'HOA/930', 3966.00, 406.00, '4', 4372.00, '215 (Waffle)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(721, 'FUBRZ2AX213SXXXX ', '238', 'BREEZE -  BOM  Sil Cloud 4 Legged U/s With Arms', 'BREEZE -  BOM  Sil Cloud 4 Legged U/s With Arms', 'Polyester Mesh, PP Arms, High Strength micro Alloy MS Tubes.', 'breeze4.jpg', '', 'HOA/930', 4017.00, 412.00, '4', 4429.00, '216 (Waffle)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(722, 'FU7042RXV01SXXXX ', '244', 'DIVA -  BQ  Revolving Low Back Fixed Loop Arms', 'DIVA -  BQ  Revolving Low Back Fixed Loop Arms', 'Perm Cont mechanism Upright position locking, Injection moulded Pedestal', 'diva1.jpg', '', 'HOA/930', 4273.00, 0.00, '1', 4273.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(723, 'FU7043XXV01SXXXX ', '244', 'DIVA -  BQ  Visitor W/o Arms', 'DIVA -  BQ  Visitor W/o Arms', 'Perm Cont mechanism Upright position locking, Injection moulded Pedestal', 'diva2.jpg', '', 'HOA/930', 3097.00, 0.00, '2', 3097.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(724, 'FU7044TXV01SXXXX ', '244', 'DIVA -  BQ   Visitor With Arms', 'DIVA -  BQ   Visitor With Arms', 'Perm Cont mechanism Upright position locking, Injection moulded Pedestal', 'diva3.jpg', '', 'HOA/930', 3406.00, 0.00, '2', 3406.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(725, 'FU7045XXV01SXXXX ', '244', 'DIVA -  BQ  Revolving W/o Arms', 'DIVA -  BQ  Revolving W/o Arms', 'Perm Cont mechanism Upright position locking, Injection moulded Pedestal', 'diva4.jpg', '', 'HOA/930', 4150.00, 0.00, '1', 4150.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(726, 'FU7046RXV01SXXXX ', '244', 'DIVA -  BQ  Revolving Mid Back with Fixed Loop Arms', 'DIVA -  BQ  Revolving Mid Back with Fixed Loop Arms', 'Perm Cont mechanism Upright position locking, Injection moulded Pedestal', 'diva5.jpg', '', 'HOA/930', 4397.00, 0.00, '1', 4397.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(727, 'FU5D02RXV01SXXXX ', '244', 'STARR -  BQ Mid Back', 'STARR -  BQ Mid Back', 'Perm Cont Mech Upright Position locking, designer triangular fixed Arms, Powder coated Pedestal', 'starr1.jpg', '', 'HOA/930', 4275.00, 0.00, '1', 4275.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(729, 'FU4103XXV01SXXXX', '244', 'TASK CHAIR -  BQ  W/o Arms', 'TASK CHAIR -  BQ  W/o Arms', 'No tilt mechanism, Metal Pedestal', 'taskchair1.jpg', '', 'HOA/930', 3734.00, 0.00, '1', 3734.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(730, 'FU4103IXV01SXXXX ', '244', 'TASK CHAIR -  BQ With Arms', 'TASK CHAIR -  BQ With Arms', 'No tilt mechanism, Metal Pedestal', 'taskchair2.jpg', '', 'HOA/930', 4054.00, 0.00, '1', 4054.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(731, 'FUST2XEN019SXTRD', '238', 'STOOLS -  BOM  Stool', 'STOOLS -  BOM  Stool', 'Black powder coated', 'stools1.jpg', '', 'HOC', 1135.00, 0.00, '6', 1135.00, '19 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(732, 'FUS1MXNC13RSXTRD ', '238', 'STOOLS -  BOM  Mch Ht Rev Stool Mch HT Adj w/o Back', 'STOOLS -  BOM  Mch Ht Rev Stool Mch HT Adj w/o Back', 'Available in Synthetic leather, seat & back, metal Pedestal', 'stools2.jpg', '', 'HOC', 2441.00, 0.00, '2', 2441.00, '10R (Sand Dune) 13R (Black) 15R (Brown)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(733, 'FUS1MXHC13RSXTRD ', '238', 'STOOLS -  BOM Mch Ht Adj w/o Back Hi Base', 'STOOLS -  BOM Mch Ht Adj w/o Back Hi Base', 'Available in Synthetic leather, seat & back, metal Pedestal', 'stools3.jpg', '', 'HOC', 3039.00, 0.00, '2', 3039.00, '10R (Sand Dune) 13R (Black) 15R (Brown)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(734, 'FUS1M4NC13RSXTRD ', '238', 'STOOLS -  BOM Mch Ht Adj + Back', 'STOOLS -  BOM Mch Ht Adj + Back', 'Available in Synthetic leather, seat & back, metal Pedestal', 'stools4.jpg', '', 'HOC', 3219.00, 0.00, '2', 3219.00, '10R (Sand Dune) 13R (Black) 15R (Brown)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(735, 'FUS1M4HC13RSXTRD ', '238', 'STOOLS -  BOM  Mch Ht Adj + back Hi Base', 'STOOLS -  BOM  Mch Ht Adj + back Hi Base', 'Available in Synthetic leather, seat & back, metal Pedestal', 'stools5.jpg', '', 'HOC', 3777.00, 0.00, '2', 3777.00, '10R (Sand Dune) 13R (Black) 15R (Brown)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(736, 'FUCH4XXX003SXXEN ', '244', 'CLASSIC -  BQ Cane Chair without Armrest', 'CLASSIC -  BQ Cane Chair without Armrest', 'Powder Coated Frame', 'classic1.jpg', '', '930/HOA', 2218.00, 0.00, '4', 2218.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(737, 'FUCH6XXX003SXXEN ', '244', 'CLASSIC -  BQ Cane Chair with Armrest', 'CLASSIC -  BQ Cane Chair with Armrest', 'Powder Coated Frame', 'classic2.jpg', '', '930/HOA', 2612.00, 0.00, '4', 2612.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(738, 'FUCH7XXX003SXXEN ', '244', 'CLASSIC -  BQ Cane Chair with Armrest', 'CLASSIC -  BQ Cane Chair with Armrest', 'Powder Coated Frame', 'classic3.jpg', '', '930/HOA', 2709.00, 0.00, '4', 2709.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(739, 'FUCH7BXX003SXXEN', '244', 'CLASSIC -  BQ  Leatherite Cushion Chair with Armrest', 'CLASSIC -  BQ  Leatherite Cushion Chair with Armrest', 'Powder Coated Frame', 'classic4.jpg', '', '930/HOA', 3098.00, 0.00, '4', 3098.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(740, 'FUCH8XXX003SXXEN ', '244', 'CLASSIC -  BQ  LeatheriteCushion Chair W/o Armrest', 'CLASSIC -  BQ  LeatheriteCushion Chair W/o Armrest', 'Powder Coated Frame', 'classic5.jpg', '', '930/HOA', 2576.00, 0.00, '4', 2576.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(741, 'FUCH18XX003SXXEN ', '244', 'CLASSIC -  BQ  Cane Chair 4 Legged without Armrest', 'CLASSIC -  BQ  Cane Chair 4 Legged without Armrest', 'Powder Coated Frame', 'classic6.jpg', '', '930/HOA', 2142.00, 0.00, '4', 2142.00, '03 (Grey), 12 (Brown), 55 (New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(742, 'FU1004XXV01SXXEN', '244', 'MULTIPURPOSE-  BQ Cushioned Chair W/o Armrest', 'MULTIPURPOSE-  BQ Cushioned Chair W/o Armrest', 'Powder Coated Frame', '', '', '930/HOA', 3068.00, 0.00, '4', 3068.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-05-09 16:56:54', 'test', 1),
(743, 'FU1007XXV01SXXEN ', '244', 'MULTIPURPOSE-  BQ Cushioned Chair with Armrest', 'MULTIPURPOSE-  BQ Cushioned Chair with Armrest', 'Powder Coated Frame', 'multipurpose2.jpg', '', '930/HOA', 3632.00, 0.00, '4', 3632.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(744, 'FU1018XXV01SXXXX ', '244', 'MULTIPURPOSE-  BQ Cushioned Chair 4 Legged W/o Armrest *  GAC', 'MULTIPURPOSE-  BQ Cushioned Chair 4 Legged W/o Armrest *  GAC', 'Powder Coated Frame', 'multipurpose3.jpg', '', '930/HOA', 2844.00, 0.00, '4', 2844.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(745, 'FU4012XW048SXTRD ', '238', 'STAQ & SHELL -  BOM Staq W/o Arms', 'STAQ & SHELL -  BOM Staq W/o Arms', '4 Legged Chair, Moulded laminated Plywood shell', 'staq1.jpg', '', 'HOC', 3355.00, 0.00, '4', 3355.00, '48 (Teakwood), 68 (Mahagony)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(746, 'FU4012IW048SXTRD', '238', 'STAQ & SHELL -  BOM  Staq With Arms', 'STAQ & SHELL -  BOM  Staq With Arms', '4 Legged Chair, Moulded laminated Plywood shell', 'staq2.jpg', '', 'HOC', 3709.00, 0.00, '4', 3709.00, '48 (Teakwood), 68 (Mahagony)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(747, 'FU4212XW048SXTRD ', '238', 'STAQ & SHELL -  BOM Shell W/o Arms', 'STAQ & SHELL -  BOM Shell W/o Arms', '4 Legged Chair, Moulded laminated Plywood shell', 'staq3.jpg', '', 'HOC', 3528.00, 0.00, '4', 3528.00, '48 (Teakwood), 68 (Mahagony)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(748, 'FUMPC4XS014SXXXX ', '238', 'CAFE CHAIRS - BOM, Mpc - BQ  Mpc 4', 'CAFE CHAIRS - BOM, Mpc - BQ  Mpc 4', 'SS Frame, PP Seat, Black Bushes', 'cafe1.jpg', '', 'HOC', 2992.00, 0.00, '4', 2992.00, 'Green-11,Blue-14,Red-17,White-703', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(749, 'FUMPSLTZ011SXXEN ', '238', 'CAFE CHAIRS - BOM, Mpc - BQ Slatz', 'CAFE CHAIRS - BOM, Mpc - BQ Slatz', 'Plastic Injection Moulded St & Bk', 'cafe2.jpg', '', '930', 2702.00, 277.00, '4', 2979.00, 'Green-11, Blue-14, Ruby Red -20', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(750, 'FUFPC1XS011SXXXX ', '238', 'CAFE CHAIRS - BOM, Mpc - BQ  Fpc 1 SS Frame', 'CAFE CHAIRS - BOM, Mpc - BQ  Fpc 1 SS Frame', 'Double Shell Moulded Plastic', 'cafe3.jpg', '', 'HOC', 3101.00, 0.00, '4', 3101.00, 'Green -11, Blue-14, Red-17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(751, 'FUEAZYXX014SXXXX ', '238', 'CAFE CHAIRS - BOM, Mpc - BQ Eazy Mesh Folding', 'CAFE CHAIRS - BOM, Mpc - BQ Eazy Mesh Folding', 'UV Resistant, Mesh Seat Back', 'cafe4.jpg', '', 'HOC', 6520.00, 0.00, '1', 6520.00, 'Blue-14, Red-17, Beige -24', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(752, 'FUMC102X014SXXXX ', '238', 'CAFE CHAIRS - BOM, Mpc - BQ Mpc 102', 'CAFE CHAIRS - BOM, Mpc - BQ Mpc 102', 'St & Bk In Moulded PP, U/S in MS', 'cafe5.jpg', '', 'HOA/930', 1672.00, 0.00, '6', 1672.00, 'Blue -14', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(753, 'FU1512XCV01SXTRN ', '238', 'REGALE & XX -  BOM With Cushion', 'REGALE & XX -  BOM With Cushion', '', 'regale1.jpg', '', 'HOC', 2936.00, 0.00, '2', 2936.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(754, 'FU1512XX019SXTRN ', '238', 'REGALE & XX -  BOM  W/o Cushion (Only in Black Colour)', 'REGALE & XX -  BOM  W/o Cushion (Only in Black Colour)', '', 'regale2.jpg', '', 'HOC', 2333.00, 0.00, '2', 2333.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(755, 'FU1112XXV01SXTRN ', '238', 'REGALE & XX -  BOM Can also be offered in 10R (Sand Dune) 13R (Black) 15R (Brown)', 'REGALE & XX -  BOM Can also be offered in 10R (Sand Dune) 13R (Black) 15R (Brown)', '', 'regale3.jpg', '', 'HOC', 3418.00, 0.00, '4', 3418.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(756, 'FUCH18BX003SXXEN ', '244', 'TRAINING ROOM -  BQ  Caned Chair withFull Desklet & Paper Tray', 'TRAINING ROOM -  BQ  Caned Chair withFull Desklet & Paper Tray', 'Teak Colour Desklet', 'trainingbq1.jpg', '', 'HOA/930', 4323.00, 0.00, '4', 4323.00, '03 (Grey),12 (Brown), 55(New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(757, 'FUCH18CX003SXXEN ', '244', 'TRAINING ROOM -  BQ Leatherite Cushion with Full Desklet & Paper T', 'TRAINING ROOM -  BQ Leatherite Cushion with Full Desklet & Paper T', 'Teak Colour Desklet', 'trainingbq2.jpg', '', 'HOA', 4486.00, 0.00, '4', 4486.00, '03 (Grey),12 (Brown), 55(New Olive)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(758, 'FU1018DX069SXXXX ', '244', 'TRAINING ROOM -  BQ Cushioned 4 Legged Chair with Full Desklet', 'TRAINING ROOM -  BQ Cushioned 4 Legged Chair with Full Desklet', 'Teak Colour Desklet', 'trainingbq3.jpg', '', 'HOA/930', 4228.00, 0.00, '4', 4228.00, 'All Voila & Glint Fabrics Only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(759, 'FU7004XD016SXXXX ', '244', 'TRAINING ROOM -  BQ Non-Revolving with Full Desklet', 'TRAINING ROOM -  BQ Non-Revolving with Full Desklet', 'With wiretray Teak Colour Dsklt', 'trainingbq4.jpg', '', 'HOA/930', 7775.00, 0.00, '2', 7775.00, 'All Voila & Glint Fabrics Only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(760, 'FU7044TD069SXXXX ', '244', 'TRAINING ROOM -  BQ Non-Revolving with Qtr Desklet', 'TRAINING ROOM -  BQ Non-Revolving with Qtr Desklet', 'With retractable desklet', 'trainingbq5.jpg', '', 'HOA/930', 7417.00, 0.00, '2', 7417.00, 'All Voila & Glint Fabrics Only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(761, 'FU1112DX005SXTRN ', '238', 'TRAINING ROOM -  BOM  Cushioned Chair with Qtr Desklet', 'TRAINING ROOM -  BOM  Cushioned Chair with Qtr Desklet', 'Beige Colour Desklet', 'trainingroom1.jpg', '', 'HOC', 4263.00, 0.00, '4', 4263.00, 'All Voila & Glint Fabrics Only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(762, 'FU4012DW048SXTRD ', '238', 'TRAINING ROOM -  BOM  With Retractable Qtr Desklet, W/o Upholstery', 'TRAINING ROOM -  BOM  With Retractable Qtr Desklet, W/o Upholstery', 'Black Colour Desklet', 'trainingroom2.jpg', '', 'HOC', 5998.00, 0.00, '2', 5998.00, '48 (Teakwood), 68 (Mahagony)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(763, 'FU1512DX019SXTRN ', '238', 'TRAINING ROOM -  BOM Plastice St & Bk with PLB Desklet & PVC Lippin', 'TRAINING ROOM -  BOM Plastice St & Bk with PLB Desklet & PVC Lippin', 'Teak Colour Desklet', 'trainingroom3.jpg', '', 'HOC', 4022.00, 0.00, '4', 4022.00, '019 (Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(764, 'FU1512DC069SXTRN ', '238', 'TRAINING ROOM -  BOM  Cushion St & Bk with Membrane Desklet', 'TRAINING ROOM -  BOM  Cushion St & Bk with Membrane Desklet', 'Black Colour Desklet', 'trainingroom4.jpg', '', 'HOC', 4643.00, 0.00, '4', 4643.00, 'All Voila Fabrics Only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(765, 'FUINTECD018SMING', '238', 'INTERACT TRAINING CHAIRS -  BOM  Common Arms', 'INTERACT TRAINING CHAIRS -  BOM  Common Arms', 'With Desklet & Cushion', 'interact1.jpg', '', 'HOB', 39168.00, 0.00, '4', 39168.00, 'Blue-Green (018), Blue (014), Green (011), Yellow (013)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(766, 'FUINTEID014SMING ', '238', 'INTERACT TRAINING CHAIRS -  BOM Individual Arms', 'INTERACT TRAINING CHAIRS -  BOM Individual Arms', 'With Desklet & Cushion', 'interact2.jpg', '', 'HOB', 45806.00, 0.00, '4', 45806.00, 'Blue-Green (018), Blue (014), Green (011), Yellow (013)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(767, 'FUSCINXXS01SXXXX ', '238', 'SCINTILLA (India Design Mark) -  BOM  W/o Arms & W/o Desklet', 'SCINTILLA (India Design Mark) -  BOM  W/o Arms & W/o Desklet', 'Scratch Resistant flip up full desklet, Brake Castors for ABS Desklet only, Manual Tip up Seat', 'scintilla1.jpg', '', 'HOB', 7790.00, 0.00, '2', 7790.00, 'S01 (Cerry Red), S02 (Lemon Lime), S03 (Oceanic Blue), S04 (Carbon Grey), S05 (Raven Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(768, 'FUSCINIXS01SXXXX ', '238', 'SCINTILLA (India Design Mark) -  BOM   With Individual Arms & W/o Desklet', 'SCINTILLA (India Design Mark) -  BOM   With Individual Arms & W/o Desklet', 'Scratch Resistant flip up full desklet, Brake Castors for ABS Desklet only, Manual Tip up Seat', 'scintilla2.jpg', '', 'HOB', 9004.00, 0.00, '2', 9004.00, 'S01 (Cerry Red), S02 (Lemon Lime), S03 (Oceanic Blue), S04 (Carbon Grey), S05 (Raven Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(769, 'FUSCINXDS01SXXXX', '238', 'SCINTILLA (India Design Mark) -  BOM    With Desklet & Arms', 'SCINTILLA (India Design Mark) -  BOM    With Desklet & Arms', 'Scratch Resistant flip up full desklet, Brake Castors for ABS Desklet only, Manual Tip up Seat', 'scintilla3.jpg', '', 'HOB', 11812.00, 0.00, '2', 11812.00, 'S01 (Cerry Red), S02 (Lemon Lime), S03 (Oceanic Blue), S04 (Carbon Grey), S05 (Raven Black)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(770, 'FUL41XXXV01SXTRD ', '238', 'PREMIUM LOUNGE CHAIRS -  BOM 1 Str', 'PREMIUM LOUNGE CHAIRS -  BOM 1 Str', 'Unique Flexible Back, Durable Steel Understructure, Adj Glides for Level Adj on uneven floor', 'premium1.jpg', '', 'HOC', 8436.00, 0.00, '1', 8436.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(771, 'FUL42XXXV01SXTRD', '238', 'PREMIUM LOUNGE CHAIRS -  BOM  2 Str', 'PREMIUM LOUNGE CHAIRS -  BOM  2 Str', 'Unique Flexible Back, Durable Steel Understructure, Adj Glides for Level Adj on uneven floor', 'premium2.jpg', '', 'HOC', 13357.00, 0.00, '1', 13357.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(772, 'FUL43XXXV01SXTRD ', '238', 'PREMIUM LOUNGE CHAIRS -  BOM 3 Str', 'PREMIUM LOUNGE CHAIRS -  BOM 3 Str', 'Unique Flexible Back, Durable Steel Understructure, Adj Glides for Level Adj on uneven floor', 'premium3.jpg', '', 'HOC', 20688.00, 0.00, '1', 20688.00, 'V01,V02,V03,V04,V05,V06,V07,V08, V09,V10,V11,V12,V13,V14,V15,V16,V17', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(773, 'FUL51XXXC83SXXXX ', '244', 'MIDAS -  BQ 1 Str * GAC', 'MIDAS -  BQ 1 Str * GAC', 'Soft Feel, Imported Velvetine range of Upholstery, Understructure in SS', 'midas1.jpg', '', 'HOA/930', 17382.00, 0.00, '1', 17382.00, 'Sea Green-C-83,Rich Chocolate-C-02,Cold Coffee-C-01,Moon Light Grey-C-05,Cobalt Blue-C-41,C-97- Rich Chocolate-Back & Moonlight Grey-Seat,C- 98-Rich Chocolate- Back & Cold Coffee-Seat', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(774, 'FUL52XXXC83SXXXX ', '244', 'MIDAS -  BQ  2 Str', 'MIDAS -  BQ  2 Str', 'Soft Feel, Imported Velvetine range of Upholstery, Understructure in SS', 'midas2.jpg', '', 'HOA/930', 26998.00, 0.00, '1', 26998.00, 'Sea Green-C-83,Rich Chocolate-C-02,Cold Coffee-C-01,Moon Light Grey-C-05,Cobalt Blue-C-41,C-97- Rich Chocolate-Back & Moonlight Grey-Seat,C- 98-Rich Chocolate- Back & Cold Coffee-Seat', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(775, 'FUL53XXXC83SXXXX ', '244', 'MIDAS -  BQ 3 Str', 'MIDAS -  BQ 3 Str', 'Soft Feel, Imported Velvetine range of Upholstery, Understructure in SS', 'midas3.jpg', '', 'HOA/930', 35876.00, 0.00, '1', 35876.00, 'Sea Green-C-83,Rich Chocolate-C-02,Cold Coffee-C-01,Moon Light Grey-C-05,Cobalt Blue-C-41,C-97- Rich Chocolate-Back & Moonlight Grey-Seat,C- 98-Rich Chocolate- Back & Cold Coffee-Seat', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(776, 'FUPISA1X601SXXXX ', '238', 'PISA -  BOM 1 Str', 'PISA -  BOM 1 Str', 'Ergonomic Back Support, Soft Touch Fine Finish, Durable Shaneel Fabric, also available in Rich Black Leatherite', 'pisa1.jpg', '', 'HOC', 18250.00, 0.00, '1', 18250.00, '601-Nakhatrana-Back–Desert Sand Seat- Dark Terracotta,602-Jaipur Royals-Back-Grey Stone Seat Tyrian Purple,603-Chinkara-Back-GreySeat-Black,13R-Bison-Seat & Back- Graphite Black Leatherite', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(777, 'FUPISA2X601SXXXX ', '238', 'PISA -  BOM 2 Str', 'PISA -  BOM 2 Str', 'Ergonomic Back Support, Soft Touch Fine Finish, Durable Shaneel Fabric, also available in Rich Black Leatherite', 'pisa2.jpg', '', 'HOC', 27000.00, 0.00, '1', 27000.00, '601-Nakhatrana-Back–Desert Sand Seat- Dark Terracotta,602-Jaipur Royals-Back-Grey Stone Seat Tyrian Purple,603-Chinkara-Back-GreySeat-Black,13R-Bison-Seat & Back- Graphite Black Leatherite', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(778, 'FUPISA3X601SXXXX ', '238', 'PISA -  BOM 3 Str', 'PISA -  BOM 3 Str', 'Ergonomic Back Support, Soft Touch Fine Finish, Durable Shaneel Fabric, also available in Rich Black Leatherite', 'pisa3.jpg', '', 'HOC', 36000.00, 0.00, '1', 36000.00, '601-Nakhatrana-Back–Desert Sand Seat- Dark Terracotta,602-Jaipur Royals-Back-Grey Stone Seat Tyrian Purple,603-Chinkara-Back-GreySeat-Black,13R-Bison-Seat & Back- Graphite Black Leatherite', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(779, 'FUPHENOM313SXXX', '238', 'PHENOM -  BOM  Lounge', 'PHENOM -  BOM  Lounge', 'Relaxed angle of seat for comfort,Soft curvaceous edges,Soft finish Shaneel fabric & Dual tone appearance', 'phenom1.jpg', '', 'HOC', 7490.00, 0.00, '1', 7490.00, 'Maple Syrup(313),Raspberry Red(314),Espresso Cream(315),Black Current(316)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(780, 'FUPHOTTM313SXXXX ', '238', 'PHENOM -  BOM Ottomon', 'PHENOM -  BOM Ottomon', 'Relaxed angle of seat for comfort,Soft curvaceous edges,Soft finish Shaneel fabric & Dual tone appearance', 'phenom2.jpg', '', 'HOC', 4570.00, 0.00, '1', 4570.00, 'Maple Syrup(313),Raspberry Red(314),Espresso Cream(315),Black Current(316)', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(781, 'FUPHCOFT030SXXXX ', '238', 'PHENOM -  BOM Coffe Table', 'PHENOM -  BOM Coffe Table', 'Made with toughened glass & with SS understructure', 'phenom3.jpg', '', 'HOC', 4670.00, 0.00, '1', 4670.00, 'Std Colour', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(782, 'FUBPMIX3027S0HGF', '238', 'PERCH -  BOM  3 Str', 'PERCH -  BOM  3 Str', 'W/o Arms & W/o Cushion', 'perch1.jpg', '', 'HOB', 21948.00, 0.00, '1', 21948.00, 'Hoary Colour', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(783, 'FUBPMIX3219SSHGF', '238', 'PERCH -  BOM Nano Perch', 'PERCH -  BOM Nano Perch', 'With Arms & W/o Cushion', 'perch2.jpg', '', 'HOB', 14610.00, 0.00, '1', 14610.00, 'Hoary Colour', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(784, 'FUBPMIX3219S2HGF ', '238', 'PERCH -  BOM 3 Str', 'PERCH -  BOM 3 Str', 'With 2 Arms & W/o Cushion', 'perch3.jpg', '', 'HOB', 23044.00, 0.00, '1', 23044.00, 'Hoary Colour', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(785, 'FUUP3SBHF30MMZZZ ', '238', 'PERCH -  BOM Cushion Sets -  BOM Co-238', 'PERCH -  BOM Cushion Sets -  BOM Co-239', '', 'perch4.jpg', '', '930', 2002.00, 205.00, '1', 2207.00, 'Black Leatherite only', 'Chairs', 'CAT102', '2015-07-18', 'Suresh', '2016-03-22', '11:56:00', '2016-03-22 11:56:00', '', 1),
(786, '1001', '3', 'desc', 'testing', 'tsr', '1470053045.jpg', '323', '323', 23.00, 23.00, '23', 323.00, 'test', 'Desking', 'CAT101', '2016-08-01', 'suresh', '2016-08-01', '05:33:25', '2016-08-01 17:35:06', 'testing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_project_master`
--

CREATE TABLE IF NOT EXISTS `arka_project_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax_no` varchar(100) NOT NULL,
  `cst_no` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `project_order_no` varchar(50) NOT NULL,
  `project_order_date` date NOT NULL,
  `project_quote_no` varchar(50) NOT NULL,
  `po_no` varchar(25) NOT NULL,
  `po_date` date NOT NULL,
  `quote_date` date NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `dc_no` varchar(25) NOT NULL,
  `dc_date` date NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `invoice_date` date NOT NULL,
  `revised_version` varchar(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `enquiry_id` varchar(15) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `area_code` int(10) NOT NULL,
  `extension` int(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `tax_value` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_master_details`
--

CREATE TABLE IF NOT EXISTS `arka_project_master_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `project_order_no` varchar(15) NOT NULL,
  `project_quote_no` varchar(50) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `revised_version` varchar(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `material_value` double(11,2) NOT NULL,
  `material_estimate` double(11,2) NOT NULL,
  `labour_estimate` double(11,2) NOT NULL,
  `labour_value` double(11,2) NOT NULL,
  `sqft` double(11,2) NOT NULL,
  `material` double(11,2) NOT NULL,
  `labour` varchar(20) NOT NULL,
  `total_material` double(11,2) NOT NULL,
  `total_labour` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `labour_tax_value` double(11,2) NOT NULL,
  `material_tax_value` double(11,2) NOT NULL,
  `labour_tax_per` double(11,2) NOT NULL,
  `material_tax_per` double(11,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_time` time NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_master_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_order_followup`
--

CREATE TABLE IF NOT EXISTS `arka_project_order_followup` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `project_order_no` varchar(25) NOT NULL,
  `project_order_date` date NOT NULL,
  `project_quote_no` varchar(25) NOT NULL,
  `project_quote_date` date NOT NULL,
  `revised_no` varchar(50) NOT NULL,
  `snooze_date` date NOT NULL,
  `snooze_time` time NOT NULL,
  `closed_date` date NOT NULL,
  `closed_time` time NOT NULL,
  `po_date` date NOT NULL,
  `po_no` varchar(25) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_order_followup`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_order_mail`
--

CREATE TABLE IF NOT EXISTS `arka_project_order_mail` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(15) NOT NULL,
  `project_order_no` varchar(50) NOT NULL,
  `mail_from` varchar(50) NOT NULL,
  `mail_to` varchar(50) NOT NULL,
  `mail_cc` varchar(50) NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `mail_attachment1` varchar(255) NOT NULL,
  `mail_attachment2` varchar(255) NOT NULL,
  `mail_attachment3` varchar(255) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_order_mail`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_payment_details`
--

CREATE TABLE IF NOT EXISTS `arka_project_payment_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(25) NOT NULL,
  `project_order_no` varchar(25) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `pending_amount` double(11,2) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_ref` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_payment_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_payment_master`
--

CREATE TABLE IF NOT EXISTS `arka_project_payment_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(20) NOT NULL,
  `project_order_no` varchar(50) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `invoice_date` date NOT NULL,
  `pending_amount` double(11,2) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_payment_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_quote_details`
--

CREATE TABLE IF NOT EXISTS `arka_project_quote_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `project_quote_no` varchar(50) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `revised_version` varchar(10) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `sqft` double(11,2) NOT NULL,
  `material` varchar(150) NOT NULL,
  `labour` double(11,2) NOT NULL,
  `total_material` double(11,2) NOT NULL,
  `total_labour` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `labour_tax_value` double(11,2) NOT NULL,
  `material_tax_value` double(11,2) NOT NULL,
  `labour_tax_per` double(11,2) NOT NULL,
  `material_value` double(11,2) NOT NULL,
  `labour_value` double(11,2) NOT NULL,
  `material_estimate` double(11,2) NOT NULL,
  `labour_estimate` double(11,2) NOT NULL,
  `material_tax_per` double(11,2) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_quote_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_quote_master`
--

CREATE TABLE IF NOT EXISTS `arka_project_quote_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `project_quote_no` varchar(50) NOT NULL,
  `quote_date` date NOT NULL,
  `enquiry_id` varchar(50) NOT NULL,
  `revised_version` varchar(10) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `validity` varchar(10) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `area` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `extension` int(11) NOT NULL,
  `area_code` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `vat_value` double(11,2) NOT NULL,
  `vat_per` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_quote_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_project_term`
--

CREATE TABLE IF NOT EXISTS `arka_project_term` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `project_quote_no` varchar(50) NOT NULL,
  `revised_version` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `validity` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_project_term`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_quote_details`
--

CREATE TABLE IF NOT EXISTS `arka_quote_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `quote_id` varchar(15) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_quantity` varchar(20) NOT NULL,
  `item_specification` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_quote_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_quote_request_master`
--

CREATE TABLE IF NOT EXISTS `arka_quote_request_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `quote_id` varchar(15) NOT NULL,
  `quote_date` date NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `supplier_company_name` varchar(50) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `contact_fname` varchar(50) NOT NULL,
  `contact_lname` varchar(50) NOT NULL,
  `enquiry_reff_id` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `area_code` varchar(5) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `extension` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `area` varchar(75) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `quote_status` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_quote_request_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_role_master`
--

CREATE TABLE IF NOT EXISTS `arka_role_master` (
  `role_id` varchar(10) NOT NULL,
  `role_name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` varchar(15) NOT NULL,
  `ident` tinyint(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ident`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `arka_role_master`
--

INSERT INTO `arka_role_master` (`role_id`, `role_name`, `category`, `status`, `created_date`, `created_time`, `ident`) VALUES
('UR10000', 'List Customer', 'Customer Management', 1, '2013-06-16', '05:31:14 PM', 1),
('UR10001', 'Add New Customer', 'Customer Management', 1, '2013-06-16', '05:33:26 PM', 2),
('UR10002', 'Modify Customer', 'Customer Management', 0, '2015-02-16', '05:54:44 PM', 3),
('UR10003', 'List Demo', 'Demo Management', 1, '2014-11-07', '02:29:43 AM', 4),
('UR10004', 'List Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:12 PM', 5),
('UR10005', 'Add Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:34 PM', 6),
('UR10006', 'Edit Problem Tickets', 'Problem Management', 1, '2013-06-16', '06:23:47 PM', 7),
('UR10007', 'Solution', 'Problem Management', 1, '2013-08-12', '04:30:58 PM', 8),
('UR10009', 'Work log', 'Problem Management', 1, '2013-08-12', '04:31:33 PM', 9),
('UR10011', 'Add New Demo', 'Demo Management', 1, '2014-11-07', '02:29:59 AM', 10),
('UR10012', 'Edit Demo', 'Demo Management', 1, '2014-11-07', '02:30:16 AM', 11),
('UR10013', 'Manage Device Payment', 'Device Management', 1, '2013-06-16', '06:29:00 PM', 12),
('UR10014', 'Manage Problem Payment', 'Problem Management', 1, '2013-06-16', '06:29:10 PM', 13),
('UR10015', 'Entitlement', 'Customer Management', 1, '2013-07-09', '11:25:14 PM', 14),
('UR10016', 'Device Payment Details', 'Device Management', 1, '2013-07-10', '05:25:12 PM', 15),
('UR10017', 'List User', 'User Management', 1, '2015-01-11', '01:24:35 PM', 16),
('UR10018', 'Add New User', 'User Management', 1, '2015-01-11', '01:24:46 PM', 17),
('UR10019', 'Edit User', 'User Management', 1, '2015-01-11', '01:24:55 PM', 18),
('UR10020', 'Demo Details', 'Demo Management', 1, '2014-11-07', '02:30:39 AM', 19),
('UR10021', 'List Employees', 'HR Management', 1, '2013-10-11', '04:26:52 PM', 20),
('UR10022', 'Ticket Open', 'Problem Management', 1, '2014-07-04', '06:14:31 PM', 21),
('UR10023', 'In Progress', 'Problem Management', 1, '2014-07-04', '06:14:41 PM', 22),
('UR10024', 'SLA Hold', 'Problem Management', 1, '2014-07-04', '06:15:01 PM', 23),
('UR10025', 'Resolved', 'Problem Management', 1, '2014-07-04', '06:15:17 PM', 24),
('UR10026', 'Rejected', 'Problem Management', 1, '2014-07-04', '06:15:32 PM', 25),
('UR10027', 'Ticket Close', 'Problem Management', 1, '2014-07-04', '06:16:22 PM', 26),
('UR10028', 'Confirmed', 'Problem Management', 1, '2014-07-04', '06:16:35 PM', 27),
('UR10029', 'List My Tickets', 'Problem Management', 1, '2014-09-04', '09:20:53 PM', 28),
('UR10030', 'Add New Service', 'Service Management', 1, '2014-11-11', '03:05:21 PM', 29),
('UR10031', 'Modify Service', 'Service Management', 1, '2014-11-11', '03:06:59 PM', 30),
('UR10032', 'List Service', 'Service Management', 1, '2014-11-11', '03:07:11 PM', 31),
('UR10033', 'List Customer Remarks', 'Customer Management', 1, '2014-11-18', '12:41:15 PM', 32),
('UR10034', 'Add New Customer Remarks', 'Customer Management', 1, '2014-11-18', '12:44:26 PM', 33),
('UR10035', 'Add New Vendor', 'General Management', 1, '2015-01-06', '10:51:52 PM', 34),
('UR10036', 'List Vendors', 'General Management', 1, '2015-01-11', '01:13:56 PM', 35),
('UR10037', 'Edit Vendor', 'General Management', 1, '2015-01-06', '10:52:15 PM', 36),
('UR10038', 'Add New Insurance', 'General Management', 1, '2015-01-06', '10:52:51 PM', 37),
('UR10039', 'List Insurance', 'General Management', 1, '2015-01-06', '10:53:13 PM', 38),
('UR10040', 'Edit Insurance', 'General Management', 1, '2015-01-06', '10:54:13 PM', 39),
('UR10041', 'Add New Phone', 'General Management', 1, '2015-01-06', '10:54:45 PM', 40),
('UR10042', 'List Phone', 'General Management', 1, '2015-01-11', '01:15:15 PM', 41),
('UR10043', 'Edit Phone', 'General Management', 1, '2015-01-06', '10:55:38 PM', 42),
('UR10044', 'Add New Rent', 'General Management', 1, '2015-01-06', '10:56:28 PM', 43),
('UR10045', 'List Rent', 'General Management', 1, '2015-01-11', '01:15:36 PM', 44),
('UR10046', 'Edit Rent', 'General Management', 1, '2015-01-06', '10:57:31 PM', 45),
('UR10047', 'Add New Advance', 'General Management', 1, '2015-01-06', '11:00:14 PM', 46),
('UR10048', 'List Advance', 'General Management', 1, '2015-01-06', '11:00:27 PM', 47),
('UR10049', 'Edit Advance', 'General Management', 1, '2015-01-06', '11:00:48 PM', 48),
('UR10050', 'Add New Payment Pending', 'General Management', 1, '2015-01-11', '01:18:38 PM', 49),
('UR10051', 'List Payment Pending', 'General Management', 1, '2015-01-11', '01:20:06 PM', 50),
('UR10052', 'Edit Payment Pending', 'General Management', 1, '2015-01-11', '01:19:12 PM', 51),
('UR10053', 'Add New Note', 'Note Management', 1, '2015-01-12', '11:17:25 AM', 52),
('UR10054', 'List Notes', 'Note Management', 1, '2015-01-12', '11:17:48 AM', 53),
('UR10055', 'Modify Stock', 'Stock Management', 1, '2015-03-21', '01:17:40 PM', 54),
('UR10056', 'Modify Price', 'Stock Management', 1, '2015-03-21', '01:19:34 PM', 55),
('UR10057', 'Modify Remarks', 'Remarks Management', 1, '2015-03-23', '02:59:04 PM', 56);

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_details`
--

CREATE TABLE IF NOT EXISTS `arka_sales_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_basic` double(11,2) NOT NULL,
  `profit_value` double(11,2) NOT NULL,
  `profit_val` double(11,2) NOT NULL,
  `sales_order_no` varchar(15) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `sales_quote_no` varchar(25) NOT NULL,
  `sales_revised_version` varchar(11) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit_basic` double(11,2) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `vat_value` double(11,2) NOT NULL,
  `vat_per` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_sales_details`
--

INSERT INTO `arka_sales_details` (`sl_no`, `product_basic`, `profit_value`, `profit_val`, `sales_order_no`, `enquiry_id`, `sales_quote_no`, `sales_revised_version`, `item_type`, `product_description`, `product_code`, `quantity`, `unit_basic`, `sub_total`, `vat_value`, `vat_per`, `total`, `created_by`, `created_date`, `created_time`, `timestamp`, `remarks`, `status`) VALUES
(1, 0.00, 0.00, 0.00, 'SO1001', 'ENQ1001', 'SQ1001', 'REV1001', 'Product', 'WINDOWS HOSTING', 'SW1003', '1', 1800.00, 1800.00, 0.00, 0.00, 1800.00, 'Nagaraj', '2016-10-19', '02:05:48', '2016-10-19 14:10:51', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_followup`
--

CREATE TABLE IF NOT EXISTS `arka_sales_followup` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `sales_order_no` varchar(25) NOT NULL,
  `sales_order_date` date NOT NULL,
  `sales_quote_no` varchar(25) NOT NULL,
  `sales_quote_date` date NOT NULL,
  `po_no` varchar(25) NOT NULL,
  `po_date` date NOT NULL,
  `snooze_date` date NOT NULL,
  `snooze_time` time NOT NULL,
  `closed_date` date NOT NULL,
  `closed_time` time NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `revised_no` varchar(25) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arka_sales_followup`
--

INSERT INTO `arka_sales_followup` (`sl_no`, `sales_order_no`, `sales_order_date`, `sales_quote_no`, `sales_quote_date`, `po_no`, `po_date`, `snooze_date`, `snooze_time`, `closed_date`, `closed_time`, `enquiry_id`, `customer_id`, `revised_no`, `order_status`, `created_by`, `created_date`, `created_time`, `timestamp`, `remarks`, `status`) VALUES
(1, 'SO1001', '0000-00-00', 'SQ1001', '2016-10-19', '2312312', '2016-10-19', '2016-10-19', '00:00:00', '0000-00-00', '00:00:00', 'ENQ1001', 'CUS1001', 'REV1001', 'Partial Mat Delivered', 'Nagaraj', '2016-10-19', '02:12:22', '2016-10-19 02:12:22', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_master`
--

CREATE TABLE IF NOT EXISTS `arka_sales_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax_no` varchar(100) NOT NULL,
  `cst_no` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `area_code` varchar(11) NOT NULL,
  `extension` varchar(11) NOT NULL,
  `quote_date` date NOT NULL,
  `sales_order_no` varchar(50) NOT NULL,
  `sales_quote_no` varchar(50) NOT NULL,
  `sales_order_date` date NOT NULL,
  `sales_quote_revise_no` varchar(10) NOT NULL,
  `po_no` varchar(50) NOT NULL,
  `po_date` date NOT NULL,
  `dc_no` varchar(25) NOT NULL,
  `dc_date` date NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `invoice_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `enquiry_id` varchar(15) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `total_tax_value` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `arka_group` varchar(100) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_sales_master`
--

INSERT INTO `arka_sales_master` (`sl_no`, `service_tax_no`, `cst_no`, `tin_no`, `area_code`, `extension`, `quote_date`, `sales_order_no`, `sales_quote_no`, `sales_order_date`, `sales_quote_revise_no`, `po_no`, `po_date`, `dc_no`, `dc_date`, `invoice_no`, `invoice_date`, `order_status`, `customer_id`, `customer_name`, `company_name`, `enquiry_id`, `address1`, `address2`, `mobile_no`, `area`, `city`, `landmark`, `pincode`, `sub_total`, `total_tax_value`, `total`, `phone_no`, `email_id`, `email_id1`, `created_by`, `created_date`, `created_time`, `timestamp`, `remarks`, `status`, `arka_group`) VALUES
(1, '', '', '', '0', '0', '2016-10-19', 'SO1001', 'SQ1001', '0000-00-00', 'REV1001', '2312312', '2016-10-19', '', '0000-00-00', 'INV1001', '2016-10-19', 'Pending', 'CUS1001', 'Suresh Ramakrishnan', 'ADROIT SOLUTIONZ', 'ENQ1001', 'Test', 'Test', '9500051119', 'Test', 'Chennai', '', 600028, 1800.00, 0.00, 1800.00, 0, 'suresh@adroitsolutionz.com', '', 'Nagaraj', '2016-10-19', '02:13:54', '2016-10-19 15:34:12', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_order_mail`
--

CREATE TABLE IF NOT EXISTS `arka_sales_order_mail` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(15) NOT NULL,
  `sales_order_no` varchar(50) NOT NULL,
  `mail_from` varchar(50) NOT NULL,
  `mail_to` varchar(50) NOT NULL,
  `mail_cc` varchar(50) NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `mail_attachment1` varchar(255) NOT NULL,
  `mail_attachment2` varchar(255) NOT NULL,
  `mail_attachment3` varchar(255) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_sales_order_mail`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_payment_details`
--

CREATE TABLE IF NOT EXISTS `arka_sales_payment_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(25) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `pending_amount` double(11,2) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_ref` varchar(20) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sales_order_no` varchar(25) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_sales_payment_details`
--

INSERT INTO `arka_sales_payment_details` (`sl_no`, `invoice_no`, `invoice_amount`, `pending_amount`, `paid_amount`, `payment_status`, `payment_mode`, `payment_ref`, `created_by`, `created_date`, `created_time`, `timestamp`, `sales_order_no`, `status`) VALUES
(1, 'INV1001', 1001.00, 1001.00, 0.00, 'Paid', 'Cash', '', 'Nagaraj', '2016-10-19', '02:13:32', '2016-10-19 15:31:33', 'SO1001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_payment_master`
--

CREATE TABLE IF NOT EXISTS `arka_sales_payment_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(20) NOT NULL,
  `sales_order_no` varchar(50) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `invoice_date` date NOT NULL,
  `pending_amount` double(11,2) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_sales_payment_master`
--

INSERT INTO `arka_sales_payment_master` (`sl_no`, `invoice_no`, `sales_order_no`, `invoice_amount`, `invoice_date`, `pending_amount`, `paid_amount`, `payment_status`, `created_by`, `created_date`, `created_time`, `timestamp`, `status`) VALUES
(1, 'INV1001', 'SO1001', 1001.00, '2016-10-19', 0.00, 1001.00, 'Paid', 'Nagaraj', '2016-10-19', '02:13:32', '2016-10-19 02:13:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_quote_details`
--

CREATE TABLE IF NOT EXISTS `arka_sales_quote_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `sales_quote_no` varchar(25) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `revised_version` varchar(11) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `material_description` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit_basic` double(11,2) NOT NULL,
  `product_basic` double(11,2) NOT NULL,
  `profit_per` double(11,2) NOT NULL,
  `profit_value` double(11,2) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `vat_value` double(11,2) NOT NULL,
  `vat_per` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(15) NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arka_sales_quote_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_sales_quote_master`
--

CREATE TABLE IF NOT EXISTS `arka_sales_quote_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `sales_quote_no` varchar(50) NOT NULL,
  `quote_date` date NOT NULL,
  `revised_version` varchar(50) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `enquiry_id` varchar(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `validity` varchar(20) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profit_per` double(11,2) NOT NULL,
  `profit_value` double(11,2) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `area` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `phone_no1` int(10) NOT NULL,
  `extension` int(11) NOT NULL,
  `extension1` int(10) NOT NULL,
  `area_code` int(10) NOT NULL,
  `area_code1` int(10) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `email_id1` varchar(255) NOT NULL,
  `sub_total` double(11,2) NOT NULL,
  `vat_value` double(11,2) NOT NULL,
  `vat_per` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `approve_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `arka_sales_quote_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_sale_term`
--

CREATE TABLE IF NOT EXISTS `arka_sale_term` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `sales_quote_no` varchar(11) NOT NULL,
  `revised_version` varchar(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `validity` varchar(20) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `arka_sale_term`
--

INSERT INTO `arka_sale_term` (`sl_no`, `sales_quote_no`, `revised_version`, `payment`, `validity`, `delivery`, `created_by`, `created_date`, `created_time`, `time_stamp`, `status`) VALUES
(1, 'SQ1001', 'REV1001', '40 %', '0', '2 TO 4 Weeks', 'Nagaraj', '2016-10-19', '01:11:27', '2016-10-19 13:23:01', 1),
(2, 'SQ1001', 'REV1001', '40 %', '0', '2 TO 4 Weeks', 'Nagaraj', '2016-10-19', '01:16:50', '2016-10-19 13:23:01', 1),
(3, 'SQ1001', 'REV1001', '40 %', '0', '2 TO 4 Weeks', 'Nagaraj', '2016-10-19', '01:20:03', '2016-10-19 13:23:01', 1),
(4, 'SQ1001', 'REV1002', '40 %', '0', '2 TO 4 Weeks', 'Nagaraj', '2016-10-19', '01:48:02', '2016-10-19 13:50:43', 1),
(5, 'SQ1001', 'REV1001', '50 %', '30', '2 to 4 weeks', 'Nagaraj', '2016-10-19', '02:05:48', '2016-10-19 14:06:25', 1),
(6, 'SQ1002', 'REV1001', '50 %', '7', '1 Day', 'Suresh Ramakrishnan', '2016-10-19', '06:44:50', '2016-10-19 18:46:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_service_followup`
--

CREATE TABLE IF NOT EXISTS `arka_service_followup` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_order_no` varchar(50) NOT NULL,
  `service_order_date` date NOT NULL,
  `service_quote_no` varchar(50) NOT NULL,
  `service_quote_date` date NOT NULL,
  `po_no` varchar(50) NOT NULL,
  `po_date` date NOT NULL,
  `enquiry_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `revised_no` varchar(50) NOT NULL,
  `snooze_date` date NOT NULL,
  `snooze_time` time NOT NULL,
  `closed_date` date NOT NULL,
  `closed_time` time NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_followup`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_master`
--

CREATE TABLE IF NOT EXISTS `arka_service_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax_no` varchar(100) NOT NULL,
  `cst_no` varchar(100) NOT NULL,
  `tin_no` varchar(100) NOT NULL,
  `service_order_no` varchar(50) NOT NULL,
  `service_order_date` date NOT NULL,
  `po_no` varchar(25) NOT NULL,
  `service_quote_no` varchar(50) NOT NULL,
  `service_quote_date` date NOT NULL,
  `po_date` date NOT NULL,
  `dc_no` varchar(50) NOT NULL,
  `dc_date` date NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `invoice_date` date NOT NULL,
  `service_quote_revise_no` varchar(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `enquiry_id` varchar(15) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `area` varchar(50) NOT NULL,
  `area_code` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(25) NOT NULL,
  `total` double(11,2) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `extension` int(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_master_details`
--

CREATE TABLE IF NOT EXISTS `arka_service_master_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_quote_no` varchar(25) NOT NULL,
  `service_order_no` varchar(15) NOT NULL,
  `service_revised` varchar(11) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `sqft` double(11,2) NOT NULL,
  `material` double(11,2) NOT NULL,
  `labour` varchar(20) NOT NULL,
  `material_value` varchar(10) NOT NULL,
  `labour_value` double(11,2) NOT NULL,
  `material_estimate` double(11,2) NOT NULL,
  `labour_estimate` double(11,2) NOT NULL,
  `total_material` double(11,2) NOT NULL,
  `total_labour` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `labour_tax_value` double(11,2) NOT NULL,
  `material_tax_value` double(11,2) NOT NULL,
  `labour_tax_per` double(11,2) NOT NULL,
  `material_tax_per` double(11,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_time` time NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_master_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_order_mail`
--

CREATE TABLE IF NOT EXISTS `arka_service_order_mail` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_id` varchar(20) NOT NULL,
  `service_order_no` varchar(50) NOT NULL,
  `mail_from` varchar(50) NOT NULL,
  `mail_to` varchar(50) NOT NULL,
  `mail_cc` varchar(50) NOT NULL,
  `mail_subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `mail_attachment1` varchar(255) NOT NULL,
  `mail_attachment2` varchar(255) NOT NULL,
  `mail_attachment3` varchar(255) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_order_mail`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_payment_details`
--

CREATE TABLE IF NOT EXISTS `arka_service_payment_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_order_no` varchar(50) NOT NULL,
  `invoice_no` varchar(25) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `pending_amount` mediumint(11) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_ref` varchar(20) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_payment_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_payment_master`
--

CREATE TABLE IF NOT EXISTS `arka_service_payment_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(20) NOT NULL,
  `service_order_no` varchar(50) NOT NULL,
  `invoice_amount` double(11,2) NOT NULL,
  `invoice_date` date NOT NULL,
  `pending_amount` double(11,2) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_payment_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_quote_details`
--

CREATE TABLE IF NOT EXISTS `arka_service_quote_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_quote_no` varchar(50) NOT NULL,
  `revised_version` varchar(10) NOT NULL,
  `enquiry_id` varchar(25) NOT NULL,
  `material_description` varchar(50) NOT NULL,
  `sqft` double(11,2) NOT NULL,
  `material` double(11,2) NOT NULL,
  `labour` varchar(20) NOT NULL,
  `material_value` double(11,2) NOT NULL,
  `labour_value` double(11,2) NOT NULL,
  `material_estimate` double(11,2) NOT NULL,
  `labour_estimate` double(11,2) NOT NULL,
  `total_material_cost` int(50) NOT NULL,
  `total_labour_cost` int(50) NOT NULL,
  `total_material` double(11,2) NOT NULL,
  `total_labour` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `labour_tax_value` double(11,2) NOT NULL,
  `material_tax_value` double(11,2) NOT NULL,
  `labour_tax_per` double(11,2) NOT NULL,
  `material_tax_per` double(11,2) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_quote_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_quote_master`
--

CREATE TABLE IF NOT EXISTS `arka_service_quote_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_quote_no` varchar(50) NOT NULL,
  `service_quote_date` date NOT NULL,
  `revised_version` varchar(10) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `enquiry_id` varchar(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `validity` varchar(10) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `area` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `extension` int(11) NOT NULL,
  `area_code` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `total` double(11,2) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_quote_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_service_terms_master`
--

CREATE TABLE IF NOT EXISTS `arka_service_terms_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `service_quote_no` varchar(50) NOT NULL,
  `revised_version` varchar(50) NOT NULL,
  `payment` varchar(25) NOT NULL,
  `delivery` varchar(25) NOT NULL,
  `validity` varchar(25) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_time` time NOT NULL,
  `created_date` date NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_service_terms_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_stock_master`
--

CREATE TABLE IF NOT EXISTS `arka_stock_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `inward_entry_id` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `material_category` varchar(18) NOT NULL,
  `material_name` varchar(25) NOT NULL,
  `item_category_code` varchar(250) NOT NULL,
  `material_code` varchar(15) NOT NULL,
  `supplier_code` varchar(25) NOT NULL,
  `supplier_name` varchar(25) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `invoice_date` date NOT NULL,
  `quantity` int(5) NOT NULL,
  `unit_price` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `record_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `arka_stock_master`
--

INSERT INTO `arka_stock_master` (`sl_no`, `inward_entry_id`, `location`, `material_category`, `material_name`, `item_category_code`, `material_code`, `supplier_code`, `supplier_name`, `invoice_no`, `invoice_date`, `quantity`, `unit_price`, `total`, `record_status`) VALUES
(1, 'IWD1001', 'WAV', 'Project', 'SPYDER PROJECT', 'PRO1001', 'SPY1001', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1001', '2017-10-03', 95, 215.00, 46225.00, 1),
(2, 'IWD1002', 'WAV', 'OXBO MID BACK', 'OXBO MID BACK', 'ICC1002', 'IC1002', 'VR1002', 'ARWA ENTERPRISES', 'INV1002', '2017-10-03', 24, 4798.00, 4798.00, 1),
(3, 'IWD1003', 'PAT', 'BRAVO MUSH ROOM', 'BRAVO MUSH ROOM', 'ICC1003', 'IC1003', 'VR1003', 'BOKARIA REINFORCING COMPA', 'IN1003', '2017-10-03', 1, 6314.00, 6314.00, 1),
(4, 'IWD1004', 'TAD', 'HALO VISITOR CHAIR', 'HALO VISITOR CHAIR', 'ICC1004', 'IC1004', 'VR1004', 'FE ON CRAFT ENGINEERING', 'INV1004', '2017-10-03', 1, 27276.00, 27276.00, 1),
(5, 'IWD1005', 'PAT', 'PREMIUM CHAIR BLUE', 'PREMIUM CHAIR BLUE', 'ICC1005', 'IC1005', 'VR1005', 'GODREJ & BOYCE MFG CO LTD', 'INV1005', '2017-10-03', 1, 17128.00, 17128.00, 1),
(7, 'IWD1007', 'PAT', '5002 Black Mesh Me', '5002 Black Mesh Metal', 'ICC1007', 'IC1007', 'VR1007', 'GODREJ & BOYCE MFG CO LTD', 'INV1007', '0000-00-00', 8, 0.00, 0.00, 1),
(8, 'IWD1008', 'PAT', 'Regency Mid Back', 'Regency Mid Back', 'ICC1008', 'IC1008', 'VR1008', 'GODREJ & BOYCE MFG CO LTD', 'INV1008', '0000-00-00', 1, 0.00, 0.00, 1),
(9, 'IWD1009', 'PAT', 'Regency High Back', 'Regency High Back', 'ICC1009', 'IC1009', 'VR1009', 'GODREJ & BOYCE MFG CO LTD', 'INV1009', '0000-00-00', 1, 0.00, 0.00, 1),
(10, 'IWD1010', 'PAT', 'T8 TABLE', 'T8 TABLE', 'ICC1010', 'IC1010', 'VR1010', 'GODREJ & BOYCE MFG CO LTD', 'INV1010', '0000-00-00', 1, 0.00, 0.00, 1),
(11, 'IWD1011', 'PAT', 'PEDESTAL 390 x 435', 'PEDESTAL 390 x 435 x 600', 'ICC1011', 'IC1011', 'VR1011', 'GODREJ & BOYCE MFG CO LTD', 'INV1011', '0000-00-00', 3, 0.00, 0.00, 1),
(12, 'IWD1012', 'PAT', 'PEDESTAL 390 x 440', 'PEDESTAL 390 x 440 x 646 ', 'ICC1012', 'IC1012', 'VR1012', 'GODREJ & BOYCE MFG CO LTD', 'INV1012', '0000-00-00', 1, 0.00, 0.00, 1),
(13, 'IWD1013', 'TAD', 'TDU', 'TDU', 'ICC1013', 'IC1013', 'VR1013', 'GODREJ & BOYCE MFG CO LTD', 'INV1013', '0000-00-00', 1, 0.00, 0.00, 1),
(14, 'IWD1014', 'PAT', '6DR PLU MAIN', '6DR PLU MAIN', 'ICC1014', 'IC1014', 'VR1014', 'GODREJ & BOYCE MFG CO LTD', 'INV1014', '0000-00-00', 5, 0.00, 0.00, 1),
(15, 'IWD1015', 'PAT', '6DR PLU ADD ON', '6DR PLU ADD ON', 'ICC1015', 'IC1015', 'VR1015', 'GODREJ & BOYCE MFG CO LTD', 'INV1015', '0000-00-00', 7, 0.00, 0.00, 1),
(16, 'IWD1016', 'PAT', '4DR PLU ADD ON', '4DR PLU ADD ON', 'ICC1016', 'IC1016', 'VR1016', 'GODREJ & BOYCE MFG CO LTD', 'INV1016', '0000-00-00', 0, 0.00, 0.00, 1),
(17, 'IWD1017', 'PAT', '4DR VFC PRINCE GRE', '4DR VFC PRINCE GREY', 'ICC1017', 'IC1017', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'INV1017', '0000-00-00', 1, 0.00, 0.00, 1),
(18, 'IWD1018', 'PAT', '4DR VFC BOND WHITE', '4DR VFC BOND WHITE', 'ICC1018', 'IC1018', 'VR1018', 'GODREJ & BOYCE MFG CO LTD', 'INV1018', '0000-00-00', 3, 0.00, 0.00, 1),
(19, 'IWD1019', 'PAT', 'STOREWELL', 'STOREWELL', 'ICC1019', 'IC1019', 'VR1019', 'GODREJ & BOYCE MFG CO LTD', 'INV1019', '0000-00-00', 0, 0.00, 0.00, 1),
(20, 'IWD1020', 'PAT', 'KD STOREWELL', 'KD STOREWELL', 'ICC1020', 'IC1020', 'VR1020', 'GODREJ & BOYCE MFG CO LTD', 'INV1020', '0000-00-00', 4, 0.00, 0.00, 1),
(21, 'IWD1021', 'PAT', 'FALSE FLOORING TIL', 'FALSE FLOORING TILE', 'ICC1021', 'IC1021', 'VR1021', 'GODREJ & BOYCE MFG CO LTD', 'INV1021', '0000-00-00', 57, 0.00, 0.00, 1),
(22, 'IWD1022', 'PAT', 'STRINCH', 'STRINCH', 'ICC1022', 'IC1022', 'VR1022', 'GODREJ & BOYCE MFG CO LTD', 'INV1022', '0000-00-00', 1100, 0.00, 0.00, 1),
(23, 'IWD1023', 'PAT', 'PEDESTAL', 'PEDESTAL', 'ICC1023', 'IC1023', 'VR1023', 'GODREJ & BOYCE MFG CO LTD', 'INV1023', '0000-00-00', 120, 0.00, 0.00, 1),
(24, 'IWD1024', 'PAT', 'BUSH', 'BUSH', 'ICC1024', 'IC1024', 'VR1024', 'GODREJ & BOYCE MFG CO LTD', 'INV1024', '0000-00-00', 120, 0.00, 0.00, 1),
(25, 'IWD1025', 'PAT', 'HEAD PLATE', 'HEAD PLATE', 'ICC1025', 'IC1025', 'VR1025', 'GODREJ & BOYCE MFG CO LTD', 'INV1025', '0000-00-00', 100, 0.00, 0.00, 1),
(26, 'IWD1026', 'PAT', 'TILE 1200', 'TILE 1200', 'ICC1026', 'IC1026', 'VR1026', 'GODREJ & BOYCE MFG CO LTD', 'INV1026', '0000-00-00', 2, 0.00, 0.00, 1),
(27, 'IWD1027', 'PAT', 'File ezee Plastic', 'File ezee Plastic', 'ICC1027', 'IC1027', 'VR1027', 'GODREJ & BOYCE MFG CO LTD', 'INV1027', '0000-00-00', 100, 0.00, 0.00, 1),
(28, 'IWD1028', 'PAT', 'File ezee Paper', 'File ezee Paper', 'ICC1028', 'IC1028', 'VR1028', 'GODREJ & BOYCE MFG CO LTD', 'INV1028', '0000-00-00', 100, 0.00, 0.00, 1),
(29, 'IWD1029', 'PAT', 'ACCESS FLAP 300MM ', 'ACCESS FLAP 300MM WITH BR', 'ICC1029', 'IC1029', 'VR1029', 'GODREJ & BOYCE MFG CO LTD', 'INV1029', '0000-00-00', 8, 0.00, 0.00, 1),
(30, 'IWD1030', 'PAT', 'ACCESS FLAP 450MM ', 'ACCESS FLAP 450MM WITH BR', 'ICC1030', 'IC1030', 'VR1030', 'GODREJ & BOYCE MFG CO LTD', 'INV1030', '0000-00-00', 1, 0.00, 0.00, 1),
(31, 'IWD1031', 'PAT', 'Deskport FTB154 6P', 'Deskport FTB154 6P/B WB', 'ICC1031', 'IC1031', 'VR1031', 'GODREJ & BOYCE MFG CO LTD', 'INV1031', '0000-00-00', 4, 0.00, 0.00, 1),
(32, 'IWD1032', 'PAT', 'Deskport FTB154 8P', 'Deskport FTB154 8P/B WB', 'ICC1032', 'IC1032', 'VR1032', 'GODREJ & BOYCE MFG CO LTD', 'INV1032', '0000-00-00', 6, 0.00, 0.00, 1),
(33, 'IWD1033', 'PAT', 'Deskport FTB154 10', 'Deskport FTB154 10P/B WB', 'ICC1033', 'IC1033', 'VR1033', 'GODREJ & BOYCE MFG CO LTD', 'INV1033', '0000-00-00', 4, 0.00, 0.00, 1),
(35, 'IWD1006', 'WAV', 'Glass Door from GC', 'GLASS DOOR FROM GCPL', 'ICC1034', 'IC1034', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1032', '2017-10-24', 5, 0.00, 0.00, 1),
(36, 'IWD1007', 'WAV', 'PSB from Brakes 45', 'PSB FROM BRAKES 455X100', 'ICC1035', 'IC1035', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1033', '2017-10-24', 36, 0.00, 0.00, 1),
(37, 'IWD1008', 'WAV', 'Project', 'SPYDER PROJECT', 'PRO1001', 'SPY1001', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1034', '2017-10-24', 95, 3737.00, 355015.00, 1),
(38, 'IWD1009', 'WAV', 'OXBO MID BACK', 'OXBO MID BACK', 'ICC1002', 'IC1002', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1035', '2017-10-24', 25, 4798.00, 119950.00, 1),
(39, 'IWD1010', 'WAV', 'Pallet Stopper 600', 'PALLET STOPPER 6000MM', 'ICC1038', 'IC1038', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1036', '2017-10-24', 17, 0.00, 0.00, 1),
(40, 'IWD1011', 'WAV', 'False Flooring', 'FALSE FLOORING', 'ICC1039', 'IC1039', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1037', '2017-10-24', 434, 0.00, 0.00, 1),
(41, 'IWD1012', 'WAV', 'Visitor Chair from', 'VISITOR CHAIR FROM GCPL', 'ICC1040', 'IC1040', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1038', '2017-10-24', 5, 0.00, 0.00, 1),
(42, 'IWD1013', 'WAV', 'Angle 40x40x7L', 'ANGLE 40X40X7L', 'ICC1041', 'IC1041', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1039', '2017-10-24', 24, 0.00, 0.00, 1),
(43, 'IWD1014', 'WAV', 'MF Panel 905x371', 'MF PANEL 905X371', 'ICC1042', 'IC1042', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1040', '2017-10-24', 30, 0.00, 0.00, 1),
(44, 'IWD1015', 'WAV', 'Base Plate 180x110', 'BASE PLATE 180X110', 'ICC1043', 'IC1043', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1041', '2017-10-24', 12, 0.00, 0.00, 1),
(45, 'IWD1016', 'WAV', 'Beam 1500x100', 'BEAM 1500X100', 'ICC1044', 'IC1044', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1042', '2017-10-24', 5, 0.00, 0.00, 1),
(46, 'IWD1017', 'TAD', 'Botless Panel 1300', 'BOTLESS PANEL 1300 X 400', 'ICC1045', 'IC1045', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1043', '2017-10-24', 5, 0.00, 0.00, 1),
(47, 'IWD1018', 'TAD', 'End Plain Cladding', 'END PLAIN CLADDING', 'ICC1046', 'IC1046', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1044', '2017-10-24', 6, 0.00, 0.00, 1),
(48, 'IWD1019', 'TAD', 'Row Guard 800 x 40', 'ROW GUARD 800 X 400', 'ICC1047', 'IC1047', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1045', '2017-10-24', 1, 0.00, 0.00, 1),
(49, 'IWD1020', 'TAD', 'Column Guard', 'COLUMN GUARD', 'ICC1048', 'IC1048', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1046', '2017-10-24', 1, 0.00, 0.00, 1),
(50, 'IWD1021', 'TAD', 'Fami Storage', 'FAMI STORAGE', 'ICC1049', 'IC1049', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1047', '2017-10-24', 1, 0.00, 0.00, 1),
(51, 'IWD1022', 'TAD', 'Granite', 'GRANITE', 'ICC1050', 'IC1050', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1048', '2017-10-24', 1, 0.00, 0.00, 1),
(52, 'IWD1023', 'TAD', '6 Door PLU Main', '6 DOOR PLU MAIN', 'ICC1051', 'IC1051', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1049', '2017-10-24', 1, 0.00, 0.00, 1),
(53, 'IWD1024', 'TAD', '6 Door Addon', '6 DOOR ADDON', 'ICC1052', 'IC1052', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1050', '2017-10-24', 1, 0.00, 0.00, 1),
(54, 'IWD1025', 'TAD', 'Spyder Project Cha', 'SPYDER PROJECT CHAIR', 'ICC1053', 'IC1053', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1051', '2017-10-24', 5, 0.00, 0.00, 1),
(55, 'IWD1026', 'TAD', 'STOREWELL', 'STOREWELL', 'ICC1019', 'IC1019', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1052', '2017-10-24', 2, 17488.00, 34976.00, 1),
(56, 'IWD1027', 'TAD', 'Long Span Upright ', 'LONG SPAN UPRIGHT 2500', 'ICC1056', 'IC1056', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1053', '2017-10-24', 22, 0.00, 0.00, 1),
(57, 'IWD1028', 'TAD', 'Long Span Beam 160', 'LONG SPAN BEAM 1600', 'ICC1057', 'IC1057', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1054', '2017-10-24', 30, 0.00, 0.00, 1),
(58, 'IWD1029', 'TAD', 'Top Panel 938x43x4', 'TOP PANEL 938X43X4', 'ICC1058', 'IC1058', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1055', '2017-10-24', 1, 0.00, 0.00, 1),
(59, 'IWD1030', 'TAD', 'Tie bracket 562mm', 'TIE BRACKET 562MM', 'ICC1059', 'IC1059', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1056', '2017-10-24', 15, 0.00, 0.00, 1),
(60, 'IWD1031', 'TAD', 'Bracing 760mm', 'BRACING 760MM', 'ICC1060', 'IC1060', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1057', '2017-10-24', 12, 0.00, 0.00, 1),
(61, 'IWD1032', 'TAD', 'Bracing 524mm', 'BRACING 524MM', 'ICC1061', 'IC1061', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1058', '2017-10-24', 12, 0.00, 0.00, 1),
(62, 'IWD1033', 'TAD', 'Long Span Panel 60', 'LONG SPAN PANEL 600 X 200', 'ICC1062', 'IC1062', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1059', '2017-10-24', 55, 0.00, 0.00, 1),
(63, 'IWD1034', 'TAD', 'Long Span Panel 90', 'LONG SPAN PANEL 900 X 200', 'ICC1063', 'IC1063', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1060', '2017-10-24', 6, 0.00, 0.00, 1),
(64, 'IWD1035', 'TAD', 'Bracing 1100mm', 'BRACING 1100MM', 'ICC1064', 'IC1064', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1061', '2017-10-24', 13, 0.00, 0.00, 1),
(65, 'IWD1036', 'TAD', 'Base Plate 90mm', 'BASE PLATE 90MM', 'ICC1065', 'IC1065', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1062', '2017-10-24', 20, 0.00, 0.00, 1),
(66, 'IWD1037', 'TAD', 'Long Span Base Pla', 'LONG SPAN BASE PLATE', 'ICC1066', 'IC1066', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1063', '2017-10-24', 1, 0.00, 0.00, 1),
(67, 'IWD1038', 'TAD', 'Tester', 'TESTER', 'ICC1067', 'IC1045', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1064', '2017-10-25', 1, 0.00, 0.00, 1),
(68, 'IWD1039', 'TAD', 'Drilling Machine', 'DRILLING MACHINE', 'ICC1068', 'IC1046', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1065', '2017-10-25', 1, 0.00, 0.00, 1),
(69, 'IWD1040', 'TAD', 'Granite Cutting Ma', 'GRANITE CUTTING MACHINE', 'ICC1069', 'IC1047', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1066', '2017-10-25', 1, 0.00, 0.00, 1),
(70, 'IWD1041', 'TAD', 'Spray Gun', 'SPRAY GUN', 'ICC1070', 'IC1048', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1067', '2017-10-25', 1, 0.00, 0.00, 1),
(71, 'IWD1042', 'TAD', 'Saw', 'SAW', 'ICC1071', 'IC1049', 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'INV1068', '2017-10-25', 1, 0.00, 0.00, 1),
(72, 'IWD1043', 'TAD', 'Screw Driver', 'SCREW DRIVER', 'ICC1072', 'IC1050', '', '', 'INV1069', '2017-10-25', 1, 0.00, 0.00, 1),
(73, 'IWD1044', 'TAD', 'Cutting Player', 'CUTTING PLAYER', 'ICC1073', 'IC1051', '', '', 'INV1070', '2017-10-25', 1, 0.00, 0.00, 1),
(74, 'IWD1045', 'TAD', 'Adjustable Spanner', 'ADJUSTABLE SPANNER', 'ICC1074', 'IC1052', '', '', 'INV1071', '2017-10-25', 1, 0.00, 0.00, 1),
(75, 'IWD1046', 'TAD', 'Hammer', 'HAMMER', 'ICC1075', 'IC1053', '', '', 'INV1072', '2017-10-25', 2, 0.00, 0.00, 1),
(76, 'IWD1047', 'TAD', 'Reveet Machine', 'REVEET MACHINE', 'ICC1076', 'IC1054', '', '', 'INV1073', '2017-10-25', 1, 0.00, 0.00, 1),
(77, 'IWD1048', 'TAD', 'Drill Bit', 'DRILL BIT', 'ICC1077', 'IC1055', '', '', 'INV1074', '2017-10-25', 4, 0.00, 0.00, 1),
(78, 'IWD1049', 'TAD', 'Ring Type Spanner', 'RING TYPE SPANNER', 'ICC1078', 'IC1056', '', '', 'INV1075', '2017-10-25', 5, 0.00, 0.00, 1),
(79, 'IWD1050', 'TAD', 'Spanner', 'SPANNER', 'ICC1079', 'IC1057', '', '', 'INV1076', '2017-10-25', 4, 0.00, 0.00, 1),
(80, 'IWD1051', 'TAD', 'Skill Drilling Mac', 'SKILL DRILLING MACHINE', 'ICC1080', 'IC1058', '', '', 'INV1077', '2017-10-25', 1, 0.00, 0.00, 1),
(81, 'IWD1052', 'TAD', 'TDU', 'TDU', 'ICC1013', 'IC1013', '', '', 'INV1078', '2017-10-27', 1, 15671.00, 15671.00, 1),
(82, 'IWD1053', 'PAT', 'Chairs', 'TASK CHAIR -  BQ  W/O ARM', 'CAT102', 'FU4103XXV01SXXX', '', '', 'WOA003351/10/0', '2017-10-26', 7, 3734.00, 26138.00, 1),
(85, 'IWD1055', 'PAT', 'STORAGE', 'VSDU', '56101530SD00089', '56101530SD00089', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'WOA003733/10/0', '2017-10-26', 5, 17949.00, 89745.00, 1),
(86, 'IWD1056', 'PAT', 'STORE WELL', 'GLASS DOOR STOREWELL', '30161806SD00015', '30161806SD00015', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'WOA003038/30/0', '2017-10-21', 2, 21486.00, 42972.00, 1),
(88, 'IWD1057', 'PAT', 'RACKING', 'SPR RACK', '01', '01', '', '', 'G1I/11001621', '2017-10-20', 270, 754207.84, 9999999.99, 1),
(89, 'IWD1058', 'PAT', 'STOREWELL', 'STOREWELL', 'ICC1019', 'IC1019', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', '7AI/12010553', '2017-11-08', 2, 17488.00, 34976.00, 1),
(90, 'IWD1059', 'PAT', 'TABLE', 'GLOW MODI COFFEE TABLE SI', '56121403', '56121403SD00028', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', '7AI/12010552', '2017-11-08', 1, 4815.66, 4815.66, 1),
(91, 'IWD1060', 'PAT', 'TABLE', 'ACURA COFFEE TABLE WENGUE', '56121403', '56121403SD00005', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', '7AI/12010552', '2017-11-08', 1, 6402.17, 6402.17, 1),
(92, 'IWD1060', 'PAT', 'OPTZ RAIL', 'OPTIMIZER RAIL', '24102098', '24102098SD00544', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', '7AI/12010552', '2017-11-08', 1, 10372.08, 10372.08, 1),
(93, 'IWD1061', 'PAT', 'Project', 'SPYDER PROJECT', 'PRO1001', 'SPY1001', '', '', '11IN0333', '2017-11-10', 7, 3737.00, 26159.00, 1),
(94, 'IWD1062', 'PAT', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'W7I/11001013', '2017-10-31', 12, 10595.00, 0.00, 1),
(96, 'IWD1062', 'PAT', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'WOA002095/10/3', '2017-10-31', 5, 10595.00, 0.00, 1),
(97, 'IWD1062', 'PAT', 'TABLE', 'FOLDABLE TABLE', 'WOA002095', 'WOA002095', 'VR1017', 'GODREJ & BOYCE MFG CO LTD', 'W7I/11001013', '2017-10-31', 5, 10595.00, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_supplier_details`
--

CREATE TABLE IF NOT EXISTS `arka_supplier_details` (
  `supplier_name` varchar(40) NOT NULL,
  `supplier_code` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arka_supplier_details`
--

INSERT INTO `arka_supplier_details` (`supplier_name`, `supplier_code`) VALUES
('test', 123),
('test2', 344),
('test2', 344),
('test2', 344),
('test2', 344);

-- --------------------------------------------------------

--
-- Table structure for table `arka_supplier_reg_master`
--

CREATE TABLE IF NOT EXISTS `arka_supplier_reg_master` (
  `supplier_code` varchar(15) NOT NULL,
  `sl_no` int(4) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(100) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `record_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `arka_supplier_reg_master`
--

INSERT INTO `arka_supplier_reg_master` (`supplier_code`, `sl_no`, `supplier_name`, `gst_no`, `address1`, `address2`, `city`, `state`, `pincode`, `pan_no`, `contact_person`, `designation`, `mobile`, `phone`, `email`, `created_date`, `created_time`, `created_by`, `record_status`) VALUES
('123', 1, 'test', 'qw', 'q', 'q', '2', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', 1),
('344', 2, 'test2', '322', '122', '112', '12', '', '22', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', 1),
('SC1001', 3, '', 'GST1001', 'Guindy', 'Guindy, Chennai', 'Chennai', 'Tamilnadu', '600032', 'PN1001', 'siva', 'Test', '9884422461', '04449592949', 'raja@yahoo.in', '2017-09-07', '01:26:09', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_terms_master`
--

CREATE TABLE IF NOT EXISTS `arka_terms_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `terms_1` varchar(255) NOT NULL,
  `terms_2` varchar(255) NOT NULL,
  `terms_3` varchar(255) NOT NULL,
  `terms_4` varchar(255) NOT NULL,
  `terms_6` varchar(255) NOT NULL,
  `terms_7` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `arka_terms_master`
--

INSERT INTO `arka_terms_master` (`sl_no`, `terms_1`, `terms_2`, `terms_3`, `terms_4`, `terms_6`, `terms_7`, `timestamp`, `remarks`, `status`, `type`) VALUES
(1, 'Payment :', 'Advance, Balance Against Delivery', 'Freight : Extra @ actual', 'Delivery :', 'Validity of Quote :', 'Days from the date of quote', '2016-04-06 15:14:02', '', 1, 'sales'),
(2, 'Payment :', 'Advance, Balance Against Delivery', '', 'Delivery :', 'Validity of Quote :', 'Days from the date of quote', '2016-04-06 15:17:41', '', 1, 'service'),
(3, 'Payment :', 'Advance, Balance Against Delivery', '', 'Delivery :', 'Validity of Quote :', 'Days from the date of quote', '2016-04-06 15:17:41', '', 1, 'project');

-- --------------------------------------------------------

--
-- Table structure for table `arka_user_bank_details`
--

CREATE TABLE IF NOT EXISTS `arka_user_bank_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `pancard_no` varchar(6) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `arka_user_bank_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `arka_user_group_mapping`
--

CREATE TABLE IF NOT EXISTS `arka_user_group_mapping` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(10) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3957 ;

--
-- Dumping data for table `arka_user_group_mapping`
--

INSERT INTO `arka_user_group_mapping` (`sl_no`, `group_id`, `group_name`, `role_name`, `created_date`, `created_time`, `time_stamp_value`, `status`) VALUES
(2416, 'GR1015', 'Test', 'View Sales', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2415, 'GR1015', 'Test', 'View Quote', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2414, 'GR1015', 'Test', 'View Project', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2411, 'GR1015', 'Test', 'View Material', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(3878, 'GR1005', 'Help-Desk', 'Customer Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3877, 'GR1005', 'Help-Desk', 'Add Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3876, 'GR1005', 'Help-Desk', 'Add Service', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3875, 'GR1005', 'Help-Desk', 'Add Sales', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3874, 'GR1005', 'Help-Desk', 'Add Quote', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3873, 'GR1005', 'Help-Desk', 'Add Project', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3729, 'GR1002', 'Admin', 'View Stock', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3730, 'GR1002', 'Admin', 'View Vendor', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3872, 'GR1005', 'Help-Desk', 'Add Product', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3728, 'GR1002', 'Admin', 'View Service', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3726, 'GR1002', 'Admin', 'View Quote', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(143, 'GR1003', 'Customer-Owner', 'None', '0000-00-00', '00:00:00', '2017-09-15 12:37:51', 0),
(489, 'GR1004', 'Customer-User', 'List Customer', '2016-05-09', '02:19:12', '2017-09-15 12:37:54', 0),
(3871, 'GR1005', 'Help-Desk', 'Add Po', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3727, 'GR1002', 'Admin', 'View Sales', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(418, 'GR1009', 'Project-Support', 'View Service', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(394, 'GR1008', 'Service-Support', 'View Service', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(3868, 'GR1005', 'Help-Desk', 'Add Employee', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3869, 'GR1005', 'Help-Desk', 'Add Enquiry', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3870, 'GR1005', 'Help-Desk', 'Add Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3867, 'GR1006', 'Account-Department', 'Store Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3863, 'GR1006', 'Account-Department', 'View Quote', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3864, 'GR1006', 'Account-Department', 'View Sales', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3865, 'GR1006', 'Account-Department', 'View Service', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3866, 'GR1006', 'Account-Department', 'View Vendor', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3862, 'GR1006', 'Account-Department', 'View Project', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3861, 'GR1006', 'Account-Department', 'View Product', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3858, 'GR1006', 'Account-Department', 'View Enquiry', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3859, 'GR1006', 'Account-Department', 'View Material', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3860, 'GR1006', 'Account-Department', 'View Po', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3857, 'GR1006', 'Account-Department', 'View Employee', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3855, 'GR1006', 'Account-Department', 'Vendor Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3856, 'GR1006', 'Account-Department', 'View Customer', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3854, 'GR1006', 'Account-Department', 'Service Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3852, 'GR1006', 'Account-Department', 'Quote Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3853, 'GR1006', 'Account-Department', 'Sales Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3850, 'GR1006', 'Account-Department', 'Product Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3851, 'GR1006', 'Account-Department', 'Project Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3849, 'GR1006', 'Account-Department', 'Po Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3846, 'GR1006', 'Account-Department', 'List Service', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3848, 'GR1006', 'Account-Department', 'Material Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3847, 'GR1006', 'Account-Department', 'List Vendor', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3845, 'GR1006', 'Account-Department', 'List Sales', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3844, 'GR1006', 'Account-Department', 'List Quote', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3843, 'GR1006', 'Account-Department', 'List Project', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3840, 'GR1006', 'Account-Department', 'List Outward', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3841, 'GR1006', 'Account-Department', 'List Po', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3842, 'GR1006', 'Account-Department', 'List Product', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3837, 'GR1006', 'Account-Department', 'List Enquiry', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3838, 'GR1006', 'Account-Department', 'List Inward', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3839, 'GR1006', 'Account-Department', 'List Material', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3836, 'GR1006', 'Account-Department', 'List Employee', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3835, 'GR1006', 'Account-Department', 'List Customer', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3833, 'GR1006', 'Account-Department', 'Employee Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3834, 'GR1006', 'Account-Department', 'Enquiry Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3832, 'GR1006', 'Account-Department', 'Edit Vendor', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3831, 'GR1006', 'Account-Department', 'Edit Service', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3830, 'GR1006', 'Account-Department', 'Edit Sales', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3829, 'GR1006', 'Account-Department', 'Edit Quote', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3828, 'GR1006', 'Account-Department', 'Edit Project', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3827, 'GR1006', 'Account-Department', 'Edit Product', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3824, 'GR1006', 'Account-Department', 'Edit Enquiry', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3825, 'GR1006', 'Account-Department', 'Edit Material', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3826, 'GR1006', 'Account-Department', 'Edit Po', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3823, 'GR1006', 'Account-Department', 'Edit Employee', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3822, 'GR1006', 'Account-Department', 'Edit Customer', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3821, 'GR1006', 'Account-Department', 'Delete Vendor', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3820, 'GR1006', 'Account-Department', 'Delete Service', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3819, 'GR1006', 'Account-Department', 'Delete Sales', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3818, 'GR1006', 'Account-Department', 'Delete Quote', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3817, 'GR1006', 'Account-Department', 'Delete Project', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3816, 'GR1006', 'Account-Department', 'Delete Product', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3815, 'GR1006', 'Account-Department', 'Delete Po', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3814, 'GR1006', 'Account-Department', 'Delete Material', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3813, 'GR1006', 'Account-Department', 'Delete Enquiry', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(285, 'GR1007', 'Sales-Support', 'Add Enquiry', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(286, 'GR1007', 'Sales-Support', 'Edit Enquiry', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(287, 'GR1007', 'Sales-Support', 'View Enquiry', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(288, 'GR1007', 'Sales-Support', 'Delete Enquiry', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(289, 'GR1007', 'Sales-Support', 'List Enquiry', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(290, 'GR1007', 'Sales-Support', 'Enquiry Management', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(291, 'GR1007', 'Sales-Support', 'Add Sales', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(292, 'GR1007', 'Sales-Support', 'Edit Sales', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(293, 'GR1007', 'Sales-Support', 'View Sales', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(294, 'GR1007', 'Sales-Support', 'Delete Sales', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(295, 'GR1007', 'Sales-Support', 'List Sales', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(296, 'GR1007', 'Sales-Support', 'Sales Management', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(297, 'GR1007', 'Sales-Support', 'Add Service', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(298, 'GR1007', 'Sales-Support', 'Edit Service', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(299, 'GR1007', 'Sales-Support', 'View Service', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(300, 'GR1007', 'Sales-Support', 'Delete Service', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(301, 'GR1007', 'Sales-Support', 'List Service', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(302, 'GR1007', 'Sales-Support', 'Service Management', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(303, 'GR1007', 'Sales-Support', 'Add Project', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(304, 'GR1007', 'Sales-Support', 'Edit Project', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(305, 'GR1007', 'Sales-Support', 'View Project', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(306, 'GR1007', 'Sales-Support', 'Delete Project', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(307, 'GR1007', 'Sales-Support', 'List Project', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(308, 'GR1007', 'Sales-Support', 'Project Management', '2016-04-20', '12:44:13', '2016-04-20 00:15:04', 1),
(393, 'GR1008', 'Service-Support', 'View Sales', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(392, 'GR1008', 'Service-Support', 'View Project', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(391, 'GR1008', 'Service-Support', 'View Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(390, 'GR1008', 'Service-Support', 'Service Management', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(389, 'GR1008', 'Service-Support', 'Sales Management', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(388, 'GR1008', 'Service-Support', 'Project Management', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(387, 'GR1008', 'Service-Support', 'List Service', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(386, 'GR1008', 'Service-Support', 'List Sales', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(385, 'GR1008', 'Service-Support', 'List Project', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(384, 'GR1008', 'Service-Support', 'List Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(383, 'GR1008', 'Service-Support', 'Enquiry Management', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(382, 'GR1008', 'Service-Support', 'Edit Service', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(381, 'GR1008', 'Service-Support', 'Edit Sales', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(380, 'GR1008', 'Service-Support', 'Edit Project', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(379, 'GR1008', 'Service-Support', 'Edit Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(378, 'GR1008', 'Service-Support', 'Delete Service', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(377, 'GR1008', 'Service-Support', 'Delete Sales', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(376, 'GR1008', 'Service-Support', 'Delete Project', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(375, 'GR1008', 'Service-Support', 'Delete Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(374, 'GR1008', 'Service-Support', 'Add Service', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(373, 'GR1008', 'Service-Support', 'Add Sales', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(372, 'GR1008', 'Service-Support', 'Add Project', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(371, 'GR1008', 'Service-Support', 'Add Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:34:33', 1),
(417, 'GR1009', 'Project-Support', 'View Sales', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(416, 'GR1009', 'Project-Support', 'View Project', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(415, 'GR1009', 'Project-Support', 'View Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(414, 'GR1009', 'Project-Support', 'Service Management', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(413, 'GR1009', 'Project-Support', 'Sales Management', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(412, 'GR1009', 'Project-Support', 'Project Management', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(411, 'GR1009', 'Project-Support', 'List Service', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(410, 'GR1009', 'Project-Support', 'List Sales', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(409, 'GR1009', 'Project-Support', 'List Project', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(408, 'GR1009', 'Project-Support', 'List Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(407, 'GR1009', 'Project-Support', 'Enquiry Management', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(406, 'GR1009', 'Project-Support', 'Edit Service', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(405, 'GR1009', 'Project-Support', 'Edit Sales', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(404, 'GR1009', 'Project-Support', 'Edit Project', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(403, 'GR1009', 'Project-Support', 'Edit Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(402, 'GR1009', 'Project-Support', 'Delete Service', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(401, 'GR1009', 'Project-Support', 'Delete Sales', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(400, 'GR1009', 'Project-Support', 'Delete Project', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(399, 'GR1009', 'Project-Support', 'Delete Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(398, 'GR1009', 'Project-Support', 'Add Service', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(397, 'GR1009', 'Project-Support', 'Add Sales', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(396, 'GR1009', 'Project-Support', 'Add Project', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(395, 'GR1009', 'Project-Support', 'Add Enquiry', '0000-00-00', '00:00:00', '2016-05-09 01:36:37', 1),
(368, 'GR1010', 'Marketing', 'View Enquiry', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(367, 'GR1010', 'Marketing', 'List Enquiry', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(366, 'GR1010', 'Marketing', 'Enquiry Management', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(365, 'GR1010', 'Marketing', 'Edit Enquiry', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(364, 'GR1010', 'Marketing', 'Delete Enquiry', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(363, 'GR1010', 'Marketing', 'Add Enquiry', '0000-00-00', '00:00:00', '2017-09-15 12:37:40', 0),
(635, 'GR1014', 'siva', 'Add Customer', '2016-07-06', '07:04:04', '2016-07-06 06:34:15', 1),
(2412, 'GR1015', 'Test', 'View Po', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2413, 'GR1015', 'Test', 'View Product', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(636, 'GR1014', 'siva', 'Edit Customer', '2016-07-06', '07:04:04', '2016-07-06 06:34:15', 1),
(2409, 'GR1015', 'Test', 'View Employee', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(3725, 'GR1002', 'Admin', 'View Project', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3723, 'GR1002', 'Admin', 'View Po', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3724, 'GR1002', 'Admin', 'View Product', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3722, 'GR1002', 'Admin', 'View Outward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3721, 'GR1002', 'Admin', 'View Material', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3719, 'GR1002', 'Admin', 'View Enquiry', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3720, 'GR1002', 'Admin', 'View Inward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3718, 'GR1002', 'Admin', 'View Employee', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3717, 'GR1002', 'Admin', 'View Customer', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3716, 'GR1002', 'Admin', 'Vendor Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3715, 'GR1002', 'Admin', 'Store Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3712, 'GR1002', 'Admin', 'Sales Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3713, 'GR1002', 'Admin', 'Service Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3714, 'GR1002', 'Admin', 'Service Quote Delete', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3710, 'GR1002', 'Admin', 'Quote Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3711, 'GR1002', 'Admin', 'Sale Quote Delete', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3709, 'GR1002', 'Admin', 'Project Quote Delete', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3708, 'GR1002', 'Admin', 'Project Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3707, 'GR1002', 'Admin', 'Product Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3706, 'GR1002', 'Admin', 'Po Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(2636, 'GR1013', 'Developer', 'Sales Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2635, 'GR1013', 'Developer', 'Quote Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2634, 'GR1013', 'Developer', 'Project Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2633, 'GR1013', 'Developer', 'Product Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2632, 'GR1013', 'Developer', 'Po Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2631, 'GR1013', 'Developer', 'Material Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2630, 'GR1013', 'Developer', 'List Vendor', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2629, 'GR1013', 'Developer', 'List Service', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2628, 'GR1013', 'Developer', 'List Sales', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2627, 'GR1013', 'Developer', 'List Quote', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2626, 'GR1013', 'Developer', 'List Project', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2625, 'GR1013', 'Developer', 'List Product', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2624, 'GR1013', 'Developer', 'List Po', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2623, 'GR1013', 'Developer', 'List Material', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2622, 'GR1013', 'Developer', 'List Enquiry', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2621, 'GR1013', 'Developer', 'List Employee', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2620, 'GR1013', 'Developer', 'List Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2619, 'GR1013', 'Developer', 'Enquiry Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2618, 'GR1013', 'Developer', 'Employee Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2617, 'GR1013', 'Developer', 'Edit Vendor', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2616, 'GR1013', 'Developer', 'Edit Service', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2615, 'GR1013', 'Developer', 'Edit Sales', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2614, 'GR1013', 'Developer', 'Edit Quote', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2613, 'GR1013', 'Developer', 'Edit Project', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2612, 'GR1013', 'Developer', 'Edit Product', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2611, 'GR1013', 'Developer', 'Edit Po', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2610, 'GR1013', 'Developer', 'Edit Material', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2609, 'GR1013', 'Developer', 'Edit Enquiry', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2608, 'GR1013', 'Developer', 'Edit Employee', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2607, 'GR1013', 'Developer', 'Delete Vendor', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2606, 'GR1013', 'Developer', 'Delete Service', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2605, 'GR1013', 'Developer', 'Delete Sales', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2603, 'GR1013', 'Developer', 'Delete Project', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2604, 'GR1013', 'Developer', 'Delete Quote', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2602, 'GR1013', 'Developer', 'Delete Product', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2601, 'GR1013', 'Developer', 'Delete Po', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2600, 'GR1013', 'Developer', 'Delete Material', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2599, 'GR1013', 'Developer', 'Delete Enquiry', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2598, 'GR1013', 'Developer', 'Delete Employee', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2597, 'GR1013', 'Developer', 'Delete Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2596, 'GR1013', 'Developer', 'Customer Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2595, 'GR1013', 'Developer', 'Add Vendor', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2594, 'GR1013', 'Developer', 'Add Service', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2593, 'GR1013', 'Developer', 'Add Sales', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(1052, 'GR1014', 'Project Coordinator', 'Add Customer', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1053, 'GR1014', 'Project Coordinator', 'Edit Customer', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1054, 'GR1014', 'Project Coordinator', 'View Customer', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1055, 'GR1014', 'Project Coordinator', 'Sale Quote Delete', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1056, 'GR1014', 'Project Coordinator', 'Delete Customer', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1057, 'GR1014', 'Project Coordinator', 'List Customer', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1058, 'GR1014', 'Project Coordinator', 'Customer Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1059, 'GR1014', 'Project Coordinator', 'Add Enquiry', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1060, 'GR1014', 'Project Coordinator', 'Edit Enquiry', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1061, 'GR1014', 'Project Coordinator', 'View Enquiry', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1062, 'GR1014', 'Project Coordinator', 'Delete Enquiry', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1063, 'GR1014', 'Project Coordinator', 'List Enquiry', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1064, 'GR1014', 'Project Coordinator', 'Enquiry Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1065, 'GR1014', 'Project Coordinator', 'Add Sales', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1066, 'GR1014', 'Project Coordinator', 'Edit Sales', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1067, 'GR1014', 'Project Coordinator', 'View Sales', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1068, 'GR1014', 'Project Coordinator', 'Delete Sales', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1069, 'GR1014', 'Project Coordinator', 'List Sales', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1070, 'GR1014', 'Project Coordinator', 'Sales Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1071, 'GR1014', 'Project Coordinator', 'Add Service', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1072, 'GR1014', 'Project Coordinator', 'Edit Service', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1073, 'GR1014', 'Project Coordinator', 'View Service', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1074, 'GR1014', 'Project Coordinator', 'Delete Service', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1075, 'GR1014', 'Project Coordinator', 'List Service', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1076, 'GR1014', 'Project Coordinator', 'Service Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1077, 'GR1014', 'Project Coordinator', 'Add Project', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1078, 'GR1014', 'Project Coordinator', 'Edit Project', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1079, 'GR1014', 'Project Coordinator', 'View Project', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1080, 'GR1014', 'Project Coordinator', 'Delete Project', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1081, 'GR1014', 'Project Coordinator', 'List Project', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1082, 'GR1014', 'Project Coordinator', 'Project Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1083, 'GR1014', 'Project Coordinator', 'Add Quote', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1084, 'GR1014', 'Project Coordinator', 'Edit Quote', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1085, 'GR1014', 'Project Coordinator', 'View Quote', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1086, 'GR1014', 'Project Coordinator', 'Delete Quote', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1087, 'GR1014', 'Project Coordinator', 'List Quote', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1088, 'GR1014', 'Project Coordinator', 'Quote Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1089, 'GR1014', 'Project Coordinator', 'Add Po', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1090, 'GR1014', 'Project Coordinator', 'Edit Po', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1091, 'GR1014', 'Project Coordinator', 'View Po', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1092, 'GR1014', 'Project Coordinator', 'Delete Po', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1093, 'GR1014', 'Project Coordinator', 'List Po', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1094, 'GR1014', 'Project Coordinator', 'Po Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1095, 'GR1014', 'Project Coordinator', 'Add Vendor', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1096, 'GR1014', 'Project Coordinator', 'Edit Vendor', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1097, 'GR1014', 'Project Coordinator', 'View Vendor', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1098, 'GR1014', 'Project Coordinator', 'Delete Vendor', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1099, 'GR1014', 'Project Coordinator', 'List Vendor', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1100, 'GR1014', 'Project Coordinator', 'Vendor Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1101, 'GR1014', 'Project Coordinator', 'Add Material', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1102, 'GR1014', 'Project Coordinator', 'Edit Material', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1103, 'GR1014', 'Project Coordinator', 'View Material', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1104, 'GR1014', 'Project Coordinator', 'Delete Material', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1105, 'GR1014', 'Project Coordinator', 'List Material', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1106, 'GR1014', 'Project Coordinator', 'Material Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1107, 'GR1014', 'Project Coordinator', 'Add Product', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1108, 'GR1014', 'Project Coordinator', 'Edit Product', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1109, 'GR1014', 'Project Coordinator', 'View Product', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1110, 'GR1014', 'Project Coordinator', 'Delete Product', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1111, 'GR1014', 'Project Coordinator', 'List Product', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1112, 'GR1014', 'Project Coordinator', 'Product Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1113, 'GR1014', 'Project Coordinator', 'Add Employee', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1114, 'GR1014', 'Project Coordinator', 'Edit Employee', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1115, 'GR1014', 'Project Coordinator', 'View Employee', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1116, 'GR1014', 'Project Coordinator', 'Delete Employee', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1117, 'GR1014', 'Project Coordinator', 'List Employee', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1118, 'GR1014', 'Project Coordinator', 'Employee Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1119, 'GR1014', 'Project Coordinator', 'User Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1120, 'GR1014', 'Project Coordinator', 'User Role Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1121, 'GR1014', 'Project Coordinator', 'User Group Management', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1122, 'GR1014', 'Project Coordinator', 'Service Quote Delete', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(1123, 'GR1014', 'Project Coordinator', 'Project Quote Delete', '2016-09-29', '05:45:53', '2016-09-29 05:17:05', 1),
(3705, 'GR1002', 'Admin', 'Material Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(2592, 'GR1013', 'Developer', 'Add Quote', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2591, 'GR1013', 'Developer', 'Add Project', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2590, 'GR1013', 'Developer', 'Add Product', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2589, 'GR1013', 'Developer', 'Add Po', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2588, 'GR1013', 'Developer', 'Add Material', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2587, 'GR1013', 'Developer', 'Add Enquiry', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2586, 'GR1013', 'Developer', 'Add Employee', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2410, 'GR1015', 'Test', 'View Enquiry', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2408, 'GR1015', 'Test', 'View Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2406, 'GR1015', 'Test', 'View Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2407, 'GR1015', 'Test', 'View Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2405, 'GR1015', 'Test', 'Vendor Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2404, 'GR1015', 'Test', 'User Role Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2403, 'GR1015', 'Test', 'User Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2401, 'GR1015', 'Test', 'User Group Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2402, 'GR1015', 'Test', 'User Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2400, 'GR1015', 'Test', 'User Group Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2399, 'GR1015', 'Test', 'siva', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2397, 'GR1015', 'Test', 'Service Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2398, 'GR1015', 'Test', 'Service Quote Delete', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2396, 'GR1015', 'Test', 'Sales Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2395, 'GR1015', 'Test', 'Sale Quote Delete', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2394, 'GR1015', 'Test', 'Quote Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2393, 'GR1015', 'Test', 'Project Quote Delete', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2392, 'GR1015', 'Test', 'Project Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2391, 'GR1015', 'Test', 'Product Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2390, 'GR1015', 'Test', 'Po Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2389, 'GR1015', 'Test', 'Material Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2387, 'GR1015', 'Test', 'List User', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2388, 'GR1015', 'Test', 'List Vendor', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2384, 'GR1015', 'Test', 'List Quote', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2385, 'GR1015', 'Test', 'List Sales', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2386, 'GR1015', 'Test', 'List Service', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2382, 'GR1015', 'Test', 'List Product', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2383, 'GR1015', 'Test', 'List Project', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2379, 'GR1015', 'Test', 'List Enquiry', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2380, 'GR1015', 'Test', 'List Material', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2381, 'GR1015', 'Test', 'List Po', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2376, 'GR1015', 'Test', 'Enquiry Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2377, 'GR1015', 'Test', 'List Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2378, 'GR1015', 'Test', 'List Employee', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2375, 'GR1015', 'Test', 'Employee Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2374, 'GR1015', 'Test', 'Edit Vendor', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2373, 'GR1015', 'Test', 'Edit User Group', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2372, 'GR1015', 'Test', 'Edit User', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2371, 'GR1015', 'Test', 'Edit Service', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2370, 'GR1015', 'Test', 'Edit Sales', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2369, 'GR1015', 'Test', 'Edit Quote', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2368, 'GR1015', 'Test', 'Edit Project', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2367, 'GR1015', 'Test', 'Edit Product', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2366, 'GR1015', 'Test', 'Edit Po', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2365, 'GR1015', 'Test', 'Edit Material', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2364, 'GR1015', 'Test', 'Edit Enquiry', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2363, 'GR1015', 'Test', 'Edit Employee', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2362, 'GR1015', 'Test', 'Edit Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2360, 'GR1015', 'Test', 'Delete User', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2361, 'GR1015', 'Test', 'Delete Vendor', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2359, 'GR1015', 'Test', 'Delete Service', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2358, 'GR1015', 'Test', 'Delete Sales', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2357, 'GR1015', 'Test', 'Delete Quote', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2356, 'GR1015', 'Test', 'Delete Project', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2355, 'GR1015', 'Test', 'Delete Product', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2354, 'GR1015', 'Test', 'Delete Po', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2353, 'GR1015', 'Test', 'Delete Material', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2352, 'GR1015', 'Test', 'Delete Enquiry', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2351, 'GR1015', 'Test', 'Delete Employee', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2350, 'GR1015', 'Test', 'Delete Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2349, 'GR1015', 'Test', 'Customer Management', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2347, 'GR1015', 'Test', 'Add Vendor', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2348, 'GR1015', 'Test', 'Create User Group', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2346, 'GR1015', 'Test', 'Add User', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2345, 'GR1015', 'Test', 'Add Service', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2344, 'GR1015', 'Test', 'Add Sales', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2343, 'GR1015', 'Test', 'Add Quote', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2342, 'GR1015', 'Test', 'Add Project', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2341, 'GR1015', 'Test', 'Add Product', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2340, 'GR1015', 'Test', 'Add Po', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2339, 'GR1015', 'Test', 'Add Material', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2338, 'GR1015', 'Test', 'Add Enquiry', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2337, 'GR1015', 'Test', 'Add Employee', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2336, 'GR1015', 'Test', 'Add Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2335, 'GR1015', 'Test', 'Add Customer', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2417, 'GR1015', 'Test', 'View Service', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2418, 'GR1015', 'Test', 'View User', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2419, 'GR1015', 'Test', 'View User Group', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(2420, 'GR1015', 'Test', 'View Vendor', '2016-10-04', '05:51:27', '2016-10-04 05:21:35', 1),
(3025, 'GR1001', 'MD', 'Service Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3024, 'GR1001', 'MD', 'Sales Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3023, 'GR1001', 'MD', 'Sale Quote Delete', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3022, 'GR1001', 'MD', 'Quote Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3021, 'GR1001', 'MD', 'Project Quote Delete', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3020, 'GR1001', 'MD', 'Project Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3019, 'GR1001', 'MD', 'Product Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3018, 'GR1001', 'MD', 'Po Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3017, 'GR1001', 'MD', 'Material Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3016, 'GR1001', 'MD', 'List Vendor', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3015, 'GR1001', 'MD', 'List Service', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3014, 'GR1001', 'MD', 'List Sales', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3013, 'GR1001', 'MD', 'List Quote', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3012, 'GR1001', 'MD', 'List Project', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3011, 'GR1001', 'MD', 'List Product', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3010, 'GR1001', 'MD', 'List Po', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3009, 'GR1001', 'MD', 'List Material', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3008, 'GR1001', 'MD', 'List Enquiry', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3007, 'GR1001', 'MD', 'List Employee', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3006, 'GR1001', 'MD', 'List Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3005, 'GR1001', 'MD', 'Enquiry Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3004, 'GR1001', 'MD', 'Employee Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3003, 'GR1001', 'MD', 'Edit Vendor', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3002, 'GR1001', 'MD', 'Edit Service', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3001, 'GR1001', 'MD', 'Edit Sales', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3000, 'GR1001', 'MD', 'Edit Quote', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2999, 'GR1001', 'MD', 'Edit Project', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2998, 'GR1001', 'MD', 'Edit Product', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2997, 'GR1001', 'MD', 'Edit Po', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2996, 'GR1001', 'MD', 'Edit Material', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2995, 'GR1001', 'MD', 'Edit Enquiry', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2994, 'GR1001', 'MD', 'Edit Employee', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2993, 'GR1001', 'MD', 'Edit Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2992, 'GR1001', 'MD', 'Delete Vendor', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2991, 'GR1001', 'MD', 'Delete Service', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2990, 'GR1001', 'MD', 'Delete Sales', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2989, 'GR1001', 'MD', 'Delete Quote', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2988, 'GR1001', 'MD', 'Delete Project', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2987, 'GR1001', 'MD', 'Delete Product', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2986, 'GR1001', 'MD', 'Delete Po', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2985, 'GR1001', 'MD', 'Delete Material', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2984, 'GR1001', 'MD', 'Delete Enquiry', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2983, 'GR1001', 'MD', 'Delete Employee', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3704, 'GR1002', 'Admin', 'Mail Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3703, 'GR1002', 'Admin', 'List Vendor', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3702, 'GR1002', 'Admin', 'List Stock', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3701, 'GR1002', 'Admin', 'List Service', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3700, 'GR1002', 'Admin', 'List Sales', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3699, 'GR1002', 'Admin', 'List Quote', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3698, 'GR1002', 'Admin', 'List Project', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3697, 'GR1002', 'Admin', 'List Product', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3696, 'GR1002', 'Admin', 'List Po', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3695, 'GR1002', 'Admin', 'List Outward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3692, 'GR1002', 'Admin', 'List Enquiry', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3693, 'GR1002', 'Admin', 'List Inward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3694, 'GR1002', 'Admin', 'List Material', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(2637, 'GR1013', 'Developer', 'Service Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2638, 'GR1013', 'Developer', 'User Group Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2639, 'GR1013', 'Developer', 'User Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2640, 'GR1013', 'Developer', 'User Role Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2641, 'GR1013', 'Developer', 'Vendor Management', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2642, 'GR1013', 'Developer', 'View Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2643, 'GR1013', 'Developer', 'View Employee', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2644, 'GR1013', 'Developer', 'View Enquiry', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2645, 'GR1013', 'Developer', 'View Material', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2646, 'GR1013', 'Developer', 'View Po', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2647, 'GR1013', 'Developer', 'View Product', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2648, 'GR1013', 'Developer', 'View Project', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2649, 'GR1013', 'Developer', 'View Quote', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2650, 'GR1013', 'Developer', 'View Sales', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2651, 'GR1013', 'Developer', 'View Service', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2652, 'GR1013', 'Developer', 'View Vendor', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2653, 'GR1013', 'Developer', 'Add Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2654, 'GR1013', 'Developer', 'Edit Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2655, 'GR1013', 'Developer', 'Sale Quote Delete', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2656, 'GR1013', 'Developer', 'Service Quote Delete', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2657, 'GR1013', 'Developer', 'Project Quote Delete', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2658, 'GR1013', 'Developer', 'View Customer', '2016-10-19', '12:03:11', '2017-09-15 12:37:46', 0),
(2982, 'GR1001', 'MD', 'Delete Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2981, 'GR1001', 'MD', 'Customer Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2980, 'GR1001', 'MD', 'Add Vendor', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2979, 'GR1001', 'MD', 'Add Service', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2978, 'GR1001', 'MD', 'Add Sales', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2977, 'GR1001', 'MD', 'Add Quote', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2976, 'GR1001', 'MD', 'Add Project', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2975, 'GR1001', 'MD', 'Add Product', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2974, 'GR1001', 'MD', 'Add Po', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2973, 'GR1001', 'MD', 'Add Material', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2972, 'GR1001', 'MD', 'Add Enquiry', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2971, 'GR1001', 'MD', 'Add Employee', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(2970, 'GR1001', 'MD', 'Add Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3691, 'GR1002', 'Admin', 'List Employee', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3690, 'GR1002', 'Admin', 'List Customer', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3689, 'GR1002', 'Admin', 'Inward Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3688, 'GR1002', 'Admin', 'Inward Details', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3687, 'GR1002', 'Admin', 'Enquiry Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3680, 'GR1002', 'Admin', 'Edit Product', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3681, 'GR1002', 'Admin', 'Edit Project', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3682, 'GR1002', 'Admin', 'Edit Quote', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3683, 'GR1002', 'Admin', 'Edit Sales', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3684, 'GR1002', 'Admin', 'Edit Service', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3685, 'GR1002', 'Admin', 'Edit Vendor', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3026, 'GR1001', 'MD', 'Service Quote Delete', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3027, 'GR1001', 'MD', 'User Group Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3028, 'GR1001', 'MD', 'User Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3029, 'GR1001', 'MD', 'User Role Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3030, 'GR1001', 'MD', 'Vendor Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3031, 'GR1001', 'MD', 'View Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3032, 'GR1001', 'MD', 'View Customer', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3033, 'GR1001', 'MD', 'View Employee', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3034, 'GR1001', 'MD', 'View Enquiry', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3035, 'GR1001', 'MD', 'View Material', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3036, 'GR1001', 'MD', 'View Po', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3037, 'GR1001', 'MD', 'View Product', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3038, 'GR1001', 'MD', 'View Project', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3039, 'GR1001', 'MD', 'View Quote', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3040, 'GR1001', 'MD', 'View Sales', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3041, 'GR1001', 'MD', 'View Service', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3042, 'GR1001', 'MD', 'View Vendor', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3043, 'GR1001', 'MD', 'Store Management', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3044, 'GR1001', 'MD', 'List Inward', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3045, 'GR1001', 'MD', 'Edit Inward', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1);
INSERT INTO `arka_user_group_mapping` (`sl_no`, `group_id`, `group_name`, `role_name`, `created_date`, `created_time`, `time_stamp_value`, `status`) VALUES
(3046, 'GR1001', 'MD', 'View Inward', '2017-09-06', '08:10:12', '2017-09-06 20:10:18', 1),
(3686, 'GR1002', 'Admin', 'Employee Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3679, 'GR1002', 'Admin', 'Edit Po', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3678, 'GR1002', 'Admin', 'Edit Outward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3677, 'GR1002', 'Admin', 'Edit Material', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3676, 'GR1002', 'Admin', 'Edit Inward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3675, 'GR1002', 'Admin', 'Edit Enquiry', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3674, 'GR1002', 'Admin', 'Edit Employee', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3673, 'GR1002', 'Admin', 'Edit Customer', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3672, 'GR1002', 'Admin', 'Delete Vendor', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3671, 'GR1002', 'Admin', 'Delete Service', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3669, 'GR1002', 'Admin', 'Delete Quote', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3670, 'GR1002', 'Admin', 'Delete Sales', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3668, 'GR1002', 'Admin', 'Delete Project', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3667, 'GR1002', 'Admin', 'Delete Product', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3666, 'GR1002', 'Admin', 'Delete Po', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3665, 'GR1002', 'Admin', 'Delete Material', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3664, 'GR1002', 'Admin', 'Delete Enquiry', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3663, 'GR1002', 'Admin', 'Delete Employee', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3662, 'GR1002', 'Admin', 'Delete Customer', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3660, 'GR1002', 'Admin', 'Add Vendor', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3661, 'GR1002', 'Admin', 'Customer Management', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3659, 'GR1002', 'Admin', 'Add Service', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3657, 'GR1002', 'Admin', 'Add Quote', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3658, 'GR1002', 'Admin', 'Add Sales', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3656, 'GR1002', 'Admin', 'Add Project', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3655, 'GR1002', 'Admin', 'Add Product', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3653, 'GR1002', 'Admin', 'Add Outward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3654, 'GR1002', 'Admin', 'Add Po', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3651, 'GR1002', 'Admin', 'Add Inward', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3652, 'GR1002', 'Admin', 'Add Material', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3650, 'GR1002', 'Admin', 'Add Enquiry', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3812, 'GR1006', 'Account-Department', 'Delete Employee', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3810, 'GR1006', 'Account-Department', 'Customer Management', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3811, 'GR1006', 'Account-Department', 'Delete Customer', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3809, 'GR1006', 'Account-Department', 'Add Vendor', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3808, 'GR1006', 'Account-Department', 'Add Service', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3807, 'GR1006', 'Account-Department', 'Add Sales', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3806, 'GR1006', 'Account-Department', 'Add Quote', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3804, 'GR1006', 'Account-Department', 'Add Product', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3805, 'GR1006', 'Account-Department', 'Add Project', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3803, 'GR1006', 'Account-Department', 'Add Po', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3802, 'GR1006', 'Account-Department', 'Add Material', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3801, 'GR1006', 'Account-Department', 'Add Enquiry', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3800, 'GR1006', 'Account-Department', 'Add Employee', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3799, 'GR1006', 'Account-Department', 'Add Customer', '2017-09-15', '01:26:08', '2017-09-15 13:27:05', 1),
(3649, 'GR1002', 'Admin', 'Add Employee', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3648, 'GR1002', 'Admin', 'Add Customer', '2017-09-15', '12:34:11', '2017-09-15 12:35:36', 1),
(3879, 'GR1005', 'Help-Desk', 'Edit Employee', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3880, 'GR1005', 'Help-Desk', 'Edit Enquiry', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3881, 'GR1005', 'Help-Desk', 'Edit Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3882, 'GR1005', 'Help-Desk', 'Edit Po', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3883, 'GR1005', 'Help-Desk', 'Edit Product', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3884, 'GR1005', 'Help-Desk', 'Edit Project', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3885, 'GR1005', 'Help-Desk', 'Edit Quote', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3886, 'GR1005', 'Help-Desk', 'Edit Sales', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3887, 'GR1005', 'Help-Desk', 'Edit Service', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3888, 'GR1005', 'Help-Desk', 'Edit Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3889, 'GR1005', 'Help-Desk', 'Employee Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3890, 'GR1005', 'Help-Desk', 'Enquiry Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3891, 'GR1005', 'Help-Desk', 'List Customer', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3892, 'GR1005', 'Help-Desk', 'List Employee', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3893, 'GR1005', 'Help-Desk', 'List Enquiry', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3894, 'GR1005', 'Help-Desk', 'List Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3895, 'GR1005', 'Help-Desk', 'List Po', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3896, 'GR1005', 'Help-Desk', 'List Product', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3897, 'GR1005', 'Help-Desk', 'List Project', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3898, 'GR1005', 'Help-Desk', 'List Quote', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3899, 'GR1005', 'Help-Desk', 'List Sales', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3900, 'GR1005', 'Help-Desk', 'List Service', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3901, 'GR1005', 'Help-Desk', 'List Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3902, 'GR1005', 'Help-Desk', 'Material Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3903, 'GR1005', 'Help-Desk', 'Po Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3904, 'GR1005', 'Help-Desk', 'Product Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3905, 'GR1005', 'Help-Desk', 'Project Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3906, 'GR1005', 'Help-Desk', 'Quote Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3907, 'GR1005', 'Help-Desk', 'Sales Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3908, 'GR1005', 'Help-Desk', 'Service Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3909, 'GR1005', 'Help-Desk', 'Vendor Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3910, 'GR1005', 'Help-Desk', 'View Customer', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3911, 'GR1005', 'Help-Desk', 'View Employee', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3912, 'GR1005', 'Help-Desk', 'View Enquiry', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3913, 'GR1005', 'Help-Desk', 'View Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3914, 'GR1005', 'Help-Desk', 'View Po', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3915, 'GR1005', 'Help-Desk', 'View Product', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3916, 'GR1005', 'Help-Desk', 'View Project', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3917, 'GR1005', 'Help-Desk', 'View Quote', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3918, 'GR1005', 'Help-Desk', 'View Sales', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3919, 'GR1005', 'Help-Desk', 'View Service', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3920, 'GR1005', 'Help-Desk', 'View Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3921, 'GR1005', 'Help-Desk', 'Add Customer', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3922, 'GR1005', 'Help-Desk', 'Edit Customer', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3923, 'GR1005', 'Help-Desk', 'Sale Quote Delete', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3924, 'GR1005', 'Help-Desk', 'Service Quote Delete', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3925, 'GR1005', 'Help-Desk', 'Project Quote Delete', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3926, 'GR1005', 'Help-Desk', 'View Customer', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3927, 'GR1005', 'Help-Desk', 'Store Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3928, 'GR1005', 'Help-Desk', 'List Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3929, 'GR1005', 'Help-Desk', 'Edit Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3930, 'GR1005', 'Help-Desk', 'View Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3931, 'GR1005', 'Help-Desk', 'Add Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3932, 'GR1005', 'Help-Desk', 'Add Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3933, 'GR1005', 'Help-Desk', 'List Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3934, 'GR1005', 'Help-Desk', 'Edit Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3935, 'GR1005', 'Help-Desk', 'View Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3936, 'GR1005', 'Help-Desk', 'Add Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3937, 'GR1005', 'Help-Desk', 'List Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3938, 'GR1005', 'Help-Desk', 'Edit Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3939, 'GR1005', 'Help-Desk', 'View Material', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3940, 'GR1005', 'Help-Desk', 'View Stock', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3941, 'GR1005', 'Help-Desk', 'Add Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3942, 'GR1005', 'Help-Desk', 'List Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3943, 'GR1005', 'Help-Desk', 'Edit Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3944, 'GR1005', 'Help-Desk', 'View Vendor', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3945, 'GR1005', 'Help-Desk', 'Add Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3946, 'GR1005', 'Help-Desk', 'Edit Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3947, 'GR1005', 'Help-Desk', 'View Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3948, 'GR1005', 'Help-Desk', 'Inward Details', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3949, 'GR1005', 'Help-Desk', 'Add Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3950, 'GR1005', 'Help-Desk', 'Edit Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3951, 'GR1005', 'Help-Desk', 'View Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3952, 'GR1005', 'Help-Desk', 'List Outward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3953, 'GR1005', 'Help-Desk', 'List Stock', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3954, 'GR1005', 'Help-Desk', 'Add Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3955, 'GR1005', 'Help-Desk', 'List Inward', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1),
(3956, 'GR1005', 'Help-Desk', 'Inward Management', '2017-09-15', '01:29:06', '2017-09-15 13:30:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_user_group_master`
--

CREATE TABLE IF NOT EXISTS `arka_user_group_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(10) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `arka_user_group_master`
--

INSERT INTO `arka_user_group_master` (`sl_no`, `group_id`, `group_name`, `description`, `created_date`, `created_time`, `time_stamp_value`, `status`) VALUES
(1, 'GR1001', 'MD', 'MD Group Management', '2016-04-19', '06:30:42', '2016-04-19 06:04:15', 1),
(2, 'GR1002', 'Admin', 'Admin Group Management', '2016-04-20', '11:59:14', '2016-04-19 23:29:30', 1),
(9, 'GR1004', 'Customer-User', 'Customer-User Group Management', '2016-04-20', '12:36:02', '2017-09-15 12:37:54', 0),
(8, 'GR1003', 'Customer-Owner', 'Customer-Owner Group Management', '2016-04-20', '12:34:21', '2017-09-15 12:37:51', 0),
(10, 'GR1005', 'Help-Desk', 'Help-Desk Group Management', '2016-04-20', '12:37:18', '2016-04-20 00:08:00', 1),
(11, 'GR1006', 'Account-Department', 'Account-Department Group Management', '2016-04-20', '12:43:36', '2016-04-20 00:14:04', 1),
(12, 'GR1007', 'Sales-Support', 'Sales-Support Group Management', '2016-04-20', '12:44:13', '2017-09-13 11:40:12', 0),
(13, 'GR1008', 'Service-Support', 'Service-Support Group Management', '2016-04-20', '12:46:55', '2017-09-13 11:40:06', 0),
(14, 'GR1009', 'Project-Support', 'Project-Support Group Management', '2016-04-20', '12:47:34', '2017-09-13 11:40:00', 0),
(15, 'GR1010', 'Marketing', 'Marketing Group Management', '2016-04-20', '12:48:15', '2017-09-15 12:37:40', 0),
(22, 'GR1013', 'Developer', 'Developer Group Management', '2016-09-29', '05:45:14', '2017-09-15 12:37:46', 0),
(23, 'GR1014', 'Project Coordinator', 'Project Coordinator Group Management', '2016-09-29', '05:45:53', '2017-09-13 11:39:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arka_user_master`
--

CREATE TABLE IF NOT EXISTS `arka_user_master` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `emp_id` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `user_group` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `area` varchar(10) NOT NULL,
  `area1` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone1` int(11) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `extension1` varchar(5) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_id1` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `re_password` varchar(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `company_code` varchar(25) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `contact_fname` varchar(50) NOT NULL,
  `contact_lname` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `arka_user_master`
--

INSERT INTO `arka_user_master` (`s_no`, `user_id`, `emp_id`, `username`, `sex`, `designation`, `department`, `user_group`, `mobile`, `mobile1`, `mobile2`, `area`, `area1`, `phone`, `phone1`, `extension`, `extension1`, `email_id`, `email_id1`, `password`, `re_password`, `type`, `image`, `company_code`, `company_name`, `salutation`, `contact_fname`, `contact_lname`, `created_by`, `created_date`, `created_time`, `timestamp_value`, `remarks`, `user_status`) VALUES
(26, '', 'EMP1007', 'Suresh Ramakrishnan', 'Male', 'Administrator', 'IT', 'MD', '9500051119', '', '', '044', '', '218032', 0, '432', '', 'suresh@adroitsolutionz.com', '', '06081984', '06081984', 'Development', '1470040314.png', '104', 'Adroit Solutionz', 'Mr', 'Suresh', 'Ramakrishnan', '', '2017-01-20', '06:05:32', '2017-09-22 11:40:46', 'Test', 1),
(2, 'dinesh', 'EMP1003 	', 'Dinesh', 'Male', 'Project Engineer', 'Hardware', 'Account-Department', '9176853098', '', '', '044', '', '656', 0, '70', '', 'dinesh@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '1470040314.png', '102', 'Universal Infrastructure', 'Mr', 'Dinesh', 'Kumar', 'suresh', '0000-00-00', '00:20:16', '2017-09-22 11:43:04', 'test', 1),
(40, 'sekar', 'EMP1004', 'sekar', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support', '9894992353', '', '', '044', '', '42189380', 0, '', '', 'sekar@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '1470040314.png', '103', 'ASIAN ENGINEERING', 'Mr', '', '', 'suresh', '2016-04-27', '19:48:12', '2017-09-22 11:43:14', 'Test', 0),
(41, 'ram', 'EMP1008', 'ramachandran', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support', '9786469868', '', '', '044', '', '42189380', 0, '', '', 'ram@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '', '101', 'Universal Infrastructure', 'Mr', 'Ramachandran', '', 'suresh', '2016-05-12', '12:51:46', '2017-03-22 00:37:59', 'Test', 1),
(42, 'parthiban', 'EMP1009', 'parthiban', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support', '9940413830', '', '', '044', '', '42189380', 0, '', '', 'parthiban@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '', '101', 'Universal Infrastructure', 'Mr', 'Parthiban', '', 'suresh', '0000-00-00', '00:20:16', '2017-03-01 05:21:54', 'Test', 1),
(43, 'raja', 'EMP1010', 'raja', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support ', '9840733119', '', '', '044', '', '42189380', 0, '', '', 'raja@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '', '101', 'Universal Infrastructure', 'Mr', 'Raja', '', 'suresh', '0000-00-00', '00:20:16', '2017-03-01 05:15:38', 'Test', 1),
(44, 'sathish', 'EMP1011', 'sathish', 'Male', 'Project Coordinator', 'Sales', 'Account-Department', '9884422758', '', '', '044', '', '42189380', 0, '', '', 'sathish@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '1470040314.png', '101', 'Universal Infrastructure', '', '', '', 'suresh', '0000-00-00', '00:20:16', '2017-09-22 11:43:49', 'Test', 0),
(45, 'brindha', 'EMP1012', 'brindha', 'Female', 'Help Disk', 'Help Disk', 'Help-Desk', '9802140145', '', '', '044', '', '42189380', 0, '', '', 'brindha@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Help Disk', '1470040314.png', '101', 'Universal Infrastructure', 'Miss', 'brindha', '', 'suresh', '0000-00-00', '00:20:16', '2017-09-22 11:45:25', 'Test', 1),
(46, 'valliappan', 'EMP1013', 'valliappan', 'Male', 'MD', 'MD', 'MD', '9884475646', '', '', '044', '', '42189380', 0, '', '', 'valliappan@arkagroup.co.in', '', 'arka@123', 'arka@123', 'MD', '1470040314.png', '101', 'Universal Infrastructure ', 'Mr', 'Valliappan', '', 'suresh', '2016-04-27', '19:48:12', '2017-09-22 11:45:56', 'Test', 1),
(47, 'sugunesh', 'EMP1014', 'sugunesh', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support', '9843411143', '', '', '044', '', '42189380', 0, '', '', 'sugunesh@arkagroup.co.in', '', 'arka@123', 'arka@123', 'Support', '1470040314.png', '101', 'Universal Infrastructure', '', '', '', 'suresh', '0000-00-00', '00:20:16', '2017-09-22 11:46:08', 'Test', 0),
(52, 'sivaraja90', 'EMP1003', 'sivaraja', 'Male', 'Designing', 'Hardware', 'ADMIN', '9176853098', '', '', '44', '', '656', 0, '70', '', 'sivaraja@arkagroup.co.in', '', 'admins', 'admins', '', '1470040314.png', '102', 'Universal Infrastructure', '', '', '', 'suresh', '0000-00-00', '00:20:16', '2017-09-22 11:46:23', 'test', 0),
(64, '', 'EMP1002', 'rajeswari', 'Female', 'Developer', 'Developement', 'Account-Department', '9884422843', '', '', '0', '', '0', 0, '0', '', 'material.arkagroup@gmail.com', '', 'arka@123', 'arka@123', '', 'avatar3.png', '101', 'Universal Infrastructure ', 'Miss', 'Rajes', 'wari', 'Suresh Ramakrishnan', '2017-01-10', '01:41:29', '2017-01-20 01:06:25', 'Test', 1),
(65, '', 'EMP1003', 'pavithiraraj', 'Male', 'Project Coordinator', 'Sales', 'Sales-Support', '9884506969', '', '', '0', '', '0', 0, '0', '', 'pavithraraj@arkagroup.co.in', '', 'pavi.1995', 'pavi.1995', '', '1490083184.jpg', '101', 'Asian Engineering', 'Mr', 'Pavithiraraj', 'sreenivasan', 'suresh', '2017-03-21', '01:28:14', '2017-03-21 01:58:03', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_user_role_master`
--

CREATE TABLE IF NOT EXISTS `arka_user_role_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `time_stamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `arka_user_role_master`
--

INSERT INTO `arka_user_role_master` (`sl_no`, `role_id`, `role_name`, `category`, `created_date`, `created_time`, `time_stamp_value`, `status`) VALUES
(1, 'RL1001', 'Add Customer', 'Customer Management', '2016-04-19', '01:13:09', '2016-04-19 19:07:54', 1),
(2, 'RL1002', 'Edit Customer', 'Customer Management', '2016-04-19', '01:13:09', '2016-04-19 19:07:54', 1),
(3, '', 'View Customer', 'Customer Management', '2016-04-19', '01:13:36', '2016-04-19 18:50:06', 1),
(74, 'RL1003', 'Sale Quote Delete', 'Enquiry Management', '2016-04-27', '02:47:54', '2016-04-27 14:48:49', 1),
(5, '', 'Delete Customer', 'Customer Management', '2016-04-19', '01:18:44', '2016-04-19 18:50:06', 1),
(6, '', 'List Customer', 'Customer Management', '2016-04-19', '01:19:06', '2016-04-19 18:50:06', 1),
(7, '', 'Customer Management', 'Customer Management', '2016-04-19', '01:19:30', '2016-04-19 18:50:06', 1),
(8, '', 'Add Enquiry', 'Enquiry Management', '2016-04-19', '01:19:52', '2016-04-19 18:50:06', 1),
(9, '', 'Edit Enquiry', 'Enquiry Management', '2016-04-19', '01:20:46', '2016-04-19 18:50:06', 1),
(10, '', 'View Enquiry', 'Enquiry Management', '2016-04-19', '01:21:27', '2016-04-19 18:50:06', 1),
(11, '', 'Delete Enquiry', 'Enquiry Management', '2016-04-19', '01:21:39', '2016-04-19 18:50:06', 1),
(12, '', 'List Enquiry', 'Enquiry Management', '2016-04-19', '01:21:50', '2016-04-19 18:50:06', 1),
(13, '', 'Enquiry Management', 'Enquiry Management', '2016-04-19', '01:22:07', '2016-04-19 18:50:06', 1),
(14, '', 'Add Sales', 'Sales Management', '2016-04-19', '01:22:26', '2016-04-19 18:50:06', 1),
(15, '', 'Edit Sales', 'Sales Management', '2016-04-19', '01:24:43', '2016-04-19 18:50:06', 1),
(16, '', 'View Sales', 'Sales Management', '2016-04-19', '01:24:54', '2016-04-19 18:50:06', 1),
(17, '', 'Delete Sales', 'Sales Management', '2016-04-19', '01:25:03', '2016-04-19 18:50:06', 1),
(18, '', 'List Sales', 'Sales Management', '2016-04-19', '01:25:13', '2016-04-19 18:50:06', 1),
(19, '', 'Sales Management', 'Sales Management', '2016-04-19', '01:25:25', '2016-04-19 18:50:06', 1),
(20, '', 'Add Service', 'Service Management', '2016-04-19', '01:25:53', '2016-04-19 18:50:06', 1),
(21, '', 'Edit Service', 'Service Management', '2016-04-19', '01:27:16', '2016-04-19 18:50:06', 1),
(22, '', 'View Service', 'Service Management', '2016-04-19', '01:27:26', '2016-04-19 18:50:06', 1),
(23, '', 'Delete Service', 'Service Management', '2016-04-19', '01:28:03', '2016-04-19 18:50:06', 1),
(24, '', 'List Service', 'Service Management', '2016-04-19', '01:28:17', '2016-04-19 18:50:06', 1),
(25, '', 'Service Management', 'Service Management', '2016-04-19', '01:28:34', '2016-04-19 18:50:06', 1),
(26, '', 'Add Project', 'Project Management', '2016-04-19', '01:28:39', '2016-04-19 18:50:06', 1),
(27, '', 'Edit Project', 'Project Management', '2016-04-19', '01:29:15', '2016-04-19 18:50:06', 1),
(28, '', 'View Project', 'Project Management', '2016-04-19', '01:29:26', '2016-04-19 18:50:06', 1),
(29, '', 'Delete Project', 'Project Management', '2016-04-19', '01:29:53', '2016-04-19 18:50:06', 1),
(30, '', 'List Project', 'Project Management', '2016-04-19', '01:31:39', '2016-04-19 18:50:06', 1),
(31, '', 'Project Management', 'Project Management', '2016-04-19', '01:31:48', '2016-04-19 18:50:06', 1),
(32, '', 'Add Quote', 'Quote Management', '2016-04-19', '01:32:00', '2016-04-19 18:50:06', 1),
(33, '', 'Edit Quote', 'Quote Management', '2016-04-19', '01:32:48', '2016-04-19 18:50:06', 1),
(34, '', 'View Quote', 'Quote Management', '2016-04-19', '01:32:57', '2016-04-19 18:50:06', 1),
(35, '', 'Delete Quote', 'Quote Management', '2016-04-19', '01:33:06', '2016-04-19 18:50:06', 1),
(36, '', 'List Quote', 'Quote Management', '2016-04-19', '01:33:15', '2016-04-19 18:50:06', 1),
(37, '', 'Quote Management', 'Quote Management', '2016-04-19', '01:33:24', '2016-04-19 18:50:06', 1),
(38, '', 'Add Po', 'Po Management', '2016-04-19', '01:33:30', '2016-04-19 18:50:06', 1),
(39, '', 'Edit Po', 'Po Management', '2016-04-19', '01:34:32', '2016-04-19 18:50:06', 1),
(40, '', 'View Po', 'Po Management', '2016-04-19', '01:34:39', '2016-04-19 18:50:06', 1),
(41, '', 'Delete Po', 'Po Management', '2016-04-19', '01:34:47', '2016-04-19 18:50:06', 1),
(42, '', 'List Po', 'Po Management', '2016-04-19', '01:34:56', '2016-04-19 18:50:06', 1),
(43, '', 'Po Management', 'Po Management', '2016-04-19', '01:35:04', '2016-04-19 18:50:06', 1),
(44, '', 'Add Vendor', 'Vendor Management', '2016-04-19', '01:35:19', '2016-04-19 18:50:06', 1),
(45, '', 'Edit Vendor', 'Vendor Management', '2016-04-19', '01:35:54', '2016-04-19 18:50:06', 1),
(46, '', 'View Vendor', 'Vendor Management', '2016-04-19', '01:36:03', '2016-04-19 18:50:06', 1),
(47, '', 'Delete Vendor', 'Vendor Management', '2016-04-19', '01:36:13', '2016-04-19 18:50:06', 1),
(48, '', 'List Vendor', 'Vendor Management', '2016-04-19', '01:36:38', '2016-04-19 18:50:06', 1),
(49, '', 'Vendor Management', 'Vendor Management', '2016-04-19', '01:36:51', '2016-04-19 18:50:06', 1),
(50, '', 'Add Material', 'Material Management', '2016-04-19', '01:36:54', '2016-04-19 18:50:06', 1),
(51, '', 'Edit Material', 'Material Management', '2016-04-19', '01:37:23', '2016-04-19 18:50:06', 1),
(52, '', 'View Material', 'Material Management', '2016-04-19', '01:37:30', '2016-04-19 18:50:06', 1),
(53, '', 'Delete Material', 'Material Management', '2016-04-19', '01:37:44', '2016-04-19 18:50:06', 1),
(54, '', 'List Material', 'Material Management', '2016-04-19', '01:37:54', '2016-04-19 18:50:06', 1),
(55, '', 'Material Management', 'Material Management', '2016-04-19', '01:38:04', '2016-04-19 18:50:06', 1),
(56, '', 'Add Product', 'Product Management', '2016-04-19', '01:38:11', '2016-04-19 18:50:06', 1),
(57, '', 'Edit Product', 'Product Management', '2016-04-19', '01:38:50', '2016-04-19 18:50:06', 1),
(58, '', 'View Product', 'Product Management', '2016-04-19', '01:39:00', '2016-04-19 18:50:06', 1),
(59, '', 'Delete Product', 'Product Management', '2016-04-19', '01:39:23', '2016-04-19 18:50:06', 1),
(60, '', 'List Product', 'Product Management', '2016-04-19', '01:39:55', '2016-04-19 18:50:06', 1),
(61, '', 'Product Management', 'Product Management', '2016-04-19', '01:40:05', '2016-04-19 18:50:06', 1),
(62, '', 'Add Employee', 'Employee Management', '2016-04-19', '01:41:01', '2016-04-19 18:50:06', 1),
(63, '', 'Edit Employee', 'Employee Management', '2016-04-19', '01:41:28', '2016-04-19 18:50:06', 1),
(64, '', 'View Employee', 'Employee Management', '2016-04-19', '01:41:36', '2016-04-19 18:50:06', 1),
(65, '', 'Delete Employee', 'Employee Management', '2016-04-19', '01:41:49', '2016-04-19 18:50:06', 1),
(66, '', 'List Employee', 'Employee Management', '2016-04-19', '01:42:00', '2016-04-19 18:50:06', 1),
(67, '', 'Employee Management', 'Employee Management', '2016-04-19', '01:42:09', '2016-04-19 18:50:06', 1),
(68, '', 'User Management', 'User Management', '2016-04-19', '01:42:12', '2016-04-19 18:50:06', 1),
(69, '', 'User Role Management', 'User Role Management', '2016-04-19', '01:44:28', '2016-04-19 18:50:06', 1),
(70, '', 'User Group Management', 'User Group Management', '2016-04-19', '01:44:45', '2016-04-19 18:50:06', 1),
(75, 'RL1004', 'Service Quote Delete', 'Enquiry Management', '2016-04-27', '02:48:49', '2016-04-27 14:49:20', 1),
(76, 'RL1005', 'Project Quote Delete', 'Enquiry Management', '2016-04-27', '02:49:20', '2016-07-20 13:02:18', 1),
(77, 'RL1006', 'View Customer', 'Customer Management', '2016-05-09', '02:32:19', '2016-05-09 14:36:58', 0),
(79, 'RL1007', 'Store Management', 'Store Management', '2017-09-06', '06:41:32', '2017-09-06 18:41:42', 1),
(80, 'RL1008', 'List Inward', 'Store Management', '2017-09-06', '08:08:32', '2017-09-15 12:44:47', 0),
(81, 'RL1009', 'Edit Inward', 'Store Management', '2017-09-06', '08:08:40', '2017-09-15 12:46:24', 0),
(82, 'RL1010', 'View Inward', 'Store Management', '2017-09-06', '08:09:17', '2017-09-15 12:46:18', 0),
(83, 'RL1011', 'Add Inward', 'Store Management', '2017-09-07', '11:34:59', '2017-09-15 12:46:11', 0),
(84, 'RL1012', 'Add Outward', 'Store Management', '2017-09-07', '11:36:26', '2017-09-15 12:46:03', 0),
(85, 'RL1013', 'List Outward', 'Store Management', '2017-09-07', '11:36:34', '2017-09-15 12:45:55', 0),
(86, 'RL1014', 'Edit Outward', 'Store Management', '2017-09-07', '11:36:50', '2017-09-15 12:45:47', 0),
(87, 'RL1015', 'View Outward', 'Store Management', '2017-09-07', '11:36:57', '2017-09-15 12:45:39', 0),
(88, 'RL1016', 'Add Material', 'Store Management', '2017-09-07', '11:37:05', '2017-09-15 12:45:32', 0),
(89, 'RL1017', 'List Material', 'Store Management', '2017-09-07', '11:37:23', '2017-09-15 12:45:28', 0),
(90, 'RL1018', 'Edit Material', 'Store Management', '2017-09-07', '11:37:32', '2017-09-15 12:45:23', 0),
(91, 'RL1019', 'View Material', 'Store Management', '2017-09-07', '11:37:56', '2017-09-15 12:45:19', 0),
(92, 'RL1020', 'View Stock', 'Store Management', '2017-09-07', '11:38:04', '2017-09-15 12:45:14', 0),
(93, 'RL1021', 'Add Vendor', 'Store Management', '2017-09-07', '12:22:47', '2017-09-15 12:47:07', 0),
(94, 'RL1022', 'List Vendor', 'Store Management', '2017-09-07', '12:22:54', '2017-09-15 12:47:14', 0),
(95, 'RL1023', 'Edit Vendor', 'Store Management', '2017-09-07', '12:23:02', '2017-09-15 12:47:19', 0),
(96, 'RL1024', 'View Vendor', 'Store Management', '2017-09-07', '12:23:08', '2017-09-15 12:47:23', 0),
(97, 'RL1025', 'Add Inward', 'Store Management', '2017-09-12', '04:10:32', '2017-09-15 12:43:58', 0),
(98, 'RL1026', 'Edit Inward', 'Store Management', '2017-09-12', '04:10:48', '2017-09-15 12:43:54', 0),
(99, 'RL1027', 'View Inward', 'Store Management', '2017-09-12', '04:10:57', '2017-09-15 12:43:50', 0),
(100, 'RL1028', 'Inward Details', 'Store Management', '2017-09-12', '04:11:13', '2017-09-15 12:43:45', 0),
(101, 'RL1029', 'Add Outward', 'Store Management', '2017-09-12', '04:11:40', '2017-09-15 12:43:41', 0),
(102, 'RL1030', 'Edit Outward', 'Store Management', '2017-09-12', '04:11:58', '2017-09-15 12:43:15', 0),
(103, 'RL1031', 'View Outward', 'Store Management', '2017-09-12', '04:12:06', '2017-09-15 12:43:10', 0),
(104, 'RL1032', 'List Outward', 'Store Management', '2017-09-12', '04:12:13', '2017-09-15 12:43:05', 0),
(105, 'RL1033', 'List Stock', 'Store Management', '2017-09-12', '04:13:36', '2017-09-15 12:43:00', 0),
(106, 'RL1034', 'Add Inward', 'Inward Management', '2017-09-13', '04:11:33', '2017-09-15 12:42:55', 0),
(107, 'RL1035', 'List Inward', 'Inward Management', '2017-09-13', '04:13:11', '2017-09-15 12:42:50', 0),
(108, 'RL1036', 'Inward Management', 'Inward Management', '2017-09-13', '04:39:58', '2017-09-15 12:42:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arka_vendor_address_details`
--

CREATE TABLE IF NOT EXISTS `arka_vendor_address_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `area` varchar(75) NOT NULL,
  `landmark` varchar(150) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(150) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `arka_vendor_address_details`
--

INSERT INTO `arka_vendor_address_details` (`sl_no`, `vendor_id`, `address`, `address1`, `area`, `landmark`, `pincode`, `city`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `remarks`, `status`) VALUES
(3, 'VR1003', 'NO.12,VEPERY HIGH ROAD,', '', 'VEPERY', 'VEPERY HIGH ROAD,', 600003, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(1, 'VR1001', '', '', '', '', 0, '', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(2, 'VR1002', '20,PERIANNA MAISTRY STREET,', '', '', '', 600001, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(4, 'VR1004', '79,BHRAMIN STREET,', '', 'AMBATTUR ESTATE', 'PATTARAVAKKAM', 0, 'CHENNAI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(5, 'VR1005', 'NO.1,SIDCO INDUSTRIAL ESTATE', '', 'AMBATTUR', '', 600089, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(6, 'VR1006', 'NO.220,C.T.H.ROAD,', '', 'MANNURPET', '', 0, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(7, 'VR1007', 'NO1,1ST FLOOR,PERIANNA,', 'MAISTRY STREET,', 'NEAR BROADWAY', '', 600001, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(8, 'VR1008', '4/2,BOO BEGUM SAHIB STREET,', '3RD LANE', 'MOUNT ROAD', '', 600002, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(9, 'VR1009', 'NO.130,M.T.H.ROAD,', 'LUCKY TOWERS', 'MANNURPET', '', 600050, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(10, 'VR1010', '101/60,PANTHEON ROAD', '', 'EGMORE', '', 600008, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(11, 'VR1011', 'SITE NO35,GROUND FLOOR,', 'KHATA NO.179/2,KOTHANUR VILLAGE,GOTTLGERE MAIN ROAD,', 'BANGALRU', 'NEAR VINAYAKA THEATRE', 560002, 'BANGALRU', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(12, 'VR1012', 'NEW NO119,OLD NO74', 'PETERS ROAD', 'ROYAPETTAH', '', 600014, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(13, 'VR1013', '130,M.T.H.ROAD', '', 'MANNURPET', '', 600050, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(14, 'VR1014', '#15,ROYAPETTAH HIGH ROAD,', '', 'ROYAPETTAH', '', 600014, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(15, 'VR1015', '100,MENAMBEDU ROAD,', 'SIDCO INDUSTRIAL ESTATE,', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(16, 'VR1016', 'NO.1,KALATHIYAPPA STREET,', '', 'CHOOLAI', '', 600112, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(17, 'VR1017', 'NO.1,SIDCO INDUSTRIAL ESTATE,', '', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(18, 'VR1018', 'DAPODA ROAD,TAL.BHIWANDI', '', 'MUMBAI ', '', 421302, 'MUMBAI ', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(19, 'VR1019', 'SIDCO ESTATE', '', '', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(20, 'VR1020', '2G,NORTH PHASE,SIDCO INDUSTRIAL ESTATE,', '', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(21, 'VR1021', 'NO.20/377B,SAROJINI STREET,', '', 'G.K.M.COLONY', '', 600082, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(22, 'VR1022', 'NO.41/21,POONAMALLEE ROAD', '', 'EKKATTUTHANGAL', '', 600032, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(23, 'VR1023', '#62,KANNIYAMMAN KOIL STREET,', 'AMBATTUR INDUSTRIAL ESTATE,', 'AMBATTUR', '', 600098, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(24, 'VR1024', 'NO.2/3,STERLING ROAD,2ND CROSS ST,', '', 'NUNGAMBAKKAM ', '', 600034, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(25, 'VR1025', '12/23,ROYAPETTAH HIGH ROAD,', '', 'ROYAPETTAH', '', 600014, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(26, 'VR1026', 'T-47/48,MIDC INDUSTRIAL AREA,', 'HINGNA ROAD', 'NAGPUR', '', 440016, 'NAGPUR', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(27, 'VR1027', 'NO.7/1,2ND FLOOR,VIVEKANANDAR NAGAR,', '6TH CROSS STREET', 'PALLIKARANAI', '', 600100, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(28, 'VR1028', 'NO.119,PERAMBUR REDHILLS ROAD,', '', 'KALPALAYAM', '', 600099, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1),
(29, 'VR1029', '2/3,STERLING ROAD,', '2ND CROSS STREET,', 'NUNGAMBAKKAM', '', 600034, 'CHENNAI', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_vendor_bank_details`
--

CREATE TABLE IF NOT EXISTS `arka_vendor_bank_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(15) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `account_holder_name` varchar(50) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `area` varchar(75) NOT NULL,
  `pincode` int(6) NOT NULL,
  `ifsc_code` varchar(25) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `arka_vendor_bank_details`
--

INSERT INTO `arka_vendor_bank_details` (`sl_no`, `vendor_id`, `account_no`, `account_holder_name`, `bank_name`, `branch`, `area`, `pincode`, `ifsc_code`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `remarks`, `status`) VALUES
(1, 'VR1001', '232148957485748', 'sivaraja', 'icici', 'guindy', 'guindy', 600034, 'icici00021', 'Suresh Ramakrisnhan', '2016-07-30', '12:04:44', '2016-07-30 12:17:18', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_vendor_contact_details`
--

CREATE TABLE IF NOT EXISTS `arka_vendor_contact_details` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(15) NOT NULL,
  `vendor_contact_person_fname` varchar(50) NOT NULL,
  `vendor_contact_person_lname` varchar(50) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no1` varchar(15) NOT NULL,
  `mobile_no2` varchar(15) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `phone_no1` int(11) NOT NULL,
  `area` varchar(250) NOT NULL,
  `area_code` varchar(10) NOT NULL,
  `area_code1` varchar(10) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `extension1` varchar(5) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `mail_id1` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `timestamp_values` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `designation` varchar(25) NOT NULL,
  `d_o_b` date NOT NULL,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `arka_vendor_contact_details`
--

INSERT INTO `arka_vendor_contact_details` (`sl_no`, `vendor_id`, `vendor_contact_person_fname`, `vendor_contact_person_lname`, `salutation`, `mobile_no`, `mobile_no1`, `mobile_no2`, `phone_no`, `phone_no1`, `area`, `area_code`, `area_code1`, `extension`, `extension1`, `mail_id`, `mail_id1`, `created_by`, `created_date`, `created_time`, `timestamp_values`, `designation`, `d_o_b`, `remarks`, `status`) VALUES
(1, 'VR1001', 'xyz1', 'abc1', 'MR', '9000000001', '', '', '', 0, '', '', '', '', '', 'xyz@xyz1', '', '0000-00-00', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(2, 'VR1002', 'xyz2', 'abc2', 'MR', '9000000002', '', '', '', 0, '', '', '', '', '', 'xyz@xyz2', '', '0000-00-00', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(3, 'VR1003', 'xyz3', 'abc3', 'MR', '9000000003', '', '', '', 0, '', '', '', '', '', 'xyz@xyz3', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(4, 'VR1004', 'xyz4', 'abc4', 'MR', '9000000004', '', '', '', 0, '', '', '', '', '', 'xyz@xyz4', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(5, 'VR1005', 'xyz5', 'abc5', 'MR', '9000000005', '', '', '', 0, '', '', '', '', '', 'xyz@xyz5', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(6, 'VR1006', 'xyz6', 'abc6', 'MR', '9000000006', '', '', '', 0, '', '', '', '', '', 'xyz@xyz6', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(7, 'VR1007', 'xyz7', 'abc7', 'MR', '9000000007', '', '', '', 0, '', '', '', '', '', 'xyz@xyz7', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(8, 'VR1008', 'xyz8', 'abc8', 'MR', '9000000008', '', '', '', 0, '', '', '', '', '', 'xyz@xyz8', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(9, 'VR1009', 'xyz9', 'abc9', 'MR', '9000000009', '', '', '', 0, '', '', '', '', '', 'xyz@xyz9', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(10, 'VR1010', 'xyz10', 'abc10', 'MR', '9000000010', '', '', '', 0, '', '', '', '', '', 'xyz@xyz10', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(11, 'VR1011', 'xyz11', 'abc11', 'MR', '9000000011', '', '', '', 0, '', '', '', '', '', 'xyz@xyz11', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(12, 'VR1012', 'xyz12', 'abc12', 'MR', '9000000012', '', '', '', 0, '', '', '', '', '', 'xyz@xyz12', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(13, 'VR1013', 'xyz13', 'abc13', 'MR', '9000000013', '', '', '', 0, '', '', '', '', '', 'xyz@xyz13', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(14, 'VR1014', 'xyz14', 'abc14', 'MR', '9000000014', '', '', '', 0, '', '', '', '', '', 'xyz@xyz14', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(15, 'VR1015', 'xyz15', 'abc15', 'MR', '9000000015', '', '', '', 0, '', '', '', '', '', 'xyz@xyz15', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(16, 'VR1016', 'xyz16', 'abc16', 'MR', '9000000016', '', '', '', 0, '', '', '', '', '', 'xyz@xyz16', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(17, 'VR1017', 'xyz17', 'abc17', 'MR', '9000000017', '', '', '', 0, '', '', '', '', '', 'xyz@xyz17', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(18, 'VR1018', 'xyz18', 'abc18', 'MR', '9000000018', '', '', '', 0, '', '', '', '', '', 'xyz@xyz18', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(19, 'VR1019', 'xyz19', 'abc19', 'MR', '9000000019', '', '', '', 0, '', '', '', '', '', 'xyz@xyz19', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(20, 'VR1020', 'xyz20', 'abc20', 'MR', '9000000020', '', '', '', 0, '', '', '', '', '', 'xyz@xyz20', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(21, 'VR1021', 'xyz21', 'abc21', 'MR', '9000000021', '', '', '', 0, '', '', '', '', '', 'xyz@xyz21', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1),
(22, 'VR1022', 'xyz22', 'abc22', 'MR', '9000000022', '', '', '', 0, '', '', '', '', '', 'xyz@xyz22', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '0000-00-00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arka_vendor_master`
--

CREATE TABLE IF NOT EXISTS `arka_vendor_master` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(15) NOT NULL,
  `vendor_company_name` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `cst_no` varchar(30) NOT NULL,
  `service_tax` varchar(30) NOT NULL,
  `tin_no` varchar(30) NOT NULL,
  `timestamp_value` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remarks` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `arka_vendor_master`
--

INSERT INTO `arka_vendor_master` (`sl_no`, `vendor_id`, `vendor_company_name`, `created_by`, `created_date`, `created_time`, `cst_no`, `service_tax`, `tin_no`, `timestamp_value`, `remarks`, `status`) VALUES
(1, 'VR1001', 'A.B.TRADERS & SUPPLIERS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33671320572', '0000-00-00 00:00:00', '', 1),
(2, 'VR1002', 'ARWA ENTERPRISES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33500060587', '0000-00-00 00:00:00', '', 1),
(3, 'VR1003', 'BOKARIA REINFORCING COMPANY PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33921700917', '0000-00-00 00:00:00', '', 1),
(4, 'VR1004', 'FE ON CRAFT ENGINEERING', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '987987/10-08-2009', '', '33131443283', '0000-00-00 00:00:00', '', 1),
(5, 'VR1005', 'GODREJ & BOYCE MFG CO LTD SSG - P', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33531360613', '0000-00-00 00:00:00', '', 1),
(6, 'VR1006', 'INDIA STEEL TRADERS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33551440142', '0000-00-00 00:00:00', '', 1),
(7, 'VR1007', 'MADARS HARDTOOLS PRIVATE LIMITED', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33250040306', '0000-00-00 00:00:00', '', 1),
(8, 'VR1008', 'MD SALES AND SERVICES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33180681175', '0000-00-00 00:00:00', '', 1),
(9, 'VR1009', 'PADAM ELECTRICALS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '', '0000-00-00 00:00:00', '', 1),
(10, 'VR1010', 'SATINOOD PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33970540721', '0000-00-00 00:00:00', '', 1),
(11, 'VR1011', 'AET FLEXIBLESPACE (I) PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '29910577971', '0000-00-00 00:00:00', '', 1),
(12, 'VR1012', 'AKTA ENTERPRISES PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33220721117', '0000-00-00 00:00:00', '', 1),
(13, 'VR1013', 'ARIHANT ELECTRICALS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33471442805', '0000-00-00 00:00:00', '', 1),
(14, 'VR1014', 'CLIFFTONS FURNITURES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33750780432', '0000-00-00 00:00:00', '', 1),
(15, 'VR1015', 'ERGOPLUS SEATING SYSTEMS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '893127', '', '33761386628', '0000-00-00 00:00:00', '', 1),
(16, 'VR1016', 'GDS TRADING PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33690040646', '0000-00-00 00:00:00', '', 1),
(17, 'VR1017', 'GODREJ & BOYCE MFG CO LTD,INTERIO', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33531360613', '0000-00-00 00:00:00', '', 1),
(18, 'VR1018', 'GODREJ & BOYCE MFG CO LTD - M', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '27840299022', '0000-00-00 00:00:00', '', 1),
(19, 'VR1019', 'GODREJ & BOYCE MFG CO LTD SSG - P', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33531360613', '0000-00-00 00:00:00', '', 1),
(20, 'VR1020', 'K.K.COATS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '', '0000-00-00 00:00:00', '', 1),
(21, 'VR1021', 'PRIME QUALITY FURNITURES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '1213039', '', '33656350421', '0000-00-00 00:00:00', '', 1),
(22, 'VR1022', 'MAHALAKSHMI GLASS DESIGNS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33980907133', '0000-00-00 00:00:00', '', 1),
(23, 'VR1023', 'R.R.AGENCIES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33271442042', '0000-00-00 00:00:00', '', 1),
(24, 'VR1024', 'SLS ENTERPRISES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '813872', '', '33041502163', '0000-00-00 00:00:00', '', 1),
(25, 'VR1025', 'SONA ENTERPRISES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33500780327', '0000-00-00 00:00:00', '', 1),
(26, 'VR1026', 'SPACEWOOD FURNISHERS PVT LTD', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '27350317673', '0000-00-00 00:00:00', '', 1),
(27, 'VR1027', 'SPI TRADERS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33260988524', '0000-00-00 00:00:00', '', 1),
(28, 'VR1028', 'STYLE FURN OFFICE EQUIPMENTS', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33241042661', '0000-00-00 00:00:00', '', 1),
(29, 'VR1029', 'SWARNA ENTERPRISES', 'Suresh Ramakrishnan', '0000-00-00', '00:00:00', '', '', '33141502399', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `erp_registration_tbl`
--

CREATE TABLE IF NOT EXISTS `erp_registration_tbl` (
  `SL_NO` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(50) NOT NULL,
  `CONTACT_PERSON` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `MOBILE` varchar(15) NOT NULL,
  `CITY` varchar(25) NOT NULL,
  `COUNTRY` varchar(25) NOT NULL,
  `PINCODE` varchar(6) NOT NULL,
  `REGISTRATION_TYPE` varchar(25) NOT NULL,
  `TABLE_PREFIX` varchar(10) NOT NULL,
  `URL` text NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  PRIMARY KEY (`SL_NO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `erp_registration_tbl`
--

INSERT INTO `erp_registration_tbl` (`SL_NO`, `COMPANY_NAME`, `CONTACT_PERSON`, `EMAIL`, `PASSWORD`, `MOBILE`, `CITY`, `COUNTRY`, `PINCODE`, `REGISTRATION_TYPE`, `TABLE_PREFIX`, `URL`, `STATUS`) VALUES
(1, 'Arka Automaations', 'Mr. Valliappan', 'valliappan@arkagroup.co.in', '123456', '+919884475646', 'Chennai', 'India', '600032', 'SALES', 'arka_', '', 'Working');
