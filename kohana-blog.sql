use `kohana_blog`;

CREATE TABLE articles (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` varchar(200) DEFAULT NULL,
	`content` text,
	PRIMARY KEY(`id`)
);