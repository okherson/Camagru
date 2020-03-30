
-- -- CREATE DATABASE IF NOT EXISTS lgzsshwj_camagru CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- -- CREATE TABLE IF NOT EXISTS `lgzsshwj_camagru`.`users` ( `id` INT(5) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(100) NOT NULL , `second_name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- CREATE TABLE IF NOT EXISTS `lgzsshwj_camagru`.`message` ( `id` INT(5) NOT NULL AUTO_INCREMENT , `sender_id` INT(5) NOT NULL , `reciver_id` INT(5) NOT NULL , `message` VARCHAR(1000) NOT NULL , `datetime` DATETIME NOT NULL , `readed` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- CREATE TABLE IF NOT EXISTS `lgzsshwj_camagru`.`post` ( `id` INT NOT NULL AUTO_INCREMENT , `creator_user_id` INT(5) NOT NULL , `img_location` VARCHAR(100) NOT NULL , `comment` VARCHAR(1000) NOT NULL , `datetime` DATETIME NOT NULL , `likes_num` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- CREATE TABLE IF NOT EXISTS `lgzsshwj_camagru`.`post_likes` ( `id` INT NOT NULL AUTO_INCREMENT , `post_id` INT(5) NOT NULL , `liked_user_id` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;




CREATE TABLE IF NOT EXISTS `users` (
									`id` INT(5) NOT NULL AUTO_INCREMENT, 
									`first_name` VARCHAR(100) NOT NULL,
									`second_name` VARCHAR(100) NOT NULL,
									`email` VARCHAR(100) NOT NULL,
									`password` VARCHAR(64) NOT NULL,
									PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `message` (
									`id` INT(5) NOT NULL AUTO_INCREMENT,
									`sender_id` INT(5) NOT NULL , `reciver_id` INT(5) NOT NULL,
									`message` VARCHAR(1000) NOT NULL, 
									`datetime` DATETIME NOT NULL ,
									`readed` BOOLEAN NOT NULL ,
									PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `post` (
									`id` INT NOT NULL AUTO_INCREMENT,
									`creator_user_id` INT(5) NOT NULL,
									`img_location` VARCHAR(100) NOT NULL,
									`comment` VARCHAR(1000) NOT NULL,
									`datetime` DATETIME NOT NULL,
									`likes_num` INT(5) NOT NULL,
									PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `post_likes` (
									`id` INT NOT NULL AUTO_INCREMENT,
									`post_id` INT(5) NOT NULL,
									`liked_user_id` INT(5) NOT NULL,
									PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
