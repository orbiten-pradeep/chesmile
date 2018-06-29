CREATE TABLE IF NOT EXISTS `galaries` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `events_id` int(11) NOT NULL,
 `galary` varchar(255) NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
