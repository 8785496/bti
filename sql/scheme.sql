CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) DEFAULT NULL,
  `type_object` varchar(64) DEFAULT NULL,
  `type_work` varchar(64) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `target` varchar(64) DEFAULT NULL,
  `adress` varchar(64) DEFAULT NULL,
  `size` varchar(32) DEFAULT NULL,
  `description` text,
  `folder` varchar(32) NOT NULL,
  `files` text,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `uri` varchar(64) NOT NULL,
  `agent` text NOT NULL,
  `referer` text,
  `time` datetime NOT NULL,
  `location` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
