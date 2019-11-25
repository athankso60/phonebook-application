-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2019 at 06:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `athankson_phonelist`
--

CREATE TABLE `athankson_phonelist` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athankson_phonelist`
--

INSERT INTO `athankson_phonelist` (`id`, `firstname`, `lastname`) VALUES
(1, 'Professorè', 'McProfessorface');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athankson_phonelist`
--
ALTER TABLE `athankson_phonelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athankson_phonelist`
--
ALTER TABLE `athankson_phonelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
