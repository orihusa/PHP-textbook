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


insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (1,'������',180,'�Ԃ��A�Â��A�P�[�L',5,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (2,'���',90,'�ۂ��A�Ԃ��A�p�C',20,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (1,'�o�i�i',120,'�p�b�N�A�Â��A���F',16,'2018/04/02','2018/04/02');
insert into my_items(maker_id,item_name,price,keyword,sales,created,modified) values (3,'�u���[�x���[',200,'�ܓ���A���A�ᐸ��J',8,'2018/04/02','2018/04/02');
