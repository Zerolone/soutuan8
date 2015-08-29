-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost:3307
-- 生成日期: 2010 年 06 月 03 日 17:06
-- 服务器版本: 5.0.77
-- PHP 版本: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `soutuan8`
--

-- --------------------------------------------------------

--
-- 表的结构 `st8_admin`
--

CREATE TABLE IF NOT EXISTS `st8_admin` (
  `id` tinyint(4) unsigned NOT NULL auto_increment COMMENT '编号',
  `user` varchar(30) NOT NULL COMMENT '用户名',
  `pass` varchar(32) NOT NULL COMMENT '密码',
  `groupid` int(10) unsigned NOT NULL default '0' COMMENT '组编号',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '顺序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员' AUTO_INCREMENT=32 ;

--
-- 导出表中的数据 `st8_admin`
--

INSERT INTO `st8_admin` (`id`, `user`, `pass`, `groupid`, `order`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(30, '啊杀毒封杀', 'ded4dd416f3ef3379ee7ae078d669f89', 1, 1),
(31, '111', 'bf5f9b556d58d94dd4521ae84b6444ba', 13, 1);

-- --------------------------------------------------------

--
-- 表的结构 `st8_admin_group`
--

CREATE TABLE IF NOT EXISTS `st8_admin_group` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '编号',
  `title` varchar(255) NOT NULL COMMENT '组名',
  `permission` int(10) unsigned NOT NULL default '0' COMMENT '权限',
  `order` int(10) unsigned NOT NULL default '0' COMMENT '顺序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='权限组' AUTO_INCREMENT=14 ;

--
-- 导出表中的数据 `st8_admin_group`
--

INSERT INTO `st8_admin_group` (`id`, `title`, `permission`, `order`) VALUES
(1, '顶级管理员', 32767, 1),
(12, '普通用户', 2048, 2),
(13, '高级用户', 2200, 3);

-- --------------------------------------------------------

--
-- 表的结构 `st8_tuan`
--

CREATE TABLE IF NOT EXISTS `st8_tuan` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `order` tinyint(3) unsigned NOT NULL default '255' COMMENT '顺序',
  `title` varchar(255) NOT NULL COMMENT '标题规则',
  `price` varchar(255) NOT NULL COMMENT '价格规则',
  `pic` varchar(255) NOT NULL COMMENT '图片规则',
  `url` varchar(255) NOT NULL COMMENT '地址规则',
  `date` varchar(255) NOT NULL COMMENT '结束时间规则',
  `person` varchar(255) NOT NULL COMMENT '人数',
  `limitperson` varchar(255) NOT NULL COMMENT '最低人数',
  `uptime` int(10) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='团购列表' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `st8_tuan`
--


-- --------------------------------------------------------

--
-- 表的结构 `st8_tuanlist`
--

CREATE TABLE IF NOT EXISTS `st8_tuanlist` (
  `tid` int(10) unsigned NOT NULL auto_increment,
  `ttitle` varchar(255) NOT NULL COMMENT '名称',
  `turl` varchar(255) NOT NULL COMMENT '采集地址',
  `tfill` varchar(255) NOT NULL COMMENT '补全地址',
  `tpicfill` varchar(255) NOT NULL COMMENT '图片补全地址',
  `tcode` tinyint(3) unsigned NOT NULL default '0' COMMENT '网页编码',
  `torder` tinyint(3) unsigned NOT NULL default '255' COMMENT '顺序',
  `content` varchar(255) NOT NULL COMMENT '内容规则',
  `title` varchar(255) NOT NULL COMMENT '标题规则',
  `price` varchar(255) NOT NULL COMMENT '价格规则',
  `pic` varchar(255) NOT NULL COMMENT '图片规则',
  `url` varchar(255) NOT NULL COMMENT '地址规则',
  `date` varchar(255) NOT NULL COMMENT '结束时间规则',
  `person` varchar(255) NOT NULL COMMENT '人数',
  `limitperson` varchar(255) NOT NULL COMMENT '最低人数',
  `uptime` int(10) unsigned NOT NULL default '0' COMMENT '更新时间',
  `upsuccess` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否成功',
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='团购采集规则' AUTO_INCREMENT=45 ;

--
-- 导出表中的数据 `st8_tuanlist`
--

INSERT INTO `st8_tuanlist` (`tid`, `ttitle`, `turl`, `tfill`, `tpicfill`, `tcode`, `torder`, `content`, `title`, `price`, `pic`, `url`, `date`, `person`, `limitperson`, `uptime`, `upsuccess`) VALUES
(4, '美团武汉', 'http://www.meituan.com/wuhan', 'http://www.meituan.com', '', 0, 3, 'ezxkaXYgaWQ9ImRlYWwtaW50cm8iIGNsYXNzPSJjZiI+KFtcc1xTXSs/KeacrOWNleivpuaDhX1p', 'e+S7iuaXpeWboui0re+8mjwvYT4oLis/KTwvaDE+fWk=', 'ezxzdHJvbmc+wqUoLis/KTwvc3Ryb25nPn1p', 'ezxkaXYgY2xhc3M9ImRlYWwtYnV5LWNvdmVyLWltZyI+PGltZyBzcmM9IiguKz8pIn1p', 'ezxoMT48YSAuKz8gaHJlZj0iKC4rPykiPn1p', 'ezxkaXYgY2xhc3M9ImxpbWl0ZGF0ZSI+KC4rPyk8L2Rpdj59aQ==', 'ezxzdHJvbmc+KC4rPyk8L3N0cm9uZz4g5Lq65bey6LSt5LmwfWk=', 'ezxwIGNsYXNzPSJkZWFsLWJ1eS10aXAtYnRtIj4uKz88c3Ryb25nPiguKz8pPC9zdHJvbmc+fWk=', 1275579742, 1),
(5, '美团北京', 'http://www.meituan.com/beijing', 'http://www.meituan.com', '', 0, 1, 'ezxkaXYgaWQ9ImRlYWwtaW50cm8iIGNsYXNzPSJjZiI+KFtcc1xTXSs/KeacrOWNleivpuaDhX1p', 'e+S7iuaXpeWboui0re+8mjwvYT4oLis/KTwvaDE+fWk=', 'ezxzdHJvbmc+wqUoLis/KTwvc3Ryb25nPn1p', 'ezxkaXYgY2xhc3M9ImRlYWwtYnV5LWNvdmVyLWltZyI+PGltZyBzcmM9IiguKz8pIn1p', 'ezxoMT48YSAuKz8gaHJlZj0iKC4rPykiPn1p', 'ezxkaXYgY2xhc3M9ImxpbWl0ZGF0ZSI+KC4rPyk8L2Rpdj59aQ==', 'ezxzdHJvbmc+KC4rPyk8L3N0cm9uZz4g5Lq65bey6LSt5LmwfWk=', 'ezxwIGNsYXNzPSJkZWFsLWJ1eS10aXAtYnRtIj4uKz88c3Ryb25nPiguKz8pPC9zdHJvbmc+fWk=', 1275579742, 1),
(6, '美团上海', 'http://www.meituan.com/shanghai', 'http://www.meituan.com', '', 0, 2, 'ezxkaXYgaWQ9ImRlYWwtaW50cm8iIGNsYXNzPSJjZiI+KFtcc1xTXSs/KeacrOWNleivpuaDhX1p', 'e+S7iuaXpeWboui0re+8mjwvYT4oLis/KTwvaDE+fWk=', 'ezxzdHJvbmc+wqUoLis/KTwvc3Ryb25nPn1p', 'ezxkaXYgY2xhc3M9ImRlYWwtYnV5LWNvdmVyLWltZyI+PGltZyBzcmM9IiguKz8pIn1p', 'ezxoMT48YSAuKz8gaHJlZj0iKC4rPykiPn1p', 'ezxkaXYgY2xhc3M9ImxpbWl0ZGF0ZSI+KC4rPyk8L2Rpdj59aQ==', 'ezxzdHJvbmc+KC4rPyk8L3N0cm9uZz4g5Lq65bey6LSt5LmwfWk=', 'ezxwIGNsYXNzPSJkZWFsLWJ1eS10aXAtYnRtIj4uKz88c3Ryb25nPiguKz8pPC9zdHJvbmc+fWk=', 1275579742, 1),
(7, '江南都市报团购', 'http://tuan.jnds.com.cn', 'http://tuan.jnds.com.cn', '', 0, 4, 'ezxkaXYgaWQ9ImRlYWwtaW50cm8iIGNsYXNzPSJjZiI+KFtcc1xTXSs/KeacrOWNleivpuaDhX1p', 'e+S7iuaXpeWboui0re+8mjwvYT4oLis/KTwvaDE+fWk=', 'ezxzdHJvbmc+wqUoLis/KTwvc3Ryb25nPn1p', 'ezxsaSBjbGFzcz0iZmlyc3QiPjxpbWcgc3JjPSIoLis/KSI+PC9saT59aQ==', 'ezxoMT48YVtcc1xTXSs/aHJlZj0iKC4qPykiPn1p', 'ezx1bCBpZD0iY291bnRlciI+KC4qPyk8L3VsPn1p', 'ezxzdHJvbmc+KC4rPyk8L3N0cm9uZz4g5Lq65bey6LSt5LmwfWk=', 'ezxwIGNsYXNzPWRlYWwtYnV5LXRpcC1idG0+Lis/PHN0cm9uZz4oLis/KTwvc3Ryb25nPn1p', 1275579787, 1),
(8, '拉手-北京', 'http://www.lashou.com/beijing', 'http://www.lashou.com/beijing', '', 0, 5, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579742, 1),
(9, '拉手-上海', 'http://www.lashou.com/shanghai', 'http://www.lashou.com/shanghai', '', 0, 6, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579742, 1),
(10, '拉手-深圳', 'http://www.lashou.com/shenzhen', 'http://www.lashou.com/shenzhen', '', 0, 7, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579742, 1),
(11, '拉手-广州', 'http://www.lashou.com/guangzhou', 'http://www.lashou.com/guangzhou', '', 0, 8, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579742, 1),
(12, '拉手-南京', 'http://www.lashou.com/nanjing', 'http://www.lashou.com/nanjing', '', 0, 9, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579742, 1),
(13, '拉手-大庆', 'http://www.lashou.com/daqing', 'http://www.lashou.com/daqing', '', 0, 10, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579787, 1),
(14, '拉手-南昌', 'http://www.lashou.com/nanchang', 'http://www.lashou.com/nanchang', '', 0, 11, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579787, 1),
(15, '拉手-合肥', 'http://www.lashou.com/hefei', 'http://www.lashou.com/hefei', '', 0, 12, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579817, 1),
(16, '拉手-福州', 'http://www.lashou.com/fuzhou', 'http://www.lashou.com/fuzhou', '', 0, 13, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579787, 1),
(17, '拉手-郑州', 'http://www.lashou.com/zhengzhou', 'http://www.lashou.com/zhengzhou', '', 0, 14, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579787, 1),
(18, '拉手-大连', 'http://www.lashou.com/dalian', 'http://www.lashou.com/dalian', '', 0, 15, 'ezxkaXYgY2xhc3M9ImMgdG9keWRlYWwiPihbXHNcU10rPynmnKzljZXor6bmg4V9aQ==', 'ezxoMT7ku4rml6Xlm6LotK06ICguKz8pPC9oMT59aQ==', 'ezxkaXYgY2xhc3M9ImwgcHJpY2UiW1xzXFNdKz/vv6UoLio/KTwvZGl2Pn1p', 'ezxkaXYgY2xhc3M9ImltYWdlIj5bXHNcU10qPzxpbWcgc3JjPSIoLis/KSIgLz59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxzcGFuIGlkPSd0aW1lJz4oLio/KTwvc3Bhbj59aQ==', 'ezxoNj7lt7Lnu4/mnIkoLis/KeS6uui0reS5sDwvaDY+fWk=', 'e+acgOS9juWboui0reS6uuaVsO+8miguKz8p5Lq6fWk=', 1275579817, 1),
(19, '团宝网-北京', 'http://www.groupon.cn/?cityid=1', 'http://www.groupon.cn/?cityid=1', 'http://www.groupon.cn/', 1, 16, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 1275579827, 1),
(20, '团宝网-安庆', 'http://www.groupon.cn/?cityid=10024', 'http://www.groupon.cn/?cityid=10024', 'http://www.groupon.cn/', 1, 17, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 1275579787, 1),
(21, '团宝网-长春', 'http://www.groupon.cn/?cityid=2', 'http://www.groupon.cn/?cityid=2', 'http://www.groupon.cn/', 1, 18, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 1275579787, 1),
(22, '团宝网-长沙', 'http://www.groupon.cn/?cityid=3', 'http://www.groupon.cn/?cityid=3', 'http://www.groupon.cn/', 1, 19, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(23, '团宝网-常州', 'http://www.groupon.cn/?cityid=10009', 'http://www.groupon.cn/?cityid=10009', 'http://www.groupon.cn/', 1, 20, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(24, '团宝网-成都', 'http://www.groupon.cn/?cityid=4', 'http://www.groupon.cn/?cityid=4', 'http://www.groupon.cn/', 1, 21, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(25, '团宝网-重庆', 'http://www.groupon.cn/?cityid=5', 'http://www.groupon.cn/?cityid=5', 'http://www.groupon.cn/', 1, 22, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(26, '团宝网-大连', 'http://www.groupon.cn/?cityid=6', 'http://www.groupon.cn/?cityid=6', 'http://www.groupon.cn/', 1, 23, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(27, '团宝网-东营', 'http://www.groupon.cn/?cityid=10005', 'http://www.groupon.cn/?cityid=10005', 'http://www.groupon.cn/', 1, 24, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(28, '团宝网-福州', 'http://www.groupon.cn/?cityid=7', 'http://www.groupon.cn/?cityid=7', 'http://www.groupon.cn/', 1, 25, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(29, '团宝网-广州', 'http://www.groupon.cn/?cityid=8', 'http://www.groupon.cn/?cityid=8', 'http://www.groupon.cn/', 1, 26, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(30, '团宝网-贵阳', 'http://www.groupon.cn/?cityid=9', 'http://www.groupon.cn/?cityid=9', 'http://www.groupon.cn/', 1, 27, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(31, '团宝网-哈尔滨', 'http://www.groupon.cn/?cityid=10', 'http://www.groupon.cn/?cityid=10', 'http://www.groupon.cn/', 1, 28, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(32, '团宝网-杭州', 'http://www.groupon.cn/?cityid=11', 'http://www.groupon.cn/?cityid=11', 'http://www.groupon.cn/', 1, 29, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(33, '团宝网-合肥', 'http://www.groupon.cn/?cityid=12', 'http://www.groupon.cn/?cityid=12', 'http://www.groupon.cn/', 1, 30, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(34, '团宝网-衡阳', 'http://www.groupon.cn/?cityid=10016', 'http://www.groupon.cn/?cityid=10016', 'http://www.groupon.cn/', 1, 31, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(35, '团宝网-惠州', 'http://www.groupon.cn/?cityid=10032', 'http://www.groupon.cn/?cityid=10032', 'http://www.groupon.cn/', 1, 32, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(36, '团宝网-济南', 'http://www.groupon.cn/?cityid=14', 'http://www.groupon.cn/?cityid=14', 'http://www.groupon.cn/', 1, 33, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(37, '团宝网-济宁', 'http://www.groupon.cn/?cityid=10010', 'http://www.groupon.cn/?cityid=10010', 'http://www.groupon.cn/', 1, 34, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(38, '团宝网-金华', 'http://www.groupon.cn/?cityid=10012', 'http://www.groupon.cn/?cityid=10012', 'http://www.groupon.cn/', 1, 35, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(39, '团宝网-昆明', 'http://www.groupon.cn/?cityid=15', 'http://www.groupon.cn/?cityid=15', 'http://www.groupon.cn/', 1, 36, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(40, '团宝网-兰州', 'http://www.groupon.cn/?cityid=16', 'http://www.groupon.cn/?cityid=16', 'http://www.groupon.cn/', 1, 37, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(41, '团宝网-连云港', 'http://www.groupon.cn/?cityid=10014', 'http://www.groupon.cn/?cityid=10014', 'http://www.groupon.cn/', 1, 38, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(42, '团宝网-临沂', 'http://www.groupon.cn/?cityid=10007', 'http://www.groupon.cn/?cityid=10007', 'http://www.groupon.cn/', 1, 39, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(43, '团宝网-南昌', 'http://www.groupon.cn/?cityid=18', 'http://www.groupon.cn/?cityid=18', 'http://www.groupon.cn/', 1, 40, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0),
(44, '团宝网-南京', 'http://www.groupon.cn/?cityid=19', 'http://www.groupon.cn/?cityid=19', 'http://www.groupon.cn/', 1, 41, 'ezxESVYgY2xhc3M9ImRlYWwgY2xlYXJmaXgiPihbXHNcU10rPyk8RElWIGNsYXNzPXdyaXRlX3VwPn1p', 'e+S7iuaXpeWboui0rTogPC9iPjxiPiguKz8pPC9iPn1p', 'ezxESVYgY2xhc3M9YW1vdW50Pi4rP2JzcDs8Yj4oLis/KTwvYj59aQ==', 'ezxMST48SU1HLis/c3JjPSIoLis/KSIuKz8+PC9MST59aQ==', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxkaXYgc3R5bGU9ImNsZWFyOmJvdGgiPiguKj8pPC9kaXY+fWk=', 'ezxzcGFuIGNsYXNzPSJob3dtZW5zIi4rPz4oLis/KTwvc3Bhbj59aQ==', 'e+acgOS9juWboui0reS6uuaVsCguKz8p5Lq6fWk=', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `st8_view_admin`
--
CREATE TABLE IF NOT EXISTS `st8_view_admin` (
`pass` varchar(32)
,`id` tinyint(4) unsigned
,`user` varchar(30)
,`title` varchar(255)
,`permission` int(10) unsigned
);
-- --------------------------------------------------------

--
-- Structure for view `st8_view_admin`
--
DROP TABLE IF EXISTS `st8_view_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st8_view_admin` AS select `a`.`pass` AS `pass`,`a`.`id` AS `id`,`a`.`user` AS `user`,`g`.`title` AS `title`,`g`.`permission` AS `permission` from (`st8_admin` `a` join `st8_admin_group` `g` on((`a`.`groupid` = `g`.`id`)));
