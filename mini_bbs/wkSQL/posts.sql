CREATE TABLE `posts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `message` TEXT,
  `member_id` INT,
  `reply_post_id` INT,
  `created` DATETIME,
  `modified` TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
