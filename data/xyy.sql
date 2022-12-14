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
  `bpjy` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `bprs` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_cz`
--

DROP TABLE IF EXISTS `all_cz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_cz` (
  `id` int(11) NOT NULL COMMENT '??????',
  `czid` int(11) NOT NULL COMMENT '??????id',
  `czje` int(11) NOT NULL COMMENT '????????????',
  `cztime` datetime NOT NULL COMMENT '????????????',
  `czfl` int(11) NOT NULL COMMENT '????????????'
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
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `vip` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????VIP',
  `wjmz` varchar(32) NOT NULL DEFAULT '' COMMENT '????????????',
  `jcjg` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `cq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
  `timex` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
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
  `id` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `wjmz` text NOT NULL COMMENT '????????????',
  `zltime` datetime NOT NULL COMMENT '????????????',
  `zlmb` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `lthp` text NOT NULL COMMENT '??????hp',
  `ltgj` text NOT NULL COMMENT '????????????',
  `ltmg` text NOT NULL COMMENT '????????????',
  `ltfy` text NOT NULL COMMENT '????????????',
  `ltmp` text NOT NULL COMMENT '????????????'
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????',
  `wjid` int(11) NOT NULL COMMENT '??????id',
  `wjmz` varchar(16) NOT NULL COMMENT '????????????',
  `vip` int(11) NOT NULL,
  `phb1` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb2` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb3` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb4` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb5` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb6` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb7` bigint(20) unsigned NOT NULL COMMENT '?????????',
  `phb8` bigint(20) unsigned NOT NULL COMMENT '?????????',
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
  `id` int(11) NOT NULL DEFAULT 0 COMMENT '??????',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `wjmz` text NOT NULL COMMENT '????????????',
  `pmtime` datetime NOT NULL COMMENT '????????????',
  `pmwpid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????id',
  `pmwpmz` text NOT NULL COMMENT '??????????????????',
  `pmwpsl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `pmwpjg` text NOT NULL COMMENT '??????????????????',
  `pmsjc` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????',
  `pmwpfl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????'
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
  `wjid` int(11) NOT NULL COMMENT '??????id',
  `qdsj` datetime NOT NULL COMMENT '????????????',
  `qdcs` int(11) NOT NULL COMMENT '????????????',
  `qdy` int(11) NOT NULL COMMENT '????????????',
  `qd1` int(11) NOT NULL COMMENT '??????1',
  `qd2` int(11) NOT NULL COMMENT '??????2',
  `qd3` int(11) NOT NULL COMMENT '??????3',
  `qd4` int(11) NOT NULL COMMENT '??????4',
  `qd5` int(11) NOT NULL COMMENT '??????5'
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????id',
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `vip` int(11) NOT NULL DEFAULT 0 COMMENT 'vip??????',
  `wjmz` varchar(32) NOT NULL COMMENT '????????????',
  `jcjg` varchar(255) NOT NULL COMMENT '????????????',
  `cq` int(11) NOT NULL DEFAULT 0 COMMENT '??????',
  `timex` varchar(32) NOT NULL COMMENT '????????????',
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
  `yd01` int(11) NOT NULL COMMENT '??????',
  `yd02` int(11) NOT NULL COMMENT '??????'
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
  `yd01` int(11) NOT NULL COMMENT '??????',
  `yd02` int(11) NOT NULL COMMENT '??????'
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
  `yd01` int(11) NOT NULL COMMENT '??????',
  `yd02` int(11) NOT NULL COMMENT '??????'
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
  `yd01` int(11) NOT NULL COMMENT '??????',
  `yd02` int(11) NOT NULL COMMENT '??????'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_yl`
--

DROP TABLE IF EXISTS `all_yl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_yl` (
  `wjid` int(11) NOT NULL COMMENT '??????id',
  `bbyl` text NOT NULL COMMENT '????????????',
  `ckyl` text NOT NULL COMMENT '????????????'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_ylck`
--

DROP TABLE IF EXISTS `all_ylck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_ylck` (
  `wjid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `yl01` text NOT NULL COMMENT '??????',
  `yl02` text NOT NULL COMMENT '??????',
  `yl03` text NOT NULL COMMENT '??????'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `all_zt`
--

DROP TABLE IF EXISTS `all_zt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `all_zt` (
  `wjid` int(11) NOT NULL COMMENT '??????id',
  `username` varchar(16) NOT NULL COMMENT '????????????',
  `sex` int(11) NOT NULL COMMENT '????????????',
  `tx` varchar(64) NOT NULL COMMENT '????????????',
  `peiou` varchar(32) NOT NULL COMMENT '????????????',
  `peiouid` int(11) NOT NULL COMMENT '??????ID',
  `zzmz` varchar(32) NOT NULL COMMENT '????????????',
  `zzid` int(11) NOT NULL COMMENT '??????ID',
  `zzfl` int(11) NOT NULL COMMENT '????????????',
  `dj` int(11) NOT NULL COMMENT '????????????',
  `mpp` int(11) NOT NULL COMMENT '??????',
  `bpmz` varchar(32) NOT NULL COMMENT '????????????',
  `bpid` int(11) NOT NULL COMMENT '??????ID',
  `vip` int(11) NOT NULL COMMENT 'VIP??????',
  `vipjy` int(11) NOT NULL COMMENT 'VIP??????',
  `gsrl` int(11) NOT NULL COMMENT '????????????',
  `bbrl` int(11) NOT NULL COMMENT '????????????',
  `ckrl` int(11) NOT NULL COMMENT '????????????',
  `emz` int(11) NOT NULL COMMENT '?????????',
  `lh` int(11) NOT NULL COMMENT '??????'
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
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='??????????????????';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ckwp`
--

DROP TABLE IF EXISTS `ckwp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ckwp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='????????????';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ckzb`
--

DROP TABLE IF EXISTS `ckzb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ckzb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '????????????1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '????????????2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '????????????3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '????????????4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '????????????5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='????????????';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cw`
--

DROP TABLE IF EXISTS `cw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cw` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `cwid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `cwmz` text NOT NULL COMMENT '????????????',
  `cwdj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwxj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwby` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwxb` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwcz` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='??????';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cwzbb`
--

DROP TABLE IF EXISTS `cwzbb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cwzbb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '?????????1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '??????1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '?????????2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '??????2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '?????????3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '??????3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '?????????4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '??????4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '?????????5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '??????5',
  `zbfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwid` text NOT NULL COMMENT '??????ID',
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
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `sycs` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
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
  `fbid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `fb` datetime NOT NULL COMMENT '????????????',
  `wc` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `cs` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????id',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `gsjg` text NOT NULL COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????id',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `gsjg` text NOT NULL COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '????????????ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '????????????1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '????????????2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '????????????3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '????????????4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '???????????????5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '????????????5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `gsjg` text NOT NULL COMMENT '????????????',
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
  `zlsj` char(8) NOT NULL DEFAULT '' COMMENT '????????????',
  `czwz` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '?????????????????????'
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
  `zjf` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '?????????',
  `rjf` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `cjsj` char(8) NOT NULL DEFAULT '' COMMENT '????????????',
  `zlq` int(11) NOT NULL DEFAULT 0,
  `rlq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '?????????'
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
  `zjf` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `rjf` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '?????????',
  `swcs` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `swsj` timestamp NULL DEFAULT NULL COMMENT '????????????',
  `cjsj` char(8) NOT NULL DEFAULT '' COMMENT '????????????',
  `zlq` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `rlq` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `czwz` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '???????????????????????????',
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
  `fsgjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????id',
  `fsgj` varchar(16) NOT NULL DEFAULT '' COMMENT '????????????',
  `fssj` timestamp NULL DEFAULT NULL COMMENT '????????????',
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
  `hdid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `hdtime` datetime NOT NULL COMMENT '????????????',
  `hdcs` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `mz` varchar(32) NOT NULL DEFAULT '' COMMENT '????????????',
  `kq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `kssj` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '????????????',
  `jssj` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '????????????',
  `kqfs` int(10) unsigned NOT NULL DEFAULT 1 COMMENT '???????????????1?????????2?????????????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `hyid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `hymz` text NOT NULL COMMENT '????????????',
  `hyfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jfid` int(10) unsigned NOT NULL DEFAULT 0,
  `jfdj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jjid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `jjdj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `jjbf` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `jnid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `jndj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '???',
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
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='????????????';
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
  `swid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `swzz` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
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
  `txid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `txxs` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `yxm` varchar(64) NOT NULL DEFAULT '' COMMENT '?????????',
  `cmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `npc` varchar(100) NOT NULL DEFAULT '' COMMENT '??????',
  `xcmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `dcmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `ycmid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `ynpc` varchar(100) NOT NULL DEFAULT '' COMMENT '??????????????????',
  `x` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `y` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `cwmz` varchar(32) NOT NULL DEFAULT '' COMMENT '????????????',
  `ckid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '??????',
  `cmds` varchar(10000) NOT NULL DEFAULT '' COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpcs` int(11) NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '???',
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????????????',
  `mz` varchar(32) NOT NULL DEFAULT '' COMMENT '????????????',
  `ms` varchar(100) NOT NULL DEFAULT '' COMMENT '??????',
  `fl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
  `jd` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `jg` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
  `dj` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
  `zl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????',
  `bd` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `xlid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `xldj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????id',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `seq` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `xpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `xpkq` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `rwid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `rwbl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `rwmz` text NOT NULL COMMENT '????????????',
  `yisg` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `ysg` int(11) NOT NULL DEFAULT 0 COMMENT '?????????',
  `rwfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '?????????1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '??????1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '?????????2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '??????2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '?????????3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '??????3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '?????????4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '??????4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '?????????5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '??????5',
  `zbpd` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='??????';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `zbb`
--

DROP TABLE IF EXISTS `zbb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zbb` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zbxj` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `zbk1` int(11) NOT NULL DEFAULT 0 COMMENT '?????????1',
  `zbxq1` int(11) NOT NULL DEFAULT 0 COMMENT '??????1',
  `zbk2` int(11) NOT NULL DEFAULT 0 COMMENT '?????????2',
  `zbxq2` int(11) NOT NULL DEFAULT 0 COMMENT '??????2',
  `zbk3` int(11) NOT NULL DEFAULT 0 COMMENT '?????????3',
  `zbxq3` int(11) NOT NULL DEFAULT 0 COMMENT '??????3',
  `zbk4` int(11) NOT NULL DEFAULT 0 COMMENT '?????????4',
  `zbxq4` int(11) NOT NULL DEFAULT 0 COMMENT '??????4',
  `zbk5` int(11) NOT NULL DEFAULT 0 COMMENT '?????????5',
  `zbxq5` int(11) NOT NULL DEFAULT 0 COMMENT '??????5',
  `zbfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
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
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????id',
  `n` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `y` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `r` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `s` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `f` int(11) NOT NULL DEFAULT 0 COMMENT '???',
  `m` int(11) NOT NULL DEFAULT 0 COMMENT '???',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0,
  `zgvipid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????VIP??????',
  `zgviptime` datetime NOT NULL COMMENT '??????vip??????',
  `xs` int(11) NOT NULL DEFAULT 0 COMMENT '??????',
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
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `zzdj` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????',
  `zzwpmz` varchar(32) NOT NULL DEFAULT '' COMMENT '??????????????????',
  `zzwpid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '????????????ID',
  `zzwpsl` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????????????????',
  `zztime` timestamp NULL DEFAULT NULL COMMENT '????????????',
  `sftime` timestamp NULL DEFAULT NULL COMMENT '????????????',
  `shtime` timestamp NULL DEFAULT NULL COMMENT '????????????',
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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `wjid` int(10) unsigned NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpid` int(11) NOT NULL DEFAULT 0 COMMENT '??????ID',
  `wpsl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  `wpfl` int(11) NOT NULL DEFAULT 0 COMMENT '????????????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='????????????';
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
