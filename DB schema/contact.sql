CREATE TABLE IF NOT EXISTS `contact` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `Name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `comments` text NOT NULL,
 `reply` text NOT NULL,
 `status` varchar(200) NOT NULL DEFAULT '0',
 `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
