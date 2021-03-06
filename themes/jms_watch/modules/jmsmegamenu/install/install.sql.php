<?php
/**
* 2007-2017 PrestaShop
*
* Jms Mega Menu module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jmsmegamenu` (
  `mitem_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` varchar(255) NOT NULL,
  `html_content` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `target` varchar(25) NOT NULL,
  `params` text NOT NULL,
  `ordering` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mitem_id`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=355;

INSERT INTO `_DB_PREFIX_jmsmegamenu` (`mitem_id`, `id_shop`, `parent_id`, `type`, `value`, `html_content`, `active`, `target`, `params`, `ordering`) VALUES
(1, 1, 0, 'link', '#', '', 1, '_self', '{\"align\":\"left\",\"sub\":{\"width\":\"232\",\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"232\"},{\"item\":\"233\"},{\"item\":\"234\"},{\"item\":\"235\"},{\"item\":\"236\"},{\"item\":\"237\"},{\"item\":\"238\"},{\"item\":\"239\"}]}]]}}', 0),
(2, 1, 0, 'category', '3', '', 1, '_self', '{\"class\":\"must-see\",\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"308\"},{\"item\":\"314\"},{\"item\":\"315\"},{\"item\":\"316\"},{\"item\":\"340\"},{\"item\":\"350\"}]}],[{\"width\":\"12\",\"items\":[]}]]}}', 1),
(3, 1, 0, 'category', '3', '', 1, '_self', '{\"class\":\"\",\"align\":\"center\",\"sub\":{\"fullwidth\":\"1\",\"width\":\"1300\",\"row\":[[{\"width\":\"12\",\"class\":\"img-first wrapper-banner banner-style1\",\"items\":[{\"item\":\"259\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"260\"},{\"item\":\"261\"},{\"item\":\"262\"},{\"item\":\"263\"},{\"item\":\"264\"},{\"item\":\"265\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"266\"},{\"item\":\"267\"},{\"item\":\"268\"},{\"item\":\"269\"},{\"item\":\"270\"},{\"item\":\"271\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"272\"},{\"item\":\"273\"},{\"item\":\"274\"},{\"item\":\"275\"},{\"item\":\"276\"},{\"item\":\"277\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"278\"},{\"item\":\"279\"},{\"item\":\"280\"},{\"item\":\"281\"},{\"item\":\"282\"},{\"item\":\"283\"}]}],[{\"width\":\"4\",\"class\":\"img-bottom img-left  banner-style1 wrapper-banner\",\"items\":[{\"item\":\"284\"}]},{\"width\":\"4\",\"class\":\"img-bottom img-center banner-style1 wrapper-banner\",\"items\":[{\"item\":\"285\"}]},{\"width\":\"4\",\"class\":\"img-bottom img-right banner-style1 wrapper-banner\",\"items\":[{\"item\":\"286\"}]}]]}}', 2),
(5, 1, 0, 'link', 'index.php?fc=module&module=jmsblog&controller=post&post_id=21&sidebar=left', '', 1, '_self', '{\"class\":\"new\",\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"287\"},{\"item\":\"294\"},{\"item\":\"298\"},{\"item\":\"305\"},{\"item\":\"306\"}]}]]}}', 4),
(6, 1, 0, 'category', '3', '', 1, '_self', '{\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"249\"},{\"item\":\"250\"},{\"item\":\"253\"},{\"item\":\"254\"},{\"item\":\"256\"},{\"item\":\"255\"},{\"item\":\"307\"},{\"item\":\"257\"},{\"item\":\"258\"}]}]]}}', 5),
(7, 1, 0, 'link', 'index.php?controller=contact', '', 1, '_self', '{}', 6),
(173, 1, 0, 'cms', '4', '', 1, '_self', '{\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"240\"},{\"item\":\"241\"},{\"item\":\"242\"},{\"item\":\"243\"},{\"item\":\"244\"},{\"item\":\"245\"},{\"item\":\"246\"},{\"item\":\"247\"},{\"item\":\"248\"}]}]]}}', 7),
(232, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=1', '', 1, '_self', '{\"title\":\"1\"}', 1),
(233, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=2', '', 1, '_self', '{\"title\":\"1\"}', 2),
(234, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=3', '', 1, '_self', '{\"title\":\"1\"}', 3),
(235, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=4', '', 1, '_self', '{\"title\":\"1\"}', 4),
(236, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=5', '', 1, '_self', '{\"title\":\"1\"}', 5),
(237, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=6', '', 1, '_self', '{\"title\":\"1\"}', 6),
(238, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=7', '', 1, '_self', '{\"title\":\"1\"}', 7),
(239, 1, 1, 'link', 'index.php?settingpanel=1&jpb_homepage=8', '', 1, '_self', '{\"title\":\"1\"}', 8),
(240, 1, 173, 'cms', '7', '', 1, '_self', '{\"title\":\"1\"}', 1),
(241, 1, 173, 'cms', '8', '', 1, '_self', '{\"title\":\"1\"}', 2),
(242, 1, 173, 'cms', '11', '', 1, '_self', '{\"title\":\"1\"}', 3),
(243, 1, 173, 'cms', '14', '', 1, '_self', '{\"title\":\"1\"}', 4),
(244, 1, 173, 'cms', '10', '', 1, '_self', '{\"title\":\"1\"}', 5),
(245, 1, 173, 'cms', '9', '', 1, '_self', '{\"title\":\"1\"}', 6),
(246, 1, 173, 'cms', '12', '', 1, '_self', '{\"title\":\"1\"}', 7),
(247, 1, 173, 'cms', '13', '', 1, '_self', '{\"title\":\"1\"}', 8),
(248, 1, 173, 'cms', '15', '', 1, '_self', '{\"title\":\"1\"}', 9),
(249, 1, 6, 'cms', '6', '', 1, '_self', '{\"title\":\"1\"}', 1),
(250, 1, 6, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1#/1-size-s/5-color-red&sidebar=left', '', 1, '_self', '{\"title\":\"1\"}', 2),
(251, 1, 250, 'category', '3', '', 1, '_self', '', 1),
(252, 1, 250, 'product', '19', '', 1, '_self', '', 2),
(253, 1, 6, 'cms', '4', '', 1, '_self', '{\"title\":\"1\"}', 3),
(254, 1, 6, 'link', 'index.php?controller=new-products', '', 1, '_self', '{\"title\":\"1\"}', 4),
(255, 1, 6, 'link', 'index.php?fc=module&module=jmswishlist&controller=mywishlist&id_lang=1', '', 1, '_self', '{\"title\":\"1\"}', 8),
(256, 1, 6, 'link', 'index.php?controller=search&orderby=position&orderway=desc&search_query=premi', '', 1, '_self', '{\"title\":\"1\"}', 5),
(257, 1, 6, 'link', 'index.php?controller=prices-drop', '', 1, '_self', '{\"title\":\"1\"}', 9),
(258, 1, 6, 'link', 'index.php?controller=404', '', 1, '_self', '{\"title\":\"1\"}', 10),
(259, 1, 3, 'html', 'html_content', '<div class=\"img-menu\"><a target=\"_blank\" href=\"http://www.joommasters.com\"><img src=\"../themes/jms_fluent/assets/img/demo/imgmenu1.jpg\" alt=\"Image Menu\" /></a>\r\n<div class=\"banner-content\">\r\n<div class=\"banner-box\">\r\n<div class=\"box-content\">\r\n<h4>TOP BRANDING 2017</h4>\r\n<span>Discount 30% Now!</span></div>\r\n</div>\r\n</div>\r\n</div>', 1, '_self', '{\"title\":\"0\"}', 1),
(260, 1, 3, 'category', '3', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 2),
(261, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 3),
(262, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 4),
(263, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 5),
(264, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 6),
(265, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 7),
(266, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 8),
(267, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 9),
(268, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 10),
(269, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 11),
(270, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 12),
(271, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 13),
(272, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 14),
(273, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 15),
(274, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 16),
(275, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 17),
(276, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 18),
(277, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 19),
(278, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 20),
(279, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 21),
(280, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 22),
(281, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 23),
(282, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 24),
(283, 1, 3, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 25),
(284, 1, 3, 'html', 'html_content', '<div class=\"img-menu\"><a target=\"_blank\" href=\"http://www.joommasters.com\"><img src=\"../themes/jms_fluent/assets/img/demo/imgmenu2.jpg\" alt=\"Image Menu\" /></a>\r\n<div class=\"banner-content\">\r\n<div class=\"banner-box\">\r\n<div class=\"box-content\">\r\n<h4>CLOCK</h4>\r\n<h4>CONCEPT DESIGN</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '_self', '{\"title\":\"0\"}', 26),
(285, 1, 3, 'html', 'html_content', '<div class=\"img-menu\"><a target=\"_blank\" href=\"http://www.joommasters.com\"><img src=\"../themes/jms_fluent/assets/img/demo/imgmenu3.jpg\" alt=\"Image Menu\" /></a>\r\n<div class=\"banner-content\">\r\n<div class=\"banner-box\">\r\n<div class=\"box-content\">\r\n<h4>WIRELESS</h4>\r\n<h4>SPEAKER PRO</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '_self', '{\"title\":\"0\"}', 27),
(286, 1, 3, 'html', 'html_content', '<div class=\"img-menu\"><a target=\"_blank\" href=\"http://www.joommasters.com\"><img src=\"../themes/jms_fluent/assets/img/demo/imgmenu4.jpg\" alt=\"Image Menu\" /></a>\r\n<div class=\"banner-content\">\r\n<div class=\"banner-box\">\r\n<div class=\"box-content\">\r\n<h4>LIGHTING</h4>\r\n<h4>BLACK WHITE</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '_self', '{\"title\":\"0\"}', 28),
(287, 1, 5, 'jmsblog-category', '2', '', 1, '_self', '{\"title\":\"1\"}', 1),
(288, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=left', '', 1, '_self', '', 1),
(289, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=right', '', 1, '_self', '', 2),
(290, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=no', '', 1, '_self', '', 2),
(291, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=left&layout=category-layout-2columns', '', 1, '_self', '', 3),
(292, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=no&layout=category-layout-3columns', '', 1, '_self', '', 4),
(293, 1, 287, 'link', 'index.php?fc=module&module=jmsblog&controller=category&category_id=2&sidebar=no&layout=category-layout-4columns', '', 1, '_self', '', 5),
(294, 1, 5, 'jmsblog-singlepost', '21', '', 1, '_self', '{\"title\":\"1\"}', 2),
(295, 1, 294, 'link', 'index.php?fc=module&module=jmsblog&controller=post&post_id=21&sidebar=left', '', 1, '_self', '', 1),
(296, 1, 294, 'link', 'index.php?fc=module&module=jmsblog&controller=post&post_id=21&sidebar=right', '', 1, '_self', '', 2),
(297, 1, 294, 'link', 'index.php?fc=module&module=jmsblog&controller=post&post_id=21&sidebar=no', '', 1, '_self', '', 3),
(298, 1, 5, 'jmsblog-categories', 'jmsblog_categories', '', 1, '_self', '{\"title\":\"1\"}', 3),
(299, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=left', '', 1, '_self', '', 1),
(300, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=right', '', 1, '_self', '', 2),
(301, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&layout=categories-layout-3columns&sidebar=no', '', 1, '_self', '', 3),
(302, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=left', '', 1, '_self', '', 4),
(303, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&layout=categories-layout-3columns&sidebar=no', '', 1, '_self', '', 5),
(304, 1, 298, 'link', 'index.php?fc=module&module=jmsblog&controller=categories&layout=categories-layout-4columns&sidebar=no', '', 1, '_self', '', 6),
(305, 1, 5, 'jmsblog-tag', 'furniture', '', 1, '_self', '{\"title\":\"1\"}', 4),
(306, 1, 5, 'link', 'index.php?fc=module&module=jmsblog&archive=2017-08&controller=archive&id_lang=1&sidebar=left', '', 1, '_self', '{\"title\":\"1\"}', 5),
(307, 1, 6, 'link', 'index.php?controller=best-sales', '', 1, '_self', '{\"title\":\"1\"}', 11),
(308, 1, 2, 'product', '19', '', 1, '_self', '{\"title\":\"1\"}', 1),
(309, 1, 308, 'link', 'index.php?id_product=10&id_product_attribute=67&rewrite=wall-clock-concept-demo&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 8),
(310, 1, 308, 'link', 'index.php?id_product=20&id_product_attribute=0&rewrite=virtual-product&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 9),
(311, 1, 308, 'link', 'index.php?id_product=21&id_product_attribute=0&rewrite=pack-of-products&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 10),
(312, 1, 308, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 11),
(313, 1, 308, 'link', 'index.php?id_product=18&id_product_attribute=163&rewrite=scented-wood-candles&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 12),
(314, 1, 2, 'category', '3', '', 1, '_self', '{\"title\":\"1\"}', 0),
(315, 1, 2, 'link', '#', '', 1, '_self', '{\"title\":\"1\"}', 2),
(316, 1, 2, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=left', '', 1, '_self', '{\"title\":\"1\"}', 3),
(317, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=left', '', 1, '_self', '', 0),
(318, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=right', '', 1, '_self', '', 1),
(319, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=no', '', 1, '_self', '', 2),
(320, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&layout=category-layout-banner&sidebar=left', '', 1, '_self', '', 3),
(321, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&layout=category-layout-desc&sidebar=left', '', 1, '_self', '', 4),
(322, 1, 314, 'link', 'index.php?id_category=12&controller=category&id_lang=1&ppr=2&sidebar=left', '', 1, '_self', '', 6),
(323, 1, 314, 'link', 'index.php?id_category=12&controller=category&id_lang=1&ppr=3&sidebar=right', '', 1, '_self', '', 7),
(324, 1, 314, 'link', 'index.php?id_category=12&controller=category&id_lang=1&ppr=4&sidebar=no', '', 1, '_self', '', 8),
(325, 1, 314, 'link', 'index.php?id_category=12&controller=category&id_lang=1&ppr=5&sidebar=no', '', 1, '_self', '', 9),
(326, 1, 314, 'link', 'index.php?id_category=12&controller=category&id_lang=1&ppr=6&sidebar=no', '', 1, '_self', '', 10),
(327, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_grid=0&sidebar=left', '', 1, '_self', '', 11),
(328, 1, 314, 'link', 'index.php?id_category=3&controller=category&id_lang=1&layout=category-layout-bannerandesc&sidebar=left', '', 1, '_self', '', 5),
(329, 1, 315, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 0),
(330, 1, 315, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1&sidebar=right', '', 1, '_self', '', 1),
(332, 1, 315, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1&sidebar=no', '', 1, '_self', '', 2),
(333, 1, 315, 'link', 'index.php?id_product=19&id_product_attribute=211&rewrite=dapibus-mollis-risus&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 3),
(334, 1, 315, 'link', 'index.php?id_product=8&id_product_attribute=56&rewrite=normann-copenhagen&controller=product&id_lang=1&sidebar=no&layout=product-layout-3columns', '', 1, '_self', '', 4),
(335, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=left', '', 1, '_self', '', 8),
(336, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_phover=image_swap&sidebar=left', '', 1, '_self', '', 9),
(337, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_pcolor=1&sidebar=left', '', 1, '_self', '', 10),
(338, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_categoryname=0&sidebar=left', '', 1, '_self', '', 11),
(339, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_wishlist=0&jpb_categoryname=0&sidebar=left', '', 1, '_self', '', 12),
(340, 1, 2, 'product', '19', '', 1, '_self', '{\"title\":\"1\"}', 4),
(341, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&sidebar=left', '', 1, '_self', '', 1),
(342, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_gutterwidth=0&sidebar=left', '', 1, '_self', '', 2),
(343, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_gutterwidth=10&sidebar=left', '', 1, '_self', '', 3),
(344, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_gutterwidth=20&sidebar=left', '', 1, '_self', '', 4),
(345, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_gutterwidth=40&sidebar=left', '', 1, '_self', '', 5),
(346, 1, 340, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_gutterwidth=60&sidebar=left', '', 1, '_self', '', 6),
(347, 1, 316, 'link', 'index.php?id_category=3&controller=category&id_lang=1&jpb_wishlist=0&sidebar=left', '', 1, '_self', '', 8),
(348, 1, 308, 'link', 'index.php?id_product=17&id_product_attribute=153&rewrite=premium-space-stool&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 13),
(349, 1, 308, 'link', 'index.php?id_product=17&id_product_attribute=153&rewrite=premium-space-stool&controller=product&id_lang=1&sidebar=left', '', 1, '_self', '', 13),
(350, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 5),
(351, 1, 350, 'link', 'index.php?jpb_addtocart=default', '', 1, '_self', '', 1),
(352, 1, 350, 'link', 'index.php?jpb_addtocart=ajax_popup', '', 1, '_self', '', 2),
(353, 1, 350, 'link', 'index.php?jpb_addtocart=ajax_moveimage', '', 1, '_self', '', 3),
(354, 1, 350, 'link', 'index.php?jpb_addtocart=ajax_cartbottom', '', 1, '_self', '', 4);

DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu_lang`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jmsmegamenu_lang` (
  `mitem_id` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jmsmegamenu_lang` (`mitem_id`, `id_lang`, `name`, `description`) VALUES
(1, 1, 'Home', ''),
(1, 5, 'Home', ''),
(1, 6, 'Home', ''),
(1, 7, 'Home', ''),
(2, 1, 'Shop', ''),
(2, 5, 'Store', ''),
(2, 6, 'Store', ''),
(2, 7, 'Store', ''),
(3, 1, 'Features', ''),
(3, 5, 'Latest', ''),
(3, 6, 'Latest', ''),
(3, 7, 'Latest', ''),
(5, 1, 'Blog', ''),
(5, 5, 'Blog', ''),
(5, 6, 'Blog', ''),
(5, 7, 'Blog', ''),
(6, 1, 'Pages', ''),
(6, 5, 'Pages', ''),
(6, 6, 'Pages', ''),
(6, 7, 'Pages', ''),
(7, 1, 'Contact', ''),
(7, 5, 'Contact', ''),
(7, 6, 'Contact', ''),
(7, 7, 'Contact', ''),
(1, 2, 'Home', ''),
(2, 2, 'Shop', ''),
(3, 2, 'Features', ''),
(5, 2, 'Blog', ''),
(6, 2, 'Pages', ''),
(7, 2, 'Contact', ''),
(1, 3, 'Home', ''),
(2, 3, 'Shop', ''),
(3, 3, 'Features', ''),
(5, 3, 'Blog', ''),
(6, 3, 'Pages', ''),
(7, 3, 'Contact', ''),
(1, 8, 'Home', ''),
(2, 8, 'Shop', ''),
(3, 8, 'Features', ''),
(5, 8, 'Blog', ''),
(6, 8, 'Pages', ''),
(7, 8, 'Contact', ''),
(1, 10, 'Home', ''),
(2, 10, 'Shop', ''),
(3, 10, 'Features', ''),
(5, 10, 'Blog', ''),
(6, 10, 'Pages', ''),
(7, 10, 'Contact', ''),
(173, 1, 'Elements', ''),
(173, 2, 'Elements', ''),
(173, 3, 'Elements', ''),
(173, 8, 'Elements', ''),
(173, 10, 'Elements', ''),
(232, 1, 'Home 1 - Default', ''),
(232, 2, 'Home 1 - Default', ''),
(232, 3, 'Home 1 - Default', ''),
(232, 5, 'Home 1 - Default', ''),
(233, 1, 'Home 2 - Modern', ''),
(233, 2, 'Home 2 - Modern', ''),
(233, 3, 'Home 2 - Modern', ''),
(233, 5, 'Home 2 - Modern', ''),
(234, 1, 'Home 3 - Hero Slider', ''),
(234, 2, 'Home 3 - Hero Slider', ''),
(234, 3, 'Home 3 - Hero Slider', ''),
(234, 5, 'Home 3 - Hero Slider', ''),
(235, 1, 'Home 4 - Fullwidth', ''),
(235, 2, 'Home 4 - Fullwidth', ''),
(235, 3, 'Home 4 - Fullwidth', ''),
(235, 5, 'Home 4 - Fullwidth', ''),
(236, 1, 'Home 5 - Minimal', ''),
(236, 2, 'Home 5 - Minimal', ''),
(236, 3, 'Home 5 - Minimal', ''),
(236, 5, 'Home 5 - Minimal', ''),
(237, 1, 'Home 6 - Boxed', ''),
(237, 2, 'Home 6 - Boxed', ''),
(237, 3, 'Home 6 - Boxed', ''),
(237, 5, 'Home 6 - Boxed', ''),
(238, 1, 'Home 7 - Left Menu', ''),
(238, 2, 'Home 7 - Left Menu', ''),
(238, 3, 'Home 7 - Left Menu', ''),
(238, 5, 'Home 7 - Left Menu', ''),
(239, 1, 'Home 8 - Parallax', ''),
(239, 2, 'Home 8 - Parallax', ''),
(239, 3, 'Home 8 - Parallax', ''),
(239, 5, 'Home 8 - Parallax', ''),
(240, 1, 'Icon With Text', ''),
(240, 2, 'Icon With Text', ''),
(240, 3, 'Icon With Text', ''),
(240, 5, 'Icon With Text', ''),
(241, 1, 'Tabs', ''),
(241, 2, 'Tabs', ''),
(241, 3, 'Tabs', ''),
(241, 5, 'Tabs', ''),
(242, 1, 'Accordions', ''),
(242, 2, 'Accordions', ''),
(242, 3, 'Accordions', ''),
(242, 5, 'Accordions', ''),
(243, 1, 'Teams', ''),
(243, 2, 'Teams', ''),
(243, 3, 'Teams', ''),
(243, 5, 'Teams', ''),
(244, 1, 'Text with image', ''),
(244, 2, 'Text with image', ''),
(244, 3, 'Text with image', ''),
(244, 5, 'Text with image', ''),
(245, 1, 'Lists and Icons', ''),
(245, 2, 'Lists and Icons', ''),
(245, 3, 'Lists and Icons', ''),
(245, 5, 'Lists and Icons', ''),
(246, 1, 'Responsive Grid System', ''),
(246, 2, 'Responsive Grid System', ''),
(246, 3, 'Responsive Grid System', ''),
(246, 5, 'Responsive Grid System', ''),
(247, 1, 'Separators/Dividers', ''),
(247, 2, 'Separators/Dividers', ''),
(247, 3, 'Separators/Dividers', ''),
(247, 5, 'Separators/Dividers', ''),
(248, 1, 'Google Maps', ''),
(248, 2, 'Google Maps', ''),
(248, 3, 'Google Maps', ''),
(248, 5, 'Google Maps', ''),
(249, 1, 'Typography', ''),
(249, 2, 'Typography', ''),
(249, 3, 'Typography', ''),
(249, 5, 'Typography', ''),
(250, 1, 'Product Pages', ''),
(250, 2, 'Product Pages', ''),
(250, 3, 'Product Pages', ''),
(250, 5, 'Product Pages', ''),
(251, 1, 'Product List', ''),
(251, 2, 'Product List', ''),
(251, 3, 'Product List', ''),
(251, 5, 'Product List', ''),
(252, 1, 'Product Details', ''),
(252, 2, 'Product Details', ''),
(252, 3, 'Product Details', ''),
(252, 5, 'Product Details', ''),
(253, 1, 'About Us', ''),
(253, 2, 'About Us', ''),
(253, 3, 'About Us', ''),
(253, 5, 'About Us', ''),
(254, 1, 'New Products', ''),
(254, 2, 'New Products', ''),
(254, 3, 'New Products', ''),
(254, 5, 'New Products', ''),
(255, 1, 'Wishlist Page', ''),
(255, 2, 'Wishlist Page', ''),
(255, 3, 'Wishlist Page', ''),
(255, 5, 'Wishlist Page', ''),
(256, 1, 'Search Page', ''),
(256, 2, 'Search Page', ''),
(256, 3, 'Search Page', ''),
(256, 5, 'Search Page', ''),
(257, 1, 'Prices drop', ''),
(257, 2, 'Prices drop', ''),
(257, 3, 'Prices drop', ''),
(257, 5, 'Prices drop', ''),
(258, 1, '404 Page', ''),
(258, 2, '404 Page', ''),
(258, 3, '404 Page', ''),
(258, 5, '404 Page', ''),
(259, 1, 'img', ''),
(259, 2, 'img', ''),
(259, 3, 'img', ''),
(259, 5, 'img', ''),
(260, 1, 'CATEGORIES 1', ''),
(260, 2, 'CATEGORIES 1', ''),
(260, 3, 'CATEGORIES 1', ''),
(260, 5, 'CATEGORIES 1', ''),
(261, 1, 'Suspend Tempor', ''),
(261, 2, 'Suspend Tempor', ''),
(261, 3, 'Suspend Tempor', ''),
(261, 5, 'Suspend Tempor', ''),
(262, 1, 'Vestibulum Quam', ''),
(262, 2, 'Vestibulum Quam', ''),
(262, 3, 'Vestibulum Quam', ''),
(262, 5, 'Vestibulum Quam', ''),
(263, 1, 'Dolor Elementum', ''),
(263, 2, 'Dolor Elementum', ''),
(263, 3, 'Dolor Elementum', ''),
(263, 5, 'Dolor Elementum', ''),
(264, 1, 'Aenean Auctor', ''),
(264, 2, 'Aenean Auctor', ''),
(264, 3, 'Aenean Auctor', ''),
(264, 5, 'Aenean Auctor', ''),
(265, 1, 'Efficitur Consecter', ''),
(265, 2, 'Efficitur Consecter', ''),
(265, 3, 'Efficitur Consecter', ''),
(265, 5, 'Efficitur Consecter', ''),
(266, 1, 'CATEGORIES 2', ''),
(266, 2, 'CATEGORIES 2', ''),
(266, 3, 'CATEGORIES 2', ''),
(266, 5, 'CATEGORIES 2', ''),
(267, 1, 'Blandit Viverra', ''),
(267, 2, 'Blandit Viverra', ''),
(267, 3, 'Blandit Viverra', ''),
(267, 5, 'Blandit Viverra', ''),
(268, 1, 'Porta Cursus', ''),
(268, 2, 'Porta Cursus', ''),
(268, 3, 'Porta Cursus', ''),
(268, 5, 'Porta Cursus', ''),
(269, 1, 'Praesent Enim', ''),
(269, 2, 'Praesent Enim', ''),
(269, 3, 'Praesent Enim', ''),
(269, 5, 'Praesent Enim', ''),
(270, 1, 'Nunc Aliquam', ''),
(270, 2, 'Nunc Aliquam', ''),
(270, 3, 'Nunc Aliquam', ''),
(270, 5, 'Nunc Aliquam', ''),
(271, 1, 'Porta Cursus', ''),
(271, 2, 'Porta Cursus', ''),
(271, 3, 'Porta Cursus', ''),
(271, 5, 'Porta Cursus', ''),
(272, 1, 'CATEGORIES 3', ''),
(272, 2, 'CATEGORIES 3', ''),
(272, 3, 'CATEGORIES 3', ''),
(272, 5, 'CATEGORIES 3', ''),
(273, 1, 'Varius Lobortis', ''),
(273, 2, 'Varius Lobortis', ''),
(273, 3, 'Varius Lobortis', ''),
(273, 5, 'Varius Lobortis', ''),
(274, 1, 'Diam Rhoncus', ''),
(274, 2, 'Diam Rhoncus', ''),
(274, 3, 'Diam Rhoncus', ''),
(274, 5, 'Diam Rhoncus', ''),
(275, 1, 'Congue Tellus', ''),
(275, 2, 'Congue Tellus', ''),
(275, 3, 'Congue Tellus', ''),
(275, 5, 'Congue Tellus', ''),
(276, 1, 'Malesua Fames', ''),
(276, 2, 'Malesua Fames', ''),
(276, 3, 'Malesua Fames', ''),
(276, 5, 'Malesua Fames', ''),
(277, 1, 'Lobortis Quisque', ''),
(277, 2, 'Lobortis Quisque', ''),
(277, 3, 'Lobortis Quisque', ''),
(277, 5, 'Lobortis Quisque', ''),
(278, 1, 'CATEGORIES 4', ''),
(278, 2, 'CATEGORIES 4', ''),
(278, 3, 'CATEGORIES 4', ''),
(278, 5, 'CATEGORIES 4', ''),
(279, 1, 'Vitae Tempor', ''),
(279, 2, 'Vitae Tempor', ''),
(279, 3, 'Vitae Tempor', ''),
(279, 5, 'Vitae Tempor', ''),
(280, 1, 'Diam Rhoncus', ''),
(280, 2, 'Diam Rhoncus', ''),
(280, 3, 'Diam Rhoncus', ''),
(280, 5, 'Diam Rhoncus', ''),
(281, 1, 'Congue Tellus', ''),
(281, 2, 'Congue Tellus', ''),
(281, 3, 'Congue Tellus', ''),
(281, 5, 'Congue Tellus', ''),
(282, 1, 'Pulvinar Sapien', ''),
(282, 2, 'Pulvinar Sapien', ''),
(282, 3, 'Pulvinar Sapien', ''),
(282, 5, 'Pulvinar Sapien', ''),
(283, 1, 'Euismod Turpis', ''),
(283, 2, 'Euismod Turpis', ''),
(283, 3, 'Euismod Turpis', ''),
(283, 5, 'Euismod Turpis', ''),
(284, 1, 'img', ''),
(284, 2, 'img', ''),
(284, 3, 'img', ''),
(284, 5, 'img', ''),
(285, 1, 'img', ''),
(285, 2, 'img', ''),
(285, 3, 'img', ''),
(285, 5, 'img', ''),
(286, 1, 'img', ''),
(286, 2, 'img', ''),
(286, 3, 'img', ''),
(286, 5, 'img', ''),
(287, 1, 'Blog Category', ''),
(287, 2, 'Blog Category', ''),
(287, 3, 'Blog Category', ''),
(287, 5, 'Blog Category', ''),
(288, 1, 'Category - Left Sidebar', ''),
(288, 2, 'Category - Left Sidebar', ''),
(288, 3, 'Category - Left Sidebar', ''),
(288, 5, 'Category - Left Sidebar', ''),
(289, 1, 'Category - Right Sidebar', ''),
(289, 2, 'Category - Right Sidebar', ''),
(289, 3, 'Category - Right Sidebar', ''),
(289, 5, 'Category - Right Sidebar', ''),
(290, 1, 'Category - No Sidebar', ''),
(290, 2, 'Category - No Sidebar', ''),
(290, 3, 'Category - No Sidebar', ''),
(290, 5, 'Category - No Sidebar', ''),
(291, 1, '2 Columns', ''),
(291, 2, '2 Columns', ''),
(291, 3, '2 Columns', ''),
(291, 5, '2 Columns', ''),
(292, 1, '3 Columns', ''),
(292, 2, '3 Columns', ''),
(292, 3, '3 Columns', ''),
(292, 5, '3 Columns', ''),
(293, 1, '4 Columns', ''),
(293, 2, '4 Columns', ''),
(293, 3, '4 Columns', ''),
(293, 5, '4 Columns', ''),
(294, 1, 'Blog Single Post', ''),
(294, 2, 'Blog Single Post', ''),
(294, 3, 'Blog Single Post', ''),
(294, 5, 'Blog Single Post', ''),
(295, 1, 'Left Sidebar', ''),
(295, 2, 'Left Sidebar', ''),
(295, 3, 'Left Sidebar', ''),
(295, 5, 'Left Sidebar', ''),
(296, 1, 'Right Sidebar', ''),
(296, 2, 'Right Sidebar', ''),
(296, 3, 'Right Sidebar', ''),
(296, 5, 'Right Sidebar', ''),
(297, 1, 'No Sidebar', ''),
(297, 2, 'No Sidebar', ''),
(297, 3, 'No Sidebar', ''),
(297, 5, 'No Sidebar', ''),
(298, 1, 'Blog Categories', ''),
(298, 2, 'Blog Categories', ''),
(298, 3, 'Blog Categories', ''),
(298, 5, 'Blog Categories', ''),
(299, 1, 'Categories - Left Sidebar', ''),
(299, 2, 'Categories - Left Sidebar', ''),
(299, 3, 'Categories - Left Sidebar', ''),
(299, 5, 'Categories - Left Sidebar', ''),
(300, 1, 'Categories- Right Sidebar', ''),
(300, 2, 'Categories- Right Sidebar', ''),
(300, 3, 'Categories- Right Sidebar', ''),
(300, 5, 'Categories- Right Sidebar', ''),
(301, 1, 'Categories -No Sidebar', ''),
(301, 2, 'Categories -No Sidebar', ''),
(301, 3, 'Categories -No Sidebar', ''),
(301, 5, 'Categories -No Sidebar', ''),
(302, 1, '2 Columns', ''),
(302, 2, '2 Columns', ''),
(302, 3, '2 Columns', ''),
(302, 5, '2 Columns', ''),
(303, 1, '3 Columns', ''),
(303, 2, '3 Columns', ''),
(303, 3, '3 Columns', ''),
(303, 5, '3 Columns', ''),
(304, 1, '4 Columns', ''),
(304, 2, '4 Columns', ''),
(304, 3, '4 Columns', ''),
(304, 5, '4 Columns', ''),
(305, 1, 'Blog Tags', ''),
(305, 2, 'Blog Tags', ''),
(305, 3, 'Blog Tags', ''),
(305, 5, 'Blog Tags', ''),
(306, 1, 'Blog Archives', ''),
(306, 2, 'Blog Archives', ''),
(306, 3, 'Blog Archives', ''),
(306, 5, 'Blog Archives', ''),
(307, 1, 'Best Sales', ''),
(307, 2, 'Best Sales', ''),
(307, 3, 'Best Sales', ''),
(307, 5, 'Best Sales', ''),
(308, 1, 'Product Type', ''),
(308, 2, 'Product Type', ''),
(308, 3, 'Product Type', ''),
(308, 5, 'Product Type', ''),
(309, 1, 'Standard Product', ''),
(309, 2, 'Standard Product', ''),
(309, 3, 'Standard Product', ''),
(309, 5, 'Standard Product', ''),
(310, 1, 'Virtual Product', ''),
(310, 2, 'Virtual Product', ''),
(310, 3, 'Virtual Product', ''),
(310, 5, 'Virtual Product', ''),
(311, 1, 'Pack of Products', ''),
(311, 2, 'Pack of Products', ''),
(311, 3, 'Pack of Products', ''),
(311, 5, 'Pack of Products', ''),
(312, 1, 'Product  Color Swatch', ''),
(312, 2, 'Product  Color Swatch', ''),
(312, 3, 'Product  Color Swatch', ''),
(312, 5, 'Product  Color Swatch', ''),
(313, 1, 'Product Out of Stock', ''),
(313, 2, 'Product Out of Stock', ''),
(313, 3, 'Product Out of Stock', ''),
(313, 5, 'Product Out of Stock', ''),
(314, 1, 'Category Layout', ''),
(314, 2, 'Category Layout', ''),
(314, 3, 'Category Layout', ''),
(314, 5, 'Category Layout', ''),
(315, 1, 'Product Layout', ''),
(315, 2, 'Product Layout', ''),
(315, 3, 'Product Layout', ''),
(315, 5, 'Product Layout', ''),
(316, 1, 'Product Box', ''),
(316, 2, 'Product Box', ''),
(316, 3, 'Product Box', ''),
(316, 5, 'Product Box', ''),
(317, 1, 'Left Sidebar', ''),
(317, 2, 'Left Sidebar', ''),
(317, 3, 'Left Sidebar', ''),
(317, 5, 'Left Sidebar', ''),
(318, 1, 'Right Sidebar', ''),
(318, 2, 'Right Sidebar', ''),
(318, 3, 'Right Sidebar', ''),
(318, 5, 'Right Sidebar', ''),
(319, 1, 'No Sidebar', ''),
(319, 2, 'No Sidebar', ''),
(319, 3, 'No Sidebar', ''),
(319, 5, 'No Sidebar', ''),
(320, 1, 'Category Banner', ''),
(320, 2, 'Category Banner', ''),
(320, 3, 'Category Banner', ''),
(320, 5, 'Category Banner', ''),
(321, 1, 'Category Descriptions', ''),
(321, 2, 'Category Descriptions', ''),
(321, 3, 'Category Descriptions', ''),
(321, 5, 'Category Descriptions', ''),
(322, 1, 'Grid 2 Columns', ''),
(322, 2, 'Grid 2 Column', ''),
(322, 3, 'Grid 2 Column', ''),
(322, 5, 'Grid 2 Column', ''),
(323, 1, 'Grid 3 Columns', ''),
(323, 2, 'Grid 3 Columns', ''),
(323, 3, 'Grid 3 Columns', ''),
(323, 5, 'Grid 3 Columns', ''),
(324, 1, 'Grid 4 Columns', ''),
(324, 2, 'Grid 4 Columns', ''),
(324, 3, 'Grid 4 Columns', ''),
(324, 5, 'Grid 4 Columns', ''),
(325, 1, 'Grid 5 Columns', ''),
(325, 2, 'Grid 5 Columns', ''),
(325, 3, 'Grid 5 Columns', ''),
(325, 5, 'Grid 5 Columns', ''),
(326, 1, 'Grid 6 Columns', ''),
(326, 2, 'Grid 6 Columns', ''),
(326, 3, 'Grid 6 Columns', ''),
(326, 5, 'Grid 6 Columns', ''),
(327, 1, 'List Layout', ''),
(327, 2, 'List Layout', ''),
(327, 3, 'List Layout', ''),
(327, 5, 'List Layout', ''),
(328, 1, ' Banner and Descriptions', ''),
(328, 2, 'Category Banner and Description', ''),
(328, 3, 'Category Banner and Description', ''),
(328, 5, 'Category Banner and Description', ''),
(329, 1, 'Left Sidebar', ''),
(329, 2, 'Left Sidebar', ''),
(329, 3, 'Left Sidebar', ''),
(329, 5, 'Left Sidebar', ''),
(330, 1, 'Right Sidebar', ''),
(330, 2, 'Right Sidebar', ''),
(330, 3, 'Right Sidebar', ''),
(330, 5, 'Right Sidebar', ''),
(332, 1, 'No Sidebar', ''),
(332, 2, 'No Sidebar', ''),
(332, 3, 'No Sidebar', ''),
(332, 5, 'No Sidebar', ''),
(333, 1, 'Layout 2 Columns', ''),
(333, 2, 'Layout 2 Columns', ''),
(333, 3, 'Layout 2 Columns', ''),
(333, 5, 'Layout 2 Columns', ''),
(334, 1, 'Layout 3 Columns', ''),
(334, 2, 'Layout 3 Columns', ''),
(334, 3, 'Layout 3 Columns', ''),
(334, 5, 'Layout 3 Columns', ''),
(335, 1, 'Product Box Default', ''),
(335, 2, 'Product Box Default', ''),
(335, 3, 'Product Box Default', ''),
(335, 5, 'Product Box Default', ''),
(336, 1, 'Image Swatch', ''),
(336, 2, 'Image Swatch', ''),
(336, 3, 'Image Swatch', ''),
(336, 5, 'Image Swatch', ''),
(337, 1, 'Colors List', ''),
(337, 2, 'Colors List', ''),
(337, 3, 'Colors List', ''),
(337, 5, 'Colors List', ''),
(338, 1, 'No Category', ''),
(338, 2, 'No Category', ''),
(338, 3, 'No Category', ''),
(338, 5, 'No Category', ''),
(339, 1, 'No Category + No Wishlist', ''),
(339, 2, 'No Category + No Wishlist', ''),
(339, 3, 'No Category + No Wishlist', ''),
(339, 5, 'No Category + No Wishlist', ''),
(340, 1, 'Product Box Gutter', ''),
(340, 2, 'Product Box Gutter', ''),
(340, 3, 'Product Box Gutter', ''),
(340, 5, 'Product Box Gutter', ''),
(341, 1, 'Gutter Default (30px)', ''),
(341, 2, 'Gutter Default (30px)', ''),
(341, 3, 'Gutter Default (30px)', ''),
(341, 5, 'Gutter Default (30px)', ''),
(342, 1, 'No Gutter (0px)', ''),
(342, 2, 'No Gutter (0px)', ''),
(342, 3, 'No Gutter (0px)', ''),
(342, 5, 'No Gutter (0px)', ''),
(343, 1, 'Small Gutter (10px)', ''),
(343, 2, 'Small Gutter (10px)', ''),
(343, 3, 'Small Gutter (10px)', ''),
(343, 5, 'Small Gutter (10px)', ''),
(344, 1, 'Medium Gutter (20px)', ''),
(344, 2, 'Medium Gutter (20px)', ''),
(344, 3, 'Medium Gutter (20px)', ''),
(344, 5, 'Medium Gutter (20px)', ''),
(345, 1, 'Large Gutter (40px)', ''),
(345, 2, 'Large Gutter (40px)', ''),
(345, 3, 'Large Gutter (40px)', ''),
(345, 5, 'Large Gutter (40px)', ''),
(346, 1, 'Extra Large Gutter (60px)', ''),
(346, 2, 'Extra Large Gutter (60px)', ''),
(346, 3, 'Extra Large Gutter (60px)', ''),
(346, 5, 'Extra Large Gutter (60px)', ''),
(347, 1, ' No Wishlist', ''),
(347, 2, 'No Category + No Wishlist', ''),
(347, 3, 'No Category + No Wishlist', ''),
(347, 5, 'No Category + No Wishlist', ''),
(348, 1, 'Product With Video', ''),
(348, 2, 'Product With Video', ''),
(348, 3, 'Product With Video', ''),
(348, 5, 'Product With Video', ''),
(349, 1, 'Product with Custom Tab', ''),
(349, 2, 'Product with Custom Tab', ''),
(349, 3, 'Product with Custom Tab', ''),
(349, 5, 'Product with Custom Tab', ''),
(350, 1, 'Add To Cart', ''),
(350, 2, 'Add To Cart', ''),
(350, 3, 'Add To Cart', ''),
(350, 5, 'Add To Cart', ''),
(351, 1, 'Ajax Default', ''),
(351, 2, 'Ajax Default', ''),
(351, 3, 'Ajax Default', ''),
(351, 5, 'Ajax Default', ''),
(352, 1, 'Ajax + Preview Popup', ''),
(352, 2, 'Ajax + Preview Popup', ''),
(352, 3, 'Ajax + Preview Popup', ''),
(352, 5, 'Ajax + Preview Popup', ''),
(353, 1, 'Ajax + Image Moving', ''),
(353, 2, 'Ajax + Image Moving', ''),
(353, 3, 'Ajax + Image Moving', ''),
(353, 5, 'Ajax + Image Moving', ''),
(354, 1, 'Ajax + Cart at Bottom', ''),
(354, 2, 'Ajax + Cart at Bottom', ''),
(354, 3, 'Ajax + Cart at Bottom', ''),
(354, 5, 'Ajax + Cart at Bottom', ''),
(173, 5, 'Elements', '');
";
