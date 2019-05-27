/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sport

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-05-25 18:16:02
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('Футбол', '0', '0');
INSERT INTO `category` VALUES ('Волейбол', '1', '0');
INSERT INTO `category` VALUES ('Хоккей', '2', '0');
INSERT INTO `category` VALUES ('Теннис', '3', '0');
INSERT INTO `category` VALUES ('Бег', '4', '0');
INSERT INTO `category` VALUES ('Другое', '5', '0');

-- ----------------------------
-- Table structure for `event`
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `description` text NOT NULL,
  `time_begin` time NOT NULL,
  `tel_num_org` decimal(10,0) NOT NULL,
  `max_people` int(11) NOT NULL,
  `id_org` int(11) NOT NULL,
  `count_people` int(11) NOT NULL,
  `time_end` time NOT NULL,
  `data` date NOT NULL,
  `id_pl` int(11) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of event
-- ----------------------------

-- ----------------------------
-- Table structure for `groupe`
-- ----------------------------
DROP TABLE IF EXISTS `groupe`;
CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `name_groupe` text NOT NULL,
  PRIMARY KEY (`id_groupe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groupe
-- ----------------------------
INSERT INTO `groupe` VALUES ('0', 'sport');
INSERT INTO `groupe` VALUES ('1', 'dosug');

-- ----------------------------
-- Table structure for `not_pay_pl`
-- ----------------------------
DROP TABLE IF EXISTS `not_pay_pl`;
CREATE TABLE `not_pay_pl` (
  `id_pl` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `point1` decimal(8,6) NOT NULL,
  `id_category` int(11) NOT NULL,
  `point2` decimal(8,6) NOT NULL,
  `PorN` int(11) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL,
  `begin` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `id_organ` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_pl`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of not_pay_pl
-- ----------------------------
INSERT INTO `not_pay_pl` VALUES ('1', 'Площадка1', '11.000000', '0', '0.000000', null, null, null, null, null);
INSERT INTO `not_pay_pl` VALUES ('2', 'Площадка2', '22.000000', '1', '0.000000', null, null, null, null, null);

-- ----------------------------
-- Table structure for `organiz`
-- ----------------------------
DROP TABLE IF EXISTS `organiz`;
CREATE TABLE `organiz` (
  `Name` text NOT NULL,
  `female` text NOT NULL,
  `second_name` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_organ` int(11) NOT NULL,
  `pasport` decimal(10,0) NOT NULL,
  `inn` decimal(10,0) NOT NULL,
  `conf` int(11) NOT NULL,
  PRIMARY KEY (`id_organ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of organiz
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `organ` int(11) DEFAULT NULL,
  `id_vk` int(11) NOT NULL,
  `female` text NOT NULL,
  PRIMARY KEY (`id_user`,`id_vk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('0', 'Лёня', '0', '133936878', 'Дмитриев');

-- ----------------------------
-- Table structure for `who_go`
-- ----------------------------
DROP TABLE IF EXISTS `who_go`;
CREATE TABLE `who_go` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of who_go
-- ----------------------------
