-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 12:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labwork_modul7`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_no` int(11) DEFAULT NULL,
  `account_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_no`, `account_name`) VALUES
(1, 110, '-'),
(2, 111, 'Kas'),
(3, 112, 'Piutang'),
(4, 113, 'Perlengkapan'),
(5, 121, 'Peralatan'),
(6, 122, 'Akumulasi Peralatan'),
(7, 211, 'Utang Usaha'),
(8, 311, 'Modal'),
(9, 411, 'Pendapatan'),
(10, 511, 'Beban Gaji'),
(11, 512, 'Beban Sewa'),
(12, 513, 'Beban \r\nPenyusutan'),
(13, 514, 'Beban \r\nPerlengkapan'),
(14, 511, 'Beban Lain - Lain');

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `bom_id` int(11) NOT NULL,
  `material_required` int(10) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(20) NOT NULL,
  `job_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`, `job_description`) VALUES
(1, 'Production', 'Produce and assemble products'),
(2, 'Finance', 'Hiring, screening, and placing workers'),
(3, 'Procurement', 'Procure material, creating invoice');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `employee_bank` varchar(30) DEFAULT NULL,
  `account_number` int(16) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `division_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(20) NOT NULL,
  `account_date` date DEFAULT NULL,
  `debit` varchar(20) DEFAULT NULL,
  `credit` varchar(20) DEFAULT NULL,
  `total_debit` int(20) DEFAULT NULL,
  `total_credit` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(20) DEFAULT NULL,
  `material_price` int(20) DEFAULT NULL,
  `material_stock` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `material_price`, `material_stock`) VALUES
(1, 'Packaging', 30000, 0),
(2, 'Gear', 98500, 0),
(3, 'Arm 1', 325000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `material_request`
--

CREATE TABLE `material_request` (
  `request_id` int(11) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  `material_amount` int(10) DEFAULT NULL,
  `material_status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mps`
--

CREATE TABLE `mps` (
  `mps_id` int(11) NOT NULL,
  `production_date` date DEFAULT NULL,
  `total_production` int(10) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `production_end` date DEFAULT NULL,
  `product_stats` varchar(10) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mps`
--

INSERT INTO `mps` (`mps_id`, `production_date`, `total_production`, `due_date`, `production_end`, `product_stats`, `product_id`) VALUES
(1, '2021-03-01', 5, '2021-04-01', '2021-03-28', 'Complete', NULL),
(2, '2021-05-03', 10, '2021-07-03', '2021-06-30', 'Complete', NULL),
(3, '2021-08-01', 15, '2021-10-01', '2021-09-30', 'Complete', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `procurement_id` int(11) NOT NULL,
  `procurement_date` date DEFAULT NULL,
  `procurement_stats` varchar(11) DEFAULT NULL,
  `bom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procurement`
--

INSERT INTO `procurement` (`procurement_id`, `procurement_date`, `procurement_stats`, `bom_id`) VALUES
(1, '2021-04-13', 'On Going', 1),
(2, '2021-04-15', 'On Going', 1);

-- --------------------------------------------------------

--
-- Table structure for table `procurement_transaction`
--

CREATE TABLE `procurement_transaction` (
  `transaction_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `material_quantity` int(11) DEFAULT NULL,
  `price_per_unit` int(11) DEFAULT NULL,
  `total_payment` int(15) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `invoice_status` varchar(30) DEFAULT NULL,
  `procurement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procurement_transaction`
--

INSERT INTO `procurement_transaction` (`transaction_id`, `payment_date`, `material_quantity`, `price_per_unit`, `total_payment`, `due_date`, `invoice_status`, `procurement_id`) VALUES
(8, '2021-04-13', 10, 100000, 1000000, '2021-04-16', 'Waiting', 1),
(9, '2021-04-16', 1, 10000, 10000, '2021-04-16', 'Waiting', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_stock` int(10) DEFAULT NULL,
  `bom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_stock`, `bom_id`) VALUES
(1, 'Stirling', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(10) NOT NULL,
  `receipt_date` date DEFAULT NULL,
  `receipt_desc` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_date` date DEFAULT NULL,
  `salary_amount` int(20) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`bom_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `material_request`
--
ALTER TABLE `material_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `mps`
--
ALTER TABLE `mps`
  ADD PRIMARY KEY (`mps_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`procurement_id`),
  ADD KEY `bom_id` (`bom_id`);

--
-- Indexes for table `procurement_transaction`
--
ALTER TABLE `procurement_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `procurement_id` (`procurement_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `bom_id` (`bom_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `bom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `material_request`
--
ALTER TABLE `material_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mps`
--
ALTER TABLE `mps`
  MODIFY `mps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `procurement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `procurement_transaction`
--
ALTER TABLE `procurement_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bom`
--
ALTER TABLE `bom`
  ADD CONSTRAINT `bom_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`);

--
-- Constraints for table `material_request`
--
ALTER TABLE `material_request`
  ADD CONSTRAINT `material_request_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`);

--
-- Constraints for table `procurement_transaction`
--
ALTER TABLE `procurement_transaction`
  ADD CONSTRAINT `procurement_transaction_ibfk_1` FOREIGN KEY (`procurement_id`) REFERENCES `procurement` (`procurement_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`bom_id`) REFERENCES `bom` (`bom_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `procurement_transaction` (`transaction_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
