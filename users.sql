-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2019 at 08:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `athankson_users`
--

CREATE TABLE `athankson_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athankson_users`
--

INSERT INTO `athankson_users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'athankso', '$2y$10$PQNS6FNL6t7QGoOb6MVNMusTrwpkH8f5TZrN1AJNk0krPxuEzinUG', '2019-11-25 13:46:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athankson_users`
--
ALTER TABLE `athankson_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athankson_users`
--
ALTER TABLE `athankson_athankson_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
