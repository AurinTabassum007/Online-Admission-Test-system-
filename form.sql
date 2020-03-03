-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 10:01 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



create database form;


CREATE TABLE `info` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `info` (`id`, `name`, `password`, `email`, `address`, `birth`, `gender`, `course`) VALUES;



CREATE TABLE `mark` (
  `email` varchar(100) NOT NULL,
  `count` int(11) NOT NULL,
  `qus1` varchar(20) NOT NULL,
  `qus2` varchar(20) NOT NULL,
  `qus3` varchar(20) NOT NULL,
  `qus4` varchar(20) NOT NULL,
  `qus5` varchar(20) NOT NULL,
  `qus6` varchar(20) NOT NULL,
  `qus7` varchar(20) NOT NULL,
  `qus8` varchar(20) NOT NULL,
  `qus9` varchar(20) NOT NULL,
  `qus10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `mark`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


