-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2020 at 09:48 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stafflink`
--

-- --------------------------------------------------------

--
-- Table structure for table `sl_job`
--

CREATE TABLE `sl_job` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `classification_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `salary` double NOT NULL,
  `working_hours` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_job`
--

INSERT INTO `sl_job` (`id`, `title`, `description`, `type_id`, `classification_id`, `location_id`, `salary`, `working_hours`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Warehouse Admin Coordinator', '<ul>\r\n	<li>Provides administrative and office services support to warehouse.</li>\r\n	<li>Exceptional service delivery to customers both internal and external is the key operational requirement of this role</li>\r\n</ul>\r\n\r\n<p>Main Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Processes warehouse inbound, outbound paperwork.</li>\r\n	<li>Enters data, including reporting, inventory adjustments and stock in and out.</li>\r\n	<li>Maintains physical inventory of materials.</li>\r\n	<li>Ensures packing list, received goods and purchase orders match, and completes purchasing paperwork.</li>\r\n	<li>Accurate data entry of pick pages; resulting in the printing and collating of invoices for specific customers and Dispatch routes.</li>\r\n	<li>Checks with supervisor or manager for any changes in schedules or nightly routines.</li>\r\n	<li>Processes receiving reports, and maintains database of customer specific inventory.</li>\r\n	<li>Maintains updates of inventory and month end billing.</li>\r\n	<li>Excellent customer service skills.</li>\r\n</ul>\r\n\r\n<p><strong>Requirement:</strong></p>\r\n\r\n<ul>\r\n	<li>Preferably with 2 years working experience in Shipping forwarding / Logistics/ Warehousing Industry</li>\r\n	<li>Customer service oriented and able to work independently</li>\r\n	<li>Proficient in PC applications particularly in Microsoft excel and words</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Working Location / Hours :&nbsp; Tuas / Mon - Fri (8.30am - 5.30pm) and Alternate Sat (8.30am - 12.30 pm)</p>\r\n\r\n<p>Medical &amp; dental benefits : S$900 per year [1st year pro-rated based on months of service]</p>\r\n\r\n<p>Annual Leave : 14 days [for 1st - 7th year]; 21 days [from 8th year onwards]</p>\r\n\r\n<p>Probation : 6 months</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 10, 4, 2000, '5 days', 10, 1575950099, 1, 1575950099, 1),
(3, 'Process Electroplating Engineer (up to $5K)', '<p>Responsibilities:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Responsible to maintain day-to-day operation of the electro-plating process</li>\r\n	<li>Responsible for quality and process issues troubleshooting</li>\r\n	<li>Responsible for process improvement and cost saving activities</li>\r\n	<li>Provide up-to-date process status and liaise with production to ensure operation smoothproduction</li>\r\n	<li>Provide training and certification to operators on operation of plating process</li>\r\n	<li>Lead in implementation of value added initiatives for cost reduction road map</li>\r\n	<li>Continuously review performance of industrialized material/ product and take necessary actions for improvements</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRequirements:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Degree in Chemistry Engineering or related Engineering discipline</li>\r\n	<li>Knowledge in electroplating sector is a must</li>\r\n	<li>Prior working knowledge in Semicon environment will be advantageous</li>\r\n	<li>Strong analytical skills with excellent problem-solving skills</li>\r\n	<li>Good working attitude and willing to learn</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 5, 4, 3000, '8am-5pm', 10, 1576229953, 1, 1576229953, 1),
(4, 'Sales Merchandisers', '<p>Responsibilities:<br />\r\nVisit supermarkets/ outlets to replenish stocks items<br />\r\nAttend sales meeting once a week at office</p>\r\n\r\n<p>Requirements:<br />\r\nO level/ N level<br />\r\n1 to 2 years of experience in merchandising</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 16, 4, 2000, '9am-6pm', 10, 1576462276, 1, 1576462276, 1),
(5, 'Project Manager', '<p>&rarr;Our client looking for a Senior IT Project Manager role<br />\r\n&rarr;Salary from S$10k-S$15k / Month<br />\r\n&rarr;This role will be a sole-contributor, require to have system integrator experience in a large scale.<br />\r\n&rarr; Need to provide Asia regional support.</p>\r\n\r\n<p>Looking for an IT project manager to manage organizational wide business transformation projects. This role collaborates closely with the development team to implement quality IT system that deliver business value.</p>\r\n\r\n<p>Responsibility:<br />\r\n&bull; Perform work flow analysis and mentoring, and educating our development team on the most effective way to engage with IT.<br />\r\n&bull; Help company to clarify and refine on their requirements and developing the user&#39;s feedbacks to ensure that the technology solutions delivered meet the needs of business.<br />\r\n&bull; Lead and communication with IT vendors to develop software, which meets the requirements of our development team.<br />\r\n&bull; Strong familiarity with program management office operations with demonstrated experience in project planning controlling, and governance framework<br />\r\n&bull; Working experience in using developed software to track, monitor and reporting of project progress and producing reports.<br />\r\n&bull; Evaluate and select appropriate software or hardware and suggest integration methods<br />\r\n&bull; Develop and maintain information technology plans which outline project status individual takes, milestones, completion estimates, and resource allocation.<br />\r\n&bull; Expected to provide same support to projects in Singapore and any other subsidiaries in Asia region.</p>\r\n\r\n<p><br />\r\nRequirement:<br />\r\n&bull; Minimum 10 years of experience in managing organisation wide IT projects in an Agile environment<br />\r\n&bull; Preferably with some background knowledge in Construction Industry.<br />\r\n&bull; Bachelor Degree in Information Technology or related fields are preferred.<br />\r\n&bull; In-depth understanding of cloud computing, application of cloud computing within a business.<br />\r\n&bull; Experience leading and implementing Task Force Activities in projects.<br />\r\n&bull; Hands -on experience in software development and web technologies<br />\r\n&bull; Excellent written and verbal communication skills.<br />\r\nAgile as a set of principle and values that encourage breaking large portions of a project into smaller functional portions that can be developed quickly. This process also has been known as iterative software development.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 8, 3, 10000, 'Mon - Fri', 10, 1576462344, 1, 1576462344, 1),
(6, 'Sales & Marketing Executive (Regional / PBX / Telephone system)', '<ul>\r\n	<li>Handle sales for distributors with annual sales target</li>\r\n	<li>Distributor Management includes updating distributors on merchandising plan, planning for marketing activities/event, spec-in &amp; sales materials for distributers</li>\r\n	<li>Conduct market and competitors&#39; analysis in Southeast Asia &amp; Israel</li>\r\n	<li>Plan and conduct Product Seminar for partners - PSI planning</li>\r\n</ul>\r\n\r\n<p>Job Requirement</p>\r\n\r\n<ul>\r\n	<li>At least 2 years of Sales &amp; Marketing experience in PBX (Private Branch Exchange) industry</li>\r\n	<li>Preferably with relevant experience in channel development &amp; product management</li>\r\n	<li>Good grasp of technology in the area of networking, mobile and communication system.</li>\r\n	<li>Good communication and market analysis skill</li>\r\n	<li>Travel is required<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 1, 17, 3, 3000, 'Mon-Fri (Office Hour)', 10, 1576462417, 1, 1576462417, 1),
(7, 'Facility Technician', '<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Daily monitoring and maintenance of all electrical panel, lighting, emergency circuit, security, attendance machine, water unit and cctv.</li>\r\n	<li>Handling facility equipment.</li>\r\n	<li>Help to maintain all security, air-con, electrical contracts.</li>\r\n</ul>\r\n\r\n<p><strong>Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>Building maintenance skill</li>\r\n	<li>Able to speak basic English</li>\r\n</ul>\r\n', 1, 5, 6, 2200, 'Monday to Friday, 8.30-5.30', 10, 1576462476, 1, 1576462476, 1),
(8, 'Trader', '<p>Responsibilities:<br />\r\nWork with the responsible slate lead to execute system trades as well as independent trades<br />\r\nPlan and carry out direct or indirect marketing and transactions within the limit of authority to the counterparties in the region and beyond, and maximise the profits<br />\r\nControl sales transactions to be done within the credit limits<br />\r\nDevise hedging plan and execute hedges to manage price risk exposure<br />\r\nMaintain and develop key customers in gasoline industry in the region and beyond<br />\r\nWork closely with operations to manage trading/ operation (including shipping) matters<br />\r\nConduct business PDCA (monthly buy/ sell/ inventory planning, lookback, and stewardship)</p>\r\n\r\n<p>Requirements:<br />\r\nMaster/ Bachelor Degree<br />\r\n3 to 5 years of experience in petro/ petrochemical industry<br />\r\nMotivated and responsible team player</p>\r\n', 1, 17, 3, 9000, '9am to 530pm (Mon-Fri)', 10, 1576462815, 1, 1576462815, 1),
(9, 'Warehouse Assistant Supervisor', '<p><strong>Job scopes:</strong></p>\r\n\r\n<ul>\r\n	<li>Arranging and handling in-stock and out-stock, including returns</li>\r\n	<li>Loading and unloading of goods to delivery truck</li>\r\n	<li>Data entry to system</li>\r\n	<li>Monthly stock take</li>\r\n	<li>General warehouse duties including housekeeping</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>Computer literate&nbsp;</li>\r\n	<li>Possess Forklift license</li>\r\n</ul>\r\n', 1, 10, 4, 2500, '5 days', 10, 1576462914, 1, 1576462914, 1),
(10, 'Customer Service Coordinator (MNC/Central/Up to $3k)', '<p>Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Prepare quotation and process purchase orders from customers</li>\r\n	<li>Handle and assist customers on their sales enquiries via emails and phone calls</li>\r\n	<li>Process claim arising from shipment delays, defective items, wrong pricing</li>\r\n	<li>Recify part number errors, request lead time changes to suppliers</li>\r\n	<li>Liaise with Sales Team and Shipping Team on customers order</li>\r\n</ul>\r\n\r\n<p>Requirements:</p>\r\n\r\n<ul>\r\n	<li>Minimum 1 year relevant experience</li>\r\n	<li>Service-oriented mindset and good customer service skills</li>\r\n	<li>Detail-oriented and high accuracy in order processing</li>\r\n	<li>Fast workers, able to multi-task and handled workload in a high volume and fast pace environment</li>\r\n	<li>Training will be provided</li>\r\n	<li>Meticulous and organized</li>\r\n	<li>Proficient in MS Office</li>\r\n	<li>Immediate availability will be an advantage</li>\r\n</ul>\r\n', 1, 4, 3, 3000, 'Monday to Friday 9am-6pm Saturday 9am-3pm', 10, 1576462966, 1, 1576462966, 1),
(11, 'Business Development Manager', '<p>Responsibilities</p>\r\n\r\n<p>Drive and develop the commercial sales in the Singapore and Malaysia market.<br />\r\nWork closely with the management team to develop strategies to ensure that maintaining market share and ensure that the business&#39;s goals are achieved and policies adhered to.<br />\r\nProactively selling and developing business of high end lifestyle imported furniture<br />\r\nIdentifying business opportunities by being always on the hunt.<br />\r\nBuilding up a strong sales conduit in winning new lucrative clients through direct sales as well as leveraging on cross-selling and up-selling potential.<br />\r\nTo keep abreast and identify upcoming developments that provides potential sales opportunities<br />\r\nMarketing, promotional ideas to promote and articulate the value of our brand.<br />\r\nProactively managing marketing strategies that can assist with developing contract sales opportunities.<br />\r\nBe able to think long-term and anticipate changes to market conditions. Develop strategies that capitalize on these market changes.<br />\r\nPossess good knowledge and understanding of project tender requirements, work at site and management processes.<br />\r\nManaging pricing negotiations with both the customers and suppliers</p>\r\n\r\n<p><br />\r\nRequirements<br />\r\nStrong negotiation skills, management skills and hands-on, passionate in the industry<br />\r\nForward thinking and driven with a flair for design<br />\r\nPreferably a Degree holder<br />\r\n8 years of Business Development related working experience in the furniture or design industry</p>\r\n', 1, 17, 3, 8000, 'Mon to Fri 9am to 6pm', 10, 1576463021, 1, 1576463021, 1),
(12, 'Admin Assistant (Contract/ up to S$2.2K basic/5 days/Central)', '<p>► Work Location: Raffles Place<br />\r\n► 5 days&#39; work week<br />\r\n► Basic salary up to S$2,200<br />\r\n► 1 year contract</p>\r\n\r\n<p>Our client is a leading marine fuel logistics company.</p>\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<p>&bull; Provide administrative support to the ship management&#39;s crewing department, including:<br />\r\n&nbsp; &nbsp;- verification of qualification, certification and documents of sea staff<br />\r\n&nbsp; &nbsp;- arrange for interviews, medical check-ups, travel, lodging and other appointments for sea staff<br />\r\n&nbsp; &nbsp;- arrange for supply of provisions to ships<br />\r\n&nbsp; &nbsp;- monitor and update sea staff employment records and other documents<br />\r\n&nbsp; &nbsp;- brief sea staff on company procedures<br />\r\n&nbsp; &nbsp;- liaise with sea staff recruitment agencies<br />\r\n&bull; Maintain a high level of confidentiality<br />\r\n&bull; Assist with ad hoc assignments</p>\r\n\r\n<p><strong>Requirements:</strong></p>\r\n\r\n<p>&bull; Min. 1 year of administrative experience, preferably in a shipping company<br />\r\n&bull; Must be proficient in Microsoft Office applications<br />\r\n&bull; Meticulous, proactive, positive attitude, and willingness to learn<br />\r\n&bull; Good teamwork and also able to work independently</p>\r\n', 2, 2, 3, 2200, '9am-6pm (Mon-Fri)', 10, 1576463073, 1, 1576463073, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_job_application`
--

CREATE TABLE `sl_job_application` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `current_salary` double NOT NULL,
  `expected_salary` double NOT NULL,
  `resume` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_job_application`
--

INSERT INTO `sl_job_application` (`id`, `job_id`, `name`, `nationality_id`, `contact`, `email`, `address`, `postal_code`, `current_salary`, `expected_salary`, `resume`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(12, 3, 'Lee', 1, '0393560569', 'mr.lmnhut@gmail.com', 'Can Tho City', '900000', 900000, 900000, 'attachment_resume1578016483.png', 10, 1578016483, NULL, 1578016483, NULL),
(13, 4, 'Lee', 1, '0393560569', 'mr.lmnaahut@gmail.com', 'Can Tho City', '900000', 900000, 900000, 'attachment_resume1578017389.png', 10, 1578017389, NULL, 1578017389, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sl_job_classification`
--

CREATE TABLE `sl_job_classification` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_job_classification`
--

INSERT INTO `sl_job_classification` (`id`, `name`, `description`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Accounting / Audit', 'Accounting / Audit', 10, 1575942281, 1, 1575942281, 1),
(2, 'Adminitrative / Secretarial', 'Adminitrative / Secretarial', 10, 1575942336, 1, 1575942336, 1),
(3, 'Banking & Finance', 'Banking & Finance', 10, 1575942366, 1, 1575942366, 1),
(4, 'Customer Service / Call Center', 'Customer Service / Call Center', 10, 1575942398, 1, 1575942398, 1),
(5, 'Engineering / Technical', 'Engineering / Technical', 10, 1575942427, 1, 1575942427, 1),
(6, 'Healthcare / Medical', 'Healthcare / Medical', 10, 1575942437, 1, 1575942437, 1),
(7, 'Human Resource', 'Human Resource', 10, 1575942451, 1, 1575942451, 1),
(8, 'Information Technology', 'Information Technology', 10, 1575942465, 1, 1575942465, 1),
(9, 'Legal / Corporate Secretarial', 'Legal / Corporate Secretarial', 10, 1575942478, 1, 1575942478, 1),
(10, 'Logistics / Supply Chain', 'Logistics / Supply Chain', 10, 1575942490, 1, 1575942490, 1),
(11, 'Marketing Communication / Public Relations', 'Marketing Communication / Public Relations', 10, 1575942502, 1, 1575942502, 1),
(12, 'Others', 'Others', 10, 1575942513, 1, 1575942513, 1),
(13, 'Property / Real Estate', 'Property / Real Estate', 10, 1575942525, 1, 1575942525, 1),
(14, 'Purchasing / Sourcing / Merchandising', 'Purchasing / Sourcing / Merchandising', 10, 1575942538, 1, 1575942538, 1),
(15, 'Recruitment Consultants / Manager', 'Recruitment Consultants / Manager', 10, 1575942551, 1, 1575942551, 1),
(16, 'Retail Operations', 'Retail Operations', 10, 1575942563, 1, 1575942563, 1),
(17, 'Sales & Marketing', 'Sales & Marketing', 10, 1575942582, 1, 1575947722, 1),
(18, 'Science & Technology', 'Science & Technology', 10, 1575942604, 1, 1575947735, 1),
(19, 'Temporary / Contract', 'Temporary / Contract', 10, 1575942615, 1, 1575942615, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_job_location`
--

CREATE TABLE `sl_job_location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_job_location`
--

INSERT INTO `sl_job_location` (`id`, `name`, `description`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'North', 'North', 10, 1575942842, 1, 1575942842, 1),
(2, 'Island-wide', 'Island-wide', 10, 1575942858, 1, 1575942858, 1),
(3, 'Central', 'Central', 10, 1575942871, 1, 1575942871, 1),
(4, 'West', 'West', 10, 1575942883, 1, 1575942883, 1),
(5, 'North-East', 'North-East', 10, 1575942896, 1, 1575942896, 1),
(6, 'East', 'East', 10, 1575942925, 1, 1575942925, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_job_type`
--

CREATE TABLE `sl_job_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_job_type`
--

INSERT INTO `sl_job_type` (`id`, `name`, `description`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Permanent Full Time', 'Permanent Full Time', 10, 1575943111, 1, 1575943111, 1),
(2, 'Temporary / Contract', 'Temporary / Contract', 10, 1575943130, 1, 1575943130, 1),
(3, 'Part Time', 'Part Time', 10, 1575943142, 1, 1575943142, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_migration`
--

CREATE TABLE `sl_migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_migration`
--

INSERT INTO `sl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1577152604),
('m100000_000000_create_table_user', 1577152605),
('m100000_000010_add_verification_token_column_to_user_table', 1577152606),
('m110000_000000_create_table_nationality', 1577152606),
('m120000_000000_create_table_job_classification', 1577152606),
('m120000_000010_create_table_job_type', 1577152606),
('m120000_000020_create_table_job_location', 1577152606),
('m130000_000000_create_table_job', 1577152608),
('m130000_000010_create_table_job_application', 1577152608);

-- --------------------------------------------------------

--
-- Table structure for table `sl_nationality`
--

CREATE TABLE `sl_nationality` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_nationality`
--

INSERT INTO `sl_nationality` (`id`, `name`, `description`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Singapore PR', 'Singapore PR', 10, 1575941676, 1, 1575941676, 1),
(2, 'Singapore Citizen', 'Singapore Citizen', 10, 1575941778, 1, 1575941778, 1),
(3, 'Others', 'Others', 10, 1575941793, 1, 1575941793, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_user`
--

CREATE TABLE `sl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sl_user`
--

INSERT INTO `sl_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'lee', 'Rfc0bj3BvqOHDVCxRpPJx0SCcdQge3bM', '$2y$13$0UEJ37JcCPXQl62/KKCgxesq6y2bCif0bnzwXD/p8EQmUEcmNodwq', NULL, 'lee@gmail.com', 10, 1577152653, 1577152653, 'Yhw0vY1ZoUKXdVR1nMERV_rj7txzRwr0_1577152653'),
(8, 'lee.le', 'z9kg7SO0EZVYDdw830mPAEPYa0t0cGPL', '$2y$13$P7LoTyKSJwtLZXghhojQmevCUStPVlqai.JIhaTvJeTbpgnj3jAmy', NULL, 'lee.le@gmail.com', 9, 1577411988, 1577411988, 'd8sj-oQt1HTi0QyT3dUeGyzOqTNZFdE7_1577411988');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sl_job`
--
ALTER TABLE `sl_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_job_type_id` (`type_id`),
  ADD KEY `idx_job_classification_id` (`classification_id`),
  ADD KEY `idx_job_location_id` (`location_id`);

--
-- Indexes for table `sl_job_application`
--
ALTER TABLE `sl_job_application`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_job_application_email` (`email`),
  ADD KEY `idx_job_application_job_id` (`job_id`),
  ADD KEY `idx_job_application_nationality_id` (`nationality_id`);

--
-- Indexes for table `sl_job_classification`
--
ALTER TABLE `sl_job_classification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `unq_job_classification_name` (`name`);

--
-- Indexes for table `sl_job_location`
--
ALTER TABLE `sl_job_location`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `unq_job_location_name` (`name`);

--
-- Indexes for table `sl_job_type`
--
ALTER TABLE `sl_job_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_job_type_name` (`name`);

--
-- Indexes for table `sl_migration`
--
ALTER TABLE `sl_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `sl_nationality`
--
ALTER TABLE `sl_nationality`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `unq_nationality_name` (`name`);

--
-- Indexes for table `sl_user`
--
ALTER TABLE `sl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sl_job`
--
ALTER TABLE `sl_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sl_job_application`
--
ALTER TABLE `sl_job_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sl_job_classification`
--
ALTER TABLE `sl_job_classification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sl_job_location`
--
ALTER TABLE `sl_job_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sl_job_type`
--
ALTER TABLE `sl_job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sl_nationality`
--
ALTER TABLE `sl_nationality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sl_user`
--
ALTER TABLE `sl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sl_job`
--
ALTER TABLE `sl_job`
  ADD CONSTRAINT `fk_job_classification_id` FOREIGN KEY (`classification_id`) REFERENCES `sl_job_classification` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_location_id` FOREIGN KEY (`location_id`) REFERENCES `sl_job_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_type_id` FOREIGN KEY (`type_id`) REFERENCES `sl_job_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sl_job_application`
--
ALTER TABLE `sl_job_application`
  ADD CONSTRAINT `fk_job_application_job_id` FOREIGN KEY (`job_id`) REFERENCES `sl_job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_application_nationality_id` FOREIGN KEY (`nationality_id`) REFERENCES `sl_nationality` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
