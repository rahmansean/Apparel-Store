-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 12:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `belt`
--

CREATE TABLE `belt` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `belt`
--

INSERT INTO `belt` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('H&M Man Belt', 1, '500.00', 11, 'product_img/0e49570fb913929d4042083064bcdcfbbelt2.jpg'),
('Tommy H. Belt', 2, '2000.00', 7, 'product_img/d721da72403bed65eb7b7fad9187bb54belt3.jpg'),
('Tickwood Leathers', 3, '600.00', 4, 'product_img/1c69ddd3daa4d53295263827307aa0b5belt1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boysdress`
--

CREATE TABLE `boysdress` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boysdress`
--

INSERT INTO `boysdress` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Yellow Punjabi ( for age 12 )', 1, '1800.00', 20, 'product_img/db2a7ce22952d3add50a2800bdc88a1fc1.jpeg'),
('Sheroyani (for age 12)', 2, '2000.00', 20, 'product_img/79a3c3764fe30dc050855e0873c9ee52c3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `boyshoe`
--

CREATE TABLE `boyshoe` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boyshoe`
--

INSERT INTO `boyshoe` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Boy Running Shoe', 1, '1000.00', 20, 'product_img/2b1afbf4fbeaa8f34b52b2bfca9e6581boyshoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `totalPricePerItem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `productname`, `quantity`, `totalPricePerItem`) VALUES
(1, 'Sean', 'Tommy H. Belt', 2, 4000),
(2, 'Sean', 'H&M Man Belt', 3, 1500),
(3, 'Sean', 'Tickwood Leathers', 1, 600),
(7, 'Saber Ahmed', 'Tommy H. Belt', 5, 10000),
(23, 'Sean', 'Polo Shirt', 10, 5900),
(24, 'Sean', 'Striped Polo Shirt', 10, 10900);

-- --------------------------------------------------------

--
-- Table structure for table `childnewarrival`
--

CREATE TABLE `childnewarrival` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childnewarrival`
--

INSERT INTO `childnewarrival` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Yellow Punjabi ( for age 12 )', 1, '1800.00', 20, 'product_img/1ee02b1213086ed9094e300abf23ab3adb2a7ce22952d3add50a2800bdc88a1fc1.jpeg'),
('Boy Running Shoe', 2, '1000.00', 20, 'product_img/d2f3f13f3d6671fec888f0cbe81c5ad1boyshoe.jpg'),
('Girls Green & Pink Printed Lehenga', 3, '1200.00', 20, 'product_img/28263b0b493db98ec8b581d11e93e992girldress.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `femalenewarrival`
--

CREATE TABLE `femalenewarrival` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `femalenewarrival`
--

INSERT INTO `femalenewarrival` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Ethnica Pink Green Blend', 1, '1200.00', 10, 'product_img/627a21973769ad204beddfd112898b03s7.jpg'),
('Altiven Navy Blue', 2, '1200.00', 10, 'product_img/59b8e4412be608ce11eacf67727db47ck5.jpg'),
('Butterflies', 3, '800.00', 0, 'product_img/d772d25a5c61d52da32cff0721d161ab81ikGfwx6oL._AC_UL320_.jpg'),
('Styledose', 4, '900.00', 0, 'product_img/ccbce77a679e132b667ff47febe0f699f_watch.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `fshoe`
--

CREATE TABLE `fshoe` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fshoe`
--

INSERT INTO `fshoe` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Butterflies', 3, '800.00', 19, 'product_img/44dd8bf4dcde62131c9b41295db6329981ikGfwx6oL._AC_UL320_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fwatch`
--

CREATE TABLE `fwatch` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fwatch`
--

INSERT INTO `fwatch` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Blue Pearl', 3, '1500.00', 50, 'product_img/480e3cfd1190dec43807f522c55d91763-purple-12-point-color-magnet-watch-with-2x-bracelet-combo-jiya-original-imag9z52dz6cwrzz.jpeg'),
('Styledose', 4, '900.00', 40, 'product_img/1a85096faff21e8106561baafe4d6115f_watch.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `girldress`
--

CREATE TABLE `girldress` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `girldress`
--

INSERT INTO `girldress` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Girls Green & Pink Printed Lehenga', 1, '1200.00', 20, 'product_img/6fcef02ced6c810334a8b6f548c319edgirldress.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `girlshoe`
--

CREATE TABLE `girlshoe` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `girlshoe`
--

INSERT INTO `girlshoe` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Princess Shoe', 1, '590.00', 30, 'product_img/f11f1ec895140e29d385964522cefe7dgirlshoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kameez`
--

CREATE TABLE `kameez` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kameez`
--

INSERT INTO `kameez` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Altivel Multi Color', 2, '1200.00', 20, 'product_img/5f7589ecfe291359e3f7e17e7f2851f9k1.jpg'),
('Altiven Navy Blue', 3, '900.00', 20, 'product_img/8b2f179ada720bf654e479671c910574k2.jpg'),
('Multi Printed', 4, '800.00', 60, 'product_img/e085be88fbc284ae8a99877eabad2cdek3.jpg'),
('Embroiderd Multi Pink', 5, '800.00', 10, 'product_img/6f55051a4491941596ed8101e2ba3302k4.jpg'),
('Altiven Navy Blue', 6, '1200.00', 10, 'product_img/9a342e04851321006b83f7681bbf87e1k5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `malenewarrival`
--

CREATE TABLE `malenewarrival` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malenewarrival`
--

INSERT INTO `malenewarrival` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Check Shirt', 1, '590.00', 5, 'product_img/ae059cf5e0b1ec68703aa50d248bf659Shirt1.jpg'),
('H&M Man Belt', 2, '500.00', 10, 'product_img/c71ba5792151ed8b730f24f930a923a0belt2.jpg'),
('CLYMB Black', 3, '2010.00', 30, 'product_img/8679c539947d751ba8eb2b5660f15c09s4.jpg'),
('Casio Silver', 4, '1690.00', 20, 'product_img/f7098ccb7be6c4ba394fbcb239f4ea02watch1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pant`
--

CREATE TABLE `pant` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pant`
--

INSERT INTO `pant` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Chino Pants Khaki', 1, '1690.00', 20, 'product_img/f6afdb2a49511d14395ed4b1369d8c77pant1.jpg'),
('Flat Front Pants', 2, '1890.00', 50, 'product_img/e3390eb738ff0ba1436ad9b502f19a76pant2.jpg'),
('Business Pants', 3, '1290.00', 20, 'product_img/e5d0cdb16608f2633cf64cc41904aabdpant3.jpg'),
('Chino Brown', 4, '590.00', 10, 'product_img/b256a2c4c15bce7bb62b7e916e4fb7b5pant4.jpg'),
('Wool Pant', 5, '1190.00', 5, 'product_img/ba9b34e3bced987f09fdf91ff641272dpant5.jpg'),
('Stretch Skinny Jeans', 6, '2000.00', 90, 'product_img/fe5ddf38f5f870920176ca808e37d7ecpant6.jpg'),
('Fit Pajama', 7, '300.00', 50, 'product_img/891924f582a787b5aafca66526ae22e0pant7.jpg'),
('Tapered Jeans', 8, '680.00', 15, 'product_img/4608c174e0d229321b6aeae13fc18926jeans_insta-05.jpg'),
('Chino Dark Brown', 9, '700.00', 10, 'product_img/1993e177d21e1dceba3790d9551a0220pant9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saree`
--

CREATE TABLE `saree` (
  `name` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saree`
--

INSERT INTO `saree` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Reviata kanjivaram Silk', 18, '900.00', 10, 'product_img/28a70a71e229a5225c3359d7760b8e83s1.jpg'),
('Reviata Kaneepuram Soft Silk', 19, '800.00', 20, 'product_img/c1e31cb16c8cb59c69cc55ff36b8154cs2.jpeg'),
('Sharaa Ethnica Red', 20, '700.00', 10, 'product_img/67b23ff5e925ed03f3c9cbed7eab09c0s3.jpeg'),
('Musterd Lucknowii Cotton ', 21, '800.00', 20, 'product_img/6602d74f3d5b650d60c986dbb35072c6s4.jpg'),
('Cotton Silk Jacquard', 22, '1500.00', 10, 'product_img/538a4a9d619ee2ea991c91cb98f361a6s5.jpg'),
('Pink Party Wear ', 23, '1600.00', 20, 'product_img/5fdc26008f8fbef36a074fc9beff2e9as6.jpg'),
('Ethnica Pink Green Blend', 24, '1200.00', 15, 'product_img/2621bea871a27517d2182b10317784ccs7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

CREATE TABLE `shirt` (
  `name` varchar(50) NOT NULL,
  `id` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Check Shirt', 1, '590.00', 5, 'product_img/c210ef35c243dac12b28aaf60eaea1f6Shirt1.jpg'),
('Non Iron Easy Shirt Green', 2, '1890.00', 10, 'product_img/17aaaeeed833f176dfa80d7e16d89a95Shirt2.jpg'),
('Formal Shirt Red', 3, '1190.00', 50, 'product_img/9e782e304eb8b5252dc0d1e9cbb6b088Shirt3.jpg'),
('Formal Shirt Ash', 4, '1290.00', 20, 'product_img/14fb9cd38189bcef57990922dfe9f910Shirt4.jpg'),
('Formal Brown Shirt ', 5, '1890.00', 30, 'product_img/e597fef0b049a1db02bb811fae38fb23Shirt5.jpg'),
('Striped Polo Shirt', 6, '1090.00', 50, 'product_img/2be6631d6ca61c7e655f552c2cc15e6aShirt6.jpg'),
('Polo Shirt', 7, '590.00', 30, 'product_img/52bba688cde65801e53263226c456effShirt7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Men Grey Running Shoes', 1, '1890.00', 30, 'product_img/de90d334b3864b0c6168f10e1a2d282es5.jpg'),
('CLYMB Black', 2, '2010.00', 30, 'product_img/a680c6750de64ac4e085e842d07d7ff0s4.jpg'),
('Highlander Shoes', 3, '590.00', 8, 'product_img/a9f9e7957367ba8011743da1cef8f3b2s3.jpg'),
('Menglar Shoes Running', 6, '1890.00', 50, 'product_img/f5a07c1f7412e670dd53fdd9cc8ee4b4s1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sunglass`
--

CREATE TABLE `sunglass` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sunglass`
--

INSERT INTO `sunglass` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Quechua By Decathlon', 1, '660.00', 18, 'product_img/38513cf167bc625a48afeace3f90fc983.jpg'),
('Roadster MS-90', 2, '700.00', 19, 'product_img/8b843832aff62e2f2b98884b0a7319a62.jpg'),
('Voyage UV Protected ', 3, '800.00', 19, 'product_img/10de75707096de399b17ffbbc2dbe6911.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `users_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `users_type`) VALUES
(1, 'Sean Rahman', '190104103@aust.edu', '25f9e794323b453885f5181f1b624d0b', 'Admin'),
(2, 'Samir', '190104113@aust.edu', '25f9e794323b453885f5181f1b624d0b', 'Admin'),
(4, 'Kazi', '190104116@aust.edu', 'e10adc3949ba59abbe56e057f20f883e', 'Customer'),
(8, 'Sean', 'rahmansean02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Customer'),
(9, 'Saber Ahmed', '190104104@aust.edu', 'e40f01afbb1b9ae3dd6747ced5bca532', 'Customer'),
(10, 'Dameer', 'dameer@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `name` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(50) NOT NULL,
  `pimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`name`, `id`, `price`, `quantity`, `pimage`) VALUES
('Casio Silver', 1, '1690.00', 20, 'product_img/f99cf013f223fa409e90adb0566de914watch1.jpg'),
('Wrog Analog Watch', 2, '1500.00', 60, 'product_img/62ed81ba17ab7ab6616472fdd53cfd95watch2.jpg'),
('Fire-Bolt Smartwatch', 3, '5000.00', 5, 'product_img/404aad3326dc72a199985b4ddf2fc804watch3.jpg'),
('Wrog Analog Watch Black', 4, '590.00', 100, 'product_img/28a0c6fddd987bc71ac65285490c469fwatch4.jpg'),
('Mast & Harbour', 5, '1190.00', 16, 'product_img/6ff495491d1fd057cbd5d9bf84b86e8cwatch5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belt`
--
ALTER TABLE `belt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boysdress`
--
ALTER TABLE `boysdress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boyshoe`
--
ALTER TABLE `boyshoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childnewarrival`
--
ALTER TABLE `childnewarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `femalenewarrival`
--
ALTER TABLE `femalenewarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fshoe`
--
ALTER TABLE `fshoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fwatch`
--
ALTER TABLE `fwatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girldress`
--
ALTER TABLE `girldress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girlshoe`
--
ALTER TABLE `girlshoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kameez`
--
ALTER TABLE `kameez`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malenewarrival`
--
ALTER TABLE `malenewarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pant`
--
ALTER TABLE `pant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saree`
--
ALTER TABLE `saree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunglass`
--
ALTER TABLE `sunglass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `belt`
--
ALTER TABLE `belt`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `boysdress`
--
ALTER TABLE `boysdress`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boyshoe`
--
ALTER TABLE `boyshoe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `childnewarrival`
--
ALTER TABLE `childnewarrival`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `femalenewarrival`
--
ALTER TABLE `femalenewarrival`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fshoe`
--
ALTER TABLE `fshoe`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fwatch`
--
ALTER TABLE `fwatch`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `girldress`
--
ALTER TABLE `girldress`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `girlshoe`
--
ALTER TABLE `girlshoe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kameez`
--
ALTER TABLE `kameez`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `malenewarrival`
--
ALTER TABLE `malenewarrival`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pant`
--
ALTER TABLE `pant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `saree`
--
ALTER TABLE `saree`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `shirt`
--
ALTER TABLE `shirt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sunglass`
--
ALTER TABLE `sunglass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
