/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : sport

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-05-28 21:22:48
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
INSERT INTO `category` VALUES ('Хоккей', '6', '0');
INSERT INTO `category` VALUES ('Теннис', '3', '0');
INSERT INTO `category` VALUES ('Бег', '4', '0');
INSERT INTO `category` VALUES ('Другое', '5', '0');
INSERT INTO `category` VALUES ('Баскетбол', '2', '0');

-- ----------------------------
-- Table structure for `event`
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `time_begin` int(11) NOT NULL,
  `tel_num_org` decimal(10,0) NOT NULL,
  `max_people` int(11) NOT NULL,
  `id_org` int(11) NOT NULL,
  `count_people` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_pl` int(11) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES ('66', '', '1', '', '13', '0', '0', '0', '0', '2019-05-08', '2');
INSERT INTO `event` VALUES ('67', '', '1', '', '14', '0', '0', '0', '0', '2019-05-08', '2');
INSERT INTO `event` VALUES ('68', '111', '1', '111', '12', '11', '11', '0', '12', '2019-05-08', '2');
INSERT INTO `event` VALUES ('69', '111', '1', '111', '15', '11', '11', '0', '11', '2019-05-08', '2');
INSERT INTO `event` VALUES ('70', 'dfsa', '1', 'sada', '16', '22', '22', '0', '2', '2019-05-08', '2');
INSERT INTO `event` VALUES ('71', '', '1', '', '10', '0', '0', '0', '0', '2019-05-08', '9');
INSERT INTO `event` VALUES ('72', 'gfhd', '1', 'gfdg', '8', '33', '3', '0', '1', '2019-05-08', '6');
INSERT INTO `event` VALUES ('73', '', '0', '', '13', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('74', 'BVZ', '0', 'SADS', '8', '111123', '23', '0', '2', '2019-05-08', '1');
INSERT INTO `event` VALUES ('75', 'Наме42', '1', 'QWE', '9', '444', '56', '0', '4', '2019-05-08', '6');
INSERT INTO `event` VALUES ('76', '', '0', '', '12', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('77', 'FRWF', '0', 'WERER', '10', '333423', '22', '0', '3', '2019-05-08', '3');
INSERT INTO `event` VALUES ('78', '', '0', '', '16', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('79', '', '0', '', '22', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('80', '', '0', '', '21', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('81', '', '0', '', '20', '0', '0', '0', '0', '2019-05-08', '3');
INSERT INTO `event` VALUES ('82', '', '0', '', '17', '0', '0', '0', '0', '2019-05-08', '1');

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
  `begin` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `id_organ` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_pl`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of not_pay_pl
-- ----------------------------
INSERT INTO `not_pay_pl` VALUES ('1', 'Спорткомплекс Маяк', '30.069158', '0', '59.567458', '0', null, '8', '22', '1');
INSERT INTO `not_pay_pl` VALUES ('2', 'Name2', '30.118995', '1', '59.579098', '1', '10000', '12', '21', '0');
INSERT INTO `not_pay_pl` VALUES ('3', 'Спорткомплекс_Маяк', '30.135139', '0', '59.561321', '0', null, '10', '22', '2');
INSERT INTO `not_pay_pl` VALUES ('4', 'Детско-юношеская_спортивная_школа', '30.388711', '2', '59.625102', '1', '6000', '8', '22', '1');
INSERT INTO `not_pay_pl` VALUES ('5', 'Бассейн', '30.393264', '2', '59.625799', '0', null, '9', '22', '2');
INSERT INTO `not_pay_pl` VALUES ('6', 'ФОК Арена', '30.099750', '1', '59.559208', '1', '4000', '8', '22', '6');
INSERT INTO `not_pay_pl` VALUES ('7', 'Сиверский ФОК', '30.066947', '0', '59.359136', '0', null, '7', '22', '5');
INSERT INTO `not_pay_pl` VALUES ('8', 'ФОК Олимп', '30.395383', '2', '59.618970', '1', '3000', '8', '22', '0');
INSERT INTO `not_pay_pl` VALUES ('9', 'Балтийский', '30.105214', '1', '59.560677', '0', null, '8', '22', '1');
INSERT INTO `not_pay_pl` VALUES ('10', 'Бассейн Газпром', '30.319611', '1', '59.415794', '1', '2000', '10', '22', '0');

-- ----------------------------
-- Table structure for `organiz`
-- ----------------------------
DROP TABLE IF EXISTS `organiz`;
CREATE TABLE `organiz` (
  `Name` text NOT NULL,
  `female` text NOT NULL,
  `second_name` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_organ` int(11) NOT NULL AUTO_INCREMENT,
  `pasport` decimal(10,0) NOT NULL,
  `inn` decimal(10,0) NOT NULL,
  `conf` int(11) NOT NULL,
  PRIMARY KEY (`id_organ`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of organiz
-- ----------------------------
INSERT INTO `organiz` VALUES ('Луонид', 'Бочаров', 'Дмитриевич', '0', '0', '21341455', '12445', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `organ` int(11) DEFAULT NULL,
  `id_vk` int(11) NOT NULL,
  `female` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('0', 'Лёня', '0', '133936878', 'Дмитриев');
INSERT INTO `users` VALUES ('2', 'Денис', null, '84156080', 'Сычёв');
INSERT INTO `users` VALUES ('3', 'Ваня', null, '30313302', 'Яковлев');
INSERT INTO `users` VALUES ('4', 'Иван', null, '331622439', 'Поперечный');
INSERT INTO `users` VALUES ('5', 'Анастасия', null, '85586700', 'Зайцева');

-- ----------------------------
-- Table structure for `who_go`
-- ----------------------------
DROP TABLE IF EXISTS `who_go`;
CREATE TABLE `who_go` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of who_go
-- ----------------------------
INSERT INTO `who_go` VALUES ('0', '68');
INSERT INTO `who_go` VALUES ('0', '74');
INSERT INTO `who_go` VALUES ('0', '75');
INSERT INTO `who_go` VALUES ('0', '76');
INSERT INTO `who_go` VALUES ('0', '77');
INSERT INTO `who_go` VALUES ('0', '78');
INSERT INTO `who_go` VALUES ('0', '79');
INSERT INTO `who_go` VALUES ('0', '80');
INSERT INTO `who_go` VALUES ('0', '81');
INSERT INTO `who_go` VALUES ('0', '82');
INSERT INTO `who_go` VALUES ('5', '66');
INSERT INTO `who_go` VALUES ('5', '67');
INSERT INTO `who_go` VALUES ('5', '68');
INSERT INTO `who_go` VALUES ('5', '69');
INSERT INTO `who_go` VALUES ('5', '70');
INSERT INTO `who_go` VALUES ('5', '71');
INSERT INTO `who_go` VALUES ('5', '72');
INSERT INTO `who_go` VALUES ('5', '73');
