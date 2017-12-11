-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2015 at 02:21 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arkaerp`
--

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
-- Table structure for table `arka_user_master`
--

CREATE TABLE IF NOT EXISTS `arka_user_master` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `user_group` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` varchar(20) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_time` varchar(20) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `arka_user_master`
--

INSERT INTO `arka_user_master` (`s_no`, `user_id`, `username`, `sex`, `designation`, `department`, `user_group`, `mobile`, `phone`, `email_id`, `password`, `type`, `image`, `customer_id`, `customer_name`, `contact_person`, `created_date`, `created_time`, `modified_date`, `modified_time`, `user_status`) VALUES
(4, 'rsureshit', 'Suresh', 'Male', 'Software Developer', 'DEVP', 'Development', '9500051119', '04442629655', 'suresh@adroitsolutionz.com', '06081984', 'Own Family', 'suresh.jpg', 'A10001', 'Arka Automaations', 'Valliappan', '2014-10-30', '07:07:58 AM', '2015-01-11', '07:07:58 AM', 1);

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
