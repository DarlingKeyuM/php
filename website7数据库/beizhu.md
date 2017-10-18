###INSERT INTO `customers` (`id`, `name`, `email`, `address`, `city`, `state`) VALUES (NULL, '张然', 'zhangran@gmail.com', '定泗路', '北京', '昌平区');

###“DELETE FROM `customers` WHERE `customers`.`id` = 5”

###UPDATE `customers` SET `name` = '张然', `address` = '定泗路', `city` = '北京', `state` = '西城区' WHERE `customers`.`id` = 1;

###SELECT * FROM `customers`
###SELECT * FROM `customers` WHERE city="北京"