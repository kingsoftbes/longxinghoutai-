<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26
 * Time: 18:43
 */
DROP TABLE IF EXISTS `sw_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_customer` (
    `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `customer_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '客户名称',
   `customer_lxr` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '联系人',
  `customer_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '电话',
  `customer_address` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '地址',
    `customer_website` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '网址',

  `customer_introduce` text COLLATE utf8_unicode_ci COMMENT '备注',
  `customer_create_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
`customer_start_time` int(11) NOT NULL DEFAULT '0',
  `customer_last_time` int(11) NOT NULL DEFAULT '0',
  `abc` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客户表';
/*!40101 SET character_set_client = @saved_cs_client */;
