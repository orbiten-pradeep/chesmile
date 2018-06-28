CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `slug_status` int(11) DEFAULT '0',
  `active` int(50) NOT NULL DEFAULT '0',
  `categories_id` int(11) NOT NULL,
  `descriptioin` text,
  `descriptioin_more` text,
  `register_online` tinyint(1) NOT NULL DEFAULT '0',
  `booking_online` tinyint(1) NOT NULL DEFAULT '0',
  `price` varchar(255) DEFAULT NULL,
  `commamount` varchar(200) NOT NULL DEFAULT '0',
  `settamount` varchar(200) NOT NULL DEFAULT '0',
  `todate` date DEFAULT NULL,
  `totime` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `note` text,
  `google_map` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `OrganizersName` varchar(255) DEFAULT NULL,
  `OrganizersLogo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;