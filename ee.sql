
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

INSERT INTO `sw_customer` VALUES (1,'南阳豆筋','李经理','15538731098','南阳市桐柏县','www.nydouye.com','这是一个备注','2013-11-10 16:11:34','2013-11-12 16:11:34','2014-11-10 16:11:34','abc')