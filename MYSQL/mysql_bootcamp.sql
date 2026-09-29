-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2026 at 07:18 AM
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
-- Database: `mysql_bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(12,2) NOT NULL,
  `order_status` enum('pending','processing','shipped','completed','cancelled') DEFAULT 'pending',
  `payment_status` enum('unpaid','paid','refunded') DEFAULT 'unpaid',
  `shipping_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_price` decimal(12,2) NOT NULL,
  `subtotal` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `rating` decimal(2,1) DEFAULT 0.0,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orders_user` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `fk_items_order` (`order_id`),
  ADD KEY `fk_items_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_items_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- 1.1 Menambahkan Satu Produk Baru
INSERT INTO products (name, category, price, stock, rating, description, image_url)
VALUES (
    'Headphone Wireless Noise Cancelling', 
    'Gadget', 
    1750000.00, 
    20, 
    4.8, 
    'Headphone premium dengan fitur peredam bising aktif dan daya tahan baterai 30 jam.', 
    'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500'
);

-- 1.2 Menambahkan Banyak Produk Sekaligus (Batch Insert)
INSERT INTO products (name, category, price, stock, rating, description, image_url)
VALUES 
(
    'Keyboard Mechanical RGB Wireless', 
    'Elektronik', 
    890000.00, 
    40, 
    4.7, 
    'Keyboard mekanikal dengan switch hotswap dan koneksi Bluetooth.', 
    'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500'
),
(
    'Sepatu Running LightSpeed', 
    'Olahraga', 
    650000.00, 
    15, 
    4.6, 
    'Sepatu lari ringan dengan bantalan empuk anti-selip.', 
    'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500'
);



-- 2.1 Membaca Seluruh Data Produk
SELECT * FROM products;

-- 2.2 Membaca Produk Spesifik Berdasarkan ID (Primary Key)
SELECT * FROM products 
WHERE product_id = 1;

-- 2.3 Membaca Kolom Tertentu Saja (Optimasi Performa Query)
SELECT product_id, name, price, stock, category 
FROM products;

-- 2.4 Memfilter Produk Berdasarkan Kategori
SELECT * FROM products 
WHERE category = 'Elektronik';

-- 2.5 Pencarian Produk Berdasarkan Kata Kunci Nama / Deskripsi (LIKE Search)
SELECT * FROM products 
WHERE name LIKE '%Laptop%' OR description LIKE '%Laptop%';

-- 2.6 Filter Kombinasi (Harga di antara rentang tertentu dan Stok masih ada)
SELECT * FROM products 
WHERE price BETWEEN 100000.00 AND 2000000.00 
  AND stock > 0;

-- 2.7 Pengurutan Data (Sorting) - Contoh: Harga Termurah ke Termahal
SELECT product_id, name, price, stock, rating 
FROM products 
ORDER BY price ASC;

-- 2.8 Pengurutan Data - Contoh: Rating Tertinggi
SELECT product_id, name, price, rating 
FROM products 
ORDER BY rating DESC;

-- 2.9 Pembatasan Jumlah Data & Halaman (Pagination)
-- Menampilkan 5 data pertama (Halaman 1)
SELECT product_id, name, price, category 
FROM products 
ORDER BY created_at DESC 
LIMIT 5 OFFSET 0;



-- 3.1 Memperbarui Stok Produk (Misal setelah ada barang masuk)
UPDATE products 
SET stock = stock + 10,
    updated_at = CURRENT_TIMESTAMP
WHERE product_id = 1;

-- 3.2 Memperbarui Harga dan Stok Produk Spesifik
UPDATE products 
SET price = 11999000.00, 
    stock = 25,
    updated_at = CURRENT_TIMESTAMP
WHERE product_id = 1;

-- 3.3 Memperbarui Informasi Lengkap Produk
UPDATE products 
SET name = 'Laptop Ultra Slim Pro 14 Gen 2',
    price = 12999000.00,
    description = 'Laptop bertenaga Intel i7 generasi terbaru, RAM 32GB, SSD 1TB.',
    rating = 4.9,
    updated_at = CURRENT_TIMESTAMP
WHERE product_id = 1;

-- 3.4 Diskon Massal (Update Harga Berdasarkan Kategori) - Potongan 10%
UPDATE products 
SET price = price * 0.90,
    updated_at = CURRENT_TIMESTAMP
WHERE category = 'Fashion';



-- 4.1 Menghapus Satu Produk Berdasarkan ID
DELETE FROM products 
WHERE product_id = 5;

-- 4.2 Menghapus Produk yang Stoknya Habis (Stok = 0)
DELETE FROM products 
WHERE stock = 0;

-- 4.3 Menghapus Produk Berdasarkan Kategori Spesifik
DELETE FROM products 
WHERE category = 'Buku';
