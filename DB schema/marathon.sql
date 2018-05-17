CREATE TABLE IF NOT EXISTS `marathon` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `events_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `txnid` text,
  `amount` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `KM` varchar(255) DEFAULT NULL,
  `TSHIRT` varchar(255) DEFAULT NULL,
  `activation_key` varchar(255) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  `Created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=378 DEFAULT CHARSET=utf8;