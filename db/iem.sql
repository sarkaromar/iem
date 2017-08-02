-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 02:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iem`
--

-- --------------------------------------------------------

--
-- Table structure for table `back_users`
--

CREATE TABLE `back_users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(70) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `IP` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'default.png',
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `online_timestamp` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `back_users`
--

INSERT INTO `back_users` (`id`, `email`, `password`, `token`, `level`, `status`, `IP`, `first_name`, `last_name`, `phn`, `address`, `avatar`, `joined_date`, `online_timestamp`) VALUES
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '1b4b611fff8d6b7d12dc0c548fb102b2', 2, 1, '', 'Image Editing', '24', '01914088503', 'Mirpur-1, Dhaka-1216', 'default.png', '2016-09-27 05:30:48', '1498683826');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `image`, `created`) VALUES
(1, 'Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', 'e1d89ef49acba0a96ae4a74179af0ba7.jpg', '2017-06-22 04:19:13'),
(2, ' Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', '43eabea6a4685042f3600439c4b2f739.jpg', '2017-06-22 04:19:52'),
(3, 'Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', '8a121d3397ac8901d5cde17832d969fa.jpg', '2017-06-22 04:20:33'),
(4, ' Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', '2abff1691d6591fbd15ffe278b27fa10.jpg', '2017-06-22 04:20:56'),
(5, 'Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', '41cb2dfa3d98e4f5c995916d01e8450b.jpg', '2017-06-22 04:21:50'),
(6, ' Amazing post with all the goodies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac lacinia dolor. Nullam semper euismod rhoncus. Curabitur pulvinar, mauris luctus semper rutrum, lacus est volutpat urna, sed fringilla augue nunc nec dolor. Integer sit amet massa non quam semper sodales. Praesent at augue vel lacus ornare viverra. Aliquam mauris enim, commodo at massa vel. Vestibulum non pulvinar urna. Aliquam pulvinar, felis eu congue facilisis, justo sapien elementum lectus, in tincidunt est odio sit amet purus. Curabitur venenatis sodales convallis. Nam at leo ut erat pharetra facilisis. Donec placerat nulla in consequat lacinia.', 'cee4597ba4cc357d12141d5232096100.jpg', '2017-06-22 04:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `ansr` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ques`, `ansr`) VALUES
(3, 'test ques 01', 'test answer 01'),
(4, 'test ques 02', 'test answer 02'),
(5, 'test ques 03', 'test answer 03');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `cat` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `cat`, `image`) VALUES
(1, 'cli name', 'clipping path', '887cb4364c4806c8361b10c12658d7e6.jpg'),
(2, 'color namr', 'color correction', '305d18b2bbd5c84d8df781ea08f981ee.jpg'),
(3, 'name neck', 'neck joint', '3df366551c79727d37b73bbe918c91c5.jpg'),
(4, 'namr highh', 'high-end retouching', '9c5e68feb5c1e6b3165e211bfecc2af0.jpg'),
(5, 'name layer', 'layer masking', '93219ac77cc61e246311b4a952cf42ed.jpg'),
(6, 'name drop', 'drop shadow', '65d58df90f8f1ca1f8f8b368b9f52a19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_cat`
--

CREATE TABLE `portfolio_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_cat`
--

INSERT INTO `portfolio_cat` (`id`, `name`) VALUES
(3, 'clipping path'),
(4, 'color correction'),
(5, 'neck joint'),
(6, 'high-end retouching'),
(7, 'layer masking'),
(8, 'drop shadow');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `short_des` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `opt_01` varchar(512) NOT NULL,
  `opt_02` varchar(512) NOT NULL,
  `opt_03` varchar(512) NOT NULL,
  `opt_04` varchar(512) NOT NULL,
  `isPopular` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `name`, `short_des`, `price`, `opt_01`, `opt_02`, `opt_03`, `opt_04`, `isPopular`) VALUES
(1, 'COMPOUND SILO PATH', 'test desc', '2.50', 'Fashion Model,', 'Garments,', 'Buying House Product.', '', 0),
(2, 'OMPOUND IMAGE MANIPULATION', 'test', '2.50', 'Fashion Model,', 'Garments,', 'Buying House Product.', '', 0),
(3, 'SUPER COMPLEX CLIPPING PATH', 'test ', '15.00', 'Complex Jewelers,', 'Net,', 'Tree,Cell.', '', 0),
(4, 'COMPLEX CLIPPING PATH', 'test', '$8.00', 'Bicycle,', 'Group Photo,', 'Plant.', '', 0),
(5, 'SUPER COMPOUND MULTI PATH', 'test', '6.00 ', 'Fashion Model,', 'Garments,', 'Buying House Product.', '', 0),
(6, 'COMPOUND NECK JOIN', 'test', '2.50', 'Fashion Model,', 'Garments,', 'Buying House Product.', '', 0),
(7, 'COMPOUND HAIR MUSKING', 'test', '2.99', 'Fashion Model,', 'Garments,', 'Buying House Product.', '', 0),
(8, 'SIMPLE CLIPPING PATH', 'test', '0.99', 'Fashion, Apparels, Furniture,', 'Electronics Goods,Clothing,', 'Computer table, Head Phones.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `desc`, `image`, `url`) VALUES
(3, 'test menu 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'f8db199ab59a17f5f4bd8356f975edef.jpg', 'test_menu_1'),
(4, 'menu 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2088f4536a73112ecc54c79a88806130.jpg', 'menu_2'),
(5, 'menu 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '516a9bdfad54715ce23309ebab8cb230.jpg', 'menu_3');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `main_cap` varchar(512) NOT NULL,
  `sub_cap` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `main_cap`, `sub_cap`, `image`) VALUES
(3, 'Clipping Path start at $0.39', 'Total Photo Editing Solution', 'b8ecebf177b7d99c5f872293bf74a7be.jpg'),
(4, 'Low cost for huge batch photo editing', 'Total Photo Editing Solution for your E-commerce business', '35f1700fe919c7d89aa54ba423a20aa7.jpg'),
(5, 'ECommerce? Don\'t worry', 'Get Best E-Commerce Image Optimization to help you increase sell online', '0b6172b28187399308f3fd7aa763152c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(512) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `created`) VALUES
(2, 'admin@test.com', '2017-04-01 14:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `posi` varchar(512) NOT NULL,
  `msg` text NOT NULL,
  `fb` varchar(512) NOT NULL,
  `twt` varchar(512) NOT NULL,
  `lnkd` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `posi`, `msg`, `fb`, `twt`, `lnkd`, `image`) VALUES
(1, 'Md: jalis Mahmud', 'CEO AND FOUNDER', 'Consetetur sadipscing elitrd diam nonumy eirmod tempor invidunt ut labore.', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '29ca3f4dfae4c5314ec9d3a5aa2d3f28.jpg'),
(2, 'Andrew Clark', 'FRONT-END DEVELOPER', 'Consetetur sadipscing elitrd diam nonumy eirmod tempor invidunt ut labore.', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '3da431add41ddf437fb5e5b6d9171e09.jpg'),
(3, 'Patrick evra', 'BACK-END DEVELOPER', 'Consetetur sadipscing elitrd diam nonumy eirmod tempor invidunt ut labore.', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '7f95c4dfb8d34ea0e3585ca859cc331b.jpg'),
(4, 'Scott paker', 'PROJECT MANAGER', 'Consetetur sadipscing elitrd diam nonumy eirmod tempor invidunt ut labore.', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'c3fb77288032696d55a125e448cd119e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `back_users`
--
ALTER TABLE `back_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `back_users`
--
ALTER TABLE `back_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
