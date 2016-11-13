/*
Navicat MySQL Data Transfer

Source Server         : my5
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : creditcard

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-11-13 22:07:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `creditcard`
-- ----------------------------
DROP TABLE IF EXISTS `creditcard`;
CREATE TABLE `creditcard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` text NOT NULL,
  `cardholder` varchar(255) DEFAULT NULL,
  `vcc` text NOT NULL,
  `month_expired` int(2) NOT NULL,
  `year_expired` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of creditcard
-- ----------------------------
INSERT INTO `creditcard` VALUES ('1', 'YlVkTTYzV1MxalR0K2pqa0FmZkxMWjNObFRvdHNVVlhKMWVib1UrWDIwMD0=', 'Agus Bawa', '431', '3', '2018');
INSERT INTO `creditcard` VALUES ('3', 'WFlsWTNpeExuN1JIbDJyNEp0a0F2ekNSbjdnbjNaVFVmbGkzaGtHT1VaQT0=', 'HusFem', '431', '1', '2016');
