-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 188.121.42.42
-- Generation Time: Oct 26, 2010 at 04:43 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qdbphpprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(11) NOT NULL auto_increment COMMENT 'Todo ID',
  `info` text NOT NULL COMMENT 'Information',
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'Timestamp',
  PRIMARY KEY  (`todo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores the todo information' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` VALUES(9, 'Sys - prevent URI from being able to load other classes.', '2010-10-23 13:56:28');
INSERT INTO `todo` VALUES(8, 'Sys - asdasd', '2010-10-23 13:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` mediumint(9) NOT NULL auto_increment COMMENT 'Update ID',
  `info` text NOT NULL COMMENT 'Information',
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'Timestamp',
  PRIMARY KEY  (`update_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Stores information on the Updates' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` VALUES(2, 'hf', '2010-10-23 13:11:49');
INSERT INTO `updates` VALUES(3, 'hf', '2010-10-23 13:12:15');
INSERT INTO `updates` VALUES(4, 'hf', '2010-10-23 13:12:28');
INSERT INTO `updates` VALUES(5, 'hf', '2010-10-23 13:12:28');
INSERT INTO `updates` VALUES(6, 'hf', '2010-10-23 13:13:11');
INSERT INTO `updates` VALUES(7, 'Sys - wokr', '2010-10-23 13:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(6) NOT NULL auto_increment COMMENT 'User ID',
  `username` varchar(16) NOT NULL COMMENT 'User / Login Name',
  `password` varchar(36) NOT NULL COMMENT 'MD5 Password Hash',
  `email` varchar(64) NOT NULL COMMENT 'Email Address',
  `activated` tinyint(1) NOT NULL default '0' COMMENT 'Account Activated',
  PRIMARY KEY  (`uid`),
  UNIQUE KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Users table' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(1, 'test', 'test', 'test@email.com', 1);
INSERT INTO `user` VALUES(2, 'test2', 'test2', 'test2@email.com', 0);
