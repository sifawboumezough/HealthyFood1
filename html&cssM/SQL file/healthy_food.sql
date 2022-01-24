-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:08 PM
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
-- Database: `healthy_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_img` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_qty` varchar(256) NOT NULL,
  `product_price` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_img`, `product_id`, `product_name`, `product_qty`, `product_price`) VALUES
('\\phpsandbox\\html&cssM\\images\\img2.png', 25, 'Eggplant', '600KG', '4$'),
('\\phpsandbox\\html&cssM\\images\\img14.png', 27, 'Red Pepper', '850KG', '6$'),
('\\phpsandbox\\html&cssM\\images\\img17.png', 30, 'Cucumber', '299KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img18.png', 31, 'Broccoli', '1500KG', '22$'),
('\\phpsandbox\\html&cssM\\images\\img1.png', 32, 'Potato', '600KG', '12$'),
('\\phpsandbox\\html&cssM\\images\\img3.png', 33, 'Pomegranate', '700KG', '5$'),
('\\phpsandbox\\html&cssM\\images\\img9.png', 35, 'Lime', '800KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img11.png', 36, 'Corn', '500KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img12.png', 37, 'Grape', '400KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img4.png', 38, 'Blackberry', '400KG', '4$'),
('\\phpsandbox\\html&cssM\\images\\img5.png', 39, 'Pear', '500KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img6.png', 40, 'Prune', '650KG', '4$'),
('\\phpsandbox\\html&cssM\\images\\img7.png', 41, 'Apple', '400KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img8.png', 42, 'Strawberry', '400KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img10.png', 43, 'Onion', '400KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img15.png', 44, 'Tomato', '800KG', '2$'),
('\\phpsandbox\\html&cssM\\images\\img16.png', 45, 'Carrot', '400KG', '2$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
