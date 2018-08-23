/*
Navicat MySQL Data Transfer

Source Server         : 192.168.3.49_3306
Source Server Version : 50556
Source Host           : 192.168.3.49:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2018-08-23 18:32:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(30) unsigned NOT NULL DEFAULT '0' COMMENT '父级ID',
  `name` varchar(100) NOT NULL COMMENT '分类名称',
  `intro` varchar(500) NOT NULL COMMENT '分类简介',
  `order` int(30) unsigned NOT NULL DEFAULT '0' COMMENT '排序，越大越靠前',
  `icon` varchar(100) NOT NULL COMMENT '图标',
  `link` varchar(255) NOT NULL COMMENT '链接',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态，0-关闭 1-开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('4', '0', '往事如风', '记录往事', '0', 'icons/6.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('5', '0', '水煮三国', '品位三国智慧', '0', 'icons/3.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('2', '0', '技术学习', '平时学习的一些笔记，欢迎批评指正。', '0', 'icons/18.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('3', '0', '生活点滴', '记录生活点滴', '0', 'icons/2.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('6', '0', '栀子花开', '青春无限', '0', 'icons/8.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('7', '0', '假日休闲', '悠闲、自在', '0', 'icons/24.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('8', '2', 'html', 'html学习', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('9', '2', 'css', 'css学习', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('10', '2', 'php', 'php学习', '0', 'icons/18.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('15', '2', 'javascript', 'javascript学习', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('16', '2', '设计模式', '设计模式', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('17', '2', '软件工程', '软件工程学习', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('18', '3', '厦门生活', '厦门生活', '0', 'icons/8.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('19', '3', '大学生活', '大学生活', '0', 'icons/8.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('20', '3', '童年生活', '童年生活', '0', 'icons/15.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('21', '4', '学习', '学习', '0', 'icons/1.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('22', '5', '运动', '运动', '0', 'icons/16.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('23', '6', '旅游', '旅游', '0', 'icons/24.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('24', '7', '排球', '排球', '0', 'icons/9.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('25', '5', '篮球', '篮球', '0', 'icons/9.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('26', '6', '羽毛球', '羽毛球', '0', 'icons/9.gif', 'icons/6.gif', '1');
INSERT INTO `menu` VALUES ('27', '7', '乒乓球', '乒乓球', '0', 'icons/9.gif', 'icons/6.gif', '1');
