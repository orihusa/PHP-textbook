CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11),
  `count` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


insert into carts(item_id, count) values (1,5);
insert into carts(item_id, count) values (2,3);
insert into carts(item_id, count) values (3,1);
insert into carts(item_id, count) values (1,3);
insert into carts(item_id, count) values (3,2);
insert into carts(item_id, count) values (1,2);
