-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mealbox3`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `unique_id`, `username`, `email`, `phone`, `address`, `image`, `password`, `status`) VALUES
(1, 1295110267, 'Mugheera', 'mugheera@lab.edu.bd', 0, '', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now'),
(3, 1225693689, 'Customer1', 'Customer1@email.com', 0, '', './images/received_423727181564301.jpeg', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(4, 883294772, 'Customer2', 'Customer2@email.com', 0, '', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(9, 489929076, 'Customer3', 'Customer3@email.com', 1234567893, 'Rawalpindi, new lalazar', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now'),
(10, 558006890, 'Customer4', 'Customer4@email.com', 2147483647, 'qwe', './images/received_416033615889610.jpeg', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_data`
--

CREATE TABLE `buyer_data` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(2) NOT NULL,
  `order_id` int(15) NOT NULL,
  `delivery_man` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_data`
--

INSERT INTO `buyer_data` (`id`, `unique_id`, `username`, `fullname`, `phone`, `address`, `cash`, `order_date`, `food_item`, `seller_name`, `total_quantity`, `unit_price`, `total_price`, `order_status`, `status`, `order_id`, `delivery_man`) VALUES
(1, 489929076, 'Customer3', 'Akbar', 1234567893, 'Rawalpindi, new lalazar', 'cash', '2022-01-30 03:26:04', 'Lahori Paaye', 'Admin Kitchen', 1, 140.00, 140.00, 'Delivered', 0, 1, 'blue'),
(5, 489929076, 'Customer3', 'Ali', 1234567893, 'Rawalpindi, new lalazar', 'cash', '2022-01-30 06:03:21', 'Karachi Bireyani', 'Admin Kitchen', 1, 180.00, 180.00, 'Delivered', 0, 11, 'blue'),
(6, 489929076, 'Customer3', 'Abdul', 1234567893, 'Rawalpindi, new lalazar', 'cash', '2022-01-30 06:03:20', 'Halwa Puri', 'Admin Kitchen', 1, 200.00, 200.00, 'Delivered', 0, 10, 'blue');

--
-- Table structure for table `cancel_order`
--
CREATE TABLE `cancel_order` (
  `id` int(15) NOT NULL,
  `buyer_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `status` int(2) NOT NULL,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancel_order`
--

INSERT INTO `cancel_order` (`id`, `buyer_name`, `fullname`, `phone`, `address`, `cash`, `order_date`, `food_item`, `seller_name`, `total_quantity`, `unit_price`, `total_price`, `status`, `order_status`, `order_id`) VALUES
(2, 'Customer3', 'Ali', 1234567893, 'Rawalpindi, new lalazar', 'cash', '2022-01-30 05:39:38', 'halwa puri', 'Admin Kitchen', 2, 120.00, 240.00, 0, 'Cancelled', 8),
(3, 'Customer3', 'Abdul', 1234567893, 'Rawalpindi, new lalazar', 'cash', '2022-01-30 05:41:23', 'Homemade Gulabjamun', 'Admin Kitchen', 1, 150.00, 150.00, 0, 'Cancelled', 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`) VALUES
(1, 1, 'Bakery'),
(2, 2, 'Bangla Cuisine'),
(3, 3, 'Chinese Cuisine'),
(4, 4, 'FastFood'),
(5, 5, 'Indian Cuisine'),
(6, 6, 'Light Snacks'),
(7, 7, 'pak Cuisine'),
(8, 8, 'Noodles & Pasta'),
(9, 9, 'Salad'),
(10, 10, 'Soup'),
(11, 11, 'Starter'),
(12, 12, 'Sweetdish');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `chat_id` int(255) NOT NULL,
  `food_id` int(255) NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `buyer_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(8) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` varchar(140) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `username`, `phone`, `address`, `password`, `image`) VALUES
(2, 'blue', 333, 'islamabad', 'bfbe04c28f819d2fa626d886a2bb1597', './images/user_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `category_id`, `category_name`, `food_name`, `image`, `price`, `seller_name`) VALUES
(1, 12, 'Basmati rice, Chicken or mutton, Yogurt, Onions, Tomatoes, Green chilies, Garlic, Ginger, Various spices (cumin, coriander, turmeric, garam masala', 'Biryani', './images/biryani0.jpg', 100.00, 'Admin Kitchen'),
(2, 12, 'Chicken, Tomatoes, Ginger garlic paste, Green chilies, Fresh coriander, Cumin seeds, Black pepper, Red chili powder, Garam masala, Cooking oil.', 'Chicken Karahi', './images/chiken.jpg', 150.00, 'Admin Kitchen'),
(3, 12, 'Beef shank, Bone marrow, Wheat flour (for thickening), Ginger garlic paste, Onions, Various spices (coriander, cumin, turmeric, garam masala), Ghee or cooking oil, Green chilies', 'Nihari', './images/Nehari.jpg', 120.00, 'Admin Kitchen'),
(4, 12, 'Wheat grains, Barley, Chicken or mutton, Lentils (masoor dal, moong dal), Ginger garlic paste, Onions, Tomatoes, Various spices (cumin, coriander, turmeric, garam masala), Ghee or cooking oil', 'Haleem', './images/Phirni.webp', 140.00, 'Admin Kitchen'),
(5, 12, 'Potatoes, Peas, Onions, Cilantro (coriander leaves), Green chilies, Cumin seeds, Turmeric powder, Garam masala, Salt, Oil (for frying), Wheat flour (for dough)', 'Samosa', './images/samosa5.jpg', 130.00, 'Admin Kitchen'),
(6, 1, 'Beef or mutton, Potatoes, Onions, Tomatoes, Ginger garlic paste, Green chilies, Various spices (cumin, coriander, turmeric, garam masala), Cooking oil', 'Aloo Gosht', './images/Aloo.jpg', 200.00, 'Admin Kitchen'),
(7, 1, 'Ground beef or lamb, Ginger garlic paste, Green chilies, Cilantro (coriander leaves), Mint leaves, Garam masala, Red chili powder, Salt, Skewers', 'Seekh Kabab', './images/bbq2.jpg', 220.00, 'Admin Kitchen'),
(8, 1, 'Whole wheat flour, Water, Salt, Ghee or oil (for cooking)', 'Chapati', './images/chapati5.jpg', 180.00, 'Admin Kitchen'),
(9, 2, 'Spinach, Onions, Tomatoes, Ginger garlic paste, Green chilies, Garam masala, Cooking cream or yogurt, Ghee or cooking oil.', 'Palak', './images/palak.jpg', 350.00, 'Admin Kitchen'),
(10, 2, 'Milk, Sugar, Paneer (Indian cottage cheese), Cardamom, Saffron (optional), Pistachios or almonds (for garnish)', 'Ras Malai', './images/rasmalai (536).jpg', 180.00, 'Admin Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1133306449, 1000581460, 'hi'),
(2, 1133306449, 1295110267, 'hello'),
(3, 839923796, 558006890, 'hey'),
(4, 558006890, 839923796, 'hi'),
(5, 558006890, 839923796, 'hi'),
(6, 1133306449, 489929076, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `cr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `message`, `status`, `cr_date`) VALUES
(7, 'Rana', 'qwerty', 1, '2022-01-28 05:22:25'),
(8, 'Raja', 'zxc', 1, '2022-01-28 05:25:19'),
(9, 'Butt', 'qwer', 1, '2022-01-28 05:42:23'),
(10, 'Bilawal', 'bnmj', 1, '2022-01-28 05:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `bid`) VALUES
(4, 'New Order', 'You have a new order please check', 1, 6),
(5, 'New Order', 'You have a new order please check', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `sellerid`, `buyerid`) VALUES
(8, 1, 1),
(7, 1, 1),
(6, 1, 2),
(9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE `order2` (
  `id` int(15) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `buyer_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `food_ingridient` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `delivery_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `unique_id`, `username`, `seller_name`, `phone`, `email`, `address`, `image`, `password`, `status`) VALUES
(1, 1133306449, 'Admin', 'Admin Kitchen', 1234567890, 'Admin@lab.edu.bd', 'Home', './images/10.jfif', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `seller_data`
--

CREATE TABLE `seller_data` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_data`
--

INSERT INTO `seller_data` (`id`, `unique_id`, `username`, `seller_name`, `food_name`, `image`, `price`) VALUES
(1, 1133306449, 'Admin', 'Admin Kitchen', 'Biryani', './images/biryani0.jpg', 100.00),
(2, 1133306449, 'Admin', 'Admin Kitchen', 'Chicken Karahi', './images/chiken.jpg', 150.00),
(3, 1133306449, 'Admin', 'Admin Kitchen', 'Nihari', './images/Nehari.jpg', 120.00),
(4, 1133306449, 'Admin', 'Admin Kitchen', 'Haleem', './images/Phirni.webp', 140.00),
(5, 1133306449, 'Admin', 'Admin Kitchen', 'Samosa', './images/samosa5.jpg', 130.00),
(6, 1133306449, 'Admin', 'Admin Kitchen', 'Aloo Gosht', './images/Aloo.jpg', 200.00),
(7, 1133306449, 'Admin', 'Admin Kitchen', 'Seekh Kabab', './images/bbq2.jpg', 220.00),
(8, 1133306449, 'Admin', 'Admin Kitchen', 'Chapati', './images/chapati5.jpg', 180.00),
(9, 1133306449, 'Admin', 'Admin Kitchen', 'Palak', './images/palak.jpg', 350.00),
(10, 1133306449, 'Admin', 'Admin Kitchen', 'Ras Malai', './images/rasmalai (536).jpg', 180.00);

--
-- Indexes for dumped 
--

--
-- Indexes for  `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_data`
--
ALTER TABLE `buyer_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`);

--
-- Indexes for table `cancel_order`
--
ALTER TABLE `cancel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `food_id` (`food_id`,`food_name`,`buyer_id`,`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`,`category_name`,`seller_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order2`
--
ALTER TABLE `order2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`,`seller_name`);

--
-- Indexes for table `seller_data`
--
ALTER TABLE `seller_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`,`seller_name`),
  ADD KEY `food_name` (`food_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buyer_data`
--
ALTER TABLE `buyer_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cancel_order`
--
ALTER TABLE `cancel_order`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `chat_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order2`
--
ALTER TABLE `order2`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seller_data`
--
ALTER TABLE `seller_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `food_recipe_db`
--
-- --------------------------------------------------------
--
-- Table structure for table `tbl_category`
CREATE TABLE `tbl_category` (
  `tbl_category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`tbl_category_id`, `category_name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Appetizer'),
(7, 'Dessert'),
(8, 'Fast Food');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe`
--

CREATE TABLE `tbl_recipe` (
  `tbl_recipe_id` int(11) NOT NULL,
  `tbl_category_id` int(11) NOT NULL,
  `recipe_image` text NOT NULL,
  `recipe_name` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipe_procedure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_recipe`
--


INSERT INTO tbl_recipe (tbl_recipe_id, tbl_category_id, recipe_image, recipe_name, recipe_ingredients, recipe_procedure) VALUES
(1, 2, 'biryani2.jpg', 'Biryani', '- 1 kg chicken or mutton\n- 3 cups basmati rice\n- 1 cup yogurt\n- 4 medium onions (sliced)\n- 3 medium tomatoes (chopped)\n- 4 green chilies (sliced)\n- 1/2 cup cooking oil\n- 1 tbsp ginger-garlic paste\n- 1 tsp turmeric powder\n- 2 tsp red chili powder\n- 1 tsp garam masala powder\n- Salt to taste\n- 1 bunch fresh coriander and mint leaves (chopped)', '1. Wash and soak the basmati rice for 30 minutes.\n2. Heat oil in a pan and fry onions until golden brown. Set half aside for garnishing.\n3. Add ginger-garlic paste, green chilies, and tomatoes to the pan and cook until soft.\n4. Add the chicken or mutton, turmeric powder, red chili powder, garam masala, and salt. Cook until meat is tender.\n5. Mix in yogurt, coriander, and mint leaves. Let it cook until oil separates.\n6. Boil the soaked rice with salt until 80% cooked, then drain.\n7. Layer rice and cooked meat in a pot, alternating, and sprinkle the fried onions on top.\n8. Cover and cook on low heat (dum) for 20-25 minutes.\n9. Serve hot with raita or salad.'),
(2, 2, 'chiken.jpg', 'Chicken Karahi', '- 1 kg chicken (cut into pieces)\n- 4 large tomatoes (chopped)\n- 3 green chilies (sliced)\n- 1/2 cup cooking oil\n- 1 tbsp ginger-garlic paste\n- 1 tsp red chili powder\n- 1 tsp cumin seeds\n- 1 tsp garam masala powder\n- 1 tsp crushed black pepper\n- Salt to taste\n- Fresh coriander leaves (chopped)', '1. Heat oil in a wok or karahi and add cumin seeds.\n2. Add chicken and fry until it changes color.\n3. Add ginger-garlic paste and cook for a minute.\n4. Add tomatoes, red chili powder, and salt. Cook until tomatoes are soft and oil separates.\n5. Add green chilies, black pepper, and garam masala powder. Cook for another 5 minutes.\n6. Garnish with fresh coriander leaves and serve hot with naan or chapati.'),
(3, 2, 'Nehari.jpg', 'Nihari', '- 1 kg beef shank or mutton\n- 1/2 cup wheat flour (atta)\n- 1 cup cooking oil\n- 2 large onions (sliced)\n- 2 tbsp ginger-garlic paste\n- 2 tbsp Nihari masala\n- 1 tsp red chili powder\n- 1 tsp turmeric powder\n- Salt to taste\n- Water as needed\n- Fresh coriander and ginger (for garnish)', '1. Heat oil in a pot and fry onions until golden brown. Remove half for garnishing.\n2. Add ginger-garlic paste and cook for a minute.\n3. Add meat, Nihari masala, red chili powder, turmeric powder, and salt. Cook for 10 minutes.\n4. Add water to cover the meat and bring it to a boil. Cover and cook on low heat for 2-3 hours until meat is tender.\n5. Mix wheat flour with water to make a slurry and add it to the pot to thicken the gravy.\n6. Simmer for another 15 minutes and garnish with fresh coriander, ginger, and fried onions. Serve hot with naan.'),
(4, 2, 'haleem4.jpg', 'Haleem', '- 500g boneless beef or mutton\n- 1 cup wheat grains (soaked overnight)\n- 1/2 cup lentils (chana, masoor, moong, urad)\n- 2 large onions (sliced)\n- 1 tbsp ginger-garlic paste\n- 2 tbsp haleem masala\n- 1/2 cup cooking oil\n- Salt to taste\n- Fresh coriander, mint, ginger, and fried onions for garnish\n- Lemon wedges', '1. Boil wheat grains and lentils until soft and blend into a smooth paste.\n2. Heat oil in a pot and fry onions until golden brown. Remove half for garnish.\n3. Add meat, ginger-garlic paste, and haleem masala. Cook until meat is tender.\n4. Shred the meat and mix it into the wheat-lentil paste.\n5. Cook the mixture on low heat, stirring frequently to avoid sticking, until it thickens.\n6. Garnish with fresh coriander, mint, ginger, fried onions, and lemon wedges. Serve hot.'),
(5, 2, 'samosa5.jpg', 'Samosa', '- 250g minced beef or chicken\n- 1 medium onion (finely chopped)\n- 1 tsp ginger-garlic paste\n- 1/2 tsp turmeric powder\n- 1/2 tsp red chili powder\n- 1/2 tsp garam masala powder\n- Salt to taste\n- 10-12 samosa sheets\n- Oil for frying', '1. Heat oil in a pan and fry onions until soft.\n2. Add ginger-garlic paste, turmeric powder, red chili powder, garam masala, and salt. Cook for a minute.\n3. Add minced meat and cook until done. Let it cool.\n4. Fill samosa sheets with the prepared filling and seal with water or flour paste.\n5. Heat oil in a deep pan and fry samosas until golden brown. Serve hot with chutney or ketchup.'),
(6, 3, 'Aloo.jpg', 'Aloo Gosht', '- 500g mutton or beef\n- 2 medium potatoes (peeled and cubed)\n- 2 medium onions (sliced)\n- 2 medium tomatoes (chopped)\n- 1 tbsp ginger-garlic paste\n- 1 tsp turmeric powder\n- 1 tsp red chili powder\n- 1/2 tsp cumin seeds\n- 1/2 tsp garam masala powder\n- 1/4 cup cooking oil\n- Salt to taste\n- Fresh coriander for garnish', '1. Heat oil in a pot and fry onions until golden brown.\n2. Add ginger-garlic paste, turmeric, red chili powder, cumin seeds, and salt. Fry for 1-2 minutes.\n3. Add mutton or beef and cook until the meat changes color.\n4. Add tomatoes and cook until they soften and the oil separates.\n5. Add potatoes, mix well, and add enough water to cook the meat and potatoes.\n6. Cover and cook on low heat until the meat and potatoes are tender.\n7. Sprinkle garam masala and garnish with fresh coriander. Serve hot with naan or rice.'),
(7, 3, 'bbq4.jpg', 'Seekh Kabab', '- 500g minced beef or mutton\n- 1 medium onion (finely chopped)\n- 2 tbsp ginger-garlic paste\n- 1 tsp red chili powder\n- 1/2 tsp turmeric powder\n- 1 tsp garam masala powder\n- 1 tbsp roasted cumin powder\n- Salt to taste\n- Fresh coriander and green chilies (finely chopped)\n- 2 tbsp oil for greasing', '1. In a bowl, mix minced meat with onion, ginger-garlic paste, red chili powder, turmeric, garam masala, cumin, salt, coriander, and green chilies.\n2. Knead the mixture well and refrigerate for 30 minutes.\n3. Shape the mixture onto skewers and press firmly.\n4. Grease a grill or frying pan with oil and cook the kababs until evenly browned and cooked through.\n5. Serve hot with chutney, salad, or naan.'),
(8, 2, 'chapati5.jpg', 'Chapati', '- 2 cups whole wheat flour\n- 1/2 tsp salt\n- 3/4 cup water (adjust as needed)\n- 1 tbsp oil (optional)', '1. In a bowl, mix flour and salt. Gradually add water and knead into a smooth dough. Rest for 20-30 minutes.\n2. Divide the dough into small balls and roll each ball into a thin round shape.\n3. Heat a tawa or skillet on medium heat and cook the chapati on both sides until puffed and lightly browned.\n4. Serve hot with curry or vegetables.'),
(9, 4, 'palak.jpg', 'Palak Gosht', '- 500g mutton or beef\n- 2 bunches fresh spinach (washed and chopped)\n- 2 medium onions (sliced)\n- 2 medium tomatoes (chopped)\n- 1 tbsp ginger-garlic paste\n- 1 tsp red chili powder\n- 1/2 tsp turmeric powder\n- 1/2 tsp cumin seeds\n- Salt to taste\n- 1/4 cup cooking oil', '1. Heat oil in a pot and fry onions until golden brown.\n2. Add ginger-garlic paste, red chili powder, turmeric, cumin seeds, and salt. Fry for a minute.\n3. Add mutton or beef and cook until it changes color.\n4. Add tomatoes and cook until soft and oil separates.\n5. Add spinach, mix well, and cover. Cook on low heat until the meat is tender and spinach is cooked.\n6. Serve hot with naan or rice.'),
(10, 8, 'rasmalai (536).jpg', 'Ras Malai', '- 1 liter milk\n- 1 cup sugar\n- 1/2 tsp cardamom powder\n- 1 tbsp lemon juice\n- 1/4 cup powdered milk\n- 1 tbsp flour\n- 2 tbsp ghee\n- 1/4 cup crushed nuts (almonds, pistachios)', '1. Boil 1/2 liter milk and add lemon juice to curdle it. Strain the paneer and knead into a smooth dough.\n2. Mix powdered milk, flour, and ghee with the paneer and shape into small balls.\n3. Boil the remaining milk with sugar and cardamom powder.\n4. Add paneer balls and cook on low heat until they double in size.\n5. Garnish with crushed nuts and serve chilled.');
-- INSERT INTO `tbl_recipe` (`tbl_recipe_id`, `tbl_category_id`, `recipe_image`, `recipe_name`, `recipe_ingredients`, `recipe_procedure`) VALUES
-- (1, 2, 'biryani0.jpg', 'Bireyani', '- 4 large eggs\r\n- 2/3 cup milk\r\n- 2 teaspoons cinnamon\r\n- Pinch nutmeg\r\n- 8 thick slices slightly stale Italian bread ¾ inch\r\n- 2 tablespoons melted butter or neutral oil\r\n- Maple syrup, butter, fruit, and confectioners’ sugar for serving', '1. Whisk together eggs, milk, cinnamon, and nutmeg in a medium bowl. Add in any other spices or seasonings at this time; you can add a pinch of ground cardamom or allspice if you like for an extra touch. Whisk egg mixture until well blended and pour into a wide shallow bowl or cake pan.\r\n\r\n2. Place each slice of bread into egg mixture, immersing bread and allowing it to soak for 1 minute.\r\n\r\n3. Melt butter in a large skillet over medium-high. Lift bread from egg mixture, letting excess egg drip off before placing bread in skillet. Fry French toast until browned on one side, about 2 minutes. Flip and brown on other side, about 2 minutes. Repeat with remaining bread. Serve French toast hot with butter, maple syrup, and/or fresh berries or other fruit. Dust with confectioners’ sugar if desired.'),
-- (2, 2, 'chiken.jpg', 'Chicken kadahi', '- 4 (1/2-inch-thick) good-quality firm white sandwich bread slices\r\n- 3 tablespoons unsalted butter, softened, divided\r\n- 1 tablespoon all-purpose flour\r\n- ¾ cup whole milk\r\n- 4 ounces Gruyère cheese, grated on small holes of box grater (about 1 cup), divided\r\n- ½ teaspoon kosher salt\r\n- ¼ teaspoon black pepper, plus more for garnish\r\n- ¼ teaspoon ground nutmeg\r\n- 4 slices cooked unsmoked ham (3 ounces total; such as Jamon de Paris)\r\n- 1 tablespoon Dijon mustard\r\n- 2 large eggs\r\n- Chopped fresh chives\r\n- Flaky sea salt', '1. Preheat oven to broil with rack about 8 inches from heat source. Heat a large nonstick skillet over medium-high. Spread 1 side of bread slices evenly with 1 tablespoon of the butter. Place bread slices, buttered side down, in skillet; cook until toasted and golden, 2 to 4 minutes. Transfer bread to a work surface. Wipe skillet clean.\r\n2. Melt 1 tablespoon of the butter in a small saucepan over medium until foamy. Whisk in flour; cook, whisking constantly, until light golden, about 1 minute, 30 seconds. Gradually whisk in milk; bring to a simmer over medium, whisking constantly. Reduce heat to low; cook, whisking often, until thickened, about 3 minutes. Remove from heat. Add 1/4 cup of the grated Gruyère and whisk until melted. Stir salt, pepper, and nutmeg into the Mornay sauce. (If not using immediately, cover surface of sauce directly with plastic wrap for up to 1 hour.)\r\n3. Arrange 2 of the bread slices on a work surface, toasted side down. On each slice, spread 2 tablespoons Mornay sauce to evenly to cover the surface. Sprinkle with 1/4 cup grated Gruyère, and top with 2 ham slices. Spread mustard evenly on untoasted sides of remaining 2 bread slices; place, mustard side down, on top of ham-topped slices. Spread remaining Mornay sauce evenly on top of sandwiches, then top with remaining 1/4 cup grated Gruyère.\r\n4. Transfer sandwiches to a rimmed baking sheet, and broil in preheated oven until cheese has melted and top is bubbly and browning in spots, 5 to 7 minutes.\r\n5. Meanwhile, melt remaining 1 tablespoon butter in cleaned nonstick skillet over medium-high. Crack eggs into skillet; cook, undisturbed, until whites are set but yolks are runny, about 3 minutes.\r\n6. Top each sandwich with a fried egg; garnish with chives, flaky sea salt, and additional pepper.'),
-- (3, 2, 'Nehari.jpg', 'Nihari', '- 3 large egg yolks\r\n- 1 tablespoon cold water\r\n- 1 teaspoon cornstarch\r\n- 1 teaspoon Dijon mustard\r\n- 1 ½ tablespoons fresh lemon juice, divided\r\n- 1 teaspoon kosher salt, divided\r\n- 12 tablespoons unsalted butter (6 ounces), melted, plus 2 tablespoons cold unsalted butter, divided\r\n- ⅛ teaspoon cayenne pepper\r\n- Warm water, as needed\r\n- 4 cold large eggs\r\n- 4 (1/2-inch-thick) sourdough bread slices, toasted\r\n- 8 thin prosciutto or speck slices (about 4 ounces)\r\n- 2 tablespoons roughly chopped fresh soft herbs (such as tarragon and chives)\r\n- Freshly ground black pepper (optional)', '1. Whisk egg yolks in a small saucepan until smooth, about 1 minute. Add 1 tablespoon cold water, cornstarch, Dijon, 1 tablespoon lemon juice, and 1/2 teaspoon salt; whisk until thoroughly combined. Prepare a bowl of ice water large enough to dip bottom of saucepan into; set aside.\r\n2. Add 1 tablespoon cold butter to egg yolk mixture; place over very low heat. Cook, whisking constantly, until thickened and bubbles have disappeared, 1 to 2 minutes, being careful not to curdle egg mixture. (If egg mixture looks anything but perfectly smooth, remove from heat, and briefly plunge saucepan into ice water, whisking constantly.) When butter is completely incorporated and mixture has thickened, immediately add remaining 1 tablespoon cold butter; remove from heat, and whisk until smooth.\r\n3. While whisking egg yolk mixture constantly, slowly add 2 tablespoons melted butter, 1/4 teaspoon at a time, until mixture begins to thicken, about 1 minute. Whisking constantly, add remaining 10 tablespoons melted butter, 1 tablespoon at a time, until sauce is smooth, about 2 minutes. Whisk in cayenne, remaining 1/2 tablespoons lemon juice, and remaining 1/2 teaspoon salt. Add warm water, 1 teaspoon at a time, as needed until sauce is thin enough to spread out on its own a bit but still thick and billowy. Cover pan, and move to back of stove, or set over another pan with hot water in it, to keep sauce warm. Add more warm water to thin if needed after resting.\r\n4. Set a steamer basket in a medium saucepan, and fill pan with 1 inch of water. Bring to a simmer over medium; add cold eggs. Cover and cook eggs 7 minutes for runny yolks, increasing time by 30-second increments up to 8 minutes and 30 seconds for less runny yolks. Transfer eggs to ice bath; let stand 1 to 2 minutes. Carefully peel eggs.\r\n5. To assemble, drape each piece of sourdough toast with 2 prosciutto slices. Cut peeled eggs carefully in half lengthwise, and top each toast with 2 egg halves. Spoon 1/4 cup hollandaise over each toast; sprinkle with herbs and, if desired, black pepper.'),
-- (4, 2, 'Phirni.webp', 'Haleem', '- 2 lbs. chicken cut into serving pieces\r\n- 1 tablespoon curry powder\r\n- 1 piece potato cubed\r\n- 4 cloves garlic minced\r\n- 2 stalks celery sliced\r\n- 1 piece red bell pepper sliced\r\n- 2 pieces long green pepper\r\n- 1 piece onion chopped\r\n- 2 thumbs ginger cut into strips\r\n- 2 cups coconut milk\r\n- 1/2 cup all-purpose cream optional\r\n- 1 cup water\r\n- fish sauce and ground black pepper to taste', '1. Heat oil in a pan. Fry potato for 1 minute per side. Remove from the pan. Set aside.\r\n2. Using the remaining oil, saute garlic, onion, celery, and ginger until onion softens.\r\n3. Add the chicken pieces. Saute until the outer part of the chicken turns light brown.\r\n4. Add 1 tablespoon fish sauce. Continue sautéing for 1 minute.\r\n5. Pour-in coconut milk and water. Let boil.\r\n6. Add curry powder. Stir until the powder is completely diluted. Cover the pot and continue cooking between low to medium heat until the liquid reduces to half.\r\n7. Add the red bell pepper and pan fried-potato. Cook for 5 minutes.\r\n8. Season with fish sauce and ground black pepper as needed. You can also add all-purpose cream if desired.\r\n9. Transfer to a serving bowl. Serve and enjoy!'),
-- (5, 2, 'samosa5.jpg', 'Samosa', '- 2 lbs beef shank\r\n- ½ cabbage whole leaf individually detached\r\n- 1 bundle bok choy\r\n- 2 cobs corn each cut into 3 parts\r\n- 2 Tablespoons whole peppercorn\r\n- 1/2 cup green onions cut unto 1 1/2 inch pieces\r\n- 1 onion\r\n- 3/4 ounces water\r\n- fish sauce to taste optional', '1. In a big cooking pot, pour in water and bring to a boil\r\n2. Put-in the beef shank followed by the onion and whole pepper corn then simmer for 1.5 hours (30 mins if using a pressure cooker) or until meat is tender.\r\n3. Add the corn and simmer for another 10 minutes\r\n4. Add the fish sauce,cabbage, pechay, and green onion (onion leeks)\r\n5. Serve hot. Share and Enjoy!'),
-- (6, 3, 'Aloo.jpg', 'Aloo Gosht', '- 8 ounces fettuccine, uncooked\r\n- 2 cups fresh broccoli florets\r\n- ¼ cup Kraft Zesty Italian Dressing\r\n- 1 pound boneless skinless chicken breasts, cut into bite-sized pieces\r\n- 1 ⅔ cups milk\r\n- 4 ounces Philadelphia Cream Cheese, cubed\r\n- ¼ cup Kraft Grated Parmesan Cheese\r\n- ½ teaspoon dried basil leaves', '1. Cook pasta as directed on package, adding broccoli to the boiling water for the last 2 minutes of the pasta cooking time. Drain pasta mixture.\r\n2. Meanwhile, heat dressing in large nonstick skillet on medium-high heat. Add chicken and cook until no longer pink in the center, stirring occasionally, about 5 to 7 minutes.\r\n3. Stir in milk, cream cheese, Parmesan cheese, and basil. Bring to a boil, stirring constantly. Cook until sauce is well blended and heated through, about 1 to 2 minutes.\r\n4. Add chicken mixture to pasta mixture; mix lightly.'),
-- (7, 3, 'bbq2.jpg', 'Seekh kabab', '- 2 tablespoons vegetable oil\r\n- 3 medium onions, finely chopped\r\n- 1 teaspoon salt\r\n- 4 cloves garlic, crushed\r\n- 1 tablespoon minced fresh ginger\r\n- 1/4 cup hot water\r\n- 1 teaspoon chili powder\r\n- 1 teaspoon ground coriander\r\n- 1 teaspoon ground cumin\r\n- 1/2 teaspoon ground turmeric\r\n- 2 medium tomatoes, chopped\r\n- 2 green chiles, halved lengthways (Optional)\r\n- 2 skinless, boneless chicken breast halves, cubed\r\n- 1 teaspoon curry paste, such as Patak\s\r\n- 1/4 cup fresh cilantro leaves, chopped', '1. Heat oil in a nonstick pan over high heat. Add onion and salt; cook and stir until onion has softened, about 5 minutes.\r\n2. Reduce heat to low; stir in garlic and ginger until fragrant. Add hot water; cover, and cook, stirring occasionally, until water has evaporated, about 5 minutes.\r\n3. Add chili powder, ground coriander, cumin, and turmeric; cook and stir over high heat until spices are toasted, about 5 minutes. Stir in tomatoes and green chiles; cover and cook over low heat for 5 minutes.\r\n4. Add chicken; cook and stir over high heat until browned, 5 to 7 minutes. Stir in curry paste; reduce heat to low, cover and cook until chicken is cooked through, adding a little water if necessary, about 5 minutes. Check seasoning and sprinkle with freshly chopped cilantro.'),
-- (8, 2, 'chapati5.jpg', 'Chapati', '- 1 (5 1/2 pound) corned beef brisket with spice packet\r\n- 7 small potatoes, peeled and diced\r\n- 4 medium carrots, peeled and diced\r\n- 1 medium onion, diced\r\n- 3 cloves garlic, chopped', '1. Preheat the oven to 300 degrees F (150 degrees C).\r\n2. Place corned beef brisket in the center of a roasting pan. Arrange potatoes and carrots around the sides, then scatter onion and garlic over top. Sprinkle seasoning packet over beef, then pour in water until potatoes are almost covered. Cover with a lid or heavy aluminum foil.\r\n3. Roast in the preheated oven until corned beef is so tender it can be flaked apart with a fork, about 5 to 6 hours.'),
-- (9, 4, 'palak.jpg', 'Palak', '- 1/2 lb ground sirloin\r\n- 2 tablespoons minced onion\r\n- 1 clove garlic, minced\r\n- 3 tablespoons milk or half and half\r\n- 1 teaspoon kosher salt\r\n- 1/2 teaspoon freshly ground black pepper\r\n- 1 teaspoon dried basil\r\n- 1/2 teaspoon dried oregano\r\n- 1 large egg, lightly beaten', '1. Preheat the oven to 325 degrees F (165 degrees C).\r\n2. Combine sirloin, oinon, garlic, milk, salt, pepper, basil, oregano, and egg in a bowl and mix. Stir in breadcrumbs until well combined. Spread meat\r\nmixture in a thin layer evenly on top of 24 crackers. Top with a slice of mozzarella cheese and 2nd cracker.\r\n3. Place crackers on a baking sheet and brush the tops evenly with olive oil.\r\nBake in the preheated oven until meat is golden brown around the edges and cooked through and cheese is melted, 10 to 12 minutes.\r\n4. Serve with warm marinara sauce for dipping.'),
-- (10, 8, 'rasmalai (536).jpg', 'Ras Malai', '- 8 potatoes, peeled and cut into 1/4-inch thick fries\r\n- ¼ cup white sugar\r\n- 2 tablespoons corn syrup\r\n- 1 quart canola oil, or as needed\r\n- sea salt to taste', '1. Place potatoes in a bowl and cover with water; let sit for 5 minutes. Drain and pat dry.\r\n2. Place potatoes in a bowl and cover with boiling water; add sugar and corn syrup and mix well. Place bowl in the refrigerator and let sit for 5 minutes. Drain and pat dry.\r\n3. Spread potatoes out in a baking dish, cover the dish with plastic wrap, and freeze for 30 minutes.\r\n4. Heat oil in a deep-fryer or large saucepan to 350 degrees F (175 degrees C).\r\n5. Working in batches, fry potatoes in hot oil for 2 minutes. Transfer to a paper towel-lined plate to dry and let cool for 15 minutes.\r\n6. Working in batches again, fry potatoes in hot oil until browned and crispy, 5 to 7 minutes. Season fries with sea salt.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`tbl_category_id`);

--
-- Indexes for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD PRIMARY KEY (`tbl_recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `tbl_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  MODIFY `tbl_recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;
