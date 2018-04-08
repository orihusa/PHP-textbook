CREATE TABLE `my_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `my_items` ADD `keyword` TEXT;
ALTER TABLE `my_items` ADD `sales` INT;
ALTER TABLE `my_items` ADD `created` DATETIME;
ALTER TABLE `my_items` ADD `modified` TIMESTAMP;
ALTER TABLE `my_items` ADD `maker_id` INT AFTER `id`;


insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (1,'いちご',180,'赤い、甘い、ケーキ',5,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (2,'りんご',90,'丸い、赤い、パイ',20,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (1,'バナナ',120,'パック、甘い、黄色',16,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (3,'ブルーベリー',200,'袋入り、青い、眼精疲労',8,'2018/04/02','2018/04/02');
