-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 10:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `author`, `date`, `content`, `image`) VALUES
(8, 'The Pros and Cons of Renting vs. Buying a Home', 'Jennifer Garcia', '2024-04-03', 'Not sure whether to rent or buy? Explore the advantages and disadvantages of each option to make an informed decision about your housing situation', 'uploads/property-2.jpg'),
(9, 'Top 5 Tips for First-Time Renters', 'Rachel Smith', '2024-04-05', 'Are you renting a home for the first time? This article provides essential tips for first-time renters, including budgeting advice, understanding lease agreements, and navigating rental inspections.', 'images/blog-1.png'),
(10, 'Finding Your Dream Rental Home: A Step-by-Step Guide', 'Alex Johnson', '2024-04-02', 'Searching for the perfect rental home can be daunting, but it doesn\'t have to be! Follow this step-by-step guide to simplify the process and find your dream rental property stress-free.', 'images/property-3.jpg'),
(11, 'Understanding Your Tenant Rights: What Every Renter Should Know', 'Emily Chen', '2024-03-18', 'As a renter, it\'s crucial to understand your rights and responsibilities. This article explores common tenant rights, including the right to a habitable living space, privacy, and protection from discrimination.', 'images/property-2.jpg'),
(12, 'Budget-Friendly Decorating Ideas for Rental Homes', 'Michael Brown', '2024-03-12', 'Decorating a rental home on a budget? Look no further! Discover creative and affordable decorating ideas to personalize your rental space without breaking the bank.', 'images/property-1.jpg'),
(13, 'Tips for Negotiating Rent with Your Landlord', 'Jennifer Lee', '2024-03-06', 'Want to save money on rent? Learn how to negotiate with your landlord like a pro! This article offers practical tips and strategies for negotiating rent reductions and lease terms effectively.', 'images/property-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `id` int(11) NOT NULL,
  `landlord_name` varchar(255) NOT NULL,
  `landlord_email` varchar(255) NOT NULL,
  `landlord_address` text NOT NULL,
  `landlord_contact` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`id`, `landlord_name`, `landlord_email`, `landlord_address`, `landlord_contact`, `password`) VALUES
(1, '', '', '', '', ''),
(2, 'nimal', 'renukadamayanthi1213@gmail.com', '61/6, Sigera Road\r\nMadiwela', '0715834611', 'Md9&b9_8');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `landlord_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `images` text NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `title`, `description`, `type`, `landlord_name`, `price`, `contact_number`, `images`, `latitude`, `longitude`) VALUES
(35, 'Cozy Apartment Near NSBM', 'A cozy apartment located within walking distance to NSBM University Pitipana. Fully furnished and close to amenities.', 'Apartment', 'John Smith', 25000.00, '123-456-7890', 'images/property-1.jpg', 6.834700, 79.973800),
(36, 'Spacious House for Rent', 'A spacious house situated near NSBM University Pitipana. Ideal for students or faculty members. Includes parking space.', 'House', 'Jane Doe', 40000.00, '987-654-3210', 'images/blog-2.jpg', 6.831300, 79.967200),
(37, 'Modern Studio Apartment', 'A modern studio apartment conveniently located close to NSBM University Pitipana. Suitable for individuals or couples.', 'Studio Apartment', 'Michael Johnson', 20000.00, '555-123-4567', 'images/property-3.jpg', 6.837800, 79.973300),
(38, 'Family-Friendly House Near Campus', 'A family-friendly house available for rent near NSBM University Pitipana. Safe neighborhood with easy access to transportation.', 'House', 'Emily Brown', 35000.00, '111-222-3333', 'images/property-2.jpg', 6.834000, 79.969400),
(39, 'Student Accommodation', 'A comfortable apartment complex designed specifically for students. Located within a short distance from NSBM University Pitipana.', 'Apartment', 'David Wilson', 15000.00, '777-888-9999', 'images/property-1.jpg', 6.833000, 79.970800),
(40, 'Cozy Room in Shared House', 'A cozy room available for rent in a shared house near NSBM University Pitipana. Perfect for students seeking affordable accommodation.', 'Room in Shared House', 'Sarah Taylor', 10000.00, '222-333-4444', 'images/property-3.jpg', 6.834900, 79.973200),
(41, 'Luxury Villa Near NSBM', 'A luxurious villa located in close proximity to NSBM University Pitipana. Offers spacious living areas, a private pool, and stunning views.', 'Villa', 'Emma Johnson', 75000.00, '999-888-7777', 'images/property-2.jpg', 0.000000, 0.000000),
(45, 'Cozy Studio with Garden View', 'A charming studio apartment with a peaceful garden view. Perfect for students or professionals looking for a quiet living space near NSBM University Pitipana.', 'House', 'Studio Apartment', 18000.00, '123-456-7890', 'images/blog-2.jpg', 0.000000, 0.000000),
(48, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000),
(49, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000),
(50, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000),
(51, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000),
(52, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000),
(53, '', '', '', '', 0.00, '', 'image_path', 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nsbm_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_address` text NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nsbm_id`, `student_name`, `student_address`, `student_phone`, `student_email`, `password`) VALUES
('26187', 'sanduni', '61/6, Sigera Road\r\nMadiwela', '0715834611', 'renukadamayanthi1213@gmail.com', 'Vb6-s=_B'),
('265', 'amal', '61/6, Sigera Road\r\n', '0715834612', 'renukadamayanthi1513@gmail.com', 'Ba4/mU#+');

-- --------------------------------------------------------

--
-- Table structure for table `user_landlords`
--

CREATE TABLE `user_landlords` (
  `id` int(11) NOT NULL,
  `landlord_id` varchar(50) NOT NULL,
  `landlord_name` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_landlords`
--

INSERT INTO `user_landlords` (`id`, `landlord_id`, `landlord_name`, `contact_number`, `email`, `address`, `created_at`) VALUES
(5, 'L1001', 'John Doe', '1234567890', 'john@example.com', '123 Main St, City', '2024-04-06 18:30:00'),
(6, 'L1002', 'Jane Smith', '9876543210', 'jane@example.com', '456 Elm St, Town', '2024-04-06 18:30:00'),
(7, 'L1003', 'Michael Johnson', '5551234567', 'michael@example.com', '789 Oak St, Village', '2024-04-06 18:30:00'),
(8, 'L1004', 'Emily Brown', '1112223333', 'emily@example.com', '321 Pine St, County', '2024-04-06 18:30:00'),
(9, 'L1005', 'David Wilson', '4445556666', 'david@example.com', '654 Birch St, Country', '2024-04-06 18:30:00'),
(10, 'L1006', 'Sarah Miller', '7778889999', 'sarah@example.com', '987 Cedar St, Province', '2024-04-06 18:30:00'),
(11, 'L1007', 'Sam Timson', '123456468', 'sam@example.com', '97 Belar St, Province', '2024-04-07 14:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_students`
--

CREATE TABLE `user_students` (
  `nsbm_id` varchar(20) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `nsbm_email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_students`
--

INSERT INTO `user_students` (`nsbm_id`, `student_name`, `contact_number`, `nsbm_email`, `address`) VALUES
('S1001', 'Alice Johnson', '1234567890', 'alice@example.com', '123 Main St, City'),
('S1002', 'Bob Smith', '9876543210', 'bob@example.com', '456 Elm St, Town'),
('S1003', 'Charlie Brown', '5551234567', 'charlie@example.com', '789 Oak St, Village'),
('S1004', 'Diana Wilson', '1112223333', 'diana@example.com', '321 Pine St, County'),
('S1005', 'Eva Miller', '4445556666', 'eva@example.com', '654 Birch St, Country'),
('S1006', 'Frank Davis', '7778889999', 'frank@example.com', '987 Cedar St, Province'),
('S1007', 'Grace Lee', '9998887777', 'grace@example.com', '147 Maple St, District');

-- --------------------------------------------------------

--
-- Table structure for table `user_wardens`
--

CREATE TABLE `user_wardens` (
  `warden_nsbm_id` varchar(50) NOT NULL,
  `warden_name` varchar(100) NOT NULL,
  `warden_contact_number` varchar(20) NOT NULL,
  `warden_nsbm_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_wardens`
--

INSERT INTO `user_wardens` (`warden_nsbm_id`, `warden_name`, `warden_contact_number`, `warden_nsbm_email`) VALUES
('W1001', 'John Doe', '1234567890', 'john@example.com'),
('W1002', 'Jane Smith', '9876543210', 'jane@example.com'),
('W1003', 'Michael Johnson', '5678901234', 'michael@example.com'),
('W1004', 'Emily Williams', '2345678901', 'emily@example.com'),
('W1005', 'David Brown', '8901234567', 'david@example.com'),
('W1006', 'Emma Jones', '4567890123', 'emma@example.com'),
('W1007', 'John Doe', '1234567890', 'john@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `nsbm_id` varchar(255) NOT NULL,
  `warden_name` varchar(255) NOT NULL,
  `warden_email` varchar(255) NOT NULL,
  `warden_phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`nsbm_id`, `warden_name`, `warden_email`, `warden_phone`, `password`) VALUES
('26157', 'damitha', 'renukadamayanthi1213@gmail.com', '51651265165', 'Pe0-O41T'),
('6684', 'damitha', 'renukadamayanthi1213@gmail.com', '51651265165', 'La8_sGhA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`nsbm_id`);

--
-- Indexes for table `user_landlords`
--
ALTER TABLE `user_landlords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_students`
--
ALTER TABLE `user_students`
  ADD PRIMARY KEY (`nsbm_id`);

--
-- Indexes for table `user_wardens`
--
ALTER TABLE `user_wardens`
  ADD PRIMARY KEY (`warden_nsbm_id`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`nsbm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_landlords`
--
ALTER TABLE `user_landlords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
