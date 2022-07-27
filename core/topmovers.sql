-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 02:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topmovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `note`, `photo`, `date`) VALUES
(8, 'WHAT MAKES TOPMOVERS, TOP?', 'Finding movers in Nigeria you can trust is essential. They are in charge of making certain that your home&#039;s valuables, furniture, and other goods are handled and relocated in a secure, meticulous, and error-free manner. We handle every situation with professionalism, attention to detail, and a smile, whether it&#039;s a little local relocation or a big long distance move. Why are we top? Simply said, we take pride in what we do and each and every member of our staff respects your property with the utmost respect. When you&#039;re anxious about a pending move, your moving issues become our issues. Get rid of your worries by using TopMovers. We complete the task and do it properly.', 'img/blog/e879ff3f29d10594788bd70f7ab2ea8c.png', '0000-00-00 00:00:00'),
(9, 'MOVING TIPS BY TOPMOVERS: THINGS YOU NEED TO CONSIDER.', '1)Plan ahead, not a day or a week before, but a month before.\r\n2)Moving to or from an apartment? Call the management and set-up your move-in and move-out dates and time.\r\n3)Organize your belongings. Donate or trash all the items that you don&rsquo;t need in your new home.\r\n4)Don&rsquo;t forget to buy the straps and a few pads. These will help you to secure your load and prevent possible damages in transit.\r\n5)Pack your dishes and fragile items in the small and medium boxes. Be sure to fill all the empty space inside the box.\r\n6)Cloth and other miscellaneous can be packed in the large and extra-large boxes.\r\n7)Have books? Use only small boxes. It will be easier for you to handle small boxes full of books rather than the large boxes.\r\n8)How to pack cloth on hangers? Pack it with a garbage bag and place it in your car or a wardrobe box if you have one.\r\n9)Don&rsquo;t pack liquids, flammables, and food. Take these items with you in the car, avoid long drives and extreme heat.\r\n10)Better move plants in your vehicle. It is not a good idea to load your plants with the furniture in the truck.\r\n11)Pre-pack your furniture, disassemble it and pack glass inserts with the bubble wrap. This will save you time and hassle on the day of your move.\r\n12)Get help. Friends and family can help you with the preparation, however, we suggest hiring movers when it comes to the loading of the truck.\r\n', 'img/blog/aeb1c9a6019fa455ce22813d4cff1b31.gif', '2022-07-09 07:00:00'),
(10, 'MOVING TIPS FOR YOUR MOVE WITH THE LOCAL MOVERS.', 'In this category, we will provide you with the moving tips to keep in mind while hiring and working with a local moving company. To find out more, read our article about Local Movers.\r\n\r\n1.Moving two bedrooms or less? Go with an hourly estimate. Three bedrooms or more? Talk to your mover about getting an in-home estimate done. It is important to get a moving expert to walk-thru your house and provide you with a binding estimate.\r\n2.When talking to the moving expert over the phone, be sure to mention all the details and questions you have. Specify the items you are moving, don&rsquo;t forget the fragile pieces. This way, you won&rsquo;t be surprised by the additional charges on the day of the move.\r\n3.Best time to book the local movers will be in the morning. No major delays or tired workers. Try to avoid late afternoons, weekends or evenings.\r\n4.Speed up the process by disassembling your furniture. Keep in mind, movers won&rsquo;t assemble furniture previously disassembled by you. You can save a lot, depending on the amount of work.\r\n5.Ask moving company to provide the boxes for a faster and more efficient move. (Some moving companies, like TopMovers, offer free rentals of the wardrobe boxes for your local move).\r\n6.Mark up boxes and stack them up on top of each other. Heavy on the bottom, lighter on top. Another way of saving some time.\r\n7.Clean out your fridge a few days before the move. This way you won&rsquo;t have to spend half a day unloading your fridge. It takes time, especially when you move.\r\n', 'img/blog/b8d12260d15d07fb46551933ae71d899.png', '2022-07-09 01:35:54'),
(11, 'HERE ARE SOME DON&#039;TS OF MOVING', '1. Wait until the night before or morning of to pack. \r\n\r\n2. load boxes with books. (who wants to deadlift a library) ðŸ™‚\r\n\r\n3. Remove your clothes from their hangers and take your clothes out of the drawers (Just drawers out of dressers).', 'img/blog/6284bffcfba5382cd33d451a4698a616.png', '0000-00-00 00:00:00'),
(12, 'HERE ARE SOME DO&#039;S OF MOVING', '1. Use space in your pots and pans for smaller items like spices and utensils (maximize space).\r\n\r\n2. Wrap fragile items with a layer of paper and bubble wrap. \r\n\r\n3.Make sure you have enough boxes, tape, and space inserts. \r\n4.Have plenty of blankets on hand.', 'img/blog/360c75d1cdba2f9744fd9f79ef3abc53.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `com_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`com_id`, `name`, `title`, `note`) VALUES
(1, 'Godsown Ajodo Kole', 'Abuja', 'TopMovers Delivered Exceptional Service For My Move Today. From The Scheduling Process To My Management Office, To The Actual Day Of The Move. They Were On Time, Friendly, Patient, And Very Considerate In Moving My Personal Belongings'),
(3, 'Ester Ewgu', 'Ebonyi', 'These Guys Stand Behind Their Service And Want To Ensure You Are Completely Satisfied.'),
(4, 'Godsgift Ude ', 'Kaduna', 'This Moving Company Was The Best Experience I&#039;ve Ever Had For Moving.'),
(5, 'Toniastore', 'Abuja', 'Great Experience. These Guys Are Excellent. We Had Two Locations To Pick Up Things Along The Way And The Team Still Managed To Finished Everything On Time.'),
(6, 'Fortune Okon', 'Lagos', 'I Must Say Topmovers Was A Joy To Deal With. They Are Very Professional And Took Great Care Of My Furniture. For My Next Move, I Would Definitely Request These Guys.'),
(7, 'Jones Denial ', 'Abuja', 'They Were Earlier Than Scheduled And They Did An Amazing Job With Everything, From Wrapping, To Deliver.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `images` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `images`) VALUES
(1, 'img/gallery/e248a6aa828977ae947dd5b923e1ec37.jpg'),
(2, 'img/gallery/80c91f352c44b1f5dbcc7b9d8a21cd66.jpg'),
(3, 'img/gallery/b01ddb1de16cd2f708a023f62de8c626.gif'),
(4, 'img/gallery/01cb2d09feeac6c2baa4d388231cdd05.png'),
(5, 'img/gallery/fc18e512109f64ba8c10f4166e0f46cd.jpg'),
(6, 'img/gallery/ebef04b8995189d3826af98ce24e1146.png'),
(7, 'img/gallery/7c0fa527fe489f50d48e953b449d7696.png'),
(8, 'img/gallery/0d3ce287997e4a341488f2518ddcddbb.gif');

-- --------------------------------------------------------

--
-- Table structure for table `gallery2`
--

CREATE TABLE `gallery2` (
  `gallery2_id` int(11) NOT NULL,
  `images` varchar(225) NOT NULL,
  `video` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery2`
--

INSERT INTO `gallery2` (`gallery2_id`, `images`, `video`) VALUES
(4, 'img/gallery/44c5a5a9cc7df336b2c81d74d8b4c546.jpg', ''),
(5, '', 'img/gallery/4110222f84d3f530588cd24b29a74978.mp4'),
(7, '', 'img/gallery/87ab145c20904982c8605e094b707048.mp4'),
(8, 'img/gallery/0c9a8e27a245b5914c1a935539853ba7.jpg', ''),
(9, 'img/gallery/febf35339be238a6e847352088edb3ed.gif', ''),
(10, 'img/gallery/21459cca17eb448723652b3af421b378.jfif', ''),
(11, 'img/gallery/b04068b9a3686a3ac953aa6a2ad063f7.jpg', ''),
(12, 'img/gallery/f3ecd9c3af889b8de030c3fea1f24d6a.jpg', ''),
(13, 'img/gallery/3f271bd6955fac9fd189c9449602d5af.jpg', ''),
(14, 'img/gallery/ed7af02fdb4819d03023e46715a1247c.jpg', ''),
(15, 'img/gallery/f5f54477baad058d4188ceb1105eaada.jpg', ''),
(16, 'img/gallery/3a272c37681f02352c9b449f9da6fa19.jpg', ''),
(17, '', 'img/gallery/3ba18087fcc5deb452a149c6ad85d892.mp4'),
(18, '', 'img/gallery/3b8338547a02f894b45b36fefdcadb49.mp4'),
(19, '', 'img/gallery/23befebbcbada0f2436decfe61c76f07.mp4'),
(20, '', 'img/gallery/bea0f790464763718142a499183cb86a.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `users_id` int(11) NOT NULL,
  `userEmail` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`users_id`, `userEmail`, `password`, `last_login`) VALUES
(2, 'ajogodsown@gmail.com', 'angel', '2022-07-02 01:34:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery2`
--
ALTER TABLE `gallery2`
  ADD PRIMARY KEY (`gallery2_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery2`
--
ALTER TABLE `gallery2`
  MODIFY `gallery2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
