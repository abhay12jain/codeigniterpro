-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2023 at 03:12 PM
-- Server version: 10.2.26-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linuxmilcl_pratap`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_document`
--

CREATE TABLE `assign_document` (
  `id` int(11) NOT NULL,
  `tender_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_document`
--

INSERT INTO `assign_document` (`id`, `tender_id`, `document`, `document_type`, `document_name`, `remarks`, `submit_date`) VALUES
(3, 'T000101', 'cropped-small-size.jpg', 'Technical', 'dfsgsfgs', 'tender approved ', '2022-10-25 17:49:29'),
(6, '767654', 'cropped-small-size.jpg, 1666685989_09ade5e54086731d6b18.jpg', 'Financial, Technical', 'hfghfg, fgdfghfg', 'tender approved ', '2022-10-25 19:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `id` int(11) NOT NULL,
  `zone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`id`, `zone`, `state`, `circle`, `submit_date`) VALUES
(1, 'North', 'HARYANA', 'PTPL-CORPORATE', '2023-01-06 15:25:19'),
(2, 'North', 'PUNJAB', 'HIMACHAL', '2023-01-06 15:27:58'),
(3, 'North', 'UTTRAKHAND', 'UTTRAKHAND', '2023-01-06 15:29:23'),
(4, 'East', 'WEST BANGAL', 'SIKKIM', '2023-01-06 15:30:13'),
(5, 'East', 'WEST BANGAL', 'WEST BANGAL', '2023-01-06 15:30:54'),
(6, '10', 'test', 'test circle', '2023-01-06 15:37:48'),
(7, 'North', 'DELHI', 'DELHI', '2023-01-06 15:38:23'),
(8, 'East', 'ODISHA', 'ODISHA', '2023-01-06 15:39:00'),
(9, 'North', 'UTTAR PRADESH', 'UP-E', '2023-01-06 15:39:58'),
(10, 'West', 'RAJASTHAN', 'RAJASTHAN', '2023-01-06 15:41:16'),
(11, 'North', 'PUNJAB', 'PUNJAB', '2023-01-06 15:41:56'),
(12, 'East', 'ODISHA', 'ODISHA', '2023-01-06 15:43:04'),
(13, 'East', 'ODISHA', 'ODISHA', '2023-01-06 15:43:22'),
(14, 'East', 'ASSAM', 'NESA-TELECOM', '2023-01-06 15:44:26'),
(15, 'West', 'MAHARASHTRA-2', 'MH-2', '2023-01-06 15:45:23'),
(16, 'West', 'MAHARASHTRA-1', 'MH-1&G', '2023-01-06 15:46:05'),
(17, 'West', 'MADHYA PRADESH', 'MADHYA PRADESH', '2023-01-06 15:47:02'),
(18, 'South', 'KARNATAKA', 'KARNATAKA', '2023-01-06 15:47:51'),
(19, 'South', 'ANDHRA PRADESH', 'ANDHRA PRADESH', '2023-01-06 15:48:43'),
(20, 'South', 'KARNATAKA', 'KARNATAKA', '2023-01-06 15:49:34'),
(21, 'North', 'JAMMU AND KASHMIR', 'J&K', '2023-01-06 15:50:27'),
(22, 'West', 'GUJARAT', 'GUJARAT', '2023-01-06 15:51:05'),
(23, 'North', 'DELHI', 'DELHI', '2023-01-06 15:51:33'),
(24, 'North', 'DELHI', 'DELHI', '2023-01-06 15:51:51'),
(25, 'West', 'CHHATTISGARH', 'CHHATTISGARH', '2023-01-06 15:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `zone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `zone`, `company_name`, `state`, `circle`, `submit_date`) VALUES
(2, 'East', 'milleniance ', 'KARNATAKA ', 'DELHI', '2023-01-05 23:09:07'),
(3, 'North', 'Pratap Technocrats India Pvt Ltd. ', 'DELHI', 'Select Circle', '2023-01-08 01:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `corrigendum`
--

CREATE TABLE `corrigendum` (
  `id` int(11) NOT NULL,
  `upload_document` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tender_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corrigendum`
--

INSERT INTO `corrigendum` (`id`, `upload_document`, `add_description`, `tender_id`, `submit_date`) VALUES
(2, '1664271186_2c10e74a9664f3357b96.jpg', 'fdgdfg', 'T000102', '2022-09-27 17:33:06'),
(4, '1664360349_3ef12336051dfa7a99fd.jpg', 'fgdgdfgf', 'Tender-101 ', '2022-09-28 18:19:09'),
(5, '1664368096_419d1bbcc0eda48ddd71.jpg', 'dfgdf', '345345', '2022-09-28 20:28:16'),
(6, '1664870102_833344da2c1027587a62.jpg', 'ghjfhfghjf', '213213dsaf', '2022-10-04 15:55:02'),
(7, '1665042155_4adbe1326c5ec8e1614b.jpg', 'fdg', 'gdd', '2022-10-06 15:42:35'),
(16, '1665401778_2ae70badf147cb8ab620.jpg', 'grter', 'dfgfd5342', '2022-10-10 19:36:18'),
(17, '1665407612_dd81e7643b8fe3849f59.jpg', 'ytryyrt', 'fdfgdfg', '2022-10-10 21:13:32'),
(19, '1665407816_6abbb5803aec99d51321.jpg', 'dgffdgfgh98087', '234567', '2022-10-10 21:16:56'),
(22, '1666674797_33004afe6481286b8e94.jpg', 'jgjg', '767654', '2022-10-25 13:13:17'),
(27, '1669699143_5935da13cd67707292bd.pdf', 'Tender Document Corrigendum ', 'TN-000001', '2022-11-29 13:19:03'),
(28, '1670152296_3148ac4ad3967b398ec3.pdf', 'Test Description', 'T068811 ', '2022-12-04 19:11:36'),
(29, '1671440735_e60e416472bbe5ed6ddd.pdf', 'Date extension letter', '2022_BSNL_136250_1', '2022-12-19 17:05:35'),
(30, '1672934888_a6e22a6cd66678958e56.png', 'fwerf', '435345', '2023-01-06 00:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `state_code` varchar(256) NOT NULL,
  `circle` varchar(256) NOT NULL,
  `circle_code` varchar(256) NOT NULL,
  `organization_name` text NOT NULL,
  `department` text NOT NULL,
  `division` text NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `zone`, `state`, `state_code`, `circle`, `circle_code`, `organization_name`, `department`, `division`, `submit_date`) VALUES
(6, 'North', 'HARYANA', 'AP', 'PTPL-CORPORATE', 'CORP', 'Bharat Sanchar Nigam Limited North', 'Haryana Telecom Circle ', 'CE(Electrical)', '2022-09-12 14:01:29'),
(9, 'West', 'MAHARASHTRA-1', 'MH', 'MH-1&G', 'MH', 'Bharat Sanchar Nigam Limited  West', 'West Department', 'CE(Electrical) div', '2022-10-18 19:44:28'),
(12, 'South', 'KARNATAKA', 'KA', 'KARNATAKA', 'KR', 'Bharat Sanchar Nigam Limited  South', 'South Department', 'CE(Electrical) div', '2022-10-18 19:44:28'),
(13, 'East', 'WEST BANGAL', 'WB', 'SIKKIM', 'SK', 'Bharat Sanchar Nigam Limited East', 'East Department', 'CE(Electrical) div East', '2022-10-18 19:44:28'),
(14, 'West', 'MAHARASHTRA-2', 'MR', 'MH-2', 'MR', 'Bharat Sanchar Nigam Limited  West', 'Test west', 'Test division', '2022-11-29 12:48:14'),
(15, 'East', 'WEST BANGAL', 'WB', 'WEST BANGAL', 'WB', 'Bharat Sanchar Nigam Limited East', 'Odhisa Telecom Circle ', 'GMTD,Balasore', '2022-12-19 16:46:30'),
(16, 'West', 'RAJASTHAN', 'RJ', 'RAJASTHAN', 'RJ', 'Bharat Sanchar Nigam Limited  West', 'Test west', 'Test division', '2022-11-29 12:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `document_name`
--

CREATE TABLE `document_name` (
  `id` int(11) NOT NULL,
  `document_file` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_name`
--

INSERT INTO `document_name` (`id`, `document_file`, `document_type`, `name`, `submit_date`) VALUES
(1, '', 'Common Document', 'Certificate of incorpoaration', '2022-11-08 16:57:13'),
(2, '', 'Common Document', 'Gumasta certificate', '2022-11-08 16:57:36'),
(3, '', 'Common Document', 'Labour registration Certificate', '2022-11-08 16:57:52'),
(4, '', 'Common Document', 'Company MOA', '2022-11-08 16:58:03'),
(5, '', 'Common Document', 'Company AOA', '2022-11-08 16:58:18'),
(6, '', 'Common Document', 'Director List', '2022-11-08 16:58:27'),
(7, '', 'Common Document', 'Equipment List', '2022-11-08 16:58:37'),
(8, '', 'Common Document', 'Manpower List', '2022-11-08 16:58:46'),
(9, '', 'Common Document', 'Keypersonal list', '2022-11-08 17:00:44'),
(10, '', 'Common Document', 'MSME', '2022-11-08 17:00:53'),
(11, '', 'Common Document', 'NSIC', '2022-11-08 17:01:03'),
(12, '', 'Common Document', 'DIPP', '2022-11-08 17:01:12'),
(13, '', 'Common Document', 'CPPP Declaration', '2022-11-08 17:01:22'),
(14, '', 'Common Document', 'CPPP Portal screenshot', '2022-11-08 17:01:30'),
(15, '', 'Common Document', 'Adharcard of director', '2022-11-08 17:01:41'),
(16, '', 'Common Document', 'Blacklist Declaration', '2022-11-08 17:01:50'),
(17, '', 'Common Document', 'Addition/deletion/subratction Declaration', '2022-11-08 17:03:26'),
(18, '', 'Common Document', 'UAM Declaration', '2022-11-08 17:03:45'),
(19, '', 'Common Document', 'GST blacklist declaration', '2022-11-08 17:03:53'),
(20, '', 'Common Document', 'Indemnity Declaration', '2022-11-08 17:04:03'),
(21, '', 'Common Document', 'Clause By Clause and NO Deviation', '2022-11-08 17:04:13'),
(22, '', 'Common Document', 'Labour Declaration', '2022-11-08 17:04:23'),
(23, '', 'Common Document', 'Local Office Declaration', '2022-11-08 17:04:32'),
(24, '', 'Common Document', 'Experinece Certificate', '2022-11-08 17:04:39'),
(25, '', 'Financial', 'GST', '2022-11-08 17:04:59'),
(26, '', 'Financial', 'Pancard', '2022-11-08 17:05:10'),
(27, '1671605618_ab740e78c32837bf2555.pdf', 'Financial', 'ESI', '2022-11-08 17:05:30'),
(28, '', 'Financial', 'Pancard', '2022-11-08 17:06:23'),
(29, '1671605618_ab740e78c32837bf2722.pdf', 'Financial', 'ESI', '2022-11-08 17:06:31'),
(30, '', 'Financial', 'EPF', '2022-11-08 17:06:39'),
(31, '', 'Financial', 'Turnover', '2022-11-08 17:06:47'),
(32, '', 'Financial', 'ITR', '2022-11-08 17:06:56'),
(33, '', 'Financial', 'Balance sheet', '2022-11-08 17:07:05'),
(34, '', 'Financial', 'Profit loss statement', '2022-11-08 17:07:14'),
(35, '', 'Financial', 'Solvency', '2022-11-08 17:07:25'),
(36, '', 'Technical', '6A- Underatking & Declaration (01)', '2022-11-08 17:07:50'),
(37, '', 'Technical', '6A- Underatking & Declaration (02)', '2022-11-08 17:07:59'),
(38, '', 'Technical', '6B Near Relative (1)', '2022-11-08 17:08:09'),
(39, '', 'Technical', '6B Near Relative (2)', '2022-11-08 17:08:17'),
(40, '', 'Technical', 'LOA', '2022-11-08 17:08:27'),
(41, '', 'Technical', 'Bidder profile', '2022-11-08 17:09:11'),
(42, '', 'Technical', 'Power of Attorney', '2022-11-08 17:09:22'),
(43, '', 'Technical', 'Board of Resolution', '2022-11-08 17:09:30'),
(88, '1672819680_61d9cb7f5a1e5f71c308.png', 'Technical', 'LOA', '2023-01-04 16:08:00'),
(89, '1672819752_21de71a3a46fa63d69e2.png', 'Common Document', 'NSIC', '2023-01-04 16:09:12'),
(90, '1672833313_2554ebbfc5652209a7a7.pdf', 'Technical', '6A- Underatking & Declaration (01)', '2023-01-04 19:55:13'),
(92, '1672835618_44426ffa542f73189107.png', 'Technical', '6B Near Relative (2)', '2023-01-04 20:33:38'),
(93, '1672835693_3dd2bf395c4d76a31de4.png', 'Financial', 'GST', '2023-01-04 20:34:53'),
(94, '1672839184_572619b8b7ae6214fbd1.pdf', 'Technical', '6A- Underatking & Declaration (02)', '2023-01-04 21:33:04'),
(95, '1672839184_1386618a2e0d487ab783.pdf', 'Financial', 'ITR', '2023-01-04 21:33:04'),
(96, '1672840557_e2c849fba21073f21583.pdf', 'Technical', '6A- Underatking & Declaration (01)', '2023-01-04 21:55:57'),
(97, '1672840557_48ebf774f0f4b77ab2cc.pdf', 'Financial', 'Pancard', '2023-01-04 21:55:57'),
(116, 'Techpdf.png', 'Technical', '6A- Underatking & Declaration (01)', '2023-01-17 20:21:18'),
(117, 'Techpdf.png', 'Technical', '6A- Underatking & Declaration (02)', '2023-01-17 20:21:45'),
(118, 'Finpdf.png', 'Financial', 'GST', '2023-01-17 20:22:34'),
(119, 'Finpdf.png', 'Financial', 'Pancard', '2023-01-17 20:23:03'),
(120, 'Commpdf.png', 'Common Document', 'Company MOA', '2023-01-17 20:23:39'),
(121, 'Commpdf.png', 'Common Document', 'Company AOA', '2023-01-17 20:23:55'),
(122, 'Howtoaceyourresume,GTIM.pdf', 'Technical', '6A- Underatking & Declaration (01)', '2023-01-19 19:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `document_upload`
--

CREATE TABLE `document_upload` (
  `id` int(11) NOT NULL,
  `document_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_name_val` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tender_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_upload`
--

INSERT INTO `document_upload` (`id`, `document_name`, `document_name_val`, `document_description`, `document_type`, `tender_id`, `document_file`, `submit_date`, `status`) VALUES
(1, '1664266716_bb8e5abb01494cbf5652.jpg', '', '', 'nit_document', 'T000101', '', '2022-09-27', ''),
(2, '1664266716_d0b6c2eeaff44a9c683c.jpg', '', '', 'workitem_document', 'T000101', '', '2022-09-27', ''),
(4, '1664271186_b53c3a662589ef7d519d.jpg', '', '', 'workitem_document', 'T000102', '', '2022-09-27', ''),
(6, 'cropped-small-size.jpg', '', '', 'Certification', '', '', '2022-09-27', 'Deny'),
(8, '1664360349_994b8c10ff923bc12db7.jpg', '', '', 'nit_document', 'Tender-101 ', '', '2022-09-28', ''),
(9, '1664360349_4bdbb8c3dfcbb9896eba.jpg', '', '', 'nit_document', 'Tender-101 ', '', '2022-09-28', ''),
(16, '1665042155_904e0ad57d4d21779bb7.jpg', '', '', 'nit_document', 'gdd', '', '2022-10-06', ''),
(17, '1665042155_e3697ff5c5b3e84cf61f.jpg', '', '', 'workitem_document', 'gdd', '', '2022-10-06', ''),
(27, '1665401778_4b7bdd24aaf0a158420a.jpg', '', '', 'workitem_document', 'dfgfd5342', '', '2022-10-10', ''),
(28, '1665407612_386d87122dc501f6da18.jpg', '', '', 'nit_document', 'fdfgdfg', '', '2022-10-10', ''),
(29, '1665407612_a1b4843c4c450a4ed6f3.jpg', '', '', 'workitem_document', 'fdfgdfg', '', '2022-10-10', ''),
(32, '1665407816_c090ad78aa9dcff7c91e.jpg', '', '', 'nit_document', '234567', '', '2022-10-10', ''),
(33, '1665407816_c41f0b8c0bcfd96559bd.jpg', '', '', 'workitem_document', '234567', '', '2022-10-10', ''),
(68, '1666775594_d28c910dea71ae87d39c.jpg', '', '', 'nit_document', '767654', '', '2022-10-26', ''),
(70, '1666775763_06f04c6b38a30190be21.jpg', '', '', 'workitem_document', '767654', '', '2022-10-26', ''),
(71, '1669699143_96684dd96d4c39d682aa.pdf', '', '', 'nit_document', 'TN-000001', '', '2022-11-29', ''),
(72, '1669699143_d75aff9c7e895db61e8d.pdf', '', '', 'workitem_document', 'TN-000001', '', '2022-11-29', ''),
(73, '1669699143_20f6e894cdd19295f33f.xls', '', '', 'workitem_document', 'TN-000001', '', '2022-11-29', ''),
(74, '1670152296_ba90b1a199033e5c9a46.pdf', 'PAN', 'Test Description', 'nit_document', 'T068811 ', '', '2022-12-04', ''),
(75, '1670152296_6cd1bede189c7fc910bd.pdf', 'Other', 'Test Description', 'workitem_document', 'T068811 ', '', '2022-12-04', ''),
(76, '1671440735_02fd11a0a890d04e1b18.pdf', 'NIT document zone -III', 'NIT document zone -III, BSNL', 'nit_document', '2022_BSNL_136250_1', '', '2022-12-19', ''),
(77, '1671440735_1afd9434fdfb97231b78.xls', 'Financial', 'price bid', 'workitem_document', '2022_BSNL_136250_1', '', '2022-12-19', ''),
(78, '1672934888_2aa5d371081887f87532.png', 'ferfer', 'rfe', 'nit_document', '435345', '', '2023-01-06', ''),
(79, '1672934888_b309853d15d7735b3dd0.png', 'Financial', 'erfre', 'workitem_document', '435345', '', '2023-01-06', ''),
(80, '', '', '', 'Technical', '', 'pdf.png', '2023-01-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `document_users`
--

CREATE TABLE `document_users` (
  `id` int(11) NOT NULL,
  `employe_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conform_password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_users`
--

INSERT INTO `document_users` (`id`, `employe_id`, `company_name`, `full_name`, `email_id`, `phone_no`, `password`, `conform_password`, `user_image`, `circle`, `state`, `role`, `zone`, `submit_date`) VALUES
(2, 'EMP-555', 'Bharat Sanchar Nigam Limited', 'vinit shukla', 'vinit@milleniance.com', '7856663344', '$2y$10$eAgEBojvHMo8BGo7YGBd9expdkPt7DsN6tU7W5bTNYOSusC4rE6.C', '$2y$10$6wRFSv65UcQ0ie5/dsYRjOeSyZdtD2aUG4R.U9sGD/v6Ow6M3EwMm', '', 'DELHI', '', 'tender_creater,tender_approver,price_checker', 'North', '03-01-2023'),
(3, 'emp-1014', 'Bharat Sanchar Nigam Limited', 'Farhan Haider', 'farhan.haider@milleniance.com', '7985567797', '$2y$10$iWG4XR8HJN08Vv8rqUCacuOAwBRfSA1sdZ3V2AVj8VeawrlfP.C8O', '', '', 'tryjty', '', 'admin', 'North', '11-12-2022'),
(8, 'EMP-8977', 'Pratap', 'Rahul Jain', 'rahul.jain@pratap.co.in', '9650293606', '$2y$10$lNUJVHXsSfX2j0/sR7MWieBP8Xb6GAYPsGoxJ.tNxpdcTaeQrypMm', '', '', 'New Module', '', 'admin', 'North', '0000-00-00 00:00:00'),
(9, 'Emp-1122', 'Bharat Sanchar Nigam Limited', 'Alish', 'alish@gmail.com', '7835010555', '$2y$10$c8S7n3Vh3hJmdnvqr2z1vucYdEauuqe705pbqT01ok56B50F11wC6', '', '', '', '', 'Financial', 'North', '09-01-2023'),
(16, '121', 'Pratap Technocrats ', 'Rahul Jain ', 'rahul.jain1288@pratap.co.in', '9650293606', '$2y$10$AoyKmnxPVI9KtWqm9XmtJ.hjYBTPDoGZorWf/Qno0U8IN.sU/W7KS', '', '', '', '', 'tender_approver', 'West', '09-01-2023'),
(17, '121454', 'Pratap Technocrats', 'Priyanka Nandan', 'priyanka.nandan@pratap.co.in', '123456', '$2y$10$xD8631qGg5MnnYeo/kFJY.AOiR3tP0X9MAZxdCRv6zapL8mfvat2a', '$2y$10$ldM5xAhwHanzNTBnKSdkfO/3UoYPPRYk6MtIdzsX8Wyh9z/jDJMIa', '', '', '', 'tender_creater', 'East', '03-01-2023'),
(18, '12345', 'milleniance ', 'Priyanka ', 'priyanka@pratap.co.in', '999999999', '$2y$10$RJ10J4v7Xzu0HryaOxxO8eJCnZdrZEhL1/AysdvmZtftldEfX5SXe', '$2y$10$YGPItyfu3UTrXsK.AQNw7eeXlCVyK1yQYOMSDHRanpYwFbtKl0ZrC', '', 'PTPL-CORPORATE', '', 'Technical', 'East', '10-01-2023'),
(19, '1234555', 'Pratap Technocrats', 'priyanka Technical approval', 'priyanka12@pratap.co.in', '', '$2y$10$tnstVAmHU6sp35P9qy7M7OoMEl2W7CrO/t8I.vwwTg0LQg7womScK', '', '', '', '', 'document_approver', 'East', '19-12-2022'),
(20, '123467', 'milleniance ', 'Rahul Jain ', 'rj1288@gmail.com', '999999999', '$2y$10$q78BDJzhZ0aPkJqfN7JCQO0.vjFoTGiwlt8GL.ZNoewUfJV2eZOQm', '', '', 'PTPL-CORPORATE', '', 'Technical', 'East', '10-01-2023'),
(29, 'E001', 'Bharat Sanchar Nigam Limited  West', 'Farhan', 'farhan.haider11@milleniance.com', '78466457457', '$2y$10$CsSWPs7Z2XznxWcuKmU8i.2Owfq4ove3wrMV/oRWBvY1k0WvyNXCy', '', '', 'PTPL-CORPORATE,KARNATAKA', '', 'tender_creater', 'East', '06-01-2023'),
(30, 'vinit02', 'milleniance ,Pratap Technocrats India Pvt Ltd. ', 'vinit shukla', 'vinitshukl412@gmail.com', '456867498', '$2y$10$1cXSrOmcf10hDisIp7GHfO.xavlARGVwT8ycMp/820FwpmuNe.yua', '', '', 'UTTRAKHAND,WEST BANGAL,test circle', '', 'admin', 'West', '13-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `pd_users`
--

CREATE TABLE `pd_users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conform_password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pd_users`
--

INSERT INTO `pd_users` (`id`, `employee_id`, `company_name`, `module`, `role`, `first_name`, `full_name`, `last_name`, `email_id`, `phone_number`, `password`, `conform_password`, `user_image`, `fb_link`, `linkedin_link`, `gplus_link`, `status`, `circle`, `submit_date`, `updated_at`) VALUES
(1, '', '', '', '', 'Farhan', '', 'Haider', 'farhan.haider@milleniance.com', '7835010556', '$2y$10$l5X0Egaw7qUxHpiIhD1nsOHokG3.3HPzKhhWOCzl4P5lKXpYcSQp.', '', '', '', '', '', 'Active', '', '07-07-2022', '05-07-2022 10:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `product_category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_category`, `sub_category`, `submit_date`) VALUES
(2, 'OFC Laying Works ', 'HDD Works', '0000-00-00 00:00:00'),
(3, 'OFC Laying Works ', 'Aerial ', '0000-00-00 00:00:00'),
(4, 'OFC Laying Works1 ', 'T&D', '0000-00-00 00:00:00'),
(5, 'OFC Laying Works ', 'All Works ', '0000-00-00 00:00:00'),
(6, 'OFC Laying Works ', 'Patch Works', '0000-00-00 00:00:00'),
(14, 'OFC Laying Works test', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rfp_extractor`
--

CREATE TABLE `rfp_extractor` (
  `id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL,
  `document_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_file` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rfp_extractor`
--

INSERT INTO `rfp_extractor` (`id`, `tender_id`, `document_type`, `document_file`) VALUES
(1, 0, '1', '1'),
(2, 0, '1', '2'),
(3, 0, '1', '2'),
(4, 0, '6', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tender_assign`
--

CREATE TABLE `tender_assign` (
  `id` int(11) NOT NULL,
  `user_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tender_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assing_user` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tender_assign`
--

INSERT INTO `tender_assign` (`id`, `user_id`, `tender_id`, `assing_user`, `user_type`, `submit_date`) VALUES
(6, '2', 'T000101', 'vinit shukla ', 'Technical', '2022-11-15 15:40:59'),
(7, '3', 'T000101', 'test-2', 'Financial', '2022-11-16 14:47:06'),
(8, '2', 'Tender-101 ', 'vinit shukla ', 'Technical', '2022-11-16 14:49:39'),
(9, '4', '767654', 'Select Users', 'One Time', '2022-11-16 14:58:59'),
(10, '', 'T000101', 'vinit shukla ', 'Technical', '2022-11-16 17:18:58'),
(11, '', 'T000101', 'test-2', 'Financial', '2022-11-16 20:39:06'),
(12, '', 'T000101', 'vinit shukla ', 'Technical', '2022-11-29 12:47:39'),
(13, '', 'TN-000001', 'vinit shukla ', 'Technical', '2022-11-29 13:30:23'),
(14, '', 'T000101', 'vinit shukla ', 'Technical', '2022-11-30 01:39:30'),
(15, '', 'T068811 ', 'vinit shukla ', 'Technical', '2022-12-04 23:02:18'),
(16, '', 'T000101', 'Raj', 'Financial', '2022-12-04 23:02:34'),
(17, '', 'T000101', 'test-3', 'Common', '2022-12-04 23:02:41'),
(18, '', 'T068811 ', 'vinit shukla ', 'Technical', '2022-12-04 23:04:07'),
(19, '', 'T068811 ', 'Raj', 'Financial', '2022-12-04 23:04:14'),
(20, '', 'T068811 ', 'test-3', 'Common', '2022-12-04 23:04:19'),
(21, '', 'T000101', 'Select Users', 'One Time', '2022-12-08 14:02:06'),
(22, '', 'T000101', 'Priyanka ', 'Technical', '2022-12-19 17:17:00'),
(23, '', '2022_BSNL_136250_1', 'Priyanka ', 'Technical', '2023-01-10 14:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `tender_document`
--

CREATE TABLE `tender_document` (
  `id` int(11) NOT NULL,
  `tender_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_file` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tender_document`
--

INSERT INTO `tender_document` (`id`, `tender_id`, `document_list`, `document_name`, `document_type`, `document_file`, `status`, `final_status`, `remarks`, `submit_date`) VALUES
(25, '', 'MSME', '', 'Common Document', '1667994748_6f1abec699fbe8fdbd4b.jpg', '', '', '', '2022-11-09 19:52:28'),
(27, '', '6B Near Relative (1)', '', 'Technical', '1667996435_25ac63284e32df223df4.jpg', 'Aproved', '', 'h', '2022-11-09 20:20:35'),
(41, 'Tender-101', 'ESI', '', 'Financial', '1669961235_b685c5ae9772ad3238ab.png', 'Pending', '', '', '2022-12-02 14:07:15'),
(48, '', '', 'Test doc', 'Financial', '', '', '', '', '2022-12-04 03:52:47'),
(49, 'T068811', '', 'Pan card', 'Technical', '1670166377_487cc0c2862187ce989e.pdf', 'Checked', 'Approved', '', '2022-12-04 23:06:17'),
(50, 'T068811', '', 'GST doc', 'Financial', '1670166430_b09c96e508c25a1a81ea.pdf', 'Checked', 'Approved', '', '2022-12-04 23:07:10'),
(51, 'T068811', '', 'LRC', 'Common Document', '1670166465_244cb0e1c88a4a1529b8.pdf', 'Pending', '', '', '2022-12-04 23:07:45'),
(52, 'T068811', '', 'Tech', 'Technical', '1670166556_76e71ac22f9caad1b623.pdf', 'Checked', 'Approved', '', '2022-12-04 23:09:16'),
(55, 'T068811', '', 'test', 'Technical', '1671370629_c931f389f08e5c2781d4.pdf', 'Pending', '', '', '2022-12-18 21:37:09'),
(56, 'T068811', '', 'test', 'Technical', '1671370900_7a617ab80843744ff840.jpg', 'Pending', '', '', '2022-12-18 21:41:40'),
(57, 'T068811', '6A- Underatking & Declaration (02)', 'test', 'Technical', '1671370997_8e3cc45c47453850eca1.jpg', 'Checked', 'Rejected', '', '2022-12-18 21:43:17'),
(58, '2022_BSNL_136250_1', '6A- Underatking & Declaration (01)', '6A -underatking & Declaration', 'Technical', '1671442615_09411b98fbcad1cce5c7.pdf', 'Pending', '', '', '2022-12-19 17:36:55'),
(59, '2022_BSNL_136250_1', '6B Near Relative (1)', 'Near Realtive-Shakti Singh', 'Technical', '1671442654_01fabff018fd75defe60.pdf', 'Pending', '', '', '2022-12-19 17:37:34'),
(60, '2022_BSNL_136250_1', '6B Near Relative (2)', 'Near Relative- Devendra Singh', 'Technical', '1671442684_7d8dae989b7b8c1a4c55.pdf', 'Pending', '', '', '2022-12-19 17:38:04'),
(61, '2022_BSNL_136250_1', 'Bidder profile', 'Bidder profile', 'Technical', '1671442730_89d2b8e9e9f912663f35.pdf', 'Pending', '', '', '2022-12-19 17:38:50'),
(62, '2022_BSNL_136250_1', 'Power of Attorney', 'POA', 'Technical', '1671442832_3b75f4f021b665979ac8.pdf', 'Pending', '', '', '2022-12-19 17:40:32'),
(63, '2022_BSNL_136250_1', 'Board of Resolution', 'BOR', 'Technical', '1671442858_2ed53fe558078f86792d.pdf', 'Pending', '', '', '2022-12-19 17:40:58'),
(64, '2022_BSNL_136250_1', 'other', 'ALL annexures', 'Technical', '1671442934_7aa83f184228a9eec5c3.pdf', 'Pending', '', '', '2022-12-19 17:42:14'),
(73, '435345', 'other', '001test', '', 'pdf.png', 'Pending', '', '', '13-01-2023'),
(75, 'T000101', '6A- Underatking & Declaration (01)', '', 'Technical', '1672833313_2554ebbfc5652209a7a7.pdf,1672840557_e2c849fba21073f21583.pdf,Techpdf.png,HowtoaceyourresumeGTIM.pdf', 'Checked', 'Approved', '', '21-01-2023'),
(76, 'T000101', 'GST', '', 'Financial', '1672835693_3dd2bf395c4d76a31de4.png,Finpdf.png', 'Checked', 'Approved', '', '21-01-2023'),
(77, 'T000101', 'Company MOA', '', 'Common Document', 'Commpdf.png', 'Checked', 'Approved', '', '21-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tender_price`
--

CREATE TABLE `tender_price` (
  `id` int(11) NOT NULL,
  `tender_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp(),
  `add_description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tender_price`
--

INSERT INTO `tender_price` (`id`, `tender_id`, `price`, `remarks`, `status`, `submit_date`, `add_description`) VALUES
(4, 'tender_id', '1666682250_f6dba23ec0e01cb0db38.jpg', '', 'Rejected', '2022-10-25 15:17:30', ''),
(7, '767654', '1666682722_d1af6531b631e9103804.jpg', '', 'Approved', '2022-10-25 15:25:22', ''),
(8, 'T000101', '1666697271_dd166c51c7aa8b68ebc0.jpg', '', 'Approved', '2022-10-25 19:27:51', ''),
(9, 'Tender-101 ', '1666776543_f01332c7478d048bf9b3.jpg', '', 'Rejected', '2022-10-26 17:29:03', ''),
(11, 'T068811 ', '1670167384_dcbf70291e3d468f7ee1.pdf', '', 'Approved', '2022-12-04 23:23:04', ''),
(12, 'T068811 ', '1671298234_2a59982f4ddda99dfa6d.pdf', '', 'Pending', '2022-12-18 01:30:34', ''),
(13, '767654', '1671301936_ea3c67d6cc40d6d0c35f.pdf', '', 'Approved', '2022-12-18 02:32:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `tender_upload`
--

CREATE TABLE `tender_upload` (
  `id` int(11) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `client_nme` text NOT NULL,
  `organization_nam` varchar(256) NOT NULL,
  `circle` varchar(256) NOT NULL,
  `tender_refer_number` varchar(256) NOT NULL,
  `tender_id` varchar(256) NOT NULL,
  `tender_types` varchar(256) NOT NULL,
  `tender_category` varchar(256) NOT NULL,
  `general_technical_evaluation_allowed` varchar(256) NOT NULL,
  `is_multi_currency` varchar(256) NOT NULL,
  `no_covers` varchar(256) NOT NULL,
  `payment_mode` varchar(256) NOT NULL,
  `deparment` varchar(256) NOT NULL,
  `allow_two_stages_bidding` varchar(256) NOT NULL,
  `division` varchar(256) NOT NULL,
  `tender_fee_in` varchar(256) NOT NULL,
  `fee_payable_at` varchar(256) NOT NULL,
  `fee_payable_to` varchar(256) NOT NULL,
  `tender_fee_exception_allowed` varchar(256) NOT NULL,
  `tender_fee_exception_allowed_for` varchar(256) NOT NULL,
  `tender_fee_type` varchar(256) NOT NULL,
  `tender_document_number` varchar(256) NOT NULL,
  `tender_payment_mode` varchar(256) NOT NULL,
  `emd_amount_in` varchar(256) NOT NULL,
  `emd_fee_type` varchar(256) NOT NULL,
  `if_exemption_allowed` varchar(256) NOT NULL,
  `emd_exemption_allowed_for` varchar(256) NOT NULL,
  `emd_document_number` varchar(256) NOT NULL,
  `emd_payable_to` varchar(256) NOT NULL,
  `emd_payable_at` varchar(256) NOT NULL,
  `emd_payment_mode` varchar(256) NOT NULL,
  `emd_percentage` varchar(256) NOT NULL,
  `title` text NOT NULL,
  `product_category` varchar(256) NOT NULL,
  `work_description` text NOT NULL,
  `bid_validity_days` varchar(256) NOT NULL,
  `pre_qulifiction_details` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `pre_bid_meeting_date` varchar(50) NOT NULL,
  `remarks` varchar(256) NOT NULL,
  `allow_preferential_bidder` varchar(256) NOT NULL,
  `tender_value_in` varchar(256) NOT NULL,
  `sub_category` varchar(256) NOT NULL,
  `contract_type` varchar(256) NOT NULL,
  `period_of` varchar(256) NOT NULL,
  `location` text NOT NULL,
  `pre_bid_meeting` text NOT NULL,
  `pre_bid_meeting_address` text NOT NULL,
  `bid_opening_place` text NOT NULL,
  `should_allowed_nda_tender` text NOT NULL,
  `tender_publish_date` varchar(50) NOT NULL,
  `pre_bid_date` varchar(50) NOT NULL,
  `document_start_date` varchar(50) NOT NULL,
  `document_submit_date` varchar(50) NOT NULL,
  `bid_submission_start_date` varchar(50) NOT NULL,
  `bid_opening_date` varchar(50) NOT NULL,
  `bid_submission_end_date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `tname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `tender_status` varchar(256) NOT NULL,
  `approve_remarks` varchar(256) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime NOT NULL DEFAULT current_timestamp(),
  `tags` text NOT NULL,
  `submit_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tender_upload`
--

INSERT INTO `tender_upload` (`id`, `zone`, `client_nme`, `organization_nam`, `circle`, `tender_refer_number`, `tender_id`, `tender_types`, `tender_category`, `general_technical_evaluation_allowed`, `is_multi_currency`, `no_covers`, `payment_mode`, `deparment`, `allow_two_stages_bidding`, `division`, `tender_fee_in`, `fee_payable_at`, `fee_payable_to`, `tender_fee_exception_allowed`, `tender_fee_exception_allowed_for`, `tender_fee_type`, `tender_document_number`, `tender_payment_mode`, `emd_amount_in`, `emd_fee_type`, `if_exemption_allowed`, `emd_exemption_allowed_for`, `emd_document_number`, `emd_payable_to`, `emd_payable_at`, `emd_payment_mode`, `emd_percentage`, `title`, `product_category`, `work_description`, `bid_validity_days`, `pre_qulifiction_details`, `pincode`, `pre_bid_meeting_date`, `remarks`, `allow_preferential_bidder`, `tender_value_in`, `sub_category`, `contract_type`, `period_of`, `location`, `pre_bid_meeting`, `pre_bid_meeting_address`, `bid_opening_place`, `should_allowed_nda_tender`, `tender_publish_date`, `pre_bid_date`, `document_start_date`, `document_submit_date`, `bid_submission_start_date`, `bid_opening_date`, `bid_submission_end_date`, `tname`, `address`, `tender_status`, `approve_remarks`, `start_date`, `end_date`, `tags`, `submit_date`) VALUES
(1, 'zone', 'Bharat Sanchar Nigam Limited ', '', '', 'NO.CGPYP-PLG/41(11)/211/2022-PLG KYP', 'T000101', 'Open Tender', 'Services', 'Yes', 'Yes', '5', 'Offline ', 'Department', 'Yes', 'Division', '127877', '', '', 'Yes', 'MSME', 'Offline ', '', 'Tender Payment Mode', '325435', 'Offline ', 'Yes', 'MSME', '', '', '', 'EMD Payment Mode', '', 't45tg5t56t', 'Product Category', 'grtgrtgtr', 'tgregtr', 'gtrgr', 2147483647, '2022-09-02', 'gtrhfgethg', 'bgfbbgf', 'bgfbgf', 'Sub Category', 'Tender Singh Stage', 'bggfbg', 'delhi', 'gf', 'fghdgh', 'fghfh', 'Yes', '2022-09-09', '2022-09-09', '2022-09-09', '2022-09-09', '2022-09-09', '2022-09-09', '2022-09-09', 'Test', 'Delhi', 'Rejected', '', '2022-09-27 16:18:36', '2022-09-27 16:18:36', 'test', ''),
(3, '', 'Bharat Sanchar Nigam Limited', '', '', '675675346', 'Tender-101 ', 'Open Tender ', 'Work ', 'Yes', 'Yes', '34', 'Offline ', 'Haryana Telecom Circle', 'Yes', 'GMTD,Rohtak ', '3242', '', '', 'Yes', 'MSME', 'Offline ', '', '', '34234', 'Online ', 'Yes', 'MSME', '', '', '', '', '', 'erterw', 'OFC Laying Works ', 'fegrt', 'grt', 'gtrg', 356534, '2022-09-13', 'ergtryret', 'tryryrt', 'trytry', 'Aerial ', 'Tender Singh Stage', 'rtyrty', 'erfgrtert', 'gtrgrt', 'tgrtre', 'trgrgr', 'Yes', '2022-09-08', '2022-09-14', '2022-09-23', '2022-09-23', '2022-09-23', '2022-09-23', '2022-09-22', 'test', 'test', 'Approved', '', '2022-09-28 18:19:09', '2022-09-28 18:19:09', 'test', ''),
(16, 'East', 'Bharat Sanchar Nigam Limited ', '', '', '43567', '767654', 'Open Tender', 'Services', 'Yes', 'Yes', '56', 'Offline ', 'Department', 'Yes', 'Division', 'fghfghfg', '', '', 'Yes', 'Startup', 'Online ', '', 'Tender Payment Mode', '354456', 'Offline ', 'Yes', 'MSME', '', '', '', 'EMD Payment Mode', '', 'rtrtrt', 'Product Category', 'fgdfg', '5', 'fgbf', 890890, '2022-10-07', 'bfghfghgf', 'gfhfhfg', 'ghfhf', 'Sub Category', 'Tender 2 Stage', 'fgdhf', 'delhi ', 'fgdfg', 'gdfg', 'dfgfgdg', 'Yes', '2022-10-07', '2022-10-06', '2022-10-08', '2022-10-13', '2022-10-12', '2022-10-19', '2022-10-18', 'dfdg', 'fgdf', 'Rejected', '', '2022-10-10 21:19:17', '2022-10-10 21:19:17', 'dfg', ''),
(17, 'East', 'Bharat Sanchar Nigam Limited East', '', '', '1234', 'TN-000001', 'Open Tender ', 'Services', 'Yes', 'No', '2', 'Online/Offline (Both) ', 'Haryana Telecom Circle ', 'Yes', 'GMTD,Rohtak', '1000', '', '', 'Yes', 'MSME', 'Online ', '', '', '110000', 'Offline ', 'No', '', 'EMD-00001', 'BSNL Gurgaon ', 'BSNL Gurgaon ', 'BG', '3', 'AMC Maintainence', 'OFC Laying Works ', 'AMC Maintainence for Fiber ', '180', 'NA', 122018, '2022-11-22', 'NA', 'NA', '20000000', 'Aerial ', 'Tender Singh Stage', '12', 'Gurgaon', '22-11-2022', 'Leela place', 'Leela place', 'No', '2022-11-15', '2022-11-22', '2022-11-22', '2022-11-25', '2022-11-25', '2022-11-29', '2022-11-28', 'Gurgaon ', 'BSNL Office ', 'Approved', '', '2022-11-29 13:19:03', '2022-11-29 13:19:03', 'BSNL Test Document ', ''),
(18, 'North', 'Bharat Sanchar Nigam Limited', '', '', '068811', 'T068811 ', 'Open Tender ', 'Work ', 'Yes', 'Yes', '5', 'Offline ', 'Haryana Telecom Circle ', 'Yes', 'CE(Electrical)', '210000', '', '', 'Yes', 'MSME', 'Online ', '', '', '21000', 'Offline ', 'Yes', '', '', '', '', '', '', 'Work Title', 'OFC Laying Works ', 'Work Description', '24', 'Test Details', 201301, '2022-12-17', 'Test', 'Yes', '5345', 'HDD Works', 'Tender Singh Stage', '22', 'Noida', '2022-12-17', '', 'Test', 'No', '2022-12-10', '2022-12-22', '2022-12-09', '2022-12-11', '2022-12-29', '2022-12-30', '2022-12-17', 'Farhan', 'Noida', 'Pending', '', '2022-12-04 19:11:36', '2022-12-04 19:11:36', 'Testtender', '04-12-2022'),
(19, 'North', 'Bharat Sanchar Nigam Limited North', '', '', 'N-40/2022-23/01', '2022_BSNL_136250_1', 'Open Tender', 'Work ', 'No', 'No', '02', 'Offline ', 'Department', 'No', 'Division', '2360', '', '', 'Yes', 'Tender Fee Exemption Allowed for', 'Online/Offline (Both) ', '', 'Tender Payment Mode', '542812', 'Online/Offline (Both) ', 'Yes', 'EMD Exemption Allowed For', '', '', '', 'EMD Payment Mode', '', 'E-Tender for OFC laying under 4G saturation project in Zone-III of Balasore BA', 'Product Category', 'E-Tender for OFC laying under 4G saturation project in Zone-III of Balasore BA', '150', 'NA', 756001, '2023-01-05', '', 'No', '27140620', 'Sub Category', 'Tender Singh Stage', '12', 'Balasore', '', 'Fakir Mohan Golei, Balasore-756001', 'Fakir Mohan Golei, Balasore-756001', 'No', '2022-11-23', '2022-11-23', '2022-12-09', '2022-12-16', '2022-11-23', '2022-12-22', '2022-12-21', 'BSNL,Door Sanchar Bhawan', 'AGM(Admin. & Plg.) O/o the General Manager , Balasore BA', 'Approve', '', '2022-12-19 17:05:35', '2022-12-19 17:05:35', 'Balasore', '04-01-2023'),
(20, 'South', 'Bharat Sanchar Nigam Limited  South', 'milleniance ', 'DELHI', '325345', '435345', 'Select Tender Type', 'Select Tender Category', 'General technical Evaluation Allowed', 'Is Multi Currency Allowed for fee', '', 'Payment Mode', 'West Department', 'Allow two stage bidding?', 'CE(Electrical) div', '5875', '', '', 'Yes', 'Tender Fee Exemption Allowed for', 'Tender Fee Type', '', 'Tender Payment Mode', '574575', 'EMD Fee Type', 'If Exemption Allowed', 'EMD Exemption Allowed For', '', '', '', 'EMD Payment Mode', '', '', 'OFC Laying Works ', '', '', '', 0, '', '', '', '', 'HDD Works', 'Contract Type', '', '', '', '', '', 'Should Allow NDA Tender', '', '', '', '', '', '', '', '', '', 'Pending', '', '2023-01-06 00:08:08', '2023-01-06 00:08:08', '', '13-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'farhan', 'admin@admin.com', '$2y$10$qLrJllKks1okrkNKY6NP7ujqdCCifck9FBxdHBClJoUy9J1BaDAK.', '2022-02-17 17:17:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_document`
--
ALTER TABLE `assign_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circle`
--
ALTER TABLE `circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrigendum`
--
ALTER TABLE `corrigendum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_name`
--
ALTER TABLE `document_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_upload`
--
ALTER TABLE `document_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_users`
--
ALTER TABLE `document_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pd_users`
--
ALTER TABLE `pd_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfp_extractor`
--
ALTER TABLE `rfp_extractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_assign`
--
ALTER TABLE `tender_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_document`
--
ALTER TABLE `tender_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_price`
--
ALTER TABLE `tender_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_upload`
--
ALTER TABLE `tender_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_document`
--
ALTER TABLE `assign_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `circle`
--
ALTER TABLE `circle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corrigendum`
--
ALTER TABLE `corrigendum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `document_name`
--
ALTER TABLE `document_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `document_upload`
--
ALTER TABLE `document_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `document_users`
--
ALTER TABLE `document_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pd_users`
--
ALTER TABLE `pd_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rfp_extractor`
--
ALTER TABLE `rfp_extractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tender_assign`
--
ALTER TABLE `tender_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tender_document`
--
ALTER TABLE `tender_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tender_price`
--
ALTER TABLE `tender_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tender_upload`
--
ALTER TABLE `tender_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
