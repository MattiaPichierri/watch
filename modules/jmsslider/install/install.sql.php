<?php
/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_suffix` varchar(100) NOT NULL,
  `bg_type` int(10) NOT NULL DEFAULT '1',
  `bg_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bg_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '#FFF',
  `slide_link` varchar(100) NOT NULL,
  `order` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_slide`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slides` (`id_slide`, `title`, `class_suffix`, `bg_type`, `bg_image`, `bg_color`, `slide_link`, `order`, `status`) VALUES
(7, 'Home 1 - Slider 1', '', 1, '0e822c064f436a476823126f81c2b89d.jpg', '', '', 0, 1),
(8, 'Home1 - Slide 2', '', 1, '6a5a75bb8d4aedd8b76085cb40024054.jpg', '', '', 1, 1),
(9, 'Home1 - Slider 3', '', 1, '76db74c84199f336b43c4c53ac0ada57.jpg', '', '', 2, 1),
(10, 'Home2 - Slider 1', '', 1, '701cd83201aaeabac925761f357b3d89.jpg', '', '', 3, 1),
(11, 'Home 2 - Slider 2', '', 1, '584b5aa5ac78d9e6fda0b33b67bb6b2e.jpg', '', '', 4, 1),
(12, 'Home 2 - Slider 3', '', 1, 'c27c492f0f5742080469a2961add4921.jpg', '', '', 5, 1),
(13, 'Home3 - Slider1', '', 1, 'a85b9c21c01e448e22e347553e8ca6ab.jpg', '', '', 0, 1),
(14, 'Home3 - Slider2', '', 1, 'a7ebad85d1b67d220c934dd1f17ae362.jpg', '', '', 0, 1),
(15, 'Home 3 - Slider 3', '', 1, 'f1ff9d0203257e9bf23de25bf6ec3253.jpg', '', '', 0, 1),
(16, 'Home4 - Slider 1', '', 1, '6e69c94cf4c0a1c1890508b775a0fc20.jpg', '', '', 0, 1),
(17, 'Home3 - Slider2- (Copy)', '', 1, 'a7ebad85d1b67d220c934dd1f17ae362.jpg', '', '', 0, 1),
(18, 'Home 3 - Slider 3- (Copy)', '', 1, 'f1ff9d0203257e9bf23de25bf6ec3253.jpg', '', '', 0, 1),
(19, 'Home6 - Slider 1', '', 1, 'ca901a107fa3561cfb7fff48bead47f3.jpg', '', '', 0, 1),
(20, 'Home6 - Slider2', '', 1, '76076454e9a2ce7c270ca1e3060360a7.jpg', '', '', 0, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_lang`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_lang` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_lang` int(10) NOT NULL,
  PRIMARY KEY (`id_slide`,`id_lang`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slides_lang` (`id_slide`, `id_lang`) VALUES
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_layers`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_layers` (
  `id_layer` int(10) NOT NULL AUTO_INCREMENT,
  `id_slide` int(10) NOT NULL,
  `data_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_class_suffix` varchar(50) NOT NULL,
  `data_fixed` int(10) NOT NULL DEFAULT '0',
  `data_delay` int(10) NOT NULL DEFAULT '1000',
  `data_time` int(10) NOT NULL DEFAULT '1000',
  `data_x` int(10) NOT NULL DEFAULT '0',
  `data_y` int(10) NOT NULL DEFAULT '0',
  `data_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'left',
  `data_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'right',
  `data_ease_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_ease_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_step` int(10) NOT NULL DEFAULT '0',
  `data_special` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cycle',
  `data_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_html` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video_controls` int(10) NOT NULL DEFAULT '1',
  `data_video_muted` int(10) NOT NULL DEFAULT '0',
  `data_video_autoplay` int(10) NOT NULL DEFAULT '1',
  `data_video_loop` int(10) NOT NULL DEFAULT '1',
  `data_video_bg` int(10) NOT NULL DEFAULT '0',
  `data_font_size` int(10) NOT NULL DEFAULT '14',
  `data_line_height` int(10) NOT NULL,
  `data_style` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'normal',
  `data_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '#FFFFFF',
  `data_width` int(10) NOT NULL,
  `data_height` int(10) NOT NULL,
  `data_order` int(10) NOT NULL,
  `data_status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_layer`,`id_slide`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

INSERT INTO `_DB_PREFIX_jms_slides_layers` (`id_layer`, `id_slide`, `data_title`, `data_class_suffix`, `data_fixed`, `data_delay`, `data_time`, `data_x`, `data_y`, `data_in`, `data_out`, `data_ease_in`, `data_ease_out`, `data_step`, `data_special`, `data_type`, `data_image`, `data_html`, `data_video`, `data_video_controls`, `data_video_muted`, `data_video_autoplay`, `data_video_loop`, `data_video_bg`, `data_font_size`, `data_line_height`, `data_style`, `data_color`, `data_width`, `data_height`, `data_order`, `data_status`) VALUES
(22, 8, 'Modern. Simple. Minimalist.', '', 0, 700, 1400, 310, 278, 'top', 'bottom', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />\r\nMinimalist.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 311, 278, 0, 1),
(23, 8, 'Creative Design Everyone Wants From Fluent Store', '', 0, 1000, 1500, 310, 414, 'bottom', 'top', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 564, 66, 0, 1),
(24, 9, 'New Look', '', 0, 700, 1400, 1045, 276, 'fade', 'fade', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\"> New Look.<br />Think Different.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 200, 50, 0, 1),
(25, 9, 'Creative Design Everyone Wants From Fluent Store', '', 0, 1200, 1900, 1045, 416, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store </span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 350, 158, 0, 1),
(27, 10, 'Shop Now', '', 0, 1500, 2000, 1077, 476, 'left', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 88, 21, 0, 1),
(29, 11, 'Creative Design Everyone Wants From Fluent Store', '', 0, 1000, 1500, 1074, 391, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#111111', 136, 31, 0, 1),
(41, 8, 'Shopnow', '', 0, 1700, 2400, 310, 491, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(42, 9, 'Shop now', '', 0, 1500, 2000, 1045, 494, 'left', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(44, 10, 'New Look', '', 0, 700, 1400, 1071, 258, 'left', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\"> New Look.<br />Think Different.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 200, 50, 0, 1),
(46, 11, 'Modern. Simple. Minimalist.', '', 0, 700, 1400, 1074, 252, 'top', 'bottom', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />\r\nMinimalist.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 200, 50, 0, 1),
(52, 11, 'shopnow', '', 0, 1700, 2400, 1074, 469, 'bottom', 'bottom', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(55, 12, 'Modern Chair Design 2017', '', 0, 1000, 1700, 374, 290, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern Chair Design 2017</span>', NULL, 0, 0, 0, 0, 0, 48, 56, 'normal', '#111111', 128, 19, 0, 1),
(56, 12, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 376, 361, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Interface Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(57, 12, 'shopnow', '', 0, 2200, 2700, 374, 440, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(58, 10, 'Creative Design Everyone Wants From Fluent Store', '', 0, 1200, 1900, 1071, 398, 'left', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(59, 13, 'Modern Chair Design 2017', '', 0, 1000, 1700, 311, 356, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />Minimalist.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(60, 13, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 311, 497, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(61, 13, 'shopnow', '', 0, 2200, 2700, 311, 600, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow  btn-effect1\">Shop Now\r\n\r\n</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(62, 7, 'Modern Chair Design 2017', '', 0, 1000, 1700, 305, 311, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern Chair Design 2017</span>', NULL, 0, 0, 0, 0, 0, 48, 56, 'normal', '#111111', 200, 50, 0, 1),
(63, 7, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 305, 382, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Interface Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(64, 7, 'shopnow', '', 0, 2200, 2700, 301, 473, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now\r\n</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 67, 19, 0, 1),
(65, 14, 'Modern Chair Design 2017', '', 0, 1000, 1700, 1121, 356, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Newlook.<br />Think Different.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(66, 14, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 1121, 495, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(67, 14, 'shopnow', '', 0, 2200, 2700, 1121, 572, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 76, 20, 0, 1),
(68, 15, 'Modern Chair Design 2017', '', 0, 1000, 1700, 408, 384, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern Chair Design 2017</span>', NULL, 0, 0, 0, 0, 0, 48, 56, 'normal', '#111111', 200, 50, 0, 1),
(69, 15, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 407, 456, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Interface Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(70, 15, 'shopnow', '', 0, 2200, 2700, 408, 530, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 67, 19, 0, 1),
(71, 16, 'Modern Chair Design 2017', '', 0, 1000, 1700, 311, 356, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />Minimalist.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(72, 16, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 311, 497, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(73, 16, 'shopnow', '', 0, 2200, 2700, 311, 595, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(74, 17, 'Modern Chair Design 2017', '', 0, 1000, 1700, 1121, 356, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Newlook.<br />Think Different.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(75, 17, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 1122, 493, 'fade', 'fade', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(76, 17, 'shopnow', '', 0, 2200, 2700, 1121, 572, 'fade', 'fade', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(77, 18, 'Modern Chair Design 2017', '', 0, 1000, 1700, 408, 384, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern Chair Design 2017</span>', NULL, 0, 0, 0, 0, 0, 48, 56, 'normal', '#111111', 200, 50, 0, 1),
(78, 18, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 408, 456, 'right', 'right', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Interface Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(79, 18, 'shopnow', '', 0, 2200, 2700, 408, 530, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 67, 19, 0, 1),
(80, 19, 'Modern Chair Design 2017', '', 0, 1000, 1700, 151, 219, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />Minimalist.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(81, 19, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 151, 357, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(82, 19, 'shopnow', '', 0, 2200, 2700, 153, 448, 'right', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1),
(83, 20, 'Modern Chair Design 2017', '', 0, 1000, 1700, 739, 219, 'left', 'left', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-large\">Newlook.<br />Think Different.</span>', NULL, 0, 0, 0, 0, 0, 52, 65, 'normal', '#111111', 128, 19, 0, 1),
(84, 20, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 739, 358, 'fade', 'fade', 'linear', 'linear', 0, '', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, 18, 56, 'normal', '#303030', 200, 50, 0, 1),
(85, 20, 'shopnow', '', 0, 2200, 2700, 739, 433, 'fade', 'fade', 'linear', 'linear', 0, '', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, 16, 26, 'normal', '#111111', 200, 50, 0, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_shop`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_shop` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) NOT NULL,
  PRIMARY KEY (`id_slide`,`id_shop`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slides_shop` (`id_slide`, `id_shop`) VALUES
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1);
";
