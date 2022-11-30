-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 06:49 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_oxpin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `t_image` varchar(1000) NOT NULL,
  `b_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `subheading`, `description`, `t_image`, `b_image`) VALUES
(1, 'About oxpin', 'Get to know about our oxpins organization', 'They include international charities such as OXFAM and Save the Children, research institutes, churches, community-based organizations, lobby groups and professional associations.\r\n\r\nNon-governmental organizations, or NGOs, were first called such in Article 71 in the Charter of the newly formed United Nations in 1945. While NGOs have no fixed or formal definition, they are generally defined as nonprofit entities independent of governmental influence (although they may receive government funding).', 'img/uploads/about-four-img-1.jpg', 'img/uploads/about-four-img-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address`) VALUES
(1, '9807653561', 'admin@gmail.com', '1/0 ABC Nagar Dindigul Tamil Nadu 624005');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `heading`, `subheading`, `image`) VALUES
(1, 'Become a Volunteers', 'Join your hand with us for abetter life and future', './img/uploads/become-volunteer-one-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `count` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`, `heading`, `count`) VALUES
(1, 'Total donation', '70'),
(2, 'Projects funded', '48'),
(3, 'Kids need help', '38'),
(4, 'Our volunteers', '230');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `goal` varchar(1000) NOT NULL,
  `raised` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `image`, `heading`, `description`, `goal`, `raised`) VALUES
(1, './img/uploads/causes-1-1.jpg', 'Let’s education for children get good life', 'There are many of lorem, but majori have suffered alteration in some form.', '30000', '20000'),
(2, './img/uploads/causes-1-2.jpg', 'It is a long established fact that a reader', 'There are many of lorem, but majori have suffered alteration in some form.', '30000', '25750'),
(3, './img/uploads/causes-1-3.jpg', 'There are many variations of passages', 'There are many of lorem, but majori have suffered alteration in some form.', '25000', '17000');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `heading`, `date`, `image`) VALUES
(1, 'Play for the world with us', '2022-11-07', 'img/uploads/gallery-page-1-3.jpg'),
(2, 'Contrary to popular belief', '2022-05-23', 'img/uploads/events-page-1-2.jpg'),
(3, 'There are many variations of', '2022-10-06', 'img/uploads/events-page-1-3.jpg'),
(4, 'Play for the world with us', '0222-06-22', 'img/uploads/events-page-1-4.jpg'),
(5, 'Contrary to popular belief', '2022-02-02', 'img/uploads/events-page-1-5.jpg'),
(6, 'There are many variations of', '2022-01-01', 'img/uploads/events-page-1-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `heading`, `image`) VALUES
(1, 'Nulla ultricies justo sit amet ante efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies. ', 'img/uploads/FOOTER LOGO.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `heading`, `subheading`, `image`) VALUES
(1, 'Education', 'Charity', 'img/uploads/gallery-page-1-1.jpg'),
(2, 'Education', 'Charity', 'img/uploads/gallery-page-1-2.jpg'),
(3, 'Education', 'Charity', 'img/uploads/gallery-page-1-3.jpg'),
(4, 'Education', 'Charity', 'img/uploads/gallery-page-1-4.jpg'),
(5, 'Education', 'Charity', 'img/uploads/gallery-page-1-5.jpg'),
(6, 'Education', 'Charity', 'img/uploads/gallery-page-1-6.jpg'),
(7, 'Education', 'Charity', 'img/uploads/gallery-page-1-7.jpg'),
(8, 'Education', 'Charity', 'img/uploads/gallery-page-1-8.jpg'),
(9, 'Education  ', 'Charity', 'img/uploads/gallery-page-1-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'img/uploads/Untitled-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'about.php'),
(3, 'Event', 'events.php'),
(4, 'Gallery', 'gallery.php'),
(5, 'Contact', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `mini_about`
--

CREATE TABLE `mini_about` (
  `id` int(11) NOT NULL,
  `exprience` varchar(1000) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `subheading1` varchar(1000) NOT NULL,
  `description1` varchar(1000) NOT NULL,
  `subheading2` varchar(1000) NOT NULL,
  `description2` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_about`
--

INSERT INTO `mini_about` (`id`, `exprience`, `heading`, `description`, `subheading1`, `description1`, `subheading2`, `description2`, `image`) VALUES
(1, '25 Years Exprience', 'Helping each other can make world better', 'We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies. Our impact is about more than moving money to where it’s needed most it’s also about helping nonprofits access information and ideas that will help them listen, learn, and grow.', 'Join our team', 'Lorem ipsum dolor sit amet not quis mis notted.', 'Start donating', 'Lorem ipsum dolor sit amet not quis mis notted.', 'img/uploads/about-one-img-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `razorpay_payment_id` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `razorpay_payment_id`, `name`, `lastname`, `status`, `email`, `price`, `message`) VALUES
(1, 'pay_KdXZnSPMjmyApz', 'Karthik', 'R', 'success', 'ashok09042000@gmail.com', '10', 'test'),
(2, 'pay_KdXiwIrEoAN7kb', 'karthik', 'ashok', 'success', 'admin111@mail.com', '100', 'test'),
(3, 'pay_KdXlDWXBWC8SpL', 'admin', 'R', 'success', 'admin@mail.com', '200', 'TESTING FOR AMOUNT'),
(4, 'pay_KdXlDWXBWC8SpL', 'admin', 'R', 'success', 'admin@mail.com', '200', 'TESTING FOR AMOUNT'),
(5, 'pay_KdYL5mpaRYxm0s', 'Test', 'R', 'success', 'ashok09042000@gmail.com', '100', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading`, `subheading`, `image`) VALUES
(2, 'Always donate for childrens', 'Lend a Helping Hand to Those in Need', './img/uploads/main-slider-1-2.png'),
(3, 'Always donate for childrens', 'Lend a Helping Hand to Those in Need', './img/uploads/main-slider-1-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `menu` varchar(1000) NOT NULL,
  `social_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `menu`, `social_link`) VALUES
(1, 'Twitter', 'https://twitter.com/login'),
(2, 'Facebook', 'https://www.facebook.com/'),
(3, 'Linkedin', 'https://www.linkedin.com/login'),
(4, 'Instagram', 'https://www.instagram.com/accounts/login/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `heading`, `subheading`, `description`, `image`) VALUES
(1, 'Kevin martin', 'Volunteer', 'Nulla ultricies justo sit amet ante fficitur, eget pharetra augue \r\nefficitur. Vestibulum viverra, dolor sit amet ultricies simply free text \r\nornare, elit justo pretium tellus.', './img/uploads/testimonial-1-1.jpg'),
(2, 'Jessica brown', 'Volunteer', 'Nulla ultricies justo sit amet ante efficitur, eget pharetra augue efficitur. \r\nVestibulum viverra, dolor sit amet ultricies simply free text\r\nornare, elit justo pretium tellus.', './img/uploads/testimonial-1-2.jpg'),
(3, 'Mike hardson', 'Volunteer', 'Nulla ultricies justo sit amet ante  efficitur, eget pharetra augue efficitur.\r\nVestibulum viverra, dolor sit amet   ultricies simply free text\r\nornare, elit justo pretium tellus.', './img/uploads/testimonial-1-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini_about`
--
ALTER TABLE `mini_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mini_about`
--
ALTER TABLE `mini_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
