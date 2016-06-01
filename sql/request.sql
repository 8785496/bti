CREATE TABLE `request` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
