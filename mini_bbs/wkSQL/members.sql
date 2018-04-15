CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `password` varchar(100),
  `picture` varchar(255),
  `created` DATETIME,
  `modified` TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
