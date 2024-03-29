-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: xyy
-- ------------------------------------------------------
-- Server version	5.5.5-10.5.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `all_boss`
--

DROP TABLE IF EXISTS `all_boss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_boss` (
  `bossid` int(11) NOT NULL,
  `bossmz` text NOT NULL,
  `bosstime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_bp`
--

DROP TABLE IF EXISTS `all_bp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_bp` (
  `bpid` int(11) NOT NULL,
  `bpdj` int(11) NOT NULL,
  `bpmz` text NOT NULL,
  `cbpmz` text NOT NULL,
  `cwjid` int(11) NOT NULL,
  `xbpmz` text NOT NULL,
  `xwjid` int(11) NOT NULL,
  `ccmz01` text NOT NULL,
  `ccid01` int(11) NOT NULL,
  `ccmz02` text NOT NULL,
  `ccid02` int(11) NOT NULL,
  `ccmz03` text NOT NULL,
  `ccid03` int(11) NOT NULL,
  `ccmz04` int(11) NOT NULL,
  `ccid04` int(11) NOT NULL,
  `ccmz05` text NOT NULL,
  `ccid05` int(11) NOT NULL,
  `ccmz06` text NOT NULL,
  `ccid06` int(11) NOT NULL,
  `bprsmax` int(11) NOT NULL,
  `bpjymax` int(11) NOT NULL,
  `bpyl` int(11) NOT NULL,
  `bpsw` int(11) NOT NULL,
  `bpjy` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '帮派经验',
  `bprs` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '帮派人数'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_cz`
--

DROP TABLE IF EXISTS `all_cz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_cz` (
  `id` int(11) NOT NULL COMMENT '排序',
  `czid` int(11) NOT NULL COMMENT '充值id',
  `czje` int(11) NOT NULL COMMENT '充值金额',
  `cztime` datetime NOT NULL COMMENT '充值时间',
  `czfl` int(11) NOT NULL COMMENT '充值方式'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_gzhoures`
--

DROP TABLE IF EXISTS `all_gzhoures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_gzhoures` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `fzid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `fzmz` text NOT NULL,
  `fzfl` int(11) NOT NULL,
  `fzgm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_hbmoney`
--

DROP TABLE IF EXISTS `all_hbmoney`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_hbmoney` (
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_hbmoneyjc`
--

DROP TABLE IF EXISTS `all_hbmoneyjc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_hbmoneyjc` (
  `id` int(11) NOT NULL,
  `money` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_hdph01`
--

DROP TABLE IF EXISTS `all_hdph01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_hdph01` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_hdph02`
--

DROP TABLE IF EXISTS `all_hdph02`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_hdph02` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_hdph03`
--

DROP TABLE IF EXISTS `all_hdph03`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_hdph03` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_houres`
--

DROP TABLE IF EXISTS `all_houres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_houres` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `fzid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `fzmz` text NOT NULL,
  `fzfl` int(11) NOT NULL,
  `fzgm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_ip`
--

DROP TABLE IF EXISTS `all_ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_ip` (
  `ip` text NOT NULL,
  `iptime` datetime NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_jc`
--

DROP TABLE IF EXISTS `all_jc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_jc` (
  `id` int(11) NOT NULL,
  `xlid` int(11) NOT NULL,
  `jc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_jdjc`
--

DROP TABLE IF EXISTS `all_jdjc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_jdjc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `vip` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家VIP',
  `wjmz` varchar(32) NOT NULL DEFAULT '' COMMENT '玩家名字',
  `jcjg` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '竞猜价格',
  `cq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '出拳',
  `timex` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_ltbw`
--

DROP TABLE IF EXISTS `all_ltbw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_ltbw` (
  `id` int(11) NOT NULL DEFAULT 0 COMMENT '编号id',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '玩家id',
  `wjmz` text NOT NULL COMMENT '玩家名字',
  `zltime` datetime NOT NULL COMMENT '占领时间',
  `zlmb` int(11) NOT NULL DEFAULT 0 COMMENT '占领膜拜',
  `lthp` text NOT NULL COMMENT '擂台hp',
  `ltgj` text NOT NULL COMMENT '擂台攻击',
  `ltmg` text NOT NULL COMMENT '擂台魔攻',
  `ltfy` text NOT NULL COMMENT '擂台防御',
  `ltmp` text NOT NULL COMMENT '擂台门派'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_money`
--

DROP TABLE IF EXISTS `all_money`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_money` (
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_moneyjc`
--

DROP TABLE IF EXISTS `all_moneyjc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_moneyjc` (
  `id` int(11) NOT NULL,
  `money` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_pay`
--

DROP TABLE IF EXISTS `all_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_pay` (
  `id` int(11) NOT NULL,
  `payid` text NOT NULL,
  `paywjid` int(11) NOT NULL,
  `price` text NOT NULL,
  `payzf` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_phb`
--

DROP TABLE IF EXISTS `all_phb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_phb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标识',
  `wjid` int(11) NOT NULL COMMENT '玩家id',
  `wjmz` varchar(16) NOT NULL COMMENT '玩家名字',
  `vip` int(11) NOT NULL,
  `phb1` bigint(20) unsigned NOT NULL COMMENT '气血榜',
  `phb2` bigint(20) unsigned NOT NULL COMMENT '攻击榜',
  `phb3` bigint(20) unsigned NOT NULL COMMENT '魔攻榜',
  `phb4` bigint(20) unsigned NOT NULL COMMENT '防御榜',
  `phb5` bigint(20) unsigned NOT NULL COMMENT '等级榜',
  `phb6` bigint(20) unsigned NOT NULL COMMENT '银两榜',
  `phb7` bigint(20) unsigned NOT NULL COMMENT '金豆榜',
  `phb8` bigint(20) unsigned NOT NULL COMMENT '充值榜',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_pm`
--

DROP TABLE IF EXISTS `all_pm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_pm` (
  `id` int(11) NOT NULL DEFAULT 0 COMMENT '标识',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '玩家id',
  `wjmz` text NOT NULL COMMENT '玩家名字',
  `pmtime` datetime NOT NULL COMMENT '拍卖时间',
  `pmwpid` int(11) NOT NULL DEFAULT 0 COMMENT '拍卖物品id',
  `pmwpmz` text NOT NULL COMMENT '拍卖物品名字',
  `pmwpsl` int(11) NOT NULL DEFAULT 0 COMMENT '拍卖物品数量',
  `pmwpjg` text NOT NULL COMMENT '拍卖物品价格',
  `pmsjc` int(11) NOT NULL DEFAULT 0 COMMENT '拍卖时间搓',
  `pmwpfl` int(11) NOT NULL DEFAULT 0 COMMENT '拍卖物品分类'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_qd`
--

DROP TABLE IF EXISTS `all_qd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_qd` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL COMMENT '玩家id',
  `qdsj` datetime NOT NULL COMMENT '签到时间',
  `qdcs` int(11) NOT NULL COMMENT '签到次数',
  `qdy` int(11) NOT NULL COMMENT '签到月份',
  `qd1` int(11) NOT NULL COMMENT '签到1',
  `qd2` int(11) NOT NULL COMMENT '签到2',
  `qd3` int(11) NOT NULL COMMENT '签到3',
  `qd4` int(11) NOT NULL COMMENT '签到4',
  `qd5` int(11) NOT NULL COMMENT '签到5'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_qggz`
--

DROP TABLE IF EXISTS `all_qggz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_qggz` (
  `id` int(11) NOT NULL,
  `qgxx` text NOT NULL,
  `qgmz` text NOT NULL,
  `wjid` int(11) NOT NULL,
  `qgjg` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_qtjc`
--

DROP TABLE IF EXISTS `all_qtjc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_qtjc` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号id',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '玩家id',
  `vip` int(11) NOT NULL DEFAULT 0 COMMENT 'vip等级',
  `wjmz` varchar(32) NOT NULL COMMENT '玩家名字',
  `jcjg` varchar(255) NOT NULL COMMENT '竞猜价格',
  `cq` int(11) NOT NULL DEFAULT 0 COMMENT '出拳',
  `timex` varchar(32) NOT NULL COMMENT '竞猜时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_sdk`
--

DROP TABLE IF EXISTS `all_sdk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_sdk` (
  `sdkid` int(11) NOT NULL,
  `sdk` text NOT NULL,
  `sdktime` datetime NOT NULL,
  `sdkfl` int(11) NOT NULL,
  `sdksy` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_user`
--

DROP TABLE IF EXISTS `all_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_user` (
  `wjid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wjname` text NOT NULL,
  `wjtime` datetime NOT NULL,
  `utime` int(11) NOT NULL,
  `fl` int(11) NOT NULL,
  `yj` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_xjhb`
--

DROP TABLE IF EXISTS `all_xjhb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_xjhb` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `wjje` int(11) NOT NULL,
  `zh1` text NOT NULL,
  `zh2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yd01`
--

DROP TABLE IF EXISTS `all_yd01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yd01` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL,
  `ds02` int(11) NOT NULL,
  `dy01_time` datetime NOT NULL,
  `yd01` int(11) NOT NULL COMMENT '免费',
  `yd02` int(11) NOT NULL COMMENT '收费'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yd02`
--

DROP TABLE IF EXISTS `all_yd02`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yd02` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL,
  `ds02` int(11) NOT NULL,
  `dy01_time` datetime NOT NULL,
  `yd01` int(11) NOT NULL COMMENT '免费',
  `yd02` int(11) NOT NULL COMMENT '收费'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yd03`
--

DROP TABLE IF EXISTS `all_yd03`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yd03` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL,
  `ds02` int(11) NOT NULL,
  `dy01_time` datetime NOT NULL,
  `yd01` int(11) NOT NULL COMMENT '免费',
  `yd02` int(11) NOT NULL COMMENT '收费'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yd04`
--

DROP TABLE IF EXISTS `all_yd04`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yd04` (
  `id` int(11) NOT NULL,
  `wjid` int(11) NOT NULL,
  `wjmz` text NOT NULL,
  `vip` int(11) NOT NULL,
  `ds01` int(11) NOT NULL,
  `ds02` int(11) NOT NULL,
  `dy01_time` datetime NOT NULL,
  `yd01` int(11) NOT NULL COMMENT '免费',
  `yd02` int(11) NOT NULL COMMENT '收费'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yl`
--

DROP TABLE IF EXISTS `all_yl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yl` (
  `wjid` int(11) NOT NULL COMMENT '玩家id',
  `bbyl` text NOT NULL COMMENT '背包银两',
  `ckyl` text NOT NULL COMMENT '仓库银两'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_ylck`
--

DROP TABLE IF EXISTS `all_ylck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_ylck` (
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '玩家id',
  `yl01` text NOT NULL COMMENT '银两',
  `yl02` text NOT NULL COMMENT '金豆',
  `yl03` text NOT NULL COMMENT '金带'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_zt`
--

DROP TABLE IF EXISTS `all_zt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_zt` (
  `wjid` int(11) NOT NULL COMMENT '玩家id',
  `username` varchar(16) NOT NULL COMMENT '玩家名字',
  `sex` int(11) NOT NULL COMMENT '玩家性别',
  `tx` varchar(64) NOT NULL COMMENT '玩家头衔',
  `peiou` varchar(32) NOT NULL COMMENT '配偶名字',
  `peiouid` int(11) NOT NULL COMMENT '配偶ID',
  `zzmz` varchar(32) NOT NULL COMMENT '住宅名字',
  `zzid` int(11) NOT NULL COMMENT '住宅ID',
  `zzfl` int(11) NOT NULL COMMENT '住宅分类',
  `dj` int(11) NOT NULL COMMENT '玩家等级',
  `mpp` int(11) NOT NULL COMMENT '门派',
  `bpmz` varchar(32) NOT NULL COMMENT '帮派名字',
  `bpid` int(11) NOT NULL COMMENT '帮派ID',
  `vip` int(11) NOT NULL COMMENT 'VIP等级',
  `vipjy` int(11) NOT NULL COMMENT 'VIP经验',
  `gsrl` int(11) NOT NULL COMMENT '挂售容量',
  `bbrl` int(11) NOT NULL COMMENT '背包容量',
  `ckrl` int(11) NOT NULL COMMENT '仓库容量',
  `emz` int(11) NOT NULL COMMENT '恶名值',
  `lh` int(11) NOT NULL COMMENT '靓号'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bl`
--

DROP TABLE IF EXISTS `bl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bl` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fqid` int(10) unsigned NOT NULL DEFAULT 0,
  `bll1` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bp`
--

DROP TABLE IF EXISTS `bp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bpid` int(10) unsigned NOT NULL DEFAULT 0,
  `usermz` varchar(100) NOT NULL DEFAULT '',
  `userid` int(10) unsigned NOT NULL DEFAULT 0,
  `gx` int(10) unsigned NOT NULL DEFAULT 0,
  `bpswcs` int(10) unsigned NOT NULL DEFAULT 0,
  `bpjf` int(10) unsigned NOT NULL DEFAULT 0,
  `lsgx` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ckqt`
--

DROP TABLE IF EXISTS `ckqt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ckqt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `wpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '物品ID',
  `wpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '物品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='仓库其他物品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ckwp`
--

DROP TABLE IF EXISTS `ckwp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ckwp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '仓库物品ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '仓库物品数量',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '仓库物品分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='仓库物品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ckzb`
--

DROP TABLE IF EXISTS `ckzb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ckzb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备星级',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备孔1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '仓库镶嵌1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备孔2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '仓库镶嵌2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备孔3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '仓库镶嵌3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备孔4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '仓库镶嵌4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备孔5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '仓库镶嵌5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '仓库装备佩戴',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='仓库装备';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cw`
--

DROP TABLE IF EXISTS `cw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cw` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `cwid` int(11) NOT NULL DEFAULT 0 COMMENT '宠物id',
  `cwmz` text NOT NULL COMMENT '宠物名字',
  `cwdj` int(11) NOT NULL DEFAULT 0 COMMENT '宠物等级',
  `cwxj` int(11) NOT NULL DEFAULT 0 COMMENT '宠物星级',
  `cwby` int(11) NOT NULL DEFAULT 0 COMMENT '宠物变异',
  `cwxb` int(11) NOT NULL DEFAULT 0 COMMENT '宠物品质',
  `cwcz` int(11) NOT NULL DEFAULT 0 COMMENT '宠物出战',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='宠物';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cwzbb`
--

DROP TABLE IF EXISTS `cwzbb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cwzbb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '装备ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '装备星级',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌5',
  `zbfl` int(11) NOT NULL DEFAULT 0 COMMENT '装备分类',
  `cwid` text NOT NULL COMMENT '宠物ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dyxx`
--

DROP TABLE IF EXISTS `dyxx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dyxx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '丹药ID',
  `sycs` int(11) NOT NULL DEFAULT 0 COMMENT '丹药使用次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fb`
--

DROP TABLE IF EXISTS `fb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `fbid` int(11) NOT NULL DEFAULT 0 COMMENT '编号ID',
  `fb` datetime NOT NULL COMMENT '副本时间',
  `wc` int(11) NOT NULL DEFAULT 0 COMMENT '副本完成',
  `cs` int(11) NOT NULL DEFAULT 0 COMMENT '副本次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gsqt`
--

DROP TABLE IF EXISTS `gsqt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gsqt` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '挂售其他id',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '挂售其他数量',
  `gsjg` text NOT NULL COMMENT '挂售价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gswp`
--

DROP TABLE IF EXISTS `gswp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gswp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '挂售物品id',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '挂售物品数量',
  `gsjg` text NOT NULL COMMENT '挂售价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gszb`
--

DROP TABLE IF EXISTS `gszb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gszb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备星级',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备孔1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '挂售镶嵌1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备孔2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '挂售镶嵌2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备孔3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '挂售镶嵌3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备孔4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '挂售镶嵌4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备孔5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '挂售镶嵌5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '挂售装备佩戴',
  `gsjg` text NOT NULL COMMENT '挂售价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gz01`
--

DROP TABLE IF EXISTS `gz01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gz01` (
  `zcid` int(11) NOT NULL,
  `zlgj` text NOT NULL,
  `zlgjid` int(11) NOT NULL,
  `gjjz` text NOT NULL,
  `gjjzid` int(11) NOT NULL,
  `czz` text NOT NULL,
  `czzid` int(11) NOT NULL,
  `zlsj` char(8) NOT NULL DEFAULT '' COMMENT '占领时间',
  `czwz` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '夺杖后重置位置'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gz03`
--

DROP TABLE IF EXISTS `gz03`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gz03` (
  `id` int(11) NOT NULL,
  `gjmz` varchar(16) NOT NULL DEFAULT '',
  `gjid` int(11) NOT NULL DEFAULT 0,
  `jzmz` varchar(16) NOT NULL DEFAULT '',
  `jzid` int(11) NOT NULL DEFAULT 0,
  `zjf` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '周积分',
  `rjf` int(11) NOT NULL DEFAULT 0 COMMENT '日积分',
  `cjsj` char(8) NOT NULL DEFAULT '' COMMENT '参加时间',
  `zlq` int(11) NOT NULL DEFAULT 0,
  `rlq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '日领取'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gz04`
--

DROP TABLE IF EXISTS `gz04`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gz04` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(11) NOT NULL DEFAULT 0,
  `wjmz` varchar(16) NOT NULL,
  `zjf` int(11) NOT NULL DEFAULT 0 COMMENT '周积分',
  `rjf` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '日积分',
  `swcs` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '死亡次数',
  `swsj` timestamp NULL DEFAULT NULL COMMENT '死亡时间',
  `cjsj` char(8) NOT NULL DEFAULT '' COMMENT '参加时间',
  `zlq` int(11) NOT NULL DEFAULT 0 COMMENT '周领取',
  `rlq` int(11) NOT NULL DEFAULT 0 COMMENT '日领取',
  `czwz` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '夺杖后重置战场位置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gz05`
--

DROP TABLE IF EXISTS `gz05`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gz05` (
  `id` int(11) NOT NULL,
  `gztime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `gz06`
--

DROP TABLE IF EXISTS `gz06`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gz06` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fsgjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '防守国家id',
  `fsgj` varchar(16) NOT NULL DEFAULT '' COMMENT '防守国家',
  `fssj` timestamp NULL DEFAULT NULL COMMENT '防守时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hd`
--

DROP TABLE IF EXISTS `hd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `hdid` int(11) NOT NULL DEFAULT 0 COMMENT '编号ID',
  `hdtime` datetime NOT NULL COMMENT '活动时间',
  `hdcs` int(11) NOT NULL DEFAULT 0 COMMENT '活动次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hddl`
--

DROP TABLE IF EXISTS `hddl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hddl` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mz` varchar(32) NOT NULL DEFAULT '' COMMENT '活动名字',
  `kq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '是否开启',
  `kssj` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '开始时间',
  `jssj` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '结束时间',
  `kqfs` int(10) unsigned NOT NULL DEFAULT 1 COMMENT '开启方式，1手动，2按时间自动开启',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hy`
--

DROP TABLE IF EXISTS `hy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `hyid` int(11) NOT NULL DEFAULT 0 COMMENT '好友id',
  `hymz` text NOT NULL COMMENT '好友名字',
  `hyfl` int(11) NOT NULL DEFAULT 0 COMMENT '好友分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jfdj`
--

DROP TABLE IF EXISTS `jfdj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jfdj` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jfid` int(10) unsigned NOT NULL DEFAULT 0,
  `jfdj` int(11) NOT NULL DEFAULT 0 COMMENT '解封等级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jj`
--

DROP TABLE IF EXISTS `jj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jj` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jjid` int(11) NOT NULL DEFAULT 0 COMMENT '家具ID',
  `jjdj` int(11) NOT NULL DEFAULT 0 COMMENT '家具等级',
  `jjbf` int(11) NOT NULL DEFAULT 0 COMMENT '家具摆放',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jnn`
--

DROP TABLE IF EXISTS `jnn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jnn` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jnid` int(11) NOT NULL DEFAULT 0 COMMENT '技能id',
  `jndj` int(11) NOT NULL DEFAULT 0 COMMENT '技能等级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `map`
--

DROP TABLE IF EXISTS `map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `map` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mz` varchar(32) NOT NULL DEFAULT '',
  `ms` varchar(100) NOT NULL DEFAULT '',
  `dtx` int(10) unsigned NOT NULL DEFAULT 0,
  `dty` int(10) unsigned NOT NULL DEFAULT 0,
  `dtxy` varchar(100) NOT NULL DEFAULT '',
  `up` varchar(100) NOT NULL DEFAULT '',
  `down` varchar(100) NOT NULL DEFAULT '',
  `left` varchar(100) NOT NULL DEFAULT '',
  `right` varchar(100) NOT NULL DEFAULT '',
  `up_jump` varchar(100) NOT NULL DEFAULT '',
  `down_jump` varchar(100) NOT NULL DEFAULT '',
  `left_jump` varchar(100) NOT NULL DEFAULT '',
  `right_jump` varchar(100) NOT NULL DEFAULT '',
  `up_distance` int(10) unsigned NOT NULL DEFAULT 0,
  `down_distance` int(10) unsigned NOT NULL DEFAULT 0,
  `left_distance` int(10) unsigned NOT NULL DEFAULT 0,
  `right_distance` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `map_dtxy_IDX` (`dtxy`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `o_user_list`
--

DROP TABLE IF EXISTS `o_user_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `o_user_list` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `sqid` text NOT NULL,
  `m_id` varchar(5) NOT NULL,
  `password` varchar(64) NOT NULL,
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '年',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '月',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '日',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '时',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '分',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '秒',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `qt`
--

DROP TABLE IF EXISTS `qt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `wpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '物品ID',
  `wpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '物品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='其他物品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sw`
--

DROP TABLE IF EXISTS `sw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `swid` int(11) NOT NULL DEFAULT 0 COMMENT '声望ID',
  `swzz` int(11) NOT NULL DEFAULT 0 COMMENT '声望值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tx`
--

DROP TABLE IF EXISTS `tx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `txid` int(11) NOT NULL DEFAULT 0 COMMENT '头衔ID',
  `txxs` int(11) NOT NULL DEFAULT 0 COMMENT '头衔显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `yxm` varchar(64) NOT NULL DEFAULT '' COMMENT '游戏码',
  `cmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '游戏页面',
  `npc` varchar(100) NOT NULL DEFAULT '' COMMENT '参数',
  `xcmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '最小命令数值',
  `dcmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '最大命令数值',
  `ycmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '上一个页面值',
  `ynpc` varchar(100) NOT NULL DEFAULT '' COMMENT '上一个参数值',
  `x` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '地图区域编号',
  `y` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '地图编号',
  `cwmz` varchar(32) NOT NULL DEFAULT '' COMMENT '宠物名字',
  `ckid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '对象编号',
  `time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '时间',
  `cmds` varchar(10000) NOT NULL DEFAULT '' COMMENT '链接数组',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `wp`
--

DROP TABLE IF EXISTS `wp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '物品ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '物品数量',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '物品分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `wpp`
--

DROP TABLE IF EXISTS `wpp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wpp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '物品ID',
  `wpcs` int(11) NOT NULL DEFAULT 0 COMMENT '物品使用次数',
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '年',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '月',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '日',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '时',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '分',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '秒',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `wpxx`
--

DROP TABLE IF EXISTS `wpxx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wpxx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '物品编号',
  `mz` varchar(32) NOT NULL DEFAULT '' COMMENT '物品名字',
  `ms` varchar(100) NOT NULL DEFAULT '' COMMENT '描述',
  `fl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '分类',
  `jd` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '金豆价格',
  `jg` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '价格',
  `dj` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '等级',
  `zl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '重量',
  `bd` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '是否绑定',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xl`
--

DROP TABLE IF EXISTS `xl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xl` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `xlid` int(11) NOT NULL DEFAULT 0 COMMENT '修炼id',
  `xldj` int(11) NOT NULL DEFAULT 0 COMMENT '修炼等级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xp`
--

DROP TABLE IF EXISTS `xp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `seq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '星盘顺序编号',
  `xpid` int(11) NOT NULL DEFAULT 0 COMMENT '星盘id',
  `xpkq` int(11) NOT NULL DEFAULT 0 COMMENT '星盘开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xtbl`
--

DROP TABLE IF EXISTS `xtbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `xtbl` (
  `id` int(11) NOT NULL,
  `bl1` int(11) NOT NULL,
  `bl2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `yxrw`
--

DROP TABLE IF EXISTS `yxrw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yxrw` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `rwid` int(11) NOT NULL DEFAULT 0 COMMENT '任务ID',
  `rwbl` int(11) NOT NULL DEFAULT 0 COMMENT '任务变量',
  `rwmz` text NOT NULL COMMENT '任务名字',
  `yisg` int(11) NOT NULL DEFAULT 0 COMMENT '已杀怪',
  `ysg` int(11) NOT NULL DEFAULT 0 COMMENT '要杀怪',
  `rwfl` int(11) NOT NULL DEFAULT 0 COMMENT '任务分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zb`
--

DROP TABLE IF EXISTS `zb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '装备ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '装备星级',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '装备佩戴',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='装备';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zbb`
--

DROP TABLE IF EXISTS `zbb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zbb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '装备ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '装备星级',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '装备孔5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '镶嵌5',
  `zbfl` int(11) NOT NULL DEFAULT 0 COMMENT '装备分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zf`
--

DROP TABLE IF EXISTS `zf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zf` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '祝福id',
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '年',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '月',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '日',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '时',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '分',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '秒',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zgvip`
--

DROP TABLE IF EXISTS `zgvip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zgvip` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `zgvipid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '尊贵VIP编号',
  `zgviptime` datetime NOT NULL COMMENT '尊贵vip时间',
  `xs` int(11) NOT NULL DEFAULT 0 COMMENT '显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zz`
--

DROP TABLE IF EXISTS `zz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `zzdj` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '种植等级',
  `zzwpmz` varchar(32) NOT NULL DEFAULT '' COMMENT '种植物品名字',
  `zzwpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '种植物品ID',
  `zzwpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '种植物品数量',
  `zztime` timestamp NULL DEFAULT NULL COMMENT '种植时间',
  `sftime` timestamp NULL DEFAULT NULL COMMENT '施肥时间',
  `shtime` timestamp NULL DEFAULT NULL COMMENT '收获时间',
  PRIMARY KEY (`id`),
  KEY `zz_wjid_IDX` (`wjid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zzck`
--

DROP TABLE IF EXISTS `zzck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zzck` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '玩家ID',
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '物品ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '物品数量',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '物品分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='增值仓库';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'xyy'
--

--
-- Dumping routines for database 'xyy'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-22 20:47:29
