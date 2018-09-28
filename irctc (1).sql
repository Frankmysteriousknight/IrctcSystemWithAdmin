-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2018 at 12:01 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `irctc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Username`, `Password`) VALUES
('yashmthr98', '147852369');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(30) NOT NULL,
  `Pnr` varchar(15) NOT NULL,
  `Tnumber` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Peoples` int(3) NOT NULL,
  `Amount` float NOT NULL,
  `Dot` date NOT NULL,
  PRIMARY KEY  (`Pnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `Pnr`, `Tnumber`, `Source`, `Destination`, `Peoples`, `Amount`, `Dot`) VALUES
('keshav98', '2502723', '16542', 'Mumbai', 'Delhi', 5, 2280, '2018-09-03'),
('keshav98', '5062905', '16542', 'Mumbai', 'Delhi', 5, 2280, '2018-09-03'),
('keshav98', '5179534', '16542', 'Mumbai', 'Delhi', 5, 2280, '2018-09-03'),
('keshav98', '5229992', '16542', 'Mumbai', 'Delhi', 5, 2280, '2018-09-03'),
('yashmthr98', '5351553', '12431', 'Kollam', 'Kannur', 2, 5100, '2018-07-09'),
('keshav98', '5733459', '16542', 'Mumbai', 'Delhi', 5, 2280, '2018-09-03'),
('prakhar98', '5916390', '12431', 'Mangalore', 'Vadodra', 6, 6120, '2018-06-25'),
('hitesh98', '7590226', '12009', 'Mumbai', 'Delhi', 5, 4600, '2018-06-25'),
('yashmthr98', '9910793', '12431', 'Kollam', 'Vadodra', 1, 6120, '2018-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `rajdhani`
--

CREATE TABLE `rajdhani` (
  `Tnumber` varchar(15) NOT NULL default '12431',
  `Source` varchar(25) NOT NULL,
  `Destination` varchar(25) NOT NULL,
  `Arrival` time NOT NULL,
  `Departure` time NOT NULL,
  `DestinationArrival` time NOT NULL,
  `DestinationDeparture` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rajdhani`
--

INSERT INTO `rajdhani` (`Tnumber`, `Source`, `Destination`, `Arrival`, `Departure`, `DestinationArrival`, `DestinationDeparture`) VALUES
('12431', 'Kollam', 'Kannur', '00:00:00', '20:10:00', '03:22:00', '03:25:00'),
('12431', 'Kollam', 'Mangalore', '00:00:00', '20:10:00', '05:10:00', '05:20:00'),
('12431', 'Kollam', 'Vadodra', '00:00:00', '20:10:00', '03:37:00', '03:55:00'),
('12431', 'Kollam', 'Kota', '00:00:00', '20:10:00', '10:45:00', '10:55:00'),
('12431', 'Kollam', 'Hazrat Nizamuddin', '00:00:00', '20:10:00', '16:55:00', '00:00:00'),
('12431', 'Kannur', 'Mangalore', '03:22:00', '03:25:00', '05:10:00', '05:20:00'),
('12431', 'Kannur', 'Vadodra', '03:22:00', '03:25:00', '13:37:00', '13:55:00'),
('12431', 'Kannur', 'Kota', '03:22:00', '03:25:00', '10:45:00', '10:55:00'),
('12431', 'Kannur', 'Hazrat Nizamuddin', '03:22:00', '03:25:00', '16:55:00', '00:00:00'),
('12431', 'Mangalore', 'Vadodra', '05:10:00', '05:20:00', '13:37:00', '13:55:00'),
('12431', 'Mangalore', 'Kota', '05:10:00', '05:20:00', '10:45:00', '10:55:00'),
('12431', 'Mangalore', 'Hazrat Nizamuddin', '05:10:00', '05:20:00', '16:55:00', '00:00:00'),
('12431', 'Vadodra', 'Kota', '03:37:00', '03:55:00', '10:45:00', '10:55:00'),
('12431', 'Vadodra', 'Hazrat Nizamuddin', '03:37:00', '03:55:00', '16:55:00', '00:00:00'),
('12431', 'Kota', 'Hazrat Nizamuddin', '10:45:00', '10:55:00', '16:55:00', '00:00:00'),
('12433', 'Hazrat Nizamuddin', 'Kota', '00:00:00', '20:10:00', '03:22:00', '03:25:00'),
('12433', 'Hazrat Nizamuddin', 'Vadodra', '00:00:00', '20:10:00', '05:10:00', '05:20:00'),
('12433', 'Hazrat Nizamuddin', 'Mangalore', '00:00:00', '20:10:00', '13:37:00', '13:44:00'),
('12433', 'Hazrat Nizamuddin', 'Kannur', '00:00:00', '20:10:00', '10:45:00', '10:55:00'),
('12433', 'Hazrat Nizamuddin', 'Kollam', '00:00:00', '20:10:00', '16:45:00', '00:00:00'),
('12433', 'Kota', 'Vadodra', '03:22:00', '03:25:00', '05:10:00', '05:20:00'),
('12433', 'Kota', 'Mangalore', '03:22:00', '03:25:00', '13:37:00', '13:44:00'),
('12433', 'Kota', 'Kannur', '03:22:00', '03:25:00', '14:25:00', '14:30:00'),
('12433', 'Kota', 'Kollam', '03:22:00', '03:25:00', '16:55:00', '00:00:00'),
('12433', 'Vadodra', 'Mangalore', '05:10:00', '05:20:00', '13:37:00', '13:44:00'),
('12433', 'Vadodra', 'Kannur', '05:10:00', '05:20:00', '10:45:00', '10:55:00'),
('12433', 'Vadodra', 'Kollam', '03:22:00', '03:25:00', '16:55:00', '00:00:00'),
('12433', 'Mangalore', 'Kannur', '05:10:00', '05:20:00', '10:45:00', '10:55:00'),
('12433', 'Mangalore', 'Kollam', '05:10:00', '05:20:00', '16:55:00', '00:00:00'),
('12433', 'Kannur', 'Kollam', '10:45:00', '10:55:00', '16:55:00', '00:00:00'),
('14563', 'Mumbai', 'Delhi', '15:16:00', '15:17:00', '20:20:00', '20:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `shatabdi`
--

CREATE TABLE `shatabdi` (
  `Tnumber` varchar(15) NOT NULL default '12009',
  `From` varchar(30) NOT NULL,
  `To` varchar(30) NOT NULL,
  `Arrival` time NOT NULL,
  `Departure` time NOT NULL,
  `DestinationArrival` time NOT NULL,
  `DestinationDeparture` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shatabdi`
--

INSERT INTO `shatabdi` (`Tnumber`, `From`, `To`, `Arrival`, `Departure`, `DestinationArrival`, `DestinationDeparture`) VALUES
('12009', 'Mumbai', 'Surat', '00:00:00', '06:25:00', '09:31:00', '09:36:00'),
('12009', 'Mumbai', 'Bharuch', '00:00:00', '06:25:00', '10:13:00', '10:18:00'),
('12009', 'Mumbai', 'Vadodra', '00:00:00', '06:25:00', '11:04:00', '11:09:00'),
('12009', 'Mumbai', 'Ahemdabad', '00:00:00', '06:25:00', '12:45:00', '00:00:00'),
('12009', 'Surat', 'Bharuch', '09:31:00', '09:36:00', '10:13:00', '10:24:00'),
('12009', 'Surat', 'Vadodra', '09:31:00', '09:36:00', '11:04:00', '11:09:00'),
('12009', 'Surat', 'Ahemdabad', '09:31:00', '09:36:00', '12:45:00', '00:00:00'),
('12009', 'Bharuch', 'Vadodra', '10:13:00', '10:18:00', '11:04:00', '11:09:00'),
('12009', 'Bharuch', 'Ahmedabad', '10:13:00', '10:18:00', '12:45:00', '00:00:00'),
('12009', 'Vadodra', 'Ahmedabad', '11:04:00', '11:09:00', '12:45:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `Train` varchar(20) NOT NULL,
  `Tnumber` varchar(10) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Capacity` int(4) NOT NULL,
  `Rate` int(5) NOT NULL,
  PRIMARY KEY  (`Tnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Train`, `Tnumber`, `Day`, `Capacity`, `Rate`) VALUES
('KalShatabdi', '12011', 'Thursday', 756, 920),
('Garibrath', '12203', 'Sunday', 856, 220),
('Rgaribrath', '12204', 'Monday', 880, 200),
('Duronto', '12213', 'Thursday', 476, 900),
('Rduronto', '12214', 'Friday', 756, 900),
('RaniKhet', '12245', 'Sunday', 566, 788),
('Rajdhani', '12431', 'Monday', 836, 1020),
('TrivRajdhani', '12433', 'Tuesday', 856, 1020),
('Doubledecker', '12985', 'Tuesday', 655, 450),
('Rdoubledecker', '12986', 'Wednesday', 556, 450),
('AlaHazrat', '14311', 'Friday', 665, 565),
('RalaHazrat', '14312', 'Saturday', 656, 550),
('RaniKher', '14563', 'Monday', 0, 159),
('Kherli Express', '14568', 'Friday', 456, 258);

-- --------------------------------------------------------

--
-- Table structure for table `trirajdhani`
--

CREATE TABLE `trirajdhani` (
  `Tnumber` varchar(15) NOT NULL default '12433',
  `From` varchar(30) NOT NULL,
  `To` varchar(30) NOT NULL,
  `Arrival` time NOT NULL,
  `Departure` time NOT NULL,
  `DestinationArrival` time NOT NULL,
  `DestinationDeparture` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trirajdhani`
--

INSERT INTO `trirajdhani` (`Tnumber`, `From`, `To`, `Arrival`, `Departure`, `DestinationArrival`, `DestinationDeparture`) VALUES
('12433', 'Hazrat Nizamuddin', 'Kota', '00:00:00', '20:10:00', '03:22:00', '03:25:00'),
('12433', 'Hazrat Nizamuddin', 'Vadodra', '00:00:00', '20:10:00', '05:10:00', '05:20:00'),
('12433', 'Hazrat Nizamuddin', 'Mangalore', '00:00:00', '20:10:00', '13:37:00', '13:44:00'),
('12433', 'Hazrat Nizamuddin', 'Kannur', '00:00:00', '20:10:00', '10:45:00', '10:55:00'),
('12433', 'Hazrat Nizamuddin', 'Kollam', '00:00:00', '20:10:00', '16:45:00', '00:00:00'),
('12433', 'Kota', 'Vadodra', '03:22:00', '03:25:00', '05:10:00', '05:20:00'),
('12433', 'Kota', 'Mangalore', '03:22:00', '03:25:00', '13:37:00', '13:44:00'),
('12433', 'Kota', 'Kannur', '03:22:00', '03:25:00', '14:25:00', '14:30:00'),
('12433', 'Kota', 'Kollam', '03:22:00', '03:25:00', '16:55:00', '00:00:00'),
('12433', 'Vadodra', 'Mangalore', '05:10:00', '05:20:00', '13:37:00', '13:44:00'),
('12433', 'Vadodra', 'Kannur', '05:10:00', '05:20:00', '10:45:00', '10:55:00'),
('12433', 'Vadodra', 'Kollam', '03:22:00', '03:25:00', '16:55:00', '00:00:00'),
('12433', 'Mangalore', 'Kannur', '05:10:00', '05:20:00', '10:45:00', '10:55:00'),
('12433', 'Mangalore', 'Kollam', '05:10:00', '05:20:00', '16:55:00', '00:00:00'),
('12433', 'Kannur', 'Kollam', '10:45:00', '10:55:00', '16:55:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(35) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY  (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Username`, `Password`, `Email`, `Phone`) VALUES
('Hitesh Soni', 'hitesh98', '123456', 'yashmthr65@gmail.com', '8107592552'),
('Keshav Rathore', 'keshav98', '123654', 'keshav98@gmail.com', '8456321798'),
('Prakhar', 'prakhar98', 'prakhar', 'prakhar98@gmail.com', '9563217895'),
('Yash Mathur', 'yashmthr66', '147852', 'yashmthr65@gmail.com', '7452361895'),
('Yash Mathur', 'yashmthr98', '123456789', 'yashmthr65@gmail.com', '8107592552');
