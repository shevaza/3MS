-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` int(11) NOT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`id`, `description_ar`, `description_en`, `type`) VALUES
(101, 'المضخة تدور ولكن بدون ضغط', 'The pump rotates but without pressure', 'machine'),
(102, 'المكنة لا تضغط لتسكير القالب', 'The machine does not click to irrigate the mold', 'machine'),
(103, 'المكنة لا تحقن', 'The machine does not inject', 'machine'),
(104, 'يتحرك برغي الحقن دون دخول المواد إلى الباريل', 'The injection screw moves without entering the materials to the barrel', 'machine'),
(105, 'عربة الحقن لا تتحرك', 'The injection vehicle does not move', 'machine'),
(106, 'سماع صوت عند فتحة القالب', 'Hear a sound at the mold opening', 'machine'),
(107, 'ارتفاع درجة حرارة الزيت الهيدروليكي', 'Hydraulic oil high temperature', 'machine'),
(108, 'نص أوتوماتيك معطل', 'Automatic text is disabled', 'machine'),
(109, 'أوتوماتيك معطل', 'Automatic', 'machine'),
(201, 'نقص', 'loss', 'mold'),
(202, 'تقلص, انكماش', 'Disancy, shrinkage', 'mold'),
(203, 'القطعة عالقة في القالب', 'The piece is stuck in the mold', 'mold'),
(204, 'الجزرة عالقة في القالب', 'The carrot is stuck in the mold', 'mold'),
(205, 'مريشة', 'Drainage', 'mold'),
(206, 'القطعة تنكسر خلال فتح القالب', 'The piece is broken while opening the mold', 'mold'),
(207, 'القطعة تنكسر خلال دفعها من القالب', 'The piece is broken while pushing it from the mold', 'mold'),
(208, 'مشحة بيضة', 'Egg', 'mold'),
(209, 'خطوط مي', 'Mi lines', 'mold'),
(210, 'حرق', 'burn', 'mold'),
(211, 'بوالين هواء', 'Poeline air', 'mold'),
(212, 'مسوكجة', 'Cocoin', 'mold');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `sku_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_formula`
--

CREATE TABLE `item_formula` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `component_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `number`, `description`, `status`) VALUES
(1, 1, 'Machine 1', '0'),
(2, 2, 'Machine 2', '0'),
(3, 3, 'Machine 3', '0'),
(4, 4, 'Machine 4', '0'),
(5, 5, 'Machine 5', '0'),
(6, 6, 'Machine 6', '0'),
(7, 7, 'Machine 7', '0'),
(8, 8, 'Machine 8', '0'),
(9, 9, 'Machine 9', '0'),
(10, 10, 'Machine 10', '0'),
(11, 11, 'Machine 11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `machine_mold_comp`
--

CREATE TABLE `machine_mold_comp` (
  `id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `mold_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine_mold_comp`
--

INSERT INTO `machine_mold_comp` (`id`, `machine_id`, `mold_id`) VALUES
(1, 6, 1),
(2, 8, 1),
(5, 1, 0),
(6, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `machine_status`
--

CREATE TABLE `machine_status` (
  `id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `power_on_time` double NOT NULL,
  `oil_level` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine_status`
--

INSERT INTO `machine_status` (`id`, `machine_id`, `datetime`, `power_on_time`, `oil_level`, `user_id`) VALUES
(1, 1, '2022-06-15 07:30:02', 29275, 4, 4),
(3, 1, '2022-06-23 05:44:32', 29432, 3.5, 4),
(4, 4, '2022-06-23 05:46:12', 43985, 1, 4),
(5, 2, '2022-06-23 05:48:12', 3470, 5, 4),
(6, 3, '2022-06-23 05:49:29', 44628, 3, 4),
(7, 11, '2022-06-23 05:51:18', 33963, 1, 4),
(8, 6, '2022-06-23 05:53:53', 3421, 6.5, 4),
(9, 5, '2022-06-23 05:55:28', 45189, 3, 4),
(10, 9, '2022-06-23 05:56:46', 799, 3, 4),
(11, 7, '2022-06-23 05:58:08', 0, 2.5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_log`
--

CREATE TABLE `maintenance_log` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `diagnostic` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `error_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `part_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_order`
--

CREATE TABLE `maintenance_order` (
  `id` int(11) NOT NULL,
  `machine_id` int(11) DEFAULT NULL,
  `mold_id` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `repeat_hrs` int(11) DEFAULT NULL,
  `repeat_oil` double DEFAULT NULL,
  `super_user_id` int(11) NOT NULL,
  `ass_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `molds`
--

CREATE TABLE `molds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cavity` double NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `molds`
--

INSERT INTO `molds` (`id`, `name`, `description`, `cavity`, `status`) VALUES
(0, 'Pandora', 'pand', 1, NULL),
(1, 'Andora', 'Andora', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `production_order`
--

CREATE TABLE `production_order` (
  `id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `production_request`
--

CREATE TABLE `production_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` double NOT NULL,
  `due_date` datetime DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `extension`, `address`, `department`, `position`, `type`, `online`) VALUES
(1, 'admin', 'c53e479b03b3220d3d56da88c4cace20', NULL, NULL, NULL, NULL, NULL, NULL, 'Super Admin', 0),
(2, 'Shafiq', 'b20bb95ab626d93fd976af958fbc61ba', 'shafiq.zabet@3mplast.com', '70393755', 243, 'Saida', 'IT', 'Tech', 'Super Admin', 1),
(3, 'Chbib', '202cb962ac59075b964b07152d234b70', 'mohammad.chbib@3mplast.com', '', 0, '', 'Maintenance', 'Engineer', 'Admin', 1),
(4, 'Abbas', '4297f44b13955235245b2497399d7a93', 'abbas@3mplast.com', '', 0, '', 'Maintenance', 'Tech', 'User', 1),
(5, 'Marco', '202cb962ac59075b964b07152d234b70', 'marco@3mplast.com', '', 0, '', 'Administration', 'CEO', 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `user_id`, `module`) VALUES
(1, 2, 'production'),
(2, 2, 'maintenance'),
(3, 2, 'setup'),
(4, 2, 'user'),
(5, 3, 'maintenance'),
(6, 3, 'setup'),
(7, 4, 'maintenance'),
(8, 5, 'production'),
(9, 5, 'maintenance'),
(10, 5, 'setup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `components_ix1` (`name`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_ix1` (`sku_code`);

--
-- Indexes for table `item_formula`
--
ALTER TABLE `item_formula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemformula_fk1` (`item_id`),
  ADD KEY `itemformula_fk2` (`component_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `machines_ix1` (`number`);

--
-- Indexes for table `machine_mold_comp`
--
ALTER TABLE `machine_mold_comp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machinemoldcomp_fk1` (`machine_id`),
  ADD KEY `machinemoldcomp_fk2` (`mold_id`);

--
-- Indexes for table `machine_status`
--
ALTER TABLE `machine_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machinestatus_fk1` (`machine_id`),
  ADD KEY `FK_machine_status_user_id` (`user_id`);

--
-- Indexes for table `maintenance_log`
--
ALTER TABLE `maintenance_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenancelog_fk1` (`part_id`),
  ADD KEY `maintenancelog_fk2` (`user_id`),
  ADD KEY `maintenancelog_fk3` (`error_id`),
  ADD KEY `maintenancelog_fk4` (`order_id`);

--
-- Indexes for table `maintenance_order`
--
ALTER TABLE `maintenance_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenanceorder_fk1` (`ass_user_id`),
  ADD KEY `maintenanceorder_fk2` (`super_user_id`),
  ADD KEY `maintenanceorder_fk3` (`machine_id`),
  ADD KEY `FK_maintenance_order_mold_id2` (`mold_id`);

--
-- Indexes for table `molds`
--
ALTER TABLE `molds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `molds_ix1` (`name`);

--
-- Indexes for table `production_order`
--
ALTER TABLE `production_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productionorder_fk1` (`request_id`),
  ADD KEY `productionorder_fk2` (`item_id`);

--
-- Indexes for table `production_request`
--
ALTER TABLE `production_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productionrequest_fk1` (`client_id`),
  ADD KEY `productionrequest_fk2` (`item_id`),
  ADD KEY `productionrequest_fk3` (`user_id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `spareparts_ix1` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_ix1` (`username`,`email`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useraccess_fk1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_formula`
--
ALTER TABLE `item_formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `machine_mold_comp`
--
ALTER TABLE `machine_mold_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `machine_status`
--
ALTER TABLE `machine_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maintenance_log`
--
ALTER TABLE `maintenance_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance_order`
--
ALTER TABLE `maintenance_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `production_order`
--
ALTER TABLE `production_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `production_request`
--
ALTER TABLE `production_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_formula`
--
ALTER TABLE `item_formula`
  ADD CONSTRAINT `itemformula_fk1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `itemformula_fk2` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`);

--
-- Constraints for table `machine_mold_comp`
--
ALTER TABLE `machine_mold_comp`
  ADD CONSTRAINT `machinemoldcomp_fk1` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`id`),
  ADD CONSTRAINT `machinemoldcomp_fk2` FOREIGN KEY (`mold_id`) REFERENCES `molds` (`id`);

--
-- Constraints for table `machine_status`
--
ALTER TABLE `machine_status`
  ADD CONSTRAINT `FK_machine_status_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `machinestatus_fk1` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`id`);

--
-- Constraints for table `maintenance_log`
--
ALTER TABLE `maintenance_log`
  ADD CONSTRAINT `maintenancelog_fk1` FOREIGN KEY (`part_id`) REFERENCES `spare_parts` (`id`),
  ADD CONSTRAINT `maintenancelog_fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `maintenancelog_fk3` FOREIGN KEY (`error_id`) REFERENCES `errors` (`id`),
  ADD CONSTRAINT `maintenancelog_fk4` FOREIGN KEY (`order_id`) REFERENCES `production_order` (`id`);

--
-- Constraints for table `maintenance_order`
--
ALTER TABLE `maintenance_order`
  ADD CONSTRAINT `maintenanceorder_fk1` FOREIGN KEY (`ass_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `maintenanceorder_fk2` FOREIGN KEY (`super_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `production_order`
--
ALTER TABLE `production_order`
  ADD CONSTRAINT `productionorder_fk1` FOREIGN KEY (`request_id`) REFERENCES `production_request` (`id`),
  ADD CONSTRAINT `productionorder_fk2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `production_request`
--
ALTER TABLE `production_request`
  ADD CONSTRAINT `productionrequest_fk1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `productionrequest_fk2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `productionrequest_fk3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_access`
--
ALTER TABLE `user_access`
  ADD CONSTRAINT `useraccess_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
